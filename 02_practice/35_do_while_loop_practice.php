<!DOCTYPE html>
<html>
    <head>
		<title>Your own do-while</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
        //write your do-while loop below
        $headCount = 0;
        $flipCount = 0;
        do {
            $flip = rand(0,1);
            $flipCount++;
            if ($flip == 0) {
                print "H ";
            } else {
                print "T ";
            }
        } while ($flipCount < 10);
    ?>
    </body>
</html>
