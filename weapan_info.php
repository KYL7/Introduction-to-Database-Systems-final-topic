<?php 
include("header.php"); 
include("info_header.php");
$statu = $_POST['statu'];
$id = $_POST['id']; 
$pic = $_POST['pic'];
$name = $_POST['name'];
$price = $_POST['price'];
?>

                    <h3>武器</h3>
                    <div class="section">
                        <div class="mdl-table" id="island1-1">
                            <div class="mdl-table__list mdl-table__thead">
                               <div class="mdl-table__list__th--island"></div>
                            </div>

                            <?php 
                            switch ($statu) {
                            	case '0':
                            		$db = 'weapan_big_sword_info';
                            		break;
                            	case '1':
                            		$db = 'weapan_samurai_sword_info';
                            		break;
                            	case '2':
                            		$db = 'weapan_hand_sword_info';
                            		break;
                            	case '3':
                            		$db = 'weapan_double_knives_info';
                            		break;
                            	case '4':
                            		$db = 'weapan_sledgehammer_info';
                            		break;
                            	case '5':
                                    $db = 'weapan_hunting_flute_info';
                                    break;
                                case '6':
                                    $db = 'weapan_rifle_info';
                                    break;
                                case '7':
                                    $db = 'weapan_cannon_info';
                                    break;    
                                case '8':
                                    $db = 'weapan_light_crossbow_info';
                                    break;    
                                case '9':
                                    $db = 'weapan_heavy_crossbow_info';
                                    break;    
                                case '10':
                                    $db = 'weapan_bow_info';
                                    break;       
                            	default:
                            		# code...
                            		break;
                            }
                            $sql = "SELECT * FROM $db WHERE name = '$name'";
                            $result = mysql_query($sql);
                            while($row = mysql_fetch_row($result)){
                            ?>
                            <div class="mdl-table__list mdl-table__thead">
                                <div class="mdl-table__list__th">武器圖片</div>
                                <div class="mdl-table__list__th pc">武器名稱</div>
                                <div class="mdl-table__list__th">價格</div>
                                <div class="mdl-table__list__th">素材1</div>
                                <div class="mdl-table__list__th">素材2</div>
                                <div class="mdl-table__list__th">素材3</div>
                                <div class="mdl-table__list__th">素材4</div>
                            </div>
                            <div class="mdl-table__list mdl-table__tbody">
                                <div class="mdl-table__list__td--img">
                                    <div class="inner">
                                      <?php echo "<img src='$pic'>" ?>
                                    </div>
                                </div>
                                <div class="mdl-table__list__td pc">
                                  <div class="inner">
                                    <?php echo $name ?>
                                  </div>
                                </div>
                                <div class="mdl-table__list__td">
                                    <div class="inner">
                                      <?php echo $price ?>
                                    </div>
                                </div>
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
                    <a href="##pagetop">
                        <img src="./images/btn_top.png" alt="top">
                    </a>
                </div>

                <div id="footer">
                 
                </div>
                <!--/footer -->
            </div>
            <!--/container -->
        </div>
        <!--[[[[/wrapper]]] -->
    </body>
</html>