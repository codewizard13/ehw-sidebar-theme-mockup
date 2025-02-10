<?php // functions.php

/**
 * Creates button
 * @param mixed $args
 * @return void
 */
function make_button($args) {

  $defaults = [
    'text' => 'Submit',
    'background_color' => 'gray',
    'text_color' => 'black',
    'full_width' => false,
    'has_icon' => false,
    'icon_classes' => '',
    'icon_side' => 'right',
    'button_classes' => '',
    'button_styles' => '',
    'href' => '',
    'link_target' => ''
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
  $button_classes = $options['button_classes'];
  $button_styles = $options['button_styles'];
  $href = $options['href'];
  $link_target = $options['link_target'];


  // Init
  $icon_left = '';
  $icon_right = '';

  $style = "background-color: $background_color;";
  $style .= "color: $text_color;";
  $style .= '' !== $button_styles ? "$button_styles;" : '';

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

  $html = "<button class='btn-main $button_classes'";
  $html .= "style='$style'>";
  $html .= '' !== $href ? "<a href='$href' target='$link_target'>" : '';
  $html .= "$icon_left$text$icon_right";
  $html .= '' !== $href ? "</a>" : '';
  $html .= "</button>";

  echo $html;
}