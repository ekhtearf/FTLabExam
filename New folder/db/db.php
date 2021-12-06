<?php
class db
    {
    function OpenCon()
        {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "mydb";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        
        return $conn;
        }
    

   
    function GetFacultyByFname($conn,$table,$fname)
        {
        $result = $conn->query("SELECT * FROM  $table WHERE Name Like '%$fname%' OR Interest Like '%$fname%' OR Designation='$fname'");
        return $result;
        }

   
    function CloseCon($conn)
        {
        $conn -> close();
        }
    }
?>