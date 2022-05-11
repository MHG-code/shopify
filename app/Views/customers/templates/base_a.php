<!DOCTYPE html>
<html>
<head>
   <title><?= $this->renderSection('title') ?></title>

   <meta name="viewport" content="width=device-width, initial-scale=1">
   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  </script>

   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />

   <!-- Resources -->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
   <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
   <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

   <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/styles/base.css">

   <?= $this->renderSection('links') ?>
   
<style type="text/css">

<?= $this->renderSection('styles') ?>

</style>
</head>
<body>
  <div class="col-12 col-md-12 col-lg-8 col-xl-8 mx-auto">
    <!-- <div class="container"> -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand ml-2 p-2" href="<?= base_url() ?>" >
            <img src="<?= base_url('uploads/logo/'.$profile['img']); ?>" class="d-inline-block align-top rounded-circle" alt="">
           <small class="text-muted"><?=  $profile['name'] ?></small>
         </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-end">
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                      all Catergories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     
                      <?php foreach ($categories as $category): ?>
                         <li><a class="dropdown-item" href="<?= base_url(); ?>/<?= $category['categories'] ?>"><?= $category['categories'] ?></a></li>
                         <!-- <li><hr class="dropdown-divider" /></li> -->
                      <?php endforeach; ?>
                         
                      <!-- <li><a class="dropdown-item" href="#">Laptop</a></li>
                      <li><a class="dropdown-item" href="#">Books</a></li>
                      <li><hr class="dropdown-divider" /></li>
                      <li>
                        <a class="dropdown-item" href="#">Cars</a>
                      </li> -->
                    </ul>
              </li>
              <li class="nav-item">
                    <a  class="nav-link" id="cart_basket" data-toggle="" role="" aria-expanded="false">
                      
                    </a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

  <header>
        <!--Carousel Wrapper-->
        <div id="carousel" class="carousel slide z-depth-1-half" data-ride="carousel">

          <!--Indicators-->

          <!-- <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol> -->

      <!-- slides    -->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="imgOverlay"></div>
            <img src="<?= base_url('uploads/banner/cc.jpg') ?>">
            <div class="mask rgba-black-light"></div>
            <div class="carousel-caption">
                <h3>Shoping</h3>
                <p>We are here for you with many intrusting Products</p>
            </div>
        </div>
        <div class="carousel-item">
          <div class="imgOverlay"></div>
            <img src="<?= base_url('uploads/banner/dd.jpg') ?>">
            <div class="carousel-caption">
                <h3>Electronice</h3>
                <p>We have best quality Laptop and mobiles</p>
            </div>
        </div>
        <div class="carousel-item">
          <div class="imgOverlay"></div>
            <img src="<?= base_url('uploads/banner/bb.jpg') ?>">
            <div class="carousel-caption">
                <h3>Secure Shoping</h3>
                <p>we have secure payment method</p>
            </div>
        </div>

          <div class="carousel-item">
          <div class="imgOverlay"></div>
            <img src="<?= base_url('uploads/banner/aa.gif') ?>">
            <div class="carousel-caption">
                <h3>Third slide</h3>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
    </div>
    <!--Controls-->
          <!-- <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="">Next</span>
          </a> -->
          <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
  </header>
  
<?= $this->renderSection('body') ?>

<!-- Site footer -->
    <footer class="site-footer">
      <div class="container mt-0 mb-0">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"><?=  $profile['about'] ?></p>
          </div>


          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container mt-0 mb-0">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="#">MHG</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="<?=  $profile['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
              <li><a class="instagram" href="<?=  $profile['instagram'] ?>"><i class="fa fa-instagram"></i></a></li>
              <li><a class="youtube" href="<?=  $profile['youtube'] ?>"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
</footer>
    <!-- </div> -->
  </div>
<script src="<?= base_url() ?>/java/core.js"></script>

<script type="text/javascript">
    window.onload = function(){
      $("#cart_basket").html(cart_show)
    };

<?= $this->renderSection('script') ?>

  </script>
</body>
</html>