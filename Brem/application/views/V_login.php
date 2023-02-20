<html>

<head>
    <link rel="stylesheet" href="<?= base_url() . 'assets/login.css' ?> ">
</head>
<header>
    <center>
        <div class="container">
            <h1><a href="">KEMBALI HOME BREM</a></h1>
            <ul>
                <li class="active"><a href="">LAKUKAN</a></li>
            </ul>
        </div>
</header>
</center>

<body>
    <div class="form-wrapper">

        <form action="#" method="post">
            <h3>Login here</h3>

            <div class="form-item">
                <input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
            </div>

            <div class="form-item">
                <input type="password" name="pass" required="required" placeholder="Password" required></input>
            </div>

            <div class="button-panel">
                <input type="submit" class="button" title="Log In" name="login" value="Login"></input>
            </div>
        </form>

        <div class="reminder">
            <p>Not a member? <a href="#">Sign up now</a></p>
            <p><a href="#">Forgot password?</a></p>
        </div>

    </div>

</body>

</html>