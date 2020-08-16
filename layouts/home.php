<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/styles.css?v=<?php echo time(); ?>">

    <style>
        body {
            overflow-x: hidden;
        }

        #head {
            background: blue;
            height: 135px;
        }

        img {
            vertical-align: 0px !important;
            border-style: none !important;
        }

        @media only screen and (min-width: 992px) {
            nav {
                max-height: 80px !important;
            }
        }

        @media only screen and (max-width: 768px) {
            .wrap {
                display: none;
            }
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

        .top-left {
            position: absolute;
            top: 48px;
            left: 16px;
            color: whitesmoke;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
        }
        @media only screen and (min-width: 578.98px) and (max-width: 992px) {
            .row#first{
               background-color: black;
               width: 80vw;
            }

            div#ab.text-white {
                display: none;
            }

 }

    </style>
</head>

<body>
    <div id="head" class="d-flex flex-row justify-content-center align-items-center">
        <div class="align-self-start">
            <img src="../public/images/cerberus-01.png" class="pt-0" style="height: 28vh; top:0px; width:200px; padding:0px!important; margin-top:-21px;" alt="">
        </div>
    </div>

    <div class="container-fluid pl-0 pr-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
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
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel -control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; padding: 0px 16px;">
        <a class="navbar-brand pr-0" style=" max-height:120px!important;" href="#">
            <img src="../public/images/cerberus-02.png" width="100" height="120" alt="" style="padding-right:0px!important; max-height:82px!important;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav">
                <li class="nav-item active pl-sm-2 pl-md-2 pl-lg-0 ">
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
            <div class="d-flex ml-auto mt-3">
                <div class="ml-auto">
                    <form action="" class="search-form">
                        <div class="form-group has-feedback">
                            <label for="search" class="sr-only">Search</label>
                            <input type="text" class="form-control" name="search" id="search" placeholder="Search Player">
                            <span type="submit" class="form-control-feedback" onclick="search()"><i class="material-icons" style="margin:28px 0px 0px -140px;">search</i></span>
                        </div>
                    </form>
                </div>
                <div class="ml-3 mt-md-0 mb-md-2">
                    <button class="" style="border: none; padding-top: 4px; background-color: white; border-radius: 25px!important; outline:none"><i class="material-icons">login</i></button>
                </div>
            </div>


        </div>
    </nav>

    <div class="container">
        <h2 class="pl-2" style="color:#FA8C1E; letter-spacing: 3px;">2020 Fantasy Football Dynasty Ranking</h2>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-7" style=" margin-left:20px; margin-right: 4px;">
                <div id="first" class="row text-white" style="background-color: black;" >
                    <div class="col-sm-9 col-md-9 p-0 pb-4">
                        <div class="d-flex justify-content-between align-items-end p-2">
                            <img class="" src="../public/images/messi.png" style="background-color: gray;" height="120px" width="200px" alt="">
                            <div class="text-white" id="ab" style="font-size:24px; white-space: nowrap;">Top 12 Tight Ends</div>
                            <a class="mb-1" href="" id="bc" style="color:#FA8C1E; text-decoration:none;">View All</a>
                        </div>
                        <div class="d-flex flex-column align-items-start" style="flex-wrap: nowrap!important;">
                            <div class="p-0" style="height: 51px!important; width:100%!important;">
                                <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #FA8C1E; height: 50px!important;">
                                    <div class="pl-5 pt-2 pb-1">01</div>
                                    <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                                    <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                                </div>
                            </div>
                            <div class="p-0" style="height: 54px!important; width:100%!important;">
                                <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3A37; height: 50px!important;">
                                    <div class="pl-5 pt-2 pb-1">02</div>
                                    <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                                    <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                                </div>
                            </div>
                            <div class="p-0" style="height: 54px!important; width:100%!important;">
                                <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3A37; height: 50px!important;">
                                    <div class="pl-5 pt-2 pb-1">03</div>
                                    <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                                    <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                                </div>
                            </div>
                            <div class="p-0" style="height: 54px!important; width:100%!important;">
                                <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3A37; height: 50px!important;">
                                    <div class="pl-5 pt-2 pb-1">04</div>
                                    <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                                    <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                                </div>
                            </div>
                            <div class="p-0" style="height: 54px!important; width:100%!important;">
                                <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3A37; height: 50px!important;">
                                    <div class="pl-5 pt-2 pb-1">05</div>
                                    <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                                    <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                                </div>
                            </div>
                            <div class="p-0" style="height: 54px!important; width:100%!important;">
                                <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3A37; height: 50px!important;">
                                    <div class="pl-5 pt-2 pb-1">06</div>
                                    <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                                    <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                                </div>
                            </div>
                            <div class="p-0" style="height: 54px!important; width:100%!important;">
                                <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3A37; height: 50px!important;">
                                    <div class="pl-5 pt-2 pb-1">07</div>
                                    <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                                    <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                                </div>
                            </div>
                            <div class="p-0" style="height: 54px!important; width:100%!important;">
                                <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3A37; height: 50px!important;">
                                    <div class="pl-5 pt-2 pb-1">08</div>
                                    <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                                    <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                                </div>
                            </div>
                            <div class="p-0" style="height: 54px!important; width:100%!important;">
                                <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3A37; height: 50px!important;">
                                    <div class="pl-5 pt-2 pb-1">09</div>
                                    <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                                    <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                                </div>
                            </div>
                            <div class="p-0" style="height: 54px!important; width:100%!important;">
                                <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3A37; height: 50px!important;">
                                    <div class="pl-5 pt-2 pb-1">10</div>
                                    <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                                    <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                                </div>
                            </div>
                            <div class="p-0" style="height: 54px!important; width:100%!important;">
                                <div class="d-flex justify-content-start p-0 pt-1 pb-1" style="background-color: #3D3A37; height: 50px!important;">
                                    <div class="pl-5 pt-2 pb-1">11</div>
                                    <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                                    <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                                </div>
                            </div>
                            <div class="p-0" style="height: 54px!important; width:100%!important;">
                                <div class="d-flex justify-content-start p-0 pt-1" style="background-color: #3D3A37; height: 50px!important;">
                                    <div class="pl-5 pt-2 pb-1">12</div>
                                    <div class="pl-5"><img src="../public/images/ronaldo.jpg" height="40px" width="40px" alt="" style="border-radius: 50%;"></div>
                                    <div class="pl-5 pt-2 pb-1"><span>fsdfvsd</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <div class="d-flex flex-column align-items-start" style="padding-top: 140px!important; padding-left:30px; padding-right: 20px;">
                            <div class="pb-4"><img src="../public/images/american-football.svg" height="55px" width="80px" alt=""></div>
                            <div class="pb-4"><img src="../public/images/american-football.svg" height="55px" width="80px" alt=""></div>
                            <div class="pb-4"><img src="../public/images/american-football.svg" height="55px" width="80px" alt=""></div>
                            <div class="pb-4"><img src="../public/images/american-football.svg" height="55px" width="80px" alt=""></div>
                            <div class="pb-4"><img src="../public/images/american-football.svg" height="55px" width="80px" alt=""></div>
                            <div class="pb-4"><img src="../public/images/american-football.svg" height="55px" width="80px" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm col-md-6 col-lg-4 ml-4 p-0 mt-sm-2">
                <div class="p-0" style="background-color: #FA8C1E;">
                    <div class="d-flex flex-column justify-content-start">
                        <div class="pt-3 pl-5 text-white" style="font-size:26px; letter-spacing: 2px;">Special Features</div>
                        <div class="d-flex justify-content-start pl-5 pt-4">
                            <a class="p-0 m-0" href="#" aria-label="Previous" style="font-size: 26px; color:white; text-decoration: none;;">
                                <span aria-hidden="true">&raquo;</span></a>
                            <a href="" class="pl-3 pt-2" style="color: #F0EEEE; text-decoration: none; white-space: nowrap;">My Team</a>
                        </div>
                        <div class="d-flex justify-content-start pl-5 pt-0">
                            <a class="p-0 m-0" href="#" aria-label="Previous" style="font-size: 26px; color:white; text-decoration: none;;">
                                <span aria-hidden="true">&raquo;</span></a>
                            <a href="" class="pl-3 pt-2" style="color: #F0EEEE; text-decoration: none; white-space: nowrap;">Fantasy Football Tiers</a>
                        </div>
                        <div class="d-flex justify-content-start pl-5 pt-0">
                            <a class="p-0 m-0" href="#" aria-label="Previous" style="font-size: 26px; color:white; text-decoration: none;;">
                                <span aria-hidden="true">&raquo;</span></a>
                            <a href="" class="pl-3 pt-2" style="color: #F0EEEE; text-decoration: none; white-space: nowrap;">Fantasy Football Salary Value</a>
                        </div>
                        <div class="d-flex justify-content-start pl-5 pt-0">
                            <a class="p-0 m-0" href="#" aria-label="Previous" style="font-size: 26px; color:white; text-decoration: none;;">
                                <span aria-hidden="true">&raquo;</span></a>
                            <a href="" class="pl-3 pt-2" style="color: #F0EEEE; text-decoration: none; white-space: nowrap;">Fantasy Football Projections</a>
                        </div>
                        <div class="d-flex justify-content-start pl-5 pt-0">
                            <a class="p-0 m-0" href="#" aria-label="Previous" style="font-size: 26px; color:white; text-decoration: none;;">
                                <span aria-hidden="true">&raquo;</span></a>
                            <a href="" class="pl-3 pt-2" style="color: #F0EEEE; text-decoration: none; white-space: nowrap;">Strength of Schedule</a>
                        </div>
                        <div class="d-flex justify-content-start pl-5 pt-0">
                            <a class="p-0 m-0" href="#" aria-label="Previous" style="font-size: 26px; color:white; text-decoration: none;;">
                                <span aria-hidden="true">&raquo;</span></a>
                            <a href="" class="pl-3 pt-2" style="color: #F0EEEE; text-decoration: none; white-space: nowrap;">Salary Cap Contract Suggestions</a>
                        </div>
                        <div class="d-flex justify-content-start pl-5 pt-0 pb-4">
                            <a class="p-0 m-0" href="#" aria-label="Previous" style="font-size: 26px; color:white; text-decoration: none;;">
                                <span aria-hidden="true">&raquo;</span></a>
                            <a href="" class="pl-3 pt-2" style="color: #F0EEEE; text-decoration: none; white-space: nowrap;">Line Up Analyzer</a>
                        </div>
                    </div>
                </div>
                <div class="pt-5 pl-0 pr-0 pb-0" style="position: relative;">
                    <div class="img-fluid"><img src="../public/images/rugby-package.jpg" height="365px" width="100%" alt=""></div>
                    <div class="top-left">Packages</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-5" style="background: lightgrey;">
            <div class="col-md-6 p-4 pl-4">
                <h4>My Team</h4>
                <img class="img-fluid" src="../public/images/ground1.jpg" style="height: 300px!important; width:100%;" alt="">
            </div>
            <div class="col-md-6 p-4 pl-4">
                <h4>Podcasts</h4>
                <img class="img-fluid" src="../public/images/match.jpg" style="height: 300px!important; width:100%;" alt="">
            </div>
        </div>
        <div class="row pl-3 pt-4">
            <div class="col-md-6">
                <h3>Latest Articles/ News</h3>
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
            </div>
            <div class="col-md-6">
                <h3>Hightlights Week</h3>
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
            </div>
        </div>

        <div class="row pt-5 pb-5" style="background: lightgrey;">
            <div class="col-md-7">
                <div class="d-flex flex-row">
                    <div class="item" style="height: 300px; width:80%; background:darkblue;"></div>
                    <img class="img-fluid" src="../public/images/match.jpg" style="height: 300px; width:90%; position: absolute; margin-left: 50px; margin-top: 30px;">
                </div>
            </div>
            <div class="col-md-5 p-5">
                <div class="d-flex flex-column justify-content-start pt-4">
                    <h3 class="font-weight-bold">About Carberus</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ullam porro eius corporis facilis suscipit quos aliquid nostrum accusamus fuga eos impedit asperiores minus, natus, veritatis quia dolorem numquam quam sequi sit possimus provident itaque. Molestias ullam quam quo magnam hic repudiandae excepturi natus perspiciatis tempora.</p>
                    <form class="form-inline pt-3">
                        <button class="btn btn-warning my-sm-0" type="button">Learn more</button>
                    </form>
                </div>
            </div>
        </div>
        <footer class="fixed pl-5 pr-5 pt-4 text-center">
            <p class="pb-0 mb-0"><strong>ipsum dolor sit amet consectetur adipisicing elit. Id repudiandae labore voluptatum error cum hic sapiente dolorum quas maiores, optio a, molestiae ducimus, dolores quos!</strong></p>
            <span class="pb-5"><strong>Copyright @ 20210 Carberus Fantasy Football, LLC</strong></span>
        </footer>
    </div>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>