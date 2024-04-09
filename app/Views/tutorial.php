<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tutorial</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <!-- Link CSS files -->
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/custom.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>


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
            <div class="right-nav bg-body-tertiary">
                <div class="sidenav bg-body-tertiary">
                    <button class="dropdown-btn text-primary">
                        <span id="tutorialTitle"></span>
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container bg-body-tertiary">
                        <div class="group">
                            <div class="items-side-nav text-primary">
                                <div class="item"><i class="far fa-play-circle"></i></div>
                                <div class="item">Video: Adding Images</div>

                            </div>
                            <div class="items-side-nav">
                                <div class="item"><i class="far fa-check-circle"></i></div>
                                <div class="item text-primary">5:00</div>
                            </div>
                        </div>

                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    <div class="dropdown-divider text-primary"></div>
                </div>
                <div class="sidenav bg-body-tertiary">
                    <button class="dropdown-btn text-primary active">Adding Images, videos and Tables
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container bg-body-tertiary">
                        <div class="group">
                            <div class="items-side-nav text-primary">
                                <div class="item"><i class="far fa-play-circle"></i></div>
                                <div class="item">Video: Adding Images</div>

                            </div>
                            <div class="items-side-nav">
                                <div class="item"><i class="far fa-check-circle"></i></div>
                                <div class="item text-primary">5:00</div>
                            </div>
                        </div>
                        <div class="group pt-3">
                            <div class="items-side-nav text-primary">
                                <div class="item"><i class="far fa-file-pdf"></i></div>
                                <div class="item">PPT: Adding Images</div>

                            </div>
                            <div class="items-side-nav">
                                <div class="item"><i class="far fa-check-circle"></i></div>
                                <div class="item text-primary">2:00</div>
                            </div>
                        </div>
                        <div class="group pt-3">
                            <div class="items-side-nav text-primary">
                                <div class="item"><i class="far fa-clipboard"></i></div>
                                <div class="item">Notes: Adding Images</div>

                            </div>
                            <div class="items-side-nav">
                                <div class="item"><i class="far fa-check-circle"></i></div>
                                <div class="item text-primary">1:30</div>
                            </div>
                        </div>
                        <div class="group pt-3 pb-3">
                            <div class="items-side-nav text-primary">
                                <div class="item"><i class="far fa-question-circle"></i></div>
                                <div class="item">Quiz: Adding Images</div>

                            </div>
                            <div class="items-side-nav">
                                <div class="item"><i class="far fa-check-circle"></i></div>
                                <div class="item text-primary">1:00</div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider text-primary"></div>
                </div>
                <div class="sidenav bg-body-tertiary">
                    <button class="dropdown-btn text-primary">List
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container bg-body-tertiary">
                        <div class="group">
                            <div class="items-side-nav text-primary">
                                <div class="item"><i class="far fa-play-circle"></i></div>
                                <div class="item">Video: Adding Images</div>

                            </div>
                            <div class="items-side-nav">
                                <div class="item"><i class="far fa-check-circle"></i></div>
                                <div class="item text-primary">5:00</div>
                            </div>
                        </div>

                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    <div class="dropdown-divider text-primary"></div>
                </div>
                <div class="sidenav bg-body-tertiary">
                    <button class="dropdown-btn text-primary">Hyperlinks
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container bg-body-tertiary">
                        <div class="group">
                            <div class="items-side-nav text-primary">
                                <div class="item"><i class="far fa-play-circle"></i></div>
                                <div class="item">Video: Adding Images</div>

                            </div>
                            <div class="items-side-nav">
                                <div class="item"><i class="far fa-check-circle"></i></div>
                                <div class="item text-primary">5:00</div>
                            </div>
                        </div>

                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    <div class="dropdown-divider text-primary"></div>
                </div>
                <div class="sidenav bg-body-tertiary">
                    <button class="dropdown-btn text-primary">Iframes
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container bg-body-tertiary">
                        <div class="group">
                            <div class="items-side-nav text-primary">
                                <div class="item"><i class="far fa-play-circle"></i></div>
                                <div class="item">Video: Adding Images</div>

                            </div>
                            <div class="items-side-nav">
                                <div class="item"><i class="far fa-check-circle"></i></div>
                                <div class="item text-primary">5:00</div>
                            </div>
                        </div>

                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    <div class="dropdown-divider text-primary"></div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="down-nav mt-5 pt-5 m-3">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <div id="tutorialTitle"></div>
                    <a class="navbar-brand with-line text-primary" href="#">PPT: Introduction to HTML</a>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav me-auto ">
                            <li class="nav-item ">
                                <a class="nav-link active text-primary with-arrow" aria-current="page" href="#">
                                    <strong>Practice</strong>
                                    12</a>
                            </li>

                        </ul>
                    </div>
                    <div class="d-flex">
                        <a class="navbar-brand text-primary" href="#">
                            English
                        </a>

                    </div>
                </div>
            </nav>
        </div>

    </section>
    <section>
        <div class="row m-3">
            <div class="sidebar m-3">
                <a href="#home">HTML Images</a>
                <a class="active" href="#news">Images</a>
                <a href="#contact">Image Map</a>
                <a href="#about">Background Images</a>
                <a href="#about">The Picture Element</a>
            </div>

            <div class="content m-3">
                <h2><span id="tutorialTitle2"></span></h2>
                <div class="next-prev">
                    <a href="#" class="prev-button">&lt; Previous</a>
                    <div class="spacer"></div>
                    <a href="#" class="next-button">Next &gt;</a>
                </div>
                <hr>
                <p><span id="tutorialDescription"></span></p>
                <hr>

                <div class="imgs row pt-5">
                    <div style="background-image: url('<?php echo base_url('images/pic_trulli.jpg'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;"
                        class="igs col m4"></div>
                    <div style="background-image: url('<?php echo base_url('images/img_girl.jpg'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;"
                        class="igs col m4"></div>
                    <div style="background-image: url('<?php echo base_url('images/img_chania.jpg'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;"
                        class="igs col m4"></div>
                </div>

                <div class="w3-example">
                    <h3>Example</h3>
                    <div class="w3-code ">
                        <span class="tagnamecolor" style="color:brown"><span class="tagcolor"
                                style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red">
                                src<span class="attributevaluecolor" style="color:mediumblue">="pic_trulli.jpg"</span>
                                alt<span class="attributevaluecolor" style="color:mediumblue">="Italian
                                    Trulli"</span></span><span class="tagcolor"
                                style="color:mediumblue">&gt;</span></span><br>
                    </div>
                    <a class="w3-btn w3-margin-bottom" href="#" target="_blank">Try it Yourself »</a>
                </div>


                <div class="w3-example">
                    <h3>Example</h3>
                    <div class="w3-code ">
                        <span class="tagnamecolor" style="color:brown"><span class="tagcolor"
                                style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red">
                                src<span class="attributevaluecolor" style="color:mediumblue">="img_girl.jpg"</span>
                                alt<span class="attributevaluecolor" style="color:mediumblue">="girl in a
                                    jacket"</span></span><span class="tagcolor"
                                style="color:mediumblue">&gt;</span></span><br>
                    </div>
                    <a class="w3-btn w3-margin-bottom" href="#" target="_blank">Try it Yourself »</a>
                </div>

                <div class="w3-example">
                    <h3>Example</h3>
                    <div class="w3-code ">
                        <span class="tagnamecolor" style="color:brown"><span class="tagcolor"
                                style="color:mediumblue">&lt;</span>img<span class="attributecolor" style="color:red">
                                src<span class="attributevaluecolor" style="color:mediumblue">="img_chania.jpg"</span>
                                alt<span class="attributevaluecolor" style="color:mediumblue">="Flowers in
                                    chania"</span></span><span class="tagcolor"
                                style="color:mediumblue">&gt;</span></span><br>
                    </div>
                    <a class="w3-btn w3-margin-bottom" href="#" target="_blank">Try it Yourself »</a>
                </div>

            </div>
        </div>

    </section>


    <script src="<?= base_url('js/script.js') ?>"></script>
    <script src="<?= base_url('js/custom.js') ?>"></script>
    <?php
    // Output the base URL as a JavaScript variable
    echo '<script>var baseUrl = "' . site_url('home/getTutorialData') . '";</script>';
    ?>
    <script src="<?= base_url('js/tutorial.js') ?>"></script>
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>


</body>

</html>