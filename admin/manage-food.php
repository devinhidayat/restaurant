<?php include('partials/menu.php') ?>

        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Food</h1>

                <br /> <br />

                <a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn-primary">Add Food</a>

                <br /><br /> <br />

                <?php
                    if(isset($_SESSION['add'])) {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                ?>

                <table class="tbl-full">
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>

                    <?php
                        $sql = "SELECT * FROM tbl_food";

                        $res = mysqli_query($conn, $sql);

                        $count = mysqli_num_rows($res);

                        $no = 1;

                        if($count>0) {
                            while($row=mysqli_fetch_assoc($res)) {
                                $id = $row['id'];
                                $title = $row['title'];
                                $price = $row['price'];
                                $image_name = $row['image_name'];
                                ?>

                                <tr>
                                    <td><?php echo $no++;?></td>
                                    <td><?php echo $title;?></td>
                                    <td><?php echo $price;?></td>
                                    <td>
                                        <?php
                                            if($image_name=="") {
                                                echo "<div class='error'>Image not Added.</div>";
                                            }
                                            else {
                                                ?>
                                                <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" width="100px">
                                                <?php
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="#" class="btn-secondary">Update Food</a>
                                        <a href="#" class="btn-danger">Delete Food</a>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        else {
                            echo "<tr><td colspan='7' class='error'>Food not Added Yet.</td></tr>";
                        }
                    ?>

                </table>
                
            </div>
        </div>

<?php include('partials/footer.php') ?>
