<?php require("header.php")?>
<?php require_once("includes/studentDetails.php")?>
<div>
    <h2>ROOM DETAILS</h2>
    <table class="table table-bordered">
        <tr>
            <td class="text-center text-primary" colspan="6"><strong>Room Realted Info</strong></td>
        </tr>
        <tr>
            <td><strong>Registration Number :</strong></td>
            <td><?php echo $student->regNum ?></td>
            <td><strong>Apply Date :</strong></td>
            <td colspan="3"><?php echo $student->stayFrom ?></td>
        </tr>
        <tr>
            <td><strong>Room no :</strong></td>
            <td><?php echo $student->room_name ?></td>
            <td><strong>Seater:</strong></td>
            <td><?php echo $student->room_seater ?></td>
            <td><strong>Fees PM:</strong></td>
            <td><?php echo $student->room_fee ?></td>
        </tr>
        <tr>
            <td><strong>Food Status:</strong></td>
            <td><?php
                if($student->food ==0){
                    echo 'Without Food';
                }else{
                    echo 'With Food';
                }
            ?></td>
            <td><strong>Stay From :</strong></td>
            <td><?php echo $student->stayFrom ?></td>
            <td><strong>Duration:</strong></td>
            <td><?php echo $student->duration . " Months" ?></td>
        </tr>
        <tr>
            <td><strong>Hostel Fee:	</strong></td>
            <td>48000</td>
            <td><strong>Food Fee:</strong></td>
            <td colspan="3"><?php
                if($student->food == 0){
                    echo '0';
                }else{
                    echo '12000';    
                }
            ?></td>
        </tr>
        <tr>
            <td><strong>Total Fee :</strong></td>
            <td><strong>
                <?php
                    $total = $student->room_fee;
                    if ($student->food==1){
                        $total += 12000;
                    }
                    $total += 48000;
                    echo $total ;
                ?>
            </strong></td>
        </tr>
    </table>

    <table class="table table-bordered">
        <tr>
            <td colspan="6" class="text-center text-primary"><strong>Personal Info</strong></td>
        </tr>
        <tr>
            <td><strong>Reg No. :</strong></td>
            <td><?php echo $student->regNum ?></td>
            <td><strong>Full Name :</strong></td>
            <td><?php echo $student->fName . " " . $student->mName . " ". $student->lName ?></td>
            <td><strong>Email :	</strong></td>
            <td><?php echo $student->email ?></td>
        </tr>
        <tr>
            <td><strong>Contact No. :</strong></td>
            <td><?php  echo $student->contact ?></td>
            <td><strong>Gender :</strong></td>
            <td><?php  echo $student->gender ?></td>
            <td><strong>Course:</strong></td>
            <td><?php echo $student->course_name ?></td>
        </tr>
        <tr>
            <td><strong>Emergency Contact No. :	</strong></td>
            <td><?php  echo $student->emContact ?></td>
            <td><strong>Guardian Name :	</strong></td>
            <td><?php  echo $student->guardName ?></td>
            <td><strong>Guardian Relation :	</strong></td>
            <td><?php echo $student->guardRel ?></td>
        </tr>
        <tr>
            <td><strong>Guardian Contact No. :</strong></td>
            <td colspan="6"><?php echo $student->guardContact ?></td>
        </tr>

        <tr>
            <td colspan="6" class="text-center text-primary"><strong>Addresses</strong></td>
        </tr>
        <tr>
            <td><strong>Correspondense Address</strong></td>
            <td colspan="2"> 
                <?php  
                    echo $student->corrAddress . ", ". $student->corrCity . ", " . $student->corrState . ", ". $student->corrPin
                ?>
            </td>
            <td><strong>Permanent Address</strong></td>
            <td colspan="2"> 
                <?php  
                    echo $student->permAddress . ", ". $student->permCity . ", " . $student->permState . ", ". $student->permPin
                ?>
            </td>
        </tr>
    </table>
</div>

<?php require("footer.php") ?>