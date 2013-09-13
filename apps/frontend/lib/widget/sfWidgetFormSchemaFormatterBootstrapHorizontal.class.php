<?php

class sfWidgetFormSchemaFormatterBootstrapHorizontal extends sfWidgetFormSchemaFormatter {
    protected
            $decoratorFormat = "%hidden_fields% %content%",
            $rowFormat = "%hidden_fields%\n<div class=\"control-group %class%\">\n\t%label%\n\t<div class=\"controls\">%field%\n\t%error%\n\t%help%</div>\n</div>",
            $errorRowFormat = '<div class="alert alert-error">%errors%</div>',
            $helpFormat = '<span class="help-inline">%help%</span>',
            $errorListFormatInARow = '<span class="help-block">%errors%</span>',
            $errorRowFormatInARow = '%error%<br />',
            $namedErrorRowFormatInARow = '<strong>%name%:</strong> %error%<br />';

    public function formatRow($label, $field, $errors = array(), $help = '', $hiddenFields = null) {

        return strtr($this->getRowFormat(), array(
            '%label%' => $label,
            '%field%' => $field,
            '%error%' => $this->formatErrorsForRow($errors),
            '%help%' => $this->formatHelp($help),
            '%hidden_fields%' => null === $hiddenFields ? '%hidden_fields%' : $hiddenFields,
            '%class%' => $errors != array() ? "error" : ""
        ));
    }

    public function generateLabel($name, $attributes = array()) {
        $labelName = $this->generateLabelName($name);

        if (false === $labelName) {
            return '';
        }

        if (!isset($attributes['for'])) {
            $attributes['for'] = $this->widgetSchema->generateId($this->widgetSchema->generateName($name));
        }

        if (!isset($attributes['class'])) {
            $attributes['class'] = 'control-label';
        } else {
            $attributes['class']+= ' control-label';
        }

        return $this->widgetSchema->renderContentTag('label', $labelName, $attributes);
    }

}