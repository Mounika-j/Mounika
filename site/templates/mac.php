<?php snippet('header') ?>

<?= css('assets/css/mac.css') ?>
<?= css('assets/css/main.css') ?>
<?= css('assets/js/flexslider/flexslider.css') ?>
<?php snippet('hero') ?>
	
	<section class="iphone-section" id="vector-illustration">
    	<div class="container">
    		<div class="header-desc">
    		    <h2>Powerful vector design tools</h2>
  				<h3>Professional desktop illustration, for everyone.</h3>
    		    <p>Graphic is a modern full-featured graphic design and illustration application, created specifically for Mac OS X. Packed with many powerful features, and designed to be easy to use, you can use Graphic to create everything from simple diagrams to intricate detailed vector artwork. Import and export SVG, PDF and Photoshop PSD documents, creating simple workflows with other applications.</p>
    		</div> 

        <div class="mac-wrap">
          <div class="iphone-slider" role="main">
              <div id="slider" class="flexslider clearfix">
                <ul class="slides clearfix">
                  <li>
                    <img src="<?= $page->image('illustration1.jpg')->url() ?>">
                  </li>
                  <li>
                    <img src="<?= $page->image('illustration2.jpg')->url() ?>">
                  </li>
                  <li>
                    <img src="<?= $page->image('illustration3.jpg')->url() ?>">
                  </li>
                </ul>
              </div>
          </div>
        </div>

    		<div class="feature-pack clearfix">
    	      <div class="col-1-3">
    	        <img src="<?php echo url('assets/images/feature_pencil.svg') ?>">
    	        <h3>Vector Drawing</h3>
    	        <p>Powerful bezier pen tool for drawing points, curves, and lines. Pencil and brush tools for sketching - quickly create custom shapes and paths.</p>
    	      </div>
    	      <div class="col-1-3">
    	        <img src="<?php echo url('assets/images/feature_shapes.svg') ?>">
    	        <h3>Shape Tools</h3>
    	        <p class="feature-desc">Versatile set of customizable shape drawing tools. Create lines, arcs, rounded rects, ellipses, stars, polygons, etc. Geometry settings pane for precise numeric editing.</p>
    	      </div>
    	      <div class="col-1-3">
    	        <img src="<?php echo url('assets/images/feature_layers.svg') ?>">
    	        <h3>Layers</h3>
    	        <p class="feature-desc">Easily create detailed designs using multiple layers. Create new layers, change their order, merge, and delete them in the Layers pane. Adjust a layer's blend mode and opacity.</p>
    	      </div>
    		</div>
    	</div>
    </section>
	
    <section class="iphone-section" id="graphic-design">
      <div class="container">
        <div class="header-desc">
            <h2>Graphic Design</h2>
  		  <h3>A versatile set of design tools.</h3>
            <p>With powerful path editing tools, text layout and styling features, layer effects, and more - Graphic has the tools you need to create striking, beautiful designs. All of the features you'd expect to find in a professional design application are all right here, built from the ground up to work in fast modern way.</p>
        </div> 
      
        <div class="mac-wrap">
          <div class="iphone-slider" role="main">
              <div id="slider" class="flexslider clearfix">
                <ul class="slides clearfix">
                  <li>
                    <img src="<?= $page->image('design1.jpg')->url() ?>">
                  </li>
                  <li>
                    <img src="<?= $page->image('design2.jpg')->url() ?>">
                  </li>
                  <li>
                    <img src="<?= $page->image('design3.jpg')->url() ?>">
                  </li>
                </ul>
              </div>
          </div>
        </div>

        <div class="feature-pack clearfix">
            <div class="col-1-3">
              <img src="<?php echo url('assets/images/feature_path.svg') ?>">
              <h3>Path Editing</h3>
              <p>Union, Subtract, Intersect, Exclude and Divide paths. Quickly create custom shapes by combining multiple shapes together to form new ones. Join and disconnect vector paths.</p>
            </div>
            <div class="col-1-3">
              <img src="<?php echo url('assets/images/feature_text.svg') ?>">
              <h3>Text with Style</h3>
              <p class="feature-desc">Multi-style text boxes with line height and text kerning options. Place text along a path. In-place editing of transformed text. Smart text box resizing.</p>
            </div>
            <div class="col-1-3">
              <img src="<?php echo url('assets/images/feature_fx.svg') ?>">
              <h3>Appearance FX</h3>
              <p class="feature-desc">Apply drop shadows, inner shadows, inner and outer glows to shapes. Add multiple strokes, fills, and effects to a single object. Arrange the order of fills, strokes, and effects using drag and drop.</p>
            </div>
        </div>
      </div>
    </section>

    <section class="iphone-section" id="tech-illustration">
      <div class="container">
        <div class="header-desc">
            <h2>Technical illustration</h2>
  		  <h3>Accuracy and precision, all in one.</h3>
            <p>Create detailed technical designs, floor plans, and schematics using Graphic's customizable canvas grid, smart alignment guides, object snapping, and dimensioning tools. Choose from a variety of ruler unit display formats including pixels, feet, inches, yards, and metric units.</p>
        </div> 
      
        <div class="mac-wrap">
          <div class="iphone-slider" role="main">
              <div id="slider" class="flexslider clearfix">
                <ul class="slides clearfix">
                  <li>
                    <img src="<?= $page->image('dimensioning1.jpg')->url() ?>">
                  </li>
				  <li>
                    <img src="<?= $page->image('dimensioning2.jpg')->url() ?>">
                  </li>
				  <li>
                    <img src="<?= $page->image('dimensioning3.jpg')->url() ?>">
                  </li>
                </ul>
              </div>
          </div>
        </div>

        <div class="feature-pack clearfix">
            <div class="col-1-3">
              <img src="<?php echo url('assets/images/feature_rulers.svg') ?>">
              <h3>Rulers & Units</h3>
              <p>Built-in canvas style templates, with a fully customizable grid and margins. Set ruler units in pixels, inches, mm, and cm, and apply a scale factor to create to-scale designs.</p>
            </div>
            <div class="col-1-3">
              <img src="<?php echo url('assets/images/feature_dimensions.svg') ?>">
              <h3>Dimensioning</h3>
              <p class="feature-desc">Draw automatic dimension lines to create technical diagrams and schematics. Auto-calculated labels for length, width, height, and area. Add dimension labels to any object.</p>
            </div>
            <div class="col-1-3">
              <img src="<?php echo url('assets/images/feature_magnifier.svg') ?>">
              <h3>Smart Guides</h3>
              <p class="feature-desc">Smart guides allow you to quickly and easily align multiple objects. Draggable alignment guides and 'Snap to Point' also help you create pixel-perfect designs.</p>
            </div>
        </div>
      </div>
    </section>
  
    <section class="iphone-section" id="ui-design">
      <div class="container">
        <div class="header-desc">
            <h2>Mockups and UI Design</h2>
  		  <h3>Pixel-perfect designs.</h3>
            <p>Build mockups and interface designs right on your iPad. Start designing your next website or app wherever inspiration strikes. Using Graphic's vector drawing tools, shapes libraries, and layer effects features sketch out rough ideas or make fully pixel-perfect mockups.</p>
        </div> 
      
        <div class="mac-wrap">
          <div class="iphone-slider" role="main">
              <div id="slider" class="flexslider clearfix">
                <ul class="slides clearfix">
                  <li>
                    <img src="<?= $page->image('mockups1.jpg')->url() ?>">
                  </li>
                  <li>
                    <img src="<?= $page->image('mockups2.jpg')->url() ?>">
                  </li>
                </ul>
              </div>
          </div>
        </div>

        <div class="feature-pack clearfix">
            <div class="col-1-3">
              <img src="<?php echo url('assets/images/feature_styles.svg') ?>">
              <h3>Saved Styles</h3>
              <p>Save and reuse appearance styles. 'Copy Style' and 'Paste Style' commands allow you quickly copy the appearance of an object and easily apply that same appearance stack on others.</p>
            </div>
            <div class="col-1-3">
              <img src="<?php echo url('assets/images/feature_shapelibs.svg') ?>">
              <h3>Shape Libraries</h3>
              <p class="feature-desc">Create your own libraries of reusable custom shapes. Quickly create designs by organizing and reusing sets of related shapes. Included sample libraries for Floor Plans, App Mockups, and Symbols.</p>
            </div>
            <div class="col-1-3">
              <img src="<?php echo url('assets/images/feature_psd.svg') ?>">
              <h3>Photoshop Import/Export</h3>
              <p class="feature-desc">Import layered PSD files with vector paths and effects. Layer effects are imported as fully editable drop shadows, glows, etc. Export designs as layered PSD files.</p>
            </div>
        </div>
      </div>
    </section>
	
    <section id="all-devices">
  	<div class="header-desc">
  	    <h2>Sync designs easily with iCloud</h2>
  	    <h3>Full-featured vector drawing, <em>on all your devices</em>.</h3>
  	</div>
  	<img src="<?php echo url('assets/images/all_devices.jpg') ?>">
  	<p>Create and share designs easily across all of your devices, and sync documents seamlessly with iCloud. View and edit your designs from anywhere using the new full-featured iPhone version. iPad and iPhone versions of Graphic sold separately.</p>
    </section>

    <section id="more-features">
    	<div class="container">
    		<div class="header-desc">
    		    <h2>Packed with advanced features</h2>
    		    <h3>Designed for powerful workflows.</h3>
    		</div>
    		<div class="feature-pack clearfix">
    			<div class="col-1-4">
    		        <img src="<?= $page->image('mini_highsierra.png')->url() ?>">
    		        <h3>High Sierra</h3>
    		        <p>Graphic takes advantage of the latest new features in Mac OS X. It runs great on High Sierra, El Capitan, Yosemite, all the way to OS X Lion.</p>
    			</div>
    			<div class="col-1-4">
    		        <img src="<?= $page->image('feature_icloud.png')->url() ?>">
    		        <h3>iCloud Drive</h3>
    		        <p>Store your documents in iCloud, and keep them up to date across all your devices. Easily share designs between the Mac, iPad, and iPhone versions of Graphic.</p>
    			</div>
    			<div class="col-1-4">
    		        <img src="<?= $page->image('mini_export.png')->url() ?>">
    		        <h3>Auto-Export</h3>
    		        <p>Instantly export each layer or tagged item in a design as a separate file. Create @2x and @3x copies automatically, and export assets directly to Xcode.</p>
    			</div>
    			<div class="col-1-4">
    		        <img src="<?= $page->image('mini_scripting.png')->url() ?>">
    		        <h3>Scripting</h3>
  		        	<p>Use the built-in code editor to create, test, and run custom scripts. Previously time-consuming tasks can be automated easily with a few lines of code.</p>
    			</div>
    		</div>
    		
    		<div class="feature-pack clearfix">
    			<div class="col-1-4">
    		        <img src="<?= $page->image('mini_cmyk.png')->url() ?>">
    		        <h3>CMYK Colors</h3>
    		        <p>Create print-ready documents using CMYK colors and color profiles. Export CMYK-based PDF documents that are ready for print.</p>
    			</div>
    			<div class="col-1-4">
    		        <img src="<?= $page->image('feature_handoff.png')->url() ?>">
    		        <h3>Handoff</h3>
    		        <p>Switch seamlessly between devices using Handoff, transferring in-progress designs from one device to another with ease.</p>
    			</div>
    			<div class="col-1-4">
    		        <img src="<?= $page->image('feature_gpu.png')->url() ?>">
    		        <h3>GPU Accelerated</h3>
    		        <p>Optimized OpenGL drawing for incredibly fast performance. Faster drawing, faster editing, faster importing... simply work faster.</p>
    			</div>
    			<div class="col-1-4">
    		        <img src="<?= $page->image('feature_64bit.png')->url() ?>">
    		        <h3>64-bit</h3>
  		        	<p>Based on a modern architecture built for optimal performance. Optimized multi-threaded processing with Grand Central Dispatch.</p>
    			</div>
    		</div>
    		<div class="feature-pack clearfix">
    			<div class="col-1-4">
    		        <img src="<?= $page->image('pic_retina.png')->url() ?>">
    		        <h3>Retina</h3>
    		        <p>Graphic features a beautiful interface that looks gorgeous on the Retina display of the MacBook Pro, and on a 4K or 5K Retina iMac.</p>
    			</div>
    			<div class="col-1-4">
    		        <img src="<?= $page->image('feature_svg.png')->url() ?>">
    		        <h3>SVG / PDF / EPS Import</h3>
    		        <p>Import SVG, PDF, EPS and PDF-based AI files as editable vector objects. Easily import and export designs to/from other illustration applications.</p>
    			</div>
    			<div class="col-1-4">
    		        <img src="<?= $page->image('pic_autosave.png')->url() ?>">
    		        <h3>Autosave</h3>
  		        	<p>Graphic automatically autosaves documents at regular intervals to keep your work safe.</p>
    			</div>
    			<div class="col-1-4">
    		        <img src="<?= $page->image('pic_quicklook.png')->url() ?>">
    		        <h3>Quick Look</h3>
    		        <p>The built-in Quick Look plugin allows you to quickly preview your Graphic documents directly in the Finder.</p>
    			</div>
    		</div>
    	</div>
    </section>

<?php snippet('buysection') ?>

<?php snippet('footer') ?>