<!DOCTYPE html>
<head>
    <title>James Crawley: Portfolio</title>
    <link href="./css/stylesheet.css" rel="stylesheet" />
    <script src="./scripts/main.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
    <main>
        <div class="hamburger" id="hamburger" onclick="mobileNav();">
            <div class="mobile-nav" id="navigation">
                <ul>
                    <li><a href="#about">About me</a></li>
                    <li><a href="#work">My Work</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class='burg-line line1'></div>
            <div class='burg-line line2'></div>
            <div class='burg-line line3'></div>
            
        
        </div>
        <nav>
            <ul>
                <li><a href="#about"><button class='nav-btn'>About me</button></a></li>
                <li><a href="#work"><button class='nav-btn'>My Work</button></a></li>
                <li><a href="#contact"><button class='nav-btn'>Contact</button></a></li>
            </ul>
        </nav>
        <section class="hero">
            <div class="logo-wrapper">
                <div class="logo-txt">
                    <h1>James Crawley</h1>
                    <h2>Web Developer &amp; Programmer</h2>
                </div>
            </div>
                <div class="skills">
                    <div class="skill-box">HTML</div>
                    <div class="skill-box">CSS</div>
                    <div class="skill-box">Javascript</div>
                    <div class="skill-box">PHP</div>
                    <div class="skill-box">MySQL</div>
                    <div class="skill-box">LAMP/WAMP</div>
                    <div class="skill-box">Photoshop</div>
                    <div class="skill-box">Git/Github</div>
                </div>
            
        </section>

        <section class="content">
            
            <article id="about">
                <h2>Who I Am...</h2>
                <div class="content-wrapper">
                    <div class="content-center">
                <img id='profile' src="./images/profile-cartoon.png" height="165px" width="150px" style="float: left; margin-right: 20px;"/>
                <p>
                    
                    I started to get into web development in my teens, building websites on Geocities or Angelfire for my friends and I.  It was before divs, so I learned to layout websites with tables and would spiffy up the site with animated gifs I made in Photoshop.  I would also use photoshop to make graphics and avatars for friends on gaming forums. As I got older I started working in manufacturing, but I still pursued my passion in web development and eventually earned an AAS in Web Development and Programming. I continued to update my skills and develop several projects, whether it was for someone who needed a landing page or just for fun. </p>

                    <p>I've always loved technology whether it was making websites for my friends or building computers with my kids, whom I would also teach HTML and CSS.  I have experience in working with different teams in many different environments, and my time working in collections helped me develop skills in problem solving and guiding consumers through issues and finding the best course of action.</p>

                    <h4>Resume</h4>
                    <p style="padding-top: 20px;">
                    <a href="Resume.pdf" class="resume-btn" download><span style='font-weight: bold; text-decoration: underline'>&darr;</span> Download</a><a href="resume.html" class="resume-btn" target="_blank">View Page</a>
                    </p>
                    </div>
                </div>
            </article>
            <article id="work">
                <h2>My Work</h2>
                <div class="content-wrapper">
                    <div class="content-center">
                    <div class="card">
                        <div class="preview">
                            <div class="proj-img pizza-maker"></div>
                                <a href="http://www.jkcrawley.com/pizzamaker/" target="_blank" >View Live</a>
                                <a href="https://github.com/jkcrawley/pizzamaker" target="_blank">View on Github</a>
                        </div>
                        <div class="proj-desc">
                            <h3>Pizza Maker</h3>
                            <p>This is a project I made out of fun to try and duplicate the pizza builder on Dominos Website.  It demonstrates my skills in building objects and performing calculations based on user input.</p>
                        </div> 
                    </div>

                    <hr>

                    <div class="card">
                        <div class="preview">
                            <div class="proj-img cvrecipe"></div>
                                <a href="http://www.jkcrawley.com/cedarvalleyrecipes/" target="_blank" >View Live</a>
                                <a href="https://github.com/jkcrawley/cedarvalleyrecipes" target="_blank">View on Github</a>
                        </div>
                        <div class="proj-desc">
                            <h3>Cedar Valley Recipes</h3>
                            <p>A PHP/MySQL project that allows users (depending on user level) to be able add, edit, and delete recipes. I am currently working on adding admin tools that allows members with higher user level to promote other users and delete/edit any entries that may be unwanted or inappropriate.</p>
                        </div> 
                    </div>

                    <hr>

                    <div class="card">
                        <div class="preview">
                            <div class="proj-img hyperion"></div>
                                <a href="http://www.jkcrawley.com/hyperion/" target="_blank" >View Live</a>
                                <a href="https://github.com/jkcrawley/hyperion" target="_blank">View on Github</a>
                        </div>
                        <div class="proj-desc">
                            <h3>Hyperion Internet</h3>
                            <p>I was out of practice for a while, so I made this as a mock up that was modeled after Mediacom's old website.</p>
                        </div> 
                    </div>

                    <hr>

                    <div class="card">
                        <div class="preview">
                            <div class="proj-img jimsbbq"></div>
                                <a href="http://www.jkcrawley.com/jimsbbq/" target="_blank" >View Live</a>
                                <a href="https://github.com/jkcrawley/jimsbbq" target="_blank">View on Github</a>
                        </div>
                        <div class="proj-desc">
                            <h3>Jim's BBQ</h3>
                            <p>After Web Design, my next love is good smokin' BBQ.  I made this with the similar intent as the Hyperion project, this was modeled after Famous Dave's old website.</p>
                        </div> 
                    </div>
                </div>
                </div>
            </article>
        </section>
        <section class="content">
            
            <article id="contact">
                <h2>Contact Me</h2>
                <div class="content-wrapper">
                    <div class="contact-form">
                        <form action="contact.php" method="post">
                            <p>
                                <label for="name"><b>Name</b></label><br />
                                <input type="text" name="name" id="name"  style="padding: 5px;" required/>
                            </p>
                            <p>
                                <label for="email"><b>Email</b></label><br />
                                <input type="email" name="email" id="email"  style="padding: 5px;" required />
                            </p>
                            <p>
                                <label for="subject"><b>Subject</b></label><br />
                                <input type="text" name="subject"  style="padding: 5px;" required />
                            </p>
                            <p>
                            <textarea name="message" id="message" value="Message here" style="padding: 5px;" required></textarea><br />
                            <input type="submit" name="submit" id="submit" value="Send Message"/>
                            </p>
                    </form>
                    </div>
                    
                    <p style="margin-top: 80px;">
                    <a href="https://www.linkedin.com/in/james-crawley-45274028/" target="_blank">
                        <svg class='contact-links' xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 50 50">
                            <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10 c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56 c3.97,0,7.19,2.73,7.19,8.26V39z"></path>
                        </svg>
                    </a>
                    <a href="mailto: j-crawley@live.com" target="_blank">
                        <svg id="Layer_1_1_" class="contact-links" style="enable-background:new 0 0 16 16;" version="1.1" viewBox="0 0 16 16" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="0,4 0,14 16,14 16,4 8,9 "/><polygon points="0,3 8,8 16,3 16,2 0,2 "/></svg>
                    </a>

                    <a href='https://twitter.com/j_crawley82' target='_blank'>
                        <svg role="img" class="contact-links" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    </p>
                </div>
            </article>
        </section>
    </main>

</body>

</html>