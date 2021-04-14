<div class="container">
	<div class="col-xs-12">
		<?php
		if (!empty($success_msg)) {
			echo '<div class="alert alert-success">' . $success_msg . '</div>';
		} elseif (!empty($error_msg)) {
			echo '<div class="alert alert-danger">' . $error_msg . '</div>';
		}
		?>
	</div>

	<div class="row">
		<?php if (!empty($post)): foreach ($post as $ps): ?>
		<div class="panel panel-default">
			<div class="panel-heading"><h2>Editácia vozidla</h2>
				<a href="<?php echo site_url('auto/'); ?>"
				   class="glyphicon glyphicon-arrow-left pull-right"></a></div>
			<div class="panel-body">
				<form method="post" action="" class="form">
					<div class="form-group">
						<label for="title">Model vozidla</label>
						<input type="text" class="form-control"
							   name="model" placeholder="Zadajte počet miest!" value="<?php echo
						!empty($ps['Model']) ? $ps['Model'] : ''; ?>">

					</div>
					<div class="form-group">
						<label for="title">Evidenčné číslo(ŠPZ)</label>
						<input type="text" class="form-control"
							   name="spz" placeholder="Zadajte SPZ!" value="<?php echo
						!empty($ps['SPZ']) ? $ps['SPZ'] : ''; ?>">

					</div>
					<div class="form-group">
						<label for="title">Počet najazdených kilometrov</label>
						<input type="text" class="form-control"
							   name="pocetkm" placeholder="Zadajte Model!" value="<?php echo
						!empty($ps['Pocet_km']) ? $ps['Pocet_km'] : ''; ?>">
						<?php endforeach; else: ?>
						<?php endif; ?>

					</div>
					<input type="submit" name="postSubmit" class="btn
btn-primary" value="Odoslať"/>
				</form>
			</div>
		</div>
	</div>
</div>
