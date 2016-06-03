<?php

include 'config.php';
abstract class MyPdo
{
    private static $dbInstance;
    public function DB()
    {

        try{
            $pdh='mysql:host='.DB_HOST.';'.'dbname='.DB_NAME;
            $user=DB_USER;
            $pass=DB_PASS;
            $dbo= new PDO($pdh, $user, $pass);
            $dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
                die($e->getMessage());
        }
        return $dbo;

    }


}
