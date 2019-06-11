<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ace In The Hole</title>
        
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
       <p>Thank you for getting in touch! One of our staff will be in contact with you soon:<br>
           Name: <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UTF-8'); ?><br>
           Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8'); ?><br>
           Participant: <?php echo htmlspecialchars($myParticipant, ENT_QUOTES, 'UTF-8'); ?><br>
           Question: <?php echo htmlspecialchars($question, ENT_QUOTES, 'UTF-8'); ?><br>
       </p>              
                
            </main>
        
        <div id="container">
             
<section id="footer" class="section group"> 
    
<?php include '../includes/footer.inc.html.php'; ?> 
        
    </section>
        
<section id="bottom_footer" class="section group">
        
    &copy;<script>document.write(new Date().getFullYear());</script> Ace In The Hole Multisport Events
    
        </section>
            
             </div>

<!-- jQuery library DO NOT DELETE -->    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
<!-- script folder needs to be linked DO NOT DELETE -->    
    
 <script src="../scripts/ace.js"></script> 
            
    </body>
</html>
