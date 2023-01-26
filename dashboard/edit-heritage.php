<?php



require('../includes/_functions.php');

$_id = $_GET['_id'];


if (isset($_POST['submit'])) {


    $heritagetype = $_POST['heritagecategory'];

    $heritagename = $_POST['heritagename'];

    $heritagestate = $_POST['heritagestate'];

    $heritagedisrtict = $_POST['heritagedistrict'];

    $heritageaddress = $_POST['heritageaddress'];

    $heritagelatitude = $_POST['heritagelatitude'];

    $heritagelongitude = $_POST['heritagelongitude'];

    $heritagelocationfeature = $_POST['heritagelocationfeature'];

    $heritagebuiltin = $_POST['heritagebuiltin'];

    $heritagebuiltby = $_POST['heritagebuiltby'];

    $heritageruledby = $_POST['heritageruledby'];

    $heritagepurpose = $_POST['heritagepurpose'];

    $heritagetechnology = $_POST['heritage_technologyusedwhilebuilding'];

    $heritagehistory = $_POST['heritagehistory'];

    $heritagefeatures = $_POST['heritagefeature'];

    $heritagespeciality = $_POST['heritagespeciality'];
    $refrences = $_POST['refrences'];




    _updateheritage($_id, $heritagetype, $heritagename, $heritagestate, $heritagedisrtict, $heritageaddress, $heritagelatitude, $heritagelongitude, $heritagelocationfeature, $heritagebuiltin, $heritagebuiltby, $heritageruledby, $heritagepurpose, $heritagetechnology, $heritagehistory, $heritagefeatures, $heritagespeciality, $refrences);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <title>Add Heritage | </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/feather/feather.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <script src="../assets/plugins/tinymce/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <?php include('templates/_header.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php include('templates/_sidebar.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Heritage </h4>
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="row g-3">
                                        <div class="col-lg-6" style="margin-bottom: 20px;">
                                            <?php _getHeritageTypes() ?>
                                        </div>

                                        <div class="col-lg-6" style="margin-bottom: 20px;">
                                            <label for="formFile" class="form-label">Heritage Name</label>
                                            <input type="text" class="form-control" value="<?php echo _getSingleheritage($_id, '_heritagename') ?>" placeholder="Heritage Name" aria-label="Heritage Title" name="heritagename" required>
                                        </div>


                                    </div>

                                    <div class="row g-3">

                                        <div class="col-lg-6" style="margin-bottom: 20px;">
                                            <?php _getStates() ?>
                                        </div>

                                        <div class="col-lg-6" style="margin-bottom: 20px;">
                                            <?php _getDistricts() ?>
                                        </div>
                                    </div>

                                    <div class="row g-3">

                                        <div class="col-lg-6" style="margin-bottom: 20px;">
                                            <label for="heritageaddress" class="form-label">Heritage Address</label>
                                            <input type="text" class="form-control" placeholder="Heritage Address" aria-label="Heritage Address" name="heritageaddress" value="<?php echo _getSingleheritage($_id, '_heritageaddress') ?>" required>
                                        </div>

                                        <div class="col-lg-6" style="margin-bottom: 20px;">
                                            <label for="heritagelatitude" class="form-label">Heritage Latitude</label>
                                            <input type="text" class="form-control" placeholder="Heritage Latitude" aria-label="Heritage Latitude" name="heritagelatitude" value="<?php echo _getSingleheritage($_id, '_heritagelatitude') ?>" required>
                                        </div>
                                    </div>

                                    <div class="row g-3">

                                        <div class="col-lg-6" style="margin-bottom: 20px;">
                                            <label for="heritagelatitude" class="form-label">Heritage Longitude</label>
                                            <input type="text" class="form-control" placeholder="Heritage Longitude" aria-label="Heritage Longitude" name="heritagelongitude" value="<?php echo _getSingleheritage($_id, '_heritagelongitude') ?>" required>
                                        </div>

                                        <div class="col-lg-6" style="margin-bottom: 20px;">
                                            <label for="heritagebuiltin" class="form-label">Built In</label>
                                            <input type="text" class="form-control" placeholder="Heritage Built In" aria-label="Heritage Built In" name="heritagebuiltin" value="<?php echo _getSingleheritage($_id, '_heritagebuiltin') ?>" required>
                                        </div>


                                    </div>

                                    <div class="row g-3">


                                        <div class="col-lg-6" style="margin-bottom: 20px;">
                                            <label for="heritagebuiltby" class="form-label">Built By</label>
                                            <input type="text" class="form-control" placeholder="Heritage Built By" aria-label="Heritage Built By" name="heritagebuiltby" value="<?php echo _getSingleheritage($_id, '_heritagebuiltby') ?>" required>
                                        </div>


                                        <div class="col-lg-6" style="margin-bottom: 20px;">
                                            <label for="heritageruledby" class="form-label">Ruled By</label>
                                            <input type="text" class="form-control" placeholder="Heritage Ruled By" aria-label="Heritage Ruled By" name="heritageruledby" value="<?php echo _getSingleheritage($_id, '_heritageruledby') ?>" required>
                                        </div>
                                    </div>



                                    <div class="row g-3">
                                        <div class="col" style="margin-top: 30px;">
                                        <label for="refrences" class="form-label">History</label>
                                            <textarea name="heritagehistory" id="mytextarea">
                                            <?php echo _getSingleheritage($_id, '_heritagehistory') ?>
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col" style="margin-top: 30px;">
                                        <label for="refrences" class="form-label">Purpose</label>
                                            <textarea name="heritagepurpose" id="mytextarea">
                                            <?php echo _getSingleheritage($_id, '_heritagepurpose') ?>
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col" style="margin-top: 30px;">
                                        <label for="refrences" class="form-label">Technology Used</label>
                                            <textarea name="heritage_technologyusedwhilebuilding" id="mytextarea">
                                            <?php echo _getSingleheritage($_id, '_heritagetechnology') ?>
                                            </textarea>
                                        </div>
                                    </div>


                                    <div class="row g-3">
                                        <div class="col" style="margin-top: 30px;">
                                        <label for="refrences" class="form-label">Location Feature</label>
                                            <textarea name="heritagelocationfeature" id="mytextarea">
                                            <?php echo _getSingleheritage($_id, '_heritageolocationfeature') ?>
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col" style="margin-top: 30px;">
                                        <label for="refrences" class="form-label">Features</label>
                                            <textarea name="heritagefeature" id="mytextarea">
                                            <?php echo _getSingleheritage($_id, '_heritagefeatures') ?>
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col" style="margin-top: 30px;">
                                        <label for="refrences" class="form-label">Speciality</label>
                                            <textarea name="heritagespeciality" id="mytextarea">
                                            <?php echo _getSingleheritage($_id, '_heritagespeciality') ?>                            
                                            </textarea>
                                        </div>
                                    </div>


                                    <div class="row g-3">
                                        <div class="col" style="margin-top: 30px;">
                                            <label for="refrences" class="form-label">Refrences</label>
                                            <textarea name="refrences" id="mytextarea" class="form-control">
                                            <?php echo _getSingleheritage($_id, '_refrences') ?>                            
                                            </textarea>
                                        </div>
                                    </div>



                                    <div class="col-12" style="margin-top: 30px;">
                                        <button type="submit" name="submit" style="width: 200px;margin-left: -10px" class="btn btn-primary">Update Heritage</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <?php include('templates/_footer.php'); ?>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <div class="container"></div>
</body>
<script src="../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../assets/js/off-canvas.js"></script>
<script src="../assets/js/hoverable-collapse.js"></script>
<script src="../assets/js/template.js"></script>
<script src="../assets/js/settings.js"></script>
<script src="../assets/js/todolist.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</html>