<?php include('partials/menu.php'); ?>

<?php
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        $sql2 = "SELECT * FROM tbl_food WHERE id =$id";

        $res2 = mysqli_query($conn, $sql2);

        $row2 = mysqli_fetch_assoc($res2);

        $title = $row2['title'];
        $description = $row2['description'];
        $price = $row2['price'];
        $current_image = $row2['image_name'];
    }
    else
    {
        header('location:'.SITEURL. 'admin/manage-food.php');
    }
?>

    <div class="main-content">
        <div class="wrapper">
            <h1>Update Food</h1>
            <br><br>

            <form action="" method= "POST" enctype="multipart/form-data">
            
            <table class= "tbl-30">

                <tr>
                    <td>Title: </td>
                    <td>
                        <input type ="text" name ="title" value = "<?php echo $title; ?>">
                    </td>               
                </tr>

                <tr>
                    <td>Description: </td>
                    <td>
                        <textarea name ="description" cols ="30" rows= "5"><?php echo $description; ?></textarea>
                    </td>               
                </tr>

                <tr>
                    <td>Price: </td>
                    <td>
                        <input type ="number" name ="price" value="<?php echo $price; ?>">
                    </td>               
                </tr>

                <tr>
                    <td>Current Image: </td>
                    <td>
                        <?php
                            if($current_image == "")
                            {
                                echo "<div class = 'error'>Image not Available.</div>";
                            }
                            else
                            {
                                ?>
                                <img src="<?php echo SITEURL; ?>images/food <?php echo $current_image; ?>">
                                <?php
                            }
                        ?>
                    </td>               
                </tr>

                <tr>
                    <td>Select New Image: </td>
                    <td>
                        <input type ="file" name ="image">
                    </td>               
                </tr>

                <tr>
                    <td>
                        <input type ="submit" name ="submit" value ="Update Food" clas ="btn-secondary">
                    </td>               
                </tr>

            </table>

            </form>
        </div>
    </div>

<?php include('partials/footer.php'); ?>
