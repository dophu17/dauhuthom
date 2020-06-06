@extends('backends.layouts.layout')
@section('content')

products list

<br><a href="{{ route('admin.product.insertBasic') }}">Insert new</a>

<table>
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Product link</td>
    <td></td>
  </tr>

  @foreach ($products as $item)
  <tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->name }}</td>
    <td><a target="_blank" href="{{ $item->link_access_product }}">{{ $item->link_access_product }}</a></td>
    <td><a href="{{ route('admin.product.updateBasic', $item->id) }}">Edit</a></td>
  </tr>
  @endforeach  

<table>

@endsection