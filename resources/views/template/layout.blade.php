<!doctype html>
<html lang="<?= $app['settings']['locale'] ?>">
<head>
    <title>Temp</title>
</head>
<body>

@include('template/partials/'.$app['page']['layout'].'/menu')



@include('template/partials/'.$app['page']['layout'].'/sidebar')


<?php
    try
    {
         $this->renderSection('content');
    }
    catch (Exception $e)
    {
        echo "<pre><code>$e</code></pre>";
    }
?>

@include('template/partials/'.$app['page']['layout'].'/footer')


</body>

</html>
