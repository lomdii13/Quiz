<html>
<head>
<style>
body {
  background-color: linear-gradient(-90deg, red, yellow);
  color: black;
  text-shadow: 2px 2px 4px #000000;
}
</style>
</head>
<body>
<?php

session_start();

$conn = new mysqli('localhost','root','','register');

$ss = "select * from stable";
$resultt = mysqli_query($conn , $ss);
if ($resultt==true)
{   echo "<p align='center'><b><font size='4pt'>Student Details....</font></b></p>";
    echo "<p align='center'><b><font size='4pt'><table cellspacing=10 cellpading=10><tr><th>NAME</th>\x0B\x0B\x0B<th>AGE</th>\x0B\x0B\x0B<th>ROLLNO</th>\x0B\x0B\x0B<th>MARKS (Ist)</th>\x0B\x0B\x0B<th>MARKS (IInd)</th></tr></font></b>";
    while($row = $resultt->fetch_assoc())
    {   echo "<tr><td>".$row["name"]." </td>\t\t\t<td>".$row["age"]."</td>\t\t\t<td>".$row["rollno"]."</td>\t\t\t<td>".$row["m1"]."</td>\t\t\t<td>".$row["m2"]."</td></tr>";
    }
     echo "</table></p>";
}

?>
</body>
</html>