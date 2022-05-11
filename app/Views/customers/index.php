<?= $this->extend('customers/templates/base') ?>

<?= $this->section('title') ?>
  Home
<?= $this->endSection() ?>

<?= $this->section('links') ?>
   <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/styles/home.css">
<?= $this->endSection() ?>

<?= $this->section('main') ?>
  <main role="banner" id="main">
    
  </main>
<?= $this->endSection() ?>

<?= $this->section('section') ?>
  <section class="mt-5" id="section">
    
  </section>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
$(document).ready(async function(){
  await $.ajax({
            url: base_api+"/banner",
            type: 'GET',
            success: function(banner){
            $('main').html(banner);
          }
          })
  await $.ajax({
        url: base_api+"/home",
        type: 'GET',
        success:function(data) {
            $('section').html(data);
          },
          error: function(error) {
          $('section').html("<h1 class='alert'> This Website is empty now please wait whenever some data will be added... </h1>");
              }  
      });
  })
<?= $this->endSection() ?>
    