<?php
/**
* Script styles to run jQuery on pages
*/
add_action( 'wp_enqueue_scripts', 'outofstock_setup_scripts' );
add_action('wp_footer','outofstock_scripts',5);
//add_action( 'wp_enqueue_scripts', 'oss_styles' );

function outofstock_setup_scripts() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-ui-core' );
}

	/**
	* Enqueue scripts
	*/
	

function outofstock_scripts() { ?>

<?php $rows = get_option('outofstock_2_rows'); ?>

<?php //if ( isset( $rows ) ) { ?>

	<?php
	global $arr_2;
	$arr = array();
	$arr_2 = array();
	$set = array('outofstock_2_background_color_', 'outofstock_2_background_position_',
		'outofstock_2_background_repeat_','outofstock_2_background_size_', 'outofstock_2_image_opacity_',
		'outofstock_2_image_url_','outofstock_2_selector_');
		$i = 0;
		$l = 1;

		for ($k=0; $k<$rows; $k++) {
			array_push($arr_2,  array('id'=>$k,
								   'option' => 'outofstock_2_background_color_'.$k,
								   'value'=> get_option('outofstock_2_background_color_'.$k)));

			array_push($arr_2,  array('id'=>$k,
								   'option' => 'outofstock_2_background_position_'.$k,
								   'value'=> get_option('outofstock_2_background_position_'.$k)));
					array_push($arr_2,  array('id'=>$k,
								   'option' => 'outofstock_2_background_repeat_'.$k,
								   'value'=> get_option('outofstock_2_background_repeat_'.$k)));
			array_push($arr_2,  array('id'=>$k,
								   'option' => 'outofstock_2_background_size_'.$k,
								   'value'=> get_option('outofstock_2_background_size_'.$k)));
	
			array_push($arr_2,  array('id'=>$k,
								   'option' => 'outofstock_2_image_opacity_'.$k,
								   'value'=> get_option('outofstock_2_image_opacity_'.$k)));
			array_push($arr_2,  array('id'=>$k,
								   'option' => 'outofstock_2_image_url_'.$k,
								   'value'=> get_option('outofstock_2_image_url_'.$k)));

			array_push($arr_2,  array('id'=>$k,
								   'option' => 'outofstock_2_selector_'.$k,
								   'value'=> get_option('outofstock_2_selector_'.$k)));

			$aaa = get_option('outofstock_2_classes');
			$var = get_option('outofstock_2_selector_'.$k);
			$cla = $aaa[intval($var)];

			array_push($arr_2,  array('id'=>$k,
								   'option' => 'outofstock_2_class_'.$k,
								   'value'=> $cla));

	

		}
		
		//var_dump($arr_2);

		//var_dump($arr_2[0][1]['value']);
		$p = 0;
		global $arr_3, $arr_4, $arr_5, $arr_5;
		$arr_3 = array(); $arr_4 = array(); $arr_5 = array(); $arr_6 = array();

		//var_dump($arr_3);
		//var_dump($arr_4);
		//var_dump($arr_4);

	
		//var_dump($arr_4);

		
		?>
	<script type="text/javascript">

		jQuery(document).ready(function($){

			
			

	  	});

	</script>
	
	<?php $count = count($arr_2); ?>
	<style type="text/css">'
	<?php $i = 0; ;$k = 0;$r = -1; //var_dump($arr_2); ?>
	<?php foreach ($arr_2 as $value) {//for ($p = 0; $p <= count($arr_2); $p++ ) {?>

		<?php
	
			//var_dump($val['value']);
		//}
			//var_dump($arr_2);
		$id = $value['id'];

		$option = $value['option'];
		$value = $value['value'];
		//var_dump($id); var_dump($option); var_dump($value);

	

		if ( $option ===  'outofstock_2_background_color_'.$id ) {
			$color = $value; var_dump($color);
		}
		if ( $option ===  'outofstock_2_background_position_'.$id ) {
			$position = $value;
		}
		if ( $option ===  'outofstock_2_background_repeat_'.$id ) {
			$repeat = $value;
		}
		if ( $option ===  'outofstock_2_background_size_'.$id ) {
			$size = $value;
		}
		if ( $option ===  'outofstock_2_image_opacity_'.$id ) {
			$opacity = $value;
		}
		if ( $option ===  'outofstock_2_image_url_'.$id ) {
			$url = esc_url($value);
		}
		if ( $option ===  'outofstock_2_selector_'.$id ) {
			$selector = $value;
		}
		if ( $option ===  'outofstock_2_class_'.$id ) {
			$class = '.'.$value.' ';
		}
			//var_dump($i);
			
			//var_dump($i);

			//var_dump($option);
			//var_dump($val[5]);
			//var_dump($value);
		echo '';

		if ($class !== null) { ?>
			<?php $str = $class . ' .images a';
				  $str2 = '.products '.$class.' a';
			?>
			<script type="text/javascript">

			jQuery(document).ready(function($){


				//console.log($('.outofstock .images a').val());
				//console.log($('.products .outofstock a').val());

				

		  	});

		</script>

		<?php echo $class; ?> .images a, 
			.products <?php echo $class; ?> a {
			    position:relative;
			    display:block;
			}
			<?php echo $class; ?>  .images a:before, 
			.products <?php echo $class; ?>  a:before {
			    content: " ";
			    height: 100%;
			    position: absolute;
			    width: 100%;
			    display: inherit !important;
			}
	

			<?php echo $class; ?> .images a:before {
			background-image: url(' <?php echo $url; ?> ');
			background-color: <?php echo $color; ?>;
			background-repeat: <?php echo $repeat; ?>;
			background-position: <?php echo $position; ?>;
			display: inherit !important; 
			opacity: <?php echo $opacity; ?>;
			z-index: 1 !important;
			float: none;
			clear: both;
		}

		.products <?php echo $class; ?> a:before {
			background-image: url(' <?php echo $url; ?> ');
			background-color: <?php echo $color; ?>;
			background-repeat: <?php echo $repeat; ?>;
			background-position: <?php echo $position; ?>;
			display: inherit !important; 
			opacity: <?php echo $opacity; ?>;
			z-index: 1 !important;
			float: none;
			clear: both;
		}
		.products <?php echo $class; ?> .button:before {
			background:none !important;
			display: inherit !important;
			}
		<?php echo $class; ?> .images .thumbnails a:before {
			background:none !important;
			display: inherit !important;
		}


<?php $class = null; } ?>
		

<?php } ?>
	</style>

<?php }



