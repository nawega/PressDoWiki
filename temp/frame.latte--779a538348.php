<?php

use Latte\Runtime as LR;

/** source: views/frame.latte */
final class Template779a538348 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html>
<head>
    <link href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($config['favicon_url'])) /* line 3 */;
		echo '" rel="SHORTCUT ICON">
    <meta charset="UTF-8">
    <meta name="author" content="PRASEOD-">
    <meta name="title" content="';
		echo LR\Filters::escapeHtmlAttr($config['sitename']) /* line 6 */;
		echo '">
    <meta name="description" content="';
		echo LR\Filters::escapeHtmlAttr($config['description']) /* line 7 */;
		echo '">
    <meta http-equiv="Content-Type" content="text/html;">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:type" content="website">
    <meta property="og:title" content="';
		echo LR\Filters::escapeHtmlAttr($config['sitename']) /* line 11 */;
		echo '">
    <meta property="og:description" content="';
		echo LR\Filters::escapeHtmlAttr($config['description']) /* line 12 */;
		echo '?>">
    <script>apiuri = \'/internal/preview\'</script>
    <link rel="stylesheet" href="/src/style/base.css">
    <script defer src="/src/script/main.js"></script>
    <!--script-- defer src="/src/script/main.js"></!--script-->
';
		if ($wiki['page']['view_name'] == 'wiki') /* line 17 */ {
			echo '        <link rel="stylesheet" href="/src/style/namumark.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/katex.min.css" integrity="sha384-zB1R0rpPzHqg7Kpt0Aljp8JPLqbXI3bhnPWROx27a9N0Ll6ZP/+DiW/UqRcLbRjq" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/katex.min.js" integrity="sha384-y23I5Q6l+B6vatafAwxRu/0oK/79VlbSz7Q9aiSZUvyWYIYsd+qj+o24G5ZU2zJz" crossorigin="anonymous"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/contrib/auto-render.min.js" integrity="sha384-kWPLUVMOks5AQFrykwIup5lo0m3iMkkHrD0uJ4H5cjeGihAutqP0yW0J6dpFiVkI" crossorigin="anonymous" onload="renderMathInElement(document.body);"></script>
        <script defer src="/src/script/namumark.js"></script>
';
		}
		echo '        <title> ';
		echo LR\Filters::escapeHtmlText($wiki['page']['title']) /* line 24 */;
		echo ' - ';
		echo LR\Filters::escapeHtmlText($config['sitename']) /* line 24 */;
		echo ' </title>
';
		if ($wiki['page']['view_name'] == 'edit') /* line 25 */ {
			echo '        <script>
        DocContent = ';
			echo LR\Filters::escapeJs(json_encode(['c' => $wiki['page']['data']['editor']['raw']], JSON_UNESCAPED_UNICODE)) /* line 27 */;
			echo '
        monacoVersion = ';
			echo LR\Filters::escapeJs($config['editor_version']) /* line 28 */;
			echo '
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($config['editor_version'])) /* line 30 */;
			echo '/min/vs/loader.js"></script>
        <script src="/src/script/monaco.js"></script>
';
		}
		$iterations = 0;
		foreach ($skinConfig['auto_css_targets']['*'] as $sf) /* line 33 */ {
			echo '        <link rel="preload" as="style" href="/skins/';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($skinName)) /* line 34 */;
			echo '/';
			echo LR\Filters::escapeHtmlAttr($sf) /* line 34 */;
			echo '">
        <link rel="stylesheet" href="/skins/';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($skinName)) /* line 35 */;
			echo '/';
			echo LR\Filters::escapeHtmlAttr($sf) /* line 35 */;
			echo '">
';
			$iterations++;
		}
		$iterations = 0;
		foreach ($skinConfig['auto_js_targets']['*'] as $sf) /* line 37 */ {
			echo '        <link rel="preload" as="script" href="/skins/';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($skinName)) /* line 38 */;
			echo '/';
			echo LR\Filters::escapeHtmlAttr($sf['path']) /* line 38 */;
			echo '">
        <script defer src="/skins/';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($skinName)) /* line 39 */;
			echo '/';
			echo LR\Filters::escapeHtmlAttr($sf['path']) /* line 39 */;
			echo '"></script>
';
			$iterations++;
		}
		echo '    ';
		echo ($this->filters->implode)($skinConfig['additional_heads']) /* line 41 */;
		echo '
</head>
<body>
    <div id="app">
        <div class="';
		echo LR\Filters::escapeHtmlAttr(($this->filters->implode)($skinConfig['body_classes'], ' ')) /* line 45 */;
		echo '">
            ';
		echo $body /* line 46 */;
		echo '
        </div>
    </div>
</body>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['sf' => '33, 37'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		
	}

}