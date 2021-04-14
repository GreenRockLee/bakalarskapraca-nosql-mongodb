<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading"><h2>Detaily Auta</h2> <a href="<?php
				echo site_url('auto/'); ?>" class="glyphicon glyphicon-arrow-left
pull-right-up"></a></div>
			<div class="panel-body">
				<div class="form-group"><?php if (!empty($auto)): foreach ($auto as $au): ?>
					<label>Počet Miest:</label>
					<p><?php echo
						!empty($au['Model']) ? $au['Model']
							: ''; ?></p>
				</div>
				<div class="form-group">
					<label>SPZ:</label>
					<p><?php echo
						!empty($au['SPZ']) ? $au['SPZ'] : ''; ?> </p>
				</div>
				<div class="form-group">
					<label>Model:</label>
					<p><?php echo
						!empty($au['Pocet_km']) ? $au['Pocet_km'] : ''; ?> </p>

				</div>
			</div>
		</div>
	</div>
</div>
<?php endforeach; else: ?>
<?php endif; ?>
