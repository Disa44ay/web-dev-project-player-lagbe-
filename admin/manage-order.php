<?php include('header.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Order</h1>

        <br><br>

        <table class="tbl-full">
            <tr>
                <th>Serial Number</th>
                <th>Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Featured</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
            <?php
            //sql query to get all the item details
            $sql = "SELECT * FROM shop_items_info";

            //execute the query
            $res = mysqli_query($conn, $sql);

            //count rows to check whether ww have items in db or not
            $count = mysqli_num_rows($res);

            //create serial number variable
            $sn = 1;

            if ($count > 0) {
                //get the items form database and display
                while ($row = mysqli_fetch_assoc($res)) {
                    //get the value from individual columns
                    $id = $row['IID'];
                    $title = $row['NAME'];
                    $price = $row['PRICE'];
                    $image_name = $row['IMAGE_NAME'];
                    $featured = $row['FEATURED'];
                    $active = $row['ACTIVE'];
            ?>

                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $title; ?></td>
                        <td><?php echo $price; ?></td>
                        <td>
                            <?php 
                            //check whether we ahve a image or not
                            if($image_name == ""){
                                echo "<div class = 'error'>image not added.</div>";
                            }else{
                                //we have image disp[lay the image
                                ?>
                                <img src="<?php echo HOMEURL; ?>images/items/<?php echo $image_name; ?>" width = "100px">

                                <?php
                            }
                        ?>
                        </td>
                        <td><?php echo $featured; ?></td>
                        <td><?php echo $active; ?></td>
                        <td>
                            <a href="#" class="btn-secondary-up">Update</a>&nbsp;&nbsp;&nbsp;
                            <a href="#" class="btn-secondary-del">Delete item</a>

                        </td>
                    </tr>

            <?php

                }
            } else {
                echo "<tr><td colspan='7' class='error'>Item not inserted.</td></tr>";
            }
            ?>

        </table>
    </div>
</div>


<?php include('footer.php'); ?>