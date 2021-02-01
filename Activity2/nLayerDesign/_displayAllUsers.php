<?php

//$users is set in loginPassed page
if(is_null($users) || count($users) == 0){
    echo "<tr>";
    echo "<td colspan='3'>No Users</td>";
    echo "</tr>";
} else {
    for ($i=0; $i < count($users); $i++) {
        echo "<tr>";
        echo "<td>" . $users[$i][0] . "</td>";
        echo "<td>" . $users[$i][1] . "</td>";
        echo "<td>" . $users[$i][2] . "</td>";
        echo "</tr>";
    }
}
