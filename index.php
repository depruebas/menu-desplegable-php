<?php 


$db = mysqli_connect("172.21.0.2", "root", "root", "ejemplo_menus", 3306);

$rows = $db->query( "select m.id as menu_id, m.name as menu_name, 
    mm.id as submenu_id, mm.name as submenu_name, mm.orden as submenu_orden,
      mc.id as tema_id, mc.title as tema_title, mc.orden as tema_orden
      from menus as m
      inner join menus as mm On m.id = mm.parent_id
      inner join menus_contenido as mc On mc.menu_id = mm.id
      where m.id = 1
      order by mm.orden asc, mc.orden asc;")
  ->fetch_all(MYSQLI_ASSOC);

$menus = $db->query( "select GROUP_CONCAT(id SEPARATOR ', ') as ids from menus where parent_id = 1")
->fetch_all(MYSQLI_ASSOC);


// Para mostrar los datos por pantalla en modo raw.
// print( "<pre>" . print_r( $rows, true) . "</pre>");

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
          <h5><?php echo $rows[0]['menu_name']; ?></h5>
          <ul class="components mb-5">

          <?php
            $submenu = '';  

            for( $i = 0; $i < count( $rows); $i++)
            {   

              if ( $submenu != $rows[$i]['submenu_id'])
              {
                echo '<li class="list-unstyled">';
                echo '<a id=Submenu_'.$rows[$i]['submenu_id'].' href="#" data-toggle="collapse" aria-expanded="false" class="">
                  <i class="fa-solid fa-circle fa-0xs"></i>'.$rows[$i]['submenu_name'].'</a>';
                echo '<ul class="collapse " id="pageSubmenu_'.$rows[$i]['submenu_id'].'">';
              }

              echo '<li class="list-unstyled"><a href="/class/'.$rows[$i]['tema_id'].'"><i class="fa fa-chevron-right mr-2 fa-0xs"></i>'.$rows[$i]['tema_title'].'</a></li>';

              $submenu = $rows[$i]['submenu_id'];

              if ( $submenu != $rows[$i+1]['submenu_id'])
              {
                echo '</ul></li>';
              }
              
            }


        ?>
            
            
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


<script class="javascript">

  window.onload = function() {
    
    let menus = [<?php echo $menus[0]['ids']; ?>];

    console.log(menus);
    console.log(menus.length);

    for (let i = 0; i < menus.length; i++)
    {
      console.log( menus[i]);
      $("#Submenu_" + menus[i]).click(function(){

        event.preventDefault();

        if ( !$('#pageSubmenu_' + menus[i]).is(':visible')) 
        {
          $("#pageSubmenu_" + menus[i]).show();
          
          for (let j = 0; j < menus.length; j++)
          {
            if ( menus[i] != menus[j])
            {
              $("#pageSubmenu_" + menus[j]).hide();
            }
          }
         
        } 
        else 
        {
          $("#pageSubmenu_" + menus[i]).hide();
        }

      });

    }

  };


</script>