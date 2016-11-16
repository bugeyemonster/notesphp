<?php

class homepage_controller
{

    public function run()
    {
        if (isset($_POST['delete_id'])) {
            $id = $_POST['delete_id'];
            notes::delNote($id);
            header("Location: /projects/notes");

        }
        $homepage = new view('homepage/homepage');


        $query = "
      SELECT *
      FROM `notes`
    ";
        $results = db::execute($query);
        $homepage->notes = $results;

        presenter::present($homepage);


    }


}


?>