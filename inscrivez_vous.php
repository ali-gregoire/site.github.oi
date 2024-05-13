<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .container {
      margin-top: 100px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center">Inscription</h3>
        </div>
        <div class="card-body">
          <form action="inscriptions.php" method="post">
            <div class="form-group">
              <label for="username">Nom d'utilisateur</label>
              <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="password">Mot de passe</label>
              <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">S'inscrire</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
