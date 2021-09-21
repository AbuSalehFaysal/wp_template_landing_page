<?php
require 'header.php';
?>
<section class="first-section">
    <div id="firstDiv" class="d-none d-sm-block">

        <?php if (get_theme_mod('header_image')) : ?>
            <img class="img-fluid" src="<?php echo esc_url(get_theme_mod('header_image')) ?>" alt="">
        <?php endif; ?>

    </div>
    <div id="secondDiv" class="d-block d-sm-none">
        <img class="img-fluid" src="assets/img/OG2.png" alt="">
    </div>
    <div id="infoi">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 bg-white shadow bg-body rounded">
                    <div class="container">
                        <div class="row">
                            <div class="col-4 offset-4">
                                <div class="text-center">
                                    <div class="rectangle"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p class="text-center text-uppercase mt-4 text-spacing lightwhite">remaining time</p>
                        </div>
                        <div class="row">
                            <div class="col-3">

                                <?php if (get_theme_mod('header_text_field1')) : ?>
                                    <h1 class="display-1 text-center text-darkblue"><?php echo get_theme_mod('header_text_field1') ?></h1>
                                <?php endif; ?>
                                <p class="text-center fw-bold text-skyblue">Days</p>
                            </div>
                            <div class="col-3">

                                <?php if (get_theme_mod('header_text_field2')) : ?>
                                    <h1 class="display-1 text-center text-darkblue"><?php echo get_theme_mod('header_text_field2') ?></h1>
                                <?php endif; ?>
                                <p class="text-center fw-bold text-skyblue">Hours</p>
                            </div>
                            <div class="col-3">

                                <?php if (get_theme_mod('header_text_field3')) : ?>
                                    <h1 class="display-1 text-center text-darkblue"><?php echo get_theme_mod('header_text_field3') ?></h1>
                                <?php endif; ?>
                                <p class="text-center fw-bold text-skyblue">Minutes</p>
                            </div>
                            <div class="col-3">
                                <?php if (get_theme_mod('header_text_field4')) : ?>
                                    <h1 class="display-1 text-center text-darkblue"><?php echo get_theme_mod('header_text_field4') ?></h1>
                                <?php endif; ?>
                                <p class="text-center fw-bold text-skyblue">Seconds</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="second-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">

                    <?php if (get_theme_mod('section1_text_field1')) : ?>
                        <h4 class="text-skyblue"><?php echo get_theme_mod('section1_text_field1') ?></h4>
                    <?php endif; ?>

                    <?php if (get_theme_mod('section1_text_field2')) : ?>
                        <h4 class="text-skyblue"><?php echo get_theme_mod('section1_text_field2') ?></h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 p-2">
                <div class="text-center">

                    <?php if (get_theme_mod('section1_card_image1')) : ?>
                        <img height="100" width="100" src="<?php echo esc_url(get_theme_mod('section1_card_image1')) ?>" alt="" class="img-fluid" style="border-radius: 50%;">
                    <?php endif; ?>
                </div>

                <?php if (get_theme_mod('section1_card_text_field1')) : ?>
                    <p class="mt-5 px-5" style="text-align: justify;"><?php echo get_theme_mod('section1_card_text_field1') ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-4 p-2">
                <div class="text-center">

                    <?php if (get_theme_mod('section1_card_image2')) : ?>
                        <img height="100" width="100" src="<?php echo esc_url(get_theme_mod('section1_card_image2')) ?>" alt="" class="img-fluid" style="border-radius: 50%;">
                    <?php endif; ?>
                </div>

                <?php if (get_theme_mod('section1_card_text_field2')) : ?>
                    <p class="mt-5 px-5" style="text-align: justify;"><?php echo get_theme_mod('section1_card_text_field2') ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-4 p-2">
                <div class="text-center">

                    <?php if (get_theme_mod('section1_card_image3')) : ?>
                        <img height="100" width="100" src="<?php echo esc_url(get_theme_mod('section1_card_image3')) ?>" alt="" class="img-fluid" style="border-radius: 50%;">
                    <?php endif; ?>
                </div>

                <?php if (get_theme_mod('section1_card_text_field3')) : ?>
                    <p class="mt-5 px-5" style="text-align: justify;"><?php echo get_theme_mod('section1_card_text_field3') ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4 p-2">
                <div class="text-center">

                    <?php if (get_theme_mod('section1_card_image4')) : ?>
                        <img height="100" width="100" src="<?php echo esc_url(get_theme_mod('section1_card_image4')) ?>" alt="" class="img-fluid" style="border-radius: 50%;">
                    <?php endif; ?>
                </div>

                <?php if (get_theme_mod('section1_card_text_field4')) : ?>
                    <p class="mt-5 px-5" style="text-align: justify;"><?php echo get_theme_mod('section1_card_text_field4') ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-4 p-2">
                <div class="text-center">

                    <?php if (get_theme_mod('section1_card_image5')) : ?>
                        <img height="100" width="100" src="<?php echo esc_url(get_theme_mod('section1_card_image5')) ?>" alt="" class="img-fluid" style="border-radius: 50%;">
                    <?php endif; ?>
                </div>

                <?php if (get_theme_mod('section1_card_text_field5')) : ?>
                    <p class="mt-5 px-5" style="text-align: justify;"><?php echo get_theme_mod('section1_card_text_field5') ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="float-end">
                <div class="arrow-right float-end"></div>
            </div>
        </div>
    </div>
</section>
<hr class="mt-5">
<section class="third-section">
    <div class="container-fluid">
        <div class="row d-none d-md-block">
            <div class="arrow-left"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="ms-5">
                    <div class="arrow-right-small ms-5"></div>
                </div>
            </div>
            <div class="row">
                <div class="float-end d-none d-md-block">
                    <div class="arrow-down float-end"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <div class="float-end">
                        <div class="arrow-right-paste float-end"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">

                        <?php if (get_theme_mod('section2_card_title1')) : ?>
                            <h1 class="display-1 text-darkblue"><?php echo get_theme_mod('section2_card_title1') ?></h1>
                        <?php endif; ?>

                        <?php if (get_theme_mod('section2_card_subtitle1')) : ?>
                            <p class="text-uppercase text-spacing text-darkblue"><?php echo get_theme_mod('section2_card_subtitle1') ?></p>
                        <?php endif; ?>

                        <?php if (get_theme_mod('section2_card_body1')) : ?>
                            <p class="text-lightgrey"><?php echo get_theme_mod('section2_card_body1') ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">

                        <?php if (get_theme_mod('section2_card_title2')) : ?>
                            <h1 class="display-1 text-darkblue"><?php echo get_theme_mod('section2_card_title2') ?></h1>
                        <?php endif; ?>

                        <?php if (get_theme_mod('section2_card_subtitle2')) : ?>
                            <p class="text-uppercase text-spacing text-darkblue"><?php echo get_theme_mod('section2_card_subtitle2') ?></p>
                        <?php endif; ?>

                        <?php if (get_theme_mod('section2_card_body2')) : ?>
                            <p class="text-lightgrey"><?php echo get_theme_mod('section2_card_body2') ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">

                        <?php if (get_theme_mod('section2_card_title3')) : ?>
                            <h1 class="display-1 text-darkblue"><?php echo get_theme_mod('section2_card_title3') ?></h1>
                        <?php endif; ?>

                        <?php if (get_theme_mod('section2_card_subtitle3')) : ?>
                            <p class="text-uppercase text-spacing text-darkblue"><?php echo get_theme_mod('section2_card_subtitle3') ?></p>
                        <?php endif; ?>

                        <?php if (get_theme_mod('section2_card_body3')) : ?>
                            <p class="text-lightgrey"><?php echo get_theme_mod('section2_card_body3') ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="float-end">
                        <div class="arrow-right-small-red float-end"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="fourth-section mt-5">

    <?php if (get_theme_mod('section02_banner_image')) : ?>
        <img width="100%" src="<?php echo get_theme_mod('section02_banner_image') ?>" alt="" class="img-fluid">
    <?php endif; ?>
</section>
<section class="fifth-section mt-5">
    <div class="container-fluid">
        <div class="row d-flex justify-content-evenly">
            <div class="col-md-5 m-1">
                <div style="border-bottom: 5px dotted #ddebe8
                        ; border-right: 5px dotted #ddebe8;" class="p-2">

                    <?php if (get_theme_mod('section3_image')) : ?>
                        <img width="100%" class="img-fluid" src="<?php echo esc_url(get_theme_mod('section3_image')) ?>" alt="" style="border-bottom: 5px dotted #ddebe8; border-right: 5px dotted #ddebe8
                        ">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-5 m-1">

                <?php if (get_theme_mod('section3_title')) : ?>
                    <h4 class="mt-2 text-skyblue"><?php echo get_theme_mod('section3_title') ?></h4>
                <?php endif; ?>

                <?php if (get_theme_mod('section3_heading')) : ?>
                    <h1 class="mt-5 text-darkblue"><?php echo get_theme_mod('section3_heading') ?></h1>
                <?php endif; ?>

                <?php if (get_theme_mod('section3_body')) : ?>
                    <p class="mt-5"><?php echo get_theme_mod('section3_body') ?></p>
                <?php endif; ?>

                <?php if (get_theme_mod('section3_address')) : ?>
                    <p class="mt-4 text-blue text-underline"><?php echo get_theme_mod('section3_address') ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="sixth-section mt-5 bg-grey">
    <div class="container-fluid mb-5">
        <div class="row d-flex justify-content-evenly">
            <div class="col-md-5 m-1">

                <?php if (get_theme_mod('section4_title')) : ?>
                    <h4 class="mt-2 text-skyblue"><?php echo get_theme_mod('section4_title') ?></h4>
                <?php endif; ?>

                <?php if (get_theme_mod('section4_heading')) : ?>
                    <h1 class="mt-5 text-darkblue"><?php echo get_theme_mod('section4_heading') ?></h1>
                <?php endif; ?>

                <?php if (get_theme_mod('section4_body')) : ?>
                    <p class="mt-5"><?php echo get_theme_mod('section4_body') ?></p>
                <?php endif; ?>

                <?php if (get_theme_mod('section4_link')) : ?>
                    <p class="mt-4 text-blue text-underline"><b><a href="<?php echo get_theme_mod('section4_link') ?>">Find out more <i class="fas fa-long-arrow-alt-right"></i></a></b></p>
                <?php endif; ?>
            </div>
            <div class="col-md-5 m-1">
                <div style="border-bottom: 5px dotted #ddebe8
                        ; border-right: 5px dotted #ddebe8;" class="mt-5 p-2">
                    <img width="100%" src="assets/img/scenario.jpg" alt="" class="img-fluid" style="border-bottom: 5px dotted #ddebe8; border-right: 5px dotted #ddebe8
                        ">
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="arrow-right-small-paste d-none d-md-block" style="margin-left: 150px;"></div>
        </div>
        <div class="row">
            <div class="float-end d-none d-md-block">
                <div class="arrow-right-md-yellow float-end me-5"></div>
            </div>
        </div>
        <div class="row">
            <div class="float-end">
                <div class="arrow-down-blue floar-end" style="margin-left: 300px;"></div>
            </div>
        </div>
    </div>
</section>
<section class="seventh-section mb-5">
    <div class="container">
        <div class="row">
            <div class="arrow-left"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="float-end">
                    <div class="arrow-left-small-paste me-5 floar-end d-none d-md-block"></div>
                </div>

                <?php if (get_theme_mod('section5_title')) : ?>
                    <h1 class="text-center text-darkblue"><?php echo get_theme_mod('section5_title') ?></h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="float-end">
                    <div class="arrow-right-md-yellow float-end"></div>
                </div>
            </div>
            <div class="col-md-4 p-5 border mx-2">
                <div class="text-center">

                    <?php if (get_theme_mod('section5_profile_image1')) : ?>
                        <img src="<?php echo get_theme_mod('section5_profile_image1') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>

                <?php if (get_theme_mod('section5_name1')) : ?>
                    <h4 class="text-center mt-3 text-darkgrey"><?php echo get_theme_mod('section5_name1') ?></h4>
                <?php endif; ?>
                <?php if (get_theme_mod('section5_address1')) : ?>
                    <p class="text-center text-lightgrey"><?php echo get_theme_mod('section5_address1') ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-4 p-5 border mx-2">
                <div class="text-center">

                    <?php if (get_theme_mod('section5_profile_image2')) : ?>
                        <img src="<?php echo get_theme_mod('section5_profile_image2') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>

                <?php if (get_theme_mod('section5_name2')) : ?>
                    <h4 class="text-center mt-3 text-darkgrey"><?php echo get_theme_mod('section5_name2') ?></h4>
                <?php endif; ?>
                <?php if (get_theme_mod('section5_address2')) : ?>
                    <p class="text-center text-lightgrey"><?php echo get_theme_mod('section5_address2') ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-1">
                <div class="mt-5">
                    <div class="arrow-right-small-red mt-5"></div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="eighth-section mt-5">
    <div class="container mt-5 p-5">
        <?php if (get_theme_mod('section6_title')) : ?>
            <h4 class="text-center text-darkgrey mt-5"><?php echo get_theme_mod('section6_title') ?></h4>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-4 p-5">
                <div class="text-center">
                    <?php if (get_theme_mod('section6_logo1')) : ?>
                        <img src="<?php echo get_theme_mod('section6_logo1') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4 p-5">
                <div class="text-center">
                    <?php if (get_theme_mod('section6_logo2')) : ?>
                        <img src="<?php echo get_theme_mod('section6_logo2') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4 p-5">
                <div class="text-center">
                    <?php if (get_theme_mod('section6_logo3')) : ?>
                        <img src="<?php echo get_theme_mod('section6_logo3') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ninth-section mt-5">
    <div class="container">
        <div class="row">
            <?php if (get_theme_mod('section7_title')) : ?>
                <h4 class="text-center text-darkgrey mb-5"><?php echo get_theme_mod('section7_title') ?></h4>
            <?php endif; ?>
            <div class="col-6 col-md-2 p-2 offset-md-1">
                <div class="text-center">
                    <?php if (get_theme_mod('section7_logo1')) : ?>
                        <img src="<?php echo get_theme_mod('section7_logo1') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-6 col-md-2 p-2">
                <div class="text-center">
                    <?php if (get_theme_mod('section7_logo2')) : ?>
                        <img src="<?php echo get_theme_mod('section7_logo2') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-6 col-md-2 p-2">
                <div class="text-center">
                    <?php if (get_theme_mod('section7_logo3')) : ?>
                        <img src="<?php echo get_theme_mod('section7_logo3') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-6 col-md-2 p-2">
                <div class="text-center">
                    <?php if (get_theme_mod('section7_logo4')) : ?>
                        <img src="<?php echo get_theme_mod('section7_logo4') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12 col-md-2 p-2">
                <div class="text-center">
                    <?php if (get_theme_mod('section7_logo5')) : ?>
                        <img src="<?php echo get_theme_mod('section7_logo5') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-3 p-3">
                <div class="text-center">
                    <?php if (get_theme_mod('section7_logo6')) : ?>
                        <img src="<?php echo get_theme_mod('section7_logo6') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-6 col-md-3 p-3">
                <div class="text-center">
                    <?php if (get_theme_mod('section7_logo7')) : ?>
                        <img src="<?php echo get_theme_mod('section7_logo7') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-6 col-md-3 p-3">
                <div class="text-center">
                    <?php if (get_theme_mod('section7_logo8')) : ?>
                        <img src="<?php echo get_theme_mod('section7_logo8') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-6 col-md-3 p-3">
                <div class="text-center">
                    <?php if (get_theme_mod('section7_logo9')) : ?>
                        <img src="<?php echo get_theme_mod('section7_logo9') ?>" alt="" class="img-fluid">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section class="tenth-section">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between">
                <div>
                    <?php if (get_theme_mod('footer_copyright')) : ?>
                        <h6><?php echo get_theme_mod('footer_copyright') ?></h6>
                    <?php endif; ?>
                </div>
                <div>
                    <h1 class="d-flex align-items-center">
                        <?php if (get_theme_mod('footer_fb_link')) : ?>
                            <a href="<?php echo get_theme_mod('footer_fb_link') ?>"><i class="fab fa-facebook mx-1 blue"></i></a>
                        <?php endif; ?>
                        <?php if (get_theme_mod('footer_ig_link')) : ?>
                            <a href="<?php echo get_theme_mod('footer_ig_link') ?>"><i class="fab fa-instagram-square mx-1 blue rounded-circle"></i></a>
                        <?php endif; ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require 'footer.php';
?>