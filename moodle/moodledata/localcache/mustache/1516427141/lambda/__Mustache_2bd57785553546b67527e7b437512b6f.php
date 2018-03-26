<?php

class __Mustache_2bd57785553546b67527e7b437512b6f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'modelselector' section
        $value = $context->find('modelselector');
        $buffer .= $this->sectionD1c6a7140c027f164fbf906efaa25670($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<h2 class="m-b-2">';
        $value = $this->resolveValue($context->find('insightname'), $context);
        $buffer .= $value;
        $buffer .= '</h2>
';
        $buffer .= $indent . '
';
        // 'noinsights' inverted section
        $value = $context->find('noinsights');
        if (empty($value)) {
            
            // 'nostaticmodelnotification' section
            $value = $context->find('nostaticmodelnotification');
            $buffer .= $this->section2dd47f85ffab82fa50f565642aabb329($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $this->resolveValue($context->find('pagingbar'), $context);
            $buffer .= $indent . $value;
            $buffer .= '
';
            // 'predictions' section
            $value = $context->find('predictions');
            $buffer .= $this->section87c8d6e2096d22a9f0c5c50087a2dcc0($context, $indent, $value);
            $value = $this->resolveValue($context->find('pagingbar'), $context);
            $buffer .= $indent . $value;
            $buffer .= '
';
        }
        // 'noinsights' section
        $value = $context->find('noinsights');
        $buffer .= $this->section2dd47f85ffab82fa50f565642aabb329($context, $indent, $value);

        return $buffer;
    }

    private function sectionD1c6a7140c027f164fbf906efaa25670(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="m-b-2">
        {{> core/single_select}}
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
                
                $buffer .= $indent . '    <div class="m-b-2">
';
                if ($partial = $this->mustache->loadPartial('core/single_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2dd47f85ffab82fa50f565642aabb329(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="m-t-2">
        {{> core/notification_info}}
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
                
                $buffer .= $indent . '    <div class="m-t-2">
';
                if ($partial = $this->mustache->loadPartial('core/notification_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7f7151970b9f36ace6dbb08e12a5912(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'prediction, report_insights';
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
                
                $buffer .= 'prediction, report_insights';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ede492f71244289f80daa30fdbe3ef2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'table-{{style}}';
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
                
                $buffer .= 'table-';
                $value = $this->resolveValue($context->find('style'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section20bd48646078f91f5473fa244abb15b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> core/pix_icon}}
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
                
                if ($partial = $this->mustache->loadPartial('core/pix_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8111cbf56118aa58f390da519737a980(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'name';
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
                
                $buffer .= 'name';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ad2fdcc9b858451e82e60edfcdcf48d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'actions';
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
                
                $buffer .= 'actions';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCcb37de73c3b2044aa72fdb7de25e1e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <tbody>
            {{> report_insights/insight}}
        </tbody>
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
                
                $buffer .= $indent . '        <tbody>
';
                if ($partial = $this->mustache->loadPartial('report_insights/insight')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </tbody>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87c8d6e2096d22a9f0c5c50087a2dcc0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <table class="generaltable insights-list">
        <caption>
            {{#str}}prediction, report_insights{{/str}}:
            <span class="{{#style}}table-{{style}}{{/style}}">
                {{#outcomeicon}}
                    {{> core/pix_icon}}
                {{/outcomeicon}}
                {{predictiondisplayvalue}}
            </span>
        </caption>
        <thead>
            <tr>
                <th scope="col" class="col-sm-10">{{#str}}name{{/str}}</th>
                <th scope="col" class="col-sm-2">{{#str}}actions{{/str}}</th>
            </tr>
        </thead>
    {{#insights}}
        <tbody>
            {{> report_insights/insight}}
        </tbody>
    {{/insights}}
    </table>
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
                
                $buffer .= $indent . '    <table class="generaltable insights-list">
';
                $buffer .= $indent . '        <caption>
';
                $buffer .= $indent . '            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF7f7151970b9f36ace6dbb08e12a5912($context, $indent, $value);
                $buffer .= ':
';
                $buffer .= $indent . '            <span class="';
                // 'style' section
                $value = $context->find('style');
                $buffer .= $this->section8ede492f71244289f80daa30fdbe3ef2($context, $indent, $value);
                $buffer .= '">
';
                // 'outcomeicon' section
                $value = $context->find('outcomeicon');
                $buffer .= $this->section20bd48646078f91f5473fa244abb15b9($context, $indent, $value);
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('predictiondisplayvalue'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '        </caption>
';
                $buffer .= $indent . '        <thead>
';
                $buffer .= $indent . '            <tr>
';
                $buffer .= $indent . '                <th scope="col" class="col-sm-10">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8111cbf56118aa58f390da519737a980($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                <th scope="col" class="col-sm-2">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section2ad2fdcc9b858451e82e60edfcdcf48d($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '            </tr>
';
                $buffer .= $indent . '        </thead>
';
                // 'insights' section
                $value = $context->find('insights');
                $buffer .= $this->sectionCcb37de73c3b2044aa72fdb7de25e1e8($context, $indent, $value);
                $buffer .= $indent . '    </table>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
