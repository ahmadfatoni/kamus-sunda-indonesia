<?php
	/* Connect to the database */
	include 'lib.php';
	
	/* Query the database for searching */
	
	
	$tabel2 = "ref";
	$search= $_POST[searchterm];
	$search_query = "SELECT * 
			   FROM $tabel2
			   WHERE  (sunda like '%$search%') order by sunda";
	$search_result = mysql_query($search_query) OR die(mysql_error());
	//echo "$search_query";
	
	/* Display the search results */
	$counter = 1;
	print "<table width=\"100%\" cellspacing=\"10px\" cellpadding=0>";
	while($newArray = mysql_fetch_array($search_result)) {
		// Display alternate gray-white search result entries
		if($counter%2==1) {
			$class = "gray-box";
		}
		else {
			$class = "white-box";
		}
		$sunda = $newArray[sunda];
$ne=explode($search,$sunda);
$n1=$ne[0];
$n2=$ne[1];
$nameall=$n1."<b>".$search."</b>".$n2;

		$indo = $newArray[indonesia];


		print "<tr class=\"$class\">";
		print "<td valign=\"top\">Sunda:<font color='red'> $nameall</font><br>Indonesia:<font color='red'> $indo</font><br></td>";
		print "</tr>";
		$counter++;
	}
	print "</table>";

?>
