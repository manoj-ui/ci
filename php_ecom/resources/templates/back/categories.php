
<h1 class="page-header">
  Product Categories
<?php add_cat(); ?>
</h1>


<div class="col-md-4">
    
    <form action="" method="post">
    
        <div class="form-group">
            <label for="category-title">Title</label>
            <input name="cat_title" type="text" class="form-control" required>
        </div>

        <div class="form-group">
            
            <input name="submit" type="submit" class="btn btn-primary" value="Add Category">
        </div>      


    </form>


</div>


<div class="col-md-8">

    <table class="table">
            <thead>

        <tr>
            <th>id</th>
            <th>Title</th>
        </tr>
            </thead>


    <tbody>
      <?php show_category_admin(); ?>
    </tbody>

        </table>

</div>



                












