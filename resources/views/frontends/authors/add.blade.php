@extends('frontends.profile-layouts.layout')
@section('content')

<h2>Thêm tác giả</h2>

<form action="{{ route('frontend.author.add') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Tên:</label>
    <input type="text" class="form-control" placeholder="VD: Tên tác giả" name="name" value="{{ old('name') }}" id="name">
  </div>
  <button type="submit" class="btn btn-primary">Lưu</button>
</form>
    
@endsection