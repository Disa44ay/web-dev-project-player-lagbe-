<?php
include('header.php');
?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add items</h1>
        <br><br>

        <?php
        if (isset($_SESSION['upload'])) {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="form-table">

                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder=" item name">
                    </td>
                </tr>

                <tr>
                    <td>Description: </td>
                    <td>
                        <textarea name="description" cols="10" rows="5" placeholder=" description of the item.."></textarea>
                    </td>
                </tr>

                <tr>
                    <td>Price: </td>
                    <td>
                        <input type="number" name="price" placeholder=" price(e.g. 100)">
                    </td>
                </tr>

                <tr>
                    <td>Select image</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="yes">yes
                        <input type="radio" name="featured" value="no">no
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="yes">yes
                        <input type="radio" name="active" value="no">no
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="confirm item" class="btn-primary">
                    </td>
                </tr>

            </table>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            //1. Get the data from form
            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];

            // Check whether the radio button for featured and active is set
            if (isset($_POST['featured'])) {
                $featured = $_POST['featured'];
            } else {
                $featured = "NO"; // Setting default value
            }

            if (isset($_POST['active'])) {
                $active = $_POST['active'];
            } else {
                $active = "NO"; // Setting default value
            }

            //2. Upload the image if selected
            // Check whether the select image is clicked or not
            $image_name = "";
            if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
                // Image is selected
                // A. Rename the image
                $image_name = $_FILES['image']['name']; // Original image name

                // Get the extension of selected image (jpg/png/gif)
                $ext = end(explode('.', $image_name)); // Breaking the name into parts and taking the last part

                // Create a new name for the image
                $image_name = "item-name-" . rand(0000, 9999) . "." . $ext; // Example: item-name-567.jpg

                // B. Upload the image
                // Get the source path and the destination path
                $src = $_FILES['image']['tmp_name']; // Temporary path of the uploaded file
                $dst = "../images/items/" . $image_name; // Destination path where the image will be stored

                // Move the uploaded image to the destination folder
                $upload = move_uploaded_file($src, $dst);

                // Check whether image uploaded or not
                if ($upload == false) {
                    // Failed to upload the image
                    // Redirect to add items page with error message
                    $_SESSION['upload'] = "<div class='error'>Failed to upload image.</div>";
                    header('location: ' . HOMEURL . 'admin/add-items.php');
                    // Stop the process
                    die();
                }
            } else {
                $image_name = ""; // Setting default value as blank
            }

            //3. Insert into the database
            // Create an SQL query to save data to add items
            $sql2 = "INSERT INTO shop_items_info SET
        NAME = '$title',
        PRICE = $price,
        DESCRIPTION = '$description',
        IMAGE_NAME = '$image_name',
        FEATURED = '$featured',
        ACTIVE = '$active'";

            // Execute the query
            $res2 = mysqli_query($conn, $sql2);

            // Check whether the data is inserted or not
             //4. Redirect with message
            if ($res2 == true) {
                // Data inserted successfully
                $_SESSION['add'] = "<div class='success'>Item added successfully.</div>";
                header('location: ' . HOMEURL . 'admin/manage-shop.php');
            } else {
                // Failed to insert data
                $_SESSION['add'] = "<div class='error'>Failed to add item.</div>";
                header('location: ' . HOMEURL . 'admin/manage-shop.php');
            }
        }
        ?>


    </div>
</div>
<?php
include('footer.php');
?>