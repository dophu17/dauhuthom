<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="{{ route('admin.login') }}" method="POST">
  @csrf
    <table>
      <tr>
        <td>Email</td>
        <td><input type="text" name="email" /></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="password" /></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="login" value="Login" /></td>
      </tr>
    </table>
  </form>
</body>
</html>