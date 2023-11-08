<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
             <!--START First Parallax Image with Logo Text -->
             <div class="bgimg-1 w3-display-container" id="hero_div">
                    <div class="card-header-slanted-edge">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200"><path class="polygon" d="M -20 200 V 200 C 4 198 684 200 1000 102 V 200 Z" /></svg>  
                        </div>
                <div class="w3-display-middle w3-light-grey w3-opacity-min w3-round" >
                    <h1 class="  w3-center w3-text-black w3-animate-left">
                        Upcoming medical school interviews?
                    </h1>
                    <h2 class="  w3-center w3-text-black w3-animate-left">
                        Connect with the students who've been there 
                    </h2>
                </div>
            </div>
        <!--END First Parallax Image with Logo Text -->

        <!-- START Navbar Section -->
            <div id='navbar' class="">
                    <p id='logo'><b>Talk Admissions</b></p>

                    <div class="">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="z-index: 2;">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 ">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
            </div>
        <!-- END Navbar Section -->


        <!-- START About Section -->
            <div class="w3-row w3-content" id="about">
                <div class="w3-col s12 w3-center w3-padding-64 ">
                    <h2>
                        PRACTICE WITH CURRENT MEDICAL STUDENTS 
                    </h2>
                        
                </div>
                <div class="w3-col l6 w3-padding w3-center ">
                <img src="https://talkadmissions.com/images/student.jpg" class="w3-round img w3-image " alt="Table Setting">
                </div>
                <br>
                <div class="w3-col l6 w3-padding">
                <p class="w3-justify"> The medical school admission process is competitive. The interview can be a daunting hurdle to cross. We offer you the opportunity to connect with current medical students who can give you a running start and help you succeed.  
                </p>
                <a href="#rationale">
                     <button class='w3-button w3-bar w3-dark-grey w3-round w3-margin-top'>Learn More</button>
                </a>
                </div>
            </div>
            <hr>

        <!--END About Section -->


        <!-- START Three panel section -->
            <div id="three-panels" class=" w3-center w3-text-black w3-margin-top w3-padding-64" style="padding: 0px 50px; ">
                <h2 class="w3-padding-16">
                    CHOOSE THE APPROACH THAT IS
                </h2>
                <div class="flex-row">
                    
                        <div class=" flex-col w3-margin w3-card w3-light-grey w3-padding-16 w3-round w3-container">
                            <i class="fa fa-space-shuttle w3-margin-bottom w3-text-theme" style="font-size:50px"></i>
                            <h3>Efficient</h3>
                            <br>
                            <p>Current students give you the relevant details and share the approaches they used for success.
                                Get help with admission applications or practice for your interviews.  </p>
                        </div>
                    

                    
                        <div class=" flex-col w3-margin w3-card w3-light-grey w3-padding-16 w3-round w3-container">
                            <i class="fa fa-bullseye w3-margin-bottom w3-text-theme" style="font-size:50px"></i>
                            <h3>Effective</h3>
                            <br>
                            <p>Practice one on one with students at the school you are looking to interview at. 
                                Benefit from their experience and get tailored guidance that sets you up for success.</p>
                        </div>

                    
                        <div class="flex-col w3-margin w3-card w3-light-grey w3-padding-16 w3-round w3-container">
                            <i class="fa fa-dollar w3-margin-bottom w3-text-theme" style="font-size:50px"></i>
                            <h3>Economical</h3>
                            <br>
                            <p>Students can provide cost-effective guidance and mentorship without compromising on quality. 
                                Get the advice and practice you need while staying within your budget.</p>                
                        </div>
                </div>

            </div>

        <!-- END Three panel section -->


        <div id="rationale" class="w3-row w3-padding-64 ">
            <div class="w3-col l6 s12">
                <div  class="w3-margin w3-padding">
                    <h2 class="w3-padding">OUR MOTIVATIONS AND RATIONALE</h2>
                    <h3 class="w3-padding">Price control</h3>
                    <p class="w3-padding">
                    Current pre-admission markets are unregulated and competitive. Hence prices can be exorbitantly high for admission prep and interview training. We’re motivated to bring them back down to reason.
                    </p>
                    <h3 class="w3-padding">Variable needs</h3>
                    <p class="w3-padding">
                    Some students can benefit a lot from interview practice. Some may only need a little help. Some are already ready and could just use the reassurance. Paying hundreds of dollars for the average interview prep plan available in the current market is not the solution for all. 
                    </p>
                    <h3 class="w3-padding">Indeterminate impact</h3>
                    <p class="w3-padding">
                    It is hard to determine the impact of paid interview prep in securing admission. Many applicants are already strong candidates, including having solid interviewing skills, that give them a high chance of getting admitted. So how do we know that $1500 interview prep plan made a difference?
                    </p>
                </div>
            </div>
            <div class="w3-col l6 s12">

                <div class="slant-card ">
                    <div class="card-header"
                    style="background-image: url(value.jpg)">
                            
                            <div class="card-header-slanted-edge">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 200"><path class="polygon" d="M-20,200,1000,0V200Z" /></svg>  
                            </div>
                    </div>
    
                    <div>
                        <h2 class="name">Top Notch Service</h2>
                        <p class="bio">
                            We control costs without compromising on quality. We’re driven to help you get exceptional value for your money.
                        </p>
    
                    </div>
                </div>
            </div>
        </div>


        <!-- START 2 panel panel section -->
        <div class='flex-row ' >
                <div class=" flex-col m6 s12 w3-grey ">
                    <div class="bgimg-4 w3-opacity-min">
                    </div>  
                </div>
                <div class=" flex-col m6 s12 w3-padding-32 ">
                    <h2 style="padding:10px 40px;">
                        A fraction of the cost
                    </h2>
                    <p style="padding:10px 40px;">
                    Current companies that offer admission consultations and interview practice can charge rates upwards of $200/hour. These are high in part because they staff doctors and in part because admission to medical school is a lucrative prospect. We leverage the experience of medical students to deliver quality training and relevant guidance at a fraction of the cost. Our rates range on average from $30-$50/hour.
                    </p>
                </div>
        </div>    
        <!-- END 2 panel panel section -->

        <!-- START 2 panel panel section -->
        <div class='flex-row '>
            <div class=" flex-col m6 s12 w3-padding-32 ">
                <h2 style="padding:10px 40px;">
                    A reservoir of experience 
                </h2>
                <p style="padding:10px 40px;">
                The average medical student has sat in the interview hot seat more than three times so we have ‘lived experience’ of the situation. Then, many senior medical students have sat on the other side of the interview table, interviewing our future peers. We can speak to the nerves and the stress of the situation, as well as to the content and the approach to take.
                </p>
            </div>
            <div class=" flex-col m6 s12 w3-grey ">
                <div class="bgimg-4 w3-opacity-min">
                </div>  
            </div>
        </div>    
        <!-- END 2 panel panel section -->







        <!-- 2nd Parallax Image with Portfolio Text -->
            <div class="bgimg-3 w3-display-container w3-opacity-min">
                <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
                </div>
            </div>


            
        <!-- Footer -->
            <footer class="w3-center w3-black  ">

            <div class='w3-padding'>
            <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-top"></i>To the top</a>
            <div class="w3-xlarge w3-section">
                <i class="fa fa-facebook-official w3-hover-opacity"></i>
                <i class="fa fa-instagram w3-hover-opacity"></i>
                <i class="fa fa-snapchat w3-hover-opacity"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                <i class="fa fa-twitter w3-hover-opacity"></i>
                <i class="fa fa-linkedin w3-hover-opacity"></i>
            </div>
            </div>  
            </footer>

        <!-- END Footer -->
            
    </body>

      
</html>



    <!-- Sticky START -->
    <!-- <div class="relative">
        <div class="sticky top-0 flex h-screen items-center justify-center">
            <img src="https://cdn.pixabay.com/photo/2013/11/28/10/36/road-220058_1280.jpg" class="h-full w-full object-cover" />
            <div class="absolute left-0 right-0 m-auto flex w-2/4 flex-col items-start justify-center gap-4 p-10 backdrop-blur-xl">
            <h2 class="text-2xl font-bold">You got the interview, congrats!</h2>

            </div>
        </div>
        <div class="sticky top-0 flex h-screen items-center justify-center">
            <img src="https://www.stockvault.net/data/2014/10/06/163147/preview16.jpg" class="h-full w-full object-cover" />

            <div class="absolute left-0 right-0 m-auto flex w-2/4 flex-col items-start justify-center gap-4 p-10 backdrop-blur-xl">
            <h2 class="text-2xl font-bold text-white">One more hurdle and you're in!</h2>
            </div>
        </div>

        <div class="sticky top-0 flex h-screen items-center justify-center">
            <img src="https://www.stockvault.net/data/2016/03/14/187739/preview16.jpg" class="h-full w-full object-cover" />

            <div class="absolute left-0 right-0 m-auto flex w-2/4 flex-col items-start justify-center gap-4 p-10 backdrop-blur-xl">
            <h2 class="text-2xl font-bold text-white">You've got help if you need</h2>
            </div>
        </div>

        <div class="sticky top-0 flex h-screen items-center justify-center">
            <img src="https://www.stockvault.net/data/2016/03/14/187732/preview16.jpg" class="h-full w-full object-cover" />

            <div class="absolute left-0 right-0 m-auto flex w-2/4 flex-col items-start justify-center gap-4 p-10 backdrop-blur-xl text-center">
            <h2 class="text-2xl font-bold text-white">You've got this!</h2>
            </div>
            </div>
    </div> -->
    <!-- Sticky END -->
