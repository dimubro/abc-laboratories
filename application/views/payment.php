<?php $this->load->view('inc/header'); ?>
<?php $this->load->view('inc/top_bar'); ?>
<style>
    /* Basic styling for demonstration */
    body {
        font-family: Arial, sans-serif;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"], input[type="number"], select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    .error {
        color: red;
        margin-top: 5px;
    }
</style>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="<?=base_url()?>assets/html/image/login.jpg"
              alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
          </div>
      <div class="col-sm-6 text-black">

        
        
        <div class="d-flex align-items-center px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          
            <div style="width: 500px">
            
            
            <h2>Payment Details</h2>
            <form id="paymentForm" method="post" action="<?=base_url()?>save-payment" onsubmit="return validateForm()">
                <input type="hidden" value="<?=$obj->AppoinmentId?>" name="form[AppoinmentId]">
                <label for="cardNumber">Card Number:</label>
                <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter card number" maxlength="16" pattern="\d*" title="Please enter only numbers">

                <label for="expiryDate">Expiry Date:</label>
                <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY">

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV" maxlength="4" pattern="\d*" title="Please enter only numbers">

                <!-- <input type="submit" value="Submit"> -->
                <button class="btn btn-info btn-lg btn-block w-100" type="submit">Pay now <?=number_format($obj->Price,2)?> </button>
            </form>


            
           
      </div>
      
    </div>
  </div>
</section>
<?php $this->load->view('inc/footer'); ?>

<script type="text/javascript">

function validateForm() {
    var cardNumber = document.getElementById("cardNumber").value;
    var expiryDate = document.getElementById("expiryDate").value;
    var cvv = document.getElementById("cvv").value;
    var error = false;
    var errorMessage = "";

    // Card number validation
    if (!isValidCardNumber(cardNumber)) {
        errorMessage += "Please enter a valid card number.\n";
        error = true;
    }

    // Expiry date validation
    if (!isValidExpiryDate(expiryDate)) {
        errorMessage += "Please enter a valid expiry date (MM/YY).\n";
        error = true;
    }

    // CVV validation
    if (!isValidCVV(cvv)) {
        errorMessage += "Please enter a valid CVV.\n";
        error = true;
    }

    // Display error message if any
    if (error) {
        alert(errorMessage);
        return false;
    }

    // Proceed with form submission
    return true;
}

function isValidCardNumber(cardNumber) {
    // Check if card number is exactly 16 digits
    return /^\d{16}$/.test(cardNumber);
}

function isValidExpiryDate(expiryDate) {
    // Validate expiry date format (MM/YY)
    var regex = /^(0[1-9]|1[0-2])\/\d{2}$/;
    return regex.test(expiryDate);
}

function isValidCVV(cvv) {
    // Check if CVV is exactly 3 or 4 digits
    return /^\d{3,4}$/.test(cvv);
}

</script>