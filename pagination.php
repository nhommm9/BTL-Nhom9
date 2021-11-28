<link rel="stylesheet" href="css/pagination.css">
<?php
if ($current_page > 1 || $current_page = 1) {
    $prev_page = $current_page - 1;
?>
    <a class="number-page" href="?per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>">
        <i class="fas fa-angle-left" style="color:#505050;"></i>
    </a>
<?php
}

if ($current_page > 3) {
    $firat_page = 1;
?>
    <a class="number-page" href="?per_page=<?= $item_per_page ?>&page=<?= $firat_page ?>">First</a>
<?php
}

?>

<?php for ($num = 1; $num <= $totalPages; $num++) { ?>
    <?php if ($num != $current_page) { ?>
        <?php if ($num > $current_page - 3  && $num < $current_page + 3) { ?>
            <a class="number-page" href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a>
        <?php } ?>
    <?php } else { ?>
        <strong class="number-page-choose"><?= $num ?></strong>
    <?php } ?>
<?php } ?>
<?php if ($current_page > 1 || $current_page = 1) { ?>
    <?php if ($current_page < $totalPages ) {
        $next_page = $current_page + 1;
    ?>
        <a class="number-page" href="?per_page=<?= $item_per_page ?>&page=<?= $next_page ?>">
            <i class=" fas fa-angle-right" style="color:#505050;"></i>
        </a>
    <?php } ?>
<?php } ?>
<?php if ($current_page < $totalPages - 3) {
    $end_page = $totalPages;
?>
    <a class="number-page" href="?per_page=<?= $item_per_page ?>&page=<?= $end_page ?>">Last</a>
<?php } ?>