<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="myAngularApp">
    <head>
        <meta charset="UTF-8">
        <script src="angular1.4.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-beta.2/angular-route.js"></script>
        <title>My Angular Project</title>
        <link href="bootstrap.min.css" type="text/css">
        <script src="app.js"></script>
        <!--<script src="controller.js"></script>-->
        
        <style>
                        .menuBar{            
                position: absolute;
                left: 0px;
                top: 0px;
                background-color: #172271;
                width: 100%;
                display: inline;
                min-height: 50px;
                color:whitesmoke;
                /*border: 1px solid rgba(134, 28, 28, 0);*/
            }
            .menuBar a:hover{
                text-decoration: none;
            }
            .menuBar div a{
                display: inline-block;
                padding: 15px 10px 15px 10px;
                color:whitesmoke;
                text-decoration: none;
            }
            .navbarleft a:hover{
                background: #243087;
                text-decoration: none;

            }
            .navbarright a:hover{
                background: #243087;
            }
            .pagetitle a{
                display: block;
                padding: 10px 10px 10px 10px;
            }
            .pagetitle{
                float: left;
            }
            .navbarleft{
                float: left;
            }
            .navbarright{
                float: right;
                margin: 0px 2% 0px 0px;
            }
                        
          


            </style>
        </head>
        <body>
<div class="menuBar">
            <div class="pagetitle"><a href="#">Page Title</a></div>
            <div class="navbarleft">
                <a href="#item1">Item 1</a>
                <a href="#item2">Item 2</a>
            </div>
            <div class="navbarright">
                <a href="#" class="active">Item 3</a>
                <a href="#">Item 4</a>
            </div>
            
        </div>            
            <div ng-view></div>
    </body>
</html>
