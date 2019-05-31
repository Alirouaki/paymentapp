<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Stlyesheet Link -->
        <link rel="stylesheet" href="css/style.css">
        <title>Application de Payement</title>

        <!-- Boostrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

   <div class="container">
   <h2 class="my-4 text-center">Apprendre le PHP (90$)</h2>
    <form action="./charge.php" method="post" id="payment-form">
       <div class="form-row">
       <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Prénom">
       <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Nom">
       <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Adresse Email">
       <div id="card-element" class="form-control">
        <!-- A Stripe Element will be inserted here. -->
        </div>

      <!-- Used to display form errors. -->
      <div id="card-errors" role="alert"></div>
      </div>

      <button>Submit Payment</button>
     </form>
  </div>


     <script
     src="https://code.jquery.com/jquery-3.4.1.js"
     integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
     crossorigin="anonymous"></script>
     <script src="https://js.stripe.com/v3/"></script>
     <script src="js/charge.js"></script>
    </body>
    </html>