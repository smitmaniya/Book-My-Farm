 <html>
    <head>
        <title>PAYMENT | BOOK MY FARM</title>
		
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="bootstarp.min.css">
		<link rel="stylesheet" href="pay.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
			
    </head>
     <body>

 <script src="https ://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
	 <div class="hero-wrap" style="background-image:linear-gradient(rgba(0 , 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('farm details photos/bgbg.jpg');height:100%;
        width: 100%;
        background-size: cover;
        background-position:center;
        background-attachment: fixed;
		margin-top:-20px;
        position: absolute;">
         <div class="padding">
             <div class="row">
                 <div class="container d-flex justify-content-center">
                     <div class="col-md-6 col-sm-8">
                         <div class="card">
                             <div class="card-header">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <span><b>CREDIT/DEBIT CARD PAYMENT</b></span>

                                     </div>
                                     <div class="col-md-6 text-right" style="margin-top: -5px;">
                                         <img src="farm details photos/visa.png">
                                         <img src="farm details photos/mastercard.png">
                                         <img src="farm details photos/amex.png">                    

                                     </div>

                                 </div>

                             </div>
								<form action="submit_payment.php" method="post">
                             <div class="card-body" style="height: 350px;">
                                <div class="form-group">
                                    <label for="cc-number" class="control-label"><b>CARD NUMBER</b></label>
                                    <input type="tel" id="cc-number" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="**** **** **** ****" name="card_num" maxlength="16"required>

                                </div>
                                <div class="row">
                                    <diV class="col-md-6">
                                        <div class="form-group">
                                            <label for="cc-exp" class="control-label"><b>CARD EXPIRY</b></label>
                                            <input type="tel" id="cc-exp" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="** / **" name="card_exp"required>
        

										</diV>

									</div>
									<div class="col-md-6">

										<div class="form-group">
											<label for="cc-cvc" class="control-label"><b>CARD CVV</b></label>
											<input type="tel" id="cc-cvc" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="***" maxlength="3" name="card_cvv">

										</div>


									</div>

								</div>
								<div class="form-group">
									<label for="numeric" class="control-label"><b>CARD HOLDER NAME</b></label>
									<input type="text" class="input-lg form-control" name="card_h_name" placeholder="Name Printed on Card" required>

								</div>

								<div class="form-group">
                          
								<input type="submit" value="MAKE PAYMENT" class="btn btn-success btn-lg form-control" name="submit_pay" >
							
								</div>
						
						</div>
						</form>

                 </div>

             </div>

         </div>
	</div>
	</div>
</div>
         <script type="text/javascript">
         $(function($){
             $('.cc-number').payment('formatCardNumber');
             $('.cc-exp').payment('formatCardExpiry');
             $('.cc-cvc').payment('formatCardCVC');
             $('form').submit(function(e){
                 e.preventDefault();
                 var cardType=$.payment.cardType($('.cc-number').val());
                 $('.cc-number').toggleInputError(!$payment.validateCardnumber($(.cc-number).val()));
                   $('.cc-exp').toggleInputError(!$payment.validateCardExpiry($(.cc-exp).payment('cardExpiryVal')));
                 $('.cc-cvc').toggleInputError(!$payment.validateCarCVC($('.cc-cvc' ).val(),cardType));


                 $('.validation').removeClass('text-danger text-success');
                 $('.validation').addClass($('.has-error').length ?'text-danger' :'text-success');

             });
  
         });

         </script>
        
    </body>  
</html>