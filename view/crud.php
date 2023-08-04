<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <title>Accueil - Al Amana</title>
</head>
<body class="font-body">

    <!-- NAV -->
    <?php
    include('view/navbar.php');
    ?>
    <!-- NAV -->

    <section class="flex justify-center">
        <div class="mx-auto bg-white p-4 rounded shadow">
            <!-- Tab Buttons -->
            <div class="flex mb-10 border-b-2 border-b-black">
                <button id="tab1" class="py-2 px-4  hover:bg-gray-400 focus:bg-green focus:text-white">Activités</button>
                <button id="tab2" class="py-2 px-4  hover:bg-gray-400 focus:bg-green focus:text-white">Évènements</button>
                <button id="tab3" class="py-2 px-4  hover:bg-gray-400 focus:bg-green focus:text-white">Galerie photo</button>
                <button id="tab4" class="py-2 px-4  hover:bg-gray-400 focus:bg-green focus:text-white">Dons et adhésions</button>
            </div>

            <div id="mainContent">

            </div>
            
        </div>

        
    </section>


    <!-- FOOTER -->
    <?php
    include('view/footer.php');
    ?>
    <!-- FOOTER -->
    
    <script src="assets/js/crud.js"></script>
</body>
</html>