<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!--css grid helpers-->
   <link href="../css/reset.css" rel="stylesheet" type="text/css">
   <link href="../css/helper.css" rel="stylesheet" type="text/css">
   <link href="../css/grid.css" rel="stylesheet" type="text/css">    
   <link href="../css/style.css" rel="stylesheet" type="text/css">
   <!--end of css grid helpers-->    
 
    <title>Ace In The Hole Multisport Events</title>
       
</head>
<body>
    
<?php include '../includes/header.inc.html.php'; ?>
<?php include '../includes/nav.inc.html.php'; ?>
    
<section>
    
    <img src="../images/triathlon_bike.jpg" alt="Triathlon Bike" title="Triathlon Bike" style="width: 100%">
    
    </section>    
    
<main>
    
   <section class="section group">

   <article class="col span_9_of_12">
 
 <h2>Registration Form</h2><br>
       
 <div id="source">Required fields are marked with an asterisk (*).</div><br>   
       <div id="registration">  
      
      <form method="post" action=" ">

       <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
      
 <label for="myfname">*First Name:</label>
   <input type="text" name="myfname" id="myfname" required><br>
   <label for="mylname">*Last Name:</label>
   <input type="text" name="mylname" id="mylname" required><br>
   <label for="myemail">*E-mail:</label>
   <input type="email" name="myemail" id="myemail" required><br><br>
    
    <label for="age">Are you over 16? (must be 16+ to participate in main athletic events)</label><br> 
          <input type="radio" name="age" value="yes">Yes
          <input type="radio" name="age" value="no">No<br><br>
    <label for="years">*Age</label>
          <input type="text" name="years" id="years" required><br><br>
            
   <label for="gender">Gender</label><br>   
     <select name="gender" id="gender">
       <option value="Female">Female</option>
       <option value="Male">Male</option>
       <option value="Non-Binary">Non-Binary</option>
    </select><br><br>
             
   <fieldset>
       <h3>Emergency Contact Information:</h3>
       <label for="myecname">*Emergency Contact Name</label>
       <input type="text" name="myecname" id="myecname" placeholder="First Last" required><br>
       <label for="myecnumber">*Emergency Contact Phone Number</label>
       <input type="tel" name="myecnumber" id="myecnumber" placeholder="(xxx) xxx-xxxxx" required>
   </fieldset><br><br>
               
          <h3>Register for Event:</h3>
       <label for="Saturday">Saturday:</label>
           <select name="Saturday" id="Saturday">
           <option value="select">Select</option>
           <option value="Long Triathlon">Long Course Triathlon-$240</option>
           <option value="Olympic Triathlon">Olympic Course Triathlon-$110</option>
           <option value="10k">10K-$50</option>
           <option value="Half Marathon">Half Marathon-$75</option>
           <option value="No Event">No Event</option>       
       </select><br><br>
          
           <label for="Sunday">Sunday:</label>
               <select name="Sunday" id="Sunday">
               <option value="Select">Select</option>
               <option value="Sprint Triathlon">Sprint Triathlon-$90</option>
               <option value="Try-a-Tri">Try a Tri-$65</option>
               <option value="Splash n' Dash">Splash n'Dash</option>
               <option value="No Event">No Event</option>       
           </select><br><br>
          
    <label for="shirtsize">Tech-shirt Size (universal):</label>
           <select name="shirtsize" id="shirtsize"><br>
               <option value="4x">4x</option>
               <option value="3x">3x</option>
               <option value="2x">2x</option>
               <option value="x-large">x-large</option>
               <option value="large">large</option>
               <option value="medium">medium</option>
               <option value="small">small</option>
               <option value="x-small">x-small</option>
           </select>           
          <br> 
          <br>
                              
      <input id="mysubmit" type="submit" value="Submit">
   </form>
        
    </div>     
 
    </article>
        
   <section id="sidebar" class="col span_3_of_12">
        
      <img src="../images/triathlon_copy.jpg" alt="" title="">
       
       <h3>REGISTRATION</h3>
       <ul>
       <li>Long Course Triathlon $240</li><br>
       <li>Olympic Triathlon $110</li><br>
       <li>10K $50</li><br>
       <li>Half Marathon $75</li><br>
       <li>Spring Triathlon $90</li><br>
       <li>Try-a-Tri $65</li><br>     
       </ul>
       
    <hr>   
       
       <h3>Cost Includes:</h3>
       <ul>
       <li>Food & Beer</li><br> 
       <li>Access to the weekend's live entertainment & Fitness Expo</li><br>
       <li>Commemorative Finisher medal</li><br>
       <li>Accurate Chip Timing for competitive races</li><br>
       <li>Ace in the Hole Multisport Weekend Tech Shirt</li><br>
       <li>Post-event party & entertainment</li>
       </ul>
       
       <p>* Beer is only available for adults ages 21+</p>
       <p>** NOTE: Tech Shirts guaranteed to pre-registered participants only</p>
       
<hr>
        <h3>STARTING TIMES:</h3>
       <h4>Saturday</h4> 
       <ul>
       <li>Long Course Triathlon 7:00 AM</li><br>
       <li>Olympic Triathlon 7:30 AM</li><br>
       <li>10K 7:15 AM</li><br>
       <li>Half Marathon 7:15 AM</li><br><br>
           <h4>Sunday</h4>
       <li>Spring Triathlon 8:00 AM</li><br>
       <li>Try-a-Tri 8:20 AM</li><br>
       <li>Splash n Dash 12:00 PM</li><br>       
       </ul>
       
           </section>
               </section>    
</main>  
    
<section id="footer" class="section group"> 
    
<?php include '../includes/footer.inc.html.php'; ?> 
        
    </section>
    
<section id="bottom_footer" class="section group">
        
    &copy;<script>document.write(new Date().getFullYear());</script> Ace In The Hole Multisport Events
   
        </section>
    
<!-- jQuery library DO NOT DELETE -->    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
<!-- script folder needs to be linked DO NOT DELETE -->    
    
 <script src="../scripts/ace.js"></script>     
    
</body>
</html>