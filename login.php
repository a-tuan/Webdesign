<html>
    <head>
        <title> User Login And Registration </title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="LoginandSignup.css">
    </head>
    
    <body>
    <nav>
        <div class="images-logo">
             <img src="images/1.png" alt="Stock X">
        </div>
        </nav>
        <main>
                <div class="container">
                    <div class="row">
                    <div class="col-md-12 login">
                        <h2> Login </h2>
                        <form action="validation.php" method="post" >
                        <div class="form-group">
                            <label for='name'>User name</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for='password'>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                            <button type="submit" class="btn btn-primary"> Login </button>
                        </form>
                    </div>
                    </div>
                </div>
        </main>


    </body>
</html>