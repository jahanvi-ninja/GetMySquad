<?php
/* Template Name: Layout 1 */

get_header();

$page_sections = get_field('page_sections');
$class = the_ID();
?>

<div class= "<?php echo $class.'page' ; ?>">
    <?php 
foreach($global_layout as $key => $layout) {
    if($layout['acf_fc_layout'] == 'banner_section') {
       
        get_template_part('/template-parts/banner_section', '', $layout);  
    }
    if($layout['acf_fc_layout'] == 'image_with_content_section') {
        get_template_part('/template-parts/image_with_content_section', '', $layout);  
    }
    if($layout['acf_fc_layout'] == 'industries_section') {
       
        get_template_part('/template-parts/industries_section', '', $layout);  
    }
    if($layout['acf_fc_layout'] == 'image_with_discover_section') {
        get_template_part('/template-parts/image_with_discover_section', '', $layout);  
    }
    if($layout['acf_fc_layout'] == 'slider_section') {
        get_template_part('/template-parts/slider_section', '', $layout);  
    }
    if($layout['acf_fc_layout'] == 'faq_section') {
       
        get_template_part('/template-parts/faq_section', '', array( 'hasImg' => true ));  
    }
    if($layout['acf_fc_layout'] == 'contact_us_section') {
        get_template_part('/template-parts/contact_us_section', '', $layout);  
    }
    if($layout['acf_fc_layout'] == 'how_it_works_section') {
        get_template_part('/template-parts/how_it_works_section', '', $layout);  
    }
    if($layout['acf_fc_layout'] == 'features_section') {
       
        get_template_part('/template-parts/features_section', '', $layout);  
    }
    if($layout['acf_fc_layout'] == 'keep_updated') {
        get_template_part('/template-parts/keep_updated', '', $layout);  
    }
    if($layout['acf_fc_layout'] == 'plans_section') {
        get_template_part('/template-parts/plans_section', '', $layout);  
    }
}
    ?>
    

</div>

<?php
get_footer();
?>
