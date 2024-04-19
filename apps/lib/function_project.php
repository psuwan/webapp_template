<?php

// Function Insert 1 row with 2 column into table
function db_insertweighing($reference, $seller, $product, $typebuy, $wgval, $typewg, $dt, $operator, $image)
{
    $db_conn = db_connected();
    $stmt = mysqli_stmt_init($db_conn);
    $sqlcmd = "INSERT INTO tbl_weighing (wg_reference, wg_seller, wg_product, wg_value, wg_typewg, wg_created, wg_operator, wg_imgref, wg_typebuy) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if (mysqli_stmt_prepare($stmt, $sqlcmd)) {
        mysqli_stmt_bind_param($stmt, "sssdsssss", $reference, $seller, $product, $wgval, $typewg, $dt, $operator, $image, $typebuy);

        if (mysqli_stmt_execute($stmt)) {
            // Success
        } else {
            // Handle execution error
            die('Error executing statement: ' . mysqli_stmt_error($stmt));
        }

        mysqli_stmt_close($stmt);
    } else {
        // Handle statement preparation error
        die('Error preparing statement: ' . mysqli_error($db_conn));
    }
}