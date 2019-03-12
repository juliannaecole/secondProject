<!DOCTYPE html>
<html lang="en">
<head>
    <title>Music Review</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/stylesheets/main.css"/>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-white navbar-light" style="padding-top: 10px;padding-bottom: 10px">
    <a class="navbar-brand text-body" style="font-family: 'Poppins', sans-serif;" href="#">Our Album Review</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link px-2" href="https://github.com/ma867"
                   style="color:black;font-family: 'Poppins', sans-serif;">Melissa's <span class="fa fa-github"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2" href="https://github.com/juliannaecole"
                   style="color:black; font-family: 'Poppins', sans-serif;">Julianna's <span
                            class="fa fa-github"></span></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm" style="font-family: 'Poppins', sans-serif;">
            <br>
            <h1>Welcome to our home page!</h1>
            </br>
            </br>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm ">
            <?php
            include('../src/File.php');
            $records = File::readCSVtoArray("../data/data.csv", 'Album');
            $table = File::printArrayAsTable($records);
            echo $table;
            ?>
        </div>
    </div>
</div>
</body>
</html>