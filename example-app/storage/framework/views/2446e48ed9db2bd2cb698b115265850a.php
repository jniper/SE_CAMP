<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My page & My folder</h1>
    <h1>
        <?php echo $val_a . ' ' . $val_b; ?>
    </h1>
    <form method="post" action="/my-routes">
        <?php echo csrf_field(); ?>
        <input type="text" name="myinput">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/SE_CAMP/example-app/resources/views/myfolder/mypage.blade.php ENDPATH**/ ?>