<?php 


$db = mysqli_connect("172.21.0.2", "root", "root", "ejemplo_menus", 3306);

$rows = $db->query( "
    select a.id, a.name, a.alias, a.type, b.id as sub_id, b.name as sub_name, 
    c.id as topic_id, c.title as topic_title
    from menus as a
    inner join menus as b On a.id = b.parent_id
    inner join menus_contenido as c On c.course_id = b.id
    where a.id = 
    order by b.orden asc, c.orden asc")
  ->fetch_all();

  print( "<pre>" . print_r( $rows, true) . "</pre>");

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bare - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="favicon.ico" />

    <link href="/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/fonta/css/all.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/side-bar.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/styles.css" rel="stylesheet" crossorigin="anonymous">


  </head>

  <body>

    <?php include dirname(__FILE__) . "/inc/header-nav.php"; ?>

    <div class="container d-md-flex align-items-stretch" style="background-color: white; padding-right: 0px">
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">

        <?php include dirname(__FILE__) . "/inc/lorem-ipsum.php"; ?>

      </div>

      <nav id="sidebar" class=sidebar2 style="background-color: #F7F7F7; margin: 0px;">
        <div class="p-4 pt-5 sidebar3"  style="background-color: #F7F7F7;">
          <h5>Categories</h5>
          <ul class="components mb-5">
            
            <li class="list-unstyled">
              <a id=Submenu1 href="#" data-toggle="collapse" aria-expanded="false" class=""><i class="fa-solid fa-circle fa-0xs"></i>Menú 1</a>
              <ul class="collapse " id="pageSubmenu1">
                <li class="list-unstyled"><a href="#"><i class="fa fa-chevron-right mr-2 fa-0xs"></i>Submenu 1-1</a></li>
                <li class="list-unstyled"><a href="#"><i class="fa fa-chevron-right mr-2 fa-0xs"></i>Submenu 1-2</a></li>
              </ul>
            </li>
            <li class="list-unstyled">
              <a id=Submenu2 href="#" data-toggle="collapse" aria-expanded="false" class=""><i class="fa-solid fa-circle fa-0xs"></i>Título del Menú 2</a>
              <ul class="collapse list-unstyled" id="pageSubmenu2">
                <li class="list-unstyled"><a href="#"><i class="fa fa-chevron-right mr-2 fa-0xs"></i>Submenu 2-1</a></li>
                <li class="list-unstyled"><a href="#"><i class="fa fa-chevron-right mr-2 fa-0xs"></i>Títiulo del Submenu 2-2</a></li>
                <li class="list-unstyled"><a href="#"><i class="fa fa-chevron-right mr-2 fa-0xs"></i>Submenu 2-3</a></li>
                <li class="list-unstyled"><a href="#"><i class="fa fa-chevron-right mr-2 fa-0xs"></i>Submenu 2-4</a></li>
              </ul>
            </li>
            <li class="list-unstyled">
              <a id=Submenu3 href="#" data-toggle="collapse" aria-expanded="false" class=""><i class="fa-solid fa-circle fa-0xs"></i>Menú 3</a>
              <ul class="collapse" id="pageSubmenu3">
                <li class="list-unstyled"><a href="#"><i class="fa fa-chevron-right mr-2 fa-0xs"></i>Submenu 3-1</a></li>
                <li class="list-unstyled"><a href="#"><i class="fa fa-chevron-right mr-2 fa-0xs"></i>Submenu 3-2</a></li>
                <li class="list-unstyled"><a href="#"><i class="fa fa-chevron-right mr-2 fa-0xs"></i>Submenu 3-3</a></li>
                <li class="list-unstyled"><a href="#"><i class="fa fa-chevron-right mr-2 fa-0xs"></i>Submenu 3-4</a></li>
                <li class="list-unstyled"><a href="#"><i class="fa fa-chevron-right mr-2 fa-0xs"></i>Submenu 3-5</a></li>
                <li class="list-unstyled"><a href="#"><i class="fa fa-chevron-right mr-2 fa-0xs"></i>Submenu 3-6</a></li>
              </ul>
            </li>
            
          </ul>
          <div class="mb-5">
            <h5>Tag Cloud</h5>
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">dish</a>
              <a href="#" class="tag-cloud-link">menu</a>
              <a href="#" class="tag-cloud-link">food</a>
              <a href="#" class="tag-cloud-link">sweet</a>
              <a href="#" class="tag-cloud-link">tasty</a>
              <a href="#" class="tag-cloud-link">delicious</a>
              <a href="#" class="tag-cloud-link">desserts</a>
              <a href="#" class="tag-cloud-link">drinks</a>
            </div>
          </div>
          <div class="mb-5">
            <h5>Newsletter</h5>
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <div class="icon"><span class="icon-paper-plane"></span></div>
                <input type="text" class="form-control" placeholder="Enter Email Address">
              </div>
            </form>
          </div>
        </div>
      </nav>
    </div>


    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/main.js"></script>
  </body>
</html>