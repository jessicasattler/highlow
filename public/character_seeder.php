INSERT INTO characters()
VALUES(),
(),
(),
(),
(),
();


Buying a car:

function nbMonths($startPriceOld, $startPriceNew, $savingPerMonth, $percentLossByMonth) {
    // we want to know how many months it will take him to buy the new car
    //and how much money he will have left after he buys the new car
    
    if($startPriceOld > $startPriceNew){
      $monthsAndMoney = [0,0];
      
      $moneyLeftOver = $startPriceOld - $startPriceNew;
      
      $monthsToWait = 0;
      
      $monthsAndMoney[0] = $monthsToWait;
      
      $monthsAndMoney[1] = $moneyLeftOver;
      
      return $monthsAndMoney;
    }
    
    $oldCarPricePerMonth = $startPriceOld - ($startPriceOld * .015);
    
    $moneyToBuyNewCar = $savingPerMonth + $oldCarPricePerMonth;
    
    $newCarPriceOverTime = $startPriceNew - $moneyToBuyNewCar;
    
    
    
    
    
}