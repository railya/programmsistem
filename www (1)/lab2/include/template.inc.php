<?php

/**
*@param string $templateName
*@param array $vars
*@return string
*/
/*function getView($templateName, $vars)
{
  $content='';
  $templateFilePath = TEMPLATE_DIR . "/" . $templateName;
  if (file_exists($templateFilePath))
      {
          $content = file_get_contents($templateFilePath);
          
          if (!empty($vars))
          {
              foreach($vars as $key => $value)
              {
                   $placeholder = '{$' . $key . '}';
                   $content = str_replace($placeholder, $value, $content);
              }
          }
      }
      return $content;    
}*/
 function getView($templateName, $vars)
 {
      $smarty = new Smarty();
      $smarty->setTemplateDir(TEMPLATE_DIR);
      $smarty->setCompileDir(TEMPLATE_C_DIR);
      
      $smarty->assign($vars);
      return $smarty->fetch($templateName);
 }

function buildLayout($templateName, $vars)
{
    $content = getView($templateName, $vars);
    
    $vars = array
    (
        'content' => $content
    );
    echo getView('layout.html', $vars);
}
