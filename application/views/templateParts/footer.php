<? 
/*
Файл, подключаемый template.php.
> содержит разметку footer'а страницы.
*/
?>

<footer class="footer mt-auto py-3 bg-light border-top shadow-lg">
    <div class="container">
        <span class="badge bg-secondary">ВВК <?=Config::getValue('version')?> от <?=Config::getValue('versionDate')?></span> 
        <div id="clown" class="float-end text-muted"><?=base64_decode("I1JHTlNL")?></div>
    </div>
</footer>