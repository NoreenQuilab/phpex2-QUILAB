<?php
    include 'functions.php';

    // 1Triangle edge
    if(isset($_GET['triangle'])){
        // inputed sides in triangle
        $side1 = intval($_GET['side1']);
        $side2 = intval($_GET['side2']);

        echo "<h1> Maximum: " . getLastEdgeMaxRange($side1, $side2) . "</h1>";
    }

    // 2Binary
    if(isset($_GET['count'])){
        // count
        $num = intval($_GET['num']);

        echo "<h1> Binary Count: " . countAllOnes($num) . "</h1>";
    }

    // 3Combination with separator
    if(isset($_GET['join'])){
        // Get inputed parts
        $part1 = $_GET['part1'];
        $part2 = $_GET['part2'];

        echo "<h1> Output: " . joinParts($part1, $part2) . "</h1>";
    }

    // 4Check number if it is a sastry number
    if(isset($_GET['sastry'])){
        // input and converted
        $num = intval($_GET['num']);

        echo "<h1> Sastry Number is: " . isSastry($num) . "</h1>";
    }
?>