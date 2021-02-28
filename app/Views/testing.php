<?= $this->extend('customers/templates/base') ?>

<?= $this->section('title') ?>
  Home
<?= $this->endSection() ?>


<?= $this->section('styles') ?>
body {
    background-color: #eee
}
.detail{
cursor: zoom-in;
  text-decoration: none;
}
.list .product {
    padding: 10px;
    background-color: #fff;
    border-radius: 10px;
    position: relative
}

.list .about span {
    color: #5629c0;
    font-size: 16px
}

.list .cart-button button {
    font-size: 12px;
    <!-- margin-left: 38%; -->
    height: 38px
}

.list .cart-button button:focus,
button:active {
    font-size: 12px;
    color: #fff;
    background-color: #5629c0;
    box-shadow: none
}

.list .product_fav i {
    line-height: 40px;
    color: #5629c0;
    font-size: 15px
}

.list .product_fav {
    display: inline-block;
    width: 36px;
    height: 39px;
    background: #FFFFFF;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    border-radius: 11%;
    text-align: center;
    cursor: pointer;
    margin-left: 3px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.list .product_fav:hover {
    background: #5629c0
}

.list .product_fav:hover i {
    color: #fff
}

.list .about {
    margin-top: 12px
}

.list .off {
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

.list .price {
    cursor: pointer;
    position: absolute;
    left: 2%;
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

.list img{
  width: 150px;
  height: 150px;
}
.list #selected_items{
  text-align: center;
}

.pager{
  padding-left: 40%;
}
.cart-button{
  margin-right: -5px;
  
}


<?= $this->endSection() ?>

<?= $this->section('body') ?>
  <!-- banner -->

  <!-- Details  -->
  <!-- items list -->
  <div class="container mt-5 mb-5 list">
    <div class="row g-2">
        <div class="col-12">
            <div class="row g-2">
              <?php foreach ($items['items'] as $item): ?>
                  <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <div class="product py-4">
                          <span class="price bg-success"><?= number_to_currency($item['price'], 'PKR'); ?></span>
                          <span class="off bg-success">-<?= $item['discount']?>% OFF</span>
                          <a class="detail" id="detail" data-title="<?= $item['title']; ?>"
                                data-src="<?= $item['src'] ?>"
                                data-price="<?= $item['price'] ?>"
                                data-discount="<?= $item['discount'] ?>"
                                data-id="<?= $item['_id'] ?>"
                                data-quantity="1"> 
                            <div class="text-center">
                              <img src="<?= base_url('uploads/items/'.$item['src']) ?>">
                            </div>
                          </a>

                            <div class="about text-center">
                                <h5><?= $item['title']; ?></h5>
                            </div>
                            <div class="cart-button mt-2 px-2  text-center align-items-center">
                              <button class="btn btn-outline-success text-uppercase add-cart" id="add-cart"
                                data-title="<?= $item['title']; ?>"
                                data-src="<?= $item['src'] ?>"
                                data-price="<?= $item['price'] ?>"
                                data-discount="<?= $item['discount'] ?>"
                                data-id="<?= $item['_id'] ?>"
                                data-quantity="1"
                                >Add to cart</button>
                                <!-- <div class="add">
                                  <span class="product_fav">
                                    <i class="fa fa-heart-o"> 
                                    </i>
                                  </span>
                                  <span class="product_fav">
                                    <i class="fa fa-opencart">
                                      
                                    </i>
                                  </span>
                                </div> -->
                            </div>
                        </div>
                  </div>
              <?php endforeach; ?>
              <div class="pager">
                <?php
                if ($items['pager']->links() > 0) {
                echo $items['pager']->links('default' , 'pager_style');   
                 }     
                 ?>
              </div>
            </div>
            
        </div>
    </div>
  </div>

<!-- pup up -->
<div id="popUP_window">
  
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

$(document).ready(function()
    {
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

      
  
    });

<?= $this->endSection() ?>
    