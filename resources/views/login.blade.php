<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>

<body>
    <form action="/logincheck" method="post">
        @csrf   
        <table border="1">
            <tr>
                <td>
                    <lable>Username</lable>
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                    <lable>Email</lable>
                </td>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>
            <tr><td><input type="submit"></td></tr>
        </table>
    </form>
</body>

</html>