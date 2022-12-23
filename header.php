<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- Bootstrap CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <!-- Splide -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css" />
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-dark" id="navbar_top">
      <!-- <div class="container"> -->
        <a class="navbar-brand" href="/">
          <img src="/assets/logo/logo.png" alt="" height="32"/>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/about.php"
                >About <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a href="/product.php" class="nav-link">Product</a>
            </li>
            <li class="nav-item">
              <a href="/foundations.php" class="nav-link">Foundations</a>
            </li>
            <li class="nav-item">
              <a href="/blogs.php" class="nav-link">News & Blogs</a>
            </li>
            <li class="nav-item">
              <a href="/contact.php" class="nav-link">Contact</a>
            </li>
          </ul>
          <div class="nav-button-group">
            <button class="btn btn-rounded btn-light my-2 my-sm-0 mx-2" type="button">
              Sign Up
            </button>
            <button class="btn btn-rounded btn-blue my-2 my-sm-0" type="button">
              Log In
            </button>
          </div>
        </div>
      <!-- </div> -->
    </nav>
    <!-- End of Navbar -->

    <!-- Content -->
    <main>