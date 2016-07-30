<?php

    // configuration
    require("../includes/config.php"); 

    // if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // if deposit amount is invalid (not a whole positive integer)
        if (preg_match("/^\d+$/", $_POST["deposit"]) == false)
        {
            // apologize
            apologize("You must enter a whole, positive integer.");
        }
        
        // update user's cash
        query("UPDATE users SET cash = cash + ? WHERE id = ?", $_POST["deposit"], $_SESSION["id"]);
        
        // redirect to portfolio 
        redirect("/");
    }
    
    // if form hasn't been submitted
    else
    {
        // render portfolio (pass in new portfolio table and cash)
        render("deposit_form.php", ["title" => "Deposit Form"]);
    }

?>
