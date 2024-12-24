<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <title><?php if (is_front_page() || is_home()) { bloginfo('name'); echo ' - '; bloginfo('description'); } else { wp_title(''); echo ' - '; bloginfo('name'); } ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'page-block buroimproof dropdown-nonactive mobilemenu-nonactive mobilesubmenu-nonactive' ); ?>>
    <header class="fixed top-0 left-0 right-0 z-[9999]">
        <section class="bg-[#162CF5] hidden lg:block lg:h-[36px] xl:h-[40px]">
            <div class="container flex justify-end h-full items-center">
                <nav>
                    <ul class="flex space-x-[40px]">
                        <?php
                        if( have_rows('submenu', 'option') ):
                            while( have_rows('submenu', 'option') ) : the_row(); ?>
                            <?php
                            $link = get_sub_field('submenu_link', 'option');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                            ?>
                             <li>
                                <a href="<?php echo $link_url; ?>" class="lg:text-13 lg:leading-17 xl:text-15 xl:leading-19 text-white underline font-medium hide-dropdown" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                            </li>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="bg-white h-[75px] lg:h-[75px] xl:h-[85px] menu-shadow">
            <div class="container flex justify-between items-center h-full">
                <div class="w-[160px]">
                    <a href="/" class="hide-dropdown">
                        <svg id="Page-1" xmlns="http://www.w3.org/2000/svg" width="150.535" height="21.668" viewBox="0 0 150.535 21.668">
                            <path id="Shape" d="M202.843,7a6.842,6.842,0,1,0,6.842,6.842A6.842,6.842,0,0,0,202.843,7Zm0,10a3.161,3.161,0,1,1,3.039-3.158A3.1,3.1,0,0,1,202.843,17Z" transform="translate(-84.239 -3.009)" fill="#060606"/>
                            <path id="Shape-2" data-name="Shape" d="M229.842,7a6.842,6.842,0,1,0,6.842,6.842A6.842,6.842,0,0,0,229.842,7Zm0,10a3.161,3.161,0,1,1,3.039-3.158A3.1,3.1,0,0,1,229.842,17Z" transform="translate(-95.844 -3.009)" fill="#060606"/>
                            <ellipse id="Oval" cx="2.626" cy="1.97" rx="2.626" ry="1.97" transform="translate(56.468 13.132)" fill="#162eff"/>
                            <path id="Shape-3" data-name="Shape" d="M69,13.837a6.895,6.895,0,0,1,.933-3.487A6.779,6.779,0,0,1,71,8.975a6.59,6.59,0,0,1,1.381-1.058A6.954,6.954,0,0,1,75.858,7a6.795,6.795,0,0,1,4.831,1.975,6.894,6.894,0,0,1,1.459,2.168,6.739,6.739,0,0,1,.537,2.694,6.837,6.837,0,0,1-.245,1.84,6.959,6.959,0,0,1-.688,1.642,6.759,6.759,0,0,1-2.444,2.444,6.807,6.807,0,0,1-3.45.922,6.97,6.97,0,0,1-1.84-.24,6.8,6.8,0,0,1-1.642-.683,6.759,6.759,0,0,1-2.444-2.444,6.927,6.927,0,0,1-.688-1.642A6.834,6.834,0,0,1,69,13.837Zm3.8,0a3.8,3.8,0,0,0,.214,1.287,3.1,3.1,0,0,0,.6,1.037,2.834,2.834,0,0,0,.948.693,2.977,2.977,0,0,0,1.256.255,2.863,2.863,0,0,0,1.225-.255,2.752,2.752,0,0,0,.928-.693,3.059,3.059,0,0,0,.583-1.037,4.125,4.125,0,0,0,0-2.559,3.3,3.3,0,0,0-.583-1.063,2.728,2.728,0,0,0-2.152-.99,2.883,2.883,0,0,0-1.256.266,2.826,2.826,0,0,0-.948.724,3.342,3.342,0,0,0-.6,1.063A3.789,3.789,0,0,0,72.8,13.837Z" transform="translate(-29.656 -3.009)" fill="#060606"/>
                            <path id="Path" d="M12.107,12.69a5.036,5.036,0,0,0-1.189-1.619,3.891,3.891,0,0,0,.693-1.191,4.129,4.129,0,0,0,.245-1.438A4.284,4.284,0,0,0,11.5,6.706,4.483,4.483,0,0,0,9.114,4.345,4.383,4.383,0,0,0,7.383,4H.459a.441.441,0,0,0-.339.129A.486.486,0,0,0,0,4.474V19.4H4.036V7.041H6.273a1.682,1.682,0,0,1,.638.119,1.527,1.527,0,0,1,.5.325,1.489,1.489,0,0,1,.324.474,1.451,1.451,0,0,1,.115.577A1.462,1.462,0,0,1,7.4,9.613a1.419,1.419,0,0,1-.507.309,1.906,1.906,0,0,1-.654.108H5.25V12.8H6.8a1.375,1.375,0,0,1,.643.155,1.759,1.759,0,0,1,.512.4,1.828,1.828,0,0,1,.335.551,1.7,1.7,0,0,1,.12.619,1.75,1.75,0,0,1-.12.639,1.771,1.771,0,0,1-.339.551,1.694,1.694,0,0,1-.512.386,1.418,1.418,0,0,1-.638.144H5.25v3.062H8a4.227,4.227,0,0,0,1.747-.371,4.685,4.685,0,0,0,1.449-1.005,4.854,4.854,0,0,0,.986-1.474,4.419,4.419,0,0,0,.365-1.778A4.647,4.647,0,0,0,12.107,12.69Z" transform="translate(0 -1.719)" fill="#060606" fill-rule="evenodd"/>
                            <path id="Path-2" data-name="Path" d="M131.054,11.466a5.366,5.366,0,0,0-.975-1.8,4.647,4.647,0,0,0-1.559-1.217A4.714,4.714,0,0,0,126.432,8a4.357,4.357,0,0,0-1.349.2A4.607,4.607,0,0,0,124,8.7a4.307,4.307,0,0,0-.81.664,4.359,4.359,0,0,0-.533.675,4.749,4.749,0,0,0-1.621-1.486,4.615,4.615,0,0,0-2.3-.553,3.447,3.447,0,0,0-1.369.238,3.061,3.061,0,0,0-.913.588,3.149,3.149,0,0,0-.585.751q-.22.4-.374.715l-.5-2.1h-3V21.115h3.939V13.647a2.159,2.159,0,0,1,.221-.834,2.343,2.343,0,0,1,.472-.646,2.057,2.057,0,0,1,.636-.417,1.867,1.867,0,0,1,.723-.147,1.842,1.842,0,0,1,.774.158,1.7,1.7,0,0,1,.585.437,1.964,1.964,0,0,1,.369.657,2.514,2.514,0,0,1,.129.814v7.448h3.846V13.667a2.158,2.158,0,0,1,.159-.839,2.01,2.01,0,0,1,.425-.651,1.956,1.956,0,0,1,.616-.422,1.822,1.822,0,0,1,.738-.153,1.913,1.913,0,0,1,.785.158,1.731,1.731,0,0,1,.6.437,2.061,2.061,0,0,1,.384.657,2.335,2.335,0,0,1,.139.814v7.448h3.847V13.667A7.138,7.138,0,0,0,131.054,11.466Z" transform="translate(-48.137 -3.438)" fill="#060606" fill-rule="evenodd"/>
                            <path id="Shape-4" data-name="Shape" d="M158.284,8.163a6.37,6.37,0,0,0-3.862,1.3L153.905,8H151V25.106h3.95V20.012a6.4,6.4,0,1,0,3.334-11.849Zm0,9.349a2.955,2.955,0,1,1,2.843-2.952A2.9,2.9,0,0,1,158.284,17.511Z" transform="translate(-64.899 -3.438)" fill="#060606"/>
                            <path id="Path-3" data-name="Path" d="M187.018,7.024a.367.367,0,0,0-.121-.018,3.08,3.08,0,0,0-.87.056,5.043,5.043,0,0,0-1.614.8c-.206.133-.658.437-1.012.72a7.119,7.119,0,0,0-.784.71c-.014-.035-.8-1.979-.8-1.979H179V20.685h3.965c-.008-1.856-.023-7.615,0-8.325h0v0c0-.056,0-.093.006-.1h0a1.842,1.842,0,0,1,1.94-1.549,2.264,2.264,0,0,1,.42.04c.409.051.842.145,1.215.163a1.992,1.992,0,0,0,.223.014l.044,0,.086,0a.613.613,0,0,0,.16-.025,1.959,1.959,0,0,0-.039-3.87Z" transform="translate(-76.933 -3.009)" fill="#060606" fill-rule="evenodd"/>
                            <path id="Path-4" data-name="Path" d="M33.547,8v7.334a1.7,1.7,0,0,1-.219.834,2.5,2.5,0,0,1-.557.686,2.9,2.9,0,0,1-.739.466,1.946,1.946,0,0,1-.775.174,2.23,2.23,0,0,1-.859-.174,2.585,2.585,0,0,1-.755-.476,2.434,2.434,0,0,1-.536-.7,1.8,1.8,0,0,1-.2-.834V8H25v7.408a6.469,6.469,0,0,0,.375,2.214,5.6,5.6,0,0,0,1.057,1.815,4.927,4.927,0,0,0,1.65,1.227,5.055,5.055,0,0,0,2.155.45,4.114,4.114,0,0,0,1.458-.24,4.24,4.24,0,0,0,1.093-.592,3.815,3.815,0,0,0,.755-.755,4.965,4.965,0,0,0,.453-.719l.3,2.187h3.253V8Z" transform="translate(-10.745 -3.438)" fill="#060606" fill-rule="evenodd"/>
                            <path id="Path-5" data-name="Path" d="M59.019,7.024a.367.367,0,0,0-.121-.018,3.08,3.08,0,0,0-.87.056,5.042,5.042,0,0,0-1.614.8c-.206.133-.658.437-1.012.72a7.12,7.12,0,0,0-.784.71l-.8-1.979H51V20.685h3.965c-.008-1.856-.023-7.615,0-8.325h0v0c0-.056,0-.093.006-.1h0A1.842,1.842,0,0,1,56.91,10.7a2.264,2.264,0,0,1,.42.04c.409.051.842.145,1.215.163a1.992,1.992,0,0,0,.223.014l.045,0,.086,0a.612.612,0,0,0,.16-.025,1.959,1.959,0,0,0-.039-3.87Z" transform="translate(-21.919 -3.009)" fill="#060606" fill-rule="evenodd"/>
                            <path id="Path-6" data-name="Path" d="M255.756,4.282A1.05,1.05,0,0,1,256,3.965a1.182,1.182,0,0,1,.346-.213,1.078,1.078,0,0,1,.407-.078l1.231,0V0h-1.231A4.761,4.761,0,0,0,254.9.369a5.2,5.2,0,0,0-1.566,1.006,4.949,4.949,0,0,0-1.088,1.489,4.161,4.161,0,0,0-.407,1.816V5.875H250v3.56h1.841v8.242h3.824V9.435h2.318V5.875h-2.318V4.681A.875.875,0,0,1,255.756,4.282Z" transform="translate(-107.448)" fill="#060606" fill-rule="evenodd"/>
                            <path id="Path-7" data-name="Path" d="M104.085,11.974,104.561.323A.33.33,0,0,0,104.213,0h-3.863A.33.33,0,0,0,100,.323l.477,11.651Z" transform="translate(-42.979)" fill="#060606" fill-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
                <div class="">
                    <nav class="hidden lg:block">
                        <ul class="flex space-x-[50px]">
                            <?php if (get_field('dropdown_titel', 'option')): ?>   
                            <li class="lg:text-15 lg:leading-25 xl:text-17 xl:leading-27 font-medium text-[#000000] last-of-type:text-[#162CF5] last-of-type:font-bold dropdown-item">
                                <button id="dropdown-button" class="flex items-center"><?php echo get_field('dropdown_titel', 'option');?> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.41" height="6.064" viewBox="0 0 10.41 6.064" class="ml-[11px]">
                                        <path id="Path_95" data-name="Path 95" d="M-48.094,13672.944l3.9,3.323,3.693-3.323" transform="translate(-39.094 13677.597) rotate(180)" fill="none" stroke="#0f0e0e" stroke-linecap="round" stroke-width="2"/>
                                    </svg>
                                </button>
                            </li>
                            <?php endif; ?>
                            <?php
                            if( have_rows('hoofdmenu', 'option') ):
                                while( have_rows('hoofdmenu', 'option') ) : the_row(); ?>
                                <?php
                                $link = get_sub_field('hoofdmenu_link', 'option');
                                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                                ?>
                                <li class="lg:text-15 lg:leading-25 xl:text-17 xl:leading-27 font-medium text-[#000000] last-of-type:text-[#162CF5] last-of-type:font-bold hide-dropdown">
                                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                                </li>
                                <?php
                                endwhile;
                            else :
                            endif;
                            ?>
                        </ul>
                    </nav>
                    <div id="mobiel-menu" class="flex items-center justify-end lg:hidden cursor-pointer">
                        <div class="relative h-[22.5px] w-[80px] overflow-hidden">
                            <p class="absolute right-0 text-15 leading-20 font-bold text-[#0F0E0E] mr-[10px] md:mr-[15px] menu">Menu</p>
                            <p class="absolute right-0 text-15 leading-20 font-bold text-[#0F0E0E] mr-[10px] md:mr-[15px] sluiten">Sluiten</p>
                        </div>
                        
                        <div class="menu-btn h-fit w-[16.26px]">
                            <span></span>                
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <div class="h-[75px] lg:h-[111px] xl:h-[125px]"></div>

    <!-- DROPDOWN -->
    <div id="dropdown" class="fixed top-0 left-0 right-0 z-[9998] lg:w-[calc(100vw-14px)] xl:w-[calc(100vw-40px)] mx-auto bg-white hidden lg:block rounded-b-[30px] overflow-hidden submenu-shadow duration-300">
         <div class="h-[75px] lg:h-[111px] xl:h-[125px]"></div>
         <div class="w-full flex">
            <div class="bg-[#F5FAFF] border-r-[1px] border-[#E7ECF0]">
                <div class="lg:ml-[calc(50vw-580.5px)] xl:ml-[calc(50vw-665px)] lg:w-[313px] pt-[55px] pb-[75px]">
                    <ul class="grid gap-[25px]">
                        <?php
                        if( have_rows('dropdown_items', 'option') ):
                            $count = 0;
                            while( have_rows('dropdown_items', 'option') ) : the_row(); ?>
                            <li id="menuHref-<?php echo $count; ?>" class="submenu-hover w-[254px] relative">
                                <button class="text-22 leading-27 text-[#0F0E0E] font-medium"><?php echo get_sub_field('dropdown_submenu_titel');?></button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="7.142" height="12.868" viewBox="0 0 7.142 12.868" class="absolute right-[-7px] top-[8px]">
                                    <path id="Path_97" data-name="Path 97" d="M0,0,5.157,4.4,10.046,0" transform="translate(1.412 11.459) rotate(-90)" fill="none" stroke="#0f0e0e" stroke-linecap="round" stroke-width="2"/>
                                </svg>
                            </li>
                            <?php
                             $count++;
                            endwhile;
                        else :
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="w-full lg:w-[833px] xl:w-[976px]">
                <div class="ml-[55px] mt-[50px] mb-[75px]">
                    <?php
                    if (have_rows('dropdown_items', 'option')) :
                        $count = 0;
                        // $first_image_displayed = false; // Om bij te houden of het eerste item is weergegeven
                        while (have_rows('dropdown_items', 'option')) : the_row();
                            ?>
                                <div id="submenucontent-<?php echo $count; ?>" class="w-full grid grid-cols-3 gap-[30px] submenu-content <?= $count !== 0 ? "hide" : "" ?>">
                                    <?php
                                    if( have_rows('dropdown_submenu', 'option') ):
                                        while( have_rows('dropdown_submenu', 'option') ) : the_row(); ?>
                                        <div class="submenucontent-col">
                                            <p class="text-20 leading-25 font-medium underline"><?php echo get_sub_field('submenu_titel', 'option');?></p>
                                            <ul class="mt-[10px]">
                                                <?php
                                                if( have_rows('dropdown_submenu_item', 'option') ):
                                                    while( have_rows('dropdown_submenu_item', 'option') ) : the_row(); ?>
                                                    <?php
                                                    $link = get_sub_field('dropdown_submenu_item_link', 'option');
                                                    $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                                                    $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                                                    $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                                                    ?>
                                                        <li>
                                                            <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>" class="text-17 leading-30 lg:text-14 lg:leading-26 xl:text-16 xl:leading-30 font-normal text-[#000000]"><?php echo $link_text; ?></a>
                                                        </li>
                                                    <?php
                                                    endwhile;
                                                else :
                                                endif;
                                                ?>
                                            </ul>
                                        </div>
                                        <?php
                                        endwhile;
                                    else :
                                    endif;
                                    ?>
                                </div>
                            <?php
                            $count++;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
         </div>
    </div>
    <div class="overlay-dropdown hidden lg:block"></div>

    <!-- MOBIEL MENU -->
    <div id="mobilemenu" class="fixed top-0 bottom-0 w-full h-[100dvh] z-[9997] bg-white lg:hidden">
         <div class="h-[75px]"></div>
         <div class="w-full h-[calc(100dvh-75px)] overflow-y-scroll">
            <hr class="border-[#F0F0F0]">
            <ul class="w-full">
                <li class="py-[25px] md:py-[30px] border-b-[1px] border-[#F0F0F0]">
                    <button id="mobiel-submenu" class="ml-[calc(50vw-180px)] md:ml-[calc(50vw-351px)] w-[360px] md:w-[708px] text-left relative block"><?php echo get_field('dropdown_titel', 'option');?> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="8.584" height="12.989" viewBox="0 0 8.584 12.989" class="absolute top-0 right-0">
                            <path id="Path_149" data-name="Path 149" d="M0,0,4.854,5l4.6-5" transform="translate(1.768 11.221) rotate(-90)" fill="none" stroke="#0f0e0e" stroke-linecap="round" stroke-width="2.5"/>
                        </svg>
                    </button>
                </li>
                <?php
                if( have_rows('mobielmenu', 'option') ):
                    while( have_rows('mobielmenu', 'option') ) : the_row(); ?>
                    <?php
                    $link = get_sub_field('mobielmenu_link', 'option');
                    $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                    $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                    $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                    ?>
                    <li class="py-[25px] md:py-[30px] border-b-[1px] border-[#F0F0F0] last-of-type:hidden">
                        <a href="<?php echo $link_url; ?>" class="ml-[calc(50vw-180px)] md:ml-[calc(50vw-351px)] w-[360px] md:w-[708px] relative block" target="<?php echo $link_target; ?>"><?php echo $link_text; ?>
                            
                        </a>
                    </li>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
                <?php
                $link1 = get_field('mobielmenu_button', 'option');
                $link11_url = isset($link1['url']) ? esc_url($link1['url']) : '';
                $link1_text = isset($link1['title']) ? esc_html($link1['title']) : '';
                $link1_target = isset($link1['target']) ? esc_attr($link1['target']) : '';
                ?>
                <?php if (get_field('mobielmenu_button', 'option')): ?>   
                <li class="mt-[30px] md:mt-[45px] lg:mt-[30px] lg:w-fit  container">
                    <a href="<?php echo $link1_url; ?>" class="skewed-button bg-[#162CF5] text-white lg:w-fit" target="<?php echo $link1_target; ?>"><?php echo $link1_text; ?></a>
                </li>
                <?php endif; ?>
            </ul>
         </div>
    </div>


    <!-- MOBIEL SUBMENU -->
    <div id="mobilesubmenu" class="fixed top-0 bottom-0 w-full h-[100dvh] z-[9997] bg-white lg:hidden">
         <div class="h-[75px]"></div>
         <div class="w-full h-[calc(100dvh-75px)] overflow-y-scroll">
            <div class="w-full h-[52px] md:h-[59px] bg-[#F7F7F7] flex items-center">
                <button id="mobilemenu-back" class="ml-[calc(50vw-180px)] md:ml-[calc(50vw-351px)] w-[360px] md:w-[708px] text-left text-14 leading-18 md:text-16 md:leading-21 font-medium underline">Terug</button>
            </div>
            <div class="accordion-group">
                <?php
                if( have_rows('dropdown_items', 'option') ):
                    while( have_rows('dropdown_items', 'option') ) : the_row(); ?>
                    <div class="accordion-item">
                        <button class="accordion container py-[25px] md:py-[30px]">
                            <span class="xl:text-18 xl:leading-22 font-medium"><?php echo get_sub_field('dropdown_submenu_titel');?></span>
                        </button>
                        <div class="panel">
                            <div class="container pb-[35px] md:pb-[40px] grid grid-cols-1 gap-[30px] pt-[10px]">
                                <?php
                                if( have_rows('dropdown_submenu', 'option') ):
                                    while( have_rows('dropdown_submenu', 'option') ) : the_row(); ?>
                                    <div class="submenucontent-col">
                                        <p class="text-16 leading-16 font-bold text-[#162CF5]"><?php echo get_sub_field('submenu_titel', 'option');?></p>
                                        <ul class="mt-[15px]">
                                            <?php
                                            if( have_rows('dropdown_submenu_item', 'option') ):
                                                while( have_rows('dropdown_submenu_item', 'option') ) : the_row(); ?>
                                                <?php
                                                $link = get_sub_field('dropdown_submenu_item_link', 'option');
                                                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                                                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                                                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                                                ?>
                                                    <li>
                                                        <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>" class="text-16 leading-40 font-normal text-[#000000]"><?php echo $link_text; ?></a>
                                                    </li>
                                                <?php
                                                endwhile;
                                            else :
                                            endif;
                                            ?>
                                        </ul>
                                    </div>
                                    <?php
                                    endwhile;
                                else :
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>   
                    <?php
                    endwhile;
                else :
                endif;
                ?>
                
            </div>
         </div>
        

    </div>
