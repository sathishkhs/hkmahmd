<style>
   .holder {
    margin:15px 0;
    display:flex;
    justify-content: center;
}
.holder a {
    font-size:16px;
    cursor:pointer;
    margin:0 5px;
    color:#333;
    padding:6px 12px;
}
.holder a:hover {
    background-color:#348f7a;  
    color:#fff;
}
.holder a.jp-previous {
    margin-right:15px;
}
.holder a.jp-next {
    margin-left:15px;
}
.holder a.jp-current,a.jp-current:hover {
    color:#efc94c;
    font-weight:bold;
}
.holder a.jp-disabled,a.jp-disabled:hover {
    color:#bbb;
}
.holder a.jp-current,a.jp-current:hover,.holder a.jp-disabled,a.jp-disabled:hover {
    cursor:default;
    background:none;
}
.holder span {
    margin: 0 5px;
}
.holder a.jp-current{
  background: #348f7a;

}
.holder a:hover{
  color:#fff!important;
}

ul li{
  margin-left: 20px;
}
  </style>



<section>

    <div class="container pt-0 pb-0 mt-30">
        <div class="section-content">
            <div class="row ">
            <div class="col-sm-12">
                    <div class="tm-sc-section-title section-title mb-0 mb-md-50">
                        <div class="title-wrapper mb-0 text-center">
                           
							<?php if (!empty($page_items->page_content)): ?>
								<?php echo $page_items->page_content; ?>
							<?php endif; ?>
                        </div>
                    </div>
                </div>

    

  <section>
      <div class="container pb-40 pt-10">

        
        <?php if(empty($gallery)){ ?>
          <div class="row">
            <div class="col-md-12">
            <div class="title-wrapper mb-1 text-center">
              <!-- <h6 class="subtitle line-shape-bottom line-shape-center text-theme-colored1">Gallery</h6> -->
              <!-- <h2 class="title mb-0">No Images Found</h2> -->
            </div>
            </div>
          </div>
          <?php }else{ ?>
      <div class="tm-sc-section-title section-title text-center mb-10 ">
          <div class="row justify-content-md-center">
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-6 col-xxl-5">
              <div class="title-wrapper mb-1">
                <h6 class="subtitle line-shape-bottom line-shape-center text-theme-colored1">Gallery</h6>
               
              </div>
            </div>
          </div>
        </div>

        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="tm-sc-gallery tm-sc-gallery-grid gallery-style1-basic">
              
                
                <!-- Isotope Gallery Grid -->
                <div id="gallery-holder-618422" class="isotope-layout grid-4 gutter-15 clearfix lightgallery-lightbox ">
                  <div class=" " id="itemContainer">
                <?php if(!empty($gallery)){ 
          foreach($gallery as $image){  ?>
        
                    <!-- Isotope Item Start -->
                    <div class="isotope-item <?php echo str_replace(' ','-', $this->db->where('category_id',$image->gallery_id)->get('gallery')->row()->gallery_name); ?>">
                      <div class="isotope-item-inner">
                        <div class="tm-gallery">
                          <div class="tm-gallery-inner">
                            <div class="thumb">
                              <a href="#">
                                <img width="572" height="348" src="<?php echo GALLERY_UPLOAD_PATH . $image->gallery_img_path; ?>" class="lazyload" alt="" />
                              </a>
                            </div>
                            <div class="tm-gallery-content-wrapper">
                              <div class="tm-gallery-content">
                                <div class="tm-gallery-content-inner">
                                  <div class="icons-holder-inner">
                                    <div class="styled-icons icon-dark icon-circled icon-theme-colored2">
                                      <a class="lightgallery-trigger styled-icons-item" data-exthumbimage="<?php echo GALLERY_UPLOAD_PATH . $image->gallery_img_path; ?>" data-src="<?php echo GALLERY_UPLOAD_PATH . $image->gallery_img_path; ?>" title="<?php echo $image->image_name; ?>" href="<?php echo GALLERY_UPLOAD_PATH . $image->gallery_img_path; ?>"><i class="fa fa-search-plus"></i></a>
                                      <!-- <a class="styled-icons-item" title="<?php echo $gallery->gallery_name; ?>" href="#"><i class="fa fa-link"></i></a> -->
                                    </div>
                                  </div>
                                  <div class="title-holder">
                                    <!-- <h5 class="title"><a href="#"><?php echo $image->image_name; ?></a></h5> -->
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Isotope Item End -->
                    <?php } } ?>
            </div>
          </div>
        </div>
      </div>
          </div>
        </div>
        <?php } ?>
      </div>
      
    </section>

                   
           
             
                <?php if(!empty($page_items->video_link_1) || !empty($page_items->video_link_2) || !empty($page_items->video_link_3)){ ?>              
                <div class="tm-sc-section-title section-title mb-0 mb-md-10">
                    <div class="title-wrapper mb-0 text-center">
                        <h6 class="subtitle line-shape-bottom text-theme-colored1  ">Videos</h6>

                    </div>
                </div>
                <?php } ?>
                <?php if(!empty($page_items->video_link_1)){ ?>
                <div class="col-md-4 mt-3">
                    <div class="play-video-style1 pt-30 mb-20">
                        <div class="video-box mr-30">
                            <img class="w-100 img-responsive" src="<?php echo 'uploads/video_cover/' . $page_items->video_cover_img_1; ?>" alt="Image">
                            <div class="video-button-inner">
                                <div class="play-button"><span class="play-icon"><i class="fa fa-play"></i></span></div>
                                <a class="hover-link" data-lightbox-gallery="youtube-video" href="<?php echo $page_items->video_link_1; ?>" title=""></a>
                            </div>
                        </div>

                    </div>
                </div>
                <?php } ?>
                <?php if(!empty($page_items->video_link_2)){ ?>
                <div class="col-md-4 mt-3">
                    <div class="play-video-style1 pt-30 mb-20">
                        <div class="video-box mr-30">
                            <img class="w-100 img-responsive" src="<?php echo 'uploads/video_cover/' . $page_items->video_cover_img_2; ?>" alt="Image">
                            <div class="video-button-inner">
                                <div class="play-button"><span class="play-icon"><i class="fa fa-play"></i></span></div>
                                <a class="hover-link" data-lightbox-gallery="youtube-video" href="<?php echo $page_items->video_link_2; ?>" title=""></a>
                            </div>
                        </div>

                    </div>
                </div>
                <?php } ?>
                <?php if(!empty($page_items->video_link_3)){ ?>
                <div class="col-md-4 mt-3">
                    <div class="play-video-style1 pt-30 mb-20">
                        <div class="video-box mr-30">
                            <img class="w-100 img-responsive" src="<?php echo 'uploads/video_cover/' . $page_items->video_cover_img_3; ?>" alt="Image">
                            <div class="video-button-inner">
                                <div class="play-button"><span class="play-icon"><i class="fa fa-play"></i></span></div>
                                <a class="hover-link" data-lightbox-gallery="youtube-video" href="<?php echo $page_items->video_link_3; ?>" title=""></a>
                            </div>
                        </div>

                    </div>
                </div>
                <?php } ?>
              


            </div>
        </div>
    </div>
</section>





 



 



<script>
    $('h1,h2,h3,h4,h5,h6').attr('class','subtitle  line-shape-bottom line-shape-center text-theme-colored1');
</script>