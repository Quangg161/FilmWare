<script type="text/javascript">
  document.title = 'Delete Category';
</script> 
<div class="row">
  <div class="col-lg-6">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Delete Category</h1>
        <a href="/admin/categories" class="btn btn-success">Back</a>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::begin('', "post") ?>
          <input type="hidden" name="id" id="id" value="<?= $params['model']->getId() ?>" />
          <dl class="dl-horizontal">
            <dt>ID</dt><dd><?= $params['model']->getId() ?></dd>
            <dt>Name</dt><dd><?= $params['model']->getName() ?></dd>
          </dl>
          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>