<?php
$conn = pg_connect("host=localhost dbname=Project2_postgresql user=postgres password=MBAmissah1231");
if( $conn ) {
echo "Connected to PostgreSQL successfully.<br />";
} else {
echo "Failed to connect to PostgreSQL:<br />";
}
?>
