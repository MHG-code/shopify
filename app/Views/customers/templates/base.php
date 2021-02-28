<!DOCTYPE html>
<html>
<head>
   <title><?= $this->renderSection('title') ?></title>

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- for cart basket -->
  <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  </script>

   <!-- Resources for nav bar -->
   <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
   <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
   <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> -->

   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />

   <!-- Resources -->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
   <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
   <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<style type="text/css">

/*nav bar*/
.navbar {
  width: 100%;
  z-index: 1;
  height: 60px;
  background: rgb(19 37 45 / 92%);
  position: sticky;
  top: 0;
}
.dropdown-menu{
    background: rgb(19 37 45 / 92%);
}
.dropdown-menu li a:hover{
    background: rgb(19 37 45 / 40%);
}
.navbar li a{
  cursor: pointer;
}
nav ul li a{
  text-transform: capitalize;
  font-weight: bold;
  color: rgba(255,255,255,0.55) !important;
 
}

nav ul li a:hover{
  color: white !important;
}

nav ul li{
  margin-right: 20px;
}
.navbar small{
  text-transform: capitalize;
  font-weight: bold; 
}
.text-muted{
  color: rgba(255,255,255,0.55) !important;
  
}
.navbar img{
  margin-top: 5px;
  margin-bottom: 5px;
  margin-left: 10px;
  margin-right: 5px;
  width: 50px;
  height: 50px;
}
@media(max-width:1000px) {
    .navbar {
        height: auto;
    }
    .navbar img{
  margin-top: 2px;
  margin-bottom: 2px;
  margin-right: 150px;
}
}
/*header*/
header{
  padding-top: 0px;
}

.carousel-inner .imgOverlay {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(6, 28, 38, 0.5);
}

.carousel-inner img {
   width: 100%;
}

/*CONTROL*/
.carousel-control {
    width: auto;
}

.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .fa-chevron-left,
.carousel-control .fa-chevron-right {
  position: absolute;
  top: 47%;
  right: 0;
  z-index: 5;
  display: inline-block;
  background-color: #000;
  width: 38px;
  height: 38px;
  line-height: 40px;
  font-size: 14px;
}

.carousel-control .icon-prev,
.carousel-control .fa-chevron-left {
  left: 0;
}

.carousel-indicators li {
  width: 12px;
  height: 12px;
  margin: 0 1px;
  border: 2px solid #fff;
  opacity: .8;
}

.carousel-indicators .active {
    background-color: #28ace2;
    border-color: #28ace2;
}

.carousel-control .icon-prev, .carousel-control .fa-chevron-left,
.carousel-control .icon-right, .carousel-control .fa-chevron-right {
    border-radius: 40px;
}

.carousel-control .icon-prev, .carousel-control .fa-chevron-left {
    left: 30px;
}

.carousel-control .icon-right, .carousel-control .fa-chevron-right {
    right: 30px;
}
/*.carousel-inner img{
  background-size: contain;
  height: 750px;
  
}

@media(max-width:1000px) {
    .carousel-inner img{
  background-size: contain;
  height: auto;
  
}
}*/

.site-footer
{
  background: rgb(19 37 45 / 92%);
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.youtube:hover
{
  background: #bb0000;
}
.social-icons a.instagram:hover
{
  background: #125688;
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
<?= $this->renderSection('styles') ?>

</style>
</head>
<body>
  <div class="col-12 col-md-12 col-lg-8 col-xl-8 mx-auto">
    <div class="container">
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
                         <li><a class="dropdown-item" href="<?= base_url(); ?>/spesific_items/<?= $category['_id'] ?>"><?= $category['categories'] ?></a></li>
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
    </div>
  </div>

<script type="text/javascript">
    window.onload = function(){
      var items = 0   
        for (i = 0; i < localStorage.length; i++)
         {
          x = localStorage.key(i);

          if(x[0] == 'm' && x[1] == 'h' && x[2] == 'g')
          {
            items = items+1
          }
        }
      $("#cart_basket").html('<span class="glyphicon glyphicon-shopping-cart"></span>'+items+' - Items<span class=""></span>')
      
    };

<?= $this->renderSection('script') ?>

  </script>
</body>
</html>