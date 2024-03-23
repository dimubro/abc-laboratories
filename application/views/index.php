<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/html/css/style.css">

    <style>
        .card2 {
            background-image: url("<?=base_url()?>assets/html/image/index.jpg");
            background-size: cover;
        }
    </style>

</head>
<body>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 my-5 g-4">
        <div class="col-lg-4 col-md-12">
          <div class="card card1 rounded-4 p-4">
            <div class="card-body p-0">
                <h4 class="card-title">Total tests</h4>
                <h1 class="">100</h1>
                
                
              </div>
              <div class="d-flex justify-content-between align-items-center ">
                <h4 class="card-text mb-0"><b>Create a Account</b></h4>
                <a href="<?=base_url()?>register" class="btn btn-light rounded-pill px-5 py-4">Register</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card card2 rounded-4">
                <!-- <img src="assets/images/index.jpg" class="card-img rounded-4" alt="..."> -->
                <div class="card-img-overlay">
                  
                </div>
              </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="card rounded-4 bg-info-subtle p-4">
            <div class="card-body p-0">
                <h4 class="card-title"><b>Book your appoinment</b></h4>
                <p class="card-text mb-5">Timely care with Virtual consultation
                    typically being scheduled.</p>
                </div>
                <a href="#" class="btn btn-light rounded-pill w-50 px-5 py-4 mt-5">Book now</a>
          </div>
        </div>
      
      </div>

</div>

    
</body>
</html>