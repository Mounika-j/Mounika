<?php snippet('header') ?>

<?= css('assets/css/new.css?v=1') ?>

<div id="heroSection">
	<div class="wrapper">
		<div id="heroWrapper">
			<div id="hero">
			</div>
		
			<div id="intro">
				<p><span style="font-size:100%;">Graphic is a professional design and illustration application designed specifically for Mac OS X.</span><br/><span>Version 2.5 is packed with many powerful new features and improvements.</span></p>
			</div>
		</div>
	</div>
</div>

<div id="main">
	<div class="wrapper">			
		
		<div id="handoff" class="featureSection centerTextBlock">
			<div style= "margin-top:-18px">
				<h2 style="color: #AAA; font-size:200%">New in Graphic:<h2>
				<h1>Handoff on Mac and iPad</h1>
				<h2 style="text-align: center">Begin on your iPad, finish on your Mac.</h2>
				<p>With support for Handoff and iCloud Drive added in Graphic 2.5, using multiple devices to work on your designs has never been easier. Switch seamlessly between devices using Handoff, transferring in-progress designs from one device to another with ease.</p>
				<img src="<?= $page->image('handoff.jpg')->url() ?>" width="998" height="541" />
				<p>Both the Mac and iPad versions of Graphic can create and edit the exact same documents, allowing you to truly work from anywhere.</p>
			</div>
		</div>
		
		<div id="icloudDrive" class="featureSection">
			<div class="rightImageBlock">
				<img src="<?= $page->image('icloud_drive.jpg')->url() ?>" width="256" height="195" />
			</div>
			<div class="leftTextBlock">
				<h1>iCloud Drive.</h1>
				<h2>Your files, there where you need them.</h2>
				<p>Safely store and access your Graphic documents directly on iCloud Drive. Files saved to iCloud using either the Mac or iPad version of Graphic can be accessed directly from the Graphic iCloud Drive folder on OS X Yosemite and iOS 8.</p>
				<p>On iOS 8, import compatible files saved to any iCloud Drive folder, including files exported by other applications.</p>
			</div>
		</div>
		
		<div id="yosemite" class="featureSection">
			<div class="leftImageBlock">
				<img src="<?= $page->image('new_interface.jpg')->url() ?>" width="392" height="373"/>
			</div>
			<div class="rightTextBlock">
				<h1>Enhanced for Yosemite</h1>
				<h2>Beautiful new look, even better workflows.</h2>
				<p>Graphic 2.5 features a beautiful new interface designed to fit right in with the clean, focused look of Yosemite.</p>
				<p>With a new single-window design, the most frequently used settings and options are displayed in-place, always available right where you need them.</p><p> Have a new Retina iMac with ample screen space? Switch between single window mode and resizable floating panels to maximize your screen space.</p>
			</div>
		</div>
		
		<div id="cmykColors" class="featureSection">
			<div class="rightImageBlock">
				<img src="<?= $page->image('cmyk_print.jpg')->url() ?>" width="500" height="427"/>
			</div>
			<div class="leftTextBlock">
				<h1>CMYK Colors</h1>
				<h2>Ready for print.</h2>
				<p>Create print-ready documents using CMYK colors and color profiles. Export CMYK-based PDF documents that appear in print exactly as they do on screen.</p>
				<p>Prepare designs for print or for the web with a professional color management workflow, assigning and converting between RGB and CMYK color profiles as needed for each document.</p>
			</div>
		</div>
		
		<div id="patternFills" class="featureSection">
			<div class="leftImageBlock">
				<img src="<?= $page->image('patterns.png')->url() ?>" width="256" height="256"/>
			</div>
			<div class="rightTextBlock">
				<h1>Pattern Fills</h1>
				<h2>Boundless backgrounds.</h2>
				<p>Create and use repeating patterns to fill the inside of shapes, text, and backgrounds. Save custom patterns to the Pattern palette.</p>
				<p>Scale, rotate, and position patterns within shapes using the Pattern tool. New patterns can be created using any combination of shapes and images.</p>
			</div>
		</div>
		
		<div id="clipPaths" class="featureSection">
			<div class="rightImageBlock">
				<img src="<?= $page->image('clip_paths.png')->url() ?>" width="525" height="275"/>
			</div>
			<div class="leftTextBlock">
				<h1>Clipping Paths</h1>
				<h2>Paste Inside.</h2>
				<p>Using the new 'Paste Inside' feature, vector shapes and images can be clipped as a group inside another vector shape.</p>
				<p>Manage clipping groups easily from the Layers pane. Clipped shapes remain fully editable - select any shape within a clip group to move or edit it directly.</p>
			</div>
		</div>
		
		<div id="blurEffect" class="featureSection">
			<div class="leftImageBlock">
				<img src="<?= $page->image('blur_effect.png')->url() ?>" width="452" height="232"/>
			</div>
			<div class="rightTextBlock">
				<h1>Blur Effect</h1>
				<h2>A new range of effects.</h2>
				<p>Apply blur effects to vector shapes and images. Change the blur radius setting from the Appearance Effects pane to adjust the amount of blur applied.</p>
				<p>Create realistic designs using a variety of blurs, shadows, and glows.</p>
			</div>
		</div>				
		
		<div id="autoExports" class="featureSection">
			<div class="rightImageBlock">
				<img src="<?= $page->image('export_sizes.png')->url() ?>" width="185" height="191"/>
			</div>
			<div class="leftTextBlock">
				<h1>Automated Exports</h1>
				<h2>Your workflow, supercharged.</h2>
				<p>Use the 'Export Layers' command to instantly export each layer or tagged item in a design. New options to also create @2x and @3x copies of each asset automatically.</p>
				<p>Create web / app design mockups and simply tag groups, shapes, and layers with filenames to easily export an entire design as separate assets.</p>
			</div>
		</div>
		
		<div id="xcodeInt" class="featureSection">
			<div class="leftImageBlock">
				<img src="<?= $page->image('xcode_export.png')->url() ?>" width="500" height="300" />
			</div>
			<div class="rightTextBlock">
				<h1>Xcode Integration.</h1>
				<h2>We're developers too.</h2>
				<p>Graphic 2.5 features an incredibly time-saving new feature designed specifically for Mac and iOS developers.</p><p>Instantly export vector and bitmap image files directly into Xcode xcasset folders. Assets exported into xcasset folders appear directly in Xcode - no longer look for exported files in Finder and drag them to Xcode manually!</p>
			</div>
		</div>
		
		<div id="selectSimilar" class="featureSection">
			<div class="rightImageBlock">
				<img src="<?= $page->image('select_similar.png')->url() ?>" width="303" height="188"/>
			</div>
			<div class="leftTextBlock">
				<h1>Select Similar</h1>
				<h2>No more hide and seek.</h2>
				<p>Easily find and select objects in a complex design based on their shared appearance settings. Select objects with the same stroke, fill, opacity, etc.</p>
				<p>Search for and select objects across all layers or limit the search to only find objects within the currently selected layers.</p>
			</div>
		</div>
		
		<div class="sectionDivider">
			<h1>New in Graphic 2.4.1</h1>
		</div>
		<hr style="border: 1px solid #333">
		
		<div id="psdDesc" class="featureSection centerTextBlock">
			<div style= "margin-top:-18px">
				<h1>Create and Run custom Plug-ins / Scripts</h1>
				<h2 style="text-align: center">Limitless possibilities.</h2>
				<p>Extend Graphic’s existing feature set with custom plug-ins. Graphic plug-ins are text-based scripts written in JavaScript, with optional access to Mac OS X's powerful Cocoa APIs. The new plug-in APIs can be used to create very robust plug-ins, with many types editing actions possible - creating new shapes, modifying vector paths, changing the current selection, customizing appearance settings, importing / exporting data, and much more.</p>					
				<img src="<?= $page->image('plugincode.jpg')->url() ?>" width="963" height="607" style="margin-left: -50px"/>
			
				<p>Use the built-in code editor to create, test, and run custom scripts. Previously time-consuming tasks can be automated easily with a few lines of code. And since Graphic includes a built-in plug-in editor, you can very quickly get started creating and running your own scripts.</p>
				<a href="https://www.graphic.com/plugins/">Example Plug-Ins and API Documentation</a>
			</div>
		</div>
		
		<div id="layerExport" class="featureSection">
			<div class="rightImageBlock">
				<img src="<?= $page->image('swift.png')->url() ?>" width="800" height="285" style="border: 1px solid black"/>
			</div>
			
			<div class="leftTextBlock">
				<h1>Swift Code Export</h1>
				<h2>Draw your code.</h2>
				<p>Extending Graphic's support for exporting vector shapes and effects as Core Graphics code, Graphic 2.4.1 adds Apple's new Swift language as an export option. Now choose between exporting graphics code in Objective-C or Swift.</p><p>Code automatically created by Graphic can be used in both iOS and Mac development projects.</p>
			</div>
		</div>
		
		<div class="sectionDivider">
			<h1>New in Graphic 2.4</h1>
		</div>
		<hr style="border: 1px solid #333">
		
		<div id="layersPane" class="featureSection">
			<div class="leftImageBlock">
				<img id="layers" src="<?= $page->image('layers.jpg')->url() ?>" width="637" height="432"/>
			</div>
			<div class="rightTextBlock">
				<h1>New Layers Pane</h1>
				<h2>Complete control over your projects.</h2>
				<p>The redesigned Layers pane gives you a powerful new way to work with and organize your projects.</p>
				<p>A new hierarchy-based layout gives you an overview of the structure of your entire design. View and edit object/group hierarchies directly, and select objects across multiple layers to edit them together.</p>
				<p>Quickly find and select a specific object within multiple levels of nested groups.</p>
			</div>
		</div>
		
		<div id="layersPane2" class="featureSection">
			<div class="rightImageBlock">
				<img id="" src="<?= $page->image('layer_drag.jpg')->url() ?>" width="392" height="402" />
			</div>
			<div class="leftTextBlock">
				<h2>As easy as drag and drop.</h2>
				<p>Arrange the order of objects within a design easily using drag and drop. Simply drag objects from one group to another to change their grouping.</p>
				<p>Set custom names for objects and groups to identify them. Object names are used as IDs when importing and exporting SVG files, while layer and group names are preserved when importing Photoshop PSD files.</p>
				<p>Copy and paste entire layers from one document to another. Simply select multiple layers, copy them using the new 'Copy Layers' command, and then paste them into another document - preserving the layer settings and object hierarchies.</p>
			</div>
		</div>
		
		<div id="layerExport" class="featureSection">
			<div class="centerTextBlock">
				<h1>Slices and Layer Export</h1>
				<h2>Export multiple design assets with a single click.</h2>
				<p>Using the new 'Export Layers' panel, instantly export each layer as a separate PNG, SVG, PDF, PSD, TIFF, or GIF file. For even more control, tag layer, group, and object names with file names and extensions to export each object or layer as a different file format.</p>
				<img src="<?= $page->image('layer_export.jpg')->url() ?>" width="673" height="350" style="display:block; margin-right: auto; margin-left: auto;" alt="Layer Export">
			</div>
			
			<div style="margin-right:auto; margin-left:auto; width:440px;">
				<div class="movieText">
					<a href="http://www.youtube.com/embed/y_-8XknW86U?autoplay=1&vq=hd720" class="videos"><p>Watch the Layers and Slices video</p></a>
				</div>
			</div>
			
		</div>
		
		<div id="layerExport" class="featureSection">
			<div class="rightImageBlock">
				<img id="" src="<?= $page->image('slices.jpg')->url() ?>" width="450" height="223" alt="Slice Export" />
			</div>
			<div class="leftTextBlock">
				<h2>Slices: Turn any shape into a slice.</h2>
				<p>Create slices to specify the exact bounds of exported assets. Turn any object into a slice by simply naming it '<i>@slice</i>' and choosing a desired file name.<br/><br/>For example, <i>@slice: Icon.png</i></p>
				<p>Since slices are treated the same as any other object, align and arrange them easily using Smart Guides and other alignment tools. Use custom slice shapes to mask exported images.</p>
			</div>
		</div>
		
		<div id="smartDuplicate" class="featureSection">
			<div class="leftImageBlock">
				<img id="cards" src="<?= $page->image('cards.svg')->url() ?>" alt="Smart Duplicate" />
				<div class="movieText" style="margin-left:-60px">
					<a href="http://www.youtube.com/embed/E6Sry5asM6c?autoplay=1&vq=hd720" class="videos"><p>Watch the Smart Duplicate video</p></a>
				</div>
			</div>
			<div class="rightTextBlock">
				<h1>Smart Duplicate</h1>
				<h2>Every copy in the perfect spot.</h2>
				<p>Duplicate objects quickly using the new Command-D shortcut. Instantly apply multiple move, rotate, scale, and shear transformations to each duplicated object. Use the duplicate command to create grids of equally spaced objects. Combine multiple transformations together when duplicating to produce many different effects.</p>
			</div>
		</div>
		
		<div id="coreGraphics" class="featureSection">
			<div class="rightImageBlock">
				<div>
					<img id="appMockup" src="<?= $page->image('code.svg')->url() ?>" />
					<img id="xcode" src="<?= $page->image('coregraphics.png')->url() ?>" />
				</div>
				<div class="movieText" style="min-width:400px">
					<a href="http://www.youtube.com/embed/FvElfya_hSA?autoplay=1&vq=hd720" class="videos"><p>Watch the Core Graphics Export video</p></a>
				</div>
			</div>
			
			<div class="leftTextBlock">
				<h1>For Mac / iOS Developers</h1>
				<h2>Core Graphics Code Export.</h2>
				<p>Copy vector shapes and effects directly as Core Graphics drawing code. Convert fully-styled buttons and icons into CGContext code, automatically generating CGPaths, CGColors, CGGradients, etc. Directly use the generated code in both Mac and iOS projects.</p>
				<p>Even convert multi-style text objects into CFAttributedStrings, along with Core Text layout and drawing code.</p>
				<p>Now you can turn app design mockups instantly into readily useable code.</p>
			</div>
		</div>
		
		<div id="shapeLibraries" class="featureSection">
			<div class="leftImageBlock">
				<img id="shapes" src="<?= $page->image('shapes.jpg')->url() ?>" width="303" height="335"/>
			</div>
			<div class="rightTextBlock">
				<h1>Shape Libraries</h1>
				<h2>Build a foundation for future designs.</h2>
				<p>Graphic 2.4 comes with built-in shape libraries for creating iOS 7 iPhone and iPad UI mockups, as well as example symbol and floor plan libraries.</p>
				<p>Import and export custom shape library files which can be shared with other users and devices. Customize your own libraries by rearranging objects using drag and drop.</p>
			</div>
		</div>
		
		<div id="copyCSS" class="featureSection">
			<div class="rightImageBlock">
				<img src="<?= $page->image('css.jpg')->url() ?>" width="386" height="465" />
			</div>
			<div class="leftTextBlock">
				<h1>For Web Designers</h1>
				<h2>SVG and CSS at your service.</h2>
				<p>Turn styled shapes and buttons into CSS colors, borders, gradients, and shadows. Copy CSS font names and font style attributes from text objects. Speed up your web design workflow by automatically generating CSS border, gradient, and shadow attributes with the appropriate vendor prefixes.</p>
				<p>Copy objects as SVG code that can be pasted directly into HTML or CSS files. Graphic creates clean structured SVG syntax which can easily be edited by hand.</p>
				<div class="movieText" style="min-width:400px">
					<a href="http://www.youtube.com/embed/qc2COrx0Bek?autoplay=1&vq=hd720" class="videos"><p>Watch the Copy CSS Properties video</p></a>
				</div>
			</div>
		</div>
		
		<div id="pixelPreview" class="featureSection">
			<div class="leftImageBlock">
				<img id="" src="<?= $page->image('pixelpreview@2x.png')->url() ?>" width="273" height="131"/>
			</div>
			<div class="rightTextBlock">
				<h1>Pixel Preview</h1>
				<h2>Make every design pixel-perfect.</h2>
				<p>Toggle quickly between crisp vectors and pixel preview mode using the new 'Show Pixels' shortcut. View your designs exactly as they will appear when exported as a bitmap image. Zoom in with 'Show Pixels' enabled to make precise adjustments to vector paths and ensure your artwork is crisp and looks exactly as you intend it to.</p>
			</div>
		</div>
		
		<div id="drawingTools" class="featureSection">
			<div class="rightImageBlock">
				<img src="<?= $page->image('arc_tool2.gif')->url() ?>" width="347" height="239"/>
			</div>
			<div class="leftTextBlock">
				<h1>Powerful New Drawing Tools</h1>
				<h2>The tools you need to get work done.</h2>
				<p>Edit shapes and paths faster using the improved Path Selection tool. Select anchor points across multiple separate shapes at the same time and edit them together as needed. Transform selected path points directly using the Scale, Rotate, and Shear tools.</p>
				<p>Use the new Arc tool to create circular arcs by specifying their radius and angle. Easily create pie charts and circular graphs.</p>
			</div>
		</div>
		
		<div id="transformPanel" class="featureSection">
			<div class="leftImageBlock">
				<img src="<?= $page->image('transform.jpg')->url() ?>" width="334" height="287" alt="Transform Panel">
			</div>
			<div class="rightTextBlock">
				<h1>Numeric Transform Panel</h1>
				<h2>Precision editing.</h2>
				<p>Numerically move, rotate, scale, and shear objects using the new Transform panel. Use the 'Transform Again' command (Command-T) to quickly reapply the last used transform. Create transformed copies of objects using the 'Copy' button.</p>
				<p>Move, rotate, scale, and shear selected path points using the Transform panel.</p>
			</div>
		</div>
		
		<div class="sectionDivider">
			<h1>New in Graphic 2.3</h1>
		</div>
		<hr style="border: 1px solid #333">
		
		<div id="psdDesc" class="featureSection centerTextBlock">
			<h1>Photoshop PSD Import / Export</h1>
			<p>Import and export layered Photoshop PSD files. Unlike most applications which simply import the bitmap data from a PSD file, Graphic can import Shape Layers as fully editable vector paths and import Layer Styles as native Appearance Styles. We've worked hard to ensure that imported PSD files appear as closely as possible to the original design, all while remaining editable in Graphic.</p>					
			<img src="<?= $page->image('psd-import.jpg')->url() ?>" alt="psd-import" width="880" height="497" />
		</div>
		
		<div id="psdDesc2" class="featureSection">
			<div id="psdStyles" class="rightImageBlock">
				<img src="<?= $page->image('psd-styles.png')->url() ?>" alt="psd-styles" width="676" height="221" />
			</div>
			<div class="leftTextBlock">
				<p>Layer Styles are imported as Appearance Styles in Graphic. Edit imported strokes, fills, gradients, shadows, glows, etc. Vector paths and effects remain crisp at high zoom levels.</p>
			</div>
		</div>
		
		<div id="psdDesc3" class="featureSection">
			<div id="psdPaths" class="leftImageBlock">
				<img src="<?= $page->image('psd-paths.png')->url() ?>" alt="psd-paths" width="373" height="208" />
			</div>
			<div class="rightTextBlock">
				<p>Vector paths remain fully editable after import. Take advantage of Graphic's powerful vector editing tools to manipulate shape layers and paths. Even export imported PSDs as web-viewable vector SVG files! </br></br> Import and edit design resources from sites such as <a href="http://365psd.com">365psd.com</a> and <a href="http://designmoo.com">Designmoo</a>.</p>
				<p></p>
			</div>
		</div>
		
		<div id="blendDesc" class="featureSection">
			<div class="leftImageBlock">
				<img src="<?= $page->image('blend-modes.jpg')->url() ?>" alt="Blend Modes" width="500" height="424" class="centeredItem" />
			</div>
			<div class="rightTextBlock">
				<h1>Blend Modes</h1>
				<p class="centerText">Graphic has a complete set of 24 blend modes, including Linear Burn, Linear Dodge, Vivid Light, Linear Light, Pin Light, Hard Mix, Subtract, and Divide. Create amazing images by blending multiple photos together and use blend modes in Appearance Styles for a variety of different effects.</p>
				<p>We've optimized and fine-tuned all of the new and existing blend modes to exactly match the appearance of blending in Photoshop for accurately imported PSD files.</p>
				<p>Along with layer blending, blend modes can be applied directly to shapes, text objects, and groups. You can also apply blend modes to individual strokes and fills to combine multiple blends within a single shape.</p>
			</div>
		</div>
						
		<div id="angleSection" class="featureSection">
			<div class="rightImageBlock">
				<img src="<?= $page->image('angle-gradients.jpg')->url() ?>" alt="angle-gradients" width="576" height="469" />
			</div>
			<div  class="leftTextBlock">
				<h1>Angle Gradients</h1>
				<p>Angle gradients can be used to create blends of color that appear in a sweeping circular motion.</p>
				<p>Create killer interface elements and controls, including knobs, buttons, sliders, etc. Angle gradients can also be used to create beautiful photorealistic effects.</p>
			</div>
		</div>
		
		<div id="angleSection2" class="featureSection">
			<div class="leftImageBlock">
				<img src="<?= $page->image('angle_examples.jpg')->url() ?>" alt="angle_examples" width="396" height="276" class="reflectedImage" style="text-align:left" />
			</div>
			<div class="rightTextBlock">
				<p>The colors, transparency, and center of an Angle gradient can be edited using the gradient editor, in the same way as Linear and Radial gradients.</p>
			</div>
		</div>
		
		<div id="maskDesc" class="featureSection">
			<div class="rightImageBlock">
				<img src="<?= $page->image('masking.jpg')->url() ?>" alt="Image Masking" width="525" height="428" />
			</div>
			<div class="leftTextBlock">
				<h1>Smart Image Masking</h1>
				<p>Transparent images can now be set as image masks using the new 'Transparency Mask' option. Appearance Styles, such as shadows and glows, will intelligently follow image transparency and the masked portions of an image.</p>
				<p>Multiple image fills can be applied to a single shape, allowing you to mask one image by another. Use image masks to create fades and other effects.</p>
			</div>
		</div>
		
		<div id="openGLDesc" class="featureSection">
			<div class="leftImageBlock">
				<img src="<?= $page->image('opengl_map.png')->url() ?>" alt="opengl_map" width="560" height="367" class="centeredItem" />
			</div>
			<div class="rightTextBlock">
				<h1>OpenGL Drawing</h1>
				<h2>Thousands of objects? No problem.</h2>
				<p class="centeredText">Graphic has been optimized for incredibly fast performance. Faster drawing, editing, loading, saving, importing... every part of the application has been tweaked for performance. Graphic can easily import PDF and SVG files containing many thousands of vector objects, including maps and other large designs.</p>
				<p class="centeredText">Graphic takes advantage of direct OpenGL drawing and multi-threading for fast uninterrupted workflows - even while working on very complex projects. Significant improvements have been made for reduced memory usage and smaller document file sizes. Working with large, resource-intensive documents has never been easier. </p>
			</div>
		</div>
		
		<div id="colorDesc" class="featureSection rightTextSection">
			<div class="rightImageBlock">
				<img src="<?= $page->image('colorsync.jpg')->url() ?>" alt="ColorSync" width="159" height="159" class="reflectedImage" />
			</div>
			<div class="leftTextBlock">
				<h1>Color Management</h1>
				<p>Ensure accurate color in your designs using ColorSync ICC profiles. Choose from a variety of RGB profiles and maintain color consistency with other applications.</p>
				<p>Assign color profiles to a document or convert the colors of a document from one profile to another. Colors remain consistent when exporting as an image or vector file.</p>
			</div>
		</div>
		
		<div id="dimensionDesc" class="featureSection">
			<div class="centerTextBlock">
				<h1>Dimensioning</h1>
				<h2>Technical drawing and illustration.</h2>
				<p class="centeredText">Create detailed technical designs, floor plans, and schematics using Graphic's customizable dimension labels. Choose from a variety of display formats for feet, inches, yards, and metric units. Fractional numbers can be displayed as decimals with adjustable levels of precision, or as fractions.</p>
				<img src="<?= $page->image('dimensions.jpg')->url() ?>" alt="dimensions" width="840" height="535" class="centeredItem" />
				<p class="centeredText">'Area' dimension labels can be used to display the area inside of a path or complex shape. Use dimension labels to calculate the square footage of a room or to determine the area of a polygon.</p>
			</div>
		</div>
		
		<div id="pathTools" class="featureSection centerTextBlock">
			<h1>Powerful Path Editing Tools</h1>
			<h3>Scissor Tool</h3>
			<p>Cut a path into multiple sections using the new Scissor tool. Paths can be cut at their anchor points, or anywhere along their length. The Scissor tool can be accessed from the Pen Tool's options, or activated directly using the 'c' keyboard shortcut.</p>
			<h3>Join Multiple Paths</h3>
			<p>The 'Join Paths' command in the 'Modify' menu can now combine multiple paths at the same time. Select several paths and choose 'Join Paths' to join all of paths together at their endpoints.</p>

			<h3>Connect Endpoints</h3>
			<p>Similar to the 'Join Paths' command, the new 'Connect Endpoints' option can be used to connect the endpoints of multiple paths together, linking the nearest endpoints with line segments to create a single path.</p>

			<h3>Disconnect Path</h3>
			<p>Explode an entire path into separate disconnected segments using the new 'Disconnect Path' option in the 'Modify' menu. Along with the new 'Join' and 'Connect' path options, paths can now be edited in very powerful new ways. A path can be separated into segments using the 'Disconnect' option, segments can be added or removed, and the path can then be re-connected using the 'Join' or 'Connect' commands.</p>

			<h3>Improved Text to Path</h3>
			<p>Converting text objects to editable paths now creates individual shapes for each glyph. Image and gradient fills applied across an entire text object are accurately cropped to each glyph shape when converting to paths.</p>
		</div>
		
		<div id="otherDesc" class="featureSection">
			<h1>Other New Features</h1>
			<div id="otherDesc2">
				<table>
					<tr>
						<td>Import PDF Annotations</td><td>Outline Mode</td><td>Hex Color Picker</td>
					</tr>
					<tr>
						<td>Zoom Area Tool</td><td>Enhanced Eraser Tool</td><td>Custom Text Kerning & Line Height</td>
					</tr>
					<tr>
						<td>sRGB SVG Export</td><td>Copy/Paste Appearance Items</td><td>Shape/Group Blending</td>
					</tr>
					<tr>
						<td>Reduced Memory Usage</td><td>Smaller Document File Sizes</td><td>Improved Performance</td>
					</tr>
					<tr>
						<td></td><td>...and more!</td><td></td>
					</tr>
				</table>
			</div>
		</div>
	
		<div class="clearfix">
			<div style="margin-left: auto; margin-right: auto; width: 700px; padding-bottom: 50px;";>
				<a href="http://itunes.apple.com/us/app/idraw/id404705039?mt=12" target="itunes_store">
					<img src="<?= $page->image('small_icon@2x.png')->url() ?>" alt="small_icon" width="200" height="200" style="display:block; margin-right: auto; margin-left: auto; margin-bottom:40px"/>
				</a>
				
				<p style="text-align: center; font-weight:300; font-size: 22px; padding-top:14px;">Only $24.99 on the Mac App Store.</p>
				
				<div style="width:236px; margin-left: auto; margin-right: auto; padding-top: 0px;">
					<div class="buyButton">
						<a href="http://itunes.apple.com/us/app/idraw/id404705039?mt=12" target="itunes_store">
						Buy Now
						</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>


<?php snippet('footer') ?>