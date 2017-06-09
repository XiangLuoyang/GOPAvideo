


<!Doctype>
<html>
<head meta charset="utf-8">
<title>王老菊视频专辑|SunKnight Video</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <script type="text/javascript" src="jquery-ui/js/jquery.js"></script>
    
    <script type="text/javascript" src="js/jquery.osmplayer.compressed.js"></script>
    <script type="text/javascript" src="templates/default/jquery.media.template.default.compressed.js"></script>
    <?php
      // $filename="/Applications/XAMPP/xamppfiles/htdocs/blog/poem.txt";
      $filename="videoAddress.txt";
      $file=fopen($filename,'r+') or die ("ERROR OPEN");
      $fileContent=file_get_contents($filename);
      // $videoList=explode("\n",$fileContent);
      // echo $videoList;
      $videoTitle=preg_match($fileContent,'/title');
      echo $videoTitle;
    ?>
    <script type="text/javascript">
      $(function() {     
        $(".btn").click(function(){
          $.ajax({
          url: 'playlist.xml',
          type: 'GET',
          dataType: 'xml',
          success: function (xml) {
            var mediaListNumber = $(xml).find("track").length;
            for (var i = 0; i < mediaListNumber; i++) {
                var location = $(xml).find('location').eq(i).text();
            }
          }
        })
      })
    
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
</style>

</head>

<body>
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

          <p>Wo de tian a ! Θ..Θ</p>
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
      <!-- 视频列表页面具体内容 -->
<div id='bigvideo'>
     <div id="contentofvideo">
       <h2>@怕上火暴王老菊</h2><br/>
    <div id="mediaplayerloading" style="width:550px;height:400px;">
      <img src="templates/default/images/busy.gif" />
    </div>
    <div id="mediaplayer" class="mediashowplaylist mediashowtitle mediaplayerdialog ui-dialog ui-widget ui-widget-content ui-corner-all" style="width:800px;height:600px;">
      <div id="mediatitlebar" class="ui-widget-header ui-corner-top ui-helper-clearfix">
        <div id="mediatitlelinks">
          <div id="mediatitlelinksinner">
            <a href="#fullscreen" id="mediafullbutton" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-extlink"></span></a>
            <a href="#maximize" id="mediamaxbutton" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-arrow-4-diag"></span></a>
            <a href="#menu" id="mediamenubutton" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-info"></span></a>
          </div>
        </div>
      </div>  <div id="mediaplayer" class="ui-helper-clearfix">
        <div id="mediamenu" class="ui-tabs ui-widget ui-widget-content ui-corner-all" id="tabs">
          <div id="mediamenuclose">
            <span class="ui-icon ui-icon-circle-close"></span>
          </div>
          <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
            <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#mediaembed">embed</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#mediaelink">link</a></li>
            <li class="ui-state-default ui-corner-top"><a href="#mediainfo">info</a></li>
          </ul>
          <div id="mediaembed" class="menucontent ui-tabs-panel ui-widget-content ui-corner-bottom" id="mediaembed">
            <div id="mediaembedForm" name="mediaembedForm">
              <label for="mediaembedCode">Embed</label>
              <input id="mediaembedCode" name="mediaembedCode" type="text" value="" readonly />
            </div>
          </div>
          <div id="mediaelink" class="menucontent ui-tabs-panel ui-widget-content ui-corner-bottom" id="mediaelink">
            <div id="mediaelinkForm" name="mediaelinkForm">
              <label for="mediaelinkCode">URL</label>
              <input id="mediaelinkCode" name="mediaelinkCode" type="text" value="" readonly />
            </div>
          </div>
          <div id="mediainfo" class="menucontent ui-tabs-panel ui-widget-content ui-corner-bottom" id="mediainfo">
            <p>
              <a target="_blank" href="http://www.mediafront.org">Open Standard Media Player</a> version 0.01<br/><br/>
              Built by <a target="_blank" href="http://www.alethia-inc.com">Alethia Inc.</a>
            </p>
          </div>
        </div>    <div id="medianode">
          <div id="mediaregion">
            <div id="mediabusy"><img src="templates/default/images/busy.gif" /></div>
            <div id="mediaplay"><img src="templates/default/images/play.png" /></div>
            <div id="mediapreview"></div>
            <div id="mediadisplay"></div>
          </div>
        </div>    <div id="mediacontrol" class="ui-widget-header ui-corner-bottom">
          <div id="mediacontrolleft">
            <div id="mediaplaypause" class="ui-state-default ui-corner-all">
              <div class="on">
                <span class="ui-icon ui-icon-play"></span>
              </div>
              <div class="off" style="display:none">
                <span class="ui-icon ui-icon-pause"></span>
              </div>
            </div>
            <div id="mediacurrenttime">00:00</div>
          </div>
          <div id="mediacontrolright">
            <div id="mediatotaltime">00:00</div>
            <div id="mediamute" class="ui-state-default ui-corner-all">
              <div class="on" style="display:none">
                <span class="ui-icon ui-icon-volume-off"></span>
              </div>
              <div class="off">
                <span class="ui-icon ui-icon-volume-on"></span>
              </div>
            </div>
            <div id="mediavolumebar">
              <div id="mediavolume" class="ui-state-default">
                <div id="mediavolumeupdate">
                  <div id="mediavolumehandle">
                    <span class="ui-icon ui-icon-triangle-1-s"></span>
                  </div>
                  <div class="ui-state-active"></div>
                </div>
              </div>
            </div>
          </div>
          <div id="mediacontrolcenter">
            <div id="mediaseekbar">
              <div id="mediaseek" class="ui-state-default">
                <div id="mediaseekupdate">
                  <div id="mediaseekhandle">
                    <span class="ui-icon ui-icon-triangle-1-s"></span>
                  </div>
                  <div class="ui-state-active"></div>
                </div>
                <div id="mediaseekprogress"><div class="ui-state-hover"></div></div>
              </div>
            </div>
          </div>
        </div>  </div>
      <div id="mediaplaylist">
        <div id="mediascrollwrapper">
          <div id="mediabusy" class="ui-state-default ui-state-disabled"><img src="templates/default/images/busy.gif" /></div>
          <div id="mediascroll" class="ui-helper-clearfix">
            <div id="mediascrollbarwrapper">
              <div id="mediascrollup" class="ui-state-default"><span class="ui-icon ui-icon-triangle-1-n"></span></div>
              <div id="mediascrollbar">
                <div id="mediascrolltrack" class="ui-widget-content">
                  <div id="mediascrollhandle" class="ui-state-default"><span class="ui-icon ui-icon-grip-dotted-horizontal"></span></div>
                </div>
              </div>
              <div id="mediascrolldown" class="ui-state-default"><span class="ui-icon ui-icon-triangle-1-s"></span></div>
            </div>         <div id="medialistmask">
              <div id="medialist">
                <div id="mediateaser" class="ui-state-default">
                  <div id="mediaimage" class="mediafield ui-widget-content" type="image" field="thumbnail"></div>
                  <div id="mediatitle" class="mediafield ui-helper-clearfix" type="text" field="title">Sample Title</div>
                </div>        </div>
            </div>
          </div>
        </div>
        <div id="mediapager" class="ui-widget-header ui-corner-bottom">
          <div id="mediapagerleft">
            <div id="mediaprevpage" class="mediapagerlink ui-state-default ui-corner-all"><span class="ui-icon ui-icon-seek-prev"></span></div>
            <div id="medialoadprev" class="mediapagerlink ui-state-default ui-corner-all"><span class="ui-icon ui-icon-triangle-1-w"></span></div>
            <div id="mediaprev" class="mediapagerlink ui-state-default ui-corner-all"><span class="ui-icon ui-icon-carat-1-w"></span></div>
          </div>
          <div id="mediapagerright">
            <div id="medianext" class="mediapagerlink ui-state-default ui-corner-all"><span class="ui-icon ui-icon-carat-1-e"></span></div>
            <div id="medialoadnext" class="mediapagerlink ui-state-default ui-corner-all"><span class="ui-icon ui-icon-triangle-1-e"></span></div>
            <div id="medianextpage" class="mediapagerlink ui-state-default ui-corner-all"><span class="ui-icon ui-icon-seek-next"></span></div>
          </div>
        </div></div>
    </div>
    </div>
    </div>
<!--<script src="js/medialistControl.js"></script>-->
</body>
</html>