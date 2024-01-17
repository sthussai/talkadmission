<!DOCTYPE html>
<html>
<title>Users</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Lato", sans-serif;
    }

    body,
    html {
        max-width: 2000px;
        margin: auto;
        height: 100%;
        color: #777;
        line-height: 1.8;
    }


    /* Create a Parallax Effect */
    .bgimg-1,
    .bgimg-2,
    .bgimg-3 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
        background-image: url('https://www.w3schools.com/w3images/forestbridge.jpg');
        min-height: 100%;
        animation-name: example;
        animation-duration: 20s;
        animation-iteration-count: 2;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* Second image (Portfolio) */
    .bgimg-2 {
        background-image: url("https://www.w3schools.com/w3images/forestbridge.jpg");
        background-position: bottom;
        min-height: 400px;

    }

    /* Third image (Contact) */
    .bgimg-3 {
        background-image: url('https://www.w3schools.com/w3images/forestbridge.jpg');
        min-height: 400px;
    }

    .w3-wide {
        letter-spacing: 10px;
    }

    .w3-hover-opacity {
        cursor: pointer;
    }



    .row,
    .row1 {
        display: flex;
        /* equal height of the children */
    }

    .col,
    .col1 {
        flex: 1;
        /* additionally, equal width */

    }

    /* For overlay div */
    @media screen and (max-height: 450px) {


        .overlay a {
            font-size: 20px
        }

        .overlay .closebtn {
            font-size: 40px;
            top: 25px;
            right: 35px;
        }
    }

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1024px) {

        .bgimg-1,
        .bgimg-2,
        .bgimg-3 {
            background-attachment: scroll;
        }
    }

    /* Display at medium width */
    @media screen and (max-width: 900px) {

        .text {
            font-size: 16px;
        }

        .row {

            flex-direction: column;
        }



    }

    /*START Display at SMALL width */
    @media screen and (max-width: 600px) {

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 h1 {
            font-size: 25px;
        }

        h2 {
            font-size: 22px;
        }

        h3 {
            font-size: 20px;
        }

        h4 {
            font-size: 18px;
        }

        h5 {
            font-size: 15px;
        }

        h6 {
            font-size: 13px;
        }

        .text {
            font-size: 15px;
        }

        .row1 {
            flex-direction: column;
        }
    }

    /*END Display at SMALL width */


    /*START Display at LARGE width */
    @media screen and (min-width: 994px) {
        .img {
            padding-top: 50px;
            max-height: 400px;
        }



        .text {
            font-size: 17px;
        }
    }

    div.zoom p {
        font-size: 17px;
    }

    .zoom {
        transition: 0.5s;

    }


    .zoom:hover {
        transform: scale(1.05);
        -webkit-box-shadow: 3px 30px 38px -31px rgba(0, 0, 0, 0.53);
        -moz-box-shadow: 3px 30px 38px -31px rgba(0, 0, 0, 0.53);
        box-shadow: 3px 30px 38px -31px rgba(0, 0, 0, 0.53);
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
</style>

<body>



    <!-- First Parallax Image with Logo Text -->
    <div class="bgimg-2 w3-display-container " id="hero_div">


        <div class="w3-display-middle w3-opacity-min w3-round w3-center" style="top:50%">
            <h1 class="w3-xxlarge w3-padding w3-text-white w3-animate-left ">Users</h1>
            <hr class="w3-bottombar w3-border-white w3-animate-left w3-round" style="margin:auto;width:80%">
            <a href="back" class="w3-small w3-padding w3-text-white w3-animate-left ">back</a>
        </div>



    </div>


    <div class='w3-container  '>
        <h3 class=" w3-center w3-text-black">Applicants</h3>
        
        @isset($applicants)
        @foreach ($applicants as $applicant)

        <a class="w3-col w3-row-padding l4 m6 s12 w3-margin-bottom ">
            <div class='w3-container w3-padding l4 s6 w3-card w3-button w3-block'>
                <img src="{{$applicant->avatar_url}}" class="w3-circle w3-left "
                    style=" width:85px">
                <div class="w3-container w3-col l8 s6 ">Applicant Id: {{$applicant->id }} <br>
                    <b>Name: {{$applicant->name}}</b>
                    <br>Email: {{$applicant->email}} <br>
                    Status:<span class="w3-text-dark-gray">Offline</span>

                </div>

            </div>



        </a>


        @endforeach
        @endisset
    </div>



    <h3 class=" w3-center w3-text-black">Mentors</h3>

    <!-- START Main Page Testimonials section -->
    <style>
        .scrolling-wrapper {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
        }

        .scrolling-wrapper {
            -webkit-overflow-scrolling: touch;
        }

        .card {
            flex: 0 0 auto;
            margin: 20px;
            max-width: 500px;
            min-width: 350px;

        }
    </style>
    <div class="scrolling-wrapper w3-padding-16">
    @isset($mentors)
        @foreach ($mentors as $mentor)
        <!-- START - Review section panel -->
        <div class="zoom w3-animate-zoom ">
            <a href="https://goo.gl/maps/dqviE7nvW4zK6WAD9" class=" w3-center w3-card w3-white w3-hover-opacity "
                style="text-decoration: none;">
                <div class="card w3-padding-16" style="border: none;">
                    <div>
                        <h2 style="margin:0px;border:  2px blue;">{{$mentor->name}}</h2>
                        <h4 class="w3-medium" style="margin:0 0 40px; border:  2px green;">ID: {{$mentor->id}}</h4>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                        <i class="fa fa-star w3-margin-bottom w3-text-theme" style="font-size:20px"></i>
                    </div>
                    <div class="w3-container w3-dark-grey">
                        <p class="w3-medium">"Excellent work! Came right to my work and we chatted like achool kids
                            while he
                            replaced my screen. Great guy , wasn’t even 24 hours after replacing my daughters screen
                            I had
                            already recommended him to a co worker .
                            Great guy, great service all around!"</p>
                    </div>

                </div>
            </a>
        </div>
        @endforeach
        @endisset
        <!-- END - Review section panel -->
    </div>

    <!--  End of Reviews Section  -->



 






























</body>

</html>