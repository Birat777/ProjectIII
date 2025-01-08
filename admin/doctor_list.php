<?php
session_start();
   if(!isset($_SESSION['username']) && !isset($_SESSION['is_admin'])){
    header("Location:http://localhost/lab/Front_page/navbar.php");
   }

    // --------------------------without using class-------------------------------
    // $conn=mysqli_connect("localhost","root","","lab");
    // $query ="Select * from doctor";
    // $result = mysqli_query($conn,$query);
    // ----------------------------------------------------------------------------


    //---------------------------While using class------------------------------------
    require 'classes/add_doctor_info.php';
    $informations = new info();
    $lists = $informations->doctorlist();
    // ----------------------------------------------------------------------------
   
   
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
            <div class="doctorlist-main">
                <div class="heading">
                <h2>Doctor List</h2>
                </div>
           
                <div class="doctorlist">
                        
                    <table class="content-table">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone no</th>
                            <th>Gender</th>
                            <th>Speciality</th>
                            <th>Department</th>
                            <th>Edit  | Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                        // -----------------without using class---------------------------------------
                        // while($row=mysqli_fetch_assoc($result))
                        // ---------------------------------------------------------------------------

                        // ----------------while using class------------------------------------------
                        foreach( $lists as $list)
                        //----------------------------------------------------------------------------
                        {
                        ?>
                    
                        <tr>
                            <!------------------------- without using class ------------------------->
                            <!-- <td><?php echo $i?></td>
                            <td><?php echo $row['d_name'];?></td>
                            <td><?php echo $row['d_age'];?></td>
                            <td><?php echo $row['d_address'];?></td>
                            <td><?php echo $row['d_email'];?></td>
                            <td><?php echo $row['d_phone'];?></td>
                            <td><?php echo $row['d_gender'];?></td>
                            <td><?php echo $row['d_speciality'];?></td>
                            <td><?php echo $row['d_department'];?></td> -->
                            <!-- ----------------------------------------------------------------->


                            <!--------------------------- using class ----------------------------->
                            
                            <td><?php echo $i?></td>
                            <td><?php echo $list['d_name'];?></td>
                            <td><?php echo $list['d_age'];?></td>
                            <td><?php echo $list['d_address'];?></td>
                            <td><?php echo $list['d_email'];?></td>
                            <td><?php echo $list['d_phone'];?></td>
                            <td><?php echo $list['d_gender'];?></td>
                            <td><?php echo $list['d_speciality'];?></td>
                            <td><?php echo $list['d_department'];?></td>
                            <td>
                            <a href="doctor_update.php?id=<?php echo $list['id'];?>" class="edit">Edit</a><span> | </span> 
                            <a href="doctor_delete.php?id=<?php echo $list['id'];?>" onclick="return confirm('Are you sure want to delete this record?');" class="delete"> Delete</a>
                            </td>
                            <!-- ---------------------------------------------------------------->
                        </tr>
                    
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