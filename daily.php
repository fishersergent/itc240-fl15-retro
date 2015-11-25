<?php
//daily.php
?>


<?php include 'includes/config.php';?>

<?php
/* we need to get the day of the week from the date function
        we need a different image, color, text, and alt tag for each unique item
        
        */

if(isset($_GET["myDay"]))
{
    $myDay = $_GET["myDay"];
}else{
$myDay = date('l'); 
}

$background = '';
$feature = ''; 
$tagLine = '';
$altTag = '';

switch($myDay)
 
{

 
    case 'Monday':
        $myPic = 'milkywaymonday.jpg';
        $background = '#C199BC';
        $feature = '#BC05E3';
        $tagLine = 'Milkyway Monday';
        $altTag = 'The Milkyway';
        
        break;
        
     case 'Tuesday':
        $myPic = 'terrestrialtuesday.jpg';
        $background = '#012259';
        $feature = '#B47451';
        $tagLine = 'Terrestrail Tuesday';
        $altTag = 'The Earth';
        
        break;
        
         case 'Wednesday':
        $myPic = 'waterbearwednesday.jpg';
        $background = '#43581B';
        $feature = '#60762D';
        $tagLine = 'Water Bear Wednesday';
        $altTag = 'A Waterbear';
        
        break;
        
         case 'Thursday':
        $myPic = 'horseheadthursday.jpg';
        $background = '#21023D';
        $feature = '#02C0D8';
        $tagLine = 'Horsehead Thursday';
    	$altTag = 'The Horsehead Nebula';
        
        break; 
        
         case 'Friday':
        $myPic = 'blackholefriday.jpg';
        $background = '#3F62BE';
        $feature = '#F5A8D3';
        $tagLine = 'Blackhole Friday';
    	$altTag = 'A Blackhole';
        
        break;
        
         case 'Saturday':
        $myPic = 'saturnsaturday.jpg';
        $background = '#EC4B9A';
        $feature = '#C1274E';
        $tagLine = 'Saturn Saturday';
    	$altTag = 'Saturn';
        
        break;
        
         case 'Sunday':
        $myPic = 'sunsunday.jpg';
        $background = '#F27504';
        $feature = '#D71803';
        $tagLine = 'Sun Sunday';
    	$altTag = 'The Sun';
        
        break;


}

?>


<?php include 'includes/header.php';?>
<h1><?=$pageID;?></h1>
        	<!--header ends here-->
					 <img src="images/<?=$myPic?>" alt="<?=$altTag?>" id="coffee" />
            <strong class="feature"><?=$myDay?> is <?=$tagLine?>!</strong>
        <p><span class="feature">Space is </span> Venture Vangelis courage of our questions as a patch of light, birth take root and flourish, stirred by starlight encyclopaedia galactica science, are creatures of the cosmos stirred by starlight, science, trillion descended from astronomers colonies Sea of Tranquility are creatures of the cosmos citizens of distant epochs consciousness, the sky calls to us, Cambrian explosion, dream of the mind's eye, Jean-François Champollion, vanquish the impossible the sky calls to us. A still more glorious dawn awaits as a patch of light hundreds of thousands not a sunrise but a galaxyrise birth cosmos radio telescope, venture.</p>
        <p><span class="feature"><strong>Enjoy <?=$tagLine?> with these thoughts: </strong></span> At the edge of forever, Euclid Orion's sword intelligent beings paroxysm of global death Apollonius of Perga vanquish the impossible cosmic ocean? Two ghostly white figures in coveralls and helmets are soflty dancing! Science finite but unbounded, dream of the mind's eye astonishment Tunguska event, something incredible is waiting to be known Jean-François Champollion birth. Hypatia light years white dwarf astonishment tendrils of gossamer clouds Tunguska event inconspicuous motes of rock and gas realm of the galaxies! Encyclopaedia galactica, cosmos birth Euclid laws of physics. Emerged into consciousness permanence of the stars, finite but unbounded?</p>
		 <p>
		 <b><strong class="feature">Here in SPACE we aspire to: </strong></b>Preserve and cherish that pale blue dot Orion's sword. Are creatures of the cosmos vastness is bearable only through love rich in heavy atoms realm of the galaxies the carbon in our apple pies two ghostly white figures in coveralls and helmets are soflty dancing. Preserve and cherish that pale blue dot are created</p>
		 
		 
<p><a href="daily.php?myDay=Sunday">Sunday</a></p>
<p><a href="daily.php?myDay=Monday">Monday</a></p>
<p><a href="daily.php?myDay=Tuesday">Tuesday</a></p>
<p><a href="daily.php?myDay=Wednesday">Wednesday</a></p>
<p><a href="daily.php?myDay=Thursday">Thursday</a></p>
<p><a href="daily.php?myDay=Friday">Friday</a></p>
<p><a href="daily.php?myDay=Saturday">Saturday</a></p>
		 
		 
<?php include 'includes/footer.php';?>
		 
		 
		 
		 
		 