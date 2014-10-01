<form enctype="multipart/form-data" method="post" action="<?php echo action('Sheremet\Adminpanel\ArticleController@store'); ?>">
<div class="row">
  <div class="col-md-12">
    <div class="bar-battons">
      <div class="btn-group">
        <a href="<?php echo action('Sheremet\Adminpanel\ArticleController@index'); ?>" class="btn btn-danger"><i class="fa fa-reply"></i> Back</a>
        <button class="btn btn-success"><i class="fa fa-floppy-o"></i> Save</button>
      </div>
    </div>
    <div class="row article-form">
      <div class="col-md-5">
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">Name</div>
            <input class="form-control" name="name" placeholder="Article name" />
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">Category</div>
            <select name="category" class="form-control">
              <option value="Test 1">Test 1</option>
              <option value="Test 2">Test 2</option>
            </select>
          </div>
        </div>
        <div class="form-group">
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
      </div>
    </div>
  </div>
</div>
</form>