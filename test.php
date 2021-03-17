<?php
    $action = ($_POST['taxIncome']< 27256) ? 'eligible' : "non éligible";
    echo $action;
?>