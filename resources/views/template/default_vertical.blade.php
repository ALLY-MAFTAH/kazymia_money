<!DOCTYPE html>
{{-- <html class="loading" lang="<?= $app['settings']['locale'] ?>" data-textdirection="ltr"> --}}

    <html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
  <!-- BEGIN: Head-->

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard Modern 2 | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="<?php echo ('app-assets/images/favicon/apple-touch-icon-152x152.png') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo ('app-assets/images/favicon/favicon-32x32.png') ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo ('app-assets/vendors/vendors.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo ('app-assets/vendors/animate-css/animate.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo ('app-assets/vendors/chartist-js/chartist.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo ('app-assets/vendors/chartist-js/chartist-plugin-tooltip.css') ?>">

    <?php
        if ( isset($app["template"]["styles"]["vendor"]) && is_array($app["template"]["styles"]["vendor"]) ):
            foreach ( $app["template"]["styles"]["vendor"] as $style ):
                $href = ( isset($style["href"]) ) ? ' href="'.($style["href"]) . '"' : "";
                $media = ( isset($style["media"]) ) ? ' media="' . ($style["media"]) . '"' : "";

                if ( !empty($href) ):
    ?>
        <link rel="stylesheet" type="text/css"<?php echo $href; echo $media; ?>>
    <?php  endif;
            endforeach;
        endif;
    ?>
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo ('app-assets/css/themes/vertical-menu-nav-dark-template/materialize.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo ('app-assets/css/themes/vertical-menu-nav-dark-template/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo ('app-assets/css/pages/dashboard-modern.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo ('app-assets/css/pages/intro.css') ?>">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->

    <?php
        if ( isset($app["template"]["styles"]["custom"]) && is_array($app["template"]["styles"]["custom"]) ):
            foreach ( $app["template"]["styles"]["custom"] as $style ):
                $href = ( isset($style["href"]) ) ? ' href="'.($style["href"]) . '"' : "";
                $media = ( isset($style["media"]) ) ? ' media="' . ($style["media"]) . '"' : "";

                if ( !empty($href) ):
    ?>
        <link rel="stylesheet" type="text/css"<?php echo $href; echo $media; ?>>
    <?php  endif;
            endforeach;
        endif;
    ?>
     <link rel="stylesheet" type="text/css" href="<?php echo ('app-assets/css/custom/custom.css') ?>">
    <!-- END: Custom CSS-->

    <!-- PAGE CSS -->
    <?php
        if ( isset($app["template"]["styles"]["page"]) && is_array($app["template"]["styles"]["page"]) ):
            foreach ( $app["template"]["styles"]["page"] as $style ):
                $href = ( isset($style["href"]) ) ? ' href="'.($style["href"]) . '"' : "";
                $media = ( isset($style["media"]) ) ? ' media="' . ($style["media"]) . '"' : "";

                if ( !empty($href) ):
    ?>
        <link rel="stylesheet" type="text/css"<?php echo $href; echo $media; ?>>
    <?php  endif;
            endforeach;
        endif;
    ?>
  </head>
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns  " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">




@include('template/partials/'.$app['page']['layout'].'/menu')


@include('template/partials/'.$app['page']['layout'].'/sidebar')



<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
    @include('template/partials/'.$app['page']['layout'].'/breadcrumb')


    <div class="content-wrapper-before blue-grey lighten-5"></div>
    <div class="col s12">
        <div class="container">
            @yield('content')
           

         @include('template/partials/'.$app['page']['layout'].'/aside')

        </div>
    </div>
</div>
</div>
<!-- END: Page Main-->
@include('template/partials/'.$app['page']['layout'].'/footer')


    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo ('app-assets/js/vendors.min.js') ?>" type="text/javascript"></script>

    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo ('app-assets/vendors/chartjs/chart.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo ('app-assets/vendors/chartist-js/chartist.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo ('app-assets/vendors/chartist-js/chartist-plugin-tooltip.js') ?>" type="text/javascript"></script>
    <script src="<?php echo ('app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js') ?>" type="text/javascript"></script>
    <?php
            if ( isset($app["template"]["scripts"]["vendor"]) && is_array($app["template"]["scripts"]["vendor"]) ):
                foreach ( $app["template"]["scripts"]["vendor"] as $script ):
                    $src = ( isset($script["src"]) ) ? ' src="' .($script["src"]) . '"' : "";

                    if ( !empty($src) ):
        ?>
            <script type="text/javascript"<?php echo $src; ?>></script>
        <?php  endif;
                endforeach;
            endif;
        ?>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="<?php echo ('app-assets/js/plugins.js') ?>" type="text/javascript"></script>
    <script src="<?php echo ('app-assets/js/custom/custom-script.js') ?>" type="text/javascript"></script>
    <!-- END THEME  JS-->

    <!-- CUSTOM JS-->
    <?php
            if ( isset($app["template"]["scripts"]["custom"]) && is_array($app["template"]["scripts"]["custom"]) ):
                foreach ( $app["template"]["scripts"]["custom"] as $script ):
                    $src = ( isset($script["src"]) ) ? ' src="' .($script["src"]) . '"' : "";

                    if ( !empty($src) ):
        ?>
            <script type="text/javascript"<?php echo $src; ?>></script>
        <?php  endif;
                endforeach;
            endif;
        ?>

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo ('app-assets/js/scripts/dashboard-modern.js') ?>" type="text/javascript"></script>
    <script src="<?php echo ('app-assets/js/scripts/intro.js') ?>" type="text/javascript"></script>
    <?php
            if ( isset($app["template"]["scripts"]["page"]) && is_array($app["template"]["scripts"]["page"]) ):
                foreach ( $app["template"]["scripts"]["page"] as $script ):
                    $src = ( isset($script["src"]) ) ? ' src="' .($script["src"]) . '"' : "";

                    if ( !empty($src) ):
        ?>
            <script type="text/javascript"<?php echo $src; ?>></script>
        <?php  endif;
                endforeach;
            endif;
        ?>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
