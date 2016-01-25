<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">About
                <strong>Me</strong>
            </h2>
            <hr>
        </div>
        <div class="col-md-6">
            <a class="image-link" href="https://farm1.staticflickr.com/705/23094523915_b5636e6eb0_b.jpg" title="iceland"><img class="img-responsive" src="https://farm1.staticflickr.com/705/23094523915_b5636e6eb0_b.jpg" width="960" height="640" alt="iceland"></a>
            <!-- <img class="img-responsive img-border-left" src="img/iceland.jpg" alt=""> -->
        </div>
        <div class="col-md-6">
            <p>I've been extremely bless to be married to my wonderful wife, Marcela.</p>

            <p>We've traveled to Mexico, China, Iceland, France, Spain, England, Romainia to name a few. Feel free to checkout my <a href="https://www.flickr.com/photos/lyman_wong/">Flickr</a> page!</p>

            <p>I'm a huge bay area sports guy and a San Francisco 49er season ticket holder. Let's go Niners!</p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Our
                <strong>Family</strong>
            </h2>
            <hr>
        </div>
        <div class="col-sm-4 text-center">
            <a class="image-link"  href="https://farm6.staticflickr.com/5830/22471704214_23f2ff28f4_b.jpg" title="niners"><img class="img-responsive"src="https://farm6.staticflickr.com/5830/22471704214_23f2ff28f4_b.jpg" width="960" height="720" alt="niners"></a>
            <!-- <img class="img-responsive" src="/img/niners.jpg/750x450" alt=""> -->
            <h3>Marcela Benitez<br />
                <small>Community Manager<br />
                @CBS Interactive</small>
            </h3>
        </div>
        <div class="col-sm-4 text-center">
            <a class="image-link"  href="https://farm6.staticflickr.com/5815/22676134537_263884d18d_b.jpg" title="lifting"><img class="img-responsive" src="https://farm6.staticflickr.com/5815/22676134537_263884d18d_b.jpg" width="631" height="705" alt="lifting"></a>
            <!-- <img class="img-responsive" src="/img/lifting.jpg/750x450" alt=""> -->
            <h3>Lyman Wong<br />
                <small>Front End Developer<br />
                @Phlint</small>
            </h3>
        </div>
        <div class="col-sm-4 text-center">
            <a class="image-link"  href="https://farm1.staticflickr.com/731/22702217329_9bc39a983d_k.jpg" title="Freyja_1"><img class="img-responsive" src="https://farm1.staticflickr.com/731/22702217329_9bc39a983d_k.jpg" width="2048" height="1534" alt="Freyja_1"></a>
            <!-- <img class="img-responsive" src="/img/freyja_1.jpg/750x450" alt=""> -->
            <h3>Freyja<br />
                <small>Chief Fun Officer<br />
                @everywhere</small>
            </h3>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<script src="js/magnific-popup.js"></script>
    <script type="text/javascript">
      // Initialize popup as usual
      $('.image-link').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below

        zoom: {
          enabled: true, // By default it's false, so don't forget to enable it

          duration: 300, // duration of the effect, in milliseconds
          easing: 'ease-in-out', // CSS transition easing function

          // The "opener" function should return the element from which popup will be zoomed in
          // and to which popup will be scaled down
          // By defailt it looks for an image tag:
          opener: function(openerElement) {
            // openerElement is the element on which popup was initialized, in this case its <a> tag
            // you don't need to add "opener" option if this code matches your needs, it's defailt one.
            return openerElement.is('img') ? openerElement : openerElement.find('img');
          }
        }

      });
    </script>
