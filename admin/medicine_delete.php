<?php
    
    require 'classes/add_medicine_info.php';
    $informations = new info();
    session_start();
    if(!isset($_SESSION['username']) && !isset($_SESSION['is_admin'])){
        header("Location:http://localhost/lab/Front_page/navbar.php");

    }
    $id = $_GET['id'];
    $deleted = $informations->delete($id);
    if($deleted){
        header("Location:http://localhost/lab/admin/medicine_list.php");
    }else{
        echo "try again";
    }
    
   
    
?>