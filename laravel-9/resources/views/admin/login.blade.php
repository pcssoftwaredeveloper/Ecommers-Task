<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Admin | Login</title>

<script src="<?php echo base_url('assets/admin/bootstrap/bootstrap.min.css');?>"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/css/login.css') ?>">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<script src="<?php echo base_url('assets/admin/dist/js/jquery.min.js');?>"></script>


</head>
<body>
  <div class="head">
    <h2>Admin</h2>
  </div>
<div class="login-form">
    <form action="<?php echo base_url('admin/admin/login');?>" method="post" id="loginfrm">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Log in">
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    
</div>
</body>
</html>
<script type="text/javascript" src="<?= base_url('assets/admin/dist/js/jquery.validate.js');?>"></script>
<script type="text/javascript">
  $('#loginfrm').validate({
      rules:{
              email: {
                    required: true,
                    email:true,
                    remote:{
                      type: 'post',
                      url: '<?php echo base_url('admin/admin/emailNotExist');?>'
                    }
              },
               password: {
                  required: true, 
                  remote:{
                      type: 'post',
                      url: '<?php echo base_url('admin/admin/passwordNotExist');?>'
                    }
              }
            },

            messages: {

              email: {
              required: "Enter your email.", 
              email:'Please enter valid email',
              remote: "Email not exist"
            },

            password: {
              required: "Enter your password",
              remote: "You entered wrong password"
            },

            submitHandler: function(form) {
              $("#reg_submit").attr("disabled", true);
              $("#reg_submit").html("Submitting request...");
              form.submit();
            }
        }
      });
</script>