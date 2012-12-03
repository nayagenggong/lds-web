<div id="body">
    Blog Index
    <?php
    if (isset($content))
    {
        echo $content;
    }

    if (isset($pages))
    {
        foreach ($pages as $page)
        {
            //print_r($page);
            echo $page->title;
        }
    }
    
  
    ?>
</div>