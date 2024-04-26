<script type="text/javascript">
  document.title = 'Category Detail';
</script> 
<div class="row">
  <div class="col-lg-6">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Category Detail</h1>
        <a href="/admin/categories" class="btn btn-success">Back</a>
      </header>
      <div class="panel-body">
        <dl class="dl-horizontal">
          <dt>ID</dt><dd><?= $params['model']->getId() ?></dd>
          <dt>Name</dt><dd><?= $params['model']->getName() ?></dd>
        </dl>
      </div>
    </section>
  </div>
</div>