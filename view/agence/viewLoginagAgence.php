
  <body class="bgimg">

   <div class="container">
      <div class="card mx-auto col-lg-4">
        <div class="card-header">Connecter en tant que agence</div>
        <br>
        <div class="text-center">
          <img src="image/avatar-icon2.png" class="rounded" width="304" height="300" alt="avatar utilisateur">
        </div>
        <div class="card-body">
   
             <form action="index.php?controller=agence&action=formlogin_agence" method="post">
             <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="mailpseudo_ag" class="form-control" placeholder="Addresse mail..." />
            </div>
            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" name="pwdin_ag" class="form-control" placeholder="Mot de passe..." />
           </div>
             <button type="submit" class="btn btn-default" name="login_agence-submit">Login</button>
              <a href="index.php?controller=agence&action=registreag" class="btn btn-primary btn-md active">Registre</a>
           </form> 
          

</div>
</div>
</div>
</body>

