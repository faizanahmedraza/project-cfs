<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../public/css/styles.css?v=<?php echo time(); ?>"> -->
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">
    <style>
        @import url("../public/css/styles.css");

        body {
            overflow-x: hidden;
        }

        .dropdown>.d-flex {
            border: 1px solid lightgrey !important;
            border-radius: 3px !important;
        }

        .dropdown>.first {
            background-color: transparent !important;
            border: none !important;
            border-radius: none !important;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        /**
 * selectize.bootstrap3.css (v0.12.4) - Bootstrap 3 Theme
 * Copyright (c) 2013â€“2015 Brian Reavis & contributors
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this
 * file except in compliance with the License. You may obtain a copy of the License at:
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under
 * the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF
 * ANY KIND, either express or implied. See the License for the specific language
 * governing permissions and limitations under the License.
 *
 * @author Brian Reavis <brian@thirdroute.com>
 */
        .selectize-control.plugin-drag_drop.multi>.selectize-input>div.ui-sortable-placeholder {
            visibility: visible !important;
            background: #f2f2f2 !important;
            background: rgba(0, 0, 0, 0.06) !important;
            border: 0 none !important;
            -webkit-box-shadow: inset 0 0 12px 4px #ffffff;
            box-shadow: inset 0 0 12px 4px #ffffff;
        }

        .selectize-control.plugin-drag_drop .ui-sortable-placeholder::after {
            content: '!';
            visibility: hidden;
        }

        .selectize-control.plugin-drag_drop .ui-sortable-helper {
            -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .selectize-dropdown-header {
            position: relative;
            padding: 3px 12px;
            border-bottom: 1px solid #d0d0d0;
            background: #f8f8f8;
            -webkit-border-radius: 4px 4px 0 0;
            -moz-border-radius: 4px 4px 0 0;
            border-radius: 4px 4px 0 0;
        }

        .selectize-dropdown-header-close {
            position: absolute;
            right: 12px;
            top: 50%;
            color: #333333;
            opacity: 0.4;
            margin-top: -12px;
            line-height: 20px;
            font-size: 20px !important;
        }

        .selectize-dropdown-header-close:hover {
            color: #000000;
        }

        .selectize-dropdown.plugin-optgroup_columns .optgroup {
            border-right: 1px solid #f2f2f2;
            border-top: 0 none;
            float: left;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .selectize-dropdown.plugin-optgroup_columns .optgroup:last-child {
            border-right: 0 none;
        }

        .selectize-dropdown.plugin-optgroup_columns .optgroup:before {
            display: none;
        }

        .selectize-dropdown.plugin-optgroup_columns .optgroup-header {
            border-top: 0 none;
        }

        .selectize-control.plugin-remove_button [data-value] {
            position: relative;
            padding-right: 24px !important;
        }

        .selectize-control.plugin-remove_button [data-value] .remove {
            z-index: 1;
            /* fixes ie bug (see #392) */
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 17px;
            text-align: center;
            font-weight: bold;
            font-size: 12px;
            color: inherit;
            text-decoration: none;
            vertical-align: middle;
            display: inline-block;
            padding: 1px 0 0 0;
            border-left: 1px solid rgba(0, 0, 0, 0);
            -webkit-border-radius: 0 2px 2px 0;
            -moz-border-radius: 0 2px 2px 0;
            border-radius: 0 2px 2px 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .selectize-control.plugin-remove_button [data-value] .remove:hover {
            background: rgba(0, 0, 0, 0.05);
        }

        .selectize-control.plugin-remove_button [data-value].active .remove {
            border-left-color: rgba(0, 0, 0, 0);
        }

        .selectize-control.plugin-remove_button .disabled [data-value] .remove:hover {
            background: none;
        }

        .selectize-control.plugin-remove_button .disabled [data-value] .remove {
            border-left-color: rgba(77, 77, 77, 0);
        }

        .selectize-control.plugin-remove_button .remove-single {
            position: absolute;
            right: 28px;
            top: 6px;
            font-size: 23px;
        }

        .selectize-control {
            position: relative;
        }

        .selectize-dropdown,
        .selectize-input,
        .selectize-input input {
            color: #333333;
            font-family: inherit;
            font-size: inherit;
            line-height: 20px;
            -webkit-font-smoothing: inherit;
        }

        .selectize-input,
        .selectize-control.single .selectize-input.input-active {
            background: #ffffff;
            cursor: text;
            display: inline-block;
        }

        .selectize-input {
            border: 1px solid #cccccc;
            padding: 6px 12px;
            display: inline-block;
            width: 100%;
            overflow: hidden;
            position: relative;
            z-index: 1;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }

        .selectize-control.multi .selectize-input.has-items {
            padding: 5px 12px 2px;
        }

        .selectize-input.full {
            background-color: #ffffff;
        }

        .selectize-input.disabled,
        .selectize-input.disabled * {
            cursor: default !important;
        }

        .selectize-input.focus {
            -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15);
        }

        .selectize-input.dropdown-active {
            -webkit-border-radius: 4px 4px 0 0;
            -moz-border-radius: 4px 4px 0 0;
            border-radius: 4px 4px 0 0;
        }

        .selectize-input>* {
            vertical-align: baseline;
            display: -moz-inline-stack;
            display: inline-block;
            zoom: 1;
            *display: inline;
        }

        .selectize-control.multi .selectize-input>div {
            cursor: pointer;
            margin: 0 3px 3px 0;
            padding: 1px 3px;
            background: #efefef;
            color: #333333;
            border: 0 solid rgba(0, 0, 0, 0);
        }

        .selectize-control.multi .selectize-input>div.active {
            background: #428bca;
            color: #ffffff;
            border: 0 solid rgba(0, 0, 0, 0);
        }

        .selectize-control.multi .selectize-input.disabled>div,
        .selectize-control.multi .selectize-input.disabled>div.active {
            color: #808080;
            background: #ffffff;
            border: 0 solid rgba(77, 77, 77, 0);
        }

        .selectize-input>input {
            display: inline-block !important;
            padding: 0 !important;
            min-height: 0 !important;
            max-height: none !important;
            max-width: 100% !important;
            margin: 0 !important;
            text-indent: 0 !important;
            border: 0 none !important;
            background: none !important;
            line-height: inherit !important;
            -webkit-user-select: auto !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        .selectize-input>input::-ms-clear {
            display: none;
        }

        .selectize-input>input:focus {
            outline: none !important;
        }

        .selectize-input::after {
            content: ' ';
            display: block;
            clear: left;
        }

        .selectize-input.dropdown-active::before {
            content: ' ';
            display: block;
            position: absolute;
            background: #ffffff;
            height: 1px;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .selectize-dropdown {
            position: absolute;
            z-index: 10;
            border: 1px solid #d0d0d0;
            background: #ffffff;
            margin: -1px 0 0 0;
            border-top: 0 none;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            -webkit-border-radius: 0 0 4px 4px;
            -moz-border-radius: 0 0 4px 4px;
            border-radius: 0 0 4px 4px;
        }

        .selectize-dropdown [data-selectable] {
            cursor: pointer;
            overflow: hidden;
        }

        .selectize-dropdown [data-selectable] .highlight {
            background: rgba(255, 237, 40, 0.4);
            -webkit-border-radius: 1px;
            -moz-border-radius: 1px;
            border-radius: 1px;
        }

        .selectize-dropdown [data-selectable],
        .selectize-dropdown .optgroup-header {
            padding: 3px 12px;
        }

        .selectize-dropdown .optgroup:first-child .optgroup-header {
            border-top: 0 none;
        }

        .selectize-dropdown .optgroup-header {
            color: #777777;
            background: #ffffff;
            cursor: default;
        }

        .selectize-dropdown .active {
            background-color: #f5f5f5;
            color: #262626;
        }

        .selectize-dropdown .active.create {
            color: #262626;
        }

        .selectize-dropdown .create {
            color: rgba(51, 51, 51, 0.5);
        }

        .selectize-dropdown-content {
            overflow-y: auto;
            overflow-x: hidden;
            max-height: 200px;
            -webkit-overflow-scrolling: touch;
        }

        .selectize-control.single .selectize-input,
        .selectize-control.single .selectize-input input {
            cursor: pointer;
        }

        .selectize-control.single .selectize-input.input-active,
        .selectize-control.single .selectize-input.input-active input {
            cursor: text;
        }

        .selectize-control.single .selectize-input:after {
            content: ' ';
            display: block;
            position: absolute;
            top: 50%;
            right: 17px;
            margin-top: -3px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 5px 5px 0 5px;
            border-color: #333333 transparent transparent transparent;
        }

        .selectize-control.single .selectize-input.dropdown-active:after {
            margin-top: -4px;
            border-width: 0 5px 5px 5px;
            border-color: transparent transparent #333333 transparent;
        }

        .selectize-control.rtl.single .selectize-input:after {
            left: 17px;
            right: auto;
        }

        .selectize-control.rtl .selectize-input>input {
            margin: 0 4px 0 -2px !important;
        }

        .selectize-control .selectize-input.disabled {
            opacity: 0.5;
            background-color: #ffffff;
        }

        .selectize-dropdown,
        .selectize-dropdown.form-control {
            height: auto;
            padding: 0;
            margin: 2px 0 0 0;
            z-index: 1000;
            background: #ffffff;
            border: 1px solid #cccccc;
            border: 1px solid rgba(0, 0, 0, 0.15);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        }

        .selectize-dropdown .optgroup-header {
            font-size: 12px;
            line-height: 1.42857143;
        }

        .selectize-dropdown .optgroup:first-child:before {
            display: none;
        }

        .selectize-dropdown .optgroup:before {
            content: ' ';
            display: block;
            height: 1px;
            margin: 9px 0;
            overflow: hidden;
            background-color: #e5e5e5;
            margin-left: -12px;
            margin-right: -12px;
        }

        .selectize-dropdown-content {
            padding: 5px 0;
        }

        .selectize-dropdown-header {
            padding: 6px 12px;
        }

        .selectize-input {
            min-height: 34px;
        }

        .selectize-input.dropdown-active {
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }

        .selectize-input.dropdown-active::before {
            display: none;
        }

        .selectize-input.focus {
            border-color: #66afe9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, 0.6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, 0.6);
        }

        .has-error .selectize-input {
            border-color: #a94442;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .has-error .selectize-input:focus {
            border-color: #843534;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
        }

        .selectize-control.multi .selectize-input.has-items {
            padding-left: 9px;
            padding-right: 9px;
        }

        .selectize-control.multi .selectize-input>div {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        .form-control.selectize-control {
            padding: 0;
            height: auto;
            border: none;
            background: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
        }

        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }

        .tabbable {
            display: block;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            height: 100px;
            width: 50px;
            outline: black;
            background-size: 100%, 100%;
            border-radius: 50%;
            border: none;
            background-image: none;
        }

        .carousel-control-next-icon:after {
            content: '>';
            font-size: 35px;
            color: black;
        }

        .carousel-control-prev-icon:after {
            content: '<';
            font-size: 35px;
            color: black;
        }

        #stext::after {
            content: '(By opportunities)';
            position: absolute;
            margin-top: 25px;
            margin-bottom: 5rem;
            transform: translate(-250px);
        }

        @media (min-width: 992px) {
            #carousel {
                width: 60vw !important;
            }

            .carousel-control-prev {
                margin-bottom: -25px;
            }

            .carousel-control-next {
                margin-bottom: -25px;
            }
        }
    </style>
</head>

<body>

    <div id="header" class="d-flex justify-content-between align-items-center pl-3 pr-3">
        <div class="align-self-center">
            <form class="form-inline">
                <button class="btn search pl-4 pr-4 font-weight-bold my-sm-0" type="submit" style="font-size:20px; border:2px solid darkgrey; border-radius:0%!important;">Sign Up/ Login</button>
            </form>
        </div>
        <div class="align-self-start">
            <img src="../public/images/cerberus-01.png" class="pt-0" style="height: 28vh; top:0px; width:200px; padding:0px!important; margin-top:0px;" alt="">
        </div>
        <div class="align-self-center">
            <form class="form-inline">
                <button class="btn search pl-4 pr-4 font-weight-bold my-sm-0" type="submit" style="font-size:20px; border:2px solid darkgrey; border-radius:0%!important;">Player Search</button>
            </form>
        </div>
    </div>

    <div class="row pl-4 pr-4">
        <button type="button" class="btn btn-light" style="background-color: #b0adad; border:1px solid black; border-left: 2px solid black!important; border-radius:0%!important; height:45px;width: 13%;">
            <b>NFC East</b>
        </button>
        <button type="button" class="btn btn-light" style="background-color: #b0adad; border:1px solid black; border-radius:0%!important; height:45px;width: 13%;">
            <b>AFC East</b>
        </button>
        <button type="button" class="btn btn-light" style="background-color: #b0adad; border:1px solid black; border-radius:0%!important; height:45px;width: 12%;">
            <b>NFC North</b>
        </button>
        <button type="button" class="btn btn-light" style="background-color: #b0adad; border:1px solid black; border-radius:0%!important; height:45px;width: 12%;">
            <b>AFC North</b>
        </button>
        <button type="button" class="btn btn-light" style="background-color: #b0adad; border:1px solid black; border-radius:0%!important; height:45px;width: 12%;">
            <b>NFC South</b>
        </button>
        <button type="button" class="btn btn-light" style="background-color: #b0adad; border:1px solid black; border-radius:0%!important; height:45px;width: 12%;">
            <b>AFC South</b>
        </button>
        <button type="button" class="btn btn-light" style="background-color: #b0adad; border:1px solid black; border-radius:0%!important; height:45px;width: 13%;">
            <b>NFC West</b>
        </button>
        <button type="button" class="btn btn-light" style="background-color: #b0adad; border:1px solid black; border-right: 2px solid black!important; border-radius:0%!important; height:45px;width: 13%;">
            <b>AFC West</b>
        </button>
    </div>

    <div class="row pl-4 pr-4">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: red;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: blue;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: black;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: orange;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: green;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: yellow;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: purple;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: pink;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: brown;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: gray;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: blueviolet;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: gold;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: white;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: wheat;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: olive;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: orchid;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: aliceblue;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: aquamarine;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: salmon;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: slateblue;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: darkblue;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: darkgreen;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: fuchsia;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: grey;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: coral;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: violet;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: tomato;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: black;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: firebrick;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: aqua;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: yellowgreen;" alt="Italian Trulli">
        <img src="../public/images/cerberus-01.png" style="height:70px!important;width:3.123%;background-color: lavender;" alt="Italian Trulli">
    </div>
    <div class="row ml-2 mr-2" style="background-color:#3F3FBF; border:solid 1px black; text-align: center;">
        <h4 style="color: white;margin: 20px 0px 20px 44%;"> Live Score Boards <h4></h4>
    </div>
    <div class="row pr-3 pl-4">
        <button type="button" class="btn btn-light" style="color:white;background-color: #3F3FBF;height:65px;width: 11%;border-radius:120%;border:solid 1px black;">
            Home
        </button>
        <button type="button" class="btn btn-light" style="color:white;background-color: #3F3FBF;height:65px;width: 11%;border-radius:120%;border:solid 1px black;">
            Teams
        </button>
        <button type="button" class="btn btn-light" style="color:white;background-color: #3F3FBF;height:65px;width: 11%;border-radius:120%;border:solid 1px black;">
            Rankings
        </button>
        <button type="button" class="btn btn-light" style="color:white;background-color: #3F3FBF;height:65px;width: 11%;border-radius:120%;border:solid 1px black;">
            Projection
        </button>
        <button type="button" class="btn btn-light" style="color:white;background-color: #3F3FBF;height:65px;width: 11%;border-radius:120%;border:solid 1px black;">
            Stats
        </button>
        <button type="button" class="btn btn-light" style="color:white;background-color: #3F3FBF;height:65px;width: 11%;border-radius:120%;border:solid 1px black;">
            Tools
        </button>
        <button type="button" class="btn btn-light" style="color:white;background-color: #3F3FBF;height:65px;width: 11%;border-radius:120%;border:solid 1px black;">
            News
        </button>
        <button type="button" class="btn btn-light" style="color:white;background-color: #3F3FBF;height:65px;width: 11%;border-radius:120%;border:solid 1px black;">
            Help
        </button>
        <button type="button" class="btn btn-light" style="color:white;background-color: #3F3FBF;height:65px;width: 11%;border-radius:120%;border:solid 1px black;">
            About
        </button>
    </div>

    <div class="row pt-3 pl-3 pr-3 pb-4">
        <div class="col-md-10 ">
            <button type="button" class="btn btn-light font-weight-bold" style="font-size:22px; color:black; background-color: #0085ca9e; border-radius:0%!important; height:50px;width: 55%; border:solid 1px blue; margin:10px 5% 10px 30%;">
                Cerberus Fantasy Football Status
            </button>
            <br>
            <button type="button" class="btn btn-light mt-4" style="color:white;background-color: #3F3FBF; border-radius:0%!important; height:45px;width: 14%;border:solid 1px blue; margin:2px 5% 2px 0px;">
                Scoring Type
            </button>
            <button type="button" class="btn btn-light mt-3" style="color:white;background-color: #3F3FBF; height:65px;width: 11%;border-radius:120%;border:solid 1px blue; ">
                QB
            </button>
            <button type="button" class="btn btn-light mt-3" style="color:white;background-color: #3F3FBF; height:65px;width: 11%;border-radius:120%;border:solid 1px blue; ">
                RB
            </button>
            <button type="button" class="btn btn-light mt-3" style="color:white;background-color: #3F3FBF; height:65px;width: 11%;border-radius:120%;border:solid 1px blue; ">
                WR
            </button>
            <button type="button" class="btn btn-light mt-3" style="color:white;background-color: #3F3FBF; height:65px;width: 11%;border-radius:120%;border:solid 1px blue; ">
                TE
            </button>
            <button type="button" class="btn btn-light mt-3" style="color:white;background-color: #3F3FBF; height:65px;width: 11%;border-radius:120%;border:solid 1px blue; ">
                DEF
            </button>
            <button type="button" class="btn btn-light mt-3" style="color:white;background-color: #3F3FBF; height:65px;width: 11%;border-radius:120%;border:solid 1px blue; ">
                K
            </button>
            <button type="button" class="btn btn-light mt-3" style="color:white;background-color: #3F3FBF; height:65px;width: 11%;border-radius:120%;border:solid 1px blue; ">
                IDP
            </button>
        </div>

        <div class="col-md-2 ">
            <button type="button" class="btn btn-light" style="color:white;background-color: #3F3FBF; border-radius:0%!important; height:45px;width: 100%;border:solid 1px blue;margin:2px 0px;">
                Scoring Type
            </button><br>
            <button type="button" class="btn btn-light" style="color:white;background-color: #3F3FBF; border-radius:0%!important; height:45px;width: 100%;border:solid 1px blue;margin:2px 0px;">
                Custom Scoring
            </button><br>
            <button type="button" class="btn btn-light" style="color:white;background-color: #3F3FBF; border-radius:0%!important; height:45px;width: 100%;border:solid 1px blue;margin:2px 0px;">
                Season / Week
            </button>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-3" style="background-color:#3F3FBF;">
        <div class="container" style="background-color:white;">
            <div class="row" style="padding: 0px; margin-right: 0px;">
                <div class="col-lg-3 col-md-3 offset-md-1 mt-1">
                    <h4 class="">airyards.com</h4>
                </div>
                <div class="col-lg-3 offset-lg-2 col-md-5 offset-md-0 offset-sm-0 mt-2">
                    <div class="d-flex">
                        <div class="dropdown d-flex mt-0 pt-0">
                            <button type="button" class="d-flex first mt-0" id="dropdown" data-toggle="dropdown">Teams
                                <i class="material-icons-outlined" style="padding-left: 10px;">keyboard_arrow_down</i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </div>
                        <div class="dropdown d-flex mt-0 pt-0">
                            <button type="button" class="d-flex first mt-0" id="dropdown" data-toggle="dropdown">Players
                                <i class="material-icons-outlined" style="padding-left: 10px;">keyboard_arrow_down</i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </div>
                        <div class="dropdown d-flex mt-0 pt-0">
                            <button type="button" class="d-flex first mt-0" id="dropdown" data-toggle="dropdown">Data
                                <i class="material-icons-outlined" style="padding-left: 10px;">keyboard_arrow_down</i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </div>
                        <div class="dropdown d-flex mt-0 pt-0">
                            <button type="button" class="d-flex first mt-0" id="dropdown" data-toggle="dropdown" style="white-space: nowrap;">Player Tracking Data
                                <i class="material-icons-outlined" style="padding-left: 10px;">keyboard_arrow_down</i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h4>Air Yards Scorable Data</h4>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <div id="position" class="form-group">
                        <label class="control-label font-weight-bold" for="position">Position(s)</label>
                        <div class="shiny-options-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="position" value="QB">
                                    <span>QB</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="position" value="RB">
                                    <span>RB</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="position" value="WR" checked="checked">
                                    <span>WR</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="position" value="TE">
                                    <span>TE</span>
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="position" value="UNK">
                                    <span>Retired</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button id="download" class="btn btn-default d-flex" href="" target="_blank" download="">
                        <i class="material-icons">get_app</i>
                        Download the data
                    </button>
                    <br>
                    <br>
                </div>
                <div class="col-sm-2">
                    <div class="form-group shiny-input-container">
                        <label class="control-label" for="year-selectized">Season</label>
                        <div>
                            <select id="year" tabindex="-1" class="selectized shiny-bound-input" style="display: none;">
                                <option value="2019" selected="selected">2019</option>
                            </select>
                            <div class="selectize-control single">
                                <div class="selectize-input items full has-options has-items">
                                    <div class="item" data-value="2019">2019</div><input type="text" autocomplete="off" tabindex="" id="year-selectized" style="width: 4px;">
                                </div>
                                <div class="selectize-dropdown single" style="display: none;">
                                    <div class="selectize-dropdown-content"></div>
                                </div>
                            </div>
                            <script type="application/json" data-for="year" data-nonempty="">
                                {}
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label font-weight-bold" for="teams-selectized">Team</label>
                        <div>
                            <select id="teams" tabindex="-1" class="selectized shiny-bound-input" style="display: none;">
                                <option value="All" selected="selected">All</option>
                            </select>
                            <div class="selectize-control single">
                                <div class="selectize-input items full has-options has-items">
                                    <div class="item" data-value="All">All</div><input type="text" autocomplete="off" tabindex="" id="teams-selectized" style="width: 4px;">
                                </div>
                                <div class="selectize-dropdown single" style="display: none;">
                                    <div class="selectize-dropdown-content"></div>
                                </div>
                            </div>
                            <script type="application/json" data-for="teams" data-nonempty="">
                                {}
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label font-weight-bold" for="weeks-selectized">Add or remove weeks</label>
                        <div>
                            <select id="weeks" multiple="multiple" tabindex="-1" class="selectized shiny-bound-input" style="display: none;">
                                <option value="1" selected="selected">1</option>
                                <option value="2" selected="selected">2</option>
                                <option value="3" selected="selected">3</option>
                                <option value="4" selected="selected">4</option>
                                <option value="5" selected="selected">5</option>
                                <option value="6" selected="selected">6</option>
                                <option value="7" selected="selected">7</option>
                                <option value="8" selected="selected">8</option>
                                <option value="9" selected="selected">9</option>
                                <option value="10" selected="selected">10</option>
                                <option value="11" selected="selected">11</option>
                                <option value="12" selected="selected">12</option>
                                <option value="13" selected="selected">13</option>
                                <option value="14" selected="selected">14</option>
                                <option value="15" selected="selected">15</option>
                                <option value="16" selected="selected">16</option>
                                <option value="17" selected="selected">17</option>
                            </select>
                            <div class="selectize-control multi">
                                <div class="selectize-input items not-full has-options has-items">
                                    <div class="item" data-value="1">1</div>
                                    <div class="item" data-value="2">2</div>
                                    <div class="item" data-value="3">3</div>
                                    <div class="item" data-value="4">4</div>
                                    <div class="item" data-value="5">5</div>
                                    <div class="item" data-value="6">6</div>
                                    <div class="item" data-value="7">7</div>
                                    <div class="item" data-value="8">8</div>
                                    <div class="item" data-value="9">9</div>
                                    <div class="item" data-value="10">10</div>
                                    <div class="item" data-value="11">11</div>
                                    <div class="item" data-value="12">12</div>
                                    <div class="item" data-value="13">13</div>
                                    <div class="item" data-value="14">14</div>
                                    <div class="item" data-value="15">15</div>
                                    <div class="item" data-value="16">16</div>
                                    <div class="item" data-value="17">17</div><input type="text" autocomplete="off" tabindex="" id="weeks-selectized" style="width: 4px;">
                                </div>
                                <div class="selectize-dropdown multi" style="display: none;">
                                    <div class="selectize-dropdown-content"></div>
                                </div>
                            </div>
                            <script type="application/json" data-for="weeks">
                                {}
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6"></div>
            </div>
            <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item active" role="presentation">
                        <a class="nav-link" href="#team" data-toggle="tab" role="tab" aria-controls="team" aria-selected="false">
                            <h5>
                                <div id="data_year" class="">Year: 2019 | Team: All</div>
                            </h5>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#faqs" data-toggle="tab" role="tab" aria-controls="contact" aria-selected="false">
                            <h5>FAQs</h5>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane active" id="team" role="tabpanel" aria-labelledby="team-tab">
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="DataTables_Table_1_wrapper" class="d-flex flex-row justify-content-between">
                                    <div class="dataTables_length" id="DataTables_Table_1_length"><label>Show <select name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                    <div id="DataTables_Table_1_filter" class=""><label>Search:<input type="search" class="ml-1" placeholder="" aria-controls="DataTables_Table_1"></label></div>
                                </div>
                                <div id="table" style="width:100%; height:auto; " class="">
                                    <table class="display dataTable no-footer" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="index: activate to sort column ascending">index</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Pos: activate to sort column ascending">Pos</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Team: activate to sort column ascending">Team</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Tar: activate to sort column ascending">Tar</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Rec: activate to sort column ascending">Rec</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Rec Yards: activate to sort column ascending">Rec Yards</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Air Yards: activate to sort column ascending">Air Yards</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="YAC: activate to sort column ascending">YAC</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="TD: activate to sort column ascending">TD</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="aDOT: activate to sort column ascending">aDOT</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="RACR: activate to sort column ascending">RACR</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="MS Air: activate to sort column ascending">MS Air</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Target Share: activate to sort column ascending">Target Share</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="WOPR: activate to sort column ascending">WOPR</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="PPR Pts: activate to sort column ascending">PPR Pts</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td>1</td>
                                                <td>Michael Thomas</td>
                                                <td>WR</td>
                                                <td>NO</td>
                                                <td class=" dt-right">185</td>
                                                <td class=" dt-right">149</td>
                                                <td class=" dt-right">1725</td>
                                                <td class=" dt-right">1488</td>
                                                <td class=" dt-right">583</td>
                                                <td class=" dt-right">9</td>
                                                <td class=" dt-right">8</td>
                                                <td class=" dt-right">1.16</td>
                                                <td class=" dt-right">0.40</td>
                                                <td class=" dt-right">0.32</td>
                                                <td class=" dt-right">0.75</td>
                                                <td class=" dt-right">374.6</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>2</td>
                                                <td>Chris Godwin</td>
                                                <td>WR</td>
                                                <td>TB</td>
                                                <td class=" dt-right">121</td>
                                                <td class=" dt-right">86</td>
                                                <td class=" dt-right">1333</td>
                                                <td class=" dt-right">1301</td>
                                                <td class=" dt-right">577</td>
                                                <td class=" dt-right">9</td>
                                                <td class=" dt-right">10.8</td>
                                                <td class=" dt-right">1.02</td>
                                                <td class=" dt-right">0.23</td>
                                                <td class=" dt-right">0.22</td>
                                                <td class=" dt-right">0.49</td>
                                                <td class=" dt-right">274.1</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>3</td>
                                                <td>Julio Jones</td>
                                                <td>WR</td>
                                                <td>ATL</td>
                                                <td class=" dt-right">157</td>
                                                <td class=" dt-right">99</td>
                                                <td class=" dt-right">1394</td>
                                                <td class=" dt-right">1913</td>
                                                <td class=" dt-right">364</td>
                                                <td class=" dt-right">6</td>
                                                <td class=" dt-right">12.2</td>
                                                <td class=" dt-right">0.73</td>
                                                <td class=" dt-right">0.37</td>
                                                <td class=" dt-right">0.25</td>
                                                <td class=" dt-right">0.63</td>
                                                <td class=" dt-right">274.1</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>4</td>
                                                <td>Cooper Kupp</td>
                                                <td>WR</td>
                                                <td>LA</td>
                                                <td class=" dt-right">134</td>
                                                <td class=" dt-right">94</td>
                                                <td class=" dt-right">1161</td>
                                                <td class=" dt-right">1007</td>
                                                <td class=" dt-right">538</td>
                                                <td class=" dt-right">10</td>
                                                <td class=" dt-right">7.5</td>
                                                <td class=" dt-right">1.15</td>
                                                <td class=" dt-right">0.21</td>
                                                <td class=" dt-right">0.21</td>
                                                <td class=" dt-right">0.46</td>
                                                <td class=" dt-right">270.5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="faqs" aria-labelledby="faqs-tab">
                        <div class="row">
                            <div class="col-sm-12">
                                <br>
                                <h5>Where can I learn more about air yards?</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas exercitationem veritatis ex expedita alias, necessitatibus facere aliquid sint atque nihil!
                                </p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, natus.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, natus.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, natus.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5" style="background-color:white;">
            <div class="row" style="padding: 0px; margin-right: 0px;">
                <div class="col-lg-3 col-md-3 offset-md-1 mt-1">
                    <h4 class="">airyards.com</h4>
                </div>
                <div class="col-lg-3 offset-lg-2 col-md-5 offset-md-0 offset-sm-0 mt-2">
                    <div class="d-flex">
                        <div class="dropdown d-flex mt-0 pt-0">
                            <button type="button" class="d-flex first mt-0" id="dropdown" data-toggle="dropdown">Teams
                                <i class="material-icons-outlined" style="padding-left: 10px;">keyboard_arrow_down</i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </div>
                        <div class="dropdown d-flex mt-0 pt-0">
                            <button type="button" class="d-flex first mt-0" id="dropdown" data-toggle="dropdown">Players
                                <i class="material-icons-outlined" style="padding-left: 10px;">keyboard_arrow_down</i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </div>
                        <div class="dropdown d-flex mt-0 pt-0">
                            <button type="button" class="d-flex first mt-0" id="dropdown" data-toggle="dropdown">Data
                                <i class="material-icons-outlined" style="padding-left: 10px;">keyboard_arrow_down</i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </div>
                        <div class="dropdown d-flex mt-0 pt-0">
                            <button type="button" class="d-flex first mt-0" id="dropdown" data-toggle="dropdown" style="white-space: nowrap;">Player Tracking Data
                                <i class="material-icons-outlined" style="padding-left: 10px;">keyboard_arrow_down</i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h4>Sortable Snaps Data</h4>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <div id="position" class="form-group">
                        <label class="control-label font-weight-bold" for="position">Position(s)</label>
                        <div>
                            <select id="position" multiple="multiple" tabindex="-1" class="selectized shiny-bound-input" style="display: none;">
                                <option value="WR" selected="selected">WR</option>
                            </select>
                            <div class="selectize-control multi">
                                <div class="selectize-input items not-full has-options has-items">
                                    <div class="item" data-value="WR">WR</div><input type="text" autocomplete="off" tabindex="" id="position-selectized" style="width: 4px; opacity: 1; position: relative; left: 0px;">
                                </div>
                                <div class="selectize-dropdown multi" style="display: none; visibility: visible; width: 186.656px; top: 34px; left: 0px;">
                                    <div class="selectize-dropdown-content">
                                        <div class="option" data-selectable="" data-value="QB">QB</div>
                                        <div class="option" data-selectable="" data-value="TE">TE</div>
                                        <div class="option" data-selectable="" data-value="RB">RB</div>
                                        <div class="option" data-selectable="" data-value="LB">LB</div>
                                        <div class="option" data-selectable="" data-value="DE">DE</div>
                                        <div class="option" data-selectable="" data-value="DT">DT</div>
                                        <div class="option" data-selectable="" data-value="NT">NT</div>
                                        <div class="option" data-selectable="" data-value="SS">SS</div>
                                        <div class="option" data-selectable="" data-value="FS">FS</div>
                                        <div class="option" data-selectable="" data-value="T">T</div>
                                        <div class="option" data-selectable="" data-value="G">G</div>
                                        <div class="option" data-selectable="" data-value="C">C</div>
                                        <div class="option" data-selectable="" data-value="CB">CB</div>
                                    </div>
                                </div>
                            </div>
                            <script type="application/json" data-for="position">
                                {}
                            </script>
                        </div>
                    </div>
                    <button id="download" class="btn btn-default d-flex" href="" target="_blank" download="">
                        <i class="material-icons">get_app</i>
                        Download the data
                    </button>
                    <br>
                    <br>
                </div>
                <div class="col-sm-2">
                    <div class="form-group shiny-input-container">
                        <label class="control-label font-weight-bold" for="year-selectized">Season</label>
                        <div>
                            <select id="year" tabindex="-1" class="selectized shiny-bound-input" style="display: none;">
                                <option value="2019" selected="selected">2019</option>
                            </select>
                            <div class="selectize-control single">
                                <div class="selectize-input items full has-options has-items">
                                    <div class="item" data-value="2019">2019</div><input type="text" autocomplete="off" tabindex="" id="year-selectized" style="width: 4px;">
                                </div>
                                <div class="selectize-dropdown single" style="display: none;">
                                    <div class="selectize-dropdown-content"></div>
                                </div>
                            </div>
                            <script type="application/json" data-for="year" data-nonempty="">
                                {}
                            </script>
                        </div>
                    </div>

                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label font-weight-bold" for="teams-selectized">Team</label>
                        <div>
                            <select id="teams" tabindex="-1" class="selectized shiny-bound-input" style="display: none;">
                                <option value="All" selected="selected">All</option>
                            </select>
                            <div class="selectize-control single">
                                <div class="selectize-input items full has-options has-items">
                                    <div class="item" data-value="All">All</div><input type="text" autocomplete="off" tabindex="" id="teams-selectized" style="width: 4px;">
                                </div>
                                <div class="selectize-dropdown single" style="display: none;">
                                    <div class="selectize-dropdown-content"></div>
                                </div>
                            </div>
                            <script type="application/json" data-for="teams" data-nonempty="">
                                {}
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label class="control-label font-weight-bold" style="font-size: 0.95rem;" for="weeks-selectized">Add or remove weeks</label>
                        <div>
                            <select id="weeks" multiple="multiple" tabindex="-1" class="selectized shiny-bound-input" style="display: none;">
                                <option value="1" selected="selected">1</option>
                                <option value="2" selected="selected">2</option>
                                <option value="3" selected="selected">3</option>
                                <option value="4" selected="selected">4</option>
                                <option value="5" selected="selected">5</option>
                                <option value="6" selected="selected">6</option>
                                <option value="7" selected="selected">7</option>
                                <option value="8" selected="selected">8</option>
                                <option value="9" selected="selected">9</option>
                                <option value="10" selected="selected">10</option>
                                <option value="11" selected="selected">11</option>
                                <option value="12" selected="selected">12</option>
                                <option value="13" selected="selected">13</option>
                                <option value="14" selected="selected">14</option>
                                <option value="15" selected="selected">15</option>
                                <option value="16" selected="selected">16</option>
                                <option value="17" selected="selected">17</option>
                            </select>
                            <div class="selectize-control multi">
                                <div class="selectize-input items not-full has-options has-items">
                                    <div class="item" data-value="1">1</div>
                                    <div class="item" data-value="2">2</div>
                                    <div class="item" data-value="3">3</div>
                                    <div class="item" data-value="4">4</div>
                                    <div class="item" data-value="5">5</div>
                                    <div class="item" data-value="6">6</div>
                                    <div class="item" data-value="7">7</div>
                                    <div class="item" data-value="8">8</div>
                                    <div class="item" data-value="9">9</div>
                                    <div class="item" data-value="10">10</div>
                                    <div class="item" data-value="11">11</div>
                                    <div class="item" data-value="12">12</div>
                                    <div class="item" data-value="13">13</div>
                                    <div class="item" data-value="14">14</div>
                                    <div class="item" data-value="15">15</div>
                                    <div class="item" data-value="16">16</div>
                                    <div class="item" data-value="17">17</div><input type="text" autocomplete="off" tabindex="" id="weeks-selectized" style="width: 4px;">
                                </div>
                                <div class="selectize-dropdown multi" style="display: none;">
                                    <div class="selectize-dropdown-content"></div>
                                </div>
                            </div>
                            <script type="application/json" data-for="weeks">
                                {}
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6"></div>
            </div>
            <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item active" role="presentation">
                        <a class="nav-link" href="#team" data-toggle="tab" role="tab" aria-controls="team" aria-selected="false">
                            <h5>
                                <div id="data_year" class="">Year: 2019 | Team: All</div>
                            </h5>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#faqs" data-toggle="tab" role="tab" aria-controls="contact" aria-selected="false">
                            <h5>FAQs</h5>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane active" id="team" role="tabpanel" aria-labelledby="team-tab">
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="DataTables_Table_1_wrapper" class="d-flex flex-row justify-content-between">
                                    <div class="dataTables_length" id="DataTables_Table_1_length"><label>Show <select name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                    <div id="DataTables_Table_1_filter" class=""><label>Search:<input type="search" class="ml-1" placeholder="" aria-controls="DataTables_Table_1"></label></div>
                                </div>
                                <div id="table" style="width:100%; height:auto; " class="">
                                    <table class="display dataTable no-footer" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="index: activate to sort column ascending">index</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Pos: activate to sort column ascending">Pos</th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Team: activate to sort column ascending">Team</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Tar: activate to sort column ascending">Tar</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Rec: activate to sort column ascending">Rec</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Rec Yards: activate to sort column ascending">Rec Yards</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Air Yards: activate to sort column ascending">Air Yards</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="YAC: activate to sort column ascending">YAC</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="TD: activate to sort column ascending">TD</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="aDOT: activate to sort column ascending">aDOT</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="RACR: activate to sort column ascending">RACR</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="MS Air: activate to sort column ascending">MS Air</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Target Share: activate to sort column ascending">Target Share</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="WOPR: activate to sort column ascending">WOPR</th>
                                                <th class="dt-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="PPR Pts: activate to sort column ascending">PPR Pts</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td>1</td>
                                                <td>Michael Thomas</td>
                                                <td>WR</td>
                                                <td>NO</td>
                                                <td class=" dt-right">185</td>
                                                <td class=" dt-right">149</td>
                                                <td class=" dt-right">1725</td>
                                                <td class=" dt-right">1488</td>
                                                <td class=" dt-right">583</td>
                                                <td class=" dt-right">9</td>
                                                <td class=" dt-right">8</td>
                                                <td class=" dt-right">1.16</td>
                                                <td class=" dt-right">0.40</td>
                                                <td class=" dt-right">0.32</td>
                                                <td class=" dt-right">0.75</td>
                                                <td class=" dt-right">374.6</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>2</td>
                                                <td>Chris Godwin</td>
                                                <td>WR</td>
                                                <td>TB</td>
                                                <td class=" dt-right">121</td>
                                                <td class=" dt-right">86</td>
                                                <td class=" dt-right">1333</td>
                                                <td class=" dt-right">1301</td>
                                                <td class=" dt-right">577</td>
                                                <td class=" dt-right">9</td>
                                                <td class=" dt-right">10.8</td>
                                                <td class=" dt-right">1.02</td>
                                                <td class=" dt-right">0.23</td>
                                                <td class=" dt-right">0.22</td>
                                                <td class=" dt-right">0.49</td>
                                                <td class=" dt-right">274.1</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>3</td>
                                                <td>Julio Jones</td>
                                                <td>WR</td>
                                                <td>ATL</td>
                                                <td class=" dt-right">157</td>
                                                <td class=" dt-right">99</td>
                                                <td class=" dt-right">1394</td>
                                                <td class=" dt-right">1913</td>
                                                <td class=" dt-right">364</td>
                                                <td class=" dt-right">6</td>
                                                <td class=" dt-right">12.2</td>
                                                <td class=" dt-right">0.73</td>
                                                <td class=" dt-right">0.37</td>
                                                <td class=" dt-right">0.25</td>
                                                <td class=" dt-right">0.63</td>
                                                <td class=" dt-right">274.1</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td>4</td>
                                                <td>Cooper Kupp</td>
                                                <td>WR</td>
                                                <td>LA</td>
                                                <td class=" dt-right">134</td>
                                                <td class=" dt-right">94</td>
                                                <td class=" dt-right">1161</td>
                                                <td class=" dt-right">1007</td>
                                                <td class=" dt-right">538</td>
                                                <td class=" dt-right">10</td>
                                                <td class=" dt-right">7.5</td>
                                                <td class=" dt-right">1.15</td>
                                                <td class=" dt-right">0.21</td>
                                                <td class=" dt-right">0.21</td>
                                                <td class=" dt-right">0.46</td>
                                                <td class=" dt-right">270.5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="faqs" aria-labelledby="faqs-tab">
                        <div class="row">
                            <div class="col-sm-12">
                                <br>
                                <h5>Where can I learn more about air yards?</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas exercitationem veritatis ex expedita alias, necessitatibus facere aliquid sint atque nihil!
                                </p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, natus.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, natus.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, natus.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5" style="background-color:white;">
            <div class="text-center"><span style="font-family:'Arial';font-size:27px;line-height:31px;color:#555555;font-weight:normal;font-style:normal;text-decoration:none;">Red Zone Rushing Success Rate</span></div>
            <div id="carousel" class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin: 0px 40px 0px 40px;">

                    <div class="carousel-inner mt-4">
                        <div class="carousel-item active">
                            <div class="row no-gutters" style="margin: 0rem; padding: 0rem; flex-wrap: nowrap;">
                                <div class="col-4 pr-1" style="background-color: lightgrey; color: #6c757d; height: 5rem; width:4rem; margin-right: 0.3rem;"><span>By Player, then Team</span></div>
                                <div class="col-4 pr-1" style="background-color: lightgrey; color:  #6c757d; height: 5rem; width:4rem; margin-right: 0.3rem;"><span>By Player, then Team</span></div>
                                <div class="col-4 pr-1" style="background-color: lightgrey; color: #6c757d; height: 5rem; width:4rem; margin-right: 0.3rem;"><span>By Player, then Team</span></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row no-gutters" style="margin: 0rem; padding: 0rem; flex-wrap: nowrap;">
                                <div class="col-4 pr-1" style="background-color: lightgrey; color: #6c757d; height: 5rem; width:4rem; margin-right: 0.3rem;"><span>By Player, then Team</span></div>
                                <div class="col-4 pr-1" style="background-color: lightgrey; color:  #6c757d; height: 5rem; width:4rem; margin-right: 0.3rem;"><span>By Player, then Team</span></div>
                                <div class="col-4 pr-1" style="background-color: lightgrey; color: #6c757d; height: 5rem; width:4rem; margin-right: 0.3rem;"><span>By Player, then Team</span></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row no-gutters" style="margin: 0rem; padding: 0rem; flex-wrap: nowrap;">
                                <div class="col-4 pr-1" style="background-color: lightgrey; color: #6c757d; height: 5rem; width:4rem; margin-right: 0.3rem;"><span>By Player, then Team</span></div>
                                <div class="col-4 pr-1" style="background-color: lightgrey; color:  #6c757d; height: 5rem; width:4rem; margin-right: 0.3rem;"><span>By Player, then Team</span></div>
                                <div class="col-4 pr-1" style="background-color: lightgrey; color: #6c757d; height: 5rem; width:4rem; margin-right: 0.3rem;"><span>By Player, then Team</span></div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="width: 0px; margin-left:-25px;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only" style="color: #000000;">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="width: 0px; margin-right:-25px;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group ml-5">
                        <label class="control-label font-weight-bold" style="margin-bottom: 0.1rem;" for="year-selectized">Season</label>
                        <div>
                            <select id="year" tabindex="-1" class="selectized" style="display: none;">
                                <option value="2019" selected="selected">2019</option>
                            </select>
                            <div class="selectize-control single">
                                <div class="selectize-input items full has-options has-items">
                                    <div class="item" data-value="2019">2019</div><input type="text" autocomplete="off" tabindex="" id="year-selectized" style="width: 4px;">
                                </div>
                                <div class="selectize-dropdown single" style="display: none;">
                                    <div class="selectize-dropdown-content"></div>
                                </div>
                            </div>
                            <script type="application/json" data-for="year" data-nonempty="">
                                {}
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 no-gutters ml-0">
                    <div id="stext" class="text-center mt-4"><span style="font-family:'Arial'; margin-left:-190px ; font-size:24px;color:#555555;font-weight:bold;font-style:normal;text-decoration:none;">Red Zone Rushing Success Rate</span></div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-2 offset-md-1">
                    <div class="form-group">
                        <label class="control-label font-weight-bold" for="year-selectized">Offense</label>
                        <div>
                            <select id="year" tabindex="-1" class="selectized shiny-bound-input" style="display: none;">
                                <option value="2019" selected="selected">(All)</option>
                            </select>
                            <div class="selectize-control single">
                                <div class="selectize-input items full has-options has-items">
                                    <div class="item" data-value="2019">(All)</div><input type="text" autocomplete="off" tabindex="" id="year-selectized" style="width: 4px;">
                                </div>
                                <div class="selectize-dropdown single" style="display: none;">
                                    <div class="selectize-dropdown-content"></div>
                                </div>
                            </div>
                            <script type="application/json" data-for="year" data-nonempty="">
                                {}
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group shiny-input-container">
                        <label class="control-label font-weight-bold" for="year-selectized">Position</label>
                        <div>
                            <select id="year" tabindex="-1" class="selectized shiny-bound-input" style="display: none;">
                                <option value="2019" selected="selected">RB</option>
                            </select>
                            <div class="selectize-control single">
                                <div class="selectize-input items full has-options has-items">
                                    <div class="item" data-value="2019">RB</div><input type="text" autocomplete="off" tabindex="" id="year-selectized" style="width: 4px;">
                                </div>
                                <div class="selectize-dropdown single" style="display: none;">
                                    <div class="selectize-dropdown-content"></div>
                                </div>
                            </div>
                            <script type="application/json" data-for="year" data-nonempty="">
                                {}
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group shiny-input-container">
                        <label class="control-label font-weight-bold" for="year-selectized">Week</label>
                        <div>
                            <select id="year" tabindex="-1" class="selectized shiny-bound-input" style="display: none;">
                                <option value="2019" selected="selected">(All)</option>
                            </select>
                            <div class="selectize-control single">
                                <div class="selectize-input items full has-options has-items">
                                    <div class="item" data-value="2019">(All)</div><input type="text" autocomplete="off" tabindex="" id="year-selectized" style="width: 4px;">
                                </div>
                                <div class="selectize-dropdown single" style="display: none;">
                                    <div class="selectize-dropdown-content"></div>
                                </div>
                            </div>
                            <script type="application/json" data-for="year" data-nonempty="">
                                {}
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group shiny-input-container">
                        <label class="control-label font-weight-bold" for="year-selectized">Down</label>
                        <div>
                            <select id="year" tabindex="-1" class="selectized shiny-bound-input" style="display: none;">
                                <option value="2019" selected="selected">(All)</option>
                            </select>
                            <div class="selectize-control single">
                                <div class="selectize-input items full has-options has-items">
                                    <div class="item" data-value="2019">(All)</div><input type="text" autocomplete="off" tabindex="" id="year-selectized" style="width: 4px;">
                                </div>
                                <div class="selectize-dropdown single" style="display: none;">
                                    <div class="selectize-dropdown-content"></div>
                                </div>
                            </div>
                            <script type="application/json" data-for="year" data-nonempty="">
                                {}
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group shiny-input-container">
                        <label class="control-label font-weight-bold" for="year-selectized">Quarter</label>
                        <div>
                            <select id="year" tabindex="-1" class="selectized shiny-bound-input" style="display: none;">
                                <option value="2019" selected="selected">(All)</option>
                            </select>
                            <div class="selectize-control single">
                                <div class="selectize-input items full has-options has-items">
                                    <div class="item" data-value="2019">(All)</div><input type="text" autocomplete="off" tabindex="" id="year-selectized" style="width: 4px;">
                                </div>
                                <div class="selectize-dropdown single" style="display: none;">
                                    <div class="selectize-dropdown-content"></div>
                                </div>
                            </div>
                            <script type="application/json" data-for="year" data-nonempty="">
                                {}
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="no-gutters">
                        <h4 class="">RZ Run By Team</h4>
                    </div>
                    <table class="table table-borderless table-sm ">
                        <tbody class="pt-0 mt-0">
                            <tr>
                                <td class="pr-3 mr-3">MIN</td>
                                <td class="table-success">Lorem ipsum dolor sit amet consectetur.</td>
                            </tr>
                            <tr>
                                <td class="pr-3 mr-3">SF</td>
                                <td class="table-success">Lorem ipsum dolor sit amet consectetur.</td>
                            </tr>
                            <tr>
                                <td class="pr-3 mr-3">NE</td>
                                <td colspan="2" class="table-secondary">Lorem ipsum dolor sit amet consectetur.</td>
                            </tr>
                            <tr>
                                <td class="pr-3 mr-3">BAL</td>
                                <td class="bg-success">Lorem ipsum dolor sit amet consectetur.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4"></div>

            </div>
        </div>
    </div>
    </div>

    <footer class="fixed pl-5 pr-5 pt-4 pb-4 mt-2" style="background-color: #3F3FBF; color:white; font-size:20px;">
        <p class="pb-0 mb-0">Iipsum dolor sit amet consectetur adipisicing elit. Id repudiandae labore voluptatum error cum hic sapiente dolorum quas maiores, optio a, molestiae ducimus, dolores quos!</strong></p>
        <span class="pb-3">Copyright @ 20210 Carberus Fantasy Football, LLC</span>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>