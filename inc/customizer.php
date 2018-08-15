<?php
function fc_customize_register($wp_customize) {
    //All Settings

    //Link Color
    $wp_customize->add_setting('fc_links_color', array(
        "default"       =>  "#007BFF",
        "transport"     =>  "refresh"
    ));

    //Blogs Section
    $wp_customize->add_setting('fc_blogs_numb', array(
        "default"       =>  "three",
        "transport"     =>  "refresh"
    ));

    //Blog Button type
    $wp_customize->add_setting('fc_blog_btn_type', array(
        "default"       =>  "normal",
        "transport"     =>  "refresh"
    ));

    $wp_customize->add_setting('fc_blog_btn_layout', array(
        "default"       =>  "primary",
        "transport"     =>  "refresh"
    ));

    //Footer Copyright
    $wp_customize->add_setting('fc_copyright', array(
        "default"       =>  "",
        "transport"     =>  "refresh"
    ));

    $wp_customize->add_panel('fc_main', array(
        "title"         =>  __("Main Settings"),
        "priority"      =>  30,
        "description"   =>  __("All Settings Of This Theme In The Main Section", "firecloud")
    ));

    //All Sections

    //Link Color
    $wp_customize->add_section('fc_color_section', array(
        "title"         =>  __("Colors", "firecloud"),
        "panel"         =>  "fc_main"
    ));

    //Blogs Section
    $wp_customize->add_section('fc_blogs_section', array(
        "title"         =>  __("Blogs Section", "firecloud"),
        "panel"         =>  "fc_main"
    ));

    //Footer Copyright
    $wp_customize->add_section('fc_copyright_section', array(
        "title"         =>  __("Footer Copyright", "firecloud"),
        "panel"         =>  "fc_main"
    ));

    //All Control

    //Link Color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, "link_color", array(
        "label"         =>  __("Link Color", "firecloud"),
        "section"       =>  "fc_color_section",
        "settings"      =>  "fc_links_color",
        "description"   =>  __("Chose Your Link Color")
    )));

    //Blogs Section
    $wp_customize->add_control('blog_section', array(
        "type"          =>  "select",
        "description"   =>  __("Select how many blogs will be in a row", "firecloud"),
        "settings"      =>  "fc_blogs_numb",
        "section"       =>  "fc_blogs_section",
        "choices"       =>  array(
            "two"           =>  "Two",
            "three"         =>  "Three",
            "four"          =>  "Four"
        )
    ));

    //Blog button type
    $wp_customize->add_control('blog_btn_type', array(
        "type"          =>  "select",
        "description"   =>  __("Select Button Type", "firecloud"),
        "settings"      =>  "fc_blog_btn_type",
        "section"       =>  "fc_blogs_section",
        "choices"       =>  array(
            "normal"        =>  "Normal",
            "outline"       =>  "Outline"
        )
    ));

    //Blog button layout
    $wp_customize->add_control('blog_btn_layout', array(
        "type"          =>  "select",
        "description"   =>  __("Select Button Layout", "firecloud"),
        "settings"      =>  "fc_blog_btn_layout",
        "section"       =>  "fc_blogs_section",
        "choices"       =>  array(
            "primary"        =>  "Primary",
            "info"           =>  "Info",
            "warning"        =>  "Warning",
            "success"        =>  "Success",
            "dark"           =>  "Dark",
            "light"          =>  "Light"
        )
    ));

    //Footer Copyright
    $wp_customize->add_control( "footer_copyright", array(
        "type"          =>  "textarea",
        "description"         =>  __("Footer Copyright Info", "firecloud"),
        "section"       =>  "fc_copyright_section",
        "settings"      =>  "fc_copyright"
    ));
}

?>
