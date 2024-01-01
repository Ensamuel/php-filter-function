



    <?php $bookItems = [
    [
        'author'=>'debra fine',
        'book'=>'fine art of small talk'
    ],
    [
        'author'=>'david goggins',
        'book' => 'tough people last'
    ],
    [
        'author'=>'david goggins',
        'book' => 'the brave and toughest suceed'
    ],
    [
        'author'=>'debra fine',
        'book'=>'science of effective communication'
    ],

];

function filterbyauthor($bookItems, $author){
    $filteredbook = [];
    foreach($bookItems as $bookItem){
        if($bookItem['author'] === $author){
            $filteredbook[] = $bookItem;
        }
    }
    return $filteredbook;
}

?>


<?php foreach(filterbyauthor($bookItems, 'david goggins') as $books):?>
    <h1><?php echo $books['author'] ?> </h1>

<?php endforeach?>
   

