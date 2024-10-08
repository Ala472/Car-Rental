<div class="container">
 
    <h1>Insérée Une Voiture</h1>
    <form method="post" action="index.php?controller=agence&action=insertsubmit" enctype="multipart/form-data">

      <div class="row">
         
         <div class="col-lg-10">   
          <div class="form-group row">
            <div class="col-md-4">
            <label for="marque">Marque</label>
            <input type="text" name="marquev" class="form-control" id="marque" aria-describedby="marqueHelp" placeholder="Votre Marque">
          </div>
          </div>
        <div class="form-group row">
            <div class="col-md-4">
            <label for="Immat">Immatriclation</label>
            <input type="text" name="immatri" class="form-control" id="Immat" aria-describedby="ImmatriculationHelp" placeholder="Votre Immatriclation" pattern="[0-9]{3} Tun [0-9]{4}">
            <small>Exemple: 100 Tun 1100<br></small>
            </div>
          </div> 
          <div class="form-group row">
            <div class="col-md-4">
            <label for="prix">Prix Par Jour</label>
            <input type="number" name="prixj" min="1" step="0.5" class="form-control" id="prix" aria-describedby="prixpjourHelp" placeholder="Le prix par jours">
            </div>
          </div> 
          <div class="form-group row">
            <div class="col-md-4">
            <label for="descri">Description</label>
            <textarea class="form-control" name="descri" id="descri" rows="5" placeholder="Votre Description"></textarea>
           </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
            <label for="exampleFormControlSelect1">Genre</label>
            <select class="form-control" id="exampleFormControlSelect1" name="genre">
              <option>Economique</option>
              <option>Intermediaire</option>
              <option>Premium</option>
            </select>
            </div>
          </div>

          <div class="form-group row">
          
          <div class="col-md-4">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="img" name="img">
            <label class="custom-file-label" for="img">Choisir votre image</label>
           </div>

          </div>
        </div>

            <button type="submit" name="testdb" class="btn btn-dark">Enregistré</button>
        </div>
       
  </form>
</div>




