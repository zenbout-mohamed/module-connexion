<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] !== "admin") {
    header("Location: connexion.php");
    exit();
}

include '../includes/header.php';

$mysqli = new mysqli("localhost", "root", "", "moduleconnexion");

if ($mysqli->connect_errno) {
    die("Échec de la connexion MySQL: " . $mysqli->connect_error);
}

$sql = "SELECT id, login, prenom, nom FROM utilisateurs";
$result = $mysqli->query($sql);
?>

<section class="flex justify-center items-center min-h-[70vh]">
    <div class="w-full max-w-5xl bg-white p-8 rounded-2xl shadow-lg">
        <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">Administration - Liste des utilisateurs</h1>

        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">ID</th>
                        <th class="py-3 px-4 text-left">Login</th>
                        <th class="py-3 px-4 text-left">Prénom</th>
                        <th class="py-3 px-4 text-left">Nom</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td class="py-2 px-4"><?= htmlspecialchars($row['id']) ?></td>
                            <td class="py-2 px-4"><?= htmlspecialchars($row['login']) ?></td>
                            <td class="py-2 px-4"><?= htmlspecialchars($row['prenom']) ?></td>
                            <td class="py-2 px-4"><?= htmlspecialchars($row['nom']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php
$result->free();
$mysqli->close();

include '../includes/footer.php';
?>