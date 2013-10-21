<?php $title = "ACM @ PSU - Events" ?>

<?php function head_content() { ?>
 <style type="text/css">
b a        {text-decoration: none;
        color: #57f;}
b a:visited {color: #57f;}

.box        {font-size: 10pt;}
  </style>

  <script type="text/javascript">
  </script>
<?php } ?>

<?php require_once(dirname(__FILE__).'/scripts/top.php') ?>
<h2>Events</h2>

 <div class="box"><b>Where and When</b><br />
  Events take place in Room 86-01 of Portland State's
  <a href="http://www.fap.pdx.edu/floorplans/detail2.php?buildingID=12">Fourth Avenue Building (FAB)</a>
  from 4:30pm to 5:30pm, unless circumstances dictate otherwise.</div>
<?php
   if(isset($_GET['event'])){
     render_event($_GET['event']);
   }
   else{
     list_events($events);
   }
?>

<?php require_once(dirname(__FILE__).'/scripts/bottom.php') ?>
