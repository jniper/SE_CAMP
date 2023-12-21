<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1><?php echo "Hello World<br><br>"; ?></h1> 
        <?php echo "<h1>Hello World<br><br></h1>"; ?> 
        <?php $var_a = "SE CAMP"?>
        <?php echo $var_b = 'Hello World $var_a'?>
        <br>
        <?php echo $var_c = "Hello World $var_a"?>
        <br>
        <?php
        $var_c += $var_b = 1;
        $var_c = '1';
        echo $var_b = 1;
        echo "<br>";
        $var_c = $var_b = 1;
        $var_c = '1';
        if($var_b === $var_c){
            //true
            echo '$var_b === $var-c';
        }else if($var_b <> $var_c){
            //true
            echo '$var_b <> $var-c';
        }else{
            //false
            echo 'false';
        } ?>
        <br>
        <?php echo $var_c = 2; ?>
        <br>
        <?php echo $var_c ?>
        echo "<br>";
        switch($var_c){
            case 1:
                echo "1";
                break;
            default:
                echo "test";    
        }
        $arry = array(1,2,3);
        $arry1 = [1,2,3];
        $arry2[] = 1;
        $arry2[] = 2;
        $arry2[] = 3;
        $arry2[] = "Hello";
        $arry2['SE'] = "World";
        ?> <?php print_r($arry);?>
        <pre><?php print_r($arry);?></pre>
        <pre><?php print_r($arry1);?></pre>
        <pre><?php print_r($arry2);?></pre>
        
        <?php for($i = 0; $i < count($arry2); $i++){ ?>
            <h3><?php echo $arry2[$i]; ?></h3>
            <?php } ?>

            <?php foreach($arry2 as $key => $value){ ?>
            <h3><?php echo $arry2[$key]; ?>
                : <?php echo $key ?>
                : <?php echo $value; ?></h3>   
            <?php } ?>
            <?php
            function pre($value){
                echo "<pre>";
                print_r($value);
                echo "</pre>";
            }
    </body>
</html>

<!-- <html>
    <body>
        <h1>This is PHP <?php echo 'Hello World!'; ?></h1>
        <div>
            <p>1</p>
            <?php
            $var_a = 1;
            $var_a = "1$var_a";
            print_r($var_a);
            echo "<br>";
            #var_dump($var_a);
            echo $var_a . "2";
            $arry = array();
            $arry = [];
            $arry[] = 1;
            $arry[] = 2;
            $arry[0] = 3;
            print_r($arry);
            for($i=0; $i < count($arry); $i++)
            {
                echo "<h1>my h1</h1>";  
            ?>
            <p>2</p>
            <?php
            }
            ?>
            <p>3</p>
        </div>
    </body>
</html> -->