<?= $this->extend('customers/templates/base') ?>

<?= $this->section('title') ?>
  Home
<?= $this->endSection() ?>

<?= $this->section('links') ?>
   <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/styles/order.css">
<?= $this->endSection() ?>

<?= $this->section('body') ?>

<div class="row order_book">
  <div class="col-75">
    <div class="container order_book">
      <?php if (isset($validator)): ?>
        <?= $validator ?>
      <?php endif; ?>
      <form action="">
        <div class="row">
          <div class="col-50">
            <h3>Shipping Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="Muhammad Ahmad">

            <label for="email"><i class="fa fa-phone"></i> Contact</label>
            <input type="text" id="email" name="contact" placeholder="+92 300">

            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="House#/Name, Street#, town, nearest point">

            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Lahore">

            <div class="row">
              <div class="col-50">
                <label for="state">Province</label>
                <input type="text" id="state" name="province" placeholder="Punjab">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50" disabled>
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <input type="submit" value="Order Book" class="btn">
      </form>
      <div id="msg"></div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
  $(document).ready(function(){
  $('header').remove();
    let products = [];

    $('form').submit(function(e){
      e.preventDefault();
      var formData = new FormData(this);

      for (i = 0; i < localStorage.length; i++)
         {
          x = localStorage.key(i);

          if(x[0] == 'm' && x[1] == 'h' && x[2] == 'g')
          {
            item = JSON.parse(localStorage.getItem([x]))
  
            products.push({'_id' : item['_id'] , 'image' : item['image'] , 'price':item['price'] , 'total':item['total'] , 'discount':item['discount'], 'title':item['title'], 'quantity':item['quantity']});
          }
        }
        formData.append('products',JSON.stringify(products))

      $.ajax({
              url: base_api+"/order_book",
              type: 'POST',
              data: formData,
              processData: false, 
              contentType: false,
              
              success: function(data) {
                window.localStorage.clear();
                $('#msg').html("<div class='alert alert-success' role='alert'>"+data+"</div>");
              },
              error: function(error) {
              if( error.status == 400 )
              {
                var validator = $.parseJSON( error.responseText );
                $('#msg').html(""+validator+"")

              }
              }

        });
    })
  })
<?= $this->endSection() ?>