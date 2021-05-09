<?php

class Model
{
    public function bdConnect()
    {
        $dbb = new PDO('mysql:host=localhost; dbname=easystudy', 'root', '');
        return $dbb;
    }
}
