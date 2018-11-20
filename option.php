<?php

$conn = new mysqli('localhost', 'username', 'password', 'database') 
or die ('Cannot connect to db');

    $result = $conn->query("select id, Artifacts from table");
    
    echo "<html>";
    echo "<body>";
    echo "<select Artifacts='id'>";

    while ($row = $result->fetch_assoc()) {

                  unset($id, $Artifacts);
                  $id = $row['id'];
                  $Artifacts = $row['Artifacts']; 
                  echo '<option value="'.$id.'">'.$Artifacts.'</option>';
                 
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?>
