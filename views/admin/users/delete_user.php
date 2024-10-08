<script type="text/javascript">
  document.title = 'Delete User';
</script> 
<div class="row">
  <div class="col-lg-6">
    <section class="panel" style="box-shadow: none;">
      <header class="panel-heading">
        <h1>Delete User</h1>
        <a href="/admin/users" class="btn btn-success">Back</a>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::begin('', "post") ?>
          <input type="hidden" name="id" id="id" value="<?= $params['userModel']->getId() ?>" />
          <dl class="dl-horizontal">
          <dt>UserID</dt><dd><?= $params['userModel']->getId() ?></dd>
          <dt>Name</dt><dd><?= $params['userModel']->getName() ?></dd>
          <dt>Email</dt><dd><?= $params['userModel']->getEmail() ?></dd>
          <dt>Phone No.</dt><dd><?= $params['userModel']->getPhoneNumer() ?></dd>
          <dt>Role</dt><dd><?= $params['userModel']->getRole() ?></dd>
          </dl>
          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete </button>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>