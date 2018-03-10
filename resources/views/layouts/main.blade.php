<!DOCTYPE html>
<html>
<head>
    <title>NCF</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../css/custom/style.css"/>


</head>
<body>

<div class="row" id="header">
    <div class="col-md-1" id="Logo"></div>

    <div class="col-md-3" id="Title">
        <a href='/'>
            <h1 id="title-text">NCF Church</h1>
        </a>
    </div>
</div>


<div class="row" id="nav-bar">
    <ul id="nav-list">

        <a href='/believe'>
            <li class="col-md-2 nav-item"> What We Believe</li>
        </a>

        <a href='/activities'>
            <li class="col-md-2 nav-item">What we Do</li>
        </a>

        <a href='/whosWho'>
            <li class="col-md-2 nav-item">Who's Who</li>
        </a>

        <a href='/upComming'>
            <li class="col-md-2 nav-item">Up Coming</li>
        </a>

        <a href='/findUs'>
            <li class="col-md-2 nav-item">Find Us</li>
        </a>

    </ul>
</div>


@yield('content')

</div>
<script src="../js/Jquery/jquery-3.2.1.min.js"></script>
<script src="../js/custom.js"></script>

@yield('js')
</body>
</html>
