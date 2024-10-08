<script type="text/javascript">
  document.title = 'Order Detail';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Order Detail</h1>
        <a href="/admin/orders" class="btn btn-success">Back</a>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-hover dt-datatable">
          <thead>
            <tr>
              <th>Product Img</th>
              <th>Name</th>
              <th>Price</th>
              <th class="no-sort"></th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($params['model'] as $orderModel) { 
            ?>
              <tr>
                <td>
                    <?php
                         echo '<img width="60" height="60"src="' . $orderModel->image_url . '">';
                    ?>
                </td>
                <td><?=$orderModel->name?></td>
                <td><?=$orderModel->price?></td>
              </tr>
            <?php 
              }
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</div>