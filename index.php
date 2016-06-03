<?php
/**
 * Created by PhpStorm.
 * User: Veranika
 * Date: 5/30/2016
 * Time: 12:35 PM
 */
include 'model.php';

if($_POST){
    $db_o=new model();
    $db=$db_o->set_name($_POST['input']);
    $frm=$db_o->FRM($_POST['input']);
    $school=$db_o->school($_POST['input']);
    $like=$db_o->like($_POST['input']);
    $work=$db_o->work($_POST['input']);
    $check=$db_o->check($_POST['input']);
}


?>
<html>
 <header></header>
</html>
<link href="style.css" rel="stylesheet" >
<script
    src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
<form method="post">
    <input name="input">
    <button type="submit" class="submit">go</button>
    <div class="user_name">
        <div> <?=(!empty($db))? $db[0]['name']  :''?></div>
        <div> <?=(!empty($db))? $db[0]['fname'] :''?></div>
    </div>
        <div >  Where is he from? <div class="text"> <?=(!empty($frm))? $frm[0]['from_name'] :''?></div>  </div> <br>
        <div> What school does he attend? <div class="text"> <?=(!empty($school))? $school[0]['name'] :''?></div> </div><br>
        <div>What pages does he like? <div class="text"> <?=(!empty($like))? $like[0]['name'] :''?></div> </div><br>
        <div>What pages does he like? <div class="text"> <?=(!empty($work))? $work[0]['work_name'] :''?></div> </div> <br>
        <div>Where is he had? <div class="text"> <?=(!empty($check))? $check[0]['checkin_name'] :''?></div> </div>


   <!-- <div class="">
        <button class="from" name="from" > Where is he from? </button>
        <button class="like" name="like"> What pages does he like? </button>
        <button class="school" name="school"> What school does he attend? </button>
        <button class="work" name="work"> Where he works ?</button>
        <button class="check" name="check"> Where is he had? </button>
    </div>-->

</form>
<script rel="script" src="script.js"></script>


