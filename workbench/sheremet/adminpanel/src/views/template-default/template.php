<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $title; ?></title>
    <link href="/labs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/labs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/labs/redactor/redactor.css" rel="stylesheet" />
    <link href="/labs/css/custom-style.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="admin-nav-bar">
      <div class="pull-left">
        <a href="<?php echo action('Sheremet\Adminpanel\AdminpanelController@index'); ?>" class="title-admin">ADMIN LITE</a>
      </div>
      <div class="pull-right">
        <ul class="nav navbar-nav">
          <li><a href="#" class="mail-a"><i class="fa fa-envelope-o"></i><span class="badge mail-count">2</span></a></li>
          <li><a href="#"><i class="fa fa-cog"></i></a></li>
          <li><a href="#"><i class="fa fa-sign-out"></i></a></li>
        </ul>
      </div>
      <div class="pull-right">
        <ul class="nav">
           <li class="dropdown">
            <a href="#" class="dropdown-toggle user-dropdown" data-toggle="dropdown">Administrator <i class="fa fa-caret-down"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="mini-dashboard">
      <ul class="nav nav-pills nav-justified">
        <li>
          <a href="<?php echo action('Sheremet\Adminpanel\ArticleController@index'); ?>">
            <i class="fa fa-file-text-o"></i><br/>
            <span>Articles</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="container-fluid">
    <?php echo $body; ?>  
    </div>
    <div class="footer">
      <div class="container-fluid">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </div>
    <script src="/labs/js/jquery-1.11.1.min.js"></script>
    <script src="/labs/bootstrap/js/bootstrap.min.js"></script>
    <script src="/labs/redactor/redactor.min.js"></script>
    <script src="/labs/redactor/lang/ru.js"></script>
    <script src="/labs/js/script.js"></script>
  </body>
</html>