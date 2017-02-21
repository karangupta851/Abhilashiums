<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Registration</title>
</head>
<body bgcolor="skyblue">
<fieldset><legend>Registration Form</legend>
<form action="insert.php" method="post">
<td colspan="2"><h2 align="center" style="color:#00008B;">Register Now!</h2>
  <div align="center">(<label style="color:#FF0000;">*
  </label>Fileds are Required)
  </div>
  <table width="343" height="458" border="0" align="center">
  <tr>
    <td width="115">Registration No.
      <label style="color:#FF0000">*</label></td>
    <td width="218"><input name="regno" type="text" required></td>
  </tr>
  <tr>
    <td>First Name <label style="color:#FF0000">*</label></td>
    <td><input name="fname" type="text" required></td>
  </tr>
  <tr>
    <td>Last Name<label style="color:#FF0000">*</label></td>
    <td><input name="lname" type="text" required></td>
  </tr>
  <tr>
    <td>Father's Name<label style="color:#FF0000">*</label></td>
    <td><input name="faname" type="text" required></td>
  </tr>
  <tr>
    <td>Mother's Name<label style="color:#FF0000">*</label></td>
    <td><input name="mname" type="text" required></td>
  </tr>
  <tr>
    <td>Date Of Birth<label style="color:#FF0000">*</label></td>
    <td><input name="dob" type="text" required></td>
  </tr>
  <tr>
    <td>Blood Group<label style="color:#FF0000">*</label></td>
    <td><select name="bgroup" required>
      <option>A+</option>
      <option>AB+</option>
      <option>AB-</option>
      <option>B+</option>
      <option>B-</option>
      <option>O+</option>
      <option>O-</option>
    </select></td>
  </tr>
  <tr>
    <td>Email<label style="color:#FF0000">*</label></td>
    <td><input name="email" type="text" required></td>
  </tr>
  <tr>
    <td>Mobile No.(Phone)<label style="color:#FF0000">*</label></td>
    <td><input name="mob" type="text" required></td>
  </tr>
  <tr>
    <td>Gender<label style="color:#FF0000">*</label></td>
    <td><input name="gender" type="radio" value="Male" required>
    Male
      <input name="gender" type="radio" value="Female"required>
      Female</td>
  </tr>
  <tr>
    <td>Identification Mark</td>
    <td><input name="mark" type="text"></td>
  </tr>
  <tr>
    <td>National ID<label style="color:#FF0000">*</label></td>
    <td><input name="nid" type="text" required></td>
  </tr>
  <tr>
    <td>Passport No.</td>
    <td><input name="pno" type="text" id="pno"></td>
  </tr>
  <tr>
    <td>Home Distt.<label style="color:#FF0000">*</label></td>
    <td><select name="distt" required>
      <option>Mandi</option>
      <option>Shimla</option>
      <option>Kullu</option>
      <option>Kangra</option>
    </select></td>
  </tr>
  <tr>
    <td>Registration Date<label style="color:#FF0000">*</label></td>
    <td><input name="regdate" type="text" required></td>
  </tr>
  <tr>
  <td>PhotoGraph<label style="color:#FF0000">*</label></td>
  <td><input name="img" type="file" required></td>
  </tr>
  <tr>
  <td>Mailing Address<label style="color:#FF0000">*</label></td>
  <td><textarea name="mailadd" cols="" rows="" required></textarea></td>
  </tr><tr>
  <td>Parmanent Address<label style="color:#FF0000">*</label></td>
  <td><textarea name="padd" cols="" rows="" required></textarea></td>
  </tr>
	<tr>
	  <th><input name="submit" type="submit" value="Add Records"></th>
	</tr>
</table>
</form>
</fieldset>
</body>
</html>