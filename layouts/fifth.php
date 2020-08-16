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

        #input {
            color: black;
            border: none;
            border-radius: 0% !important;
            border-bottom: 1px solid gray !important;
            outline: none !important;
            box-shadow: none;
            text-shadow: none;
            text-decoration: none;
        }

        .centered {
            position: absolute;
            color: white;
            font-size: 14px !important;
            font-weight: bold;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
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
                <a class="nav-link" href="#">STATS</a>
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

    <div class="container-fluid">
        <h2 class="pl-3 pt-4 pb-4" style="color:#FA8C1E; letter-spacing: 3px;">2020 Fantasy Football Ranking</h2>
        <div class="d-flex flex-row align-items-start" style="padding-left:10px; padding-right: 20px;">
            <div class="" style="position: relative;"><img src="../public/images/american-football.svg" height="55px" width="80px" alt="">
                <div class="centered">All</div>
            </div>
            <div class="pl-5" style="position: relative;"><img src="../public/images/american-football.svg" height="55px" width="80px" alt="">
                <div class="centered pl-5">QB</div>
            </div>
            <div class="pl-5" style="position: relative;"><img src="../public/images/american-football.svg" height="55px" width="80px" alt="">
                <div class="centered pl-5">RB</div>
            </div>
            <div class="pl-5" style="position: relative;"><img src="../public/images/american-football.svg" height="55px" width="80px" alt="">
                <div class="centered pl-5">WR</div>
            </div>
            <div class="pl-5" style="position: relative;"><img src="../public/images/american-football.svg" height="55px" width="80px" alt="">
                <div class="centered pl-5">TE</div>
            </div>
            <div class="pl-5" style="position: relative;"><img src="../public/images/american-football.svg" height="55px" width="80px" alt="">
                <div class="centered pl-5">DST</div>
            </div>
            <div class="pl-5" style="position: relative;"><img src="../public/images/american-football.svg" height="55px" width="80px" alt="">
                <div class="centered pl-5">K</div>
            </div>
            <div class="pl-5" style="position: relative;"><img src="../public/images/american-football.svg" height="55px" width="80px" alt="">
                <div class="centered pl-5">IDP</div>
            </div>
            <div class="" style="padding-left: 200px;">
                <div class="dropdown mt-2" style="border: 1px solid gray;">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Standards
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive-sm mt-3">
            <table class="table pt-0 text-center">
                <thead class="table-bordered" style="background-color: gray; border-color: gray!important; color: white;">
                    <tr>
                        <th scope="col">Rank</th>
                        <th scope="col-4">Player</th>
                        <th scope="col">Team</th>
                        <th scope="col">BYE</th>
                        <th scope="col">Pts/GM</th>
                        <th scope="col">Injury Risk</th>
                        <th scope="col">Tier</th>
                        <th scope="col">Trade Value</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Contact Year</th>
                        <th scope="col">Salary Price</th>
                        <th scope="col">Auction Price</th>
                    </tr>
                </thead>
                <tbody class="mt-4 pt-0">
                    <tr>
                        <td>1</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>

                    <tr>
                        <td>10</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td class="pr-0 mr-0">
                            <div class="d-flex m-0 p-0">
                                <div class="p-0"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                <div class="pl-2"><span class="p-0">fsdfvsd</span></div>
                            </div>
                        </td>
                        <td>KCC</td>
                        <td>6</td>
                        <td>11.9</td>
                        <td>
                            <img src="../public/images/heart.png" alt="">
                        </td>
                        <td>4</td>
                        <td>2 cr</td>
                        <td>2 cr</td>
                        <td>2018-20</td>
                        <td>80 lakh</td>
                        <td>4 Cr</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-end">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" tabindex="-1"><i class="material-icons" style="color:black;">skip_previous</i></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="material-icons md-16" style="color:black;">arrow_left</i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#" style="padding: 10px 20px 12px 20px;">1</a></li>
                    <li class="page-item"><a class="page-link" href="#" style="padding: 10px 20px 12px 20px; background-color: lightgrey; color:grey">2</a></li>
                    <li class="page-item"><a class="page-link" href="#" style="padding: 10px 20px 12px 20px; background-color: lightgrey; color:grey">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="material-icons" style="color:black;">arrow_right</i></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="material-icons" style="color:black;">skip_next</i></a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

    <div class="container-fluid mt-5" style="background-color: lightgrey;">
        <div class="row pl-5 pb-5">
            <div class="col-md-5 pt-5 pr-5">
                <div class="mr-2 rounded" style="background-color: #FA8C1E;">
                    <div class="d-flex flex-column justify-content-start">
                        <div class="pt-5 pl-5 text-white" style="font-size:26px; letter-spacing: 2px;">Special Features</div>
                        <div class="d-flex justify-content-start pl-5 pt-4 pb-0">
                            <a class="p-0 m-0" href="#" aria-label="Previous" style="font-size: 26px; color:white; text-decoration: none;;">
                                <span aria-hidden="true">&raquo;</span></a>
                            <a href="" class="pl-4" style="color: #F0EEEE; padding-top:11px; text-decoration: none; white-space: nowrap;">My Team</a>
                        </div>
                        <div class="d-flex justify-content-start pl-5 pt-2">
                            <a class="p-0 m-0" href="#" aria-label="Previous" style="font-size: 26px; color:white; text-decoration: none;;">
                                <span aria-hidden="true">&raquo;</span></a>
                            <a href="" class="pl-3" style="color: #F0EEEE; padding-top:11px; text-decoration: none; white-space: nowrap;">Fantasy Football Tiers</a>
                        </div>
                        <div class="d-flex justify-content-start pl-5 pt-2">
                            <a class="p-0 m-0" href="#" aria-label="Previous" style="font-size: 26px; color:white; text-decoration: none;;">
                                <span aria-hidden="true">&raquo;</span></a>
                            <a href="" class="pl-3" style="color: #F0EEEE; padding-top:11px; text-decoration: none; white-space: nowrap;">Fantasy Football Salary Value</a>
                        </div>
                        <div class="d-flex justify-content-start pl-5 pt-2">
                            <a class="p-0 m-0" href="#" aria-label="Previous" style="font-size: 26px; color:white; text-decoration: none;;">
                                <span aria-hidden="true">&raquo;</span></a>
                            <a href="" class="pl-3" style="color: #F0EEEE; padding-top:11px; text-decoration: none; white-space: nowrap;">Fantasy Football Projections</a>
                        </div>
                        <div class="d-flex justify-content-start pl-5 pt-2">
                            <a class="p-0 m-0" href="#" aria-label="Previous" style="font-size: 26px; color:white; text-decoration: none;;">
                                <span aria-hidden="true">&raquo;</span></a>
                            <a href="" class="pl-3" style="color: #F0EEEE; padding-top:11px; text-decoration: none; white-space: nowrap;">Strength of Schedule</a>
                        </div>
                        <div class="d-flex justify-content-start pl-5 pt-2">
                            <a class="p-0 m-0" href="#" aria-label="Previous" style="font-size: 26px; color:white; text-decoration: none;;">
                                <span aria-hidden="true">&raquo;</span></a>
                            <a href="" class="pl-3" style="color: #F0EEEE; padding-top:11px; text-decoration: none; white-space: nowrap;">Salary Cap Contract Suggestions</a>
                        </div>
                        <div class="d-flex justify-content-start pl-5 pt-2 pb-5">
                            <a class="p-0 m-0" href="#" aria-label="Previous" style="font-size: 26px; color:white; text-decoration: none;;">
                                <span aria-hidden="true">&raquo;</span></a>
                            <a href="" class="pl-3" style="color: #F0EEEE; padding-top:11px; text-decoration: none; white-space: nowrap;">Line Up Analyzer</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ml-0 mt-5 pt-3 pb-3" style="background-color: white; padding-left:80px;">
                <h3>Latest Articles/ News</h3>
                <div class="row pb-2">
                    <div class="col-md-4">
                        <img class="img-fluid" src="../public/images/player.jpg" style="height: 80px!important; width:100%;" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex flex-column justify-content-start">
                            <strong class="pb-2">D-Jax's contract could be voided under default</strong>
                            <span class="text-muted pb-3">Publish on :08/06/2020</span>
                            <a href="" style="text-decoration: none;">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-md-4">
                        <img class="img-fluid" src="../public/images/player.jpg" style="height: 80px!important; width:100%;" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex flex-column justify-content-start">
                            <strong class="pb-2">D-Jax's contract could be voided under default</strong>
                            <span class="text-muted pb-3">Publish on :08/06/2020</span>
                            <a href="" style="text-decoration: none;">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-md-4">
                        <img class="img-fluid" src="../public/images/player.jpg" style="height: 80px!important; width:100%;" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex flex-column justify-content-start">
                            <strong class="pb-2">D-Jax's contract could be voided under default</strong>
                            <span class="text-muted pb-3">Publish on :08/06/2020</span>
                            <a href="" style="text-decoration: none;">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col-md-4">
                        <img class="img-fluid" src="../public/images/player.jpg" style="height: 80px!important; width:100%;" alt="">
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
    </div>
    <footer class="fixed pl-5 pr-5 pt-4 text-center">
        <p class="pb-0 mb-0"><strong>ipsum dolor sit amet consectetur adipisicing elit. Id repudiandae labore voluptatum error cum hic sapiente dolorum quas maiores, optio a, molestiae ducimus, dolores quos!</strong></p>
        <span class="pb-3"><strong>Copyright @ 20210 Carberus Fantasy Football, LLC</strong></span>
    </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>