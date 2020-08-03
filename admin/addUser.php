<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<!-- Inclusion PHP -->
<?php require("../header.php");
    require_once("../logDb.php");
?>

<!-- Fin inclusion PHP -->
<div class=" container ajout">
<div class="col-sm-12 col-lg-12" >
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Ajouter utilisateur</h4>
        <p class="card-category" >Les champs contenant <span style="color: red;">*</span> sont obligatoires</p>
      </div>
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label class="bmd-label-floating">Numéro Téléphone</label>
                <input type="text" class="form-control">
              </div>
            </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label class="bmd-label-floating">Username</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Adresse mail<span style="color: red;">*</span></label>
                  <input type="email" class="form-control">
                </div>
              </div>
            </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Prénom<span style="color: red;">*</span></label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nom<span style="color: red;">*</span></label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Adresse</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Ville</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Role</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Description</label>
                    <div class="form-group">
                      <textarea class="form-control" rows="5"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Ajouter</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
    </div>
</div>


<style>
    .ajout {
    
    }
</style>

</body>
</html>