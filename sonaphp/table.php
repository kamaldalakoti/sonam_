<?php
include "connect.php";
include "header.php";
?>
<section>
  <img src="image/banner.jpg" alt="" class="w-100 " height="300" />
</section>
<div class="container-fluid table_0 py-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header table1">
          <h4 class="mt-2">STUDENT DETAILS <a href="form.php" class="float-end btn button_1 px-4">ADD STUDENT</a></h4>
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">SR NO.</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                
                <th scope="col">COURSE</th>
                <th scope="col">MOBILE</th>
                <th scope="col">MESSAGE</th>
                
               
              </tr>
            </thead>
            <tbody>
             
           
            <?php
            $conn=mysqli_connect("localhost","root","","datflair");
            $query="SELECT * FROM `student_details` ";
            $query_run=mysqli_query($conn,$query);
          
            if($query_run){
              $i=0;
                foreach($query_run as $value){
                  $i++;
                    ?>
                 <tr>
                
                <td><?php echo $i ?></td>
                <td><?php echo $value['NAME'] ?></td>
                <td><?php echo $value['EMAIL']?></td>
                <td><?php echo $value['COURSE']?></td>
                <td><?php echo $value['MOBILE']?></td>
              
                <td><?php echo $value['MESSAGE']?></td>
                <td><a href="" class="button_1 btn">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $value['id']?>" class="btn-danger btn">Delete</a></td>

               
              </tr>
              <?php
                }
            }

            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php"?>
