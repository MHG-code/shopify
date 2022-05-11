<?php $color_a = 'bg-transparent'; $color_b = 'bg-dark'; $h_a = 'text-white-50'; $h_b= 'text-body';   $number_catg=0; ?> <!-- save color for block -->

        <?php foreach ($categories as $catgory): ?> <!-- theme selector -->
          <?php $item_number = 0; ?>
          <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
            <?php if ($number_catg%2===0 ){
                $theme = $color_b;
                $card = $color_a;
                $h = $h_a;
              }
              else{
               $theme = $color_a;
               $card = $color_b;
               $h = $h_b;
              }
            ?>
            <!-- theme -->
            <div class="<?= $theme ?> me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">

              <div class="row">
              <!-- heading -->
              <div class="catgory_heading my-3 py-3  my-lg-5 py-lg-5 my-xl-5 py-xl-5 col-12 col-md-4 col-lg-4 col-xl-4">
                <a href="<?= base_url(); ?>/items/<?= $catgory['categories'] ?>">
                <h1 class="<?= $h ?>"><?= $catgory['categories'] ?></h1>
                </a>
                <!-- <p class="lead">And an even wittier subheading.</p> -->
              </div>
              <!-- /heading -->

              <!-- items  -->
              <div class="shadow-sm col-12 col-md-4 col-lg-4 col-xl-4 text-center" style="width: auto; height: auto; border-radius: 21px 21px 0 0;">       
                <div id="<?= $catgory['_id'] ?>" class="carousel slide w-100" data-ride="carousel">
                  <div class="carousel-inner w-100" role="listbox">
                    <?php foreach ($items['items'] as $item => $i): ?>
                        <?php if ($catgory['categories'] === $i['categories']){
                          if ($item_number === 0 ){
                            $carousel_item_class = 'class="carousel-item active"'; 
                          }
                          else{
                            $carousel_item_class = 'class="carousel-item"';
                          }
                        ?>

                    <div <?= $carousel_item_class ?> >
                      <div class="d-flex justify-content-center">
                        <div class="image py-3">
                          <img src="<?= base_url('uploads/items/'.$i['src']) ?>" style="width: 100%; height: auto; border-radius: 21px 21px 0 0;">
                        </div>            
                      </div>
                    </div>
                    <?php $item_number = $item_number+1; ?>
                    <?php }endforeach; ?>
                  </div>
                  
                </div>

                <?php if ($item_number > 1) { ?>
                  <a class="carousel-control-prev" href="#<?= $catgory['_id'] ?>" data-slide="prev" style="width: 13%; height: 100%; border-radius: 21px 0 0 0;">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#<?= $catgory['_id'] ?>" data-slide="next" style="width: 13%; height: 100%; border-radius: 0 21px 0 0;">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                  <?php } ?>
              </div>
              <div class="catgory_description my-3 py-3 my-lg-5 py-lg-5 my-xl-5 py-xl-5 col-12 col-md-4 col-lg-4 col-xl-4">
               
                <h5 class="<?= $h ?>"><?= nl2br($catgory['description']) ?></h5>
               
                <!-- <p class="lead">And an even wittier subheading.</p> -->
              </div>
              </div>
              <!-- <br> -->
              <!-- /items -->
            </div>
            <!-- /theme -->
          </div>
       <?php $number_catg = $number_catg+1; endforeach; ?>