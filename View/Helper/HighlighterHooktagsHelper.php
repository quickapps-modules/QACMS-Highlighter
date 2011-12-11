<?php
class HighlighterHooktagsHelper extends AppHelper {
    public function sourcecode($atts, $content = null, $code = "") {
        $return = '';

        if (isset($atts['language']) && !empty($atts['language'])) {
            $return = "<div class=\"highlight-code\"><pre class=\"brush: {$atts['language']}\">";
            $return .= $content;
            $return .= '</pre></div>';
        }

        return $return;
    }
}