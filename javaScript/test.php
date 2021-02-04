<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset = "utf-8">
    <style>
        .red {
            color: red;
        }
        .green{
            color: rgb(0, 214, 0);
        }
    </style>
    </head>
    <body>
        <form id="myForm" action="abc.php" onsubmit="return validateForm();" method="POST">
        <input type="text" id="validate" class=""/>
        <br>
        <input type="text" id="email" name=email class=""/>

        <input type="submit" value="submit" name="submit" id="submit">
        </form>
   
        <script src="userSignIn-Validation.js"></script>

    </body>
</html>