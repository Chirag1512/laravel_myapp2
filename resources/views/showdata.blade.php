<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <tr>
            <td>{{ $record->name }}</td>
            <td>{{ $record->email }}</td>
            <td>{{ $record->password }}</td>
        </tr>

    </table>
</body>

</html>