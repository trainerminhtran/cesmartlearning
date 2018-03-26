<?php

class __Mustache_ea018ce0c832d3f8f27b33d5bb6bfd7b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="list-templates">
';
        $buffer .= $indent . '    <form class="form-horizontal">
';
        $buffer .= $indent . '        <div class="control-group">
';
        $buffer .= $indent . '            <label for="selectcomponent" class="control-label">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4b4ede1b27dda18194700aaafae0c9a3($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '            <div class="controls">
';
        $buffer .= $indent . '                <select id="selectcomponent" data-field="component">
';
        $buffer .= $indent . '                    <option value="">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section32e423e2855b2b931357d3f3a8ae86d1($context, $indent, $value);
        $buffer .= '</option>
';
        // 'allcomponents' section
        $value = $context->find('allcomponents');
        $buffer .= $this->section894659392eba0a7ca3ef55a7d850b203($context, $indent, $value);
        $buffer .= $indent . '                </select>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="control-group">
';
        $buffer .= $indent . '            <label for="search" class="control-label">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section314bf9b3d8e512733371631a71104779($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '            <div class="controls">
';
        $buffer .= $indent . '                <input type="text" id="search" data-field="search"/>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '    <hr/>
';
        if ($partial = $this->mustache->loadPartial('tool_templatelibrary/search_results')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <hr/>
';
        if ($partial = $this->mustache->loadPartial('tool_templatelibrary/display_template')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section74cabc12e9510cdad78fa92760dd6253($context, $indent, $value);

        return $buffer;
    }

    private function section4b4ede1b27dda18194700aaafae0c9a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'component, tool_templatelibrary';
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
                
                $buffer .= 'component, tool_templatelibrary';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32e423e2855b2b931357d3f3a8ae86d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'all, tool_templatelibrary';
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
                
                $buffer .= 'all, tool_templatelibrary';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section894659392eba0a7ca3ef55a7d850b203(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <option value="{{component}}">{{name}}</option>
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
                
                $buffer .= $indent . '                        <option value="';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section314bf9b3d8e512733371631a71104779(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'search, tool_templatelibrary';
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
                
                $buffer .= 'search, tool_templatelibrary';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section74cabc12e9510cdad78fa92760dd6253(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'tool_templatelibrary/search\', \'tool_templatelibrary/display\']);
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
                
                $buffer .= $indent . '    require([\'tool_templatelibrary/search\', \'tool_templatelibrary/display\']);
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
