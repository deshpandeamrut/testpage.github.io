<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="myAngularApp">
    <head>
        <meta charset="UTF-8">
        <title>My Angular Project</title>
        <link rel="stylesheet" href="css/angular-material.css">
        <script src="js/angular1.4.js"></script>
        <script src="js/angular-animate.js"></script>
        <script src="js/angular-route.js"></script>
        <script src="js/angular-material1.0.js"></script>
        <script src="js/ngAria.js"></script>
        <script src="js/jquery-1.11.1.js"></script>
        <script src="js/app.js"></script>
        <link   rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"     rel="stylesheet">
        <!--<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">-->
        <style>
            html,body{
                width: 100%;
                font-style: tahoma;
            }
            .centerdiv{
                width:100%;
            }
            .centerdiv *{
                margin: 0px auto;
            }
            .halfwidth{
                margin: 0px auto;
                width:25%;
            }
            .menuBar{            
                position: fixed;
                z-index: 1000;
                left: 0px;
                top: 0px;
                background-color: #172271;
                width: 100%;
                display: inline;
                min-height: 50px;
                color:whitesmoke;
                /*border: 1px solid rgba(134, 28, 28, 0);*/
                box-shadow: 0px 2px 5px 2px #808080;
            }
            .menuBar a:hover{
                text-decoration: none;
            }
            .menuBar div a{
                display: inline-block;
                padding: 15px 10px 15px 10px;
                color:whitesmoke;
                text-decoration: none;
                outline: none;
            }
            .navbarleft a:hover{
                background: #243087;
                text-decoration: none;
                border-bottom: 1px solid lightgray;

            }
            .navbarright a:hover{
                background: #243087;
                border-bottom: 1px solid lightgray;
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

            .active{
                background: #243087;
                border-bottom: 1px solid lightgray;
            }
            .containerWelcome{
                position: relative;
                top: 100px;
                text-align: center;
                position: relative;
                top: 100px;
                text-align: center;
                width: 35%;
                margin: 0px auto;
            }
            .container{
                top: 70px;
                position: relative;
                width: 95%;
                height: auto;
            }
            .flex{
                display: flex;
                justify-content: center;
                flex-wrap:wrap;
            }
            .flex div{
                width: 250px;
                border: 0px solid #D3D3D3;
                height: auto;
                margin: 10px 15px 20px;
                box-shadow: 0px 0px 5px 1px #808080;
                background-color: #F6F6F6;
                text-align: center;
                padding-bottom: 10px;

            }
            .postContainer{
                width:85%;
                margin: 0px auto;
                padding: 10px;
            }
            .postTitle{
                text-align: center;
                padding: 10px;
            }
            .postContent{
                text-align: justify;
                padding: 10px;
            }

            .flexs{
                display: flex;
                justify-content: center;
                flex-wrap:wrap;
            }
            .flexs div {
                width: 250px;
                margin: 15px;
                text-align: justify;
            }
            .card-img-top{
                height: 150px;
                width:250px;
                text-align: left;
                padding: 0px !important;
                margin: 0px !important;
            }
            .myAnimation{

                -webkit-transition:all linear 0.5s;
                transition:all linear 0.5s;
            }
            .todolist{
                margin-top: 30px;
                text-align: left;
            }
            .todoformwrapper{
                width:100%;
            }

            .strikethrough{
                text-decoration: line-through;
            }

            .actionIcons{
                /*opcaity: 0;*/
                opacity: 0;
                /*margin-left: 5px;*/
            }
            .actionIcons:hover{
                opacity: 1;
            }
            .lastEdited{
                display: inline;
                font-size: 12px;
                color: gray;
                text-align: right;
                opacity: 0;
            }
            .lastEdited:hover{
                opacity: 1;
            }

            .item { }

            .item.ng-move,
            .item.ng-enter,
            .item.ng-leave {
                -webkit-transition:all linear 0.5s;
                transition:all linear 0.5s;
            }

            .item.ng-leave.ng-leave-active,
            .item.ng-move,
            .item.ng-enter {
                opacity:0;
            }

            .item.ng-leave,
            .item.ng-move.ng-move-active,
            .item.ng-enter.ng-enter-active {
                opacity:1;
            }

            @keyframes move {
                0% {
                    opacity:1;
                    transform: scale(0.5);
                }
                /*  30% {
                    transform: scale(1.02);
                  }*/
                100% { 
                    opacity:0;
                    transform: scale(1);
                }
            }

            .box-one { }


            .box-one.ng-hide-add {
                -webkit-animation:0.3s hide;
                animation:0.3s hide;
            }

            @keyframes hide {
                0% {
                    opacity:1;
                    transform: scale(1);
                }
                /*  30% {
                    transform: scale(1.02);
                  }*/
                100% { 
                    opacity:0;
                    transform: scale(0.5);
                }
            }

            @-webkit-keyframes hide {
                0% {
                    opacity:1;
                    transform: scale(1);
                }
                30% {
                    transform: scale(1.02);
                }
                100% { 
                    opacity:0;
                    transform: scale(0.5);
                }
            }


            .box-one.ng-hide-remove {
                -webkit-animation:0.3s show;
                animation:0.3s show;
            }

            @keyframes show {
                0% {
                    opacity:0;
                    transform: scale(0.5);
                }
                50% {
                    transform: scale(1.02);
                }
                100% { 
                    opacity:1;
                    transform: scale(1);
                }
            }

            @-webkit-keyframes show {
                0% {
                    opacity:0;
                    transform: scale(0.5);
                }
                70% {
                    transform: scale(1.02);
                }
                100% { 
                    opacity:1;
                    transform: scale(1);
                }
            }

        </style>
        <script type="text/javascript">
        </script>
    </head>
    <body>
        <div class="menuBar">
            <div class="pagetitle"><a href="#">Hello Angular</a></div>
            <div class="navbarleft">
                <a href="#item1" id="ngRepeat">ngRepeat</a>
                <a href="#item2" id="2way">Two way Binding</a>
                <a href="#feed" id="feed">Feed</a>
                <a href="#todo" id="todo">To Do</a>
            </div>
            <div class="navbarright">
                <a href="#item3" id="addUser">Add User</a>
                <a href="#item4" id='showUser'>Show Users</a>
            </div>

        </div>            
        <div ng-view></div>
    </body>
</html>
