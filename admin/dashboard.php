<?php
    session_start();
    if(!isset($_SESSION['username']) && !isset($_SESSION['is_admin'])){
        header("Location:http://localhost/lab/Front_page/navbar.php");
    }
?>

<!doctype html>
<html>
    <head>
        <title>Admin dashboard</title>
        <link  rel="stylesheet" href="css/adminstyle.css" >
        
    </head>
    <body>
        <div class="container">
        <?php include_once('sidebar.php');?>
            <div class="dashboard-main">
                <div class="heading">
                <h1>BIRAT MEDICAL</h1>
                <P>Where healing begins......</P>
                </div>
           
            <div class="dashboard">
                <h2>APPOINTMENTS</h2>
                <div class="doctor-appointments">
                    <!-- Doctor 1 -->
                    <div class="doctor-card">
                        <h3>Dr. Aadarsh Jaishi</h3>
                        <h4>Neurologists</h4>
                        <p>Number of Patients: <span id="doctor-1-count">0</span></p>
                        <button class="view-patient" data-doctor="doctor-1">View Patients</button>
                    </div>

                    <!-- Doctor 2 -->
                    <div class="doctor-card">
                        <h3>Dr. Aman Thapa</h3>
                        <h4>Dermatologist</h4>
                        <p>Number of Patients: <span id="doctor-2-count">0</span></p>
                        <button class="view-patient" data-doctor="doctor-2">View Patients</button>
                    </div>

                    <!-- Doctor 3 -->
                    <div class="doctor-card">
                        <h3>Dr. Birat Dagaura</h3>
                        <h4>Cardiologist</h4>
                        <p>Number of Patients: <span id="doctor-3-count">0</span></p>
                        <button class="view-patient" data-doctor="doctor-3">View Patients</button>
                    </div>
                     <!-- Doctor 4 -->
                     <div class="doctor-card">
                        <h3>Dr. Ganesh Rokaya</h3>
                        <h4>Orthopedist</h4>
                        <p>Number of Patients: <span id="doctor-4-count">0</span></p>
                        <button class="view-patient" data-doctor="doctor-1">View Patients</button>
                    </div>
                </div>
            </section>
                
        </div>

        </div>
        
    </body>
</html>