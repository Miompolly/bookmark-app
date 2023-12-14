<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bookmark App</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Bookmark App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
                <a class="nav-link" href="index.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.php">Signup</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Signup</h2>
            <form action="server.php" method="post">
      <div class="form-group">
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
      </div>
   
      <button type="submit" class="btn btn-primary" name="signup">Signup</button>
      
   
    </form>
            
        </div>
        <div class="col-md-6">
            <!-- Add your image here -->
            <div>
                <img src="images.png" alt="Bookmark Image" class="img-fluid" style="width: 100%; height: 100%;">
            </div>
            <p>Already have an account? <a href="index.php">Login here</a></p>
        </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
