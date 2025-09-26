<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: connexion.php");
    exit();
}

include '../includes/header.php';


$mysqli = new mysqli("localhost", "root", "", "moduleconnexion");

if ($mysqli->connect_errno) {
    die("Échec de la connexion MySQL: " . $mysqli->connect_error);
}

$login = $_SESSION['login'];
$sql = "SELECT login, prenom, nom FROM utilisateurs WHERE login = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$stmt->close();
$mysqli->close();
?>

<section class="flex justify-center items-center min-h-[70vh]">
  <div class="w-full max-w-lg bg-white p-8 rounded-2xl shadow-lg">
    <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">Mon Profil</h1>

    <form action="profil.php" method="post" class="space-y-5">
      <div>
        <label for="login" class="block text-sm font-medium text-gray-700">Login</label>
        <input type="text" name="login" id="login" value="<?= htmlspecialchars($user['login']) ?>" required 
            class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>
      <div>
        <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="<?= htmlspecialchars($user['prenom']) ?>" required 
            class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>

      <!-- Nom -->
      <div>
        <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
        <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($user['nom']) ?>" required 
            class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Nouveau mot de passe</label>
        <input type="password" name="password" id="password" placeholder="Laissez vide pour ne pas changer"
            class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>
      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
        Mettre à jour
      </button>
    </form>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
