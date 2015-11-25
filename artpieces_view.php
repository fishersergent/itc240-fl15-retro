<?php
//artpieces_view.php shows details of a single customer // <h1><?=$pageID?
?>
<?php include 'includes/config.php';?>
<?php
//process query string here
if(isset($_GET['id']))
{//if there is data process data
    //cast the data to an interger for security purposes
    $id = (int)$_GET['id'];
}else{//else redirect to safe page
    header('Location:artpieces_list.php');
}

$sql = "select * from Artpieces where ArtpieceID = $id";

//mysql i connection, we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        $Title = stripslashes($row['Title']);
        $Artist = stripslashes($row['Artist']);
        $Year = stripslashes($row['Year']);
        $Medium = stripslashes($row['Medium']);
        $Description = stripslashes($row['Description']);
        $title = "Title Page For " . $Title;
        $pageID = $Title;
        $Feedback = '';//no feedback necessary
    }
    
}else{//inform there are no records
        $Feedback = '<p>This piece does not exist</p>';
    }

?>

<?php include 'includes/header.php';?>
<h1><?=$pageID;?></h1>
   
<?php

if($Feedback == '')
{//data exists show it
        echo '<p>';
        echo 'Title: <b>' . $Title . '</b> ';
        echo 'Artist: <b>' . $Artist . '</b> ';
        echo 'Year: <b>' . $Year . '</b> ';
        echo 'Medium: <b>' . $Medium . '</b> ';
        echo 'Description: <b>' . $Description . '</b> ';
        echo '<img src="uploads/art' . $id . '.jpg" />';
        echo '</p>';
    
}else{//warn user no data
    echo $Feedback;
}



echo '<p><a href="artpieces_list.php">Go Back</a></p>';

//release web server resources
@mysqli_free_result($result);
//close connection to mysql
@mysqli_close($iConn);

?>

<?php include 'includes/footer.php';?>