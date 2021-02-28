<!-- items list -->
  <div class="container mt-5 mb-5 list">
    <div class="row g-2">
        <div class="col-12">
            <div class="row g-2">
              <?php foreach ($items['items'] as $item): ?>
                  <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <div class="product py-4">
                          <span class="off bg-success">-<?= $item['discount']?>% OFF</span>
                          <a class="detail" id="detail" data-title="<?= $item['title']; ?>"
                                data-src="<?= $item['src'] ?>"
                                data-price="<?= $item['price'] ?>"
                                data-discount="<?= $item['discount'] ?>"
                                data-id="<?= $item['_id'] ?>"
                                data-quantity="1"> 
                            <div class="text-center">
                              <img src="<?= base_url('uploads/items/'.$item['src']) ?>">
                            </div>
                          </a>

                            <div class="about text-center">
                                <h5><?= $item['title']; ?></h5>
                                <span><?= $item['price'] ?> PKR</span>
                            </div>
                            <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center">
                              <button class="btn btn-outline-success text-uppercase add-cart" id="add-cart"
                                data-title="<?= $item['title']; ?>"
                                data-src="<?= $item['src'] ?>"
                                data-price="<?= $item['price'] ?>"
                                data-discount="<?= $item['discount'] ?>"
                                data-id="<?= $item['_id'] ?>"
                                data-quantity="1"
                                >Add to cart</button>
                                <!-- <div class="add">
                                  <span class="product_fav">
                                    <i class="fa fa-heart-o"> 
                                    </i>
                                  </span>
                                  <span class="product_fav">
                                    <i class="fa fa-opencart">
                                      
                                    </i>
                                  </span>
                                </div> -->
                            </div>
                        </div>
                  </div>
              <?php endforeach; ?>
              <div class="pager">
                <?= $items['pager']->links('default' , 'pager_style') ?>
              </div>
            </div>
            
        </div>
    </div>
  </div>

<!-- pup up -->
<div id="popUP_window">
  
</div>