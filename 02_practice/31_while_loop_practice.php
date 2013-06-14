<!DOCTYPE html>
<html>
    <head>
		<title>A loop of your own</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
    //Add while loop below
    $headCount = 0;
    $tailCount = 0;
    $flipCount = 0;
    while ($headCount != 5) {
        $flip = rand(0,1);
        $flipCount++;
        if ($flip == 0) {
            $headCount++;
            $tailCount = 0;
            print "H ";
        } else {
            $headCount = 0;
            $tailCount++;
            print "T ";
        }
    }
    print "<p>It took {$flipCount} flips to get {$headCount} heads!</p>";
    ?>
    </body>
</html>
