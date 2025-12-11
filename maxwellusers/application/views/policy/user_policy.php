<?php
$totalPolicies = count($UsersData);
$acknowledgedIds = isset($acknowledged) ? $acknowledged : [];
?>

<style>
	.policy-shell {
		max-width: 1200px;
		margin: 40px auto;
		padding: 0 32px;
		height: calc(100vh - 100px);
	}

	.policy-card {
		height: 100%;
		display: flex;
		background: #fff;
		border-radius: 16px;
		overflow: hidden;
		box-shadow: 0 12px 36px rgba(0, 0, 0, .06);
	}

	.policy-nav {
		width: 34%;
		padding: 28px;
		background: #fafbfd;
		border-right: 1px solid #edf0f4;
		display: flex;
		flex-direction: column;
	}

	.policy-nav h4 {
		margin-bottom: 6px;
		font-weight: 700;
	}

	.sub-text {
		font-size: 13px;
		color: #6b7280;
		margin-bottom: 20px;
	}

	.policy-list {
		flex: 1;
		overflow-y: auto;
		padding-right: 8px;
		min-height: 0;
	}

	.policy-btn {
		width: 100%;
		padding: 14px 18px;
		border: none;
		border-radius: 999px;
		background: #eef5ff;
		color: #113a73;
		font-weight: 600;
		margin-bottom: 14px;
		text-align: left;
		cursor: pointer;
	}

	.policy-btn.active {
		background: #ff6b6b;
		color: #fff;
	}

	.policy-btn.acknowledged {
		background: #e6f9ee;
		color: #1f7a3f;
	}

	.policy-view {
		width: 66%;
		padding: 32px 44px;
		display: flex;
		flex-direction: column;
		height: 100%;
		overflow: hidden;
	}

	.policy-title {
		font-size: 24px;
		font-weight: 700;
	}

	.progress-wrap {
		margin: 18px 0 26px;
	}

	.progress-bar {
		height: 8px;
		background: #e6e8ec;
		border-radius: 8px;
		overflow: hidden;
	}

	.progress-fill {
		height: 100%;
		background: #ff6b6b;
		width: 0%;
		transition: width .4s ease;
	}

	.progress-text {
		margin-top: 6px;
		font-size: 13px;
		color: #6b7280;
	}

	.policy-content {
		flex: 1;
		overflow-y: auto;
		padding-right: 12px;
		line-height: 1.7;
	}
</style>

<div class="policy-shell">
	<div class="policy-card">

		<!-- LEFT SIDE -->
		<div class="policy-nav">
			<h4>Employee Policies</h4>
			<div class="sub-text">Read each policy</div>

			<div class="policy-list">
				<?php foreach ($UsersData as $i => $p):
					$isAck = in_array($p->id, $acknowledgedIds);
					?>
					<button
							class="policy-btn <?= $isAck ? 'acknowledged' : '' ?>"
							data-index="<?= $i ?>"
							data-id="<?= $p->id ?>"
							data-title="<?= htmlspecialchars($p->title, ENT_QUOTES) ?>"
							data-content="<?= htmlspecialchars($p->description, ENT_QUOTES) ?>"
					>
						<?= htmlspecialchars($p->title) ?>
					</button>
				<?php endforeach; ?>
			</div>
		</div>

		<!-- RIGHT SIDE -->
		<div class="policy-view">
			<div class="policy-title" id="policyTitle"></div>

			<div class="progress-wrap">
				<div class="progress-bar">
					<div class="progress-fill" id="progressFill"></div>
				</div>
				<div class="progress-text" id="progressText"></div>
			</div>

			<div class="policy-content" id="policyContent"></div>
		</div>
	</div>
</div>

<script>
	$(function () {

		const total = <?= (int)$totalPolicies ?>;
		const acknowledged = new Set(<?= json_encode($acknowledgedIds) ?>);
		const items = $('.policy-btn');

		// Find first pending policy
		let firstPending = items.filter(function () {
			return !acknowledged.has($(this).data('id'));
		}).first();

		// All acknowledged → full redirect
		if (firstPending.length === 0) {
			window.location.href = "<?= site_url('VerifyLogin') ?>";
			return;
		}

		let current = firstPending.data('index');

		function updateProgress() {
			const done = acknowledged.size;
			$('#progressFill').css('width', (done / total) * 100 + '%');
			$('#progressText').text(done + ' / ' + total + ' acknowledged');
		}

		function loadPolicy(index) {
			const btn = items.eq(index);
			items.removeClass('active');
			btn.addClass('active');

			$('#policyTitle').text(btn.data('title'));
			$('#policyContent').html(btn.data('content')).scrollTop(0);
		}

		updateProgress();
		loadPolicy(current);

		// Enable all clicks (acknowledged included)
		items.on('click', function () {
			loadPolicy($(this).data('index'));
		});

	});
</script>
