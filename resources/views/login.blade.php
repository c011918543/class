<html>  
    <head>
        <meta charset="UTF-8">
        <title>sample-login</title>
        <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    </head>      
<body>
<div class="box">
<h2>ログインページ</h2>
<form action="login.php" method="post">
ユーザ名：<input type="text" name="userid" required><br>
パスワード：<input type="password" name="pass" required><br>
<input type="submit" value="認証"><br>
</form>
<br>
<form action="touroku.php" method="post">
<input type="submit" value="新規登録"><br>
</form>
</div>
<a href="top.php">トップページへ</a>

</body>
</html>
