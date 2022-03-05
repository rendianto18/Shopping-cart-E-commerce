  <link href="<?php echo base_url() ?>assets/login1.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/js/login.js" rel="stylesheet">
<div class="container">
<div><?=validation_errors()?></div>
<div><?=$this->session->flashdata('error')?></div>
<?=form_open('login')?>
<div class="login-page">
  <div class="form">
    <h1>Welcome Admin</h1>
    <form class="login-form">
      <input type="text" class="form-control" name="username" placeholder="username"/>
      <input type="password" class="form-control" name="password" placeholder="password"/>
      <button type="submit">login</button>
    </form>
  </div>
</div>
</div>
