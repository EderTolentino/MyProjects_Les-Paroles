
<?php require_once("../connection/connection.php"); ?>

<?php


// General settings
    header('Acces-Control-Allow-Origin:*');

// Research in the database 
$selection        = ' SELECT * FROM songs_database ';
$data_music  = mysqli_query($conecta, $selection);



// Create an output array
$musics    = array();

// Check the object result to include each line inside the array
while($line = mysqli_fetch_object($data_music)) {
    $musics[] = $line;
}

// Transform the output array in a json file
echo json_encode($musics);

// Close connection
mysqli_close($conecta);    
    
    
?>



