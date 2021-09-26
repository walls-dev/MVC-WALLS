<?php
$render('header');
?>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis error inventore totam cum? Facilis, earum distinctio ad quam non nostrum fugit inventore eius minima a, necessitatibus obcaecati, fugiat saepe modi.
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa aut quod nulla, praesentium totam deleniti animi facere inventore illo accusantium necessitatibus reprehenderit commodi placeat magni? Dolor ad alias dicta numquam.
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate deleniti velit dolores iusto, at consequuntur sed veritatis et dolor minus corrupti quis rem! Maxime quos voluptatem libero consequuntur exercitationem natus!
<?php foreach($posts as $post):?>
    <h3><?php echo $post['titulo'];?></h3>
<p><?php echo $post['corpo'];?></p>
<?php endforeach; ?>
<?php
$render('footer');
?>