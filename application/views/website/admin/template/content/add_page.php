<article class="module width_full">
			<header><h3>Post New Page</h3></header>
			<?php if ($news == 'right')
			{ ?>
				<h4 class="alert_success">Page Added Successfully</h4>
			<?php }
			if ($news == 'wrong')
			{ ?>
				<h4 class="alert_error">Page Added Failed</h4>
			<?php } if ($value == NULL)
			{
				$row_value['id']		= '';
				$row_value['title']		= '';
				$row_value['konten']	= '';
				$row_value['tagged']	= '';
				$row_value['language']	= '';
				$row_value['publish']	= '';
				echo form_open('system/upload_page');
			}
			else
			{
				foreach ($value as $row_value) :
				{
					$row_value['id']		= $row_value['id'];
					$row_value['title']		= $row_value['title'];
					$row_value['konten']	= $row_value['konten'];
					$row_value['tagged']	= $row_value['tagged'];
					$row_value['language']	= $row_value['language'];
					$row_value['publish']	= $row_value['publish'];
				} endforeach;
				echo form_open('system/update_page');
			} 
			echo form_hidden('id',$row_value['id']);?>
				<div class="module_content">
						<fieldset>
							<label>Page Title</label>
							<?php $page = array(
								  'name' => 'pages',
								  'id'	 => 'pages',
								  'value'=> $row_value['title']	
								);
							echo form_input($page);?>
						</fieldset>
						<fieldset>
						<script type="text/javascript" src="<?= base_url() ?>wp-admin/js/tiny_mce/tiny_mce.js"></script>
						<script type="text/javascript" src="<?= base_url() ?>wp-admin/raw/script_textarea.php"></script>
							<label>Content</label>
							<center><?php $konten = array(
								  'name'	=> 'konten',
								  'id'		=> 'konten',
								  'value'=> $row_value['konten']	
								);
							echo form_textarea($konten)?></center>
						</fieldset>
						<fieldset style="width:63%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Tags</label>
							<?php $tags = array(
								  'name'	=> 'tags',
								  'id'		=> 'tags',
								  'style'	=> 'width:93%',
								  'value'	=> $row_value['tagged']
								);
							echo form_input($tags); ?>
						</fieldset>
						<fieldset style="width:33%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Language</label>
							<?php $language = array(
								  'En'	=> 'En',
								  'Id'	=> 'Id',
								); 
								$style = 'style ="width:92%"';
							echo form_dropdown('language',$language,$row_value['language'],$style);?>
						</fieldset>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<?php $publish = array(
						  'Draft'		=> 'Draft',
						  'Published'	=> 'Published'
						);
					echo form_dropdown('publish',$publish, $row_value['publish']);
					$submit = array(
							  'id'	=> 'submit',
							  'name'	=> 'submit',
							  'value'	=> 'Save',
							  'class'	=> 'alt_btn'
							);
					echo form_submit($submit)?>
				</div>
			</footer>
		</form>
		</article><!-- end of post new article -->
