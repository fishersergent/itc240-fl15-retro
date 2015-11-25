<?php
//artpieces_list.php shows a list of customer data
// <h1><?=$pageID?
?>

<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<h1><?=$pageID;?></h1>
   
<?php
$sql = "select * from Artpieces";

//mysql i connection, we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';
    
         echo '<a href="artpieces_view.php?id=' . $row['ArtpieceID'] . '">' . $row['Title'] . '</a>';
        echo 'Artist: <b>' . $row['Artist'] . '</b> ';
        echo 'Year: <b>' . $row['Year'] . '</b> ';
        echo 'Medium: <b>' . $row['Medium'] . '</b> ';
        /*echo 'Description: <b>' . $row['Description'] . '</b> ';*/

        echo '</p>';

    }
}
//release web server resources
@mysqli_free_result($result);
//close connection to mysql
@mysqli_close($iConn);

?>

<?php include 'includes/footer.php';?>