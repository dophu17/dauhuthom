@extends('frontends.profile-layouts.layout')
@section('content')

<h2 class="mt-4 mb-4">Thống kê chi tiêu</h2>

<div class="row">
  <div class="col-md-6">
    <h4>Hôm nay:</h4>
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
		        <td>{{ number_format($item->sum_price) }}</td>
		      </tr>
		    	<?php $totalToday += $item->sum_price ?>
		      @endforeach
		      <tr>
		        <td></td>
		        <td></td>
		        <td class="font-weight-bold text-danger">{{ number_format($totalToday) }}</td>
		      </tr>
		    @endif

		  </tbody>
		</table>
  </div>
  <div class="col-md-6">
    <h4>Tháng này:</h4>
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
		        <td>{{ number_format($item->sum_price) }}</td>
		      </tr>
		    	<?php $totalThisMonth += $item->sum_price ?>
		      @endforeach
		      <tr>
		        <td></td>
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