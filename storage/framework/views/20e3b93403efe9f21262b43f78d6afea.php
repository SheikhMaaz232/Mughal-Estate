    <!doctype html>
    <html lang="<?php echo e(config('app.locale')); ?>">

    <head>
    <meta charset="utf-8">
    <!--
        Available classes for <html> element:

        'dark'                  Enable dark mode - Default dark mode preference can be set in app.js file (always saved and retrieved in localStorage afterwards):
                                window.One = new App({ darkMode: "system" }); // "on" or "off" or "system"
        'dark-custom-defined'   Dark mode is always set based on the preference in app.js file (no localStorage is used)
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Icon Villas</title>

    <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Icons -->
    <link rel="shortcut icon" href="<?php echo e(asset('media/favicons/favicon.png')); ?>">
    <link rel="icon" sizes="192x192" type="image/png" href="<?php echo e(asset('media/favicons/favicon-192x192.png')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('media/favicons/apple-touch-icon-180x180.png')); ?>">

    <!-- Modules -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-keyboard@latest/build/css/index.css" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu&display=swap" rel="stylesheet">
    <style>
        #keyboard {
            display: none;
            z-index: 1000;
            background: #f5f5f5;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .simple-keyboard .hg-button.hg-red {
            background: rgba(255, 0, 0, 0.1);
            color: #d14545;
        }

        .simple-keyboard .hg-button.hg-highlight {
            background: #ff9800;
            color: white;
        }

        .input-urdu {
            font-family: 'Noto Nastaliq Urdu', 'Jameel Noori Nastaleeq', serif;
            font-size: 16px;
            direction: rtl;
            text-align: right;
        }
        .card {
            border: none;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-2px);
        }
        .card-header {
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        .table th {
            font-weight: 500;
            color: #6c757d;
        }
        .text-muted {
            color: #6c757d !important;
        }
    </style>

    <link rel="stylesheet" href="<?php echo e(asset('css/keyboard.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('js/plugins/dropzone/min/dropzone.min.css')); ?>">
    <?php echo $__env->yieldContent('css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/main.scss', 'resources/js/oneui/app.js']); ?>

    <!-- Alternatively, you can also include a specific color theme after the main stylesheet to alter the default color theme of the template -->
    

    <!-- Load and set dark mode preference (blocking script to prevent flashing) -->
    <script src="<?php echo e(asset('js/setTheme.js')); ?>"></script>
    <script src="<?php echo e(asset('js/keyboard.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/dropzone/min/dropzone.min.js')); ?>"></script>

    
    
    <?php echo $__env->yieldContent('js'); ?>
    </head>

    <body>
    <!-- Page Container -->
    <!--
        Available classes for #page-container:

        SIDEBAR and SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header

        HEADER STYLE

        ''                                          Light themed Header
        'page-header-dark'                          Dark themed Header

        MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
    -->
    <div id="page-container" class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed main-content-narrow">
        <!-- Side Overlay-->
        <aside id="side-overlay" class="fs-sm">
        <!-- Side Header -->
        <div class="content-header border-bottom">
            <!-- User Avatar -->
            <a class="img-link me-1" href="javascript:void(0)">
            <img class="img-avatar img-avatar32" src="<?php echo e(asset('media/avatars/avatar10.jpg')); ?>" alt="">
            </a>
            <!-- END User Avatar -->

            <!-- User Info -->
            <div class="ms-2">
            <a class="text-dark fw-semibold fs-sm" href="javascript:void(0)">John Smith</a>
            </div>
            <!-- END User Info -->

            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="ms-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-fw fa-times"></i>
            </a>
            <!-- END Close Side Overlay -->
        </div>

        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <p>
            Content..
            </p>
        </div>
        <!-- END Side Content -->
        </aside>
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <!--
            Sidebar Mini Mode - Display Helper classes

            Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
            Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

            Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
            Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
            Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
        -->
        <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header">
            <!-- Logo -->
            <a class="font-semibold text-dual" href="/">
            <span class="smini-visible">
                <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">One<span class="fw-normal">UI</span></span>
            </a>
            <!-- END Logo -->

            <!-- Extra -->
            <div class="d-flex align-items-center gap-1">
            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <div class="dropdown">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-dark-mode-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-fw fa-moon" data-dark-mode-icon></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end smini-hide border-0" aria-labelledby="sidebar-dark-mode-dropdown">
                <button type="button" class="dropdown-item d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_off" data-dark-mode="off">
                    <i class="far fa-sun fa-fw opacity-50"></i>
                    <span class="fs-sm fw-medium">Light</span>
                </button>
                <button type="button" class="dropdown-item d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_on" data-dark-mode="on">
                    <i class="far fa-moon fa-fw opacity-50"></i>
                    <span class="fs-sm fw-medium">Dark</span>
                </button>
                <button type="button" class="dropdown-item d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_system" data-dark-mode="system">
                    <i class="fa fa-desktop fa-fw opacity-50"></i>
                    <span class="fs-sm fw-medium">System</span>
                </button>
                </div>
            </div>
            <!-- END Dark Mode -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-fw fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
            </div>
            <!-- END Extra -->
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                <a class="nav-main-link<?php echo e(request()->is('dashboard') ? ' active' : ''); ?>" href="/dashboard">
                    <i class="nav-main-link-icon si si-cursor"></i>
                    <span class="nav-main-link-name">Dashboard</span>
                </a>
                </li>
                <li class="nav-main-heading">Various</li>
                <li class="nav-main-item<?php echo e(request()->is('pages/*') ? ' open' : ''); ?>">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                    <i class="nav-main-link-icon si si-bulb"></i>
                    <span class="nav-main-link-name">Registration</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link<?php echo e(request()->routeIs('users.index') ? ' active' : ''); ?>" href="<?php echo e(route('users.index')); ?>">
                            <span class="nav-main-link-name">Users</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link<?php echo e(request()->routeIs('main-heads.index') ? ' active' : ''); ?>" href="<?php echo e(route('main-heads.index')); ?>">
                            <span class="nav-main-link-name">Main Head</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link<?php echo e(request()->routeIs('companies.index') ? ' active' : ''); ?>" href="<?php echo e(route('companies.index')); ?>">
                            <span class="nav-main-link-name">Company</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link<?php echo e(request()->routeIs('groups.index') ? ' active' : ''); ?>" href="<?php echo e(route('groups.index')); ?>">
                            <span class="nav-main-link-name">Groups</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link<?php echo e(request()->routeIs('projects.index') ? ' active' : ''); ?>" href="<?php echo e(route('projects.index')); ?>">
                            <span class="nav-main-link-name">Projects</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link<?php echo e(request()->routeIs('cities.index') ? ' active' : ''); ?>" href="<?php echo e(route('cities.index')); ?>">
                            <span class="nav-main-link-name">City</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link<?php echo e(request()->routeIs('residentials.index') ? ' active' : ''); ?>" href="<?php echo e(route('residentials.index')); ?>">
                            <span class="nav-main-link-name">Residential Type</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link<?php echo e(request()->routeIs('banks.index') ? ' active' : ''); ?>" href="<?php echo e(route('banks.index')); ?>">
                            <span class="nav-main-link-name">Bank</span>
                        </a>
                    </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link<?php echo e(request()->routeIs('periods.index') ? ' active' : ''); ?>" href="<?php echo e(route('periods.index')); ?>">
                            <span class="nav-main-link-name">Schedule Period</span>
                        </a>
                    </li>
                    </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link<?php echo e(request()->routeIs('casts.index') ? ' active' : ''); ?>" href="<?php echo e(route('casts.index')); ?>">
                            <span class="nav-main-link-name">Cast Management</span>
                        </a>
                    </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link<?php echo e(request()->routeIs('warehouses.index') ? ' active' : ''); ?>" href="<?php echo e(route('warehouses.index')); ?>">
                            <span class="nav-main-link-name">Warehouse Management</span>
                        </a>
                    </li>
                </ul>
                </li>
                <li class="nav-main-heading">More</li>
                <li class="nav-main-item open">
                    <a class="nav-main-link<?php echo e(request()->is('audit-logs.index') ? ' active' : ''); ?>" href="<?php echo e(route(name: 'audit-logs.index')); ?>">
                        <span class="nav-main-link-name">Audit Log</span>
                    </a>
                </li>
            </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Open Search Section (visible on smaller screens) -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout" data-action="header_search_on">
                <i class="fa fa-fw fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- Search Form (visible on larger screens) -->
            <form class="d-none d-md-inline-block" action="/dashboard" method="POST">
                <?php echo csrf_field(); ?>
                <div class="d-flex align-items-center px-2 text-dark fw-bold">
                    <?php if(isset($selectedCompany)): ?>
                        <img src="<?php echo e(asset('storage/companies/' . $selectedCompany->image)); ?>"
                            alt="Logo"
                            style="height: 30px; width: auto; margin-right: 10px;" />

                        <span><?php echo e($selectedCompany->name_en); ?></span>
                    <?php else: ?>
                        <i class="fa fa-building me-2 text-primary"></i>
                    <?php endif; ?>
                </div>

            </form>
            <!-- END Search Form -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="d-flex align-items-center">
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block ms-2">
                <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle" src="<?php echo e(asset('media/avatars/avatar10.jpg')); ?>" alt="Header Avatar" style="width: 21px;">
                <span class="d-none d-sm-inline-block ms-2"><?php echo e(\Auth::user()->name_eng); ?></span>
                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block ms-1 mt-1"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
                <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="<?php echo e(asset('media/avatars/avatar10.jpg')); ?>" alt="">
                    <p class="mt-2 mb-0 fw-medium"><?php echo e(\Auth::user()->name_eng); ?></p>
                    
                </div>
                

                <div role="separator" class="dropdown-divider m-0"></div>
                <div class="p-2">
                    
                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="fs-sm fw-medium">Log Out</span>
                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                </div>
                </div>
            </div>
            <!-- Language Selector -->

            <body>
                

                <!-- Page Container -->
                <!--
                Available classes for #page-container:

            <!-- END User Dropdown -->

            <!-- Notifications Dropdown -->
            <div class="dropdown d-inline-block ms-2">
                
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 border-0 fs-sm" aria-labelledby="page-header-notifications-dropdown">
                <div class="p-2 bg-body-light border-bottom text-center rounded-top">
                    <h5 class="dropdown-header text-uppercase">Notifications</h5>
                </div>
                <ul class="nav-items mb-0">
                    <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                        <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-check-circle text-success"></i>
                        </div>
                        <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new follower</div>
                        <span class="fw-medium text-muted">15 min ago</span>
                        </div>
                    </a>
                    </li>
                    <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                        <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                        </div>
                        <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">1 new sale, keep it up</div>
                        <span class="fw-medium text-muted">22 min ago</span>
                        </div>
                    </a>
                    </li>
                    <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                        <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-times-circle text-danger"></i>
                        </div>
                        <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">Update failed, restart server</div>
                        <span class="fw-medium text-muted">26 min ago</span>
                        </div>
                    </a>
                    </li>
                    <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                        <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                        </div>
                        <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">2 new sales, keep it up</div>
                        <span class="fw-medium text-muted">33 min ago</span>
                        </div>
                    </a>
                    </li>
                    <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                        <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-user-plus text-success"></i>
                        </div>
                        <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new subscriber</div>
                        <span class="fw-medium text-muted">41 min ago</span>
                        </div>
                    </a>
                    </li>
                    <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                        <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-check-circle text-success"></i>
                        </div>
                        <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new follower</div>
                        <span class="fw-medium text-muted">42 min ago</span>
                        </div>
                    </a>
                    </li>
                </ul>
                <div class="p-2 border-top text-center">
                    <a class="d-inline-block fw-medium" href="javascript:void(0)">
                    <i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Load More..
                    </a>
                </div>
                </div>
            </div>
            <!-- END Notifications Dropdown -->

            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            
            <!-- END Toggle Side Overlay -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
            <div class="content-header">
            <form class="w-100" action="/dashboard" method="POST">
                <?php echo csrf_field(); ?>
                <div class="input-group">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                    <i class="fa fa-fw fa-times-circle"></i>
                </button>
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                </div>
            </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-body-extra-light">
            <div class="content-header">
            <div class="w-100 text-center">
                <i class="fa fa-fw fa-circle-notch fa-spin"></i>
            </div>
            </div>
        </div>
        <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
        <?php echo $__env->yieldContent('content'); ?>
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
        <div class="content py-3">
            <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://pixelcave.com" target="_blank">pixelcave</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                <a class="fw-semibold" href="https://pixelcave.com/products/oneui" target="_blank">OneUI</a> &copy; <span data-toggle="year-copy"></span>
            </div>
            </div>
        </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->
    </body>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm modal-dialog-popin">
        <div class="modal-content">
        <div class="modal-header bg-danger text-white">
            <h5 class="modal-title" id="confirmDeleteLabel">Confirm Deletion</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
            <p>Are you sure you want to delete this record?</p>
        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-sm btn-danger" id="confirmDeleteBtn">Yes, Delete</button>
        </div>
        </div>
    </div>
    </div>

    </html>
    <script>
        let formToSubmit;

        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function () {
                formToSubmit = this.closest('form');
            });
        });

        document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
            if (formToSubmit) {
                formToSubmit.submit();
            }
        });
    </script>
<?php /**PATH D:\laragon\www\icon-villas\resources\views/layouts/backend.blade.php ENDPATH**/ ?>