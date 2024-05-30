<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>


    <div class="container">
  <div class="row">
        <h1>AJOUTER UN EMPLOYE</h1>
        <hr>

        @if (session ('status'))
        <div class ="alert alert-success">
            {{session ('status') }}
        </div>
        @endif
        <ul>

        @foreach ($errors ->all() as $error)
        <li class ="alert alert -danger">{{$error }} </li>

        @endforeach
        </ul>


        <form action= "/ajouter/traitement" method="POST" class=form-group>
            @csrf
            <div class="form-group">
              <label for="identifiant">Identifiant</label>
              <input type="text" class="form-control" id="identifiant" name ="identifiant">
            </div>

            <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" id="nom" name ="nom">
            </div>

            <div class="form-group">
                <label for="prénom">Prénom</label>
                <input type="text" class="form-control" id="prénom" name ="prénom">
              </div>

            <div class="form-group">
                <label for="département">Département</label>
                <input type="text" class="form-control" id="département" name ="département">
            </div>
            <br>



            <button type="submit" class="btn btn-primary">AJOUTER UN EMPLOYE</button>
            <br> </br>

          <a href="/employé" class="btn btn-danger"> Revenir à la liste des employés</a>
        </form>



        </table>
    </div>

  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>