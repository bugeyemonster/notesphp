<?php
/**
 * Created by PhpStorm.
 * User: maxwe
 * Date: 11/15/2016
 * Time: 11:45 AM
 */

class updatenote_controller{

    public function run(){
        //$editnote = new view('editnote/editnote');
        //presenter::present($editnote);
        //var_dump($_POST); die();
        if(isset($_POST['note'])){
            $note = $_POST['note'];

            $tech = $_POST['tech'];

            $subject=$_POST['subject'];
            $id = $_POST['id'];
            notes::updatenote($subject, $tech, $note, $id);
            header("Location: /projects/notes/");
        }
    }
}