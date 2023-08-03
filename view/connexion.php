<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <title>Accueil - Al Amana</title>
</head>
<body class="font-body">

    <section class="bg-gradient-to-r from-teal-400 via-green-500 to-lime-400 h-screen flex justify-center items-center">

        <div class="card w-96 bg-base-300 p-10 shadow-2xl">
            <div class="flex flex-row items-center justify-between">
                <h1 class="text-3xl">Connexion</h1>

                <img class="h-20" src="assets/img/logo.png" alt="">
            </div>

            <form id="connexion-form" method="POST" action="?action=connexion_traitement">

                <div id="error-message" class="text-red-800 font-bold"></div>

                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <input type="email" name="email" required class="input input-bordered w-full max-w-xs" />
                </div>

                <div class="form-control w-full max-w-xs">
                    <label class="label">
                        <span class="label-text">Mot de passe</span>
                    </label>
                    <input type="password" name="password" required class="input input-bordered w-full max-w-xs" />
                </div>

                <input type="submit" value="Se connecter" class="btn btn-xs bg-black text-white mt-4 sm:btn-sm md:btn-md lg:btn-lg">

            </form>

            <a class="mt-5" href="?action=accueil">
                <span class="label-text">Accueil</span>
            </a>
        </div>

    </section>

    <script src="assets/js/script.js"></script>
</body>
</html>