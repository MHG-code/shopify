
  <!-- items list -->
   <?php foreach ($categories as $catgory): ?>
    <?php $a = 1; ?>
    <div class="categories">
          <a href="<?= base_url(); ?>/items/<?= $catgory['categories'] ?>">
            <h2 class=""><?= $catgory['categories'] ?></h2>
          </a>
    </div>
    <div class="container text-center my-3 list">
      
      <div class="row mx-auto my-auto">

          <div id="<?= $catgory['_id'] ?>" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">
                <?php foreach ($items['items'] as $item => $i): ?>
                  <?php if ($catgory['categories'] === $i['categories']){?>
                      <?php if ($a === 1 ){ ?>
                      <div class="carousel-item active">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-4">
                          <div class="d-flex justify-content-center">
                            <div class="card text-center">
                              <a class="detail" id="detail" data-title="<?= $i['title']; ?>"
                                data-src="<?= $i['src'] ?>"
                                data-price="<?= $i['price'] ?>"
                                data-discount="<?= $i['discount'] ?>"
                                data-id="<?= $i['_id'] ?>"
                                data-quantity="1"> 
                                  
                                    <div class="off bg-success">
                                      <span><?= $i['discount']; ?>% off</span>
                                    </div>
                                    <div class="image">
                                      <img src="<?= base_url('uploads/items/'.$i['src']) ?>">
                                    </div>
                                  
                                </a>
                              <div class="about-product">
                                <div class="text-center title">
                                  <h3><?= $i['title']; ?></h3>
                                </div>

                                <div class="text-center price">
                                  <h5><?= number_to_currency($i['price'], 'PKR'); ?></h5>
                                </div>

                                <div class="text-center buy-btn">
                                  <button class="btn btn-success buy-now add-cart" id="add-cart"
                                data-title="<?= $i['title']; ?>"
                                data-src="<?= $i['src'] ?>"
                                data-price="<?= $i['price'] ?>"
                                data-discount="<?= $i['discount'] ?>"
                                data-id="<?= $i['_id'] ?>"
                                data-quantity="1">Buy Now</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php $a = 0; }  else{ ?>
                      <div class="carousel-item">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                          <div class="d-flex justify-content-center">
                            <div class="card text-center">
                              <a class="detail" id="detail" data-title="<?= $i['title']; ?>"
                                data-src="<?= $i['src'] ?>"
                                data-price="<?= $i['price'] ?>"
                                data-discount="<?= $i['discount'] ?>"
                                data-id="<?= $i['_id'] ?>"
                                data-quantity="1"> 
                                  
                                    <div class="off bg-success">
                                      <span><?= $i['discount']; ?>% off</span>
                                    </div>
                                    <div class="image">
                                      <img src="<?= base_url('uploads/items/'.$i['src']) ?>">
                                    </div>
                                  
                                </a>
                              <div class="about-product">
                                <div class="text-center title">
                                  <h3><?= $i['title']; ?></h3>
                                </div>

                                <div class="text-center price">
                                  <h5><?= number_to_currency($i['price'], 'PKR'); ?></h5>
                                </div>

                                <div class="text-center buy-btn">
                                  <button class="btn btn-success buy-now add-cart" id="add-cart"
                                data-title="<?= $i['title']; ?>"
                                data-src="<?= $i['src'] ?>"
                                data-price="<?= $i['price'] ?>"
                                data-discount="<?= $i['discount'] ?>"
                                data-id="<?= $i['_id'] ?>"
                                data-quantity="1">Buy Now</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php }}endforeach; ?>
              </div>

              <div class="controls-top p-3">
                <a class="btn-floating" href="#<?= $catgory['_id'] ?>" data-slide="prev"><i class="carousel-control-prev-icon bg-dark border border-dark rounded-circle"></i></a>
                <a class="btn-floating" href="#<?= $catgory['_id'] ?>" data-slide="next"><i class="carousel-control-next-icon bg-dark border border-dark rounded-circle"></i></a>
              </div>

          </div>
      </div>
    </div>
   <?php endforeach; ?>
<!-- pup up -->
<div id="popUP_window">
  
</div>

<script src="<?= base_url() ?>/java/item_slides.js"></script>
<script src="<?= base_url() ?>/java/item_details.js"></script>
<script src="<?= base_url() ?>/java/cart.js"></script>



