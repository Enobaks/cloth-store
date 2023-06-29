<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloth-store</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="./css/index.css">
    <!-- <link rel="stylesheet" href="./css/footer-style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar Begins -->
    <?php require "includes/navbar.php"?>
    <!-- Navbar Ends -->

    <!-- Registration Form Begins-->
    <div class="form-wrap row items">
      <div class="col-md-6 register-image">
        <img src="./images/register-image.jpg" alt="" class="img-fluid vimage">
      </div>
      <div class="col-md-6 pt-5 col-sm-12 register-form">
        <h2 class="mb-5 text-center fw-bold fs-3">Registration</h2>
        <form class="row g-3">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Firstname</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Lastname</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
          <!-- <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div> -->
          <div class="col-12 d-flex justify-content-between pt-5">
            <button type="submit" class="btn btn-primary">Register</button>
            <p class="fw-medium">Already have an account <a href="./login.php">login</a></p>
          </div>
        </form>
      </div>
    </div>
    
      <!-- Registration Form Ends -->

     <!-- Footer Begins -->
     <footer class="footer-14398">
        <div class="">

          <div class="row mb-5 items">
            <div class="col-md-3">
                <a class="navbar-brand fs-2 fw-bold apparel" href="#"><span class="text-danger">A</span>pparel</a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit officiis corporis optio natus. </p>
            </div>
            <div class="col-md-2 ml-auto">
              <h3>Shop</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Sell online</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Examples</a></li>
                <li><a href="#">Website editors</a></li>
                <li><a href="#">Online retail</a></li>
              </ul>
            </div>
            <div class="col-md-2 ml-auto">
              <h3>Press</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Events</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Awards</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Online retail</a></li>
              </ul>
            </div>
            <div class="col-md-2 ml-auto">
              <h3>About</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Contact</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Contacts</a></li>
              </ul>
            </div>
          </div>

          <div class="row mb-4 items">
                <div class="col-12 pb-4">
                <div class="line"></div>
                </div>
                <div class="col-md-6 text-md-left ">
                <ul class="list-unstyled link-menu nav-left d-flex policies">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Code of Conduct</a></li>
                </ul>
                </div>
                <div class="col-md-6 text-md-right">
                <ul class="list-unstyled social nav-right d-flex media-links">
                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-pinterest"></span></a></li>
                </ul>
                </div>
                <div class="col-md-12 mt-5">

                    <p class="copyright text-center">
                     Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                    </p>
                </div>
          </div>

          
          </div>
        </div>
        
      </div>
    </footer>
    <!-- Footer Ends -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>