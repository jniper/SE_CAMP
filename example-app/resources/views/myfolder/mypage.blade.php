<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/multable.css')}}">
    <title>Thidarat | Workshop #Laravel - MULTIPLICATION TABLE</title>
</head>
<body>
    <h1>Multiple Table</h1>
    <div class="formmult">
    <form method="post" action="/my-multable">
        @csrf
        <input type="text" name="multiply">
        <button type="submit">แสดงผลสูตรคูณ</button>
    </form>
    </div>
</body>
</html>
