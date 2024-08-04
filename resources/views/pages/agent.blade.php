<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>CRUD AGENT</h1>
                <a href="/ajoutAgent" class="btn btn-primary">Ajouter</a>
                <hr>
                <table class="table">
<thead>
    <tr>
        <td>Id</td>
        <td>Matricule</td>
        <td>Noms</td>
        <td>Cin</td>
        <td>Nom Division</td>
        <td>Date</td>
        <td>Actions</td>
    </tr>
</thead>
      <tbody>
         @foreach($agents as $agent)
              <tr>
                  <td>{{ $agent->id }}</td>
                  <td>{{ $agent->Im }}</td>
                  <td>{{ $agent->nom }}</td>
                  <td>{{ $agent->cin }}</td>
                  <td>{{ $agent->division->nom_div }}</td>
                  <td>{{ $agent->created_at }}</td>
                  <td>
                      <a href="/modAgent/{{ $agent->id}}" class="btn btn-info">Modifier</a>
                      <a href="/supAgent/{{ $agent->id }}" class="btn btn-danger">Supprimer</a>
                 </td>
              </tr>
        @endforeach
    </tbody>
        </table>

            </div>

        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>