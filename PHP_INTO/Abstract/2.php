<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Abstract2</title>
</head>
<body>
	<?php
		abstract class AbstractPageTemplate
		{
    	protected final function template()
    	{
        $result = $this->header();
        $result .= $this->article();
        $result .= $this->footer();
        return $result;
    	}
    	protected abstract function header();

    	protected abstract function article();
    	
    	protected abstract function footer();
    	public function render()
    	{
      	return $this->template();
    	}
		}
		class TextPage extends AbstractPageTemplate
		{
    	protected function header()
    	{
        return "PHP\n";
    	}
    	protected function article()
    	{
        return "PHP: Hypertext Preprocessor\n";
    	}
    	protected function footer()
    	{
        return "website is php.net\n";
    	}
		}
		class HtmlPage extends AbstractPageTemplate
		{
    	protected function header()
    	{
        return "<header>PHP</header>\n";
    	}
    	protected function article()
    	{
        return "<article>PHP: Hypertext Preprocessor</article>\n";
    	}
    	protected function footer()
    	{
        return "<footer>website is php.net</footer>\n";
    	}
    	public function render()
    	{
        $result = '<html>';
        $result .= $this->template();
        return $result.'</html>';
    	}
		}
		$html = new HtmlPage();
		echo $html->render();

		$text = new TextPage();
		echo $text->render();
	?>
</body>
</html>