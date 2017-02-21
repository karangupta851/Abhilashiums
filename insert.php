<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "student");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Registration_No = mysqli_real_escape_string($link, $_REQUEST['regno']);
$First_Name = mysqli_real_escape_string($link, $_REQUEST['fname']);
$Last_Name = mysqli_real_escape_string($link, $_REQUEST['lname']);
$Fathers_Name = mysqli_real_escape_string($link, $_REQUEST['faname']);
$Mothers_Name = mysqli_real_escape_string($link, $_REQUEST['mname']);
$Date_Of_Birth = mysqli_real_escape_string($link, $_REQUEST['dob']);
$Blood_Group = mysqli_real_escape_string($link, $_REQUEST['bgroup']);
$Email = mysqli_real_escape_string($link, $_REQUEST['email']);
$Mobile_No = mysqli_real_escape_string($link, $_REQUEST['mob']);
$Gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$Identification_Mark = mysqli_real_escape_string($link, $_REQUEST['mark']);
$National_ID = mysqli_real_escape_string($link, $_REQUEST['nid']);
$Passport_No = mysqli_real_escape_string($link, $_REQUEST['pno']);
$Home_Distt = mysqli_real_escape_string($link, $_REQUEST['distt']);
$Registration_Date = mysqli_real_escape_string($link, $_REQUEST['regdate']);
$img = mysqli_real_escape_string($link, $_REQUEST['img']);
$Mailing_Address = mysqli_real_escape_string($link, $_REQUEST['mailadd']);
$Parmanent_Address = mysqli_real_escape_string($link, $_REQUEST['padd']);
// attempt insert query execution
$sql = "INSERT INTO reg ( 	Registration_No,  	First_Name, Last_Name, Fathers_Name,  	Mothers_Name, Date_Of_Birth, Blood_Group, Email, Mobile_No, Gender, Identification_Mark, National_ID, Passport_ID, Home_Distt, Registration_Date, img, Mailing_Address, Parmanent_Address) VALUES ('$Registration_No',  	'$First_Name', '$Last_Name', '$Fathers_Name',  	'$Mothers_Name', '$Date_Of_Birth', '$Blood_Group', '$Email', '$Mobile_No', '$Gender', '$Identification_Mark', '$National_ID', '$Passport_No', '$Home_Distt', '$Registration_Date', '$img', '$Mailing_Address', '$Parmanent_Address')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>