<script type="text/javascript">
  document.title = 'Add Category';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Add Category</h1>
        <a href="/admin/categories" class="btn btn-success">Back</a>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::begin('', "post") ?>
            <div class="form-group col-md-4">
              <label for="name">Category</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
          <div class="form-row">
            <div class="col-md-4" style="margin-top: 25px;" >
              <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus"></i> Create </button>
            </div>
          </div>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>