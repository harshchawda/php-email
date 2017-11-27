<html>
    <head>
        <meta charset="UTF-8">
        <title>Mail Info.</title>
    </head>
    <body>
        <h1>Enter the Information to be sent to the mail.</h1><br>
        <div>
            <form action="mailto.php" method="POST">
                Email id: <br><input type="email" name="email"><br>
                Subject: <br> <input type="text" name="sub"><br>
                Information: <br/><textarea name="info" style="width:300px; height:60px;"></textarea>
                <input type="submit" name="submit">
                <input type="hidden" name="button_pressed" value="1" />
            </form>
        </div>
    </body>
</html>
