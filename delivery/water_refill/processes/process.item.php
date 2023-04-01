<?php
include '../classes/class.item.php';
include '../classes/class.item2.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
$id= isset($_GET['id']) ? $_GET['id'] : '';
$status= isset($_GET['status']) ? $_GET['status'] : '';

switch($action){
	case 'new':
        create_new_item();
	break;

    case 'new2':
        create_new_item2();
	break;
 

}


function create_new_item(){
	$item = new Item();
    $cname = ucwords($_POST['cname']);
    $typ = ucwords($_POST['typ']);
    $pr_typ = ucwords($_POST['pr_typ']);
    $id = $_POST['id'];
    
    
    $result = $item->new_item($cname,$typ,$pr_typ);
    if($result){
        header('location: ../index.php?page=settings&subpage=item&action=profile&id='.$id);
    }
}

function create_new_item2(){
	$item = new Item();
    $cname = ucwords($_POST['cname']);
    $pr_typ = ucwords($_POST['pr_typ']);
    $typ = ucwords($_POST['typ']);
    $id = $_POST['id'];
    
    
    $result = $item->new_item2($cname,$typ,$pr_typ);
    if($result){
        header('location: ../index.php?page=settings&subpage=item&action=profile&id='.$id);
    }
}


function create_over(){

    
    if($result){
        header('location: ../index.php?page=settings&subpage=item&action=profile&id='.$id);
    }
}