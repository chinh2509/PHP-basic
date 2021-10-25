<!--Bài 6: Tính S(n) = 1/1×2 + 1/2×3 +…+ 1/n x (n + 1)-->
<?php
$total = 0;
$n = sprintf("nhập n");
print ($n);
if ($n < 1) {
    printf("nhập lại");
    $n = printf();
} else
    for ($i = 1; $i <= $n; $i++) {
        $total = $total + 1 / ($i * ($i + 1));
    }
echo('<br /> ');
echo("<p> S = $total</p>");
echo('<br /> <br />');

