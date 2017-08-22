<?php

//function adding_custom_meta_boxes( $post_type, $post )
function np_recipe_options_callback( $post ){
	//									get_post_meta( int $post_id, string $key = '', bool $single = false )but in 90% should be $single = true
	$item_data						=	get_post_meta( $post->ID, 'item_data', true );//Retrieve post meta field for a post.

	if( ! $item_data){
		$item_data					=	array(
			'np_name'				=>	'',
			'np_checkbox_1' 		=>	'',
			'np_checkbox_text_1'	=>	'',
			'np_checkbox_2' 		=>	'',
			'np_checkbox_text_2'	=>	'',
			'np_checkbox_3' 		=>	'',
			'np_checkbox_text_3'	=>	'',
			'np_radiobox_1'			=>	'',
			'np_radiobox_text_1'	=>	'',
			'np_number'				=>	'1'

		);
	}
	
	?>
	<div class="form-group">
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Name </span>
			<input type="text" class="form-control" name="np_input_name" placeholder="Name" aria-describedby="basic-addon1" value="<?php echo $item_data['np_name']; ?>" >
		</div>
	</div>
	<div class="form-group">
		<div class="input-group">
		    <span class="input-group-addon">
		        <input type="checkbox" name="np_checkbox_check_1" aria-label="Checkbox for following text input" <?php echo $item_data['np_checkbox_1'] == 'on' ? 'checked' : ''; ?> >
		    </span>
		    <input type="text" class="form-control" name="np_input_checkbox_1" aria-label="Text input with checkbox" value="<?php echo $item_data['np_checkbox_text_1']; ?>" >
		</div>
		<br>
		<div class="input-group">
		    <span class="input-group-addon">
		        <input type="checkbox" name="np_checkbox_check_2" aria-label="Checkbox for following text input" <?php echo $item_data['np_checkbox_2'] == 'on' ? 'checked' : ''; ?> >
		    </span>
		    <input type="text" class="form-control" name="np_input_checkbox_2" aria-label="Text input with checkbox" value="<?php echo $item_data['np_checkbox_text_2']; ?>" >
		</div>
		<br>
		<div class="input-group">
		    <span class="input-group-addon">
		        <input type="checkbox" name="np_checkbox_check_3" aria-label="Checkbox for following text input" <?php echo $item_data['np_checkbox_3'] == 'on' ? 'checked' : ''; ?> >
		    </span>
		    <input type="text" class="form-control" name="np_input_checkbox_3" aria-label="Text input with checkbox" value="<?php echo $item_data['np_checkbox_text_3']; ?>" >
		</div>
	</div>
	<div class="form-group">
		<div class="input-group">
		    <span class="input-group-addon">
		    	<input type="radio" name="np_radio_check" aria-label="Radio button for following text input" <?php echo $item_data['np_radiobox_1'] == 'on' ? 'checked' : ''; ?>>
		    </span>
		    <input type="text" class="form-control" name="np_input_one_value" aria-label="Text input with radio button" value="<?php echo $item_data['np_radiobox_text_1']; ?>" >
		</div>
		<br>
	</div>
	<div class="form-group">
	    <label for="exampleSelect1">Example select</label>
	    <select class="form-control" name="np_select_number" id="exampleSelect1">
	    	<option value="1" >1</option>
	    	<option value="2" <?php echo $item_data['np_number'] == '2' ? 'selected' : ''; ?> >2</option>
	    	<option value="3" <?php echo $item_data['np_number'] == '3' ? 'selected' : ''; ?> >3</option>
	    	<option value="4" <?php echo $item_data['np_number'] == '4' ? 'selected' : ''; ?> >4</option>
	    	<option value="5" <?php echo $item_data['np_number'] == '5' ? 'selected' : ''; ?> >5</option>
	    </select>
  	</div>
	<?php
}