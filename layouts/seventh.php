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

    <div class="container-fluid pl-1">
        <div class="row">
            <div class="col-md-8">
                <div class="d-flex justify-content-between first" style="background-color: #16337D;">
                    <div class="d-flex pt-5 pb-5">
                        <img src="../public/images/nfl1.png" height="100px" width="100px" alt="">
                        <h3 class="text-white pt-4" style="transform: scaleY(1.5);">NEW ENGLAND PATRIOTS</h3>
                    </div>
                    <div class="pt-2">
                        <div class="dropdown pt-5">
                            <button class="btn dropdown-toggle pt-3" type="button" id="dropdownMenuButton" style="background-color:#16337D; border:none; border-radius: 0px!important; border-style: none!important; transform: scaleY(1.5); color:white; outline:none!important" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                TEAMS
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-row justify-content-start">
                    <div class="" style="background-color: #888888; color:#F0EEEE; font-size: 18px; padding: 25px 42px; border:3px solid #484C55;">
                        Roster
                    </div>
                    <div class="pt-4 pl-5 pr-5" style="background-color: #888888; color:#F0EEEE; font-size: 18px; border:3px solid #484C55; white-space: nowrap;">
                        Depth Chart
                    </div>
                    <div class="pt-4 pl-5 pr-5" style="background-color: #888888; color:#F0EEEE; font-size: 18px; border:3px solid #484C55;">
                        Schedule
                    </div>
                    <div class="pt-4 pl-5 pr-5" style="background-color: #888888; color:#F0EEEE; font-size: 18px; border:3px solid #484C55; white-space: nowrap;">
                        Team Stats
                    </div>
                    <div class="pt-3 pl-5 pr-5" style="background-color: #888888; color:#F0EEEE; font-size: 18px; white-space: nowrap; border:3px solid #484C55; text-align: center;">
                        NFL Main <br> Menu
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <h4 class="pt-3 ml-2" style="color: blue; transform: scaleY(1.5);">NEW ENGLAND PATRIOTS</h4>
                    <button class="btn mt-4 p-2 mr-1" type="button" id="Button" style="background-color: white; border: 2px solid gray; border-radius: 0px!important; transform: scaleY(1.5);  color:black; outline:none!important" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Numeric Roster
                    </button>
                </div>

                <div class="d-flex justify-content-start pt-4">
                    <p class="pl-2" style="transform: scaleY(1.5);">HC:Sean McDermott</p>
                    <p class="pl-3" style="transform: scaleY(1.5);">OC:Brain Daboll</p>
                    <p class="pl-3" style="transform: scaleY(1.5);">DC:Leslie Frazier</p>
                    <p class="pl-3" style="transform: scaleY(1.5);">ST:Health Farwell</p>
                </div>

                <div class="d-flex justify-content-between mt-5 ">
                    <div></div>
                    <div><img src="../public/images/nfl-add.jpg" alt=""></div>
                    <div></div>
                </div>

                <div class="d-flex flex-row justify-content-start pt-5 pb-4 pl-2">
                    <div class="" style="background-color: #888888; color:#F0EEEE; font-size: 18px; padding: 25px 42px; border:3px solid gray;">
                        Offense
                    </div>
                    <div class="pt-4 pl-5 pr-5" style="background-color: #888888; color:#F0EEEE; font-size: 18px; border:3px solid gray; white-space: nowrap;">
                        Defense
                    </div>
                    <div class="pt-4 pl-5 pr-5" style="background-color: #888888; color:#F0EEEE; font-size: 18px; border:3px solid gray;">
                        Special Teams
                    </div>
                </div>

                <div class="table-responsive-sm">
                    <table class="table table-sm text-center">
                        <thead class="mr-2">
                            <tr style="background-color:#16337D; color:white; font-weight: bold; transform: scaleY(1); white-space: nowrap;">
                                <th class="pt-4 pb-4" scope="col">#</th>
                                <th class="pt-4 pb-4" scope="col-4">Player</th>
                                <th class="pt-4 pb-4" scope="col">Pos</th>
                                <th class="pt-4 pb-4" scope="col">DOB</th>
                                <th class="pt-4 pb-4" scope="col">Age</th>
                                <th class="pt-4 pb-4" scope="col">HT</th>
                                <th class="pt-4 pb-4" scope="col">WT</th>
                                <th class="pt-4 pb-4" scope="col">School</th>
                                <th class="pt-4 pb-4" scope="col">Orig. Team</th>
                                <th class="pt-4 pb-4" scope="col">Draft Status</th>
                                <th class="pt-4 pb-4" scope="col">NFL Exp.</th>
                            </tr>
                        </thead>
                        <tbody class="mt-4 pt-0">
                            <tr class="table-borderless" style="background-color: lightblue; color:#16337D;">
                                <td class="pt-4 pb-4" style="transform: scaleX(0.5); transform: scaleY(1.5); letter-spacing: -1px!important; font-weight:500; white-space:nowrap;">Active Players</td>
                                <td class="pt-4 pb-4"></td>
                                <td class="pt-4 pb-4"></td>
                                <td class="pt-4 pb-4"></td>
                                <td class="pt-4 pb-4"></td>
                                <td class="pt-4 pb-4"></td>
                                <td class="pt-4 pb-4"></td>
                                <td class="pt-4 pb-4"></td>
                                <td class="pt-4 pb-4"></td>
                                <td class="pt-4 pb-4"></td>
                                <td class="pt-4 pb-4"></td>
                            </tr>
                            <tr class="table-bordered">
                                <td scope="col-2">1</td>
                                <td class="pr-0 mr-0">
                                    <div class="d-flex m-0 p-0">
                                        <div class="pl-3"><span class="p-0">fsdfvsd</span></div>
                                        <div class="pl-2 pr-3"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                    </div>
                                </td>
                                <td>QB</td>
                                <td>09/06/1987</td>
                                <td>32</td>
                                <td>
                                    6'08'
                                </td>
                                <td>318</td>
                                <td>Wyoming</td>
                                <td>CHIFA</td>
                                <td>2O CFA</td>
                                <td>5</td>
                            </tr>
                            <tr class="table-bordered">
                                <td>2</td>
                                <td class="pr-0 mr-0">
                                    <div class="d-flex m-0 p-0">
                                        <div class="pl-3"><span class="p-0">fsdfvsd</span></div>
                                        <div class="pl-2 pr-3"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                    </div>
                                </td>
                                <td>QB</td>
                                <td>09/06/1987</td>
                                <td>32</td>
                                <td>
                                    6'08'
                                </td>
                                <td>318</td>
                                <td>Wyoming</td>
                                <td>CHIFA</td>
                                <td>2O CFA</td>
                                <td>5</td>
                            </tr>
                            <tr class="table-bordered">
                                <td>3</td>
                                <td class="pr-0 mr-0">
                                    <div class="d-flex m-0 p-0">
                                        <div class="pl-3"><span class="p-0">fsdfvsd</span></div>
                                        <div class="pl-2 pr-3"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                    </div>
                                </td>
                                <td>QB</td>
                                <td>09/06/1987</td>
                                <td>32</td>
                                <td>
                                    6'08'
                                </td>
                                <td>318</td>
                                <td>Wyoming</td>
                                <td>CHIFA</td>
                                <td>2O CFA</td>
                                <td>5</td>
                            </tr>
                            <tr class="table-bordered">
                                <td>4</td>
                                <td class="pr-0 mr-0">
                                    <div class="d-flex m-0 p-0">
                                        <div class="pl-3"><span class="p-0">fsdfvsd</span></div>
                                        <div class="pl-2 pr-3"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                    </div>
                                </td>
                                <td>QB</td>
                                <td>09/06/1987</td>
                                <td>32</td>
                                <td>
                                    6'08'
                                </td>
                                <td>318</td>
                                <td>Wyoming</td>
                                <td>CHIFA</td>
                                <td>2O CFA</td>
                                <td>5</td>
                            </tr>
                            <tr class="table-bordered">
                                <td>5</td>
                                <td class="pr-0 mr-0">
                                    <div class="d-flex m-0 p-0">
                                        <div class="pl-3"><span class="p-0">fsdfvsd</span></div>
                                        <div class="pl-2 pr-3"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                    </div>
                                </td>
                                <td>QB</td>
                                <td>09/06/1987</td>
                                <td>32</td>
                                <td>
                                    6'08'
                                </td>
                                <td>318</td>
                                <td>Wyoming</td>
                                <td>CHIFA</td>
                                <td>2O CFA</td>
                                <td>5</td>
                            </tr>
                            <tr class="table-bordered">
                                <td>6</td>
                                <td class="pr-0 mr-0">
                                    <div class="d-flex m-0 p-0">
                                        <div class="pl-3"><span class="p-0">fsdfvsd</span></div>
                                        <div class="pl-2 pr-3"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                    </div>
                                </td>
                                <td>QB</td>
                                <td>09/06/1987</td>
                                <td>32</td>
                                <td>
                                    6'08'
                                </td>
                                <td>318</td>
                                <td>Wyoming</td>
                                <td>CHIFA</td>
                                <td>2O CFA</td>
                                <td>5</td>
                            </tr>
                            <tr class="table-bordered">
                                <td>7</td>
                                <td class="pr-0 mr-0">
                                    <div class="d-flex m-0 p-0">
                                        <div class="pl-3"><span class="p-0">fsdfvsd</span></div>
                                        <div class="pl-2 pr-3"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                    </div>
                                </td>
                                <td>QB</td>
                                <td>09/06/1987</td>
                                <td>32</td>
                                <td>
                                    6'08'
                                </td>
                                <td>318</td>
                                <td>Wyoming</td>
                                <td>CHIFA</td>
                                <td>2O CFA</td>
                                <td>5</td>
                            </tr>
                            <tr class="table-bordered">
                                <td>8</td>
                                <td class="pr-0 mr-0">
                                    <div class="d-flex m-0 p-0">
                                        <div class="pl-3"><span class="p-0">fsdfvsd</span></div>
                                        <div class="pl-2 pr-3"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                    </div>
                                </td>
                                <td>QB</td>
                                <td>09/06/1987</td>
                                <td>32</td>
                                <td>
                                    6'08'
                                </td>
                                <td>318</td>
                                <td>Wyoming</td>
                                <td>CHIFA</td>
                                <td>2O CFA</td>
                                <td>5</td>
                            </tr>
                            <tr class="table-bordered">
                                <td>9</td>
                                <td class="pr-0 mr-0">
                                    <div class="d-flex m-0 p-0">
                                        <div class="pl-3"><span class="p-0">fsdfvsd</span></div>
                                        <div class="pl-2 pr-3"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                    </div>
                                </td>
                                <td>QB</td>
                                <td>09/06/1987</td>
                                <td>32</td>
                                <td>
                                    6'08'
                                </td>
                                <td>318</td>
                                <td>Wyoming</td>
                                <td>CHIFA</td>
                                <td>2O CFA</td>
                                <td>5</td>
                            </tr>

                            <tr class="table-bordered">
                                <td>10</td>
                                <td class="pr-0 mr-0">
                                    <div class="d-flex m-0 p-0">
                                        <div class="pl-3"><span class="p-0">fsdfvsd</span></div>
                                        <div class="pl-2 pr-3"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                    </div>
                                </td>
                                <td>QB</td>
                                <td>09/06/1987</td>
                                <td>32</td>
                                <td>
                                    6'08'
                                </td>
                                <td>318</td>
                                <td>Wyoming</td>
                                <td>CHIFA</td>
                                <td>2O CFA</td>
                                <td>5</td>
                            </tr>
                            <tr class="table-bordered">
                                <td>11</td>
                                <td class="pr-0 mr-0">
                                    <div class="d-flex m-0 p-0">
                                        <div class="pl-3"><span class="p-0">fsdfvsd</span></div>
                                        <div class="pl-2 pr-3"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                    </div>
                                </td>
                                <td>QB</td>
                                <td>09/06/1987</td>
                                <td>32</td>
                                <td>
                                    6'08'
                                </td>
                                <td>318</td>
                                <td>Wyoming</td>
                                <td>CHIFA</td>
                                <td>2O CFA</td>
                                <td>5</td>
                            </tr>
                            <tr class="table-bordered">
                                <td>12</td>
                                <td class="pr-0 mr-0">
                                    <div class="d-flex m-0 p-0">
                                        <div class="pl-3"><span class="p-0">fsdfvsd</span></div>
                                        <div class="pl-2 pr-3"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                    </div>
                                </td>
                                <td>QB</td>
                                <td>09/06/1987</td>
                                <td>32</td>
                                <td>
                                    6'08'
                                </td>
                                <td>318</td>
                                <td>Wyoming</td>
                                <td>CHIFA</td>
                                <td>2O CFA</td>
                                <td>5</td>
                            </tr>
                            <tr class="table-bordered">
                                <td>13</td>
                                <td class="pr-0 mr-0">
                                    <div class="d-flex m-0 p-0">
                                        <div class="pl-3"><span class="p-0">fsdfvsd</span></div>
                                        <div class="pl-2 pr-3"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                    </div>
                                </td>
                                <td>QB</td>
                                <td>09/06/1987</td>
                                <td>32</td>
                                <td>
                                    6'08'
                                </td>
                                <td>318</td>
                                <td>Wyoming</td>
                                <td>CHIFA</td>
                                <td>2O CFA</td>
                                <td>5</td>
                            </tr>
                            <tr class="table-bordered">
                                <td>14</td>
                                <td class="pr-0 mr-0">
                                    <div class="d-flex m-0 p-0">
                                        <div class="pl-3"><span class="p-0">fsdfvsd</span></div>
                                        <div class="pl-2 pr-3"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                    </div>
                                </td>
                                <td>QB</td>
                                <td>09/06/1987</td>
                                <td>32</td>
                                <td>
                                    6'08'
                                </td>
                                <td>318</td>
                                <td>Wyoming</td>
                                <td>CHIFA</td>
                                <td>2O CFA</td>
                                <td>5</td>
                            </tr>
                            <tr class="table-bordered">
                                <td>15</td>
                                <td class="pr-0 mr-0">
                                    <div class="d-flex m-0 p-0">
                                        <div class="pl-3"><span class="p-0">fsdfvsd</span></div>
                                        <div class="pl-2 pr-3"><img src="../public/images/ronaldo.jpg" height="30px" width="30px" alt="" style="border-radius: 50%; margin-left:0px; padding-left:0px;"></div>
                                    </div>
                                </td>
                                <td>QB</td>
                                <td>09/06/1987</td>
                                <td>32</td>
                                <td>
                                    6'08'
                                </td>
                                <td>318</td>
                                <td>Wyoming</td>
                                <td>CHIFA</td>
                                <td>2O CFA</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="col-md-4 pl-0 pt-2" style="background-color: lightgrey;">
                <div class="d-flex flex-column mr-1 mt-1" style="background-color:white; box-shadow: 0 0 2px lightgrey;">
                    <h4 class="pt-4 pl-3">AFC East Standings</h4>
                    <div class="table-responsive-sm pb-0">
                        <table class="table table-borderless mb-0 pb-0">
                            <thead>
                                <tr class="table-info">
                                    <th class="pl-4">Team</th>
                                    <th>Div</th>
                                    <th>Overall</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pb-0">
                                        <div class="d-flex">
                                            <img src="../public/images/nfl1.png" height="30px" width="30px" alt="">
                                            <p>NE</p>
                                        </div>
                                    </td>
                                    <td>5-1-0</td>
                                    <td>2-4-0</td>
                                </tr>
                                <tr>
                                    <td class="pb-0">
                                        <div class="d-flex">
                                            <img src="../public/images/nfl2.png" height="30px" width="30px" alt="">
                                            <p>BUF</p>
                                        </div>
                                    </td>
                                    <td>5-1-0</td>
                                    <td>2-4-0</td>
                                </tr>
                                <tr>
                                    <td class="pb-0">
                                        <div class="d-flex">
                                            <img src="../public/images/nfl3.png" height="30px" width="30px" alt="">
                                            <p>NYJ</p>
                                        </div>
                                    </td>
                                    <td>5-1-0</td>
                                    <td>2-4-0</td>
                                </tr>
                                <tr class="">
                                    <td class="pb-0">
                                        <div class="d-flex">
                                            <img src="../public/images/nfl4.png" height="30px" width="30px" alt="">
                                            <p>MIA</p>
                                        </div>
                                    </td>
                                    <td>5-1-0</td>
                                    <td>2-4-0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center p-3" style="box-shadow:0px 1px inset lightgrey;">Full Standings</div>
                </div>
                <div class="mt-3 ml-3 mr-2" style="background-color: white; border-radius: 15px 15px 0px 0px; box-shadow: 0 4px 5px #888888;">
                    <div class="d-flex flex-column justify-content-start pl-3 pt-3 pb-3">
                        <h3>2020 Schedule</h3>
                        <em style="color: #888888; font-size:20px; font-weight: bold;">All times ET</em>
                    </div>
                </div>
                <h5 class="pt-3 pb-3 pl-3">REGULAR SEASON</h5>
                <div class="d-flex flex-column justify-content-start">
                    <div class="row ml-3 mr-2" style="background-color: white;">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start mt-5">
                                <img src="../public/images/nfl1.png" height="30px" width="30px" alt="">
                                <p class="font-weight-bold pl-2" style="font-size: 19px;">vs Jets</p>
                            </div>
                        </div>
                        <div class="col-md-6 pl-5">
                            <div class="d-flex justify-content-end flex-column pl-5 my-4">
                                <div class="font-weight-bold">9/13</div>
                                <div class="font-weight-bold">1:00 PM</div>
                                <span>CBS</span>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-3 mr-2 mt-1" style="background-color: white;">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start mt-5">
                                <img src="../public/images/nfl2.png" height="30px" width="30px" alt="">
                                <p class="font-weight-bold pl-2" style="font-size: 19px;">@ Dolphins</p>
                            </div>
                        </div>
                        <div class="col-md-6 pl-5">
                            <div class="d-flex justify-content-end flex-column pl-5 my-4">
                                <div class="font-weight-bold">9/13</div>
                                <div class="font-weight-bold">1:00 PM</div>
                                <span>CBS</span>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-3 mr-2 mt-1" style="background-color: white;">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start mt-5">
                                <img src="../public/images/nfl3.png" height="30px" width="30px" alt="">
                                <p class="font-weight-bold pl-2" style="font-size: 19px;">vs Rams</p>
                            </div>
                        </div>
                        <div class="col-md-6 pl-5">
                            <div class="d-flex justify-content-end flex-column pl-5 my-4">
                                <div class="font-weight-bold">9/13</div>
                                <div class="font-weight-bold">1:00 PM</div>
                                <span>CBS</span>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-3 mr-2 mt-1" style="background-color: white;">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start mt-5">
                                <img src="../public/images/nfl1.png" height="30px" width="30px" alt="">
                                <p class="font-weight-bold pl-2" style="font-size: 19px;">@ Raiders</p>
                            </div>
                        </div>
                        <div class="col-md-6 pl-5">
                            <div class="d-flex justify-content-end flex-column pl-5 my-4">
                                <div class="font-weight-bold">9/13</div>
                                <div class="font-weight-bold">1:00 PM</div>
                                <span>CBS</span>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-3 mr-2 mt-1" style="background-color: white;">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start mt-5">
                                <img src="../public/images/nfl4.png" height="30px" width="30px" alt="">
                                <p class="font-weight-bold pl-2" style="font-size: 19px;">Titans</p>
                            </div>
                        </div>
                        <div class="col-md-6 pl-5">
                            <div class="d-flex justify-content-end flex-column pl-5 my-4">
                                <div class="font-weight-bold">9/13</div>
                                <div class="font-weight-bold">1:00 PM</div>
                                <span>CBS</span>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-3 mr-2 mt-1" style="background-color: white;">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start mt-5">
                                <img src="../public/images/nfl3.png" height="30px" width="30px" alt="">
                                <p class="font-weight-bold pl-2" style="font-size: 19px;">vs Cheifs</p>
                            </div>
                        </div>
                        <div class="col-md-6 pl-5">
                            <div class="d-flex justify-content-end flex-column pl-5 my-4">
                                <div class="font-weight-bold">9/13</div>
                                <div class="font-weight-bold">1:00 PM</div>
                                <span>CBS</span>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-3 mr-2 mt-1" style="background-color: white;">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start mt-5">
                                <img src="../public/images/nfl2.png" height="30px" width="30px" alt="">
                                <p class="font-weight-bold pl-2" style="font-size: 19px;">@ Jets</p>
                            </div>
                        </div>
                        <div class="col-md-6 pl-5">
                            <div class="d-flex justify-content-end flex-column pl-5 my-4">
                                <div class="font-weight-bold">9/13</div>
                                <div class="font-weight-bold">1:00 PM</div>
                                <span>CBS</span>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-3 mr-2 mt-1" style="background-color: white;">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start mt-5">
                                <img src="../public/images/nfl3.png" height="30px" width="30px" alt="">
                                <p class="font-weight-bold pl-2" style="font-size: 19px;">vs Patriots</p>
                            </div>
                        </div>
                        <div class="col-md-6 pl-5">
                            <div class="d-flex justify-content-end flex-column pl-5 my-4">
                                <div class="font-weight-bold">9/13</div>
                                <div class="font-weight-bold">1:00 PM</div>
                                <span>CBS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="fixed pl-5 pr-5 pt-4 pb-4" style="background-color: #3E4BB1; color:white; font-size:20px;">
        <p class="pb-0 mb-0">Iipsum dolor sit amet consectetur adipisicing elit. Id repudiandae labore voluptatum error cum hic sapiente dolorum quas maiores, optio a, molestiae ducimus, dolores quos!</strong></p>
        <span class="pb-3">Copyright @ 20210 Carberus Fantasy Football, LLC</span>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>