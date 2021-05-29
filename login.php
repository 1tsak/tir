<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | The Indian Rock</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <script>
    const signInButton = document.getElementById('signIn');



    signInButton.addEventListener('click', () => {

        function ajaxcall() {
  // (B1) GET FORM DATA
  var data = new FormData();
  data.append('pass', document.getElementById("user-pass").value);
  data.append('email', document.getElementById("user-email").value);

  if(document.getElementById("user-pass").value == null){
      alert "dsf";
  }
 
  // (B2) AJAX CALL
  var xhr = new XMLHttpRequest();
  xhr.open('POST', "handle_request.php");
  xhr.onload = function () {
    console.log(this.response);
  };
  xhr.send(data);
  return false;
}
});
     </script>
    <div class="main-wrap">
        <div class="outer-wrap">
            <div class="img-wrap">
                <img src="images/form-image.png" alt="">
            </div>
            <div class="form-wrap">
                <h1>Log in</h1>
                <p>Welcome Back to The indian Rock </p>
                <form action="#" class="form">
                    <br>
                    <input type="email" name="email" placeholder="Email" id = "user-email"><br>
                    <input type="password" name="pass" placeholder="Password" id = "user-pass"><br>
                    <button type="submit" id = "signIn"class="btn">Let's start!</button>
                </form>

                <div class="bottom-text">
                    <p>Don't have an account? <a href="#">Sign up</a></p>
                    <p>Forgot Password <a href="#">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
