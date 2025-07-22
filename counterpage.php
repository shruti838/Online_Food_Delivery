<?php
	include "homeheader.php";
?>
<?php

   $cn = mysqli_connect("localhost","root","","ofdproject");
    if ($cn->connect_error) {
        die("Connection failed: " . $cn->connect_error);
    } 

    $sql = "UPDATE counter SET visits = visits+1 WHERE id = 1";
    $cn->query($sql);

?>
<?php
		$sql = "SELECT visits FROM counter WHERE id = 1";
    $result = $cn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["visits"];
        }
    } else {
        echo "no results";
    }
	?> Visits: <?php print $visits; 
	
?>

<?php
	include "homefooter.php";
?>