<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <h3 class="mt-5 text-center">Upper And Lower Case</h3>
        <form>
            <label>Enter Text</label>
            <textarea class="form-control" id="text1" rows="3"></textarea>
            <p id="one"></p>
            <button type="button" name="submit" class="btn btn-primary mt-3" id="btn1" >Upper Case</button>
            <button type="button" name="submit1" class="btn btn-primary mt-3" id="btn2">Lower Case</button>
        </form>
    </div>

    <script>
        $(document).ready(function(){
            $("#btn1").click(function() {
            var  m1 = $("#text1").val();
           let m5 =  m1.toUpperCase();
                $.ajax({
                    type: "POST",
                    url: "index.php",
                    data: {
                        'm1': m1
                    },
                    success: function(data) {
                      
                        $('#one').html(m5);
                    }
                });
             
        });
          
        $("#btn2").click(function() {
            var  m2 = $("#text1").val();
             let m6 =  m2.toLowerCase();
                $.ajax({
                    type: "POST",
                    url: "index.php",
                    data: {
                        'm2': m2
                    },
                    success: function(data) {
                        $('#one').html(m6);
                    }
                });
             
        });
    });
    </script>
</body>

</html>