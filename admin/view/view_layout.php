
 <!DOCTYPE html>
 <html>
 <head>
   <title>admin</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <script language="javascript" src="public/ckeditor/ckeditor.js"></script>
 </head>
 <body>
 
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">home</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?controller=category_product">danh sách sản phẩm</a></li>
            <li class="active"><a href="index.php?controller=product">sản phẩm</a></li>
            <li class="active"><a href="index.php?controller=news">tin tức</a></li>
            <li class="active"><a href="index.php?controller=bill">đơn hàng</a></li>
            <li class="active"><a href="index.php?controller=user">user</a></li>
            <li class="active"><a href="index.php?controller=logout">đăng xuất</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div style="margin-top: 80px;">
    <?php
      if(file_exists($load_controller)==true)
        include $load_controller;
      ?>
    </div> 
 </body>
 </html>