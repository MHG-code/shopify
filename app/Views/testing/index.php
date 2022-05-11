<?= $this->extend('testing/base') ?>

<?= $this->section('title') ?>
  Home
<?= $this->endSection() ?>

<?= $this->section('links') ?>
   <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/styles/home.css">
<?= $this->endSection() ?>

<?= $this->section('body') ?>

<div class="content">
  
</div>
<!-- <script src=""></script> -->
<?= $this->endSection() ?>

<?= $this->section('script') ?>
$(document).ready(async function(){
  await $.ajax({
  			async: true,
  			url: base_api+"/abchome",
  			type: 'GET',
  			success: function(data) {
          	$('.content').html(data);
          }
      });
  })
<?= $this->endSection() ?>
    