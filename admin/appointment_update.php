<?php
require 'classes/add_appointment_info.php';
$informations = new info();
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['is_admin'])){
    header("Location:http://localhost/lab/Front_page/navbar.php");
}


$id = $_GET['id'];
$listRecord = $informations->getRecordById($id);

if(isset($_POST['pname'])){
   

    $updated = $informations->update($_POST,$id);
    if($updated){
        header("Location:http://localhost/lab/admin/appointment_list.php");
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
              
        <div class="addappointment-main">
                <div class="heading">
                <h2>Update Appointment</h2>
                <p>Edit the patient details.....</p>
                </div>
                <div class="addappointment">
                <form id="appointment-form" method="POST">
                   
                   <label for="patient-name">Patient Name:</label>
                   <input type="text" id="patient-name" name="pname" value="<?php echo $listRecord['p_name']?>">

                   <label for="patient-age">Patient Age:</label>
                   <input type="number" id="patient-age" name="page" value="<?php echo $listRecord['p_age']?>">

                   <label for="patient-address">Patient Address:</label>
                   <input type="text" id="patient-address" name="paddress"  value="<?php echo $listRecord['p_address']?>">

                   <label for="patient-phone">Phone:</label>
                   <input type="text" id="patient-phone" name="pphone" value="<?php echo $listRecord['p_phone']?>">

                   <label for="patient-gender">Gender:</label>
                   <select id="patient-gender" name="pgender" value="<?php echo $listRecord['p_gender']?>">
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
                       <option value="Other">Other</option>
                   </select>

                   <label for="patient-weight">Patient Weight:</label>
                   <input type="number" id="patient-weight" name="pweight" value="<?php echo $listRecord['p_weight']?>">

                   <label for="patient-blood-group">Blood Group (Optional):</label>
                   <select id="patient-blood-group" name="pbloodgroup"  value="<?php echo $listRecord['p_bloodgroup']?>">
                       <option value="A+">A+</option>
                       <option value="A-">A-</option>
                       <option value="B+">B+</option>
                       <option value="B-">B-</option>
                       <option value="O+">O+</option>
                       <option value="O-">O-</option>
                       <option value="AB+">AB+</option>
                       <option value="AB-">AB-</option>
                   </select>

                   <label for="blood-pressure">Blood Pressure (Optional):</label>
                   <input type="text" id="blood-pressure" name="pbloodpressure"  placeholder="e.g., 120/80" value="<?php echo $listRecord['p_bloodpressure']?>">

                   <label for="appointment-time">Appointment Time:</label>
                   <!-- <input type="time" id="appointment-time" name="pappointmenttime"  required> -->
                   <input type="datetime-local" id="appointment-time" name="pappointmenttime"  value="<?php echo $listRecord['p_appointment_time']?>">

                   <label for="reason">Reason:</label>
                   <input type="text" id="reason"  name="preason" placeholder="Reason for appointment" value="<?php echo $listRecord['p_reason']?>">

                   <label for="doctor">Select Doctor:</label>
                   <select id="doctor" name="pdoctor" value="<?php echo $listRecord['p_doctor']?>">
                       <option value="Dr. Aadarsh Jaishi">Dr. Aadarsh Jaishi</option>
                       <option value="Dr. Aman Thapa">Dr. Aman Thapa</option>
                       <option value="Dr. Birat Dagaura">Dr. Birat Dagaura</option>
                       <option value="Dr. Ganesh Rokaya">Dr. Ganesh Rokaya</option>
                   </select>

                   <button type="submit" class="addappointment">Update Appointment</button>
                </form>
                </div>
               
        </div>
</div>
</body>
</html>


