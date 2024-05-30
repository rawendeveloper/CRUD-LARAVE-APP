<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>


    <div class="container text-center">
  <div class="row">
    <div class="col s12">
        <h1>CRUD IN LARAVEL</h1>
        <hr> 
        <a href="/ajouter" class= "btn btn-primary">Ajouter un employé</a>
        <hr>
        @if (session ('status'))
        <div class ="alert alert-success">
            {{session ('status') }}
        </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Identifiant</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Département</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
          @php 
          $ide =1;
          @endphp
            @foreach($employés as $employé)
            <tr>
                <td>{{$ide}}</td>
                <td>{{$employé->identifiant}}</td>
                <td>{{$employé->nom}}</td>
                <td>{{$employé->prénom}}</td>
                <td>{{$employé->département}}</td>



                <td>
                    <a href="/update-employé/{{$employé -> id}}" class="btn btn-info">Update</a>
                    <a href="/delete-employé/{{$employé -> id}}"  class="btn btn-danger">Delete</a>
                </td>

            </tr>
            @php
            $ide+=1;
            @endphp


            @endforeach
        </tbody>
        </table>

        {{$employés->links()}}
    </div>

  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>