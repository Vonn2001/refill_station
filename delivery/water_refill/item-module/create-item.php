<div id="form-block">
<h3>Enter Transaction (Branch 1)</h3>
    <form method="POST" action="processes/process.item.php?action=new">

    <label for="cname">Customer Name</label>
            <input type="text" id="cname" class="input" name="cname" placeholder="customer name..">

    <label for="typ">Transaction Type</label>
            <select id="typ" name="typ">
              <option value="Walk in">Walk in</option>
              <option value="Delivery">Delivery</option>
            </select>

            <label for="pr_typ">Service Type</label>
            <select id="pr_typ" name="pr_typ">
              <option value="Refill">Refill</option>
              <option value="Purchase With Bottle">Purchase With Bottle</option>
            </select>
            
        <div id="button-block">
        <input type="submit" value="Save">
        </div>
  </form>
</div>