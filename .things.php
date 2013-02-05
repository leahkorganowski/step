<?php
    // entry point of Things
    // Things must be included at the first line of every php file. This is law.
    // DO NOT MODIFY REQUIRE/INCLUDE PLACEMENTS //
    
    $epoch = microtime ();
    ob_start();
    
    require_once ('.connect.php'); // require connection
    
    // put your constants here. they will be defined.
    // only objects with these defined types can be created.
    $things_types = array ('user' => 1,           'group' => 2,
                           'privilege' => 3,      'post' => 4,
                           'tag' => 5,            'category' => 6, 
                           'site' => 7,           'section' => 8,
                           'setting' => 9,        'page' => 10, 
                           'all_objects' => 9001);
    foreach ($things_types as $name=>$value) {
        define ($name, $value);        // positive
        define ("NEW_$name", -$value); // new constants, negative
        $name = strtoupper ($name);
        define ($name, $value);        // positive
        define ("NEW_$name", -$value); // new constants, negative
    }
    
    // require_once ('templates/templating-functions.php');
    
    require_once ('things/core.php'); // require core functions
    require_once ('things/objectgroup.php'); // require hierarchy API
    require_once ('things/obj.php'); // require object API
    // require_once ('things/gpvar.php'); // require GET/POST wrappers
    
    // extras
    // require_once ('things/user.php');
    // require_once ('things/group.php');
    // require_once ('things/privilege.php');
    // require_once ('things/auth.php');
    require_once ('things/post.php');
    require_once ('things/tag.php');
    // require_once ('things/setting.php');
    require_once ('things/view.php');
    require_once ('things/page.php');
    // require_once ('things/validator.php');
    
    /* example source for front page
    
    require_once ('.things.php');
    $og = new ObjectGroup (POST);
    // foreach ($og->GetObjects () as $post_id) {
    $tp = new Tag (FindObject ('home', TAG));
    foreach ($tp->GetPosts () as $post_id) {
        $post = new Post ($post_id);
        $tags = array (); // empty
        foreach ($post->GetTags() as $tag_id) {
            $tag = new Tag ($tag_id);
            $tags[] = $tag->GetProp ('name');
        }
        printf ("<div>
                    <h2>
                        <a href='/post/%d'>%s</a>
                    </h2>
                    <p>%s</p>
                    <p>%s</p>
                 </div>",
                $post->oid,
                $post->GetTitle(),
                $post->GetBody(),
                implode (',', $tags));
    }
    page_out (array ('title'=>"ohai"));
    
    */
?>
