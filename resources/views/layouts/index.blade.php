<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="https://dashboard.sellerkit.id/assets/img/icons/sellerkit-icon.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />
	<script src="/js/jquery-3.6.0.js"></script>
	<script src="js/app.js"></script>
	<script src="js/button.js"></script>

	<title>Sellerkit</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://unpkg.com/@adminkit/core@latest/dist/css/app.css">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="/">
					<span class="align-middle">Sellerkit</span>
				</a>
				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Daftar Mitra
					</li>
					<li class="sidebar-item {{ ($title === "Daftar Mitra") ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url('/') }}">
							<i class="align-middle" data-feather="sliders"></i><span class="align-middle">Dashboard</span>
						</a>
					</li>
					<li class="sidebar-item {{ ($title === "Profile") ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url ('/profile') }}">
							<i class="align-middle" data-feather="user"></i><span class="align-middle">Profil</span>
						</a>
					</li>


					@can('exceptAdmin')
					<li class="sidebar-header">
						Produk
					</li>
					<li class="sidebar-item {{ ($title === "Brand" | $title === "Tambah Brand" | $title === "Edit Brand") ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url ('/brand') }}">
							<i class="align-middle" data-feather="disc"></i><span class="align-middle">Brand</span>
						</a>
					</li>
					<li class="sidebar-item {{ ($title === "Gudang" | $title === "Tambah Gudang" | $title === "Edit Gudang") ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url ('/gudang') }}">
							<i class="align-middle" data-feather="database"></i> <span class="align-middle">Gudang</span>
						</a>
					</li>
					<li class="sidebar-item {{ ($title === "Kategori" | $title === "Tambah Kategori" | $title === "Edit Kategori") ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url ('/kategori') }}">
							<i class="align-middle" data-feather="hash"></i> <span class="align-middle">Kategori</span>
						</a>
					</li>
					@endcan

					@can('exceptAdmin')
					<li class="sidebar-header">
						Gudang
					</li>
					@foreach ($warehouse as $warehouses)
					<li class="sidebar-item {{ ($title[0] === "Gudang Stok$warehouses->id") ? 'active' : '' }}">
						<a data-bs-target="#warehouse{{ $warehouses->id }}" data-bs-toggle="collapse" class="sidebar-link" aria-expanded="true">
							<i class="align-middle" data-feather="database"></i> <span class="align-middle text-capitalize">{{ $warehouses->nama_gudang }}</span>
						</a>
						<ul id="warehouse{{ $warehouses->id }}" class="sidebar-dropdown list-unstyled collapse {{ ($title[0] === "Gudang Stok$warehouses->id") ? 'show' : '' }}" data-bs-parent="#sidebar" style="">
							<li class="sidebar-item {{ ($title[1] === "Lihat Stok$warehouses->id") ? 'active' : '' }}">
								<a class="sidebar-link" href="{{ url ('/gudang-stok-') }}{{ $warehouses->id }}">
									<span class="align-middle">Lihat stok</span>
								</a>
							</li>
							<li class="sidebar-item ">
								<a class="sidebar-link" href="{{ url ('/gudang-riwayatstok-') }}{{ $warehouses->id }}">
									<span class="align-middle">Riwayat stok</span>
								</a>
							</li>
						</ul>
					</li>
					@endforeach
					@endcan




					<li class="sidebar-header">
						Manajemen
					</li>
					@can('exceptAdmin')
					<li class="sidebar-item  {{ ($title === "Hadiah" | $title === "Tambah Hadiah" | $title === "Edit Hadiah") ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url ('/hadiah') }}">
							<i class="align-middle" data-feather="gift"></i> <span class="align-middle">Hadiah</span>
						</a>
					</li>
					<li class="sidebar-item  {{ ($title === "Produk" | $title === "Tambah Produk" | $title === "Edit Produk") ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url ('/produk') }}">
							<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Produk</span>
						</a>
					</li>
					<li class="sidebar-item  {{ ($title[0] === "Stok") ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url ('/stok') }}">
							<i class="align-middle" data-feather="layers"></i> <span class="align-middle">Stok</span>
						</a>
					</li>
					@endcan
					@can('Admin')
					<li class="sidebar-item  {{ ($title === "Role" | $title === "Tambah Role" | $title === "Edit Role") ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url ('/role') }}">
							<i class="align-middle" data-feather="tool"></i> <span class="align-middle">Role</span>
						</a>
					</li>
					@endcan
					{{-- @can('exceptLastRole') --}}
					<li class="sidebar-item  {{ ($title === "User") ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ url ('/user') }}">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">User</span>
						</a>
					</li>
					{{-- @endcan --}}
				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>
							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark text-capitalize">Halo, {{ auth()->user()->nama_lengkap }}</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="bell"></i> Notifikasi</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analitik</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ url ('/pengaturan') }}"><i class="align-middle me-1" data-feather="settings"></i> Pengaturan</a>
								<div class="dropdown-divider"></div>
								<form action="/logout" method="post">
									@csrf
						<li><button class="dropdown-item" type="submit"><i class="align-middle me-1" data-feather="log-out"></i>Logout</button></li>
						</form>
				</div>
				</li>
				</ul>
		</div>
		</nav>

		@yield('container')

		<footer class="footer">
			<div class="container-fluid">
				<div class="row text-muted">
					<div class="col-6 text-start">
						<p class="mb-0">
							<a class="text-muted" href="{{ url('/') }}"><img src="img/sellerkit-logo.png" width="80 px"></a>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>
	</div>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>
	@yield('script')
</body>

</html>