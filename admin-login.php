<?php require_once("header.php") ?>
<?php require_once("includes/adminLogin.php")?>
<div class="mx-5 mt-3">
    <h3>ADMIN LOGIN</h3>
    <div class="row">
        <div class="col-4">
        </div>
        <div class=" mt-5 col-4">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">EMAIL</label>
                    <input name="email" id="email" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label for="">PASSWORD</label>
                    <input name="pwd" id="pwd"  class="form-control" type="password" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary btn-block">
                </div>
            </form>
        </div>
        <div class="col-4">

        </div>
    </div>
</div>
<?php require_once("footer.php") ?> 