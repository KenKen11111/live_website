<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="shortcut icon" href="favicon-16x16.png" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
      <b class="brand">DREAM FARM</b>
      <div class="dropdown">
        <button class="dropbtn">Menu
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="index.php">Home</a>
          <a href="login.php">Login</a>
          <a href="signup.php">SignUp</a>
          <a href="contact.php">Contact Us</a>
          <a href="about.php">About Us</a>
        </div>
      </div>
    </nav>
    <main>
        <form class="form1" method="POST" action="signup.php">
            <h1>SignUp</h1>
            <input type="text" placeholder="Full name" name="name" required>
            <input type="text" placeholder="Username" name="username"required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="facebook" placeholder="Facebook" name="facebook" required>
            <input type="tel" placeholder="Cellphone Number" name="tel" required>
            <input type="address" placeholder="Address" name="address" required>
            <input type="password" placeholder="Password" name="password" required>
            <label for="male">Male</label>
            <input type="radio" name="gender" id="male" value="male" >
            <label for="female">Female</label>
            <input type="radio" name="gender" id="female" value="female" >
            <input type="submit" name="submit" value="Sign up">
            <div class="show-password">
              <input type="checkbox" id="show-password-checkbox">
              <label for="show-password-checkbox">Show password</label>
            <footer>Click here to login <a href="login.php" class="signup">Login</a></footer>
            </div>
        </form>
        <?php
  // check if the form is submitted
  if(isset($_POST['submit'])) {
    
    // retrieve the form data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $facebook = $_POST['facebook'];
    $tel = $_POST['tel'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    
    // connect to the database
    $conn = mysqli_connect("localhost","root","","signup");
    
    // check if the email already exists in the database
    $query = mysqli_query($conn, "SELECT * FROM signup WHERE email='$email'");
    $row = mysqli_fetch_array($query);
    
   
    if ($row) {
      echo "This email is already in use. Please use a different email.";
    }
    // otherwise, insert the data into the database
    else {
      $insert_query = mysqli_query($conn, "INSERT INTO signup (fullname, username, email, facebook, cellnum, address, password, gender) VALUES ('$name', '$username', '$email', '$facebook', '$tel', '$address', '$password', '$gender')");
      
      if ($insert_query) {
        echo "Registration successful!";
      } else {
        echo "Registration failed. Please try again.";
      }
    }
  }
?>

              
        <script>
            const showPasswordCheckbox = document.getElementById('show-password-checkbox');
            const passwordInput = document.querySelector('input[type="password"]');
            showPasswordCheckbox.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                } else {
                    passwordInput.type = 'password';
                } 
            });
        </script>
    </main>
    <p style="position: fixed; bottom: 0; width: 100%; text-align: center;">© All Right Reserved Dream Farm</p>
</body>
