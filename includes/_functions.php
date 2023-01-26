<?php


function _addHeritagetype($heritagetype)
{

    require("config.php");

    $sql = "INSERT INTO `_heritagetype` (`_heritagetypename`) VALUES ('$heritagetype') ";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script> alert('Heritage Type Added Successfully') </script>";
    }
}

function _manageHeritageType()
{

    require("config.php");


    $sql = "SELECT * FROM `_heritagetype` ";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        foreach ($query as $data) {
?>
            <tr>
                <td><?php echo $data['_id']; ?></td>
                <td><?php echo $data['_heritagetypename']; ?></td>

                <td>
                    <a href="edit-heritagetype.php?_id=<?php echo $data['_id']; ?>" style="font-size: 20px;cursor:pointer;color:green" class="mdi mdi-pencil-box"></a>

                    <a href='manage-heritagetype.php?_id=<?php echo $data['_id']; ?>&del=true' class="mdi mdi-delete-forever" style="font-size: 20px;cursor:pointer; color:red"><a>

                </td>

            </tr>
        <?php
        }
    }
}

function _getHeritageTypes()
{

    require("config.php");

    $sql = "SELECT * FROM `_heritagetype`";

    $query = mysqli_query($conn, $sql);
    if ($query) {

        ?>
        <label for="heritagecategory" class="form-label">Heritage Type</label>
        <select style="height: 46px;" id="heritagecategory" name="heritagecategory" class="form-control form-control-lg" id="exampleFormControlSelect2" required>
            <option>Type</option>
            <?php
            foreach ($query as $data) {
            ?>
                <option value="<?php echo $data['_id']; ?>"> <?php echo $data['_heritagetypename']; ?> </option>
            <?php
            }
            ?>

        </select>
        <?php
    }
}

function _getSingleHeritageType($_id, $param)
{

    require("config.php");

    $sql = "SELECT * FROM `_heritagetype` where `_id`='$_id' ";

    $query = mysqli_query($conn, $sql);

    foreach ($query as $data) {
        return $data[$param];
    }
}

function _updateheritagetype($_id, $heritagename)
{

    require('config.php');

    $sql = "UPDATE `_heritagetype` SET `_heritagetypename`='$heritagename'   WHERE `_id` = $_id";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "<script>alert('Heritage Type Updated')</script>";
        header("location:manage-heritagetype.php");
    }
}

function _deleteHeritageType($_id)
{

    require("config.php");

    $sql = "DELETE FROM `_heritagetype` WHERE `_id` = '$_id' ";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("location:manage-heritagetype.php");
    }
}



function _addState($state)
{

    require("config.php");

    $sql = "INSERT INTO `_state`(`_statename`) VALUES ('$state')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script> alert('State Added Successfully); </script>";
    }
}

function _manageState()
{

    require("config.php");


    $sql = "SELECT * FROM `_state` ";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        foreach ($query as $data) {
        ?>
            <tr>
                <td><?php echo $data['_id']; ?></td>
                <td><?php echo $data['_statename']; ?></td>

                <td>
                    <a href="edit-state.php?_id=<?php echo $data['_id']; ?>" style="font-size: 20px;cursor:pointer;color:green" class="mdi mdi-pencil-box"></a>

                    <a href='manage-state.php?_id=<?php echo $data['_id']; ?>&del=true' class="mdi mdi-delete-forever" style="font-size: 20px;cursor:pointer; color:red"><a>

                </td>

            </tr>
        <?php
        }
    }
}


function _getStates()
{

    require("config.php");

    $sql = "SELECT * FROM `_state`";

    $query = mysqli_query($conn, $sql);
    if ($query) {

        ?>
        <label for="heritagestate" class="form-label">State</label>
        <select style="height: 46px;" id="heritagestate" name="heritagestate" class="form-control form-control-lg" id="exampleFormControlSelect2" required>
            <option>Select</option>
            <?php
            foreach ($query as $data) {
            ?>
                <option value="<?php echo $data['_id']; ?>"> <?php echo $data['_statename']; ?> </option>
            <?php
            }
            ?>

        </select>
        <?php
    }
}

function _getSingleState($_id, $param)
{

    require("config.php");

    $sql = "SELECT * FROM `_state` where `_id`='$_id' ";

    $query = mysqli_query($conn, $sql);

    foreach ($query as $data) {
        return $data[$param];
    }
}

function _updateState($_id, $statename)
{

    require('config.php');

    $sql = "UPDATE `_state` SET `_statename`='$statename'   WHERE `_id` = $_id";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "<script>alert('State Updated')</script>";
        header("location:manage-state.php");
    }
}

function _deleteState($_id)
{

    require("config.php");

    $sql = "DELETE FROM `_state` WHERE `_id` = '$_id' ";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("location:manage-state.php");
    }
}


function _addDistrict($district, $stateid)
{

    require("config.php");

    $sql = "INSERT INTO `_district` (`_districtname` , `_stateid`) VALUES ('$district' , '$stateid') ";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script> alert('District Added Successfully'); </script>";
    }
}


function _manageDistrict()
{

    require("config.php");


    $sql = "SELECT * FROM `_district` ";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        foreach ($query as $data) {
        ?>
            <tr>
                <td><?php echo $data['_id']; ?></td>
                <td><?php echo $data['_districtname']; ?></td>

                <td>
                    <a href="edit-district.php?_id=<?php echo $data['_id']; ?>" style="font-size: 20px;cursor:pointer;color:green" class="mdi mdi-pencil-box"></a>

                    <a href='manage-district.php?_id=<?php echo $data['_id']; ?>&del=true' class="mdi mdi-delete-forever" style="font-size: 20px;cursor:pointer; color:red"><a>

                </td>

            </tr>
        <?php
        }
    }
}



function _getDistricts()
{

    require("config.php");

    $sql = "SELECT * FROM `_district`";

    $query = mysqli_query($conn, $sql);
    if ($query) {

        ?>
        <label for="heritagedistrict" class="form-label">District</label>
        <select style="height: 46px;" id="heritagedistrict" name="heritagedistrict" class="form-control form-control-lg" id="exampleFormControlSelect2" required>
            <option>Select</option>
            <?php
            foreach ($query as $data) {
            ?>
                <option value="<?php echo $data['_id']; ?>"> <?php echo $data['_districtname']; ?> </option>
            <?php
            }
            ?>

        </select>
        <?php
    }
}

function _getSingleDistrict($_id, $param)
{

    require("config.php");

    $sql = "SELECT * FROM `_district` where `_id`='$_id' ";

    $query = mysqli_query($conn, $sql);

    foreach ($query as $data) {
        return $data[$param];
    }
}

function _updateDistrict($_id, $districtname, $stateid)
{

    require('config.php');

    $sql = "UPDATE `_district` SET `_districtname`='$districtname' , `_stateid`='$stateid'   WHERE `_id` = $_id";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "<script>alert('District Updated')</script>";
        header("location:manage-district.php");
    }
}



function _deleteDistrict($_id)
{

    require("config.php");

    $sql = "DELETE FROM `_district` WHERE `_id` = '$_id' ";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("location:manage-district.php");
    }
}



function addHeritage($heritagetype, $heritagename, $heritagestate, $heritagedisrtict, $heritageaddress, $heritagelatitude, $heritagelongitude, $heritagelocationfeature, $heritagebuiltin, $heritagebuiltby, $heritageruledby, $heritagepurpose, $heritagetechnology, $heritagehistory, $heritagefeatures, $heritagespeciality, $refrences)
{

    require("config.php");

    $sql = "INSERT INTO `_heritage`(`_historytype`, `_heritagename`, `_heritagestate`, `_heritagedistrict`, `_heritageaddress`,`_heritagelatitude`, `_heritagelongitude`, `_heritageolocationfeature` , `_heritagebuiltin`, `_heritagebuiltby`, `_heritageruledby`, `_heritagepurpose`, `_heritagetechnology`, `_heritagehistory`, `_heritagefeatures`, `_heritagespeciality`, `_refrences` ) VALUES ('$heritagetype','$heritagename', '$heritagestate', '$heritagedisrtict', '$heritageaddress','$heritagelatitude', '$heritagelongitude', '$heritagelocationfeature', '$heritagebuiltin', '$heritagebuiltby', '$heritageruledby', '$heritagepurpose', '$heritagetechnology', '$heritagehistory', '$heritagefeatures', '$heritagespeciality', '$refrences')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script> alert('Heritage Added Succesfully') </script>";
        header("location:index.php");
    }
}

function _updateheritage($_id, $heritagetype, $heritagename, $heritagestate, $heritagedisrtict, $heritageaddress, $heritagelatitude, $heritagelongitude, $heritagelocationfeature, $heritagebuiltin, $heritagebuiltby, $heritageruledby, $heritagepurpose, $heritagetechnology, $heritagehistory, $heritagefeatures, $heritagespeciality, $refrences)
{

    require('config.php');

    $sql = "UPDATE `_heritage` SET `_historytype`='$heritagetype' , `_heritagename`='$heritagename' ,`_heritagestate`='$heritagestate' ,`_heritagedistrict`='$heritagedisrtict' ,`_heritageaddress`='$heritageaddress' ,`_heritagelatitude`='$heritagelatitude' ,`_heritagelongitude`='$heritagelongitude' ,`_heritageolocationfeature`='$heritagelocationfeature' ,`_heritagebuiltin`='$heritagebuiltin' ,`_heritagebuiltby`='$heritagebuiltby' ,`_heritageruledby`='$heritageruledby' ,`_heritagepurpose`='$heritagepurpose' ,`_heritagetechnology`='$heritagetechnology' ,`_heritagehistory`='$heritagehistory' ,`_heritagefeatures`='$heritagefeatures' ,`_heritagespeciality`='$heritagespeciality' ,`_refrences`='$refrences'    WHERE `_id` ='$_id'";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "<script>alert('Heritage Updated')</script>";
        header("location:manage-heritage.php");
    }
}


function addHeritageImages($img, $heritagename, $currentid)
{

    require("config.php");

    $sql = "INSERT INTO _heritagegallery(`_heritageimg` , `_currentimgid` , `_heritagename`) VALUES ('$img','$currentid','$heritagename')  ";

    $query = mysqli_query($conn, $sql);
}




function _manageHeritage()
{

    require("config.php");


    $sql = "SELECT * FROM `_heritage` ";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        foreach ($query as $data) {
        ?>
            <tr>
                <td><?php echo $data['_id']; ?></td>
                <td><?php echo $data['_historytype']; ?></td>
                <td><?php echo $data['_heritagename']; ?></td>
                <td><?php echo $data['_heritagestate']; ?></td>
                <td><?php echo $data['_heritagedistrict']; ?></td>
                <td><?php echo $data['_heritagelatitude']; ?> , <?php echo $data['_heritagelongitude']; ?> </td>

                <td>
                    <a href="../histropedia-blogs/blog-standard.php?_id=<?php echo $data['_id']; ?>" target="_blank" style="font-size: 20px;cursor:pointer;color:green" class="mdi mdi-eye"></a>

                    <a href="edit-heritage.php?_id=<?php echo $data['_id']; ?>" style="font-size: 20px;cursor:pointer;color:green" class="mdi mdi-pencil-box"></a>

                    <a href='manage-heritage.php?_id=<?php echo $data['_id']; ?>&del=true' class="mdi mdi-delete-forever" style="font-size: 20px;cursor:pointer; color:red"><a>

                </td>

            </tr>
        <?php
        }
    }
}



function _getSingleheritage($_id, $param)
{

    require("config.php");

    $sql = "SELECT * from `_heritage` where `_id`='$_id' ";

    $query = mysqli_query($conn, $sql);

    if ($query) {

        foreach ($query as $data) {
            return $data[$param];
        }
    }
}

function _getSingleImage($heritagename)
{

    require("config.php");

    $sql = "SELECT * from `_heritagegallery` where `_heritagename`='$heritagename' AND `_currentimgid`=1 ";

    $query = mysqli_query($conn, $sql);

    if ($query) {

        foreach ($query as $data) {
            return $data['_heritageimg'];
        }
    }
}


function _showallImages($heritagename)
{
    require("config.php");

    $sql = "SELECT * from `_heritagegallery` where `_heritagename`='$heritagename'";

    $query = mysqli_query($conn, $sql);

    if ($query) {

        foreach ($query as $data) {
        ?>

            <div class="responsive">
                <div class="img">
                    <img src="../uploads/pics/<?php echo $data['_heritageimg'] ?>" alt="<?php echo $data['_heritageimg'] ?>" width="300" height="200">
                </div>
            </div>

            <?php
        }
    }
}


function _showHeritageCards()
{
    require("config.php");

    $sql = "SELECT * FROM _heritage";

    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            while ($rows = mysqli_fetch_assoc($res)) {
                $_id = $rows['_id'];
                $_historytype = $rows['_historytype'];
                $_heritagename = $rows['_heritagename'];
                $_heritagepurpose = $rows['_heritagepurpose'];

            ?>
                <div class="col-md-4">
                    <div class="blog-post-card wow fadeInUp">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="../uploads/pics/<?php echo _getSingleImage($_heritagename); ?>" alt="blog">
                        </div>
                        <p class="blog-post-date"><?php echo $_heritagename ?></p>
                        <h5 class="blog-post-title"><?php echo $_heritagepurpose ?></h5>
                        <a href="blog-standard.php?_id=<?php echo $_id; ?>">Read More</a>
                    </div>
                </div>
<?php
            }
        }
    }
}

?>