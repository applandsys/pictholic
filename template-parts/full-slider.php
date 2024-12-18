<div class="prs_main_slider_wrapper">
    <div id="rev_slider_41_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="food-carousel26" data-source="gallery" style="margin:0px auto;padding:0px;margin-top:0px;margin-bottom:0px;">
        <div class="prs_slider_overlay"></div>
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="rev_slider_41_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                <!-- SLIDE  -->
                <?php
                    // https://chatgpt.com/share/6763069b-1f30-800d-89fb-90eb446421b5
                    $tag_slug = 'slider';
                    $args = array(
                        'tag' => $tag_slug,
                        'posts_per_page' => -1, // Number of posts to fetch (-1 fetches all)
                    );
                     $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post();
                            // Get the post thumbnail URL
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                            ?>

                <li data-index="rs-145" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="The Healthy Bowl" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="<?php echo  $thumbnail_url;?>" alt="" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption FoodCarousel-CloseButton rev-btn  tp-resizeme" id="slide-145-layer-5" data-x="441" data-y="110" data-width="['auto']" data-height="['auto']" data-type="button" data-actions='[{"event":"click","action":"stoplayer","layer":"slide-145-layer-3","delay":""},{"event":"click","action":"stoplayer","layer":"slide-145-layer-5","delay":""},{"event":"click","action":"startlayer","layer":"slide-145-layer-1","delay":""}]' data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":800,"to":"o:1;","delay":"bytrigger","ease":"Power3.easeInOut"},{"delay":"bytrigger","speed":500,"to":"auto:auto;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgba(41,46,49,1);bw:1px 1px 1px 1px;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[14,14,14,14]" data-paddingright="[14,14,14,14]" data-paddingbottom="[14,14,14,14]" data-paddingleft="[16,16,16,16]" data-lasttriggerstate="reset" style="z-index: 7; white-space: nowrap;border-color:transparent;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><i class="fa-icon-remove"></i>
                    </div>
                </li>

                <?php
                endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
</div>