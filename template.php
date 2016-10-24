<?php
function adminimal_cheminst_preprocess_html(&$vars) {
    drupal_add_css(path_to_theme().'/css/cheminst.css', array(
      'group' => CSS_THEME, 
      'preprocess' => FALSE,
      'weight' => 10
    ));
}

?>
