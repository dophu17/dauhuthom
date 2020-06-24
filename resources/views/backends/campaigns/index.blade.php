@extends('backends.layouts.layout')
@section('content')

Campaign list

<br><a href="{{ route('admin.campaign.add') }}">Insert new</a>

<table>
  <tr>
    <td>ID</td>
    <td>Banner</td>
    <td>Product link</td>
    <td>Product link short</td>
    <td>Origin link</td>
    <td>Ngày tạo</td>
    <td></td>
  </tr>

  @foreach ($list as $item)
  <tr>
    <td>{{ $item->id }}</td>
    <?php
      $explode = explode('/', $item->banner);
      $idImg = $explode[count($explode) - 1];
    ?>
    <td>
      <img src="{{ $item->banner }}" alt="" width="200">
    </td>
    <td><a target="_blank" href="{{ $item->product_link }}">{{ $item->product_link }}</a></td>
    <td><a target="_blank" href="{{ $item->product_link_short }}">{{ $item->product_link_short }}</a></td>
    <td><a target="_blank" href="{{ $item->origin_link }}">{{ $item->origin_link }}</a></td>
    <td>{{ $item->created_at }}</td>
  </tr>
  @endforeach  

<table>

@endsection