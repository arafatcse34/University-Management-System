<?php
function encryptHash($password) {
    if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
        $salt = '$2y$11$' . substr(md5(uniqid(rand(), true)), 0, 22);
        return crypt($password, $salt);
    }
}


function verify($password, $hashedPassword) {
    return crypt($password, $hashedPassword) == $hashedPassword;
}

function connector_db()
{
  return mysqli_connect('localhost','root','','university');
}

function redirect($url)
{
    header('Location: ' . $url);

    exit();
}

function student_picker_ac($con)
{
  $query = "SELECT * FROM student_uu";
  $result = mysqli_query($con, $query);
  return $result;
}
function student_check($con, $sid)
{
  $query = "SELECT * FROM student_uu WHERE student_id='$sid'";
  $result = mysqli_query($con, $query);
  return $result;
}
function student_result_check($con,$sid)
{
  $query = "SELECT * FROM course_registr WHERE student_id='$sid' ORDER BY semester_no DESC";
  $result = mysqli_query($con, $query);
  return $result;
}
function student1($con,$sid)
{
  $query = "SELECT * FROM course_registr WHERE student_id='$sid' ORDER BY semester_no ASC";
  $result = mysqli_query($con, $query);
  return $result;
}
function student_paid($con, $sid)
{
  $query = "SELECT * FROM student_uu WHERE student_id=$sid";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) > 0) {
      // output data of each row
  $record = mysqli_fetch_assoc($result);
  ?> <script>alert("<?php echo $record['paid']; ?>");</script> <?php
  return $record['paid'];
}
  else{
    return 0;
  }
}

?>
