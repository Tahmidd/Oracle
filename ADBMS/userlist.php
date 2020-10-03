<?php


$conn = oci_connect("system", "sys", "localhost/XE");

$query = 'select * from customer';
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);


print '<legend><b>User List</b></legend><br>';

print '<table border="1">';
print 'All the customer information: ';
print'<tr>
				<td>
				User Id
				</td>
				<td>
				Username
				</td>
				<td>
				Package
				</td>
				<td>
				Location
				</td>
			
			</tr>';


while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)) {
   
  
   print '<tr>';
   foreach ($row as $item) {
       print '<td>'.     ($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp')    .'</td>';
   }
   print '</tr>';

}
print '</table>';
print'<td><a href="adminhome.php">GO BACK </a></td>';

?>