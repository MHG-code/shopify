<?= $this->extend('customers/templates/base') ?>

<?= $this->section('title') ?>
  Home
<?= $this->endSection() ?>

<?= $this->section('links') ?>
   <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/styles/home.css">
<?= $this->endSection() ?>

<?= $this->section('section') ?>
  <!-- banner -->

  <!-- Details  -->
  <!-- items list -->
  <div class="container mt-5 mb-5 list">
    <div class="row g-2">
        <div class="col-12">
            <div class="row g-2">
              <?php foreach ($items['items'] as $item): ?>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-4">
                          <div class="d-flex justify-content-center">
                            <div class="card text-center">
                              <a class="detail" id="detail" data-title="<?= $item['title']; ?>"
                                data-src="<?= $item['src'] ?>"
                                data-price="<?= $item['price'] ?>"
                                data-discount="<?= $item['discount'] ?>"
                                data-id="<?= $item['_id'] ?>"
                                data-quantity="1"> 
                                  <?php if ($item['discount'] != 0): ?>
                                    <div class="off bg-success">
                                      <span><?= $item['discount']; ?>% off</span>
                                    </div>
                                  <?php endif; ?>
                                    <div class="image">
                                      <img src="<?= base_url('uploads/items/'.$item['src']) ?>">
                                    </div>
                                  
                                </a>
                              <div class="about-product">
                                <div class="text-center title">
                                  <h3><?= $item['title']; ?></h3>
                                </div>

                                <div class="text-center price">
                                  <h5><?= number_to_currency($item['price'], 'PKR'); ?></h5>
                                </div>

                                <div class="text-center buy-btn">
                            <button class="btn btn-success buy-now add-cart" id="add-cart"
                                data-title="<?= $item['title']; ?>"
                                data-src="<?= $item['src'] ?>"
                                data-price="<?= $item['price'] ?>"
                                data-discount="<?= $item['discount'] ?>"
                                data-id="<?= $item['_id'] ?>"
                                data-quantity="1">Buy Now</button>
                          </div>
                         </div>
                      </div>
                    </div>
                  </div>
              <?php endforeach; ?>
              <div class="pager">
                <?php
                if ($items['pager']->links() > 0) {
                echo $items['pager']->links('default' , 'pager_style');   
                 }     
                 ?>
              </div>
            </div>
            
        </div>
    </div>
  </div>

<!-- pup up -->
<div id="popUP_window">
  
</div>

<script src="<?= base_url() ?>/java/item_slides.js"></script>
<script src="<?= base_url() ?>/java/item_details.js"></script>


<?= $this->endSection() ?>