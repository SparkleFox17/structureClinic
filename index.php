<?php

function sortByOrder($a, $b) {
    return $a['order'] - $b['order'];
}

$configNav = array(
    array('name'=>'home', 'displayName'=>'Home', 'link'=>'#home', 'active'=>1, 'order'=>0),
    array('name'=>'about', 'displayName'=>'About', 'link'=>'#about', 'active'=>1, 'order'=>4),
    array('name'=>'services', 'displayName'=>'Services', 'link'=>'#services', 'active'=>1, 'order'=>1),
    array('name'=>'testimonials', 'displayName'=>'Testimonials', 'link'=>'#testimonials', 'active'=>0, 'order'=>4),
    array('name'=>'faq', 'displayName'=>'FAQs', 'link'=>'#faq', 'active'=>1, 'order'=>3),
    array('name'=>'contact', 'displayName'=>'Contact', 'link'=>'#contact', 'active'=>1, 'order'=>5),
);
usort($configNav, 'sortByOrder');

include('./template/header.php');
include('./template/nav.php');

foreach($configNav as $page){
    if($page['active']==1){
        include('./template/'.$page['name'].'.php');
    }
}

include('./template/footer.php');

?>



    

 






   
   