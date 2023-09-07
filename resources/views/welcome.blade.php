<!--This is actually <x-[componenent name]> for rendering purposes-->
@vite(['resources/css/home.css', 'resources/js/home.js'])

<x-layout title={{$title}}>
    <!--left behind as example..-->
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

    <section class="container-fluid" style="scroll-behavior: smooth">
        <!--Change glow based on position of elements-->
        <div class="row mainview align-items-center h-100">
            <div class="col-md-4 text-dark">
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
                <img class="frameworks-img img-icon" src="images/laravel-logo.png" alt="Laravel" title="Laravel">
                <img class="frameworks-img img-icon" src="images/bootstrap-logo.png" alt="Bootstrap" title="Bootstrap">
                <img class="frameworks-img img-icon" src="images/tailwind-logo.png" alt="Tailwind CSS" title="Tailwind CSS">
                <img class="frameworks-img img-icon" src="images/react-logo.png" alt="React" title="React">
                <img class="frameworks-img img-icon" src="images/phpmyadmin-logo.png" alt="phpMyAdmin" title="phpMyAdmin"/>
                <img class="frameworks-img img-icon" src="images/postman-logo.png" alt="Postman" title="Postman"/>
                <img class="frameworks-img img-icon" src="images/paintdotnet-logo.png" alt="PaintDotNet" title="PaintDotNet"/>
                <img class="frameworks-img img-icon" src="images/inkscape-logo.png" alt="Inkscape" title="Inkscape"/>
                <img class="frameworks-img img-icon" src="images/vscode-logo.png" alt="VSCode" title="VSCode"/>
                <img class="frameworks-img img-icon" src="images/nodejs-logo.png" alt="NodeJS" title="NodeJS"/>
                <img class="frameworks-img img-icon" src="images/npm-logo.png" alt="NPM" title="NPM"/>
                <img class="frameworks-img img-icon" src="images/vite-logo.png" alt="Vite" title="Vite">
                <img class="frameworks-img img-icon" src="images/apache-logo.png" alt="Apache" title="Apache"/>
                <img class="frameworks-img img-icon" src="images/tomcat-logo.png" alt="Tomcat" title="Tomcat"/>
            </div>
        </div>
    </section>
    <section id="about" class="container-fluid p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>About Me</h1>
                <p> I first started in the IT field four years ago after deciding it was time for a career change.  I began homelabbing, dabbling in web development, and working to obtain various certifications
                    including Comptia A+/Net+/Sec+ and Cisco CCNA.  After some time I landed my first job as a network administrator and continued to learn and work my way up.  Strangely, this role also included
                    maintaining the company public website and agent/employee portal, but I was up for the task.  I honed my development skills alongside my other roles and responsibilities as a network administrator.  Working for a smaller
                    company has allowed me to 'drink from the firehose' and gain exposure to many different disciplines.  What I've discovered along the way is that development is by far my passion and specialty.
                    I have been able to learn and continually provide solutions.  I would love the opportunity to do so in a development focused role!
                </p>

                <p> I currently work as a Security and Tech Services manager.  Some of my responsibilities include:</p>
                    <ul>
                        <li>Lead a team of four Network and System Administrators as a working manager</li>
                        <li>Delegate daily tasks, implemented procedures, and oversaw long term projects such as server OS upgrades, Office 365 migration, and web integrations.</li>
                        <li>Provide mentorship and support to other administrators as needed.</li>
                        <li>Participate in the annual budget process and purchase equipment and services.</li>
                        <li>Review resumes and conduct technical interviews and hiring of candidates across the IT department.</li>
                        <li>Oversee and code review scripting, automation, and web contributions by team.</li>
                        <li>Continue other prior duties such as web development, systems and network administration, vulnerability management, and automation.</li>
                    </ul>
                <p> If you are an employer or recruiter and wish to obtain a copy of my resume, <a href="{{ route('contact') }}">please contact me here</a></p>
            </div>
        </div>
    </section>

</x-layout>
