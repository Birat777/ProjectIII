<?php
session_start();
   if(!isset($_SESSION['username']) && !isset($_SESSION['is_admin'])){
    header("Location:http://localhost/lab/Front_page/navbar.php");
   }
  
   // --------------------------without using class-------------------------------
    // $conn=mysqli_connect("localhost","root","","lab");
    // $query ="Select * from appointment";
    // $result = mysqli_query($conn,$query);
    // ---------------------------------------------------------------------------

// --------------------------while using class------------------------------------
        require 'classes/add_appointment_info.php';
        $informations = new info();
        $lists = $informations->appointmentlist();
    // ---------------------------------------------------------------------------
   
    
   
?>
<!DOCTYPE html>
<head>
    <title>Appointment list</title>
    <link  rel="stylesheet" href="css/adminstyle.css" >
</head>
<body>
    <div class="list-container">
    <div class="container">
        <?php include_once('sidebar.php');?>
            <div class="appointmentlist-main">
                <div class="heading">
                <h2>Appointment List</h2>
                </div>
           
                <div class="appointmentlist">
                        
                    <table class="content-table">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Phone no</th>
                            <th>Gender</th>
                            <th>Weight</th>
                            <th>Blood Group</th>
                            <th>Blood Pressure</th>
                            <th>Appointment Time</th>
                            <th>Reason</th>
                            <th>Prescribed Doctor</th>
                            <th>Edit  | Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                        // --------------------------without using class-------------------------------
                        // while($row=mysqli_fetch_assoc($result))
                        // ----------------------------------------------------------------------------

                        // --------------------------while using class---------------------------------
                        foreach( $lists as $list)
                        // ----------------------------------------------------------------------------
                        {
                        ?>
                    
                        <tr>

                        <!----------------------------without using class--------------------------------->
                            <!-- <td><?php echo $i?></td>
                            <td><?php echo $row['p_name'];?></td>
                            <td><?php echo $row['p_age'];?></td>
                            <td><?php echo $row['p_address'];?></td>
                            <td><?php echo $row['p_phone'];?></td>
                            <td><?php echo $row['p_gender'];?></td>
                            <td><?php echo $row['p_weight'];?></td>
                            <td><?php echo $row['p_bloodgroup'];?></td>
                            <td><?php echo $row['p_bloodpressure'];?></td>
                            <td><?php echo $row['p_appointment_time'];?></td>
                            <td><?php echo $row['p_reason'];?></td>
                            <td><?php echo $row['p_doctor'];?></td> -->
                            <!-------------------------------------------------------------------------->

                            <!----------------------------while using class--------------------------------->
                            <td><?php echo $i?></td>
                            <td><?php echo $list['p_name'];?></td>
                            <td><?php echo $list['p_age'];?></td>
                            <td><?php echo $list['p_address'];?></td>
                            <td><?php echo $list['p_phone'];?></td>
                            <td><?php echo $list['p_gender'];?></td>
                            <td><?php echo $list['p_weight'];?></td>
                            <td><?php echo $list['p_bloodgroup'];?></td>
                            <td><?php echo $list['p_bloodpressure'];?></td>
                            <td><?php echo $list['p_appointment_time'];?></td>
                            <td><?php echo $list['p_reason'];?></td>
                            <td><?php echo $list['p_doctor'];?></td>
                            <td>
                            <a href="appointment_update.php?id=<?php echo $list['id'];?>" class="edit">Edit</a><span> | </span> 
                            <a href="appointment_delete.php?id=<?php echo $list['id'];?>" onclick="return confirm('Are you sure want to delete this record?');" class="delete"> Delete</a>
                            </td>
                        </tr>
                        <!--------------------------------------------------------------------------------->
                    
                        <?php
                        $i++;
                        }
                        ?>
                    </tbody>
                    </table>
                </div>
            </div>
    </div>
    </div>   
</body>
</html>