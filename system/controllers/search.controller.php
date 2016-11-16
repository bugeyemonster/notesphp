<?php

/**
 * Created by PhpStorm.
 * User: maxwe
 * Date: 11/14/2016
 * Time: 1:19 PM
 */
class search_controller
{
    public function run()
    {
        $search = $_POST['search'];

        $homepage = new view('homepage/homepage');
        if(empty($_POST['tech'])){
            $query = "
      SELECT *
      FROM `notes`
      WHERE `note` like :search
    ";
            $substitutions = array(
                ':search'=> '%' . $search . '%'
            );
        } else {
            $tech = $_POST['tech'];
            $query = "
      SELECT *
      FROM `notes`
      WHERE `tech` = :tech
      AND `note` like :search
    ";
            $substitutions = array(
                ':tech' => $tech,
                ':search'=> '%' . $search . '%'
            );
        }


        $results = db::execute($query, $substitutions);
        $homepage->notes = $results;

        presenter::present($homepage);
    }
}