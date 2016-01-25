<div class="col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Categories<small class="m-l-sm">Category List</small></h5>
        </div>
        <div class="ibox-content">
            <table class = "table table-stripped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Subcategories</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $categories_table; ?>
                </tbody>
            </table>
        </div>
        <div class="ibox-footer">
            <span class="pull-right">
               <?php echo date("d-M-Y");?>
            </span>
            <?php echo $categories_count; ?> Categories
        </div>
    </div>
</div>

<div class = "col-lg-4">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5><span id = "category_name"></span> Subcategories<small class="m-l-sm">Subcategory List</small></h5>
        </div>
        <div class="ibox-content">
            <div class = "subcategory_listing">
                <div class="middle-box text-center animated fadeInRightBig" style = "margin-top: 0px;">
                    <i class = "fa fa-hand-o-left"></i>
                    <h3 class="font-bold">Select a Category</h3>
                </div>
            </div>
        </div>
        <div class="ibox-footer">
        <span class="pull-right">
        <?php echo date("d-M-Y");?>
        </span>
        <span id = "sub-category-count">0</span> sub categories
        </div>
    </div>
</div>