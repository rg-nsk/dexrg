<?
/*
Файл, подключаемый Route.php.
> содержит разметку страницы ошибки маршрутизации.
*/
?>

<div class="p-4 align-items-center rounded-3 border shadow d-flex">
    <div class="col-3">
        <svg class="m-auto" width="100%" height="20%">
            <image xlink:href="/images/icons/info-circle.svg" width="100%" height="100%" />
        </svg>
    </div>
    <div class="col-9">
        <h3 class="display-6 lh-1 mb-3">Страница не найдена</h3>
        <p class="lead">
            <? 
            if($data["errorMessage"] == "") {
                echo "По данному адресу страница не найдена.";
            } else {
                echo $data["errorMessage"];
            }
            ?>
        </p>
    </div>
</div>