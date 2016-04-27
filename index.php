<?php

  require_once("../vogoo/vogoo.php");
  require_once("../vogoo/users.php");
  require_once("../vogoo/items.php");

  $aRating116 = @$vogoo->get_rating(1, 16);
  var_dump($aRating116); echo("<br/><br/>");

  $fAverageRating1 = $vogoo->member_average_rating(1);
  var_dump($fAverageRating1); echo("<br/><br/>");

  $fSimilarity1_88 = $vogoo_users->member_similarity(1, 88);
  var_dump($fSimilarity1_88); echo("<br/><br/>");
?>
