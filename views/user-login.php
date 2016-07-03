<!DOCTYPE html>
<html ng-app="app">

<head>
    <meta charset="utf-8">
    <title>Registration Page</title>

    <link rel="stylesheet" href="css/style.css">
    
    <script src="lib/angularjs/angular.min.js"></script>
    <script src="lib/angularjs/angular-route.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/controller.js"></script>
   
</head>

<body class="main">
    <div class="wrap">
        <div class="header">
        </div>
        <div align = "center" ng-controller="BlogCtrl">
            <form class="vertical-form" method="post" ng-submit="pushData(frm)">
                <h1>Registration</h1>

                <input type="email" name="email" placeholder="Email Address" spellcheck="false" maxlength="254" required ng-model="frm.email" value=""><br>



                <input type="text" name="login" placeholder="Login"   maxlength="32" ng-model="frm.login" value="" required><br>



                <input type="password" name="pass" placeholder="Password" value="" required maxlength="254" ng-model="frm.pass"><br>


                <input type="submit" value="Save"><br>
                
            </form>
            <form class="vertical-form-bottom" ng-show="show" ng-repeat="blog in blogs track by $index" >
                <input id="error" type="hidden" readonly><label for="error">User you entered is already exist. Either provide a correct password or create a new user. {{blog.login}}</label>
            </form>
            
       <!-- </div>
              /* <?php if (!empty($_POST) && $id == 0) { ?>
        <div align = "center">
            <form class="vertical-form-bottom">


                <input id="error" type="hidden" readonly><label for="error">User you entered is already exist. Either provide a correct password or create a new user.</label>
            </form>
        </div>

                <?php }
                
                if (!empty($_POST) && $id !== 0 && $logged_user_flag == 1) {?>
        <div align = "center">
            <form class="vertical-form-bottom">

                <input id="info" type="hidden" readonly><label for="info">Welcome, <?=$login?>. Your ID is: <?=$id?></label>
            </form>
        </div>


                <?php } 
                if (!empty($_POST) && $id !== 0 && $logged_user_flag == 0) {?>
        <div align = "center">
            <form class="vertical-form-bottom">
                <input id="info" type="hidden" readonly><label for="info">User <?=$login?> has been created. User ID is: <?=$id?></label>
            </form>
        </div>
                <?php } ?> */


            -->
    
    </div>
      
        
    </div>
      <footer>
        Registration Page / 2016
        </footer>
    <script src="lib/jquery.min.js"></script>
</body>
</html> 
            
