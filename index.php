
<?php
include('KB_header.php');
include('KB_library.php');



$email = $pwd = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_email($_POST["email"]);
  $pwd = test_pwd($_POST["pwd"]);
}
?>

<div class="container" style="margin-top:80px">
  <h2>Log In</h2>
  <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> Login </button>
        <a href="main.php" class="btn btn-default" role="button"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
      </div>
    </div>
  </form>
</div>


<?php
  if(LogIn ($email, $pwd)) {
    echo "you are login as: " . $_SESSION["userName"] . " rights: " . $_SESSION["userRights"];
    ?>
    <script type="text/javascript">
      location.replace("main.php");
    </script>
    <?php
  }
  else {
    if ($email != "") {
      ?>
      <div class="container" style="margin-top:80px">
        <h2>Your Input:</h2>
        <p>Your Log In information are not correct, please try again or contact Administrator</p>
      </div>
      <?php
    }
    else {
      ?>
      <div class="container" style="margin-top:80px">
        <h2>Your Input:</h2>
        <p>Please enter your Log In information: email and password</p>
      </div>
      <?php
    }
    session_unset();
    session_destroy();
  };
?>

</body>
</html>
