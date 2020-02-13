<?php
  include 'header.php';
  ?>
 
    <div class="contact-form">
        <form id="contact-form" method="post" action="contactUsHandler.php">
            <input name="name" type="text" class="form-control" placeholder="Your Name" required>
            <br>
            <input name="email" type="email" class="form-control" placeholder="Your Email" required>
            <br>
            <textarea name="message" class="form-control" placeholder="Message" rox="4" required>
            </textarea>
            <br>
            <button type="submit" name="submit" class="form-control submit" >Send</button>
            

        </form>
    
    
    </div>



