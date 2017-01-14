<?php require('conn.php');
  if(isset($_GET['page']) && (int) $_GET['page']>0)
    $Page=$_GET['page'];
  else $Page=1;
  $PageSize=4;
  // $result1=$db->query("Select * from lyb order by ID desc");
  // $result=$result1->rowCount();
  $result=$db->query("Select count(id) from lyb");
  $row=mysql_fetch_row($result);
  $RecordCount=$row[0];
  $PageCount=ceil($RecordCount/$PageSize);
  $result=mysql_query("select * from lyb limit". ($Page-1)*$PageSize.",".$PageSize,$conn);
?>


<!Doctype>
<html>
<head meta charset="utf-8">
<title>项罗阳|XiangLuoyang</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">

<style type="text/css">
.page a:link {
color: #0000FF;
text-decoration: none;
}
.page a:visited {
text-decoration: none;
color: #0000FF;
}
.page a:hover {
text-decoration: none;
color: #0000FF;
}
.page a:active {
text-decoration: none;
color: #0000FF;
}
#liuyan{
  margin:8px auto; width:94%;
  border:1px solid gray; padding:8px;
  border-radius: 10px;
}
#liuyan h3{
  margin:0px 30px 0px 120px;
  text-align:center;  border-bottom:1px dashed gray;
  background: #ffff99;
}
#liuyan p{
  font:12px/1.6 "楷体GB2312"； margin:2px;
}
#liuyan img{
  border:1px solid gray; padding:0px;
  margin:10px 10px 0px 0px;
}
.line{
  padding: 0px;
  border:2px solid gray;
}
.form{
  padding:10px 20px;
  margin:20px 30px 30px 30px;
  background-color: #ffffcc;
  border-radius: 25px;
}
.page{color:#0000FF;}
</style>

</head>

<body>
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
              <div class="navbar-header">
                <a href="index.php" class="navbar-brand">项罗阳的个人博客</a>
                <a href="message.php" class="navbar-brand">留言</a>
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
      <!-- 留言板页面具体内容 -->

       <?php if($result->rowCount()>0){

         while($row=$result->fetch(1)){?>
           <div id ="liuyan"><img src="img/<?= $row["sex"]?>.jpg" style="float:left;" width="100px" height="100px"/>
             <h3><?= $row["title"] ?></h3><p>作者：<?=$row["author"] ?></p>
             <p>内容: <?= $row["content"]?> </p><p align="right">发表时间:
               <?= $row["date"] ?> </p> </div>
               <?
         }
       }
       else echo "<p>目前还没有用户留言</p>";
       ?>
       <div class="line">
       </div>
       <?php
       echo '共有'.$result->rowCount().'条留言';
        ?>
        <!-- <a href="Search.php">搜索留言</a>  -->

        <a href="login.html">管理留言</a>
        <div class="form">
       <h2 align="center" sytle="background-color:#cc9; font-size:14px;">发表留言</h2>
       <form method="post" action="submit.php">
         <table border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="666633">
           <tbody bgcolor="#ffffff">
             <tr><td width="125" align="center">留言主题</td>
             <td width="475"><input type="text" name="title"></td></tr>
             <tr><td align="center">留言人:</td>
               <td><input type="text" name="author"></td></tr>
                <tr><td></td><td> 性别：男<input type="radio" name="sex" value="2"/>
                 女<input type="radio" name="sex" value="1" /></td></tr>
                 <tr><td align="center">联系方式:</td>
                   <td><input type="text" name="email"></td></tr>
                    <tr><td align="center">留言内容:</td>
                    <td><textarea name="content" cols="30" rows="3"></textarea></td></tr>
                    <tr><td></td>
                      <td><input type="submit" name="Submit" value="提交"></td></tr>
                    </tbody></table></form>


      </div>
<p>
  <?php
  if($Page==1)
    echo "第一页  上一页";
  else echo "<a href='?page=1'>第一页</a> <a href='?page=".($Page-1)."'>上一页</a>";
  for($i=1;$i<=$PageCount;$i++){
    if($i==$Page) echo "$i";
    else echo "<a href='?page=$i'>$i</a>";
  }
  if($Page==$PageCount)
  echo "下一页  末页";
  else echo "<a href ='?page=".($Page+1)."'>下一页</a> <a href='?page=".$PageCount."'>末页</a>";
  echo "&nbsp 共".$RecordCount."条记录&nbsp";
  echo "$Page / $PageCount 页";
   ?></p>
</body>
</html>
