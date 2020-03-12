<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>PHP基礎</title>
</head>
<body>
  <?php
  $nickname=$_POST['nickname'];
  if($nickname=='')
  {
    print'ニックネームが入力されていません。';
  }
  else
  { 
    print'ようこそ';
    print $nickname;
    print'様';
  }
  ?>
  <!-- 画面の表示せよというprint命令 -->
</body>
</html>
