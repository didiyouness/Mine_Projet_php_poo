<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form action="signup.php" method="post">
  <label for="nom">Nom:</label>
  <input type="text" id="nom" name="nom"><br><br>

  <label for="prenom">Prénom:</label>
  <input type="text" id="prenom" name="prenom"><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>

  <label for="telephone">Téléphone:</label>
  <input type="text" id="telephone" name="telephone"><br><br>

  <label for="adresse">Adresse:</label>
  <input type="text" id="adresse" name="adresse"><br><br>

  <label for="ville">Ville:</label>
  <input type="text" id="ville" name="ville"><br><br>

  <label for="pays">Pays:</label>
  <select id="pays" name="pays">
  <option value="France">choisir un pays</option>
    <option value="France">France</option>
    <option value="Spain">Morocco</option>
    <option value="Italy">Italy</option>
    <option value="Germany">Germany</option>
    <option value="United Kingdom"></option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $email = $_POST["email"];
  $telephone = $_POST["telephone"];
  $adresse = $_POST["adresse"];
  $ville = $_POST["ville"];
  $pays = $_POST["pays"];

  // Do validation on form data
  if (empty($nom) || empty($prenom) || empty($email) || empty($telephone) || empty($adresse) || empty($ville) || empty($pays)) {
    echo "All fields are required.";
  } else {
    // Save user to database or perform other desired action
    echo "User successfully signed up!";
  }
}
?>

</body>
</html>