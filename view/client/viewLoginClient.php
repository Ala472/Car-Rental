

  <body class="bgimg">

   <div class="container">
      <div class="card mx-auto col-lg-4">
        <div class="card-header">Connecter en tant que utilisateur</div>
       <br>
        <div class="text-center">
          <img src="image/avatar-icon-png-17.png" class="rounded" alt="avatar utilisateur">
        </div>

        <div class="card-body">
	 
             <form action="index.php?controller=client&action=formlogin" method="post" class="form-signin">
             <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="mailpseudo_c" class="form-control" placeholder="Addresse mail..." />
            </div>
            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" name="pwdin_c" class="form-control" placeholder="Mot de passe..." />
           </div>
             <button type="submit" class="btn btn-default" name="login_client-submit">Login</button>
 
              <a href="index.php?controller=client&action=registre" class="btn btn-primary btn-md active">Registre</a>
           </form> 
        </div>
      </div>
   </div>
    </body>
