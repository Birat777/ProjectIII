
    <!doctype html>
    <html>
        <head>
            <title>sidebar</title>
            <link rel="stylesheet" href="css/adminstyle.css">
        </head>
        <body>

        <aside>
         <ul>

            <li><div class="text"><h2>BIRAT MEDICAL</h2></div></li>
            <div class="menu">
            <p>Main Menu</p>
            <li><div class="item"><a href="dashboard.php"><button >Dashboard</button></a></div></li>
            
            <li><div class="item"><a href="#"><button class="menu-btn">Appointment</button></a></div></li>
                <div class="sub-menu">
                <li><div class="sub-item"><a href="add_appointment.php"><button>Add Appointment</button></a></div></li>
                <li><div class="sub-item"><a href="appointment_list.php"><button>Appointment list</button></a></div></li>
                </div>

                <li><div class="item"><a href="#"><button class="doctormenu-btn">Doctor</button></a></div></li>
                <div class="dsub-menu">
                <li><div class="dsub-item"><a href="adddoctor.php"><button>Add Doctor</button></a></div></li>
                <li><div class="dsub-item"><a href="doctor_list.php"><button>Doctor list</button></a></div></li>
                </div>
                <p>Medicine</p>
                <li><div class="item"><a href="#"><button class="medicinemenu-btn">Drug</button></a></div></li>
                <div class="msub-menu">
                <li><div class="msub-item"><a href="addmedicine.php"><button>Add Drug</button></a></div></li>
                <li><div class="msub-item"><a href="medicine_list.php"><button>Drug list</button></a></div></li>
                </div>

            <li><div class="item"><a href="logout.php"><button class="logout">Logout</button></a></div></li>
            </div> 
        </ul>
        </aside>

        <script>

                // Select all menu buttons
                const menuButton = document.querySelector('.menu-btn');
                const submenuButton = document.querySelector('.sub-menu');
                menuButton.addEventListener("click",()=>{
            
                // submenuButtons.style.display = submenuButtons.style.display === "block" ? "none" : "block";
                if (submenuButton.style.display == 'block') {
                    submenuButton.style.display = 'none';
                    } else {
                    submenuButton.style.display = 'block';
                }
                });


                const dmenuButtons = document.querySelector('.doctormenu-btn');
                const dsubmenuButtons = document.querySelector('.dsub-menu');
                dmenuButtons.addEventListener("click",()=> {
               
                    // submenuButtons.style.display = submenuButtons.style.display === "block" ? "none" : "block";
                    if (dsubmenuButtons.style.display == 'block') {
                        dsubmenuButtons.style.display = 'none';
                        } else {
                        dsubmenuButtons.style.display = 'block';
                        }
                    });


                const mmenuButtons = document.querySelector('.medicinemenu-btn');
                const msubmenuButtons = document.querySelector('.msub-menu');
                mmenuButtons.addEventListener("click",()=> {
               
                    // submenuButtons.style.display = submenuButtons.style.display === "block" ? "none" : "block";
                    if (msubmenuButtons.style.display == 'block') {
                        msubmenuButtons.style.display = 'none';
                        } else {
                        msubmenuButtons.style.display = 'block';
                        }
                    });
               
        </script>
        </body>
    </html>
    