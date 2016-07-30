<ul class="nav nav-pills">
    <li><a href="index.php">Portfolio</a></li>
    <li><a href="quote.php">Quote</a></li>
    <li><a href="buy.php">Buy</a></li>
    <li><a href="sell.php">Sell</a></li>
    <li><a href="history.php">History</a></li>
    <li><a href="deposit.php">Deposit Funds</a></li>    
    <li><a href="logout.php"><strong>Log Out</strong></a></li>
</ul>


<table class="table table-striped">

    <thead>
        <tr>
            <th>Symbol</th>
            <th>Name</th>
            <th>Shares</th>
            <th>Price</th>
            <th>TOTAL</th>
        </tr>
    </thead>

    <tbody>
    <?php
	    foreach ($portfolio as $row)	
        {   
            echo("<tr>");
            echo("<td>" . $row["symbol"] . "</td>");
            echo("<td>" . $row["name"] . "</td>");
            echo("<td>" . $row["shares"] . "</td>");
            echo("<td>$" . number_format($row["price"], 2) . "</td>");
            echo("<td>$" . number_format($row["total"], 2) . "</td>");
            echo("</tr>");
        }
    ?>

    <tr>
        <td colspan="4">CASH</td>
        <td>$<?=number_format($users[0]["cash"], 2)?></td>
    </tr>

    </tbody>

</table>

<script>
    $(“img”).hide();
</script>


