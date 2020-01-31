<?php $session = \Config\Services::session($config); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/main.css') ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Bootstrap_logo.svg" width=32 height=32 id="icon" alt="User Icon" />
    </div>
    <!-- Login Form -->
    <?php echo form_open('home/login'); ?>
    <div class="input-group mb-3">
                <?php $data = [
                    'name'      => 'email',
                    'placeholder' => 'Email Address',
                    'class'     => 'form-control',
                    'maxlength' => '100',
                    'size'      => '50',
                ];
            echo form_input($data); ?>
</div>
<div class="input-group mb-3">
<?php $data = [
                    'name'      => 'password',
                    'placeholder' => 'Password',
                    'class'     => 'form-control',
                    'maxlength' => '100',
                    'size'      => '50',
                ];
            echo form_password($data); ?>
</div>
                <?php
                $data = [
                  'class' => 'fadeIn fourth',
                  'value' => 'Login',
                  'name' => 'loginSubmit'
                ];
                echo form_submit($data);
                ?>
    <?php echo form_close(); ?>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Register Here</a>
    </div>

  </div>
</div>
</body>
</html>