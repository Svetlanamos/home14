<?php
$data = require('data.php');
$htmlObj = new html();
$htmlArray = $htmlObj->returnHtml();
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title><?php echo $htmlArray['title'] ?></title>
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="logo-menu">
                <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="menu">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <?php
                        foreach ($htmlArray['navbar-nav'] as $key => $val) {
                            ?>
                            <li class="nav-item <?php if($key == 0) echo 'active' ?>">
                                <a class="nav-link border-menu hover-menu px-4" href="<?php echo $val['url']?>"><?php echo $val['text']?>
                                    <?php if($key == 0) echo '<span class="sr-only">(current)</span>' ?>
                                </a>
                            </li>
                            <?php
                        }
                        ?>

                        <!-- <li class="nav-item active">
                             <a class="nav-link border-menu hover-menu px-4" href="#">Home <span
                                     class="sr-only">(current)</span></a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link border-menu hover-menu px-4" href="#">About us</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link border-menu hover-menu px-4" href="#">Offer</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link border-menu hover-menu px-4" href="#">Portfolio</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link border-menu hover-menu px-4" href="#">Contact</a>
                         </li>-->


                    </ul>
                </div>
            </div>
        </nav>
        <div class="block1-text">
            <h1><?php echo $htmlArray['block1-text']['h1'] ?></h1>
            <p><?php echo $htmlArray['block1-text']['p'] ?></p>
            <button type="button" class="button1">Ask for price</button>
        </div>
        <div class="block-images">
            <a href="#"><img src="src/img/scroll.png"></a>
        </div>
    </div>
</header>
<section>
    <div class="background-sec2">
        <div class="background-photo1">
            <div class="block-design1">
                <h2><?php echo $config['h2']; ?></h2>
                 <p class="text-sag"><?php echo $config['p']; ?></p>
                 <button type="button" class="button1"><?php echo $config['button']; ?></button>
             </div>
         </div>
         <div class="background-photo2">
             <div class="block-design2">
                <h2>Best<span>Code</span></h2>
                 <p class="text-sag"><?php echo $config['p']; ?></p>
                 <button type="button" class="button1"><?php echo $config['button']; ?></button>
             </div>
         </div>
     </div>
 </section>
 <section>
     <div class="container">
         <div>
             <h3 class="mt-5 headline-text"><?php echo $config['h3']; ?></h3>
         </div>
         <div class="web-web">
             <div class="web-1">
                 <div>
                     <ul>
                         <li><img src="assets/img/bac-8.png"></li>
                     </ul>
                     <ul>
                         <li><h4><?php echo  $config['web-1']['h4']; ?></li>
                         <li><p><?php echo  $config['web-1']['p']; ?></p></li>
                     </ul>
                 </div>
                 <div>
                     <ul>
                         <li><img src="assets/img/bac-6.png"></li>
                     </ul>
                     <ul>
                         <li><h4><?php echo  $configOn['web-1']['h4']; ?></h4></li>
                         <li><p class="text-left"><?php echo  $configOn['web-1']['p']; ?></p></li>
                     </ul>
                 </div>
             </div>
             <div class="web-2">
                 <div>
                     <ul>
                         <li><img src="assets/img/bac-7.png"></li>
                     </ul>
                     <ul>
                         <li><h4><?php echo  $configOne['web-2']['h4']; ?></h4></li>
                         <li><p><?php echo  $configOne['web-2']['p']; ?></p></li>
                     </ul>
                 </div>
                 <div>
                     <ul class="pt-4">
                         <li><img src="assets/img/bac-5.png"></li>
                     </ul>
                     <ul>
                         <li><h4><?php echo  $configTru['pt-4']['h4']; ?></h4></li>
                         <li><p><?php echo  $configTru['pt-4']['p']; ?></p></li>
                     </ul>
                 </div>
             </div>
         </div>
         <div class="but-press">
             <button type="button" class="button1 align-content-sm-center"><?php echo $config['button']; ?></button>
         </div>
     </div>
 </section>
 <section>
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <div class="d-flex clan">
                     <div class="clan1">
                     </div>
                     <div class="clan2">
                         <div class="portfolio">
                             <h5><?php echo  $configTru['h5']; ?></h5>
                             <p class="text-sag py-5"><?php echo  $configTru['p']; ?></p>
                             <div class="button-temp">
                                 <button type="button" class="button1"><?php echo $config['button']; ?></button>
                             </div>
                         </div>
                     </div>
                     <div class="clan3">
                     </div>
                 </div>
             </div>
             <div class="carousel-item">
                 <div class="d-flex clan">
                     <div class="clan2">
                         <div class="portfolio">
                             <h5><?php echo  $configTru['h5']; ?></h5>
                             <p class="text-sag py-5"><?php echo  $configTru['p']; ?></p>
                             <div class="button-temp">
                                 <button type="button" class="button1"><?php echo $config['button']; ?></button>
                             </div>
                         </div>
                     </div>
                     <div class="clan1">
                     </div>
                     <div class="clan3">
                     </div>
                 </div>
             </div>
             <div class="carousel-item">
                 <div class="d-flex clan">
                     <div class="clan3">
                     </div>
                     <div class="clan2">
                         <div class="portfolio">
                             <h5><?php echo  $configTru['h5']; ?></h5>
                             <p class="text-sag py-5"><?php echo  $configTru['p']; ?></p>
                             <div class="button-temp">
                                 <button type="button" class="button1"><?php echo $config['button']; ?></button>
                             </div>
                         </div>
                     </div>
                     <div class="clan1">
                     </div>
                 </div>
             </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
         </a>
     </div>
 </section>
 <section>
     <div class="background-13">
         <div class="container">
             <div class="portfolio py-5">
                 <h5><?php echo $container ['portfolio py-5']['h5']; ?></h5>
                 <p class="text-sag py-5"><?php echo $container ['portfolio py-5']['p']; ?></p>
             </div>
             <div class="row rowset">
                 <div class="col-md-3">
                     <ul>
                         <li>
                             <a href="#" class="pl-4"><img src="assets/img/bac-9.png"></a>
                         </li>
                         <li><h5 class="py-md-4"><?php echo $container ['col-md-3']['h5']; ?></h5></li>
                         <li><p class="text-sag"><?php echo $container ['col-md-3']['p']; ?></p></li>
                     </ul>
                 </div>
                 <div class="col-md-3">
                     <ul>
                         <li>
                             <a href="#" class="pl-4"><img src="assets/img/bac-10.png"></a>
                         </li>
                         <li><h5 class="py-md-4"><?php echo $container ['col-md-3']['py-md-4']; ?></h5></li>
                         <li><p class="text-sag"><?php echo $container ['col-md-3']['text']; ?></p></li>
                     </ul>
                 </div>
                 <div class="col-md-3">
                     <ul>
                         <li>
                             <a href="#" class="pl-4"><img src="assets/img/bac-11.png"></a>
                         </li>
                         <li><h5 class="py-md-4"><?php echo $container ['col-md-3']['py-md-44']; ?></h5></li>
                         <li><p class="text-sag"><?php echo $container ['col-md-3']['text44']; ?></p></li>
                     </ul>
                 </div>
                 <div class="col-md-3">
                     <ul>
                         <li>
                             <a href="#" class="pl-4"><img src="assets/img/bac-12.png"></a>
                         </li>
                         <li><h5 class="py-md-4"><?php echo $container ['col-md-3']['py-md-444']; ?></h5></li>
                         <li><p class="text-sag"><?php echo $container ['col-md-3']['text444']; ?></p></li>
                     </ul>
                 </div>
             </div>
             <div class="press">
                 <button type="button" class="button1"><?php echo $config['button']; ?></button>
             </div>
         </div>
     </div>
 </section>
 <section>
     <div class="bac-map">
         <div class="container fut">
             <div class="map-pin"><a href="#"><img src="assets/img/pin.png"></a></div>
         </div>
     </div>
 </section>
 <section>
     <p class="social py-5"><?php echo $container['social']; ?></p>
 </section>
 <script src="assets/js/libs.js"></script>
 <script src="assets/js/main.js"></script>
 </body>
 </html>

