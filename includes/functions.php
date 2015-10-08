<?php

/* 
* Check the database query result and throw an error if not successful.
*/
function confirm_query($result_set) {
    if (!$result_set) {
        die("Database query failed.");
    }
}

?>