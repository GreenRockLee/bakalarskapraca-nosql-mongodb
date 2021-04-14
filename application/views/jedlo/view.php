<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading"><h2>Detaily Jedla</h2> <a href="<?php
				echo site_url('jedlo/'); ?>" class="glyphicon glyphicon-arrow-left
pull-right-up"></a></div>
			<div class="panel-body">
				<div class="form-group"><?php if (!empty($jedlo)): foreach ($jedlo as $je): ?>
					<label>Druh jedla:</label>
					<p><?php echo
						!empty($je['popis']) ? $je['popis']
							: ''; ?></p>
				</div>
				<div class="form-group">
					<label>Nazov jedla:</label>
					<p><?php echo
						!empty($je['Nazov_jedla']) ? $je['Nazov_jedla'] : ''; ?> </p>
				</div>
				<div class="form-group">
					<label>Pocet gramov:</label>
					<p><?php echo
						!empty($je['Pocet_gramov']) ? $je['Pocet_gramov'] : ''; ?> </p>

				</div>
				<div class="form-group">
					<label>Popis:</label>
					<p><?php echo
						!empty($je['Popis']) ? $je['Popis'] : ''; ?> </p>

				</div>
				<div class="form-group">
					<label>Cena:</label>
					<p><?php echo
						!empty($je['Cena']) ? $je['Cena'] : ''; ?> </p>

				</div>
			</div>
		</div>
	</div>
</div>
<?php endforeach; else: ?>
<?php endif; ?>
