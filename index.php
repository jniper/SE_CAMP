<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Thidarat | Workshop #PHP&CSS - MULTIPLICATION TABLE</title>
</head>

<body>

    <h1>
        Multiplication Table 
         <?php if(isset($_POST['number'])) {
            $_POST['number'] = sprintf("%d", $_POST['number']);
            echo 'of ' . $_POST['number'];
         }
         
     ?>
     </h1>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
        <input type="number" name="number">
        <input type="submit" value="แสดงแม่สูตรคูณ">
    </form>
    <div class="table">
        <div class="multable">
        <?php
        if(isset( $_POST['number'] )) $number = $_POST['number'];
        
        if( isset( $number ) ) {
            for( $i=1; $i<=24; $i++ ) {
                echo "{$number} x {$i} = ".( $number * $i )."<br>";
            }
        }
        ?>
        </div>
    </div>
    

</body>
<style>
    :root{
        background-color: #FFEAD9;   
    }
    h1 {
        font-family: 'Mali';
        color: #5D8D73;
        text-align: center;
    }
    .table{
        text-align: center;
        width: 250px;
        height: 350px;
        background-color: #F68B71;
        align-items: center; 
        display: flex;
        justify-content: center;
        margin: auto;
    }
    .multable {
        font-family: 'Mali';
        text-align: center;
        width: 200px;
        height: 300px;
        overflow: auto;
        background-color: #FEC4A2; 
    }
    
</style>

</html>