<?php

class __Mustache_0bac18a6420527a9cc5499827b9985c0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="searchresults" aria-live="off" class="no-overflow" style="max-height: 10em">
';
        // 'templates' inverted section
        $value = $context->find('templates');
        if (empty($value)) {
            
            $buffer .= $indent . '<p class="text-warning">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section8699a05a369faccc95420a4b9269db74($context, $indent, $value);
            $buffer .= '</p>
';
        }
        $buffer .= $indent . '<ul>
';
        // 'templates' section
        $value = $context->find('templates');
        $buffer .= $this->sectionD1bcfff0006ca7867268ff565830b0d7($context, $indent, $value);
        $buffer .= $indent . '</ul>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section8699a05a369faccc95420a4b9269db74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'noresults, tool_templatelibrary';
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
                
                $buffer .= 'noresults, tool_templatelibrary';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1bcfff0006ca7867268ff565830b0d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<li data-templatename="{{.}}"><a href="#">{{.}}</a></li>
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
                
                $buffer .= $indent . '<li data-templatename="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"><a href="#">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
