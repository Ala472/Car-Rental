
 <body class="bgimg">

   <div class="container">
      <div class="card mx-auto col-lg-4">
        <div class="card-header">Connecter en tant que administrateur</div>
       <br>
        <div class="text-center">
          <img src="image/img_avatar.png" class="rounded" alt="avatar utilisateur">
        </div>

        <div class="card-body">
	 
             <form action="index.php?controller=admin&action=formlogin" method="post" class="form-signin">
             <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="mailpseudo_ad" class="form-control" placeholder="Addresse mail..." />
            </div>
            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" name="pwdin_ad" class="form-control" placeholder="Mot de passe..." />
           </div>
             <button type="submit" class="btn btn-default btn-primary" name="login_admin-submit">Login</button>
 
           </form> 
        </div>
      </div>
   </div>
 </body>