<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <link href="admin/dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Dashboard - Midone - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href={{ asset("admin/dist/css/app.css") }}>
       

        <!-- END: CSS Assets-->
</head>
<body class="app">
              <!-- BEGIN: Mobile Menu -->
              <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="admin/dist/images/logo.svg">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <ul class="border-t border-theme-24 py-5 hidden">
                <li>
                    <a href="index.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="box"></i> </div>
                        <div class="menu__title"> Menu Layout <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="index.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Side Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="simple-menu-light-dashboard.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Simple Menu </div>
                            </a>
                        </li>
                        <li>
                            <a href="top-menu-light-dashboard.html" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Top Menu </div>
                            </a>
                        </li>
                    </ul>
                </li>
             
            </ul>
        </div>
        <div class="flex">
            @include('admin.layouts.sidebar')
            <div class="content">
       
        <!-- END: Mobile Menu -->
                @include('admin.layouts.header')
                @yield('content')
            </div>

        </div>
        <!-- <script>
            document.addEventListener('DOMContentLoaded', function() {
                var sideMenuItems = document.querySelectorAll('.side-menu');

                sideMenuItems.forEach(function(menuItem) {
                    menuItem.addEventListener('click', function(event) {
                        // Remove the 'side-menu--active' class from all menu items
                        sideMenuItems.forEach(function(item) {
                            item.classList.remove('side-menu--active');
                        });

                        // Add the 'side-menu--active' class to the clicked menu item
                        menuItem.classList.add('side-menu--active');
                    });
                });
            });
        </script> -->
        <script>
            document.getElementById('inputImage').addEventListener('change', function () {
                var preview = document.getElementById('previewImage');
                var previewContainer = document.getElementById('previewContainer');
                var fileInput = this;

                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        preview.src = e.target.result;
                        previewContainer.classList.add('gray-background'); // Ajouter la classe pour le fond gris
                    };

                    reader.readAsDataURL(fileInput.files[0]);
                } else {
                    // Si aucun fichier n'est sélectionné, utilisez l'image par défaut
                    preview.src = "{{ asset('dist/images/profile-6.jpg') }}";
                    previewContainer.classList.remove('gray-background'); // Retirer la classe pour le fond gris
                }
            });
        </script>



        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src={{ asset("admin/dist/js/app.js") }}></script>
        <!-- END: JS Assets-->
</body>
</html>