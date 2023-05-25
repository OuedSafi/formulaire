<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des etudiants</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="inscription/styl.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
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
   
    <?php
   
    // Connexion à la base de données
    include('connexion.php');
    // Requête SQL pour sélectionner les noms, prenoms, dates de naissance et mots de passe des utilisateurs
    $sql = "SELECT nom, prenom, date_naissance, date_admission, genre, telephone FROM etudiant";

    // Exécution de la requête
    $stmt = $bdd->query($sql);

    // Traitement des résultats
    echo "<table class='table table-hover'>";
    echo "<tr class='bg-secondary text-white'>
    <th scope='col'>nom</th>
    <th scope='col' class=''>prenom</th>
    <th scope='col'>Date-naissance</th>
    <th scope='col'>date_admission</th>
    <th scope='col'>genre</th>
    <th scope='col'>telephone</th>
    </tr>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
        echo "<td>" . htmlspecialchars($row['prenom']) . "</td>";
        echo "<td>" . htmlspecialchars($row['date_naissance']) . "</td>";
        echo "<td>" . htmlspecialchars($row['date_admission']) . "</td>";
        echo "<td>" . htmlspecialchars($row['genre']) . "</td>";
        echo "<td>" . htmlspecialchars($row['telephone']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
   
?>
   
   </div> 
   <footer class=zz>copyright@universite joseph-ki zerbo<footer>

</body>
</html>