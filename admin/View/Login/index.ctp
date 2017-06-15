<br><br><div class="row login-form">
    <div class="col-sm-4 col-sm-offset-4">
        <h1 class="text-center">Login Form</h1>
        <br>
        <div id="auth_message"></div>
        <?php echo $this->Form->create('User'); ?>
        <?php echo $this->Form->input('email', array('label' => false,'class' => 'form-control login-email', 'placeholder' => 'Email Address')); ?>
        <?php echo $this->Form->input('password', array('label' => false, 'class' => 'form-control login-pass', 'placeholder' => 'Password')); ?> 
        <br>
        <button type="submit" class="btn-block login-submit"><span class="fa fa-key"></span></button>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
<script type="text/javascript">
    window.onload = function() {
      loadData(); 
    };
        
    function loadData() {
        var message = "<?php echo $error_login; ?>";
        if (message) {
            document.getElementById("auth_message").innerHTML = "<div class='alert alert-danger'>" + message + "</div>";
        }
    }
</script>