<?php
  include 'header.php';
  ?>
 
    



<div class="card-deck" style="padding-left: 8%; padding-right: 8%; padding-bottom: 3%">
  <div class="card" style="background: black"  >
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
            <label for="message"> Questions: </label>
            <textarea name="message" class="form-control" placeholder="Message" style="height: 200px; max-width: 500px" required>
            </textarea>
            <br>
            <button type="submit" name="submit" class="form-control submit" style="" >Send</button>
        </form>
    </div>
          </div>
      </div>
    </div>
    <div class="card" style="background: black" >
        <div class="card-body text-center " style="color: white">    
          <p class="card-text" style="padding-bottom: 10%"> <h2 style="color: white;" >Rolling Benches Canada</h2>
            <div style=" color: white; padding: 5%">
            <h4> Call us Today! </h4> <br>
            <h5>Phone: </h5> <div style=""> 1-855-RACK420 <br> (1-855-722-5420) </div> <br>  <h5> Email: </h3> sales@rollingbenches.ca </p>
 
            </div>
        </div>
      </div>
</div>
