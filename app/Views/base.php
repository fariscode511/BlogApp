<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>BlogApp - <?= $this->renderSection("title"); ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?= site_url('/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />

  <!-- Custom fonts for this template -->
  <link href="<?= site_url('/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />

  <!-- Custom styles for this template -->
  <link href="<?= site_url('/css/clean-blog.min.css'); ?>" rel="stylesheet" />
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="<?= site_url("/"); ?>">BlogApp</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('/'); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url("/page/about"); ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url("/page/contact"); ?>">Contact</a>
          </li>
          <?php if (!session()->has('user_id')) : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url("/signup"); ?>">
                Signup
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url("/login"); ?>">
                Login
              </a>
            </li>
          <?php else : ?>
            <?php if (current_user()->is_admin) : ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url("/admin"); ?>">
                  Admin
                </a>
              </li>
            <?php endif; ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url("/logout"); ?>">
                Logout
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <?= $this->renderSection("content"); ?>

  <hr />

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">
            Copyright &copy; BlogApp 2020
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= site_url("/vendor/jquery/jquery.min.js"); ?>"></script>
  <script src="<?= site_url("/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>

  <!-- Custom scripts for this template -->
  <script src="<?= site_url("/js/clean-blog.min.js"); ?>"></script>
</body>

</html>