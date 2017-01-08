<?php require('conn.php');
  $result=$db->query("select * from lyb order by ID desc")
?>


<!Doctype>
<html>
<head meta charset="utf-8">
<title>狗爬视频|GOPA Video</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
</head>

<body>

      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
              <div class="navbar-header">
                  <a href="index.php" class="navbar-brand">GOPA Video</a>
                  <a href="message.php" class="navbar-brand">留言</a>
                  <a href="video.php" class="navbar-brand">视频列表</a>
                  <a href="login.php" class="navbar-brand">用户登录</a>
              </div>
          </div>
      </nav>

<!--      <div>-->
<!--          <img src="img/head.jpg" width=100% height="200">-->
<!--      </div>-->

      <div class="jumbotron">
          <div class="container">
          <h1>你们啊!</h1>

          <p>Too young,too simple.Sometimes naiive!I am angry!Θ..Θ</p>
              <form action ="#" method ="post">
                  <?php
                  $x1s="+1s  Θ..Θ";
                  ?>

                  <input type ="submit" value="<?php echo $x1s ?>" class="btn btn-primary btn-lg"/>

              </form>
              <!-- +1s系统 -->
              <?php
              $filename="/Applications/XAMPP/xamppfiles/htdocs/blog/poem.txt";
              $file=fopen($filename,'r+') or die ("ERROR OPEN");
              echo "you're the   ";
              readfile($filename);
              echo "   VISITOR";?>
              <br><?php
              echo "Big Brother is Watching You";
              $i=file_get_contents($filename);
              $i+=1;
              file_put_contents($filename,$i);
              fclose($file);
              $valuenow=$i/100;
              ?>

              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $valuenow ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $valuenow ?>%;">
                      <?php echo $valuenow ?>%
                  </div>
              </div>
      </div></div>
      <!-- 动态留言板和日志栏在首页上的显示 -->
      <!-- 首页动态留言板 -->
      <div id="main">
          <div id="left">
              <h4>|最新留言</h4>
               <ul>
                <?php if($result->rowCount()>0){
                  for($i=0;$i<8;$i++){
                    $row=$result->fetch(1); ?>
                    <li>* <?=$row["title"] ?> </li>
                <?  }
                }
                else echo "<p>目前还没有客户留言</p>";
                 ?>
               </ul>
              </div>
              


      <!-- 首页动态日志本 -->
          <div id="right">
              <h4>|最新日志</h4>
               <?php $result=$db->query("select * from article order by id desc limit 2");
              if($result->rowCount()>0){
                while($row=$result->fetch(1)){  ?>
                  <span class="date"><?=$row["date"] ?></span>
                  <h5> <?=$row["title"] ?> </h5>
                  <br />
                  <p><a href="article.php?id=<? $row["ID"]?>"><?= $row["contest"]?></a></p>
                  <hr /> 
                  <?
              }}
            else echo "<p>目前还没有日志</p>";
              ?>
              
              
          </div>
</div>
</body>
</html>
