<!Doctype>
<html>
<head meta charset="utf-8">
<title>狗爬视频|GOPA Video</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <script type="text/javascript" src="jquery-ui/js/jquery.js"></script>
    
    <script type="text/javascript" src="js/jquery.osmplayer.compressed.js"></script>
    <script type="text/javascript" src="templates/default/jquery.media.template.default.compressed.js"></script>
    <script type="text/javascript">
      $(function() {
        $("#mediaplayer").mediaplayer({
          playlist: "playlist.xml"
        });
      });
    </script>
    <link rel="stylesheet" type="text/css" href="jquery-ui/css/dark-hive/jquery-ui-1.8rc1.custom.css" />
    <link rel="stylesheet" type="text/css" href="templates/default/osmplayer_default.css" />
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
#bigvideo{
  background:url('img/bg.jpg');
}
#contentofvideo{
  margin:0px 100px 0px 400px;
  /*padding:100px 100px;*/
  
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

/*主内容的css样式*/
 @font-face {font-family:myFont; src: url("font/FZMWFont.ttf")}*/
	#whole{
		background: gray;
		 margin:0 auto;
		 padding: 10px;
		background-color: green;
		width: 1300px;
		height: 1300px;
		font-family: "myFont";
	}
	#head{
		height: 100px;
		border:5px solid gray;
		font-size: 40px;
		font-family: "黑体";
		line-height: 100px;
		/*background-color: blue;*/
	}
	.frame{
		height: 220px;
		border:5px solid gray;
		margin-top: 10px;

	}
	.left{
		width: 320px;
		height: 170px;
		float: left;
		margin: 10px;
		margin-left:60px; 
		margin-right:60px; 
*/
	}
	.right{
		width: 800px;
		height: 170px;
		/*background-color: black;*/
		float: left;
		margin: 10px;
		padding: 5px;
		/*opacity: 0.8;*/
		color: black;
		font-family: "myFont";
		font-size: 26px;
	}

	.pic{
		width: 280px;
		height: 200px;
	}
</style>

</head>

<body>
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
              <div class="navbar-header">
                <a href="index.php" class="navbar-brand">GOPA Video</a>
                <a href="message.php" class="navbar-brand">留言</a>
                <a href="video.php" class="navbar-brand">视频列表</a>
                <a href="intro.php" class="navbar-brand">绘画过程</a>
              </div>
          </div>
      </nav>

<!--      <div>-->
<!--          <img src="img/head.jpg" width=100% height="200">-->
<!--      </div>-->

      <div class="jumbotron">
          <div class="container">
          <h1>真.灵魂画手</h1>

          <p>Too young,too simple.Sometimes naiive!I am angry!Θ..Θ</p>
              <form action ="#" method ="post">
                  <?php
                  $x1s="+1s  Θ..Θ";
                  ?>

                  <input type ="submit" value="<?php echo $x1s ?>" class="btn btn-primary btn-lg"/>

              </form>
              <!-- +1s系统 -->
              <?php
              // $filename="/Applications/XAMPP/xamppfiles/htdocs/blog/poem.txt";
                            $filename="poem.txt";

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
    <div id="whole">
		<div id="head"><center>灵魂画手陪你聊</center></div>
		<div id="middle">
			<div class="frame">
				<div class="left">
					<img class="pic" src="img/middle1.jpg" alt="">
				</div>
				<div class="right">
					1.轮廓
					<P style="text-indent:2em;">
                    先仔细观察这幅图案的结构，初步勾勒出轮廓，在微调细化轮廓线的同时，逐步加入细节轮廓，如果是用铅笔，擦除多余的轮廓线。
                    </p>
				</div>
			</div>
			<div class="frame">
				<div class="left">
				<img class="pic" src="img/middle2.jpg" alt="">
				</div>
				<div class="right">
					2.上色
					<P style="text-indent:2em;">
                    参考原图上的配色进行上色，也可以适当地做出配色修改，也可自由发挥，加入一些新的元素。但不管怎么样，配色一定要看上去和谐美观。
                    </p>
				</div>
			</div>
			<div class="frame">
				<div class="left">
				<img class="pic" src="img/middle3.jpg" alt="">
				</div>
				<div class="right">
					3.调整
					<P style="text-indent:2em;">
                    大致观察一下画的配色，看看有什么地方颜色不均匀或衔接不自然等等，并使用一些方法（如：晕染）使画面效果更佳。也可适当发挥想象力，加入一些自己的元素，使画面更丰富，更富有创意。
                    </p>
				</div>
			</div>
			<div class="frame">
				<div class="left">
				<img class="pic" src="img/middle4.jpg" alt="">
				</div>
				<div class="right">
					4.完成！
				</div>
			</div>
		</div>		
   

</body>
</html>