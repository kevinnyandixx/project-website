<style type="text/css">
    #uploader
    {
        background-color: white;
        padding: 15px;
    }
</style>

<form id="form" action="<?php echo base_url(); ?>Products/<?php if(isset($product_details)){?>editproduct/<?php echo $product_details->product_id; ?><?php } else { ?>addproduct <?php } ?>" method = "POST">
    <div class = "ibox">
        <div class="ibox-title"></div>
        <div class = "ibox-content">
            <h1>Product Information</h1>
            <fieldset>
                <h2>Product Information</h2>
                <div class="form-horizontal">
                    <div class="form-group">
                    	<label class="col-sm-2 control-label">Name:</label>
                   		<div class="col-sm-10"><input type="text" class="form-control" placeholder="Product name" name = "product_name" value="<?php if(isset($product_details->product_name)){ echo $product_details->product_name; }?>"></div>
                    </div>
                    <div class="form-group">
                    	<label class="col-sm-2 control-label">Price:</label>
                    	<div class="col-sm-10"><input type="text" class="form-control" placeholder="Ksh. 0.00" name = "product_price" value="<?php if(isset($product_details)){ echo $product_details->product_price; }?>"></div>
                    </div>
                    <div class="form-group">
                    	<label class="col-sm-2 control-label">Product Description:</label>
        	            <div class="col-sm-10">
        		           <textarea class = "form-control" name = "product_description"><?php if(isset($product_details->product_description)){ echo $product_details->product_description; }?></textarea>
        	            </div>
                    </div>
                    <div class="form-group">
                    	<label class="col-sm-2 control-label">Product Category:</label>
                    	<div class="col-sm-10">
        		           <select name = "product_categoryid" class="form-control">
        		           	<?php foreach ($categories as $key => $value): ?>
        		           		<option value = "<?php echo $value->category_id; ?>" <?php if(isset($product_details) && $product_details->product_categoryid == $value->category_id){ echo 'selected = "selected"'; }?>><?php echo $value->category_name; ?></option>
        		           	<?php endforeach ?>
        		           </select>
        	            </div>
                    </div>
                </div>
            </fieldset>

        	<h1>Images</h1>
        	<a class = "btn btn-primary dim pull-right" id = "add-image-upload"><i class = "fa fa-file-image-o"></i> Add image</a>
            <div id = "images-tables">
            	<table class = "table table-bordered table-stripped">
            		<thead>
            			<tr>
            				<th>#</th>
            				<th>
                                Image preview
                            </th>
                            <th>
                                Image url
                            </th>
                            <th>
                                Actions
                            </th>
                             <th>
                                Delete
                            </th>
            			</tr>
            		</thead>
            		<tbody>
            			<?php echo $image_list; ?>
            		</tbody>
            	</table>
            </div>
            <div id = "images">
                
            </div>

            <button class = "btn btn-default"><?php if(isset($product_details)){?>Edit Product <?php } else { ?>Add Product <?php } ?></button>
        </div>
    </div>
</form>


<div id = "uploader">
    <a id = "hide-uploader" class = "btn btn-danger pull-right">Close</a>
    <link href="<?php echo ASSETS_URL; ?>backend/css/plugins/dropzone/basic.css" rel="stylesheet">
    <link href="<?php echo ASSETS_URL; ?>backend/css/plugins/dropzone/dropzone.css" rel="stylesheet">
    <br/><br/><br/>
    <form id="my-awesome-dropzone" class="dropzone" action="<?php echo base_url(); ?>Products/upload_images">
        <div class="dropzone-previews"></div>
        <button type="submit" class="btn btn-primary pull-right">Upload Pictures!</button>
    </form>
    <!-- Jquery Validate -->
    <script src="<?php echo ASSETS_URL; ?>backend/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="<?php echo ASSETS_URL; ?>backend/js/plugins/dropzone/dropzone.js"></script>
    <script>
        $(document).ready(function(){

            Dropzone.options.myAwesomeDropzone = {

                autoProcessQueue: false,
                uploadMultiple: false,
                parallelUploads: 100,
                maxFiles: 100,

                accept: function(file, done) {
                    console.log(file.type);
                    if (file.type !== "image/png" && file.type !== "image/jpg" && file.type !== "image/gif" && file.type !== "image/jpeg") {
                        done(file.name + " is not an image");
                    }
                    else { done(); }
                },
                // Dropzone settings
                init: function() {
                    var myDropzone = this;

                    this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        myDropzone.processQueue();
                    });
                        this.on("sendingmultiple", function() {
                        });
                        this.on("success", function(files, response) {
                            arr = jQuery.parseJSON(response);
                            var input = document.createElement('input');
                            input.name = "image_url[]";
                            input.type = "hidden";
                            input.value = "<?php echo base_url(); ?>uploads/" + arr.upload_data.file_name;

                            var image_container =  document.getElementById("images");
                            image_container.appendChild(input);
                        });
                        this.on("error", function(files, response) {
                            // alert(response);
                        });
                }

            }

       });
        </script>
</div>
<script type="text/javascript">
    $('#uploader').hide();
    $('#add-image-upload').click(function(event){
        $('#uploader').show();
        $('#images-tables').hide();
    });

    $('#hide-uploader').click(function(event){
        event.preventDefault();
        $('#uploader').hide();
        $('#images-tables').show();
    });
</script>