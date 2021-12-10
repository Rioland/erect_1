<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Erect1</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="" rel="stylesheet" />
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    ></script>
    <style>
      .padding {
        padding: 5rem !important;
      }

      .form-control:focus {
        box-shadow: 10px 0px 0px 0px #ffffff !important;
        border-color: #4ca746;
      }
    </style>
  </head>
  <body oncontextmenu="return false" class="snippet-body">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
    <div class="padding">
      <div class="row">
        <div class="container-fluid d-flex justify-content-center">
          <!-- <form id="cardplay"   > -->

          <div class="col-sm-8 col-md-6">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-6">
                    <span>CREDIT/DEBIT CARD PAYMENT</span>
                  </div>
                  <div class="col-md-6 text-right" style="margin-top: -5px">
                    <img
                      src="https://img.icons8.com/color/36/000000/visa.png"
                    />
                    <img
                      src="https://img.icons8.com/color/36/000000/mastercard.png"
                    />
                    <img
                      src="https://img.icons8.com/color/36/000000/amex.png"
                    />
                  </div>
                </div>
              </div>
              <form id="cardplay">
              <div class="card-body" style="height: 350px">
                <div class="form-group">
                  <label for="cc-number" class="control-label"
                    >CARD NUMBER</label
                  >
                  <input
                  name="card_number"
                    id="cc-number"
                    type="tel"
                    class="input-lg form-control cc-number"
                    autocomplete="cc-number"
                    placeholder="•••• •••• •••• ••••"
                    required
                  />
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cc-exp" class="control-label"
                        >CARD EXPIRY</label
                      >
                      <input
                      name="expire"
                        id="cc-exp"
                        type="tel"
                        class="input-lg form-control cc-exp"
                        autocomplete="cc-exp"
                        placeholder="•• / ••"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="cc-cvc" class="control-label">CARD CVC</label>
                      <input
                      name="ccv"
                        id="cc-cvc"
                        type="tel"
                        class="input-lg form-control cc-cvc"
                        autocomplete="off"
                        placeholder="••••"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="numeric" class="control-label"
                    >CARD HOLDER NAME</label
                  >
                  <input type="text" name="name" class="input-lg form-control" />
                </div>
                <div class="form-group">
                  <input
                    value="MAKE PAYMENT"
                    type="submit"
                    class="btn btn-success btn-lg form-control"
                    style="font-size: 0.8rem"
                  />
                </div>
              </div>
            </div>
          </div>

          </form>
          <script>
              $(document).ready(function () {
                  $("#cardplay").submit(function (e) { 
                      e.preventDefault();
                      let data=$(this).serialize();
                    //   alert(data);
                      $.ajax({
                          type: "post",
                          url: "auth",
                          data: {
                              cardData:data
                          },
                          dataType: "text",
                          success: function (response) {
                              alert(response)
                          }
                      });
                      
                  });
              });
          </script>
        </div>
      </div>
    </div>
    <script
      type="text/javascript"
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"
    ></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src=""></script>
    <script type="text/Javascript">
      $(function($) {
      $('[data-numeric]').payment('restrictNumeric');
      $('.cc-number').payment('formatCardNumber');
      $('.cc-exp').payment('formatCardExpiry');
      $('.cc-cvc').payment('formatCardCVC');
      $.fn.toggleInputError = function(erred) {
      this.parent('.form-group').toggleClass('has-error', erred);
      return this;
      };
      $('form').submit(function(e) {
      e.preventDefault();
      var cardType = $.payment.cardType($('.cc-number').val());
      $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
      $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
      $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
      $('.cc-brand').text(cardType);
      $('.validation').removeClass('text-danger text-success');
      $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
      });
      });
    </script>
  </body>
</html>
