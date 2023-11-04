<div class="drawer drawer-end font-sans">
  <input id="my-drawer-3" type="checkbox" class="drawer-toggle" /> 
  <div class="drawer-content flex flex-col">
    <!-- Navbar -->
    <div class="flex justify-center">

      <div class="navbar w-10/12 justify-between md:min-h-[5rem] lg:min-h-[6rem] lg:w-9/12 xl:w-8/12">

        <div class="px-2 mx-2 md:scale-125 lg:scale-150">
          <a href="?action=accueil">
            <img class="w-10" src="assets/img/logo.png" alt="logo">
          </a>
        </div>

        <div class="flex-none hidden lg:block">
          <ul class="menu menu-horizontal">
            <!-- Navbar menu content here -->
            <li class="text-green text-xl"><a href="?action=accueil">Accueil</a></li>
            <!-- <li class="text-green text-xl"><a href="?action=galerie">Galerie</a></li> -->
            <li class="text-green text-xl"><a href="?action=evenements">Événements</a></li>
            <!-- <li class="text-green text-xl"><a href="?action=en_savoir_plus">En savoir plus</a></li> -->
          </ul>
        </div>

        <button class="hidden lg:block btn bg-yellow border-yellow text-white text-xl normal-case">
          <a href="?action=adherez">
            Adhérez
          </a>
        </button>

        <div class="px-2 mx-2 sm:scale-125 md:scale-150 lg:hidden">
          <label for="my-drawer-3" class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
          </label>
        </div> 

      </div>

    </div>