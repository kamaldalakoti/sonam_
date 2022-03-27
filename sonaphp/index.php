<?php
include "connect.php";
include "header.php";
?>


    <!-- navbar -->
    
    <!--  carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/banner.jpg" class="d-block w-100" alt="..." height="500" />
        </div>
        <div class="carousel-item">
          <img src="image/banner.jpg" class="d-block w-100" alt="..." height="500" />
        </div>
        <div class="carousel-item">
          <img src="image/banner1.jpg" class="d-block w-100" alt="..." height="500" />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--     card -->
    
   <section class="wholediv">

     <div class="container categories">
       <div class="TopTxt py-5">

         
         <h4 class="text-center ">MOVIES</h4>
        </div>
       <div class="row py-3">
     <div class="col-md-6">
       <h2>NOW SHOWING</h2>
     </div>
     <div class="col-md-6">
       <div class="dropdown  text-end">
      <h5 class="btn dropdown-toggle" data-bs-toggle="dropdown">
        GENRE
      </h5>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">ALL GENRES</a></li>
        <li><a class="dropdown-item" href="#">ACTION</a></li>
        <li><a class="dropdown-item" href="#">DRAMA</a></li>
        <li><a class="dropdown-item" href="#">ROMANCE</a></li>
      </ul>
      <h5 class="btn dropdown-toggle" data-bs-toggle="dropdown">
       FORMAT
      </h5>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">ALL FORMATS</a></li>
        <li><a class="dropdown-item" href="#">2D</a></li>
        <li><a class="dropdown-item" href="#">3D</a></li>
      </ul>
      <h5 class="btn dropdown-toggle" data-bs-toggle="dropdown">
        LANGUAGE
      </h5>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">HINDI </a></li>
        <li><a class="dropdown-item" href="#">ENGLISH </a></li>
        <li><a class="dropdown-item" href="#">MARATHI </a></li>
      </ul>
       </div>
     </div>
       </div>
     <!--       show as wawrrsr -->
     
       <div class="row showss">
         <div class="col-md-3 ">
          <div class="image">
     
            <img class="card-img-top topimage" src="image/gangubai.webp" alt="" class="w-100">
            <div class="like">
             <i class='bx bxs-heart bx-sm hert1'></i><span>4.1K</span>
            </div>
            <div class="more">BOOK NOW</div>
          </div>
          <h5 class="text-center pt-3">Gangubai Kathiawadi</h5>
      </div>
         <div class="col-md-3 ">
          <div class="image">
     
            <img class="card-img-top topimage" src="image/movi1.webp" alt="" class="w-100">
            <div class="like">
             <i class='bx bxs-heart bx-sm hert2'></i><span>4.1K</span>
            </div>
            <div class="more">BOOK NOW</div>
          </div>
          <h5 class="text-center pt-3">Gangubai Kathiawadi</h5>
      </div>
         <div class="col-md-3 ">
          <div class="image">
     
            <img class="card-img-top topimage" src="image/shiddat.jpg" alt="" class="w-100">
            <div class="like">
             <i class='bx bxs-heart bx-sm hert3'></i><span>4.1K</span>
            </div>
            <div class="more">BOOK NOW</div>
          </div>
          <h5 class="text-center pt-3">Shiddat</h5>
      </div>
         <div class="col-md-3 ">
          <div class="image">
     
            <img class="card-img-top topimage" src="image/tadap.jpeg" alt="" class="w-100">
            <div class="like">
             <i class='bx bxs-heart bx-sm hert4'></i><span>4.1K</span>
            </div>
            <div class="more">BOOK NOW</div>
          </div>
          <h5 class="text-center pt-3">Tadap</h5>
      </div>
       </div>
       <div class="row py-5 showss">
         <div class="col-md-3 ">
          <div class="image">
     
            <img class="card-img-top topimage" src="image/radheshyam.webp" alt="" class="w-100">
            <div class="like">
             <i class='bx bxs-heart bx-sm hert5'></i><span>4.1K</span>
            </div>
            <div class="more">BOOK NOW</div>
          </div>
          <h5 class="text-center pt-3">Radheshyam</h5>
      </div>
         <div class="col-md-3 ">
          <div class="image">
     
            <img class="card-img-top topimage" src="image/junooniyat.jpg" alt="" class="w-100">
            <div class="like">
             <i class='bx bxs-heart bx-sm hert6'></i><span>4.1K</span>
            </div>
            <div class="more">BOOK NOW</div>
          </div>
          <h5 class="text-center pt-3">Junnoniyat</h5>
      </div>
         <div class="col-md-3 ">
          <div class="image">
     
            <img class="card-img-top topimage" src="image/shiddat.jpg" alt="" class="w-100">
            <div class="like">
             <i class='bx bxs-heart bx-sm hert7'></i><span>4.1K</span>
            </div>
            <div class="more">BOOK NOW</div>
          </div>
          <h5 class="text-center pt-3">Shiddat</h5>
      </div>
         <div class="col-md-3 ">
          <div class="image">
     
            <img class="card-img-top topimage" src="image/tadap.jpeg" alt="" class="w-100">
            <div class="like">
             <i class='bx bxs-heart bx-sm hert8'></i><span>4.1K</span>
            </div>
            <div class="more">BOOK NOW</div>
          </div>
          <h5 class="text-center pt-3">Tadap</h5>
      </div>
       </div>
     </div>
     <div class="text-center btn1 pb-5 ">VIEW ALL <i class='bx bxs-chevron-right '></i></div>
     <!-- <div class="text-center btn1">
       <button type="button" class="btn">VIEW ALL<i class='bx bx-chevron-right'></i></button>
     </div> -->
   </section>





   <!-- horror -->
   <section class="wholediv">
     <div class="container categories">
      <h2>HORROR SHOWS</h2>
      <div class="row showss">
        <div class="col-md-3 ">
         <div class="image">
           <img class="card-img-top topimage" src="image/amavas.jpg" alt="" class="w-100">
           <div class="like">
            <i class='bx bxs-heart bx-sm hert1'></i><span>4.1K</span>
           </div>
           <div class="more">BOOK NOW</div>
         </div>
         <h5 class="text-center pt-3">Amavas</h5>
     </div>
        <div class="col-md-3 ">
         <div class="image">
           <img class="card-img-top topimage" src="image/bhoot-part-1.webp" alt="" class="w-100">
           <div class="like">
            <i class='bx bxs-heart bx-sm hert2'></i><span>4.1K</span>
           </div>
           <div class="more">BOOK NOW</div>
         </div>
         <h5 class="text-center pt-3">Bhoot Part-1</h5>
     </div>
        <div class="col-md-3 ">
         <div class="image">
           <img class="card-img-top topimage" src="image/mushkil.jpg" alt="" class="w-100">
           <div class="like">
            <i class='bx bxs-heart bx-sm hert3'></i><span>4.1K</span>
           </div>
           <div class="more">BOOK NOW</div>
         </div>
         <h5 class="text-center pt-3">Mushkil</h5>
     </div>
        <div class="col-md-3 ">
         <div class="image">
           <img class="card-img-top topimage" src="image/war.jpg" alt="" class="w-100">
           <div class="like">
            <i class='bx bxs-heart bx-sm hert4'></i><span>4.1K</span>
           </div>
           <div class="more">BOOK NOW</div>
         </div>
         <h5 class="text-center pt-3">Tadap</h5>
     </div>
     <div class="text-center btn1 py-5 ">VIEW ALL <i class='bx bxs-chevron-right '></i></div>
      </div>
     </div>

   </section>
   

  </body>
</html>
<?php include "footer.php"?>
