<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <form action="update" method="POST">
        @csrf   
    <table border="1">
    @foreach ($records as $record)
    <input type="hidden" value="{{$record->id}}" name="id">
        <tr>
            <td><label>Username:</label></td>
            <td><input type='text' name="name" value="{{$record->name}}"></td>
        </tr>
        <tr>
            <td><label>Email:</label></td>
            <td><input type='text' name="email"  value="{{$record->email}}"></td>
        </tr>
        <tr>
            <td><label>Password:</label></td>
            <td><input type='text' name="password"  value="{{$record->password}}"></td>
        </tr>
        <tr><td><input type="submit"></td></tr>

    </table>
    @endforeach
    </form>
</body>
</html>