<?php require_once("header.php") ?>
<?php require_once("includes/addCourse.php")?>
<div class="mt-4">
    <div class="row">
        <div class="col-4">
        </div>
        <div class="col-4">
            <h3>ADD COURSE</h3>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Course Code</label>
                    <input class="form-control" type="text" name="cCode" id="cCode">
                </div>
                <div class="form-group">
                    <label for="">Course Name (SHORT)</label>
                    <input class="form-control" type="text" name="cNameShort" id="cNameShort">
                </div>
                <div class="form-group">
                    <label for="">Course Name (Full)</label>
                    <input type="text" class="form-control" name="cNameFull" id="cNameFull">
                </div>
                <div class="form-group">
                    <input id="submit" class="btn btn-primary btn-block" type="submit" value="Add"> 
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    const btn = document.getElementById("submit");
    btn.addEventListener("click",function(e){
        if (document.getElementById("cCode").value === "" || document.getElementById("cNameShort").value === "" || document.getElementById("cNameFull").value === ""){
            e.preventDefault();
            alert("Fill all the inputs please.")
        }
    })
</script>
<?php require_once("footer.php") ?>