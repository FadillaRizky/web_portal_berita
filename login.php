
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Minimal login form Responsive Widget Template : W3Layouts</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/style_l/css/style.css" type="text/css" media="all" />

</head>

<body>
    <div class="w3l-loginblock signinform">
        <div class="logo">
            <a class="brand-logo" href="index.html">Minimal login form</a>
        </div>
        <!-- main content -->
            <div class="row map-content-9">
                <div class="info-grids">
                    <!-- action = file tujuan untuk submit data -->
                    <!-- method = menentukan bagaimana cara mengirimkan datanya -->
                    <form action="actions/aksi_login.php" method="post" class="">
                        <div class="form-grid">
                            <div class="input-field">
                                <label> Username</label>
                                <input type="text" name="username" id="email" placeholder="Username" required>
                            </div>
                            <div class="input-field">
                                <label> Password</label>
                                <input type="password" name="password" id="Password" placeholder="Password" required>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-style">Login now</button>
                    </form>
                </div>

              
            </div>
        <!-- //main content -->
        <!-- footer -->
        <div class="footer">
            <p>&copy; 2020 Minimal login form. All Rights Reserved | Design by <a href="https://w3layouts.com/"
                    target="blank">W3layouts</a></p>
        </div>
        <!-- footer -->
    </div>

    <!-- fontawesome v5-->
    <script src="js/fontawesome.js"></script>

</body>

</html>