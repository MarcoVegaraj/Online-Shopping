<?php
    require 'connection.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title> Contact Us </title>

    <meta name="author" content="Codeconvey" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>   
    <link rel="stylesheet" href="css/style.css">
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />
	
</head>
<body>
		


<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
               <div>
			    <?php
            require 'header.php';
           ?>
            <div class="container">
                <div class="contact-parent">
                    <div class="contact-child child1">
                        <p>
                            <i class="fas fa-map-marker-alt"></i> Address <br />
                            <span> 1-14-1 Taman Sri Bunga, Lengkok Nipah Lima 
                                <br />
                                Penang,Malaysia
                            </span>
                        </p>

                        <p>
                            <i class="fas fa-phone-alt"></i> Let's Talk <br />
                            <span> 046452359</span>
                        </p>

                        <p>
                            <i class=" far fa-envelope"></i> General Support <br />
                            <span>marcomahamteren03@gmail.com</span>
                        </p>
                    </div>

                    <div class="contact-child child2">
                        <div class="inside-contact">
                            <h2>Contact Us</h2>
                            <h3>
                               <span id="confirm">
                            </h3>

                            <p>Name *</p>
                            <input id="txt_name" type="text" Required="required">

                            <p>Email *</p>
                            <input id="txt_email" type="text" Required="required">

                            <p>Phone *</p>
                            <input id="txt_phone" type="text" Required="required">

                            <p>Subject *</p>
                            <input id="txt_subject" type="text" Required="required">

                            <p>Message *</p>
                            <textarea id="txt_message" rows="4" cols="20" Required="required" ></textarea>
                            
                            <input type="submit" id="btn_send" value="SEND">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    		
           
    		</div>
		</div>
    </div>
    
</section>
    
 

	</body>
</html>