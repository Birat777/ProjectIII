<?php
require 'classes/add_doctor_info.php';
$informations = new info();
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['is_admin'])){
    header("Location:http://localhost/lab/Front_page/navbar.php");
}


$id = $_GET['id'];
$listRecord = $informations->getRecordById($id);

if(isset($_POST['dname'])){
   

    $updated = $informations->update($_POST,$id);
    if($updated){
        header("Location:http://localhost/lab/admin/doctor_list.php");
    }else{
        echo "try again";
    }
}

?> 


<!DOCTYPE html>
<head>
   
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/adminstyle.css">
</head>
<body>
<div class="container">
        <?php include_once('sidebar.php');?>
              
        <div class="adddoctor-main">
                <div class="heading">
                <h2>Update Doctor</h2>
                <p>Edit the Doctor details.....</p>
                </div>
                <div class="adddoctor">
                <form id="adddoctor-form" method="POST">
                   
                   <label for="doctor-name">Doctor Name:</label>
                   <input type="text" id="doctor-name" name="dname" placeholder="Enter doctor name" value="<?php echo $listRecord['d_name']?>" required>

                   <label for="doctor-age">Doctor Age:</label>
                   <input type="number" id="doctor-age" name="dage"  placeholder="Enter doctor age" value="<?php echo $listRecord['d_age']?>" required>

                   <label for="doctor-address">Doctor Address:</label>
                   <input type="text" id="doctor-address" name="daddress"  placeholder="Enter doctor address" value="<?php echo $listRecord['d_address']?>" required>

                   <label for="email-address">Email:</label>
                   <input type="text" id="email-address" name="demail"  placeholder="Enter doctor email" value="<?php echo $listRecord['d_email']?>" required>

                   <label for="doctor-phone">Phone:</label>
                   <input type="text" id="doctor-phone" name="dphone"  placeholder="Enter doctor phone no" value="<?php echo $listRecord['d_phone']?>" required>

                   <label for="doctor-gender">Gender:</label>
                   <select id="doctor-gender" name="dgender" required>
                       <option value="Male" <?php echo ($listRecord['d_gender'] == "Male" ? "selected" : "");?>>Male</option>
                       <option value="Female" <?php echo ($listRecord['d_gender'] == "Female" ? "selected" : "");?>>Female</option>
                       <option value="Other" <?php echo ($listRecord['d_gender'] == "Other" ? "selected" : "");?>>Other</option>
                   </select>

                   <label for="doctor-speciality">Doctor Speciality:</label>
                   <input type="text" id="doctor-speciality" name="dspeciality" placeholder="Enter doctor speciality" value="<?php echo $listRecord['d_speciality']?>" required>

                  
                   <label for="department">Select Department:</label>
                   <select id="department" name="ddepartment" required>
                       <option value="Neurology">Neurology</option>
                       <option value="Dermatology">Dermatology</option>
                       <option value="Cardiology">Cardiology</option>
                       <option value="Orthopedic">Orthopedic</option>
                   </select>

                   <button type="submit" class="adddoctor">Update Doctor</button>
                </form>
                </div>
               
        </div>
</div>
</body>
</html>


c