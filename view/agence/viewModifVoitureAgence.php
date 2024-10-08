  <?php  Model::recuper_donnee($_GET['id']); ?>
  
  <br>

  <div class="container">
       <div class="row">
         <div class="col-sm">
          
   <!--Formulaire De Modification Pour l'agence--> 
       <form method="post" action="index.php?controller=agence&action=ediit&id=<?= $_SESSION['ids'] ?> ">  
         

          <label for="marque">Marque</label>
         <input type="text" name="marqueupdt" class="form-control w-25" value="<?= $_SESSION['maq'] ?>" aria-describedby="marqueHelp" placeholder="Votre Marque">
         
        <label for="Immat">Immatriclation</label>
        <input type="text" name="immatriupdt" class="form-control w-25" value="<?= $_SESSION['immai'] ?>" aria-describedby="ImmatriculationHelp" placeholder="Votre Immatriclation" pattern="[0-9]{3} Tun [0-9]{4}" required>
        <small>Exemple: 100 Tun 1100<br></small>

        <label for="prix">Prix Par Jour</label>
        <input type="number" name="prixjupdt" step="0.5" class="form-control w-25" value="<?= $_SESSION['prp'] ?>" aria-describedby="prixpjourHelp" placeholder="Le prix par jours"> 

        <label for="descri">Description</label>
        <textarea class="form-control w-50" name="descriupdt" rows="5" placeholder="Votre Description"><?= $_SESSION['dssc'] ?></textarea>
      
          <br>
         <button type="submit" class="btn btn-primary" name="accept_modif">Modifier</button>
     
      </form> 
       </div>
     </div>
   </div>


