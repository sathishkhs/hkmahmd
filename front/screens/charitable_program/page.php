<style>
li{
  margin-left: 20px;
}
h5{
  margin-bottom: 25px;
    margin-top: 0;
    font-size: 1.1rem;
    line-height: 1.1;
    position: relative;
    margin-bottom: 35px;
    padding-bottom: 10px;
}
h5:after {
    bottom: -10px;
    content: "";
    height: 4px;
    left: 0;
    position: absolute;
    width: 65px;
    background: #555;
}
.iti--separate-dial-code .iti__selected-flag{
      background: none;
  }
  .iti__selected-flag{
      height: 60%;
  }
  .input-container input {
    border: none;
    box-sizing: border-box;
    outline: 0;
    padding: .75rem;
    position: relative;
    width: 100%;
}

input[type="date"]::-webkit-calendar-picker-indicator {
    background: transparent;
    bottom: 0;
    color: transparent;
    cursor: pointer;
    height: auto;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: auto;
}

</style>



<div id="preloader" >
  <div class="preloader-wrapper">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="shadow"></div>
    <div class="shadow"></div>
    <div class="shadow"></div>
    <span>Loading</span>
  </div>
  <div id="overlayer"></div>
</div>
<div class="container my-5">
  <div class="row">
    <div class="col-sm-12">

      <?php echo $page_items->text_below_banner;?>
    </div>
  </div>
    <div class="row">
        <div class="col-md-12 col-lg-6">
          <?php echo $page_items->left_description; ?>
        </div>

<div class="col-md-12 col-lg-6 bg-light order-first  order-lg-2 mb-3">


<div class="container pt-0">
<div class="container">
        <div class="modal-body">
          <section>
            <div class="section-content">
              <div class="container pt-1">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  
                  <h6 class="mt-0 line-bottom mb-3"><?php echo $page_items->form_heading; ?></h6>
                  <p>Avail tax exemption under Section 80G</p>

                  <!-- ===== START: Paypal Both Onetime/Recurring Form ===== -->
                  <form id="popup_paypal_donate_form_onetime_recurring" action="<?php echo $page_items->page_slug; ?>"  method="POST" enctype="multipart/form-data">
                    <?php if($this->config->item('payment_mode') == 'test'){ ?>
                    <input name="table_name" type="hidden" value="test_payments">
                    <?php } else{ ?>
                      <input name="table_name" type="hidden" value="payments">
                      <?php } ?>
                      <input type="hidden" name="donation_type" value="<?php if($payment_type == 0) {echo 'Charitable Programs';}elseif($payment_type == 1){ echo 'Nitya Sevas';}else{ echo 'festival';}; ; ?>">
                      <input name="seva_name" type="hidden" value="<?php echo $page_items->page_slug; ?>">
                      <input name="tally_head" type="hidden" value="<?php echo $page_items->tally_head; ?>">
                      <input name="seva_code" type="hidden" value="<?php echo $page_items->seva_code; ?>">
                      <input type="hidden" name="slug" value="<?php echo $page_items->page_slug; ?>">
                      <input type="hidden" name="festival" value="<?php echo $page_items->title; ?>">
                      <input type="hidden" name="currency" value="INR">
                      
                  <div class="row">
                     
                      <div class="form-group col-md-12 d-flex flex-wrap  p-0 border-0 mb-2">
                          <div class="form-check d-flex mt-2">
                              <input class="form-check-input ml-10" type="radio" checked id="one" name="radioamount" value="<?php echo $page_items->amount_1;?>" >
                              <label class="form-check-label pl-10" for="one"> ₹<?php echo $page_items->amount_1 .  (!empty($page_items->amount_1_label) ? '&nbsp;-&nbsp;'. $page_items->amount_1_label  : '');?></label> &nbsp;
                          </div>
                          <div class="form-check d-flex mt-2">
                              <input class="form-check-input ml-10" type="radio" id="two" name="radioamount" value="<?php echo $page_items->amount_2; ?>" >
                              <label class="form-check-label pl-10" for="two"> ₹<?php echo $page_items->amount_2 .  (!empty($page_items->amount_2_label) ? '&nbsp;-&nbsp;'. $page_items->amount_2_label  : ''); ?></label> &nbsp;
                          </div>
                          <div class="form-check d-flex mt-2">
                              <input class="form-check-input ml-10" type="radio" id="three" name="radioamount" value="<?php echo $page_items->amount_3; ?>" >
                              <label class="form-check-label pl-10" for="three"> ₹<?php echo $page_items->amount_3 .  (!empty($page_items->amount_3_label) ? '&nbsp;-&nbsp;'. $page_items->amount_3_label  : ''); ?></label> &nbsp;
                          </div>
                          <div class="form-check d-flex mt-2">
                              <input class="form-check-input ml-10" type="radio" id="five" name="radioamount" value="<?php echo $page_items->amount_4; ?>">
                              <label class="form-check-label pl-10" for="five"> ₹<?php echo $page_items->amount_4 .  (!empty($page_items->amount_4_label) ? '&nbsp;-&nbsp;'. $page_items->amount_4_label  : ''); ?></label> &nbsp;
                          </div>
                          <div class="form-check d-flex mt-2">
                              <input class="form-check-input ml-10" type="radio" id="seven" name="radioamount" value="<?php echo $page_items->amount_5; ?>" >
                              <label class="form-check-label pl-10" for="seven"> ₹<?php echo $page_items->amount_5 .  (!empty($page_items->amount_5_label) ? '&nbsp;-&nbsp;'. $page_items->amount_5_label  : ''); ?></label> &nbsp;
                          </div>

                          <div class="form-check d-flex mt-2">
                              <input class="form-check-input ml-10" type="radio" id="other" name="radioamount" >
                              <label class="form-check-label pl-10" for="other"> Choice amount</label> &nbsp;
                              
                          </div>


                      </div>
                     
                  </div>

                  <div class="row">
                    <div class="form-group col-sm-12 col-md-12">
                      <label id="custom-text">Selected Amount<sup class="text-danger">*</sup></label>
                      <input id="amount" type="text" name="amount" value="<?php echo $page_items->amount_1; ?>" class="form-control" onkeypress="checkother()">
                    </div>
                    <div class="form-group col-md-12">
                      <label id="">Seva Date</label>
                      <input id="seva_date" type="date" name="seva_date" value="" class="form-control" min="<?php echo date('Y-m-d'); ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label>Full Name<sup class="text-danger">*</sup></label>
                      <input id="full_name" type="text" name="full_name" value="" class="form-control">
                      <?php echo form_error('full_name', '<label class="error">', '</label>'); ?>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Phone Number<sup class="text-danger">*</sup></label>
                      <input type="hidden" id="country_code" name="country_code" value="+91">
                      <input id="phone_number" type="text" name="phone_number" value="" class="form-control">
                      <?php echo form_error('phone_number', '<label class="error">', '</label>'); ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label>Email Id<sup class="text-danger">*</sup></label>
                      <input id="email" type="email" name="email" value="" class="form-control">
                      <?php echo form_error('email', '<label class="error">', '</label>'); ?>
                    </div>
                    <div class="form-group col-md-12">
                    <label>Pan Number <small style="font-size: 11px">(Optional for 80G certificate)</small></label>
                      <input id="pan_number" type="text" name="pan_number"  onkeyup="this.value = this.value.toUpperCase()" value="" class="form-control">
                      <?php echo form_error('pan_number', '<label class="error">', '</label>'); ?>
                    </div>
                  </div>

                  <div class="row">
                      <div class="col-sm-12">
                          <label for="80G-0" class="thm-color1"> 
                              <input name="address_check" access="false" id="address_check" value="yes" type="checkbox">
                              I would like to receive Goodies/Best Wishes to my address

                          </label>
                          <div class="checkbox-group">
                              <div class="formbuilder-checkbox">

                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row address_div">
                    <input name="address" type="hidden" value="">
                    <input name="city" type="hidden" value="">
                    <input name="pincode" type="hidden" value="0">

                  </div>


                  <div class="col-sm-4 mx-auto">
                    <div class="form-group">
                      <button type="submit" class="btn btn-flat btn-dark btn-theme-colored2 mt-10 pl-30 pr-30" data-loading-text="Please wait...">Donate Now</button>
                    </div>
                  </div>
                  <div class="col-sm-8 mx-auto text-center">
                         <!-- <small> Avail tax exemption under Section 80G</small> -->
                      </div>
                </form>


                </div>
              </div>
              </div>
            </div>
        </div>
        </div>
</div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php echo $page_items->bottom_description; ?>
        </div>
    </div>
</div>
<section>

    <div class="container pt-2  pb-0 mt-30">
      <div class="section-content">
        <div class="row ">

          <?php if (!empty($page_items->video_link_1) || !empty($page_items->video_link_2) || !empty($page_items->video_link_3)) { ?>
            <div class="tm-sc-section-title section-title mb-0 mb-md-50">
              <div class="title-wrapper mb-0 text-center">
                <h6 class="subtitle line-shape-bottom text-theme-colored1 line-shape-center ">Videos</h6>

              </div>
            </div>
          <?php } ?>
          <?php if(!empty($page_items->video_link_1)){ ?>
                <div class="col-md-4 mt-3">
                <iframe width="426" height="240" src="https://www.youtube.com/embed/<?php echo $page_items->video_link_1; ?>" title="Hare Krishna Mandir" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <?php } ?>
                <?php if(!empty($page_items->video_link_2)){ ?>
                <div class="col-md-4 mt-3">
                <iframe width="426" height="240" src="https://www.youtube.com/embed/<?php echo $page_items->video_link_2; ?>" title="Hare Krishna Mandir" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <?php } ?>
                <?php if(!empty($page_items->video_link_3)){ ?>
                <div class="col-md-4 mt-3">
                <iframe width="426" height="240" src="https://www.youtube.com/embed/<?php echo $page_items->video_link_3; ?>" title="Hare Krishna Mandir" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <?php } ?>



        </div>
      </div>
    </div>
  </section>



<style>
  .razorpay-payment-button{
    visibility: hidden;
  }
</style>

<button id="rzp-button1" class="d-none"></button>
<div id="failed-form"></div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>





    <script type="text/javascript">


$(window).load(function() {
	$("#preloader").delay(2000).fadeOut("slow");
  // $("#overlayer").delay(2000).fadeOut("slow");
})
       
       $('#address_check').on('click', function() {
        if ($(this).is(":checked")) {
         var html = '<div class="form-group col-md-12">'
             html +=  '<label>Address<sup class="text-danger">*</sup></label>'
             html +=   '<input id="address" type="text" name="address" value="" class="form-control" required>'
             html +=   '</div>'
           
             html +=   '<div class="form-group col-md-6">'
             html +=   '<label>City<sup class="text-danger">*</sup></label>'
             html +=   '<input id="city" type="text" name="city" value="" class="form-control">'
             html +=   '</div>'
             html +=   '<div class="form-group col-md-6">'
              html +=   '<label>PinCode<sup class="text-danger">*</sup></label>'
              html +=   '<input id="pincode" type="text" name="pincode" value="" class="form-control">'
              html +=   '</div>'
            
              $('.address_div').html(html)
          } else {
              html = '<input id="address" type="hidden" name="address" value="---" class="form-control"><input type="hidden" name="pincode" value=""><input name="city" type="hidden" value="">'
              $('.address_div').html(html) 
          }
            })

              var input = document.querySelector("#phone_number");
            window.intlTelInput(input,({
              // options here
              initialCountry: "in",
              autoPlaceholder: "polite",
              separateDialCode: true,
            }));
              var phone = $('#phone_number').val();
              if(phone == ''){
              var phone_number = '';
              }else{
                var phone_number = phone
              }
            $(document).ready(function() {
                // $('#phone_number').val("+91");
                $('.iti__flag-container').click(function() { 
                  var countryCode = $('.iti__selected-flag').attr('title');
                  var countryCode = countryCode.replace(/[^0-9]/g,'')
                  // $('#phone_number').val("");
                  // $('#phone_number').val("+"+countryCode+" "+ phone_number);
                  $('#country_code').val("+"+countryCode);
              });
            });

          
              var selection;
              $(document).ready(function() {

              
                  $('#one').on('click', function() {
                      // $('#one, #two, #three, #five, #seven, #thousand, #fifteen, #twenty ').removeAttr('checked');
                      $('#custom-text').html('Selected Amount');
                      $('#one').prop('checked','checked');
                      $('#amount').val($(this).val());
                    

                  })
                  $('#two').on('click', function() {
                      // $('#one, #two, #three, #five, #seven, #thousand, #fifteen, #twenty,#other').removeAttr('ckecked');
                      $('#custom-text').html('Selected Amount');
                      $('#two').prop('checked','checked');
                      $('#amount').val($(this).val());
                  })
                  $('#three').on('click', function() {
                      // $('#one, #two, #three, #five, #seven, #thousand, #fifteen, #twenty,#other').removeAttr('checked');
                      $('#custom-text').html('Selected Amount');
                      $('#three').prop('checked','checked');
                      $('#amount').val($(this).val());
                  })
                  $('#five').on('click', function() {
                      // $('#one, #two, #three, #five, #seven, #thousand, #fifteen, #twenty,#other').removeAttr('checked');
                      $('#custom-text').html('Selected Amount');
                      $('#five').prop('checked','checked');
                      $('#amount').val($(this).val());
                  })

                  $('#seven').on('click', function() {
                      // $('#one, #two, #three, #five, #seven, #thousand, #fifteen, #twenty,#other').removeAttr('checked');
                      $('#custom-text').html('Selected Amount');
                      $('#seven').prop('checked','checked');
                      $('#amount').val($(this).val());
                  })

                  $('#other').on('click', function() {
                      // var amount = $('#other').val()
                      // $('#one, #two, #three, #five, #seven, #thousand, #fifteen, #twenty,#other').removeAttr('checked');
                      $('#custom-text').html('Enter Choice Amount');
                      $('#other').prop('checked','checked');
                      $('#amount').focus();
                      $('#amount').val('');


                  })
                  $('#amount').on('keydown',function(){
                    
                      $('#other').prop('checked','checked')
                  })
                


                  $("#popup_paypal_donate_form_onetime_recurring").validate({
                      // Specify validation rules

                      rules: {
                          // The key name on the left side is the name attribute
                          // of an input field. Validation rules are defined
                          // on the right side
                          full_name: {
                              required: true,
                              lettersonly:true
                          },
                          email: {
                              required: true,
                              // Specify that email should be validated
                              // by the built-in "email" rule
                              email: true
                          },
                          phone_number: {
                              required: true,
                              minlength: 10,
                              maxlength: 10,
                              integer: true
                          },
                          pan_number: {
                              // required: true,
                              pannumber: true
                          },
                          amount: {
                              required: true,
                              number: true
                          },
                          city :{
                              required:true,
                              maxlength: 20,
                              lettersonly:true
                          },
                          address :{
                              required:true,             
                          },
                          pincode :{
                              required:true,
                              minlength: 6,
                              maxlength: 6,
                              integer : true
                              
                          },
                        
                      },
                      // Specify validation error messages
                      messages: {
                          full_name: {
                              required :'Full name is required',
                              maxlength : "Maximum 30 Characters allowed",
                              lettersonly :"Invalid Characters! Only Alphabets allowed"
                          },
                          phone_number: {
                              required: "Phone number is required",
                              minlength: "Mobile number require minimum 10 digits",
                              maxlength: "Mobile number require maximum 10 digits",
                              integer : "Numbers only allowed"
                          },
                          email: {
                              required: 'Email is required',
                              email: 'Enter valid email address'
                          },
                          pan_number: {
                              required :'Pan number is required',
                              maxlength : 'Maximum 10 characters allowed',
                              pannumber : "Invalid Pan card number!"
                          },
                          city: {
                              required :'City is required',
                              maxlength : "Maximum 20 Characters allowed",
                              lettersonly :"Invalid Characters! Only Alphabets allowed"
                          },
                          address: {
                              required :'Address is required',
                          },
                          pincode: {
                              required :'Pincode is required',
                              maxlength : "Maximum 6 Characters allowed",
                              integer : "Only Numbers allowed"
                          },
                          amount: "Please enter amount",
                          
                        
                      },
                  
                      // Make sure the form is submitted to the destination defined
                      // in the "action" attribute of the form when valid
                      submitHandler: function(form) {
                        $("#preloader").fadeIn("slow");
                          form.submit();
                      }
                  });

                })


              $('.customer-logos').slick({
                  slidesToShow: 4,
                  slidesToScroll: 1,
                  autoplay: true,
                  autoplaySpeed: 1500,
                  arrows: false,
                  dots: false,
                  pauseOnHover: false,
                  responsive: [{
                      breakpoint: 768,
                      settings: {
                          slidesToShow: 4
                      }
                  }, {
                      breakpoint: 520,
                      settings: {
                          slidesToShow: 2
                      }
                  }]
              });

    </script>



    <button id="rzp-button1" class="d-none"></button>
<div id="failed-form"></div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>


<script>
   <?php if(!empty($order_data) && !empty($key) && !empty($insert_id) ){   ?>
  
 
    var options = {
        "key": "<?php echo $key ?>",
        "name": "<?php echo $this->config->item('company_name') ?>",
        "description": "<?php echo $this->config->item('description') ?>",
        "image": "<?php echo $image; ?>",
        "amount": "<?php echo $order_data['amount']*100; ?>",
        "currency": "<?php echo $order_data['currency']; ?>",
        "email": "<?php echo $email; ?>",
        "contact": "<?php echo $phone_number; ?>",
        "retry" : {
          'enabled':false,
        },
        "order_id": "<?php echo $order_id; ?>",
        "callback_url": "<?php echo $callback_url; ?>",
        "notes": <?php echo json_encode($order_data['notes']) ?>,
        "prefill": {
            "name": "<?php echo $order_data['notes']['name']; ?>",
            "email": "<?php echo $order_data['notes']['email']; ?>",
            "contact": "<?php echo $order_data['notes']['phone_number']; ?>",
            "pan_number": "<?php echo $order_data['notes']['pan_number']; ?>",
            "address": "<?php echo $order_data['notes']['address']; ?>",
        },
        "theme": {
            "color": "#3399cc",
        },
        "modal": {
            "escape" : false, 
            ondismiss: function(){ 
            $('#failed-form').html('<form id="failed_form_submit" action="seva_page/donation_failed/<?php echo $order_data['notes']['insert_id']; ?>" method="post" style="display:none"><input type="hidden" name="status" value="Form Closed"><input type="hidden" name="error_code" value=""><input type="hidden" name="error_description" value=""><input type="hidden" name="error_source" value=""><input type="hidden" name="error_reason" value=""><input type="hidden" name="razorpay_order_id" value=""></form>');
            $('#failed_form_submit').submit();
            } 
        },
        config: {
        display: {
        blocks: {
            banks: {
            name: 'All payment methods',
            instruments: [
                {
                method: 'upi'
                },
                {
                method: 'card'
                },
                {
                    method: 'wallet'
                },
                {
                    method: 'netbanking'
                }
            ],
            },
        },
      sequence: ['block.banks'],
      preferences: {
        show_default_blocks: false,
      },
    },
  },
                               
    };

            
    <?php  
          $this->festivals_model->data['status'] = 'created';
          $this->festivals_model->primary_key = array('id' => $order_data['notes']['insert_id']);
          $this->festivals_model->update($this->config->item('table_name')); ?>
            
    var rzp1 = new Razorpay(options);
    // console.log(rzp1);
    $('#rzp-button1').click();
    rzp1.open();
   
    <?php } ?>
</script>
