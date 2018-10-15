<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="css/style-cadastro.css">
    </head>
    <body>
        <div class="container auth">
            <h1 class="text-center"> Cadastro de Usuários </h1>
            <div id="big-form" class="well auth-box">
              <form method="GET" action="/api/store_user">
                <fieldset>    

                  <div class="form-group">
                    <label class=" control-label" for="textinput">Nome</label>  
                    <div class="">
                      <input name="name" class="form-control input-md" type="text">
                    </div>
                  </div>
        
                  <div class="form-group">
                    <label class=" control-label" for="textinput">Sobrenome</label>
                    <div class="">
                      <input name="last_name" class="form-control input-md" type="text">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class=" control-label" for="textinput">Telefone</label>  
                    <div class="">
                      <input name="phone" class="form-control input-md" type="text">
                    </div>
                  </div>
        
                  <div class="form-group">
                    <label class=" control-label" for="textinput">Email</label>
                    <div class="">
                      <input name="email" class="form-control input-md" type="text">
                    </div>
                  </div>
        
                  <button type="submit" class="btn btn-primary pull-right"> Enviar </button>
                </fieldset>
              </form>
            </div>
            <div class="clearfix"></div>
          </div>
    </body>
</html>