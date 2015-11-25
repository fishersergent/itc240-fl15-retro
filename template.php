<?php
//index.php
?>

<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<h1><?=$pageID;?></h1>
        	<!--header ends here-->
				<h2>How Do You Like Them Burgers?!</h2>
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
        Age: <p><input type="radio" name="age[]" id="age" value="age">0-20</p>
        <p><input type="radio" name="age[]" id="age" value="age">21-35</p>
        <p><input type="radio" name="age[]" id="age" value="age">36-50</p>
        <p><input type="radio" name="age[]" id="age" value="age">51-75</p>
        <p><input type="radio" name="age[]" id="age" value="age">75+</p></br>
        
        
        Favorite Toppings?: 
        <p><input type="checkbox" name="source[]" id="lettuce" value="letttuce" >Lettuce </p>
        <p><input type="checkbox" name="source[]" id="mustard" value="mustard" >Mustard</p>
        <p><input type="checkbox" name="source[]" id="bacon" value="bacon" >Bacon </p>
        <p><input type="checkbox" name="source[]" id="other" value="other" >Other </p> </br>
        
        Comments: <textarea name="Comments"></textarea> </br>
        
        <input type="submit" value="Send" name="Submit" />
        </from>
        ';
        }
?>
            <!--footer starts here-->
<?php include 'includes/footer.php';?>