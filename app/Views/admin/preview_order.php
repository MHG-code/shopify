
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        .overlay {
  position: absolute;
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
  /*background: #fff;*/
  background: rgba(0, 0, 0, 0.0);
  border-radius: 5px;
  width: auto;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: -10px;
  right: 5px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: orange;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}
.spinner{
  width: auto;
}
    </style>
</head>
<body>
    <div id="popup1" class="overlay">
      <div class="popup">
        <div class="container-fluid">
          <h2>Selected Items</h2>
          <div class="row">
            <div class="col-12">
              <div class="card">
          <a class="close" href="#">×</a>

                <div class="card-body p-0">
                  <table class="table ">
                     <thead>
                        <tr>
                          <th  class="border-0 text-uppercase small font-weight-bold">Item</th>
                          <th  class="border-0 text-uppercase small font-weight-bold">item_name</th>
                          <th  class="border-0 text-uppercase small font-weight-bold">quantity</th>
                          <!-- <th  class="border-0 text-uppercase small font-weight-bold">Quantity</th> -->
                          <th  class="border-0 text-uppercase small font-weight-bold">actual price</th>
                          <th  class="border-0 text-uppercase small font-weight-bold">discount</th>
                          <th  class="border-0 text-uppercase small font-weight-bold">Final Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($orders as $order ): ?>
                            <tr>
                              <td><img src="<?= base_url('uploads/items/'.$order['src']) ?>" width="50" height="50"></td>
                              <td><?= $order['title'] ?></td>
                              <td><?= $order['quantity'] ?></td>
                              <td><?= $order['price'] ?></td>
                              <td><?= $order['discount'] ?></td>
                              <td><?= $order['final_price'] ?></td>

                            </tr>
                        <?php endforeach; ?>
                      </tbody>
                  </table>       
                                
                                <!-- <div class="d-flex  bg-dark text-white p-2">
                                  <table class="table table-dark">
                                    <thead>
                                      <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total Amount</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Discount</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Grand Total</th>
                                        <th class="border-0 text-uppercase small font-weight-bold"><a href="<?= base_url('order_book') ?>" class="btn btn-success order_book">Book Order</a></th>
                                      </tr>
                                    </thead>
                                    <tbody id="table_total_data">
                                        
                                    </tbody>
                                  </table>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript">
  $(document).ready(function()
    {
        
        PopUp();

      $(".close").click(function(){
        popUpClose();
       })

// ........................................................ Functions
  // Show data in table
  

  async function PopUp()
  {
          $('#popup1').css("visibility", "visible"); 
          $('#popup1').css("opacity", 1);
          $('.orders').css("opacity", .1);
          $('.orders').css("position" , "fixed");
  }
  
 

  async function popUpClose()
  {
    $('.orders').css("position" , "relative");
    $('.orders').css("opacity", 1);
    $('#popup1').remove();
  }
    });
</script>
</html>