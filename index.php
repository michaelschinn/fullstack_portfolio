<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
        ?>
        <main id="maincontent">
            <?php
                $test = '[this is a test](www.this-is-a-test.com) This is more text [this is another test](www.this-is-another-test.com)';
                $test = preg_replace('/\[(.*?)\]\((.*?)\)/', '<a href="$2">$1</a>', $test);
                echo $test;
            ?>
        </main>
        <div id="blogContent">
            <?php
                $blogSrc = file_get_contents('blog.md');
                $patterns = array(
                    '/A-Za-z0-9(")A-Za-z0-9\./' => '&quot;',
                    "/A-Za-z0-9(')A-Za-z0-9/" => "&apos;",
                    '/^###### (.*$)/im' => '<h6>$1</h6>',
                    '/^### (.*$)/im' => '<h3>$1</h3>',
                    '/^## (.*$)/im' => '<h2>$1</h2>',
                    '/^# (.*$)/im' => '<h1>$1</h1>',
                    '/\!\[(.*?)\]\((.*?)\)/im' => '<img src="$2" alt="$1">',
                    '/\[(.*?)\]\((.*?)\)/im' => '<a href="$2">$1</a>',
                    '/\*\*(.*?)\*\*/im' => '<b>$1</b>',
                    '/\*(.*?)\*/im' => '<i>$1</i>',
                    '/- (.*)\n/' => '<li>$1</li>',
                    '/(<li>(.*)<\/li>)/' => '<ul>$1</ul>'

                );
                foreach ($patterns as $pat => $rep){
                    $blogSrc = preg_replace($pat, $rep, $blogSrc);
                }
                echo $blogSrc;

            ?>
        </div>
        <script type="text/javascript">
            /*let mainContent = document.getElementById('mainContent'),
            blogContent = document.getElementById('blogContent'),
            blog = document.createElement('article');
            mainContent.appendChild(blog);
            blog.textContent = blogContent.textContent;*/ 
        </script>
    </body>
</html>