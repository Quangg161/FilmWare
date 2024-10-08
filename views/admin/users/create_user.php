<script type="text/javascript">
  document.title = 'Add User';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Create</h1>
        <a href="/admin/users" class="btn btn-success">Back</a>
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
              <!-- <?php echo $form->field($userModel, 'role') ?> -->
              <label class="form-label">Role</label>
              <select name="role" class="form-control">
                <option value="admin" selected>Admin</option>
                <option value="client">Client</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <?php echo $form->field($userModel, 'password')->passwordField()?>
            </div>
            <div class="form-group col-md-6">
              <?php echo $form->field($userModel, 'passwordConfirm')->passwordField()?>
            </div>
          <div class="form-row">
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus"></i> Create </button>
            </div>
          </div>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>