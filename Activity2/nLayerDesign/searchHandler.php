<?php
// Import UserBusinessService which
// then interacts with UserDataAccess
// i guess we dont want to directly access out data, but instead use another class to do so.

require_once "UserBusinessService.php";

$ubs_instance = new UserBusinessService();

$searchPattern = $_POST["searchQuery"];
$users = $ubs_instance->searchByFirstName($searchPattern);


echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";

echo "</tr>";
require_once "_displayAllUsers.php";
echo "</table>";

echo "<a href='search.html'>Back</a>";
