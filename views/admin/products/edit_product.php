<script type="text/javascript">
  document.title = 'Change Product Detail';
</script> 
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  margin-left: 200px;
  margin-top: 25px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<div class="row">
  <div class="col-lg-12">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Change Product Detail</h1>
        <a href="/admin/products" class="btn btn-success">Back</a>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::begin('', "post") ?>
          <div class="form-row">
            <div class="form-group col-md-3">
              <?php echo $form->field($productModel, 'name') ?>
            </div>




            <div class="form-group col-md-3">
              <div class="mb-3">
                <label class="form-label">Category</label>
                <select name='category_id' class="form-control">
                  <?php
                  foreach ($categories as $category) { 
                  ?>
                    <option <?php if ($categoryModel->getId() == $category->getId()) echo "selected=\"selected\"";  ?> value=<?=$category->getId()?> ><?=$category->getName()?></option>
                  <?php 
                  }
                  ?>
                </select>
              </div>
            </div>




            <div class="form-group col-md-3">
              <?php echo $form->field($productModel, 'price') ?>
            </div>
            <div class="form-group col-md-3">
              <!-- <?php echo $form->field($productModel, 'enable') ?> -->
              <label class="switch">
                <input name="enable" class="form-control" type="checkbox" <?php if($productModel->getEnable() == "on"): echo "checked"; endif; ?>>
                <span class="slider round"></span>
              </label>
            </div>
            </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <?php echo $form->field($productModel, 'description') ?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <?php echo $form->field($productModel, 'director') ?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <?php echo $form->field($productModel, 'stars') ?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <?php echo $form->field($productModel, 'image_url') ?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <?php echo $form->field($productModel, 'download_url') ?>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <?php echo $form->field($productModel, 'stream_url') ?>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Update</button>
            </div>
          </div>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>