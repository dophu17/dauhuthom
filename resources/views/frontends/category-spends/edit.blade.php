@extends('frontends.profile-layouts.layout')
@section('content')

<h2>Sửa danh mục</h2>

<form action="{{ route('frontend.category.spend.edit', $item->id) }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="title">Tên danh mục:</label>
    <input type="text" class="form-control" placeholder="VD: Ăn sáng" name="title" value="{{ $item->title }}" id="title">
    @if($errors->first('title'))
    <span class="text-danger">{{ $errors->first('title') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label for="price_default">Giá mặc định:</label>
    <input type="number" class="form-control" placeholder="VD: 20000" name="price_default" value="{{ $item->price_default }}" id="price_default">
  </div>
  <button type="submit" class="btn btn-primary">Lưu</button>
</form>
    
@endsection