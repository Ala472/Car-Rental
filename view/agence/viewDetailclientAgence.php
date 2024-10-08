<div class="container">
  <center>
    <div class="card w-50">
      <div class="card-header">
       Détails de réservation client
    </div>
    <div class="card-body">
      <h5 class="card-title"><?= $_SESSION['marque_det'] ?></h5>
      <p class="card-text text-justify">Nom : <?= $_SESSION['nom_trans']; ?> <br> Prenom : <?= $_SESSION['prenom_trans']; ?> <br> Email : <?= $_SESSION['email_trans']; ?> <br> Numero de telephone : <?= $_SESSION['numtel_trans']; ?></p>
    </div>
    <div class="card-footer text-muted">
      Nombre de jour(s) : <?= $_SESSION['nbjour_trans'] ?> jour(s)
    </div>
   </div>
</center>



</div>