<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @import url("../public/css/styles.css");

        body {
            overflow-x: hidden;
        }

        #head {
            background: blue;
            height: 170px;
        }

        input.form-control {
            border-radius: 50px !important;
            padding-left: 25px;
        }

        button.btn.search {
            background-color: transparent !important;
            color: white !important;
            padding-left: 0px;
            font-size: 28px;
        }

        button.btn.btn-warning {
            border-radius: 50px !important;
            width: 200px !important;
        }

        .scoreboard-content {
            height: 100px;
        }

        .scoreboard-wrapper {
            height: 100px;
            width: fit-content;
            padding: 30px;
            padding-right: 10px;
            border-right: 1px solid gray;
        }

        .scoreboard-wrapper .dropdown button {
            border-radius: 50px !important;
            border: 2px solid lightgray;
            background-color: white;
            padding: 5px 10px 5px 10px;
            white-space: nowrap;
        }

        .scoreboard-label {
            height: 100px !important;
            width: fit-content;
            padding: 32px;
            padding-top: 35px !important;
            border-right: 1px solid gray;
            white-space: nowrap;
        }

        .scoreboard-team {
            background: white;
            height: 100px !important;
            width: 100%;
            padding: 5px 10px;
            border-right: 1px solid gray;
            white-space: nowrap;
        }
        .parent-container {
            width: 100%;
            height: 100%;
            margin: 10px 30px;
            /* margin-right: 20px!important; */
            overflow: hidden;
        }

        .input-group>.form-control {
            color: black;
            border: none;
            border-radius: 0% !important;
            border-bottom: 2px solid gray !important;
            outline: none !important;
            box-shadow: none;
            text-shadow: none;
            text-decoration: none;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div id="head" class="d-flex justify-content-between align-items-center pl-4 pr-4">
        <div class="align-self-center">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Player Search" aria-label="Search">
                <button class="btn search my-2 my-sm-0" type="submit"><i class="material-icons-outlined">search</i></button>
            </form>
        </div>
        <div class="align-self-start">
            <img src="../public/images/cerberus-01.png" class="pt-0" style="height: 28vh; top:0px; width:200px; padding:0px!important; margin-top:0px;" alt="">
        </div>
        <div class="align-self-center">
            <div class="dropdown drop mt-3">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Welcome Chris
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pl-0 pr-0">
        <div class="wrap" style="background-color: #F0EEEE; height:100px;">
            <div class="scoreboard-content d-flex">
                <div class="scoreboard-wrapper">
                    <div class="dropdown">
                        <button type="button" class="d-flex" data-toggle="dropdown">Total Events
                            <i class="material-icons-outlined" style="color: #117AF2;">keyboard_arrow_down</i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </div>
                </div>
                <div class="scoreboard-label my-auto">
                    <h5>Golf</h5>
                </div>
                <div class="scoreboard-team">
                    <strong>the Memorial Tournam...</strong>
                    <p class="m-0 p-0 pt-1"> Round 1 - Play Complete </p>
                    <div class="row pt-2">
                        <div class="col-2">1.</div>
                        <div class="col-7 pl-0">
                            <img src="../public/images/pak.png" height="15px" width="20px" alt=""> <span class="pl-2">T.Finau</span>
                        </div>
                        <div class="col-3 pl-3">-6</div>
                    </div>
                </div>
                <div class="scoreboard-label my-auto">
                    <h5>MLS</h5>
                </div>
                <div class="scoreboard-team">
                    <strong class="m-0 p-0" style="color:red;">22'</strong>
                    <div class="row d-flex justify-content-start pt-1">
                        <img class=" pl-1 ml-2 mt-2 mr-2" src="../public/images/NY.png" height="15px" width="25px" alt="">
                        <span class="pt-1 pr-1">ATL</span> <span class=" pt-1 pl-3 pr-2 font-weight-bold">0</span>
                    </div>
                    <div class="row d-flex justify-content-start pt-1">
                        <img class=" pl-1 ml-2 mt-2 mr-2" src="../public/images/NY.png" height="15px" width="25px" alt="">
                        <span class="pt-1 pr-1">CTN</span> <span class=" pt-1 pl-3 pr-2 font-weight-bold">0</span>
                    </div>
                </div>
                <div class="scoreboard-team">
                    <strong class="m-0 p-0" style="color:black;">FT</strong>
                    <div class="row d-flex justify-content-start pt-1">
                        <img class=" pl-1 ml-2 mt-2 mr-2" src="../public/images/NY.png" height="15px" width="25px" alt="">
                        <span class="pt-1 pr-1">ATL</span> <span class=" pt-1 pl-3 pr-2 font-weight-bold">0</span>
                    </div>
                    <div class="row d-flex justify-content-start pt-1">
                        <img class=" pl-1 ml-2 mt-2 mr-2" src="../public/images/NY.png" height="15px" width="25px" alt="">
                        <span class="pt-1 pr-1">CTN</span> <span class=" pt-1 pl-3 pr-2 font-weight-bold">0</span>
                    </div>
                </div>
                <div class="scoreboard-team">
                    <strong class="m-0 p-0" style="color:black;">FT</strong>
                    <div class="row d-flex justify-content-start pt-1">
                        <img class=" pl-1 ml-2 mt-2 mr-2" src="../public/images/NY.png" height="15px" width="25px" alt="">
                        <span class="pt-1 pr-1">ATL</span> <span class=" pt-1 pl-3 pr-2 font-weight-bold">0</span>
                    </div>
                    <div class="row d-flex justify-content-start pt-1">
                        <img class=" pl-1 ml-2 mt-2 mr-2" src="../public/images/NY.png" height="15px" width="25px" alt="">
                        <span class="pt-1 pr-1">CTN</span> <span class=" pt-1 pl-3 pr-2 font-weight-bold">0</span>
                    </div>
                </div>
                <div class="scoreboard-label my-auto">
                    <h5>Serie A</h5>
                </div>
                <div class="scoreboard-team">
                    <strong class="m-0 p-0" style="color:black;">FT</strong>
                    <div class="row d-flex justify-content-start pt-1">
                        <img class=" pl-1 ml-2 mt-2 mr-2" src="../public/images/NY.png" height="15px" width="25px" alt="">
                        <span class="pt-1 pr-1">ATL</span> <span class=" pt-1 pl-3 pr-2 font-weight-bold">0</span>
                    </div>
                    <div class="row d-flex justify-content-start pt-1">
                        <img class=" pl-1 ml-2 mt-2 mr-2" src="../public/images/NY.png" height="15px" width="25px" alt="">
                        <span class="pt-1 pr-1">CTN</span> <span class=" pt-1 pl-3 pr-2 font-weight-bold">0</span>
                    </div>
                </div>
                <div class="scoreboard-team">
                    <strong class="m-0 p-0" style="color:black;">FT</strong>
                    <div class="row d-flex justify-content-start pt-1">
                        <img class=" pl-1 ml-2 mt-2 mr-2" src="../public/images/NY.png" height="15px" width="25px" alt="">
                        <span class="pt-1 pr-1">ATL</span> <span class=" pt-1 pl-3 pr-2 font-weight-bold">0</span>
                    </div>
                    <div class="row d-flex justify-content-start pt-1">
                        <img class=" pl-1 ml-2 mt-2 mr-2" src="../public/images/NY.png" height="15px" width="25px" alt="">
                        <span class="pt-1 pr-1">CTN</span> <span class=" pt-1 pl-3 pr-2 font-weight-bold">0</span>
                    </div>
                </div>
                <div class="scoreboard-team">
                    <strong class="m-0 p-0" style="color:black;">FT</strong>
                    <div class="row d-flex justify-content-start pt-1">
                        <img class=" pl-1 ml-2 mt-2 mr-2" src="../public/images/NY.png" height="15px" width="25px" alt="">
                        <span class="pt-1 pr-1">ATL</span> <span class=" pt-1 pl-3 pr-2 font-weight-bold">0</span>
                    </div>
                    <div class="row d-flex justify-content-start pt-1">
                        <img class=" pl-1 ml-2 mt-2 mr-2" src="../public/images/NY.png" height="15px" width="25px" alt="">
                        <span class="pt-1 pr-1">CTN</span> <span class=" pt-1 pl-3 pr-2 font-weight-bold">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand navbar-dark" style="height: 70px; background-color: black;">
        <a class="navbar-brand" style="padding-bottom:18px; padding-right: 0px; " href="#">
            <img src="../public/images/cerberus-02.png" width="100" height="120" alt="">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item active pl-0">
                <a class="nav-link pl-0" href="#">HOME</a>
            </li>
            <li class="nav-item active pl-2">
                <a class="nav-link" href="#">NFL</a>
            </li>
            <li class="nav-item active pl-2">
                <a class="nav-link" href="#">NCAAF</a>
            </li>
            <li class="nav-item active pl-2">
                <a class="nav-link" href="#">RANKING</a>
            </li>
            <li class="nav-item active pl-2">
                <a class="nav-link" href="#">PROJECTIONS</a>
            </li>
            <li class="nav-item active pl-2">
                <a class="nav-link" href="#">STATE</a>
            </li>
            <li class="nav-item active pl-2">
                <a class="nav-link" href="#">TOOLS</a>
            </li>
            <li class="nav-item active pl-2">
                <a class="nav-link" href="#">NEWS</a>
            </li>
            <li class="nav-item active pl-2">
                <a class="nav-link" href="#">HELP</a>
            </li>
            <li class="nav-item active pl-2">
                <a class="nav-link" href="#">ABOUT</a>
            </li>
        </ul>
    </nav>

    <div class="parent-container pr-2">
        <div class="row">
            <div class="col-md-7 pt-4 pl-5">
                <h4>MY TEAM</h4>
                <h2 class="font-weight-bold" style="color: #FA8C1E;">2020 Knight Rider NFL Roster</h2>
                <div class="d-flex flex-row justify-content-start">
                    <div class="pt-4 align-items-end">How many position do you start?</div>
                    <span class="pl-5 pt-0" style="font-size: 38px; font-weight: 900;">+</span>
                </div>
            </div>
            <div class="col-md-4 mr-4 pr-0">
                <div class="d-flex flex-row justify-content-between pt-4">
                    <a href="" class="pt-4 mt-4" style="text-decoration: none;">Add Custom Scoring</a>
                    <div class="pt-0 ">
                        <strong class="">Roster Size</strong>
                        <div class="dropdown mt-3">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                20
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </div>
                    </div>
                    <div class="pt-0">
                        <strong class="">Scoring Format</strong>
                        <div class="dropdown mt-3">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Standards Scoring
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-0">
                    <form action="">
                        <div class="input-group d-flex flex-row justify-content-end mb-3 pt-2">
                            <div class="col-md-3 input-group-prepend" style="padding-left: 100px; padding-right: 35px; padding-top: 15px;">
                                <span> <i class="material-icons-outlined">search</i></span>
                            </div>
                            <input type="text" class="col-md-5 form-control " placeholder="Player Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row pl-5">
            <div class="d-flex">
                <div class="d-flex" style="padding-right: 70px;">
                    <strong class="align-self-center pt-2 pr-3">QB</strong>
                    <div class="dropdown mt-3" style="border: #FA8C1E;">
                        <button class="btn btn-outline-muted dropdown-toggle pl-5 pr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            1
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="padding-right: 70px;">
                    <strong class="align-self-center pt-2 pr-3">RB</strong>
                    <div class="dropdown mt-3" style="border: #FA8C1E;">
                        <button class="btn btn-outline-muted dropdown-toggle pl-5 pr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            1
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="padding-right: 70px;">
                    <strong class="align-self-center pt-2 pr-3">WR</strong>
                    <div class="dropdown mt-3" style="border: #FA8C1E;">
                        <button class="btn btn-outline-muted dropdown-toggle pl-5 pr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            1
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="padding-right: 70px;">
                    <strong class="align-self-center pt-2 pr-3">TE</strong>
                    <div class="dropdown mt-3" style="border: #FA8C1E;">
                        <button class="btn btn-outline-muted dropdown-toggle pl-5 pr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            1
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="padding-right: 70px;">
                    <strong class="align-self-center pt-2 pr-3">DST</strong>
                    <div class="dropdown mt-3" style="border: #FA8C1E;">
                        <button class="btn btn-outline-muted dropdown-toggle pl-5 pr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            1
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="padding-right: 70px;">
                    <strong class="align-self-center pt-2 pr-3">K</strong>
                    <div class="dropdown mt-3" style="border: #FA8C1E;">
                        <button class="btn btn-outline-muted dropdown-toggle pl-5 pr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            1
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="padding-right: 70px;">
                    <strong class="align-self-center pt-2 pr-3">IDP</strong>
                    <div class="dropdown mt-3" style="border: #FA8C1E;">
                        <button class="btn btn-outline-muted dropdown-toggle pl-5 pr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            1
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="row mt-4 mb-4 p-5">
            <div class="col-md-12 ">
                <img class="img-fluid " src="../public/images/ground1.jpg" width="95%" alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row" style="background-color: lightgray;">
            <div class="col-md-5 pl-5">
                <div class="d-flex flex-column align-items-start mt-4">
                    <h2 class="font-weight-bold pb-3">Banch Players</h2>
                    <div class="pt-0" style="height: 51px!important; width:100%!important;">
                        <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3737; color:white; height: 50px!important;">
                            <div class="pl-5 pt-2 pb-1">01</div>
                            <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                            <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                        </div>
                    </div>
                    <div class="pt-1" style="height: 52px!important; width:100%!important;">
                        <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3737; color:white; height: 50px!important;">
                            <div class="pl-5 pt-2 pb-1">01</div>
                            <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                            <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                        </div>
                    </div>
                    <div class="pt-1" style="height: 52px!important; width:100%!important;">
                        <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3737; color:white; height: 50px!important;">
                            <div class="pl-5 pt-2 pb-1">01</div>
                            <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                            <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                        </div>
                    </div>
                    <div class="pt-1" style="height: 52px!important; width:100%!important;">
                        <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3737; color:white; height: 50px!important;">
                            <div class="pl-5 pt-2 pb-1">01</div>
                            <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                            <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                        </div>
                    </div>
                    <div class="pt-1" style="height: 52px!important; width:100%!important;">
                        <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3737; color:white; height: 50px!important;">
                            <div class="pl-5 pt-2 pb-1">01</div>
                            <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                            <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                        </div>
                    </div>
                    <div class="pt-1" style="height: 52px!important; width:100%!important;">
                        <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3737; color:white; height: 50px!important;">
                            <div class="pl-5 pt-2 pb-1">01</div>
                            <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                            <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                        </div>
                    </div>
                    <div class="pt-1" style="height: 52px!important; width:100%!important;">
                        <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3737; color:white; height: 50px!important;">
                            <div class="pl-5 pt-2 pb-1">01</div>
                            <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                            <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 p-5">
                <h2 class="font-weight-bold pb-3">Latest Articles/ News</h2>
                <div class="row pb-3">
                    <div class="col-md-4">
                        <img class="img-fluid" src="../public/images/player.jpg" style="height: 100px!important; width:100%;" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex flex-column justify-content-start">
                            <strong class="pb-2">D-Jax's contract could be voided under default</strong>
                            <span class="text-muted pb-3">Publish on :08/06/2020</span>
                            <a href="" style="text-decoration: none;">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-md-4">
                        <img class="img-fluid" src="../public/images/player.jpg" style="height: 100px!important; width:100%;" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex flex-column justify-content-start">
                            <strong class="pb-2">D-Jax's contract could be voided under default</strong>
                            <span class="text-muted pb-3">Publish on :08/06/2020</span>
                            <a href="" style="text-decoration: none;">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-md-4">
                        <img class="img-fluid" src="../public/images/player.jpg" style="height: 100px!important; width:100%;" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex flex-column justify-content-start">
                            <strong class="pb-2">D-Jax's contract could be voided under default</strong>
                            <span class="text-muted pb-3">Publish on :08/06/2020</span>
                            <a href="" style="text-decoration: none;">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="fixed pl-5 pr-5 pt-4 text-center">
            <p class="pb-0 mb-0"><strong>ipsum dolor sit amet consectetur adipisicing elit. Id repudiandae labore voluptatum error cum hic sapiente dolorum quas maiores, optio a, molestiae ducimus, dolores quos!</strong></p>
            <span class="pb-5"><strong>Copyright @ 20210 Carberus Fantasy Football, LLC</strong></span>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>