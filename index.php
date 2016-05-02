<?php

  require_once("../vogoo/vogoo.php");
  require_once("../vogoo/users.php");
  require_once("../vogoo/items.php");

  //get rating of user 1 for item 16
  $aRating116 = @$vogoo->get_rating(1, 16);
  echo('<strong>get rating of user 1 for item 16:</strong> ');
  var_dump($aRating116);
  echo("<br/><br/>");

  //get average rating of user 1
  $fAverageRating1 = $vogoo->member_average_rating(1);
  echo('<strong>get average rating of user 1:</strong> ');
  var_dump($fAverageRating1);
  echo("<br/><br/>");

  //get all rationgs of user 1
  //parameter: userid, sortbydate, sortbyrating, sortoorder=asc
  $aRatings1 = @$vogoo->member_ratings(1, 0, 1, -1);
  echo('<strong>get all rationgs of user 1:</strong> ');
  var_dump($aRatings1);
  echo("<br/><br/>");

  //similarity of two user (1 and 88)
  $fSimilarity1_88 = $vogoo_users->member_similarity(1, 88);
  echo('<strong>similarity of two user (1 and 88)</strong> ');
  var_dump($fSimilarity1_88);
  echo("<br/><br/>");

  //k similarities of user 1
  //parameter: userId, userAmount, returnedArrayOfUser
  $aSimilarities1 = array();
  $vogoo_users->member_k_similarities(1, 10, $aSimilarities1);
  echo('<strong>similarity of two user (1 and 88)</strong> ');
  var_dump($aSimilarities1);
  echo("<br/><br/>");

  //k recommendations of user 1
  $aRecommendations1 = array();
  @$vogoo_users->member_k_recommendations(1, 10, $aSimilarities1, $aRecommendations1);
  echo('<strong>recommendations of user 1:</strong> ');
  var_dump($aRecommendations1);
  echo("<br/><br/>");

  //remommendations for user 2
  //user, category(always 1), filter, amount
  $aRecommendationsItems2 =  $vogoo_items->member_get_recommended_items(2, 1, null, 10);
  echo('<strong>remommendations for user 2:</strong> ');
  var_dump($aRecommendationsItems2);
  echo("<br/><br/>");

  //reasons for the recommendation of item 590 to user 2
  $aReasons2_590 = $vogoo_items->member_get_reasons(2, 590);
  echo('<strong>reasons for the recommendation of item 590 to user 2:</strong> ');
  var_dump($aReasons2_590);
  echo("<br/><br/>");

  //linked items for item 16
  $aLinkedItems16 = $vogoo_items->get_linked_items(16);
  echo('<strong>linked items for item 16:</strong> ');
  var_dump($aLinkedItems16);
  echo("<br/><br/>");
?>
