

	<!-- Header -->
	<div class="header">

		<!-- Logo -->
		<div class="header-left">
			<a href="{{ URL::to('/admin/home')}}" class="logo">
				<img src="{{ asset('Admin/img/logo.png')}}" alt="Logo">
			</a>
			<a href="{{ URL::to('/admin/home')}}" class="logo logo-small">
				<img src="{{ asset('Admin/img/logo-small.png')}}" alt="Logo" width="30" height="30">
			</a>
		</div>
		<!-- /Logo -->

		<a href="javascript:void(0);" id="toggle_btn">
			<i class="fe fe-text-align-left"></i>
		</a>

		<div class="top-nav-search">
			<form>
				<input type="text" class="form-control" placeholder="Search here">
				<button class="btn" type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>

		<!-- Mobile Menu Toggle -->
		<a class="mobile_btn" id="mobile_btn">
			<i class="fa fa-bars"></i>
		</a>
		<!-- /Mobile Menu Toggle -->

		<!-- Header Right Menu -->
		<ul class="nav user-menu">
			<!-- User Menu -->
			<li class="nav-item dropdown has-arrow">
				<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
					<span class="user-img"><img class="rounded-circle" src="{{ asset('Admin/img/profiles/avatar-01.jpg')}}" width="31" alt="Ryan Taylor"></span>
				</a>
				<div class="dropdown-menu">
					<div class="user-header">
						<div class="avatar avatar-sm">
							<img src="{{ asset('Admin/img/profiles/avatar-01.jpg')}}" alt="User Image" class="avatar-img rounded-circle">
						</div>
						<div class="user-text">
							<h6>Ryan Taylor</h6>
							<p class="text-muted mb-0">Administrator</p>
						</div>
					</div>
					<a class="dropdown-item" href="{{ route('admin-profile')}}">My Profile</a>
					<a class="dropdown-item" href="{{ URL::to('/admin/setting')}}">Settings</a>
					<a class="dropdown-item" href="{{ URL::to('/logout')}}">Logout</a>
				</div>
			</li>
			<!-- /User Menu -->

		</ul>
		<!-- /Header Right Menu -->

	</div>