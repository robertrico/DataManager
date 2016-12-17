<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

	<?= $this->Form->create() ?>
      <div class="form-group has-feedback">
        <?= $this->Form->input('fullname',['type'=>'text','class'=>'form-control','placeholder'=>'Full name','label'=>false]) ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <?= $this->Form->input('username',['type'=>'text','class'=>'form-control','placeholder'=>'Username','label'=>false]) ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <?= $this->Form->input('email',['type'=>'email','class'=>'form-control','placeholder'=>'Email Address','label'=>false]) ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <?= $this->Form->input('password',['type'=>'password','class'=>'form-control','placeholder'=>'Password','label'=>false]) ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <?= $this->Form->input('passwordr',['type'=>'password','class'=>'form-control','placeholder'=>'Re-Type Password','label'=>false]) ?>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
	<?= $this->Form->end() ?>

<!--
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="login.html" class="text-center">I already have a membership</a>
-->
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
<script>
$('form').submit(function(e){
	if($('#password').val() == $('#passwordr').val()){
		return true;
	}else{
		e.preventDefault();
		$('#passwordr').css('border','solid 1px red');
		if(!$('.err').length){
			$('#passwordr').parent().parent().before('<small class="err">Passwords must match.</small>');
		}
		return false;
	}
});
</script>
