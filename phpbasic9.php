<!--Bài 9: Tính T(n) = 1 x 2 x 3…x N-->
<?php
$n = sprintf("nhập n");
print ($n);
$total = 0;
if ($n < 1) {
    printf("nhập lại");
    $n = printf();
}else
for($i = 1;$i<=$n;$i++)
{
    $total = $i * ($i + 1);
}
echo('<br /> ');
echo("<p> S = $total</p>");
echo('<br /> <br />');
?>
