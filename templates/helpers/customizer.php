<?php 
/**
 * 
 * Theme Name: Wordpress Customizer Settings
 * 
 */

 function fn_customizer_settings($wp_customizer){
    // add a customizer setting
    // include a new section
    $wp_customizer->add_section('header', array(
        'title' => __('Header Settings', 'Daily'),
        'priority' => 70
    ));

    // allow us to add capability to the customer setting
    $wp_customizer->add_setting('header_image', array(
        'capability' => 'edit_theme_options'
    ));

    // add controls in the customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'header_image', array(
        'label' => __('Header Image', 'Daily'),
        'section' => 'header'
    )));

    // Days
    $wp_customizer->add_setting('header_text_field1', array(
        'capability' => 'edit_theme_options',
        'default' => '11',
    ));

    //add text control
    $wp_customizer->add_control('header_text_control1', array(
        'label' => __('Header Text', 'Daily'),
        'description' => 'Change Days',
        'section' => 'header',
        'settings' => 'header_text_field1'
    ));

    // Hours
    $wp_customizer->add_setting('header_text_field2', array(
        'capability' => 'edit_theme_options',
        'default' => '21',
    ));

    //add text control
    $wp_customizer->add_control('header_text_control2', array(
        'label' => __('Header Text', 'Daily'),
        'description' => 'Change Hours',
        'section' => 'header',
        'settings' => 'header_text_field2'
    ));

    // Hours
    $wp_customizer->add_setting('header_text_field3', array(
        'capability' => 'edit_theme_options',
        'default' => '24',
    ));

    //add text control
    $wp_customizer->add_control('header_text_control3', array(
        'label' => __('Header Text', 'Daily'),
        'description' => 'Change Minutes',
        'section' => 'header',
        'settings' => 'header_text_field3'
    ));

    // Seconds
    $wp_customizer->add_setting('header_text_field4', array(
        'capability' => 'edit_theme_options',
        'default' => '19',
    ));

    //add text control
    $wp_customizer->add_control('header_text_control4', array(
        'label' => __('Header Text', 'Daily'),
        'description' => 'Change Seconds',
        'section' => 'header',
        'settings' => 'header_text_field4'
    ));

    $wp_customizer->add_section('section01', array(
        'title' => __('Section01', 'Daily'),
        'priority' => 70
    ));

    // Section01 title
    $wp_customizer->add_setting('section1_text_field1', array(
        'capability' => 'edit_theme_options',
        'default' => 'The main objectives of the',
    ));

    //add text control
    $wp_customizer->add_control('section_text_control1', array(
        'label' => __('Header Text', 'Daily'),
        'description' => 'Change Section1 Title',
        'section' => 'section01',
        'settings' => 'section1_text_field1'
    ));

    // Section01 title
    $wp_customizer->add_setting('section1_text_field2', array(
        'capability' => 'edit_theme_options',
        'default' => '4th Eastern Partnership Youth Forum',
    ));

    //add text control
    $wp_customizer->add_control('section_text_control2', array(
        'label' => __('Header Text', 'Daily'),
        'description' => 'Change Section2 Title',
        'section' => 'section01',
        'settings' => 'section1_text_field2'
    ));

    // Section 01 Card 01 Image
    $wp_customizer->add_setting('section1_card_image1', array(
        'capability' => 'edit_theme_options'
    ));

    // add controls in the customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section1_card_image1', array(
        'label' => __('Card Image 01', 'Daily'),
        'section' => 'section01'
    )));

    // Section01 Card Text
    $wp_customizer->add_setting('section1_card_text_field1', array(
        'capability' => 'edit_theme_options',
        'default' => 'To celebrate the 10th anniversary of European
        Union and Eastern Partnership cooperation,
        highlight the impact and achievements;',
    ));

    //add text control
    $wp_customizer->add_control('section_card_text_control1', array(
        'label' => __('Card Text 01', 'Daily'),
        'description' => 'Change Card Description',
        'section' => 'section01',
        'settings' => 'section1_card_text_field1'
    ));

    // Section 01 Card 02 Image
    $wp_customizer->add_setting('section1_card_image2', array(
        'capability' => 'edit_theme_options'
    ));

    // add controls in the customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section1_card_image2', array(
        'label' => __('Card Image 02', 'Daily'),
        'section' => 'section01'
    )));

    // Section01 Card Text
    $wp_customizer->add_setting('section1_card_text_field2', array(
        'capability' => 'edit_theme_options',
        'default' => 'Provide opportunities for young people to
        contribute to the high level discussions about a
        joint vision for European Union and Eastern
        Partnership cooperation, and to convey
        recommendations to the Eastern Partnership
        Summit in 2020;',
    ));

    //add text control
    $wp_customizer->add_control('section_card_text_control2', array(
        'label' => __('Card Text 02', 'Daily'),
        'description' => 'Change Card Description',
        'section' => 'section01',
        'settings' => 'section1_card_text_field2'
    ));
    

    // Section 01 Card 03 Image
    $wp_customizer->add_setting('section1_card_image3', array(
        'capability' => 'edit_theme_options'
    ));

    // add controls in the customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section1_card_image3', array(
        'label' => __('Card Image 03', 'Daily'),
        'section' => 'section01'
    )));

    // Section01 Card Text
    $wp_customizer->add_setting('section1_card_text_field3', array(
        'capability' => 'edit_theme_options',
        'default' => 'Foster discussions and unity between delegates
        of European Union and Eastern Partnership
        regions on the changing landscape of youth
        demands and youth policy;',
    ));

    //add text control
    $wp_customizer->add_control('section_card_text_control3', array(
        'label' => __('Card Text 03', 'Daily'),
        'description' => 'Change Card Description',
        'section' => 'section01',
        'settings' => 'section1_card_text_field3'
    ));

    // Section 01 Card 04 Image
    $wp_customizer->add_setting('section1_card_image4', array(
        'capability' => 'edit_theme_options'
    ));

    // add controls in the customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section1_card_image4', array(
        'label' => __('Card Image 04', 'Daily'),
        'section' => 'section01'
    )));

    // Section01 Card Text
    $wp_customizer->add_setting('section1_card_text_field4', array(
        'capability' => 'edit_theme_options',
        'default' => 'Encourage further cooperation, partnerships and
        good practice exchange among young people,
        youth workers, organizations and institutions
        dealing with youth policy in European Union and
        Eastern Partnership countries;',
    ));

    //add text control
    $wp_customizer->add_control('section_card_text_control4', array(
        'label' => __('Card Text 04', 'Daily'),
        'description' => 'Change Card Description',
        'section' => 'section01',
        'settings' => 'section1_card_text_field4'
    ));

    // Section 01 Card 05 Image
    $wp_customizer->add_setting('section1_card_image5', array(
        'capability' => 'edit_theme_options'
    ));

    // add controls in the customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section1_card_image5', array(
        'label' => __('Card Image 05', 'Daily'),
        'section' => 'section01'
    )));

    // Section01 Card Text
    $wp_customizer->add_setting('section1_card_text_field5', array(
        'capability' => 'edit_theme_options',
        'default' => 'Collect the opinions of young people on Critical
        thinking, media literacy and active participation
        and inform the discussions of Eastern Partnership
        High level Summit in 2020.',
    ));

    //add text control
    $wp_customizer->add_control('section_card_text_control5', array(
        'label' => __('Card Text 05', 'Daily'),
        'description' => 'Change Card Description',
        'section' => 'section01',
        'settings' => 'section1_card_text_field5'
    ));

    // Section 02
    $wp_customizer->add_section('section02', array(
        'title' => __('Section02', 'Daily'),
        'priority' => 70
    ));

    // Section02 Card Title
    $wp_customizer->add_setting('section2_card_title1', array(
        'capability' => 'edit_theme_options',
        'default' => '250',
    ));

    //add title control
    $wp_customizer->add_control('section_card_title_control1', array(
        'label' => __('Card Title 01', 'Daily'),
        'description' => 'Change Card Title',
        'section' => 'section02',
        'settings' => 'section2_card_title1'
    ));

    // Section02 Card Sub-Title
    $wp_customizer->add_setting('section2_card_subtitle1', array(
        'capability' => 'edit_theme_options',
        'default' => 'PARTICIPANTS',
    ));

    //add title control
    $wp_customizer->add_control('section_card_subtitle_control1', array(
        'label' => __('Card Sub Title 01', 'Daily'),
        'description' => 'Change Card Sub Title',
        'section' => 'section02',
        'settings' => 'section2_card_subtitle1'
    ));

    // Section02 Card Body
    $wp_customizer->add_setting('section2_card_body1', array(
        'capability' => 'edit_theme_options',
        'default' => 'including active young people, youth workers and youth policy makers from both Eastern Partnership',
    ));

    //add title control
    $wp_customizer->add_control('section_card_body1', array(
        'label' => __('Card Body 01', 'Daily'),
        'description' => 'Change Card Body',
        'section' => 'section02',
        'settings' => 'section2_card_body1'
    ));

    // Section02 Card Title
    $wp_customizer->add_setting('section2_card_title2', array(
        'capability' => 'edit_theme_options',
        'default' => '34',
    ));

    //add title control
    $wp_customizer->add_control('section_card_title_control2', array(
        'label' => __('Card Title 02', 'Daily'),
        'description' => 'Change Card Title',
        'section' => 'section02',
        'settings' => 'section2_card_title2'
    ));

    // Section02 Card Sub-Title
    $wp_customizer->add_setting('section2_card_subtitle2', array(
        'capability' => 'edit_theme_options',
        'default' => 'PARTICIPANTS',
    ));

    //add title control
    $wp_customizer->add_control('section_card_subtitle_control2', array(
        'label' => __('Card Sub Title 02', 'Daily'),
        'description' => 'Change Card Sub Title',
        'section' => 'section02',
        'settings' => 'section2_card_subtitle2'
    ));

    // Section02 Card Body
    $wp_customizer->add_setting('section2_card_body2', array(
        'capability' => 'edit_theme_options',
        'default' => 'including active young people, youth workers and youth policy makers from both Eastern Partnership',
    ));

    //add title control
    $wp_customizer->add_control('section_card_body2', array(
        'label' => __('Card Body 02', 'Daily'),
        'description' => 'Change Card Body',
        'section' => 'section02',
        'settings' => 'section2_card_body2'
    ));

    // Section02 Card Title
    $wp_customizer->add_setting('section2_card_title3', array(
        'capability' => 'edit_theme_options',
        'default' => '3',
    ));

    //add title control
    $wp_customizer->add_control('section_card_title_control3', array(
        'label' => __('Card Title 03', 'Daily'),
        'description' => 'Change Card Title',
        'section' => 'section02',
        'settings' => 'section2_card_title3'
    ));

    // Section02 Card Sub-Title
    $wp_customizer->add_setting('section2_card_subtitle3', array(
        'capability' => 'edit_theme_options',
        'default' => 'PARTICIPANTS',
    ));

    //add title control
    $wp_customizer->add_control('section_card_subtitle_control3', array(
        'label' => __('Card Sub Title 03', 'Daily'),
        'description' => 'Change Card Sub Title',
        'section' => 'section02',
        'settings' => 'section2_card_subtitle3'
    ));

    // Section02 Card Body
    $wp_customizer->add_setting('section2_card_body3', array(
        'capability' => 'edit_theme_options',
        'default' => 'including active young people, youth workers and youth policy makers from both Eastern Partnership',
    ));

    //add title control
    $wp_customizer->add_control('section_card_body3', array(
        'label' => __('Card Body 03', 'Daily'),
        'description' => 'Change Card Body',
        'section' => 'section02',
        'settings' => 'section2_card_body3'
    ));

    // Section 03
    $wp_customizer->add_section('section02_banner_image', array(
        'title' => __('Section02 Banner Image', 'Daily'),
        'priority' => 70
    ));

    // allow us to add capability to the customer setting
    $wp_customizer->add_setting('section02_banner_image', array(
        'capability' => 'edit_theme_options'
    ));

    // add controls in the customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section02_banner_image', array(
        'label' => __('Header Image', 'Daily'),
        'section' => 'section02_banner_image'
    )));

    // Section 03
    $wp_customizer->add_section('section03', array(
        'title' => __('Section03', 'Daily'),
        'priority' => 70
    ));

    // add image
    $wp_customizer->add_setting('section3_image', array(
        'capability' => 'edit_theme_options'
    ));

    // add controls in the image
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section3_image', array(
        'label' => __('Section03 Image', 'Daily'),
        'section' => 'section03'
    )));

    // Section03 Title
    $wp_customizer->add_setting('section3_title', array(
        'capability' => 'edit_theme_options',
        'default' => 'About Forum',
    ));

    //add title control
    $wp_customizer->add_control('section3_title', array(
        'label' => __('Section03 Title', 'Daily'),
        'description' => 'Change Title',
        'section' => 'section03',
        'settings' => 'section3_title'
    ));

    // Section03 heading
    $wp_customizer->add_setting('section3_heading', array(
        'capability' => 'edit_theme_options',
        'default' => 'We all will meet in Vilnius on
        17-20 June 2019!',
    ));

    //add heading control
    $wp_customizer->add_control('section3_heading', array(
        'label' => __('Section03 Heading', 'Daily'),
        'description' => 'Change Heading',
        'section' => 'section03',
        'settings' => 'section3_heading'
    ));

    // Section03 body
    $wp_customizer->add_setting('section3_body', array(
        'capability' => 'edit_theme_options',
        'default' => 'The official name of the country is the Republic of Lithuania, Lithuania is situated on the eastern shore of the Baltic Sea and borders Latvia on the north, Belarus on the east and south, and Poland and the Kaliningrad region of Russia on the southwest. The official language is Lithuanian. Vilnius is the capital of Lithuania and its largest city. It is known for its baroque architecture, seen especially in its medieval old town.',
    ));

    //add heading control
    $wp_customizer->add_control('section3_body', array(
        'label' => __('Section03 Body', 'Daily'),
        'description' => 'Change Body',
        'section' => 'section03',
        'settings' => 'section3_body'
    ));

    // Section03 address
    $wp_customizer->add_setting('section3_address', array(
        'capability' => 'edit_theme_options',
        'default' => 'Ežeraičių km., Ežeraičių g. 2, Vilnius, Lietuva LT-14200',
    ));

    //add address control
    $wp_customizer->add_control('section3_address', array(
        'label' => __('Section03 Address', 'Daily'),
        'description' => 'Change Address',
        'section' => 'section03',
        'settings' => 'section3_address'
    ));

    // Section 04
    $wp_customizer->add_section('section04', array(
        'title' => __('Section04', 'Daily'),
        'priority' => 70
    ));

    // Section04 Title
    $wp_customizer->add_setting('section4_title', array(
        'capability' => 'edit_theme_options',
        'default' => 'About Lithuania',
    ));

    //add title control
    $wp_customizer->add_control('section4_title', array(
        'label' => __('Section04 Title', 'Daily'),
        'description' => 'Change Title',
        'section' => 'section04',
        'settings' => 'section4_title'
    ));

    // Section04 heading
    $wp_customizer->add_setting('section4_heading', array(
        'capability' => 'edit_theme_options',
        'default' => 'Lithuania is a country
        in Northern Europe',
    ));

    //add heading control
    $wp_customizer->add_control('section4_heading', array(
        'label' => __('Section04 Heading', 'Daily'),
        'description' => 'Change Heading',
        'section' => 'section04',
        'settings' => 'section4_heading'
    ));

    // Section04 body
    $wp_customizer->add_setting('section4_body', array(
        'capability' => 'edit_theme_options',
        'default' => 'The event will gather youth and youth work representatives, around 250 participants: each EaP country with 10 delegates from youth, organizations and institutions working with youth, EaP Youth ambassadors network representatives, 34 "Erasmus+" programme countries with 2 delegates per country, team of facilitators and experts, other European Union, Council of Europe, national agency and international youth organizations representatives.',
    ));

    //add heading control
    $wp_customizer->add_control('section4_body', array(
        'label' => __('Section04 Body', 'Daily'),
        'description' => 'Change Body',
        'section' => 'section04',
        'settings' => 'section4_body'
    ));

    // Section04 link
    $wp_customizer->add_setting('section4_link', array(
        'capability' => 'edit_theme_options',
        'default' => 'https://google.com/',
    ));

    //add heading control
    $wp_customizer->add_control('section4_link', array(
        'label' => __('Section04 Link', 'Daily'),
        'description' => 'Change Link',
        'section' => 'section04',
        'settings' => 'section4_link'
    ));

    // Section 05
    $wp_customizer->add_section('section05', array(
        'title' => __('Section05', 'Daily'),
        'priority' => 70
    ));

    // Section05 Title
    $wp_customizer->add_setting('section5_title', array(
        'capability' => 'edit_theme_options',
        'default' => 'Moderators and Facilotators',
    ));

    //add title control
    $wp_customizer->add_control('section5_title', array(
        'label' => __('Section05 Title', 'Daily'),
        'description' => 'Change Title',
        'section' => 'section05',
        'settings' => 'section5_title'
    ));

    // Section05 Image1
    $wp_customizer->add_setting('section5_profile_image1', array(
        'capability' => 'edit_theme_options'
    ));

    // Section05 Image customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section5_profile_image1', array(
        'label' => __('Section05 Profile Image 1', 'Daily'),
        'section' => 'section05'
    )));

    // Section05 Name1
    $wp_customizer->add_setting('section5_name1', array(
        'capability' => 'edit_theme_options',
        'default' => 'Marcus Vrecer',
    ));

    //add Name1 control
    $wp_customizer->add_control('section5_name1', array(
        'label' => __('Section05 Name 1', 'Daily'),
        'description' => 'Change Name 1',
        'section' => 'section05',
        'settings' => 'section5_name1'
    ));

    // Section05 Address1
    $wp_customizer->add_setting('section5_address1', array(
        'capability' => 'edit_theme_options',
        'default' => 'Main moderator, Austria',
    ));

    //add Address1 control
    $wp_customizer->add_control('section5_address1', array(
        'label' => __('Section05 Address 1', 'Daily'),
        'description' => 'Change Address 1',
        'section' => 'section05',
        'settings' => 'section5_address1'
    ));

    // Section05 Image2
    $wp_customizer->add_setting('section5_profile_image2', array(
        'capability' => 'edit_theme_options'
    ));

    // Section05 Image2 customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section5_profile_image2', array(
        'label' => __('Section05 Profile Image 2', 'Daily'),
        'section' => 'section05'
    )));

    // Section05 Name2
    $wp_customizer->add_setting('section5_name2', array(
        'capability' => 'edit_theme_options',
        'default' => 'Marisha Korzh',
    ));

    //add Name2 control
    $wp_customizer->add_control('section5_name2', array(
        'label' => __('Section05 Name 2', 'Daily'),
        'description' => 'Change Name 2',
        'section' => 'section05',
        'settings' => 'section5_name2'
    ));

    // Section05 Address2
    $wp_customizer->add_setting('section5_address2', array(
        'capability' => 'edit_theme_options',
        'default' => 'Main moderator, Belarus',
    ));

    //add Address2 control
    $wp_customizer->add_control('section5_address2', array(
        'label' => __('Section05 Address 2', 'Daily'),
        'description' => 'Change Address 2',
        'section' => 'section05',
        'settings' => 'section5_address2'
    ));

    // Section 06
    $wp_customizer->add_section('section06', array(
        'title' => __('Section06', 'Daily'),
        'priority' => 70
    ));

    // Section06 Title
    $wp_customizer->add_setting('section6_title', array(
        'capability' => 'edit_theme_options',
        'default' => 'Organisers',
    ));

    //add title control
    $wp_customizer->add_control('section6_title', array(
        'label' => __('Section06 Title', 'Daily'),
        'description' => 'Change Title',
        'section' => 'section06',
        'settings' => 'section6_title'
    ));

    // Section 6 Image 1
    $wp_customizer->add_setting('section6_logo1', array(
        'capability' => 'edit_theme_options'
    ));

    // Section 6 Image 1 customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section6_logo1', array(
        'label' => __('Logo 1', 'Daily'),
        'section' => 'section06'
    )));

    // Section 6 Image 2
    $wp_customizer->add_setting('section6_logo2', array(
        'capability' => 'edit_theme_options'
    ));

    // Section 6 Image 1 customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section6_logo2', array(
        'label' => __('Logo 2', 'Daily'),
        'section' => 'section06'
    )));

    // Section 6 Image 3
    $wp_customizer->add_setting('section6_logo3', array(
        'capability' => 'edit_theme_options'
    ));

    // Section 6 Image 1 customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section6_logo3', array(
        'label' => __('Logo 3', 'Daily'),
        'section' => 'section06'
    )));

    // Section 07
    $wp_customizer->add_section('section07', array(
        'title' => __('Section07', 'Daily'),
        'priority' => 70
    ));

    // Section07 Title
    $wp_customizer->add_setting('section7_title', array(
        'capability' => 'edit_theme_options',
        'default' => 'Partners',
    ));

    //add title control
    $wp_customizer->add_control('section7_title', array(
        'label' => __('Section07 Title', 'Daily'),
        'description' => 'Change Title',
        'section' => 'section07',
        'settings' => 'section7_title'
    ));

    // Section 7 Image 1
    $wp_customizer->add_setting('section7_logo1', array(
        'capability' => 'edit_theme_options'
    ));

    // Section 7 Image 1 customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section7_logo1', array(
        'label' => __('Logo 1', 'Daily'),
        'section' => 'section07'
    )));

    // Section 7 Image 2
    $wp_customizer->add_setting('section7_logo2', array(
        'capability' => 'edit_theme_options'
    ));

    // Section 7 Image 2 customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section7_logo2', array(
        'label' => __('Logo 2', 'Daily'),
        'section' => 'section07'
    )));

    // Section 7 Image 3
    $wp_customizer->add_setting('section7_logo3', array(
        'capability' => 'edit_theme_options'
    ));

    // Section 7 Image 3 customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section7_logo3', array(
        'label' => __('Logo 3', 'Daily'),
        'section' => 'section07'
    )));

    // Section 7 Image 4
    $wp_customizer->add_setting('section7_logo4', array(
        'capability' => 'edit_theme_options'
    ));

    // Section 7 Image 4 customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section7_logo4', array(
        'label' => __('Logo 4', 'Daily'),
        'section' => 'section07'
    )));

    // Section 7 Image 5
    $wp_customizer->add_setting('section7_logo5', array(
        'capability' => 'edit_theme_options'
    ));

    // Section 7 Image 5 customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section7_logo5', array(
        'label' => __('Logo 5', 'Daily'),
        'section' => 'section07'
    )));

    // Section 7 Image 6
    $wp_customizer->add_setting('section7_logo6', array(
        'capability' => 'edit_theme_options'
    ));

    // Section 7 Image 6 customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section7_logo6', array(
        'label' => __('Logo 6', 'Daily'),
        'section' => 'section07'
    )));

    // Section 7 Image 7
    $wp_customizer->add_setting('section7_logo7', array(
        'capability' => 'edit_theme_options'
    ));

    // Section 7 Image 7 customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section7_logo7', array(
        'label' => __('Logo 7', 'Daily'),
        'section' => 'section07'
    )));

    // Section 7 Image 8
    $wp_customizer->add_setting('section7_logo8', array(
        'capability' => 'edit_theme_options'
    ));

    // Section 7 Image 8 customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section7_logo8', array(
        'label' => __('Logo 8', 'Daily'),
        'section' => 'section07'
    )));

    // Section 7 Image 9
    $wp_customizer->add_setting('section7_logo9', array(
        'capability' => 'edit_theme_options'
    ));

    // Section 7 Image 9 customizer 
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'section7_logo9', array(
        'label' => __('Logo 9', 'Daily'),
        'section' => 'section07'
    )));

    // Footer
    $wp_customizer->add_section('footer', array(
        'title' => __('Footer', 'Daily'),
        'priority' => 70
    ));

    // Footer Copyright
    $wp_customizer->add_setting('footer_copyright', array(
        'capability' => 'edit_theme_options',
        'default' => '© Lorem ipsum 2010 - 2019',
    ));

    // Footer Copyright control
    $wp_customizer->add_control('footer_copyright', array(
        'label' => __('Footer Copyright', 'Daily'),
        'description' => 'Change Copyright',
        'section' => 'footer',
        'settings' => 'footer_copyright'
    ));

    // Footer facebook link
    $wp_customizer->add_setting('footer_fb_link', array(
        'capability' => 'edit_theme_options',
        'default' => 'https://www.facebook.com/',
    ));

    // Footer facebook link control
    $wp_customizer->add_control('footer_fb_link', array(
        'label' => __('Footer Facebook Link', 'Daily'),
        'description' => 'Change Link',
        'section' => 'footer',
        'settings' => 'footer_fb_link'
    ));

    // Footer Instagram link
    $wp_customizer->add_setting('footer_ig_link', array(
        'capability' => 'edit_theme_options',
        'default' => 'https://instagram.com/',
    ));

    // Footer Instagram link control
    $wp_customizer->add_control('footer_ig_link', array(
        'label' => __('Footer Instagram Link', 'Daily'),
        'description' => 'Change Link',
        'section' => 'footer',
        'settings' => 'footer_ig_link'
    ));

    
 }

 add_action('customize_register', 'fn_customizer_settings');

?>