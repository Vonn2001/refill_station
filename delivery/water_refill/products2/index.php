<div id="third-submenu">
    Search <input type="text"/>
</div>
   
  <div id="subcontent">
    <table id="data-list">
      <tr>
        <th>Transaction Id</th>
        <th>Customer Name</th>
        <th>Transaction Type</th>
        <th>Service Type</th>
        <th>Date Of Transaction</th>
        <th>Time Of Transaction</th>
       
        

        
      </tr>
<?php
$count = 1;
if($item->list_items2() != false){
foreach($item->list_items2() as $value){
   extract($value);
  
?>
      <tr>
        <td><?php echo $count;?></td>
        <td><?php echo $cname;?></td>
        <td><?php echo $typ;?></td>
        <td><?php echo $pr_typ;?></td>
        <td><?php echo $date_tr;?></td>
        <td><?php echo $time_tr;?></td>

      </tr>
      <tr>
<?php
 $count++;
}
}else{
  echo "No Record Found.";
}
?>
    </table>
</div>

