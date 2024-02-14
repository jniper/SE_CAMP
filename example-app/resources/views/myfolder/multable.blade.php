<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/multable.css') }}">
    <title>Thidarat | Workshop #Laravel - MULTIPLICATION TABLE</title>
</head>

<body>
    <div>
        <h1 id="header">Multiplication Table</h1>
    </div>
    <div style="text-align: center">
        <input type="number" id="multiply" name='multiply'>
        <button type="submit" id="btnsubmit">แสดงผลสูตรคูณ</button>
    </div>

    <div class="table" id="table" style="display: none">
        <div class="multable" id="multable">

        </div>
    </div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    const doc = $("#table");

    const mul = $("#multable");
    $("#btnsubmit").click(function() {
        const value = $("#multiply").val()
        console.log(value);
        let result = ""
        for(let i = 1; i <=24; i++){
            result += `${value} * ${i} = ${value * i} <br>`
        }
        console.log(result);
        doc.css("display", "flex");
        mul.html(result);
        $("#btnsubmit").hide();
        $("#multiply").hide();
        $("#header").text(`Multiplication Table of ${value}`)
    });
</script>


</html>
