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
		<div class="panel panel-default">
			<div class="panel-heading"><h2>Pridanie auta</h2>
				<a href="<?php echo site_url('auto/'); ?>"
				   class="glyphicon glyphicon-arrow-left pull-right"></a></div>
			<div class="panel-body">
				<form method="post" action="" class="form">
					<div class="form-group">
						<label for="title">Model vozidla</label>
						<input type="text" class="form-control"
							   name="model" placeholder="Zadajte model vozidla!" value="<?php echo
						!empty($ps['Model']) ? $ps['Model'] : ''; ?>">

					</div>
					<div class="form-group">
						<label for="title">Evidenčné číslo(ŠPZ)</label>
						<input type="text" class="form-control"
							   name="spz" placeholder="Zadajte evidenčné číslo(ŠPZ) vozdila!" value="<?php echo
						!empty($ps['SPZ']) ? $ps['SPZ'] : ''; ?>">

					</div>
					<div class="form-group">
						<label for="title">Počet najazdených kilometrov</label>
						<input type="text" class="form-control"
							   name="pocetkm" placeholder="Zadajte počet najazdených kilometrov!" value="<?php echo
						!empty($ps['Pocet_km']) ? $ps['Pocet_km'] : ''; ?>">
					</div>
					<input type="submit" name="postSubmit" class="btn
btn-primary" value="Odoslať"/>
				</form>
			</div>
		</div>
	</div>
</div>
