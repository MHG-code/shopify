<!DOCTYPE html>
<html>
<head>
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

<?= $this->renderSection('links') ?>
<style type="text/css">


.product-device {
  position: absolute;
  right: 10%;
  bottom: -30%;
  width: 300px;
  height: 540px;
  background-color: #333;
  border-radius: 21px;
  transform: rotate(30deg);
}

.product-device::before {
  position: absolute;
  top: 10%;
  right: 10px;
  bottom: 10%;
  left: 10px;
  content: "";
  background-color: rgba(255, 255, 255, .1);
  border-radius: 5px;
}

.product-device-2 {
  top: -25%;
  right: auto;
  bottom: 0;
  left: 5%;
  background-color: #e5e5e5;
}

/*
 * Extra utilities
 */

.flex-equal > * {
  flex: 1;
}
@media (min-width: 768px) {
  .flex-md-equal > * {
    flex: 1;
  }
}

header #logo-main{
    display: block;
    margin: 20px auto;
}
.dropdown-menu{
  text-align: center;
  margin-left: auto;
  margin-right: auto;
    width: 100%;
}
.dropdown-menu li a:hover{
   font-size: 25px;
}
.navbar-nav li a{
  text-transform: capitalize;
  font-weight: bold;
}
.fa-shopping-cart{
  font-size: 20px;
}
<?= $this->renderSection('styles') ?>

</style>


</head>
<body>
  <!-- nav -->
  <header role="banner">
    <img id="logo-main" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/32877/logo-thing.png" width="200" alt="Logo Thing main logo"> 
  </header>
                    <ul class="navbar-nav navbar-expand nav-fill">

                    <!-- <ul class="navbar-nav navbar-expand nav-fill sticky-top"> -->
                        <li class="nav-item dropdown ml-5">
                          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            All Categories
                          </a>                      

                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($categories as $category): ?>
                             <li><a class="dropdown-item" href="<?= base_url(); ?>/<?= $category['categories'] ?>"><?= $category['categories'] ?></a></li>
                             <!-- <li><hr class="dropdown-divider" /></li> -->
                            <?php endforeach; ?>
                          </ul>
                        </li>

                        <li class="text-center pt-1 mr-5"><a href=""><i class="fa fa-shopping-cart" aria-hidden="true"><small>5</small></i></a></li>
                    </ul>
          
        
  <!-- /nav -->

  <!-- Banner -->
  <main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">My Store</h1>
        <p class="lead fw-normal">There are many amazing and Products with god Material.</p>
        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
      </div>
      <!-- <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div> -->
    </div>
    <!-- /Banner -->

  <?php $color_a = 'bg-light'; $color_b = 'bg-dark';  $number_catg=0; ?> <!-- save color for block -->

  <?php foreach ($categories as $catgory): ?> <!-- theme selector -->
    <?php $item_number = 0; ?>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      <?php if ($number_catg%2===0 ){
          $theme = $color_b;
          $card = $color_a;
        }
        else{
         $theme = $color_a;
         $card = $color_b; 
        }
      ?>
      <!-- theme -->
      <div class="<?= $theme ?> me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">

        <!-- heading -->
        <div class="my-3 py-3">
          <h2 class="display-5"><?= $catgory['categories'] ?></h2>
          <!-- <p class="lead">And an even wittier subheading.</p> -->
        </div>
        <!-- /heading -->

        <!-- items  -->
        <div class="shadow-sm mx-auto col-12 col-xl-4 text-center" style="width: auto; height: auto; border-radius: 21px 21px 0 0;">       
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
        <!-- <br> -->
        <!-- /items -->
      </div>
      <!-- /theme -->
    </div>
 <?php $number_catg = $number_catg+1; endforeach; ?>


  
</main>
  
  
<?= $this->renderSection('body') ?>

<!-- Site footer -->
    
  
<script src="<?= base_url() ?>/java/core.js"></script>

<script type="text/javascript">
    window.onload = function(){
      $("#cart_basket").html(cart_show)
    };

<?= $this->renderSection('script') ?>

  </script>
</body>
</html>