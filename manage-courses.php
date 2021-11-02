<?php require_once("header.php") ?>
<?php require_once("includes/manageCourses.php") ?>
<style>

</style>
<div class="ml-5 mt-3">
    <h3>MANAGE COURSES</h3>
    <div class="row mt-3">
        <div class="form-group col-2">
            Entries
            <select class="form-control" name="entries" id="entries" onchange="entriesQuery()">
                <option selected value="0"></option>
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
        <div class="col-6"></div>
        <div class="col-4">
            Search: <input class="form-control" type="text" id="search" onkeyup="searchQuery(event)">
        </div>
    </div>
    <div class="row">
        <table id="myTable" class="table table-bordered">
            <thead>
                <tr>
                    <th onclick="sortTable(0)" class="th0">#</th>
                    <th onclick="sortTable(1)" class="th0">Course Code</th>
                    <th onclick="sortTable(2)" class="th0">Course Name (Short)</th>
                    <th onclick="sortTable(3)" class="th0">Course Name (Full)</th>
                    <th onclick="sortTable(4)" class="th0">Created Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php getCourses() ?>
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

    function entriesQuery() {
        const numVisibleRows = document.getElementById("entries").value
        var table = document.getElementById("myTable");
        for (i = 1; i < table.rows.length; i++) {
            table.rows[i].style.display = "";
            if (i > numVisibleRows) {
                table.rows[i].style.display = "none";
            }
        }
    }

    function searchQuery(event) {
        var searchQ = document.getElementById("search").value;
        var table = document.getElementById("myTable");
        console.log(searchQ);
        for (i = 1; i < table.rows.length; i++) {
            table.rows[i].style.display = "none";
            var rowVal = table.rows[i].children[2].innerHTML
            console.log(rowVal);
            var re = new RegExp(searchQ,"i","dotAll")
            // if(rowVal.match(/searchQuery.*/i) || searchQ === ""){
            if (rowVal.match(re) || searchQ === "") {
                table.rows[i].style.display = "";
                console.log("hello")
            }
        }
    }
</script>
<?php require_once("footer.php") ?>