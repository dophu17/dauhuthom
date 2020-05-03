@extends('frontends.profile-layouts.layout')
@section('content')

<h2 class="mt-4 mb-4">Chi tiêu</h2>

<div class="row mt-3 mb-3">
  <div class='col-sm-12'>
    <a href="?date={{ $prevDate }}" class="btn btn-info"><</a>
    <a href="?date={{ $currentDate }}" class="btn btn-info">{{ $date }}</a>
    <a href="?date={{ $nextDate }}" class="btn btn-info">></a>
    <a href="{{ route('frontend.spend.add', ['date' => $date]) }}" class="btn btn-info">
      <i class="fa fa-plus-circle"></i> Thêm mới
    </a>
  </div>
</div>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Tên danh mục</th>
      <th>Giá</th>
      <th>Ghi chú</th>
      <th>Thao tác</th>
    </tr>
  </thead>
  <tbody>
    
    @if($list && count($list) > 0)
      @foreach($list as $item)
      <tr>
        <td>{{ $item->category->title }}</td>
        <td>{{ $item->price }}</td>
        <td>{{ $item->description }}</td>
        <td>
          <a href="{{ route('frontend.spend.edit', $item->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
          <a href="{{ route('frontend.spend.delete', $item->id) }}" class="btn btn-info btn-sm"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
      @endforeach
    @endif

  </tbody>
</table>
    
@endsection