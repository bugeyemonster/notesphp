<?php
/**
 * Created by PhpStorm.
 * User: maxwe
 * Date: 11/14/2016
 * Time: 10:46 AM
 */
$techs = array(
    '',
    'php',
    'css',
    'html',
    'javascript',
    'html',
    'mysql'
);
$sorts = array(
    'oldest',
    'newest',
    'tech',
    'id'
)

?>


<nav>
    <a href="<?php echo url::to('homepage'); ?>">List All notes</a>
    <a href="<?php echo url::to('addnote'); ?>">Add a Note</a>
    <form action="<?php echo url::to('search'); ?>" method="POST">
        <select name="tech">
            <?php foreach ($techs as $tech): ?>
                <option value="<?= $tech ?>"><?= strtoupper($tech) ?></option>
            <?php endforeach; ?></select>
        <select name="sortby">
            <?php foreach ($sorts as $sort): ?>
                <option value="<?= $sort ?>"><?= strtoupper($sort) ?></option>
            <?php endforeach; ?></select>
        <input type="text" name='search' value="">
        <input type="submit" value="Search">
    </form>

</nav>

</div>
