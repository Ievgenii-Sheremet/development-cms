<div class="row">
  <div class="col-md-12">
    <div class="bar-battons">
      <a href="<?php echo action('Sheremet\Adminpanel\ArticleController@create'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Create</a>
    </div>
    <div class="bar-table">
      <table class="table table-striped">
        <tr>
          <th>#</th>
          <th>Article name</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
        <?php foreach ($articles as $article){ ?>
        <tr>
          <td><?php echo $article->id; ?></td>
          <td><?php echo $article->name; ?></td>
          <td><?php echo $article->description; ?></tdtd>
          <td>Action</td>
        </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</div>