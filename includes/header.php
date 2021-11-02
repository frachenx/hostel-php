<?php
session_start();
function setProfileLinks()
{
    if (isset($_SESSION['user_type']) && isset($_SESSION['user_id'])) {
        // echo $_SESSION['user_type'];
        switch ($_SESSION['user_type']) {
            case "":
                // echo "Nothing";
                break;
            case "USER":
                echo '
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle fa-2x"></i> Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="user-profile.php">My Account</a></li>
                            <li><a class="dropdown-item" href="index.php">Logout</a></li>
                        </ul>
                    </div>
                ';
                break;
            case "ADMIN":
                echo '
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="admin-profile.php">My Account</a></li>
                            <li><a class="dropdown-item" href="index.php">Logout</a></li>
                        </ul>
                    </div>
                ';
                break;
        }
    }
}

function insertDashboardItems()
{

    if (isset($_SESSION['user_type'])) {
        switch ($_SESSION['user_type']) {
            case "":
                break;
            case "USER":
                echo dashboardItem("dashboard.php", "fa-columns", "Dashboard");
                echo dashboardItem("book-hostel.php", "fa-book-open", "Book Hostel");
                echo dashboardItem("room-details.php", "fa-info", "Room Details");
                echo dashboardItem("my-profile.php", "fa-id-card", "My Profile");
                echo dashboardItem("change-password.php", "fa-key", "Change Password");
                break;
            case "ADMIN":
                echo dashboardItem("dashboard.php", "fa-columns", "Dashboard");
                echo '
                    <li>
                        <button class="btn dropdown-btn"><i class="fas fa-book-open"></i> 
                            Courses <i class="fas fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <ul>
                                <li><a href="add-course.php">Add Courses</a></li>
                                <li><a href="manage-courses.php">Manage Courses</a></li>
                            </ul>
                        </div>
                    </li>
                ';
                echo '
                    <li>
                        <button class="btn dropdown-btn"><i class="fas fa-chess-rook"></i> 
                            Rooms <i class="fas fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <ul>
                                <li><a href="add-room.php">Add Room</a></li>
                                <li><a href="manage-rooms.php">Manage Rooms</a></li>
                            </ul>
                        </div>
                    </li>
                ';
                echo dashboardItem("student-registration.php", "fa-info", "Student Registration");
                echo dashboardItem("manage-students.php", "fa-id-card", "Manage Students");
                break;
        }
    } else {
        echo dashboardItem("index.php", "fa-bars", "Menu");
        echo dashboardItem("registration.php", "fa-book", "User Registration");
        echo dashboardItem("login.php", "fa-sign-in-alt", "User Login");
        echo dashboardItem("admin-login.php", "fa-user-cog", "Admin Login");
    }
}

function dashboardItem($url, $icon, $title)
{
    return '
        <li class="nav-item"><a  href="' . $url . '" class="nav-link"><i class="fas ' . $icon . '"></i> ' . $title . '</a></li>
    ';
}
