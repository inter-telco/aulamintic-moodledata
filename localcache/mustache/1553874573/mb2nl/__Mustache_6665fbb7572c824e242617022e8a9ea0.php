<?php

class __Mustache_6665fbb7572c824e242617022e8a9ea0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<a id="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" href="';
        $value = $this->resolveValue($context->find('url'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '	class="mb2-clendar-link custom_id_f24fdc656fc4"
';
        $buffer .= $indent . '    data-container="body"
';
        $buffer .= $indent . '    data-toggle="popover"
';
        $buffer .= $indent . '    data-html="true"
';
        $buffer .= $indent . '    data-trigger="hover"
';
        $buffer .= $indent . '    data-placement="top"
';
        $buffer .= $indent . '    data-title="';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-content="';
        $value = $this->resolveValue($context->find('content'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" style="display:none;">';
        $value = $this->resolveValue($context->find('day'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<a ';
        $buffer .= ' href="';
        $value = $this->resolveValue($context->find('url'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' id="calendar-day-popover-link-';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-';
        $value = $this->resolveValue($context->find('year'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-';
        $value = $this->resolveValue($context->find('yday'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"';
        $buffer .= ' data-container="body"';
        $buffer .= ' class="mb2-clendar-link custom_id_a59e006be59d"';
        $buffer .= ' data-html="true"';
        $buffer .= ' data-trigger="hover"';
        $buffer .= ' data-placement="top"';
        $buffer .= ' data-title="';
        $blockFunction = $context->findInBlock('title');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('title'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
        }
        $buffer .= '"';
        $buffer .= ' data-alternate="';
        $blockFunction = $context->findInBlock('nocontent');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '" style="display:none;"';
        $buffer .= '>';
        $blockFunction = $context->findInBlock('day');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('day'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
        }
        $buffer .= '</a>
';
        $buffer .= $indent . '<div class="hidden">
';
        $buffer .= $indent . '    ';
        $blockFunction = $context->findInBlock('content');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section4139fe636b726c62b9b12b9e78fcd8c8($context, $indent, $value);

        return $buffer;
    }

    private function section4139fe636b726c62b9b12b9e78fcd8c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '


require([\'jquery\', \'theme_mb2nl/bootstrap\'], function($) {
    require([\'theme_mb2nl/bootstrap\'], function() {
        	
				
		var calendarLink = $(\'.mb2-clendar-link\');
		
				
		
		{{! ======================== Moodle 3.3 ======================== }}
		
		if ($(\'body\').hasClass(\'custom_id_f24fdc656fc4\'))
		{
			
			$(".mb2-clendar-link.custom_id_f24fdc656fc4").show();			
			$(\'#{{uniqid}}\').popover();	
					
		}
		
				
		
		{{! ======================== Moodle 3.4 ======================== }}
		
		if ($(\'body\').hasClass(\'custom_id_a59e006be59d\'))
		{
			
			$(".mb2-clendar-link.custom_id_a59e006be59d").show();
						
			var target = $("#calendar-day-popover-link-{{courseid}}-{{year}}-{{yday}}-{{uniqid}}");
		
			target.popover({
				content: function() {
					
					var source = target.next().find("> *:not(\'.hidden\')");
					var content = $(\'<div>\');
		
					if (source.length) 
					{
						content.html(source.clone(false));
					} else {
						content.html(target.data(\'alternate\'));
					}
		
					return content.html();
										
				}
			});	
						
		}
		
		
		
    });
});


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
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'require([\'jquery\', \'theme_mb2nl/bootstrap\'], function($) {
';
                $buffer .= $indent . '    require([\'theme_mb2nl/bootstrap\'], function() {
';
                $buffer .= $indent . '        	
';
                $buffer .= $indent . '				
';
                $buffer .= $indent . '		var calendarLink = $(\'.mb2-clendar-link\');
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '				
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '		if ($(\'body\').hasClass(\'custom_id_f24fdc656fc4\'))
';
                $buffer .= $indent . '		{
';
                $buffer .= $indent . '			
';
                $buffer .= $indent . '			$(".mb2-clendar-link.custom_id_f24fdc656fc4").show();			
';
                $buffer .= $indent . '			$(\'#';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\').popover();	
';
                $buffer .= $indent . '					
';
                $buffer .= $indent . '		}
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '				
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '		if ($(\'body\').hasClass(\'custom_id_a59e006be59d\'))
';
                $buffer .= $indent . '		{
';
                $buffer .= $indent . '			
';
                $buffer .= $indent . '			$(".mb2-clendar-link.custom_id_a59e006be59d").show();
';
                $buffer .= $indent . '						
';
                $buffer .= $indent . '			var target = $("#calendar-day-popover-link-';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-';
                $value = $this->resolveValue($context->find('year'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-';
                $value = $this->resolveValue($context->find('yday'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '");
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '			target.popover({
';
                $buffer .= $indent . '				content: function() {
';
                $buffer .= $indent . '					
';
                $buffer .= $indent . '					var source = target.next().find("> *:not(\'.hidden\')");
';
                $buffer .= $indent . '					var content = $(\'<div>\');
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '					if (source.length) 
';
                $buffer .= $indent . '					{
';
                $buffer .= $indent . '						content.html(source.clone(false));
';
                $buffer .= $indent . '					} else {
';
                $buffer .= $indent . '						content.html(target.data(\'alternate\'));
';
                $buffer .= $indent . '					}
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '					return content.html();
';
                $buffer .= $indent . '										
';
                $buffer .= $indent . '				}
';
                $buffer .= $indent . '			});	
';
                $buffer .= $indent . '						
';
                $buffer .= $indent . '		}
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '		
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
