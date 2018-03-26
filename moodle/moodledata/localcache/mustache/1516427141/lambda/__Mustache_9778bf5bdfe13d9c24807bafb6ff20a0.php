<?php

class __Mustache_9778bf5bdfe13d9c24807bafb6ff20a0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'subscription' section
        $value = $context->find('subscription');
        $buffer .= $this->section0a10a57265165b291e1639247d8e1abe($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section87b7d971d18ed241a537f3f78c441cb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'subscriptionsource, core_calendar, {{{subscriptionname}}}';
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
                
                $buffer .= 'subscriptionsource, core_calendar, ';
                $value = $this->resolveValue($context->find('subscriptionname'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0f0e8aff494a918e37109e2701253183(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <p><a href="{{subscriptionurl}}">{{#str}}subscriptionsource, core_calendar, {{{subscriptionname}}}{{/str}}</a></p>
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
                
                $buffer .= $indent . '                <p><a href="';
                $value = $this->resolveValue($context->find('subscriptionurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section87b7d971d18ed241a537f3f78c441cb1($context, $indent, $value);
                $buffer .= '</a></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc7534edc0db0d9da996a9c33db00799(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div>
            {{#subscriptionurl}}
                <p><a href="{{subscriptionurl}}">{{#str}}subscriptionsource, core_calendar, {{{subscriptionname}}}{{/str}}</a></p>
            {{/subscriptionurl}}
            {{^subscriptionurl}}
                <p>{{#str}}subscriptionsource, core_calendar, {{{subscriptionname}}}{{/str}}</p>
            {{/subscriptionurl}}
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
                
                $buffer .= $indent . '        <div>
';
                // 'subscriptionurl' section
                $value = $context->find('subscriptionurl');
                $buffer .= $this->section0f0e8aff494a918e37109e2701253183($context, $indent, $value);
                // 'subscriptionurl' inverted section
                $value = $context->find('subscriptionurl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <p>';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section87b7d971d18ed241a537f3f78c441cb1($context, $indent, $value);
                    $buffer .= '</p>
';
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a10a57265165b291e1639247d8e1abe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#displayeventsource}}
        <div>
            {{#subscriptionurl}}
                <p><a href="{{subscriptionurl}}">{{#str}}subscriptionsource, core_calendar, {{{subscriptionname}}}{{/str}}</a></p>
            {{/subscriptionurl}}
            {{^subscriptionurl}}
                <p>{{#str}}subscriptionsource, core_calendar, {{{subscriptionname}}}{{/str}}</p>
            {{/subscriptionurl}}
        </div>
    {{/displayeventsource}}
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
                
                // 'displayeventsource' section
                $value = $context->find('displayeventsource');
                $buffer .= $this->sectionCc7534edc0db0d9da996a9c33db00799($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
