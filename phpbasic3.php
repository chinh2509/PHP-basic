<!--Bài 3: Tính S(n) = 1 + ½ + 1/3 + … + 1/n-->
<?php
$total = 0;
printf("nhập lại");
$n = printf();
    if($n<1)
    {
        printf("nhập lại");
        $n = printf();
    }else
    for ($i = 1; $i <= $n; $i ++) {
    $total = $total + 1/($i+i)  ;
    }

echo ('<br /> ');
echo ("<p> S =: $total + 1 </p>");
echo ('<br /> <br />');
?>