<div class="content-wrapper">

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header">
						<h1 class="panel-heading">Tabuľka Jedál
							<a href="<?php echo
							site_url('jedlo/add/'); ?>" class="glyphicon glyphicon-plus pull-right"
							   style="color: red"></a>
						</h1>
					</div>
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th width="7%">ID</th>
								<th width="15%">Druh jedla</th>
								<th width="15%">Názov jedla</th>
								<th width="7%">Počet gramov/l</th>
								<th width="51%">Popis</th>
								<th width="5%">Cena</th>
								<th width="20%">Operácie</th>
							</tr>
							</thead>
							<tbody id="userData">
							<?php if (!empty($jedlo)): foreach ($jedlo as $je): ?>
								<tr>
									<td><?php echo '#' . $je['id']; ?></td>
									<td><?php echo $je['popis']; ?></td>
									<td><?php echo $je['Nazov_jedla']; ?></td>
									<td><?php echo $je['Pocet_gramov']; ?></td>
									<td><?php echo $je['Popis']; ?></td>
									<td><?php echo $je['Cena']; ?></td>
									<td>
										<a href="<?php echo
										site_url('jedlo/view/' . $je['id']); ?>"
										   class="glyphicon glyphicon-eye-open" style="color: red"></a>
										<a href="<?php echo
										site_url('jedlo/edit/' . $je['id']); ?>"
										   class="glyphicon glyphicon-edit" style="color:red"></a>
										<a href="<?php echo
										site_url('jedlo/delete/' . $je['id']); ?>"
										   class="glyphicon glyphicon-trash" style="color: red"
										   onclick="return confirm('Naozaj si prajete vymazať zvolený záznam??')"></a>


									</td>
								</tr>
							<?php endforeach; else: ?>
								<tr>
									<td colspan="4">Nenašli sa žiadne záznamy
									</td>
								</tr>
							<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
