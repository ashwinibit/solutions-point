<html>
    <head>
    <head>

<body>

<?php
$host = "localhost"; /* Host name */
$user = "id8776684_studentdetail"; /* User */
$password = "QLa%5~eI](d]P}QK"; /* Password */
$dbname = "id8776684_student"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['but_submit'])){

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $fname = mysqli_real_escape_string($con,$_POST['fname']);
    $mname = mysqli_real_escape_string($con,$_POST['mname']);
    $class = mysqli_real_escape_string($con,$_POST['class']);
    $school = mysqli_real_escape_string($con,$_POST['school']);
    $address = mysqli_real_escape_string($con,$_POST['address']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $pno = mysqli_real_escape_string($con,$_POST['pno']);
    $mno = mysqli_real_escape_string($con,$_POST['mno']);
    $sub=mysqli_real_escape_string($con,$_POST['sub']);
  

    

    $sql = "INSERT INTO `student`(`name`, `fname`, `mname`, `class`, `school`, `address`, `email`, `pno`, `mno`, `sub`,`Status`) VALUES ('$name', '$fname', '$mname', '$class', '$school', '$address', '$email', '$pno', '$mno', '$sub','pending')";
 

   if ($con->query($sql) === TRUE) {
        echo "data Saved Successfully!";
        echo '<div> 

                <h3><a href="../index.html">Click Hear To Visit Home Page</a></h3>
                
            </div>
            <div>';
        
    } 
    else 
        echo "Error:" . $sql . "<br>" . $con->error;
    $con->close();
    
    
}

?>
</body>
</html>
