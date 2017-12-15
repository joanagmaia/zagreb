<?php if($_SESSION['type_admin']==1) {?>
 <div class="edit-album-wrapper pale-brown-bg">
   <div class="edit-form-wrapper">
     <div class="title-wrapper">
       <h2>Edit album</h2>
       <span>Update your album info</span>
     </div>
     <div class="show-more">+</div>
   </div>
   <form action="../php/edit_album.php" method="GET" class="form-edit">
     <div class="inactive-wrapper">
       <h3>Album Available?</h3>
       <select name="inactive_album" placeholder="Choose">
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
     </div>
     <div class="price-wrapper">
       <h3>Price: </h3>
       <input type="number" name="price_album" value="<?php echo $price ?>">
     </div>
     <div class="price-wrapper">
       <h3>Stock: </h3>
       <input type="number" name="stock_album" value="<?php echo $stock ?>">
     </div>
     <input type="submit" class="light-blue-bg" value="Save" name="submit_edit">
   </form>
 </div>
<?php } ?>
