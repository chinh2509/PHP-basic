<!--Bài 8: Tính S(n) = ½ + ¾ + 5/6 + … + 2n + 1/ 2n + 2-->
<?php
$total = 0;
$n = sprintf("nhập n");
print ($n);
if ($n < 1) {
    printf("nhập lại");
    print ($n);
} else
    for ($i = 1; $i <= $n; $i++) {
        $total = $total + ($i * 2+ 1) / (2 + 2*$i);
    }
echo('<br /> ');
echo("<p> S = $total</p>");
echo('<br /> <br />');

?>
