<a href="<?php the_permalink();?>" class="hoover-img post-item swiper-slide h-[390px] md:h-[453px] lg:h-[367px] xl:h-[413px] rounded-t-[15px] overflow-hidden bg-white w-[363px] mx-auto md:w-full">
<div class="w-full h-[218px] md:h-[281px] lg:h-[214px] xl:h-[240px] bg-[#F2F2F2] overflow-hidden">
    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="h-full min-h-full min-w-full object-center object-cover">
</div>
<div class="w-full h-[172px] lg:h-[153px] xl:h-[173px] border-[#E0E0E0] border-l-[1px] border-r-[1px] border-b-[1px] rounded-b-[15px]">
    <div class="px-[15px] lg:px-[20px] xl:px-[25px] pt-[18px]">
        <div class="h-[97px] lg:h-[79px] xl:h-[97px]">
             <p class="text-12 leading-22 font-medium text-[#AAAAAA]"><?php the_time('j F Y'); ?></p>
            <h4 class="text-16 leading-30 lg:text-15 lg:leading-26 xl:text-17 xl:leading-30 font-bold text-[#22244E] line-clamp-2"><?php the_title();?></h4>
        </div>
        <p class="link-underline text-15 leading-25 font-bold text-[#000000] w-fit">Lees meer</p>
    </div>
</div>
</a>