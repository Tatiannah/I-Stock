<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width", initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>Ajout Fourniture</h1>
                @if (session('status'))
                <div class="alert alert-success">
           {{ session('status') }}
                </div>
                @endif
                
                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{$error}}</li>
                    @endforeach
                </ul>

                <form action="/ajoutFourniture/traitement" class="form-group" method="POST">
                    @csrf
                    <div class="form-group">
                          <label>CodeF</label>
                          <input type="text" class="form-control" id="CodeF" name="CodeF">
                    </div>
                    <div class="form-group">
                          <label>Designation</label>
                          <input type="text" class="form-control" id="Designation" name="Designation">
                    </div>
                    <div class="form-group">
                          <label>Quantités</label>
                          <input type="integer" class="form-control" id="Qte_initiale" name="Qte_initiale">
                    </div>
                    <br>
                    <button type="text" class="btn btn-primary">Ajouter</button>
                    <br><br/>
                    <a href="/fourniture" class="btn btn-info">Retour</a>
                </form>
               

            </div>

        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>