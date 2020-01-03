<?php
	session_start();
	if (!$_SESSION['isLogin']) {
		header('location: auth/index.php');
	}
	else{
		include 'config/connection.php';
		$username = $_SESSION['username'];
		$data = mysqli_query($connection, "SELECT * from user where username = '$username' limit 1 ");
		$biodata = mysqli_fetch_array($data);

	}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Yuliana Isabela</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none"><?php echo $biodata['firstName']. $biodata['lastName'] ?></span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/<?php echo $biodata['images']?>" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#download">Download</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="auth/logout.php">Logout</a>
        </li>
       
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0"><?php echo $biodata['firstName'] ?>
          <span class="text-primary"><?php echo $biodata['lastName']?></span>
        </h1>
        <div class="subheading mb-5"><?php echo $biodata['address']?>
          <a href="#"><?php echo $biodata['phone']?></a>
          <a href="mailto:name@email.com"><?php echo $biodata['email']?></a>
        </div>
        <p class="lead mb-5"><?php echo $biodata['moto']?></p>
        <div class="social-icons">
          <a href="<?php echo $biodata['linkedin']?>">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="<?php echo $biodata['github']?>">
            <i class="fab fa-github"></i>
          </a>
          <a href="<?php echo $biodata['twitter']?>">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="<?php echo $biodata['facebook']?>">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Experience</h2>

       
          <?php
				$username = $_SESSION['username'];
				$experience = mysqli_query($connection, "SELECT * FROM experience where username = '$username' ");
				while ($exp = mysqli_fetch_array($experience)) {
          ?>
           <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="resume-content">
              <h3 class="mb-0"><?php echo $exp['name']?></h3>
              <div class="subheading mb-3"><?php echo $exp['position']?></div>
              <p></p><?php echo $exp['explanation']?>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"><?php echo $exp['year']?></span>
            </div>
          </div>
					<?php
				}
			?>

      </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Education</h2>

        <?php
				$username = $_SESSION['username'];
				$education = mysqli_query($connection, "SELECT * FROM education where username = '$username' ");
				while ($edu = mysqli_fetch_array($education)) {
          ?>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
             <div class="resume-content">
              <h3 class="mb-0"><?php echo $edu['institute']?></h3>
            <div class="subheading mb-3"><?php echo $edu['degree']?></div>
            <div>MAJOR: <?php echo $edu['major']?></div>
             <p>GPA: <?php echo $edu['gpa']?></p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $edu['year']?></span>
          </div>
        </div>
					<?php
				}
			?>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Skills</h2>

        <div class="subheading mb-3">Programming Languages &amp; Tools</div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-react"></i>
        </ul>

        <div class="subheading mb-3">Workflow</div>
        <?php
				$username = $_SESSION['username'];
				$skills = mysqli_query($connection, "SELECT * FROM skills where username = '$username' ");
				while ($sk = mysqli_fetch_array($skills)) {
          ?>
           <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
            <?php echo $sk['workflow']?></li>
          <li>
        </ul>
           
					<?php
				}
			?>

       
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
        <h2 class="mb-5">Interests</h2>
        <?php
				$username = $_SESSION['username'];
				$interest = mysqli_query($connection, "SELECT * FROM interest where username = '$username' ");
				while ($inter = mysqli_fetch_array($interest)) {
          ?> 
           <p class="mb-0"><?php echo $inter['description']?></p>
					<?php
				}
			?>
      
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">Awards &amp; Certifications</h2>
        <?php
				$username = $_SESSION['username'];
				$award = mysqli_query($connection, "SELECT * FROM award where username = '$username' ");
				while ($aw = mysqli_fetch_array($award)) {
          ?> 
           <ul class="fa-ul mb-0">
             <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              <?php echo $aw['description']?></li>
             <li>
          </ul>
					<?php
				}
			?>
      
      </div>
    </section>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="download">
      <div class="w-100">
        <h2 class="mb-5">Download</h2>
          <p>Get this project here <a href="#">Download</a>
      
      </div>
    </section>


  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>
