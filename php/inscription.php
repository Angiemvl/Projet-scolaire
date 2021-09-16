
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>

<body>

<form action="" method="post">
    <fieldset>
    <legend>Inscription</legend>
    <label for="login">Login</label></br>
     <input type="text" name="login" value=><br />
     <label for="password" required=""> Mot de passe</label></br>
     <input type="password" name="pass" value=><br />
     <label for="password" required=""> Confirmation du mot de passe</label></br><input type="password" name="pass_confirm" value="<?php if (isset($_POST['pass_confirm'])) echo htmlentities(trim($_POST['pass_confirm'])); ?>"><br />
<input type="submit" name="inscription" value="Inscription">
</fieldset>
</form>

</body>
</html>