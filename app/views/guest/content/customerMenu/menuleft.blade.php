@include("guest.content.customerMenu.convertDay")
<article class="col-left">
        <div id="topcssmenu"></div>
        <div id='cssmenu'>
          <ul>
             <li><a href='{{URL::route("customerMenu")}}'><span>Home</span></a></li>
             <li><?php $date = new DateTime("+1 days"); ?><a href='{{URL::route("menu_date",$date->format('Y-m-d'))}}'><span><?php echo convertDay($date)." ".$date->format("d-m"); ?></span></a></li>
             <li><?php $date = new DateTime("+2 days"); ?><a href='{{URL::route("menu_date",$date->format('Y-m-d'))}}'><span><?php echo convertDay($date)." ".$date->format("d-m"); ?></span></a></li>
             <li><?php $date = new DateTime("+3 days"); ?><a href='{{URL::route("menu_date",$date->format('Y-m-d'))}}'><span><?php echo convertDay($date)." ".$date->format("d-m"); ?></span></a></li>
             <li><?php $date = new DateTime("+4 days"); ?><a href='{{URL::route("menu_date",$date->format('Y-m-d'))}}'><span><?php echo convertDay($date)." ".$date->format("d-m"); ?></span></a></li>
             <li><?php $date = new DateTime("+5 days"); ?><a href='{{URL::route("menu_date",$date->format('Y-m-d'))}}'><span><?php echo convertDay($date)." ".$date->format("d-m"); ?></span></a></li>
             <li><?php $date = new DateTime("+6 days"); ?><a href='{{URL::route("menu_date",$date->format('Y-m-d'))}}'><span><?php echo convertDay($date)." ".$date->format("d-m"); ?></span></a></li>
             <li><?php $date = new DateTime("+7 days"); ?><a href='{{URL::route("menu_date",$date->format('Y-m-d'))}}'><span><?php echo convertDay($date)." ".$date->format("d-m"); ?></span></a></li>
          </ul>
        </div>
        <div id="botcssmenu"></div>
        <div id="quangcao1"></div>
        <div id="quangcao2"></div>
</article>