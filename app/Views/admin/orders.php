<?= $this->extend('admin/templates/base') ?>

<?= $this->section('title') ?>
  add Items
<?= $this->endSection() ?>

<?= $this->section('styles') ?>

<?= $this->endSection() ?>


<?= $this->section('body') ?>
<div class="orders">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">order_code</th>
        <th scope="col">Name</th>
        <th scope="col">contact</th>
        <th scope="col">address</th>
        <th scope="col">Province</th>
        <th scope="col">Preview Order</th>
        <th scope="col">Deliver</th> 
        <th scope="col">Cancle</th> 
      </tr>
    </thead>
    <tbody>
      <?php foreach ($orders as $order ): ?>
          <tr>
            <th scope="row"><?= $order['order_code']?></th>
            <td><?= $order['name']?></td>
            <td><?= $order['contact']?></td>
            <td><?= $order['address']?></td>
            <td><?= $order['province']?></td>
            <td>
              <button type="button" value="<?= $order['customer_id']?>" class="btn btn-info order_preview">Show</button>
            </td>

            <td>
              <button type="button" class="btn btn-success">Deliver</button>
            </td>

            <td>
              <button type="button" class="btn btn-danger">cancle</button>
            </td>
          </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
<div id="preview">
  
</div>
</body>
<script type="text/javascript">
  $(document).ready(function(){
    $('.order_preview').on('click' , function(){

      $.ajax({
              url: '<?= base_url("admin/order_preview")  ?>',
              type: 'GET',
              data: {customer_id:this.value},
              success: function(data) {
                 $('#preview').html(data);
              }   
        });
    })
  })
</script>
</html>
<?= $this->endSection() ?>