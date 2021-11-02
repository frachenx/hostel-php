<?php require_once("header.php") ?>
<?php require_once("includes/registration.php") ?>
<div class="ml-5">
    <h3>Student Registration</h3>
    <div class="bg-info px-2">FILL ALL INFO</div>
    <form class="px-5 pt-3 border-left border-right border-bottom border-info" action="" method="POST" id="formRegister">
        <div class="form-group">
            <label for="">Registration No. </label>
            <input name="regNum" id="regNum" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="">First Name</label>
            <input name="fName" id="fNum" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Middle Name</label>
            <input name="mName" id="mName" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Last Name</label>
            <input name="lName" id="lName" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control">
                <option selected value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">Contact No. </label>
            <input name="contactNum" id="contactNum" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input name="email" id="email" type="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input name="pwd" id="pwd" type="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Confirm Password</label>
            <input name="confirmPwd" id="confirmPwd" type="password" class="form-control">
        </div>
        <div class="form-group">
            <input id="submit" class="btn btn-primary btn-block" type="submit" value="Submit">
        </div>
    </form>
</div>

<script>
    document.getElementById("submit").addEventListener("click",(e)=>{
        var pwd = document.getElementById("pwd").value;
        var cPwd =  document.getElementById("confirmPwd").value;

        if ( pwd === cPwd){
        }else{
            e.preventDefault();
            document.getElementById("pwd").value ="";
            document.getElementById("confirmPwd").value ="";
            alert("Password and confirm password must match");
        }
    })
</script>

<?php require_once("footer.php") ?>