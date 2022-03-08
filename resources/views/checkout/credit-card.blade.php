<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stripe Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset("css/app.css")}}">

  <style>
      .msg-price-chackout{
        font-size: 30px;
        width: 100%;
        text-align: center;
        font-weight: 600;
        color: #fff;
          
      }
      .btn_pay{
        cursor: pointer;
    background: #5b22cd;
    border: none;
      }
      .form-get-data {
    width: 800px;
    margin: 20px auto;
    max-width: 100%;
    padding: 10px;
    border-radius: 10px;
    
}
.cotact-page {
    max-width: 100%;
    display: flex;
    justify-content: space-around;
    flex-direction: column;
    align-items: center;
    padding: 50px 0;
    background-color: #8232f3;
}
.finds{
 width: 95%
 
}
.finds input{
    width: 100%;
    border-radius: 4px;
    padding: 10px;
    outline: none;
    border: none;
}
.finds label{
    color: #fff;
    font-size: 20px;
    font-weight: 500;
}
  </style>
</head>
<body>
    @php
        $stripe_key = 'pk_test_51KZVDtJZ0be0eOz5m1Mfi9UZZP9xOLIyN3BwRCcbKth3QGtQXtuWCGvmeAQcYHdxetn5gqYpqSiNCOEn1y6gP7VZ00dLT3YTZ9';
    @endphp
    <div class="container home" style="margin-top:10%;margin-bottom:10%">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="">
                    
                </div>
                <div class="card ">
                    <div class="form-pri">
                        <form action="{{route('checkout.credit-card')}}"  method="post" class="form-contact" id="payment-form">
                            @csrf                    



                            <section class="cotact-page">

                                
                                    
                                    <h3>
                                        <p class="msg-price-chackout"> سوف تدفع  ${{$price}}</p>
                                    </h3>
                                    <div class="finds">
                                        <div class=" finds">
                                            <label for="">الاسم</label>
                                            <input type="text" name="name" placeholder=" الاسم؟  ">
                                        </div>
                                        <div class=" finds">
                                            <label for="">الهاتف</label>
                                            <input type="text" name="phone" placeholder=" رقم الهاتف">
                                        </div>
                                    </div>
                                    <div class="finds">
                                        <div class="finds">
                                            <label for="">البريد الالكروني</label>
                                            <input type="email" name="email" placeholder=" ضع بريدك اللكتروني ">
                                        </div>
                                        <div class="finds">
                                            <label for="">العنوان</label>
                                            <input type="text" name="addres" placeholder="العنوان">
                                        </div>
                                    </div>
                    
                                
                            </section>
                            <!-- End cocate us  -->
                        




                            <div class="form-group">
                                <div class="card-header">
                                    <label for="card-element">
                                        ادخل بيانت البطاقة 
                                    </label>
                                </div>
                                <div class="card-body">
                                    <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                    </div>
                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                    <input type="hidden" name="plan" value="" />
                                </div>
                            </div>
                            
                            <div class="card-footer">
                              <button
                              id="card-button"
                              class="btn btn-dark btn_pay"
                              type="submit"
                              data-secret="{{ $intent }}"
                            > دفع </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)

        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
    
        const stripe = Stripe('{{ $stripe_key }}', { locale: 'en' }); // Create a Stripe client.
        const elements = stripe.elements(); // Create an instance of Elements.
        const cardElement = elements.create('card', { style: style }); // Create an instance of the card Element.
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
    
        cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.
    
        // Handle real-time validation errors from the card Element.
        cardElement.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
    
        // Handle form submission.
        var form = document.getElementById('payment-form');
    
        form.addEventListener('submit', function(event) {
            event.preventDefault();
    
        stripe.handleCardPayment(clientSecret, cardElement, {
                payment_method_data: {
                    //billing_details: { name: cardHolderName.value }
                }
            })
            .then(function(result) {
                console.log(result);
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    console.log(result);
                    form.submit();
                }
            });
        });
    </script>
</body>
</html>
