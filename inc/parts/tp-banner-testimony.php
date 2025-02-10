<?php // Testimony Banner


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
  'icon_classes' => 'fas fa-bullhorn',
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


?>

<button class="btn-main">Subscribe</button>