<?php
include 'regexCheck.php';

echo '<b>Test Driver for Validating Seller and Product Names using Regex </b><br/><br/><br/>';

echo 'Case 1 - Valid Seller Name<br/>';
checkSell('A9 Ecom');
echo '<br/><br/>';

echo 'Case 2 - Valid Seller Name with 16 characters<br/>';
checkSell('D Big5 Sport Com');
echo '<br/><br/>';

echo 'Case 3 - Seller Name more than 16 characters<br/>';
checkSell('The Sporting Equipment Manufacturers');
echo '<br/><br/>';

echo 'Case 4 - Seller Name with leading numeric character<br/>';
checkSell('49ers');
echo '<br/><br/>';

echo 'Case 5 - Seller Name with other characters<br/>';
checkSell('Go Daddy!');
echo '<br/><br/>';

echo 'Case 6 - Valid Product Name <br/>';
checkProd('Fooseball Table');
echo '<br/><br/>';

echo 'Case 6 - Valid Product Name with 200 characters <br/>';
checkProd('netball wrestling fencing snorkeling scuba-diving sky-diving bungee-jumping bowling cricket field-hockey ice-hockey quidditch discuss-throw javelin-throw golf water-polo horse-riding sudoku car-racing');
echo '<br/><br/>';

echo 'Case 8 - Product Name more than 200 characters<br/>';
checkProd('aqwewkdknld fukjhvjhgvjh xcmvb jkdhf kjhdfbjhfvjhxnmcbvmjhxvln iuai ulieuyf luhbgjmznvbppppppppppppppppppjnshdppppppppytasvhdtxpppppppppappppppppppppppppppj kdnzhmxhvg mnvnbvmjhzn luiyaeiuyrauhfknjycjm');
echo '<br/><br/>';

echo 'Case 9 - Product Name with leading numeric character<br/>';
checkProd('8 Ball');
echo '<br/><br/>';

echo 'Case 10 - Product Name with special characters ~!@#$%^&*()`" <br/>';
checkProd('Bingo!');
echo '<br/><br/>';

?>