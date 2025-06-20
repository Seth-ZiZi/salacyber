<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $number=array ("one, two, three, four, five, six, seven, eight, nine, ten");
    foreach ($number as $values) {
        echo "$values <br>";
    }
    echo "<br>";

?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $num=array ("1,2,3,4,5,6,7,8,9,10");
        foreach ($num as $valuee) {
            echo "$valuee <br>";
        }
        echo "<br>";
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $color=array ("red","blue","green","yellow","purple","orange","pink","brown");
            foreach ($color as $valuees) {
                echo ("<p style=\"color:$valuees\">Seth</p>");

            }
            echo "<br>";
            print "<hr>";
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $arr=array (1,2,3,4,5,6);
            foreach ($arr as $valuees) {
                $index = array_search($valuees, $arr);
                echo "This is $index is $valuees <br>";

            }
            echo "<hr>";
    ?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $k=array ("Seand Kdab"=>"22","Dy bek"=>"11");
            foreach ($k as $p => $valuees) {
                echo "$p : $valuees <br>";

            }
            echo "<br>";
            print "<hr>";
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $arr=array (1,2,3,4,5,6);
            foreach ($arr as $s => $valuees) {
               print "key: $s => val: $valuees <br>";

            }
            echo "<br>";
    ?>
</body>
</html>