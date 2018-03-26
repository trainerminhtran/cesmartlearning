<?php

class __Mustache_5c60ef3feecddc9b5d5cdabf51ad1868 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'name' section
        $value = $context->find('name');
        $buffer .= $this->section703cdb9ec5dfa1956979b38b99248966($context, $indent, $value);

        return $buffer;
    }

    private function section96533aebb4dec45d82a606d74d1fdd10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="group-image"><img class="grouppicture" src="{{{pictureurl}}}" alt="{{{name}}}" title="{{{name}}}"/></div>
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
                
                $buffer .= $indent . '    <div class="group-image"><img class="grouppicture" src="';
                $value = $this->resolveValue($context->find('pictureurl'), $context);
                $buffer .= $value;
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '"/></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67246f9df4c3e726292ca4e5dd5756aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editgroupprofile';
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
                
                $buffer .= 'editgroupprofile';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section727ad31a55cf4bbcc32a5d0672c97244(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit, core, {{#str}}editgroupprofile{{/str}}';
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
                
                $buffer .= 't/edit, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section67246f9df4c3e726292ca4e5dd5756aa($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section43fe8fe703589d5471c14be91ca143f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="group-edit"><a href="{{editurl}}">{{#pix}}t/edit, core, {{#str}}editgroupprofile{{/str}}{{/pix}}</a></div>
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
                
                $buffer .= $indent . '    <div class="group-edit"><a href="';
                $value = $this->resolveValue($context->find('editurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section727ad31a55cf4bbcc32a5d0672c97244($context, $indent, $value);
                $buffer .= '</a></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section703cdb9ec5dfa1956979b38b99248966(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="groupinfobox container-fluid p-x-1 p-y-1">
    {{#pictureurl}}
    <div class="group-image"><img class="grouppicture" src="{{{pictureurl}}}" alt="{{{name}}}" title="{{{name}}}"/></div>
    {{/pictureurl}}
    {{#editurl}}
    <div class="group-edit"><a href="{{editurl}}">{{#pix}}t/edit, core, {{#str}}editgroupprofile{{/str}}{{/pix}}</a></div>
    {{/editurl}}
    <h3 class="">{{{name}}}</h3>
    <div class="group-description">{{{description}}}</div>
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
                
                $buffer .= $indent . '<div class="groupinfobox container-fluid p-x-1 p-y-1">
';
                // 'pictureurl' section
                $value = $context->find('pictureurl');
                $buffer .= $this->section96533aebb4dec45d82a606d74d1fdd10($context, $indent, $value);
                // 'editurl' section
                $value = $context->find('editurl');
                $buffer .= $this->section43fe8fe703589d5471c14be91ca143f8($context, $indent, $value);
                $buffer .= $indent . '    <h3 class="">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '    <div class="group-description">';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
