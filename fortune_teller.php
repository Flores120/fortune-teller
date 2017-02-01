<?php

    $date = $_GET["date"];
    $fortune = fortune($date);

    function fortune($guess_fortune)
    {
      if ($guess_fortune == 1) {
      return "Capricorn - This will be a memorable, if somewhat strange day in the history of your career. You will be hearing a lot of strange things, some of them may even be true! You have the big idea, the next invention, a hot new plan that could shoot your career skyward.";
      }
      elseif ($guess_fortune == 2) {
      return "Aquaruis -  A friend or companion has offered to help you with that makeover you have been wanting, but their choices may be a little severe. You should accept only if you know you will be allowed to dictate the final look yourself. Otherwise, expect to be disappointed with the results. ";
      }
      elseif ($guess_fortune == 3) {
      return "Pisces -  Flashes of insight and inspiration may not be as reliable today. Avoid acting on impulse right now. Hold back until you are sure that your actions will have the desired effect. You may have sudden insights about your spiritual beliefs or religious background today.";
      }
      elseif ($guess_fortune == 4) {
      return "Aries -   Frustration and delays follow your every move today, and you will likely wish you had stayed in bed by the time the afternoon rolls around. You will find it is like swimming upstream to get anything done. If you need advice, don't be afraid to delegate some work to a friendly partner.";
      }
      elseif ($guess_fortune == 5) {
      return "Taurus -  A business proposition could come to you from a member of your family, or a coworker, most likely of the opposite sex. It is possible business and romance could mix today, but pursue that carefully, it's always dangerous, even when the aspects are this good.";
      }
      elseif ($guess_fortune == 6) {
      return "Gemeni -  You may be the center of attention today, people will be interested in hearing what you think or have to say. You may have an opportunity to be published or see your name in print, and you will find that writing, research, study and paperwork tasks go more smoothly.";
      }
      elseif ($guess_fortune == 7) {
      return "Cancer -  This is not a good day for any kind of home improvement project. You and your mate will likely be all thumbs. Hire a contractor. Keep your mental and physical energies focused on financial opportunities rather than physical challenges today.";
      }
      elseif ($guess_fortune == 8) {
      return "Leo -  This is not the best day to take a friend aside and confide your concerns, especially when those concerns involve their love life or their children. You may be tempted to offer unsolicited advice, and that is likely to backfire if you are not careful.";
      }
      elseif ($guess_fortune == 9) {
      return "Virgo -  A loved one or family member could have a health problem that is related to work stress. You can help by forcing them to cope on their own. Only when they feel enough pain are they going to get out of a self-destructive cycle. Don't be the family enabler!";
      }
      elseif ($guess_fortune == 10) {
      return "Libra -  If you want to connect with your significant other, you may consider buying them a new cell phone, or getting together for some kind of night-school class in a creative craft or hobby. Even a simple movie shared together could perk up your feelings this evening.";
      }
      elseif ($guess_fortune == 11) {
      return "Scorpio -  It is a challenging time for financial agreements and partnerships. If you have to sign any legal paperwork that involves your money, be sure to read the fine print carefully. You may want to re-visit some of the fine print or re-write a section or two of a contract.";
      }
      elseif ($guess_fortune == 12) {
      return "Sagitauruis -  If you are not traveling soon, it may be time to head back to school. You are thinking about a major long-term commitment to improve your education and expand your horizons, whether that is something formal, or something you do at home in your spare time.";
      }
      else {
        return "Enter a real month please";
      }
    }
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/styles.css">
     <title>Your Fortune</title>
   </head>
   <body>
     <div class="nav-bar">
       <div class="links">
         <ul>
           <li>Home</li>
           <li>About</li>
           <li>Contact</li>
         </ul>
       </div>
     </div>
     <div class="container fortune">
       <h3><?php echo $fortune; ?></h4>
     </div>
   </body>
 </html>
