<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/multable.css')}}">
    <title>Thidarat | Workshop #Laravel - MULTIPLICATION TABLE</title>
</head>

<body>
    <h1>
        Multiplication Table of {{ $number }}
     </h1>

    <div class="table">
        <div class="multable">
        <?php


        if( isset( $number ) ) {
            for( $i=1; $i<=24; $i++ ) {
                echo "{$number} x {$i} = ".( $number * $i )."<br>";
            }
        }
        ?>
        </div>
    </div>


</body>
</html>
