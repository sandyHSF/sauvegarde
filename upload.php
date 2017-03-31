<!doctype html>
<html>
    <title>enregistrement</title>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href=".\assets\css\bootstrap.min.css">
        <link rel="stylesheet" href=".\assets\css\font-awesome.min.css">
    </head>
    <body>
        <div class="container">
        <div class="form-group">
            <form method="post" action="telecharge.php" enctype="multipart/form-data"> 
                <label for="inserer">inserer votre image</label>
                    <input type="file" name="upload" id="inserer">
                    <input type="submit" value="envoyer l'image" class="btn btn-success">
            </form>
        </div>
        </div>
    </body>
</html>
