<!DOCTYPE html>
<html>
	<head>
		<title>会员注册</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="shortcut icon" href="<?php echo base_url('zeros/web/images/icon.png'); ?>" type="image/x-icon" />
		<link href="<?php echo base_url('zeros/web/css/sign.css'); ?>" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url('zeros/web/css/css.css'); ?>" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url('zeros/web/js/cropper/cropper.css'); ?>" rel="stylesheet" type="text/css" media="all" />
		
		<script src="<?php echo base_url('zeros/web/js/jquery-2.1.4.min.js'); ?>"></script>
		<script src="<?php echo base_url('zeros/web/js/layer/layer.js'); ?>"></script>
		<script src="<?php echo base_url('zeros/web/js/cropper/cropper.js'); ?>"></script>
	</head>
	<body class="sign-body">
		<div class="top" style="text-align: center;">
            <div style="width: 985px;height: 134px;margin: 0 auto;text-align: right;">
                <?php $login = get_user_info();?>
                <?php if(empty($login)){?>
                <div class="top-link">
                    <a href="<?php echo site_url('web/signup')?>">注册</a>
                    <a href="<?php echo site_url('web/login')?>">登录</a>
                </div>
                <?php }?>
            </div>
        </div>
		<!-- 导航栏 -->
		<div class="nav" style="text-align: center;">
            <div style="width: 80%;text-align: center;margin: 0 auto;">
              <UL style="display: table;width: auto;">
                <LI><a href="<?php echo site_url('web/index'); ?>">首页<I>HOME</I></a></LI>
                <LI><a href="<?php echo site_url('web/search'); ?>">搜索<I>SEARCH SHOW</I></a></LI>
                <LI><a href="<?php echo site_url('web/stories'); ?>">成功故事<I>SUCCSEE STORIES</I></a></LI>
                <LI><a href="<?php echo site_url('web/showcase'); ?>">活动推荐<I>LOVE SHOWCASE</I></a></LI>
                <!-- <LI><a href="<?php echo site_url('web/video'); ?>">视频展示<I>VIDEO SHOW</I></a></LI>
                <LI><a href="<?php echo site_url('web/signup'); ?>">会员注册<I>SIGN UP</I></a></LI> -->
                <LI><a href="<?php echo site_url('web/company'); ?>">公司简介<I>COMPANY PROFILE</I></a></LI>
              </UL>
            </div>
        </div>
		<!-- <div class="sign-top-buttons">
		<a href="index.html">登录</a><a href="signup.html" class="sign-active">注册</a>
		</div> 
		<br>
		<br> -->
		<div style="height: 50px;width: 100%;"></div>
		<div class="zy" style="text-align: center;">
          <div class="zy_bt">
            <div class="bt_01"></div>
            <div class="bt_02">会员注册</div>
            <div class="bt_03"></div>
            <div class="bt_04"></div>
            <div class="bt_05"></div>
          </div>
        </div>
		<!-- 注册信息 -->
		<div class="middle-part">
			<div class="reg-box-left">
				<div class="reg-title-tip">请认真填写真实信息，即将为您开启寻爱之旅。</div>
				<form id="register_form" action="<?php echo site_url('web/signup/register'); ?>" method="post" onsubmit="return check_form(this);">
				<div class="reg-form">
					<!-- 性别 -->
					<div class="col-form">
						<label>我的性别：</label>
						<div class="za-radio" id="sex_radio">
							<input type="radio" name="sex" value="1" id="sex_1" checked=""><label for="sex_1" class="label_m">男</label>
							<input type="radio" name="sex" value="2" id="sex_0"><label for="sex_0" class="label_w">女</label>
						</div>
						<b class="check_tip" id="sex_tip"></b>
					</div>
					<!-- 生日 -->
					<div class="col-form">
						<label>出生日期：</label>
						<div class="za-item-selector" id="birthday_seletor">
							<dl class="year-selector">
								<dt><em class="cData"></em><em class="iName">年</em></dt>
								<input id="birth_year_input" value="" type="hidden" name="birth_year">
								<dd style="display: none;"></dd>
							</dl>
							<dl class="month-selector">
								<dt><em class="cData"></em><em class="iName">月</em></dt>
								<input id="birth_month_input" value="" type="hidden" name="birth_month">
								<dd style="display: none;">
								<p><a data-value="1" href="javascript:;">1</a><a data-value="2" href="javascript:;">2</a><a data-value="3" href="javascript:;">3</a><a data-value="4" href="javascript:;">4</a><a data-value="5" href="javascript:;">5</a><a data-value="6" href="javascript:;">6</a><a data-value="7" href="javascript:;">7</a><a data-value="8" href="javascript:;">8</a><a data-value="9" href="javascript:;">9</a><a data-value="10" href="javascript:;">10</a><a data-value="11" href="javascript:;">11</a><a data-value="12" href="javascript:;">12</a></p></dd>
							</dl>
							<dl class="day-selector" style="position: relative;">
								<dt><em class="cData"></em><em class="iName">日</em></dt>
								<input id="birth_date_input" value="" type="hidden" name="birth_date">
								<dd style="display: none;"></dd>
							</dl>
						</div>
						<b class="check_tip" id="birth_tip"></b>
					</div>
					<!-- 地区 -->
					<div class="col-form">
						<label>工作地区：</label>
						<div class="za-item-selector" id="area_seletor">
							<dl class="province-selector">
								<dt><em class="cData"></em><em class="iName">省</em></dt>
								<input value="" type="hidden" name="province" id="province_input" />
								<dd style="display: none;">
								</dd>
							</dl>
							<span class="label"></span>
							<dl class="city-selector">
								<dt><em class="cData"></em><em class="iName">市</em></dt>
								<input value="" type="hidden" name="city" id="city_input">
								<dd style="display: none;">
    								请选择所在的省份
								</dd>
							</dl>
							<span class="label"></span>
							<dl class="county-selector">
								<dt><em class="cData"></em><em class="iName">区</em></dt>
								<input value="" type="hidden" name="country" id="country_input">
								<dd style="display: none;">
    								请选择所在的城市
								</dd>
							</dl>
						</div>
						<b class="check_tip" id="area_tip"></b>
					</div>
					<!-- 姻姻-->
					<div class="col-form">
						<label>婚姻状况：</label>
						<div class="za-radio marry-radio" id="MaritalStatus">
							<input type="radio" name="marriage" value="1" id="mar_0" checked=""><label for="mar_0">未婚</label>
							<input type="radio" name="marriage" value="2" id="mar_1"><label for="mar_1">离异</label>
							<input type="radio" name="marriage" value="3" id="mar_2"><label for="mar_2">丧偶</label>
						</div>
						<b class="check_tip tip_br" id="marriage_tip"></b>
					</div>
					<!-- 身高 -->
					<div class="col-form">
						<label>我的身高：</label>
						<div class="za-item-selector" id="HeightSelector">
							<input name="height" value="" type="hidden" id="height_input">
							<dl class="height-selector">
								<dt><em class="cData"></em><em class="iName"></em></dt>
								<dd style="display: none;">
									<ul class="height-list">
										<li><a href="javascript:;" will="130">130厘米</a></li>
										<li><a href="javascript:;" will="131">131厘米</a></li>
										<li><a href="javascript:;" will="132">132厘米</a></li>
										<li><a href="javascript:;" will="133">133厘米</a></li>
										<li><a href="javascript:;" will="134">134厘米</a></li>
										<li><a href="javascript:;" will="135">135厘米</a></li>
										<li><a href="javascript:;" will="136">136厘米</a></li>
										<li><a href="javascript:;" will="137">137厘米</a></li>
										<li><a href="javascript:;" will="138">138厘米</a></li>
										<li><a href="javascript:;" will="139">139厘米</a></li>
										<li><a href="javascript:;" will="140">140厘米</a></li>
										<li><a href="javascript:;" will="141">141厘米</a></li>
										<li><a href="javascript:;" will="142">142厘米</a></li>
										<li><a href="javascript:;" will="143">143厘米</a></li>
										<li><a href="javascript:;" will="144">144厘米</a></li>
										<li><a href="javascript:;" will="145">145厘米</a></li>
										<li><a href="javascript:;" will="146">146厘米</a></li>
										<li><a href="javascript:;" will="147">147厘米</a></li>
										<li><a href="javascript:;" will="148">148厘米</a></li>
										<li><a href="javascript:;" will="149">149厘米</a></li>
										<li><a href="javascript:;" will="150">150厘米</a></li>
										<li><a href="javascript:;" will="151">151厘米</a></li>
										<li><a href="javascript:;" will="152">152厘米</a></li>
										<li><a href="javascript:;" will="153">153厘米</a></li>
										<li><a href="javascript:;" will="154">154厘米</a></li>
										<li><a href="javascript:;" will="155">155厘米</a></li>
										<li><a href="javascript:;" will="156">156厘米</a></li>
										<li><a href="javascript:;" will="157">157厘米</a></li>
										<li><a href="javascript:;" will="158">158厘米</a></li>
										<li><a href="javascript:;" will="159">159厘米</a></li>
										<li><a href="javascript:;" will="160">160厘米</a></li>
										<li><a href="javascript:;" will="161">161厘米</a></li>
										<li><a href="javascript:;" will="162">162厘米</a></li>
										<li><a href="javascript:;" will="163">163厘米</a></li>
										<li><a href="javascript:;" will="164">164厘米</a></li>
										<li><a href="javascript:;" will="165">165厘米</a></li>
										<li><a href="javascript:;" will="166">166厘米</a></li>
										<li><a href="javascript:;" will="167">167厘米</a></li>
										<li><a href="javascript:;" will="168">168厘米</a></li>
										<li><a href="javascript:;" will="169">169厘米</a></li>
										<li><a href="javascript:;" will="170">170厘米</a></li>
										<li><a href="javascript:;" will="171">171厘米</a></li>
										<li><a href="javascript:;" will="172">172厘米</a></li>
										<li><a href="javascript:;" will="173">173厘米</a></li>
										<li><a href="javascript:;" will="174">174厘米</a></li>
										<li><a href="javascript:;" will="175">175厘米</a></li>
										<li><a href="javascript:;" will="176">176厘米</a></li>
										<li><a href="javascript:;" will="177">177厘米</a></li>
										<li><a href="javascript:;" will="178">178厘米</a></li>
										<li><a href="javascript:;" will="179">179厘米</a></li>
										<li><a href="javascript:;" will="180">180厘米</a></li>
										<li><a href="javascript:;" will="181">181厘米</a></li>
										<li><a href="javascript:;" will="182">182厘米</a></li>
										<li><a href="javascript:;" will="183">183厘米</a></li>
										<li><a href="javascript:;" will="184">184厘米</a></li>
										<li><a href="javascript:;" will="185">185厘米</a></li>
										<li><a href="javascript:;" will="186">186厘米</a></li>
										<li><a href="javascript:;" will="187">187厘米</a></li>
										<li><a href="javascript:;" will="188">188厘米</a></li>
										<li><a href="javascript:;" will="189">189厘米</a></li>
										<li><a href="javascript:;" will="190">190厘米</a></li>
										<li><a href="javascript:;" will="191">191厘米</a></li>
										<li><a href="javascript:;" will="192">192厘米</a></li>
										<li><a href="javascript:;" will="193">193厘米</a></li>
										<li><a href="javascript:;" will="194">194厘米</a></li>
										<li><a href="javascript:;" will="195">195厘米</a></li>
										<li><a href="javascript:;" will="196">196厘米</a></li>
										<li><a href="javascript:;" will="197">197厘米</a></li>
										<li><a href="javascript:;" will="198">198厘米</a></li>
										<li><a href="javascript:;" will="199">199厘米</a></li>
										<li><a href="javascript:;" will="200">200厘米</a></li>
										<li><a href="javascript:;" will="201">201厘米</a></li>
										<li><a href="javascript:;" will="202">202厘米</a></li>
										<li><a href="javascript:;" will="203">203厘米</a></li>
										<li><a href="javascript:;" will="204">204厘米</a></li>
										<li><a href="javascript:;" will="205">205厘米</a></li>
										<li><a href="javascript:;" will="206">206厘米</a></li>
										<li><a href="javascript:;" will="207">207厘米</a></li>
										<li><a href="javascript:;" will="208">208厘米</a></li>
										<li><a href="javascript:;" will="209">209厘米</a></li>
										<li><a href="javascript:;" will="210">210厘米</a></li>
										<li><a href="javascript:;" will="211">211厘米</a></li>
										<li><a href="javascript:;" will="212">212厘米</a></li>
										<li><a href="javascript:;" will="213">213厘米</a></li>
										<li><a href="javascript:;" will="214">214厘米</a></li>
										<li><a href="javascript:;" will="215">215厘米</a></li>
										<li><a href="javascript:;" will="216">216厘米</a></li>
										<li><a href="javascript:;" will="217">217厘米</a></li>
										<li><a href="javascript:;" will="218">218厘米</a></li>
										<li><a href="javascript:;" will="219">219厘米</a></li>
										<li><a href="javascript:;" will="220">220厘米</a></li>
										<li><a href="javascript:;" will="221">221厘米</a></li>
										<li><a href="javascript:;" will="222">222厘米</a></li>
										<li><a href="javascript:;" will="223">223厘米</a></li>
										<li><a href="javascript:;" will="224">224厘米</a></li>
										<li><a href="javascript:;" will="225">225厘米</a></li>
										<li><a href="javascript:;" will="226">226厘米</a></li>
									</ul>
								</dd>
							</dl>
						</div>
						<b class="check_tip" id="height_tip"></b>
					</div>
					<!-- 学历 -->
					<div class="col-form">
						<label>我的学历：</label>
						<div class="za-item-selector" id="EducationSelector">
							<input name="education" value="" type="hidden" id="education_input">
							<dl class="education-selector">
								<dt><em class="cData"></em><em class="iName"></em></dt>
								<dd style="display: none;">
									<ul class="education-list">
										<li><a href="javascript:;" will="1">高中中专及以下</a></li>
										<li><a href="javascript:;" will="2">大专</a></li>
										<li><a href="javascript:;" will="3">本科</a></li>
										<li><a href="javascript:;" will="4">双学士</a></li>
										<li><a href="javascript:;" will="5">硕士</a></li>
										<li><a href="javascript:;" will="6">博士</a></li>
										<li><a href="javascript:;" will="7">博士后</a></li>
									</ul>
								</dd>
							</dl>
						</div>
						<b class="check_tip" id="education_tip"></b>
					</div>
					<!-- 月薪 -->
					<div class="col-form">
						<label>我的月薪：</label>
						<div class="za-item-selector" id="SalarySelector">
							<input name="salary" value="" type="hidden" id="salary_input">
							<dl class="salary-selector">
								<dt><em class="cData"></em><em class="iName"></em></dt>
								<dd style="display: none;">
									<ul class="salary-list">
										<li><a href="javascript:;" will="1">2000元以下</a></li>
										<li><a href="javascript:;" will="2">2000-5000元</a></li>
										<li><a href="javascript:;" will="3">5000-10000元 </a></li>
										<li><a href="javascript:;" will="4">10000-20000元 </a></li>
										<li><a href="javascript:;" will="5">20000-50000元 </a></li>
										<li><a href="javascript:;" will="6">50000元以上 </a></li>
									</ul>
								</dd>
							</dl>
						</div>
						<b class="check_tip" id="salary_tip"></b>
					</div>
					<div class="form-line"></div>
					<!-- 其他 -->
					<div class="col-form">
						<label>我的昵称：</label>
						<div class="za-item-selector">
							<input name="nickname" type="text" id="nickname_input">
						</div>
						<b class="check_tip" id="nickname_tip"></b>
					</div>
					<div class="col-form">
						<label>我的手机号：</label>
						<div class="za-item-selector">
							<input name="phone" type="text" id="phone_input">
						</div>
						<b class="check_tip" id="phone_tip"></b>
					</div>
					<div class="col-form">
						<label>我的密码：</label>
						<div class="za-item-selector">
							<input name="password" type="password" id="password_input">
						</div>
						<b class="check_tip" id="password_tip"></b>
					</div>
					<div class="col-form">
						<label>确认密码：</label>
						<div class="za-item-selector">
							<input name="repassword" type="password" id="repassword_input">
						</div>
						<b class="check_tip" id="repassword_tip"></b>
					</div>
					<div class="form-line"></div>
					<div class="col-form">
						<label>我的照片：</label>
						<div class="za-item-selector">
							<button id="photo_input" type="button" style="width: 260px;text-align: left;background: #F8F8F8 none repeat scroll 0 0;border: 1px solid #c9c9c9;border-radius: 4px;cursor: pointer;height: 29px;padding-left: 15px;position: relative;overflow: hidden;float: left;color: #666;font: 12px/1.5 tahoma,arial,ËÎÌå;">+ 点击上传照片</button>
							<input type="hidden" id="photo_up" name="photo">
						</div>
						<b class="check_tip" id="photo_tip"></b>
					</div>
					<div class="col-form">
						<label>自我介绍：</label>
						<div class="za-item-selector">
							<textarea name="intro" id="intro_input"></textarea>
						</div>
						<b class="check_tip" id="intro_tip"></b>
					</div>
					<br><br><br><br><br><br><br>
					<input class="reg-btn" type="submit" value="免费注册" id="register_sub_btn">
					<div class="form-line"></div>
				</div>
				</form>
			</div>
		</div>
		
        <div class="tiao"></div>
        
        <!-- 尾部 -->
        <div class="footer" style="height: 155px;">
          <div class="footer_01" style="height: 155px;">
            <div class="footer1" style="height: 60px;">
              <div class="f_top" style="float: right;"><a href="#top"><img src="<?php echo base_url('zeros/web/images/ban-7_30_02.jpg'); ?>" /></a></div>
            </div>
            <div class="footer3">
              <P>Copyright © 20xx-2017 版权所有：北京航天亿成信息咨询服务中心</P>
            </div>
          </div>
        </div>
		<script>
		$(function(){
			$(document).ready(function(e){
				$(':input','#register_form').not(':button, :submit, :reset, :radio').val('');
			});
		    var formData = new FormData($('#register_form')[0]);
			
			//域点击
			$(document).click(function(e){
				if(e.which == 1){ //鼠标左键
    				var dom = $(e.target).parent();
    				if($(e.target).hasClass('iName') || $(e.target).hasClass('cData')){
    					dom = $(e.target).parent().parent();
    				}
    				//选年
    				var year_flag = $(dom).hasClass('year-selector');
    				if(year_flag){
    					$(dom).addClass('za-item-selector-hover');
    					$(dom).find('dd').show();
    					$(dom).css('position', 'relative');
    				}else{
    					$('.year-selector').removeClass('za-item-selector-hover');
    					$('.year-selector').find('dd').hide();
    					$('.year-selector').css('position', '');
    				}
    				if($(e.target).parent().parent().parent().hasClass('year-selector')){
    					$('#birth_year_input').val($(e.target).data('value'));
    					$('.year-selector').find('dt').find("em[class='cData']").html($(e.target).data('value'));
    					$('#birth_tip').html('');
    				}
    				
    				//选月
    				var month_flag = $(dom).hasClass('month-selector');
    				if(month_flag){
    					$(dom).addClass('za-item-selector-hover');
    					$(dom).find('dd').show();
    					$(dom).css('position', 'relative');
    				}else{
    					$('.month-selector').removeClass('za-item-selector-hover');
    					$('.month-selector').find('dd').hide();
    					$('.month-selector').css('position', '');
    				}
    				if($(e.target).parent().parent().parent().hasClass('month-selector')){
    					$('#birth_month_input').val($(e.target).data('value'));
    					$('.month-selector').find('dt').find("em[class='cData']").html($(e.target).data('value'));
    					$('.day-selector').find('dt').find("em[class='cData']").html('');
    					var sel_year = parseInt($('.year-selector').find('dt').find("em[class='cData']").html());
    					sel_year = isNaN(sel_year) ? new Date().getFullYear() : sel_year;
    					var odate = new Date(sel_year, $(e.target).data('value'), 0);
    					data_loading.day(odate.getDate());
    				}
    				
    				//选日
    				var day_flag = $(dom).hasClass('day-selector');
    				if(day_flag){
    					var sel_year = parseInt($('.year-selector').find('dt').find("em[class='cData']").html());
    					sel_year = isNaN(sel_year) ? new Date().getFullYear() : sel_year;
    					var sel_month = parseInt($('.month-selector').find('dt').find("em[class='cData']").html());
    					sel_month = isNaN(sel_month) ? new Date().getMonth()+1 : sel_month;
    					var odate = new Date(sel_year, sel_month, 0);
    					data_loading.day(odate.getDate());
    					$(dom).addClass('za-item-selector-hover');
    					$(dom).find('dd').show();
    					$(dom).css('position', 'relative');
    				}else{
    					$('.day-selector').removeClass('za-item-selector-hover');
    					$('.day-selector').find('dd').hide();
    					$('.day-selector').css('position', '');
    				}
    				if($(e.target).parent().parent().parent().hasClass('day-selector')){
    					$('#birth_date_input').val($(e.target).data('value'));
    					$('.day-selector').find('dt').find("em[class='cData']").html($(e.target).data('value'));
    				}
    				
    				//选省
    				var province_flag = $(dom).hasClass('province-selector');
    				if(province_flag){
    					$(dom).addClass('za-item-selector-hover');
    					$(dom).find('dd').show();
    					$(dom).css('position', 'relative');
    				}else{
    					$('.province-selector').removeClass('za-item-selector-hover');
    					$('.province-selector').find('dd').hide();
    					$('.province-selector').css('position', '');
    				}
    				if($(e.target).parent().parent().parent().hasClass('province-selector')){
    					$('#province_input').val($(e.target).html());
    					$('.province-selector').find('dt').find("em[class='iName']").html('');
    					$('.province-selector').find('dt').find("em[class='cData']").html($(e.target).html());
    					$('.city-selector').find('dt').find("em[class='cData']").html('');
    					$('.county-selector').find('dt').find("em[class='cData']").html('');
    					var province_id = $(e.target).data('value');
    					data_loading.city(province_id);
    				}
    				
    				//选市
    				var city_flag = $(dom).hasClass('city-selector');
    				if(city_flag){
    					$(dom).addClass('za-item-selector-hover');
    					$(dom).find('dd').show();
    					$(dom).css('position', 'relative');
    				}else{
    					$('.city-selector').removeClass('za-item-selector-hover');
    					$('.city-selector').find('dd').hide();
    					$('.city-selector').css('position', '');
    				}
    				if($(e.target).parent().parent().parent().hasClass('city-selector')){
    					$('#city_input').val($(e.target).html());
    					$('.city-selector').find('dt').find("em[class='iName']").html('');
    					$('.city-selector').find('dt').find("em[class='cData']").html($(e.target).html());
    					$('.county-selector').find('dt').find("em[class='cData']").html('');
    					var city_id = $(e.target).data('value');
    					data_loading.county(city_id);
    				}
    				
    				//选区
    				var county_flag = $(dom).hasClass('county-selector');
    				if(county_flag){
    					$(dom).addClass('za-item-selector-hover');
    					$(dom).find('dd').show();
    					$(dom).css('position', 'relative');
    				}else{
    					$('.county-selector').removeClass('za-item-selector-hover');
    					$('.county-selector').find('dd').hide();
    					$('.county-selector').css('position', '');
    				}
    				if($(e.target).parent().parent().parent().hasClass('county-selector')){
    					$('#country_input').val($(e.target).html());
    					$('.county-selector').find('dt').find("em[class='iName']").html('');
    					$('.county-selector').find('dt').find("em[class='cData']").html($(e.target).html());
    				}
    				
    				//身高
    				var height_flag = $(dom).hasClass('height-selector');
    				if(height_flag){
    					$(dom).addClass('za-item-selector-hover');
    					$(dom).find('dd').show();
    					$(dom).css('position', 'relative');
    				}else{
    					$('.height-selector').removeClass('za-item-selector-hover');
    					$('.height-selector').find('dd').hide();
    					$('.height-selector').css('position', '');
    				}
    				if($(e.target).parent().parent().parent().parent().hasClass('height-selector')){
        				$('#height_input').val($(e.target).attr('will'));
    					$('.height-selector').find('dt').find("em[class='iName']").html('');
    					$('.height-selector').find('dt').find("em[class='cData']").html($(e.target).html());
    				}
    				
    				//学历
    				var education_flag = $(dom).hasClass('education-selector');
    				if(education_flag){
    					$(dom).addClass('za-item-selector-hover');
    					$(dom).find('dd').show();
    					$(dom).css('position', 'relative');
    				}else{
    					$('.education-selector').removeClass('za-item-selector-hover');
    					$('.education-selector').find('dd').hide();
    					$('.education-selector').css('position', '');
    				}
    				if($(e.target).parent().parent().parent().parent().hasClass('education-selector')){
    					$('#education_input').val($(e.target).attr('will'));
    					$('.education-selector').find('dt').find("em[class='iName']").html('');
    					$('.education-selector').find('dt').find("em[class='cData']").html($(e.target).html());
    				}
    				
    				//月薪
    				var education_flag = $(dom).hasClass('salary-selector');
    				if(education_flag){
    					$(dom).addClass('za-item-selector-hover');
    					$(dom).find('dd').show();
    					$(dom).css('position', 'relative');
    				}else{
    					$('.salary-selector').removeClass('za-item-selector-hover');
    					$('.salary-selector').find('dd').hide();
    					$('.salary-selector').css('position', '');
    				}
    				if($(e.target).parent().parent().parent().parent().hasClass('salary-selector')){
    					$('#salary_input').val($(e.target).attr('will'));
    					$('.salary-selector').find('dt').find("em[class='iName']").html('');
    					$('.salary-selector').find('dt').find("em[class='cData']").html($(e.target).html());
    				}
				}
			});
			
			//加载数据
			var china_city = {
					"c10102000":{n:"北京",d:1,"c10102001":{n:"东城区"},"c10102002":{n:"西城区"},"c10102005":{n:"朝阳区"},"c10102006":{n:"丰台区"},"c10102007":{n:"石景山区"},"c10102008":{n:"海淀区"},"c10102009":{n:"门头沟区"},"c10102010":{n:"房山区"},"c10102011":{n:"通州区"},"c10102012":{n:"顺义区"},"c10102013":{n:"昌平区"},"c10102014":{n:"大兴区"},"c10102015":{n:"怀柔区"},"c10102016":{n:"平谷区"},"c10102017":{n:"密云"},"c10102018":{n:"延庆"}},"c10104000":{n:"天津",d:1,"c10104008":{n:"和平区"},"c10104009":{n:"河东区"},"c10104010":{n:"河西区"},"c10104011":{n:"南开区"},"c10104012":{n:"河北区"},"c10104013":{n:"红桥区"},"c10104017":{n:"东丽区"},"c10104018":{n:"西青区"},"c10104020":{n:"津南区"},"c10104019":{n:"北辰区"},"c10104002":{n:"武清区"},"c10104005":{n:"宝坻区"},"c10104014":{n:"滨海新区"},"c10104003":{n:"宁河"},"c10104006":{n:"静海"},"c10104007":{n:"蓟县"}},"c10103000":{n:"上海",d:1,"c10103008":{n:"黄浦区"},"c10103002":{n:"徐汇区"},"c10103003":{n:"长宁区"},"c10103010":{n:"静安区"},"c10103004":{n:"普陀区"},"c10103005":{n:"闸北区"},"c10103006":{n:"虹口区"},"c10103007":{n:"杨浦区"},"c10103012":{n:"闵行区"},"c10103011":{n:"宝山区"},"c10103013":{n:"嘉定区"},"c10103001":{n:"浦东新区"},"c10103014":{n:"金山区"},"c10103015":{n:"松江区"},"c10103016":{n:"青浦区"},"c10103018":{n:"奉贤区"},"c10103017":{n:"崇明"}},"c10105000":{n:"重庆",d:1,"c10105042":{n:"万州区"},"c10105028":{n:"涪陵区"},"c10105034":{n:"渝中区"},"c10105035":{n:"大渡口区"},"c10105026":{n:"江北区"},"c10105036":{n:"沙坪坝区"},"c10105037":{n:"九龙坡区"},"c10105038":{n:"南岸区"},"c10105024":{n:"北碚区"},"c10105033":{n:"綦江区"},"c10105023":{n:"大足区"},"c10105040":{n:"渝北区"},"c10105041":{n:"巴南区"},"c10105018":{n:"黔江区"},"c10105016":{n:"长寿区"},"c10105029":{n:"江津区"},"c10105013":{n:"合川区"},"c10105007":{n:"永川区"},"c10105015":{n:"南川区"},"c10105027":{n:"潼南"},"c10105010":{n:"铜梁"},"c10105008":{n:"荣昌"},"c10105025":{n:"璧山"},"c10105021":{n:"梁平"},"c10105032":{n:"城口"},"c10105030":{n:"丰都"},"c10105020":{n:"垫江"},"c10105003":{n:"武隆"},"c10105004":{n:"忠县"},"c10105006":{n:"开县"},"c10105019":{n:"云阳"},"c10105002":{n:"奉节"},"c10105005":{n:"巫山"},"c10105017":{n:"巫溪"},"c10105012":{n:"石柱"},"c10105043":{n:"秀山"},"c10105044":{n:"酉阳"},"c10105045":{n:"彭水"}},"c10101000":{n:"广东","c10101002":{n:"广州","c10101208":{n:"荔湾区"},"c10101209":{n:"越秀区"},"c10101210":{n:"海珠区"},"c10101211":{n:"天河区"},"c10101212":{n:"白云区"},"c10101213":{n:"黄埔区"},"c10101021":{n:"番禺区"},"c10101084":{n:"花都区"},"c10101214":{n:"南沙区"},"c10101215":{n:"萝岗区"},"c10101089":{n:"增城"},"c10101052":{n:"从化"}},"c10101201":{n:"深圳","c10101202":{n:"罗湖区"},"c10101203":{n:"福田区"},"c10101204":{n:"南山区"},"c10101206":{n:"宝安区"},"c10101207":{n:"龙岗区"},"c10101205":{n:"盐田区"}},"c10101015":{n:"韶关","c10101216":{n:"市辖区"},"c10101085":{n:"始兴"},"c10101053":{n:"仁化"},"c10101078":{n:"翁源"},"c10101055":{n:"乳源"},"c10101050":{n:"新丰"},"c10101033":{n:"乐昌"},"c10101090":{n:"南雄"}},"c10101005":{n:"珠海","c10101217":{n:"市辖区"}},"c10101013":{n:"汕头","c10101218":{n:"市辖区"},"c10101057":{n:"南澳"}},"c10101003":{n:"佛山","c10101219":{n:"市辖区"}},"c10101016":{n:"江门","c10101220":{n:"市辖区"},"c10101098":{n:"台山"},"c10101066":{n:"开平"},"c10101040":{n:"鹤山"},"c10101037":{n:"恩平"}},"c10101004":{n:"湛江","c10101221":{n:"市辖区"},"c10101060":{n:"遂溪"},"c10101036":{n:"徐闻"},"c10101029":{n:"廉江"},"c10101070":{n:"雷州"},"c10101065":{n:"吴川"}},"c10101012":{n:"茂名","c10101222":{n:"市辖区"},"c10101094":{n:"电白"},"c10101024":{n:"高州"},"c10101027":{n:"化州"},"c10101032":{n:"信宜"}},"c10101006":{n:"肇庆","c10101223":{n:"市辖区"},"c10101056":{n:"广宁"},"c10101086":{n:"怀集"},"c10101054":{n:"封开"},"c10101091":{n:"德庆"},"c10101079":{n:"高要"},"c10101051":{n:"四会"}},"c10101008":{n:"惠州","c10101224":{n:"市辖区"},"c10101035":{n:"博罗"},"c10101097":{n:"惠东"},"c10101069":{n:"龙门"}},"c10101014":{n:"梅州","c10101225":{n:"市辖区"},"c10101074":{n:"梅县"},"c10101076":{n:"大埔"},"c10101048":{n:"丰顺"},"c10101082":{n:"五华"},"c10101087":{n:"平远"},"c10101043":{n:"蕉岭"},"c10101025":{n:"兴宁"}},"c10101028":{n:"汕尾","c10101226":{n:"市辖区"},"c10101009":{n:"海丰"},"c10101059":{n:"陆河"},"c10101096":{n:"陆丰"}},"c10101023":{n:"河源","c10101227":{n:"市辖区"},"c10101083":{n:"紫金"},"c10101049":{n:"龙川"},"c10101044":{n:"连平"},"c10101077":{n:"和平"},"c10101228":{n:"东源"}},"c10101022":{n:"阳江","c10101229":{n:"市辖区"},"c10101073":{n:"阳西"},"c10101039":{n:"阳东"},"c10101030":{n:"阳春"}},"c10101018":{n:"清远","c10101230":{n:"市辖区"},"c10101088":{n:"佛冈"},"c10101058":{n:"阳山"},"c10101093":{n:"连山"},"c10101095":{n:"连南"},"c10101231":{n:"清新"},"c10101019":{n:"英德"},"c10101062":{n:"连州"}},"c10101007":{n:"东莞","c10101232":{n:"市辖区"}},"c10101011":{n:"中山","c10101233":{n:"市辖区"}},"c10101020":{n:"潮州","c10101234":{n:"市辖区"},"c10101046":{n:"潮安"},"c10101080":{n:"饶平"}},"c10101026":{n:"揭阳","c10101235":{n:"市辖区"},"c10101075":{n:"揭东"},"c10101081":{n:"揭西"},"c10101047":{n:"惠来"},"c10101034":{n:"普宁"}},"c10101068":{n:"云浮","c10101236":{n:"市辖区"},"c10101042":{n:"新兴"},"c10101072":{n:"郁南"},"c10101237":{n:"云安"},"c10101038":{n:"罗定"}}},"c10118000":{n:"江苏","c10118001":{n:"南京","c10118075":{n:"玄武区"},"c10118076":{n:"白下区"},"c10118077":{n:"秦淮区"},"c10118078":{n:"建邺区"},"c10118079":{n:"鼓楼区"},"c10118080":{n:"下关区"},"c10118081":{n:"浦口区"},"c10118082":{n:"栖霞区"},"c10118083":{n:"雨花台区"},"c10118025":{n:"江宁区"},"c10118052":{n:"六合区"},"c10118030":{n:"溧水"},"c10118056":{n:"高淳"}},"c10118003":{n:"无锡","c10118084":{n:"市辖区"},"c10118015":{n:"江阴"},"c10118014":{n:"宜兴"}},"c10118004":{n:"徐州","c10118085":{n:"市辖区"},"c10118039":{n:"丰县"},"c10118067":{n:"沛县"},"c10118045":{n:"睢宁"},"c10118071":{n:"新沂"},"c10118086":{n:"邳州"}},"c10118005":{n:"常州","c10118087":{n:"市辖区"},"c10118072":{n:"溧阳"},"c10118043":{n:"金坛"}},"c10118002":{n:"苏州","c10118088":{n:"市辖区"},"c10118017":{n:"常熟"},"c10118013":{n:"张家港"},"c10118012":{n:"昆山"},"c10118019":{n:"吴江"},"c10118020":{n:"太仓"}},"c10118011":{n:"南通","c10118089":{n:"市辖区"},"c10118036":{n:"海安"},"c10118055":{n:"如东"},"c10118062":{n:"启东"},"c10118028":{n:"如皋"},"c10118033":{n:"海门"}},"c10118007":{n:"连云港","c10118090":{n:"市辖区"},"c10118061":{n:"赣榆"},"c10118032":{n:"东海"},"c10118035":{n:"灌云"},"c10118065":{n:"灌南"}},"c10118016":{n:"淮安","c10118091":{n:"市辖区"},"c10118054":{n:"涟水"},"c10118049":{n:"洪泽"},"c10118027":{n:"盱眙"},"c10118023":{n:"金湖"}},"c10118009":{n:"盐城","c10118092":{n:"市辖区"},"c10118048":{n:"响水"},"c10118022":{n:"滨海"},"c10118053":{n:"阜宁"},"c10118026":{n:"射阳"},"c10118057":{n:"建湖"},"c10118060":{n:"东台"},"c10118031":{n:"大丰"}},"c10118010":{n:"扬州","c10118093":{n:"市辖区"},"c10118047":{n:"宝应"},"c10118044":{n:"仪征"},"c10118073":{n:"高邮"}},"c10118006":{n:"镇江","c10118094":{n:"市辖区"},"c10118070":{n:"丹阳"},"c10118074":{n:"扬中"},"c10118046":{n:"句容"}},"c10118051":{n:"泰州","c10118095":{n:"市辖区"},"c10118059":{n:"兴化"},"c10118024":{n:"靖江"},"c10118018":{n:"泰兴"},"c10118029":{n:"姜堰"}},"c10118063":{n:"宿迁","c10118096":{n:"市辖区"},"c10118034":{n:"沭阳"},"c10118037":{n:"泗阳"},"c10118066":{n:"泗洪"}}},"c10131000":{n:"浙江","c10131001":{n:"杭州","c10131080":{n:"上城区"},"c10131081":{n:"下城区"},"c10131082":{n:"江干区"},"c10131083":{n:"拱墅区"},"c10131084":{n:"西湖区"},"c10131085":{n:"滨江区"},"c10131077":{n:"萧山区"},"c10131067":{n:"余杭区"},"c10131073":{n:"桐庐"},"c10131069":{n:"淳安"},"c10131040":{n:"建德"},"c10131020":{n:"富阳"},"c10131044":{n:"临安"}},"c10131003":{n:"宁波","c10131086":{n:"海曙区"},"c10131087":{n:"江东区"},"c10131088":{n:"江北区"},"c10131089":{n:"北仑区"},"c10131039":{n:"镇海区"},"c10131090":{n:"鄞州区"},"c10131051":{n:"象山"},"c10131021":{n:"宁海"},"c10131071":{n:"余姚"},"c10131042":{n:"慈溪"},"c10131047":{n:"奉化"}},"c10131002":{n:"温州","c10131091":{n:"市辖区"},"c10131030":{n:"洞头"},"c10131026":{n:"永嘉"},"c10131034":{n:"平阳"},"c10131066":{n:"苍南"},"c10131068":{n:"文成"},"c10131037":{n:"泰顺"},"c10131019":{n:"瑞安"},"c10131057":{n:"乐清"}},"c10131006":{n:"嘉兴","c10131092":{n:"市辖区"},"c10131061":{n:"嘉善"},"c10131033":{n:"海盐"},"c10131036":{n:"海宁"},"c10131065":{n:"平湖"},"c10131029":{n:"桐乡"}},"c10131005":{n:"湖州","c10131093":{n:"市辖区"},"c10131023":{n:"德清"},"c10131025":{n:"长兴"},"c10131053":{n:"安吉"}},"c10131004":{n:"绍兴","c10131094":{n:"市辖区"},"c10131095":{n:"绍兴县"},"c10131032":{n:"新昌"},"c10131063":{n:"诸暨"},"c10131028":{n:"上虞"},"c10131059":{n:"嵊州"}},"c10131009":{n:"金华","c10131097":{n:"市辖区"},"c10131038":{n:"武义"},"c10131035":{n:"浦江"},"c10131041":{n:"磐安"},"c10131018":{n:"兰溪"},"c10131013":{n:"义乌"},"c10131064":{n:"东阳"},"c10131016":{n:"永康"}},"c10131011":{n:"衢州","c10131098":{n:"市辖区"},"c10131027":{n:"常山"},"c10131058":{n:"开化"},"c10131062":{n:"龙游"},"c10131055":{n:"江山"}},"c10131015":{n:"舟山","c10131099":{n:"市辖区"},"c10131046":{n:"岱山"},"c10131079":{n:"嵊泗"}},"c10131012":{n:"台州","c10131100":{n:"市辖区"},"c10131074":{n:"玉环"},"c10131049":{n:"三门"},"c10131078":{n:"天台"},"c10131045":{n:"仙居"},"c10131014":{n:"温岭"},"c10131007":{n:"临海"}},"c10131010":{n:"丽水","c10131101":{n:"市辖区"},"c10131043":{n:"青田"},"c10131072":{n:"缙云"},"c10131052":{n:"遂昌"},"c10131024":{n:"松阳"},"c10131076":{n:"云和"},"c10131048":{n:"庆元"},"c10131056":{n:"景宁"},"c10131022":{n:"龙泉"}}},"c10127000":{n:"四川","c10127001":{n:"成都","c10127138":{n:"锦江区"},"c10127139":{n:"青羊区"},"c10127140":{n:"金牛区"},"c10127141":{n:"武侯区"},"c10127142":{n:"成华区"},"c10127143":{n:"龙泉驿区"},"c10127144":{n:"青白江区"},"c10127116":{n:"新都区"},"c10127094":{n:"温江区"},"c10127040":{n:"金堂"},"c10127103":{n:"双流"},"c10127054":{n:"郫县"},"c10127129":{n:"大邑"},"c10127109":{n:"蒲江"},"c10127048":{n:"新津"},"c10127019":{n:"都江堰"},"c10127061":{n:"彭州"},"c10127077":{n:"邛崃"},"c10127069":{n:"崇州"}},"c10127014":{n:"自贡","c10127145":{n:"市辖区"},"c10127090":{n:"荣县"},"c10127030":{n:"富顺"}},"c10127017":{n:"攀枝花","c10127146":{n:"市辖区"},"c10127043":{n:"米易"},"c10127106":{n:"盐边"}},"c10127016":{n:"泸州","c10127147":{n:"市辖区"},"c10127148":{n:"泸县"},"c10127091":{n:"合江"},"c10127100":{n:"叙永"},"c10127045":{n:"古蔺"}},"c10127018":{n:"德阳","c10127149":{n:"市辖区"},"c10127075":{n:"中江"},"c10127150":{n:"罗江"},"c10127121":{n:"广汉"},"c10127067":{n:"什邡"},"c10127127":{n:"绵竹"}},"c10127005":{n:"绵阳","c10127151":{n:"市辖区"},"c10127119":{n:"三台"},"c10127065":{n:"盐亭"},"c10127044":{n:"安县"},"c10127058":{n:"梓潼"},"c10127152":{n:"北川"},"c10127099":{n:"平武"},"c10127020":{n:"江油"}},"c10127010":{n:"广元","c10127153":{n:"市辖区"},"c10127028":{n:"旺苍"},"c10127088":{n:"青川"},"c10127082":{n:"剑阁"},"c10127035":{n:"苍溪"}},"c10127117":{n:"遂宁","c10127154":{n:"市辖区"},"c10127062":{n:"蓬溪"},"c10127123":{n:"射洪"},"c10127192":{n:"大英"}},"c10127013":{n:"内江","c10127155":{n:"市辖区"},"c10127096":{n:"威远"},"c10127027":{n:"资中"},"c10127042":{n:"隆昌"}},"c10127002":{n:"乐山","c10127156":{n:"市辖区"},"c10127092":{n:"犍为"},"c10127124":{n:"井研"},"c10127038":{n:"夹江"},"c10127131":{n:"沐川"},"c10127111":{n:"峨边"},"c10127031":{n:"马边"},"c10127022":{n:"峨眉山"}},"c10127011":{n:"南充","c10127157":{n:"市辖区"},"c10127133":{n:"南部"},"c10127026":{n:"营山"},"c10127087":{n:"蓬安"},"c10127033":{n:"仪陇"},"c10127073":{n:"西充"},"c10127081":{n:"阆中"}},"c10127056":{n:"眉山","c10127158":{n:"市辖区"},"c10127063":{n:"仁寿"},"c10127079":{n:"彭山"},"c10127071":{n:"洪雅"},"c10127085":{n:"丹棱"},"c10127024":{n:"青神"}},"c10127015":{n:"宜宾","c10127160":{n:"市辖区"},"c10127161":{n:"宜宾县"},"c10127134":{n:"江安"},"c10127120":{n:"长宁"},"c10127126":{n:"高县"},"c10127066":{n:"珙县"},"c10127074":{n:"筠连"},"c10127059":{n:"兴文"},"c10127113":{n:"屏山"}},"c10127070":{n:"广安","c10127162":{n:"市辖区"},"c10127130":{n:"岳池"},"c10127078":{n:"武胜"},"c10127084":{n:"邻水"},"c10127023":{n:"华蓥"}},"c10127137":{n:"达州","c10127163":{n:"市辖区"},"c10127012":{n:"达县"},"c10127041":{n:"宣汉"},"c10127104":{n:"开江"},"c10127110":{n:"大竹"},"c10127055":{n:"渠县"},"c10127049":{n:"万源"}},"c10127008":{n:"雅安","c10127164":{n:"市辖区"},"c10127083":{n:"名山"},"c10127029":{n:"荥经"},"c10127089":{n:"汉源"},"c10127039":{n:"石棉"},"c10127036":{n:"天全"},"c10127098":{n:"芦山"},"c10127093":{n:"宝兴"}},"c10127125":{n:"巴中","c10127165":{n:"市辖区"},"c10127118":{n:"通江"},"c10127064":{n:"南江"},"c10127057":{n:"平昌"}},"c10127021":{n:"资阳","c10127166":{n:"市辖区"},"c10127167":{n:"安岳"},"c10127105":{n:"乐至"},"c10127034":{n:"简阳"}},"c10127007":{n:"阿坝","c10127006":{n:"汶川"},"c10127025":{n:"理县"},"c10127168":{n:"茂县"},"c10127107":{n:"松潘"},"c10127169":{n:"九寨沟"},"c10127170":{n:"金川"},"c10127171":{n:"小金"},"c10127172":{n:"黑水"},"c10127114":{n:"马尔康"},"c10127173":{n:"壤塘"},"c10127194":{n:"阿坝县"},"c10127174":{n:"若尔盖"},"c10127175":{n:"红原"}},"c10127009":{n:"甘孜","c10127052":{n:"康定"},"c10127176":{n:"泸定"},"c10127177":{n:"丹巴"},"c10127195":{n:"九龙"},"c10127178":{n:"雅江"},"c10127179":{n:"道孚"},"c10127180":{n:"炉霍"},"c10127193":{n:"甘孜县"},"c10127181":{n:"新龙"},"c10127182":{n:"德格"},"c10127183":{n:"白玉"},"c10127184":{n:"石渠"},"c10127185":{n:"色达"},"c10127186":{n:"理塘"},"c10127187":{n:"巴塘"},"c10127188":{n:"乡城"},"c10127189":{n:"稻城"},"c10127190":{n:"得荣"}},"c10127003":{n:"凉山","c10127046":{n:"西昌"},"c10127102":{n:"木里"},"c10127112":{n:"盐源"},"c10127191":{n:"德昌"},"c10127047":{n:"会理"},"c10127108":{n:"会东"},"c10127050":{n:"宁南"},"c10127068":{n:"普格"},"c10127128":{n:"布拖"},"c10127076":{n:"金阳"},"c10127086":{n:"昭觉"},"c10127122":{n:"喜德"},"c10127053":{n:"冕宁"},"c10127115":{n:"越西"},"c10127032":{n:"甘洛"},"c10127135":{n:"美姑"},"c10127060":{n:"雷波"}}},"c10107000":{n:"福建","c10107001":{n:"福州","c10107069":{n:"鼓楼区"},"c10107070":{n:"台江区"},"c10107071":{n:"仓山区"},"c10107072":{n:"马尾区"},"c10107073":{n:"晋安区"},"c10107045":{n:"闽侯"},"c10107018":{n:"连江"},"c10107030":{n:"罗源"},"c10107057":{n:"闽清"},"c10107027":{n:"永泰"},"c10107054":{n:"平潭"},"c10107023":{n:"福清"},"c10107050":{n:"长乐"}},"c10107002":{n:"厦门","c10107074":{n:"思明区"},"c10107075":{n:"海沧区"},"c10107076":{n:"湖里区"},"c10107077":{n:"集美区"},"c10107033":{n:"同安区"},"c10107078":{n:"翔安区"}},"c10107010":{n:"莆田","c10107079":{n:"市辖区"},"c10107025":{n:"仙游"}},"c10107009":{n:"三明","c10107080":{n:"市辖区"},"c10107056":{n:"明溪"},"c10107053":{n:"清流"},"c10107026":{n:"宁化"},"c10107049":{n:"大田"},"c10107017":{n:"尤溪"},"c10107044":{n:"沙县"},"c10107032":{n:"将乐"},"c10107060":{n:"泰宁"},"c10107029":{n:"建宁"},"c10107022":{n:"永安"}},"c10107003":{n:"泉州","c10107081":{n:"市辖区"},"c10107064":{n:"惠安"},"c10107031":{n:"安溪"},"c10107062":{n:"永春"},"c10107035":{n:"德化"},"c10107082":{n:"金门"},"c10107012":{n:"石狮"},"c10107011":{n:"晋江"},"c10107059":{n:"南安"}},"c10107007":{n:"漳州","c10107083":{n:"市辖区"},"c10107024":{n:"云霄"},"c10107051":{n:"漳浦"},"c10107028":{n:"诏安"},"c10107046":{n:"长泰"},"c10107055":{n:"东山"},"c10107041":{n:"南靖"},"c10107058":{n:"平和"},"c10107014":{n:"华安"},"c10107019":{n:"龙海"}},"c10107004":{n:"南平","c10107084":{n:"市辖区"},"c10107065":{n:"顺昌"},"c10107042":{n:"浦城"},"c10107020":{n:"光泽"},"c10107015":{n:"松溪"},"c10107047":{n:"政和"},"c10107005":{n:"邵武"},"c10107052":{n:"武夷山"},"c10107036":{n:"建瓯"},"c10107038":{n:"建阳"}},"c10107008":{n:"龙岩","c10107085":{n:"市辖区"},"c10107067":{n:"长汀"},"c10107034":{n:"永定"},"c10107063":{n:"上杭"},"c10107037":{n:"武平"},"c10107040":{n:"连城"},"c10107061":{n:"漳平"}},"c10107013":{n:"宁德","c10107086":{n:"市辖区"},"c10107068":{n:"霞浦"},"c10107016":{n:"古田"},"c10107048":{n:"屏南"},"c10107043":{n:"寿宁"},"c10107021":{n:"周宁"},"c10107066":{n:"柘荣"},"c10107006":{n:"福安"},"c10107039":{n:"福鼎"}}},"c10124000":{n:"山东","c10124003":{n:"济南","c10124112":{n:"历下区"},"c10124113":{n:"市中区"},"c10124114":{n:"槐荫区"},"c10124115":{n:"天桥区"},"c10124116":{n:"历城区"},"c10124029":{n:"长清区"},"c10124043":{n:"平阴"},"c10124088":{n:"济阳"},"c10124036":{n:"商河"},"c10124082":{n:"章丘"}},"c10124001":{n:"青岛","c10124117":{n:"市南区"},"c10124118":{n:"市北区"},"c10124119":{n:"四方区"},"c10124120":{n:"黄岛区"},"c10124121":{n:"崂山区"},"c10124122":{n:"李沧区"},"c10124123":{n:"城阳区"},"c10124099":{n:"胶州"},"c10124062":{n:"即墨"},"c10124055":{n:"平度"},"c10124048":{n:"胶南"},"c10124104":{n:"莱西"}},"c10124004":{n:"淄博","c10124124":{n:"市辖区"},"c10124069":{n:"桓台"},"c10124022":{n:"高青"},"c10124075":{n:"沂源"}},"c10124014":{n:"枣庄","c10124125":{n:"市辖区"},"c10124054":{n:"滕州"}},"c10124007":{n:"东营","c10124126":{n:"市辖区"},"c10124035":{n:"垦利"},"c10124028":{n:"利津"},"c10124081":{n:"广饶"}},"c10124009":{n:"烟台","c10124127":{n:"市辖区"},"c10124025":{n:"长岛"},"c10124030":{n:"龙口"},"c10124020":{n:"莱阳"},"c10124077":{n:"莱州"},"c10124083":{n:"蓬莱"},"c10124066":{n:"招远"},"c10124037":{n:"栖霞"},"c10124073":{n:"海阳"}},"c10124008":{n:"潍坊","c10124128":{n:"市辖区"},"c10124063":{n:"临朐"},"c10124070":{n:"昌乐"},"c10124110":{n:"青州"},"c10124056":{n:"诸城"},"c10124095":{n:"寿光"},"c10124105":{n:"安丘"},"c10124100":{n:"高密"},"c10124049":{n:"昌邑"}},"c10124015":{n:"济宁","c10124129":{n:"市辖区"},"c10124087":{n:"微山"},"c10124041":{n:"鱼台"},"c10124093":{n:"金乡"},"c10124046":{n:"嘉祥"},"c10124053":{n:"汶上"},"c10124098":{n:"泗水"},"c10124076":{n:"梁山"},"c10124017":{n:"曲阜"},"c10124010":{n:"兖州"},"c10124034":{n:"邹城"}},"c10124011":{n:"泰安","c10124130":{n:"市辖区"},"c10124108":{n:"宁阳"},"c10124067":{n:"东平"},"c10124060":{n:"新泰"},"c10124021":{n:"肥城"}},"c10124002":{n:"威海","c10124131":{n:"市辖区"},"c10124094":{n:"文登"},"c10124042":{n:"荣成"},"c10124047":{n:"乳山"}},"c10124016":{n:"日照","c10124132":{n:"市辖区"},"c10124061":{n:"五莲"},"c10124133":{n:"莒县"}},"c10124068":{n:"莱芜","c10124134":{n:"市辖区"}},"c10124013":{n:"临沂","c10124135":{n:"市辖区"},"c10124038":{n:"沂南"},"c10124096":{n:"郯城"},"c10124084":{n:"沂水"},"c10124026":{n:"苍山"},"c10124050":{n:"费县"},"c10124078":{n:"平邑"},"c10124090":{n:"莒南"},"c10124031":{n:"蒙阴"},"c10124044":{n:"临沭"}},"c10124006":{n:"德州","c10124136":{n:"市辖区"},"c10124059":{n:"陵县"},"c10124092":{n:"宁津"},"c10124080":{n:"庆云"},"c10124137":{n:"临邑"},"c10124045":{n:"齐河"},"c10124040":{n:"平原"},"c10124086":{n:"夏津"},"c10124052":{n:"武城"},"c10124097":{n:"乐陵"},"c10124103":{n:"禹城"}},"c10124005":{n:"聊城","c10124138":{n:"市辖区"},"c10124085":{n:"阳谷"},"c10124039":{n:"莘县"},"c10124027":{n:"茌平"},"c10124032":{n:"东阿"},"c10124091":{n:"冠县"},"c10124079":{n:"高唐"},"c10124074":{n:"临清"}},"c10124018":{n:"滨州","c10124139":{n:"市辖区"},"c10124064":{n:"惠民"},"c10124023":{n:"阳信"},"c10124111":{n:"无棣"},"c10124071":{n:"沾化"},"c10124057":{n:"博兴"},"c10124106":{n:"邹平"}},"c10124012":{n:"菏泽","c10124140":{n:"市辖区"},"c10124065":{n:"曹县"},"c10124107":{n:"单县"},"c10124058":{n:"成武"},"c10124051":{n:"巨野"},"c10124024":{n:"郓城"},"c10124072":{n:"鄄城"},"c10124102":{n:"定陶"},"c10124019":{n:"东明"}}},"c10115000":{n:"湖北","c10115001":{n:"武汉","c10115086":{n:"江岸区"},"c10115087":{n:"江汉区"},"c10115088":{n:"硚口区"},"c10115089":{n:"汉阳区"},"c10115072":{n:"武昌区"},"c10115090":{n:"青山区"},"c10115091":{n:"洪山区"},"c10115092":{n:"东西湖区"},"c10115093":{n:"汉南区"},"c10115077":{n:"蔡甸区"},"c10115094":{n:"江夏区"},"c10115043":{n:"黄陂区"},"c10115080":{n:"新洲区"}},"c10115002":{n:"黄石","c10115095":{n:"市辖区"},"c10115039":{n:"阳新"},"c10115073":{n:"大冶"}},"c10115007":{n:"十堰","c10115096":{n:"市辖区"},"c10115045":{n:"郧县"},"c10115058":{n:"郧西"},"c10115054":{n:"竹山"},"c10115021":{n:"竹溪"},"c10115049":{n:"房县"},"c10115082":{n:"丹江口"}},"c10115008":{n:"宜昌","c10115097":{n:"市辖区"},"c10115042":{n:"远安"},"c10115023":{n:"兴山"},"c10115056":{n:"秭归"},"c10115051":{n:"长阳"},"c10115018":{n:"五峰"},"c10115098":{n:"宜都"},"c10115079":{n:"当阳"},"c10115047":{n:"枝江"}},"c10115014":{n:"襄阳","c10115099":{n:"市辖区"},"c10115019":{n:"南漳"},"c10115057":{n:"谷城"},"c10115029":{n:"保康"},"c10115060":{n:"老河口"},"c10115024":{n:"枣阳"},"c10115052":{n:"宜城"}},"c10115004":{n:"鄂州","c10115100":{n:"市辖区"}},"c10115012":{n:"荆门","c10115101":{n:"市辖区"},"c10115070":{n:"京山"},"c10115102":{n:"沙洋"},"c10115033":{n:"钟祥"}},"c10115013":{n:"孝感","c10115103":{n:"市辖区"},"c10115104":{n:"孝昌"},"c10115069":{n:"大悟"},"c10115041":{n:"云梦"},"c10115075":{n:"应城"},"c10115078":{n:"安陆"},"c10115036":{n:"汉川"}},"c10115010":{n:"荆州","c10115105":{n:"市辖区"},"c10115030":{n:"公安"},"c10115025":{n:"监利"},"c10115106":{n:"江陵"},"c10115061":{n:"石首"},"c10115037":{n:"洪湖"},"c10115065":{n:"松滋"}},"c10115011":{n:"黄冈","c10115107":{n:"市辖区"},"c10115108":{n:"团风"},"c10115055":{n:"红安"},"c10115059":{n:"罗田"},"c10115027":{n:"英山"},"c10115022":{n:"浠水"},"c10115063":{n:"蕲春"},"c10115031":{n:"黄梅"},"c10115017":{n:"麻城"},"c10115067":{n:"武穴"}},"c10115006":{n:"咸宁","c10115109":{n:"市辖区"},"c10115053":{n:"嘉鱼"},"c10115048":{n:"通城"},"c10115081":{n:"崇阳"},"c10115044":{n:"通山"},"c10115110":{n:"赤壁"}},"c10115062":{n:"随州","c10115111":{n:"市辖区"},"c10115112":{n:"随县"},"c10115046":{n:"广水"}},"c10115009":{n:"恩施","c10115113":{n:"恩施市"},"c10115040":{n:"利川"},"c10115028":{n:"建始"},"c10115064":{n:"巴东"},"c10115068":{n:"宣恩"},"c10115074":{n:"咸丰"},"c10115035":{n:"来凤"},"c10115032":{n:"鹤峰"}},"c10115085":{n:"省直辖县级","c10115066":{n:"仙桃"},"c10115071":{n:"潜江"},"c10115034":{n:"天门"},"c10115016":{n:"神农架"}}},"c10112000":{n:"河北","c10112001":{n:"石家庄","c10112145":{n:"长安区"},"c10112146":{n:"桥东区"},"c10112147":{n:"桥西区"},"c10112148":{n:"新华区"},"c10112149":{n:"井陉矿区"},"c10112150":{n:"裕华区"},"c10112050":{n:"井陉"},"c10112042":{n:"正定"},"c10112110":{n:"栾城"},"c10112097":{n:"行唐"},"c10112030":{n:"灵寿"},"c10112021":{n:"高邑"},"c10112067":{n:"深泽"},"c10112083":{n:"赞皇"},"c10112127":{n:"无极"},"c10112089":{n:"平山"},"c10112119":{n:"元氏"},"c10112012":{n:"赵县"},"c10112136":{n:"辛集"},"c10112151":{n:"藁城"},"c10112075":{n:"晋州"},"c10112059":{n:"新乐"},"c10112152":{n:"鹿泉"}},"c10112006":{n:"唐山","c10112153":{n:"市辖区"},"c10112104":{n:"滦县"},"c10112112":{n:"滦南"},"c10112061":{n:"乐亭"},"c10112138":{n:"迁西"},"c10112036":{n:"玉田"},"c10112052":{n:"唐海"},"c10112044":{n:"遵化"},"c10112068":{n:"迁安"}},"c10112008":{n:"秦皇岛","c10112154":{n:"市辖区"},"c10112101":{n:"青龙"},"c10112025":{n:"昌黎"},"c10112034":{n:"抚宁"},"c10112093":{n:"卢龙"}},"c10112004":{n:"邯郸","c10112155":{n:"市辖区"},"c10112156":{n:"邯郸县"},"c10112096":{n:"临漳"},"c10112046":{n:"成安"},"c10112070":{n:"大名"},"c10112105":{n:"涉县"},"c10112038":{n:"磁县"},"c10112016":{n:"肥乡"},"c10112114":{n:"永年"},"c10112063":{n:"邱县"},"c10112054":{n:"鸡泽"},"c10112078":{n:"广平"},"c10112131":{n:"馆陶"},"c10112140":{n:"魏县"},"c10112123":{n:"曲周"},"c10112029":{n:"武安"}},"c10112003":{n:"邢台","c10112158":{n:"市辖区"},"c10112170":{n:"邢台县"},"c10112033":{n:"临城"},"c10112092":{n:"内丘"},"c10112100":{n:"柏乡"},"c10112109":{n:"隆尧"},"c10112082":{n:"任县"},"c10112144":{n:"南和"},"c10112041":{n:"宁晋"},"c10112049":{n:"巨鹿"},"c10112118":{n:"新河"},"c10112135":{n:"广宗"},"c10112074":{n:"平乡"},"c10112066":{n:"威县"},"c10112126":{n:"清河"},"c10112024":{n:"临西"},"c10112058":{n:"南宫"},"c10112020":{n:"沙河"}},"c10112010":{n:"保定","c10112159":{n:"市辖区"},"c10112160":{n:"满城"},"c10112047":{n:"清苑"},"c10112115":{n:"涞水"},"c10112094":{n:"阜平"},"c10112103":{n:"徐水"},"c10112132":{n:"定兴"},"c10112064":{n:"唐县"},"c10112035":{n:"高阳"},"c10112043":{n:"容城"},"c10112124":{n:"涞源"},"c10112120":{n:"望都"},"c10112051":{n:"安新"},"c10112055":{n:"易县"},"c10112026":{n:"曲阳"},"c10112060":{n:"蠡县"},"c10112128":{n:"顺平"},"c10112079":{n:"博野"},"c10112111":{n:"雄县"},"c10112071":{n:"涿州"},"c10112086":{n:"定州"},"c10112017":{n:"安国"},"c10112141":{n:"高碑店"}},"c10112011":{n:"张家口","c10112161":{n:"市辖区"},"c10112137":{n:"宣化"},"c10112084":{n:"张北"},"c10112098":{n:"康保"},"c10112090":{n:"沽源"},"c10112031":{n:"尚义"},"c10112116":{n:"蔚县"},"c10112056":{n:"阳原"},"c10112076":{n:"怀安"},"c10112013":{n:"万全"},"c10112107":{n:"怀来"},"c10112048":{n:"涿鹿"},"c10112039":{n:"赤城"},"c10112022":{n:"崇礼"}},"c10112009":{n:"承德","c10112162":{n:"市辖区"},"c10112163":{n:"承德县"},"c10112133":{n:"兴隆"},"c10112080":{n:"平泉"},"c10112027":{n:"滦平"},"c10112072":{n:"隆化"},"c10112087":{n:"丰宁"},"c10112018":{n:"宽城"},"c10112142":{n:"围场"}},"c10112005":{n:"沧州","c10112164":{n:"市辖区"},"c10112165":{n:"沧县"},"c10112134":{n:"青县"},"c10112143":{n:"东光"},"c10112057":{n:"海兴"},"c10112125":{n:"盐山"},"c10112028":{n:"肃宁"},"c10112073":{n:"南皮"},"c10112081":{n:"吴桥"},"c10112037":{n:"献县"},"c10112065":{n:"孟村"},"c10112019":{n:"泊头"},"c10112095":{n:"任丘"},"c10112117":{n:"黄骅"},"c10112088":{n:"河间"}},"c10112007":{n:"廊坊","c10112166":{n:"市辖区"},"c10112032":{n:"固安"},"c10112085":{n:"永清"},"c10112099":{n:"香河"},"c10112023":{n:"大城"},"c10112091":{n:"文安"},"c10112040":{n:"大厂"},"c10112014":{n:"霸州"},"c10112108":{n:"三河"}},"c10112002":{n:"衡水","c10112167":{n:"市辖区"},"c10112069":{n:"枣强"},"c10112053":{n:"武邑"},"c10112113":{n:"武强"},"c10112168":{n:"饶阳"},"c10112015":{n:"安平"},"c10112130":{n:"故城"},"c10112062":{n:"景县"},"c10112122":{n:"阜城"},"c10112169":{n:"冀州"},"c10112077":{n:"深州"}}},"c10125000":{n:"山西","c10125001":{n:"太原","c10125109":{n:"小店区"},"c10125110":{n:"迎泽区"},"c10125111":{n:"杏花岭区"},"c10125112":{n:"尖草坪区"},"c10125113":{n:"万柏林区"},"c10125114":{n:"晋源区"},"c10125102":{n:"清徐"},"c10125096":{n:"阳曲"},"c10125050":{n:"娄烦"},"c10125057":{n:"古交"}},"c10125005":{n:"大同","c10125115":{n:"市辖区"},"c10125070":{n:"阳高"},"c10125019":{n:"天镇"},"c10125075":{n:"广灵"},"c10125030":{n:"灵丘"},"c10125024":{n:"浑源"},"c10125080":{n:"左云"},"c10125064":{n:"大同县"}},"c10125009":{n:"阳泉","c10125116":{n:"市辖区"},"c10125041":{n:"平定"},"c10125086":{n:"盂县"}},"c10125010":{n:"长治","c10125117":{n:"市辖区"},"c10125118":{n:"长治县"},"c10125042":{n:"襄垣"},"c10125055":{n:"屯留"},"c10125035":{n:"平顺"},"c10125087":{n:"黎城"},"c10125081":{n:"壶关"},"c10125012":{n:"长子"},"c10125094":{n:"武乡"},"c10125048":{n:"沁县"},"c10125100":{n:"沁源"},"c10125062":{n:"潞城"}},"c10125011":{n:"晋城","c10125119":{n:"市辖区"},"c10125074":{n:"沁水"},"c10125022":{n:"阳城"},"c10125028":{n:"陵川"},"c10125120":{n:"泽州"},"c10125068":{n:"高平"}},"c10125034":{n:"朔州","c10125121":{n:"市辖区"},"c10125046":{n:"山阴"},"c10125040":{n:"应县"},"c10125092":{n:"右玉"},"c10125085":{n:"怀仁"}},"c10125107":{n:"晋中","c10125122":{n:"市辖区"},"c10125058":{n:"榆社"},"c10125106":{n:"左权"},"c10125054":{n:"和顺"},"c10125099":{n:"昔阳"},"c10125014":{n:"寿阳"},"c10125065":{n:"太谷"},"c10125020":{n:"祁县"},"c10125071":{n:"平遥"},"c10125047":{n:"灵石"},"c10125025":{n:"介休"}},"c10125008":{n:"运城","c10125123":{n:"市辖区"},"c10125033":{n:"临猗"},"c10125084":{n:"万荣"},"c10125098":{n:"闻喜"},"c10125039":{n:"稷山"},"c10125045":{n:"新绛"},"c10125060":{n:"绛县"},"c10125016":{n:"垣曲"},"c10125052":{n:"夏县"},"c10125079":{n:"平陆"},"c10125029":{n:"芮城"},"c10125104":{n:"永济"},"c10125091":{n:"河津"}},"c10125003":{n:"忻州","c10125124":{n:"市辖区"},"c10125105":{n:"定襄"},"c10125061":{n:"五台"},"c10125017":{n:"代县"},"c10125067":{n:"繁峙"},"c10125004":{n:"宁武"},"c10125089":{n:"静乐"},"c10125073":{n:"神池"},"c10125027":{n:"五寨"},"c10125078":{n:"岢岚"},"c10125032":{n:"河曲"},"c10125082":{n:"保德"},"c10125037":{n:"偏关"},"c10125053":{n:"原平"}},"c10125006":{n:"临汾","c10125125":{n:"市辖区"},"c10125038":{n:"曲沃"},"c10125090":{n:"翼城"},"c10125044":{n:"襄汾"},"c10125097":{n:"洪洞"},"c10125031":{n:"古县"},"c10125026":{n:"安泽"},"c10125077":{n:"浮山"},"c10125072":{n:"吉县"},"c10125021":{n:"乡宁"},"c10125083":{n:"大宁"},"c10125015":{n:"隰县"},"c10125066":{n:"永和"},"c10125059":{n:"蒲县"},"c10125103":{n:"汾西"},"c10125007":{n:"侯马"},"c10125051":{n:"霍州"}},"c10125108":{n:"吕梁","c10125126":{n:"市辖区"},"c10125049":{n:"文水"},"c10125101":{n:"交城"},"c10125069":{n:"兴县"},"c10125043":{n:"临县"},"c10125018":{n:"柳林"},"c10125036":{n:"石楼"},"c10125023":{n:"岚县"},"c10125088":{n:"方山"},"c10125063":{n:"中阳"},"c10125013":{n:"交口"},"c10125056":{n:"孝义"},"c10125095":{n:"汾阳"}}},"c10121000":{n:"内蒙古","c10121001":{n:"呼和浩特","c10121096":{n:"新城区"},"c10121097":{n:"回民区"},"c10121098":{n:"玉泉区"},"c10121099":{n:"赛罕区"},"c10121017":{n:"土默特左旗"},"c10121053":{n:"托克托"},"c10121058":{n:"和林格尔"},"c10121064":{n:"清水河"},"c10121022":{n:"武川"}},"c10121003":{n:"包头","c10121100":{n:"市辖区"},"c10121032":{n:"土默特右旗"},"c10121070":{n:"固阳"},"c10121038":{n:"达尔罕茂明安联合旗"}},"c10121005":{n:"乌海","c10121102":{n:"市辖区"}},"c10121008":{n:"赤峰","c10121103":{n:"市辖区"},"c10121014":{n:"阿鲁科尔沁旗"},"c10121023":{n:"巴林左旗"},"c10121065":{n:"巴林右旗"},"c10121028":{n:"林西"},"c10121071":{n:"克什克腾旗"},"c10121059":{n:"翁牛特旗"},"c10121033":{n:"喀喇沁旗"},"c10121054":{n:"宁城"},"c10121018":{n:"敖汉旗"}},"c10121011":{n:"通辽","c10121104":{n:"市辖区"},"c10121082":{n:"科尔沁左翼中旗"},"c10121045":{n:"科尔沁左翼后旗"},"c10121074":{n:"开鲁"},"c10121036":{n:"库伦旗"},"c10121078":{n:"奈曼旗"},"c10121042":{n:"扎鲁特旗"},"c10121087":{n:"霍林郭勒"}},"c10121092":{n:"鄂尔多斯","c10121105":{n:"市辖区"},"c10121039":{n:"达拉特旗"},"c10121043":{n:"准格尔旗"},"c10121052":{n:"鄂托克前旗"},"c10121013":{n:"鄂托克旗"},"c10121085":{n:"杭锦旗"},"c10121048":{n:"乌审旗"},"c10121080":{n:"伊金霍洛旗"}},"c10121093":{n:"呼伦贝尔","c10121106":{n:"市辖区"},"c10121025":{n:"阿荣旗"},"c10121086":{n:"莫力达瓦达斡尔族自治旗"},"c10121073":{n:"鄂伦春自治旗"},"c10121061":{n:"鄂温克族自治旗"},"c10121035":{n:"陈巴尔虎旗"},"c10121077":{n:"新巴尔虎左旗"},"c10121041":{n:"新巴尔虎右旗"},"c10121049":{n:"满洲里"},"c10121067":{n:"牙克石"},"c10121030":{n:"扎兰屯"},"c10121044":{n:"额尔古纳"},"c10121081":{n:"根河"}},"c10121094":{n:"巴彦淖尔","c10121107":{n:"市辖区"},"c10121057":{n:"五原"},"c10121021":{n:"磴口"},"c10121063":{n:"乌拉特前旗"},"c10121027":{n:"乌拉特中旗"},"c10121069":{n:"乌拉特后旗"},"c10121031":{n:"杭锦后旗"}},"c10121095":{n:"乌兰察布","c10121108":{n:"市辖区"},"c10121051":{n:"卓资"},"c10121047":{n:"化德"},"c10121016":{n:"商都"},"c10121056":{n:"兴和"},"c10121020":{n:"凉城"},"c10121062":{n:"察哈尔右翼前旗"},"c10121026":{n:"察哈尔右翼中旗"},"c10121068":{n:"察哈尔右翼后旗"},"c10121084":{n:"四子王旗"},"c10121012":{n:"丰镇"}},"c10121091":{n:"兴安盟","c10121024":{n:"乌兰浩特"},"c10121109":{n:"阿尔山"},"c10121110":{n:"科尔沁右翼前旗"},"c10121072":{n:"科尔沁右翼中旗"},"c10121066":{n:"扎赉特旗"},"c10121029":{n:"突泉"}},"c10121089":{n:"锡林郭勒盟","c10121037":{n:"二连浩特"},"c10121009":{n:"锡林浩特"},"c10121112":{n:"阿巴嘎旗"},"c10121083":{n:"苏尼特左旗"},"c10121046":{n:"苏尼特右旗"},"c10121050":{n:"东乌珠穆沁旗"},"c10121015":{n:"西乌珠穆沁旗"},"c10121010":{n:"太仆寺旗"},"c10121088":{n:"镶黄旗"},"c10121019":{n:"正镶白旗"},"c10121060":{n:"正蓝旗"},"c10121079":{n:"多伦"}},"c10121090":{n:"阿拉善盟","c10121034":{n:"阿拉善左旗"},"c10121076":{n:"阿拉善右旗"},"c10121040":{n:"额济纳旗"}}},"c10120000":{n:"辽宁","c10120001":{n:"沈阳","c10120055":{n:"和平区"},"c10120056":{n:"沈河区"},"c10120057":{n:"大东区"},"c10120058":{n:"皇姑区"},"c10120059":{n:"铁西区"},"c10120060":{n:"苏家屯区"},"c10120061":{n:"东陵区"},"c10120062":{n:"沈北新区"},"c10120063":{n:"于洪区"},"c10120026":{n:"辽中"},"c10120047":{n:"康平"},"c10120030":{n:"法库"},"c10120045":{n:"新民"}},"c10120006":{n:"大连","c10120064":{n:"中山区"},"c10120065":{n:"西岗区"},"c10120066":{n:"沙河口区"},"c10120067":{n:"甘井子区"},"c10120068":{n:"旅顺口区"},"c10120069":{n:"金州区"},"c10120020":{n:"长海"},"c10120041":{n:"瓦房店"},"c10120022":{n:"普兰店"},"c10120040":{n:"庄河"}},"c10120004":{n:"鞍山","c10120070":{n:"市辖区"},"c10120049":{n:"台安"},"c10120032":{n:"岫岩"},"c10120028":{n:"海城"}},"c10120003":{n:"抚顺","c10120071":{n:"市辖区"},"c10120072":{n:"抚顺县"},"c10120036":{n:"新宾"},"c10120015":{n:"清原"}},"c10120007":{n:"本溪","c10120073":{n:"市辖区"},"c10120074":{n:"本溪县"},"c10120019":{n:"桓仁"}},"c10120008":{n:"丹东","c10120075":{n:"市辖区"},"c10120023":{n:"宽甸"},"c10120021":{n:"东港"},"c10120043":{n:"凤城"}},"c10120009":{n:"锦州","c10120076":{n:"市辖区"},"c10120048":{n:"黑山"},"c10120031":{n:"义县"},"c10120027":{n:"凌海"},"c10120077":{n:"北镇"}},"c10120005":{n:"营口","c10120078":{n:"市辖区"},"c10120054":{n:"盖州"},"c10120035":{n:"大石桥"}},"c10120011":{n:"阜新","c10120079":{n:"市辖区"},"c10120080":{n:"阜新县"},"c10120018":{n:"彰武"}},"c10120013":{n:"辽阳","c10120081":{n:"市辖区"},"c10120082":{n:"辽阳县"},"c10120042":{n:"灯塔"}},"c10120012":{n:"盘锦","c10120083":{n:"市辖区"},"c10120033":{n:"大洼"},"c10120052":{n:"盘山"}},"c10120002":{n:"铁岭","c10120084":{n:"市辖区"},"c10120085":{n:"铁岭县"},"c10120016":{n:"西丰"},"c10120053":{n:"昌图"},"c10120038":{n:"调兵山"},"c10120034":{n:"开原"}},"c10120010":{n:"朝阳","c10120087":{n:"市辖区"},"c10120088":{n:"朝阳县"},"c10120025":{n:"建平"},"c10120050":{n:"喀喇沁左翼"},"c10120046":{n:"北票"},"c10120029":{n:"凌源"}},"c10120014":{n:"葫芦岛","c10120089":{n:"市辖区"},"c10120037":{n:"绥中"},"c10120017":{n:"建昌"},"c10120039":{n:"兴城"}}},"c10117000":{n:"吉林","c10117001":{n:"长春","c10117050":{n:"南关区"},"c10117051":{n:"宽城区"},"c10117052":{n:"朝阳区"},"c10117053":{n:"二道区"},"c10117054":{n:"绿园区"},"c10117030":{n:"双阳区"},"c10117013":{n:"农安"},"c10117033":{n:"九台"},"c10117036":{n:"榆树"},"c10117014":{n:"德惠"}},"c10117002":{n:"吉林","c10117055":{n:"市辖区"},"c10117039":{n:"永吉"},"c10117021":{n:"蛟河"},"c10117041":{n:"桦甸"},"c10117043":{n:"舒兰"},"c10117018":{n:"磐石"}},"c10117006":{n:"四平","c10117056":{n:"市辖区"},"c10117016":{n:"梨树"},"c10117057":{n:"伊通"},"c10117038":{n:"公主岭"},"c10117035":{n:"双辽"}},"c10117028":{n:"辽源","c10117058":{n:"市辖区"},"c10117031":{n:"东丰"},"c10117011":{n:"东辽"}},"c10117004":{n:"通化","c10117059":{n:"市辖区"},"c10117060":{n:"通化县"},"c10117010":{n:"辉南"},"c10117027":{n:"柳河"},"c10117005":{n:"梅河口"},"c10117020":{n:"集安"}},"c10117048":{n:"白山","c10117061":{n:"市辖区"},"c10117022":{n:"抚松"},"c10117019":{n:"靖宇"},"c10117042":{n:"长白"},"c10117040":{n:"临江"}},"c10117008":{n:"松原","c10117062":{n:"市辖区"},"c10117015":{n:"前郭尔罗斯"},"c10117037":{n:"长岭"},"c10117017":{n:"乾安"},"c10117034":{n:"扶余"}},"c10117007":{n:"白城","c10117063":{n:"市辖区"},"c10117047":{n:"镇赉"},"c10117023":{n:"通榆"},"c10117025":{n:"洮南"},"c10117045":{n:"大安"}},"c10117049":{n:"延边","c10117003":{n:"延吉"},"c10117012":{n:"图们"},"c10117029":{n:"敦化"},"c10117024":{n:"珲春"},"c10117032":{n:"龙井"},"c10117026":{n:"和龙"},"c10117046":{n:"汪清"},"c10117009":{n:"安图"}}},"c10114000":{n:"黑龙江","c10114001":{n:"哈尔滨","c10114082":{n:"道里区"},"c10114083":{n:"南岗区"},"c10114084":{n:"道外区"},"c10114085":{n:"平房区"},"c10114086":{n:"松北区"},"c10114087":{n:"香坊区"},"c10114016":{n:"呼兰区"},"c10114026":{n:"阿城区"},"c10114036":{n:"依兰"},"c10114031":{n:"方正"},"c10114079":{n:"宾县"},"c10114049":{n:"巴彦"},"c10114045":{n:"木兰"},"c10114066":{n:"通河"},"c10114035":{n:"延寿"},"c10114075":{n:"双城"},"c10114071":{n:"尚志"},"c10114012":{n:"五常"}},"c10114005":{n:"齐齐哈尔","c10114088":{n:"市辖区"},"c10114063":{n:"龙江"},"c10114023":{n:"依安"},"c10114038":{n:"泰来"},"c10114069":{n:"甘南"},"c10114034":{n:"富裕"},"c10114019":{n:"克山"},"c10114073":{n:"克东"},"c10114058":{n:"拜泉"},"c10114029":{n:"讷河"}},"c10114009":{n:"鸡西","c10114089":{n:"市辖区"},"c10114061":{n:"鸡东"},"c10114056":{n:"虎林"},"c10114027":{n:"密山"}},"c10114020":{n:"鹤岗","c10114090":{n:"市辖区"},"c10114054":{n:"萝北"},"c10114059":{n:"绥滨"}},"c10114024":{n:"双鸭山","c10114091":{n:"市辖区"},"c10114070":{n:"集贤"},"c10114064":{n:"友谊"},"c10114030":{n:"宝清"},"c10114017":{n:"饶河"}},"c10114007":{n:"大庆","c10114092":{n:"市辖区"},"c10114060":{n:"肇州"},"c10114065":{n:"肇源"},"c10114055":{n:"林甸"},"c10114025":{n:"杜尔伯特"}},"c10114042":{n:"伊春","c10114093":{n:"市辖区"},"c10114081":{n:"嘉荫"},"c10114051":{n:"铁力"}},"c10114003":{n:"佳木斯","c10114094":{n:"市辖区"},"c10114041":{n:"桦南"},"c10114050":{n:"桦川"},"c10114076":{n:"汤原"},"c10114046":{n:"抚远"},"c10114013":{n:"同江"},"c10114080":{n:"富锦"}},"c10114067":{n:"七台河","c10114095":{n:"市辖区"},"c10114032":{n:"勃利"}},"c10114004":{n:"牡丹江","c10114096":{n:"市辖区"},"c10114047":{n:"东宁"},"c10114043":{n:"林口"},"c10114018":{n:"绥芬河"},"c10114014":{n:"海林"},"c10114052":{n:"宁安"},"c10114010":{n:"穆棱"}},"c10114053":{n:"黑河","c10114097":{n:"市辖区"},"c10114028":{n:"嫩江"},"c10114022":{n:"逊克"},"c10114057":{n:"孙吴"},"c10114006":{n:"北安"},"c10114068":{n:"五大连池"}},"c10114002":{n:"绥化","c10114098":{n:"市辖区"},"c10114011":{n:"望奎"},"c10114048":{n:"兰西"},"c10114015":{n:"青冈"},"c10114039":{n:"庆安"},"c10114074":{n:"明水"},"c10114044":{n:"绥棱"},"c10114021":{n:"安达"},"c10114040":{n:"肇东"},"c10114078":{n:"海伦"}},"c10114008":{n:"大兴安岭","c10114037":{n:"呼玛"},"c10114072":{n:"塔河"},"c10114077":{n:"漠河"}}},"c10106000":{n:"安徽","c10106001":{n:"合肥","c10106081":{n:"瑶海区"},"c10106082":{n:"庐阳区"},"c10106083":{n:"蜀山区"},"c10106084":{n:"包河区"},"c10106066":{n:"长丰"},"c10106071":{n:"肥东"},"c10106033":{n:"肥西"},"c10106069":{n:"庐江"},"c10106007":{n:"巢湖"}},"c10106009":{n:"芜湖","c10106085":{n:"市辖区"},"c10106052":{n:"芜湖县"},"c10106018":{n:"繁昌"},"c10106048":{n:"南陵"},"c10106036":{n:"无为"}},"c10106003":{n:"蚌埠","c10106086":{n:"市辖区"},"c10106024":{n:"怀远"},"c10106061":{n:"五河"},"c10106056":{n:"固镇"}},"c10106002":{n:"淮南","c10106087":{n:"市辖区"},"c10106043":{n:"凤台"}},"c10106075":{n:"马鞍山","c10106088":{n:"市辖区"},"c10106039":{n:"当涂"},"c10106064":{n:"含山"},"c10106031":{n:"和县"}},"c10106042":{n:"淮北","c10106089":{n:"市辖区"},"c10106074":{n:"濉溪"}},"c10106013":{n:"铜陵","c10106090":{n:"市辖区"},"c10106091":{n:"铜陵县"}},"c10106011":{n:"安庆","c10106092":{n:"市辖区"},"c10106021":{n:"怀宁"},"c10106068":{n:"枞阳"},"c10106026":{n:"潜山"},"c10106035":{n:"太湖"},"c10106058":{n:"宿松"},"c10106063":{n:"望江"},"c10106053":{n:"岳西"},"c10106030":{n:"桐城"}},"c10106012":{n:"黄山","c10106093":{n:"市辖区"},"c10106051":{n:"歙县"},"c10106047":{n:"休宁"},"c10106014":{n:"黟县"},"c10106017":{n:"祁门"}},"c10106008":{n:"滁州","c10106094":{n:"市辖区"},"c10106041":{n:"来安"},"c10106016":{n:"全椒"},"c10106073":{n:"定远"},"c10106046":{n:"凤阳"},"c10106078":{n:"天长"},"c10106038":{n:"明光"}},"c10106005":{n:"阜阳","c10106095":{n:"市辖区"},"c10106023":{n:"临泉"},"c10106060":{n:"太和"},"c10106037":{n:"阜南"},"c10106028":{n:"颍上"},"c10106065":{n:"界首"}},"c10106004":{n:"宿州","c10106096":{n:"市辖区"},"c10106015":{n:"砀山"},"c10106050":{n:"萧县"},"c10106045":{n:"灵璧"},"c10106077":{n:"泗县"}},"c10106006":{n:"六安","c10106098":{n:"市辖区"},"c10106049":{n:"寿县"},"c10106044":{n:"霍邱"},"c10106019":{n:"舒城"},"c10106040":{n:"金寨"},"c10106076":{n:"霍山"}},"c10106072":{n:"亳州","c10106099":{n:"市辖区"},"c10106032":{n:"涡阳"},"c10106070":{n:"蒙城"},"c10106055":{n:"利辛"}},"c10106079":{n:"池州","c10106100":{n:"市辖区"},"c10106022":{n:"东至"},"c10106054":{n:"石台"},"c10106059":{n:"青阳"}},"c10106080":{n:"宣城","c10106101":{n:"市辖区"},"c10106029":{n:"郎溪"},"c10106057":{n:"广德"},"c10106067":{n:"泾县"},"c10106020":{n:"绩溪"},"c10106025":{n:"旌德"},"c10106062":{n:"宁国"}}},"c10119000":{n:"江西","c10119001":{n:"南昌","c10119089":{n:"东湖区"},"c10119090":{n:"西湖区"},"c10119091":{n:"青云谱区"},"c10119092":{n:"湾里区"},"c10119093":{n:"青山湖区"},"c10119094":{n:"南昌县"},"c10119049":{n:"新建"},"c10119054":{n:"安义"},"c10119012":{n:"进贤"}},"c10119003":{n:"景德镇","c10119095":{n:"市辖区"},"c10119016":{n:"浮梁"},"c10119053":{n:"乐平"}},"c10119007":{n:"萍乡","c10119096":{n:"市辖区"},"c10119021":{n:"莲花"},"c10119097":{n:"上栗"},"c10119098":{n:"芦溪"}},"c10119002":{n:"九江","c10119099":{n:"市辖区"},"c10119100":{n:"九江县"},"c10119084":{n:"武宁"},"c10119063":{n:"修水"},"c10119043":{n:"永修"},"c10119074":{n:"德安"},"c10119069":{n:"星子"},"c10119078":{n:"都昌"},"c10119028":{n:"湖口"},"c10119037":{n:"彭泽"},"c10119032":{n:"瑞昌"},"c10119101":{n:"共青城"}},"c10119040":{n:"新余","c10119102":{n:"市辖区"},"c10119081":{n:"分宜"}},"c10119005":{n:"鹰潭","c10119103":{n:"市辖区"},"c10119068":{n:"余江"},"c10119027":{n:"贵溪"}},"c10119008":{n:"赣州","c10119104":{n:"市辖区"},"c10119065":{n:"赣县"},"c10119076":{n:"信丰"},"c10119029":{n:"大余"},"c10119071":{n:"上犹"},"c10119034":{n:"崇义"},"c10119086":{n:"安远"},"c10119039":{n:"龙南"},"c10119080":{n:"定南"},"c10119045":{n:"全南"},"c10119056":{n:"宁都"},"c10119051":{n:"于都"},"c10119014":{n:"兴国"},"c10119048":{n:"会昌"},"c10119060":{n:"寻乌"},"c10119018":{n:"石城"},"c10119088":{n:"瑞金"},"c10119024":{n:"南康"}},"c10119009":{n:"吉安","c10119105":{n:"市辖区"},"c10119106":{n:"吉安县"},"c10119062":{n:"吉水"},"c10119026":{n:"峡江"},"c10119058":{n:"新干"},"c10119020":{n:"永丰"},"c10119067":{n:"泰和"},"c10119073":{n:"遂川"},"c10119031":{n:"万安"},"c10119083":{n:"安福"},"c10119077":{n:"永新"},"c10119042":{n:"井冈山"}},"c10119006":{n:"宜春","c10119108":{n:"市辖区"},"c10119075":{n:"奉新"},"c10119047":{n:"万载"},"c10119033":{n:"上高"},"c10119070":{n:"宜丰"},"c10119038":{n:"靖安"},"c10119011":{n:"铜鼓"},"c10119044":{n:"丰城"},"c10119085":{n:"樟树"},"c10119079":{n:"高安"}},"c10119010":{n:"抚州","c10119109":{n:"市辖区"},"c10119059":{n:"南城"},"c10119064":{n:"黎川"},"c10119023":{n:"南丰"},"c10119050":{n:"崇仁"},"c10119017":{n:"乐安"},"c10119055":{n:"宜黄"},"c10119087":{n:"金溪"},"c10119041":{n:"资溪"},"c10119046":{n:"东乡"},"c10119082":{n:"广昌"}},"c10119004":{n:"上饶","c10119110":{n:"市辖区"},"c10119111":{n:"上饶县"},"c10119061":{n:"广丰"},"c10119052":{n:"玉山"},"c10119066":{n:"铅山"},"c10119030":{n:"横峰"},"c10119057":{n:"弋阳"},"c10119015":{n:"余干"},"c10119112":{n:"鄱阳"},"c10119025":{n:"万年"},"c10119072":{n:"婺源"},"c10119035":{n:"德兴"}}},"c10113000":{n:"河南","c10113001":{n:"郑州","c10113127":{n:"中原区"},"c10113128":{n:"二七区"},"c10113129":{n:"管城回族区"},"c10113130":{n:"金水区"},"c10113073":{n:"上街区"},"c10113131":{n:"惠济区"},"c10113026":{n:"中牟"},"c10113092":{n:"巩义"},"c10113022":{n:"荥阳"},"c10113085":{n:"新密"},"c10113078":{n:"新郑"},"c10113034":{n:"登封"}},"c10113013":{n:"开封","c10113132":{n:"市辖区"},"c10113031":{n:"杞县"},"c10113089":{n:"通许"},"c10113039":{n:"尉氏"},"c10113154":{n:"开封"},"c10113082":{n:"兰考"}},"c10113009":{n:"洛阳","c10113133":{n:"市辖区"},"c10113101":{n:"孟津"},"c10113116":{n:"新安"},"c10113075":{n:"栾川"},"c10113124":{n:"嵩县"},"c10113067":{n:"汝阳"},"c10113061":{n:"宜阳"},"c10113046":{n:"洛宁"},"c10113109":{n:"伊川"},"c10113053":{n:"偃师"}},"c10113010":{n:"平顶山","c10113134":{n:"市辖区"},"c10113123":{n:"宝丰"},"c10113115":{n:"叶县"},"c10113066":{n:"鲁山"},"c10113108":{n:"郏县"},"c10113052":{n:"舞钢"},"c10113074":{n:"汝州"}},"c10113003":{n:"安阳","c10113135":{n:"市辖区"},"c10113136":{n:"安阳县"},"c10113049":{n:"汤阴"},"c10113112":{n:"滑县"},"c10113056":{n:"内黄"},"c10113104":{n:"林州"}},"c10113015":{n:"鹤壁","c10113137":{n:"市辖区"},"c10113106":{n:"浚县"},"c10113058":{n:"淇县"}},"c10113002":{n:"新乡","c10113138":{n:"市辖区"},"c10113139":{n:"新乡县"},"c10113076":{n:"获嘉"},"c10113018":{n:"原阳"},"c10113069":{n:"延津"},"c10113081":{n:"封丘"},"c10113024":{n:"长垣"},"c10113119":{n:"卫辉"},"c10113030":{n:"辉县"}},"c10113017":{n:"焦作","c10113140":{n:"市辖区"},"c10113079":{n:"修武"},"c10113094":{n:"博爱"},"c10113028":{n:"武陟"},"c10113087":{n:"温县"},"c10113043":{n:"沁阳"},"c10113141":{n:"孟州"}},"c10113016":{n:"濮阳","c10113142":{n:"市辖区"},"c10113077":{n:"清丰"},"c10113020":{n:"南乐"},"c10113071":{n:"范县"},"c10113121":{n:"台前"},"c10113155":{n:"濮阳"}},"c10113004":{n:"许昌","c10113143":{n:"市辖区"},"c10113144":{n:"许昌县"},"c10113096":{n:"鄢陵"},"c10113060":{n:"襄城"},"c10113045":{n:"禹州"},"c10113038":{n:"长葛"}},"c10113006":{n:"漯河","c10113145":{n:"市辖区"},"c10113068":{n:"舞阳"},"c10113117":{n:"临颍"}},"c10113011":{n:"三门峡","c10113147":{n:"市辖区"},"c10113084":{n:"渑池"},"c10113041":{n:"陕县"},"c10113025":{n:"卢氏"},"c10113033":{n:"义马"},"c10113091":{n:"灵宝"}},"c10113012":{n:"南阳","c10113148":{n:"市辖区"},"c10113120":{n:"南召"},"c10113050":{n:"方城"},"c10113042":{n:"西峡"},"c10113063":{n:"镇平"},"c10113019":{n:"内乡"},"c10113098":{n:"淅川"},"c10113105":{n:"社旗"},"c10113057":{n:"唐河"},"c10113113":{n:"新野"},"c10113070":{n:"桐柏"},"c10113093":{n:"邓州"}},"c10113014":{n:"商丘","c10113150":{n:"市辖区"},"c10113065":{n:"民权"},"c10113118":{n:"睢县"},"c10113062":{n:"宁陵"},"c10113111":{n:"柘城"},"c10113048":{n:"虞城"},"c10113103":{n:"夏邑"},"c10113055":{n:"永城"}},"c10113007":{n:"信阳","c10113151":{n:"市辖区"},"c10113027":{n:"罗山"},"c10113059":{n:"光山"},"c10113114":{n:"新县"},"c10113072":{n:"商城"},"c10113122":{n:"固始"},"c10113107":{n:"潢川"},"c10113064":{n:"淮滨"},"c10113021":{n:"息县"}},"c10113008":{n:"周口","c10113152":{n:"市辖区"},"c10113102":{n:"扶沟"},"c10113083":{n:"西华"},"c10113110":{n:"商水"},"c10113097":{n:"沈丘"},"c10113090":{n:"郸城"},"c10113032":{n:"淮阳"},"c10113054":{n:"太康"},"c10113040":{n:"鹿邑"},"c10113047":{n:"项城"}},"c10113005":{n:"驻马店","c10113153":{n:"市辖区"},"c10113037":{n:"西平"},"c10113095":{n:"上蔡"},"c10113044":{n:"平舆"},"c10113051":{n:"正阳"},"c10113088":{n:"确山"},"c10113023":{n:"泌阳"},"c10113029":{n:"汝南"},"c10113080":{n:"遂平"},"c10113100":{n:"新蔡"}},"c10113126":{n:"省直辖县级","c10113099":{n:"济源"}}},"c10116000":{n:"湖南","c10116001":{n:"长沙","c10116098":{n:"芙蓉区"},"c10116099":{n:"天心区"},"c10116100":{n:"岳麓区"},"c10116101":{n:"开福区"},"c10116102":{n:"雨花区"},"c10116071":{n:"望城区"},"c10116103":{n:"长沙县"},"c10116028":{n:"宁乡"},"c10116033":{n:"浏阳"}},"c10116002":{n:"株洲","c10116104":{n:"市辖区"},"c10116105":{n:"株洲县"},"c10116090":{n:"攸县"},"c10116054":{n:"茶陵"},"c10116060":{n:"炎陵"},"c10116015":{n:"醴陵"}},"c10116014":{n:"湘潭","c10116106":{n:"市辖区"},"c10116107":{n:"湘潭县"},"c10116043":{n:"湘乡"},"c10116080":{n:"韶山"}},"c10116009":{n:"衡阳","c10116108":{n:"市辖区"},"c10116109":{n:"衡阳县"},"c10116031":{n:"衡南"},"c10116036":{n:"衡山"},"c10116074":{n:"衡东"},"c10116077":{n:"祁东"},"c10116025":{n:"耒阳"},"c10116068":{n:"常宁"}},"c10116010":{n:"邵阳","c10116110":{n:"市辖区"},"c10116052":{n:"邵东"},"c10116041":{n:"新邵"},"c10116132":{n:"邵阳县"},"c10116095":{n:"隆回"},"c10116088":{n:"洞口"},"c10116084":{n:"绥宁"},"c10116037":{n:"新宁"},"c10116078":{n:"城步"},"c10116046":{n:"武冈"}},"c10116004":{n:"岳阳","c10116112":{n:"市辖区"},"c10116113":{n:"岳阳县"},"c10116093":{n:"华容"},"c10116050":{n:"湘阴"},"c10116018":{n:"平江"},"c10116062":{n:"汨罗"},"c10116057":{n:"临湘"}},"c10116005":{n:"常德","c10116114":{n:"市辖区"},"c10116081":{n:"安乡"},"c10116072":{n:"汉寿"},"c10116076":{n:"澧县"},"c10116044":{n:"临澧"},"c10116029":{n:"桃源"},"c10116034":{n:"石门"},"c10116115":{n:"津市"}},"c10116013":{n:"张家界","c10116116":{n:"市辖区"},"c10116082":{n:"慈利"},"c10116040":{n:"桑植"}},"c10116003":{n:"益阳","c10116117":{n:"市辖区"},"c10116055":{n:"南县"},"c10116048":{n:"桃江"},"c10116091":{n:"安化"},"c10116016":{n:"沅江"}},"c10116011":{n:"郴州","c10116118":{n:"市辖区"},"c10116019":{n:"桂阳"},"c10116023":{n:"宜章"},"c10116063":{n:"永兴"},"c10116094":{n:"嘉禾"},"c10116051":{n:"临武"},"c10116087":{n:"汝城"},"c10116045":{n:"桂东"},"c10116058":{n:"安仁"},"c10116083":{n:"资兴"}},"c10116075":{n:"永州","c10116119":{n:"市辖区"},"c10116079":{n:"祁阳"},"c10116038":{n:"东安"},"c10116059":{n:"双牌"},"c10116096":{n:"道县"},"c10116053":{n:"江永"},"c10116085":{n:"宁远"},"c10116047":{n:"蓝山"},"c10116042":{n:"新田"},"c10116089":{n:"江华"}},"c10116008":{n:"怀化","c10116120":{n:"市辖区"},"c10116121":{n:"中方"},"c10116070":{n:"沅陵"},"c10116027":{n:"辰溪"},"c10116056":{n:"溆浦"},"c10116022":{n:"会同"},"c10116086":{n:"麻阳"},"c10116066":{n:"新晃"},"c10116049":{n:"芷江"},"c10116061":{n:"靖州"},"c10116017":{n:"通道"},"c10116032":{n:"洪江"}},"c10116007":{n:"娄底","c10116122":{n:"市辖区"},"c10116021":{n:"双峰"},"c10116026":{n:"新化"},"c10116065":{n:"冷水江"},"c10116069":{n:"涟源"}},"c10116097":{n:"湘西","c10116006":{n:"吉首"},"c10116035":{n:"泸溪"},"c10116020":{n:"凤凰"},"c10116030":{n:"花垣"},"c10116067":{n:"保靖"},"c10116073":{n:"古丈"},"c10116024":{n:"永顺"},"c10116064":{n:"龙山"}}},"c10109000":{n:"广西","c10109001":{n:"南宁","c10109090":{n:"兴宁区"},"c10109091":{n:"青秀区"},"c10109092":{n:"江南区"},"c10109093":{n:"西乡塘区"},"c10109094":{n:"良庆区"},"c10109044":{n:"邕宁区"},"c10109011":{n:"武鸣"},"c10109065":{n:"隆安"},"c10109054":{n:"马山"},"c10109039":{n:"上林"},"c10109059":{n:"宾阳"},"c10109025":{n:"横县"}},"c10109002":{n:"柳州","c10109095":{n:"市辖区"},"c10109036":{n:"柳江"},"c10109042":{n:"柳城"},"c10109074":{n:"鹿寨"},"c10109047":{n:"融安"},"c10109086":{n:"融水"},"c10109080":{n:"三江"}},"c10109007":{n:"桂林","c10109096":{n:"市辖区"},"c10109028":{n:"阳朔"},"c10109068":{n:"临桂"},"c10109045":{n:"灵川"},"c10109084":{n:"全州"},"c10109078":{n:"兴安"},"c10109050":{n:"永福"},"c10109072":{n:"灌阳"},"c10109012":{n:"龙胜"},"c10109016":{n:"资源"},"c10109040":{n:"平乐"},"c10109034":{n:"荔浦"},"c10109055":{n:"恭城"}},"c10109008":{n:"梧州","c10109098":{n:"市辖区"},"c10109021":{n:"苍梧"},"c10109062":{n:"藤县"},"c10109070":{n:"蒙山"},"c10109026":{n:"岑溪"}},"c10109010":{n:"北海","c10109099":{n:"市辖区"},"c10109088":{n:"合浦"}},"c10109006":{n:"防城港","c10109100":{n:"市辖区"},"c10109033":{n:"上思"},"c10109101":{n:"东兴"}},"c10109003":{n:"钦州","c10109102":{n:"市辖区"},"c10109056":{n:"灵山"},"c10109017":{n:"浦北"}},"c10109014":{n:"贵港","c10109103":{n:"市辖区"},"c10109019":{n:"平南"},"c10109058":{n:"桂平"}},"c10109005":{n:"玉林","c10109104":{n:"市辖区"},"c10109081":{n:"容县"},"c10109087":{n:"陆川"},"c10109053":{n:"博白"},"c10109105":{n:"兴业"},"c10109048":{n:"北流"}},"c10109004":{n:"百色","c10109106":{n:"市辖区"},"c10109035":{n:"田阳"},"c10109041":{n:"田东"},"c10109046":{n:"平果"},"c10109085":{n:"德保"},"c10109073":{n:"靖西"},"c10109051":{n:"那坡"},"c10109069":{n:"凌云"},"c10109079":{n:"乐业"},"c10109024":{n:"田林"},"c10109029":{n:"西林"},"c10109064":{n:"隆林"}},"c10109089":{n:"贺州","c10109107":{n:"市辖区"},"c10109066":{n:"昭平"},"c10109037":{n:"钟山"},"c10109075":{n:"富川"}},"c10109009":{n:"河池","c10109108":{n:"市辖区"},"c10109038":{n:"南丹"},"c10109067":{n:"天峨"},"c10109032":{n:"凤山"},"c10109071":{n:"东兰"},"c10109063":{n:"罗城"},"c10109027":{n:"环江"},"c10109076":{n:"巴马"},"c10109043":{n:"都安"},"c10109082":{n:"大化"},"c10109022":{n:"宜州"}},"c10109018":{n:"来宾","c10109109":{n:"市辖区"},"c10109057":{n:"忻城"},"c10109023":{n:"象州"},"c10109060":{n:"武宣"},"c10109052":{n:"金秀"},"c10109013":{n:"合山"}},"c10109083":{n:"崇左","c10109110":{n:"市辖区"},"c10109030":{n:"扶绥"},"c10109049":{n:"宁明"},"c10109015":{n:"龙州"},"c10109020":{n:"大新"},"c10109061":{n:"天等"},"c10109077":{n:"凭祥"}}},"c10111000":{n:"海南","c10111001":{n:"海口","c10111023":{n:"秀英区"},"c10111024":{n:"龙华区"},"c10111008":{n:"琼山区"},"c10111025":{n:"美兰区"}},"c10111002":{n:"三亚","c10111026":{n:"市辖区"}},"c10111022":{n:"省直辖县级","c10111021":{n:"五指山"},"c10111007":{n:"琼海"},"c10111020":{n:"儋州"},"c10111006":{n:"文昌"},"c10111017":{n:"万宁"},"c10111013":{n:"东方"},"c10111014":{n:"定安"},"c10111016":{n:"屯昌"},"c10111004":{n:"澄迈"},"c10111015":{n:"临高"},"c10111012":{n:"白沙"},"c10111005":{n:"昌江"},"c10111018":{n:"乐东"},"c10111019":{n:"陵水"},"c10111010":{n:"保亭"},"c10111011":{n:"琼中"},"c10111027":{n:"西沙群岛"},"c10111028":{n:"南沙群岛"},"c10111029":{n:"中沙群岛的岛礁及其海域"}}},"c10110000":{n:"贵州","c10110001":{n:"贵阳","c10110085":{n:"南明区"},"c10110086":{n:"云岩区"},"c10110087":{n:"花溪区"},"c10110088":{n:"乌当区"},"c10110089":{n:"白云区"},"c10110090":{n:"小河区"},"c10110052":{n:"开阳"},"c10110015":{n:"息烽"},"c10110048":{n:"修文"},"c10110009":{n:"清镇"}},"c10110002":{n:"六盘水","c10110091":{n:"钟山区"},"c10110034":{n:"六枝特区"},"c10110092":{n:"水城"},"c10110073":{n:"盘县"}},"c10110007":{n:"遵义","c10110093":{n:"市辖区"},"c10110094":{n:"遵义县"},"c10110066":{n:"桐梓"},"c10110032":{n:"绥阳"},"c10110071":{n:"正安"},"c10110036":{n:"道真"},"c10110013":{n:"务川"},"c10110041":{n:"凤冈"},"c10110076":{n:"湄潭"},"c10110046":{n:"余庆"},"c10110023":{n:"习水"},"c10110057":{n:"赤水"},"c10110061":{n:"仁怀"}},"c10110006":{n:"安顺","c10110095":{n:"市辖区"},"c10110044":{n:"平坝"},"c10110053":{n:"普定"},"c10110016":{n:"镇宁"},"c10110049":{n:"关岭"},"c10110010":{n:"紫云"}},"c10110021":{n:"毕节","c10110096":{n:"市辖区"},"c10110025":{n:"大方"},"c10110059":{n:"黔西"},"c10110063":{n:"金沙"},"c10110029":{n:"织金"},"c10110020":{n:"纳雍"},"c10110017":{n:"威宁"},"c10110054":{n:"赫章"}},"c10110055":{n:"铜仁","c10110097":{n:"市辖区"},"c10110075":{n:"江口"},"c10110003":{n:"玉屏"},"c10110040":{n:"石阡"},"c10110080":{n:"思南"},"c10110045":{n:"印江"},"c10110011":{n:"德江"},"c10110065":{n:"沿河"},"c10110031":{n:"松桃"}},"c10110082":{n:"黔西南","c10110026":{n:"兴义"},"c10110035":{n:"兴仁"},"c10110039":{n:"普安"},"c10110079":{n:"晴隆"},"c10110074":{n:"贞丰"},"c10110030":{n:"望谟"},"c10110064":{n:"册亨"},"c10110069":{n:"安龙"}},"c10110083":{n:"黔东南","c10110004":{n:"凯里"},"c10110014":{n:"黄平"},"c10110047":{n:"施秉"},"c10110018":{n:"三穗"},"c10110012":{n:"镇远"},"c10110051":{n:"岑巩"},"c10110056":{n:"天柱"},"c10110022":{n:"锦屏"},"c10110068":{n:"剑河"},"c10110008":{n:"台江"},"c10110060":{n:"黎平"},"c10110042":{n:"榕江"},"c10110027":{n:"从江"},"c10110038":{n:"雷山"},"c10110043":{n:"麻江"},"c10110078":{n:"丹寨"}},"c10110084":{n:"黔南","c10110005":{n:"都匀"},"c10110058":{n:"福泉"},"c10110028":{n:"荔波"},"c10110019":{n:"贵定"},"c10110024":{n:"瓮安"},"c10110067":{n:"独山"},"c10110033":{n:"平塘"},"c10110072":{n:"罗甸"},"c10110050":{n:"长顺"},"c10110077":{n:"龙里"},"c10110037":{n:"惠水"},"c10110062":{n:"三都"}}},"c10130000":{n:"云南","c10130001":{n:"昆明","c10130131":{n:"五华区"},"c10130132":{n:"盘龙区"},"c10130133":{n:"官渡区"},"c10130134":{n:"西山区"},"c10130026":{n:"东川区"},"c10130024":{n:"呈贡区"},"c10130087":{n:"晋宁"},"c10130072":{n:"富民"},"c10130079":{n:"宜良"},"c10130135":{n:"石林"},"c10130017":{n:"嵩明"},"c10130039":{n:"禄劝"},"c10130080":{n:"寻甸"},"c10130031":{n:"安宁"}},"c10130002":{n:"曲靖","c10130136":{n:"市辖区"},"c10130025":{n:"马龙"},"c10130095":{n:"陆良"},"c10130032":{n:"师宗"},"c10130047":{n:"罗平"},"c10130040":{n:"富源"},"c10130088":{n:"会泽"},"c10130137":{n:"沾益"},"c10130101":{n:"宣威"}},"c10130011":{n:"玉溪","c10130138":{n:"市辖区"},"c10130105":{n:"江川"},"c10130067":{n:"澄江"},"c10130059":{n:"通海"},"c10130043":{n:"华宁"},"c10130119":{n:"易门"},"c10130126":{n:"峨山"},"c10130051":{n:"新平"},"c10130111":{n:"元江"}},"c10130010":{n:"保山","c10130139":{n:"市辖区"},"c10130123":{n:"施甸"},"c10130055":{n:"腾冲"},"c10130063":{n:"龙陵"},"c10130115":{n:"昌宁"}},"c10130003":{n:"昭通","c10130140":{n:"市辖区"},"c10130117":{n:"鲁甸"},"c10130109":{n:"巧家"},"c10130049":{n:"盐津"},"c10130042":{n:"大关"},"c10130034":{n:"永善"},"c10130057":{n:"绥江"},"c10130089":{n:"镇雄"},"c10130097":{n:"彝良"},"c10130103":{n:"威信"},"c10130065":{n:"水富"}},"c10130030":{n:"丽江","c10130141":{n:"市辖区"},"c10130142":{n:"玉龙"},"c10130100":{n:"永胜"},"c10130038":{n:"华坪"},"c10130093":{n:"宁蒗"}},"c10130052":{n:"普洱","c10130143":{n:"市辖区"},"c10130144":{n:"宁洱"},"c10130112":{n:"墨江"},"c10130120":{n:"景东"},"c10130060":{n:"景谷"},"c10130019":{n:"镇沅"},"c10130074":{n:"江城"},"c10130082":{n:"孟连"},"c10130068":{n:"澜沧"},"c10130012":{n:"西盟"}},"c10130009":{n:"临沧","c10130145":{n:"市辖区"},"c10130048":{n:"凤庆"},"c10130108":{n:"云县"},"c10130102":{n:"永德"},"c10130096":{n:"镇康"},"c10130056":{n:"双江"},"c10130033":{n:"耿马"},"c10130041":{n:"沧源"}},"c10130008":{n:"楚雄","c10130146":{n:"楚雄市"},"c10130099":{n:"双柏"},"c10130081":{n:"牟定"},"c10130029":{n:"南华"},"c10130092":{n:"姚安"},"c10130022":{n:"大姚"},"c10130085":{n:"永仁"},"c10130037":{n:"元谋"},"c10130044":{n:"武定"},"c10130018":{n:"禄丰"}},"c10130098":{n:"红河州","c10130027":{n:"个旧"},"c10130004":{n:"开远"},"c10130104":{n:"蒙自"},"c10130073":{n:"屏边"},"c10130050":{n:"建水"},"c10130090":{n:"石屏"},"c10130035":{n:"弥勒"},"c10130058":{n:"泸西"},"c10130125":{n:"元阳"},"c10130153":{n:"红河"},"c10130118":{n:"金平"},"c10130066":{n:"绿春"},"c10130110":{n:"河口"}},"c10130005":{n:"文山","c10130147":{n:"文山市"},"c10130015":{n:"砚山"},"c10130091":{n:"西畴"},"c10130036":{n:"麻栗坡"},"c10130084":{n:"马关"},"c10130077":{n:"丘北"},"c10130021":{n:"广南"},"c10130028":{n:"富宁"}},"c10130127":{n:"西双版纳","c10130045":{n:"景洪"},"c10130148":{n:"勐海"},"c10130149":{n:"勐腊"}},"c10130007":{n:"大理","c10130150":{n:"大理市"},"c10130083":{n:"漾濞"},"c10130054":{n:"祥云"},"c10130062":{n:"宾川"},"c10130070":{n:"弥渡"},"c10130114":{n:"南涧"},"c10130020":{n:"巍山"},"c10130076":{n:"永平"},"c10130122":{n:"云龙"},"c10130014":{n:"洱源"},"c10130107":{n:"剑川"},"c10130046":{n:"鹤庆"}},"c10130128":{n:"德宏","c10130121":{n:"瑞丽"},"c10130151":{n:"芒市"},"c10130075":{n:"梁河"},"c10130013":{n:"盈江"},"c10130069":{n:"陇川"}},"c10130129":{n:"怒江","c10130064":{n:"泸水"},"c10130124":{n:"福贡"},"c10130071":{n:"贡山"},"c10130016":{n:"兰坪"}},"c10130130":{n:"迪庆","c10130152":{n:"香格里拉"},"c10130086":{n:"德钦"},"c10130023":{n:"维西"}}},"c10128000":{n:"西藏","c10128001":{n:"拉萨","c10128025":{n:"城关区"},"c10128026":{n:"林周"},"c10128027":{n:"当雄"},"c10128015":{n:"尼木"},"c10128022":{n:"曲水"},"c10128013":{n:"堆龙德庆"},"c10128028":{n:"达孜"},"c10128029":{n:"墨竹工卡"}},"c10128003":{n:"昌都","c10128030":{n:"昌都县"},"c10128017":{n:"江达"},"c10128031":{n:"贡觉"},"c10128032":{n:"类乌齐"},"c10128019":{n:"丁青"},"c10128033":{n:"察雅"},"c10128018":{n:"八宿"},"c10128034":{n:"左贡"},"c10128009":{n:"芒康"},"c10128010":{n:"洛隆"},"c10128035":{n:"边坝"}},"c10128004":{n:"山南","c10128036":{n:"乃东"},"c10128016":{n:"扎囊"},"c10128008":{n:"贡嘎"},"c10128037":{n:"桑日"},"c10128038":{n:"琼结"},"c10128039":{n:"曲松"},"c10128040":{n:"措美"},"c10128041":{n:"洛扎"},"c10128042":{n:"加查"},"c10128043":{n:"隆子"},"c10128044":{n:"错那"},"c10128045":{n:"浪卡子"}},"c10128005":{n:"日喀则","c10128046":{n:"日喀则市"},"c10128047":{n:"南木林"},"c10128048":{n:"江孜"},"c10128049":{n:"定日"},"c10128050":{n:"萨迦"},"c10128051":{n:"拉孜"},"c10128052":{n:"昂仁"},"c10128053":{n:"谢通门"},"c10128054":{n:"白朗"},"c10128024":{n:"仁布"},"c10128055":{n:"康马"},"c10128056":{n:"定结"},"c10128057":{n:"仲巴"},"c10128058":{n:"亚东"},"c10128059":{n:"吉隆"},"c10128060":{n:"聂拉木"},"c10128061":{n:"萨嘎"},"c10128062":{n:"岗巴"}},"c10128002":{n:"那曲","c10128063":{n:"那曲县"},"c10128064":{n:"嘉黎"},"c10128020":{n:"比如"},"c10128065":{n:"聂荣"},"c10128066":{n:"安多"},"c10128067":{n:"申扎"},"c10128014":{n:"索县"},"c10128021":{n:"班戈"},"c10128011":{n:"巴青"},"c10128023":{n:"尼玛"}},"c10128006":{n:"阿里","c10128068":{n:"普兰"},"c10128069":{n:"札达"},"c10128070":{n:"噶尔"},"c10128071":{n:"日土"},"c10128072":{n:"革吉"},"c10128073":{n:"改则"},"c10128012":{n:"措勤"}},"c10128007":{n:"林芝","c10128074":{n:"林芝县"},"c10128080":{n:"工布江达"},"c10128075":{n:"米林"},"c10128076":{n:"墨脱"},"c10128077":{n:"波密"},"c10128078":{n:"察隅"},"c10128079":{n:"朗县"}}},"c10126000":{n:"陕西","c10126001":{n:"西安","c10126099":{n:"新城区"},"c10126100":{n:"碑林区"},"c10126101":{n:"莲湖区"},"c10126102":{n:"灞桥区"},"c10126103":{n:"未央区"},"c10126104":{n:"雁塔区"},"c10126105":{n:"阎良区"},"c10126072":{n:"临潼区"},"c10126027":{n:"长安区"},"c10126033":{n:"蓝田"},"c10126078":{n:"周至"},"c10126038":{n:"户县"},"c10126083":{n:"高陵"}},"c10126010":{n:"铜川","c10126106":{n:"市辖区"},"c10126016":{n:"宜君"}},"c10126006":{n:"宝鸡","c10126107":{n:"市辖区"},"c10126090":{n:"凤翔"},"c10126042":{n:"岐山"},"c10126084":{n:"扶风"},"c10126039":{n:"眉县"},"c10126034":{n:"陇县"},"c10126073":{n:"千阳"},"c10126068":{n:"麟游"},"c10126079":{n:"凤县"},"c10126028":{n:"太白"}},"c10126011":{n:"咸阳","c10126108":{n:"市辖区"},"c10126091":{n:"三原"},"c10126043":{n:"泾阳"},"c10126040":{n:"乾县"},"c10126085":{n:"礼泉"},"c10126015":{n:"永寿"},"c10126080":{n:"彬县"},"c10126061":{n:"长武"},"c10126095":{n:"旬邑"},"c10126048":{n:"淳化"},"c10126022":{n:"武功"},"c10126054":{n:"兴平"}},"c10126002":{n:"渭南","c10126109":{n:"市辖区"},"c10126037":{n:"华县"},"c10126071":{n:"潼关"},"c10126077":{n:"大荔"},"c10126060":{n:"合阳"},"c10126017":{n:"澄城"},"c10126021":{n:"蒲城"},"c10126063":{n:"白水"},"c10126026":{n:"富平"},"c10126067":{n:"韩城"},"c10126032":{n:"华阴"}},"c10126003":{n:"延安","c10126110":{n:"市辖区"},"c10126023":{n:"延长"},"c10126029":{n:"延川"},"c10126069":{n:"子长"},"c10126046":{n:"安塞"},"c10126051":{n:"志丹"},"c10126111":{n:"吴起"},"c10126093":{n:"甘泉"},"c10126088":{n:"富县"},"c10126012":{n:"洛川"},"c10126057":{n:"宜川"},"c10126018":{n:"黄龙"},"c10126074":{n:"黄陵"}},"c10126008":{n:"汉中","c10126112":{n:"市辖区"},"c10126025":{n:"南郑"},"c10126066":{n:"城固"},"c10126020":{n:"洋县"},"c10126059":{n:"西乡"},"c10126053":{n:"勉县"},"c10126094":{n:"宁强"},"c10126047":{n:"略阳"},"c10126014":{n:"镇巴"},"c10126013":{n:"留坝"},"c10126052":{n:"佛坪"}},"c10126005":{n:"榆林","c10126113":{n:"市辖区"},"c10126075":{n:"神木"},"c10126092":{n:"府谷"},"c10126044":{n:"横山"},"c10126035":{n:"靖边"},"c10126081":{n:"定边"},"c10126004":{n:"绥德"},"c10126086":{n:"米脂"},"c10126049":{n:"佳县"},"c10126055":{n:"吴堡"},"c10126030":{n:"清涧"},"c10126096":{n:"子洲"}},"c10126007":{n:"安康","c10126114":{n:"市辖区"},"c10126041":{n:"汉阴"},"c10126036":{n:"石泉"},"c10126087":{n:"宁陕"},"c10126031":{n:"紫阳"},"c10126045":{n:"岚皋"},"c10126076":{n:"平利"},"c10126019":{n:"镇坪"},"c10126082":{n:"旬阳"},"c10126058":{n:"白河"}},"c10126098":{n:"商洛","c10126115":{n:"市辖区"},"c10126050":{n:"洛南"},"c10126097":{n:"丹凤"},"c10126089":{n:"商南"},"c10126065":{n:"山阳"},"c10126024":{n:"镇安"},"c10126070":{n:"柞水"}}},"c10108000":{n:"甘肃","c10108001":{n:"兰州","c10108086":{n:"城关区"},"c10108087":{n:"七里河区"},"c10108088":{n:"西固区"},"c10108089":{n:"安宁区"},"c10108028":{n:"红古区"},"c10108069":{n:"永登"},"c10108065":{n:"皋兰"},"c10108032":{n:"榆中"}},"c10108023":{n:"嘉峪关","c10108090":{n:"市辖区"}},"c10108006":{n:"金昌","c10108091":{n:"市辖区"},"c10108030":{n:"永昌"}},"c10108078":{n:"白银","c10108092":{n:"市辖区"},"c10108044":{n:"靖远"},"c10108014":{n:"会宁"},"c10108049":{n:"景泰"}},"c10108007":{n:"天水","c10108093":{n:"市辖区"},"c10108075":{n:"清水"},"c10108070":{n:"秦安"},"c10108066":{n:"甘谷"},"c10108033":{n:"武山"},"c10108036":{n:"张家川"}},"c10108003":{n:"武威","c10108094":{n:"市辖区"},"c10108020":{n:"民勤"},"c10108026":{n:"古浪"},"c10108059":{n:"天祝"}},"c10108002":{n:"张掖","c10108095":{n:"市辖区"},"c10108096":{n:"肃南"},"c10108038":{n:"民乐"},"c10108077":{n:"临泽"},"c10108072":{n:"高台"},"c10108034":{n:"山丹"}},"c10108009":{n:"平凉","c10108097":{n:"市辖区"},"c10108041":{n:"泾川"},"c10108080":{n:"灵台"},"c10108046":{n:"崇信"},"c10108083":{n:"华亭"},"c10108051":{n:"庄浪"},"c10108074":{n:"静宁"}},"c10108004":{n:"酒泉","c10108098":{n:"市辖区"},"c10108017":{n:"金塔"},"c10108099":{n:"瓜州"},"c10108061":{n:"肃北"},"c10108056":{n:"阿克塞"},"c10108048":{n:"玉门"},"c10108052":{n:"敦煌"}},"c10108064":{n:"庆阳","c10108100":{n:"市辖区"},"c10108101":{n:"庆城"},"c10108035":{n:"环县"},"c10108079":{n:"华池"},"c10108073":{n:"合水"},"c10108040":{n:"正宁"},"c10108031":{n:"宁县"},"c10108068":{n:"镇原"}},"c10108008":{n:"定西","c10108102":{n:"市辖区"},"c10108055":{n:"通渭"},"c10108011":{n:"陇西"},"c10108027":{n:"渭源"},"c10108060":{n:"临洮"},"c10108016":{n:"漳县"},"c10108021":{n:"岷县"}},"c10108084":{n:"陇南","c10108103":{n:"市辖区"},"c10108045":{n:"成县"},"c10108050":{n:"文县"},"c10108015":{n:"宕昌"},"c10108082":{n:"康县"},"c10108054":{n:"西和"},"c10108019":{n:"礼县"},"c10108058":{n:"徽县"},"c10108025":{n:"两当"}},"c10108085":{n:"临夏","c10108022":{n:"临夏市"},"c10108053":{n:"临夏县"},"c10108062":{n:"康乐"},"c10108018":{n:"永靖"},"c10108029":{n:"广河"},"c10108057":{n:"和政"},"c10108024":{n:"东乡族自治县"},"c10108067":{n:"积石山"}},"c10108012":{n:"甘南","c10108104":{n:"合作"},"c10108037":{n:"临潭"},"c10108105":{n:"卓尼"},"c10108076":{n:"舟曲"},"c10108013":{n:"迭部"},"c10108081":{n:"玛曲"},"c10108042":{n:"碌曲"},"c10108071":{n:"夏河"}}},"c10123000":{n:"青海","c10123001":{n:"西宁","c10123049":{n:"城东区"},"c10123050":{n:"城中区"},"c10123051":{n:"城西区"},"c10123052":{n:"城北区"},"c10123027":{n:"大通"},"c10123030":{n:"湟中"},"c10123033":{n:"湟源"}},"c10123045":{n:"海东","c10123053":{n:"平安"},"c10123017":{n:"民和"},"c10123008":{n:"乐都"},"c10123014":{n:"互助"},"c10123020":{n:"化隆"},"c10123036":{n:"循化"}},"c10123046":{n:"海北","c10123012":{n:"门源"},"c10123028":{n:"祁连"},"c10123025":{n:"海晏"},"c10123009":{n:"刚察"}},"c10123047":{n:"黄南","c10123039":{n:"同仁"},"c10123007":{n:"尖扎"},"c10123029":{n:"泽库"},"c10123026":{n:"河南"}},"c10123048":{n:"海南","c10123023":{n:"共和"},"c10123006":{n:"同德"},"c10123024":{n:"贵德"},"c10123013":{n:"兴海"},"c10123044":{n:"贵南"}},"c10123002":{n:"果洛","c10123041":{n:"玛沁"},"c10123037":{n:"班玛"},"c10123021":{n:"甘德"},"c10123034":{n:"达日"},"c10123054":{n:"久治"},"c10123018":{n:"玛多"}},"c10123003":{n:"玉树","c10123055":{n:"玉树县"},"c10123022":{n:"杂多"},"c10123019":{n:"称多"},"c10123035":{n:"治多"},"c10123038":{n:"囊谦"},"c10123040":{n:"曲麻莱"}},"c10123005":{n:"海西","c10123004":{n:"格尔木"},"c10123043":{n:"德令哈"},"c10123010":{n:"乌兰"},"c10123032":{n:"都兰"},"c10123016":{n:"天峻"}}},"c10122000":{n:"宁夏","c10122001":{n:"银川","c10122022":{n:"兴庆区"},"c10122023":{n:"西夏区"},"c10122024":{n:"金凤区"},"c10122016":{n:"永宁"},"c10122009":{n:"贺兰"},"c10122012":{n:"灵武"}},"c10122002":{n:"石嘴山","c10122025":{n:"市辖区"},"c10122004":{n:"平罗"}},"c10122010":{n:"吴忠","c10122026":{n:"市辖区"},"c10122013":{n:"盐池"},"c10122018":{n:"同心"},"c10122007":{n:"青铜峡"}},"c10122003":{n:"固原","c10122027":{n:"市辖区"},"c10122008":{n:"西吉"},"c10122015":{n:"隆德"},"c10122019":{n:"泾源"},"c10122017":{n:"彭阳"}},"c10122011":{n:"中卫","c10122028":{n:"市辖区"},"c10122006":{n:"中宁"},"c10122021":{n:"海原"}}},"c10129000":{n:"新疆","c10129001":{n:"乌鲁木齐","c10129092":{n:"天山区"},"c10129093":{n:"沙依巴克区"},"c10129094":{n:"新市区"},"c10129095":{n:"水磨沟区"},"c10129096":{n:"头屯河区"},"c10129097":{n:"达坂城区"},"c10129098":{n:"米东区"},"c10129099":{n:"乌鲁木齐县"}},"c10129004":{n:"克拉玛依","c10129100":{n:"市辖区"}},"c10129009":{n:"吐鲁番","c10129101":{n:"吐鲁番市"},"c10129075":{n:"鄯善"},"c10129040":{n:"托克逊"}},"c10129008":{n:"哈密","c10129102":{n:"哈密市"},"c10129103":{n:"巴里坤"},"c10129026":{n:"伊吾"}},"c10129017":{n:"昌吉","c10129104":{n:"昌吉市"},"c10129032":{n:"阜康"},"c10129062":{n:"呼图壁"},"c10129027":{n:"玛纳斯"},"c10129056":{n:"奇台"},"c10129065":{n:"吉木萨尔"},"c10129070":{n:"木垒"}},"c10129089":{n:"博尔塔拉","c10129067":{n:"博乐"},"c10129034":{n:"精河"},"c10129072":{n:"温泉"}},"c10129007":{n:"巴音郭楞","c10129080":{n:"库尔勒"},"c10129047":{n:"轮台"},"c10129059":{n:"尉犁"},"c10129020":{n:"若羌"},"c10129025":{n:"且末"},"c10129043":{n:"焉耆"},"c10129014":{n:"和静"},"c10129053":{n:"和硕"},"c10129084":{n:"博湖"}},"c10129010":{n:"阿克苏","c10129105":{n:"阿克苏市"},"c10129038":{n:"温宿"},"c10129030":{n:"库车"},"c10129035":{n:"沙雅"},"c10129068":{n:"新和"},"c10129073":{n:"拜城"},"c10129078":{n:"乌什"},"c10129082":{n:"阿瓦提"},"c10129045":{n:"柯坪"}},"c10129088":{n:"克孜勒苏","c10129024":{n:"阿图什"},"c10129029":{n:"阿克陶"},"c10129087":{n:"阿合奇"},"c10129064":{n:"乌恰"}},"c10129011":{n:"喀什","c10129106":{n:"喀什市"},"c10129018":{n:"疏附"},"c10129041":{n:"疏勒"},"c10129037":{n:"英吉沙"},"c10129066":{n:"泽普"},"c10129033":{n:"莎车"},"c10129028":{n:"叶城"},"c10129063":{n:"麦盖提"},"c10129071":{n:"岳普湖"},"c10129057":{n:"伽师"},"c10129023":{n:"巴楚"},"c10129076":{n:"塔什库尔干"}},"c10129012":{n:"和田","c10129107":{n:"和田市"},"c10129108":{n:"和田县"},"c10129069":{n:"墨玉"},"c10129031":{n:"皮山"},"c10129036":{n:"洛浦"},"c10129074":{n:"策勒"},"c10129039":{n:"于田"},"c10129079":{n:"民丰"}},"c10129090":{n:"伊犁","c10129005":{n:"伊宁市"},"c10129081":{n:"奎屯"},"c10129114":{n:"伊宁县"},"c10129044":{n:"察布查尔锡伯"},"c10129085":{n:"霍城"},"c10129015":{n:"巩留"},"c10129048":{n:"新源"},"c10129060":{n:"昭苏"},"c10129021":{n:"特克斯"},"c10129054":{n:"尼勒克"}},"c10129086":{n:"塔城","c10129109":{n:"塔城市"},"c10129003":{n:"乌苏"},"c10129049":{n:"额敏"},"c10129050":{n:"沙湾"},"c10129055":{n:"托里"},"c10129016":{n:"裕民"},"c10129077":{n:"和布克赛尔"}},"c10129006":{n:"阿勒泰","c10129110":{n:"阿勒泰市"},"c10129111":{n:"布尔津"},"c10129052":{n:"富蕴"},"c10129019":{n:"福海"},"c10129013":{n:"哈巴河"},"c10129083":{n:"青河"},"c10129058":{n:"吉木乃"}},"c10129091":{n:"自治区直辖县级","c10129002":{n:"石河子"},"c10129042":{n:"阿拉尔"},"c10129112":{n:"图木舒克"},"c10129113":{n:"五家渠"}}}
				};
			
			var current_province;
			var data_loading = {
				//整理年份
				year: function(){
					var today = new Date();
					var max_year = today.getFullYear() - 18;
					var min_year = max_year - 69;
					var year_html = '', 
						year_html_temp1 = '<i>00后:</i>', year_html_temp2 = '<i>10后:</i>', year_html_temp3 = '<i>20后:</i>', year_html_temp4 = '<i>30后:</i>', year_html_temp5 = '<i>40后:</i>',
						year_html_temp6 = '<i>50后:</i>', year_html_temp7 = '<i>60后:</i>', year_html_temp8 = '<i>70后:</i>', year_html_temp9 = '<i>80后:</i>', year_html_temp10 = '<i>90后:</i>';
					for(var iyear=min_year; iyear<=max_year; iyear++){
						var tnum_arr = (iyear + '').split('');
						var tnum = tnum_arr[tnum_arr.length - 2];
						if(tnum == 0){
							year_html_temp1 += '<a data-value="' + iyear + '" href="javascript:;">' + iyear + '</a>';
						}
						if(tnum == 1){
							year_html_temp2 += '<a data-value="' + iyear + '" href="javascript:;">' + iyear + '</a>';
						}
						if(tnum == 2){
							year_html_temp3 += '<a data-value="' + iyear + '" href="javascript:;">' + iyear + '</a>';
						}
						if(tnum == 3){
							year_html_temp4 += '<a data-value="' + iyear + '" href="javascript:;">' + iyear + '</a>';
						}
						if(tnum == 4){
							year_html_temp5 += '<a data-value="' + iyear + '" href="javascript:;">' + iyear + '</a>';
						}
						if(tnum == 5){
							year_html_temp6 += '<a data-value="' + iyear + '" href="javascript:;">' + iyear + '</a>';
						}
						if(tnum == 6){
							year_html_temp7 += '<a data-value="' + iyear + '" href="javascript:;">' + iyear + '</a>';
						}
						if(tnum == 7){
							year_html_temp8 += '<a data-value="' + iyear + '" href="javascript:;">' + iyear + '</a>';
						}
						if(tnum == 8){
							year_html_temp9 += '<a data-value="' + iyear + '" href="javascript:;">' + iyear + '</a>';
						}
						if(tnum == 9){
							year_html_temp10 += '<a data-value="' + iyear + '" href="javascript:;">' + iyear + '</a>';
						}
					}
					if(year_html_temp10.length > 11){
						year_html += '<p>' + year_html_temp10 + '</p>';
					}
					if(year_html_temp9.length > 11){
						year_html += '<p>' + year_html_temp9 + '</p>';
					}
					if(year_html_temp8.length > 11){
						year_html += '<p>' + year_html_temp8 + '</p>';
					}
					if(year_html_temp7.length > 11){
						year_html += '<p>' + year_html_temp7 + '</p>';
					}
					if(year_html_temp6.length > 11){
						year_html += '<p>' + year_html_temp6 + '</p>';
					}
					if(year_html_temp5.length > 11){
						year_html += '<p>' + year_html_temp5 + '</p>';
					}
					if(year_html_temp4.length > 11){
						year_html += '<p>' + year_html_temp4 + '</p>';
					}
					if(year_html_temp3.length > 11){
						year_html += '<p>' + year_html_temp3 + '</p>';
					}
					if(year_html_temp2.length > 11){
						year_html += '<p>' + year_html_temp2 + '</p>';
					}
					if(year_html_temp1.length > 11){
						year_html += '<p>' + year_html_temp1 + '</p>';
					}
					$('.year-selector').find('dd').html(year_html);
				},
				//整理月份
				month: function(){},
				//整理天数
				day: function(dnum){
					var day_html = '';
					for(var iday=1; iday<=dnum; iday++){
						day_html += '<a data-value="' + iday + '" href="javascript:;">' + iday + '</a>';
					}
					$('.day-selector').find('dd').html('<p>' + day_html + '</p>');
				},
				//整理省份
				province: function(){
					var province_html = '';
					$.each(china_city, function(k, v){
						if(v.n == '广东'){
							province_html += '<span><a href="javascript:;" data-value="' + k.substring(1, k.length) + '">' + v.n + '</a></span><div class="border"></div>';
						}else{
							province_html += '<span><a href="javascript:;" data-value="' + k.substring(1, k.length) + '">' + v.n + '</a></span>';
						}
					});
					$('.province-selector').find('dd').html(province_html);
				},
				//整理城市
				city: function(province_id){
					var city_html = '';
					$.each(china_city, function(ck, cv){
						if(ck.indexOf(province_id) == 1){
							if(cv.hasOwnProperty('d')){
								$('.county-selector').hide();
							}else{
								$('.county-selector').show();
							}
							current_province = cv;
							$.each(cv, function(k, v){
								if(k != 'n' && k != 'd'){
									city_html += '<span><a href="javascript:;" data-value="' + k.substring(1, k.length) + '">' + v.n + '</a></span>';
								}
							});
						}
					});
					$('.city-selector').find('dd').html(city_html);
				},
				//整理区
				county: function(city_id){
					var county_html = '';
					$.each(current_province, function(pk, pv){
						if(pk.indexOf(city_id) == 1 && !current_province.hasOwnProperty('d')){
							$.each(pv, function(k, v){
								if(k != 'n'){
									county_html += '<span><a href="javascript:;" data-value="' + k.substring(1, k.length-1) + '">' + v.n + '</a></span>';
								}
							});
						}
					});
					$('.county-selector').find('dd').html(county_html);
				}
			};
			
			data_loading.year();
			data_loading.province();


			//上传图片
			$('#photo_input').click(function(){
			    var layer_content = '<div style="display: inline-block;width: 200px;height: 284px;margin: 0 10px;">'
				    + '<img id="user_photo" src="<?php echo base_url('zeros/web/images/icon.png'); ?>"></div>'
				    + '<div style="display: inline-block;margin: 0 10px;vertical-align: top;"><div id="user_photo_preview" style="width: 100px;height: 142px;overflow: hidden;">'
				    + '<img></div><div style="width: 100px;height: 50px;">'
				    + '<input id="photo_up_btn" type="button" value="+ 选择照片" style="width: 100px;height: 30px;border: 1px solid #E5E5E5;border-radius: 4px;cursor: pointer;color: #666;margin-top: 50px;">'
				    + '<input id="photo_up_input" type="file" name="photo_up" accept="image/*" hidden></div></div>';
			    layer.open({
			        title: '选择并调整照片',
			        content: layer_content,
			        area: '600px',
			        btn: ['确定', '取消'],
			        yes: function(index, layero){
			        	var dataURL = $('#user_photo').cropper("getCroppedCanvas");
				        var imgurl = dataURL.toDataURL("image/png",1.0);
				        $('#photo_up').val(imgurl);
        			    layer.close(index);
    			    },
    			    cancel: function(index, layero){ 
        			    layer.close(index);
    			    },
			        success: function(index, layero){
			            $('#user_photo').cropper({
			                aspectRatio: 200/284,
			                crop: function(e){
// 			                    console.log(e);
			                },
			                viewMode: 2,
			                preview: '#user_photo_preview'
			            });
			            $('#photo_up_btn').click(function(e){
			                if($('#photo_up_input')){
				                $('#photo_up_input').click();
			                }
			                e.preventDefault();
			            });
			            $('#photo_up_input').change(function(e){
			                var file = e.target.files[0];
			                if (/^image\/\w+/.test(file.type)) {  
			                    var blobURL = URL.createObjectURL(file);  
			                    $('#user_photo').cropper('replace', blobURL);  
		                    }
			            });
			        }
			    });
			});

			$('#phone_input').change(function(e){
			    $.ajax({
			        url: '<?php echo site_url('web/signup/user_phone_exist'); ?>',
			        type: 'post',
			        data: {
			            phone: $(e.target).val()
			        },
			        dataType: 'json',
			        success: function(data){
			            if(data.msg == 0){
			            	$('#phone_tip').html('');
			            }else{
			            	$('#phone_tip').html('* 该手机号已被注册');
			            }
			        }
			    });
			});
		});

		//检验表单
		var check_form = function(form){
		    var formData = new FormData($(form)[0]);
		    var objData = {};
	        formData.forEach((value, key) => objData[key] = value);

	        var nickname_match = /^[\u4e00-\u9fa5a-z]+$/gi;
	        var phone_match = /^1(3|4|5|7|8)\d{9}$/;
	        
	        console.log(objData);
	        if(objData.birth_date == '' || objData.birth_month == '' || objData.birth_year == ''){
		        $('#birth_tip').html('* 必选');
		        $('html, body').animate({  
                    scrollTop: $("#birth_tip").offset().top  
                }, 500);
    		    return false;
	        }else{
		        $('#birth_tip').html('');
	        }
	        if(objData.city == '' || objData.province == ''){
		        $('#area_tip').html('* 必选');
		        $('html, body').animate({  
                    scrollTop: $("#area_tip").offset().top  
                }, 500);
    		    return false;
	        }else{
		        $('#area_tip').html('');
	        }
	        if(objData.height == ''){
		        $('#height_tip').html('* 必选');
		        $('html, body').animate({  
                    scrollTop: $("#height_tip").offset().top  
                }, 500);
    		    return false;
	        }else{
		        $('#height_tip').html('');
	        }
	        if(objData.education == ''){
		        $('#education_tip').html('* 必选');
		        $('html, body').animate({  
                    scrollTop: $("#education_tip").offset().top  
                }, 500);
    		    return false;
	        }else{
		        $('#education_tip').html('');
	        }
	        if(objData.salary == ''){
		        $('#salary_tip').html('* 必选');
		        $('html, body').animate({  
                    scrollTop: $("#salary_tip").offset().top  
                }, 500);
    		    return false;
	        }else{
		        $('#salary_tip').html('');
	        }
	        if(objData.nickname == ''){
		        $('#nickname_tip').html('* 必填');
		        $('html, body').animate({  
                    scrollTop: $("#nickname_tip").offset().top  
                }, 500);
    		    return false;
	        }else if(!nickname_match.test(objData.nickname)){
		        $('#nickname_tip').html('* 只能输入汉字或英文字母');
		        $('html, body').animate({  
                    scrollTop: $("#nickname_tip").offset().top  
                }, 500);
    		    return false;
	        }else{
		        $('#nickname_tip').html('');
	        }
	        if(objData.phone == ''){
		        $('#phone_tip').html('* 必填');
		        $('html, body').animate({  
                    scrollTop: $("#phone_tip").offset().top  
                }, 500);
    		    return false;
	        }else if(!phone_match.test(objData.phone)){
		        $('#phone_tip').html('* 请输入正确的手机格式');
		        $('html, body').animate({  
                    scrollTop: $("#phone_tip").offset().top  
                }, 500);
    		    return false;
	        }else{
		        $('#phone_tip').html('');
	        }
	        if(objData.password == ''){
		        $('#password_tip').html('* 必选');
		        $('html, body').animate({  
                    scrollTop: $("#password_tip").offset().top  
                }, 500);
    		    return false;
	        }else{
		        $('#password_tip').html('');
	        }
	        if(objData.repassword == ''){
		        $('#repassword_tip').html('* 必选');
		        $('html, body').animate({  
                    scrollTop: $("#repassword_tip").offset().top  
                }, 500);
    		    return false;
	        }else if(objData.password != '' && objData.repassword != '' && objData.password != objData.repassword){
		        $('#repassword_tip').html('* 两次输入密码不一致');
		        $('html, body').animate({  
                    scrollTop: $("#password_tip").offset().top  
                }, 500);
    		    return false;
	        }else{
		        $('#repassword_tip').html('');
	        }
	        if(objData.photo == ''){
		        $('#photo_tip').html('* 必选');
		        $('html, body').animate({  
                    scrollTop: $("#photo_tip").offset().top  
                }, 500);
    		    return false;
	        }else{
		        $('#photo_tip').html('');
	        }
		    return true;
		};
		</script>
	</body>
</html>