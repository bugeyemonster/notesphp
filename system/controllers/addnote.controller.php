<?php
/**
 * Created by PhpStorm.
 * User: maxwe
 * Date: 11/14/2016
 * Time: 10:45 AM
 */

class addnote_controller{

    public function run(){
        if(isset($_FILES)) {
            var_dump($_FILES);
            die();
        }
        $addnote = new view('addnote/addnote');
        presenter::present($addnote);

        if(isset($_POST['note'])){
            $post = $_POST['note'];
            //var_dump($post);
            $tech = $post['tech'];
            $note = $post['text'];
            $subject=$post['subject'];
            notes::addnote($subject, $tech, $note);
            header("Location: /projects/notes/");
        }
    }
}