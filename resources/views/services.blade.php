@extends('header')
@section('title', 'Services')
@section('main')



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <style>
            body {
                margin-top: 20px;
            }

            /* Feature Box
    ---------------------*/
            .feature-box-1 {
                padding: 32px;
                box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
                margin: 15px 0;
                position: relative;
                z-index: 1;
                border-radius: 10px;
                overflow: hidden;
                -moz-transition: ease all 0.35s;
                -o-transition: ease all 0.35s;
                -webkit-transition: ease all 0.35s;
                transition: ease all 0.35s;
                top: 0;
            }

            .feature-box-1 * {
                -moz-transition: ease all 0.35s;
                -o-transition: ease all 0.35s;
                -webkit-transition: ease all 0.35s;
                transition: ease all 0.35s;
            }

            .feature-box-1 .icon {
                width: 70px;
                height: 70px;
                line-height: 70px;
                background: #fc5356;
                color: #ffffff;
                text-align: center;
                border-radius: 50%;
                margin-bottom: 22px;
                font-size: 27px;
            }

            .feature-box-1 .icon i {
                line-height: 70px;
            }

            .feature-box-1 h5 {
                color: #20247b;
                font-weight: 600;
            }

            .feature-box-1 p {
                margin: 0;
            }

            .feature-box-1:after {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                left: auto;
                right: 0;
                border-radius: 10px;
                width: 0;
                background: #20247b;
                z-index: -1;
                -moz-transition: ease all 0.35s;
                -o-transition: ease all 0.35s;
                -webkit-transition: ease all 0.35s;
                transition: ease all 0.35s;
            }

            .feature-box-1:hover {
                top: -5px;
            }

            .feature-box-1:hover h5 {
                color: #ffffff;
            }

            .feature-box-1:hover p {
                color: rgba(255, 255, 255, 0.8);
            }

            .feature-box-1:hover:after {
                width: 100%;
                height: 100%;
                border-radius: 10px;
                left: 0;
                right: auto;
            }

            .section {
                padding: 100px 0;
                position: relative;
            }

            .section-title {
                padding-bottom: 45px;
            }

            .section-title h2 {
                font-weight: 700;
                color: #20247b;
                font-size: 45px;
                margin: 0 0 15px;
                border-left: 5px solid #fc5356;
                padding-left: 15px;
            }
        </style>

    </head>

    <body>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

        <section class="section services-section" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h2>Services</h2>
                            <p>I design and develop services for customers of all sizes, specializing in creating stylish,
                                modern websites</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Unique design</h5>
                                <p>I design and develop services for customers of all sizes, specializing in creating
                                    stylish, modern websites.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Different Layout</h5>
                                <p>I design and develop services for customers of all sizes, specializing in creating
                                    stylish, modern websites.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="fa fa-comment"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Make it Simple</h5>
                                <p>I design and develop services for customers of all sizes, specializing in creating
                                    stylish, modern websites.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="fa fa-image"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Responsiveness</h5>
                                <p>I design and develop services for customers of all sizes, specializing in creating
                                    stylish, modern websites.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="fa fa-th"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Testing for Perfection</h5>
                                <p>I design and develop services for customers of all sizes, specializing in creating
                                    stylish, modern websites.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- feaure box -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="fa fa-cog"></i>
                            </div>
                            <div class="feature-content">
                                <h5>Advanced Options</h5>
                                <p>I design and develop services for customers of all sizes, specializing in creating
                                    stylish, modern websites.</p>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                </div>
            </div>
        </section>



        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>

    </body>

    </html>


@endsection
