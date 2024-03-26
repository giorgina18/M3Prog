    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>array</title>
    </head>

    <body>

        <?php

        $namen = ["margarita", "sandro", "elisa", "ruben", "daan"];

       
        // array / echo // 
        echo $namen[0];
        echo "<br>";
        echo $namen[1];
        echo "<br>";
        echo $namen[2];
        echo "<br>";
        echo $namen[3];
        echo "<br>";
        array_push($namen, "naam5", "naam6");
        echo "<br>";
        print_r($namen);
        echo "<br>";
        echo $namen[4];
        echo "<br>";
        array_pop($namen);
        echo "<br>";
        echo count($namen);
        sort($namen);
        $namen[6] = "banjo";
        echo "<br>";
        echo $namen[6];
        print_r($namen);

        // implode //

        $namen_tekst = implode("<br>", $namen);

        echo $namen_tekst;

        // explode //
        $namen2_tekst = explode("<br>", $namen_tekst);

        print_r($namen2_tekst);
        ?>


    </body>

    </html>