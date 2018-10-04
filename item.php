<?php 
include("header.php"); 
include("info_header.php");
?>
                    <h3>道具</h3>
                    <div class="section">
                        <div class="mdl-table" id="island1-1">
                            <div class="mdl-table__list mdl-table__thead">
                               <div class="mdl-table__list__th--island">道具</div>
                            </div>
                            <?php 
                            $sql = "SELECT * FROM item_";
                            $result = mysql_query($sql);
                            while($row = mysql_fetch_row($result)){
                            ?>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">圖片</div>
                                <div class="mdl-table__list__th pc">名稱</div>
                                <div class="mdl-table__list__th">效果</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td--img">
                                    <div class="inner">
                                      <?php echo "<img src='$row[1]'>" ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td pc">
                                  <div class="inner">
                                    <?php echo $row[2] ?>
                                  </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[3] ?>
                                    </div>
                                </div>
                                
                            </div>
                            <?php }
                            ?>
                        </div>
                        <!-- /table -->

                    </div>
                    <!-- /section -->
                    <div class="clearfix"></div>
                </div>
                <!--[[[[/content]]]-->

                <!-- back to top btn -->
                <div id="back-top" style="display: none;">
                    <a href="##pagetop" >
                        <img src="./images/btn_top.png" alt="top">
                    </a>
                </div>

                <div id="download-buttons">
                    <ul>
                        <li><a href="https://www.capcom.com.tw/platform/launcher/2685"><img src="./images/btn_dl01.jpg" alt="APP STORE"></a></li>
                        <li><a href="https://www.capcom.com.tw/platform/launcher/2686"><img src="./images/btn_dl02.jpg" alt="GOOGLE Play"></a></li>
                        <li><a href="https://www.capcom.com.tw/platform/launcher/2687"><img src="./images/btn_dl03.jpg" alt="官網下載"></a></li>
                    </ul>
                    <div id="download-catch"></div>
                </div>
                <!--/DL buttons -->

                <div id="footer">
                    <ul id="linkmenu">
                        <li>
                            <a href="http://mhxr.capcom.com.tw/faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="https://www.capcom.com.tw/member/member_info/mhxr?mobile_flag=1">使用者合約</a>
                        </li>
                        <li>
                            <a href="https://www.capcom.com.tw/member/privacy/mhxr?mobile_flag=1">隱私權條款</a>
                        </li>
                    </ul>
                    <div id="bottomBar">
                        <div id="cr-text">© CAPCOM CO., LTD. ALL RIGHTS RESERVED.</div>
                        <div id="game-rating"><img src="./images/icon_gr.gif"></div>
                        <div class="cleaner"></div>
                    </div>
                    <!--/bottomBar -->
                </div>
                <!--/footer -->
            </div>
            <!--/container -->
        </div>
        <!--[[[[/wrapper]]] -->
    </body>
</html>