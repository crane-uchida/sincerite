<!DOCTYPE html>

<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>DEMO</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <style>
      body{
        margin:0;
      }
      #wrapper{
        position: relative;
        display: flex;
        flex-wrap: wrap;
      }
      #fixed-area{ /*左エリア*/
        position: sticky;
        top:0;
        width: 50%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color:#000;
        background-size:cover;
        color:#fff;
      }
      #container{ /*中央エリア*/
        width:30%;
      }
      #right-area{ /*右エリア*/
        width:20%;
        background-color:#000;
      }
      section{
        padding:30px;
      }
      section:nth-of-type(2n){
        background:#eee;
      }

      @media screen and (max-width:768px){
        #wrapper{
          display: block;
        }
        section{
          min-height:auto;
        }
        #fixed-area{
          position:relative!important;
          width:100%;
          height: 40vh;
        }
        #container{
          width:100%;
        }
        #right-area{
          width:100%;
        }
      }
    </style>
    <?php
      function isAndroid() {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        return stripos($userAgent, 'android') !== false;
      }
    ?>
    <?php if(isAndroid()): //アンドロイドの場合 ?>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@600;700&family=M+PLUS+Rounded+1c:wght@300&family=Noto+Sans+JP:wght@500;700;900&display=swap" rel="stylesheet">
      <style>
        body{
          font-family:'Noto Serif Japanese';
          font-weight: 700;
        }
      </style>
    <?php endif;?>
  </head>

  <body>
    <div id="wrapper">
      <div id="fixed-area"><!--左固定エリア-->
        <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" width="200">
      </div>
      <div id="container"><!--中央エリア-->
        <section>
          <div class="area">
            <h2>Area 1</h2>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
        </section>
        <section>
          <div class="area">
            <h2>Area 2</h2>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
        </section>
        <section>
          <div class="area">
            <h2>Area 3</h2>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
        </section>
        <section>
          <div class="area">
            <h2>Area 4</h2>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>
        </section>
      </div>
      <div id="right-area"></div><!--右エリア-->
    </div>
  </body>

</html>