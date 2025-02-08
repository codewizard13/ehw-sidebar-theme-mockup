<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
function make_button(
  $text = 'Submit',
  $background_color = 'gray',
  $text_color = 'black',
  $full_width = false,
  $has_icon = false,
  $icon_str = '',
  $icon_right = true
) {

  $style = "background-color: $background_color;";
  $style .= "color: $text_color;";


  $html = "<button ";
  $html .= "$style >$text";
  $html .= "</button>";

  echo $html;
}

make_button();