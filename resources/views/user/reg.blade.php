<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册</title>
</head>
<body>
    <center>
        <h1>注册页面</h1>
        <table>
            <form action="{{url('/reg')}}" method="post">
                <tr>
                    <td>用户名</td>
                    <td><input type="text" name="user_name"></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>tel</td>
                    <td><input type="tel" name="tel"></td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="password" name="pwd"></td>
                </tr>
                <tr>
                    <td>确认密码</td>
                    <td><input type="password" name="pwd2"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="注册"></td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>