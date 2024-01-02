
<?php $bookItems = [
    [
        'author'=>'debra fine',
        'book'=>'fine art of small talk',
        'year'=> '1950'
    ],
    [
        'author'=>'david goggins',
        'book' => 'tough people last',
        'year'=> '1951'
    ],
    [
        'author'=>'david goggins',
        'book' => 'the brave and toughest suceed',
        'year'=> '1961'
    ],
    [
        'author'=>'debra fine',
        'book'=>'science of effective communication',
        'year'=> '1962'
    ],

];

function filter($bookItems, $key, $value){
    $filteredItems = [];
    foreach($bookItems as $bookItem){
        if($bookItem[$key]===$value){
            $filteredItems[] = $bookItem;
        }
    }
    return $filteredItems;
  

}
    $filteredbooks = filter($bookItems, 'author', 'debra fine')

?>

<?php foreach($filteredbooks as $bookItem) :?>
    
  <h1>  <?= $bookItem['author']?> <?= $bookItem['book']?> <?= $bookItem['year']?></h1>
 
  <?php endforeach;?>



   

