<?php
session_start();
include('include/config.php');

if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    date_default_timezone_set('Asia/Kolkata'); // change according timezone
    $currentTime = date('d-m-Y h:i:s A', time());

    if (isset($_POST['submit'])) {
        $category = $_POST['category'];
        $subcat = $_POST['subcategory'];
        $id = intval($_GET['id']);

        $sql = mysqli_query($con, "UPDATE subcategory SET categoryid='$category', subcategory='$subcat', updationDate='$currentTime' WHERE id='$id'");
        $_SESSION['msg'] = "Sub-Category Updated !!";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit SubCategory</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="images/icons/css/font-awesome.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600">
</head>

<body>
    <?php include('include/header.php'); ?>

    <div class="wrapper">
        <div class="container">
            <div class="row">
                <?php include('include/sidebar.php'); ?>
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3>Edit SubCategory</h3>
                            </div>
                            <div class="module-body">

                                <?php if (isset($_POST['submit'])) { ?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Well done!</strong>
                                    <?php echo htmlentities($_SESSION['msg']);
                                        echo htmlentities($_SESSION['msg'] = ""); ?>
                                </div>
                                <?php } ?>

                                <br />

                                <form class="form-horizontal row-fluid" name="Category" method="post">
                                    <?php
                                    $id = intval($_GET['id']);
                                    $query = mysqli_query($con, "SELECT category.id, category.categoryName, subcategory.subcategory FROM subcategory JOIN category ON category.id=subcategory.categoryid WHERE subcategory.id='$id'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Category</label>
                                        <div class="controls">
                                            <select name="category" class="span8 tip" required>
                                                <option value="<?php echo htmlentities($row['id']); ?>">
                                                    <?php echo htmlentities($catname = $row['categoryName']); ?>
                                                </option>
                                                <?php
                                                    $ret = mysqli_query($con, "SELECT * FROM category");
                                                    while ($result = mysqli_fetch_array($ret)) {
                                                        $cat = $result['categoryName'];
                                                        if ($catname == $cat) {
                                                            continue;
                                                        } else {
                                                    ?>
                                                <option value="<?php echo $result['id']; ?>">
                                                    <?php echo $result['categoryName']; ?>
                                                </option>
                                                <?php }
                                                    } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">SubCategory Name</label>
                                        <div class="controls">
                                            <input type="text" placeholder="Enter category Name" name="subcategory"
                                                value="<?php echo htmlentities($row['subcategory']); ?>"
                                                class="span8 tip" required>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" name="submit" class="btn">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->

    <?php include('include/footer.php'); ?>

    <script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="scripts/flot/jquery.flot.js"></script>
    <script src="scripts/datatables/jquery.dataTables.js"></script>
    <script>
    $(document).ready(function() {
        $('.datatable-1').dataTable();
        $('.dataTables_paginate').addClass("btn-group datatable-pagination");
        $('.dataTables_paginate > a').wrapInner('<span />');
        $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
        $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
    });
    </script>
</body>

</html>
<?php } ?>