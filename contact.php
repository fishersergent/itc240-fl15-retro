<?php
//contact.php
?>

<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
        	<!--header ends here-->
<?php 
if(isset($_POST['Submit']))
{//if data, process it
    /*
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
     */
    $to = 'efishe03@seattlecentral.edu';
    $message = process_post();
    $subject = 'Contact form from retro site';
    
    safeEmail($to, $subject, $message);
    
}else{//no data, show form
        echo'
        <form method="post" action="">
        Name: <input type="text" name="Name" required="required" /></br>
        Email: <input type="email" name="Email" required="required" /></br>
        Comments: <textarea name="Comments"></textarea> </br>
        <input type="submit" value="Send" name="Submit" />
        </from>
        ';
        }
?>
    
            <!--footer starts here-->
<?php include 'includes/footer.php';?>