<?php
session_start();
require_once __DIR__ . '/../database/db.php';
include __DIR__ . '/../includes/header.php'; 


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];

    $stmt = $mysqli->prepare("SELECT login, role, password FROM utilisateurs WHERE login = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['login'] = $user['login'];
        $_SESSION['role'] = $user['role']; 
        header("Location: profil.php");
        exit();
    } else {
        $error = "Login ou mot de passe incorrect.";
    }
}
?>
<section class="flex justify-center items-center min-h-[70vh]">
    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg">
        <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">Connexion</h1>

        <?php if (!empty($error)): ?>
            <p class="text-red-600 text-center mb-4"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>

        <form action="connexion.php" method="post" class="space-y-5">
            <div>
                <label for="login" class="block text-sm font-medium text-gray-700">Login</label>
                <input type="text" name="login" id="login" required
                class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input type="password" name="password" id="password" required
                class="w-full mt-1 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                Connexion
            </button>
            <p class="text-center text-sm text-gray-600">
                Pas encore de compte ?
                <a href="inscription.php" class="text-blue-600 hover:underline">Inscription</a>
            </p>
        </form>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
