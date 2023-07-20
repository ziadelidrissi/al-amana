<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <!-- HERO -->
    <div class="absolute top-16 h-screen w-screen bg-gradient-to-b from-green to-transparent md:top-20 lg:top-24"></div>
    <div class="hero min-h-screen" style="background-image: url(assets/img/hero-galerie.png);"  >
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold">Galerie photo</h1>
            <p class="mb-5">Texte descritpif</p>
            </div>
        </div>
    </div>
    <!-- HERO -->


    <!-- GALERIE -->
    <section class="flex flex-col items-center my-20 mx-5 sm:mx-10 md:mx-20 lg:mx-32">

        <!-- CARDS -->
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">

            <div class="card shadow-xl image-full">
                <figure><img src="https://picsum.photos/id/684/600/400?grayscale" alt=""></figure>
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

</body>
</html>