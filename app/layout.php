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
    <link href="/www/css/main.css" type="text/css" rel="stylesheet">
    <link href="/www/css/animate.css" type="text/css" rel="stylesheet">
 </head>


     
     <?php include(dirname(__FILE__)."/templates/components/header.PHP"); ?>
      <!-- Ajax calls loader to display content, that crates a single page application -->
      <section id="app-wrapper">
        <div class="container">
          <div class="row" id="app">

          </div>
        </div>
      </section>
    <?php include(dirname(__FILE__)."/templates/components/footer.PHP"); ?>
    <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
    <script> var page = "<?php echo $page; ?>";</script>
    <script src="./www/javascript/main.js"></script>
  </body>
 </html>