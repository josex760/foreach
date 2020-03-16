<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html>
<body>

<?php
function setHeight(int $minheight = 150) {
    echo "The height is : $minheight <br>";
}

setHeight(550);
setHeight();
setHeight(175);
setHeight(90);
?>

</body>
</html>
