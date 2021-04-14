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
			<div class="panel-heading"><h2>Pridanie zamestnanca</h2>
				<a href="<?php echo site_url('zamestnanci/'); ?>"
				   class="glyphicon glyphicon-arrow-left pull-right"></a></div>
			<div class="panel-body">
				<form method="post" action="" class="form">
					<div class="form-group">
						<label for="title">Meno zamestnanca</label>
						<input type="text" class="form-control"
							   name="Menp" placeholder="Zadajte meno zamestnanca!" value="<?php echo
						!empty($ps['Meno']) ? $ps['Meno'] : ''; ?>">

					</div>
					<div class="form-group">
						<label for="title">Pozícia zamestnanca</label>
						<input type="text" class="form-control"
							   name="Pozícia" placeholder="Zadajte pozíciu!" value="<?php echo
						!empty($ps['Pozícia']) ? $ps['Pozícia'] : ''; ?>">

					</div>
					<div class="form-group">
						<label for="title">Plat zamestnanca</label>
						<input type="text" class="form-control"
							   name="Plat" placeholder="Zadajte výšku platu!" value="<?php echo
						!empty($ps['Plat']) ? $ps['Plat'] : ''; ?>">
					</div>
					<input type="submit" name="postSubmit" class="btn
btn-primary" value="Odoslať"/>
				</form>
			</div>
		</div>
	</div>
</div>
