<section class="divider">
      <div class="container">
        <div class="row pt-30">
          <div class="col-lg-4">
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-044-call-1"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Phone</h5>
                  <div class="content">
                    
                      <a href="tel:<?php echo $settings->TOLL_FREE_TIME; ?>"><?php echo $settings->TOLL_FREE_TIME; ?></a>
                      
                    </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-043-email-1"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Email</h5>
                  <div class="content"><a href="mailto:<?php echo $settings->EMAIL; ?>"><?php echo $settings->EMAIL; ?></a></div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate bg-white-f1 p-30 mb-30">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-025-world"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Address</h5>
                  <div class="content"><?php echo $settings->OFFICE_ADDRESS; ?></div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            
          </div>
          <div class="col-lg-8 ">
            <h2 class="mt-0 mb-0">For Enquiries</h2>
         
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="index/contact_submit" method="post" novalidate="novalidate">
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>Name <small>*</small></label>
                    <input name="name" class="form-control" type="text" placeholder="Enter Name" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>Email</label>
                    <input name="email" class="form-control required email" type="email" placeholder="Enter Email" >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>Subject <small>*</small></label>
                    <input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>Phone <small>*</small></label>
                    <input name="phone" class="form-control" type="text" placeholder="Enter Phone" required>
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label>Message <small>*</small></label>
                <textarea name="message" class="form-control required" rows="8" placeholder="Enter Message" required></textarea>
              </div>
              <div class="mb-3">
                <input  class="form-control" type="hidden" value="">
                <button type="submit" class="btn btn-theme-colored1 text-white text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-theme-colored2 text-white text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <script>
$('#contact_form').validate({
    rules: {
        name : "required",
       
        email: {
            required: true,
            // Specify that email should be validated
            // by the built-in "email" rule
            email: true
          },
          phone:"required",
          message: "required"
    },
    messages: {
        name: "Please enter your Name",
        email: "Please enter your Email",
        email: "Please enter a valid email address"
      },
      submitHandler: function(form) {
            contact_submit()
            // form.submit()
}
})
               
function contact_submit(){
    //   $('#appointment-form').submit(function(e){
    //     e.preventDefault();
        
        var actionURL = 'index/contact_submit';
       var data = $('#contact_form').serialize();

        $.ajax({
              url:actionURL,
              method:"POST",
              data:data,
              success:function(data){
               console.log(data)
                      if(data == 1 || data == '1'){
                    $('#contact_form').html('<h4 style="">Form submission successful. Our support team will get in touch with you please be patience.</h4>')
                      }else if(data == 0 || data == '0'){
                        $('#contact_form').html('<h4 style="">Sorry Form submission failed. Please try again.</h4>')
                      }
                          }
                        });
                        // });
    }
    
      </script>