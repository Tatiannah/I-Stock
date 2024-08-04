<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>Ajouter un Agent</h1>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger"> {{ $error }} </li>
                    @endforeach
                </ul>

                <form action="/ajoutAgent/traitement" class="form-group" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Matricule</label>
                        <input type="text" class="form-control" id="Im" name="Im">
                    </div>
                    <div class="form-group">
                        <label>Noms</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                    <div class="form-group">
                        <label>Cin</label>
                        <input type="text" class="form-control" id="cin" name="cin">
                    </div>
                    <div class="form-group">
                        <label>Matricule du division</label>
                     <input type="text" class="form-control" id="Imat" name="Imat">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <br><br />
                    <a href="/agent" class="btn btn-info">Retour</a>
                </form>
            </div>
        </div>
    </div>
    <!-- Inclure les liens vers les fichiers CSS et JS appropriés -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
