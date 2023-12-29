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
        <input type="number" style="width:150px; height:25px; margin-right: 1.5%; text-align:center;" name="number" placeholder="enter the number"> 
        <button type="submit" style="width:125px; height:25px;">แสดงแม่สูตรคูณ</button>
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
        font-style: bold;
        color: #5D8D73;
        text-align: center;
        margin-top: 50px;
        margin-bottom: 50px;
    }
    .table{
        text-align: center;
        min-width: 200px;
        max-width: 600px;
        width: fit-content;
        height: 350px;
        background-color: #F68B71;
        align-items: center; 
        display: flex;
        justify-content: center;
        margin: auto;
        margin-top: 50px;
        border-radius: 0.5rem;
    }
    .multable {
        font-family: 'Mali';
        text-align: center;
        min-width: 150px;
        height: 300px;
        overflow: auto;
        background-color: #FEC4A2;
        border-radius: 0.5rem;
        margin: 20px;
    }  
    button{
        border-radius: 0.25rem;
        border-style: solid;
        border-color: #5D8D73;
        background-color:#A1D0BE;
        color:black;
    }
</style>

</html>