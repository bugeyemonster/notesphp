<?php
/**
 * Created by PhpStorm.
 * User: maxwe
 * Date: 11/15/2016
 * Time: 9:41 AM
 */


$techs = array(
    'php',
    'css',
    'html',
    'javascript',
    'html',
    'mysql'
);

//var_dump($notes); die();
$textval = $notes['note'];
//var_dump($notes);
$subval = $notes['subject'];
$id = $notes['id'];
//var_dump($textval); //die();

?>
<div class="editnote">
    <div class="form">
        <form action="<?php echo url::to('updatenote'); ?>" method="POST">
            <h3>Subject</h3>
            <input type="text" name='subject' value="<?php echo $subval; ?>"><br>
            <hr>
            <select name="tech">
                <?php foreach ($techs as $tech): ?>
                    <option value="<?= $tech ?>"><?= strtoupper($tech) ?></option>
                <?php endforeach; ?>
            </select>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <h3>Note</h3>
            <textarea class="box" type="text" name='note' value=""><?php echo $textval; ?></textarea><br>
            <h3>Add a Image</h3>
            <input type="file" name="img" value="Add Image">
            <input type="submit" value="Submit Note">
        </form>
    </div>
</div>