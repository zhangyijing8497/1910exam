<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新闻列表</title>
</head>
<body>
<table border=1>
    <tr>
        <td>新闻标题</td>
        <td>新闻内容</td>
        <td>发布时间</td>
        <td>发布人电话</td>
    </tr>
    @foreach($data as $k=>$v)
    <tr>
        <td>{{$v['new_title']}}</td>
        <td>{{$v['new_content']}}</td>
        <td><?php echo date('Y-m-d H:i:s',$v['new_time'])?></td>
        <td>{{$v['tel']}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>