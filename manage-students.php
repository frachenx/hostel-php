<?php require_once("header.php") ?>
<?php require_once("includes/manageStudents.php") ?>

<div class="mx-5 mt-5">
    <h3>MANAGE STUDENTS</h3>
    <div class="row">
        <div class="col-3">
            <div class="row">
                <div class="col-3">Entries</div>
                <div class="col-9">
                    <select class="form-control" name="numEntries" id="numEntries" onchange="numEntries()">
                        <option value=""></option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-5"></div>
        <div class="col-4">
            <div class="row">
                <div class="col-2">Search</div>
                <div class="col-10">
                    <input id="entriesQuery" name="entriesQuery" class="form-control" type="search" onchange="entriesQuery()">
                </div>
            </div>
        </div>
    </div>

    <table id="myTable" class="mt-3 table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Student Name</th>
                <th>Reg No.</th>
                <th>Contact No.</th>
                <th>Room No.</th>
                <th>Seater</th>
                <th>Staying From</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php getStudents() ?>
        </tbody>
    </table>
</div>

<script>
    mTable = document.getElementById("myTable");

    function numEntries() {
        numRows = document.getElementById("numEntries").value;
        for (i = 1; i < mTable.rows.length; i++) {
            mTable.rows[i].style.display = "none";
            if (i <= numRows) {
                mTable.rows[i].style.display = "";
                console.log(mTable.rows[i]);
            }
        }
    }

    function entriesQuery() {
        let search = document.getElementById("entriesQuery").value
        console.log(search)
        for (i = 1; i < mTable.rows.length; i++) {
            if (search != "") {
                mTable.rows[i].style.display = "";
                console.log(mTable.rows[i].children[2].innerHTML)
                if (mTable.rows[i].children[2].innerHTML != search) {
                    mTable.rows[i].style.display = "none";
                }
            } else {
                mTable.rows[i].style.display = "";
            }
        }
    }
</script>

<?php require_once("footer.php") ?>