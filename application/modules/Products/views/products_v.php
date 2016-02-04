<div class="ibox float-e-margins">
	<div class="ibox-title">
		<h5>Products<small class="m-l-sm">Products List</small></h5>
	</div>
	<div class="ibox-content">
		<table class = "table table-stripped">
			<thead>
			<tr>
			    <th>#</th>
			    <th>Image</th>
			    <th>Product Name</th>
			    <th>Category</th>
			    <th>Date Added</th>
			    <th>Actions</th>
			</tr>
			</thead>
			<tbody>
			<?php echo $products_table; ?>
			</tbody>
		</table>
	</div>
	<div class="ibox-footer">
	<span class="pull-right">
	<?php echo date("d-M-Y");?>
	</span>
	<?php echo $products_count; ?> Products
	</div>
</div>

<script type="text/javascript">
	$('table').dataTable();
</script>