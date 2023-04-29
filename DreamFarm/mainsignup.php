<form>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="shortcut icon" href="favicon-16x16.png" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<nav>
    <b class="brand">DREAM FARM</b>
    <div class="dropdown">
      <button class="dropbtn">Menu
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
      <a href="profile.php"><img src="https://cdn-icons-png.flaticon.com/512/6522/6522516.png" alt="Profile Icon">Profile</a>
        <a href="mainindex.php">Home</a>
        <a href="maincontact.php">Contact Us</a>
        <a href="mainabout.php">About Us</a>
        <a href="index.php">Log Out</a>
      </div>
    </div>
  </nav>
<body>
    <div class="wrapper">
    <main>
        <div class="form1">
            <h1>Sign up</h1>
            <input type="text" placeholder="Full name" name="name" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="tel" placeholder="Cellphone Number" name="tel" required>
            <input type="address" placeholder="Address" name="address" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="submit" value="Sign up"><div class="show-password">
                <input type="checkbox" id="show-password-checkbox">
                <label for="show-password-checkbox">Show password</label>
            </div>
        </div>
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
</form>