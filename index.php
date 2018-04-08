<!--
Name: Aylwin Sim
ID: 100074144
Date: 08/04/2018
Title: Testing Pass all datas from MySQL to AngularJS controller
-->

<!DOCTYPE html>
<html data-ng-app="myApp">
    <head>
        <title>Customize Menu</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,
                                       initial-scale=1.0" />
        <!-- Bootstrap -->
        <link href="framework/css/bootstrap.min.css" rel="stylesheet" /> <!-- HTML5 Shim and Respond.js IE8 support of HTML5
        elements and media queries --> <!-- WARNING: Respond.js doesn't work if you view the
                                       page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script> <script src="js/respond.min.js"></script>
               <![endif]-->
    </head>
    <body data-ng-controller="myCtrl">
        <h1>{{hello}}</h1>
        
        
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            
            <tbody data-ng-repeat="m in menus">
                <tr>
                    <td>{{m.id}}</td>
                    <td>{{m.name}}</td>
                    <td>{{m.description}}</td>
                </tr>
            
            </tbody>
        </table>
        
        <script src="framework/js/jquery.min.js"></script>
        <!-- All Bootstrap plug-ins file -->
        <script src="framework/js/bootstrap.min.js"></script>
        <!-- Basic AngularJS -->
        <script src="framework/js/angular.min.js"></script>
        <!-- My Controller --> 
        <script src="controller.js"></script>
    </body>
</html>