<?php
function generateStory($singular_noun, $verb, $color, $distance_unit)
{
  $story = "\nThe $singular_noun are lovely, $color, and deep." . "\n" . 
  "But I have promises to keep," . "\n" . 
  "And $distance_unit to go before I $verb," . "\n" . 
  "And $distance_unit to go before I $verb.\n";
  return $story;
}

echo generateStory("Dog", "barks", "black", 100);
echo generateStory("Cat", "meows", "white", 56);
echo generateStory("turtle", "lumbers", "green", 89);