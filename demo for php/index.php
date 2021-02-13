<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php

include "home.html";

    $ismale=true;
    if($ismale==true){
        echo "z;xaszLdkx";
    }
    elseif($ismale != true){
        echo "aszdxskzdx";
    }
    else{
        echo "laskdalskd";
    }
    $index=1;
    while($index<=5)
    {
        $index++;
    }
    for($i =1;$i<=5;$i++)
    {
        echo "$i  <br>";
    }



    function cub($num){
        return $num* $num* $num;
    }
                    function demo_for_function()
                    {
                        echo "Hello user <br> ";
                    }

demo_for_function();
                    function demo_for_function_v2($name )
                    {
                        echo "Hello user <br> $name";
                    }

demo_for_function_v2("nader");
?>


    <?php


    $phrase = "this is mt in the phase <br> " ; //this a string

    echo strtoupper($phrase);
    echo strtolower($phrase);
    echo strlen($phrase);

    echo " <br>";
    echo " <br>";

    echo $phrase[2];
    //  echo str_replace()
    echo " <br>";
    echo " <br>";

    $gpa = 323.2;
    echo sqrt(144);
    echo min(454, 7578);

    $friends = array("weeewe","weweewe","ewewe",2323,false,true);

    $age = 22;
    $age++;
    $isMale = false;
    $charcterName = "nader";

    echo  "akjdksssssssjd is $charcterName";
    // for 
    echo "    <h1>adjsalkdjs  is $charcterName</h1> "

    ?>

    <br>

    <form action="index,php" method="get">

        NAME : <input type="text" name="username">
        <button type="submit">sub</button>

    </form>

    your name is <?php echo $va = $_GET["username"];
                    echo $va;

                    ?>
    <br>
    <form action="index,php" method="post">

        NAME : <input type="password" name="username">
        <button type="submit">sub</button>

    </form>

    your name is <?php echo $va = $_POST["username"];
                    echo $va;

                    ?>

</body>

</html>