{{--
<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item">
                    <a class="nav-link {{ setSidebarActive(['admin.dashboard']) }}"
                        href="{{ route('admin.dashboard') }}">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <i class="ti ti-home sidebar-icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Home
                        </span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                                <path d="M12 12l8 -4.5" />
                                <path d="M12 12l0 9" />
                                <path d="M12 12l-8 -4.5" />
                                <path d="M16 5.25l-8 4.5" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Interface
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="./alerts.html">
                                    Alerts
                                </a>
                                <a class="dropdown-item" href="./accordion.html">
                                    Accordion
                                </a>
                                <div class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication"
                                        data-bs-toggle="dropdown" data-bs-auto-close="false" role="button"
                                        aria-expanded="false">
                                        Authentication
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="./sign-in.html" class="dropdown-item">
                                            Sign in
                                        </a>
                                        <a href="./sign-in-link.html" class="dropdown-item">
                                            Sign in link
                                        </a>
                                        <a href="./sign-in-illustration.html" class="dropdown-item">
                                            Sign in with illustration
                                        </a>
                                        <a href="./sign-in-cover.html" class="dropdown-item">
                                            Sign in with cover
                                        </a>
                                        <a href="./sign-up.html" class="dropdown-item">
                                            Sign up
                                        </a>
                                        <a href="./forgot-password.html" class="dropdown-item">
                                            Forgot password
                                        </a>
                                        <a href="./terms-of-service.html" class="dropdown-item">
                                            Terms of service
                                        </a>
                                        <a href="./auth-lock.html" class="dropdown-item">
                                            Lock screen
                                        </a>
                                        <a href="./2-step-verification.html" class="dropdown-item">
                                            2 step verification
                                        </a>
                                        <a href="./2-step-verification-code.html" class="dropdown-item">
                                            2 step verification code
                                        </a>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="./blank.html">
                                    Blank page
                                </a>
                                <a class="dropdown-item" href="./badges.html">
                                    Badges
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./buttons.html">
                                    Buttons
                                </a>
                                <div class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#sidebar-cards"
                                        data-bs-toggle="dropdown" data-bs-auto-close="false" role="button"
                                        aria-expanded="false">
                                        Cards
                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="./cards.html" class="dropdown-item">
                                            Sample cards
                                        </a>
                                        <a href="./card-actions.html" class="dropdown-item">
                                            Card actions
                                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a href="./cards-masonry.html" class="dropdown-item">
                                            Cards Masonry
                                        </a>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="./carousel.html">
                                    Carousel
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./charts.html">
                                    Charts
                                </a>
                                <a class="dropdown-item" href="./colors.html">
                                    Colors
                                </a>
                                <a class="dropdown-item" href="./colorpicker.html">
                                    Color picker
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./datagrid.html">
                                    Data grid
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./datatables.html">
                                    Datatables
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./dropdowns.html">
                                    Dropdowns
                                </a>
                                <a class="dropdown-item" href="./dropzone.html">
                                    Dropzone
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <div class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#sidebar-error"
                                        data-bs-toggle="dropdown" data-bs-auto-close="false" role="button"
                                        aria-expanded="false">
                                        Error pages
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="./error-404.html" class="dropdown-item">
                                            404 page
                                        </a>
                                        <a href="./error-500.html" class="dropdown-item">
                                            500 page
                                        </a>
                                        <a href="./error-maintenance.html" class="dropdown-item">
                                            Maintenance page
                                        </a>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="./flags.html">
                                    Flags
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./inline-player.html">
                                    Inline player
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                            </div>
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="./lightbox.html">
                                    Lightbox
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./lists.html">
                                    Lists
                                </a>
                                <a class="dropdown-item" href="./modals.html">
                                    Modal
                                </a>
                                <a class="dropdown-item" href="./maps.html">
                                    Map
                                </a>
                                <a class="dropdown-item" href="./map-fullsize.html">
                                    Map fullsize
                                </a>
                                <a class="dropdown-item" href="./maps-vector.html">
                                    Map vector
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./markdown.html">
                                    Markdown
                                </a>
                                <a class="dropdown-item" href="./navigation.html">
                                    Navigation
                                </a>
                                <a class="dropdown-item" href="./offcanvas.html">
                                    Offcanvas
                                </a>
                                <a class="dropdown-item" href="./pagination.html">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/pie-chart -->
                                    Pagination
                                </a>
                                <a class="dropdown-item" href="./placeholder.html">
                                    Placeholder
                                </a>
                                <a class="dropdown-item" href="./steps.html">
                                    Steps
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./stars-rating.html">
                                    Stars rating
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./tabs.html">
                                    Tabs
                                </a>
                                <a class="dropdown-item" href="./tags.html">
                                    Tags
                                </a>
                                <a class="dropdown-item" href="./tables.html">
                                    Tables
                                </a>
                                <a class="dropdown-item" href="./typography.html">
                                    Typography
                                </a>
                                <a class="dropdown-item" href="./tinymce.html">
                                    TinyMCE
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./form-elements.html">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 11l3 3l8 -8" />
                                <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Forms
                        </span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Extra
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="./empty.html">
                                    Empty page
                                </a>
                                <a class="dropdown-item" href="./cookie-banner.html">
                                    Cookie banner
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./chat.html">
                                    Chat
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./activity.html">
                                    Activity
                                </a>
                                <a class="dropdown-item" href="./gallery.html">
                                    Gallery
                                </a>
                                <a class="dropdown-item" href="./invoice.html">
                                    Invoice
                                </a>
                                <a class="dropdown-item" href="./search-results.html">
                                    Search results
                                </a>
                                <a class="dropdown-item" href="./pricing.html">
                                    Pricing cards
                                </a>
                                <a class="dropdown-item" href="./pricing-table.html">
                                    Pricing table
                                </a>
                                <a class="dropdown-item" href="./faq.html">
                                    FAQ
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./users.html">
                                    Users
                                </a>
                                <a class="dropdown-item" href="./license.html">
                                    License
                                </a>
                            </div>
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="./logs.html">
                                    Logs
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./music.html">
                                    Music
                                </a>
                                <a class="dropdown-item" href="./photogrid.html">
                                    Photogrid
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./tasks.html">
                                    Tasks
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./uptime.html">
                                    Uptime monitor
                                </a>
                                <a class="dropdown-item" href="./widgets.html">
                                    Widgets
                                </a>
                                <a class="dropdown-item" href="./wizard.html">
                                    Wizard
                                </a>
                                <a class="dropdown-item" href="./settings.html">
                                    Settings
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./trial-ended.html">
                                    Trial ended
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./job-listing.html">
                                    Job listing
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./page-loader.html">
                                    Page loader
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="true">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                <path
                                    d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                <path
                                    d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                <path
                                    d="M14 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Layout
                        </span>
                    </a>
                    <div class="dropdown-menu show">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="./layout-horizontal.html">
                                    Horizontal
                                </a>
                                <a class="dropdown-item" href="./layout-boxed.html">
                                    Boxed
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item active" href="./layout-vertical.html">
                                    Vertical
                                </a>
                                <a class="dropdown-item" href="./layout-vertical-transparent.html">
                                    Vertical transparent
                                </a>
                                <a class="dropdown-item" href="./layout-vertical-right.html">
                                    Right vertical
                                </a>
                                <a class="dropdown-item" href="./layout-condensed.html">
                                    Condensed
                                </a>
                                <a class="dropdown-item" href="./layout-combo.html">
                                    Combined
                                </a>
                            </div>
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="./layout-navbar-dark.html">
                                    Navbar dark
                                </a>
                                <a class="dropdown-item" href="./layout-navbar-sticky.html">
                                    Navbar sticky
                                </a>
                                <a class="dropdown-item" href="./layout-navbar-overlap.html">
                                    Navbar overlap
                                </a>
                                <a class="dropdown-item" href="./layout-rtl.html">
                                    RTL mode
                                </a>
                                <a class="dropdown-item" href="./layout-fluid.html">
                                    Fluid
                                </a>
                                <a class="dropdown-item" href="./layout-fluid-vertical.html">
                                    Fluid vertical
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./icons.html">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                                <path d="M10 10l.01 0" />
                                <path d="M14 10l.01 0" />
                                <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            4637 icons
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./emails.html">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/mail-opened -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                                <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                                <path d="M3 19l6 -6" />
                                <path d="M15 13l6 6" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Email templates
                        </span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M15 15l3.35 3.35" />
                                <path d="M9 15l-3.35 3.35" />
                                <path d="M5.65 5.65l3.35 3.35" />
                                <path d="M18.35 5.65l-3.35 3.35" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Help
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="https://tabler.io/docs" target="_blank" rel="noopener">
                            Documentation
                        </a>
                        <a class="dropdown-item" href="./changelog.html">
                            Changelog
                        </a>
                        <a class="dropdown-item" href="https://github.com/tabler/tabler" target="_blank"
                            rel="noopener">
                            Source code
                        </a>
                        <a class="dropdown-item text-pink" href="https://github.com/sponsors/codecalm"
                            target="_blank" rel="noopener">
                            <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline me-1" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                            Sponsor project!
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</aside>

<!-- Navbar -->
<header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
            aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav flex-row order-md-last ">
            <div class="d-none d-md-flex me-4">
                <a href="?theme=dark" class="nav-link px-0 hide-theme-dark " data-bs-toggle="tooltip"
                    data-bs-placement="bottom" aria-label="Enable dark mode"
                    data-bs-original-title="Enable dark mode">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path>
                    </svg>
                </a>
                <a href="?theme=light" class="nav-link px-0 hide-theme-light" data-bs-toggle="tooltip"
                    data-bs-placement="bottom" aria-label="Enable light mode"
                    data-bs-original-title="Enable light mode">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                        <path
                            d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7">
                        </path>
                    </svg>
                </a>

            </div>
            <div class="nav-item dropdown">
                <a href="javascript:;" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu" aria-expanded="false">
                    <span class="avatar avatar-sm" style="background-image: url({{ asset(admin()->avatar) }})"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div>{{ admin()->name }}</div>
                        <div class="mt-1 small text-secondary">{{ admin()->email }}</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <a href="{{ route('admin.profile.index') }}" class="dropdown-item">{{ __('Profile') }}</a>
                    <div class="dropdown-divider"></div>
                    <a href="" class="dropdown-item">{{ __('Settings') }}</a>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <a href="javascript:;" onclick="event.preventDefault(); this.closest('form').submit();"
                            class="dropdown-item">{{ __('Logout') }}</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">

        </div>
    </div>
</header>
 --}}

<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
            aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="javascript:;">
                <img src="{{ asset(config('settings.logo')) }}" width="110" height="32"
                    alt="{{ config('setting.site_name') }}" class="navbar-brand-image">
            </a>
        </h1>
        <div class="navbar-nav flex-row d-lg-none">

            <div class="d-none d-lg-flex">
                <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
                    data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                    </svg>
                </a>
                <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
                    data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        <path
                            d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                    </svg>
                </a>

            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url({{ asset(admin()->avatar) }})"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div>{{ admin()->name }}</div>
                        <div class="mt-1 small text-secondary">Admin</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <a href="{{ route('admin.profile.index') }}" class="dropdown-item">{{ __('Profile') }}</a>
                    <div class="dropdown-divider"></div>
                    <a href="" class="dropdown-item">{{ __('Settings') }}</a>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <a href="javascript:;" onclick="event.preventDefault(); this.closest('form').submit();"
                            class="dropdown-item">{{ __('Logout') }}</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item">
                    <a class="nav-link {{ setSidebarActive(['admin.dashboard']) }}"
                        href="{{ route('admin.dashboard') }}">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <i class="ti ti-home sidebar-icon"></i>
                        </span>
                        <span class="nav-link-title">
                            Home
                        </span>
                    </a>
                </li>


                @if (canAccess(['manage categories']))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ setSidebarActive(['admin.categories.index', 'admin.sub-categories.index']) == 'active' ? 'show' : '' }}"
                            href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button"
                            aria-expanded="true">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                                <i class="ti ti-list sidebar-icon"></i>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Manage Categories') }}
                            </span>
                        </a>
                        <div
                            class="dropdown-menu {{ setSidebarActive(['admin.categories.index', 'admin.sub-categories.index']) == 'active' ? 'show' : '' }}">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item {{ setSidebarActive(['admin.categories.index']) }}"
                                        href="{{ route('admin.categories.index') }}">
                                        {{ __('Main Categories') }}
                                    </a>

                                    <a class="dropdown-item {{ setSidebarActive(['admin.sub-categories.index']) }}"
                                        href="{{ route('admin.sub-categories.index') }}">
                                        {{ __('Sub Categories') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endif

                {{-- @if (canAccess(['manage order']))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ setSidebarActive(['admin.orders.index', 'admin.kyc-settings.index']) == 'active' ? 'show' : '' }}"
                            href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="false"
                            role="button" aria-expanded="true">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-truck-delivery sidebar-icon"></i>
                            </span>
                            <span class="nav-link-title">
                                Manage Orders
                            </span>
                        </a>
                        <div
                            class="dropdown-menu {{ setSidebarActive(['admin.orders.index', 'admin.kyc-settings.index']) == 'active' ? 'show' : '' }}">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item {{ setSidebarActive(['admin.orders.index']) }}"
                                        href="{{ route('admin.orders.index') }}">
                                        Orders
                                        <span class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">0</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </li>
                @endif --}}

                {{-- @if (canAccess(['review products']))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle
                        {{ setSidebarActive([
                            'admin.item-reviews.pending.index',
                            'admin.item-reviews.resubmitted.index',
                            'admin.item-reviews.softrejected.index',
                            'admin.item-reviews.hardrejected.index',
                            'admin.item-reviews.approved.index',
                        ]) == 'active'
                            ? 'show'
                            : '' }}"
                            href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="false"
                            role="button" aria-expanded="true">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-basket-bolt sidebar-icon"></i>
                            </span>
                            <span class="nav-link-title">
                                Product Review
                            </span>
                        </a>
                        <div
                            class="dropdown-menu
                        {{ setSidebarActive([
                            'admin.item-reviews.pending.index',
                            'admin.item-reviews.resubmitted.index',
                            'admin.item-reviews.softrejected.index',
                            'admin.item-reviews.hardrejected.index',
                            'admin.item-reviews.approved.index',
                        ]) == 'active'
                            ? 'show'
                            : '' }}">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item {{ setSidebarActive(['admin.item-reviews.pending.index']) }}"
                                        href="{{ route('admin.item-reviews.pending.index') }}">
                                        Pending
                                        <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">{{ getItemStatusCount('pending') }}</span>
                                    </a>
                                    <a class="dropdown-item {{ setSidebarActive(['admin.item-reviews.resubmitted.index']) }}"
                                        href="{{ route('admin.item-reviews.resubmitted.index') }}">
                                        Resubmitted
                                        <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">{{ getItemStatusCount('resubmitted') }}</span>
                                    </a>
                                    <a class="dropdown-item {{ setSidebarActive(['admin.item-reviews.softrejected.index']) }}"
                                        href="{{ route('admin.item-reviews.softrejected.index') }}">
                                        Soft Rejected
                                    </a>
                                    <a class="dropdown-item {{ setSidebarActive(['admin.item-reviews.hardrejected.index']) }}"
                                        href="{{ route('admin.item-reviews.hardrejected.index') }}">
                                        Hard Rejected
                                    </a>

                                    <a class="dropdown-item {{ setSidebarActive(['admin.item-reviews.approved.index']) }}"
                                        href="{{ route('admin.item-reviews.approved.index') }}">
                                        Approved
                                    </a>

                                </div>
                            </div>
                        </div>
                    </li>
                @endif --}}

                {{-- @if (canAccess(['mange kyc']))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ setSidebarActive(['admin.kyc.index', 'admin.kyc-settings.index']) }}"
                            href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="false"
                            role="button" aria-expanded="true">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <i class="ti ti-user-scan sidebar-icon"></i>
                            </span>
                            <span class="nav-link-title">
                                KYC
                            </span>
                        </a>
                        <div
                            class="dropdown-menu {{ setSidebarActive(['admin.kyc.index', 'admin.kyc-settings.index']) }}">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item {{ setSidebarActive(['admin.kyc.index']) }}"
                                        href="{{ route('admin.kyc.index') }}">
                                        KYC Requests
                                        <span
                                            class="badge badge-sm bg-yellow-lt text-uppercase ms-auto">{{ pendingKycCount() }}</span>
                                    </a>
                                    <a class="dropdown-item {{ setSidebarActive(['admin.kyc-settings.index']) }}"
                                        href="{{ route('admin.kyc-settings.index') }}">
                                        KYC Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endif --}}

                {{-- @if (canAccess(['mange withdraw request']))
                    <li class="nav-item">
                        <a class="nav-link {{ setSidebarActive(['admin.withdraw-requests.index']) }}"
                            href="{{ route('admin.withdraw-requests.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="ti ti-credit-card sidebar-icon"></i>
                            </span>
                            <span class="nav-link-title">
                                Withdraw Requests
                            </span>
                        </a>
                    </li>
                @endif --}}

                {{-- @if (canAccess(['manage withdraw method']))
                    <li class="nav-item">
                        <a class="nav-link {{ setSidebarActive(['admin.withdrawal-methods.index']) }}"
                            href="{{ route('admin.withdrawal-methods.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="ti ti-cash-banknote sidebar-icon"></i>
                            </span>
                            <span class="nav-link-title">
                                Withdraw Methods
                            </span>
                        </a>
                    </li>
                @endif --}}

                {{-- @if (canAccess(['manage sections']))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ setSidebarActive([
                            'admin.hero-section.index',
                            'admin.featured-categories-section.index',
                            'admin.highlighted-products-section.index',
                            'admin.monthly-picked-products-section.index',
                            'admin.featured-author-section.index',
                            'admin.counter-section.index',
                            'admin.banner-section.index',
                            'admin.footer-section.index',
                            'admin.contact-section.index',
                            'admin.counter-section.index',
                        ]) == 'active'
                            ? 'show'
                            : '' }}"
                            href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="false"
                            role="button" aria-expanded="true">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                                <i class="ti ti-layout sidebar-icon"></i>
                            </span>
                            <span class="nav-link-title">
                                {{ __('Sections') }}
                            </span>
                        </a>
                        <div
                            class="dropdown-menu {{ setSidebarActive([
                                'admin.hero-section.index',
                                'admin.featured-categories-section.index',
                                'admin.highlighted-products-section.index',
                                'admin.monthly-picked-products-section.index',
                                'admin.featured-author-section.index',
                                'admin.counter-section.index',
                                'admin.banner-section.index',
                                'admin.footer-section.index',
                                'admin.contact-section.index',
                                'admin.counter-section.index',
                            ]) == 'active'
                                ? 'show'
                                : '' }}">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item {{ setSidebarActive(['admin.hero-section.index']) }}"
                                        href="{{ route('admin.hero-section.index') }}">
                                        {{ __('Hero Section') }}
                                    </a>
                                </div>
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item {{ setSidebarActive(['admin.featured-categories-section.index']) }}"
                                        href="{{ route('admin.featured-categories-section.index') }}">
                                        {{ __('Featured Categories') }}
                                    </a>
                                </div>

                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item {{ setSidebarActive(['admin.highlighted-products-section.index']) }}"
                                        href="{{ route('admin.highlighted-products-section.index') }}">
                                        {{ __('Highlighted Products') }}
                                    </a>
                                </div>

                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item {{ setSidebarActive(['admin.monthly-picked-products-section.index']) }}"
                                        href="{{ route('admin.monthly-picked-products-section.index') }}">
                                        {{ __('Monthly Picks') }}
                                    </a>
                                </div>

                                <div
                                    class="dropdown-menu-column {{ setSidebarActive(['admin.featured-author-section.index']) }}">
                                    <a class="dropdown-item"
                                        href="{{ route('admin.featured-author-section.index') }}">
                                        {{ __('Featured Author') }}
                                    </a>
                                </div>

                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item {{ setSidebarActive(['admin.counter-section.index']) }}"
                                        href="{{ route('admin.counter-section.index') }}">
                                        {{ __('Counter Section') }}
                                    </a>
                                </div>

                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item {{ setSidebarActive(['admin.banner-section.index']) }}"
                                        href="{{ route('admin.banner-section.index') }}">
                                        {{ __('Banner Section') }}
                                    </a>
                                </div>

                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item {{ setSidebarActive(['admin.footer-section.index']) }}"
                                        href="{{ route('admin.footer-section.index') }}">
                                        {{ __('Footer Section') }}
                                    </a>
                                </div>
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item {{ setSidebarActive(['admin.contact-section.index']) }}"
                                        href="{{ route('admin.contact-section.index') }}">
                                        {{ __('Contact Section') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endif --}}

                {{-- @if (canAccess(['manage socials']))
                    <li class="nav-item">
                        <a class="nav-link {{ setSidebarActive(['admin.social-links.index']) }}"
                            href="{{ route('admin.social-links.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="ti ti-link-plus sidebar-icon"></i>
                            </span>
                            <span class="nav-link-title">
                                Social Links
                            </span>
                        </a>
                    </li>
                @endif --}}

                {{-- @if (canAccess(['manage banner']))
                    <li class="nav-item">
                        <a class="nav-link {{ setSidebarActive(['admin.banner.index']) }}"
                            href="{{ route('admin.banner.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="ti ti-ad sidebar-icon"></i>
                            </span>
                            <span class="nav-link-title">
                                Banner
                            </span>
                        </a>
                    </li>
                @endif --}}

                {{-- @if (canAccess(['page builder']))
                    <li class="nav-item">
                        <a class="nav-link {{ setSidebarActive(['admin.custom-page.index']) }}"
                            href="{{ route('admin.custom-page.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="ti ti-layout-grid-add sidebar-icon"></i>
                            </span>
                            <span class="nav-link-title">
                                Page Builder
                            </span>
                        </a>
                    </li>
                @endif --}}

                {{-- @if (canAccess(['manage newsletter']))
                    <li class="nav-item">
                        <a class="nav-link {{ setSidebarActive(['admin.subscribers.index']) }}"
                            href="{{ route('admin.subscribers.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="ti ti-article sidebar-icon"></i>
                            </span>
                            <span class="nav-link-title">
                                Subscribers
                            </span>
                        </a>
                    </li>
                @endif --}}


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ setSidebarActive(['admin.role-users.index', 'admin.roles.index']) == 'active' ? 'show' : '' }}"
                            href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="false"
                            role="button" aria-expanded="true">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                                <i class="ti ti-shield-cog sidebar-icon"></i>
                            </span>
                            <span class="nav-link-title">
                                Access Management
                            </span>
                        </a>
                        <div
                            class="dropdown-menu {{ setSidebarActive(['admin.role-users.index', 'admin.roles.index']) == 'active' ? 'show' : '' }}">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    {{-- <a class="dropdown-item {{ setSidebarActive(['admin.role-users.index']) }}"
                                        href="{{ route('admin.role-users.index') }}">
                                        Role Users
                                    </a> --}}
                                    <a class="dropdown-item {{ setSidebarActive(['admin.roles.index']) }}"
                                        href="{{ route('admin.roles.index') }}">
                                        Role & Permissions
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                

                {{-- @if (canAccess(['payment setting']))
                    <li class="nav-item">
                        <a class="nav-link {{ setSidebarActive(['admin.payment-settings.index']) }}"
                            href="{{ route('admin.payment-settings.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="ti ti-database-dollar sidebar-icon"></i>
                            </span>
                            <span class="nav-link-title">
                                Payment Setting
                            </span>
                        </a>
                    </li>
                @endif --}}

                {{-- @if (canAccess(['manage setting']))
                    <li class="nav-item ">
                        <a class="nav-link {{ setSidebarActive(['admin.settings.index']) }}"
                            href="{{ route('admin.settings.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="ti ti-settings sidebar-icon"></i>
                            </span>
                            <span class="nav-link-title">
                                Settings
                            </span>
                        </a>
                    </li>
                @endif --}}

                {{-- @if (canAccess(['manage setting']))
                    <li class="nav-item ">
                        <a class="nav-link {{ setSidebarActive(['admin.settings.index']) }}"
                            href="{{ route('admin.wipe-database.index') }}">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <i class="ti ti-settings sidebar-icon"></i>
                            </span>
                            <span class="nav-link-title">
                                Wipe Database
                            </span>
                        </a>
                    </li>
                @endif --}}

            </ul>
        </div>
    </div>
</aside>

<!-- Navbar -->
<header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
            aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav flex-row order-md-last ">
            <div class="d-none d-md-flex me-4">
                <a href="?theme=dark" class="nav-link px-0 hide-theme-dark " data-bs-toggle="tooltip"
                    data-bs-placement="bottom" aria-label="Enable dark mode"
                    data-bs-original-title="Enable dark mode">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path>
                    </svg>
                </a>
                <a href="?theme=light" class="nav-link px-0 hide-theme-light" data-bs-toggle="tooltip"
                    data-bs-placement="bottom" aria-label="Enable light mode"
                    data-bs-original-title="Enable light mode">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                        <path
                            d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7">
                        </path>
                    </svg>
                </a>

            </div>
            <div class="nav-item dropdown">
                <a href="javascript:;" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                    aria-label="Open user menu" aria-expanded="false">
                    <span class="avatar avatar-sm"
                        style="background-image: url({{ asset(admin()->avatar) }})"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div>{{ admin()->name }}</div>
                        <div class="mt-1 small text-secondary">{{ admin()->email }}</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <a href="{{ route('admin.profile.index') }}" class="dropdown-item">{{ __('Profile') }}</a>
                    <div class="dropdown-divider"></div>
                    <a href="" class="dropdown-item">{{ __('Settings') }}</a>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <a href="javascript:;" onclick="event.preventDefault(); this.closest('form').submit();"
                            class="dropdown-item">{{ __('Logout') }}</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">

        </div>
    </div>
</header>
