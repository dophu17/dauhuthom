<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đậu Hũ Thơm Admin</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<!-- A grey horizontal navbar that becomes vertical on small screens -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<div class="container">	
		  <!-- Brand -->
		  <a class="navbar-brand" href="{{ route('admin.home') }}">Đậu Hũ Thơm Admin</a>

		  <!-- Links -->
		  <ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="{{ route('admin.product.index') }}">Sản phẩm</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="{{ route('admin.campaign.index') }}">Chiến dịch</a>
		    </li>

		    <!-- Dropdown -->
		    <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		        Dropdown link
		      </a>
		      <div class="dropdown-menu">
		        <a class="dropdown-item" href="#">Link 1</a>
		        <a class="dropdown-item" href="#">Link 2</a>
		        <a class="dropdown-item" href="#">Link 3</a>
		      </div>
		    </li>
		  </ul>
		</div>
	</nav>

	<!-- Content -->
	<div class="container-fluid">
		@yield('content')
	</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>