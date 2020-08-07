<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新闻</title>
</head>
<body>
    <center>
        <h1>添加新闻</h1>
        <table>
            <form action="{{url('/create')}}" method="post">
                <tr>
                    <td>新闻标题</td>
                    <td><input type="text" name="new_title"></td>
                </tr>
                <tr>
                    <td>新闻内容</td>
                    <td><textarea name="new_content" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="添加新闻"></td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>