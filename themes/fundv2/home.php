<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<base href="<?php echo base_url(); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $template['title']; ?></title> 
<?include('_inc.php')?>
</head>
<body>
<?include('_header.php')?>
    		
<!------------------------------------------------------------END Header and TopMenu----------------------------------------------------------->           
	<div id="wraphilight">
    	<div id="highlight">
            <ul>
              <li><a href="#"><img src="themes/fundv2/images/highlight-pic01.jpg" width="698" height="249" /></a></li>
            </ul>
                 <div id="run">
                    <ol>
                        <li><a href="#">&nbsp;</a></li>
                        <li><a href="#">&nbsp;</a></li>
                        <li><a href="#" class="active">&nbsp;</a></li>
                        <li><a href="#">&nbsp;</a></li>
                    </ol>
                </div>
        </div>
        <div id="menuright">
        	<ul>
            	<li class="menuright01"><a href="#">&nbsp;</a></li>
                <li class="menuright02"><a href="#">&nbsp;</a></li>
                <li class="menuright03"><a href="#">&nbsp;</a></li>
            </ul>
        </div>
    </div>  
    <div class="clearfix">&nbsp;</div>
<!------------------------------------------------------------END HighLight----------------------------------------------------------->  
  	<div id="marquee">
    	<marquee  align="middle" scrollamount="5" scrolldelay="91" onmouseover="this.stop();" onmouseout="this.start();">" ยินดีต้อนรับสู่กองบริหารกองทุน สำนักงานปลัดกระทรวงการพัฒนาสังคมและความมั่นคงของมนุษย์, กระทรวงการพัฒนาสังคมและความมั่นคงของมนุษย์..." สนับสนุนเงินอุดหนุนให้แก่องค์การสวัสดิการสังคมภาคเอกชนประจำปีงบประมาณ 2557 "</marquee>
    </div>
<!------------------------------------------------------------END Marquee-----------------------------------------------------------> 
<div id="col1">
    	<div id="news">
        	<div class="newstitle">ข่าวประชาสัมพันธ์ <span><a href="#" class="viewall">ดูทั้งหมด</a></span></div>
               <p class="p-news"><img src="themes/fundv2/images/news-pic01.jpg" width="158" height="110" class="img-pr-news"><br>
                    <a href="#">กระทรวง พม. สนับสนุนเงินอุดหนุนฯ ประจำปีงบประมาณ 2557</a></p>
               <p class="p-news"><img src="themes/fundv2/images/news-pic02.jpg" width="158" height="110" class="img-pr-news"><br>
          			<a href="#">หลักเกณฑ์ แนวทาง การให้เงินอุดหนุนแก่องค์การสวัสดิการสังคม...</a></p>
               <p class="p-news2"><img src="themes/fundv2/images/news-pic03.jpg" width="158" height="110" class="img-pr-news"><br>
                    <a href="#">เอกสารประกอบการขอรับเงินอุดหนุนจากกระทรวงการพัฒนา...</a></p>
    
               <p class="p-news"><img src="themes/fundv2/images/news-pic04.jpg" width="158" height="110" class="img-pr-news"><br>
                    <a href="#">ผต.ประธานเปิดการประชุมเชิงปฏิบัติการพัฒนาประสิทธิภาพ...</a></p>
               <p class="p-news"><img src="themes/fundv2/images/news-pic05.jpg" width="158" height="110" class="img-pr-news"><br>
                    <a href="#">ปพม.ประชุมร่วมกันบประธานสภาสังคมสงเคราะห์แห่งประเทศไทย</a></p>
               <p class="p-news2"><img src="themes/fundv2/images/news-pic06.jpg" width="158" height="110" class="img-pr-news"><br>
                    <a href="#">ปพม.ประธานในพิธีมอบเครื่องราชอิสริยาภรณ์อันเป็นที่ส... </a></p>
        </div>
        <div class="clearfix">&nbsp;</div>
        <!---------------------------------------------END News------------------------------------------>
        
        <?=modules::run('infos/inc_home_1'); ?>
		
        <!---------------------------------------------END Porcument------------------------------------------>
    
        
	</div>
<!------------------------------------------------------------END Col1----------------------------------------------------------->  
    <div id="col2"> 
    	<a href="#"><img src="themes/fundv2/images/banner01.png" width="436" height="149" class="banner01"/></a>
        <br>
      <div id="vdo">
       	<div class="vdotitle">ข่าวกิจกรรม / วีดีโอ<span><a href="#" class="viewall">ดูทั้งหมด</a></span></div>
          <div id="vdolist">
          	  <div class="vdoplay"><a href="#">&nbsp;</a></div>
          	  <a href="#"><img src="themes/fundv2/images/vdo-pic01.jpg" width="158" height="116" class="imgvdo"></a>
              <a href="#" class="linkvdo">การประชุมคณะกรรมการบริหารกองทุน<br>ส่งเสริมและคณะอนุกรรมการพิจารณา<br>กรั่นกรอง <br> 
              <img src="themes/fundv2/images/icon-film.png" width="14" height="15" style="margin-top:5px;"></a>
         </div>
      </div>
      <div class="clearfix">&nbsp;</div>
        <!---------------------------------------------END VDO------------------------------------------>
        
        <?=modules::run('infos/inc_home_2'); ?>
        
    </div>
<!------------------------------------------------------------END Col2----------------------------------------------------------->  
<div class="clearfix">&nbsp;</div>

     <div id="col3">
         <div id="download">
        	<div class="downloadtitle">ดาวน์โหลดแบบฟอร์ม</div>
            <div id="tab">
                <div id="tabkm1">
                    <ul id="navtab">
                        <li><a href="#tab1" class="active">กองทุน<br>คุ้มครองเด็ก</a></li>
                        <li><a href="#tab2">กองทุนส่งเสริม<br>การจัดสวัสดิการสังคม</a></li>
                        <li><a href="#tab3">กองทุนเพื่อการป้องกัน<br>และปราบปรามการค้ามนุษย์</a></li>
                        <li><a href="#tab4">เงินอุดหนุนองค์การ<br>สวัสดิการสังคมภาคเอกชน</a></li>
                    </ul>
                    <div class="clearfix" style="line-height:0;">&nbsp;</div>
                <div id="konten">
                        <div style="display: none;" id="tab1" class="tab_konten">
                  		<table width="100%" class="tb1">
                              <tr>
                                <th width="100" style="padding-left:6px;">วันที่</th>
                                <th width="400">เรื่อง</th>
                                <th width="148" style="text-align:center;">จำนวนดาวน์โหลด</th>
	      					  </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">(แบบ คคด.01) กทม.</a></td>
                                <td align="center">4</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">สัญญารับเงินอุดหนุนจากกองทุนคุ้มครองเด็ก (แบบ คคด. 03)</a></td>
                                <td align="center">13</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">งบพิสูจน์ยอดเงินฝากธนาคารกองทุนคุ้มครองเด็ก</a></td>
                                <td align="center">1</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">(แบบ คคด.01) จังหวัด</a></td>
                                <td align="center">83</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">(แบบ คคด.06)</a></td>
                                <td align="center">93</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">ทะเบียนคุมบุคคลฯ (แบบ คคด.07)</a></td>
                                <td align="center">13</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">ทะเบียนคุ้มหน่วยงานฯ (แบบ คคด.08)</a></td>
                                <td align="center">44</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">รายงานการรับ - จ่ายเงิน (แบบ คคด.05)</a></td>
                                <td align="center">23</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">แบบการเสนอโครงการ ที่กองนิติการให้ปรับเพิ่ม</a></td>
                                <td align="center">63</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">แบบการเสนอโครงการ (แบบ คคด.02)</a></td>
                                <td align="center">53</td>
                              </tr>
						</table>
                    	<div class="viewall-tb1"><a href="#">ดูทั้งหมด</a></div>
                            
               			</div>
                        
                        <div style="display: none;" id="tab2" class="tab_konten">
                           <table width="100%" class="tb1">
                              <tr>
                                <th width="100" style="padding-left:6px;">วันที่</th>
                                <th width="400">เรื่อง</th>
                                <th width="148" style="text-align:center;">จำนวนดาวน์โหลด</th>
	      					  </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">4</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">13</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">1</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">83</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">93</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">13</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">44</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">23</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">63</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">53</td>
                              </tr>
						</table>
                        	<div class="viewall-tb1"><a href="#">ดูทั้งหมด</a></div>
                        </div>
                        
                        <div style="display: none;" id="tab3" class="tab_konten">
                           <table width="100%" class="tb1">
                              <tr>
                                <th width="100" style="padding-left:6px;">วันที่</th>
                                <th width="400">เรื่อง</th>
                                <th width="148" style="text-align:center;">จำนวนดาวน์โหลด</th>
	      					  </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">&nbsp;</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">&nbsp;</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">&nbsp;</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">&nbsp;</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">&nbsp;</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">&nbsp;</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">&nbsp;</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">&nbsp;</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">&nbsp;</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">&nbsp;</a></td>
                                <td align="center">&nbsp;</td>
                              </tr>
						</table>
                        	<div class="viewall-tb1"><a href="#">ดูทั้งหมด</a></div>
                        </div>
                        
                        <div style="display: none;" id="tab4" class="tab_konten">
                           <table width="100%" class="tb1">
                              <tr>
                                <th width="100" style="padding-left:6px;">วันที่</th>
                                <th width="400">เรื่อง</th>
                                <th width="148" style="text-align:center;">จำนวนดาวน์โหลด</th>
	      					  </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">(แบบ คคด.01) กทม.</a></td>
                                <td align="center">4</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">สัญญารับเงินอุดหนุนจากกองทุนคุ้มครองเด็ก (แบบ คคด. 03)</a></td>
                                <td align="center">13</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">งบพิสูจน์ยอดเงินฝากธนาคารกองทุนคุ้มครองเด็ก</a></td>
                                <td align="center">1</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">(แบบ คคด.01) จังหวัด</a></td>
                                <td align="center">83</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">(แบบ คคด.06)</a></td>
                                <td align="center">93</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">ทะเบียนคุมบุคคลฯ (แบบ คคด.07)</a></td>
                                <td align="center">13</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">ทะเบียนคุ้มหน่วยงานฯ (แบบ คคด.08)</a></td>
                                <td align="center">44</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">รายงานการรับ - จ่ายเงิน (แบบ คคด.05)</a></td>
                                <td align="center">23</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">แบบการเสนอโครงการ ที่กองนิติการให้ปรับเพิ่ม</a></td>
                                <td align="center">63</td>
                              </tr>
                              <tr>
                                <td class="tb1-date">08 09 2557</td>
                                <td valign="top"><a href="#">แบบการเสนอโครงการ (แบบ คคด.02)</a></td>
                                <td align="center">53</td>
                              </tr>
						</table>
                        	<div class="viewall-tb1"><a href="#">ดูทั้งหมด</a></div>
                        </div> 
                    </div>
                </div>
            </div>
		<!--------------------------------------------------------END TAB---------------------------------------------------> 
         </div>
     
     </div>
	 <!-------------------------------------------------------END Col3-------------------------------------------------------->  
     <div id="col4">
       <div id="calendar">
       	   <div class="calendartitle">ปฏิทินกิจกรรม</div>
           <div class="cal-arrow"><div class="cal-pre"><a href="#">&nbsp;</a></div><div class="cal-next"><a href="#">&nbsp;</a></div></div>
           <div class="clearfix">&nbsp;</div>
           <div class="cal-month">มีนาคม 2558</div>
   		   <table class="cal" width="100%">
                  <tr>
                    <th>จ</th>
                    <th>อ</th>
                    <th>พ</th>
                    <th>พฤ</th>
                    <th>ศ</th>
                    <th>ส</th>
                    <th>อา</th>
                  </tr>
                  <tr>
                    <td class="other-date">23</td>
                    <td class="other-date">24</td>
                    <td class="other-date">25</td>
                    <td class="other-date">26</td>
                    <td class="other-date">27</td>
                    <td class="other-date">28</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td>22</td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    <td>29</td>
                  </tr>
                  <tr>
                    <td>30</td>
                    <td>31</td>
                    <td class="other-date">1</td>
                    <td class="other-date">2</td>
                    <td class="other-date">3</td>
                    <td class="other-date">4</td>
                    <td class="other-date">5</td>
                  </tr>
         </table>
         </div>
         <!-------------------END Calendar---------------------> 
   	    <a href="#"><img src="themes/fundv2/images/banner-weblink.jpg" width="287" height="137" /></a>
        <a href="#"><img src="themes/fundv2/images/banner-contract.jpg" width="287" height="96" style="margin-top:25px;"></a>
        
     </div> 
     <!-------------------------------------------------------END Col4-------------------------------------------------------->
     

<?include('_footer.php')?>   
</body>
</html>