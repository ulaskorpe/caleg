<style>
    [data-loader="circle-side"] {
        border: 2px solid {{$front_settings->main_color}} !important;
    }
    a.button_intro_2,
    .button_intro_2 {
        background: {{$front_settings->main_color}} !important;
    }
    a.button_intro_2:hover,
    .button_intro_2:hover {
        color: {{$front_settings->main_color}} !important;
    }
    a.btn_full,
    .btn_full {
        background: {{$front_settings->main_color}} !important;
    }
    a.btn_1,
    .btn_1 {
        background: {{$front_settings->main_color}};
    }
    a.btn_1_outline,
    .btn_1_outline {
        color: {{$front_settings->main_color}};
        border: 2px solid {{$front_settings->main_color}};
    }
    a {
        color: {{$front_settings->main_color}};
    }
    ul#tools_top li a.search-overlay-menu-btn:hover {
        color: {{$front_settings->main_color}};
    }
    /*First level styles */			
    .main-menu > ul > li:hover > a {background-color:{{$front_settings->main_color}};}
    @media only screen and (min-width: 992px) {

        /* Submenu style*/
        .main-menu ul ul li:hover > a {background-color:#f9f9f9;color:{{$front_settings->main_color}};}
        /* Megamenu */
        .main-menu ul li.megamenu .menu-wrapper {border-top: 2px solid {{$front_settings->main_color}};}
    }
    @media only screen and (max-width: 991px) {
        #header_menu{background:{{$front_settings->main_color}} url(../img/pattern_3.png) repeat;}
        .main-menu ul li a:hover,
        a.show-submenu:hover,
        a.show-submenu:focus,
        a.show-submenu-mega:hover,
        a.show-submenu-mega:focus{color:{{$front_settings->main_color}} !important;}	
    }
    #top_line {
        background: {{$front_settings->main_color}} url('{{asset('assets/img/pattern_3.png')}}') repeat;
    }
    
    #tickets.table tr.total_row {
        color: {{$front_settings->main_color}};
    }
    
    #tickets.table td input#total {
        color: {{$front_settings->main_color}};
    }
    
    .indent_title_in i {
        color: {{$front_settings->main_color}};
    }
    
    .bloglist ul li a:hover,
    .bloglist h4 a:hover {
        color: {{$front_settings->main_color}};
    }
    .owl-theme .owl-dots .owl-dot.active span,
    .owl-theme .owl-dots .owl-dot:hover span {
        background: {{$front_settings->main_color}};
    }
    .pagination > li > a:hover,
    .pagination > li > span:hover {
        background-color: {{$front_settings->main_color}} !important;
        border-color: {{$front_settings->main_color}} !important;
        color: #ffffff !important;
    }
    .price_grid {
        background-color: {{$front_settings->main_color}};
    }
    .banner {
        background: {{$front_settings->main_color}} url('{{asset('assets/img/pattern_3.png')}}') repeat;
    }
    .panel-title a .indicator {
        color: {{$front_settings->main_color}};
    }
    .box_style_2 h3{
        background-color:{{$front_settings->main_color}};
    }
    h2 span,
    h3 span,
    h4 span,
    h5 span,
    h6 span {
        color:{{$front_settings->second_main_color}};
    }
    .list_tours ul li a .price_list {
        color: {{$front_settings->second_main_color}};
        }
        .list_tours ul li a .price_list:hover {
            color: {{$front_settings->second_main_color}};
        }
        .short_info strong {
            background-color: {{$front_settings->second_main_color}};
        }
</style>