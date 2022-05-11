<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/styles/popup.css">
   <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/styles/popup_item_detail.css">

   <!-- Resources -->
   
  <style type="text/css">
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
  @media screen and (max-width: 360px) {
    
.preview-thumbnail::-webkit-scrollbar
{
  display: none;
  
}
    }

  </style>
</head>
<body>
  <div id="popup1" class="overlay">
      <div class="popup">
        <div class="container col-12 col-md-9 col-lg-9 col-xl-9">
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
                    
                    <p class="product-description"><?php echo nl2br($items['description']); ?></p>
                    
                    <!-- <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p> -->
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
          $('header').css("position", 'static');
          $('.pager').css("visibility", "hidden");
          $('.list').css("position", "sticky");

  }

  async function popUpClose()
  {
   
    $('body').css("overflow-y" , "auto");
    $('header').css("position", 'sticky');
    $('.pager').css("visibility", "visible");
    $('.list').css("position", "relative");

    $('#popup1').remove();
    // base_window_reload();
  }

  //  async function base_window_reload()
  //     {
  //       var location =
  //       window.location.reload()
  //     }

  // async function windowReload()
  // {
  //         window.setTimeout(() => {
  //         window.location.reload(true);
  //       }, 50);
  // }

  });
</script>
</html>

