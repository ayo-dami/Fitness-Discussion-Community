<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles/styles.css" />
</head>
<body>
  <div class="haut" style="height:70px;">
   Test
   <span class="useroptions">
    <ul id="menu-deroulant">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="http://e-fitness.org/forum/">Forum</a></li>  
    </ul>   
   </span>
    
    
    
  </div>
  <div style="height:70px; width:100%;">
    
    </div>
      <div style="height:400px; width:100%; background-image:url(http://e-fitness.org/images/banner.png); ">
   
    </div>
    
    
<div id="main" style="background-color:#fff;">
<div style="width:85%; margin:0 auto;">
<div style="width:60%; padding:3% 20%; float:left; background-color:;">
     <span style="font-size:25px; font-family: 'Lato', Calibri, Arial, sans-serif; font-size: 2.625em; font-weight: 300;">Welcome to Effective Fitness</span>
     
    <br/>
    <span style="font-family: 'Lato', Calibri, Arial, sans-serif;"><i>"Whatever is worth doing, is worth doing well"<br/> - Philip Stanhope.</i> </span>
    <br/>
    <br/>
     <p>
        <b>Effective Fitness</b> is fitness social platform, dedicated in helping motivate members with their goals. Also, Effective Fitness provides help, advice and insightful information about diet plans, gym schedule, workout routine and much more.
        Members and staff give great advice to everyone. You can ask questions and help others. Furthermore, events are organised to help you eat healthier and be more active. Which can inheriently help your goals   
     </p>
     <br/>
     <p></p><button>Read More</button> <button>Contact Us</button></p>
     
<div style="width:33.3%; padding:6% 0; float:left; background-color:;">
   <img src="images/fruits.jpg" width="250"/>
   <h2>Healthy Eating</h2>
   <p>Test</p>
</div>
<div style="width:33.3%; padding:6% 0;  float:left; background-color:;">
    <img src="images/sports.jpg" width="250"/>
    <h2>Sports</h2>
    <p>Test</p>
</div>
<div style="width:33.3%; padding:6% 0;  float:left; background-color:;">
    <img src="images/hug.jpg" width="250"/>
    <h2>Mental Health</h2>
    <p>Test</p>
</div>
</div>

        
<!-- <div style="width:10%; float:left; background-color:#fff;">
    <div style="background-color:#ccc;">
        <h2 style="background-color:#34495e; color:#fff;font-size:15px;">Latest Posts</h2>
    </div>
    <div style="padding:14px 17px; float:left; background-color:#fff;">
        <?php
        define("IN_MYBB", 1);
        require_once("./forum/global.php"); // Change this if needed
        $tlimit = 3; // How many titles you want
        ?>
        <?php
      $query = $db->query("
            SELECT t.*, u.username
            FROM mybb_threads t
            LEFT JOIN mybb_users u ON (u.uid=t.uid)
            WHERE 1=1 AND t.visible='1' AND t.closed NOT LIKE 'moved|%'
            ORDER BY t.lastpost DESC
            LIMIT 0, 3" // Change the last digit to how many recent post you want to be shown
        );

    $list = '';
    while($fetch = $db->fetch_array($query))
    {
        $list .= "<strong><a href=\"forum/showthread.php?tid={$fetch['tid']}\">".htmlspecialchars_uni($fetch['subject'])."</a></strong><br />";
        $poster = "<a href=\"forum/member.php?action=profile&uid=".$fetch['uid']."\">{$fetch['username']}</a>";
        $list .= "Created by: {$poster}<br />";
        $list .= "<i>" .$fetch['replies']. " Replies</i>";
        $list .= "<i> , " .$fetch['views']. " Views</i><br />";
        $list .= " (<i>Last post by: " .$fetch['lastposter']. "</i>)<br /><br/><hr><br />";
    
    }
    //output
    echo $list;
    ?>
    </div>
</div> -->
</div>
</div>


</body>
</html>
