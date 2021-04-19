<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo-list</title>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('Task')->html();
} elseif ($_instance->childHasBeenRendered('vZSBOtF')) {
    $componentId = $_instance->getRenderedChildComponentId('vZSBOtF');
    $componentTag = $_instance->getRenderedChildComponentTagName('vZSBOtF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vZSBOtF');
} else {
    $response = \Livewire\Livewire::mount('Task');
    $html = $response->html();
    $_instance->logRenderedChild('vZSBOtF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>
<?php /**PATH C:\OpenServer\domains\test2\resources\views/todo.blade.php ENDPATH**/ ?>