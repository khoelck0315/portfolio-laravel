@extends('layouts.default')
@vite(['resources/css/home.css', 'resources/js/home.js'])

@section('content')
    <!--left behind as example..-->
    @if (isset($about_entry))
        <input id="anchor" type="hidden" name="anchor" value="#about"/>
    @endif

    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <!--end example-->

    <section class="container-fluid">
        <!--Change glow based on position of elements-->
        <div class="row mainview align-items-center vh-100">
            <div class="col-md-4 text-dark-emphasis">
                <div class="headings">
                    <div class="text-start p-md-5">
                        <h1>Kevin Hoelck</h1>
                        <h2>Full stack web developer</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-8 d-flex justify-content-center">
                <div class="d-flex justify-content-center flex-column">
                    <div class="monitor bg-black">
                        <p id="introtext" ></p>
                        <div id="vim-footer" class="d-flex justify-content-between pe-3 ps-3" style="visibility: hidden;">
                            <span id="insert" class="align-self-start" style="visibility: hidden;">--Insert--</span>
                        </div>
                    </div>
                    <div class="stand-riser align-self-center"></div>
                    <div class="stand-base align-self-center"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="stickytag col-md-4 text-light text-center">
                <h2 id="languagetag">I am proficient with these languages:</h2>
            </div>
             <div class="col-md-8">
                <div class="languages">
                    <div id="placeholder" class="language"></div>
                    <div id="php" class="language"><img src="images/php-logo.png" alt="PHP" title="PHP"/></div>
                    <div id="mysql" class="language"><img src="images/mysql-logo.png" alt="MySQL" title="MySQL"/></div>
                    <div id="css" class="language"><img src="images/css-logo.png" alt="CSS" title="CSS"/></div>
                    <div id="js" class="language"><img src="images/javascript-logo.png" alt="JavaScript" title="JavaScript"/></div>
                    <div id="dotnet" class="language"><img src="images/dotnet-logo.png" alt="C# .NET" title="C# .NET"/></div>
                    <div id="powershell" class="language"><img src="images/powershell-logo.png" alt="Powershell" title="Powershell"/></div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid frameworks p-5 text-center body-secondary">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <h2>I also work with the following frameworks, software, and utilities:</h2>
            </div>
             <div class="col-md-8 ps-5 pe-5">
                @foreach($technologies as $technology)

                    <img class="frameworks-img img-icon" src="{{ $technology->src }}" alt="{{ $technology->title }}" title="{{ $technology->title }}"/>
                    
                @endforeach
            </div>
        </div>
    </section>
    <section id="about" class="container-fluid mt-5 mb-5 p-5">
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <!-- Show icons for certifications-->
                
                <h1 class="mb-3">About Me</h1>
                <h3 class="mt-4"><i class="pe-3 fa-solid fa-pen-to-square"></i>Background</h3>
                <p class="p-2">
                    I first started in the IT field four years ago after deciding it was time for a career change.  I began homelabbing, dabbling in web development, and working to obtain various certifications
                    including Comptia A+/Net+/Sec+ and Cisco CCNA.  After some time, I was able to land my first job as a network administrator and continued to learn and grow.
                </p>
                <p class="p-2">
                    In an unusual twist to this type of role, this also included maintaining the company public website and agent/employee portal.  I found this to be the most enjoyable part of my responsibilities
                    here.  In addition to the websites, I also had opportunities along the way to develop various webservices that are being heavily used in production.
                    Working for a smaller company has allowed me to 'drink from the firehose' and gain exposure to many different disciplines.  My experience here has shown me that development
                    is by far my passion and specialty.  I have been able to learn and continually provide solutions, and I would love the opportunity to do so for your company!
                </p>
                <h3 class="mt-4"><i class="pe-3 fa-solid fa-list-check"></i>Current Responsibilities</h3>
                <p class="p-2"> I have currently taken on the role at my company as Security and Tech Services manager.  Some of my responsibilities include:</p>
                    <ul>
                        <li>Leading a team of four Network and System Administrators as a working manager</li>
                        <li>Delegating daily tasks, implementing procedures, and overseeing long term projects such as server OS upgrades, Office 365 migration, and web integrations.</li>
                        <li>Providing mentorship and support to other administrators as needed.</li>
                        <li>Participating in the annual budget process and purchasing equipment and services.</li>
                        <li>Reviewing resumes and conducting technical interviews for hiring of candidates across the IT department.</li>
                        <li>Overseeing and code review scripting, automation, and web contributions by team.</li>
                        <li>Continuing other prior duties such as web development, systems and network administration, vulnerability management, and automation.</li>
                    </ul>
                <p class="p-2">
                    If you are an employer or recruiter and wish to obtain a full copy of my resume, <a href="/contact">please contact me here</a>
                </p>
                <h3 class="mt-4"><i class="pe-3 fa-solid fa-user"></i>Personal</h3>
                <p class="p-2">
                    When I am not creating things with code, I am spending time with my family, outdoors, reading, and being involved in my home church <a href="https://gracefellowshipefc.org" target="_blank">Grace Fellowship</a> with 
                    technology and children's ministries.
                </p>
                <h5 class="p-2">Verse of the day:</h5>
                <p class="p-5 bg-dark-subtle">
                    <script src="http://www.verse-a-day.com/js/NLT.js"></script>
                <p>
            </div>
        </div>
    </section>
@stop
