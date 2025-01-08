<?php
session_start();
   if(!isset($_SESSION['username']) && !isset($_SESSION['is_admin'])){
    header("Location:http://localhost/lab/Front_page/navbar.php");
   }
  
        require 'classes/add_medicine_info.php';
        $informations = new info();
        $lists = $informations->appointmentlist();
    
?>

<!DOCTYPE html>
<head>
    <title>Drug list</title>
    <link  rel="stylesheet" href="css/adminstyle.css" >
</head>
<body>
    <div class="list-container">
    <div class="container">
        <?php include_once('sidebar.php');?>
            <div class="medicinelist-main">
                <div class="heading">
                <h2>Medicine List</h2>
                </div>
           
                <div class="medicinelist">
                        
                    <table class="content-table">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Drug Name</th>
                            <th>Drug Desc</th>
                            <th>Drug MFD Date</th>
                            <th>Drug Exp Date</th>
                            <th>Drug Per Price</th>
                            <th>Drug Quantity</th>
                            <th>Edit  | Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                       
                        foreach( $lists as $list)

                        {
                        ?>
                    
                        <tr>

                            <td><?php echo $i?></td>
                            <td><?php echo $list['m_name'];?></td>
                            <td><?php echo $list['m_desc'];?></td>
                            <td><?php echo $list['m_mfd'];?></td>
                            <td><?php echo $list['m_exp'];?></td>
                            <td><?php echo $list['m_perprice'];?></td>
                            <td><?php echo $list['m_quantity'];?></td>
                            <td>
                            <a href="medicine_update.php?id=<?php echo $list['id'];?>" class="edit">Edit</a><span> | </span> 
                            <a href="medicine_delete.php?id=<?php echo $list['id'];?>" onclick="return confirm('Are you sure want to delete this record?');" class="delete"> Delete</a>
                            </td>
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