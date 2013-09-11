<?php if ($news == 'oke')
	{ ?>
		<h4 class="alert_success">News Edited Successfully</h4>
	<?php }
	if ($news == 'fail')
	{ ?>
		<h4 class="alert_error">News Edit Failed</h4>
	<?php } ?>
<article class="module width_full">
		<header><h3 class="tabs_involved">News Manager</h3>
		<ul class="tabs">
   			<li><a href="#tab1">News</a></li>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
    				<th style="width:25%">Title</th> 
					<th>Permalink</th>
    				<th style="width:7%">Category</th> 
    				<th style="width:9%">Created On</th> 
					<th style="width:7%">Language</th>
					<th style="width:6%"><center>Publish</th>
    				<th style="width:8%" colspan="2">Actions</th> 
				</tr> 
			</thead> 
			<?php foreach ($isi as $row_isi) :
			{ ?>
			<tbody> 
				<tr> 
    				<td><?php echo $row_isi['title'];?></td>
					<td><?php echo base_url().'news/'.$row_isi['language'].'/'.$row_isi['kategori'].'/'.$row_isi['permalink']; ?></td>					
    				<td><center><?php echo $row_isi['kategori'];?></td> 
    				<td><?php echo $row_isi['tanggal'];?></td>
					<td><center><?php echo $row_isi['language'];?></td>
					<td><center><?php echo $row_isi['publish'];?></td>
    				<td><center><?php echo anchor('system/edit_news/'.$row_isi['id'],img(array('src'=> base_url().'wp-admin/images/icn_edit.png')));?></td>					<td><center><?php echo anchor('system/delete_news/'.$row_isi['id'],img(array('src'=> base_url().'wp-admin/images/icn_trash.png'))) ?></td> 
				</tr>   
			</tbody> 
			<?php } endforeach;?>
			</table>
			</div><!-- end of #tab1 -->
						
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		<div class="clear"></div>
