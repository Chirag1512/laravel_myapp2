<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Table</title>
</head>
<body>
<div>
    <form action="/users" method="post">
        @csrf
        <input type="text" placeholder="Enter a name to search" name="txt1">
        <input type="submit" name="search">
    </form>
</div>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Update</th>
        </tr>
        @foreach ($records as $record)
        <tr>
            <td>{{ $record->name }}</td>
            <td>{{ $record->email }}</td>
            <td>{{ $record->password }}</td>
            <td><a href="update?id={{$record->id}}">Update</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
