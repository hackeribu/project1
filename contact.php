<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Us Page</title>
    <link rel="stylesheet" href="contact us.css">
    <form action="contact4.php" method="POST">
</head>
<body>
    <section class="contact">
        <div class="content">
            <h2><span>C</span>ontact <span>U</span>s</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum nihil odit adipisci illo inventore eum, corrupti commodi delectus.</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>1234 Pachora Road,<br>Pune,India,<br>14568</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>12345678</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>abc@gmail.com</p>
                    </div>
                </div>
            </div>
            
            <div class="contactForm">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="user" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>Eamil</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="feedback" id="" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Send">
                    </div>

                
            </div>

            
        </div>
        
    </section>
    </form>
    
</body>
</html>