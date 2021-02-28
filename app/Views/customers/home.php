<?= $this->extend('customers/templates/base') ?>

<?= $this->section('title') ?>
  Home
<?= $this->endSection() ?>


<?= $this->section('styles') ?>
body {
    background-color: #eee
}
.list .card {
    height: 420px;
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
    width:250px;
    height:250px;
    margin-top:20px;
    transition: 0.00001s ease-in
}
.categories{
margin-top:70px;
margin-bottom:30px;
}
.categories h2{
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
  <!-- banner -->

  <!-- Details  -->
  <!-- items list -->
  <div class="container mt-5 mb-5 list">
    <div class="row g-2">
        <div class="col-12">
            <div class="row g-2">
              <?php foreach ($items['items'] as $item): ?>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-4">
                          <div class="d-flex justify-content-center">
                            <div class="card text-center">
                              <a class="detail" id="detail" data-title="<?= $item['title']; ?>"
                                data-src="<?= $item['src'] ?>"
                                data-price="<?= $item['price'] ?>"
                                data-discount="<?= $item['discount'] ?>"
                                data-id="<?= $item['_id'] ?>"
                                data-quantity="1"> 
                                 
                                    <div class="off bg-success">
                                      <span><?= $item['discount']; ?> %</span>
                                    </div>
                                    <div class="image">
                                      <img src="<?= base_url('uploads/items/'.$item['src']) ?>">
                                    </div>
                                  
                                </a>
                              <div class="about-product">
                                <div class="text-center title">
                                  <h3><?= $item['title']; ?></h3>
                                </div>

                                <div class="text-center price">
                                  <h5><?= number_to_currency($item['price'], 'PKR'); ?></h5>
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
    