<?php include('partials/menu.php') ?>

        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Category</h1>

                <br /> <br />

                <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-primary">Add Category</a>

                <br /><br /> <br />

                <table class="tbl-full">
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>

                    <?php 

                        $sql = "SELECT * FROM tbl_category";

                        $res = mysqli_query($conn, $sql);

                        $count = mysqli_num_rows($res);

                        $no = 1;

                        if($count>0) {
                            while($row=mysqli_fetch_assoc($res)) {
                                $id = $row['id'];
                                $title = $row['title'];
                                $image_name = $row['image_name'];

                                ?>

                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $title ?></td>

                                    <td>
                                        <?php
                                            if($image_name!="") {
                                                ?>
                                                <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" width="100px">

                                                <?php
                                            }
                                            else {
                                                echo "<div class='error'>Image not Added.</div>";
                                            }
                                        ?>
                                    </td>

                                    <td>
                                        <a href="#" class="btn-secondary">Update Category</a>
                                        <a href="#" class="btn-danger">Delete Category</a>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        else {
                            ?>

                            <tr>
                                <td colspan="6"><div class="error">No Category Added.</div></td>
                            </tr>

                            <?php
                        }
                    ?>

                </table>
                
            </div>
        </div>

<?php include('partials/footer.php') ?>
