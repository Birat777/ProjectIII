<?php
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['is_admin'])){
    header("Location:http://localhost/lab/Front_page/navbar.php");
}

// --------------------------without using class-------------------------------
//  require_once '../Database.php';
//  $db = new Database();
//  $conn = $db->getConnection();
// ----------------------------------------------------------------------------


//---------------------------While using class----------------------------------
    if(isset($_POST['pname'])){
        require 'classes/add_appointment_info.php';
        $informations = new info();

        $submited = $informations->create($_POST);
        if($submited){
            header("Location:http://localhost/lab/admin/appointment_list.php");
        }else{
            echo "try again";
        }
    }
// ------------------------------------------------------------------------------


 // --------------------------without using class--------------------------------
    // if($_POST){
    //     $pname = $_POST['pname'];
    //     $page = $_POST['page'];
    //     $paddress = $_POST['paddress'];
    //     $pphone = $_POST['pphone'];
    //     $pgender = $_POST['pgender'];
    //     $pweight = $_POST['pweight'];
    //     $pbloodgroup = $_POST['pbloodgroup'];
    //     $pbloodpressure = $_POST['pbloodpressure'];
    //     $pappointmenttime = $_POST['pappointmenttime'];
    //     $preason = $_POST['preason'];
    //     $pdoctor = $_POST['pdoctor'];
    //     $result = $conn->prepare ("Insert into appointment (p_name,p_age,p_address,p_phone,p_gender,p_weight,p_bloodgroup,p_bloodpressure,p_appointment_time,p_reason,p_doctor) Values ('".$pname."','".$page."','".$paddress."','".$pphone."','".$pgender."','".$pweight."','".$pbloodgroup."','".$pbloodpressure."','".$pappointmenttime."','".$preason."','".$pdoctor."')");
       
    //     $result->execute();
    //     if($result->rowCount() > 0){
    //        echo "Inserted successfully";
    //      }else{
    //          echo "Data is not inseted please try again";
    //      }
    // }
// --------------------------------------------------------------------------------
   
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
                <h2>Add Appointment</h2>
                <p>Enter the patient details.....</p>
                </div>
                <div class="addappointment">
                <form id="appointment-form" method="POST">
                   
                   <label for="patient-name">Patient Name:</label>
                   <input type="text" id="patient-name" name="pname" placeholder="Enter patient name" required>

                   <label for="patient-age">Patient Age:</label>
                   <input type="number" id="patient-age" name="page"  placeholder="Enter patient age" required>

                   <label for="patient-address">Patient Address:</label>
                   <input type="text" id="patient-address" name="paddress"  placeholder="Enter patient address" required>

                   <label for="patient-phone">Phone:</label>
                   <input type="text" id="patient-phone" name="pphone"  placeholder="Enter patient phone no" required>

                   <label for="patient-gender">Gender:</label>
                   <select id="patient-gender" name="pgender" required>
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
                       <option value="Other">Other</option>
                   </select>

                   <label for="patient-weight">Patient Weight:</label>
                   <input type="number" id="patient-weight" name="pweight" placeholder="Enter patient weight" required>

                   <label for="patient-blood-group">Blood Group (Optional):</label>
                   <select id="patient-blood-group" name="pbloodgroup"  required>
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
                   <input type="text" id="blood-pressure" name="pbloodpressure"  placeholder="e.g., 120/80">

                   <label for="appointment-time">Appointment Time:</label>
                   <!-- <input type="time" id="appointment-time" name="pappointmenttime"  required> -->
                   <input type="datetime-local" id="appointment-time" name="pappointmenttime"  required>

                   <label for="reason">Reason:</label>
                   <input type="text" id="reason"  name="preason" placeholder="Reason for appointment" required>

                   <label for="doctor">Select Doctor:</label>
                   <select id="doctor" name="pdoctor" required>
                       <option value="Dr. Aadarsh Jaishi">Dr. Aadarsh Jaishi</option>
                       <option value="Dr. Aman Thapa">Dr. Aman Thapa</option>
                       <option value="Dr. Birat Dagaura">Dr. Birat Dagaura</option>
                       <option value="Dr. Ganesh Rokaya">Dr. Ganesh Rokaya</option>
                   </select>

                   <button type="submit" class="addappointment">Add Appointment</button>
                </form>
                </div>
               
        </div>
</div>
</body>
</html>


