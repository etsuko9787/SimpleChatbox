<?php
session_start();
include('db.php');

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Chatbox</title>
</head>
<body>
    <script>

        function sendData(){
            var name = form.name.value;
            var msg = form.msg.value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status ==200){
                    document.getElementById('msg_text').innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open('GET','post.php?name='+name+'&msg='+msg,true);
            xmlhttp.send();
        }

        // load the DB every 2seconds
        $(document).ready(function(e){
            $.ajaxSetup({cache:false});
            setInterval(function(){$('#msg_text').load('logs.php');},2000);
        });
    </script>
    <h1>Welcome to chatbox!</h1>

    <form name="form" method="post">
        <input type="text" name="name" id="name" placeholder="name"><br>
        <input type="text" name="msg" id="msg" placeholder="message"><br>
        <input type="button" value="Send" onclick="sendData()" >
    </form>

    <div id="msg_text">
        Loading messages...
    </div>
</body>
</html>