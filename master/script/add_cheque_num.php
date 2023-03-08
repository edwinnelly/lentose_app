<?php
include_once "../component/controller.php";
$app = new controller;
?>
    <label>Choose Customer</label>
    <select class="form-control" id="my-select" name="chqe" required id="select-state" placeholder="Pick a account..." style="width: 100%">
        <option>Choose Cheque Number</option>
        <?php
        $get_category = $app->fetch_cheque($key_grant);
        var_dump($get_category);
        $count = 0;
        foreach ($get_category as $cc) {
            $count++;
            ?> <option value="<?=  $cc->cheque_no; ?>"><?=  $cc->cheque_no; ?></option>
            <?php
        }
        ?>
    </select>
