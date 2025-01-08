<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book appointment</title>
    <link rel="stylesheet" href="css/appointment.css">
</head>
<body>
<?php require_once("navbar.php"); ?>
    <div class="appointmentbody">
            
            
            <!-- Add Appointment Form -->
            <section id="add-appointment">
                <h2>Book An Appointment</h2>
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

                    <label for="appointment-time">Appointment Time:</label>
                    <input type="datetime-local" id="appointment-time" name="pappointmenttime"  required>

                    <label for="reason">Reason:</label>
                    <input type="text" id="reason"  name="preason" placeholder="Reason for appointment" required>
                    
                    <label for="doctor">Select Department:</label>
                    <select id="department" name="pdepartmment" required>
                        <option value="Dr. Aadarsh Jaishi">Neurology</option>
                        <option value="Dr. Aman Thapa">Dermatology</option>
                        <option value="Dr. Birat Dagaura">Cardiology</option>
                        <option value="Dr. Ganesh Rokaya">Orthopedic</option>
                    </select>
                    
                    <label for="doctor">Select Doctor:</label>
                    <select id="doctor" name="pdoctor" required>
                        <option value="Dr. Aadarsh Jaishi">Dr. Aadarsh Jaishi</option>
                        <option value="Dr. Aman Thapa">Dr. Aman Thapa</option>
                        <option value="Dr. Birat Dagaura">Dr. Birat Dagaura</option>
                        <option value="Dr. Ganesh Rokaya">Dr. Ganesh Rokaya</option>
                    </select>

                    <button type="submit" class="addappointment">Add Appointment</button>
                </form>
            </section>
    </div>
</body>
</html>