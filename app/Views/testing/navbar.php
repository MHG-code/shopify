<html lang="en"><head>
    <title><?= $this->renderSection('title') ?></title>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1" >
   <meta name="description" content>
   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
   <meta name="generator" content="Hugo 0.80.0">

   <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">

   <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
   <link rel="icon" type="image/png" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" >
   <link rel="icon" type="image/png" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" >
   <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
   <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
   <link rel="icon" type="text/css" href="/docs/5.0/assets/img/favicons/favicon.ico">

  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <!-- ................. -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">



    <style>
    header{
      overflow: auto;
      background-color: #ffffff;
      max-width: 100em;
    }
    header .inner{
      max-width: 42em;
    }
    header #logo-main{
    display: block;
    margin: 20px auto;
}

      /*
 * Globals
 */

/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}


/*
 * Base structure
 */

html,
body {
  color: black !important;
  /*text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);*/
  /*box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);*/
}

/*
 * Header
 */
.masthead {
  margin-bottom: 2rem;
}

.masthead-brand {
  margin-bottom: 0;
}

.nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: rgba(255, 255, 255, .5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}


@media (min-width: 48em) {
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}

/*main*/
main .carousel-fade .carousel-item {
  height: auto;
}

main .carousel-fade .carousel-item img {
  height:100vh;
  width:100%;
  max-width:100%;
  background-size:cover;
  background-origin:content-box;
  background-clip:content-box;
  background-position:center;
  color:rgba(0,0,0,0.56);
  filter:brightness(30%);
  right:0;
  left:0;
  resize:both;
}

main .carousel-control-prev-icon, main .carousel-control-next-icon {
  background:none;
  border:2px solid #fff;
  height:60px;
  width:60px;
  line-height:55px;
  opacity:9 !important;
  filter:brightness(100%) !important;
  font-size:40px;
  border-radius:100%;
}

main .carousel-control-prev-icon:hover, main .carousel-control-next-icon:hover {
  background:#fff;
  opacity:9;
  color:#000;
}



main .carousel-caption {
  top:220px;
}

@media (min-width: 992px) {
  main .carousel-caption {
    top:220px !important;
  }
}

main .carousel-caption h3 {
  font-size:70px;
  text-align:center;
  font-weight:bold;
}

@media (min-width: 992px) {
  main .carousel-caption h3 {
    font-size:70px !important;
    text-align:center;
    font-weight:bold;
  }
}

main .carousel-caption p {
  font-size:30px;
  margin-top:20px;
  text-align:center;
}

@media (min-width: 992px) {
  main .carousel-caption p {
    font-size:30px !important;
    margin-top:20px;
    text-align:center;
  }
}

main .carousel-caption .btn {
  border:2px solid #fff;
  border-radius:0;
}

@media (min-width: 300px) {
  main .img-fluid.w-100.d-block {
    height:auto;
  }
}

@media (min-width: 576px) {
  main .img-fluid.w-100.d-block {
    height:auto;
  }
}

@media (min-width: 768px) {
  main .img-fluid.w-100.d-block {
    height:auto;
  }
}

@media (min-width: 992px) {
  main .img-fluid.w-100.d-block {
    height:100vh;
  }
}

@media (min-width: 300px) {
  main .carousel-caption {
    top:0;
    font-size:20px;
  }
}

@media (min-width: 300px) {
  main .carousel-caption h3 {
    font-size:20px;
  }
}

main .carousel-caption p {
  font-size:15px;
}

@media (min-width: 768px) {
  main .carousel-caption {
    top:100px;
  }
}

@media (min-width: 768px) {
  main .carousel-caption h3 {
    font-size:40px;
  }
}
/*
 * Extra utilities
 */

@media (min-width: 768px) {
  .flex-md-equal > * {
    flex: 1;
  }
}

/*
 * Footer
 */
.mastfoot {
  color: #000000;
}
.catgory_heading{
 padding-top: 10% !important;
}
    </style>
    <!-- Custom styles for this template -->
    <!-- <link href="https://getbootstrap.com/docs/4.5/examples/cover/cover.css" rel="stylesheet"> -->
  </head>

  <body class="text-center">
   
      <header class="masthead mb-auto sticky-top  text-center">
        <div class="inner mx-auto">
          <img class="masthead-brand" id="logo-main" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/32877/logo-thing.png" width="200" alt="Logo Thing main logo"> 
          <nav class="nav nav-masthead justify-content-center mt-4 mt-lg-5 mb-5">
            <ul class="navbar-nav navbar-expand nav-fill">
                    <!-- <ul class="navbar-nav navbar-expand nav-fill sticky-top"> -->
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-dark" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            All Categories
                  </a>                      

                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php foreach ($categories as $category): ?>
                  <li><a class="dropdown-item" href="<?= base_url(); ?>/<?= $category['categories'] ?>"><?= $category['categories'] ?></a></li>
                             <!-- <li><hr class="dropdown-divider" /></li> -->
                  <?php endforeach; ?>
                </ul>
                  </li>
                  <li class="pt-1 ml-5"><a href="" id="cart_basket" > </a></li>
            </ul>
          </nav>
        </div>
      </header>

      <main role="banner">
        <div class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"><img class="img-fluid w-100 d-block" src="<?= base_url() ?>/uploads/banner/e.jpg" alt="Slide Image">
                    <div class="carousel-caption">
                        <h3 class="animated slideInDown">Best Wall Clock</h3>
                        <p class="animated slideInLeft">We Decorate Your wall</p><button class="btn btn-outline-light btn-lg animated slideInUp" type="button">Coming Soon...</button></div>
                </div>
                <div class="carousel-item"><img class="img-fluid w-100 d-block" src="<?= base_url() ?>/uploads/banner/d.jpg" alt="Slide Image">
                    <div class="carousel-caption">
                        <h3 class="animated fadeInDown">Best Wall Clock</h3>
                        <p class="animated slideInUp">We Decorate Your wall</p><button class="btn btn-outline-light btn-lg animated slideInLeft" type="button">Coming Soon...</button></div>
                </div>
            </div>
            <div class=""><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"><i class="la la-cutlery"></i></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1"
                    role="button" data-slide="next"><span class="carousel-control-next-icon"><i class="la la-cutlery"></i></span><span class="sr-only">Next</span></a></div>
        </div>
      </main>


      <section class="catgories mt-5">
        <?php $color_a = 'bg-transparent'; $color_b = 'bg-dark'; $h_a = 'text-white-50'; $h_b= 'text-body';   $number_catg=0; ?> <!-- save color for block -->

        <?php foreach ($categories as $catgory): ?> <!-- theme selector -->
          <?php $item_number = 0; ?>
          <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <?php if ($number_catg%2===0 ){
                $theme = $color_b;
                $card = $color_a;
                $h = $h_a;
              }
              else{
               $theme = $color_a;
               $card = $color_b;
               $h = $h_b;
              }
            ?>
            <!-- theme -->
            <div class="<?= $theme ?> me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">

              <div class="row">
              <!-- heading -->
              <div class="catgory_heading my-3 py-3  my-lg-5 py-lg-5 my-xl-5 py-xl-5 col-12 col-md-4 col-lg-4 col-xl-4">
                <a href="">
                <h1 class="<?= $h ?>"><?= $catgory['categories'] ?></h1>
                </a>
                <!-- <p class="lead">And an even wittier subheading.</p> -->
              </div>
              <!-- /heading -->

              <!-- items  -->
              <div class="shadow-sm col-12 col-md-4 col-lg-4 col-xl-4 text-center" style="width: auto; height: auto; border-radius: 21px 21px 0 0;">       
                <div id="<?= $catgory['_id'] ?>" class="carousel slide w-100" data-ride="carousel">
                  <div class="carousel-inner w-100" role="listbox">
                    <?php foreach ($items['items'] as $item => $i): ?>
                        <?php if ($catgory['categories'] === $i['categories']){
                          if ($item_number === 0 ){
                            $carousel_item_class = 'class="carousel-item active"'; 
                          }
                          else{
                            $carousel_item_class = 'class="carousel-item"';
                          }
                        ?>

                    <div <?= $carousel_item_class ?> >
                      <div class="d-flex justify-content-center">
                        <div class="image py-3">
                          <img src="<?= base_url('uploads/items/'.$i['src']) ?>" style="width: 100%; height: auto; border-radius: 21px 21px 0 0;">
                        </div>            
                      </div>
                    </div>
                    <?php $item_number = $item_number+1; ?>
                    <?php }endforeach; ?>
                  </div>
                  
                </div>

                <?php if ($item_number > 1) { ?>
                  <a class="carousel-control-prev" href="#<?= $catgory['_id'] ?>" data-slide="prev" style="width: 13%; height: 100%; border-radius: 21px 0 0 0;">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#<?= $catgory['_id'] ?>" data-slide="next" style="width: 13%; height: 100%; border-radius: 0 21px 0 0;">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                  <?php } ?>
              </div>

              <div class="my-3 py-3 my-lg-5 py-lg-5 my-xl-5 py-xl-5 col-12 col-md-4 col-lg-4 col-xl-4">
               
                <h5 class="<?= $h ?>">Best quality season clothes</h5>
               
                <!-- <p class="lead">And an even wittier subheading.</p> -->
              </div>

              </div>
              <!-- <br> -->
              <!-- /items -->
            </div>
            <!-- /theme -->
          </div>
       <?php $number_catg = $number_catg+1; endforeach; ?>
      </section>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Copyright &copy; 2021 All Rights Reserved by @MHG.</p>
        </div>
      </footer>
   <script src="<?= base_url() ?>/java/core.js"></script>

   <script type="text/javascript">
    window.onload = function(){
      $("#cart_basket").html(cart_show)
    };

<?= $this->renderSection('script') ?>

  </script>
  </body>
</html>