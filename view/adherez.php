<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <title>Événements - Al Amana</title>
</head>
<body>

    <!-- NAVBAR -->
    <?php
    include('view/navbar.php');
    ?>
    <!-- NAVBAR -->

    <!-- HERO -->
    <div class="hero min-h-screen" style="background-image: url(assets/img/adherez.jpeg);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold">Adhérez à l'association</h1>
            </div>
        </div>
    </div>
    <!-- HERO -->

    <!-- DIVIDER -->
    <div class="flex flex-col md:flex-row w-full lg:h-screen/2">
        <a href="assets/pdf/engagement.pdf" download class="md:flex flex-grow w-full md:w-1/2 card bg-base-300 rounded-none relative cursor-pointer">
            <img class="h-full w-full object-cover" src="assets/img/hands.jpeg" alt="">
            <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-3xl text-white font-medium">
                S'engager
            </p>
        </a>

        
        <a href="assets/pdf/cours.pdf" download class="md:flex flex-grow w-full md:w-1/2 card bg-base-300 rounded-none relative cursor-pointer">
            <img class="h-full w-full object-cover" src="assets/img/class.jpeg" alt="">
            <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-3xl text-white font-medium">
                S'inscrire aux cours
            </p>
        </a>
    </div>
    <!-- DIVIDER -->

    <!-- FOOTER -->
    <?php
    include('view/footer.php');
    ?>
    <!-- FOOTER -->

</body>
</html>