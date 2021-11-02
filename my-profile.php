<?php require_once("header.php") ?>
<?php require_once("includes/myProfile.php") ?>
<div>
    <h2>PROFILE INFO</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="">Registration No:</label>
            <input value="<?php echo $user->regNum ?>" id="regNum" name="regNum" type="text" class="form-control" readonly="true">
        </div>
        <div class="form-group">
            <label for="">First Name:</label>
            <input value="<?php echo $user->fName ?>"  id="fName" name="fName" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Middle Name:</label>
            <input value="<?php echo $user->mName ?>"  id="mName" name="mName" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Last Name:</label>
            <input value="<?php echo $user->lName ?>"  id="lName" name="lName" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Gender:</label>
            <select class="form-control" name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Contact No:</label>
            <input value="<?php echo $user->contactNum ?>"  id="contact" name="contact" type="tel" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email:</label>
            <input readonly="true" value="<?php echo $user->email ?>"  id="email" name="email" type="email" class="form-control">
        </div>
        <div class="form-group">
            <input class="btn btn-primary col-12" type="submit" value="Update Profile">
        </div>
    </form>
</div>

<?php require_once("footer.php") ?>