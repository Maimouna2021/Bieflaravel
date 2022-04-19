<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
       
    
    <form action="{{URL('update/'.$proprietaire->id)}}" method="post" class="w-50 m-auto">
    
        @csrf
        @method('PUT')
        <div class="row bg-primary opacity-25">
             <h1 class="m-auto text-center">Ajouter proprietaire</h1>
         </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Code prietaire</label>
                <input type="number" class="form-control" name="CodeProprietaire" id="exampleInputCode_proprietaire" aria-describedby="emailHelp" value="{{$proprietaire->CodeProprietaire}}">
                <div id="emailHelp" class="form-text">veiller remplir votre cote svp.</div>
            </div>

            <label for="exampleInputNom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="Nom_proprietaire" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$proprietaire->Nom_proprietaire}}">
                <div id="emailHelp" class="form-text">veiller remplir votre nom svp.</div>
            </div>

            <label for="exampleInputNom" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="Prenom_proprietaire" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$proprietaire->Prenom_proprietaire}}">
                <div id="emailHelp" class="form-text">veiller remplir votre Prenom svp.</div>
            </div>

            <label for="exampleInputDate_naissance" class="form-label">Date_naissance</label>
                <input type="date" class="form-control" name="Date_naissance" id="exampleInputDate_naissance" aria-describedby="emailHelp" value=" {{$proprietaire->Date_naissance}}">
                <div id="emailHelp" class="form-text">veiller remplir votre Date_naissance svp.</div>
            </div> 

            <label for="exampleInputEmail1" class="form-label">Lieu_naissance</label>
                <input type="text" class="form-control" name="Lieu_naissance" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{$proprietaire->Lieu_naissance}}">
                <div id="emailHelp" class="form-text">veiller remplir votre Lieu_naissance svp.</div>
            </div>

            <label for="exampleInputEmail1" class="form-label">code_piece_identite</label>
                <input type="number" class="form-control" name="code_piece_identite" id="exampleInputEmail1" aria-describedby="emailHelp" value=" {{$proprietaire->code_piece_identite}}">
                <div id="emailHelp" class="form-text">veiller remplir votre code_piece_identite svp.</div>
            </div>

            <label for="exampleInputEmail1" class="form-label">Numero_piece_identite</label>
                <input type="number" class="form-control" name="Numero_piece_identite" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$proprietaire->Numero_piece_identite}}">
                <div id="emailHelp" class="form-text">veiller remplir votre Numero_piece_identite svp.</div>
            </div>

            <label for="exampleInputEmail1" class="form-label">Adresse</label>
                <input type="text" class="form-control" name="Adresse" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$proprietaire->Adresse}}">
                <div id="emailHelp" class="form-text">veiller remplir votre Adresse svp.</div>
            </div>

            <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$proprietaire->Email}}">
                <div id="emailHelp" class="form-text">veiller remplir votre Email svp.</div>
            </div>

            <label for="exampleInputEmail1" class="form-label">Genre</label>
            <select name="id_genre" id="">
                <option value="" selected>Selection le genre</option>
                <option value="1">masculin</option>
                <option value="2">feminin</option>

            </select>
                <div id="GenreHelp" class="form-text">veiller remplir votre Genre svp.</div>
            </div>
         <button type="submit" class="btn btn-primary">Ajoute</button>
</form>
</body>
</html>