<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>

    #time {
        font-family: 'Mono';
        font-size: 10vw;
        text-align: center;
        text-shadow: 0px 0px 20px;
    }

    #date {
        font-family: 'Eczar', serif;
        font-size: 5vmin;
        text-align: center;
        text-shadow: 0px 0px 20px blue;
    }

    #clock-out-button {
    }
    </style>
</head>

<body id="body" class="container-fluid">
    <div class="card-header text-center">
        <h1>Time Tracker</h1>
    </div>
    <br>
    @yield('content')
</body>

</html>