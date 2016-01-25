<form method = "POST" class="form-horizontal modal-form" action = "<?php echo base_url(); ?>Products/<?php if(!isset($category_details)){ echo 'addcategory';}else{ echo 'editcategory/' . $category_details->category_id;}?>">
    <div class="form-group">
    	<label class="col-lg-2 control-label">Category Name</label>
        <div class="col-lg-10"><input type="text" name = "category_name" placeholder="Category Name" class="form-control" data-required = "true" value = "<?php if(isset($category_details)){ echo $category_details->category_name; }?>" /></div>
    </div>
    <div class="form-group"><label class="col-lg-2 control-label">Category Description</label>

        <div class="col-lg-10"><textarea name = "category_description" class = "form-control" data-required = "true"><?php if(isset($category_details)){ echo $category_details->category_description; }?></textarea></div>
    </div>

    <div class="form-group"><label class="col-lg-2 control-label">Parent Category</label>

        <div class="col-lg-10">
        	<select name = "parent_id" class = "form-control">
	        	<option value = "0">No Parent</option>
	        	<?php
	        		if(count($categories) > 0)
	        		{
	        			foreach ($categories as $category) {
	        				if($category->category_id !== $category_details->category_id){
		        				echo "<option value = '{$category->category_id}'";
		        				if(isset($category_details) && ($category->category_id == $category_details->parent_id)){
		        					echo "selected='selected'";
		        				}
		        				echo ">{$category->category_name}</option>";
		        			}
	        			}
	        		}
	        	?>
        	</select>
        </div>
    </div>
</form>