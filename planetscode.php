<?php
$servername = "localhost";
$username = "chinaneal1";
$password = "2Kc313904";
$dbname = "china";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM planets";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
        echo '<tr>';
        
		echo '<td>';
        echo '<img src="images/'.strtolower($row["planetname"]).'.jpg" style="width:200px;">';
		echo '</td>';
		
		echo '<td>';
        echo $row["planetname"];
        echo '</td>';
        
        echo '<td>';
        
        if($row["googlelink"] == '') {
        echo '[n/a]';
        } else {
        echo '<a href="http://'.$row["googlelink"].'" target="_blank"  class="btn btn-info">View</a>';
        }
        
        
		echo '</td>';
        
		echo '<td>';
        echo $row["distancefromsun"];
		echo '</td>';
        
        
        echo '<td>';
        echo $row["radius"];
		echo '</td>';
        
        echo '<td>';
        echo $row["mass"];
        echo '</td>';
        
        echo '<td>';
        echo $row["lengthofday"];
        echo '</td>';
        
        echo '<td>';
        echo $row["orbital"];
        echo '</td>';
        
        echo '<td>';
        echo $row["description"];
		echo '</td>';
        
        echo '</tr>';
        
        
        
        
    }
} else {
    echo "0 results";
}
$conn->close();
?>
