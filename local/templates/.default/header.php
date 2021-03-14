<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?
\Bitrix\Main\UI\Extension::load('modulename.vue.components.extension');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?$APPLICATION->ShowHead();?>
</head>
<body>
    <script>
        BX.Vue.create({
            el: '#bx-extensionname',
            template: '<bx-extensionname/>'
        });
    </script>
    <div id="bx-extensionname"></div>
</body>
</html>