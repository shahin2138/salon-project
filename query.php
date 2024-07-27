<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Salon</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
  <style>
    table,
    th {
      border-style: solid;
      border-color: #000000;
    }

    table {
      font-size: 25px;
      padding: auto;
    }

    #butt {
      border-radius: 20px;
      margin: 5px;
      padding-left: 25px;
      padding-right: 25px;

    }
  </style>
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <h2 class="m-0 text-primary">
        <i class="fa fa-feather-alt me-3"></i>Beautiesuit
      </h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="admindash.php" class="nav-item nav-link">Home</a>
        <a href="usersmanage.php" class="nav-item nav-link">Users</a>
        <a href="appointmentmanage.php" class="nav-item nav-link">Appointments</a>
        <a href="manageservice.php" class="nav-item nav-link">Manage Services</a>
        <a href="query.php" class="nav-item nav-link">Query</a>

        <a href="logout.php" class="nav-item nav-link">Logout</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
  <!-- Header Start -->
  <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h1 class="display-3 text-white animated slideInDown">
            Customers Query
          </h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h3 class="section-title bg-white text-center text-primary px-3">
          Query
        </h3>

      </div>

      <!-- Contact End -->


      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $db = "salon";
      $conn = mysqli_connect($servername, $username, $password, $db);
      if (!$conn) {
        echo "DB not connected!" . mysqli_connect_error();
      }
      $sql = "SELECT * FROM `contact`;";
      $result = mysqli_query($conn, $sql);


      if (mysqli_num_rows($result) > 0) {
        echo "<div class='container'>
  <div class='table-responsive'>
      <table class='table table-striped'>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile No.</th>
        <th>Query</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
";
        while ($rows = mysqli_fetch_assoc($result)) {
          echo "  <tr>
  <td>{$rows['id']}</td>
  <td>{$rows['name']}</td>
  <td>{$rows['email']}</td>
  <td>{$rows['mob']}</td>
  <td>{$rows['query']}</td>
  <td>
    
    <a name='' id='butt' class='btn btn-secondary' href='replycontact.php?id={$rows['id']}' role='button'
      >Reply</a
    >
  </td>
</tr>
";
        }
        echo "          </tbody>
  </table>
</div>";

      } else {
        echo "No Record Found!";
      }
      mysqli_close($conn);
      ?>

      <!-- Footer Start -->

      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="lib/wow/wow.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/waypoints/waypoints.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>

      <!-- Template Javascript -->
      <script src="js/main.js"></script>
</body>

</html>