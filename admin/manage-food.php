<?php include('partials/menu.php') ?>

        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Food</h1>

                <br /> <br />

                <a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn-primary">Add Food</a>

                <br /><br /> <br />

                <?php
                
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                
                ?>

            <table class="tbl-full">
                <tr>
                    <th>No.</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>

                <tr>
                    <td>1. </td>
                    <td>Unknown</td>
                    <td>Unknown</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Food</a>
                        <a href="#" class="btn-danger">Delete Food</a>
                    </td>
                </tr>

                <tr>
                    <td>2. </td>
                    <td>Unknown</td>
                    <td>Unknown</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Food</a>
                        <a href="#" class="btn-danger">Delete Food</a>
                    </td>
                </tr>

                <tr>
                    <td>3. </td>
                    <td>Unknown</td>
                    <td>Unknown</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Food</a>
                        <a href="#" class="btn-danger">Delete Food</a>
                    </td>
                </tr>
            </table>
                
            </div>
        </div>

<?php include('partials/footer.php') ?>
