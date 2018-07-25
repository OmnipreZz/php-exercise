


    <form action="index.php" method="POST">
        login: <input type="text" name="login"><br>
        Password: <input type="password" name="pwd"><br>
        <input type="submit" value="OK">
    </form>


    <?php
        setcookie("login", $_POST["login"]);
        setcookie("password",  $_POST["pwd"]);
    ?>