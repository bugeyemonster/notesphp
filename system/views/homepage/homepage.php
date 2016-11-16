

<div id="homepage">

    <div class="notes">
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li class="anote">
                    <p>Tech: <?php echo $note['tech']; ?> Subject: <?php echo $note['subject']; ?></p>
                    <span class="note"><?php echo $note['note']; ?></span>
                    <p>Note Has Id: <?php echo $note['id']; ?> and Time Stamp: <?php echo $note['time']; ?></p>
                    <form action="" method="post">
                        <input type="hidden" value="<?php echo $note['id']?>" name="delete_id">
                        <input type="submit" value="Delete">
                    </form>
                    <?php $page = "editnote"; ?>
                    <a href="<?php echo url::to($page, $note); ?>">Edit Note</a>
                </li>
                <hr>
            <?php endforeach; ?>
        </ul>
    </div>

</div>



