<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health - Medical Center HTML5 Template</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

<style>
        label.logo{
            color:#023020;
            font-size: 25px;
            line-height: 30px;
            font-weight: bold;
        }
        
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            
        }

        

        </style>
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> (02) 576-4567</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> info@cureandcare.com.ph</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}"><img src="/images/hospital-logo.png" style="width:50px"></a>

                <label class="logo"> Care And Cure </label>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about_us')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('doctors')}}">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('news')}}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('make_appointment')}}">Book Appointment</a>
                        </li>

                        @if(Route::has('login'))

                        @auth

                        <li class="nav-item">
                                <a class="nav-link active" style="background-color: #01d8a5; color:white;" href="{{url('myappointment')}}">My Appointment</a>
                            </li>

                        <x-app-layout>
                        </x-app-layout>


                        @else
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                        </li>

                        @endauth

                        @endif


                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    <div align="center" style="padding:30px;">
        <table>
            <tr style="background-color: #36454F;" align="center">
                <th style="padding: 30px; font-size: 15px; color: white;">Doctor Name</th>
                <th style="padding: 30px; font-size: 15px; color: white;">Date</th>
                <th style="padding: 30px; font-size: 15px; color: white;">Message</th>
                <th style="padding: 30px; font-size: 15px; color: white;">Status</th>
                <th style="padding: 30px; font-size: 15px; color: white;">Action</th>
            </tr>

            @foreach($appoint as $appoints)

            <tr style="background-color: #E5E4E2;" align="center">
                <td style="padding: 30px; ">{{$appoints->doctor}}</td>
                <td style="padding: 30px; ">{{$appoints->date}}</td>
                <td style="padding: 30px; ">{{$appoints->message}}</td>
                <td style="padding: 30px; ">{{$appoints->status}}</td>
                <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel this appointment? This action cannot be undo.')" href="{{url('cancel_appoint', $appoints->id)}}">Cancel</a></td>
                
            </tr>

            @endforeach

        </table>
    </div>



    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>