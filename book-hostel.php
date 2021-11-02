<?php require_once("header.php") ?>
<?php require_once("includes/bookHostel.php") ?>
<div style="display: <?php $hostelBooked ? printf("none") : printf("")  ?>;">
    <h2>REGISTRATION</h2>
    <form action="" method="POST">
        <hr>
        <h4 class="text-center text-success">Room Related info</h4>
        <div class="form-group">
            <label for="">Room no.</label>
            <select class="form-control" name="room" id="room" onchange="roomChange()">
                <option attrSeater="" attrFee="" value="">Select a Room</option>
                <?php roomsCombo() ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Seater</label>
            <input name="seater" id="seater" class="form-control" type="text" readonly="true">
        </div>
        <div class="form-group">
            <label for="">Fees Per Month</label>
            <input name="fee" id="fee" class="form-control" type="text" readonly="true">
        </div>
        <div class="row">
            <div class="col-4">
                <label for="">Without Food</label>
                <input type="radio" name="food" id="food" value="NO">
            </div>
            <div class="col-4">
                <label for="">With Food(Rs 2000.00 Per Month Extra)</label>
                <input type="radio" name="food" id="food" value="YES">
            </div>
        </div>
        <br>
        <br>
        <div class="form-group">
            <label for="">Stay From</label>
            <input class="form-control" type="date" name="stayFrom" id="stayFrom">
        </div>
        <div class="form-group">
            <label for="">Duration</label>
            <select class="form-control" name="duration" id="duration">
                <option value="">Select Duration in Months</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">Course</label>
            <select class="form-control" name="course" id="course">
                <option value="">Select a Course</option>
                <?php coursesCombo() ?>
            </select>
        </div>

        <hr>
        <h4 class="text-center text-success">Personal info</h4>
        <div class="form-group">
            <label for="">Registration No.</label>
            <input class="form-control" type="text" name="regNum" id="regNum" value="<?php echo $user->regNum ?>" readonly="true">
        </div>
        <div class="form-group">
            <label for="">First Name</label>
            <input class="form-control" type="text" name="fName" id="fName" value="<?php echo $user->fName ?>" readonly="true">
        </div>
        <div class="form-group">
            <label for="">Middle Name</label>
            <input class="form-control" type="text" name="mName" id="mName" value="<?php echo $user->mName ?>" readonly="true">
        </div>
        <div class="form-group">
            <label for="">Last Name</label>
            <input class="form-control" type="text" name="lName" id="lName" value="<?php echo $user->lName ?>" readonly="true">
        </div>
        <div class="form-group">
            <label for="">Gender</label>
            <input class="form-control" type="text" name="gender" id="gender" value="<?php echo $user->gender ?>" readonly="true">
        </div>
        <div class="form-control">
            <label for="">Contact No.</label>
            <input class="form-control" type="tel" name="contactNum" id="contactNum" value="<?php $user->contactNum ?>" readonly="true">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="<?php echo $user->email ?>" readonly="true">
        </div>
        <div class="form-group">
            <label for="">Emergency Contact:</label>
            <input class="form-control" type="tel" name="emContact" id="emContact">
        </div>
        <div class="form-group">
            <label for="">Guardian Name :</label>
            <input class="form-control" type="tel" name="guardName" id="guardName">
        </div>
        <div class="form-group">
            <label for="">Guardian Relation :</label>
            <input class="form-control" type="text" name="guardRel" id="guardRel">
        </div>
        <div class="form-group">
            <label for="">Guardian Contact No.:</label>
            <input class="form-control" type="tel" name="guardNum" id="guardNum">
        </div>

        <hr>
        <h4 class="text-center text-success">Correspondense Address</h4>
        <div class="row mt-3">
            <div class="text-right col-2 pt-2">
                Address
            </div>
            <div class="col-10">
                <textarea class="form-control" name="corAddress" id="corAddress" rows="5"></textarea>
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                City
            </div>
            <div class="col-10">
                <input name="corCity" id="corCity" class="form-control" type="text">
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                State
            </div>
            <div class="col-10">
                <input name="corState" id="corState" class="form-control" type="text">
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                Pin Code
            </div>
            <div class="col-10">
                <input name="corPinCode" id="corPinCode" class="form-control" type="text">
            </div>
        </div>

        <hr>
        <h4 class="text-center text-success">Permanent Address</h4>
        <div class="row">
            <div class="col-6 text-right">
                Permanent Address same as Correspondense address :
            </div>
            <div class="col-6">
                <input checked type="checkbox" name="sameAddress" id="sameAddress">
            </div>
        </div>
        <div class="row mt-3">
            <div class="text-right col-2 pt-2">
                Address
            </div>
            <div class="col-10">
                <textarea class="form-control" name="permAddress" id="permAddress" rows="5"></textarea>
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                City
            </div>
            <div class="col-10">
                <input name="permCity" id="permCity" class="form-control" type="text">
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                State
            </div>
            <div class="col-10">
                <input name="permState" id="permState" class="form-control" type="text">
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                Pin Code
            </div>
            <div class="col-10">
                <input name="permPinCode" id="permPinCode" class="form-control" type="text">
            </div>
        </div>

        <div class="row mt-3 ml-5">
            <input name="submit" id="submit" type="submit" class="btn btn-primary btn-block">
        </div>
    </form>
</div>

<div style="display: <?php $hostelBooked ? printf("") : printf("none")  ?>;">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card text-center">
                <h3 class="card-header text-danger">HOSTEL BOOKED</h3>
                <i class="fas fa-chess-rook fa-8x"></i>
                <div class="card-body">
                    <h5 class="card-title">My Room</h5>
                    <a href="room-details.php" class="btn btn-primary btn-block">Full Details</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function roomChange() {
        var mySelect = document.getElementById("room");
        // console.log(mySelect.selectedIndex);
        // console.log(mySelect.children[mySelect.selectedIndex]);
        var selectedOpt = mySelect.children[mySelect.selectedIndex];
        // console.log(selectedOpt.getAttribute("attrSeater"));
        // console.log(selectedOpt.getAttribute("attrFee"));
        document.getElementById("seater").value = selectedOpt.getAttribute("attrSeater");
        document.getElementById("fee").value = selectedOpt.getAttribute("attrFee");
    }
</script>

<?php require_once("footer.php") ?>