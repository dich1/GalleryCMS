<?php $this->load->view('inc/header_guest'); ?>

<h1>Forgot Password?</h1>
<?php
echo form_open('auth/forgotpassword');

echo form_fieldset('User Information');

if (isset($error)) {
  echo '<div class="alert alert-error"><strong>' . $error . '</strong></div>';
}
echo form_error('email_address');
echo form_label('Email Address', 'email_address');
echo form_input('email_address', $email_address);

echo form_fieldset_close(); 

echo form_button(array('id' => 'submit', 'value' => 'Reset Password', 'name' => 'submit', 'type' => 'submit', 'content' => 'Reset Password','class' => 'btn btn-primary'));

echo form_close();
?>
<p><a href="<?php echo site_url('auth'); ?>">Login</a></p>

<?php $this->load->view('inc/footer'); ?>
