<?php
/* include the class file (global - within application) */
include_once 'classes/class.item.php';
include_once 'classes/class.user.php';
include 'config/config.php';

$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';


$user = new User();
$item = new Item();
if(!$user->get_session()){
	header("location: login.php");
}
$user_id = $user->get_user_id($_SESSION['user_email']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>TACOLOD EMISSION CENTER</title>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css?<?php echo time();?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  
</head>
<body>


    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Menu</header>
      <a href="index.php" class="active">
        <i class="fas fa-home"></i>
        <span>Home</span>
      </a>
      <a href="index.php?page=prod">
        <i class="fas fa-poll-h"></i>
        <span>Branch 1</span>
      </a>
      <a href="index.php?page=prod2">
        <i class="fas fa-poll-h"></i>
        <span>Branch 2</span>
      </a>
      <a href="index.php?page=item&subpage=item&action=create">
        <i class="fas fa-stream"></i>
        <span>Branch 1 New</span>
      </a>
      <a href="index.php?page=item&subpage=item&action=create2">
        <i class="fas fa-stream"></i>
        <span>Branch 2 New</span>
      </a>
      <a href="index.php?page=settings&subpage=users">
         <i class="far fa-user-circle"></i>
        <span>Users</span>
        <a href="logout.php">
         <i class="fas fa-ban"></i>
        <span>Logout</span>
      </a>
    </div>

    <div id="header">
      <h2>TACOLOD EMISSION CENTER</h2>
    </div>

    <img src="1111.png" alt="Logo" >

  

    <?php
      switch($page){
        case 'item':
          require_once 'item-module/index.php';
      break; 
      case 'prod':
        require_once 'products/index.php';
    break; 
    case 'prod2':
      require_once 'products2/index.php';
  break; 
    
                case 'settings':
                    require_once 'settings-module/index.php';
                break; 
                case 'module_two':
                    require_once 'module-folder';
                break; 
                case 'module_xxx':
                    require_once 'module-folder';
                break; 
                default:
                    require_once 'main.php';
                break; 
            }
    ?>
  </div>
  
</div>



</body>
</html>