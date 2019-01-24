<?php include 'header.php';

//session_start();    // Starting Session
$error='';         // Variable To Store Error Message
require '../account/function.php';

$con = connector_db();

if (isset($_SESSION['student_login']) ) {

$sid="000";
?>

<div class="container">
  <div class="row">

    <!--XXX--->
  <div class="col-sm-7">
    <section id="table">
       <table>
          <tr class="tb-heading" style="background:#bf779c;">

            <th>Course Code</th>
            <th>Semester</th>
            <th>Dept.</th>

            <th>Grade</th>

          </tr>
          <?php
          //$db = connector_db();
          $sid = $_SESSION['student_login'];
          $result4 = student_result_check($con,$sid);
          if (mysqli_num_rows($result4) > 0) {
              // output data of each row
          while ($record4 = mysqli_fetch_assoc($result4)){
            ?>
          <tr>

            <td><?php echo $record4['course_code']; ?></td>
            <td><?php echo $record4['semester_no']; ?></td>
            <td><?php echo $record4['dept']; ?></td>

            <!-- <td><?php //echo $record4['grade']; ?></td> -->
            <td><?php
            if($record4['grade']!=NULL){
            echo $record4['grade'];
          }else{
            echo 'NULL';
          } ?></td>
          </tr>
          <?php } } ?>

      </table>
  </section>
  </div>
    <div class="col-sm-5">
<section id="table">
      <div class="sajal-padding">
        <?php
        //$db = connector_db();
$con=mysqli_connect('localhost','root','','university') or die ("unable to connect");
        $result3 = student_check($con,$sid);
        if (mysqli_num_rows($result3) > 0) {
            // output data of each row
        while ($record3 = mysqli_fetch_assoc($result3)){ ?>

          <label class="col-form-label" style="color:red;">Student Name :</label>
          <span style="font-size:16px"><?php echo $record3['name']; ?></span><br> <br>

          <label class="col-form-label" style="color:red;">ID :</label>
          <span style="font-size:16px"><?php echo $record3['student_id']; ?></span><br> <br>

          <label class="col-form-label" style="color:red;">Email :</label>
          <span style="font-size:16px"><?php echo $record3['email']; ?></span><br> <br>

          <label class="col-form-label" style="color:red;">DEPT :</label>
          <span style="font-size:16px"><?php echo $record3['dept']; ?></span><br> <br>

          <label class="col-form-label" style="color:red;">Semester :</label>
          <span style="font-size:16px"><?php echo $record3['semester']; ?></span><br> <br>

          
        <?php } }
        else {
          # code...
          if(isset($_POST['sid_']) && !isset($_POST['addcourse_'])){
            //Student not found
            ?> <script>swal("Opss...","STUDENT NOT FOUND!", "error");</script> <?php
          }

         ?>
         <label class="col-form-label" style="color:red;">Student Name :</label>
         <span style="font-size:16px">NULL</span><br> <br>

         <label class="col-form-label" style="color:red;">ID :</label>
         <span style="font-size:16px">NULL</span><br> <br>

         <label class="col-form-label" style="color:red;">DEPT :</label>
         <span style="font-size:16px">NULL</span><br> <br>

         <label class="col-form-label" style="color:red;">Semester :</label>
         <span style="font-size:16px">NULL</span><br> <br>

        
       
        <?php } ?>
      </div>

    </section>

  </div>
    <!--end-->
  </div>
</div>
    <!-- add FOOTER -->
<?php
}
 ?>
 <!-- FOOTER -->

