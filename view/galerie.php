<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <!-- NAVBAR -->
    <?php
    include('view/navbar.php');
    ?>
    <!-- NAVBAR -->

    <!-- HERO -->
    <div class="hero min-h-screen" style="background-image: url(assets/img/hero-galerie.png);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold">Galerie photo</h1>
            </div>
        </div>
    </div>
    <!-- HERO -->


    <!-- GALERIE -->
    <section class="flex flex-col items-center my-10">

        <!-- CARDS -->
        <div class="grid grid-cols-1 gap-8 w-10/12 md:grid-cols-2 xl:grid-cols-3 lg:w-9/12 xl:w-8/12">

            <div class="card shadow-xl image-full">
                <figure><img class="h-full w-full object-cover" src="https://picsum.photos/id/684/600/400?grayscale" alt=""></figure>
            </div>

            <div class="card shadow-xl image-full">
                <figure><img src="https://picsum.photos/id/685/600/400?grayscale" alt=""></figure>
            </div>

            <div class="card shadow-xl image-full">
                <figure><img src="https://picsum.photos/id/686/600/400?grayscale" alt=""></figure>
            </div>

            <div class="card shadow-xl image-full">
                <figure><img src="https://picsum.photos/id/687/600/400?grayscale" alt=""></figure>
            </div>

            <div class="card shadow-xl image-full">
                <figure><img src="https://picsum.photos/id/688/600/400?grayscale" alt=""></figure>
            </div>
            
        </div>
        <!-- CARDS -->

    </section>
    <!-- GALERIE -->

    <!-- FOOTER -->
    <?php
    include('view/footer.php');
    ?>
    <!-- FOOTER -->

</body>
</html>