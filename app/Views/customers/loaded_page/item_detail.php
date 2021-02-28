<!DOCTYPE html>
<html>
<head>
  <title>item detail</title>

   
   <!-- Resources -->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
   <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
   <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

  <style type="text/css">
     .card img {
  max-width: 100%; }
  
.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  display: block;
  margin-left: auto;
  margin-right: auto;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }
.preview-thumbnail {
  display: inline-block;
  white-space: nowrap;
  border: none;
  margin-top: 15px;
  overflow-y: hidden;

   }
  .preview-thumbnail li {
    display: inline;
    cursor: zoom-in;
    width: 18%;
    margin-right: 2.5%;
    margin-bottom: 2.5%;
     }

    .preview-thumbnail li img {
      width: 20%;
      height: 100%;
      display: block-inline;
       }
    .preview-thumbnail li a {
      text-decoration: none;
      padding: 0;
      margin: 0; 
      }
    .preview-thumbnail li:last-of-type {
      margin-right: 0;
     }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    /*width: 100%;
    height: 100%;*/
    width: 420px;
    height: 420px;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }
@media screen and (max-width: 996px) {
  .tab-content img {
    width: 100%;
    height: 100%;
    /*width: 420px;
    height: 320px;*/
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }
    }

.container{
      margin-top: -80px;
    }
.overlay .card {
  padding: 3em;
  line-height: 1.5em;
}

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

            .overlay {
  overflow-x: auto;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: rgba(0, 0, 0, 0.0);
  border-radius: 5px;
  width: auto;
  height: auto;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  cursor: pointer;
  position: absolute;
  top: 10px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: orange;
}

.preview-thumbnail::-webkit-scrollbar-track
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.6);
  width: auto;
  background-color: #CCCCCC;
}

.preview-thumbnail::-webkit-scrollbar
{
  width: auto;
  background-color: #F5F5F5;
}

.preview-thumbnail::-webkit-scrollbar-thumb
{
  background-color: #FFF;
  background-image: -webkit-linear-gradient(90deg,
                                            rgba(0, 0, 0, 1) 0%,
                        rgba(0, 0, 0, 1) 25%,
                        transparent 100%,
                        rgba(0, 0, 0, 1) 75%,
                        transparent)
}

  </style>
</head>
<body>
  <div id="popup1" class="overlay">
      <div class="popup">
        <div class="container col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
          <div class="card">
            <a class="close">×</a>
            <div class="container-fliud">
              <div class="row">
                <div class="details col-12">
                  <h3 class="product-title"><?php echo $items['title']; ?></h3>
                  <h4 class="price">price: <span><?= number_to_currency($items['price'], 'PKR'); ?></span></h4>
                </div>
              </div>
              <div class="wrapper row">
                <div class="preview col-12">
                  <div class="preview-pic tab-content">
                    <?php foreach($imgs as $key): ?>
                      <?php if ($key['main']==1) {?>
                    <div class="tab-pane active" id="<?= $key['_id']; ?>">
                      <img src="<?= base_url('uploads/items/'.$key['src']) ?>" />
                    </div>
                      <?php } else{ ?>
                    <div class="tab-pane" id="<?= $key['_id']; ?>">
                      <img  src="<?= base_url('uploads/items/'.$key['src']) ?>" />
                    </div>
                    <?php } endforeach;   ?>
                  </div>
                </div>
              </div>

              <div class="row" data-mdb-perfect-scrollbar='true'>
                <div class="col-12">
                  <ul class="preview-thumbnail nav nav-tabs">
                    <?php foreach($imgs as $key): ?>
                      <?php if ($key['main']==1) {?>
                    <li class="active">
                      <a data-target="#<?= $key['_id']; ?>" data-toggle="tab">
                        <img  src="<?= base_url('uploads/items/'.$key['src']) ?>" />
                      </a>
                    </li>
                      <?php } else{ ?>
                    <li>
                      <a data-target="#<?= $key['_id']; ?>" data-toggle="tab">
                        <img src="<?= base_url('uploads/items/'.$key['src']) ?>" />
                      </a>
                    </li>
                    <?php } endforeach;  ?>
                  </ul>
                </div>
              </div>

              <div class="row">
                  <div class="details col-12">
                    
                   <!--  <div class="rating">
                      <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <span class="review-no">41 reviews</span>
                    </div> -->
                    <br>
                    <br>
                    
                    <p class="product-description"><?php echo $items['description']; ?></p>
                    
                    <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                    <!-- <h5 class="sizes">sizes:
                      <span class="size" data-toggle="tooltip" title="small">s</span>
                      <span class="size" data-toggle="tooltip" title="medium">m</span>
                      <span class="size" data-toggle="tooltip" title="large">l</span>
                      <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
                    </h5> -->
                    <!-- <h5 class="colors">colors:
                      <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                      <span class="color green"></span>
                      <span class="color blue"></span>
                    </h5> -->
                    <div class="action">
                      <!-- <button class="add-to-cart btn btn-default" type="button">add to cart</button> -->
                      <!-- <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> -->
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
<script type="text/javascript">
  $(document).ready(function(){
    PopUp();

    $(".close").click(function(){
        popUpClose();
       })

    // ................. Functions
    async function PopUp()
  {
          $('#popup1').css("visibility", "visible"); 
          $('#popup1').css("opacity", 1);
          $('body').css("overflow-y" , "hidden");
          $('.navbar').css("position", 'static');
          $('.pager').css("visibility", "hidden");
          $('.list').css("position", "sticky");

  }

  async function popUpClose()
  {
   
    $('body').css("overflow-y" , "auto");
    $('.navbar').css("position", 'sticky');
    $('.pager').css("visibility", "visible");
    $('.list').css("position", "relative");

    $('#popup1').remove();
    // base_window_reload();
  }

   async function base_window_reload()
      {
        var location = <?php base_url('customers/templates/base') ?>
        window.location.reload()
      }

  async function windowReload()
  {
          window.setTimeout(() => {
          window.location.reload(true);
        }, 50);
  }

  });
</script>
</html>

