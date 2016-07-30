<ul class="nav nav-pills">
    <li><a href="index.php">Portfolio</a></li>
    <li><a href="quote.php">Quote</a></li>
    <li><a href="buy.php">Buy</a></li>
    <li><a href="sell.php">Sell</a></li>
    <li><a href="history.php">History</a></li>
    <li><a href="deposit.php">Deposit Funds</a></li>    
    <li><a href="logout.php"><strong>Log Out</strong></a></li>
</ul>

A share of <?=$_POST["name"]?> (<?=$_POST["symbol"]?>) costs <strong>$<?=number_format($_POST["price"], 2)?></strong>
