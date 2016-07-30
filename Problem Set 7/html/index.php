<?php

    // configuration
    require("../includes/config.php"); 

    // query user's portfolio
    $rows =	query("SELECT * FROM portfolio WHERE id = ?", $_SESSION["id"]);	

	// create new array to store all info for portfolio table
	$portfolio = [];

	// for each of user's stocks
	foreach ($rows as $row)	
    {   
        // lookup stock info at row
        $stock = lookup($row["symbol"]);
        
        // add shares to the row
        $stock["shares"] = $row["shares"];
        
        // add total price to the row
        $stock["total"] = $row["shares"] * $stock["price"];
        
        // save the row in the new array
        $portfolio[] = $stock;
    }
    
    // query cash for template
    $users = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);

    // render portfolio (pass in new portfolio table and cash)
    render("portfolio.php", ["title" => "Portfolio", "portfolio" => $portfolio, "users" => $users]);

?>
