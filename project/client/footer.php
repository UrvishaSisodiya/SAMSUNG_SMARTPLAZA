<head>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* Footer with background image */
    #footer {
      position: relative;
      background: url('project_image/bg12.jpg') no-repeat center center/cover;
      color: white;
      padding: 40px 0;
    }

    /* Dark overlay for better text visibility */
    #footer::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: 0;
    }

    #footer .container {
      position: relative;
      z-index: 1;
    }

    .footer-contact p,
    .footer-contact a {
      color: white;
      text-decoration: none;
      margin: 0;
    }

    .footer-contact a:hover {
      text-decoration: underline;
    }

    .icon {
      width: 30px;
      text-align: center;
    }

    .footer-contact .d-flex {
      gap: 10px;
      align-items: flex-start;
    }

    .logo img {
      max-width: 100%;
      height: auto;
    }

    hr.bg-light {
      opacity: 0.4;
    }

    @media (max-width: 768px) {
      .footer-contact .col-md {
        margin-bottom: 20px;
      }
    }
  </style>
</head>

<body>
  <section id="footer">
    
<div class="container"> 
  <div class="row"> 
    <!-- Column 1: Logo -->
    <div class="col-md-3 mb-4 mb-md-0 text-center text-md-start"> 
      <div class="logo"> <img src="project_image/logo.jpg" alt="logo" height="125" width="284"> 
      </div>
    </div>
    <!-- Column 2: General Contact -->
    <div class="col-md footer-contact"> 
      
    <!-- Column 3: Address -->
    <div class="col-md1 footer-contact"> 
      <div class="d-flex mb-3"> 
        <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
        <div> 
          <p><strong>Address:</strong><br>
            <br>No 88, Star Icon, Bus Stand, 7 & 8,<br> Naroda, opposite Hanspura,<br> Ahmedabad, Gujarat 382330</p>
        </div>
      </div>
    </div>
    <!-- Column 4: Phone -->
    <div class="col-md footer-contact"> 
      <div class="d-flex mb-3"> 
        <div class="icon"><i class="fa fa-phone"></i></div>
        <div> 
          <p><strong>Phone:</strong><br>
            <a href="tel:9989989880">9989989880</a> </p>
        </div>
      </div>
    </div>
    <!-- Column 5: Email -->
    <div class="col-md footer-contact"> 
      <div class="d-flex mb-3"> 
        <div class="icon"><i class="fa fa-envelope"></i></div>
        <div> 
          <p><strong>Email:</strong><br>
            <a href="mailto:your@email.com">your@email.com</a> </p>
        </div>
      </div>
    </div>
    <!-- Column 6: Website -->
    <div class="col-md footer-contact"> 
      <div class="d-flex mb-3"> 
        <div class="icon"><i class="fa fa-globe"></i></div>
        <div> 
          <p><strong>Website:</strong><br>
            <a href="#">yoursite.com</a> </p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Photo Gallery</h3>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="project_image/activesw.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="project_image/4door.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="project_image/Galaxy S24 Ultra.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="project_image/12 kg.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="project_image/bookpro.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="project_image/headphone.jpg" alt="">
                            </div>
                        </div>
                    </div>
  <hr class="bg-light mt-4">
  <div class="text-center"> 
    <p class="m-0 pb-3"><h4>© Samsung SmartPlaza, All rights reserved.</h4></p>
  </div>
</div>
  </section>
</body>
