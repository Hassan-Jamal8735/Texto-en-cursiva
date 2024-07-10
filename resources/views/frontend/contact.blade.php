<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />


  <link rel="stylesheet" href="{{url('./frontend/css/contact.css')}}" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Calibri:wght@700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" />
</head>

<body>
  <div class="negrita-contact-us-page">
    <section class="negrita-contact-us-page-inner">
      <div class="main-content-parent">
        <header class="main-content">
          <img class="cursiva-logo-1" loading="lazy" alt="" src={{url('./frontend/assets/logo.png')}} />

          <nav class="navigation-wrapper">
            <nav class="navigation">
              <div class="italic-text"><a id="italic-text" href="{{route('home')}}">Italic Text</a></div>
              <div class="blog"><a id="blog" href="{{route('blog')}}">Blog</a></div>
              <div class="about-us"><a id="about-us" href="{{route('about')}}">About us</a></div>
              <div class="contact-us"><a id="contact-us" href="{{route('contact')}}">Contact Us</a></div>
            </nav>
          </nav>
          <div class="side-bar-wrapper">
            <div class="side-bar">
              <a href="https://www.facebook.com/">
                <div class="icon-link"><img class="side-bar-child" loading="lazy" alt=""
                    src={{url('./frontend/assets/facebook-logo.png')}} /></div>
              </a>
              <a href="https://www.twitter.com/">
                <div class="icon-link"><img class="side-bar-item" loading="lazy" alt=""
                    src={{url('./frontend/assets/twitter-logo.png')}} /></div>
              </a>
              <a href="https://www.youtube.com/">
                <div class="icon-link"><img class="side-bar-inner" loading="lazy" alt=""
                    src={{url('./frontend/assets/youtube-logo.png')}} /></div>
              </a>





            </div>
          </div>
        </header>
        <div class="contact-content-wrapper">
          <div class="contact-content">
            <div class="contact-content-child"></div>
            <div class="contact-details">
              <div class="contact-title">
                <h1 class="contact-us1">Contact Us</h1>
              </div>
              <div class="do-you-have">
                Do you have questions, suggestions or concerns? Write to us!
                Our team is here to help you 24/7. We value your opinion and
                will respond as soon as possible. Use the form below to send
                us your message:
              </div>
            </div>
            <form class="search-parent">
              <div class="search">
                <input class="value" placeholder="Name" type="text" />

                <img class="search-icon" alt="" src="./public/search.svg" />
              </div>
              <div class="search1">
                <input class="value1" placeholder="Email" type="text" />

                <img class="search-icon1" alt="" src="./public/search.svg" />
              </div>
              <div class="search2">
                <input class="value2" placeholder="Subject" type="text" />

                <img class="search-icon2" alt="" src="./public/search.svg" />
              </div>
              <div class="search3">
                <input class="value3" placeholder="Message" type="text" />

                <img class="search-icon3" alt="" src="./public/search.svg" />
              </div>
              <button class="neg-button">
                <div class="explore">Submit</div>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="rectangle-parent rectangle-parent-footer">
      <div class="frame-child"></div>
      <div class="footer-content">
        <div class="footer-top">
          <div class="footer-branding">
            <img class="cursiva-logo-11" alt="" src={{url('./frontend/assets/footer-logo.png')}} />
          </div>
          <div class="footer-info">
            <img class="footer-info-child" loading="lazy" alt="" src={{url('./frontend/assets/footer-email.png')}} />

            <div class="infotextoencursivacom">info@textoencursiva.com</div>
          </div>

          <div class="frame-parent12">
            <a href="https://www.facebook.com">
              <img class="frame-child8" loading="lazy" alt="" src={{url('./frontend/assets/facebook-logo.png')}} /></a>
            <a href="https://www.twitter.com">
              <img class="frame-child9" loading="lazy" alt="" src={{url('./frontend/assets/twitter-logo.png')}} /></a>
            <a href="https://www.youtube.com">
              <img class="frame-child10" loading="lazy" alt="" src={{url('./frontend/assets/youtube-logo.png')}} /></a>
          </div>

        </div>
      </div>
      <div class="footer-links">
        <h2 class="useful-links">Useful Links</h2>
        <div class="footer-nav">
          <div class="italic-text1">
            <a href="{{route('home')}}">
              <ul class="italic-text2">
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
          <div class="contact-us2">
            <a href="{{route('contact')}}">
              <ul class="contact-us3">
                <li>Contact us</li>
              </ul>
            </a>
          </div>
        </div>
      </div>
      <div class="footer-sign-up">
        <div class="sign-up-wrapper">
          <h1 class="sign-up">Sign Up</h1>
        </div>
        <div class="join-our-email">
          Join our email list and receive the latest case studie, events
          update, product news, and much more!
        </div>
        <div class="field">
          <input class="label" placeholder="Enter Your Email" type="text" />

          <a href="#"> <img class="field-child" alt="" src={{url('./frontend/assets/signup-email-icon.png')}} /></a>
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
</body>

</html>