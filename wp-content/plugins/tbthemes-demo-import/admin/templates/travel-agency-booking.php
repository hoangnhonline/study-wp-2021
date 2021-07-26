<?php

$demo_templates_lists = array(

    'travel-agency-booking' => array(
        'title' => __( 'Travel Agency Booking', 'tbthemes-demo-import' ),/*Title*/
        'is_pro' => false,  /*Premium*/
        'type' => 'free',
        'author' => __( 'thebootstrapthemes', 'tbthemes-demo-import' ),    /*Author Name*/
        'keywords' => array( 'Travel Agency' ),  /*Search keyword*/
        'categories' => array( 'travel' ), /*Categories*/
        'template_url' => array(
            'content' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'travel-agency-booking/free/content.json',
            'options' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'travel-agency-booking/free/options.json',
            'widgets' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'travel-agency-booking/free/widgets.json'
        ),
        'screenshot_url' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'travel-agency-booking/free/screenshot.png',
        'demo_url' => 'https://thebootstrapthemes.com/previews/travel-agency-booking/',
        'plugins' => array()
    ),

     'travel-agency-booking-pro' => array(
        'title' => __( 'Travel Agency Booking Pro', 'tbthemes-demo-import' ),/*Title*/
        'is_pro' => true,  /*Premium*/
        'pro_url' => 'https://thebootstrapthemes.com/previews/travel-agency-booking-pro/',
        'type' => 'free',
        'author' => __( 'thebootstrapthemes', 'tbthemes-demo-import' ),    /*Author Name*/
        'keywords' => array( 'Travel Agency' ),  /*Search keyword*/
        'categories' => array( 'travel' ), /*Categories*/
        'template_url' => array(
            'content' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'travel-agency-booking/pro/content.json',
            'options' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'travel-agency-booking/pro/options.json',
            'widgets' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'travel-agency-booking/pro/widgets.json'
        ),
        'screenshot_url' => TBTHEMES_DEMO_IMPORT_TEMPLATE_URL.'travel-agency-booking/pro/screenshot.png',
        'demo_url' => 'https://thebootstrapthemes.com/previews/travel-agency-booking-pro/',
        'plugins' => array()
    ),
    


);