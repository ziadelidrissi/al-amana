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
            <li class="text-green text-xl"><a href="?action=galerie">Galerie</a></li>
            <li class="text-green text-xl"><a href="?action=evenements">Événements</a></li>
            <li class="text-green text-xl"><a href="?action=en_savoir_plus">En savoir plus</a></li>
            <?php if (isset($_SESSION['user']) && ($_SESSION['user']->getIdRoleUser() === 1 )) { ?>
            <li class="dropdown dropdown-hover text-green text-xl">
              <label tabindex="0">
                Admin
                <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.01245 10.584L0.371826 3.94336C-0.0871582 3.48438 -0.0871582 2.74219 0.371826 2.28809L1.47534 1.18457C1.93433 0.725586 2.67651 0.725586 3.13062 1.18457L7.83765 5.8916L12.5447 1.18457C13.0037 0.725586 13.7458 0.725586 14.2 1.18457L15.3035 2.28809C15.7624 2.74707 15.7624 3.48926 15.3035 3.94336L8.66284 10.584C8.21362 11.043 7.47144 11.043 7.01245 10.584Z" fill="#00914B"/>
                </svg>
              </label>
              <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="?admin=&action=crud">Tableau de bord</a></li>
                <li><a href="?action=deconnexion">Se déconnecter</a></li>
              </ul>
            </li>
            <?php } ?>
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