<html lang="en">
  <head>
    
    <title><?= $this->renderSection('title') ?></title>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1" >
     <meta name="description" content>
     <meta name="author" content="MHG, e-commerce, shopify, shoping, decoration, wall decoration, cloks, wooden clocks">
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

    <!-- .......... fonts ....... -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <style type="text/css">
    .close_cart_basket{
      display: none;
    }
    .cart_box{
      display: none;
    }


      <?= $this->renderSection('styles') ?>
    </style>
    
    <?= $this->renderSection('links') ?>

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/styles/base.css">
  
     <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/styles/cart_items.css">


  </head>

  <body class="text-center">
 
    <header class="masthead mb-auto sticky-top  text-center">
          <div class="inner mx-auto">
            <a href="<?= base_url();?>/"><img class="masthead-brand" id="logo-main" src="<?= base_url() ?>/uploads/logo/uk3d-logo.png" width="250" height="100" alt="Logo Thing main logo"></a> 
            <nav class="nav nav-masthead justify-content-center mt-4 mt-lg-5 mb-5">
              <ul class="navbar-nav navbar-expand nav-fill">
                      <!-- <ul class="navbar-nav navbar-expand nav-fill sticky-top"> -->
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              All Categories
                    </a>                      

                  <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                    <?php foreach ($categories as $category): ?>
                    <li><a class="dropdown-item" href="<?= base_url(); ?>/items/<?= $category['categories'] ?>"><?= $category['categories'] ?></a></li>
                               <!-- <li><hr class="dropdown-divider" /></li> -->
                    <?php endforeach; ?>
                  </ul>
                    </li>
                    <li class="pt-2 ml-5 cart_basket text-dark"><a id="cart_basket" > </a></li>
                    <li class="pt-2 ml-5 close_cart_basket text-danger"><a id="close_cart_basket" >
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-dash-fill" viewBox="0 0 16 16">
                          <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1z"/>
                      </svg>
                    </a>
                  </li>
              </ul>
            </nav>
          </div>
    </header>

    <div class="cart_box cart-items bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-white">
    
    </div>

    
      <?= $this->renderSection('main') ?>
   

   
      <?= $this->renderSection('section') ?>
    


    <footer class="mastfoot mt-auto">
          <div class="inner">
            <p>Copyright &copy; 2021 All Rights Reserved by @MHG.</p>
          </div>
    </footer>

    <script src="<?= base_url() ?>/java/core.js"></script>
    <script src="<?= base_url() ?>/java/cart.js"></script>


    <script type="text/javascript">
      window.onload = function(){
        $("#cart_basket").html(cart_show)
      };

      <?= $this->renderSection('script') ?>
    </script>
  </body>
</html>