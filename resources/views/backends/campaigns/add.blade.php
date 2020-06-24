<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="{{ route('admin.campaign.add') }}" method="POST">
  @csrf
    <table>
      <tr>
        <td>Banner</td>
        <td><input type="text" name="banner" value="{{ old('banner') }}" /></td>
      </tr>
      <tr>
        <td>Product link</td>
        <td><input type="text" name="product_link" value="{{ old('product_link') }}" /></td>
      </tr>
      <tr>
        <td>Product link short</td>
        <td><input type="text" name="product_link_short" value="{{ old('product_link_short') }}" /></td>
      </tr>
      <tr>
        <td>Origin link</td>
        <td><input type="text" name="origin_link" value="{{ old('origin_link') }}" /></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Save" /></td>
      </tr>
    </table>
  </form>
</body>
</html>