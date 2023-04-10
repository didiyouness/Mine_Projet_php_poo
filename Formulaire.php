<form action="traitement.php" method="POST">
  <label for="nom">Nom :</label>
  <input type="text" id="nom" name="nom" required><br>

  <label for="prenom">Prénom :</label>
  <input type="text" id="prenom" name="prenom" required><br>

  <label for="email">Email :</label>
  <input type="email" id="email" name="email" required><br>

  <label for="telephone">Téléphone :</label>
  <input type="tel" id="telephone" name="telephone" required><br>

  <label for="adresse">Adresse :</label>
  <input type="text" id="adresse" name="adresse" required><br>

  <label for="ville">Ville :</label>
  <input type="text" id="ville" name="ville" required><br>

  <label for="pays">Pays :</label>
  <select id="pays" name="pays" required>
    <option value="">--Choisir un pays--</option>
    <option value="France">France</option>
    <option value="Belgique">Belgique</option>
    <option value="Suisse">Suisse</option>
    <option value="Canada">Canada</option>
    <option value="Autre">Autre</option>
  </select><br>

  <input type="submit" value="Envoyer">
</form>