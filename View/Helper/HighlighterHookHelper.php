<?php
class HighlighterHookHelper extends AppHelper {
	public function javascripts_alter(&$js) {
        if (!isset($this->request->params['admin'])) {
            $js['file'][] = '/highlighter/js/shCore.js';
            $js['file'][] = '/highlighter/js/shBrushCss.js';
            $js['file'][] = '/highlighter/js/shBrushJava.js';
            $js['file'][] = '/highlighter/js/shBrushJScript.js';
            $js['file'][] = '/highlighter/js/shBrushPhp.js';
            $js['file'][] = '/highlighter/js/shBrushPlain.js';
            $js['file'][] = '/highlighter/js/shBrushSql.js';
            $js['file'][] = '/highlighter/js/shBrushXml.js';
            $js['inline'][] = "
                SyntaxHighlighter.config.stripBrs = true;
				SyntaxHighlighter.defaults['wrap-lines'] = true;
				SyntaxHighlighter.all();";
        }
    }

    public function stylesheets_alter(&$css) {
        if (!isset($this->request->params['admin'])) {
            $theme = Configure::read('Modules.Highlighter.settings.theme');
            $theme = !$theme ? 'Default' : $theme;
            $css['all'][] = '/highlighter/css/shCore.css';
            $css['all'][] = "/highlighter/css/shTheme{$theme}.css";
            $css['inline'][] = 'code, div.line { text-shadow:none; }';
        }
    }
}