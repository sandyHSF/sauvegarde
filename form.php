<!doctype html>
<html>
<title>formulaire</title>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
                <form class="form-group" method="post" action="traitement.php">
                    <label for="email">email</label></br>
                    <input type="email" id="email" name="moi"></br>
                    <label for="mot">mots de passe</label><br>
                    <input type="password" id="mot" name="mot"></br>
                    <input type="submit" class="btn btn-primary" value="OK">
                </form>
        </div>
    </div>
    </div>
</body>
</html>
