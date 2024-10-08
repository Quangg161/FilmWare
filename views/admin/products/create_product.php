<script type="text/javascript">
  document.title = 'Create';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Create Product</h1>
        <a href="/admin/products" class="btn btn-success">Create</a>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::begin('', "post") ?>
            <div class="form-group col-md-4">
              <label for="category_id">Category</label>
              <select id="category_id" name='category_id' class="form-control">
                  <?php
                  foreach ($categories as $category) { 
                  ?>
                    <option value=<?=$category->getId()?> ><?=$category->getName()?></option>
                  <?php 
                  }
                  ?>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="name">Product name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Product name">
            </div>
            <div class="form-group col-md-4">
              <label for="price">Price</label>
              <input type="text" class="form-control" id="price" name="price" placeholder="Price">
            </div>
            <div class="form-group col-md-4">
              <label for="image_url">Image URL</label>
              <input type="text" class="form-control" id="image_url" name="image_url" placeholder="Image URL">
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Description">
              </div>
            </div>
          <div class="form-row">
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus"></i> Create</button>
            </div>
          </div>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>