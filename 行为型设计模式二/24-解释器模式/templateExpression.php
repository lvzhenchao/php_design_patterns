<?php

require_once "Expression.php";
class templateExpression implements Expression {
    public function interpret($content)
    {
        // TODO: Implement interpret() method.
        $content = str_replace("{", '<?php echo', $content);
        $content = str_replace("}", '?>', $content);

        return $content;
    }
}