<!DOCTYPE html>
<html>
    <head>
        <title> User Registration </title>
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
            <div class="col-md-12 Signup">
                <h2> Sign up </h2>
                <form action="registration.php" method="POST" >
                <div class="form-group">
                    <labe for='name'>User name</label>
                    <input type="text" name="user" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for='phone'>Phone number</label>
                    <input type="number" name="number" pattern="[0-9] {10}" class="form-control" required>
                </div>  

                <div class="form-group">
                    <label for='email'>Email address</label>
                    <input type="email" name="email" class="form-control" required>
                </div>  

                <div class="form-group">
                    <label for='password'>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>  
                
                <div class="form-group">
                    <label for='password'>Re-password</label>
                    <input type="password" name="repassword" class="form-control" required>
                </div>  
                
                    <button type="submit" class="btn btn-primary"> Sign Up </button>
                </form>
            </div>
        </main>


    </body>
</html>