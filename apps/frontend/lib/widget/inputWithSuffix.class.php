<?php

class inputWithSuffix extends sfWidgetFormSchemaFormatterBootstrapHorizontal {

    protected
            $rowFormat = "%hidden_fields%\n<div class=\"control-group %class%\">\n\t%label%\n\t<div class=\"controls\"><div class=\"input-append\">%field%<span class=\"add-on\">%suffix%</span></div>\n\t%error%\n\t%help%</div>\n</div>";
    protected $suffix;

    public function __construct(sfWidgetFormSchema $widgetSchema,$suffix = "") {
        parent::__construct($widgetSchema);
        $this->suffix = $suffix;                
    }

    public function formatRow($label, $field, $errors = array(), $help = '', $hiddenFields =
    null) {
        return strtr(parent::formatRow($label, $field, $errors, $help,
                                       $hiddenFields),
                                       array(
            '%suffix%' => $this->suffix,
        ));
    }

}