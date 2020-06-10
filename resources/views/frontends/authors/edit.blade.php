@extends('frontends.profile-layouts.layout')
@section('content')

<h2>Sửa tác giả</h2>

<form action="{{ route('frontend.author.edit', $item->id) }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="name">Tên:</label>
    <input type="text" class="form-control" placeholder="VD: Tên tác giả" name="name" value="{{ $item->name }}" id="name">
    @if($errors->first('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
  </div>
  <button type="submit" class="btn btn-primary">Lưu</button>
</form>
    
@endsection