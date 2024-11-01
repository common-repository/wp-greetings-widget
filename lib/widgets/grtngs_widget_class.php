<?php
class grtngs_widget extends WP_Widget
{
	
function __construct() {
parent::__construct(
// Base ID of your widget
'grtngs_widget', 

// Widget name will appear in UI
__('WP Greetings Widget', 'grtngs_widget_domain'), 

// Widget description
array( 'description' => __( 'WP Greetings Widege by Chris Hill', 'grtngs_widget_domain' ), ) 
);
}	
	

  function RandomPostWidget()
  {
    $widget_ops = array('classname' => 'RandomPostWidget', 'description' => 'Displays a random post with thumbnail' );
    $this->WP_Widget('RandomPostWidget', 'Random Post and Thumbnail', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
?>
   <div id="grtngs_container">
    	<div id="grtngs_message">
        </div>
        <div id="grtngs_image">
        <img src="<?php echo GRTNGS_URL.'/assets/img/' ?>" id="grtngs_img" class="GRTNGS_image img-responsive">
        </div>
    </div>
<?php
  } 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
 
    if (!empty($title))
      echo $before_title . $title . $after_title;;
 
    // WIDGET CODE GOES HERE
    echo "<h1>Greetings!</h1>";
	?>
    <div id="grtngs_container">
    	<div id="grtngs_message">
        </div>
        <div id="grtngs_image">
        <img src="<?php echo GRTNGS_URL.'/assets/img/' ?>" id="grtngs_img" class="GRTNGS_image img-responsive">
        </div>
    </div>
    <?php

    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("grtngs_widget");') );?>