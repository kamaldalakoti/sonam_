
<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Document</title>
    <style>
        .footer_2{
  border-bottom: 3px solid #00740c;
  background-color: aliceblue;
}
.footer_2 h5{
    color:#00740c;
    text-shadow: 2px 3px 5px rgba(0 0 50/50%);
}
.footer_1 ul li{
            transition: .5s;
            color:#54c119;
            font-family: "Slabo 27px", serif;

        }
        .footer_1 ul li:hover{
           transform: translateX(5px);
           color:#00740c;
        }
        .footer_1 h5{
            color: aliceblue;
            font-family: "Slabo 27px", serif;
            text-shadow: 2px 3px 5px rgba(0 0 50/30%);
        }
        .footer_1 i{
            color: aliceblue;
            font-family: "Slabo 27px", serif;
        }
        .footer_1 .followicon i{
            color:#54c119;
            transition: .5s;
        }
        .footer_1 .followicon i:hover{
            color:#00740c;
            font-family: "Slabo 27px", serif;
        }
        .footer_1 {
            background: black;
        }
    </style>
</head>

<body>
    <footer class="footer_1 py-5">


        <div class="container-fluid">
          
            <div class="row">
               
                <div class="col-md-3">
                     <h5>ONLINE SHOPPING</h5>
                     <div>

                         <ul class="list-unstyled">
                             <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>Women</li>
                             <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>Kids</li>
                             <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>Men</li>
                             <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>Beauty</li>
                             <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>Gift cards</li>
                             <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>Home & Living</li>
                            </ul>
                        </div>
                    </div>
               
                <div class="col-md-3">
                    <h5>ABOUT</h5>
                    <div>

                        <ul class="list-unstyled">
                            <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>Contact us</li>
                            <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>Careers</li>
                            <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>Stories</li>
                            <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>Press</li>
                            <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>Wholesale </li>
                            <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>Corporate info.</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <h5>HELP</h5>
                    <div>

                        <ul class="list-unstyled">
                            <li><i class='bx bxs-chevron-right ' ></i>Payments</li>
                            <li><i class='bx bxs-chevron-right ' ></i>Shipping</li>
                            <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>Cancellations & Returns</li>
                            <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>FAQ</li>
                            <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>Report</li>
                            <li><i class='bx bxs-chevron-right bx-flip-vertical' ></i>Infringemnt</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5>REACH TO US</h5>
                    <div class="followicon">
                        <i class='bx bxl-facebook-circle bx-lg'  ></i><i class='bx bxl-instagram-alt bx-lg'  ></i><i class='bx bxl-twitter bx-lg'></i>
                </div>
            </div>
        </div>
    </footer>
    <footer>
      <div class="container-fluid footer_2">
          <h5 class="text-center py-3">COPYRIGHT © 2022 PVR LTD. ALL RIGHTS RESERVED.</h5>
      </div>
    </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


</body>

</html>