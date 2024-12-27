<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image1 = get_field('eerste_afbeelding');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>
<?php
$image2 = get_field('tweede_afbeelding');
$image2_url = isset($image2['url']) ? esc_url($image2['url']) : '';
$image2_alt = isset($image2['alt']) ? esc_attr($image2['alt']) : '';
?>
<!-- ARTIKEL -->
<div class="bg-white">
    <section class="mt-[26px] md:mt-[30px] lg:mt-[35px] mb-[26px] md:mb-[30px] lg:mb-[45px]">
        <div class="container">
            <nav aria-label="breadcrumbs" class="rank-math-breadcrumb"><p class="line-clamp-1"><a href="http://localhost:10137">Home</a><span class="separator"> – </span><a href="/inspiratie">Inspiratie</a><span class="separator"> – </span><span class="last"><?php the_title();?></span></p></nav>
        </div>
    </section>
    <section>
        <div class="container flex flex-wrap justify-between">
            <div class="w-full lg:w-[680px] xl:w-[778px]">
                <?php
                $categories = get_the_category();
                if ( ! empty( $categories ) ) { ?>
                    <h2 class="text-18 leading-22 md:text-20 md:leading-25 lg:text-22 lg:leading-27 font-bold text-[#162CF5]">
                    <?php
                    $category_names = wp_list_pluck( $categories, 'name' ); // Haal alleen de namen op
                    echo esc_html( implode( ' | ', $category_names ) ); // Toon de namen, gescheiden door een komma
                    ?>
                    </h2>
                    <?php
                }
                ?>
                <h1 class="text-36 leading-38 md:text-45 md:leading-55 lg:text-53 lg:leading-63 xl:text-60 xl:leading-70 font-bold text-[#000000] mt-[8px]"><?php the_title();?></h1>
                <div class="flex text-12 leading-30 font-medium mt-[8px]">
                    <p><?php the_time('j F Y'); ?></p>
                    <?php
                   $team_member = get_field('geschreven_door', $post_id);
                    if( $team_member ):
                    $teaser_image = get_the_post_thumbnail_url($team_member->ID, 'thumbnail');
                    ?>
                        <span class="mx-[18px]">|</span>
                        <div class="flex items-center"><div class="h-[23px] w-[23px] rounded-full overflow-hidden"><img src="<?php echo esc_url( $teaser_image ); ?>" alt="" class="h-full min-h-full min-w-full object-center object-cover"></div><p class="ml-[12px] flex"><span class="hidden md:block mr-[5px]">Geschreven door:</span><?php echo esc_html( $team_member->post_title ); ?></p></div>
                    <?php endif; ?>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 mt-[30px]">
                    <!-- INSTRODUCTIE -->
                    <p class="text-16 leading-30 lg:text-15 lg:leading-28 xl:text-16 xl:leading-30 text-editor order-2 md:order-1">
                        <?php echo get_field('introductie');?>
                    </p>
                    <!-- NAVIGATIE MOBIEL -->
                    <?php
                    // Check of 'anchor_id' een waarde bevat
                    $anchor_id_filled = get_field('anchor_id');
                    $extra_anchor_filled = false;
                    if (have_rows('extra_alinea')) {
                        while (have_rows('extra_alinea')) {
                            the_row();
                            if (get_sub_field('extra_anchor_id')) {
                                $extra_anchor_filled = true;
                            }
                        }
                    }
                    if ($anchor_id_filled || $extra_anchor_filled):
                    ?>
                    <div class="flex justify-end lg:hidden order-1 md:order-2 mb-[30px] md:mb-[unset] relative">
                        <div class="w-[363px] md:w-[340px] lg:w-[428px] h-fit bg-[#B7D5FF] rounded-[20px] px-[25px] py-[35px] md:px-[35px] md:py-[40px] lg:px-[45px] lg:py-[60px] relative z-[5]">
                            <div class="w-full">
                                <h3 class="text-18 leading-22 md:text-22 md:leading-35 lg:text-30 lg:leading-35 text-[#000000] font-sora font-bold">Navigatie</h3>
                                <div class="text-editor mt-[20px]">
                                   <ul>
                                        <?php if (get_field('anchor_id')): ?>   
                                        <li>
                                            <a href="#<?php echo get_field('anchor_id');?>" class="text-[#0F0E0E] font-normal"><?php echo get_field('anchor_titel');?></a>
                                        </li>
                                        <?php endif; ?>
                                        <?php
                                        if( have_rows('extra_alinea') ):
                                            while( have_rows('extra_alinea') ) : the_row(); ?>
                                            
                                            <?php if (get_sub_field('inhoud_alinea') === "tekst"): ?>
                                                <?php if (get_sub_field('extra_anchor_id')): ?>   
                                                <li>
                                                    <a href="#<?php echo get_sub_field('extra_anchor_id');?>" class="text-[#0F0E0E] font-normal"><?php echo get_sub_field('extra_anchor_titel');?></a>
                                                </li>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('inhoud_alinea') === "tekst-afbeelding-rechts"): ?>
                                                <?php if (get_sub_field('extra_anchor_id')): ?>   
                                                <li>
                                                    <a href="#<?php echo get_sub_field('extra_anchor_id');?>" class="text-[#0F0E0E] font-normal"><?php echo get_sub_field('extra_anchor_titel');?></a>
                                                </li>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('inhoud_alinea') === "tekst-afbeelding-links"): ?>
                                                <?php if (get_sub_field('extra_anchor_id')): ?>   
                                                    <li>
                                                    <a href="#<?php echo get_sub_field('extra_anchor_id');?>" class="text-[#0F0E0E] font-normal"><?php echo get_sub_field('extra_anchor_titel');?></a>
                                                </li>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <?php if (get_sub_field('inhoud_alinea') === "tekst-video"): ?> 
                                                <?php if (get_sub_field('extra_anchor_id')): ?>   
                                                    <li>
                                                    <a href="#<?php echo get_sub_field('extra_anchor_id');?>" class="text-[#0F0E0E] font-normal"><?php echo get_sub_field('extra_anchor_titel');?></a>
                                                </li>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php
                                            endwhile;
                                        else :
                                        endif;
                                        ?>
                                    </ul>
                                </div>
                               

                            </div>
                             
                        </div>
                        <div class="h-[414.29px] w-[414.29px] lg:w-[34.84140625vw] lg:h-[34.84140625vw] xl:w-[30.9701388888889vw] xl:h-[30.9701388888889vw] rounded-full bg-[#EDF5FF] top-[-170px] md:top-[-120px] left-[336px] md:left-[305px] absolute z-[1]"></div>
                    </div>
                    <?php endif; ?>
                </div>
                <!-- ALINEA 1 -->
                 <?php if (get_field('alinea_1')): ?>   
                <div id="<?php echo get_field('anchor_id');?>" class="text-16 leading-30 lg:text-15 lg:leading-28 xl:text-16 xl:leading-30 text-editor mt-[30px] w-full md:w-[504px] lg:w-full"><?php echo get_field('alinea_1');?></div>
                <?php endif; ?>

            </div>
            <!-- NAVIGATIE DESKTOP -->
            <?php
            // Check of 'anchor_id' een waarde bevat
            $anchor_id_filled = get_field('anchor_id');
            // Check of 'extra_alinea' herhalingsvelden bestaan en minimaal één 'extra_anchor_id' gevuld is
            $extra_anchor_filled = false;
            if (have_rows('extra_alinea')) {
                while (have_rows('extra_alinea')) {
                    the_row();
                    if (get_sub_field('extra_anchor_id')) {
                        $extra_anchor_filled = true;
                        // break; // Stop de loop zodra een waarde gevonden is
                    }
                }
            }
            // Toon de <div> alleen als één van de twee checks true is
            if ($anchor_id_filled || $extra_anchor_filled):
            ?>
            <div class="hidden lg:block relative">
                <div class="w-[363px] md:w-[340px] lg:w-[428px] h-fit bg-[#B7D5FF] rounded-[20px] px-[35px] py-[40px] lg:px-[45px] lg:py-[60px] relative z-[5]">
                    <div class="w-full">
                        <h3 class="text-18 leading-22 md:text-22 md:leading-35 lg:text-30 lg:leading-35 text-[#000000] font-sora font-bold">Navigatie</h3>
                        <div class="text-editor mt-[20px]">
                            <ul>
                                <?php if (get_field('anchor_id')): ?>   
                                <li>
                                    <a href="#<?php echo get_field('anchor_id');?>" class="text-[#0F0E0E] font-normal"><?php echo get_field('anchor_titel');?></a>
                                </li>
                                <?php endif; ?>
                                <?php
                                if( have_rows('extra_alinea') ):
                                    while( have_rows('extra_alinea') ) : the_row(); ?>
                                    
                                    <?php if (get_sub_field('inhoud_alinea') === "tekst"): ?>
                                        <?php if (get_sub_field('extra_anchor_id')): ?>   
                                        <li>
                                            <a href="#<?php echo get_sub_field('extra_anchor_id');?>" class="text-[#0F0E0E] font-normal"><?php echo get_sub_field('extra_anchor_titel');?></a>
                                        </li>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('inhoud_alinea') === "tekst-afbeelding-rechts"): ?>
                                        <?php if (get_sub_field('extra_anchor_id')): ?>   
                                        <li>
                                            <a href="#<?php echo get_sub_field('extra_anchor_id');?>" class="text-[#0F0E0E] font-normal"><?php echo get_sub_field('extra_anchor_titel');?></a>
                                        </li>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('inhoud_alinea') === "tekst-afbeelding-links"): ?>
                                        <?php if (get_sub_field('extra_anchor_id')): ?>   
                                            <li>
                                            <a href="#<?php echo get_sub_field('extra_anchor_id');?>" class="text-[#0F0E0E] font-normal"><?php echo get_sub_field('extra_anchor_titel');?></a>
                                        </li>
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('inhoud_alinea') === "tekst-video"): ?> 
                                        <?php if (get_sub_field('extra_anchor_id')): ?>   
                                            <li>
                                            <a href="#<?php echo get_sub_field('extra_anchor_id');?>" class="text-[#0F0E0E] font-normal"><?php echo get_sub_field('extra_anchor_titel');?></a>
                                        </li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php
                                    endwhile;
                                else :
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="h-[105.417302798982vw] w-[105.417302798982vw] md:h-[53.9440104166667vw] md:w-[53.9440104166667vw] lg:w-[34.84140625vw] lg:h-[34.84140625vw] xl:w-[30.9701388888889vw] xl:h-[30.9701388888889vw] rounded-full bg-[#EDF5FF] lg:top-[130px] lg:left-[300px] xl:top-[182px] xl:left-[206px] absolute z-[1]"></div>
            </div>
            <?php endif; ?>
        </div>
        <?php if (get_field('afbeelding') === "een-afbeelding"): ?>   
        <!-- TEASER AFBEELDING -->
        <div class="container mt-[60px] relative z-[5]">
            <div class="h-[271px] md:h-[260px] lg:h-[417px] xl:h-[501px] md:w-[588px] lg:w-[930px] xl:w-[1117px] rounded-[15px] overflow-hidden">
                <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="h-full min-h-full min-w-full object-center object-cover">
            </div>
        </div>
        <?php endif; ?>
        <?php if (get_field('afbeelding') === "twee-afbeeldingen"): ?>   
        <!-- TWEE TEASER AFBEELDINGEN -->
        <div class="container mt-[60px] relative z-[5]">
            <div class="md:h-[260px] lg:h-[417px] xl:h-[501px] md:w-[588px] lg:w-[930px] xl:w-[1117px] grid md:grid-cols-2 gap-[15px] md:gap-[10px] lg:gap-[15px]">
                <div class="h-[271px] md:h-[260px] lg:h-[417px] xl:h-[501px] rounded-[15px] overflow-hidden">
                    <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="h-full min-h-full min-w-full object-center object-cover">
                </div>
                <div class="h-[271px] md:h-[260px] lg:h-[417px] xl:h-[501px] rounded-[15px] overflow-hidden">
                    <img src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>" class="h-full min-h-full min-w-full object-center object-cover">
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!-- EXTRA ALINEA'S -->
         <?php
        if( have_rows('extra_alinea') ):
            while( have_rows('extra_alinea') ) : the_row(); ?>
            <?php
            $image4 = get_sub_field('extra_afbeelding_1');
            $image4_url = isset($image4['url']) ? esc_url($image4['url']) : '';
            $image4_alt = isset($image4['alt']) ? esc_attr($image4['alt']) : '';
            ?>
            <?php
            $image5 = get_sub_field('extra_afbeelding_2');
            $image5_url = isset($image5['url']) ? esc_url($image5['url']) : '';
            $image5_alt = isset($image5['alt']) ? esc_attr($image5['alt']) : '';
            ?>
            <?php
            $image6 = get_sub_field('extra_afbeelding_3');
            $image6_url = isset($image6['url']) ? esc_url($image6['url']) : '';
            $image6_alt = isset($image6['alt']) ? esc_attr($image6['alt']) : '';
            ?>
            <?php
            $link = get_sub_field('extra_button_1');
            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
            ?>
            <?php
            $link2 = get_sub_field('extra_button_2');
            $link2_url = isset($link2['url']) ? esc_url($link2['url']) : '';
            $link2_text = isset($link2['title']) ? esc_html($link2['title']) : '';
            $link2_target = isset($link2['target']) ? esc_attr($link2['target']) : '';
            ?>
            <?php if (get_sub_field('inhoud_alinea') === "tekst"): ?>
                <!-- TEKST -->  
                <div id="<?php echo get_sub_field('extra_anchor_id');?>" class="container mt-[60px] grid gap-[30px] lg:flow-root relative z-[5]">
                    <div class="text-16 leading-30 lg:text-15 lg:leading-28 xl:text-16 xl:leading-30 max-w-[995px] text-editor"><?php echo get_sub_field('extra_tekst');?></div>
                </div>
            <?php endif; ?>
            <?php if (get_sub_field('inhoud_alinea') === "tekst-afbeelding-rechts"): ?>
                <!-- TEKST + AFBEELDING RECHTS -->  
                <div id="<?php echo get_sub_field('extra_anchor_id');?>" class="container mt-[60px] grid gap-[30px] lg:flow-root">
                    <div class="lg:float-right h-[271px] md:h-[316px] lg:h-[241px] xl:h-[274px] w-[363px] md:w-[708px] lg:w-[450px] xl:w-[512px] overflow-hidden lg:ml-[60px] lg:mb-[30px] rounded-[15px] order-2 lg:order-1">
                        <img src="<?php echo $image4_url; ?>" alt="<?php echo $image4_alt; ?>" class="h-full min-h-full min-w-full object-center object-cover">
                    </div>
                    <div class="text-16 leading-30 lg:text-15 lg:leading-28 xl:text-16 xl:leading-30 max-w-[995px] order-1 lg:order-2 text-editor"><?php echo get_sub_field('extra_tekst');?></div>
                </div>
            <?php endif; ?>
           <?php if (get_sub_field('inhoud_alinea') === "tekst-afbeelding-links"): ?>
                <!-- TEKST + AFBEELDING LINKS -->  
                <div id="<?php echo get_sub_field('extra_anchor_id');?>" class="container mt-[60px] grid gap-[30px] lg:flow-root">
                    <div class="lg:float-left h-[271px] md:h-[316px] lg:h-[241px] xl:h-[274px] w-[363px] md:w-[708px] lg:w-[450px] xl:w-[512px] overflow-hidden lg:mr-[60px] lg:mb-[30px] rounded-[15px] order-2 lg:order-1">
                        <img src="<?php echo $image4_url; ?>" alt="<?php echo $image4_alt; ?>" class="h-full min-h-full min-w-full object-center object-cover">
                    </div>
                    <div class="text-16 leading-30 lg:text-15 lg:leading-28 xl:text-16 xl:leading-30 order-1 lg:order-2 text-editor"><?php echo get_sub_field('extra_tekst');?></div>
                </div>
            <?php endif; ?>
            <?php if (get_sub_field('inhoud_alinea') === "tekst-video"): ?> 
                <!-- TEKST + VIDEO -->  
                <div id="<?php echo get_sub_field('extra_anchor_id');?>" class="container mt-[60px] grid gap-[30px] lg:block relative z-[5]">
                    <div class="text-16 leading-30 lg:text-15 lg:leading-28 xl:text-16 xl:leading-30 max-w-[995px] text-editor"><?php echo get_sub_field('extra_tekst');?></div>
                    <div class="w-full md:w-[708px] lg:w-[758px] aspect-video rounded-[15px] overflow-hidden lg:mt-[30px]">
                        <video controls controlsList="nodownload" muted="" playsinline="" class="min-h-full h-full w-full object-center object-cover z-[5]">
                            <source src="<?php echo get_sub_field('extra_video');?>#t=0.001" type="video/mp4">
                            Your browser does not support the video element.
                        </video>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (get_sub_field('inhoud_alinea') === "een-afbeelding"): ?>
                <!-- AFBEELDING -->  
                <div class="container mt-[60px] grid gap-[30px] lg:block relative z-[5]">
                    <div class="w-full h-auto max-w-[995px] overflow-hidden rounded-[15px]">
                        <img src="<?php echo $image4_url; ?>" alt="<?php echo $image4_alt; ?>" class="h-full min-h-full min-w-full object-center object-cover">
                    </div>
                </div>   
            <?php endif; ?>
            <?php if (get_sub_field('inhoud_alinea') === "twee-afbeeldingen"): ?>
                <!-- TWEE AFBEELDINGEN -->  
                <div class="container mt-[60px] grid gap-[15px] lg:gap-[20px] md:grid-cols-2 relative z-[5]">
                    <div class="w-full h-[271px] md:h-[316px] lg:h-[320px] xl:h-[350px] overflow-hidden rounded-[15px]">
                        <img src="<?php echo $image4_url; ?>" alt="<?php echo $image4_alt; ?>" class="h-full min-h-full min-w-full object-center object-cover">
                    </div>
                    <div class="w-full h-[271px] md:h-[316px] lg:h-[320px] xl:h-[350px] overflow-hidden rounded-[15px]">
                        <img src="<?php echo $image5_url; ?>" alt="<?php echo $image5_alt; ?>" class="h-full min-h-full min-w-full object-center object-cover">
                    </div>
                </div>  
            <?php endif; ?>
            <?php if (get_sub_field('inhoud_alinea') === "drie-afbeeldingen"): ?>
                <!-- HTML -->  
                <div class="w-full lg:w-[1147px] xl:w-[1290px] mx-auto mt-[60px] relative z-[5]">
                    <div class="swiper myafbeeldingen px-[calc(50vw-182px)] md:px-[calc(50vw-354px)] lg:px-[unset] pb-[91px] md:pb-[110px] lg:pb-[unset]">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide w-[360px] h-[271px] md:h-[316px] md:w-[346.5px] lg:w-[369px] lg:h-[300px] xl:w-[416.66px] xl:h-[325px] overflow-hidden rounded-[15px]">
                                <img src="<?php echo $image4_url; ?>" alt="<?php echo $image4_alt; ?>" class="h-full min-h-full min-w-full object-center object-cover">
                            </div>
                            <div class="swiper-slide w-[360px] h-[271px] md:h-[316px] md:w-[346.5px] lg:w-[369px] lg:h-[300px] xl:w-[416.66px] xl:h-[325px] overflow-hidden rounded-[15px]">
                                <img src="<?php echo $image4_url; ?>" alt="<?php echo $image4_alt; ?>" class="h-full min-h-full min-w-full object-center object-cover">
                            </div>
                            <div class="swiper-slide w-[360px] h-[271px] md:h-[316px] md:w-[346.5px] lg:w-[369px] lg:h-[300px] xl:w-[416.66px] xl:h-[325px] overflow-hidden rounded-[15px]">
                                <img src="<?php echo $image4_url; ?>" alt="<?php echo $image4_alt; ?>" class="h-full min-h-full min-w-full object-center object-cover">
                            </div>
                        </div>
                        <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 76 76">
                            <g id="Group_2016" data-name="Group 2016" transform="translate(-120.5 -3255.979)">
                                <path id="Path_77" data-name="Path 77" d="M38,0A38,38,0,1,1,0,38,38,38,0,0,1,38,0Z" transform="translate(120.5 3255.979)" fill="#162cf5"/>
                                <path id="arrow-sm-right-svgrepo-com" d="M16.525,23.739h28.8m0,0L28.589,7m18.2,15.4-18.2,18.078" transform="translate(126.644 3270.24)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="4"/>
                            </g>
                        </svg>
                        </div>
                        <div class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 76 76">
                            <g id="Group_2017" data-name="Group 2017" transform="translate(-39.5 -3255.979)">
                                <path id="Path_76" data-name="Path 76" d="M38,0A38,38,0,1,1,0,38,38,38,0,0,1,38,0Z" transform="translate(39.5 3255.979)" fill="#162cf5"/>
                                <path id="arrow-sm-right-svgrepo-com" d="M16.525,23.739h28.8m0,0L28.589,7m18.2,15.4-18.2,18.078" transform="translate(111.293 3317.718) rotate(180)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="4"/>
                            </g>
                        </svg>
                        </div>
                        <div class="swiper-scrollbar mt-[40px]"></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (get_sub_field('inhoud_alinea') === "calltoaction"): ?>
                <!-- TEKST -->  
                <div class="w-full md:w-[708px] lg:w-[1147px] xl:w-[1290px] mx-auto mt-[60px] relative z-[5]">
                    <div class="w-full max-w-[995px] bg-[#FEFAE8] rounded-[15px] flex justify-center">
                        <div class="w-[360px] md:w-[475px] lg:w-[675px] xl:w-[690px] my-[75px] md:my-[65px] lg:my-[85px]">
                            <?php if (get_sub_field('extra_titel')): ?>  
                            <h2 class="text-35 leading-44 md:text-40 md:leading-46 lg:text-48 lg:leading-50 xl:text-60 xl:leading-70 font-sora font-bold text-[#000000] text-center"><?php echo get_sub_field('extra_titel');?></h2>
                            <?php endif; ?>
                            <?php if (get_sub_field('extra_tekst_2')): ?>  
                            <p class="text-16 leading-30 lg:text-15 lg:leading-28 xl:text-16 xl:leading-30 font-normal text-[#0F0E0E] mt-[20px] md:mt-[30px] lg:mt-[20px] w-full text-center"><?php echo get_sub_field('extra_tekst_2');?></p>
                            <?php endif; ?>
                            <div class="w-full md:w-fit mx-auto flex flex-col md:flex-row md:items-center md:space-x-[50px]">
                                <?php if (get_sub_field('extra_button_1')): ?>  
                                <div class="mt-[30px] md:mt-[45px] lg:mt-[30px] w-full md:w-fit">
                                    <a href="<?php echo $link_url; ?>" class="skewed-button bg-[#162CF5] text-white" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                                </div>
                                <?php endif; ?>
                                <?php if (get_sub_field('extra_button_2')): ?>  
                                <div class="mt-[30px] md:mt-[45px] lg:mt-[30px] w-auto flex items-center">
                                    <div class="flex items-center h-full w-fit mx-auto">
                                        <a href="<?php echo $link2_url; ?>" class="link-underline text-15 leading-25 font-bold text-[#000000] block w-fit mx-auto" target="<?php echo $link2_target; ?>"><?php echo $link2_text; ?></a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            <?php endif; ?>
            <?php
            endwhile;
        else :
        endif;
        ?>
    </section>
    <!-- ARTIKEL FOOTER -->
    <section>
        <div class="mx-auto w-[230px] md:w-[270px] my-[100px]">
            <hr class="w-[153px] mx-auto border-[#707070]">
            <button id="share-button" class="w-fit mx-auto h-[31px] md:h-[37px] mt-[30px] block">
              <svg xmlns="http://www.w3.org/2000/svg" width="271" height="37" viewBox="0 0 271 37" class="h-full w-auto">
                    <g id="Group_2213" data-name="Group 2213" transform="translate(-585 -2278)">
                        <rect id="Rectangle_361" data-name="Rectangle 361" width="271" height="37" rx="18.5" transform="translate(585 2278)" fill="#edf5ff"/>
                        <text id="Deel_artikel" data-name="Deel artikel" transform="translate(639 2303)" font-size="16" font-family="Sora-Medium, Sora" font-weight="500"><tspan x="0" y="0">Deel artikel</tspan></text>
                        <path id="share-svgrepo-com-3" d="M18.692,4.619a3.619,3.619,0,0,1-6.415,2.3L8.136,8.987a3.648,3.648,0,0,1,0,1.718l4.142,2.071a3.606,3.606,0,1,1-.72,1.438L7.414,12.143a3.619,3.619,0,1,1,0-4.595l4.141-2.07a3.619,3.619,0,1,1,7.135-.859Zm-5.627,0a2.008,2.008,0,1,0,2.008-2.008A2.008,2.008,0,0,0,13.065,4.619Zm0,10.455a2.008,2.008,0,1,0,2.008-2.008A2.008,2.008,0,0,0,13.065,15.073ZM4.619,11.852A2.008,2.008,0,1,1,6.627,9.844,2.008,2.008,0,0,1,4.619,11.852Z" transform="translate(606 2286.705)" fill="#0f0f0f" fill-rule="evenodd"/>
                        <path id="facebook-svgrepo-com" d="M20.176,5,17.363,5a4.263,4.263,0,0,0-4.49,4.608v2.123H10.05v3.842h2.823l0,8.148h3.949l0-8.148H20.06l0-3.841H16.822v-1.8c0-.866.205-1.3,1.333-1.3h2.013L20.176,5Z" transform="translate(745.348 2281.053)"/>
                        <g id="instagram-svgrepo-com" transform="translate(816.666 2287.305)">
                        <path id="Path_141" data-name="Path 141" d="M11.037,16.074A5.037,5.037,0,1,0,6,11.037,5.037,5.037,0,0,0,11.037,16.074Zm0-1.679a3.358,3.358,0,1,0-3.358-3.358A3.358,3.358,0,0,0,11.037,14.395Z" transform="translate(-1.802 -1.803)" fill="#0f0f0f" fill-rule="evenodd"/>
                        <path id="Path_142" data-name="Path 142" d="M17.839,5a.839.839,0,1,0,.84.839A.839.839,0,0,0,17.839,5Z" transform="translate(-3.567 -1.643)" fill="#0f0f0f"/>
                        <path id="Path_143" data-name="Path 143" d="M1.549,3.75C1,4.828,1,6.238,1,9.059V11.41c0,2.821,0,4.231.549,5.309a5.037,5.037,0,0,0,2.2,2.2c1.077.549,2.488.549,5.309.549H11.41c2.821,0,4.231,0,5.309-.549a5.036,5.036,0,0,0,2.2-2.2c.549-1.077.549-2.488.549-5.309V9.059c0-2.821,0-4.231-.549-5.309a5.037,5.037,0,0,0-2.2-2.2C15.641,1,14.231,1,11.41,1H9.059C6.238,1,4.828,1,3.75,1.549A5.037,5.037,0,0,0,1.549,3.75ZM11.41,2.679H9.059c-1.438,0-2.416,0-3.172.063a3.624,3.624,0,0,0-1.375.3A3.358,3.358,0,0,0,3.045,4.512a3.624,3.624,0,0,0-.3,1.375c-.062.756-.063,1.733-.063,3.171V11.41c0,1.438,0,2.416.063,3.171a3.624,3.624,0,0,0,.3,1.375,3.358,3.358,0,0,0,1.468,1.467,3.623,3.623,0,0,0,1.375.3c.756.062,1.733.063,3.172.063H11.41c1.438,0,2.416,0,3.172-.063a3.623,3.623,0,0,0,1.375-.3,3.358,3.358,0,0,0,1.467-1.467,3.623,3.623,0,0,0,.3-1.375c.062-.756.063-1.733.063-3.171V9.059c0-1.438,0-2.416-.063-3.171a3.623,3.623,0,0,0-.3-1.375,3.358,3.358,0,0,0-1.467-1.467,3.624,3.624,0,0,0-1.375-.3C13.826,2.68,12.848,2.679,11.41,2.679Z" transform="translate(-0.999 -1.001)" fill="#0f0f0f" fill-rule="evenodd"/>
                        </g>
                        <g id="linkedin-2" transform="translate(783.147 2285.797)">
                        <path id="Path_30" data-name="Path 30" d="M2.408-.668a2.218,2.218,0,1,0-.056,4.424h.028A2.219,2.219,0,1,0,2.408-.668Zm0,0" transform="translate(0 0.669)"/>
                        <path id="Path_31" data-name="Path 31" d="M8.109,198.313h4.256v12.8H8.109Zm0,0" transform="translate(-7.858 -192.139)"/>
                        <path id="Path_32" data-name="Path 32" d="M229.306,188.625a5.332,5.332,0,0,0-3.835,2.157v-1.857h-4.256v12.8h4.256v-7.15a2.917,2.917,0,0,1,.14-1.039,2.33,2.33,0,0,1,2.184-1.556c1.54,0,2.156,1.174,2.156,2.9v6.85h4.255v-7.341C234.206,190.455,232.106,188.625,229.306,188.625Zm0,0" transform="translate(-214.353 -182.752)"/>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
    </section>
</div>

<?php endif; ?>
