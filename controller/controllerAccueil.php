<?php
 require_once ("{$ROOT}{$DS}model{$DS}ModelAccueil.php"); 
 

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="accueil";	
	
switch ($action) {
    case "accueil":
       $pagetitle = "Univers Cars Accueil";
        $view = "accueil";//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

    

     


}

?>