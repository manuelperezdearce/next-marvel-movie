<?php require_once  'functions.php'; ?>
<?php require_once  'consts.php'; ?>

<?php render_template('head', $data); ?>
<?php render_template('body', array_merge($data, ["until_message" => $until_message])); ?>
<?php render_template('styles'); ?>