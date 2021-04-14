<div class="content-wrapper">

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header">
						<h1 class="panel-heading">Tabuľka Zamestnancov
							<a href="<?php echo
							site_url('zamestnanci/add/'); ?>" class="glyphicon glyphicon-plus pull-right"
							   style="color: red"></a>
						</h1>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th width="20%">ID</th>
								<th width="20%">Meno</th>
								<th width="20%">Pozícia</th>
								<th width="20%">Plat</th>
								<th width="20%">Operácie</th>
							</tr>
							</thead>
							<tbody id="userData">
							<?php if (!empty($zamestnanci)): foreach ($zamestnanci as $za): ?>
								<tr>
									<td><?php echo '#' . $za['id']; ?></td>
									<td><?php echo $za['Meno']; ?></td>
									<td><?php echo $za['Pozícia']; ?></td>
									<td><?php echo $za['Plat']; ?></td>

									<td>
										<a href="<?php echo
										site_url('zamestnanci/view/' . $za['id']); ?>"
										   class="glyphicon glyphicon-eye-open" style="color: red"></a>
										<a href="<?php echo
										site_url('zamestnanci/edit/' . $za['id']); ?>"
										   class="glyphicon glyphicon-edit" style="color:red"></a>
										<a href="<?php echo
										site_url('zamestnanci/delete/' . $za['id']); ?>"
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
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>

</div>


