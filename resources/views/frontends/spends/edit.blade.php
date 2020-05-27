@extends('frontends.profile-layouts.layout')
@section('content')

<h2>Sửa chi tiêu</h2>

<form action="{{ route('frontend.spend.edit', $item->id) }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="category_id">Danh mục:</label>
    <select class="form-control" id="category_id" name="category_id">
      @foreach($categories as $cat)
      <option value="{{ $cat->id }}" @if($item->category_id == $cat->id) selected="" @endif>{{ $cat->title }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="price">Giá:</label>
    <input type="text" class="form-control" placeholder="VD: 20000" name="price" value="{{ $item->price }}" id="price">
  </div>
  <div class="form-group">
    <label for="description">Ghi chú:</label>
    <input type="text" class="form-control" placeholder="VD: ăn sáng 1" name="description" value="{{ $item->description }}" id="price_default">
  </div>
  <button type="submit" class="btn btn-primary">Lưu</button>
</form>
    
@endsection