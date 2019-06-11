<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ace In The Hole Multisport Event</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--css grid helpers-->
   <link href="../css/reset.css" rel="stylesheet" type="text/css">
   <link href="../css/helper.css" rel="stylesheet" type="text/css">
   <link href="../css/grid.css" rel="stylesheet" type="text/css">    
   <link href="../css/style.css" rel="stylesheet" type="text/css">
   <!--end of css grid helpers-->
      
    </head>
    <body>
            <?php include '../includes/header.inc.html.php'; ?>
            <?php include '../includes/nav.inc.html.php'; ?>
            <main>
                <h2>Thank you!</h2>
                
   <p>Our records show you submitted the following:<br>   
       <p>Thank you for Registering for the event!<br>
           First Name: <?php echo htmlspecialchars($myfname, ENT_QUOTES, 'UTF-8'); ?><br>
           Last Name: <?php echo htmlspecialchars($mylname, ENT_QUOTES, 'UTF-8'); ?><br>
           Email: <?php echo htmlspecialchars($myemail, ENT_QUOTES, 'UTF-8'); ?><br>
           AGE: <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?><br>
           Your Age: <?php echo htmlspecialchars($years, ENT_QUOTES, 'UTF-8'); ?><br>
           Gender: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br>
           Emergency Contact Name: <?php echo htmlspecialchars($myecname, ENT_QUOTES, 'UTF-8'); ?><br>
           Emergency Phone Number: <?php echo htmlspecialchars($myecnumber, ENT_QUOTES, 'UTF-8'); ?><br>
           Saturday: <?php echo htmlspecialchars($Saturday, ENT_QUOTES, 'UTF-8'); ?><br>
           Sunday: <?php echo htmlspecialchars($Sunday, ENT_QUOTES, 'UTF-8'); ?><br>
           Shirt Size: <?php echo htmlspecialchars($shirtsize, ENT_QUOTES, 'UTF-8'); ?><br><br>
       </p>
        <p>NOTE: Tech shirts guaranteed to pre-registered participants only.</p>
            <h3>Packet Pick Up</h3>
                <p>All packet pick up will occur at Why Worry Racingm 123 NW Everett, Portland, OR.</p>
                <p>Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>
                
                
                
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
