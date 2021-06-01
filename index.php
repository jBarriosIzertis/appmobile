<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="reset.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,600" type="text/css" rel="stylesheet">
    <meta name="salesforce-allowed-domains" content="appmobilemule.herokuapp.com">
    <meta name="salesforce-community" content="https://uat-bergec.cs129.force.com/AppMovil">
    <meta name="salesforce-client-id" content="3MVG90J3nJBMnqrQGsSVKdT50.aeLCsB3yH0WXCJCiaPZISpX8MUvJTDRZSH6UXY4fYlYxFio6E0uF5JhqKTW">
    <meta name="salesforce-redirect-uri" content="https://appmobilemule.herokuapp.com/_callback.php">
    <meta name="salesforce-mode" content="modal">
    <meta name="salesforce-namespace" content>
    <meta name="salesforce-target" content="#sign-in-link">
    <meta name="salesforce-save-access-token" content="true">
    <meta name="salesforce-self-register-enabled" content="true">
    <meta name="salesforce-login-handler" content="onLogin">
    <meta name="salesforce-logout-handler" content="onLogout"> 
    <link href="https://uat-bergec.cs129.force.com/AppMovil/servlet/servlet.loginwidgetcontroller?type=css" rel="stylesheet" type="text/css" /> 
    <script src="https://uat-bergec.cs129.force.com/AppMovil/servlet/servlet.loginwidgetcontroller?type=javascript_widget" async defer></script>
</head>
    <body>
        <div id="sign-in-link" style="position: absolute; top: 20px;right: 20px;"></div>
    </body>
    
    <script>
    function onLogin(identity) {
        console.log("hello");

        var targetDiv = document.querySelector(SFIDWidget.config.target);   
        var img = document.createElement('img'); 
        img.src = identity.photos.thumbnail; 
        img.className = "sfid-avatar";

        var username = document.createElement('span'); 
        username.innerHTML = identity.username;
        username.className = "sfid-avatar-name";

        var iddiv = document.createElement('div'); 
        iddiv.id = "sfid-identity";
        iddiv.appendChild(img);     
        iddiv.appendChild(username);        

        targetDiv.innerHTML = '';
        targetDiv.appendChild(iddiv);   
    }

    function onLogout() {
        SFIDWidget.init();
    }

    </script>
</html>
