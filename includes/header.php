<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ModuleConnexion</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">
    <header>
        <nav class="bg-blue-600 text-white p-4 flex justify-between items-center">
            <div class="logo font-bold text-xl">
                <a href="index.php">ModuleConnexion</a>
            </div>
            <ul class="flex space-x-4">
                <li><a href="index.php" class="hover:underline">Accueil</a></li>
                <?php if (isset($_SESSION['login'])): ?>
                    <li><a href="profil.php" class="hover:underline">Profil</a></li>
                    <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                        <li><a href="admin.php" class="hover:underline">Admin</a></li>
                    <?php endif; ?>
                    <li><a href="logout.php" class="hover:underline">Déconnexion</a></li>
                <?php else: ?>
                    <a href="logout.php"
                        class="bg-red-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-600 transition">
                        Déconnexion
                    </a>
                    <li><a href="inscription.php" class="hover:underline">Inscription</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main class="container mx-auto flex-grow px-6 py-8">