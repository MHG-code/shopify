<?= $this->extend('admin/templates/base') ?>

<?= $this->section('title') ?>
  add Items
<?= $this->endSection() ?>

<?= $this->section('styles') ?>
    .image-upload > input
{
    display: none;
}

.image-upload img
{
    width: 80px;
    cursor: pointer;
}
#preview ul
{
  display: inline-flex;
}
.img-container{
  overflow-x: auto;
}
.brands{
  display:none;
}
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

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}

.popup .close:hover {
  color: orange;
}

<?= $this->endSection() ?>


<?= $this->section('body') ?>

  <div class="container">
    <form class="row g-3 mt-5"  enctype="multipart/form-data" >
      <div class="col-md-4">
        <div class="input-group mb-3">
          <span class="input-group-text">Title</span>
          <input type="text" name="title" id="title" class="form-control" placeholder="title" aria-label="title" aria-describedby="title" autocomplete="off">
        </div>
      </div>

      <?php if ($categories) {   ?>
      <div class="col-md-4">
        <div class="input-group mb-3">
          <span class="input-group-text col-4">Categories</span>
          <select class="form-control col-4" name="category">
            <?php foreach ($categories as $catg): ?>
              <option value="<?= $catg['categories']; ?>"><?= $catg['categories']; ?></option>
            <?php endforeach;  ?>  
            
          </select>
          <span class="input-group-text add_new_category col-4">add new category</span>
        </div>
      </div>
      <?php } ?>

      <?php if (!$categories) {   ?>
      <div class="col-md-4">
        <div class="input-group mb-3">
           <span class="input-group-text">add some categories</span>
           <input type="text" name="add_new_category" placeholder="add New category" class="form-control add_new_category" aria-label="Text input with dropdown button" autocomplete="off">
        </div>
      </div>
      <?php } ?>

      <div class="col-md-4 text-center brands">
        <div class="input-group mb-3">
          <span class="input-group-text">Brands</span>
          <select class="form-control" name="new_brand">
            <?php foreach ($brands as $brand): ?>
               <option value="<?= $brand['brand_name']; ?>"><?= $brand['brand_name']; ?></option>
            <?php endforeach;  ?>
           
          </select>
          <!-- <input type="text" name="new_brand" placeholder="New Brand" class="form-control" aria-label="Text input with dropdown button"> -->
        </div>
      </div>

      <div class="col-md-4 text-center">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">PKR</span>
          </div>
          <input type="text" name="price" id="price" class="form-control" aria-label="Amount (to the nearest PKR)">
          <div class="input-group-append">
            <span class="input-group-text">.00</span>
          </div>
        </div>
      </div>

      <div class="col-md-4 text-center">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">discount</span>
          </div>
          <input type="text" value="0" name="discount" id="discount" class="form-control" aria-label="Amount (to the nearest %)">
          <div class="input-group-append">
            <span class="input-group-text">%</span>
          </div>
        </div>
      </div>

      <div class="col-md-4 text-center">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">on main page</span>
          </div>
          <select class="form-control" name="on_main_page">
               <option value="1">show</option>
               <option value="0">hide</option>
          </select>
        </div>
      </div>

      <div class="col-12">
        <div class="form-group">
          <textarea class="form-control" name="description" placeholder="Description" id="description" rows="4"></textarea>
        </div>
      </div>

      <div class="image-upload">
        <label for="upload-files">
            <img src="<?= base_url()?>/uploads/icon/icon.png"/>
        </label>
        <input type="file" id="upload-files" name="upload_files[]" class="form-control" multiple/>
    </div>

    <span class="input-group-btn">
      <button type="submit" name="submit" id="submit" class="btn btn-primary" type="button">Add Item</button>
    </span>
    </form>

      <div class="row">
         <div class="container img-container">
            <div id="preview">
              <ul></ul>
            </div>
        </div>
      </div>

      <div id="msg">
        
      </div>
  </div>

  <div id="popup1" class="overlay">
      <div class="popup">
        <div class="container col-12 col-md-9 col-lg-9 col-xl-9">
          <div class="card">
            <a class="close">×</a>
            
              <div class="container-fliud m-5">
                <div class="row">
                  <div class="col-12">
                    <div class="col-md-4">
                      <div class="input-group mb-3">
                        <span class="input-group-text col-12 col-sm-4 col-md-4">add Category</span>
                          <input class="form-control col-12 col-sm-4 col-md-4" type="text" name="new_category" id="new_category" placeholder="New category" aria-label="Text input with dropdown button" autocomplete="off">
                          <p class="alert alert-danger catg_alert col-12" style="display: none;" role="alert">Please enter some category name</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                      <div class="form-group">
                        <textarea class="form-control" name="catg_description" placeholder="Description about categorie" id="catg_description" rows="4"></textarea>
                        <p class="alert alert-danger catg_description_alert col-12" style="display: none;" role="alert">Please enter some description</p>
                      </div>
                    </div>
                </div>

                <div class="row">
                   <div class="mt-5 text-center">
                      <span class="input-group-btn">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary add_category" type="button">Add category</button>
                      </span>
                    </div>
                </div>
              </div>
           <p class="alert alert-danger catg_submit col-12" style="display: none;" role="alert">there is an error</p>
          </div>
        </div>
      </div>
    </div>
</body>

<script type="text/javascript">
  $(function(){
    console.log('here')
    

    // add new category open
    $(".add_new_category").click(async function(){
          $('#popup1').css("visibility", "visible"); 
          $('#popup1').css("opacity", 1);
          $('body').css("overflow-y" , "hidden");
          $('header').css("position", 'static');
          $('.pager').css("visibility", "hidden");
          $('.list').css("position", "sticky");
          $(".add_new_category").attr('disabled','disabled');
          // $('.add_new_category').css("disabled","true");
    })
    $(".close").click(function(){
      $('#popup1').css("visibility", "hidden"); 
          $('#popup1').css("opacity", 0);
        $('body').css("overflow-y" , "auto");
        $('header').css("position", 'sticky');
        $('.pager').css("visibility", "visible");
        $('.list').css("position", "relative");
        $(".add_new_category").removeAttr('disabled');
        // $('#popup1').remove();
       })

    // add new category
    $('.add_category').click(function(){
      var catg = $("#new_category").val();
      var description = $("#catg_description").val();

      if (catg.length < 4) {
        $('.catg_alert').css("display","block")
        $('.catg_alert').html("category not be empty and must have more than 3 caharacters")
        return 0;
      }

      else if (catg.length > 3) {
        $('.catg_alert').css("display","none")
      }

      if (description.length < 20) {
        $('.catg_description_alert').css("display","block")
        $('.catg_description_alert').html("description not be empty and must have more than 20 caharacters")
        return 0;
      }
        else if (description.length > 19) {
        $('.catg_description_alert').css("display","none")
      }
        $.ajax({
              url: '<?= base_url("admin/add_catg")  ?>',
              type: 'POST',
              data: {catg:catg  ,description:description},
                            
              success: function(data) {
                 window.setTimeout(() => {
                  window.location.reload(true);
                }, 50);
              },
              error: function(error) {
                if( error.status == 400 )
              {
                var error = $.parseJSON( error.responseText );
                $('.catg_submit').css("display","block")
                $('.catg_submit').html(error)
              }
                              
              }    
        });
    });


    var input_file = document.getElementById('upload_files');
    var deleted_file_ids = [];
    var dynm_id = 0;

    $('#upload-files').change(function(event){
      // var total_files = document.getElementById('upload_files');

      var total_files =  this.files.length;
    $('#preview ul').html("");


      for(var i=0;i<total_files;i++)
     {
      var name = event.target.files[i].name;
      // var src = URL.createObjectURL(event.target.files[i]);
      var mime_type = event.target.files[i].type.split("/");
      if(mime_type[0] == "image") {
              src = URL.createObjectURL(event.target.files[i]);
            } else if(mime_type[0] == "video") {
              src = 'icons/video.png';
            } else {
              src = 'icons/file.png';
            }

      // $('#preview ul').append("<li  id='"+dynm_id+"'><img src='"+src+"' id='" + dynm_id + "' class='prevImage'> <br> <button type='button' id='" + dynm_id + "' class='close' name='"+src+"' aria-label='Close'><span ' aria-hidden='true'>&times;</span></button></li>")

        $('#preview ul').append("<li id='"+dynm_id+"'><img src='"+src+"' id='" + dynm_id + "' class='prevImage'> <br> <button type='button' id='" + dynm_id + "' class='close'>×</button></li>")
      dynm_id++;
      $('#preview img').css({
        'margin-top' : '20px',
        'margin-left': '10px', 
        'width': '150px',
        'height': '150px',
      })
      $(".close").hover(function(){
  $(this).css("background-color", "#35333380");
  }, function(){
  $(this).css("background-color", "transparent");
});
      $('.close').css({
        'position': 'absolute',
        'margin-top' : '-150px',
        'margin-left' : '136px',
        'transition': 'all 200ms',
        'font-size': '20px',
        'font-weight': 'bold',
        'color': 'rgb(148 124 124 / 50%);',
        'border': 'none',
        'display': 'inline-block',
        'border-radius': '50%',
        'background-repeat':'no-repeat',
        'overflow': 'hidden',
        'outline':'none',
        'background-color': 'transparent',   

      })
       
        

      // $('#preview button').css({
      //   'background-color': 'rgb(149 171 150)',
      //   'border': 'none',
      //   'color': 'white',
      //   'text-align': 'center',
      //   'text-decoration': 'none',
      //   'display': 'inline-block',
      //   'font-size': '20px',
      //   'border-radius': '50%',
      //   'margin-top' : '-150px',
      //   'background-repeat':'no-repeat',
      //   'cursor':'pointer',
      //   'overflow': 'hidden',
      //    'outline':'none',   
      // })
      $('li').css({
        'list-style-type': 'none',
        'margin': '0',
        'padding': '0',
      })
     }
    });

    $(document).on('click' , 'button.close' , function(){
     var id = $(this).attr('id');
     deleted_file_ids.push(id);
     $('li#'+id).remove();
    });




    $('form').submit(function(e){
      e.preventDefault();
      var formData = new FormData(this);

          $.ajax({
              url: '<?= base_url("admin/add_items")  ?>',
              type: 'POST',
              data: formData,
              processData: false, 
              contentType: false,
              
              success: function(data) {
                console.log("Sucess")
                  $('#description').val('');
                  $('#title').val('');
                  $('#discount').val('');
                  $('#price').val('');
                  $('#msg').html("<div class='alert alert-success' role='alert'>"+data+"</div>");

              },
              error: function(error) {
                if( error.status == 400 )
              {
                var error = $.parseJSON( error.responseText );
                $('#msg').html("<div class='alert alert-danger' role='alert'>"+error+"</div>")

              }
                              
              }    
        });
    });

  });
</script>
</html>
<?= $this->endSection() ?>