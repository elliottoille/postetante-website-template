<link rel="stylesheet" type="text/css" href="../styles/pages.css">
<link rel="stylesheet" type="text/css" href="../styles/pages/posts.css">
<head>
    <base target="_parent">
</head>
<body>
    <div class="flex-container">
        <?php
        function getPosts() { // $max_count) { 
            $posts = "../posts/";
            $files = array();
            // $count = 0;
            if (is_dir($posts)) {
                if ($dh = opendir($posts)) {
                    while ((($file = readdir($dh)) !== false)) { // and $count < $max_count) {
                        if (preg_match("/\..*$/", $file) == 0) {
                            $file = "posts/" . $file . "/post.html";
                            $files[] = $file;
                            // $count = $count + 1;
                        }
                    }
                }
            }
            return $files;
        }

        function generateCards() {
            $files = getPosts();
            foreach ($files as $file) {
                $file_fetch = "../" . $file;
                $contents = file_get_contents($file_fetch);
                $contents = preg_replace('/[\n\r]/','', $contents);
                //$contents = "<title>test 1 title</title><description>this is a test description</description><body><span>TEST 1 FILE TEXT CONTENTS</span></body>";
                preg_match("/<title>(.*?)<\/title>.*<description>(.*?)<\/description>/", $contents, $output);
                $title = $output[1];
                $description = $output[2];
                echo "<div id=\"post-link\"><a href=\"../../index.php?page=" . $file . "\"><div id=\"text-container\"><h2>" . $title . "</h2><span>" . $description . "</span></div></a></div>";
            }
        }
        
        generateCards();
        ?>
    </div>
</body>
