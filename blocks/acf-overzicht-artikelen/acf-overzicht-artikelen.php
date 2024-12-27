<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- OVERZICHT ARTIKELEN -->
<div class="bg-white">
<section class="mt-[26px] md:mt-[30px] lg:mt-[35px]">
    <div class="container">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</section>
<section>
    <div class="container pt-[62px] md:pt-[45px] lg:pt-[25px]">
        <div class="w-full xl:w-[996px] mx-auto">
            <?php if (get_field('subtitel')): ?>   
            <div class="flex flex-col md:flex-row w-full md:justify-center">
                <h2 class="text-18 leading-18 md:text-20 md:leading-20 lg:text-19 lg:leading-19 xl:text-22 xl:leading-22 font-bold text-[#162CF5] hyphens-manual w-full md:w-fit md:max-w-[414px] lg:max-w-[503px] xl:max-w-[583px] order-2 md:order-1 text-center"><?php echo get_field('subtitel');?></h2>
                <?php if (get_field('tooltip')): ?>   
                <div class="relative w-full md:w-auto order-1 md:order-2">
                    <!-- TOOLTIP -->
                    <div class="absolute top-[-48px] md:top-[-28px] lg:top-[-22px] left-[unset] md:left-[20px] right-[0px] md:right-[unset] element-fade-in show">
                        <div class="tooltip <?php echo get_field('tooltip_kleur');?>">
                        <?php echo get_field('tooltip');?>
                            <div class="absolute left-0 bottom-[-8px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.943" height="14.708" viewBox="0 0 12.943 14.708">
                                    <path id="Path_2" data-name="Path 2" d="M2963,1123.047l5.561-14.708s8.62-.049,7.23,3.628S2963,1123.047,2963,1123.047Z" transform="translate(-2963 -1108.339)" fill="#f69d22"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <h1 class="text-42 leading-44 md:text-45 md:leading-55 lg:text-53 lg:leading-63 xl:text-60 xl:leading-70 text-[#0F0E0E] font-bold mt-[20px] md:mt-[30px] lg:mt-[20px] text-center"><?php echo get_field('titel');?></h1>
            <?php if (get_field('tekst')): ?>  
            <p class="text-16 leading-30 lg:text-15 lg:leading-28 xl:text-16 xl:leading-30 font-normal text-[#0F0E0E] mt-[25px] md:mt-[30px] lg:mt-[30px] w-full text-center max-w-[744px] mx-auto"><?php echo get_field('tekst');?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="mb-[70px] md:mb-[50px] lg:mb-[70px] xl:mb-[80px] mt-[35px] md:mt-[40px] lg:mt-[50px]">
    <div class="container"> 
        <div id="filters" class="input-group flex flex-wrap lg:space-x-[8px] justify-between lg:justify-center">
        <div class="w-full md:w-[350px] lg:w-[350px] mb-[15px] lg:mb-[unset] h-[50px] relative overflow-hidden border-[1px] border-[#F2F2F2] rounded-[10px]">
            <select id="post-type-filter" data-placeholder="Categorie" class="selectbox w-full md:w-[350px] lg:w-[350px] h-[50px] flex items-center px-[15px] text-16 font-medium bg-white cursor-pointer">
                <option value="">Selecteer categorie</option>
                <?php
                // Haal het ACF selectievakje veld op
                $acf_selected_values = get_field('jouw_selectievakje_veldnaam'); // Vervang 'jouw_selectievakje_veldnaam' door de naam van je veld

                // Zorg dat het een array is (voor het geval dat er geen waarde is ingesteld)
                if (!is_array($acf_selected_values)) {
                    $acf_selected_values = [];
                }
                // Definieer de specifieke posttypes die je wilt tonen
                $allowed_post_types = ['artikel', 'interview', 'cx-begrip']; // Voeg hier je posttypes toe
                // Verkrijg de posttypes die getoond moeten worden
                foreach ($allowed_post_types as $post_type_slug) {
                    $post_type = get_post_type_object($post_type_slug); // Haal de posttype object op
                    if ($post_type) {
                        echo '<option value="' . esc_attr($post_type->name) . '">' . esc_html($post_type->label) . '</option>';
                    }
                }
                ?>
            </select>
            <div class="h-[50px] w-[30px] absolute top-0 right-0">
                <div class="h-full bg-white flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11.27" height="7.246" viewBox="0 0 11.27 7.246">
                    <path id="Path_128" data-name="Path 128" d="M0,0,4.334,4.389,8.442,0" transform="translate(1.414 1.414)" fill="none" stroke="#0f0e0e" stroke-linecap="round" stroke-width="2"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="w-full md:w-[350px] lg:w-[350px] mb-[15px] lg:mb-[unset] h-[50px] relative overflow-hidden border-[1px] border-[#F2F2F2] rounded-[10px]">
            <select id="category-filter" data-placeholder="Onderwerp" class="selectbox w-full md:w-[350px] lg:w-[350px] h-[50px] flex items-center px-[15px] text-16 font-medium bg-white cursor-pointer">
                <option value="">Selecteer onderwerp</option>
                <?php
                $categories = get_categories();
                foreach ($categories as $category) {
                    echo '<option value="' . esc_attr($category->term_id) . '">' . esc_html($category->name) . '</option>';
                }
                ?>
            </select>
            <div class="h-[50px] w-[30px] absolute top-0 right-0">
                <div class="h-full bg-white flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11.27" height="7.246" viewBox="0 0 11.27 7.246">
                    <path id="Path_128" data-name="Path 128" d="M0,0,4.334,4.389,8.442,0" transform="translate(1.414 1.414)" fill="none" stroke="#0f0e0e" stroke-linecap="round" stroke-width="2"/>
                    </svg>
                </div>
            </div>
        </div>
        <!-- ZOEKEN -->
            <div class="w-full lg:w-[361px] h-[50px] relative">
            <input type="text" id="search-input" placeholder="Zoek naar inspiratie..." class="w-full lg:w-[361px] h-[50px] flex items-center pl-[15px] pr-[50px] text-16 font-medium placeholder:text-[#A5A5A5]">
            <button id="filter-button" class="h-[50px] absolute top-0 right-[15px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="19.407" height="21.408" viewBox="0 0 19.407 21.408">
                    <g id="Group_393" data-name="Group 393" transform="translate(-0.451 -0.389)">
                    <g id="Ellipse_36" data-name="Ellipse 36" transform="translate(0.451 0.389)" fill="none" stroke="#000" stroke-width="2">
                        <circle cx="8.918" cy="8.918" r="8.918" stroke="none"/>
                        <circle cx="8.918" cy="8.918" r="7.918" fill="none"/>
                    </g>
                    <line id="Line_27" data-name="Line 27" x2="3.92" y2="4.73" transform="translate(14.529 15.658)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                    </g>
                </svg>
            </button>
            </div>
        </div>
    </div>
    <!-- CHIPS -->
    <div id="chips-container" class="flex md:justify-center w-full mx-auto overflow-x-auto scroll-blok px-[calc(50vw-182px)] md:px-[unset]"></div>
    <div class="w-full md:w-[708px] lg:w-[1147px] xl:w-[1290px] mx-auto">
        <!-- RESULTATEN -->
        <div id="results" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-[28px] md:gap-y-[25px] gap-x-[20px] mt-[25px] md:mt-[40px] lg:mt-[55px]">
        <div class="h-[100vh]"></div>
        </div>
    </div>     
</section>
</div>
<?php endif; ?>
