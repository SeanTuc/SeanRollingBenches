<?php
  include 'header.php';
  ?>

<div class="card-deck" style="padding-left: 8%; padding-right: 8%; padding-bottom: 3%; padding-top: 3%">
  <div class="card bg-dark">
      <div class="card-body text-center " style="color: white" >  
        <p class="card-text" style="padding-bottom: 10%"> <h2 style="color: white;">Email Us</h2>
          <div style="text-align: left">
          <div class="contact-form" style="color: white; padding: 5%">
        <form id="contact-form" method="post" enctype="text/plain" action="mailto:sales@rollingbenches.ca?subject=Rolling Benches Contact Page" >
            <label for="name"> Name: </label>
            <input name="Name " type="text" class="form-control" placeholder="Your Name"  required>
            <br>
            <label for="email"> Email:<br> </label>
            <input name="Email " type="email" class="form-control" placeholder="Your Email Address"  required>
            <br>
            <label for="company"> Company: </label>
            <input name="Company " type="text" class="form-control" placeholder="Company Name"  required>
            <br>
            <label for="phone"> Phone <small>(Format: 123-456-7890)</small></label>
            <input name="Phone " type="phone" class="form-control" placeholder="Phone Number Optional"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
            <br>
            <label for="message"> Questions: </label>
            <textarea name="Message " class="form-control" placeholder="Message" style="height: 34vh; " required></textarea>
            <br>
            <button type="submit" class="form-control submit" value="send" >Send Email</button>
        </form>
    </div>
          </div>
      </div>
    </div>
    <div class="card" style="background-color: rgb(31, 30, 30)" >
        <div class="card-body bg-dark text-center " style="color: white">    
          <p class="card-text" style="padding-bottom: 10%"> <h2 style="color: white;" >www.rollingbenches.ca</h2>
            <div style=" color: white; padding: 5%">
            <h4> Call Us Today! </h4> <br>
            <h5>Phone: </h5> <div style=""> <a href="tel:+18557225420"> 1-855-RACK420 </a> <br> <a href="tel:+18557225420"> (1-855-722-5420) <a> </div> 
            <br>  <h5> Email: </h3> <a href="mailto:sales@rollingbenches.ca?subject=Rolling Benches Contact Page">sales@rollingbenches.ca </a>  </p>
            <img class="card-img-top; img-fluid" src="images/profile_picture.png" alt="#" style="width:100%;  max-height: 500px; padding-bottom: 10%">
            </div>
        </div>
      </div>
</div>


<?php
  include 'footer.php';
  ?>
