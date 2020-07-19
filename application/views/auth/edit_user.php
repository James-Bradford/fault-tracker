<!-- Load Header -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('includes/head', array('title' => $title));
$this->load->view('includes/header');
?>
<div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">


            <div class="card rounded-0">
                  <div class="card-header">
                        <h2 class="font-weight-light"><i class="fa fa-user"></i>&nbsp;<?php echo lang('edit_user_heading'); ?></h2>
                  </div>
                  <div class="card-body">
                        <p><?php echo lang('edit_user_subheading'); ?></p>

                        <div id="infoMessage"><?php echo $message; ?></div>

                        <?php echo form_open(uri_string()); ?>

                        <div class="form-group">
                              <label for="first_name"><?php echo lang('edit_user_fname_label', 'first_name'); ?></label>
                              <?php $first_name['class'] = 'form-control rounded-0' ?> 
                              <?php echo form_input($first_name); ?>
                        </div>

                        <div class="form-group">
                              <label for="last_name"><?php echo lang('edit_user_lname_label', 'last_name'); ?></label>
                              <?php $last_name['class'] = 'form-control rounded-0' ?> 
                              <?php echo form_input($last_name); ?>
                        </div>

                        <div class="form-group">
                              <label for="company"><?php echo lang('edit_user_company_label', 'company'); ?></label>
                              <?php $company['class'] = 'form-control rounded-0' ?> 
                              <?php echo form_input($company); ?>
                        </div>

                        <div class="form-group">
                              <label for="phone"><?php echo lang('edit_user_phone_label', 'phone'); ?></label>
                              <?php $phone['class'] = 'form-control rounded-0' ?> 
                              <?php echo form_input($phone); ?>
                        </div>

                        <div class="form-group">
                              <label for="password"><?php echo lang('edit_user_password_label', 'password'); ?></label>
                              <?php $password['class'] = 'form-control rounded-0' ?> 
                              <?php echo form_input($password); ?>
                        </div>

                        <div class="form-group">
                              <label for="password_confirm"><?php echo lang('edit_user_password_confirm_label', 'password_confirm'); ?></label>
                              <?php $password_confirm['class'] = 'form-control rounded-0' ?> 
                              <?php echo form_input($password_confirm); ?>
                        </div>

                        <?php if ($this->ion_auth->is_admin()) : ?>

                              <h3><?php echo lang('edit_user_groups_heading'); ?></h3>
                              <?php foreach ($groups as $group) : ?>
                                    <label class="checkbox">
                                          <?php
                                          $gID = $group['id'];
                                          $checked = null;
                                          $item = null;
                                          foreach ($currentGroups as $grp) {
                                                if ($gID == $grp->id) {
                                                      $checked = ' checked="checked"';
                                                      break;
                                                }
                                          }
                                          ?>
                                          <input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>" <?php echo $checked; ?>>
                                          <?php echo htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
                                    </label>
                              <?php endforeach ?>

                        <?php endif ?>

                        <?php echo form_hidden('id', $user->id); ?>
                        <?php echo form_hidden($csrf); ?>

                        <p><?php echo form_submit($data = array('type' => 'submit', 'value' => 'Save User', 'class' => 'btn btn-dark rounded-0')); ?></p>

                        <?php echo form_close(); ?>
                  </div>
            </div>
      </div>
      <div class="col-sm-3"></div>
</div>