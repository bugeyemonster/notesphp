<?php

/**
 * Created by PhpStorm.
 * User: maxwe
 * Date: 11/14/2016
 * Time: 10:28 AM
 */
class notes
{
    public function addNote($subject, $tech, $note)
    {
        $query = "
        INSERT INTO `notes` (subject, tech, note, time)
        VALUES (:subject, :tech, :note, NOW())
        ";
        $substitutions = array(
            ':subject'=>$subject,
            ':tech' => $tech,
            ':note' => $note
        );
        $results = db::execute($query, $substitutions);
    }
    public function updatenote($subject, $tech, $note, $id)
    {
        //var_dump($id); die();
        $query = "
        UPDATE `notes` 
        SET 
        `subject` = :subject,
         `tech` = :tech, 
         `note` = :note,
         `time` = NOW()
          WHERE `id` = :id
        ";
        $substitutions = array(
            ':subject'=>$subject,
            ':tech' => $tech,
            ':note' => $note,
            ':id' => $id
        );
        $results = db::execute($query, $substitutions);
    }

    public function delNote($note_id)
    {
        $query = "
      DELETE FROM `notes`
      where id = :id
    ";
        $substitutions = array(
            ':id' => $note_id,
        );

        $results = db::execute($query, $substitutions);
    }
    public function search($text){
        $query = "
        SELECT * 
        FROM notes
        WHERE note LIKE :text
        ";

    $substitutions = array(
            ':text' => $text,
        );

        $results = db::execute($query, $substitutions);
        return $results->fetchAll();
}
       }