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
			<div class="panel-heading"><h2>Úprava záznamu jedla</h2>
				<a href="<?php echo site_url('jedlo/'); ?>"
				   class="glyphicon glyphicon-arrow-left pull-right"></a></div>
			<div class="panel-body">
				<form method="post" action="" class="form">
					<div class="form-group">
						<label for="title">popis jedla</label>
						<input type="text" class="form-control"
							   name="popis" placeholder="Zadajte popis jedla" value="<?php echo
						!empty($ps['popis']) ? $ps['popis'] : ''; ?>">

					</div>
					<div class="form-group">
						<label for="title">Názov jedla</label>
						<input type="text" class="form-control"
							   name="Nazov_jedla" placeholder="Zadajte názov jedla!" value="<?php echo
						!empty($ps['Nazov_jedla']) ? $ps['Nazov_jedla'] : ''; ?>">

					</div>
					<div class="form-group">
						<label for="title">Počet gramov</label>
						<input type="text" class="form-control"
							   name="Pocet_gramov" placeholder="Zadajte počet gramov!" value="<?php echo
						!empty($ps['Pocet_gramov']) ? $ps['Pocet_gramov'] : ''; ?>">
					</div>
					<div class="form-group">
						<label for="title">Popis jedla</label>
						<input type="text" class="form-control"
							   name="Popis" placeholder="Zadajte popis jedla!" value="<?php echo
						!empty($ps['Popis']) ? $ps['Popis'] : ''; ?>">
					</div>
					<div class="form-group">
						<label for="title">Cena jedla</label>
						<input type="text" class="form-control"
							   name="Cena" placeholder="Zadajte požadovanú cenu!" value="<?php echo
						!empty($ps['Cena']) ? $ps['Cena'] : ''; ?>">
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
