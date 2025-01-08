 <?php
session_start();
// --------------------------without using class-------------------------------
//  require_once '../Database.php';
//  $db = new Database();
//  $conn = $db->getConnection();
 // ----------------------------------------------------------------------------


//---------------------------While using class----------------------------------
    if(!isset($_SESSION['username']) && !isset($_SESSION['is_admin'])){
        header("Location:http://localhost/lab/Front_page/navbar.php");
    }

    if(isset($_POST['dname'])){
        require 'classes/add_doctor_info.php';
        $informations = new info();

        $submited = $informations->create($_POST);
        if($submited){
            header("Location:http://localhost/lab/admin/doctor_list.php");
        }else{
            echo "try again";
        }
    }
// -------------------------------------------------------------------------------

   
    // --------------------------without using class------------------------------
    // if($_POST){
    //     $dname = $_POST['dname'];
    //     $dage = $_POST['dage'];
    //     $daddress = $_POST['daddress'];
    //     $demail = $_POST['demail'];
    //     $dphone = $_POST['dphone'];
    //     $dgender = $_POST['dgender'];
    //     $dspeciality = $_POST['dspeciality'];
    //     $ddepartment = $_POST['ddepartment'];

    //     $result = $conn->prepare ("Insert into doctor (d_name,d_age,d_address,d_email,d_phone,d_gender,d_speciality,d_department) Values ('".$dname."','".$dage."','".$daddress."','".$demail."','".$dphone."','".$dgender."','".$dspeciality."','".$ddepartment."')");
       
    //     $result->execute();
    //     if($result->rowCount() > 0){
    //        echo "Inserted successfully";
    //      }else{
    //          echo "Data is not inseted please try again";
    //      }
    // }
    // ------------------------------------------------------------------------------
    
   
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
                <h2>Add New Doctor</h2>
                <p>Enter the Doctor details.....</p>
                </div>
                <div class="adddoctor">
                <form id="adddoctor-form" method="POST">
                   
                   <label for="doctor-name">Doctor Name:</label>
                   <input type="text" id="doctor-name" name="dname" placeholder="Enter doctor name" required>

                   <label for="doctor-age">Doctor Age:</label>
                   <input type="number" id="doctor-age" name="dage"  placeholder="Enter doctor age" required>

                   <label for="doctor-address">Doctor Address:</label>
                   <input type="text" id="doctor-address" name="daddress"  placeholder="Enter doctor address" required>

                   <label for="email-address">Email:</label>
                   <input type="text" id="email-address" name="demail"  placeholder="Enter doctor email" required>

                   <label for="doctor-phone">Phone:</label>
                   <input type="text" id="doctor-phone" name="dphone"  placeholder="Enter doctor phone no" required>

                   <label for="doctor-gender">Gender:</label>
                   <select id="doctor-gender" name="dgender" required>
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
                       <option value="Other">Other</option>
                   </select>

                   <label for="doctor-speciality">Doctor Speciality:</label>
                   <input type="text" id="doctor-speciality" name="dspeciality" placeholder="Enter doctor speciality" required>

                  
                   <label for="department">Select Department:</label>
                   <select id="department" name="ddepartment" required>
                       <option value="Neurology">Neurology</option>
                       <option value="Dermatology">Dermatology</option>
                       <option value="Cardiology">Cardiology</option>
                       <option value="Orthopedic">Orthopedic</option>
                   </select>

                   <button type="submit" class="adddoctor">Add New Doctor</button>
                </form>
                </div>
               
        </div>
</div>
</body>
</html>


