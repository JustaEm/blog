<html>

<head>
  <title>Home</title>
</head>
<style>

  body{
    font-family: Andale Mono;
    background-color: #121221
  }

  #content{
    width:625px;
    margin:auto;
    border: 1px solid black;
  }
  #banner{
    border: 1px solid red;
    background: url('img/banner.png');
    height: 143px;

  }
  #menu{
    border: 1px solid yellow;
    height: 55px;
    line-height: 55px;
    vertical-align: bottom;
    text-align: center;
    background-color: #F3E9E5;
    font-family: Zapfino;
  }
  #post_gallery{
    height: 243px;
    background: url('img/post_gallery_bg.png');
  }

  #post_content{
    border: 3px solid red;
  }

  #ingredients{


  }
  .post_margin{
    border: 2px solid blue;
    width: 49%;
    float: left;

  }

</style>

<body>
  <div id='content'>
    <div id= 'banner'></div>
    <div id='menu'>home&nbsp;&nbsp;&nbsp;about&nbsp;&nbsp;&nbsp;posts&nbsp;&nbsp;&nbsp;contact</div>
    <div id='post_gallery'>
      <a href='index.php?recipe=1'>recipe1</a>
      <a href='index.php?recipe=2'>recipe2</a>
    </div>
    <div id='post_content'>

      <div id='ingredients' class='post_margin'>
        dwa jajka
      </div>

      <div id='preparations' class='post_margin'>
        <?php
            $nasza_receptura=$_GET['recipe'];
            $polaczenie = mysqli_connect("localhost", "root", "");
            mysqli_query($polaczenie, "SET CHARSET utf8");
            mysqli_select_db($polaczenie, "blog");

            $rezultat = mysqli_query($polaczenie, "SELECT title, content FROM posty WHERE id=$nasza_receptura");
            while( $row = mysqli_fetch_row($rezultat) ){

              foreach($row as $key=>$value){
                printf('%s<br>', $value);
              }
              printf("<br>");
            }
         ?>
     </div>
     <!-- This is filler to prevent parent div to collapse and not showing its backgroud. -->
     <div style="clear: both"></div>
   </div>
</body>
</html>
