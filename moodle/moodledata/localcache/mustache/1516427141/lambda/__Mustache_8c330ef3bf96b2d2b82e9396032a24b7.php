<?php

class __Mustache_8c330ef3bf96b2d2b82e9396032a24b7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<tr>
';
        $buffer .= $indent . '    <td class="col-sm-10">
';
        // 'sampleimage' section
        $value = $context->find('sampleimage');
        $buffer .= $this->section88c02851fa57805522e9ba87cf2d5d0e($context, $indent, $value);
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('sampledescription'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </td>
';
        $buffer .= $indent . '    <td class="col-sm-2">
';
        // 'actions' section
        $value = $context->find('actions');
        $buffer .= $this->section2c1699366ef14b58379cf2c8815ac940($context, $indent, $value);
        $buffer .= $indent . '    </td>
';
        $buffer .= $indent . '</tr>
';

        return $buffer;
    }

    private function section88c02851fa57805522e9ba87cf2d5d0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{{sampleimage}}}
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('sampleimage'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c1699366ef14b58379cf2c8815ac940(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core/action_menu}}
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
