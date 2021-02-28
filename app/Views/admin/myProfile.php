<?= $this->extend('admin/templates/base') ?>

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
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.youtube:hover
{
  background: #bb0000;
}
.social-icons a.instagram:hover
{
  background: #125688;
}
<?= $this->endSection() ?>

<?= $this->section('body') ?>
<div class="container">
  <form <?= base_url('admin/myprofile') ?> method="post" class="g-3 mt-5"  enctype="multipart/form-data">

    <div class="row">
      <div class="col-12">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Website Name</span>
          <input type="text" class="form-control" name="Website_Name" placeholder="Website_Name" aria-label="Website_Name" aria-describedby="basic-addon1">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Logo</span>
          <div class="image-upload">
              <label for="upload-file">
                  <img src="<?= base_url()?>/uploads/icon/icon.png"/>
              </label>
              <input type="file" id="upload-file" name="logo" class="form-control" multiple/>
          </div>
        </div>
      </div>
    </div>

    
    <div class="row">
      <div class="col-12">
        <div class="input-group mb-3">
          <label for="basic-url" class="form-label social-icons"><li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li></label>
          <input type="text" class="form-control" name="facebook" placeholder="https://www.facebook.com/Your_Page" id="basic-url" aria-describedby="basic-addon3">
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-12">
        <div class="input-group mb-3">
          <label for="basic-url" class="form-label social-icons"><li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li></label>
          <input type="text" class="form-control" name="youtube" placeholder="https://www.youtube.com/channel/Your channel" id="basic-url" aria-describedby="basic-addon3">
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-12">
        <div class="input-group mb-3">
          <label for="basic-url" class="form-label social-icons"><li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li></label>
          <input type="text" class="form-control" name="instagram" placeholder="https://www.instagram.com/" id="basic-url" aria-describedby="basic-addon3">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <textarea class="form-control" name="about" placeholder="Your About" id="Ddescription" rows="4"></textarea>
        </div>
      </div>
    </div>
<br>
    <span class="input-group-btn">
      <button type="submit" name="submit" id="submit" class="btn btn-primary" type="button">Update</button>
    </span>
  </form>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>

  $('#upload-file').change(function(event){
  <!-- this.files OR event.target.files -->

  if (this.files && this.files[0]) {

    var reader = new FileReader();

     reader.onload = function(e) {
      debugger;
      $('.image-upload img').attr('src', e.target.result);             
    }

    reader.readAsDataURL(this.files[0]); // convert to base64 string
}
})
<?= $this->endSection() ?>
    