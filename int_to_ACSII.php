<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>number to ASCII</title>
    <script>
        $(document).ready(function() {
            $("#str_source").keyup(function() {
                Number_to_ASCII();
            });

        });

        function Number_to_ASCII() {
            var str_source = $("#str_source").val();
            var str_arr = str_source.split(" ");
            var ASCII_result = "";

            $.each(str_arr, function(index, value) {
                ASCII_result += String.fromCharCode(value) + " ";
            });
            $("#ASCII_result").text(ASCII_result);
            // String.fromCharCode(value); // 'a'
        }
    </script>
</head>

<body>
    Number to ASCII
    <hr>
    <div>
        輸入數值
        <input type="text" name="str_source" id="str_source" style="width:95%">
    </div>
    <hr>
    ASCII Result:<BR>
    <label id="ASCII_result" name="ASCII_result"></label>
</body>

</html>