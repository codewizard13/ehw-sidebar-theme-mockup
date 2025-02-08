<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">



<?php
function make_button(
  $text = 'Submit',
  $background_color = 'gray',
  $text_color = 'black',
  $full_width = false,
  $has_icon = false,
  $icon_classes = '',
  $icon_side = 'right'
) {

  // Init
  $icon_left = '';
  $icon_right = '';

  $style = "background-color: $background_color;";
  $style .= "color: $text_color;";

  if ($has_icon) {
    if ('left' == $icon_side) {
      $icon_left = "<i class='btn-icon-left $icon_classes'></i>";
      $icon_right = "";
    } else {
      $icon_right = "<i class='btn-icon-left $icon_classes'></i>";
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

make_button();

make_button( 'Give Now!', 'purple', 'white', true, true, "bi bi-hand-index-fill", 'left' );
make_button( 'Give Now!', 'purple', 'white', true, true, "bi bi-hand-index-fill", 'right' );
make_button( 'Give Now!', 'purple', 'white', true, true, "fa fa-folder", 'left' );