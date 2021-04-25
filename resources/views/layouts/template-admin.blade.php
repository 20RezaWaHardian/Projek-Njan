

<!doctype html>
<html lang="en">

<head>
	<title>Dashboard Jasa Raharja</title>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- <link rel="stylesheet" href="assets/css/main.css.map"> -->
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet"> -->
	<!-- ICONS -->
	<!-- <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png"> -->
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/jr.png">

	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	@yield('header')
	

	

	
	
</head>


<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand" style='padding:15px'>
				<!-- <a href="index.html"><img src="assets/img/jr.png" alt="Klorofil Logo" class="img-responsive logo" ></a> -->
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
								<a class="dropdown-item" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="lnr lnr-exit"></i>
                                        {{ __('Logout') }}
                                    </a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="{{(url('home'))}}" class="{{Request::is('home')? 'active' : ''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<!-- @if(Auth::user()->rule == 0) -->
						<li><a href="{{(url('user'))}}" class="{{Request::is('user')? 'active' : ''}}"><i class="fa fa-user-plus"></i> <span>Kelola User</span></a></li>
						<!-- @else
						@endif -->
						<li>
							<a href="#subPages" data-toggle="collapse" class="{{Request::is('sw','iw','klaim',)? 'active' : ''}}"><i class="fa fa-database"></i> <span>Info Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav" >
									<li ><a href="{{(url('sw'))}}" class="{{Request::is('sw')? 'active' : ''}}">SW</a></li>
									<li><a href="{{('iw')}}" class="{{Request::is('iw')? 'active' : ''}}">IW</a></li>
									<li><a href="{{('klaim')}}" class="{{Request::is('klaim')? 'active' : ''}}">Klaim</a></li>
									<li><a href="{{('keuangan')}}" class="{{Request::is('keuangan')? 'active' : ''}}">Keuangan</a></li>
								</ul>
							</div>
						<li ><a href="{{url('tambahData')}}" class="{{Request::is('tambahData') ? 'active' : '' }}" ><i class="lnr lnr-pencil"></i> <span>Input Data</span></a></li>
						<li><a href="{{(url('korban'))}}" class="{{Request::is('korban')? 'active' : ''}}"><i class="fa fa-list-alt"></i> <span>Kelola Korban</span></a></li>
						<li><a href="{{(url('gambar'))}}" class="{{Request::is('gambar')? 'active' : ''}}" class=""><i class="lnr lnr-magic-wand"></i> <span>Input Gambar</span></a></li>
						<li><a href="{{(url('kelolagambar'))}}" class="{{Request::is('kelolagambar')? 'active' : ''}}" class=""><i class="lnr lnr-magic-wand"></i> <span>Kelola Gambar</span></a></li>
						<li><a href="{{(url('fullcalendar'))}}" class="{{Request::is('fullcalendar')? 'active' : ''}}" class=""><i class="fa fa-calendar"></i> <span>Kelola Event</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						
						<div class="panel-body">
							<main class="py-4">
								@yield('content')
							</main>
						</div>
					</div>
					<!-- END OVERVIEW -->
                    

				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a>
</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>

	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

	<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
	</script>
	
	<script>
		$(document).ready(function(){
			$(document).on('click','#update', function(){
				var id						= $(this).data('id');
				var username_update			= $(this).data('username_update');
				var email_update			= $(this).data('email_update');
				var password_update			= $(this).data('password_update');
				var rule_update				= $(this).data('rule_update');
				$('#id').val(id);
				$('#username_update').val(username_update);
				$('#email_update').val(email_update);
				$('#password_update').val(password_update);
				$('#rule').val(rule_update);
			});
		});
	</script>
	@yield('footer')

	
	
</body>

</html>
