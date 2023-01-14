<?php
$link = mysqli_connect("localhost", "root", "root", "coursework");
$result = mysqli_query($link, "SHOW TABLES");

while ($row = $result->fetch_assoc()) {
    if(array_search('english', $row)) {
        $db = $row;
    }
}
print_r($db);

?>