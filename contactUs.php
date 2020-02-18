<?php
  include 'header.php';
  ?>

<div class="card-deck" style="padding-left: 8%; padding-right: 8%; padding-bottom: 3%; padding-top: 3%">
  <div class="card bg-dark">
      <div class="card-body text-center " style="color: white" >  
        <p class="card-text" style="padding-bottom: 10%"> <h2 style="color: white;">Email Us</h2>
          <div style="text-align: left">
          <div class="contact-form" style="color: white; padding: 5%">
        <form id="contact-form" method="post" action="contactUsHandler.php">
            <label for="name"> Name: </label>
            <input name="name" type="text" class="form-control" placeholder="Your Name" style="max-width: 250px" required>
            <br>
            <label for="email"> Email: </label>
            <input name="email" type="email" class="form-control" placeholder="Your Email Address" style="max-width: 250px" required>
            <br>
            <label for="company"> Company: </label>
            <input name="company" type="text" class="form-control" placeholder="Company Name" style="max-width: 250px" required>
            <br>
            <label for="phone"> Phone <small>(Format: 123-456-7890)</small></label>
            <input name="phone" type="phone" class="form-control" placeholder="Phone Number Optional" style="max-width: 250px" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
            <br>
            <label for="message"> Questions: </label>
            <textarea name="message" class="form-control" placeholder="Message" style="height: 100px; max-width: 500px" required>
            </textarea>
            <br>
            <button type="submit" name="submit" class="form-control submit" style="" >Send</button>
        </form>
    </div>
          </div>
      </div>
    </div>
    <div class="card" style="background-color: rgb(31, 30, 30)" >
        <div class="card-body bg-dark text-center " style="color: white">    
          <p class="card-text" style="padding-bottom: 10%"> <h2 style="color: white;" >Rolling Benches Canada</h2>
            <div style=" color: white; padding: 5%">
            <h4> Call us Today! </h4> <br>
            <h5>Phone: </h5> <div style=""> <a href="tel:+18557225420"> 1-855-RACK420 </a> <br> <a href="tel:+18557225420"> (1-855-722-5420) <a> </div> 
            <br>  <h5> Email: </h3> <a href="mailto:sales@rollingbenches.ca?subject=Rolling Benches Contact Page">sales@rollingbenches.ca </a>  </p>
            <img class="card-img-top; img-fluid" src="images/No_image.jpg" alt="#" style="width:100%; height: auto; padding-bottom: 10%">
            </div>
        </div>
      </div>
</div>


<?php
  include 'footer.php';
  ?>
