</main> 

<footer class="bg-blue-600 text-white mt-12">
    <div class="container mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
        <section>
            <h2 class="font-semibold text-lg mb-3">À propos</h2>
            <p class="text-sm text-gray-200">
                ModuleConnexion est une application simple pour gérer vos comptes et vos informations.
            </p>
        </section>
        <section>
            <h2 class="font-semibold text-lg mb-3">Navigation</h2>
            <ul class="space-y-2">
                <li><a href="index.php" class="hover:underline">Accueil</a></li>
                <li><a href="inscription.php" class="hover:underline">Inscription</a></li>
                <li><a href="connexion.php" class="hover:underline">Connexion</a></li>
            </ul>
        </section>
        <section>
            <h2 class="font-semibold text-lg mb-3">Contact</h2>
            <p class="text-sm">Email : support@moduleconnexion.fr</p>
            <p class="text-sm">Téléphone : +33 4 48 22 01 44</p>
        </section>
    </div>
    <div class="bg-blue-700 text-center py-4 text-sm">
        &copy; <?= date("Y") ?> ModuleConnexion - Tous droits réservés
    </div>
</footer>
</body>
</html>