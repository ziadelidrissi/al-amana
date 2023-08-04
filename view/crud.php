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

    <section class="flex justify-center items-center h-screen">
        <div class="mx-auto bg-white p-4 rounded shadow">
            <!-- Tab Buttons -->
            <div class="flex">
                <button id="tab1" class="py-2 px-4 rounded-tl rounded-bl bg-green text-white">Activités</button>
                <button id="tab2" class="py-2 px-4  hover:bg-gray-400">Évènements</button>
                <button id="tab3" class="py-2 px-4 rounded-tr rounded-br  hover:bg-gray-400">Galerie photo</button>
                <button id="tab4" class="py-2 px-4 rounded-tr rounded-br  hover:bg-gray-400">Dons et adhésions</button>
            </div>

            <div id="mainContent">
                
            </div>
            <!-- Tab Content Sections -->
            <div id="content1" class="py-4">
                1
                <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <thead>
                    <tr>
                        <th>
                        </th>
                        <th>Image</th>
                        <th>Titre</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Zemlak, Daniel and Leannon
                        <br/>
                        <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
                        </td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-3@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Carroll Group
                        <br/>
                        <span class="badge badge-ghost badge-sm">Tax Accountant</span>
                        </td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-4@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Rowe-Schoen
                        <br/>
                        <span class="badge badge-ghost badge-sm">Office Assistant I</span>
                        </td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    <!-- row 4 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-5@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Wyman-Ledner
                        <br/>
                        <span class="badge badge-ghost badge-sm">Community Outreach Specialist</span>
                        </td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    </tbody>
                    
                </table>
                </div>
            </div>

            <div id="content2" class="hidden py-4">
                2
                <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <thead>
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <th>Name</th>
                        <th>Job</th>
                        <th>Favorite Color</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            <div class="font-bold">Hart Hagerty</div>
                            <div class="text-sm opacity-50">United States</div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Zemlak, Daniel and Leannon
                        <br/>
                        <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
                        </td>
                        <td>Purple</td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-3@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            <div class="font-bold">Brice Swyre</div>
                            <div class="text-sm opacity-50">China</div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Carroll Group
                        <br/>
                        <span class="badge badge-ghost badge-sm">Tax Accountant</span>
                        </td>
                        <td>Red</td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-4@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            <div class="font-bold">Marjy Ferencz</div>
                            <div class="text-sm opacity-50">Russia</div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Rowe-Schoen
                        <br/>
                        <span class="badge badge-ghost badge-sm">Office Assistant I</span>
                        </td>
                        <td>Crimson</td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    <!-- row 4 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-5@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            <div class="font-bold">Yancy Tear</div>
                            <div class="text-sm opacity-50">Brazil</div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Wyman-Ledner
                        <br/>
                        <span class="badge badge-ghost badge-sm">Community Outreach Specialist</span>
                        </td>
                        <td>Indigo</td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    </tbody>
                    
                </table>
                </div>
            </div>

            <div id="content3" class="hidden py-4">
                3
                <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <thead>
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <th>Name</th>
                        <th>Job</th>
                        <th>Favorite Color</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            <div class="font-bold">Hart Hagerty</div>
                            <div class="text-sm opacity-50">United States</div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Zemlak, Daniel and Leannon
                        <br/>
                        <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
                        </td>
                        <td>Purple</td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-3@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            <div class="font-bold">Brice Swyre</div>
                            <div class="text-sm opacity-50">China</div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Carroll Group
                        <br/>
                        <span class="badge badge-ghost badge-sm">Tax Accountant</span>
                        </td>
                        <td>Red</td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-4@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            <div class="font-bold">Marjy Ferencz</div>
                            <div class="text-sm opacity-50">Russia</div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Rowe-Schoen
                        <br/>
                        <span class="badge badge-ghost badge-sm">Office Assistant I</span>
                        </td>
                        <td>Crimson</td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    <!-- row 4 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-5@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            <div class="font-bold">Yancy Tear</div>
                            <div class="text-sm opacity-50">Brazil</div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Wyman-Ledner
                        <br/>
                        <span class="badge badge-ghost badge-sm">Community Outreach Specialist</span>
                        </td>
                        <td>Indigo</td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    </tbody>
                    
                </table>
                </div>
            </div>

            <div id="content4" class="hidden py-4">
                4
                <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <thead>
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <th>Name</th>
                        <th>Job</th>
                        <th>Favorite Color</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            <div class="font-bold">Hart Hagerty</div>
                            <div class="text-sm opacity-50">United States</div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Zemlak, Daniel and Leannon
                        <br/>
                        <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
                        </td>
                        <td>Purple</td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-3@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            <div class="font-bold">Brice Swyre</div>
                            <div class="text-sm opacity-50">China</div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Carroll Group
                        <br/>
                        <span class="badge badge-ghost badge-sm">Tax Accountant</span>
                        </td>
                        <td>Red</td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-4@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            <div class="font-bold">Marjy Ferencz</div>
                            <div class="text-sm opacity-50">Russia</div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Rowe-Schoen
                        <br/>
                        <span class="badge badge-ghost badge-sm">Office Assistant I</span>
                        </td>
                        <td>Crimson</td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    <!-- row 4 -->
                    <tr>
                        <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                        </th>
                        <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                            <div class="mask mask-squircle w-12 h-12">
                                <img src="/tailwind-css-component-profile-5@56w.png" alt="Avatar Tailwind CSS Component" />
                            </div>
                            </div>
                            <div>
                            <div class="font-bold">Yancy Tear</div>
                            <div class="text-sm opacity-50">Brazil</div>
                            </div>
                        </div>
                        </td>
                        <td>
                        Wyman-Ledner
                        <br/>
                        <span class="badge badge-ghost badge-sm">Community Outreach Specialist</span>
                        </td>
                        <td>Indigo</td>
                        <th>
                            <div class="flex flex-col">
                                <button class="btn btn-ghost btn-xs">Modifier</button>
                                <button class="btn btn-ghost btn-xs">Supprimer</button>
                            </div>
                        </th>
                    </tr>
                    </tbody>
                    
                </table>
                </div>
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