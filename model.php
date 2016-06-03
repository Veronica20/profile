<?php

include 'config/PDO.php';

 class model extends MyPdo {

    public function set_name($id){
        $st =$this->DB()->prepare("SELECT * FROM `data` WHERE id=:id ");
        $st->execute([
            'id'=>$id
        ]);

        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

     public function FRM($id){
         $frm =$this->DB()->prepare('Select `from_name`.`from_name` from `data` JOIN `from` ON `from`.`user_id`=`data`.`id` JOIN `from_name` ON `from`.`from_id`=`from_name`.`id`  WHERE `data`.`id`=:id ');
         $frm->execute([
             'id'=>$id
         ]);

         return $frm->fetchAll(PDO::FETCH_ASSOC);
     }

     public function school($id){
         $school =$this->DB()->prepare('select `shool_name`.`name` from `data`  JOIN `school` ON `data`.`id`= `school`.`user_id`  JOIN `shool_name` ON  `school`.`school_id`=`shool_name`.`id` WHERE `data`.`id`=:id ');
         $school->execute([
             'id'=>$id
         ]);
         return $school->fetchAll(PDO::FETCH_ASSOC);
     }

     public function like($id){
         $like =$this->DB()->prepare('select `page`.`name` from `data`  JOIN `like` ON `data`.`id`= `like`.`user_id`  JOIN `page` ON  `like`.`page_id`=`page`.`id` WHERE `data`.`id`=:id ');
         $like->execute([
             'id'=>$id
         ]);
         return $like->fetchAll(PDO::FETCH_ASSOC);
     }

     public function work($id){
         $work =$this->DB()->prepare('select `work_name`.`work_name` from `data`  JOIN `work` ON `data`.`id`= `work`.`user_id`  JOIN `work_name` ON  `work`.`work_id`=`work_name`.`id` WHERE `data`.`id`=:id ');
         $work->execute([
             'id'=>$id
         ]);
         return  $work->fetchAll(PDO::FETCH_ASSOC);
     }

     public function check($id){
         $check=$this->DB()->prepare('select `checkin_name`.`checkin_name` from `checkin` JOIN `checkin_name` ON `checkin`.`locality_id`=`checkin_name`.`id` WHERE `checkin`.`user_id`=:id');
         $check->execute([
             'id'=>$id
         ]);
         return  $check->fetchAll(PDO::FETCH_ASSOC);
     }



 }
//SELECT * FROM `data` JOIN `from` ON `from`.`user_id`=`data`.`id` WHERE `data`.`id`=1