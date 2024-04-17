<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        session_unset();
        session_destroy();

        echo "All session variable are now removed, and the session is destroyed."
    ?>
</body>
</html>