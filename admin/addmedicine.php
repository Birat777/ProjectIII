<?php
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['is_admin'])){
    header("Location:http://localhost/lab/Front_page/navbar.php");
}

    if(isset($_POST['mname'])){
        require 'classes/add_medicine_info.php';
        $informations = new info();

        $submited = $informations->create($_POST);
        if($submited){
            header("Location:http://localhost/lab/admin/medicine_list.php");
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
              
        <div class="addmedicine-main">
                <div class="heading">
                <h2>Add DRUG</h2>
                <p>Enter the drug details.....</p>
                </div>
                <div class="addmedicine">
                <form id="drug-form" method="POST">
                   
                   <label for="drug-name">Drug Name:</label>
                   <input type="text" id="drug-name" name="mname" placeholder="Enter Drug Name" required>

                   <label for="drug-desc">Drug Desc :</label>
                   <input type="text" id="drug-desc" name="mdesc" placeholder="Enter Drug Description" required>

                   <label for="drug-mfd">Drug Manufacture Date :</label>
                   <input type="datetime-local" id="drug-mfd" name="mmfd" placeholder="Enter Manufacture Date" required>
                   
                   <label for="drug-exp">Drug Expiry Date :</label>
                   <input type="datetime-local" id="drug-exp" name="mexp" placeholder="Enter Expiry Date" required>
                   
                   <label for="drug-perprice">Drug Per Price :</label>
                   <input type="number" id="drug-perprice" name="mperprice" placeholder="Enter Per Price" required>

                   <label for="drug-quantity">Drug Quantity :</label>
                   <input type="number" id="drug-quantity" name="mquantity" placeholder="Enter Quantity" required>

                   <label for="drug-addunit">Add Drug Unit :</label>
                   <input type="number" id="drug-addunit" name="maddunit" placeholder="Enter Unit To Be Added">

                   <button type="submit" class="adddrug">Add Drug</button>
                </form>
                </div>
               
        </div>
</div>
</body>
</html>


