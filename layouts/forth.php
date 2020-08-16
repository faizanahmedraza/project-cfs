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

        input[type=number] {
            color: black;
            border-color: gray;
            border-radius: 3% !important;
            padding: 5px !important;
            margin: 5px;
            outline: none !important;
            box-shadow: none;
            text-shadow: none;
            text-decoration: none;
        }

        .large>.form-group>input[type=text] {
            border-radius: 3px !important;
        }
        .form-inline>.form-group>input[type=text] {
            border: none!important;
            border-radius: 0px!important;
            font-size: 20px;
            padding-left: 0px!important;
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

    <div class="container-fluid">
        <h1>My Team (Add Custom Scoring)</h1>
        <div class="row">
            <div class="col-md-6 pr-0 pl-4" style="background-color: lightgray;">
                <h4 class="pl-4 pt-3 pb-3">Manage your Custom Scoring Settings</h4>
                <div class="pt-3 pl-3 pb-4 ml-4" style="background-color: white; box-shadow:  0px 2px gray;">
                    You have'nt created any custom scoring yet.
                </div>
                <div class="pt-3 pb-2 ml-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro veritatis, suscipit corporis iure aliquam sunt repellat aut consectetur in labore!. Lorem ipsum dolor sit amet.
                </div>
                <hr class="mb-0">
                <div class="pt-0 pb-2 pr-3 float-right" style="font-size: 24px; font-weight: bold; color: #17549B;">
                    Add a New Scoring System Option
                </div>
                <div class="pt-5 ml-4">
                    <form action="" class="pl-2 pt-3 pb-3 pr-0" style="background-color: white;">
                        <h4>Scoring System Name</h4>
                        <input id="input" type="text" class="form-control pl-1" placeholder="Name your scoring system (i.e My Work League or My Family League)">
                        <h4 class="pt-3 font-weight-bold" style="color:#FA8C1E">Passing</h4>
                        <div class="d-flex justify-content-start">
                            <input type="number" class="col-md-2 form-control" placeholder="1.0">
                            <p class="pt-2 pl-2 pr-3">points for every</p>
                            <input type="number" class="col-md-2 form-control" placeholder="25.0">
                            <p class="pt-2 pl-3">passing yards</p>
                        </div>
                        <div class="d-flex">
                            <input type="number" class="col-md-2 form-control" placeholder="4.0">
                            <p class="pt-2 pl-2 pr-3">points for every passing touch down</p>
                        </div>
                        <div class="d-flex">
                            <input type="number" class="col-md-2 form-control" placeholder="2.0">
                            <p class="pt-2 pl-2 pr-3">points for every interception</p>
                        </div>
                        <h4 class="pt-3 font-weight-bold" style="color:#FA8C1E">Rushing</h4>
                        <div class="d-flex justify-content-start">
                            <input type="number" class="col-md-2 form-control" placeholder="1.0">
                            <p class="pt-2 pl-2 pr-3">points for every</p>
                            <input type="number" class="col-md-2 form-control" placeholder="10.00">
                            <p class="pt-2 pl-3">receiving yards</p>
                        </div>
                        <div class="d-flex">
                            <input type="number" class="col-md-2 form-control" placeholder="1.0">
                            <p class="pt-2 pl-2 pr-3">points for every receiving touchdown</p>
                        </div>
                        <div class="d-flex">
                            <input type="number" class="col-md-2 form-control" placeholder="6.0">
                            <p class="pt-2 pl-2 pr-3">points for every reception</p><span class="font-weight-bold pb-0 pt-2">RB</span>
                        </div>
                        <div class="d-flex">
                            <input type="number" class="col-md-2 form-control" placeholder="0.0">
                            <p class="pt-2 pl-2 pr-3">points for every reception</p><span class="font-weight-bold pb-0 pt-2">WR</span>
                        </div>
                        <div class="d-flex">
                            <input type="number" class="col-md-2 form-control" placeholder="0.0">
                            <p class="pt-2 pl-2 pr-3">points for every reception</p><span class="font-weight-bold pb-0 pt-2">TE</span>
                        </div>
                        <h4 class="pt-3 font-weight-bold" style="color:#FA8C1E">Miscellaneous</h4>
                        <div class="d-flex">
                            <input type="number" class="col-md-2 form-control" placeholder="-2.0">
                            <p class="pt-2 pl-2 pr-3">points for tumble lose</p>
                        </div>
                        <h4 class="pt-3 font-weight-bold" style="color:#FA8C1E">Kicking</h4>
                        <div class="d-flex">
                            <input type="number" class="col-md-2 form-control" placeholder="3.0">
                            <p class="pt-2 pl-2 pr-3">Field goal < 39 yards</p> </div> <div class="d-flex">
                                    <input type="number" class="col-md-2 form-control" placeholder="3.0">
                                    <p class="pt-2 pl-2 pr-3">Field goal 40-49 yards</p>
                        </div>
                        <div class="d-flex">
                            <input type="number" class="col-md-2 form-control" placeholder="1.0">
                            <p class="pt-2 pl-2 pr-3">Field goal 50-59 yards</p>
                        </div>
                        <div class="d-flex">
                            <input type="number" class="col-md-2 form-control" placeholder="2.0">
                            <p class="pt-2 pl-2 pr-3">Field goal 60 + yards</p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 350px;">
                <div class="d-flex pl-3">
                    <h3>IDP scoring</h3>
                    <p class="pt-1 pl-3" style="font-size:22px;">All IDP Scoring add manually</p>
                </div>
                <ul style="list-style-type: square; color:gray;">
                    <li>
                        <div class="d-flex">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="list1" style="font-size: 20px; color:black; font-weight: bold;">Solo tackle:</label>
                                    <input type="text" id="list1" class="form-control mx-sm-3" placeholder="1.5 points">
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                    <div class="d-flex">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="list1" style="font-size: 20px; color:black; font-weight: bold;">Assisted tackle:</label>
                                    <input type="text" id="list1" class="form-control mx-sm-3" placeholder="0.75 points">
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                    <div class="d-flex">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="list1" style="font-size: 20px; color:black; font-weight: bold;">Tackle for loss:</label>
                                    <input type="text" id="list1" class="form-control mx-sm-3" placeholder="2 points">
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                    <div class="d-flex">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="list1" style="font-size: 20px; color:black; font-weight: bold;">Sack:</label>
                                    <input type="text" id="list1" class="form-control mx-sm-3" placeholder="4 points">
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                    <div class="d-flex">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="list1" style="font-size: 20px; color:black; font-weight: bold;">Interception:</label>
                                    <input type="text" id="list1" class="form-control mx-sm-3" placeholder="5 points">
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                    <div class="d-flex">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="list1" style="font-size: 20px; color:black; font-weight: bold;">Forced fumble:</label>
                                    <input type="text" id="list1" class="form-control mx-sm-3" placeholder="4 points">
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                    <div class="d-flex">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="list1" style="font-size: 20px; color:black; font-weight: bold;">Fumble recovery:</label>
                                    <input type="text" id="list1" class="form-control mx-sm-3" placeholder="4 points">
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                    <div class="d-flex">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="list1" style="font-size: 20px; color:black; font-weight: bold;">Defensive TD:</label>
                                    <input type="text" id="list1" class="form-control mx-sm-3" placeholder="6 points">
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                    <div class="d-flex">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="list1" style="font-size: 20px; color:black; font-weight: bold;">Safety:</label>
                                    <input type="text" id="list1" class="form-control mx-sm-3" placeholder="2 points">
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                    <div class="d-flex">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="list1" style="font-size: 20px; color:black; font-weight: bold;">Pass defensed:</label>
                                    <input type="text" id="list1" class="form-control mx-sm-3" placeholder="1.5 points">
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
        <div class="row">
            <div class="col-md-10 ml-4">
                <h4 class="pt-3 font-weight-bold" style="color:#FA8C1E">Defence / Special Teams</h4>
                <div class="d-flex">
                    <input type="number" class="col-md-2 form-control" placeholder="1.0">
                    <p class="pt-2 pl-2 pr-3">Points for every sack</p>
                </div>
                <div class="d-flex">
                    <input type="number" class="col-md-2 form-control" placeholder="1.0">
                    <p class="pt-2 pl-2 pr-3">Points for every interception</p>
                </div>
                <div class="d-flex">
                    <input type="number" class="col-md-2 form-control" placeholder="6.0">
                    <p class="pt-2 pl-2 pr-3">Points for every defensive touchdown</p>
                </div>
                <div class="d-flex">
                    <input type="number" class="col-md-2 form-control" placeholder="1.0">
                    <p class="pt-2 pl-2 pr-3">Points for every defensive tumble recovery</p>
                </div>
                <div class="d-flex">
                    <input type="number" class="col-md-2 form-control" placeholder="2.0">
                    <p class="pt-2 pl-2 pr-3">Points for every defensive defensive safety</p>
                </div>
                <h4 class="pt-3 font-weight-bold" style="color:#FA8C1E">Defence Point</h4>
                <p class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias incidunt autem exercitationem maiores
                    fuga nulla nobis eius voluptatibus quidem laborum maxime eos quas aperiam, id odit ipsum consequuntur
                    perspiciatis at corporis suscipit illum minus nesciunt tempora ex. Iste, libero eveniet?</p>
                <div class="pl-3 pt-4" style="box-shadow: 2px 3px 5px gray;">
                    <form class="d-flex justify-content-start large">
                        <div class="form-group">
                            <label for="formGroupExampleInput">From</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                        </div>
                        <div class="form-group ml-4">
                            <label for="formGroupExampleInput2">To</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                        </div>
                        <div class="form-group ml-4">
                            <label for="formGroupExampleInput2">Points</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                        </div>
                        <button type="submit" class="btn btn-success d-flex text-center ml-4" style="height: 40px; width: 100px; margin-top:27px;"><i class="material-icons">add_box</i>Add</button>
                    </form>
                </div>
                <div class="mt-3" style="height:30px; background-color: whitesmoke; border:1px solid gray; filter: blur(2px);"></div>
                <div class="mt-3 mb-4 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary d-flex" style="height: 40px; width: 200px; padding-right:12.1rem; text-align: center;"><i class="material-icons">note_add</i>Create Scoring System</button>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>