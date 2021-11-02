<?php require_once("header.php") ?>
<?php require_once("includes/manageRooms.php")?>
<div class="mx-5">
    <h3>MANAGE ROOMS</h3>
    <div class="row">
        <div class="col-2 form-group">
            <label for="">Entries</label>
            <select name="entries" id="entries" class="form-control" onchange="entriesQuery()">
                <option value=""></option>
                <option value="1">10</option>
                <option value="2">25</option>
                <option value="3">50</option>
                <option value="4">100</option>
            </select>
        </div>
        <div class="col-4"></div>
        <div class="col-3"></div>
        <div class="col-3 form-group">
            <label for="">Search</label>
            <input type="text" name="search" id="search" class="form-control" onkeyup="searchQuery()">
        </div>
    </div>
    <div class="row">
        <table id="myTable" class="table table-bordered">
            <thead>
                <tr>
                    <th class="th0" onclick="sortTable(0)">#</th>
                    <th class="th0" onclick="sortTable(1)">Seater</th>
                    <th class="th0" onclick="sortTable(2)">Room No.</th>
                    <th class="th0" onclick="sortTable(3)">Fees</th>
                    <th class="th0" onclick="sortTable(4)">Post Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php getRooms() ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    function sortTable(n) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById("myTable");
        switching = true;
        // Set the sorting direction to ascending:
        dir = "asc";
        /* Make a loop that will continue until
        no switching has been done: */
        while (switching) {
            // Start by saying: no switching is done:
            switching = false;
            rows = table.rows;

            /* Loop through all table rows (except the
            first, which contains table headers): */
            for (i = 1; i < (rows.length - 1); i++) {
                // Start by saying there should be no switching:
                shouldSwitch = false;
                /* Get the two elements you want to compare,
                one from current row and one from the next: */
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /* Check if the two rows should switch place,
                based on the direction, asc or desc: */
                if (dir == "asc") {
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                } else if (dir == "desc") {
                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        // If so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                }
            }
            if (shouldSwitch) {
                /* If a switch has been marked, make the switch
                and mark that a switch has been done: */
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);

                switching = true;
                // Each time a switch is done, increase this count by 1:
                switchcount++;
            } else {
                /* If no switching has been done AND the direction is "asc",
                set the direction to "desc" and run the while loop again. */
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }
    function entriesQuery(){
        var table = document.getElementById("myTable");
        var rows = table.rows;
        var numEntries = document.getElementById("entries").value;
        console.log(numEntries);
        for (k=1;k<rows.length;k++){
            if (k>numEntries){
                rows[k].style.display = "none";
            }else{
                rows[k].style.display = "";
            }
            if (numEntries === ""){rows[k].style.display = "";}
        }
    }
    function searchQuery(){
        var table = document.getElementById("myTable");
        var rows = table.rows;
        var searchQ = document.getElementById("search").value;
        for (k=1 ; k<rows.length ; k++){
            if(searchQ !=""){
                rows[k].style.display = "";
                var rowVal = rows[k].children[2].innerHTML;
                if (rowVal != searchQ){
                    rows[k].style.display = "none";
                }
            }else{
                rows[k].style.display = "";
            }
        }
    }
</script>
<?php require_once("footer.php")?>