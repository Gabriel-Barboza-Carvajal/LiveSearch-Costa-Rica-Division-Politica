<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="js.js" type="text/javascript"></script>
        <script src="funciones.js" type="text/javascript"></script>
        <title>Live Search</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <p><b>Start typing a name in the input field below: Costa Rica Division</b></p>
        <form action="">
            <label for="fname">name:</label>
            <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
        </form>
        <p>Suggestions: <span id="txtHint"></span></p>
    </body>
</html>
