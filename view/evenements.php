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
    <div class="hero min-h-screen" style="background-image: url(assets/img/hero-evenements.png);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold">Retrouvez ici tous nos événements</h1>
            </div>
        </div>
    </div>
    <!-- HERO -->

    <!-- EVENEMENTS -->
    <section class="bg-fixed bg-center bg-no-repeat bg-cover flex items-center my-20">

        <div class="flex flex-col gap-20 items-center justify-center mx-auto w-10/12 lg:w-9/12 xl:w-8/12">

                <!-- CARDS -->
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">

                    <div class="card lg:card-side bg-base-100 shadow-xl cursor-pointer transition ease-out hover:scale-110"  onclick="my_modal_1.showModal()">
                        <figure class="lg:w-1/2">
                            <img class="h-full w-full" src="https://picsum.photos/id/684/600/400" alt="">
                        </figure>

                        <div class="card-body lg:w-1/2">
                            <h2 class="card-title">Evenement 1</h2>
                            <p>27/04/2022</p>
                            <dialog id="my_modal_1" class="modal my-10">
                                <form method="dialog" class="modal-box">
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>

                                    <h3 class="font-bold text-lg">Evenement 1</h3>

                                    <img class="h-full w-full" src="https://picsum.photos/id/684/600/400" alt="">

                                    <p class="font-body my-5 font-semibold">
                                    Les participants seront initiés aux enseignements et aux croyances islamiques qui guident le processus de lavage mortuaire. 
                                    Ils apprendront l'importance spirituelle et religieuse de cet acte et comment il reflète les valeurs fondamentales de l'islam.
                                    </p>

                                    <div class="carousel w-full">
                                        <div id="slide1" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide4" class="btn btn-circle">❮</a> 
                                            <a href="#slide2" class="btn btn-circle">❯</a>
                                            </div>
                                        </div> 
                                        <div id="slide2" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide1" class="btn btn-circle">❮</a> 
                                            <a href="#slide3" class="btn btn-circle">❯</a>
                                            </div>
                                        </div> 
                                        <div id="slide3" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide2" class="btn btn-circle">❮</a> 
                                            <a href="#slide4" class="btn btn-circle">❯</a>
                                            </div>
                                        </div> 
                                        <div id="slide4" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide3" class="btn btn-circle">❮</a> 
                                            <a href="#slide1" class="btn btn-circle">❯</a>
                                            </div>
                                        </div>
                                    </div>

                                    <img src="https://picsum.photos/id/1081/600/400" alt="">

                                </form>
                            </dialog>
                        </div>
                    </div>

                    <div class="card lg:card-side bg-base-100 shadow-xl cursor-pointer transition ease-out hover:scale-110"  onclick="my_modal_2.showModal()">
                        <figure class="lg:w-1/2">
                            <img class="h-full w-full" src="https://picsum.photos/id/684/600/400" alt="">
                        </figure>

                        <div class="card-body lg:w-1/2">
                            <h2 class="card-title">Evenement 1</h2>
                            <p>27/04/2022</p>
                            <dialog id="my_modal_2" class="modal my-10">
                                <form method="dialog" class="modal-box">
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>

                                    <h3 class="font-bold text-lg">Evenement 1</h3>

                                    <img class="h-full w-full" src="https://picsum.photos/id/684/600/400" alt="">

                                    <p class="font-body my-5 font-semibold">
                                    Les participants seront initiés aux enseignements et aux croyances islamiques qui guident le processus de lavage mortuaire. 
                                    Ils apprendront l'importance spirituelle et religieuse de cet acte et comment il reflète les valeurs fondamentales de l'islam.
                                    </p>

                                    <div class="carousel w-full">
                                        <div id="slide1" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide4" class="btn btn-circle">❮</a> 
                                            <a href="#slide2" class="btn btn-circle">❯</a>
                                            </div>
                                        </div> 
                                        <div id="slide2" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide1" class="btn btn-circle">❮</a> 
                                            <a href="#slide3" class="btn btn-circle">❯</a>
                                            </div>
                                        </div> 
                                        <div id="slide3" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide2" class="btn btn-circle">❮</a> 
                                            <a href="#slide4" class="btn btn-circle">❯</a>
                                            </div>
                                        </div> 
                                        <div id="slide4" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide3" class="btn btn-circle">❮</a> 
                                            <a href="#slide1" class="btn btn-circle">❯</a>
                                            </div>
                                        </div>
                                    </div>

                                    <img src="https://picsum.photos/id/1081/600/400" alt="">

                                </form>
                            </dialog>
                        </div>
                    </div>

                    <div class="card lg:card-side bg-base-100 shadow-xl cursor-pointer transition ease-out hover:scale-110"  onclick="my_modal_3.showModal()">
                        <figure class="lg:w-1/2">
                            <img class="h-full w-full" src="https://picsum.photos/id/684/600/400" alt="">
                        </figure>

                        <div class="card-body lg:w-1/2">
                            <h2 class="card-title">Evenement 1</h2>
                            <p>27/04/2022</p>
                            <dialog id="my_modal_3" class="modal my-10">
                                <form method="dialog" class="modal-box">
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>

                                    <h3 class="font-bold text-lg">Evenement 1</h3>

                                    <img class="h-full w-full" src="https://picsum.photos/id/684/600/400" alt="">

                                    <p class="font-body my-5 font-semibold">
                                    Les participants seront initiés aux enseignements et aux croyances islamiques qui guident le processus de lavage mortuaire. 
                                    Ils apprendront l'importance spirituelle et religieuse de cet acte et comment il reflète les valeurs fondamentales de l'islam.
                                    </p>

                                    <div class="carousel w-full">
                                        <div id="slide1" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide4" class="btn btn-circle">❮</a> 
                                            <a href="#slide2" class="btn btn-circle">❯</a>
                                            </div>
                                        </div> 
                                        <div id="slide2" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide1" class="btn btn-circle">❮</a> 
                                            <a href="#slide3" class="btn btn-circle">❯</a>
                                            </div>
                                        </div> 
                                        <div id="slide3" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide2" class="btn btn-circle">❮</a> 
                                            <a href="#slide4" class="btn btn-circle">❯</a>
                                            </div>
                                        </div> 
                                        <div id="slide4" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide3" class="btn btn-circle">❮</a> 
                                            <a href="#slide1" class="btn btn-circle">❯</a>
                                            </div>
                                        </div>
                                    </div>

                                    <img src="https://picsum.photos/id/1081/600/400" alt="">

                                </form>
                            </dialog>
                        </div>
                    </div>

                    <div class="card lg:card-side bg-base-100 shadow-xl cursor-pointer transition ease-out hover:scale-110"  onclick="my_modal_4.showModal()">
                        <figure class="lg:w-1/2">
                            <img class="h-full w-full" src="https://picsum.photos/id/684/600/400" alt="">
                        </figure>

                        <div class="card-body lg:w-1/2">
                            <h2 class="card-title">Evenement 1</h2>
                            <p>27/04/2022</p>
                            <dialog id="my_modal_4" class="modal my-10">
                                <form method="dialog" class="modal-box">
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>

                                    <h3 class="font-bold text-lg">Evenement 1</h3>

                                    <img class="h-full w-full" src="https://picsum.photos/id/684/600/400" alt="">

                                    <p class="font-body my-5 font-semibold">
                                    Les participants seront initiés aux enseignements et aux croyances islamiques qui guident le processus de lavage mortuaire. 
                                    Ils apprendront l'importance spirituelle et religieuse de cet acte et comment il reflète les valeurs fondamentales de l'islam.
                                    </p>

                                    <div class="carousel w-full">
                                        <div id="slide1" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide4" class="btn btn-circle">❮</a> 
                                            <a href="#slide2" class="btn btn-circle">❯</a>
                                            </div>
                                        </div> 
                                        <div id="slide2" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide1" class="btn btn-circle">❮</a> 
                                            <a href="#slide3" class="btn btn-circle">❯</a>
                                            </div>
                                        </div> 
                                        <div id="slide3" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide2" class="btn btn-circle">❮</a> 
                                            <a href="#slide4" class="btn btn-circle">❯</a>
                                            </div>
                                        </div> 
                                        <div id="slide4" class="carousel-item relative w-full">
                                            <img class="w-full" src="https://picsum.photos/id/684/600/400" alt="">
                                            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                            <a href="#slide3" class="btn btn-circle">❮</a> 
                                            <a href="#slide1" class="btn btn-circle">❯</a>
                                            </div>
                                        </div>
                                    </div>

                                    <img src="https://picsum.photos/id/1081/600/400" alt="">

                                </form>
                            </dialog>
                        </div>
                    </div>

                </div>
                <!-- CARDS -->

        </div>

    </section>
    <!-- EVENEMENTS -->

</body>
</html>