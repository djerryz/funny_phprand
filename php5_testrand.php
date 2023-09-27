<?php
echo "mt_rand:\n";
mt_srand(0);
echo mt_rand();
echo "\n";
echo mt_rand();
echo "\n";
mt_srand(0);
echo mt_rand();
echo "\n";

echo "rand:\n";
srand(0);
echo rand();
echo "\n";
echo rand();
echo "\n";
srand(0);
echo rand();
echo "\n";

echo "mt_rand:\n";
mt_srand(0);
echo mt_rand();
?>
