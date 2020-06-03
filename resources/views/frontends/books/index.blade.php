@extends('frontends.profile-layouts.layout')
@section('content')

<h2 class="mt-4 mb-4">Sách</h2>

<div class="row mt-3 mb-3">
  <div class='col-sm-12'>
    <a href="{{ route('frontend.book.add') }}" class="btn btn-info">
      <i class="fa fa-plus-circle"></i> Thêm mới
    </a>
  </div>
</div>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Tên</th>
      <th>Giá</th>
      <th>Tác giả</th>
      <th>Trạng thái</th>
      <th>Thao tác</th>
    </tr>
  </thead>
  <tbody>
    
    @if($list && count($list) > 0)
      @foreach($list as $item)
      <tr>
        <td>{{ $item->name }}</td>
        <td>{{ number_format($item->price) }}</td>
        <td>{{ @$item->author->name }}</td>
        <td>{{ $item->status == 1 ? 'Đã đọc' : 'Chưa đọc' }}</td>
        <td>
          <a href="{{ route('frontend.book.edit', $item->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
          <a href="{{ route('frontend.book.delete', $item->id) }}" class="btn btn-info btn-sm"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
      @endforeach
    @endif

  </tbody>
</table>
    
@endsection