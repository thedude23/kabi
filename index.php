<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body id="back-color"> <!-- BACKGROUND-COLOR -->

    <div class="container">
        <!-- LOGO -->
        <br>
        <div class="header">
            <img src="pics/logo@2x.png" id="logo">
        </div>
        <br>

        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-default" id="nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <span class="navbar-brand">Kabi test</span> -->
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a href="index.php" id="nav-b"><i class="fas fa-chalkboard"></i> Domov</a></li>
                    <li><a href="#" id="nav-b">O nas</a></li>
                    <li><a href="#" id="nav-b">Kontakt</a></li>
                    <li><a href="#" id="nav-b">Pišite nam</a></li>
                    <li><a href="#" id="nav-b"><b>IZDELKI</b></a></li>
                </ul>
            </div>
        </nav>

        <!-- ITEMS -->
        <!-- 1 -->
        <div>
            <div style="float: left;" id="box">
                <img class="card-img-top" src="pics/img@2x.png" id="pic">
                <div class="card-body">
                    <div class="card-title"><h4 id="title">IZDELEK 1</h4></div>
                    <div class="card-title"><h5 id="subtitle">Podnaslov izdelka 1</h5></div>
                    <div class="card-text>"><p id="body">Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.
                                            <br><br>
                                            Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                    </div>
                    <br>
                    <div id="btn-1">
                        <a href="item-1.php" class="btn" id="btn-out"><i class="fas fa-plus"></i>&nbsp; <b>VEČ O IZDELKU</b></a>
                    </div>
                </div>
            </div>

            <!-- 2 -->
            <div style="float: left;" id="box">
                <img class="card-img-top" src="pics/img@2x.png" id="pic">
                <div class="card-body">
                    <div class="card-title"><h4 id="title">IZDELEK 2</h4></div>
                    <div class="card-title"><h5 id="subtitle">Podnaslov izdelka 2</h5></div>
                    <div class="card-text>"><p id="body">Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.
                                            <br><br>
                                            Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            <br><br>
                                            Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                    </div>
                    <br>
                    <div id="btn-2">
                        <a href="item-2.php" class="btn" id="btn-out"><i class="fas fa-plus"></i>&nbsp; <b>VEČ O IZDELKU</b></a>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div style="float: left;" id="box">
            <img class="card-img-top" src="pics/img@2x.png" id="pic">
                <div class="card-body">
                    <div class="card-title"><h4 id="title">IZDELEK 3</h4></div>
                    <div class="card-title"><h5 id="subtitle">Podnaslov izdelka 3</h5></div>
                    <div class="card-text>"><p id="body">Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.
                                            <br><br>
                                            Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            <br><br>
                                            Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            <br><br>
                                            Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                    </div>
                    <br>
                    <div id="">
                        <a href="item-3.php" class="btn" id="btn-out"><i class="fas fa-plus"></i>&nbsp; <b>VEČ O IZDELKU</b></a>
                    </div>
                </div>
            </div>

            <!-- 4 -->
            <div style="float: left;" id="box">
            <img class="card-img-top" src="pics/img@2x.png" id="pic">
                <div class="card-body">
                    <div class="card-title"><h4 id="title">IZDELEK 4</h4></div>
                    <div class="card-title"><h5 id="subtitle">Podnaslov izdelka 4</h5></div>
                    <div class="card-text>"><p id="body">Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.
                                            <br><br>
                                            Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            <br><br>
                                            Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            <br><br>
                                            Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                    </div>
                    <br>
                    <div id="">
                        <a href="item-4.php" class="btn" id="btn-out"><i class="fas fa-plus"></i>&nbsp; <b>VEČ O IZDELKU</b></a>
                    </div>
                </div>
            </div>

            <!-- 5 -->
            <div style="float: left;" id="box">
            <img class="card-img-top" src="pics/img@2x.png" id="pic">
                <div class="card-body">
                    <div class="card-title"><h4 id="title">IZDELEK 5</h4></div>
                    <div class="card-title"><h5 id="subtitle">Podnaslov izdelka 5</h5></div>
                    <div class="card-text>"><p id="body">Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.
                                            <br><br>
                                            Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            <br><br>
                                            Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            <br><br>
                                            Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                    </div>
                    <br>
                    <div id="">
                        <a href="item-5.php" class="btn" id="btn-out"><i class="fas fa-plus"></i>&nbsp; <b>VEČ O IZDELKU</b></a>
                    </div>
                </div>
            </div>
        </div> <!-- div of ITEMS -->
    </div> <!-- .container-->

</body>
</html>