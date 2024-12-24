<a href="<?php the_permalink();?>" class="hoover-img post-item post-featured md:col-span-2 h-[383px] md:h-[309px] lg:h-[367px] xl:h-[413px] md:rounded-[15px] bg-[#F2F2F2] overflow-hidden relative">
    <div class="absolute left-[23px] lg:left-[28px] xl:left-[33px] bottom-[70px] right-[25px] z-[5]">
        <div class="w-[347px] mx-auto md:w-full flex justify-between">
            <div class="headline-container w-[360px]">
                <h3 class="headline headline--themovement headline--large"><?php the_title();?></h3>
            </div>
        </div>
    </div>
    <div class="absolute left-[23px] lg:left-[28px] xl:left-[33px] bottom-[20px] right-[25px] z-[5] h-[45px] flex items-center md:items-start justify-between w-[363px] mx-auto md:w-[unset]">
        <p class="text-12 leading-30 font-medium text-white"><?php the_time('j F Y'); ?></p>
        <div class="flex items-center justify-between w-[140px]">
            <p class="link-underline text-15 leading-25 font-bold text-[#fff] w-fit">Lees meer</p>
            <div class="h-[45px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" class="h-full w-auto">
                    <g id="Group_2214" data-name="Group 2214" transform="translate(-852.338 -933)">
                        <path id="Path_138" data-name="Path 138" d="M22.5,0A22.5,22.5,0,1,1,0,22.5,22.5,22.5,0,0,1,22.5,0Z" transform="translate(852.338 933)" fill="#fff"/>
                        <path id="arrow-up-right-svgrepo-com" d="M7,17.611,17.611,7m0,0H8.061m9.55,0v9.55" transform="translate(862.533 943.195)" fill="none" stroke="#162cf5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </g>
                </svg>

            </div>
        </div>
    </div>
    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="h-full min-h-full min-w-full object-center object-cover">
</a>