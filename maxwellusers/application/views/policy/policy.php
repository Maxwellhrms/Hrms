<?php
$totalPolicies   = count($UsersData);
$acknowledgedIds = isset($acknowledged) ? $acknowledged : [];
?>

<style>
	.policy-shell{max-width:1400px;margin:40px auto;padding:0 32px;height:calc(100vh - 100px);}
	.policy-card{height:100%;display:flex;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 12px 36px rgba(0,0,0,.06);}
	.policy-nav{width:34%;padding:28px;background:#fafbfd;border-right:1px solid #edf0f4;display:flex;flex-direction:column;}
	.policy-nav h4{margin-bottom:6px;font-weight:700;}
	.sub-text{font-size:13px;color:#6b7280;margin-bottom:20px;}
	.policy-list{flex:1;overflow-y:auto;padding-right:8px;min-height:0;}
	.policy-btn{width:100%;padding:14px 18px;border:none;border-radius:999px;background:#eef5ff;color:#113a73;font-weight:600;margin-bottom:14px;text-align:left;cursor:pointer;}
	.policy-btn.active{background:#ff6b6b;color:#fff;}
	.policy-btn.acknowledged{background:#e6f9ee;color:#1f7a3f;pointer-events:none;}
	.policy-view{width:66%;padding:32px 44px;display:flex;flex-direction:column;height:100%;overflow:hidden;}
	.policy-title{font-size:24px;font-weight:700;}
	.progress-wrap{margin:18px 0 26px;}
	.progress-bar{height:8px;background:#e6e8ec;border-radius:8px;overflow:hidden;}
	.progress-fill{height:100%;background:#ff6b6b;width:0%;transition:width .4s ease;}
	.progress-text{margin-top:6px;font-size:13px;color:#6b7280;}
	.policy-content{flex:1;overflow-y:auto;padding-right:12px;line-height:1.7;}
	.policy-footer{position:sticky;bottom:0;background:#fff;padding:16px 0;border-top:1px solid #edf0f4;display:flex;justify-content:space-between;align-items:center;}
	.policy-footer button{background:#ff6b6b;border:none;color:#fff;padding:10px 22px;border-radius:999px;font-weight:700;}
	.policy-footer button:disabled{background:#f3a5a5;}
	.success-badge{display:none;background:#e9fff1;color:#1f7a3f;font-size:13px;padding:6px 10px;border-radius:6px;margin-left:12px;}
</style>

<div class="policy-shell">
	<div class="policy-card">

		<!-- LEFT -->
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
							<?= $isAck ? 'disabled' : '' ?>
					>
						<?= htmlspecialchars($p->title) ?>
					</button>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- RIGHT -->
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
				<label>
					<input type="checkbox" id="ackCheck" disabled>
					I have read and understood this policy
				</label>

				<div>
					<button id="ackBtn" disabled>Read full policy to continue</button>
					<span class="success-badge" id="successBadge">Acknowledged</span>
				</div>

				<div id="alreadyAckMsg" style="display:none;color:#1f7a3f;font-size:14px;">
					✅ This policy has already been acknowledged.
				</div>

			</div>
		</div>
	</div>
</div>

<script>
	$(function(){

		const total = <?= (int)$totalPolicies ?>;
		const acknowledged = new Set(<?= json_encode($acknowledgedIds) ?>);
		const items = $('.policy-btn');
		let canAcknowledge = false;

// ✅ FIND FIRST PENDING POLICY (IMPORTANT FIX)
		let firstPending = items.filter(function(){
			return !acknowledged.has($(this).data('id'));
		}).first();

		if(firstPending.length === 0){
			// ✅ ALL POLICIES ALREADY DONE
			window.location.href = "<?= site_url('VerifyLogin') ?>";
			return;
		}

		let current = firstPending.data('index');

		function updateProgress(){
			const done = acknowledged.size;
			$('#progressFill').css('width',(done/total)*100+'%');
			$('#progressText').text(done+' / '+total+' acknowledged');
		}

		function resetFooter(){
			canAcknowledge=false;
			$('#ackCheck').prop({checked:false,disabled:true}).show();
			$('#ackBtn').prop('disabled',true).text('Read full policy to continue').show();
			$('#alreadyAckMsg,#successBadge').hide();
		}

		function loadPolicy(index){
			const btn = items.eq(index);
			items.removeClass('active');
			btn.addClass('active');
			current=index;

			$('#policyTitle').text(btn.data('title'));
			$('#policyContent').html(btn.data('content')).scrollTop(0);
			resetFooter();

			if(acknowledged.has(btn.data('id'))){
				$('#ackCheck,#ackBtn').hide();
				$('#alreadyAckMsg').show();
			}
		}

		updateProgress();
		loadPolicy(current);

		items.on('click',function(){
			if($(this).hasClass('acknowledged')) return;
			loadPolicy($(this).data('index'));
		});

		$('#policyContent').on('scroll',function(){
			if(canAcknowledge) return;
			if(this.scrollTop + this.clientHeight >= this.scrollHeight-2){
				canAcknowledge=true;
				$('#ackCheck,#ackBtn').prop('disabled',false);
				$('#ackBtn').text('Acknowledge & Continue');
			}
		});

		$('#ackBtn').on('click',function(){

			if(!canAcknowledge || !$('#ackCheck').is(':checked')){
				alert('Please read and accept this policy.');
				return;
			}

			const btn = items.eq(current);
			const policyId = btn.data('id');

			$('#ackBtn').prop('disabled',true).text('Saving...');
			$('#ackCheck').prop('disabled',true);

			$.post("<?= site_url('acknowledge') ?>",{policy_id:policyId},function(res){

				if(res.status==='success' || res.status==='already_acknowledged'){
					acknowledged.add(policyId);
					updateProgress();

					btn.addClass('acknowledged').removeClass('active').prop('disabled',true);
					$('#successBadge').show();

					setTimeout(function(){
						let next = items.filter(function(){
							return !acknowledged.has($(this).data('id'));
						}).first();

						if(next.length){
							loadPolicy(next.data('index'));
						}else{
							// ✅ FINAL REDIRECT
							window.location.href = "<?= site_url('VerifyLogin') ?>";
						}
					},600);
				}

			},'json');
		});

	});
</script>
