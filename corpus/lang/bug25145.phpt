==========
Bug #25145 (SEGV on recpt of form input with name like "123[]")
==========

<?php

var_dump($_REQUEST);
echo "Done\n";

?>

---

(program  (expression_statement (function_call_expression (qualified_name (name)) (arguments (variable_name (name))))) (echo_statement (string)))