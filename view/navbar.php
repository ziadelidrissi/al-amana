<div class="drawer drawer-end font-sans">
  <input id="my-drawer-3" type="checkbox" class="drawer-toggle" /> 
  <div class="drawer-content flex flex-col">
    <!-- Navbar -->
    <div class="w-screen border-b-4 border-b-black flex justify-center">

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
            <li class="text-green text-xl"><a href="?action=galerie">Galerie</a></li>
            <li class="text-green text-xl"><a href="?action=evenements">Événements</a></li>
            <li class="text-green text-xl"><a href="?action=en_savoir_plus">En savoir plus</a></li>
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
    


<!-- NAVBAR IN FOOTER -->
    Content
  </div> 
  <div class="drawer-side">
    <label for="my-drawer-3" class="drawer-overlay"></label> 

    <ul class="menu py-0 px-4 w-3/4 h-full bg-black">
      <!-- Sidebar content here -->
      <div class="flex justify-end items-center h-16 px-8">
        <label class="cursor-pointer" for="my-drawer-3">
            <img src="assets/img/cross.png" alt="croix">
        </label>
      </div>

      <li class="text-white text-xl"><a href="?action=accueil">Accueil</a></li>
      <li class="text-white text-xl"><a href="?action=galerie">Galerie</a></li>
      <li class="text-white text-xl"><a href="?action=evenements">Événements</a></li>
      <li class="text-white text-xl"><a href="?action=en_savoir_plus">En savoir plus</a></li>

      <div class="px-4 mt-4 flex justify-between items-center">
        <button class="btn bg-yellow border-yellow text-white text-xl normal-case">
          <a href="?action=adherez">
            Adhérez
          </a>
        </button>

        <a href="">
          <img class="h-4" src="assets/img/facebook.png" alt="facebook">
        </a>
      </div>
      
    </ul>
    
  </div>
</div>
<!-- NAVBAR IN FOOTER -->