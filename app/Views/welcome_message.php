<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <!-- Link CSS files -->
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/custom.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>

    <!-- HEADER: MENU + HEROE SECTION -->
    <header>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand with-line text-primary" href="#">Logo</a>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav me-auto ">
                        <li class="nav-item ">
                            <a class="nav-link active text-primary with-arrow" aria-current="page" href="#">Class 12</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link with-arrow text-primary" href="#">Web development</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="#">HTML</a>
                        </li>

                    </ul>
                </div>
                <div class="d-flex">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url('images/img_avatar1.png'); ?>" style="width:40px;"
                            class="rounded-pill">
                    </a>
                    <!-- Add any additional elements here, such as dropdown menu or notifications -->
                </div>
            </div>
        </nav>




    </header>

    <!-- CONTENT -->

    <section>
        <div class="container pt-5">
            <div class="video-">
                <div id="player"></div>
            </div>
            <div class="right-nav">
                <div class="sidenav">
                    <button class="dropdown-btn">Dropdown
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="further">



        <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

        <footer>


            <div class="copyrights">

                <p>&copy; <?= date('Y') ?>.</p>

            </div>

        </footer>

        <!-- SCRIPTS -->



        <!-- -->
        <script src="<?= base_url('js/script.js') ?>"></script>
        <script src="<?= base_url('js/custom.js') ?>"></script>
</body>

</html>