<!doctype html>
<html lang="en">
<head>

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>

	<!-- script na navbar -->
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
	<script>
		$(function () {
			$('#example1').DataTable({});
		});
	</script>
</head>

<body>
<nav class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="/mongodb/index.php/">DATABÁZOVÁ APLIKÁCIA</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="" ><a href="/mongodb/index.php/">DOMOV</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="/mongodb/index.php/auto"><i class="fa fa-circle-o"></i>Autá</a></li>
						<li><a href="/mongodb/index.php/zamestnanci">Zamestnanci</a></li>
						<li><a href="/mongodb/index.php/jedlo">Jedlá</a></li>
					</ul>
				</li>

			</ul>
		</div>
</nav>




