<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">


<?php
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

// make_button();

// make_button( 'Give Now!', 'purple', 'white', true, true, "bi bi-hand-index-fill", 'left' );
// make_button( 'Give Now!', 'purple', 'white', true, true, "bi bi-hand-index-fill", 'right' );
// make_button( 'Give Now!', 'purple', 'white', true, true, "fa fa-folder", 'left' );



$args = [
  'text' => 'Submit',
  'background_color' => 'gray',
  'text_color' => 'black',
  'full_width' => true,
  'has_icon' => false,
  'icon_classes' => '',
  'icon_side' => 'right'
];


make_button($args);


make_button( [
  'text' => 'Give Now!',
  'background_color' => 'purple',
  'text_color' => 'white',
  'full_width' => true,
  'has_icon' => true,
  'icon_classes' => 'bi bi-hand-index-fill',
  'icon_side' => 'left'
] );


make_button( [
  'text' => 'Sign Up!',
  'background_color' => 'navy',
  'text_color' => 'cornflowerblue',
  'full_width' => true,
  'has_icon' => true,
  'icon_classes' => 'fa fa-folder',
  'icon_side' => 'right'
] );