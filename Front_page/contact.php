<!DOCTYPE html>
<html>
    <head>
        <title>Contact us Page</title>
        <link  rel="stylesheet" href="css/contact.css">
    </head>
    <body>
        <div class="contactbody">
            <?php require_once("navbar.php"); ?>
        <div class="container">
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111976.63641046935!2d80.52705314761785!3d28.71147932915328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a1eda3c183f783%3A0x7de03525ca553d0e!2sMaya%20Metro%20Hospital%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1734864234679!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="information">
                <div class="content">
                    <h2>Get in touch to us!</h2>
                    <ul>
                        <li>
                            <h3>Location:</h3>
                            <p>Dhangadhi-4, Utterbehedhi, Kailali, Nepal</p>
                        </li>
                        <li>
                            <h3>Email:</h3>
                            <p>dagaurabirat@gmail.com</p>
                        </li>
                        
                        <li>
                            <h3>Call:</h3>
                            <p>+977 9815668982</p>
                        </li>
                    </ul>
                </div>
                <div class="form">
                    <div class="input">
                        <h2>Reach out to us!</h2>
                    <form onsubmit="return submitted();">
                        <ul>
                            <li>
                                <label>Name *:</lable>
                                <input type="text" name="name" id="name" placeholder="Your full name" />
                            </li>
                            <li>
                                <lable>Email *:</lable>
                                <input type="text" name="email" placeholder="Your Email ID" />
                            </li>
                            <li>
                                <lable>Address *:</lable>
                                <input type="text" name="address" placeholder="Your address"/>
                            </li>
                            <li>
                                <lable>Phone Number *:</lable>
                                <input type="text" name="phone" placeholder="Your phone number"/>
                            </li>
                            <li>
                                <lable>Message:</lable>
                                <textarea  cols="10"rows="20"> </textarea>
                            </li>
                        </div>
                            <div class="button">
                                    <input type="submit" id="submit" name="submit" />
                            </div>
                           
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <script type="text/javascript">
            function submitted(){
                let name = document.getElementById('name').value;
               if(name == ""){
                    alert("Name field is required");
                    return false;
               }
               
            }
        </script>
    </body>
</html>