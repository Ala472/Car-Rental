<?php if(!isset($_SESSION['clientId'])){
  header("Location: index.php?controller=client&action=login");
  exit();
}
  else{
    if(isset($_GET['click'])){
      if($_GET['click'] == 'vide'){
           unset($_SESSION['reser']);
        }   
   }
  ?>
<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <br><br>
       <div class="card mb-3">
         <div class="card-header" style="background-color: white">
           <h2>Détails de réservation</h2>
             <div class="card-body" >
                <div class="table-responsive">
                   <table class="table " id="dataTable" width="100%" cellspacing="0">
                      <thead>
                         <tr>
                           <th>Marque</th>
                           <th>Prix par jour</th>
                           <th>Nombre de jour</th>
                           <th>Date de depart</th>
                           <th>Montant</th>
                         </tr>
                      </thead>
                      <tbody style="font-size: 20px">
                             
                         <?php 
                         if (!empty($_SESSION['cart'])) {
                         $total=0;
                         foreach($_SESSION['cart'] as $keys => $values){
                           ?>
                         <tr>
                            <td><?php echo $values['rr']; ?></td>
                            <td><?php echo $values['prix'] ." DT" ?></td>
                            <td><?php echo $values['nbjour']; ?></td>
                            <td><?php echo $values['datedep']; ?></td>
                            <td><?php echo number_format($values['prix'] * $values['nbjour'], 2) ." DT" ?></td>
                         </tr>
                            <?php 
                            $total=$total+($values['prix']* $values['nbjour']);
                            $nbjs=$values['nbjour'];
                          }
                           ?>
                          
                      </tbody>
                       <?php
                         }
                         ?>
                   </table>
               </div>
            </div>
          </div>
        </div>
    </div> 

<div class="col-lg-4">
    <br>
   <div class="card mb-3">
     <div class="container">
        <div class="card-body">
           <form role="form" method="post" action="index.php?controller=client&action=complet&trans=adds">
      <h5><i class="fas fa-user-alt fa-lg"></i>  <?php echo $_SESSION['clientNom'] ?> <?php echo $_SESSION['clientPrenom'] ?></h5><br>
      <h5><i class="far fa-envelope fa-lg"></i>  <?php echo $_SESSION['clientEmail'] ?></h5><br>
      <h5><i class="fas fa-mobile-alt fa-lg"></i> +216 <?php echo $_SESSION['telephonecl'] ?></h5><br>
            
              <?php 
              // Affectation le nombre de jour a date local 'pc'
               $d = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
               $date_ret=strftime('%Y-%m-%d', strtotime('+ '.$nbjs .' days', $d));
               ?>

      <h5><i class="fas fa-calendar"></i> Date de Retour:<input type="date" name="del" style="width: 206px" value="<?= $date_ret ?>" readonly></h5><br>
                            
                 

                            <h2>Récapitulatif de la réservation</h2><br>
                            <div class="row">
                            <div class="col-lg-7" >
                            <h5>total</h5><br>
                            </div>                            
                            <div align="right" class="col-lg-4">
                            <h5><?php echo $total ." DT" ?></h5><br>
                            </div> 
                                                       
                            </div>
                            <center><button type="submit" onclick="return confirm('Souhaitez-vous soumettre une réservation?')" class="btn btn-lg btn-light">Soumettre la réservation</button></center>
                          


               </form>  
            </div>
         </div>
      </div>
   </div>
 </div>
</div>
<?php } ?>