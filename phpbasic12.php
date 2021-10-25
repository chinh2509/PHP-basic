<!--Bài 12: Tính S(n) = x + x^2 + x^3 + … + x^n-->
<?php
$total=0;
$t=1;
$n=1;
$t = printf("nhập t:");
print ($t);
$n = printf("nhập n");
print ($n);
if ($n < 1) {
    printf("nhập lại");
    print ($n);
} else
    for ($i = 1; $i <= $n; $i++) {
        $n = $n *$i;
        $total = $total + $n;
    }
echo('<br /> ');
echo("<p> S = $total</p>");
echo('<br /> <br />');
?>