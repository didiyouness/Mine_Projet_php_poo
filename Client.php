class Client {
  private $nom;
  private $prenom;
  private $email;
  private $ville;
  private $adresse;
  private $pays;

  public function __construct($nom, $prenom, $email, $ville, $adresse, $pays) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->ville = $ville;
    $this->adresse = $adresse;
    $this->pays = $pays;
  }

  public function getNom() {
    return $this->nom;
  }

  public function setNom($nom) {
    $this->nom = $nom;
  }

  public function getPrenom() {
    return $this->prenom;
  }

  public function setPrenom($prenom) {
    $this->prenom = $prenom;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getVille() {
    return $this->ville;
  }

  public function setVille($ville) {
    $this->ville = $ville;
  }

  public function getAdresse() {
    return $this->adresse;
  }

  public function setAdresse($adresse) {
    $this->adresse = $adresse;
  }

  public function getPays() {
    return $this->pays;
  }

  public function setPays($pays) {
    $this->pays = $pays;
  }
}
