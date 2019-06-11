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
    
<img src="../images/kids_dash01_copy.jpg" alt="Kids Dash" title="Kids Dash" style="width: 100%">    
    
    </section>
            
<main>
    
    <h2>Contact Us</h2>
    
   <section class="section group">

   <article class="col span_9_of_12">
 
      <form method="post" action=" ">

       <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
      
 <label for="myName">Name:</label>
   <input type="text" name="myName" id="myName" required><br>
   <label for="myEmail">Email:</label>
   <input type="text" name="myEmail" id="myEmail" required><br><br>
          
<label for="myParticipant">Role:</label>         
          
<select name="myParticipant" id="myParticipant">
    
   <option value="athlete">Athlete</option>
   <option value="volunteer">Volunteer</option>
   <option value="interested">Interested Party</option>
</select><br><br><br>
          
<label for="question">Question:</label><br>
<textarea name="question" id="question" rows="10" cols="50"></textarea><br>         
   
      <input id="mysubmit" type="submit" value="Submit">
   </form>
       
    </article>
        
   <section id="sidebar" class="col span_3_of_12">
        
      <img src="../images/triathlon_copy.jpg" alt="" title="">
       
<h3>Packet Pick Up</h3>
       <li>All packet pick-ups will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</li> 
       
<hr>       
         
<img src="../images/bike_03.jpg" alt="" title="">
       
<hr>     
       
<img src="../images/marathon01.jpg" alt="" title="">       
                
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