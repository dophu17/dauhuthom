@extends('frontends.profile-layouts.layout')
@section('content')

<h2>Thêm sách mới</h2>

<form action="{{ route('frontend.book.add') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Tên sách:</label>
    <input type="text" class="form-control" placeholder="VD: Nhà giả kim" name="name" value="{{ old('name') }}" id="name">
  </div>
  <div class="form-group">
    <label for="price">Giá:</label>
    <input type="text" class="form-control" placeholder="VD: 50000" name="price" value="{{ old('price') }}" id="price">
  </div>
  <div class="form-group">
    <label for="author_name">Tác giả:</label>
    <input type="text" class="form-control" placeholder="VD: Tên tác giả" name="author_name" value="{{ old('author_name') }}" id="author_name">
  </div>
  <div class="form-group">
    <label for="read_start_date">Ngày bắt đầu:</label>
    <input type="text" class="form-control" placeholder="VD: Ngày bắt đầu" name="read_start_date" value="{{ old('read_start_date') }}" id="read_start_date">
  </div>
  <div class="form-group">
    <label for="read_end_date">Ngày kết thúc:</label>
    <input type="text" class="form-control" placeholder="VD: Ngày kết thúc" name="read_end_date" value="{{ old('read_end_date') }}" id="read_end_date">
  </div>
  <div class="form-group">
    <input id="status" type="checkbox" value="1">
    <label for="status">Trạng thái đã đọc</label>
  </div>
  <button type="submit" class="btn btn-primary">Lưu</button>
</form>
    
@endsection