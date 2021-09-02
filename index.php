<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
            $blogSrc = file_get_contents('blog.md');
            $patterns = array(
                '/^###### (.*$)/im' => '<h6>$1</h6>',
                '/^### (.*$)/im' => '<h3>$1</h3>',
                '/^## (.*$)/im' => '<h2>$1</h2>',
                '/^# (.*$)/im' => '<h1>$1</h1>',
                '/\!\[(.*?)\]\((.*?)\)/im' => '<img src="$2" alt="$1" width="100%">',
                '/\[(.*?)\]\((.*?)\)/im' => '<a href="$2">$1</a>',
                '/---/' => '',
                '/(\s.*?\s\|)/' => '<td>$1</td>',
                '/(<td>.*<\/td>)/' => '<tr>$1</tr>',
                '/(<tr>.*<\/tr>)/m' => '<table>$1</table>',
                '/\|/' => '',
                '/\*\*(.*?)\*\*/im' => '<b>$1</b>',
                '/\*(.*?)\*/im' => '<i>$1</i>',
                '/- (.*)\n/' => '<li>$1</li>',
                '/`(.*?)`/' => '<code>$1</code>',
                '/(<li>.*<\/li>)/' => '<ul>$1</ul>',
                '/\n([^\n]+)\n/' => '<p>$1</p>',
                '/<p><\/p>/' => ''

            );
            foreach ($patterns as $pat => $rep){
                $blogSrc = preg_replace($pat, $rep, $blogSrc);
            }
        ?>
        <main id="maincontent">
            <?php
                echo $blogSrc;

            ?>
        </main>
    </body>
</html>