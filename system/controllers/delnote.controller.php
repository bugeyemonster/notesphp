<?php
/**
 * Created by PhpStorm.
 * User: maxwe
 * Date: 11/14/2016
 * Time: 11:07 AM
 */

class delnote_controller {
    public static function run(){
        if (isset($_POST['id'])){
            $id = $_POST['id'];
            notes::delNote($id);
        }
        $delnote = new view('delnote/delnote');
        presenter::present($delnote);
    }
}