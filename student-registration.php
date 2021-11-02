<?php require_once("header.php") ?>
<?php require_once("includes/studentRegistration.php") ?>
<div class="mx-auto mt-3">
    <h3>REGISTRATION</h3>
    <form action="" method="POST">
        <hr>
        <h4 class="text-center text-success">Room Related Info.</h4>
        <div class="row mt-3">
            <div class="colLabel col-2">
                Room No.
            </div>
            <div class="col-10">
                <select class="form-control" name="room" id="room" onchange="roomChange()">
                    <option attrSeater="" attrFee="" value="">Select a Room</option>
                    <?php roomsCombo() ?>
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                Seater
            </div>
            <div class="col-10">
                <input name="seater" id="seater" class="form-control" type="text" readonly="true">
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                Fees (Per Month)
            </div>
            <div class="col-10">
                <input name="fee" id="fee" class="form-control" type="text" readonly="true">
            </div>
        </div>

        <div class="row mx-5 mt-4">
            <div class="col-2"></div>
            <div class="col-4">
                <input type="radio" name="food" value="YES"> Without Food
            </div>
            <div class="col-4">
                <input checked type="radio" name="food" value="NO"> With Food(Rs 2000.00 Per Month Extra)
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                Stay From
            </div>
            <div class="col-10">
                <input name="stayFrom" id="stayFrom" class="form-control" type="date">
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                Duration
            </div>
            <div class="col-10">
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
        </div>

        <hr>
        <h4 class="text-center text-success">Personal Info.</h4>
        <div class="row mt-3">
            <div class="colLabel col-2">
                Course
            </div>
            <div class="col-10">
                <select class="form-control" name="course" id="course">
                    <option value="">Select a Course</option>
                    <?php coursesCombo() ?>
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                Registration No
            </div>
            <div class="col-10">
                <input name="regNum" id="regNum" class="form-control" type="text">
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                First Name
            </div>
            <div class="col-10">
                <input name="fName" id="fName" class="form-control" type="text">
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                Middle Name
            </div>
            <div class="col-10">
                <input name="mName" id="mName" class="form-control" type="text">
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                Last Name
            </div>
            <div class="col-10">
                <input name="lName" id="lName" class="form-control" type="text">
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2">
                Gender
            </div>
            <div class="col-10">
                <select class="form-control" name="gender" id="gender">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                Contact No
            </div>
            <div class="col-10">
                <input name="contactNum" id="contactNum" class="form-control" type="tel">
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                Email
            </div>
            <div class="col-10">
                <input name="email" id="email" class="form-control" type="email">
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                Emergency Contact
            </div>
            <div class="col-10">
                <input name="emContact" id="emContact" class="form-control" type="tel">
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                Guardian Name
            </div>
            <div class="col-10">
                <input name="guardName" id="guardName" class="form-control" type="text">
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                Guardian Relation
            </div>
            <div class="col-10">
                <input name="guardRel" id="guardRel" class="form-control" type="text">
            </div>
        </div>

        <div class="row mt-3">
            <div class="colLabel col-2 pt-2">
                Guardian Contact no
            </div>
            <div class="col-10">
                <input name="guardNum" id="guardNum" class="form-control" type="tel">
            </div>
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

<script>
    function roomChange(){
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