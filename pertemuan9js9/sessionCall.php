<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        echo "Favorite color is" .$_session["favcolor"]."<br>";
        echo "Favorite animal is" .$_session["favanimal"].".";
    ?>
</body>
</html>