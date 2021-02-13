<html>
   <body>
      <h1>Lottery Game 2</h1>
	<?php
	    $lastname = array ("Smith", "Kim", "Davis", "Miller", "Taylor");
	    $firstname = array("John ", "Anthony ", "Richard ", "Thomas ","Jessica");
	    $major = array("IST","CSE","EE","PHYS","ACCT");

	    if(sizeof($lastname) <> sizeof($firstname) || sizeof($lastname) <> sizeof($major) || sizeof($firstname) <>sizeof($major)){
		   echo"<h2><span style='color:red;'<b>sizes of firstname, lastname and major do not match</b></span></h2>";
	    	   exit;;
	    }
	    

	    $n = sizeof($lastname);	  
	    //$m = sizeof($firstname);
	    echo "<table border=1>";
	    echo "<tr>";
	    echo "<th>Lastname</th>";
	    echo "<th>Firstname</th>";
	    echo "<th>Major</th>";
	    echo "</tr>";
	    for ($i=0;$i<$n;$i++) {
	           echo "<tr>";
		   echo "<td>$lastname[$i]</td>";
		   echo "<td>$firstname[$i]</td>";
		   echo "<td>$major[$i]</td>";
	    }
	    echo "</table>";
	    echo "<br>";
	    $name = array("John Smith", "Anthony Kim", "Richard David", "Thomas Miller", "Jessica Taylor");
	    $i = 0;
	    foreach ($name as $names){
		    $names;
		    $i++;
	    }
            echo '<span style="color:red;"style="font-family:Arial;" style="font-size:200%;">Today\'s Winner is: ' .$names. '</span>';
	    

	?>
   </body>
</html>
