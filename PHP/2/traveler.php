<?php
  $riel = 2103942;
  $kyat = 19092;
  $krones = 109;
  $lek = 9094;

  echo "$riel $kyat $krones $lek";
  $riel_to_us = 0.00026;
  $kyat_to_riel = 0.00066;
  $krones_to_us = 0.11;
  $lek_to_us = 0.0090;

  $us_from_riel = $riel * $riel_to_us;
  echo "\nYour $riel riel is worth $us_from_riel USD.";

  // Kyat needs to go through Riel first based on your variables
  $us_from_kyat = $kyat * $kyat_to_riel * $riel_to_us;
  echo "\nYour $kyat kyat is worth $us_from_kyat USD.";

  // Krones to USD
  $us_from_krones = $krones * $krones_to_us;
  echo "\nYour $krones krones is worth $us_from_krones USD.";

  // Lek to USD
  $us_from_lek = $lek * $lek_to_us;
  echo "\nYour $lek lek is worth $us_from_lek USD.";

  $final_count = $us_from_riel + $us_from_kyat + $us_from_krones + $us_from_lek - 4;

    echo "\n\nFinal amount of USD after fees: $final_count";
  ?>