<script type="text/javascript">
  document.title = 'Change Category';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Change Category</h1>
        <a href="/admin/categories" class="btn btn-success">Back</a>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::begin('', "post") ?>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <?php echo $form->field($categoryModel, 'name') ?>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Update</button>
                </div>
            </div>
          </div>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>