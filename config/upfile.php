<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>上传缩略图</title>
    <link rel="stylesheet" href="../style/admin.css">
</head>
<body id="main">
    <form action="../config/upload.php" method="post" enctype="multipart/form-data" style="text-align: center;margin: 30px;">
        <input type="hidden" name="type" value="<?php echo $_GET['type'];?>">
        <input type="hidden" name="size" value="<?php echo @$_GET['size'];?>">
        <input type="hidden" name="MAX_FILE_SIZE" value="204800">
        <input type="file" name="pic">
        <input type="submit" name="send" value="确认上传">
    </form>
</body>
</html>
