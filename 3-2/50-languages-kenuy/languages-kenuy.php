<?php

$languages = array('PHP', 'JS', 'Ruby');
array_push($languages, 'HTML', 'CSS');

echo "<select for='languages'>";
for ($i = 0; $i < count($languages); $i++) {
    echo "<option value='$languages[$i]'> $languages[$i] </option>";
}
echo "</select><br/>";

echo "<select for='languages'>";
foreach ($languages as $value) {
    echo "<option value='$value'> $value </option>";
}
echo "</select>";

?>