<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Goals Todo</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="" />
            <span>
              Goals Todo
            </span>
          </a>
          
        </nav>
      </div>
    </header>

  </div>
  <section class="about_section layout_padding mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="img-box">
            <div class="card">
                <div class="card-header">
                <div class="custom_heading-container">
              <h2>
               My Goals
              </h2>
            </div>
                </div>
                <div class="card-body">
                <form action="process.php" method="post">
                    <label for="name">My Goal</label>
                    <textarea id="name" class="form-control" name="name" cols="30" rows="10" required></textarea>
                    
                    <button class="btn btn-danger mt-3" type="submit"> Submit </button>
                </form>
                <br>
                <form action="delete.php" method="post">
                    <label for="deleteId">Delete Goal ID:</label>
                    <input type="text" id="deleteId" name="deleteId" required>
                    <button type="submit" class="btn-danger">Delete</button>
                </form>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="detail-box">
            <br>

            <?php include 'display.php'; ?>
            <div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->



  <!-- info section -->
  
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/circles.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>