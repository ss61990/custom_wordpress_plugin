<?php
	global $wpdb;
	global $table_prefix;
	$table=$table_prefix.'form_data';
	$sql="select * from $table";
	$result= $wpdb->get_results($sql);

?>
<center><h2>User Record</h2></center>
<table border='2' style="width:100%;max-width:100%;font-size:12px">
	<tr>
		<td>ID</td>
		<td>First Name</td>
		<td>Middle Name</td>
		<td>Last Name</td>
		<td>Address</td>
		<td>Unit</td>
		<td>City</td>
		<td>State</td>
		<td>Zip Code</td>
		<td>D-O-B</td>
		<td>Phone</td>
		<td>Email</td>
		<td>Room Mode</td>
		<td>Created Date</td>
	</tr>
	<?php
		foreach($result as $list){
	?>
		<tr>
			<td><?php echo $list->id ?></td>
			<td><?php echo $list->fname ?></td>
			<td><?php echo $list->mname ?></td>
			<td><?php echo $list->lname ?></td>
			<td><?php echo $list->address ?></td>
			<td><?php echo $list->unit ?></td>
			<td><?php echo $list->city ?></td>
			<td><?php echo $list->state ?></td>
			<td><?php echo $list->zip_code ?></td>
			<td><?php echo $list->dob ?></td>
			<td><?php echo $list->phone ?></td>
			<td><?php echo $list->email ?></td>
			<td><?php echo $list->mode ?></td>
			<td><?php echo $list->created_date ?></td>
		</tr>	
	<?php	
		}
		
	?>
	
</table>