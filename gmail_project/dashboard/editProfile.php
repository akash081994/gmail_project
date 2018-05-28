<?php
//error_reporting(E_ALL);
//ini_set('display_errors',1);
$id5 = $_GET['pid'];
extract($_POST);
$imgname1 = $_FILES['file']['name'];
$tmp1 = $_FILES['file']['tmp_name'];
echo $imgname1."<br>";
echo $tmp1;
if(isset($edit2))
{
    $profile = new dashboardFunction();
    $profile->updateProfile($first1, $last3, $user3, $email3, $phone3, $location3, $imgname1, $tmp1, $id);

}
?>

<div class="editForm col-md-6">
    <h3>Update your profile</h3>
    <form method="post">
        <div class="form-group">
            <label>First name</label>
            <input type="text" class="form-control" name="first1" value="<?php echo $first;  ?>">
        </div>

        <div class="form-group">
            <label>Last name</label>
            <input type="text" class="form-control" name="last3" value="<?php echo $last;  ?>">
        </div>

        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="user3" value="<?php echo $user;  ?>">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email3" value="<?php echo $email1;  ?>">
        </div>

        <div class="form-group">

            <span id="attach"><span class="fa fa-file"></span> Attachment</span>
            <span id="imgtext"></span>
            <input type="file" id="img" name="myfile">

        </div>

        <div class="form-group">
            <label>Contact</label>
            <input type="text" class="form-control" name="phone3" value="<?php echo $phone;  ?>">
        </div>

        <div class="form-group">
            <label>Contact</label>
            <input type="text" class="form-control" name="location3" value="<?php echo $location1;  ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success" name="edit2">Submit</button>
        </div>
    </form>
</div>

