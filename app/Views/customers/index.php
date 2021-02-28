<?= $this->extend('customers/templates/base') ?>

<?= $this->section('title') ?>
  Home
<?= $this->endSection() ?>


<?= $this->section('styles') ?>
body {
    background-color: #eee
}
@media (max-width: 768px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
    .categories{
    text-align:center;
  }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

/* display 3 */
@media (min-width: 768px) {
    
    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(99.333%);
    }
    
    .carousel-inner .carousel-item-left.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-99.333%);
    }


}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
}

.list .card {
    height: 430px;
    width: 320px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 10px;
    position: relative;
    overflow: hidden;
    cursor: pointer;
    text-align: center !important
}
.about-product {
    margin-bottom:30px;
    width:100%;
    position: absolute;
    bottom: 10px !important;
    text-align: center;
    color:black ;
    transition: 0.1s ease-in
}

.about-product title h3{
  color:rgba(34,54,62,0.75) ;
}
.buy-now {
    color: #fff;
    background-color: #ef5350 !important;
    border-color: #ef5350 !important;
    width: 160px;
    <!-- margin-top: 20px -->
}
.card .image img {
    width:230px;
    height:230px;
    margin-top:30px;
    transition: 0.00001s ease-in
}
.categories{
margin-top:70px;
margin-bottom:30px;
}
.categories a h2{
  color:black;
  font-size: 36pt;
  font-family: serif;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  line-height: normal;
}
.categories a{
  color:rgba(32,56,62,0.19);
}
.categories a:hover{
  color:rgba(32,56,62,1);
}
.categories a h2:hover{
  font-size: 40pt;
}
.detail{
cursor: zoom-in;
  text-decoration: none;
}
.off{
  position: absolute;
  width: 80px;
  text-align: center;
  height: 30px;
  border-radius: 50px;
  font-size: 13px;
  display: flex;
  align-items: center;
  justify-content: center;
  right:0px;
  color: #fff;
  text-transform: capitalize;
  font-weight: bold;
}
<?= $this->endSection() ?>

<?= $this->section('body') ?>
  <!-- items list -->
   <?php foreach ($categories as $catgory): ?>
    <?php $a = 1; ?>
    <div class="categories">
          <a href="<?= base_url(); ?>/<?= $catgory['categories'] ?>">
            <h2 class=""><?= $catgory['categories'] ?></h2>
          </a>
    </div>
    <div class="container text-center my-3 list">
      
      <div class="row mx-auto my-auto">

          <div id="<?= $catgory['_id'] ?>" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">
                <?php foreach ($items['items'] as $item => $i): ?>
                  <?php if ($catgory['categories'] === $i['categories']){?>
                      <?php if ($a === 1 ){ ?>
                      <div class="carousel-item active">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-4">
                          <div class="d-flex justify-content-center">
                            <div class="card text-center">
                              <a class="detail" id="detail" data-title="<?= $i['title']; ?>"
                                data-src="<?= $i['src'] ?>"
                                data-price="<?= $i['price'] ?>"
                                data-discount="<?= $i['discount'] ?>"
                                data-id="<?= $i['_id'] ?>"
                                data-quantity="1"> 
                                  
                                    <div class="off bg-success">
                                      <span><?= $i['discount']; ?> %</span>
                                    </div>
                                    <div class="image">
                                      <img src="<?= base_url('uploads/items/'.$i['src']) ?>">
                                    </div>
                                  
                                </a>
                              <div class="about-product">
                                <div class="text-center title">
                                  <h3><?= $i['title']; ?></h3>
                                </div>

                                <div class="text-center price">
                                  <h5><?= number_to_currency($i['price'], 'PKR'); ?></h5>
                                </div>

                                <div class="text-center buy-btn">
                                  <button class="btn btn-success buy-now add-cart" id="add-cart"
                                data-title="<?= $item['title']; ?>"
                                data-src="<?= $item['src'] ?>"
                                data-price="<?= $item['price'] ?>"
                                data-discount="<?= $item['discount'] ?>"
                                data-id="<?= $item['_id'] ?>"
                                data-quantity="1">Buy Now</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php $a = 0; }  else{ ?>
                      <div class="carousel-item">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                          <div class="d-flex justify-content-center">
                            <div class="card text-center">
                              <a class="detail" id="detail" data-title="<?= $i['title']; ?>"
                                data-src="<?= $i['src'] ?>"
                                data-price="<?= $i['price'] ?>"
                                data-discount="<?= $i['discount'] ?>"
                                data-id="<?= $i['_id'] ?>"
                                data-quantity="1"> 
                                  
                                    <div class="off bg-success">
                                      <span><?= $i['discount']; ?> %</span>
                                    </div>
                                    <div class="image">
                                      <img src="<?= base_url('uploads/items/'.$i['src']) ?>">
                                    </div>
                                  
                                </a>
                              <div class="about-product">
                                <div class="text-center title">
                                  <h3><?= $i['title']; ?></h3>
                                </div>

                                <div class="text-center price">
                                  <h5><?= number_to_currency($i['price'], 'PKR'); ?></h5>
                                </div>

                                <div class="text-center buy-btn">
                                  <button class="btn btn-success buy-now add-cart" id="add-cart"
                                data-title="<?= $i['title']; ?>"
                                data-src="<?= $i['src'] ?>"
                                data-price="<?= $i['price'] ?>"
                                data-discount="<?= $i['discount'] ?>"
                                data-id="<?= $i['_id'] ?>"
                                data-quantity="1">Buy Now</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php }}endforeach; ?>
              </div>
              <div>
                 <a class="left  carousel-control-prev w-auto" href="#<?= $catgory['_id'] ?>" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    
                </a>
                <a class="carousel-control-next w-auto" href="#<?= $catgory['_id'] ?>" role="button" data-slide="next">
                 
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                </a> 
              </div>
          </div>
      </div>
    </div>
   <?php endforeach; ?>
<!-- pup up -->
<div id="popUP_window">
  
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

$(document).ready(function()
    {
      <!-- for list slider -->
      item_slider();
       <!-- end for list slider  -->
        <!-- window.localStorage.clear(); -->
        let products = [];
        for (i = 0; i < localStorage.length; i++)
         {
          x = localStorage.key(i);

          // console.log(JSON.parse(localStorage.getItem(x)))
          if(x[0] == 'm' && x[1] == 'h' && x[2] == 'g')
          {
          console.log(x)

          }
        }

      $('.add-cart').click(async function()
      { 
        var title = $(this).data("title");
        var src = $(this).data("src");
        var price = $(this).data("price");
        var discount = $(this).data("discount");
        var item_id = $(this).data("id");
        var quantity = $(this).data("quantity");
        // var discount_value = discount% (* price)
        var total = price - ( price*discount/100 )

        var item = await JSON.parse(localStorage.getItem(['mhg',item_id]))
        if(item)
        {
            quantity = item['quantity']+1   
        }
   
        products = await ({'_id' : item_id , 'image' : src , 'price':price , 'discount':discount,'total':total , 'title':title, 'quantity':quantity});
        await localStorage.setItem(['mhg',item_id] , JSON.stringify(products));
        cart();
      });

      $('.detail').click(async function(){

        var item_id = $(this).data("id");
        $.ajax({
              url: '<?= base_url("item_detail")  ?>',
              type: 'GET',
              data: {id:item_id},
              success: function(data) {
                 $('#popUP_window').html(data);
              }   
        });
      });

      $('#cart_basket').click(function(){
        cart();
      })
      // ------------------------------------------------ Functions

      function cart()
      {
         $.ajax({
              url: '<?= base_url("add_cart")  ?>',
              type: 'GET',
              success: function(data) {
                 $('#popUP_window').html(data);
              }   
        });
      }

      function item_slider()
      {
        
        $('.list .carousel .carousel-item').each(function(){
            var minPerSlide = 3;
            var next = $(this).next();
            if (!next.length) {
            next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
            
            for (var i=0;i<minPerSlide;i++) {
                next=next.next();
                if (!next.length) {
                  next = $(this).siblings(':first');
                } 
                next.children(':first-child').clone().appendTo($(this));
              }
        });
      }
    });

<?= $this->endSection() ?>
    