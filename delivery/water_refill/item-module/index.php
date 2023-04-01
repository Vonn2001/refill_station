<div id="third-submenu">
    
</div>
<div id="subcontent">
    <?php
      switch($action){
                case 'create':
                    require_once 'item-module/create-item.php';
                break; 
                case 'create2':
                    require_once 'item-module/create-item2.php';
                break; 
                case 'modifyi':
                    require_once 'item-module/modify-item.php';
                break; 
                case 'profilei':
                    require_once 'item-module/view-profile.php';
                break;
                case 'resulti':
                    require_once 'item-module/search-item.php';
                break;
                default:
                    require_once 'item-module/main.php';
                break; 
            }
    ?>
  </div>