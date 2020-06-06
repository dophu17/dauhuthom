@extends('frontends.profile-layouts.layout')
@section('content')

<h2 class="mt-4 mb-4">Thống kê chi tiêu</h2>

<div class="row">
  <div class="col-md-6">
  	<div class="row mb-3">
  		<div class="col-md-3">
	    	<h5>Hôm nay:</h5>
	  	</div>
	  	<div class="col-md-9">
	  		<a href="?date={{ $prevDate }}&dateMonth={{ $dateMonth }}" class="btn btn-info"><</a>
		    <a href="?date={{ $currentDate }}&dateMonth={{ $dateMonth }}" class="btn btn-info">{{ $date }}</a>
		    <a href="?date={{ $nextDate }}&dateMonth={{ $dateMonth }}" class="btn btn-info">></a>
	  	</div>
  	</div>
    <table class="table table-hover">
		  <thead>
		    <tr>
		      <th>Tên danh mục</th>
		      <th>Số lần</th>
		      <th>Số tiền</th>
		    </tr>
		  </thead>
		  <tbody>
		    
		    @if($statisticalToday && count($statisticalToday) > 0)
		    	<?php $totalToday = 0 ?>
		      @foreach($statisticalToday as $item)
		      <tr>
		        <td>{{ $item->title }}</td>
		        <td>{{ $item->count }}</td>
		        <td><b>{{ number_format($item->sum_price) }}</b></td>
		      </tr>
		    	<?php $totalToday += $item->sum_price ?>
		      @endforeach
		      <tr>
		        <td><b>Tổng:</b></td>
		        <td></td>
		        <td class="font-weight-bold text-danger">{{ number_format($totalToday) }}</td>
		      </tr>
		    @endif

		  </tbody>
		</table>
  </div>
  <div class="col-md-6">
    <div class="row mb-3">
  		<div class="col-md-3">
	    	<h5>Tháng này:</h5>
	  	</div>
	  	<div class="col-md-9">
	  		<a href="?date={{ $date }}&dateMonth={{ $prevDateMonth }}" class="btn btn-info"><</a>
		    <a href="?date={{ $date }}&dateMonth={{ $currentDateMonth }}" class="btn btn-info">{{ $dateMonth }}</a>
		    <a href="?date={{ $date }}&dateMonth={{ $nextDateMonth }}" class="btn btn-info">></a>
	  	</div>
  	</div>
    <table class="table table-hover">
		  <thead>
		    <tr>
		      <th>Tên danh mục</th>
		      <th>Số lần</th>
		      <th>Số tiền</th>
		    </tr>
		  </thead>
		  <tbody>
		    
		    @if($statisticalThisMonth && count($statisticalThisMonth) > 0)
		    	<?php $totalThisMonth = 0 ?>
		      @foreach($statisticalThisMonth as $item)
		      <tr>
		        <td>{{ $item->title }}</td>
		        <td>{{ $item->count }}</td>
		        <td><b>{{ number_format($item->sum_price) }}</b></td>
		      </tr>
		    	<?php $totalThisMonth += $item->sum_price ?>
		      @endforeach
		      <tr>
		        <td><b>Tổng:</b></td>
		        <td></td>
		        <td class="font-weight-bold text-danger">{{ number_format($totalThisMonth) }}</td>
		      </tr>
		    @endif

		  </tbody>
		</table>
  </div>
</div>

@section('scripts')
<script>
  
</script>
@stop
    
@endsection