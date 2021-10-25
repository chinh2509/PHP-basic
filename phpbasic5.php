<!--Bài 5: Tính S(n) = 1 + 1/3 + 1/5 + … + 1/(2n + 1)-->
<?php
$total = 0;
printf("nhập lại");
$n = printf();
if ($n < 1) {
    printf("nhập lại");
    $n = printf();
} else
    for ($i = 1; $i <= $n; $i++) {
        $total = $total + 1 / ((2 * i)+1);
    }
echo('<br /> ');
echo("<p> S = $total + 1 </p>");
echo('<br /> <br />');
