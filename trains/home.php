<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">

  </head>
  <body>
    <script src=
    "https://smtpjs.com/v3/smtp.js">
    </script>
   <script type="text/javascript">
    function sendEmail() {
      event.preventDefault();
      var email = document.getElementById("email-personal").value;
      alert(email);
      Email.send({
        Host: "smtp.gmail.com",
        Username: "chowdary.hemanth.tummala@gmail.com",
        Password: "KWERTy@45",
        To: email,
        From: "chowdary.hemanth.tummala@gmail.com",
        Subject: "Sending Email using javascript",
        Body: "you are signed up for news letter",
      })
        .then(function (message) {
          alert("mail sent successfully")
        });
    }
  </script>
    </script>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">TrainSeva</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="booking.html" class="nav-item nav-link">Book Tickets</a>
                        <a href="schedule.php" class="nav-item nav-link">Schedule</a>
                        <a href="ticketdetail.php" class="nav-item nav-link">View tickets</a>
                        <a href="traindetail.php" class="nav-item nav-link">Search For trains</a>
                        <a href="pnr.php" class="nav-item nav-link">Pnr status</a>
                    </div>
                </div>
            </div>
        </nav>
        <br><br><br><br>
        <div class="container-fluid par-div">
            <div class="mid-div">
                <div class="row text-center">
                    <div class="col"><h5>Services</h5></div>
                </div>
                <hr>
                <br>
                <div class="row">
                    <div class="col text-center">
                        <a href="booking.html"><button class="btn btn-primary">Book Tickets</button></a>
                    </div>
                </div>
                
                <br>
                <div class="row">
                    <div class="col text-center">
                        <a href="schedule.php"><button class="btn btn-primary">Schedule</button></a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col text-center">
                        <a href="traindetail.php"><button class="btn btn-primary">Search For Trains</button></a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col text-center">
                        <a href=""><button class="btn btn-primary">News</button></a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/IRCTCofficial/" role="button"
          ><i class="bi bi-facebook"></i></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/IRCTCofficial?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" role="button"
          ><i class="bi bi-twitter"></i></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/search?q=irctc&rlz=1C1RXQR_enIN932IN932&sxsrf=ALiCzsYVGGhIESWhPZGqdqtVZ5yX5SIjkQ%3A1666085355346&ei=63FOY4rEFJieseMP1eiS-As&ved=0ahUKEwjK5ZTOu-n6AhUYT2wGHVW0BL8Q4dUDCA8&uact=5&oq=irctc&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIECCMQJzIECCMQJzIECCMQJzIRCC4QgAQQsQMQgwEQxwEQ0QMyBAgAEEMyBAgAEEMyBQgAEIAEMggIABCABBCxAzIECAAQQzIFCAAQgAQ6CggAEEcQ1gQQsAM6BwgAELADEEM6DQguEMcBENEDELADEEM6DQgAEOQCENYEELADGAE6EgguEMcBENEDEMgDELADEEMYAjoKCAAQgAQQhwIQFDoFCAAQhgM6FgguEIAEEIcCELEDEIMBEMcBENEDEBQ6CwgAEIAEELEDEIMBSgQITRgBSgQIQRgASgQIRhgBUIEDWNkLYLUOaAFwAXgAgAGwAogB9QqSAQcwLjcuMC4xmAEAoAEByAERwAEB2gEGCAEQARgJ2gEGCAIQARgI&sclient=gws-wiz-serp" role="button"
          ><i class="bi bi-google"></i></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/irctc.official/?hl=en" role="button"
          ><i class="bi bi-instagram"></i></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="bi bi-linkedin"></i></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="bi bi-github"></i></i
        ></a>
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Sign up for our news letter</strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="email-personal" class="form-control" />
                <label class="form-label" for="form5Example21">Email address</label>
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" onclick="sendEmail()" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
      <section class="mb-4">
        <p>
            Have you not found the right one?
            Find a service suitable for you here.
        </p>
        <p>Train Seva is the one stop destination for all train services</p>
      </section>
      
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">Trainseva.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    </div>
    <?php
        // the message
        function newsletter($mail){
          // $msg = "First line of text\nSecond line of text";
          // $msg = wordwrap($msg,70);
          // mail($mail,"My subject",$msg);
          echo "working";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>