<?php


namespace App\Views;


class Main
{
    public function render($data = [])
    {
        ?>

        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

            <title>Home Page</title>

            <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
            <meta name="author" content="pixelcave">
            <meta name="robots" content="noindex, nofollow">

            <!-- Open Graph Meta -->
            <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
            <meta property="og:site_name" content="OneUI">
            <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
            <meta property="og:type" content="website">
            <meta property="og:url" content="">
            <meta property="og:image" content="">


            <link rel="shortcut icon" href="/assets/media/favicons/favicon.png">
            <link rel="icon" type="image/png" sizes="192x192" href="/assets/media/favicons/favicon-192x192.png">
            <link rel="apple-touch-icon" sizes="180x180" href="/assets/media/favicons/apple-touch-icon-180x180.png">

            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
            <link rel="stylesheet" id="css-main" href="/assets/css/oneui.min.css">


        </head>
        <body>
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
            <!-- Side Overlay-->
            <aside id="side-overlay" class="font-size-sm">
                <!-- Side Header -->
                <div class="content-header border-bottom">
                    <!-- User Avatar -->
                    <a class="img-link mr-1" href="javascript:void(0)">
                        <img class="img-avatar img-avatar32" src="/assets/media/avatars/avatar10.jpg" alt="">
                    </a>
                    <!-- END User Avatar -->

                    <!-- User Info -->
                    <div class="ml-2">
                        <a class="link-fx text-dark font-w600" href="javascript:void(0)">Adam McCoy</a>
                    </div>
                    <!-- END User Info -->

                    <!-- Close Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="ml-auto btn btn-sm btn-dual" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fa fa-fw fa-times text-danger"></i>
                    </a>
                    <!-- END Close Side Overlay -->
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="content-side">
                    <!-- Side Overlay Tabs -->
                    <div class="block block-transparent pull-x pull-t">
                        <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#so-overview">
                                    <i class="fa fa-fw fa-coffee text-gray mr-1"></i> Overview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#so-sales">
                                    <i class="fa fa-fw fa-chart-line text-gray mr-1"></i> Sales
                                </a>
                            </li>
                        </ul>
                        <div class="block-content tab-content overflow-hidden">
                            <!-- Overview Tab -->
                            <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel">
                                <!-- Activity -->
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Recent Activity</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                <i class="si si-refresh"></i>
                                            </button>
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <!-- Activity List -->
                                        <ul class="nav-items mb-0">
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="si si-wallet text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale ($15)</div>
                                                        <div class="text-success">Admin Template</div>
                                                        <small class="text-muted">3 min ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="si si-pencil text-info"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">You edited the file</div>
                                                        <div class="text-info">
                                                            <i class="fa fa-file-text"></i> Documentation.doc
                                                        </div>
                                                        <small class="text-muted">15 min ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="si si-close text-danger"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Project deleted</div>
                                                        <div class="text-danger">Line Icon Set</div>
                                                        <small class="text-muted">4 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- END Activity List -->
                                    </div>
                                </div>
                                <!-- END Activity -->

                                <!-- Online Friends -->
                                <div class="block">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Online Friends</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                <i class="si si-refresh"></i>
                                            </button>
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <!-- Users Navigation -->
                                        <ul class="nav-items mb-0">
                                            <li>
                                                <a class="media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                        <img class="img-avatar img-avatar48" src="/assets/media/avatars/avatar5.jpg" alt="">
                                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Helen Jacobs</div>
                                                        <div class="font-w400 text-muted">Copywriter</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                        <img class="img-avatar img-avatar48" src="/assets/media/avatars/avatar14.jpg" alt="">
                                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Jose Mills</div>
                                                        <div class="font-w400 text-muted">Web Developer</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                        <img class="img-avatar img-avatar48" src="/assets/media/avatars/avatar2.jpg" alt="">
                                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Megan Fuller</div>
                                                        <div class="font-w400 text-muted">Web Designer</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                        <img class="img-avatar img-avatar48" src="/assets/media/avatars/avatar2.jpg" alt="">
                                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Lori Moore</div>
                                                        <div class="font-w400 text-muted">Photographer</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2 overlay-container overlay-bottom">
                                                        <img class="img-avatar img-avatar48" src="/assets/media/avatars/avatar13.jpg" alt="">
                                                        <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-warning"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Henry Harrison</div>
                                                        <div class="font-w400 text-muted">Graphic Designer</div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- END Users Navigation -->
                                    </div>
                                </div>
                                <!-- END Online Friends -->

                                <!-- Quick Settings -->
                                <div class="block mb-0">
                                    <div class="block-header block-header-default">
                                        <h3 class="block-title">Quick Settings</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <!-- Quick Settings Form -->
                                        <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                                            <div class="form-group">
                                                <p class="font-w600 mb-2">
                                                    Online Status
                                                </p>
                                                <div class="custom-control custom-switch mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="so-settings-check1" name="so-settings-check1" checked>
                                                    <label class="custom-control-label" for="so-settings-check1">Show your status to all</label>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <p class="font-w600 mb-2">
                                                    Auto Updates
                                                </p>
                                                <div class="custom-control custom-switch mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="so-settings-check2" name="so-settings-check2" checked>
                                                    <label class="custom-control-label" for="so-settings-check2">Keep up to date</label>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <p class="font-w600 mb-1">
                                                    Application Alerts
                                                </p>
                                                <div class="custom-control custom-switch mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="so-settings-check3" name="so-settings-check3" checked>
                                                    <label class="custom-control-label" for="so-settings-check3">Email Notifications</label>
                                                </div>
                                                <div class="custom-control custom-switch mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="so-settings-check4" name="so-settings-check4" checked>
                                                    <label class="custom-control-label" for="so-settings-check4">SMS Notifications</label>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <p class="font-w600 mb-1">
                                                    API
                                                </p>
                                                <div class="custom-control custom-switch mb-1">
                                                    <input type="checkbox" class="custom-control-input" id="so-settings-check5" name="so-settings-check5" checked>
                                                    <label class="custom-control-label" for="so-settings-check5">Enable access</label>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END Quick Settings Form -->
                                    </div>
                                </div>
                                <!-- END Quick Settings -->
                            </div>
                            <!-- END Overview Tab -->

                            <!-- Sales Tab -->
                            <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel">
                                <div class="block mb-0">
                                    <!-- Stats -->
                                    <div class="block-content">
                                        <div class="row items-push pull-t">
                                            <div class="col-6">
                                                <div class="font-w700 text-uppercase">Sales</div>
                                                <a class="link-fx font-size-h3 font-w300" href="javascript:void(0)">22.030</a>
                                            </div>
                                            <div class="col-6">
                                                <div class="font-w700 text-uppercase">Balance</div>
                                                <a class="link-fx font-size-h3 font-w300" href="javascript:void(0)">$4.589,00</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Stats -->

                                    <!-- Today -->
                                    <div class="block-content block-content-full block-content-sm bg-body-light">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="font-w600 text-uppercase">Today</span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="ext-muted">$996</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <ul class="nav-items push">
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $249</div>
                                                        <small class="text-muted">3 min ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $129</div>
                                                        <small class="text-muted">50 min ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $119</div>
                                                        <small class="text-muted">2 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $499</div>
                                                        <small class="text-muted">3 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END Today -->

                                    <!-- Yesterday -->
                                    <div class="block-content block-content-full block-content-sm bg-body-light">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="font-w600 text-uppercase">Yesterday</span>
                                            </div>
                                            <div class="col-6 text-right">
                                                <span class="text-muted">$765</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <ul class="nav-items push">
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $249</div>
                                                        <small class="text-muted">26 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-danger"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Product Purchase - $50</div>
                                                        <small class="text-muted">28 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $119</div>
                                                        <small class="text-muted">29 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-danger"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">Paypal Withdrawal - $300</div>
                                                        <small class="text-muted">37 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $129</div>
                                                        <small class="text-muted">39 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $119</div>
                                                        <small class="text-muted">45 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                    <div class="mr-3 ml-2">
                                                        <i class="fa fa-fw fa-circle text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="font-w600">New sale! + $499</div>
                                                        <small class="text-muted">46 hours ago</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- More -->
                                        <div class="text-center">
                                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                                <i class="fa fa-arrow-down mr-1"></i> Load More..
                                            </a>
                                        </div>
                                        <!-- END More -->
                                    </div>
                                    <!-- END Yesterday -->
                                </div>
                            </div>
                            <!-- END Sales Tab -->
                        </div>
                    </div>
                    <!-- END Side Overlay Tabs -->
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
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="font-w600 text-dual" href="index.html">
                        <i class="fa fa-circle-notch text-primary"></i>
                        <span class="smini-hide">
                            <span class="font-w700 font-size-h5">ne</span> <span class="font-w400">1.0.0</span>
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <!-- Color Variations -->
                        <div class="dropdown d-inline-block ml-3">
                            <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="si si-drop"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                                <!-- Color Themes -->
                                <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="default" href="#">
                                    <span>Default</span>
                                    <i class="fa fa-circle text-default"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="/assets/css/themes/amethyst.min.css" href="#">
                                    <span>Amethyst</span>
                                    <i class="fa fa-circle text-amethyst"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="/assets/css/themes/city.min.css" href="#">
                                    <span>City</span>
                                    <i class="fa fa-circle text-city"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="/assets/css/themes/flat.min.css" href="#">
                                    <span>Flat</span>
                                    <i class="fa fa-circle text-flat"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="/assets/css/themes/modern.min.css" href="#">
                                    <span>Modern</span>
                                    <i class="fa fa-circle text-modern"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="/assets/css/themes/smooth.min.css" href="#">
                                    <span>Smooth</span>
                                    <i class="fa fa-circle text-smooth"></i>
                                </a>
                                <!-- END Color Themes -->

                                <div class="dropdown-divider"></div>

                                <!-- Sidebar Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                                    <span>Sidebar Light</span>
                                </a>
                                <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                                    <span>Sidebar Dark</span>
                                </a>
                                <!-- Sidebar Styles -->

                                <div class="dropdown-divider"></div>

                                <!-- Header Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                                    <span>Header Light</span>
                                </a>
                                <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                                    <span>Header Dark</span>
                                </a>
                                <!-- Header Styles -->
                            </div>
                        </div>
                        <!-- END Themes -->

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-times"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
                <!-- END Side Header -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="/">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">User Interface</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-energy"></i>
                                <span class="nav-main-link-name">Users</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="/users">
                                        <span class="nav-main-link-name">All Users</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="/user/add">
                                        <span class="nav-main-link-name">New User</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
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
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Toggle Mini Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                            <i class="fa fa-fw fa-ellipsis-v"></i>
                        </button>
                        <!-- END Toggle Mini Sidebar -->


                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-dual d-sm-none" data-toggle="layout" data-action="header_search_on">
                            <i class="si si-magnifier"></i>
                        </button>
                        <!-- END Open Search Section -->

                        <!-- Search Form (visible on larger screens) -->
                        <form class="d-none d-sm-inline-block" action="be_pages_generic_search.html" method="POST">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-body border-0">
                                        <i class="si si-magnifier"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <!-- END Search Form -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="d-flex align-items-center">
                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded" src="/assets/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 18px;">
                                <span class="d-none d-sm-inline-block ml-1">Adam</span>
                                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                                <div class="p-3 text-center bg-primary">
                                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="/assets/media/avatars/avatar10.jpg" alt="">
                                </div>
                                <div class="p-2">
                                    <h5 class="dropdown-header text-uppercase">Actions</h5>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="/logout">
                                        <span>Log Out</span>
                                        <i class="si si-logout ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Notifications Dropdown -->
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn btn-sm btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="si si-bell"></i>
                                <span class="badge badge-primary badge-pill">6</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-2 bg-primary text-center">
                                    <h5 class="dropdown-header text-uppercase text-white">Notifications</h5>
                                </div>
                                <ul class="nav-items mb-0">
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-check-circle text-success"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">You have a new follower</div>
                                                <small class="text-muted">15 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-plus-circle text-info"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">1 new sale, keep it up</div>
                                                <small class="text-muted">22 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-times-circle text-danger"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">Update failed, restart server</div>
                                                <small class="text-muted">26 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-plus-circle text-info"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">2 new sales, keep it up</div>
                                                <small class="text-muted">33 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-user-plus text-success"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">You have a new subscriber</div>
                                                <small class="text-muted">41 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-dark media py-2" href="javascript:void(0)">
                                            <div class="mr-2 ml-3">
                                                <i class="fa fa-fw fa-check-circle text-success"></i>
                                            </div>
                                            <div class="media-body pr-2">
                                                <div class="font-w600">You have a new follower</div>
                                                <small class="text-muted">42 min ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-arrow-down mr-1"></i> Load More..
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END Notifications Dropdown -->

                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header bg-white">
                    <div class="content-header">
                        <form class="w-100" action="be_pages_generic_search.html" method="POST">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-white">
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

                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill h3 my-2">
                                FAQ <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Check out answers to the most common questions.</small>
                            </h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">Generic</li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a class="link-fx" href="">Helper</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Frequently Asked Questions -->
                    <div class="block">
                        <div class="block-content block-content-full">
                          <?= $this->content($data) ?>
                        </div>
                    </div>
                    <!-- END Frequently Asked Questions -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                            <a class="font-w600" href="https://1.envato.market/xWy" target="_blank">OneUI 4.3</a> &copy; <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->

        </div>
        <!-- END Page Container -->

        <script src="/assets/js/oneui.core.min.js"></script>


        <script src="/assets/js/oneui.app.min.js"></script>
        </body>
        </html>

        <?php
    }

    public function content($data)
    {
    }

    public function table($data, $options)
    {
        ?>
      <div class="block">
      <div class="block-content">

      <div class="table-responsive">
      <table class="table table-bordered table-striped table-vcenter">
      <thead>
      <tr>
        <th class="text-center" style="width: 100px;">
          <i class="far fa-user"></i>
        </th>
          <?php
          foreach ($options as $key => $option) {
              if ($key == 'actions') {
                  echo '<th class="text-center" style="width: 100px">Actions</th>';
              } else {
                  echo '<th style="width: 30%;">' . $option['label'] . '</th>';
              }
          }
          ?>
      </tr>
      </thead>
      <tbody>
        <?php
          foreach ($data as $row => $user) {
        ?>
          <tr>
            <td class="text-center">
              <img class="img-avatar img-avatar48" src="/assets/media/avatars/avatar2.jpg" alt="">
            </td>

            <?php
            foreach ($options as $col => $option) {
              if ($col == 'actions') {
                echo '<td class="text-center"><div class="btn-group">';
                foreach ($option as $button) {
                  echo '<a href="'. $button['route'] .'?id='.$user['id'].'" class="btn btn-sm btn-primary js-tooltip-enabled" data-toggle="tooltip" title="' . $key .'"
                        data-original-title="Edit"><i class="fa fa-fw '. $button['icon'] .'"></i></a>';
                }
                echo '</div></td>';
              } else {
                echo '<td class="font-w600 font-size-sm">'. $user[$col] .'</td>';
              }
            }
            ?>
          </tr>
        <?php
          }
        ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

        <?php
    }

}