# webapp_template
- functions.php
  - db_connected()
    use when need to connect to MySQL database return MySQL database conected result 
  - db_insertref($tbl_name, $ref_column, $ref_value, $ref_type)
    use to insert new row to table only reference column
  - db_updaterowbyref($tbl_name, $ref_column, $ref_value, $ref_type, $upd_column, $upd_value, $upd_type)
    use to update table's row by reference
  - 
