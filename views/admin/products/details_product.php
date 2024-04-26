<script type="text/javascript">
  document.title = 'Product Detail';
</script> 
<div class="row">
  <div class="col-lg-6">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Product Detail</h1>
        <a href="/admin/products" class="btn btn-success">Back</a>
      </header>
      <div class="panel-body">
        <dl class="dl-horizontal">
          <dt>ID</dt><dd><?= $params['productModel']->getId() ?></dd>
          <dt>Category</dt><dd><?= $params['productModel']->getCategory() ?></dd>
          <dt>Description</dt><dd><?= $params['productModel']->getDescription() ?></dd>
          <dt>Director</dt><dd><?= implode(',',$params['productModel']->getDirector()) ?></dd>
          <dt>Stars</dt><dd><?= implode(',',$params['productModel']->getStars()) ?></dd>
          <dt>Price</dt><dd><?= $params['productModel']->getPrice() ?> VND</dd>
        </dl>
      </div>
    </section>
  </div>
</div>