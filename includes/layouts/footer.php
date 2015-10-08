
        <footer>
            <small>Copyright 20xx, Fawlty Towers.</small>
        </footer>
    </body>
</html>

<?php 
    // Close the database connection
    if (isset($db)) {
        mysqli_close($db);
    }
?>