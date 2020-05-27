<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="{{ route('admin.product.updateBasic', $product->id) }}" method="POST">
  @csrf
    <table>
      <tr>
        <td>Name</td>
        <td><input type="text" name="name" value="{{ $product->name }}" /></td>
      </tr>
      <tr>
        <td>Product link</td>
        <td><input type="text" name="link_access_product" value="{{ $product->link_access_product }}" /></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Save" /></td>
      </tr>
    </table>
  </form>
</body>
</html>