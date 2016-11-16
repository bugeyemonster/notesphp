<?php
/**
 * Created by PhpStorm.
 * User: maxwe
 * Date: 11/14/2016
 * Time: 2:06 PM
 */
var_dump($_POST);
$initVal = 'Initial Value';

if(isset($_POST['my_text'])){
    $initVal = $_POST['my_text'];
    if (strlen($initVal > 10)){
        $initVal = "To Long";
    }
}

?>


<head>
<title>TextArea</title>
</head>

<body>

<form action="" method="POST">
    <textarea name="my_text"><?php echo htmlspecialchars($initVal); ?></textarea>
    <span>NO more than 10 characters</span>
    <input type="submit" value="send">
</form>
</body>
