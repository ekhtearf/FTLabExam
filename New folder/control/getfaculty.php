<?php
include('../db/db.php');

$fname = $_POST['fname'];

if($fname!="")
{
$connection = new db();
$conobj=$connection->OpenCon();
$MyQuery=$connection->GetFacultyByFname($conobj,"faculty",$fname );

if ($MyQuery->num_rows > 0) {
    echo "<p>Search Results for '$fname'</p><table><tr><th>ID</th><th>Name</th><th>Department</th><th>Interest</th><th>Designation</th></tr>";
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
      echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Interest"]."</td><td>".$row["Designation"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
else{
  echo "please enter something";
}