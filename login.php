<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - RaiStore</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body id="top">

s<?php
session_start();
?>
  <!-- Header -->
  <header class="header" data-header>
    <div class="container">
      <div class="overlay" data-overlay></div>
      <a class="navbar-brand" href="index.php">RAISTORE</a>
      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>
      <nav class="navbar" data-navbar>
        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>
        <ul class="navbar-list">
          <li class="navbar-item"><a href="index.php" class="navbar-link">Home</a></li>
          <li class="navbar-item"><a href="#" class="navbar-link">About</a></li>
          <li class="navbar-item"><a href="#" class="navbar-link">Products</a></li>
          <li class="navbar-item"><a href="register.php" class="navbar-link">Register</a></li>
          <li class="navbar-item"><a href="login.php" class="navbar-link">Login</a></li>
          <li class="navbar-item"><a href="#" class="navbar-link">Contact</a></li>
        </ul>
        <ul class="nav-action-list">
          <li>
            <button class="nav-action-btn">
              <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
              <span class="nav-action-text">Search</span>
            </button>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Registration Form -->
  <div class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
            
        <?php if(isset($_SESSION['message'])) 
        { 
            ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
           <strong>hey!</strong> <?= $_SESSION['message']; ?>.
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div> 
           <?php
          unset($_SESSION['message']);
        }
        ?>
          <div class="card">
            <div class="card-header">
              <h4>Login Form</h4>
            </div>
            <div class="card-body">
              <form action="functions\authcode.php" method="POST">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email"  name="email" class="form-control" placeholder="Enter your email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Enter password" id="exampleInputPassword1">
                </div>
                <button type="submit"  name="login_btn" class="btn btn-primary">login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ionicons -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.2/ionicons.min.js" integrity="sha512-WsETu2kEmVuvjxzhFN35TKTmqNeLoB1LBZleL/ICFeoPdDtfOa85uqO7rSLopGzCkoDTtV9JNNfr4JcwUQfV/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Custom JS -->
  <script src="./assets/js/script.js"></script>
</body>

</html>
