<?php

function dashboardItems(){
    switch($_SESSION['user_type']){
        case "USER":
            echo '
                <div class="card text-center">
                    <i class="fas fa-user-circle fa-8x"></i>
                    <div class="card-body">
                        <h5 class="card-title">My Profile</h5>
                        <a href="my-profile.php" class="btn btn-primary btn-block">Full Details</a>
                    </div>
                </div>

                <div class="card text-center">
                    <i class="fas fa-chess-rook fa-8x"></i>
                    <div class="card-body">
                        <h5 class="card-title">My Room</h5>
                        <a href="room-details.php" class="btn btn-primary btn-block">Full Details</a>
                    </div>
                </div>
            ';
            break;
        case "ADMIN":
            echo '
                <div class="card text-center">
                    <i class="fas fa-user-graduate fa-8x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Students</h5>
                        <a href="manage-students.php" class="btn btn-primary btn-block">Full Details</a>
                    </div>
                </div>

                <div class="card text-center">
                    <i class="fas fa-chess-rook fa-8x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Total Rooms</h5>
                        <a href="manage-rooms.php" class="btn btn-primary btn-block">Full Details</a>
                    </div>
                </div>

                <div class="card text-center">
                    <i class="fas fa-book-open fa-8x"></i>
                    <div class="card-body">
                        <h5 class="card-title">Total Courses</h5>
                        <a href="manage-courses.php" class="btn btn-primary btn-block">Full Details</a>
                    </div>
                </div>
            ';
            break;
    }
}