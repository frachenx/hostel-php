<?php require_once("header.php") ?>
<?php require_once("includes/editCourse.php")?>
<div class="row mt-3">
    <div class="col-2">
    </div>
    <div class="col-8">
        <h2>EDIT COURSE</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Course Code</label>
                <input name="code" id="code" type="text" class="form-control" value="<?php echo $course->code?>">
            </div>
            <div class="form-group">
                <label for="">Course Name (Short)</label>
                <input name="nameShort" id="nameShort" type="text" class="form-control" value="<?php echo $course->shortName?>">
            </div>
            <div class="form-group">
                <label for="">Course Name (Full)</label>
                <input name="nameFull" id="nameFull" type="text" class="form-control" value="<?php echo $course->fullName?>">
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" value ="Update">
            </div>
        </form>
    </div>
</div>

<?php require_once("footer.php") ?>