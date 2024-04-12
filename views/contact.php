<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Contact</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/flaticon.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/orders">ORDERS</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<div class="container">
    <section class="contact-section">
        <div class="auto-container">
            <div class="sec-title">
                <div class="d-flex">
                    <div class="pull-left">
                        <h2>Quick Contact</h2>
                        <div class="separator"></div>
                    </div>
                    <div class="text">You have questions? Don't hesitate to contact us, our support team here to help you by 24/7.</div>
                </div>
            </div>

            <div class="inner-container">
                    <div class="info-column col-md-3 col-sm-12 col-xs-12">
                            <div class="upper-box">
                                <ul class="list-style-three">
                                    <li><span class="icon flaticon-technology-2"></span><strong>Call Us: </strong><a href="tel: +999999999999">+999 999 999 999</a></li>
                                    <li><span class="icon flaticon-envelope-1"></span><strong>Mail Us: </strong><a href="mailTo: support@support.com"> support@support.com</a></li>
                                    <li><span class="icon flaticon-time-1"></span><strong>Office Hours: </strong>9:00am to 5:00pm</li>
                                </ul>
                            </div>
                    </div>

                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                            <div class="contact-form">
                                <form method="post" action="../controllers/FormController.php" id="contact-form">
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="firstName" placeholder="First Name" required>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="lastName" placeholder="Last Name" required>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="text" name="phone" placeholder="Phone" required>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                            <input type="email" name="email" placeholder="E-Mail" required>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <button class="theme-btn submit-btn" type="submit" name="submit-form">Submit Now <span class="icon flaticon-right-arrow-1"></span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>
