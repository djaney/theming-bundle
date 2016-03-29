<?php namespace Djaney\ThemingBundle\ThemeSelector;
use Symfony\Component\HttpFoundation\Response;
class ThemeSelectorService{
    protected $templating;
    protected $baseTheme;
    public function __construct($templating, $baseTheme){
        $this->templating = $templating;
        $this->baseTheme = $baseTheme;
    }


    /**
     * generates a view based on the theme selected
     * @param  string $template  [description]
     * @param  string $themeName [description]
     * @return string            [description]
     */
    public function template($template, $themeName = null, $data= []){
        if($themeName===null){
            $themeName = $this->baseTheme;
        }else if(!$this->templating->exists($themeName.'::'.$template)){
            $themeName = $this->baseTheme;
        }
        $html = $this->templating->render($themeName.'::'.$template, $data);
        $response = new Response($html);
        return $response;
    }
}
