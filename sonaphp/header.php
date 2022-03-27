<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/card.css" />
    <link rel="stylesheet" href="css/theatre.css" />
    <link rel="stylesheet" href="css/table.css" />
    <link rel="stylesheet" href="css/login.css" />
    <title>Document</title>
    <style>
      /* next card */
      .features-wrapper {
        box-shadow: 0 6px 32px rgb(0 0 0 / 12%);
        margin-bottom: 30px;
        padding: 60px 30px;
        text-align: center;
        transition: 0.3s;
      }
      .features-wrapper h5 {
        color: #00740c !important;
        text-shadow: 2px 3px 5px rgba(0 0 50/50%);
      }
      .features-wrapper:hover {
        box-shadow: 0 25px 45px rgb(0 0 0 / 15%);
      }
      .newitem {
        box-shadow: 0 0 20px rgb(0 0 0 / 20%);
      }
      .newitem:hover {
        box-shadow: 0 20px 25px -12px rgb(0 0 0 / 15%);
      }
    </style>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Sona Movies</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="card.php">MOVIES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="table.php">ORDER</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="theatres.php">THEATRE</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="form.php">CONTACT US</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script>
      $(document).ready(function () {
        // jQuery methods go here...

        $(window).scroll(function () {
          if ($(window).scrollTop() >= 120) {
            $(".header").addClass("fixed");
          } else {
            $(".header").removeClass("fixed");
          }
        });
        $(".hert1").click(function () {
          $(".hert1").toggleClass("text-red");
        });
        $(".hert2").click(function () {
          $(".hert2").toggleClass("text-red");
        });
        $(".hert3").click(function () {
          $(".hert3").toggleClass("text-red");
        });
        $(".hert4").click(function () {
          $(".hert4").toggleClass("text-red");
        });
        $(".hert5").click(function () {
          $(".hert5").toggleClass("text-red");
        });
        $(".hert6").click(function () {
          $(".hert6").toggleClass("text-red");
        });
        $(".hert7").click(function () {
          $(".hert7").toggleClass("text-red");
        });
        $(".hert8").click(function () {
          $(".hert8").toggleClass("text-red");
        });
      });
    </script>
  </body>
</html>
