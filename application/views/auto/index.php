<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header">
						<h1 class="panel-heading">Tabuľka Áut
							<a href="<?php echo
							site_url('auto/add/'); ?>" class="glyphicon glyphicon-plus pull-right"
							   style="color: red"></a>
						</h1>
					</div>
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th width="10%">ID</th>
								<th width="25%">Model vozidla</th>
								<th width="25%">SPZ</th>
								<th width="25%">Počet najazdených kilometrov</th>
								<th width="20%">Operácie</th>
							</tr>
							</thead>
							<tbody id="userData">
							<?php if (!empty($auto)): foreach ($auto as $au): ?>
								<tr>
									<td><?php echo '#' . $au['id']; ?></td>
									<td><?php echo $au['Model']; ?></td>
									<td><?php echo $au['SPZ']; ?></td>
									<td><?php echo $au['Pocet_km']; ?></td>
									<td>
										<a href="<?php echo
										site_url('auto/view/' . $au['id']); ?>"
										   class="glyphicon glyphicon-eye-open" style="color: red"></a>
										<a href="<?php echo
										site_url('auto/edit/' . $au['id']); ?>"
										   class="glyphicon glyphicon-edit" style="color:red"></a>
										<a href="<?php echo
										site_url('auto/delete/' . $au['id']); ?>"
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


