<?php

if (!defined("WIKINI_VERSION")) {
    die("acc&egrave;s direct interdit");
}
$lang = array(
  'ACEDITOR_SAVE' => _t('ACEDITOR_SAVE'),
  'ACEDITOR_FORMAT' => _t('ACEDITOR_FORMAT'),
  'ACEDITOR_TITLE1' => _t('ACEDITOR_TITLE1'),
  'ACEDITOR_TITLE2' => _t('ACEDITOR_TITLE2'),
  'ACEDITOR_TITLE3' => _t('ACEDITOR_TITLE3'),
  'ACEDITOR_TITLE4' => _t('ACEDITOR_TITLE4'),
  'ACEDITOR_TITLE5' => _t('ACEDITOR_TITLE5'),
  'ACEDITOR_BIGGER_TEXT' => _t('ACEDITOR_BIGGER_TEXT'),
  'ACEDITOR_HIGHLIGHT_TEXT' => _t('ACEDITOR_HIGHLIGHT_TEXT'),
  'ACEDITOR_SOURCE_CODE' => _t('ACEDITOR_SOURCE_CODE'),
  'ACEDITOR_BOLD_TEXT' => _t('ACEDITOR_BOLD_TEXT'),
  'ACEDITOR_ITALIC_TEXT' => _t('ACEDITOR_ITALIC_TEXT'),
  'ACEDITOR_UNDERLINE_TEXT' => _t('ACEDITOR_UNDERLINE_TEXT'),
  'ACEDITOR_STRIKE_TEXT' => _t('ACEDITOR_STRIKE_TEXT'),
  'ACEDITOR_LINE' => _t('ACEDITOR_LINE'),
  'ACEDITOR_LINK' => _t('ACEDITOR_LINK'),
  'ACEDITOR_LINK_PROMPT' => _t('ACEDITOR_LINK_PROMPT'),
  'ACEDITOR_LINK_TITLE' => _t('ACEDITOR_LINK_TITLE'),
  'ACEDITOR_HELP' => _t('ACEDITOR_HELP'),
);
$js = 'var aceditorlang = '.json_encode($lang);
$this->AddJavascript($js);
$this->AddJavascriptFile('tools/aceditor/libs/ACeditor.js');
