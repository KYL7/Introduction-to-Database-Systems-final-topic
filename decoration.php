<?php 
include("header.php"); 
include("info_header.php");
?>
                    <h3>武器</h3>
                        <form name="form" id="form">
                              <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu(&#39;parent&#39;,this,1)">
                                    <option label="= 選擇武器 ="></option>
                                    <option value="#island1-1">大劍</option>
                                    <option value="#island1-2">太刀</option>
                                    <option value="#island1-3">片手劍</option>
                                    <option value="#island1-4">雙刀</option>
                                    <option value="#island1-5">錘</option>
                                    <option value="#island1-6">狩獵笛</option>
                                    <option value="#island1-7">長槍</option>
                                    <option value="#island1-8">銃槍</option>
                                    <option value="#island1-9">弩</option>
                                    <option value="#island1-10">弓</option>
                              </select>
                        </form>
                    <div class="section">
                        <div class="mdl-table" id="island1-1">
                            <div class="mdl-table__list mdl-table__thead">
                               <div class="mdl-table__list__th--island">大劍</div>
                            </div>
                            <?php 
                            $sql = "SELECT * FROM weapan_big_sword";
                            $result = mysql_query($sql);
                            while($row = mysql_fetch_row($result)){
                            ?>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">武器圖片</div>
                                <div class="mdl-table__list__th pc">武器名稱</div>
                                <div class="mdl-table__list__th">價格</div>
                                <div class="mdl-table__list__th">攻擊力</div>
                                <div class="mdl-table__list__th">特殊效果</div>
                                <div class="mdl-table__list__th">斬味/斬味+1</div>
                                <div class="mdl-table__list__th">會心</div>
                                <div class="mdl-table__list__th">裝飾孔</div>
                                <div class="mdl-table__list__th">製作級別</div>
                                <div class="mdl-table__list__th">材料</div>
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
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[4] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                     <?php echo $row[5] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                       <?php echo $row[6] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[7] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[8] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[9] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <form name="form" method="post" action="weapan_info.php">
                                        <?php 
                                        echo "<input type='hidden'  name='statu' value=0>" ;
                                        echo "<input type='hidden'  name='id' value='$row[0]'>" ;
                                        echo "<input type='hidden'  name='pic' value='$row[1]'>" ;
                                        echo "<input type='hidden'  name='name' value='$row[2]'>";
                                        echo "<input type='hidden'  name='price' value='$row[3]'>" 
                                        ?>
                                        <input type="submit" name="button" value="材料" >
                                      </form>
                                    </div>
                                </div>
                            </div>
                            <?php }
                            ?>
                        </div>
                        <!-- /table -->

                        <div class="mdl-table" id="island1-2">
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th--island">太刀</div>
                            </div>
                            <?php 
                            $sql = "SELECT * FROM weapan_samurai_sword";
                            $result = mysql_query($sql);
                            while($row = mysql_fetch_row($result)){
                            ?>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">武器圖片</div>
                                <div class="mdl-table__list__th pc">武器名稱</div>
                                <div class="mdl-table__list__th">價格</div>
                                <div class="mdl-table__list__th">攻擊力</div>
                                <div class="mdl-table__list__th">特殊效果</div>
                                <div class="mdl-table__list__th">斬味/斬味+1</div>
                                <div class="mdl-table__list__th">會心</div>
                                <div class="mdl-table__list__th">裝飾孔</div>
                                <div class="mdl-table__list__th">製作級別</div>
                                <div class="mdl-table__list__th">材料</div>
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
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[4] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                     <?php echo $row[5] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[6] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[7] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[8] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[9] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <form name="form" method="post" action="weapan_info.php">
                                        <?php 
                                        echo "<input type='hidden'  name='statu' value='1'>" ;
                                        echo "<input type='hidden'  name='id' value='$row[0]'>" ;
                                        echo "<input type='hidden'  name='pic' value='$row[1]'>" ;
                                        echo "<input type='hidden'  name='name' value='$row[2]'>";
                                        echo "<input type='hidden'  name='price' value='$row[3]'>" 
                                        ?>
                                        <input type="submit" name="button" value="材料" >
                                      </form>
                                    </div>
                                </div>
                            </div>
                            <?php }
                            ?>
                        </div>
                        <!-- /table -->

                        <div class="mdl-table" id="island1-3">
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th--island">片手劍</div>
                            </div>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">關卡</div>
                                <div class="mdl-table__list__th pc">關卡名稱</div>
                                <div class="mdl-table__list__th">發現物名稱</div>
                                <div class="mdl-table__list__th">發現物圖片</div>
                                <div class="mdl-table__list__th">獎勵</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                        <span class="m_d">12-7</span>
                                        <span class="m_n">12-8</span>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td pc">
                                    <div class="inner">注意巨角</div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">食尾蛇手環</div>
                                </div>
                                <div class="mdl-table__list__td--img">
                                    <div class="inner"><img src="./images/22.png"></div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">攻擊力輝石×30</div>
                                </div>
                            </div>
                        </div>
                        <!-- /table -->

                        <div class="mdl-table" id="island1-4">
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th--island">雙刀</div>
                            </div>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">關卡</div>
                                <div class="mdl-table__list__th pc">關卡名稱</div>
                                <div class="mdl-table__list__th">發現物名稱</div>
                                <div class="mdl-table__list__th">發現物圖片</div>
                                <div class="mdl-table__list__th">獎勵</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                        <span class="m_d">12-7</span>
                                        <span class="m_n">12-8</span>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td pc">
                                    <div class="inner">冰冷氣息</div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">百角鹿的裝飾</div>
                                </div>
                                <div class="mdl-table__list__td--img">
                                    <div class="inner"><img src="./images/39.png"></div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">體力輝石×30</div>
                                </div>
                            </div>
                        </div>
                        <!-- /table -->

                        <div class="mdl-table" id="island1-5">
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th--island">錘</div>
                            </div>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">關卡</div>
                                <div class="mdl-table__list__th pc">關卡名稱</div>
                                <div class="mdl-table__list__th">發現物名稱</div>
                                <div class="mdl-table__list__th">發現物圖片</div>
                                <div class="mdl-table__list__th">獎勵</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                        <span class="m_d">14-7</span>
                                        <span class="m_n">14-8</span>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td pc">
                                    <div class="inner">映照電光之眼</div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">覺醒之龍眼石</div>
                                </div>
                                <div class="mdl-table__list__td--img">
                                    <div class="inner"><img src="./images/57.png"></div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">防禦力輝石×30</div>
                                </div>
                            </div>
                        </div>
                        <!-- /table -->

                        <div class="mdl-table" id="island1-6">
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th--island">狩獵笛</div>
                            </div>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">關卡</div>
                                <div class="mdl-table__list__th pc">關卡名稱</div>
                                <div class="mdl-table__list__th">發現物名稱</div>
                                <div class="mdl-table__list__th">發現物圖片</div>
                                <div class="mdl-table__list__th">獎勵</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                        <span class="m_d">12-9</span>
                                        <span class="m_n">12-10</span>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td pc">
                                    <div class="inner">擎天咆炎</div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">光龍之鱗籠手</div>
                                </div>
                                <div class="mdl-table__list__td--img">
                                    <div class="inner"><img src="./images/74.png"></div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">攻擊力輝石×30</div>
                                </div>
                            </div>
                        </div>
                        <!-- /table -->

                        <div class="mdl-table" id="island1-7">
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th--island">長槍</div>
                            </div>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">關卡</div>
                                <div class="mdl-table__list__th pc">關卡名稱</div>
                                <div class="mdl-table__list__th">發現物名稱</div>
                                <div class="mdl-table__list__th">發現物圖片</div>
                                <div class="mdl-table__list__th">獎勵</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                        <span class="m_d">12-9</span>
                                        <span class="m_n">12-10</span>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td pc">
                                    <div class="inner">擎天咆炎</div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">光龍之鱗籠手</div>
                                </div>
                                <div class="mdl-table__list__td--img">
                                    <div class="inner"><img src="./images/74.png"></div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">攻擊力輝石×30</div>
                                </div>
                            </div>
                        </div>
                        <!-- /table -->
                        
                        <div class="mdl-table" id="island1-8">
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th--island">銃槍</div>
                            </div>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">關卡</div>
                                <div class="mdl-table__list__th pc">關卡名稱</div>
                                <div class="mdl-table__list__th">發現物名稱</div>
                                <div class="mdl-table__list__th">發現物圖片</div>
                                <div class="mdl-table__list__th">獎勵</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                        <span class="m_d">12-9</span>
                                        <span class="m_n">12-10</span>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td pc">
                                    <div class="inner">擎天咆炎</div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">光龍之鱗籠手</div>
                                </div>
                                <div class="mdl-table__list__td--img">
                                    <div class="inner"><img src="./images/74.png"></div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">攻擊力輝石×30</div>
                                </div>
                            </div>
                        </div>
                        <!-- /table -->
                        
                        <div class="mdl-table" id="island1-9">
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th--island">弩</div>
                            </div>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">關卡</div>
                                <div class="mdl-table__list__th pc">關卡名稱</div>
                                <div class="mdl-table__list__th">發現物名稱</div>
                                <div class="mdl-table__list__th">發現物圖片</div>
                                <div class="mdl-table__list__th">獎勵</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                        <span class="m_d">12-9</span>
                                        <span class="m_n">12-10</span>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td pc">
                                    <div class="inner">擎天咆炎</div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">光龍之鱗籠手</div>
                                </div>
                                <div class="mdl-table__list__td--img">
                                    <div class="inner"><img src="./images/74.png"></div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">攻擊力輝石×30</div>
                                </div>
                            </div>
                        </div>
                        <!-- /table -->
                        
                        <div class="mdl-table" id="island1-10">
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th--island">弓</div>
                            </div>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">關卡</div>
                                <div class="mdl-table__list__th pc">關卡名稱</div>
                                <div class="mdl-table__list__th">發現物名稱</div>
                                <div class="mdl-table__list__th">發現物圖片</div>
                                <div class="mdl-table__list__th">獎勵</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                        <span class="m_d">12-9</span>
                                        <span class="m_n">12-10</span>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td pc">
                                    <div class="inner">擎天咆炎</div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">光龍之鱗籠手</div>
                                </div>
                                <div class="mdl-table__list__td--img">
                                    <div class="inner"><img src="./images/74.png"></div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">攻擊力輝石×30</div>
                                </div>
                            </div>
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