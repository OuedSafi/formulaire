<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="inscription/styl.css">
   <link rel="stylesheet" href="./style.css">
</head>
<body class=pp>
    <header class=js>
    <div class="mp">
        <img src="image/rr.png" alt= "75px" width="75px" height="75px" >
    </div>
    <div class=gg>
    
        <p> Burkina Faso <br>
                Unite-progres-Justice 
        </p>    
    </div>
        <div class=rr>
        <h3>UNIVERSITE JOSEPH-KI ZERBO  UFR/SDS<h3>
        </div>
    </header>
    
    <div class="container">
        <h4>Formulaire d'inscription</h4>
        <form action="enregistrement.php" method="post">
            <div class="form-group ">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrez votre nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Entrez votre prénom">
            </div>
            <div class="form-group">
                <label for="date_naissance">Date_naissance :</label>
                <input type="date" class="form-control" name="date_naissance" id="date_naissance" placeholder="Entrez votre date_naissance">
            </div>
            <div class="form-group">
                <label for="date_admission">Date_admission :</label>
                <input type="date" class="form-control" name="date_admission" id="date_admission" placeholder="Entrez votre date_admission">
            </div>
            <!-- <div class="form-group">
                <label for="genre">genre:</label>
                <input type="text" class="form-control" name="genre" id="genre" placeholder="">
                <option value="">Sélectionnez</option>
            <option value="homme">m</option>
            <option value="femme">f</option>
            </div> -->

            <label for="genre">Genre :</label>
          <select id="genre" name="genre" class="form-control" required>
            <option value="">Sélectionnez</option>
            <option value="m">m</option>
            <option value="f">f</option>
          </select>
            
            <div class="form-group">
                <label for="telephone">telephone :</label>
                <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Entrez votre telephone">
            </div>
            <button type="submit" class="btn btn-primary">enregistrement</button>
            <button type="submit" class="btn btn-primary">voir la liste</button>
        </form>
    </div>
    <footer class=zz>copyright@universite joseph-ki zerbo<footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- 
    <p  class="dd">uzanzhfuhnzijdoieppoe,</p> -->
</body>
</html>
