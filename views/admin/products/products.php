<script type="text/javascript">
  document.title = 'Products';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Products</h1>
          <a href="/admin/products/create" class="btn btn-success">Create</a>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-hover dt-datatable">
          <thead>
            <tr>
              <th>ProductID</th>
              <th>Image</th>
              <th>Category</th>
              <th>Name</th>
              <th>Price</th>
              <th class="no-sort">Options</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($params['products'] as $productModel) { 
            ?>
              <tr>
                <td><?=$productModel->getId()?></td>
                <td>
                    <?php
                         echo '<img width="60" height="60"src="' . $productModel->getImageUrl() . '">';
                    ?>
                </td>
                <td><?=$productModel->getCategory()?></td>
                <td><?=$productModel->getName()?></td>
                <td><?=$productModel->getPrice()?></td>
                <td>
                  <a class="fa  btn <?php if($productModel->getEnable() === 'off'){echo 'fa-eye-slash btn-dark';} else{echo 'fa-eye btn-info';}?> btn-sm" href="/admin/products/details?id=<?=$productModel->getId()?>"></a>
                  <a class="fa fa-pencil btn btn-warning btn-sm" href="/admin/products/edit?id=<?=$productModel->getId()?>"></a>
                  <a class="fa fa-trash btn btn-danger btn-sm" href="/admin/products/delete?id=<?=$productModel->getId()?>"></a>
                </td>
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