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
      transform: translateX(33.333%);
    }
    
    .carousel-inner .carousel-item-left.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-33.333%);
    }
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
}

.carousel-item .card img{
  width: 150px;
  height: 150px;
  position:relitive;
  <!-- margin-left: 25%; -->
  text-align: center !important;

}


.off {
    cursor: pointer;
    position: absolute;
    left: 80%;
    top: 1%;
    width: 80px;
    text-align: center;
    height: 30px;
    line-height: 8px;
    border-radius: 50px;
    font-size: 13px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff
}

.buy-now:focus {
    box-shadow: none
}

.buy-now:hover {
    color: #fff;
    <!-- background-color: #e84040 !important; -->
    border-color: #e84040 !important
}


<?= $this->endSection() ?>

<?= $this->section('body') ?>
  <!-- items list -->
   <?php foreach ($categories as $catgory): ?>
    <?php $active = 1; ?>
    <h3><?= $catgory['categories'] ?></h3>
    <div class="container text-center my-3">
      <div class="row mx-auto my-auto">
          <div id="<?= $catgory['_id'] ?>" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">
                
                <?php foreach ($items['items'] as $item => $i): ?>
                  <?php if ($catgory['categories'] === $i['categories']){?>
                      <?php if ($active === 1 ){ ?>
                        <div class="carousel-item active">
                          <div class="col-md-4 text-center">
                              <div class="card card-body">
                                <span class="off bg-success">-<?= $i['discount']?>% OFF</span>
                                <img class="mx-auto d-block" src="<?= base_url('uploads/items/'.$i['src']) ?>">
                                <div class="about-product text-center">
                                    <h3><?= $i['title']; ?></h3>

                                    <h5><?= number_to_currency($i['price'], 'PKR'); ?></h5>
                                    <button class="btn btn-success buy-now">Buy Now</button>
                                </div>
                              </div>
                          </div>
                      </div>
                      <?php $active = 0; }  else{ ?>
                      <div class="carousel-item">
                          <div class="col-md-4 text-center">
                              <div class="card card-body">
                                <span class="off bg-success">-<?= $i['discount']?>% OFF</span>
                                 <img class="mx-auto d-block" src="<?= base_url('uploads/items/'.$i['src']) ?>">
                                 <div class="about-product text-center">
                                    <h3><?= $i['title']; ?></h3>

                                    <h5><?= number_to_currency($i['price'], 'PKR'); ?></h5>
                                    <button class="btn btn-success buy-now">Buy Now</button>
                                </div>
                              </div>
                          </div>
                      </div>
                    <?php }}endforeach; ?>
              </div>
              <a class="carousel-control-prev w-auto" href="#<?= $catgory['_id'] ?>" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next w-auto" href="#<?= $catgory['_id'] ?>" role="button" data-slide="next">
                  <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
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
        
        $('.carousel .carousel-item').each(function(){
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
    