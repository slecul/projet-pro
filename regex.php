<?php
$regexMail = '#^[\w._-]+@[\w.-_]+[.][a-z]+$#';
$regexName = '#^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$#';
$regexPhone = '#^[0][1-9][0-9]{8}$#';
$regexCity = '#^[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ -]+$#';
$regexText = '#[<>]#';
$regexBool = '##^(0|1)$';
// format input type date avec navigateur français : JJ/MM/AAAA
$regexDate = '#^((0[1-9])|([1-2][0-9])|(3[0-1]))\/{1}((0[1-9])|(1[0-2]))\/{1}((19|20)([0-9]{2})){1}$#';

?>