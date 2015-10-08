<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php 
    // Perform database query
    $query = "SELECT * ";
    $query .= "FROM subjects ";
    $query .= "WHERE visible = 1 ";
    $query .= "ORDER BY position ASC";
    $subject_set = mysqli_query($db, $query);
    confirm_query($subject_set);
?>

<?php include("../includes/layouts/header.php"); ?>

        <main>
            <p>Manage Content</p>
            <ul class="subjects">
                <?php 
                    while($subject = mysqli_fetch_assoc($subject_set)) {
                ?>        
                  <li>
                      <?php echo $subject["menu_name"] . " (" . $subject["id"] . ")"; ?>
                      <?php 
                            // Perform database query
                            $query = "SELECT * ";
                            $query .= "FROM pages ";
                            $query .= "WHERE visible = 1 ";
                            $query .= "AND subject_id = {$subject["id"]} ";
                            $query .= "ORDER BY position ASC";
                            $page_set = mysqli_query($db, $query);
                            confirm_query($page_set);
                        ?>
                      <ul class="pages">
                        <?php 
                            while($page = mysqli_fetch_assoc($page_set)) {
                        ?>  
                          <li>
                              <?php echo $page["menu_name"] ?>
                          </li>
                        <?php } ?>
                      </ul>
                  </li>
                <?php }; mysqli_free_result($page_set); ?>
                
            </ul>
        </main>
        
<?php 
    // Release returned data
    mysqli_free_result($subject_set);
?>

<?php include("../includes/layouts/footer.php"); ?>