<?php 
include("header.php"); 
include("info_header.php");
?>
                    <h3>怪物</h3>
                        <?php print_option(4)?>
                    <div class="section">
                        <div class="mdl-table" id="island1-1">
                            <div class="mdl-table__list mdl-table__thead">
                               <div class="mdl-table__list__th--island">鳥龍種</div>
                            </div>
                            <?php 
                            $sql = "SELECT * FROM monster_boss WHERE class = '鳥龍種'";
                            $result = mysql_query($sql);
                            while($row = mysql_fetch_row($result)){
                            ?>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">怪物名稱</div>
                                <div class="mdl-table__list__th">火</div>
                                <div class="mdl-table__list__th">水</div>
                                <div class="mdl-table__list__th">雷</div>
                                <div class="mdl-table__list__th">冰</div>
                                <div class="mdl-table__list__th">龍</div>
                                <div class="mdl-table__list__th">毒</div>
                                <div class="mdl-table__list__th">麻</div>
                                <div class="mdl-table__list__th">睡</div>
                                <div class="mdl-table__list__th">落穴</div>
                                <div class="mdl-table__list__th">麻穴</div>
                                <div class="mdl-table__list__th">閃光彈</div>
                                <div class="mdl-table__list__th">音爆彈</div>
                                <div class="mdl-table__list__th">村長任務HP</div>
                                <div class="mdl-table__list__th">公會下位HP</div>
                                <div class="mdl-table__list__th">公會上位HP</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td">
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
                                      <?php echo $row[10] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[11] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[12] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[13] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[14] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[15] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[16] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[17] ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- /table -->

                        <div class="mdl-table" id="island1-2">
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th--island">魚龍種</div>
                            </div>
                            <?php 
                            $sql = "SELECT * FROM monster_boss WHERE class = '鳥龍種'";
                            $result = mysql_query($sql);
                            while($row = mysql_fetch_row($result)){
                            ?>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">怪物名稱</div>
                                <div class="mdl-table__list__th">火</div>
                                <div class="mdl-table__list__th">水</div>
                                <div class="mdl-table__list__th">雷</div>
                                <div class="mdl-table__list__th">冰</div>
                                <div class="mdl-table__list__th">龍</div>
                                <div class="mdl-table__list__th">毒</div>
                                <div class="mdl-table__list__th">麻</div>
                                <div class="mdl-table__list__th">睡</div>
                                <div class="mdl-table__list__th">落穴</div>
                                <div class="mdl-table__list__th">麻穴</div>
                                <div class="mdl-table__list__th">閃光彈</div>
                                <div class="mdl-table__list__th">音爆彈</div>
                                <div class="mdl-table__list__th">村長任務HP</div>
                                <div class="mdl-table__list__th">公會下位HP</div>
                                <div class="mdl-table__list__th">公會上位HP</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td">
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
                                      <?php echo $row[10] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[11] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[12] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[13] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[14] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[15] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[16] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[17] ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- /table -->

                        <div class="mdl-table" id="island1-3">
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th--island">甲殼種</div>
                            </div>
                            <?php 
                            $sql = "SELECT * FROM monster_boss WHERE class = '鳥龍種'";
                            $result = mysql_query($sql);
                            while($row = mysql_fetch_row($result)){
                            ?>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">怪物名稱</div>
                                <div class="mdl-table__list__th">火</div>
                                <div class="mdl-table__list__th">水</div>
                                <div class="mdl-table__list__th">雷</div>
                                <div class="mdl-table__list__th">冰</div>
                                <div class="mdl-table__list__th">龍</div>
                                <div class="mdl-table__list__th">毒</div>
                                <div class="mdl-table__list__th">麻</div>
                                <div class="mdl-table__list__th">睡</div>
                                <div class="mdl-table__list__th">落穴</div>
                                <div class="mdl-table__list__th">麻穴</div>
                                <div class="mdl-table__list__th">閃光彈</div>
                                <div class="mdl-table__list__th">音爆彈</div>
                                <div class="mdl-table__list__th">村長任務HP</div>
                                <div class="mdl-table__list__th">公會下位HP</div>
                                <div class="mdl-table__list__th">公會上位HP</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td">
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
                                      <?php echo $row[10] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[11] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[12] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[13] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[14] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[15] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[16] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[17] ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- /table -->

                        <div class="mdl-table" id="island1-4">
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th--island">牙獸種</div>
                            </div>
                            <?php 
                            $sql = "SELECT * FROM monster_boss WHERE class = '鳥龍種'";
                            $result = mysql_query($sql);
                            while($row = mysql_fetch_row($result)){
                            ?>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">怪物名稱</div>
                                <div class="mdl-table__list__th">火</div>
                                <div class="mdl-table__list__th">水</div>
                                <div class="mdl-table__list__th">雷</div>
                                <div class="mdl-table__list__th">冰</div>
                                <div class="mdl-table__list__th">龍</div>
                                <div class="mdl-table__list__th">毒</div>
                                <div class="mdl-table__list__th">麻</div>
                                <div class="mdl-table__list__th">睡</div>
                                <div class="mdl-table__list__th">落穴</div>
                                <div class="mdl-table__list__th">麻穴</div>
                                <div class="mdl-table__list__th">閃光彈</div>
                                <div class="mdl-table__list__th">音爆彈</div>
                                <div class="mdl-table__list__th">村長任務HP</div>
                                <div class="mdl-table__list__th">公會下位HP</div>
                                <div class="mdl-table__list__th">公會上位HP</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td">
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
                                      <?php echo $row[10] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[11] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[12] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[13] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[14] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[15] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[16] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[17] ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- /table -->

                        <div class="mdl-table" id="island1-5">
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th--island">飛龍種</div>
                            </div>
                            <?php 
                            $sql = "SELECT * FROM monster_boss WHERE class = '鳥龍種'";
                            $result = mysql_query($sql);
                            while($row = mysql_fetch_row($result)){
                            ?>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">怪物名稱</div>
                                <div class="mdl-table__list__th">火</div>
                                <div class="mdl-table__list__th">水</div>
                                <div class="mdl-table__list__th">雷</div>
                                <div class="mdl-table__list__th">冰</div>
                                <div class="mdl-table__list__th">龍</div>
                                <div class="mdl-table__list__th">毒</div>
                                <div class="mdl-table__list__th">麻</div>
                                <div class="mdl-table__list__th">睡</div>
                                <div class="mdl-table__list__th">落穴</div>
                                <div class="mdl-table__list__th">麻穴</div>
                                <div class="mdl-table__list__th">閃光彈</div>
                                <div class="mdl-table__list__th">音爆彈</div>
                                <div class="mdl-table__list__th">村長任務HP</div>
                                <div class="mdl-table__list__th">公會下位HP</div>
                                <div class="mdl-table__list__th">公會上位HP</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td">
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
                                      <?php echo $row[10] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[11] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[12] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[13] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[14] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[15] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[16] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[17] ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- /table -->

                        <div class="mdl-table" id="island1-6">
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th--island">古龍種</div>
                            </div>
                            <?php 
                            $sql = "SELECT * FROM monster_boss WHERE class = '鳥龍種'";
                            $result = mysql_query($sql);
                            while($row = mysql_fetch_row($result)){
                            ?>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">怪物名稱</div>
                                <div class="mdl-table__list__th">火</div>
                                <div class="mdl-table__list__th">水</div>
                                <div class="mdl-table__list__th">雷</div>
                                <div class="mdl-table__list__th">冰</div>
                                <div class="mdl-table__list__th">龍</div>
                                <div class="mdl-table__list__th">毒</div>
                                <div class="mdl-table__list__th">麻</div>
                                <div class="mdl-table__list__th">睡</div>
                                <div class="mdl-table__list__th">落穴</div>
                                <div class="mdl-table__list__th">麻穴</div>
                                <div class="mdl-table__list__th">閃光彈</div>
                                <div class="mdl-table__list__th">音爆彈</div>
                                <div class="mdl-table__list__th">村長任務HP</div>
                                <div class="mdl-table__list__th">公會下位HP</div>
                                <div class="mdl-table__list__th">公會上位HP</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td">
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
                                      <?php echo $row[10] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[11] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[12] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[13] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[14] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[15] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[16] ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $row[17] ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
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