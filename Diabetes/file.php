
<?php
$pred = exec('python /root/Desktop/hack/Diabetes/Test.py');
echo "The prediction is : ". 100*$pred ."%";
?>
