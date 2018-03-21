<!DOCTYPE html>
<html>
<head>
    <title>NCF</title>

    <base href="http://www.ncfchurch.org.uk/" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="newcastle under lyme, church stoke, church newcastle, church staffs, god stoke, aog, pentecostal, christian, hartshill, churches in stoke, churches stoke, church stoke on trent, churches in stoke on trent, churches stoke on trent, church newcastle under lyme, churches in newcastle under lyme, churches newcastle under lyme, assemblies of god, assemblies of god movement" />
    <meta name="description" content="Newcastle Christian Fellowship, NCF, is a lively church on the boundary of newcastle and stoke" />


    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../css/custom/style.css"/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-54314943-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-54314943-2');
    </script>
</head>
<body>
<div id="site-notice" class="col-md-12">This site is still under development. thank you for your patience</div>


<div class="row" id="header">
    <div class="col-md-1" id="Logo"><img src="../images/logo.png" alt=""></div>

    <div class="col-md-6" id="Title">
        <a href='/'>
            <h1 id="title-text">Newcastle Christian Fellowship</h1>
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
