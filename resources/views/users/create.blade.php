<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro</title>
        <link rel="icon" href="{!! asset('one.png') !!}" sizes="16x16"/>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ URL::asset('/css/style-cadastro.css') }}">
    </head>
    <body>
        <div class="container auth">
            <h1 class="text-center color-site" style="margin-bottom: 5%;"> Cadastro de Usuários </h1>
            <div id="big-form" class="auth-box">
              <form method="post" action="{{url('/cadastro')}}">
                @csrf
                <fieldset>    

                   

                  <div class="form-group">
                    <label class="input-create control-label" for="textinput">Nome</label>  
                    <div class="">
                      <input name="name" class="form-control input-md" type="text" required>
                    </div>
                  </div>
        
                  <div class="form-group">
                    <label class="input-create control-label" for="textinput">Sobrenome</label>
                    <div class="">
                      <input name="last_name" class="form-control input-md" type="text" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="input-create control-label" for="textinput">Telefone</label>  
                    <div class="">
                      <input name="phone" class="form-control input-md" type="text" required>
                    </div>
                  </div>
        
                  <div class="form-group">
                    <label class="input-create control-label" for="textinput">Email</label>
                    <div class="">
                      <input name="email" class="form-control input-md" type="email" required>
                    </div>
                  </div>

                  
                  <a href="/" class="pull-left btn-site"> Voltar </a>

                  <button type="submit" class="pull-right btn-site"> Enviar </button>
                </fieldset>
              </form>
            </div>
            <div class="clearfix"></div>
          </div>
    </body>
</html>
