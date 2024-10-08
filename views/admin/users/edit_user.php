<script type="text/javascript">
  document.title = 'Change User Info';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Change User Info</h1>
        <div> 
          <a href="/admin/users" class="btn btn-success">Back</a>
          <a href="/admin/users/edit/password?id=<?=$userModel->getId()?>" style="margin-left: 20px;">Change password</a>
        </div><br>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::begin('', "post") ?>
            <div class="form-group col-md-4">
              <?php echo $form->field($userModel, 'firstname') ?>
            </div>
            <div class="form-group col-md-4">
              <?php echo $form->field($userModel, 'lastname') ?>
            </div>
            <div class="form-group col-md-4">
              <?php echo $form->field($userModel, 'phone_number') ?>
            </div>
            <div class="form-group col-md-4">
              <?php echo $form->field($userModel, 'email') ?>
            </div>
            <div class="form-group col-md-4">
              <?php echo $form->field($userModel, 'role') ?>
            </div>
            <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Image</th>
              <th>ID</th>
              <th>Name</th>
              <th class="no-sort">Options</th>
            </tr>
          </thead>
          <tbody>
            <?php  
            foreach($params['productModel'] as $product){
          ?>
          <tr>
                <td> <?php
                         echo '<img width="60" height="60"src="' . $product->getImageUrl() . '">';
                    ?></td>
                <td><?=$product->getId()?></td>
                <td><?=$product->getName()?></td>
                <td>
                  <a class="fa fa-trash btn btn-danger btn-sm" href="/admin/users/delete/product?id=<?=$userModel->getId()?>&product_id=<?=$product->getId()?>"></a>
                </td>
              </tr>
              <?php
            } ?>
            </table>
            <div class="form-row">
                <div class="col-md-4">
                <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus"></i>Update</button>
                </div>
            </div>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>