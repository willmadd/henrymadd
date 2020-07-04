<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-152879632-1"
    ></script> -->
    <script>
      // window.dataLayer = window.dataLayer || [];
      // function gtag() {
      //   dataLayer.push(arguments);
      // }
      // gtag("js", new Date());

      // gtag("config", "UA-152879632-1");
    </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Henry Madd | Spoken Word Artist | Theatre Maker | Workshop Facilitator
    </title>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/css/index.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/masonry.pkgd.min.js"></script>
  </head>
  <body>
    <?php
      define('WP_USE_THEMES', false);
      require('blog/wp-load.php');
      query_posts('showposts=4');
    ?>
    <header>
      <h1>
        <span class="blue-cap">H</span>enry <span class="blue-cap">M</span>add
      </h1>
      <p>SPOKEN WORD ARTIST • THEATRE MAKER • WORKSHOP FACILITATOR</p>
    </header>
    <nav>
      <a id="nav-home-text" href="/">Home</a>
      <a href="#about">About</a>
      <a href="#media">Media</a>
      <a href="#live-events">Live Events</a>
      <a href="/">Gallery</a>
      <a href="/">Education</a>
      <a href="#Rex">Rex</a>
      <a href="/">Contact</a>
      <div class="social-icons">
        <a href=""
          ><img src="/images/icons/facebook-white.svg" alt="facebook"
        /></a>
        <a href=""
          ><img src="/images/icons/instagram-white.svg" alt="instagram"
        /></a>
        <a href=""
          ><img src="/images/icons/youtube-white.svg" alt="youtube"
        /></a>
      </div>
    </nav>
    <main>
      <img
        class="head-image"
        src="/images/homepage-head.jpg"
        alt="Henry performing"
      />
      <div class="green-back" id="about">
        <div
          class="henry-about-me"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out"
          data-aos-once="true"
        >
          <p>
            Henry Madd is a spoken word artist, theatre maker and workshop
            facilitator. After cutting his teeth on the Californian poetry
            circuit he returned to his native England and firmly entrenched
            himself in the poetry community in Kent. He won the 2017 Apples and
            Snakes/ Wise Words Festival Emerging Artist Contest and has since
            gone on to perform around the country. Performance highlights
            include: City 451, Brighton Fringe, Nozstock, CSP in the Park main
            stage and supporting Lemn Sissay in Canterbury Cathedral. He is
            currently developing a one man show based on his experience growing
            us in a small town in the West-Mids, due to start touring Autumn
            2019.
          </p>
        </div>
        <div
          class="quote-wrapper"
          data-aos="fade-left"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out"
          data-aos-once="true"
        >
          <h2 class="quote">
            “Henry is one of the most exciting performers I’ve come across in
            the last couple of years."
          </h2>
          <p>Harry Baker</p>
        </div>
      </div>
      <div class="news" id="news">
        <h1>NEWS HERE</h1>
        <?php while (have_posts()): the_post(); ?>

<h4><?php the_title(); ?></h4>

<?php the_excerpt(); ?>

<p><a target="_blank" href="<?php the_permalink(); ?>">Read more...</a></p>

<?php endwhile; ?>
        <h1>news there</h1>
      </div>
      <div class="media section" id="media">
        <h1
          data-aos="fade-in"
          data-aos-duration="1000"
          data-aos-easing="ease-in-out"
          data-aos-once="true"
          data-aos-anchor-placement="top-bottom"
          data-aos-offset="50"
        >
          <span class="orange-cap">M</span>edia
        </h1>
        <ul class="link-content">
          <a
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
            data-aos-once="true"
            class="the-blue-nib media-link"
            href="https://thebluenib.com/review-of-henry-maddicotts-poetry-show-land-of-lost-content/"
            ><li>
              <h3>The Blue Nib</h3>
              <p>
                Review Of Henry Maddicott’s Poetry Show, Land Of Lost Content
              </p>
            </li></a
          >
          <a
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
            data-aos-once="true"
            data-aos-delay="250"
            class="canterbury-culture media-link"
            href="https://canterburyculture.org/lickityspit/"
            ><li>
              <h3>Canterbury Culture</h3>
              <p>LicKitySpit: A new evening of poetry in an ancient setting</p>
            </li></a
          >
          <a
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
            data-aos-once="true"
            data-aos-delay="500"
            class="the-forest-review media-link"
            href="http://www.theforestreview.co.uk/article.cfm?id=117740"
            ><li>
              <h3>The Forest Review</h3>
              <p>Number isn’t up for old red phone boxes</p>
            </li></a
          >
        </ul>
      </div>
      <div
        class="live-events section orange-back"
        id="live-events"
        data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-easing="ease-in-out"
        data-aos-anchor-placement="top-bottom"
        data-aos-once="true"
      >
        <h1>
          <span class="white-cap">L</span>ive
          <span class="white-cap">E</span>vents
        </h1>
        <h2 class="blue-cap">LicKitySpit</h2>
        <p>
          Henry is co-founder, producer and host of LicKitySpit poetry slams at
          The Marlowe Kit Canterbury. LicKitySpit fosters a warm community
          atmosphere, giving new and emerging artists a platform to develop,
          share the work and receive paid opportunities to perform. Expect fresh
          disco beats throughout the night from resident DJ: Jimmy Rahman, plus
          brand-new art exhibits from local artists each month.
        </p>
        <div class="live-events-lower">
          <div class="when">

            
            <h3> <span class="white-cap">U</span>pcoming <span class="white-cap">S</span>hows</h3>
            <ul>
              <li>
                <p>
                  20 Nov 19 
                </p>
                <a href="https://marlowetheatre.com/shows/lickityspit-11/">Tickets And More Info</a>
              </li>
          <li>
            <p>
              19 Feb 20
            </p>
            <a href="https://marlowetheatre.com/shows/lickityspit-12/">Tickets And More Info</a>
          </li>
          <li>
            <p>
              18 Mar 20
            </p>
            <a href="https://marlowetheatre.com/shows/lickityspit-13/">Tickets And More Info</a>
          </li>
          <li>
            <p>
              15 Apr 20
            </p>
            <a href="https://marlowetheatre.com/shows/lickityspit-14/">Tickets And More Info</a>
          </li>
        </ul>
      </div>
        <div class="where">
          <h3><span class="white-cap">W</span>here</h3>
          <address>
            Marlow Theatre<br/>
            The Friars, <br/>
            Canterbury,<br/>
            CT1 2AS
          </address>
        </div>
        <img src="./images/gallery/12.jpg" alt="" />
      </div>

        <h2 class="blue-cap">Solo Show – Land Of Lost Content/ Come Alive</h2>
        <p>
          Country life is often neglected by mainstream media. There are some
          very real, deep-seated issues in rural communities that are, for the
          most part, un-reported on. However, the themes this collection covers
          are not exclusive to these areas, issues surrounding masculinity,
          abuse and addiction are global. This work does not solely focus on
          these hardships; the goal is not to make you pity the characters you
          encounter but see them as real, intricate people full of hope and
          excitement desperate for new experiences.
        </p>
        <p>
          The show is a glimpse into the lives of my friends and I fighting,
          loving, and smoking our way through adolescence into young adulthood.
          The constant need to prove ourselves, alleviate boredom and grow up
          fast meant that the need to make it out alive fell to the wayside.
          Friendships were forged through shared experiences of failed
          adventures, bad habits and raves. Worlds are turned upside down in an
          instant and yet nothing ever seems to change.
        </p>
        <h4>Upcoming dates for Land Of Lost Content/ Come Alive</h4>

        <ul>
          <li>
            28 September – The Yurt, Hidden Isle Festival, Canterbury.
          </li>
          <li>
            29 September – Olbys Soul Café, Making Waves Festival, Canterbury.
          </li>
        </ul>
      </div>
      <h1
        data-aos="fade-in"
        data-aos-duration="1000"
        data-aos-easing="ease-in-out"
        data-aos-once="true"
        data-aos-anchor-placement="top-bottom"
        data-aos-offset="50"
      >
        <span class="blue-cap">G</span>allery
      </h1>
      <div
        class="gallery"
        data-aos="zoom-up"
        data-aos-duration="1000"
        data-aos-easing="ease-in-out"
        data-aos-once="true"
      >
        <div id="masonry-grid">
          <div class="gutter-sizer"></div>

          <div class="grid-item">
            <img src="./images/gallery/1.jpg" alt="" />
          </div>

          <div class="grid-item">
            <img src="./images/gallery/2.jpg" alt="" />
          </div>

          <div class="grid-item">
            <img src="./images/gallery/3.jpg" alt="" />
          </div>

          <div class="grid-item">
            <img src="./images/gallery/4.jpg" alt="" />
          </div>

          <div class="grid-item">
            <img src="./images/gallery/5.jpg" alt="" />
          </div>
          <div class="grid-item">
            <img src="./images/gallery/6.jpg" alt="" />
          </div>
          <div class="grid-item">
            <img src="./images/gallery/7.jpg" alt="" />
          </div>
          <div class="grid-item">
            <img src="./images/gallery/8.jpg" alt="" />
          </div>
          <div class="grid-item">
            <img src="./images/gallery/9.jpg" alt="" />
          </div>
          <div class="grid-item">
            <img src="./images/gallery/10.jpg" alt="" />
          </div>
          <div class="grid-item grid-item--width2">
            <img src="./images/gallery/11.jpg" alt="" />
          </div>
          <div class="grid-item">
            <img src="./images/gallery/12.jpg" alt="" />
          </div>
          <div class="grid-item">
            <img src="./images/gallery/13.jpg" alt="" />
          </div>
          <div class="grid-item">
            <img src="./images/gallery/14.jpg" alt="" />
          </div>
          <div class="grid-item">
            <img src="./images/gallery/15.jpg" alt="" />
          </div>
          <div class="grid-item grid-item--width2">
            <img src="./images/gallery/16.jpg" alt="" />
          </div>
        </div>
      </div>
      <div class="education section" id="education">
        <h1><span class="blue-cap">E</span>ducation</h1>
        <p>
          Henry works extensively teaching writing and theatre workshops to
          people of all ages and is passionate about promoting writing for
          wellbeing. He runs various community poetry projects designed to
          encourage people to connect with each other and the places they call
          home. Henry combines his theatre background with his writing teaching
          practice to get words up on their feet keeping writing exciting and
          relevant.
        </p>
        <p>
          In his own words:
        </p>
        <q
          >At school, I didn’t get poetry and saw writing as a chore, I could
          never imagine doing it for leisure. Now I love it and couldn’t live
          without it, I want everyone else to share that feeling. You don’t have
          to be good at spelling or have perfect grammar (I am the prime example
          of this) to be a writer, you just need to find your voice and say
          whatever it is you want to say.
        </q>
      </div>
      <div class="rex section" id="rex">
        <h1><span class="orange-cap">R</span>ex</h1>
        <p>
          Rex is an educational touring presentation and video aimed at students
          14 – 21 that explores the dangers of eating disorders with a focus on
          Anorexia. An introductory presentation covers the science behind the
          disorders highlighting that they stem from mental rather than physical
          roots. A video of a live performance then takes us though the
          biographical journey of a young person’s struggle with Anorexia,
          focussing on the emotional turmoil of living with this ‘abusive
          relationship’. The session is wrapped up with an open discussion.
        </p>
        <q
          >Students and staff were both impressed and commented on the power of
          the presentation.</q
        >
        <p>
          Herne Bay High
        </p>
      </div>
      <div class="contact section" id="contact">
        <h1>Contact Me</h1>
        <p>
          hello text text test I like chees,e it tastes very nice vello text
          text test I like chees,e it tastes very nice ello text text test I
          like chees,e it tastes very nicejj ello text text test I like chees,e
          it tastes very nicejkjnello text text test I like chees,e it tastes
          very nice kjnlkjnkljn ello text text test I like chees,e it tastes
          very nicenkjnello text text test I like chees,e it tastes very
          niceello text text test I like chees,e it tastes very nicekjnlkjello
          text text test I like chees,e it tastes very nicekljello text text
          test I like chees,e it tastes very nice
        </p>
      </div>
    </main>
    <footer>
      <h3>© Henry Maddicott 2020</h3>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      window.addEventListener("load", function() {
        // ....
        var container = document.querySelector("#masonry-grid");
        var msnry = new Masonry(container, {
          // options
          columnWidth: window.innerWidth / 4,
          itemSelector: ".grid-item"
        });
        $("document").ready(function() {
          // Javascript
        });
      });
    </script>
    <script>
      $("a").click(function() {
        $("html, body").animate(
          {
            scrollTop: $($(this).attr("href")).offset().top
          },
          500
        );
        return false;
      });
    </script>
    <script>
      $(document).on("scroll", function() {
        let top = $(document).scrollTop();
        console.log(top);
        if (top > 66) {
          $("#nav-home-text").html(
            "<h4><span class='blue-cap'>H</span>enry <span class='blue-cap'>M</span>add</h4>"
          );
        } else {
          $("#nav-home-text").html("Home");
        }
      });
    </script>
  </body>
</html>
