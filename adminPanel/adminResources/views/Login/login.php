<!-- admin_panel/adminResources/views/SignUp/signup.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

</head>

<body>

<div class="form_wrapper">
      <div class="form_container">
        <div class="title_container">
          <h2>Responsive Login Form</h2>
        </div>
        <div class="row clearfix">
          <div class="col_half">
            <div class="social_btn fb"><a href="#"><span><i class="fa fa-facebook" aria-hidden="true"></i></span>Sign in
                with Facebook</a></div>
            <div class="social_btn tw"><a href="#"><span><i class="fa fa-twitter" aria-hidden="true"></i></span>Sign in
                with Twitter</a></div>
            <div class="social_btn gplus"><a href="#"><span><i class="fa fa-google-plus"
                    aria-hidden="true"></i></span>Sign in with Google+</a></div>
            <div class="row clearfix create_account">
              <div><a href="/coreasusa/adminPanel/signup">Create an Account</a></div>
            </div>
          </div>
          <div class="col_half last">

            <?php if (!empty($errors)): ?>
              <div style="color: red;">
                <?php foreach ($errors as $error): ?>
                  <p>
                    <?php echo $error; ?>
                  </p>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <form method="post" action="/coreasusa/adminPanel/login">
              <div class="input_field"><span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                <input type="email" name="email" placeholder="Email" required="">
              </div>
              <div class="input_field"><span><i class="fa fa-lock" aria-hidden="true"></i></span>
                <input type="password" name="password" placeholder="Password" required="">
              </div>
              <input class="button" type="submit" value="Sign in">
              <div class="row clearfix bottom_row">
                <div class="col_half remember_me">
                  <input name="" type="checkbox" value=""> Remember me
                </div>
                <div class="col_half forgot_pw"><a href="#">Forgot Password?</a></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
</body>

</html>