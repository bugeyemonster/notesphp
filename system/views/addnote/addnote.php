<?php
/**
 * Created by PhpStorm.
 * User: maxwe
 * Date: 11/14/2016
 * Time: 10:46 AM
 */
$techs = array(
    'php',
    'css',
    'html',
    'javascript',
    'mysql'
);
// add functionality to fetch the techs from db with tech_id and tech_name
// later create a form to add tech names
//$query ="
//SELECT * FROM `techs` ORDER BY `tech`"
//$results = db::execute($query);
//$results = $results(fetchAll());
//foreach ($results as $result)



?>
<div class="addnote">
<div class="form">
    <form action="#" method="POST">
        <h3>Subject</h3>
        <input type="text" name='note[subject]' value=""><br>
        <hr>
        <select name="note[tech]">
            <?php foreach ($techs as $tech): ?>
            <option value="<?= $tech ?>"><?= strtoupper($tech) ?></option>
            <?php endforeach; ?>
        </select>
        <h3>Note</h3>
        <textarea class="box" type="text" name='note[text]' value=""></textarea><br>
        <h3>Add a Image</h3>
        <input type="file" name="img">
        <input type="submit" value="Submit Note">
    </form>
</div>
</div>