
// cart data open
$('.cart_basket').click(async function(){
  $('.cart_basket').css('display', 'none');
  $('.close_cart_basket').css('display', 'block');
  $('.cart_box').css('display', 'block');

  DataShow();

})



// cart data close
$('.close_cart_basket').click(function(){
  $('.cart_basket').css('display', 'block');
  $('.close_cart_basket').css('display', 'none');
  $('.cart_box').css('display', 'none');
  $(".cart_box").html("")
})

//cart increment
$('.cart-items').on('click','.increment', function() {
        var id = $(this).data("id");
        
        $('.'+id+' input').val(parseInt($('.'+id+' input').val(), 10) + 1)
        var quantity = $('.'+id+' input').val();
        edit(id, quantity);
  });

// cart decrement
$('.cart-items').on('click','.decrement',function() {
    var id = $(this).data("id");
    var quantity = $('.'+id+' input').val();
    if (quantity > 1) {
      $('.'+id+' input').val(parseInt($('.'+id+' input').val(), 10) - 1)
    quantity = $('.'+id+' input').val();

      edit(id, quantity);
  }
  });

// cart quantity change
 $( ".cart-items" ).on('change','input',function(){
    var id = $(this).data("id");
    var quantity = this.value;
    edit(id, quantity);
      });

// cart items remove
 $( ".cart-items" ).on('click','.remove',function(){

    var item_id = this.value;
    removeItem(item_id);
      });

// cart add
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
        cart_items();
        document.getElementById("cart_basket").innerHTML = '<i class="fa fa-shopping-cart" aria-hidden="true"><small>'+items+'</small></i>'; 
        //cart();
      });



 // $('#cart_basket').click(function(){
 //        cart();
 //      })

// function cart()
// {
//          $.ajax({
//               url: base_api+"/add_cart",
//               type: 'GET',
//               success: function(data) {
//                  $('#popUP_window').html(data);
//               }   
//         });
//       }


// ........................................................ Functions

// cart data show
async function DataShow(){
  cart_items()

  for (i = 0; i < localStorage.length; i++)
         {
          x = localStorage.key(i);
          if(x[0] == 'm' && x[1] == 'h' && x[2] == 'g')
          {
            item = await JSON.parse(localStorage.getItem([x]))
            var total = item['price']*item['quantity'];
            total = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

            var html =  '<div class="row">'
                          
                          +'<div class="col-6">'
                            +'<img class="pull-right" src="'+base_api+'/uploads/items/'+item['image']+'">'
                          +'</div>'

                          +'<div class="col-4">'
                            +'<div class="input-group '+item['_id']+'">'
                              +'<div class="input">'
                                +'<input data-id="'+item['_id']+'" type="number" value="'+item['quantity']+'" class="form-control text-center"/>'
                              +'</div>'
                              +'<div class="input-group-btn-vertical">'
                                +'<button class="btn btn-default increment" type="button" data-id="'+item['_id']+'"><i class="fa fa-caret-up"></i></button>'
                                +'<button class="btn btn-default decrement" type="button" data-id="'+item['_id']+'"><i class="fa fa-caret-down"></i></button>'
                              +'</div>'

                            +'</div>'
                          +'</div>'

                        +'</div>'

                        +'<div class="row">'
                          +'<div class="col-12 text-center about">'
                            +'<h5 id="title">'+item['title']+'</h5>'
                            +'<h6 id="price">'+total+'</h6>'
                          +'</div>'
                        +'</div>'

                        +'<div class="row">'
                          +'<div class="col-12 text-center" >'
                            +'<button class="btn btn-danger remove" value="'+item['_id']+'">remove</button>'
                          +'</div>'
                        +'</div>'
                            
            $(".cart_box").append(html)
              
            if (i < items+1) { $(".cart_box").append('<hr>')}
           
          }
        }
        if (items == 0){
          var html = '<h4> Cart is empty </h4>'
          $(".cart_box").html(html)
        }
}

async function update()
  {
    $(".cart-items").html("");
    await DataShow();
    cart_items();
    document.getElementById("cart_basket").innerHTML = '<i class="fa fa-shopping-cart" aria-hidden="true"><small>'+items+'</small></i>'; 
   // total();
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
        $('.total-detail .total-amount #total').html(''+sub_total+'')
        $('.total-detail .discount #discount').html(''+discount.toFixed(2)+' %')
        $('.total-detail .grand-total #grand-total').html(''+grand_total+'')

  }
