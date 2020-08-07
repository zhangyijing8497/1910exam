<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登陆</title>
</head>
<body>
    <center>
        <h1>登陆页面</h1>
        <table>
            <form action="{{url('/login')}}" method="post">
                <tr>
                    <td>用户名</td>
                    <td><input type="text" name="u" placeholder="用户名/email/tel"></td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="password" name="pwd"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="登陆"></td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>