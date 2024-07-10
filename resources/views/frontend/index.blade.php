<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />


    <link rel="stylesheet" href="{{url('/frontend/css/index.css')}}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Calibri:wght@400;700&display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Times New Roman:ital,wght@0,700;1,700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" />
</head>

<body>
    <div class="cursiva-home-page">
        <section class="cursiva-home-page-inner">
            <div class="frame-parent">
                <header class="cursiva-logo-1-parent">
                    <img class="cursiva-logo-1" loading="lazy" alt="" src="{{url('./frontend/assets/logo.png')}}" />

                    <nav class="frame-wrapper">
                        <nav class="italic-text-parent">
                            <div class="italic-text"><a id="italic-text" href="{{route('home')}}">Italic Text</a></div>
                            <div class="blog"><a id="blog" href="{{route('blog')}}">Blog</a></div>
                            <div class="about-us"><a id="about-us" href="{{route('about')}}">About us</a></div>
                            <div class="contact-us"><a id="contact-us" href="{{route('contact')}}">Contact Us</a></div>
                        </nav>
                    </nav>
                    <div class="frame-container">
                        <div class="frame-group"><a href="https://www.facebook.com/">
                                <div class="icon-link"><img class="frame-child" loading="lazy" alt=""
                                        src="{{url('./frontend/assets/facebook-logo.png')}}" /></div>
                            </a>
                            <a href="https://www.twitter.com/">
                                <div class="icon-link"><img class="frame-item" loading="lazy" alt=""
                                        src="{{url('./frontend/assets/twitter-logo.png')}}" /></div>
                            </a>
                            <a href="https://www.youtube.com/">
                                <div class="icon-link"><img class="frame-inner" loading="lazy" alt=""
                                        src="{{url('./frontend/assets/youtube-logo.png')}}" /></div>
                            </a>
                        </div>
                    </div>
                </header>
                <div class="frame-div">
                    <div class="frame-parent1">
                        <div class="frame-wrapper1">
                            <div class="frame-parent2">
                                <div class="italic-text-wrapper">
                                    <h1 class="italic-text1">Italic Text</h1>
                                </div>
                                <div class="turn-your-ordinary">
                                    Turn your ordinary text into fancy italics!
                                </div>
                            </div>
                        </div>
                        <div class="input-type-icon-parent">
                            <img class="input-type-icon" alt="" src="{{url('./frontend/assets/vector.png')}}" />

                            <div class="rectangle-parent">
                                <div class="rectangle-div"></div>
                                <div class="rectangle-group">
                                    <textarea class="rectangle-group-textarea" name="text" id="textInput" rows="8"
                                        cols="7" placeholder="Type Here"></textarea>
                                    <!-- <div class="frame-child1"></div>
                    <div class="type-here">Type here...</div> -->
                                    <div class="frame-wrapper2" id="frame-wrapper2"><button id="pasteText">
                                            <div class="frame-parent3">
                                                <div class="frame-wrapper3">
                                                    <img class="group-icon" loading="lazy" alt=""
                                                        src="{{url('./frontend/assets/paste-logo.png')}}" />
                                                </div>
                                                <div class="past-text">Paste Text</div>
                                            </div>
                                        </button>
                                    </div>

                                </div>
                                <div class="vector-parent">
                                    <img class="vector-icon" loading="lazy" alt="" src="{{url('./frontend/assets/vector-55.png')}}" />

                                    <div class="frame-parent4">
                                        <div class="frame-parent5">
                                            <div class="frame-wrapper4">
                                                <button id="eraseButton">
                                                    <div class="frame-wrapper5">
                                                        <img class="frame-child2" loading="lazy" alt=""
                                                            src="{{url('./frontend/assets/erase.png')}}" />
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="frame-wrapper6">
                                                <button id="boldButton">
                                                    <div class="b-wrapper">
                                                        <b class="b">B</b>
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="bi-wrapper-div">
                                                <button id='boldItalicButton'>
                                                    <div class="bi-wrapper">

                                                        <i class="bi">BI</i>

                                                    </div>
                                                </button>
                                            </div>
                                            <div class="frame-wrapper7">
                                                <button id="boldButton2">
                                                    <div class="b-container">
                                                        <b class="b1">B</b>
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="frame-wrapper-btn">
                                                <button id="italicButton">
                                                    <div class="bi-container">
                                                        <i class="bi1">BI</i>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="wrapper">
                                            <div class="div" id="wordCount">0/5000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="neg-button-parent">
                            <button class="neg-button" id="copyButton">
                                <div class="explore">Copy</div>
                            </button>
                            <!-- <a href="http://www.twitter.com"> -->
                            <button class="neg-button1">

                                <div class="neg-button-inner">
                                    <img class="frame-child3" alt="" src="{{url('./frontend/assets/tweet-btn.png')}}" />
                                </div>
                                <div class="explore1">Tweet</div>
                            </button>
                            <!-- </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cursiva-home-page-child">
            <div class="frame-parent6">
                <div class="what-is-italic-text-wrapper">
                    <h1 class="what-is-italic">What is Italic Text?</h1>
                </div>
                <div class="frame-parent7">
                    <img class="frame-child4" loading="lazy" alt="" src="{{url('./frontend/assets/hero.png')}}" />

                    <div class="frame-wrapper8">
                        <div class="italic-text-is-a-free-and-easy-parent">
                            <div class="italic-text-is">
                                Italic Text is a free and easy online tool that allows you to
                                instantly convert your regular text into a variety of
                                attractive italic styles. Add a touch of elegance and
                                distinction to your writing!
                            </div>
                            <div class="uses-of-italic-text-parent">
                                <h2 class="uses-of-italic">Uses of Italic Text</h2>
                                <div class="social-media-make-your-social-parent">
                                    <div class="social-media-make-your-container">
                                        <ul class="social-media-make-your-social">
                                            <li class="social-media-make-your">
                                                Social Media: Make your social media posts stand out
                                                with italicized titles and phrases.
                                            </li>
                                            <li class="messages-and-emails-give">
                                                Messages and emails: Give your messages a personal and
                                                sophisticated touch.
                                            </li>
                                            <li class="graphic-design-incorporate-it">
                                                Graphic Design: Incorporate italic text elements and
                                                titles for your creative projects.
                                            </li>
                                            <li>
                                                Personal Expression: Showcase your unique style and
                                                add emphasis to your writing.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="start-exploring-the">
                                        Start exploring the possibilities of Italic Text now!
                                    </div>
                                </div>
                            </div>
                            <button class="neg-button2">
                                <div class="explore2">Get Started</div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="rectangle-container">
            <div class="frame-child5"></div>
            <div class="frame-parent8">
                <div class="frame-parent9">
                    <div class="cursiva-logo-1-wrapper">
                        <img class="cursiva-logo-11" alt="" src="{{url('./frontend/assets/footer-logo.png')}}" />
                    </div>
                    <div class="frame-parent10">
                        <img class="frame-child6" loading="lazy" alt="" src="{{url('./frontend/assets/footer-email.png')}}" />

                        <div class="infotextoencursivacom">info@textoencursiva.com</div>
                    </div>
                    <div class="frame-icon">
                        <a href="https://www.facebook.com/">
                            <div class="icon-link"><img class="frame-child" loading="lazy" alt=""
                                    src="{{url('./frontend/assets/facebook-logo.png')}}" /></div>
                        </a>
                        <a href="https://www.twitter.com/">
                            <div class="icon-link"><img class="frame-item" loading="lazy" alt=""
                                    src="{{url('./frontend/assets/twitter-logo.png')}}" /></div>
                        </a>
                        <a href="https://www.youtube.com/">
                            <div class="icon-link"><img class="frame-inner" loading="lazy" alt=""
                                    src="{{url('./frontend/assets/youtube-logo.png')}}" /></div>
                        </a>

                    </div>

                </div>
                <div class="useful-links-parent">
                    <h2 class="useful-links">Useful Links</h2>
                    <div class="italic-text-group">
                        <div class="italic-text2">
                            <a href="{{route('home')}}">
                                <ul class="italic-text3">
                                    <li>Italic Text</li>
                                </ul>
                            </a>
                        </div>
                        <div class="blog1">
                            <a href="{{route('blog')}}">
                                <ul class="blog2">
                                    <li>Blog</li>
                                </ul>
                            </a>
                        </div>
                        <div class="about-us1">
                            <a href="{{route('about')}}">
                                <ul class="about-us2">
                                    <li>About us</li>
                                </ul>
                            </a>
                        </div>
                        <div class="contact-us1">
                            <a href="{{route('contact')}}">
                                <ul class="contact-us2">
                                    <li>Contact us</li>
                                </ul>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="frame-parent11">
                    <div class="sign-up-wrapper">
                        <h1 class="sign-up">Sign Up</h1>
                    </div>
                    <div class="join-our-email">
                        Join our email list and receive the latest case studie, events
                        update, product news, and much more!
                    </div>
                    <div class="field">
                        <input class="label" placeholder="Enter Your Email" type="text" />
                        <a href="#">
                            <img class="footer-signup-field-icon" alt="" src="{{url('./frontend/assets/signup-email-icon.png')}}" /></a>
                    </div>
                </div>
            </div>
            <div class="copyright-textoencursivacom-wrapper">
                <div class="copyright-textoencursivacom">
                    Copyright © TextoEnCursiva.com
                </div>
            </div>
        </footer>
    </div>
    <script src="./frontend/script/script.js"></script>
</body>

</html>