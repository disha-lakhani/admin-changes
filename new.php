<!DOCTYPE html>
<html lang="en">

<head>

    <title>Hotel Survey Form</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="A survey form used by a hotel to get the satisfaction level of visitors">

    <meta name="author" content="Edward Mc Evoy 2019">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
        .container {
            /* margin-bottom: 2%; */
            font-family: "Playfair Display", serif !important;
        }

        #form-header {

            text-align: center;

        }


        .brand-logo {
            /* margin-top: 2%; */
            margin: 2% auto;
            width: 200px;

        }

        #form-tagline {
            background: #ebf5f8;
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
            color: black;
            margin-top: 2%;
            padding: 4%;
            text-align: left;

        }

        #form-tagline .fa {
            margin-bottom: 15%;
        }

        #form-tagline h2 {
            margin-bottom: 15%;
        }

        #form-content {
            background: #ebf5f8;
            border-top-right-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
            margin: 2% auto;
            padding: 3%;
        }

        .form-group {
            margin-top: 5%;
        }

        .contact {
            padding: 4%;
            height: 400px;
        }

        .control-label {
            font-size: 16px;
            font-weight: 600;
        }

        div .submit-button {
            margin-top: 3%;
            text-align: right;
        }

        button#submit {
            white-space: normal;
            width: auto;
            background: #286b81;
            color: #ffffff;
            font-weight: 600;
            width: 25%;
        }

        .input-group-text {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: .375rem .75rem;
            margin-bottom: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: white;
            text-align: center;
            white-space: nowrap;
            background-color: #286b81;
            border: 1px solid #286b81;
            border-radius: .25rem;
        }

        #title {
            font-size: 25px;
        }

        #description {
            font-size: 15px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">

        </div>

        <div class="row">
            <!-- <div id="form-tagline" class="col-md-4">
                <div class="form-tagline">
                    
                    <h2>How Are We Doing?</h2>
                    <p id="description" class="lead">We really value your opinion</p>
                </div>
            </div> -->

            <div id="form-content" class="col-md-9">
                <div id="form-header" class="col-12">
                    <div class="brand-logo">
                        <img src="assets/images/logo.svg">
                    </div>

                    <p id="description" class="lead">How Can We Help You ?</p>
                </div>
                <form id="website-making-form">
                    <div class="row form-group">
                        <div class="col-sm-3">
                            <label id="name-label" class="control-label" for="name">*Full Name:</label>
                        </div>
                        <div class="input-group col-sm-9">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon-name"><i class="fa fa-user"></i></span>
                            </div>
                            <input id="name" type="text" class="form-control" placeholder="Enter Your Full Name"
                                name="name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label id="email-label" class="control-label" for="email">*Email:</label>
                        </div>
                        <div class="input-group col-sm-9">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon-email"><i
                                        class="fa fa-envelope"></i></span>
                            </div>
                            <input id="email" type="email" class="form-control" placeholder="Enter Your Email Address"
                                name="email" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label id="type-label" class="control-label" for="website-type">*Website Type:</label>
                        </div>
                        <div class="input-group col-sm-9">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon-type"><i class="fa fa-globe"></i></span>
                            </div>
                            <select class="form-control" id="website-type" name="website_type" required>
                                <option value="" disabled selected>Select Website Type</option>
                                <option value="e-commerce">E-Commerce</option>
                                <option value="blog">Blog</option>
                                <option value="portfolio">Portfolio</option>
                                <option value="corporate">Corporate</option>
                                <option value="booking">Booking</option>
                                <option value="custom">Custom</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="control-label" for="features">Required Features:</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="feature-cart" name="features[]"
                                    value="cart">
                                <label class="form-check-label" for="feature-cart">Shopping Cart</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="feature-blog" name="features[]"
                                    value="blog">
                                <label class="form-check-label" for="feature-blog">Blog</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="feature-gallery" name="features[]"
                                    value="gallery">
                                <label class="form-check-label" for="feature-gallery">Gallery</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="feature-contact" name="features[]"
                                    value="contact">
                                <label class="form-check-label" for="feature-contact">Contact Form</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="feature-seo" name="features[]"
                                    value="seo">
                                <label class="form-check-label" for="feature-seo">SEO Optimization</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="control-label" for="deadline">*Deadline:</label>
                        </div>
                        <div class="input-group col-sm-9">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon-deadline"><i
                                        class="fa fa-calendar"></i></span>
                            </div>
                            <input type="date" class="form-control" id="deadline" name="deadline" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-3">
                            <label class="control-label" for="comment">Additional Notes:</label>
                        </div>
                        <div class="input-group col-sm-9">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon-notes">
                                    <i class="fa fa-comment"></i></span></span>
                            </div>
                            <textarea class="form-control" rows="4" id="comment" name="comment"
                                placeholder="Share any additional details about the website"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" id="submit" class="btn btn-primary ">Submit</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#survey-form").submit(function () {
                alert("Thank You For Your Feedback");
                document.getElementById("survey-form").reset();
            });
        });
    </script>
</body>

</html>