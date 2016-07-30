<ul class="nav nav-pills">
    <li><a href="index.php">Portfolio</a></li>
    <li><a href="quote.php">Quote</a></li>
    <li><a href="buy.php">Buy</a></li>
    <li><a href="sell.php">Sell</a></li>
    <li><a href="history.php">History</a></li>
    <li><a href="deposit.php">Deposit Funds</a></li>    
    <li><a href="logout.php"><strong>Log Out</strong></a></li>
</ul>

<form action="quote.php" method="post">
    <fieldset>
        <div class="control-group">
            <input autofocus name="symbol" placeholder="Symbol" type="text"/>
        </div>
        <div class="control-group">
            <button type="submit" class="btn">Get Quote</button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="register.php">register</a> for an account
</div>
