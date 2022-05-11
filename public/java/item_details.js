$('.detail').click(async function(){
        var item_id = $(this).data("id");
        $.ajax({
              url: base_api+"/item_detail" ,
              type: 'GET',
              data: {id:item_id},
              success: function(data) {
                 $('#popUP_window').html(data);
              }   
        });
      });