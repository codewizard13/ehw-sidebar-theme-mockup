<?php // functions.php

function make_button($args) {

  $defaults = [
    'text' => 'Submit',
    'background_color' => 'gray',
    'text_color' => 'black',
    'full_width' => false,
    'has_icon' => false,
    'icon_classes' => '',
    'icon_side' => 'right'
  ];

  // Merge provided arguments with defaults
  $options = array_merge($defaults, $args);

  $text = $options['text'];
  $background_color = $options['background_color'];
  $text_color = $options['text_color'];
  $full_width = $options['full_width'];
  $has_icon = $options['has_icon'];
  $icon_classes = $options['icon_classes'];
  $icon_side = $options['icon_side'];


  // Init
  $icon_left = '';
  $icon_right = '';

  $style = "background-color: $background_color;";
  $style .= "color: $text_color;";

  if ($has_icon) {
    if ('left' == $icon_side) {
      $icon_left = "<i class='btn-icon-left $icon_classes'></i>";
      $icon_right = "";
    } else if ('right' == $icon_side) {
      $icon_right = "<i class='btn-icon-right $icon_classes'></i>";
      $icon_left = "";
    }
  }
  if ($full_width) {
    $style .= "width: 100%;";
  }

  $html = "<button class='btn-main'";
  $html .= "style='$style' >$icon_left$text$icon_right";
  $html .= "</button>";

  echo $html;
}