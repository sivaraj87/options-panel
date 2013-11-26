<?php get_header(); ?>

<article>
    <div class="entry-content">

<h1>Documentation</h1>
The follow PHP should help you understand how to implement the Options Panel within any theme.

            <hr>

<!-- BASIC 1 : begin --> 
            <h2>Basic 1</h2>
			
            <h4>type: text (mini)</h4>
            <pre>echo of_get_option('panel_basic_text_mini', 'no entry');</pre>
            <?php echo of_get_option('panel_basic_text_mini', 'no entry'); ?>
    
            <h4>type: text</h4>
            <pre>echo of_get_option('panel_basic_text', 'no entry');</pre>
            <?php echo of_get_option('panel_basic_text', 'no entry'); ?>

            <h4>type: textarea</h4>
            <pre>echo of_get_option('panel_basic_textarea', 'no entry' );</pre>
            <?php echo of_get_option('panel_basic_textarea', 'no entry' ); ?>

            <h4>type: select (mini)</h4>
            <pre>echo of_get_option('panel_basic_select', 'no entry' );</pre>
            <?php echo of_get_option('panel_basic_select', 'no entry' ); ?>
                       
            <h4>type: select2 (wide)</h4>
            <pre>echo of_get_option('panel_basic_select_wide', 'no entry' );</pre>
			<?php echo of_get_option('panel_basic_select_wide', 'no entry' ); ?></pre>
             
            <h4>type: select</h4>
            <pre>echo of_get_option('panel_basic_select_categories', 'no entry' );</pre>
			<?php echo of_get_option('panel_basic_select_categories', 'no entry' ); ?></pre>
            
            <h4>type: select</h4>
            <pre>echo of_get_option('panel_basic_select_tags', 'no entry' );</pre>
			<?php echo of_get_option('panel_basic_select_tags', 'no entry' ); ?>

            <h4>type: select</h4>
            <pre>echo of_get_option('panel_basic_select_pages', 'no entry' );</pre>
			<?php echo of_get_option('panel_basic_select_pages', 'no entry' ); ?>

            <h4>type: radio</h4>
            <pre>echo of_get_option('panel_basic_radio', 'no entry' );</pre>
			<?php echo of_get_option('panel_basic_radio', 'no entry' ); ?>

            <h4>type: checkbox</h4>
            <pre>echo of_get_option('panel_basic_checkbox', 'no entry' );</pre>
			<?php echo of_get_option('panel_basic_checkbox', 'no entry' ); ?>
<!-- BASIC 1 : end -->           

            <hr>

<!-- ADVANCED 1 : begin -->
            <h2>Advanced 1</h2>
                      
            <h4>type: uploader</h4>
            <pre>echo of_get_option('advanced1_uploader');</pre>
			
            <?php if ( of_get_option('advanced1_uploader') ) { ?>
            <img src="<?php echo of_get_option('advanced1_uploader'); ?>" width="300" />
            <?php } ?>
                        
            <h4>type: image</h4>
            <pre>echo of_get_option('advanced1_images', 'no entry' );</pre>
			<?php echo of_get_option('advanced1_images', 'no entry' ); ?>
 
            <h4>type: multicheck</h4>
            <pre>$multicheck = of_get_option('advanced1_multicheck', 'none' ); 
			print_r($multicheck);</pre>
              
            <p>The array sent in the options panel was defined as:</p>
            <pre>
            $test_array_jrx = 
			    array(
				"one" => "French Toast",
				"two" => "Pancake","three" => 
				"Omelette","four" => "Crepe",
				"five" => "Waffle"); 
            print_r($test_array_jrx);
            </pre>
            
            <p>You can get the value of all items in the checkbox array:</p>
            <pre>
            if ( is_array($multicheck) ) {
                foreach ($multicheck as $key => $value) {
                    // If you need the option's name rather than the key
                    $name = $test_array_jrx[$key];
                    // Prints out each of the values
                    echo '' . $key . ' (' . $name . ') = ' . $value . '';
                }
            }
            else {
                echo 'There are no saved values yet.';
            }
            </pre>
            
            <p>You can also get an individual checkbox value if you know what you are looking for. In this example, I'll check for the key "one", which is an item I sent in the array for check boxes:</p>
            
            <p>The value of the multi-check box "one" of advanced1_multicheck is:</p>
            <pre>
            if (isset($multicheck['one']) ) {
                echo $multicheck['one'];
            } else {
                echo 'no entry';
            }
            </pre>
                        
            <h4>type: background</h4>
            <pre>echo of_get_option('background');</pre>
            <?php $background = of_get_option('advanced1_background');
            if ($background) {
                if ($background['image']) {
                    echo '<span style="display: block; height: 200px; width: 200px; background:url('.$background['image']. ') "></span>';
                    foreach ($background as $i=>$param){
                        echo ''.$i . ' = ' . $param.'';
                }
                } else {
                    echo '<span style="display: inline-block; height: 20px; width: 20px; background:'.$background['color']. ' "></span>';
                    echo ''.$background['color'].'';
                }	
            } else {
                echo "no entry";
            }; ?>
            
            <h4>type: colorpicker</h4>
            <pre>echo of_get_option('advanced1_colorpicker', 'no entry' );</pre>
            <span style="color:<?php echo of_get_option('advanced1_colorpicker', '#000' ); ?>">
            <?php echo of_get_option('advanced1_colorpicker', 'no entry' ); ?>
            </span>
     
            <h4>type: typography</h4>
            <pre>echo of_get_option('typography');</pre>
            <?php $typography = of_get_option('advanced1_typography');
            if ($typography) {          

				echo '<span style="font-family: ' . $typography['face']. '; font-size:'.$typography['size'] . '; font-style: ' . $typography['style'] . '; color:'.$typography['color'].';">Some sample text in your style</span>';
            } else {
                echo "no entry";
            } ?>
<!-- ADVANCED 1 : end -->

            <hr>

<!-- ADVANCED 2 : begin -->
            <h2>Advanced 2</h2>
                      
            <h4>type: uploader</h4>
            <pre>echo of_get_option('advanced2_uploader');</pre>
			
            <?php if ( of_get_option('advanced2_uploader') ) { ?>
            <img src="<?php echo of_get_option('advanced2_uploader'); ?>" width="300" />
            <?php } ?>
                        
            <h4>type: image</h4>
            <pre>echo of_get_option('advanced2_images', 'no entry' );</pre>
			<?php echo of_get_option('advanced2_images', 'no entry' ); ?>
 
            <h4>type: multicheck</h4>
            <pre>$multicheck = of_get_option('advanced2_multicheck', 'none' ); 
			print_r($multicheck);</pre>
              
            <p>The array sent in the options panel was defined as:</p>
            <pre>
            $test_array_jrx = 
			    array(
				"one" => "French Toast",
				"two" => "Pancake","three" => 
				"Omelette","four" => "Crepe",
				"five" => "Waffle"); 
            print_r($test_array_jrx);
            </pre>
            
            <p>You can get the value of all items in the checkbox array:</p>
            <pre>
            if ( is_array($multicheck) ) {
                foreach ($multicheck as $key => $value) {
                    // If you need the option's name rather than the key
                    $name = $test_array_jrx[$key];
                    // Prints out each of the values
                    echo '' . $key . ' (' . $name . ') = ' . $value . '';
                }
            }
            else {
                echo 'There are no saved values yet.';
            }
            </pre>
            
            <p>You can also get an individual checkbox value if you know what you are looking for. In this example, I'll check for the key "one", which is an item I sent in the array for check boxes:</p>
            
            <p>The value of the multi-check box "one" of advanced2_multicheck is:</p>
            <pre>
            if (isset($multicheck['one']) ) {
                echo $multicheck['one'];
            } else {
                echo 'no entry';
            }
            </pre>
                        
            <h4>type: background</h4>
            <pre>echo of_get_option('background');</pre>
            <?php $background = of_get_option('advanced2_background');
            if ($background) {
                if ($background['image']) {
                    echo '<span style="display: block; height: 200px; width: 200px; background:url('.$background['image']. ') "></span>';
                    foreach ($background as $i=>$param){
                        echo ''.$i . ' = ' . $param.'';
                }
                } else {
                    echo '<span style="display: inline-block; height: 20px; width: 20px; background:'.$background['color']. ' "></span>';
                    echo ''.$background['color'].'';
                }	
            } else {
                echo "no entry";
            }; ?>
            
            <h4>type: colorpicker</h4>
            <pre>echo of_get_option('advanced2_colorpicker', 'no entry' );</pre>
            <span style="color:<?php echo of_get_option('advanced2_colorpicker', '#000' ); ?>">
            <?php echo of_get_option('advanced2_colorpicker', 'no entry' ); ?>
            </span>
     
            <h4>type: typography</h4>
            <pre>echo of_get_option('typography');</pre>
            <?php $typography = of_get_option('advanced2_typography');
            if ($typography) {          

				echo '<span style="font-family: ' . $typography['face']. '; font-size:'.$typography['size'] . '; font-style: ' . $typography['style'] . '; color:'.$typography['color'].';">Some sample text in your style</span>';
            } else {
                echo "no entry";
            } ?>
<!-- ADVANCED 2 : end -->

            <hr>

<!-- TEXT EDITOR 1 : begin -->
            
            <h2>Text Editor 1</h2>
            			
            <h4>type: editor</h4>
            <pre>echo of_get_option('panel_text_editor_1', 'no entry');</pre>
            <?php echo of_get_option('panel_text_editor_1', 'no entry'); ?>
            			
            <h4>type: additional editor</h4>
            <pre>echo of_get_option('panel_text_editor_media_1', 'no entry');</pre>
            <?php echo of_get_option('panel_text_editor_media_1', 'no entry'); ?>            
<!-- TEXT EDITOR 1 : end -->

            <hr>

    </div><!-- .entry-content -->
</article><!-- #post-0 -->

<?php get_footer(); ?>