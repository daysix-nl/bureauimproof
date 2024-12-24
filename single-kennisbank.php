<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */



 get_header('notitle'); ?>
<main class="share-close">
    <?php the_content(); ?>
    <div id="share-section" class="top-0 left-0 right-0 bottom-0 bg-[#0a1f1654] justify-center items-center z-[9999]">
        <div class="w-[360px] md:w-[686px] lg:w-[686px] xl:w-[715px] bg-white rounded-[15px]">
            <div class="w-full flex justify-end pt-[20px] pr-[20px]">
                <button id="share-close-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.999" height="13.999" viewBox="0 0 13.999 13.999">
                            <g id="close-svgrepo-com" transform="translate(-6.439 -6.439)">
                                <path id="Path_18" data-name="Path 18" d="M7.5,7.5,19.378,19.378" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"></path>
                                <path id="Path_19" data-name="Path 19" d="M19.378,7.5,7.5,19.378" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" fill-rule="evenodd"></path>
                            </g>
                        </svg>
                </button>
            </div>
            <div class="px-[20px] lg:px-[50px] pt-[30px] pb-[50px] text-editor">
                <h2>Deel artikel</h2>
                <p>Link:</p>
                <div class="flex">
                    <input class="w-[calc(100%-52px)] h-[52px] flex items-center bg-[#f7f7f7] px-[15px]" type="text" id="urlInput" value="<?php echo htmlspecialchars("https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); ?>" readonly>
                    <button class="flex justify-center items-center h-[52px] w-[52px] bg-[#f7f7f7]" onclick="copyToClipboard()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25.7" height="20" viewBox="0 0 25.7 20">
                            <path id="link-solid" d="M41.723,31.342A6.149,6.149,0,0,0,33.8,21.991l-.068.047a1.359,1.359,0,1,0,1.582,2.211l.068-.047A3.427,3.427,0,0,1,39.8,29.416L35.025,34.2a3.427,3.427,0,0,1-5.214-4.414l.047-.068a1.359,1.359,0,0,0-2.211-1.582L27.6,28.2a6.146,6.146,0,0,0,9.347,7.918Zm-22.1-1A6.149,6.149,0,0,0,27.549,39.7l.068-.047a1.359,1.359,0,1,0-1.582-2.211l-.068.047a3.429,3.429,0,0,1-4.414-5.218l4.771-4.776a3.429,3.429,0,0,1,5.214,4.418l-.047.068A1.359,1.359,0,1,0,33.7,33.562l.047-.068A6.147,6.147,0,0,0,24.4,25.572Z" transform="translate(-17.825 -20.845)"/>
                        </svg>
                    </button>
                </div>         
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
