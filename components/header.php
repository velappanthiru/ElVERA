<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="icon" type="image/png" href="./assets/images/coin.png"> -->
  <title>ElVERA</title>
  <!-- bootstrap cdn link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="./public/css/style.min.css">
</head>
<body>
  <div class="shades"></div>
  <div class="shades"></div>
  <div class="shades"></div>
  <div class="shades"></div>
  <div class="shades"></div>
  <header>
    <div class="container-fluid">
      <nav aria-label="Global">
        <div class="d-flex align-items-center justify-content-between w-100 gap-6">
          <div class="d-flex">
            <a href="./index.php" class="logo-wrapper">
              <img class="logo" src="./assets/images/icon/logo.png" alt="logo">
            </a>
          </div>
          <div class="menu-wrapper">
            <a href="#home" class="menu-nav-link active">Home</a>
            <a href="#aboutus" class="menu-nav-link">About Us</a>
            <div class="">
              <a type="button" class="menu-nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                Solutions
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a href="./artificial-intelligence-machine-learning.php">
                  Artificial Intelligence & Machine learning
                </a></li>
                <li><a href="./blockchain-solutions.php">Blockchain Solutions
                </a></li>
              </ul>
            </div>
            <a href="#services" class="menu-nav-link">Service</a>
          </div>
          <div class="end-wrapper">
            <a href="#contactus" class="btn d-none d-md-flex btn-theme">Contact Us</a>
            <div class="bar-icon" id="bar-icon">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.6875 15H25.3125" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.6875 7.5H25.3125" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.6875 22.5H25.3125" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <div class="mobile-menu-wrapper" id="mobile-menu-wrapper">
    <div class="mobile-menu-container">
      <div class="mobile-menu-header">
        <a class="mobile-menu-logo" href="/">
          <img
            id="headerLogo"
            src="./assets/images/icon/logo.png"
            alt="logo"
            class="header-logo"
          />
        </a>
        <div class="close-icon" id="close-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </div>
      </div>
      <div class="mobile-nav-wrapper">
        <div class="mobile-menu-items">
          <ul>
            <li class="nav-item clickToClose">
              <a href="#home" class="active">Home</a>
            </li>
            <li class="nav-item clickToClose">
              <a href="#aboutus">About Us</a>
            </li>
            <li class="nav-item">
              <a type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Solutions
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li class="clickToClose"><a href="./artificial-intelligence-machine-learning.php">
                  Artificial Intelligence & Machine learning
                </a></li>
                <li class="clickToClose"><a href="./blockchain-solutions.php">Blockchain Solutions
                </a></li>
              </ul>
            </li>
            <li class="nav-item clickToClose">
              <a href="#services">Services</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
