<?php
if(!isset($_SESSION['email'])){
  header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script> -->
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="deshbord.php">DeshBord</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php" target="_blank">Visit website</a>
          </li>
          
          <li class="nav-item dropdown">
            <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                funfact
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="funfact_1.php">funfact 1st</a></li>
                <!-- <li><a class="dropdown-item" href="#"></a></li> -->
                <li><a class="dropdown-item" href="funfact_item.php">funfact item</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="social_media.php">Social media</a></li>
              </ul>
            </div>

          </li>
          <li class="nav-item dropdown">
            <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                frontend
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="gest_gest_msg.php">
                    <?php
                        require_once('../db.php');
                        $get_massage_not_query="SELECT COUNT(*) AS massage_gust_not FROM gust_massegs WHERE re_status=2";
                        $dbresult=mysqli_query(dbconnect(),$get_massage_not_query);
                        $after_accoss= mysqli_fetch_assoc($dbresult);
                      ?>gest Massage
                    <span class="badge bg-warning">
                      <?=$after_accoss['massage_gust_not'];?>
                    </span></a></li>
                <!-- <li><a class="dropdown-item" href="#"></a></li> -->
                <li><a class="dropdown-item" href="Banner.php">Banner</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="ser_header.php">service_header_edit</a></li>
                <li><a class="dropdown-item" href="ser_item.php">service_item</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="about_us_head.php">About Header Edit</a></li>
              </ul>
            </div>

          </li>

        </ul>
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['email']?>
          </button>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="profile.php">profile</a></li>
            <li><a class="dropdown-item" href="pas_change.php">change password</a></li>
            <li><a class="dropdown-item" href="Log_out.php">log Out</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>

</body>

</html>