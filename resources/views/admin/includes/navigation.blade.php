<div class="sidebar-header">
	<div class="d-flex justify-content-between align-items-center">
		<div class="" style="">
			<a href="{{ route('dashboard') }}">
				<img style="width: 100%; height: auto; max-width: 200px;" src="{{asset('/img/logo.png')}}" alt="logo">
			</a>
			
		</div>
		<div class="toggler">
			<a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
		</div>
	</div>
</div>
<div class="sidebar-menu">
	<ul class="menu">
		<li class="sidebar-title">Menu</li>
			
		<li class="sidebar-item {{ request()->is('dashboard') ? 'active' : '' }}">
			<a href="{{ route('dashboard') }}" class='sidebar-link'>
				<i class="bi bi-grid-fill"></i>
				<span>Dashboard</span>
			</a>
		</li>

		<li class="sidebar-title"><i class="bi bi-menu-button-wide"></i></li>


		{{-- <li class="sidebar-item has-sub {{ request()->routeIs('graph.*') ? 'active' : '' }}">
			<a href="#" class='sidebar-link'>
				<i class="bi bi-bar-chart-fill"></i>
				<span>Grafik</span>
			</a>
			<ul class="submenu {{ request()->routeIs('graph.*') ? 'active' : '' }}">
                <li class="submenu-item {{ request()->routeIs('graph.asbab.index') ? 'active' : '' }}">
					<a href="{{ route('graph.asbab.index') }}">Customer Service</a>
				</li>
			</ul>
		</li>

		<li class="sidebar-item {{ request()->is('dashboard/manage*') ? 'active' : '' }}">
			<a href="{{ route('manage.index')}}" class='sidebar-link'>
				<i class="bi bi-sliders2"></i>
				<span>Akun</span>
			</a>
		</li> --}}
		
		<li class="sidebar-item">
			<button type="button" class='sidebar-link' data-bs-toggle="modal"
			data-bs-target="#logoutModal">
			<i class="bi bi-box-arrow-left"></i><span>Logout</span>
			</button>
		</li>

	</ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
