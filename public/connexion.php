<?php include '../includes/header.php'; ?>

<section class="flex justify-center items-center min-h-[70vh]">
    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg">
        <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">Connexion</h1>

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
<?php include '../includes/footer.php'; ?>