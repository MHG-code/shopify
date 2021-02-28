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
<?= $this->endSection() ?>


<?= $this->section('body') ?>
  <div class="container">
    <form class="row g-3 mt-5"  enctype="multipart/form-data" >
      <div class="col-md-4">
        <div class="input-group mb-3">
          <span class="input-group-text" id="title">Title</span>
          <input type="text" name="title" class="form-control" placeholder="title" aria-label="title" aria-describedby="title">
        </div>
      </div>

      <div class="col-md-4">
        <div class="input-group mb-3">
          <!-- <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Category</button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
          </ul> -->
          <input type="text" name="new_category" placeholder="New category" class="form-control" aria-label="Text input with dropdown button">
        </div>
      </div>

      <div class="col-md-4">
        <div class="input-group mb-3">
         <!--  <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Brand</button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
          </ul> -->
          <input type="text" name="new_brand" placeholder="New Brand" class="form-control" aria-label="Text input with dropdown button">
        </div>
      </div>

      <div class="col-md-4">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">PKR</span>
          </div>
          <input type="text" name="price" class="form-control" aria-label="Amount (to the nearest PKR)">
          <div class="input-group-append">
            <span class="input-group-text">.00</span>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">discount</span>
          </div>
          <input type="text" name="discount" class="form-control" aria-label="Amount (to the nearest %)">
          <div class="input-group-append">
            <span class="input-group-text">%</span>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="form-group">
          <textarea class="form-control" name="description" placeholder="Description" id="Ddescription" rows="4"></textarea>
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
</body>

<script type="text/javascript">
  $(function(){

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
      $('.close').css({
        'position': 'absolute',
        'margin-top' : '-155px',
        'margin-left' : '130px',
        'transition': 'all 200ms',
        'font-size': '30px',
        'font-weight': 'bold',
        'color': 'rgb(148 124 124 / 75%);',
        'border': 'none',
        'display': 'inline-block',
        'border-radius': '50%',
        'background-repeat':'no-repeat',
        'overflow': 'hidden',
        'outline':'none',
        'background-color': 'rgb(137 152 138 / 54%);',   

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
                 $('#msg').html("<div class='alert alert-success' role='alert'>"+data+"</div>");
              }
              // error: function(e) {
              //     $('#msg').html("<div class='alert alert-danger' role='alert'>"+e+"</div>");                    
              // }    
        });
    });

  });
</script>
<!-- <script>
$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {
    if (input.files) {
      var filesAmount = input.files.length;

      for (i = 0; i < filesAmount; i++) {
        var reader = new FileReader();

        reader.onload = function(event) {

          var imgElement = $($.parseHTML('<img>')).attr('src', event.target.result).attr('class', 'prevImage').appendTo(placeToInsertImagePreview);
          imgElement.wrap('<div class="img-preview"></div>').css({
          'width': '200px', 
           'height': '200px',
           'margin-left' : '15px',
           'padding-top' : '20px',
          });

          imgElement.parent().append('<button type="button" class="close" aria-label="Close"><span id="cross" aria-hidden="true">&times;</span></button>').css({
            'cursor': 'pointer',
            
          });
        }
        reader.readAsDataURL(input.files[i]);
      }
    }
  };

  $('#file-input').on('change', function() {
    imagesPreview(this, 'div.preview');
  });

  $(document).on('click', '.close', function() {
    $(this).parent('.img-preview').remove();
  });
});
</script> -->
</html>
<?= $this->endSection() ?>