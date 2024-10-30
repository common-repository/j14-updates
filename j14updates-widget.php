<?php

/**
 * j14updatesWidget Class
 */
class j14updatesWidget extends WP_Widget {
	

	/** constructor */
	function j14updatesWidget() {
		// add script and css
		wp_enqueue_style(__CLASS__, j14updates_PLUGIN_URL . 'css/style.css');
		wp_enqueue_script(__CLASS__, j14updates_PLUGIN_URL . 'js/j14updates.js', array('jquery'));
		wp_localize_script(__CLASS__, __CLASS__, array(url => j14updates_PLUGIN_URL) );
		
		// create the widget
		$widget_ops = array(
			'classname'		=> 'j14updates-widget',
			'description' 	=> __("וידג'ט הצטרפות למאבק", j14updates_TEXT_DOMAIN)
		);
		$this->WP_Widget('j14updates-widget', 'j14updates', $widget_ops);
	}
	
	
	/** @see WP_Widget::widget */
	function widget($args, $instance) {
		extract($args);
		
		$title = $instance['title'] ? $instance['title'] : J14;
		
		echo $before_widget;
		if ( $title ) {
			echo $before_title . esc_attr($title) . $after_title;
		}
		
		include(j14updates_PLUGIN_DIR . '/j14updates-widget-content.php');
				
		echo $after_widget;
	}


	/** @see WP_Widget::update */
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		
		return $instance;
	}


	/** @see WP_Widget::form */
	function form($instance) {
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title'); ?>:</label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" 
				name="<?php echo $this->get_field_name('title'); ?>" 
				value="<?php echo $instance['title']; ?>" />
		</p>
		<?php 
	}
	

} // class j14updatesWidget

?>
