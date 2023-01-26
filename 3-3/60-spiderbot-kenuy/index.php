<style>
    * {
        margin: 0;
        padding: 0;
    }
    body {
        text-align: center;
        margin: 0 auto;
    }
    h1,h2,h3,h4,p {
        padding: 5px;
    }
    p {
        border-bottom: 1px dotted black;
    }

</style>
<?php
require("simple_html_dom.php");
$website = file_get_html("https://www.bing.com/search?q=software+engineer&go=Search&qs=ds&form=QBRE");

for ($i = 1; $i <= 5; $i++) { ?>
    <h1>Website <?= $i ?></h1>
    <h3>Title:</h3>
    <p><?= $website -> find('h2 a', $i) ?></p>
    <h3>Link:</h3>
    <p><?= $website -> find('h2 a', $i) -> href ?></p>
<?php } ?>