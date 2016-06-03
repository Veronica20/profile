<?php

abstract class mard
{
    public $ser;
    public $anun;

    public function __construct($anun)
    {
        $this->anun = $anun;
    }

    public function ovEmYes()
    {
        echo sprintf("Yes %s em, im anun@ %s a<br/>", $this->ser, $this->anun);
    }

    public function qaylel()
    {
        echo sprintf("Yes %svari em qaylum<br/>", $this->ser);
    }
}

class txa extends mard
{
    public $ser = 'gyada';
}

class axjik extends mard
{
    public $ser = 'gyaduhi';
}

$valod = new txa('Valodik');
$morqur = new axjik('Armine');

echo "<h1>Polimorphizmi orinak!</h1>";

$valod->ovEmYes();
$valod->qaylel();

$morqur->ovEmYes();
$morqur->qaylel();