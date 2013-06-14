<!DOCTYPE html>
<html>
    <head>
		<title></title>
	</head>
	<body>
    <?php
      $boat = "Titanic";
      switch ($boat):
          case "Titanic":
              print "It is a boat.";
              break;
          case "S.S. Anne":
              print "Also a boat.";
              break;
          case "Boats":
              print "Boats.";
              break;
          default:
              print "No clue.";
      endswitch;
    ?>
	</body>
</html>
