<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .m{
            text-align: center;
        }
    </style>
</head>
<body>

   <div class="container">
    <h1 class="m" >Send Mail By PHP</h1>
   <form action="send.php" method="post">
        Email: <input class="form-control" type="email" name="email" id=""> <br> <br>
        Subject: <input class="form-control" type="text" name="subject" id=""> <br> <br>
        Message: <input class="form-control" type="text" name="message" id=""> <br> <br>
       <button class="btn btn-success" type="submit" name="send"> Send </button>
    </form>
   </div>

    
</body>
</html>