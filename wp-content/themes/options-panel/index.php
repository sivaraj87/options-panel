<?php get_header(); ?>

	<article>

		<div class="entry-content">
            
            <dl>
            <dt>type: text</dt>
            <dd><?php echo of_get_option('example_text', 'Not Set'); ?></dd>
            </dl>
            
            <dl>
            <dt>type: select</dt>
            <dd><?php echo of_get_option('example_select', 'Not Set' ); ?></dd>
            </dl>
            
            <dl>
            <dt>type: radio</dt>
            <dd> <?php echo of_get_option('example_radio', 'Not Set' ); ?></dd>
            </dl>
            
            <dl>
            <dt>type: checkbox <small>(work in progress, little bug here)</small></dt>
            <dd><?php echo of_get_option('example_checkbox', 'Not Set' ); ?></dd>
            </dl>
            
            <dl>
            <dt>type: uploader</dt>
            <dd><?php echo of_get_option('example_uploader'); ?></dd>
            <?php if ( of_get_option('example_uploader') ) { ?>
            <img src="<?php echo of_get_option('example_uploader'); ?>" />
            <?php } ?>
            </dl>
                 
            <dl>
            <dt>type: colorpicker</dt>
            <dd>
            <div style="width:100px; height:100px; background:<?php echo of_get_option('example_colorpicker', '#666666'); ?>"></div>
            <p><?php echo of_get_option('example_colorpicker'); ?></p>
            </dd>
            </dl>

		
    </div><!-- entry-content :end -->
</article>

<?php get_footer(); ?>