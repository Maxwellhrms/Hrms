<?php
$totalPolicies   = count($UsersData);
$acknowledgedIds = isset($acknowledged) ? $acknowledged : [];
?>

<style>
	.policy-shell{max-width:1400px;margin:40px auto;padding:0 32px;height:calc(100vh - 100px);}
	.policy-card{height:100%;display:flex;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 12px 36px rgba(0,0,0,.06);}

	/* LEFT PANEL */
	.policy-nav{width:34%;padding:28px;background:#fafbfd;border-right:1px solid #edf0f4;display:flex;flex-direction:column;}
	.policy-nav h4{margin-bottom:6px;font-weight:700;}
	.sub-text{font-size:13px;color:#6b7280;margin-bottom:20px;}
	.policy-list{flex:1;overflow-y:auto;padding-right:8px;min-height:0;}

	.policy-btn{width:100%;padding:14px 18px;border:none;border-radius:999px;background:#eef5ff;color:#113a73;font-weight:600;margin-bottom:14px;text-align:left;cursor:pointer; transition: all 0.2s;}
	.policy-btn:hover { background: #dce9fc; }

	/* Active State */
	.policy-btn.active{background:#ff6b6b;color:#fff;}

	/* Acknowledged State - REMOVED pointer-events:none so they remain clickable */
	.policy-btn.acknowledged{background:#e6f9ee;color:#1f7a3f;}
	.policy-btn.acknowledged.active{background:#1f7a3f;color:#fff;} /* Dark green if active & ack */

	/* RIGHT PANEL */
	.policy-view{width:66%;padding:32px 44px;display:flex;flex-direction:column;height:100%;overflow:hidden;}
	.policy-title{font-size:24px;font-weight:700;}
	.progress-wrap{margin:18px 0 26px;}
	.progress-bar{height:8px;background:#e6e8ec;border-radius:8px;overflow:hidden;}
	.progress-fill{height:100%;background:#ff6b6b;width:0%;transition:width .4s ease;}
	.progress-text{margin-top:6px;font-size:13px;color:#6b7280;}
	.policy-content{flex:1;overflow-y:auto;padding-right:12px;line-height:1.7;}

	.policy-footer{position:sticky;bottom:0;background:#fff;padding:16px 0;border-top:1px solid #edf0f4;display:flex;justify-content:space-between;align-items:center;min-height: 80px;}
	.policy-footer button{background:#ff6b6b;border:none;color:#fff;padding:10px 22px;border-radius:999px;font-weight:700;cursor:pointer;}
	.policy-footer button:disabled{background:#f3a5a5;cursor:not-allowed;}

	.success-badge{display:none;background:#e9fff1;color:#1f7a3f;font-size:13px;padding:6px 10px;border-radius:6px;margin-left:12px;}
</style>

<div class="policy-shell">
	<div class="policy-card">

		<div class="policy-nav">
			<h4>Employee Policies</h4>
			<div class="sub-text">Read and acknowledge each policy</div>

			<div class="policy-list">
				<?php foreach($UsersData as $i=>$p):
					$isAck = in_array($p->id, $acknowledgedIds);
					?>
					<button
							class="policy-btn <?= $isAck ? 'acknowledged' : '' ?>"
							data-index="<?= $i ?>"
							data-id="<?= $p->id ?>"
							data-title="<?= htmlspecialchars($p->title, ENT_QUOTES) ?>"
							data-content="<?= htmlspecialchars($p->description, ENT_QUOTES) ?>"
					>
						<?= $isAck ? '✓ ' : '' ?><?= htmlspecialchars($p->title) ?>
					</button>
				<?php endforeach; ?>
			</div>
		</div>

		<div class="policy-view">

			<div class="policy-title" id="policyTitle"></div>

			<div class="progress-wrap">
				<div class="progress-bar">
					<div class="progress-fill" id="progressFill"></div>
				</div>
				<div class="progress-text" id="progressText"></div>
			</div>

			<div class="policy-content" id="policyContent"></div>

			<div class="policy-footer">
				<div id="actionArea" style="display:flex; justify-content:space-between; width:100%; align-items:center;">
					<label>
						<input type="checkbox" id="ackCheck" disabled>
						I have read and understood this policy
					</label>
					<div>
						<button id="ackBtn" disabled>Read full policy to continue</button>
						<span class="success-badge" id="successBadge">Acknowledged</span>
					</div>
				</div>

				<div id="alreadyAckMsg" style="display:none; width:100%; text-align:center; color:#1f7a3f; font-weight:600; padding:10px; background:#e9fff1; border-radius:8px;">
					✅ You have already acknowledged this policy.
				</div>

			</div>
		</div>
	</div>
</div>

<script>
	$(function(){

		// 1. Force all IDs to Integers to prevent mismatch errors
		const rawAckIds = <?= json_encode($acknowledgedIds) ?>;
		const acknowledged = new Set(rawAckIds.map(id => parseInt(id)));
		const total = <?= (int)$totalPolicies ?>;
		const items = $('.policy-btn');

		let canAcknowledge = false;
		let current = 0;

		function updateProgress(){
			const done = acknowledged.size;
			const percent = total > 0 ? (done/total)*100 : 0;
			$('#progressFill').css('width', percent+'%');
			$('#progressText').text(done+' / '+total+' acknowledged');
		}

		function loadPolicy(index){
			const btn = items.eq(index);
			const policyId = parseInt(btn.data('id')); // Force Integer

			items.removeClass('active');
			btn.addClass('active');
			current = index;

			$('#policyTitle').text(btn.data('title'));
			$('#policyContent').html(btn.data('content')).scrollTop(0);

			// Logic: Is this specific policy ID in our acknowledged Set?
			if(acknowledged.has(policyId)){
				// ALREADY DONE: Show message, hide buttons
				$('#actionArea').hide();
				$('#alreadyAckMsg').show();
				canAcknowledge = true;
			} else {
				// PENDING: Show buttons, hide message
				$('#actionArea').css('display', 'flex');
				$('#alreadyAckMsg').hide();

				// Reset "Read" state
				canAcknowledge = false;
				$('#ackCheck').prop({checked:false, disabled:true});
				$('#ackBtn').show().prop('disabled',true).text('Read full policy to continue');
				$('#successBadge').hide();
			}
		}

		// --- SCROLL DETECTION ---
		$('#policyContent').on('scroll',function(){
			if(canAcknowledge) return;
			// Check if scrolled to bottom (with 5px buffer)
			if(this.scrollTop + this.clientHeight >= this.scrollHeight - 5){
				canAcknowledge = true;
				$('#ackCheck').prop('disabled',false);
				$('#ackBtn').text('Acknowledge & Continue');
			}
		});

		// --- CHECKBOX TOGGLE ---
		$('#ackCheck').on('change', function(){
			$('#ackBtn').prop('disabled', !$(this).is(':checked'));
		});

		// --- SIDEBAR CLICK ---
		items.on('click',function(){
			loadPolicy($(this).data('index'));
		});

		// --- ACKNOWLEDGE BUTTON CLICK ---
		$('#ackBtn').on('click',function(){

			if(!canAcknowledge || !$('#ackCheck').is(':checked')){
				alert('Please read and accept this policy.');
				return;
			}

			const btn = items.eq(current);
			const policyId = parseInt(btn.data('id')); // Force Integer

			$('#ackBtn').prop('disabled',true).text('Saving...');
			$('#ackCheck').prop('disabled',true);

			$.post("<?= site_url('acknowledge') ?>", {policy_id: policyId}, function(res){

				if(res.status==='success' || res.status==='already_acknowledged'){

					// 1. Update State
					acknowledged.add(policyId);
					updateProgress();

					// 2. Visual Updates
					btn.addClass('acknowledged');
					$('#successBadge').show();
					$('#ackBtn').hide();

					setTimeout(function(){

						// 3. CRITICAL: Check if ALL are done
						if(acknowledged.size >= total){
							window.location.href = "<?= site_url('verifylogin') ?>";
							return;
						}

						// 4. Find next pending policy
						// We explicitly parse IDs to integers to ensure we don't accidentally find a "string" ID
						let next = items.filter(function(){
							const pId = parseInt($(this).data('id'));
							return !acknowledged.has(pId);
						}).first();

						if(next.length > 0){
							loadPolicy(next.data('index'));
						} else {
							// Fallback if filter fails but count is high
							window.location.href = "<?= site_url('verifylogin') ?>";
						}
					}, 800);
				}
			},'json');
		});

		// --- INITIAL LOAD LOGIC ---

		// 1. Find the first pending item (Integer comparison)
		let firstPending = items.filter(function(){
			return !acknowledged.has(parseInt($(this).data('id')));
		}).first();

		// 2. If valid pending item exists, open it.
		if(firstPending.length > 0){
			loadPolicy(firstPending.data('index'));
		} else {
			// 3. If NO pending items, redirect immediately
			window.location.href = "<?= site_url('verifylogin') ?>";
		}

		updateProgress();

	});
</script>
