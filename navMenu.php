<!Doctype HTML>
<html>
    <head>
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
                <a href="#">Item 1</a>
                <a href="#">Item 2</a>
            </div>
            <div class="navbarright">
                <a href="#" class="active">Item 3</a>
                <a href="#">Item 4</a>
            </div>
        </div>
        <!--
        <nav class="navbar navbar-default">
          <div class="container-fluid">
             Brand and toggle get grouped for better mobile display 
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>
        
             Collect the nav links, forms, and other content for toggling 
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div> /.navbar-collapse 
          </div> /.container-fluid 
        </nav>-->
    </body>
</html>

