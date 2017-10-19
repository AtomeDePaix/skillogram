<?php
    require ('header.php');
    require ('posts.php');
    $i=0;
?>
        <div class="content">
            <?php foreach ($posts as $post)  { 
            //Поиск постов
            //Если передана поисковая строка и в посте она не встречается, то пропустить этот пост
            if (
                !empty($_REQUEST['search']) 
               && 
                strpos($post['author']['username'], $_REQUEST['search']) === false
               && 
                strpos($post['text'], $_REQUEST['search']) === false
            ) {
                continue;
            }
            //Если ничего не найдено - вывести "Извините, ничего не нашлось"
            $i++;
            ?>
            <div class="post">
                <div>
                    <div class="avatar" >
                        <img src=<?php echo ($post['author']['avatar']);?> width="40" height="40">
                    </div>
                    <div class="author">
                         <?php echo ($post['author']['username']);?>
                    </div>
                    <div class="date">
                         <?php echo ($post['author']['post_time']);?>
                    </div>
                </div>
                <div class="post-photo">
                    <img src=<?php echo ($post['post_photo']);?> width="400" height="250">
                </div>
                <div style="height: 40px;">
                    <div class="like">
                         <img src=<?php echo ($heart); ?> width="25" height="25">
                    </div>
                    <div class="like_sum">
                    <?php echo ($post['like_sum']); ?>
                    </div>
                </div>
                <div class="post-text">
                     <?php echo ($post['text']); ?>
                        <?php foreach ($post['hashtags'] as $tag) { ?>
                        <a href="" ><?php echo ($tag);?></a>   
                     <?php }; ?>                    
               </div>
           </div>
           <?php }; ?>
        </div>
        <div class="pardon">
            <?php   
                if ($i==0) 
                    echo ('Извините, ничего не нашлось...');
            ?>
        </div>    
        <?php
        require ('footer.php');
        ?>





