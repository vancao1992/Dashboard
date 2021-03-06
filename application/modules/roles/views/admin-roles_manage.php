<div class="row-fluid">
	<div class="span3">
		<!-- Sidebar -->
		<div class="well sidebar-nav">
			<?php echo CIWidget::navigator('admin'); ?>
		</div><!--/.well -->
	</div><!--/span-->
	<div class="span9">

		<div class="row-fluid">
			<table class="table table-condensed">
	   			<thead>
	   				<tr>
	   					<th><?php _e('Role Name'); ?></th>
	   					<th><?php _e('Inherit'); ?></th>
	   					<th><?php _e('Title'); ?></th>	   					
	      			</tr>
	   			</thead>
	   			<?php if (count($entries) > 0) : ?>
	   			<tbody>
	   				<?php foreach ($entries as $entry) : ?>
	   				<tr>
	   					<td><?php echo $entry['id']; ?></td>
	   					<td><?php echo $entry['inherit']; ?></td>
	   					<td>
	   						<a href="<?php echo CIUri::base('roles/admin/edit/'.$entry['id']); ?>">
	   							<?php echo $entry['title']; ?>
	   						</a>	   						
	   						<a href="<?php echo CIUri::base('roles/admin/resources_manage/'.$entry['id']); ?>">
	   							(<?php _e('Resources'); ?>)
	   						</a>
	   						<p><?php echo $entry['description']; ?></p>
	   					</td>	   					
	   				</tr>
	   				<?php endforeach; ?>
	   			</tbody>
	   			<?php endif; ?>
	    	</table>	
    	</div><!--/row-->	
		
	</div><!--/span-->
</div><!--/row-->