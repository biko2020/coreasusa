
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="page-wrapper">
    <div class="form_wrapper">
      <div class="form_container">
        <div class="title_container">
          <h2>Sign Up</h2>
        </div>
        <div id="error-message" style="color: red; font-size:16px; font-weight: bold;"></div>
        <div class="row clearfix">
          <div class="col_full last">

      <?php if (isset($data['errors']) && is_array($data['errors']) && !empty($data['errors'])): ?>
              <div>
              <?php foreach ($data['errors'] as $error): ?>
                  <p style="color: red; font-size:16px; font-weight: bold;">
                    <?php echo $error; ?>
                  </p>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <form method="post" action="/coreasusa/adminPanel/signup" onsubmit="return validationForm()">
              <div class="input_field">
                <span> <i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" name="username" placeholder="Name" required="">
              </div>

              <div class="input_field">
                <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                <input type="email" name="email" placeholder="Email" required="">
              </div>

              <div class="input_field">
                <span id="togglePassword" onclick="togglePasswordVisibility()">
                  <i class="fa fa-eye" aria-hidden="true"></i></span>
                <input type="password" id="password" name="password" placeholder="Password" required>
              </div>
              
              <div class="input_field">
                <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                <input type="password" id="retap-password" name="retap-password" placeholder="Retyp Password" required>
              </div>
              
              <input class="button" type="submit" value="Create an Account">
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

  </div>

  <script src="../adminPanel/public/js/signup.js"></script>
</body>

</html>