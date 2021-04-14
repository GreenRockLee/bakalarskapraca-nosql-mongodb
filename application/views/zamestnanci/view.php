<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading"><h2>Detaily Zamestnanca</h2> <a href="<?php
				echo site_url('zamestnanci/'); ?>" class="glyphicon glyphicon-arrow-left
pull-right-up"></a></div>
			<div class="panel-body">
				<div class="form-group"><?php if (!empty($zamestnanci)): foreach ($zamestnanci as $za): ?>
					<label>Meno:</label>
					<p><?php echo
						!empty($za['Meno']) ? $za['Meno']
							: ''; ?></p>
				</div>
				<div class="form-group">
					<label>Pozícia:</label>
					<p><?php echo
						!empty($za['Pozícia']) ? $za['Pozícia'] : ''; ?> </p>
				</div>
				<div class="form-group">
					<label>Model:</label>
					<p><?php echo
						!empty($za['Plat']) ? $za['Plat'] : ''; ?> </p>

				</div>
			</div>
		</div>
	</div>
</div>
<?php endforeach; else: ?>
<?php endif; ?>
