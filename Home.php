<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Arogya</title>
<link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<?php  include('header.php');  ?>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1140-healthy-lifestyle-beliefs-behaviors.imgcache.revd7463bd9c48a6bcc0511d67c781a714f.jpg" width="1000" height="474" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       <h2>AROGYA</h2>
        <p>“Arogya is a state of complete physical, mental, and social well-being and not merely the absence of disease or infirmity.”</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/5b9ddbf82000002d00fe2003.jpeg" class="d-block w-100" width="1000" height="474" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="Suryanamaskae.php" style="color: white"><h2>SURYANAMSKAR</h2></a>
        <p> Surya Namaskar or Sun Salutation is a sequence of 12 powerful yoga poses. Besides being a great cardiovascular workout, Surya Namaskar is also known to have an immensely positive impact on the body and mind.</p></div>
    </div>
    <div class="carousel-item">
      <img src="images/Yoga-Weight-Loss-Feature-Image1.jpg" width="1000" height="474" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="Yoga.html" style="color: white"><h2>YOGA</h2></a>
        <p>“The methods and technologies of how to experience that which is beyond the physical is what is known as the science of Yoga.”</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="images/pranayam-620_620x350_51505909387.webp" width="1000" height="474" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="Pranayam.html" style="color: white"><h2>PRANAYAM</h2></a>
        <p>"Pranayama is control of Breath". "Prana" is Breath or vital energy in the body. On subtle levels prana represents the pranic energy responsible for life or life force, and "ayama" means control. So Pranayama is "Control of Breath".</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/pivot.jpeg" class="d-block w-100" width="1000" height="474" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="HomeWorkout.html" style="color: white"><H2>HOME WORKOUT</H2></a>
        <p>Home Workouts provides daily workout routines for all your main muscle groups. In just a few minutes a day, you can build muscles and keep fitness at home without having to go to the gym.</p></div>
    </div>

  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <br>
  <br>
  <br>
  <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading" align="center">Our Main Moto</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted" align="center">Exercising regularly, every day if possible, is the single most important thing you can do for your health. In the short term, exercise helps to control appetite, boost mood, and improve sleep. In the long term, it reduces the risk of heart disease, stroke, diabetes, dementia, depression, and many cancers. </p></div>
                        </div>
                    </li>

                </ul>
            </div>
        </section>
  <br>
  <br>
  <br>
 <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Feedback Form</h2>
                    <h5 class="section-subheading text-muted">We would love to here your thoughts ,suggestions,concerns or problem with anything so we can improve! </h5>
                </div>
              <br><hr style="font: weight 900;" class="bg-dark">
              <div class="row justify-content-center" id="contact" >
                <div class="col-6">
                  <form action="contact.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Your Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter Name">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" name="email" placeholder="Enter email">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone Number</label>
                      <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number ">
                    </div>
                    <div class="form-group">
                      <label for="example">Your Message </label>
                      <textarea class=" form-control" name="message" id="" cols="30" rows="10" placeholder="Enter the Message "></textarea></div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div></div>

            </div>
        </section>
        <?php include('footer.php');?>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
