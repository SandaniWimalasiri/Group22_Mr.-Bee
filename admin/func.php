<?php
        function verify_query($resultset) {

            global $connection;

            if (!$resultset) {
                die("Database query failed: " . mysqli_error($connection));
            }

        }
?>