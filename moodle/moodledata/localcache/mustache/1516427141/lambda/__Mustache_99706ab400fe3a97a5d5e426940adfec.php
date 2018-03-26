<?php

class __Mustache_99706ab400fe3a97a5d5e426940adfec extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'warnings' section
        $value = $context->find('warnings');
        $buffer .= $this->sectionA5f732fc92c79feae20c6f6e590c7db6($context, $indent, $value);
        // 'infos' section
        $value = $context->find('infos');
        $buffer .= $this->section8cc80b38caaa57affb95dc73d9a9fdb4($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="box">
';
        $buffer .= $indent . '    <table class="generaltable fullwidth">
';
        $buffer .= $indent . '        <caption>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionDf32515729290fbc1ed658bbe79eedc6($context, $indent, $value);
        $buffer .= '</caption>
';
        $buffer .= $indent . '        <thead>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '                <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB97f9c6f862c9b09d9ef63063887cf39($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE00a790b87dcca7916d70bf9a1e78224($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionDc5b56ebf3e634838511c5aef3b01995($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section45ab0cdf6c79dc9cd35f81173520ac84($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section150c504581e957d5fca6fb36165c7b8c($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                <th scope="col">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2ad2fdcc9b858451e82e60edfcdcf48d($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '        </thead>
';
        $buffer .= $indent . '        <tbody>
';
        // 'models' section
        $value = $context->find('models');
        $buffer .= $this->section9a74909d6dff71ce4e46f102aaebe6e0($context, $indent, $value);
        $buffer .= $indent . '        </tbody>
';
        $buffer .= $indent . '    </table>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionA5f732fc92c79feae20c6f6e590c7db6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core/notification_warning}}
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
                
                if ($partial = $this->mustache->loadPartial('core/notification_warning')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8cc80b38caaa57affb95dc73d9a9fdb4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core/notification_info}}
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
                
                if ($partial = $this->mustache->loadPartial('core/notification_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf32515729290fbc1ed658bbe79eedc6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'analyticmodels, tool_analytics';
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
                
                $buffer .= 'analyticmodels, tool_analytics';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB97f9c6f862c9b09d9ef63063887cf39(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'target, tool_analytics';
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
                
                $buffer .= 'target, tool_analytics';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE00a790b87dcca7916d70bf9a1e78224(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'enabled, tool_analytics';
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
                
                $buffer .= 'enabled, tool_analytics';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDc5b56ebf3e634838511c5aef3b01995(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'indicators, tool_analytics';
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
                
                $buffer .= 'indicators, tool_analytics';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section45ab0cdf6c79dc9cd35f81173520ac84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'modeltimesplitting, tool_analytics';
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
                
                $buffer .= 'modeltimesplitting, tool_analytics';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section150c504581e957d5fca6fb36165c7b8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'insights, tool_analytics';
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
                
                $buffer .= 'insights, tool_analytics';
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

    private function sectionAe627446a49ca666bd6263dd5f3c4c07(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{>core/help_icon}}
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
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d56240b217f929d4677ce34bb80d3a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'yes';
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
                
                $buffer .= 'yes';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17d96d37069abe003ef139f3bb9a5f04(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/checked, core, {{#str}}yes{{/str}}';
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
                
                $buffer .= 'i/checked, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0d56240b217f929d4677ce34bb80d3a8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3fb9326bd098ed77c2e9b9dfe0f3fce4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#pix}}i/checked, core, {{#str}}yes{{/str}}{{/pix}}
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
                
                $buffer .= $indent . '                        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section17d96d37069abe003ef139f3bb9a5f04($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0ac7f20e9de08dda74d7d5716455c77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'no';
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
                
                $buffer .= 'no';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6514d6aa5d81a9a4f55e29b386701c52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{>core/help_icon}}
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
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9c42710e3eb687f1dee00ac18ab6dd3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li>
                            {{name}}
                            {{#help}}
                                {{>core/help_icon}}
                            {{/help}}
                        </li>
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
                
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                // 'help' section
                $value = $context->find('help');
                $buffer .= $this->section6514d6aa5d81a9a4f55e29b386701c52($context, $indent, $value);
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c74390ddf3bc71fbd0c6afbe0ccd21d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{>core/help_icon}}
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
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB51f4664d1edcb218160609e48c7d602(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{timesplitting}}
                        {{#timesplittinghelp}}
                            {{>core/help_icon}}
                        {{/timesplittinghelp}}
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
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('timesplitting'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                // 'timesplittinghelp' section
                $value = $context->find('timesplittinghelp');
                $buffer .= $this->section1c74390ddf3bc71fbd0c6afbe0ccd21d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0abb70ae18750ddd8e47a6e9b7be6c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notdefined, tool_analytics';
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
                
                $buffer .= 'notdefined, tool_analytics';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf5268e4ff93a003e0739803ecb5f63d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> core/single_select }}
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
                
                if ($partial = $this->mustache->loadPartial('core/single_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5f0206ce258af4c1be318e3027092f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{.}}
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
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa368b13d36df95dfc90917d6f84e164(Mustache_Context $context, $indent, $value)
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
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a74909d6dff71ce4e46f102aaebe6e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <tr>
                <td>
                    <span class="target-name">{{target}}</span>
                    {{#targethelp}}
                        {{>core/help_icon}}
                    {{/targethelp}}
                </td>
                <td>
                    {{#enabled}}
                        {{#pix}}i/checked, core, {{#str}}yes{{/str}}{{/pix}}
                    {{/enabled}}
                    {{^enabled}}
                        {{#str}}no{{/str}}
                    {{/enabled}}
                </td>
                <td>
                    <ul>
                    {{#indicators}}
                        <li>
                            {{name}}
                            {{#help}}
                                {{>core/help_icon}}
                            {{/help}}
                        </li>
                    {{/indicators}}
                    </ul>
                </td>
                <td>
                    {{#timesplitting}}
                        {{timesplitting}}
                        {{#timesplittinghelp}}
                            {{>core/help_icon}}
                        {{/timesplittinghelp}}
                    {{/timesplitting}}
                    {{^timesplitting}}
                        {{#str}}notdefined, tool_analytics{{/str}}
                        {{#timesplittinghelp}}
                            {{>core/help_icon}}
                        {{/timesplittinghelp}}
                    {{/timesplitting}}
                </td>
                <td>
                    {{! models_list renderer is responsible of sending one or the other}}
                    {{#insights}}
                        {{> core/single_select }}
                    {{/insights}}
                    {{#noinsights}}
                        {{.}}
                    {{/noinsights}}
                </td>
                <td>
                    {{#actions}}
                        {{> core/action_menu}}
                    {{/actions}}
                </td>
            </tr>
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
                
                $buffer .= $indent . '            <tr>
';
                $buffer .= $indent . '                <td>
';
                $buffer .= $indent . '                    <span class="target-name">';
                $value = $this->resolveValue($context->find('target'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                // 'targethelp' section
                $value = $context->find('targethelp');
                $buffer .= $this->sectionAe627446a49ca666bd6263dd5f3c4c07($context, $indent, $value);
                $buffer .= $indent . '                </td>
';
                $buffer .= $indent . '                <td>
';
                // 'enabled' section
                $value = $context->find('enabled');
                $buffer .= $this->section3fb9326bd098ed77c2e9b9dfe0f3fce4($context, $indent, $value);
                // 'enabled' inverted section
                $value = $context->find('enabled');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionD0ac7f20e9de08dda74d7d5716455c77($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '                </td>
';
                $buffer .= $indent . '                <td>
';
                $buffer .= $indent . '                    <ul>
';
                // 'indicators' section
                $value = $context->find('indicators');
                $buffer .= $this->sectionA9c42710e3eb687f1dee00ac18ab6dd3($context, $indent, $value);
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                </td>
';
                $buffer .= $indent . '                <td>
';
                // 'timesplitting' section
                $value = $context->find('timesplitting');
                $buffer .= $this->sectionB51f4664d1edcb218160609e48c7d602($context, $indent, $value);
                // 'timesplitting' inverted section
                $value = $context->find('timesplitting');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        ';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionD0abb70ae18750ddd8e47a6e9b7be6c7($context, $indent, $value);
                    $buffer .= '
';
                    // 'timesplittinghelp' section
                    $value = $context->find('timesplittinghelp');
                    $buffer .= $this->section1c74390ddf3bc71fbd0c6afbe0ccd21d($context, $indent, $value);
                }
                $buffer .= $indent . '                </td>
';
                $buffer .= $indent . '                <td>
';
                // 'insights' section
                $value = $context->find('insights');
                $buffer .= $this->sectionCf5268e4ff93a003e0739803ecb5f63d($context, $indent, $value);
                // 'noinsights' section
                $value = $context->find('noinsights');
                $buffer .= $this->sectionE5f0206ce258af4c1be318e3027092f7($context, $indent, $value);
                $buffer .= $indent . '                </td>
';
                $buffer .= $indent . '                <td>
';
                // 'actions' section
                $value = $context->find('actions');
                $buffer .= $this->sectionEa368b13d36df95dfc90917d6f84e164($context, $indent, $value);
                $buffer .= $indent . '                </td>
';
                $buffer .= $indent . '            </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
