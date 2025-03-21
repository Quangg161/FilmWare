<?php

use app\core\Application;

if (Application::isGuest()) {
    Application::$app->response->redirect('/login');
}
?>

<?php
$this->title = 'Profile';
?>

<h1>Your account</h1>

<div class="profile-avatar">
    <img class="profile-avatar-image" alt="profile-avatar-image" src='../public/images/avatar.png'>
</div>
<?php $form = app\core\Form\Form::begin('', "post") ?>
<div class="row">
    <div class="col">
        <?php echo $form->field($user, 'firstname') ?>
    </div>
    <div class="col">
        <?php echo $form->field($user, 'lastname') ?>
    </div>
</div>
<?php echo $form->field($user, 'email') ?>
<?php echo $form->field($user, 'phone_number') ?>
<button type="submit" class="btn btn-primary">Update</button>
<?php app\core\form\Form::end() ?>

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="updateProfile" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="../public/images/logo/logo-2.png" width="30px" class="rounded me-2" alt="logo-2">
            <strong class="me-auto">Filmware</strong>
            <small>Bây giờ</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Profile update successfully.
        </div>
    </div>
</div>

<script>
<?php
    if (isset($params['updateSuccess'])) {
        if ($params['updateSuccess']) {
            echo "var toastLiveExample = document.getElementById('updateProfile')
            var toast = new bootstrap.Toast(toastLiveExample)
            toast.show()";
        }
    }
    ?>
</script>