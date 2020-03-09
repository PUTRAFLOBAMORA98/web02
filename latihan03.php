<html>

<head>
    <title>WEB02</title>
</head>

<body>

    <?php

    use PhpParser\Node\Stmt\Echo_;

    function test()
    {
        static $a = 0;
        echo "Nilai $a :";
        echo $a;
        echo "<br>";
        $a++;
    }
    test();
    test();
    test();
    test();
    test();

    ?>
</body>


</html>