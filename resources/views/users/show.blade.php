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
        <link href="https:////cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" id="bootstrap-css">        
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="https:////cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>        
        <link rel="stylesheet" href="{{ URL::asset('/css/style-cadastro.css') }}">
        <script>
        $(document).ready( function () {
            $('#users_tb').DataTable();
        } );
        </script>
    </head>
    <body>
        <div class="container auth">
            <h1 class="text-center"> Usuários </h1>
            <div class="table">
                @if(session()->has('success'))
                    @if(session()->get('success'))
                        <div class="alert-message alert-message-success">
                        {{ session()->get('success') }}
                      </div>
                    @endif
                  @elseif(session()->has('error'))
                    @if(session()->get('error')) 
                        <div class="alert-message alert-message-danger">
                        {{ session()->get('error') }}
                      </div>
                    @endif
                  @endif 
                <a href="cadastro/create" class="btn btn-primary pull-right btn-add">Cadastrar novo usuário</a>
                <table id="users_tb" class="stripe">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Telefone</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)                        
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->first_name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->email}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
