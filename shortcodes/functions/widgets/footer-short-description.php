<?php
    function footer_short_description_shortcode( $atts, $content=null ){
        global $biq_sns_settings;
        extract(
            shortcode_atts(
                array(
                    'widget_id'=>'', 'css_inline'=> '', 'classes'=> '',
                    'title'=>'',
                    'description'=>'', 'description_source'=>'custom'
                ),
                $atts
            )
        );
        
	$css_inline = !empty( $css_inline ) ? ' style = "'.$css_inline.'"' : '';
	$classes = !empty( $classes ) ? ' '.$classes : '';
        
        $element_attributes =  'class="biq-widgets'.$classes.' footer-short-description"'. $css_inline;
        $element_attributes .= is_admin() ?
                ' data-biq-widget-id="'.$widget_id.'" data-biq-widget-type="footer_short_description" data-biq-css-default="footer-short-description"'
                .' data-description-source="'.$description_source.'" data-description="'.$description.'"'
                : '';
        
        $description_display = $description_source == 'equal_to_meta' ?
                $biq_sns_settings["option"]["home_meta_description"]
                : $description;
        $description_display_final = empty($description_display) && is_admin() ? "**This widget has empty text**" : $description_display;
        
        $ret_html =
            '<div '.$element_attributes.'>'
                .'<h4 class="biq-title">'.$title.'</h4>'
                .'<p class="biq-description">'.$description_display_final.'</p>'
            .'</div>';
        return $ret_html;
    }
    add_shortcode( 'footer_short_description', 'footer_short_description_shortcode' );
?>
