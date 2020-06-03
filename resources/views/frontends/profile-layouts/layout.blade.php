<!DOCTYPE html>
<html lang="en">
<head>
	<title>OneTech</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="OneTech shop project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('OneTech') }}/styles/bootstrap4/bootstrap.min.css">
	<link href="{{ asset('OneTech') }}/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div class="container">

		<ul class="nav nav-pills nav-justified">
	    <li class="nav-item">
	      <a id="nav-spend" class="nav-link active" href="{{ route('frontend.spend.index') }}">Chi tiêu</a>
	    </li>
	    <li class="nav-item">
	      <a id="nav-category-spend" class="nav-link" href="{{ route('frontend.category.spend.index') }}">DM chi tiêu</a>
	    </li>
	    <li class="nav-item">
	      <a id="nav-statistical" class="nav-link" href="{{ route('frontend.statistical.index') }}">Thống kê</a>
	    </li>
	    <li class="nav-item">
	      <a id="nav-book" class="nav-link" href="{{ route('frontend.book.index') }}">Sách</a>
	    </li>
	    <li class="nav-item">
	      <a id="nav-author" class="nav-link" href="{{ route('frontend.author.index') }}">Tác giả</a>
	    </li>
		</ul>
		
		<!-- Content -->
		@yield('content')
		
	</div>

	<script src="{{ asset('OneTech') }}/js/jquery-3.3.1.min.js"></script>
	<script src="{{ asset('OneTech') }}/styles/bootstrap4/popper.js"></script>
	<script src="{{ asset('OneTech') }}/styles/bootstrap4/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
		  let pathname = window.location.pathname;
		  let split = pathname.split('/')
		  if (split.indexOf('spends') > -1) {
		  	$('#nav-spend').addClass('active')
		  } else {
		  	$('#nav-spend').removeClass('active')
		  }
		  if (split.indexOf('category-spends') > -1) {
		  	$('#nav-category-spend').addClass('active')
		  } else {
		  	$('#nav-category-spend').removeClass('active')
		  }
		  if (split.indexOf('statistical') > -1) {
		  	$('#nav-statistical').addClass('active')
		  } else {
		  	$('#nav-statistical').removeClass('active')
		  }
		  if (split.indexOf('books') > -1) {
		  	$('#nav-book').addClass('active')
		  } else {
		  	$('#nav-book').removeClass('active')
		  }
		  if (split.indexOf('authors') > -1) {
		  	$('#nav-author').addClass('active')
		  } else {
		  	$('#nav-author').removeClass('active')
		  }
		});
	</script>

	@yield('scripts')
	
</body>

</html>