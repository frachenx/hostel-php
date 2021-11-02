<?php require_once("header.php") ?>
<?php require_once("includes/confirmPassword.php") ?>
<div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Old Password</label>
                    <input class="form-control" id="old" name="old" type="password">
                </div>
                <div class="form-group">
                    <label for="">New Password</label>
                    <input class="form-control" id="new" name="new" type="password">
                </div>

                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input class="form-control" id="confirm" name="confirm" type="password">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary col-12" type="submit" value="Change Password">
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once("footer.php") ?>