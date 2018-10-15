<!DOCTYPE html>
 <html lang="en">

  <head>
     <meta charset="UTF-8">
     <title>TITLE</title>
     <meta name="description" content="DESCRIPTION">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--[if lt IE 9]>
      <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="./css/main.css" type="text/css" rel="stylesheet">
    <link href="./css/animate.css" type="text/css" rel="stylesheet">
    <?php 
          if(!$pages){
            die("<h1 style='color:red;position:absolute;top:30%;left:40%;'>Fatal error</h1>");
          }
          $request = strtok($_SERVER["REQUEST_URI"],'?');
          $request = strtok($request ,'/');
          $phpUrl = false;
          $cssUrl = false;
          $currentPage = 'home';
          array_unshift($pages, $currentPage);
          foreach($pages as $page) {
            if(!$request) {
              $phpUrl = "/main.PHP";
            } else if ($page == $request) {
              $currentPage = $page;
              $phpUrl = "/pages/" .$page . ".PHP";
              $cssUrl = "../css/templates/" . $page . ".css";
            }
          }
    ?>
    <!-- Import css of single page -->
    <style>
      <?php 
          if(@include dirname(__FILE__).$cssUrl == false) {
            echo "xd";
          } else {
            @include dirname(__FILE__).$cssUrl;
          }
      ?>
    </style>
 </head>


    <?php 
      include(dirname(__FILE__)."/header.PHP");
      if($phpUrl == "" ||  @include dirname(__FILE__).$phpUrl == false )
      {
        include(dirname(__FILE__)."/error.PHP");
      } else {
        include dirname(__FILE__).$phpUrl;
      }
      
      include(dirname(__FILE__)."/footer.PHP");
    ?>
    <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
  </body>
 </html>