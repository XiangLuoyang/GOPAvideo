<?php require('conn.php');
  $result=$db->query("select * from lyb order by ID desc")
?>


<!Doctype>
<html>
<head meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<title>王老菊视频专辑|SunKnight Video</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/pater.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		
<!--视频预载入代码-->
	<!--<style type="text/css">
    body { background-color: #fdfdfd; padding: 0 20px; color:#000; font: 13px/18px monospace; width: 800px;}
    a { color: #360; }
    h3 { padding-top: 20px; }
    </style>-->

    <!-- Load player theme -->
    <link rel="stylesheet" href="themes/maccaco/projekktor.style.css" type="text/css" media="screen" />
	<!-- Load jquery -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>

    <!-- load projekktor -->
    <script type="text/javascript" src="js/projekktor-1.3.09.min.js"></script>

    
<!--over-->
		<script>
			document.documentElement.className = 'js';
		</script>
</head>

<body class="loading">

      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
              <div class="navbar-header">
                  <a href="index.php" class="navbar-brand">SunKnight Video</a>
                  <!--<a href="message.php" class="navbar-brand">留言</a>-->
                  <a href="video.php" class="navbar-brand">视频列表</a>
                  <!--<a href="intro.php" class="navbar-brand">绘画过程</a>-->
              </div>
          </div>
      </nav>

<!--      <div>-->
<!--          <img src="img/head.jpg" width=100% height="200">-->
<!--      </div>-->

      <div class="jumbotron">
          <div class="container">
          <h1>太阳骑士典藏——videos from Bilibili</h1>

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
</div>

<!--首页动态特效-->
<main>
			<section class="content content--c5">
				<img src="img/left.png" width=300px height=344px>
			<div id="player_a" class="projekktor"></div>

                </section>
                <section class="content content--c6">
				<!--<a href="#" class="tilter tilter--5">
					<figure class="tilter__figure">
						<img class="tilter__image" src="img/author1.png" alt="img01" />
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">项罗阳</h3>
							<p class="tilter__description">Luoyang Xiang</p>
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>
				<a href="#" class="tilter tilter--5">
					<figure class="tilter__figure">
						<img class="tilter__image" src="img/author2.png" alt="img02" />
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">林玲</h3>
							<p class="tilter__description">Ling Lin</p>
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>
				<a href="#" class="tilter tilter--5">
					<figure class="tilter__figure">
						<img class="tilter__image" src="img/author3.jpg" alt="img01" />
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">吴丹妮</h3>
							<p class="tilter__description">Danni Wu</p>
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>
				<a href="#" class="tilter tilter--5">
					<figure class="tilter__figure">
						<img class="tilter__image" src="img/author4.jpg" alt="img02" />
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">张仁豪</h3>
							<p class="tilter__description">Renhao Zhang</p>
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>-->
			</section>
			</main>

<!--特效脚本部分代码-->
<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/index.js"></script>


		<!--首页视频部分脚本代码-->
		<script type="text/javascript">
    $(document).ready(function() {
        projekktor('#player_a', {
        poster: 'media/intro.png',
        title: 'this is projekktor',
        playerFlashMP4: 'swf/StrobeMediaPlayback/StrobeMediaPlayback.swf',
        playerFlashMP3: 'swf/StrobeMediaPlayback/StrobeMediaPlayback.swf',
        width: 640,
        height: 385,
        playlist: [
            {
            0: {src: "media/intro.ogv", type: "video/ogg"},
            1: {src: "media/intro.mp4", type: "video/mp4"},
            2: {src: "media/intro.webm", type: "video/webm"}
            }
        ]    
        }, function(player) {} // on ready 
        );
    });
    </script>
		



</body>
</html>
