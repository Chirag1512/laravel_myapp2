<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
</head>

<body>
    <form action="postdata" method="POST">
        @csrf   
    <table border="1">
        <tr>
            <td><label>Username:</label></td>
            <td><input type='text' name="name"></td>
        </tr>
        <tr>
            <td><label>Email:</label></td>
            <td><input type='text' name="email"></td>
        </tr>
        <tr>
            <td><label>Password:</label></td>
            <td><input type='text' name="password"></td>
        </tr>
        <tr><td><input type="submit"></td></tr>

    </table>
    </form>
</body>

</html>