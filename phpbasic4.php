<!--Bài 4: Tính S(n) = ½ + ¼ + … + 1/2n-->
<?php

$total = 0;
printf("nhập lại");
$n = printf();
if ($n < 1) {
    printf("nhập lại");
    $n = printf();
} else
    for ($i = 1; $i <= $n; $i++) {
        $total = $total + 1 / (2 * i);
    }
echo('<br /> ');
echo("<p> S = $total </p>");
echo('<br /> <br />');
?>
