<div class="flex flex-col items-center gap-4 bg-yellow md:flex md:flex-row md:justify-center">
    <a href="?action=mentions_legales">Mentions légales</a>
    <a href="https://www.facebook.com/people/Al-Amana/100092717252891/" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> 
        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
      </svg>
    </a>
    <?php if (empty($_SESSION) OR $_SESSION['user']->getIdRoleUser() !== 1) { ?>
    <a href="?action=connexion">Ce site vous appartient-il?</a>
    <?php } ?>
    <a href="">© 2023 - Al Amana</a>
</div>








<!-- NAVBAR IN FOOTER -->
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
      <?php if (isset($_SESSION['user']) && ($_SESSION['user']->getIdRoleUser() === 1 )) { ?>
        <li class="dropdown dropdown-hover text-white text-xl hover:bg-white">
          <label tabindex="0">
            Admin
            <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.01245 10.584L0.371826 3.94336C-0.0871582 3.48438 -0.0871582 2.74219 0.371826 2.28809L1.47534 1.18457C1.93433 0.725586 2.67651 0.725586 3.13062 1.18457L7.83765 5.8916L12.5447 1.18457C13.0037 0.725586 13.7458 0.725586 14.2 1.18457L15.3035 2.28809C15.7624 2.74707 15.7624 3.48926 15.3035 3.94336L8.66284 10.584C8.21362 11.043 7.47144 11.043 7.01245 10.584Z" fill="#00914B"/>
            </svg>
          </label>
          <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-green rounded-box w-52">
            <li><a href="?action=crud">Tableau de bord</a></li>
            <li><a href="?action=deconnexion">Se déconnecter</a></li>
          </ul>
        </li>
      <?php } ?>

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