<!--Bài 11: Tính S(n) = 1 + 1.2 + 1.2.3 + … + 1.2.3….N-->
<?php
$n = 0;
printf("nhập n");
print ($n);
$d=1;
$total = 0;
for ($i = 1;$i<=n;$i++)
{
    $d=$d * i;
    $total = $total + $d;
}
echo('<br /> ');
echo("<p> S = $total</p>");
echo('<br /> <br />');
?>
