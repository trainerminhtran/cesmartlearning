<?php

class __Mustache_78c7b1d87fbf690599d27cc9ede83d8d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'displayblocktime' section
        $value = $context->find('displayblocktime');
        $buffer .= $this->sectionB8e4185ba2846818c2fb7ca207b57822($context, $indent, $value);
        $buffer .= $indent . '<div class="message row-fluid"
';
        $buffer .= $indent . '    data-region="message"
';
        $buffer .= $indent . '    data-blocktime="';
        $value = $this->resolveValue($context->find('blocktime'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $value = $this->resolveValue($context->find('isread'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-useridto="';
        $value = $this->resolveValue($context->find('useridto'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-useridfrom="';
        $value = $this->resolveValue($context->find('useridfrom'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-messageid="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-messageread="';
        $value = $this->resolveValue($context->find('isread'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-timecreated="';
        $value = $this->resolveValue($context->find('timecreated'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    tabindex="0">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="content ';
        $value = $this->resolveValue($context->find('position'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <span class="text" data-region="message-text">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('text'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '        <span class="timesent">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('timesent'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionB8e4185ba2846818c2fb7ca207b57822(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="blocktime" data-region="blocktime" data-blocktime="{{blocktime}}" data-id="{{id}}{{isread}}">
        {{blocktime}}
    </div>
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
                
                $buffer .= $indent . '    <div class="blocktime" data-region="blocktime" data-blocktime="';
                $value = $this->resolveValue($context->find('blocktime'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $value = $this->resolveValue($context->find('isread'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('blocktime'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
