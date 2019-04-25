<?php snippet('header') ?>

<?= css('assets/css/ipad-pro.css') ?>
<?= css('assets/css/main.css') ?>
<?= css('assets/js/flexslider/flexslider.css') ?>
<?php snippet('hero') ?>
	
<section class="iphone-section" id="vector-illustration">
 <div class="container">
  <div class="header-desc">
    <h3>Graphic for iPad Pro</h3>
    <p>Now with a larger drawing canvas (can we say 16k x 16k?), pressure-sensitive drawing with the Apple Pencil, document tabs, and more! Professional desktop-class vector illustration tools right on your iPad.</p>
  </div>

  <div class= "ipad-pro-video clearfix">
    <div class="col-1-2">
      <div class="video-wrap">
        <img src="<?= $page->image('play_btn.png')->url() ?>">
      </div>
      <video controls>
        <source src="<?= $page->file('Graphic_Update_Final.mp4')->url() ?>" type="video/mp4">
        </video>
      </div>
      <div class="col-1-2 feature-desc">
        <br/>
        <br/>
        Unlock the full-featured vector drawing potential of
        Graphic with the precision of the Apple Pencil. Create
        everything from detailed vector illustrations, graphic
        designs, technical diagrams, to beautiful works of art.
        Watch the demo.
      </div>
    </div>
  </div>
</section>

<section class="iphone-section" id="both-worlds">
  <div class="container">
    <div class="header-desc">
      <h3>Best of Both Worlds</h3>
      <p>Your iPad is your new desktop. With the seamless integration of the Smart Keyboard in Graphic, you’ll never feel too far away from your Mac. All of the fast keyboard shortcuts and powerful workflows you need are now right there with you.</p>
    </div>

    <div class="ipad-pro-keyboard">
      <div class="container">
        <img src="<?= $page->image('keyboard.png')->url() ?>">
      </div>
    </div>


    <div class="feature-pack clearfix">
      <div class="col-1-3">
        <img src="<?= $page->image('tools.png')->url() ?>">
        <h3>Quickly Switch Tools</h3>
        <p class="feature-desc">Connect your Smart Keyboard and quickly switch between tools using the same keyboard shortcuts as you do on your desktop.</p>
      </div>
      <div class="col-1-3">
        <img src="<?= $page->image('shortcut.png')->url() ?>">
        <h3>Keyboard Shortcuts</h3>
        <p class="feature-desc">Start using your favorite shortcuts right away with the Smart Keyboard. Create groups, lock shapes, join paths and more.</p>
      </div>
      <div class="col-1-3">
        <img src="<?= $page->image('clipping.png')->url() ?>">
        <h3>Vector Clipping Paths</h3>
        <p class="feature-desc">Paste Inside &ndash; Vector shapes and images can be clipped as a group inside another vector shape.</p>
      </div>
    </div>
  </div>
</section>

<section class="iphone-section" id="graphic-design">
  <div class="container">
    <div class="header-desc">
      <h3>Optimized for the iPad Pro &amp; Apple Pencil</h3>
      <p>Whether you're creating beautiful illustrations or tweaking your latest design,  Graphic offers versatility and precision  with features such as full vector editing controls.</p>
    </div>

    <div class="ipad-pro-penicl">
      <div class="container">
        <img src="<?= $page->image('ipad1.png')->url() ?>">
      </div>
    </div>


    <div class="feature-pack clearfix">
      <div class="col-1-3">
        <img src="<?= $page->image('icon1.svg')->url() ?>">
        <h3>Pressure Sensitive Strokes</h3>
        <p class="feature-desc">Now with Apple Pencil support. Graphic automatically detects variable-width brush strokes.</p>
      </div>
      <div class="col-1-3">
        <img src="<?= $page->image('icon2.svg')->url() ?>">
        <h3>Brush Editor</h3>
        <p class="feature-desc">Get the look you want.  Precisely edit or create your own brushes with Graphic's detailed brush editor.</p>
      </div>
      <div class="col-1-3">
        <img src="<?= $page->image('icon3.svg')->url() ?>">
        <h3>Fully Editable Vector Strokes</h3>
        <p class="feature-desc">Draw, edit and perfect your strokes at any time with full path and node editing capabilities.</p>
      </div>
    </div>
  </div>
</section>

<section class="iphone-section" id="tech-illustration">
  <div class="container">
    <div class="header-desc">
      <h3>A Professional Graphics App On the Go</h3>
      <p>Take projects on the go without leaving behind your favorite features.  Graphic on iPad Pro is seamlessly similar to Graphic for Mac.</p>
    </div>

    <div class="ipad-pro-penicl">
      <div class="container">
        <img src="<?= $page->image('ipad2.png')->url() ?>">
      </div>
    </div>

    <div class="feature-pack clearfix">
      <div class="col-1-3">
        <img src="<?= $page->image('icon4.svg')->url() ?>">
        <h3>Photoshop/Illustrator Support</h3>
        <p class="feature-desc">Import your Photoshop  and Illustrator files  from desktop to iPad Pro  and back again without a sweat.</p>
      </div>
      <div class="col-1-3">
        <img src="<?= $page->image('icon5.svg')->url() ?>">
        <h3>Multiple Tabs</h3>
        <p class="feature-desc">Document tabs allow you to easily switch between multiple documents open at the same time.</p>
      </div>
      <div class="col-1-3">
        <img src="<?= $page->image('icon6.svg')->url() ?>">
        <h3>Smart Guides & Snapping</h3>
        <p class="feature-desc">Pixel perfection? Rule of thirds? Alignment is a piece of cake with smart guides and snapping.</p>
      </div>
    </div>
  </div>
</section>

<section id="all-devices">
  <div class="header-desc">
    <h2>Sync designs easily with iCloud</h2>
    <h3>Full-featured vector drawing, <em>on all your devices</em>.</h3>
  </div>

  <div class="ipad-pro-penicl">
    <div class="container">
      <img src="<?php echo url('assets/images/all_devices.jpg') ?>">
    </div>
  </div>
</section>

<section id="more-features">
 <div class="container">
  <div class="header-desc">
    <h2>More advanced features</h2>
    <h3>All the features you love from our desktop version and more.</h3>
  </div>
  <div class="feature-pack clearfix">
   <div class="col-1-4">
    <img src="<?= $page->image('feature_ios11.png')->url() ?>">
    <h3>iOS 11</h3>
    <p>Optimized to take advantage of the latest new features in iOS 11. Graphic also runs great on iOS 10 and iOS 9.</p>
  </div>
  <div class="col-1-4">
    <img src="<?= $page->image('feature_icloud.png')->url() ?>">
    <h3>iCloud Drive</h3>
    <p>Store your documents in iCloud, and keep them up to date across all your devices. Easily share designs between the Mac, iPad, and iPhone versions of Graphic.</p>
  </div>
  <div class="col-1-4">
    <img src="<?= $page->image('feature_gpu.png')->url() ?>">
    <h3>GPU Accelerated</h3>
    <p>Optimized OpenGL drawing for incredibly fast performance. Faster drawing, faster editing, faster importing... Simply work faster.</p>
  </div>
  <div class="col-1-4">
    <img src="<?= $page->image('feature_64bit.png')->url() ?>">
    <h3>64-bit</h3>
    <p>Based on a modern architecture built for optimal performance. Optimized multi-threaded processing with Grand Central Dispatch.</p>
  </div>
</div>
<div class="feature-pack clearfix">
 <div class="col-1-4">
  <img src="<?= $page->image('feature_dropbox.png')->url() ?>">
  <h3>Dropbox</h3>
  <p>Export designs directly to Dropbox using the built-in browser. Import images, resources, and other files from any Dropbox folder.</p>
</div>
<div class="col-1-4">
  <img src="<?= $page->image('feature_svg.png')->url() ?>">
  <h3>SVG and PDF Vector Formats</h3>
  <p>Import SVG, PDF, and PDF-based AI files as editable vector objects. Easily import and export designs to/from other illustration applications.</p>
</div>
<div class="col-1-4">
  <img src="<?= $page->image('feature_sharing.png')->url() ?>">
  <h3>Export</h3>
  <p>Export your designs easily using the built-in sharing features in iOS. Share designs on Facebook, Twitter, via Email, to other iPad apps, etc.</p>
</div>
<div class="col-1-4">
  <img src="<?= $page->image('feature_handoff.png')->url() ?>">
  <h3>Handoff</h3>
  <p>Switch seamlessly between devices using Handoff, transferring in-progress designs from one device to another with ease.</p>
</div>
</div>
</div>
</section>

<?php snippet('buysection') ?>

<?php snippet('footer') ?>

<?php echo js('assets/js/ipad-pro.js') ?>
