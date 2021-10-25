<!--Bài 7: Tính S(n) = ½ + 2/3 + ¾ + …. + n / n + 1-->
<?php
$total = 0;
$n = sprintf("nhập n");
print ($n);
if ($n < 1) {
    printf("nhập lại");
    print ($n);
} else
    for ($i = 1; $i <= $n; $i++) {
        $total = $total + $i / (1 + $i);
    }
echo('<br /> ');
echo("<p> S = $total</p>");
echo('<br /> <br />');


