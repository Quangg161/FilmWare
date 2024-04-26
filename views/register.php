<div class="card-regester">
    <div class="card-header">
        <h1>Đăng ký</h1>
    </div>
    <div class="card-body">
        <!-- Expose begin method from Form.php -->
        <?php $form = app\core\Form\Form::begin('', "post") ?>
            <div class="row">
                <div class="col">
                    <!-- Call method field from Form.php to print out the attribute in a Form format -->
                    <?php echo $form->field($model, 'firstname') ?>
                </div>
                <div class="col">
                    <?php echo $form->field($model, 'lastname') ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php echo $form->field($model, 'email') ?>
                </div>    
                <div class="col">
                    <?php echo $form->field($model, 'phone_number') ?>
                </div>
            </div> 

            <div class="row">
                <div class="col">
                    <?php echo $form->field($model, 'password')->passwordField() ?>
                </div>   
                <div class="col">
                    <?php echo $form->field($model, 'passwordConfirm')->passwordField() ?>
                </div>  
            </div>
            
            <div class="remember-me">
                <input type="checkbox" required>
                <span style="color: #000000">I accept the Terms & Services</span>
            </div>
            <div class="btn" style="width:100%;">
                <button type="submit" class="button">Register</button>
                <div class="login">
            Do you have an account ?
            <a href="/login">Sign in</a>
            </div>
            
        </div>
        <?php app\core\form\Form::end() ?>
    </div>
</div>

    
