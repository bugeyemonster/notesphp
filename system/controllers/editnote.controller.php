<?php

/**
 * Created by PhpStorm.
 * User: maxwe
 * Date: 11/15/2016
 * Time: 9:41 AM
 */
class editnote_controller
{
    public function run()
    {
        $homepage = new view('editnote/editnote');
        $noteid = $_GET['id'];

        // var_dump($noteid);

        $query = "
      SELECT *
      FROM `notes`
      WHERE `id` = :noteid
      LIMIT 1
    ";
        $substitutions = array(
            ':noteid' => $noteid
        );

        $results = db::execute($query, $substitutions);
        $results = $results->fetch();
        $homepage->notes = $results;
        presenter::present($homepage);
    }
}
