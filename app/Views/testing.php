
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
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
  width: 40%;
  position: relative;
  transition: all 5s ease-in-out;
}

@media(max-width:1000px) {
    .popup {
       width: 70%;
    }
}

@media(max-width:750px) {
    .popup {
       width: auto;
    }
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  cursor: pointer;
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

                <div class="card-body p-5">
                  <table class="table col-12">
                     <thead>
                        <tr>
                          <th  class="border-0 text-uppercase small font-weight-bold">item</th>
                          <th  class="border-0 text-uppercase small font-weight-bold">title</th>
                          <th  class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                          <th  class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                          <th  class="border-0 text-uppercase small font-weight-bold">Action</th>
                        </tr>
                      </thead>
                      <tbody id="table_data">
                                          
                      </tbody>
                  </table>       
                                
                                <div class="d-flex  bg-dark text-white p-2">
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
  $(document).ready(function()
    {
        let products = [];
        PopUp();

      $(".close").click(function(){
        popUpClose();
       })

  $( "#table_data" ).on('change','.spinner',function(){
    
    var id = $(this).data("id");
    var quantity = this.value;
    edit(id, quantity);
      });

  $( "#table_data" ).on('click','.remove',function(){
    var item_id = this.value;
    removeItem(item_id);
      });

// ........................................................ Functions
  // Show data in table
  

  async function DataShow()
  {
    for (i = 0; i < localStorage.length; i++)
         {
          x = localStorage.key(i);
          if(x[0] == 'm' && x[1] == 'h' && x[2] == 'g')
          {
            item = await JSON.parse(localStorage.getItem([x]))
            // $("#table_data").append('<tr> <td>'+item['_id']+'</td> <td>'+item['title']+'</td> <td>'+item['quantity']+'</td> <td>'+item['price']+'</td> <td><button class="btn btn-primary remove" value="'+item['_id']+'">remove</button></td></tr>')
            var total = item['price']*item['quantity'];
            total = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            $("#table_data").append('<tr> <td><img src="<?= base_url() ?>/uploads/items/'+item['image']+'" width="50" height="50" > </td> <td>'+item['title']+'</td> <td><input data-id="'+item['_id']+'" type="number" value="'+item['quantity']+'" class="form-control text-center spinner" min="1" max="10" step="1"/> </td> <td>'+total+'</td> <td><button class="btn btn-primary remove" value="'+item['_id']+'">remove</button></td></tr>')
          }
        }
  }

  async function PopUp()
  {
          $('#popup1').css("visibility", "visible"); 
          $('#popup1').css("opacity", 1);
          $('body').css("overflow-y" , "hidden");
          $('.navbar').css("position", 'static');
          $('.pager').css("visibility", "hidden");
          
  

         await DataShow();
          total();
  }
  
  async function update()
  {
    $("#table_data").html("");
    await DataShow();
    total();
  }

  async function popUpClose()
  {
    $('.navbar').css("position", 'sticky');
    $('body').css("overflow-y" , "auto");
    $('.pager').css("visibility", "visible");
    $('#popup1').remove();
    
    base_window_reload();
  }

  async function base_window_reload()
      {
        var location = <?php base_url('customers/templates/base') ?>
        window.location.reload()
      }

  async function removeItem(item_id)
  {
    window.localStorage.removeItem(['mhg',item_id]);
    update();
  }

  async function edit(id , quantity)
  {
    var item = await JSON.parse(localStorage.getItem(['mhg',id]))
    item['quantity'] = quantity;
    window.localStorage.removeItem(['mhg',id]);
    await localStorage.setItem(['mhg',id], JSON.stringify(item));
    update();
  }

  async function total()
  {
    var sub_total = 0;
    var grand_total = 0;
    var discount = 0;
    for (i = 0; i < localStorage.length; i++)
         {
          x = localStorage.key(i);
         if(x[0] == 'm' && x[1] == 'h' && x[2] == 'g')
          {
            item = await JSON.parse(localStorage.getItem([x]))
            sub_total = (item['price']*item['quantity'])+sub_total;
            grand_total = (item['total']*item['quantity'])+grand_total;
          }
        }
        discount = ((grand_total/sub_total)*100)
        discount = 100-discount

        sub_total = sub_total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        grand_total = grand_total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","); 
        $("#table_total_data").html('<tr> <td>'+sub_total+'</td> <td>'+discount.toFixed(2)+'%</td> <td>'+grand_total+'</td></tr>')
  }
    });
</script>
</html>