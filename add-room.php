<?php require_once("header.php") ?>
<?php require_once("includes/addRoom.php")?>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h3>ADD ROOM</h3>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="">Seater</label>
                    <select class="form-control" name="seater" id="seater">
                        <option selected value="">Select Seater</option>
                        <option value="1">Single Seater</option>
                        <option value="2">Two Seater</option>
                        <option value="3">Three Seater</option>
                        <option value="4">Four Seater</option>
                        <option value="5">Five Seater</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Room No.</label>
                    <input name="number" id="number" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Fee(Per Student)</label>
                    <input name="fee" id="fee" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Add</button>
                    <!-- <input class="btn btn-primary btn-block" type="sumbit" value ="Add"> -->
                </div>
            </form>
        </div>
    </div>

<?php require_once("footer.php") ?>
