<!-- main content start -->
<div id="personalCenter" class="mainContent">
    <div id="topNav">
        Manager System
        <span>>></span>
        <a href="#">Personal Info</a>
    </div>
    <div id="mainContent_content" class="pBox">
        <h2>Basic information</h2>
        <div class="pBox" id="info">
        欢迎您，<?php echo  $admin_real_name;?>
            <ul>
	           <li>
	           		<span></span>
	           </li>
                <li>
                    <span>此次登录时间:</span>
                    <span><?php echo $last_login_time;?></span>
                </li>
                <li>
	           		<span></span>
	           	</li>
                <li>
                    <span>此次登录ip:</span>
                    <span><?php echo $last_login_ip;?></span>
                </li>
                
            </ul>
        </div>
        <div class="btnBox2">
            <input type="button" value="Change Login Password" class="btn2"></input>
            <input type="button" value="Change Payment Password" class="btn2"></input>
        </div>
    </div>
</div>
<!-- main content end -->