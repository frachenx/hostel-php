<?php require_once("header.php") ?>
<?php require_once("includes/editRoom.php")?>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <h3>EDIT ROOM DETAILS</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="seater">Seater</label>
                <input class="form-control" name="seater" id="seater" type="text" value="<?php echo $room->seater ?>">
            </div>

            <div class="form-group">
                <label for="roomNum">Room No.</label>
                <input class="form-control" readonly="true" name="roomNum" id="roomNum" type="text" value="<?php echo $room->roomNumber ?>">
            </div>
            <div class="form-group">
                <label for="fees">Fees</label>
                <input class="form-control" name="fees" id="fees" type="text" value="<?php echo $room->fee ?>">
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-primary btn-block">
            </div>
        </form>
    </div>
</div>


<?php require_once("footer.php") ?>