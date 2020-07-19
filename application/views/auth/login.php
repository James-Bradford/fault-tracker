<?php $this->load->view('includes/head', array('title' => $title)); ?>

<!-- NavBar Start -->
<nav class="navbar bg-light navbar-light">

  <a class="navbar-brand text-center" href="/">fault.io</a>

</nav>
<!-- NavBar End -->

<body style="height: 100%; margin: 0px; padding: 0px; background-color: #ededed">
  <div class="container d-flex justify-content-center align-items-center pt-4">

    <div class="card rounded-0">
      <div class="card-body">
        <h1><?php echo lang('login_heading'); ?></h1>
        <p><?php echo lang('login_subheading'); ?></p>

        <?php if (isset($message)) { ?>
          <div id="infoMessage" class="alert alert-danger bg-danger text-light rounded-0"><?php echo $message; ?></div>
        <?php } ?>

        <?php echo form_open("auth/login"); ?>

        <div class="form-group">
          <label for="identity"><?php echo lang('login_identity_label', 'identity'); ?></label>
          <?php echo form_input($data = array('name' => 'identity', 'id' => 'identity', 'class' => 'form-control rounded-0')); ?>
        </div>

        <div class="form-group">
          <label for="password"><?php echo lang('login_password_label', 'password'); ?></label>
          <?php echo form_input($data = array('name' => 'password', 'id' => 'password', 'type' => 'password', 'class' => 'form-control rounded-0')); ?>
        </div>

        <div class="form-group">
          <label for="remember"><?php echo lang('login_remember_label', 'remember'); ?></label>
          <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
        </div>


        <p><?php echo form_submit($data = array('type' => 'submit', 'value' => 'Login', 'class' => 'btn btn-dark rounded-0')); ?></p>

        <?php echo form_close(); ?>

        <p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>

      </div>
    </div>

  </div>
</body>