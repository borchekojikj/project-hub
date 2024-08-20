<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "contact_db";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

mysqli_set_charset($connect, "utf8");

// mysql select query
$query = "SELECT * FROM `select_options`";

// for method 1

$result2 = mysqli_query($connect, $query);

$options = "";

while ($row2 = mysqli_fetch_array($result2)) {
  $options = $options . "<option>$row2[1]</option>";
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Project01</title>
  <meta charset="utf-8" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="stylesheet" href="main.css" />

  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- BOOTSTRAP ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />
  <!--  FONT-AWSOME LIB -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <!-- Navbar -->
  <div class="container-fluid bg-warning py-1 w-100">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-11">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid justify-content-between align-item-center">
            <a class="navbar-brand text-center" href="./index.php">
              <img src="./images/Logo.png" alt="" width="50px" />
              <p class="small mb-0 fw-bold">Project lab</p>
            </a>
            <button class="navbar-toggler" type="button" aria-expanded="false" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Canvar for Navbar -->
            <div class="offcanvas offcanvas-top bg-dark h-100" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
              <div class="offcanvas-header ms-auto text-white">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body small">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link fw-bold rounded" aria-current="page" href="https://brainster.co/marketing/
                    " target="_blank">Академија за маркетин</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link fw-bold rounded" href="https://brainster.co/full-stack/
                    " target="_blank">Академија за програмирање</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold rounded" href="https://brainster.co/data-science/
                    " target="_blank">Академија за data science</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fw-bold rounded" href="https://brainster.co/graphic-design/
                    " target="_blank">Академија за дизајн</a>
                  </li>
                </ul>
                <button class="btn btn-danger mt-3 mt-lg-0 fw-bold ms-lg-5" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Вработи наш студент
                </button>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>

  <!-- Banner -->


  <div class="container-fluid px-0">
    <div id="particles-js">
      <div class="particles-position text-center">
        <div class="banner-container">
          <div class="content">
            <h2>Brainster Lab</h2>
            <h2>Brainster Lab</h2>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Filter -->

  <div class="filter container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="row text-white filter-background">
          <div class="col-12 col-md-4 bg-coding min-height">
            <div class="row">
              <label class="col-10 py-3 text-center" for="filter-coding">Проекти на студенти по академија програмирање</label>
              <input class="col-2" id="filter-coding" type="checkbox" />
            </div>
          </div>
          <div class="col-12 col-md-4 bg-design border-start">
            <div class="row">
              <label class="col-10 py-3 text-center" for="filter-design">Проекти на студенти по академија за дизајн</label>
              <input class="col-2" id="filter-design" type="checkbox" />
            </div>
          </div>
          <div class="col-12 col-md-4 bg-marketing border-start">
            <div class="row">
              <label class="col-10 py-3 text-center" for="filter-marketing">Проекти на студенти по академија за маркетинг</label>
              <input class="col-2" id="filter-marketing" type="checkbox" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Cards -->

  <div class="container-fluid bg-warning py-5">
    <div class="row justify-content-center">
      <div class="col-11 col-lg-10 col-xl-7">
        <div class="col-12 text-center pb-3">
          <p class="h1 fw-bold">Проекти</p>
        </div>
        <div class="row cards">
          <!-- 4 Cards Coding -->
          <div class="col-12 col-md-6 col-lg-4 mt-3 coding card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/desk-laptop_ICPTTVBVMQ.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за програмирање
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-3 coding card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/laptop-working_DOLNAISHLZ.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за програмирање
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-3 coding card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/woman-coding_JLRCGJRKYJ.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за програмирање
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-3 coding card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/thinking-man_0XI3PE0LIO.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за програмирање
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>


          <!-- 2 Cards Desing -->
          <div class="col-12 col-md-6 col-lg-4 mt-3 mt-3 design card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/modern-building_Z1SBYIYETL.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за desing
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-3 mt-3 design card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/building-abstract_QDCJ1JA4QV.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за desing
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>


          <!-- 2 Cards Marketing -->
          <div class="col-12 col-md-6 col-lg-4 mt-3 marketing card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/seo-ppc_9699Y6WKLD.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за маркетин
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-3 marketing card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/book-report_G0V362YTA5.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за маркетин
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <!-- 2 Cards Marketing -->
          <div class="col-12 col-md-6 col-lg-4 mt-3 marketing card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/business-reports_LABXT2BYKU.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за маркетин
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-3 marketing card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/instagram-social%20media_3M1WKORDOL.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за маркетин
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <!-- 2 Cards Desing -->
          <div class="col-12 col-md-6 col-lg-4 mt-3 mt-3 design card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/isometric-artic_L8AM6FTOKD.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за desing
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-3 mt-3 design card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/abstract-shapes_LHA1PMAU1J.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за desing
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- 4 Cards Coding -->
          <div class="col-12 col-md-6 col-lg-4 mt-3 coding card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/code-coding_MRF1628S9A.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за програмирање
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-3 coding card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/office-work_N0ZRKV9CI6.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за програмирање
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-3 coding card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/coding-programming_SCC00WCQ3I.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за програмирање
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-3 coding card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/web-developer_BRHQBEKMEW.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за програмирање
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- 2 Cards Marketing -->
          <div class="col-12 col-md-6 col-lg-4 mt-3 marketing card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/blog-text_AWFJEGJAMS.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за маркетин
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-3 marketing card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/office-business_B2C3AAA18D.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за маркетин
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <!-- 4 Cards Coding -->
          <div class="col-12 col-md-6 col-lg-4 mt-3 coding card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/macbook-computer_6UHHE19YG7.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за програмирање
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mt-3 coding card-input">
            <a href="#" class="link-dark">
              <div class="card shadow small" style="width: 18rem">
                <img src="https://cdn.stocksnap.io/img-thumbs/960w/coding-programming_MJZPCHLERD.jpg" height="200px" class="card-img-top" alt="..." />
                <div class="card-body">
                  <p class="bg-warning d-inline-block px-2 py-1 small h-5 rounded fw-bold">
                    Академија за програмирање
                  </p>
                  <h5 class="card-title">
                    Име на проектот стои овде во две линии
                  </h5>
                  <p class="card-text">
                    Краток опис во кој студентите ќе можат да опишат за што се
                    работи во проектот
                  </p>
                  <p class="fw-bold small">Април - Октомври 2023</p>
                  <div class="text-end">
                    <a href="#" class="btn btn-danger">Дознај повеќе</a>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="container-fluid">
    <div class="row justify-content-center bg-dark text-white text-center py-2">
      <p class="col-12 mb-0 pb-1">
        Изработено со
        <span style="font-size: 150%; color: red">&hearts;</span> од
        студентите на Браинстер
      </p>
    </div>
  </footer>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="z-index: 9999">
    <div class="modal-dialog modal-lg">
      <div class="modal-content bg-warning">
        <div class="modal-header">
          <h1 class="modal-title fs-2 text-center w-75" id="staticBackdropLabel">
            Вработи наш студент
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container-fluid py-2">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="row">
                  <div class="col-12 mt-3 mt-md-0">
                    <div class="row">
                      <div class="col-12">
                        <div class="border rounded">
                          <form action="process-form.php" method="post" class="h-100 p-3">
                            <div class="row h-100">
                              <div class="col-12 col-lg-6">
                                <label for="name">Име и презиме</label>
                                <input type="text" class="form-control form-control-sm mb-4" placeholder="Име и презиме" id="name" required name="contact_name" />
                              </div>
                              <div class="col-12 col-lg-6">
                                <label for="company">Име на компанија</label>
                                <input type="text" class="form-control form-control-sm mb-4" placeholder="Имае на компанија" id="company" required name="company_name" />
                              </div>
                              <div class="col-12 col-lg-6">
                                <label for="email">Контакт имејл</label>
                                <input type="email" class="form-control form-control-sm mb-4" placeholder="E-mail" id="email" required name="company_email" />
                              </div>
                              <div class="col-12 col-lg-6">
                                <label for="company-number">Контакт телефон</label>
                                <input type="number" class="form-control form-control-sm mb-4" placeholder="Контакт телефон на вашата компанија" id="company-number" required name="contact_phone" />
                              </div>
                              <div class="col-12 col-lg-6">
                                <label for="student_type">Изберете насока</label>
                                <select id="student_type" class="d-block w-100 py-1 rounded" required name="student_type">
                                  <option value="">
                                    Избери тип на студент
                                  </option>
                                  <?php echo $options; ?>
                                </select>
                              </div>
                              <div class="col-12 col-lg-6 aling-self-end">
                                <button class="btn btn-sm w-100 btn-danger py-1 mt-md-4" style="margin-top: 250px">
                                  Прати
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      .
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JS Particles scripts -->
  <script src="./particles.js"></script>
  <script src="./app.js"></script>

  <!-- JS SCRIPT -->
  <script>
    document
      .querySelector("#filter-coding")
      .addEventListener("change", filterCoding);
    document
      .querySelector("#filter-design")
      .addEventListener("change", filterDesign);
    document
      .querySelector("#filter-marketing")
      .addEventListener("change", filterMarketing);

    function filterCoding() {
      hideAllCards();

      if (document.querySelector("#filter-coding").checked) {
        var codingCards = document.querySelectorAll(".coding");

        colorControl("white", "white", "back", "#302F38", "#302F38", "red");


        codingCards.forEach((codingCard) => {
          codingCard.style.display = "inline-block";
        });

        document.querySelector("#filter-design").checked = false;
        document.querySelector("#filter-marketing").checked = false;
      } else {
        showAllCards();
        document.querySelector(".bg-coding").style.backgroundColor = "#302F38";
        document.querySelector(".bg-coding").style.color = "white";
      }
    }

    function filterDesign() {
      hideAllCards();

      if (document.querySelector("#filter-design").checked) {
        var designCards = document.querySelectorAll(".design");
        colorControl("white", "back", "white", "#302F38", "red", "#302F38");


        designCards.forEach((designCard) => {
          designCard.style.display = "inline-block";
        });

        document.querySelector("#filter-coding").checked = false;
        document.querySelector("#filter-marketing").checked = false;
      } else {
        showAllCards();
        document.querySelector(".bg-design").style.backgroundColor = "#302F38";
        document.querySelector(".bg-design").style.color = "white";
      }
    }

    function filterMarketing() {
      hideAllCards();

      if (document.querySelector("#filter-marketing").checked) {
        var marketingCards = document.querySelectorAll(".marketing");

        colorControl("back", "white", "white", "red", "#302F38", "#302F38");
        marketingCards.forEach((marketingCard) => {
          marketingCard.style.display = "inline-block";
        });

        document.querySelector("#filter-design").checked = false;
        document.querySelector("#filter-coding").checked = false;
      } else {
        showAllCards();
        document.querySelector(".bg-marketing").style.backgroundColor =
          "#302F38";
        document.querySelector(".bg-marketing").style.color = "white";
      }
    }

    function hideAllCards() {
      var allCards = document.querySelectorAll(".card-input");

      allCards.forEach((card) => {
        card.style.display = "none";
      });
    }

    function showAllCards() {
      var allCards = document.querySelectorAll(".card-input");

      allCards.forEach((card) => {
        card.style.display = "inline-block";
      });
    }

    function colorControl(
      textColorMarketing,
      textColorDesign,
      textColorCoding,
      backColorMarketing,
      backColorDesign,
      backColorCoding
    ) {
      document.querySelector(".bg-marketing").style.color =
        textColorMarketing;
      document.querySelector(".bg-coding").style.color = textColorCoding;
      document.querySelector(".bg-design").style.color = textColorDesign;
      document.querySelector(".bg-marketing").style.backgroundColor =
        backColorMarketing;
      document.querySelector(".bg-design").style.backgroundColor =
        backColorDesign;
      document.querySelector(".bg-coding").style.backgroundColor =
        backColorCoding;
    }
  </script>

  <!-- POPPER JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

  <!-- BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>