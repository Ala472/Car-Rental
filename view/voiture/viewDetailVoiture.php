
<div class="container">
 <div class="card">
   <div class="row">
     <div class="col-md-8">
      <img class="imgdet" alt="..." src=<?= $d[0]['img'] ?>>
    </div>
    <div class="col-md-4">
      <div class="card-body">
        <h3 class="card-title text-center"><?= $d[0]['marque'] ?></h3>
        <p class="card-text">Description :<br><?= $d[0]['description'] ?></p>
        <p class="card-text">Immatriculation :<br><?= $d[0]['immat'] ?></p>
        <form method="post" action="index.php?controller=client&id=<?=$d[0]['id_voiture']?>&action=semi_reservation">
         <?php if($d[0]['statut'] == 'Occupee'){ ?>
          
          <p class="text-danger text-center font-weight-bold"><?= $d[0]['statut'] ?></p>
            <div class="row mt-auto mb-3 bottomdiv">
               <div class="col-md-5 col-sm-8 col-centered">
                  
                <?php }
                else{  ?>
                  <p class="text-success text-center font-weight-bold"><?= $d[0]['statut'] ?></p>
               
               
                <input type="hidden" name="marque" value="<?= $d[0]['marque'] ?>">
                <input type="hidden" name="prix" value="<?= $d[0]['prix_parj'] ?>">
                <input type="hidden" name="immat" value="<?= $d[0]['immat'] ?>">
                <input type="hidden" name="datedep" value="<?= date('y-m-d'); ?>">

                <?php if(isset($_SESSION['clientId'])){?>
           
            <div class="input-group input-group-sm mb-3">
             <div class="input-group-prepend">
               <span class="input-group-text" id="nbj">Nombre de jours</span>
             </div>
             <input type="number" name="nbjour" value="1" min="1" class="form-control col-3" aria-label="Nombre de Jours" aria-describedby="nbj">
           </div>

 
    <button type="submit" name="addvoit" class="btn btn-light">Louer&nbsp;<i class="fas fa-taxi"></i></button>
 
      </div>
     </div>
               <!-- Button trigger modal -->

               <?php } ?>
             
             <?php }?>
           </form>
      </div>
    </div>
  </div>
</div>
</div>

