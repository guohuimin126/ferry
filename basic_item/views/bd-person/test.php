
    <div id="container">

        <div class="sidebar">
            <div id="options" class="greybg">
                <dl >
                    <dt>月薪范围 <em ></em></dt>
                    <dd >
                        <div>2k以下</div>
                        <div>2k-5k</div>
                        <div>5k-10k</div>
                        <div>10k-15k</div>
                        <div>15k-25k</div>
                        <div>25k-50k</div>
                        <div>50k以上</div>
                    </dd>
                </dl>
                <dl >
                    <dt>工作经验 <em ></em></dt>
                    <dd >
                        <div>不限</div>
                        <div>应届毕业生</div>
                        <div>1年以下</div>
                        <div>1-3年</div>
                        <div>3-5年</div>
                        <div>5-10年</div>
                        <div>10年以上</div>
                    </dd>
                </dl>
                <dl >
                    <dt>最低学历 <em ></em></dt>
                    <dd >
                        <div>不限</div>
                        <div>大专</div>
                        <div>本科</div>
                        <div>硕士</div>
                        <div>博士</div>
                    </dd>
                </dl>
                <dl >
                    <dt>工作性质 <em ></em></dt>
                    <dd >
                        <div>全职</div>
                        <div>兼职</div>
                        <div>实习</div>
                    </dd>
                </dl>
                <dl >
                    <dt>发布时间 <em ></em></dt>
                    <dd >
                        <div>今天</div>
                        <div>3天内</div>
                        <div>一周内</div>
                        <div>一月内</div>
                    </dd>
                </dl>
            </div>

            <!-- QQ群 -->
            <div class="qq_group">
                加入<span>前端</span>QQ群
                <div class="f18">跟同行聊聊</div>
                <p>160541839</p>
            </div>

            <!-- 对外合作广告位  -->
            <a href="http://www.w3cplus.com/" target="_blank" class="partnersAd">
                <img src="style/images/w3cplus.png" width="230" height="80" alt="w3cplus" />
            </a>
            <a href="" target="_blank" class="partnersAd">
                <img src="style/images/jquery_school.jpg" width="230" height="80" alt="JQ学校" />
            </a>
            <a href="http://linux.cn/" target="_blank" class="partnersAd">
                <img src="style/images/linuxcn.png" width="230" height="80" alt="Linux中文社区"  />
            </a>
            <a href="http://zt.zhubajie.com/zt/makesite? utm_source=lagou.com&utm_medium=referral&utm_campaign=BD-yl" target="_blank" class="partnersAd">
                <img src="style/images/zhubajie.jpg" width="230" height="80" alt="猪八戒" />
            </a>
            <a href="http://www.imooc.com" target="_blank" class="partnersAd">
                <img src="style/images/muke.jpg" width="230" height="80" alt="幕课网" />
            </a>
            <!-- 	            <a href="http://www.osforce.cn/" target="_blank" class="partnersAd">
     <img src="style/images/osf-lg.jpg" width="230" height="80" alt="开源力量"  />
 </a>
-->
        </div>

        <div class="content">
            <div id="search_box">
                <form id="searchForm" name="searchForm" action="list.html" method="get">
                    <ul id="searchType">
                        <li data-searchtype="1" class="type_selected">职位</li>
                        <li data-searchtype="4">公司</li>
                    </ul>
                    <div class="searchtype_arrow"></div>
                    <input type="text" id="search_input" name = "kd"  tabindex="1" value="前端开发"  placeholder="请输入职位名称，如：产品经理"  />
                    <input type="hidden" name="spc" id="spcInput" value="1"/>
                    <input type="hidden" name="pl" id="plInput" value=""/>
                    <input type="hidden" name="gj" id="gjInput" value=""/>
                    <input type="hidden" name="xl" id="xlInput" value=""/>
                    <input type="hidden" name="yx" id="yxInput" value=""/>
                    <input type="hidden" name="gx" id="gxInput" value="" />
                    <input type="hidden" name="st" id="stInput" value="" />
                    <input type="hidden" name="labelWords" id="labelWords" value="label" />
                    <input type="hidden" name="lc" id="lc" value="" />
                    <input type="hidden" name="workAddress" id="workAddress" value=""/>
                    <input type="hidden" name="city" id="cityInput" value="全国"/>
                    <input type="submit" id="s_button" value="搜索" />
                </form>
            </div>
            <style>
                .ui-autocomplete{width:488px;background:#fafafa !important;position: relative;z-index:10;border: 2px solid #91cebe;}
                .ui-autocomplete-category{font-size:16px;color:#999;width:50px;position: absolute;z-index:11; right: 0px;/*top: 6px; */text-align:center;border-top: 1px dashed #e5e5e5;padding:5px 0;}
                .ui-menu-item{ *width:439px;vertical-align: middle;position: relative;margin: 0px;margin-right: 50px !important;background:#fff;border-right: 1px dashed #ededed;}
                .ui-menu-item a{display:block;overflow:hidden;}
            </style>
            <script type="text/javascript" src="style/js/search.min.js"></script>
            <dl class="hotSearch">
                <dt>热门搜索：</dt>
                <dd><a href="list.htmlJava?labelWords=label&city=全国">Java</a></dd>
                <dd><a href="list.htmlPHP?labelWords=label&city=全国">PHP</a></dd>
                <dd><a href="list.htmlAndroid?labelWords=label&city=全国">Android</a></dd>
                <dd><a href="list.htmliOS?labelWords=label&city=全国">iOS</a></dd>
                <dd><a href="list.html前端?labelWords=label&city=全国">前端</a></dd>
                <dd><a href="list.html产品经理?labelWords=label&city=全国">产品经理</a></dd>
                <dd><a href="list.htmlUI?labelWords=label&city=全国">UI</a></dd>
                <dd><a href="list.html运营?labelWords=label&city=全国">运营</a></dd>
                <dd><a href="list.htmlBD?labelWords=label&city=全国">BD</a></dd>
                <dd><a href="list.html?gx=实习&city=全国">实习</a></dd>
            </dl>			<div class="breakline"></div>
<!--            工作地点-->
            <dl class="workplace" id="workplaceSelect">
                <dt class="fl">工作地点：</dt>
                <dd >
                    <a href="javascript:;" class="current">全国</a>
                    |
                </dd>
                <dd >
                    <a href="javascript:;" >北京</a>
                    |
                </dd>
                <dd >
                    <a href="javascript:;" >上海</a>
                    |
                </dd>
                <dd >
                    <a href="javascript:;" >广州</a>
                    |
                </dd>
                <dd >
                    <a href="javascript:;" >深圳</a>
                    |
                </dd>
                <dd >
                    <a href="javascript:;" >成都</a>
                    |
                </dd>
                <dd >
                    <a href="javascript:;" >杭州</a>
                    |
                </dd>
                <dd >
                    <a href="javascript:;" >武汉</a>
                    |
                </dd>
                <dd >
                    <a href="javascript:;" >南京</a>
                    |
                </dd>
                <dd  class="more" >
                    <a href="javascript:;" >其他</a>
                    <div class="triangle citymore_arrow"></div>
                </dd>
                <dd id="box_expectCity" class="searchlist_expectCity dn">
                    <span class="bot"></span>
                    <span class="top"></span>
                    <dl>
                        <dt>ABCDEF</dt>
                        <dd>
                            <span>北京</span>
                            <span>长春</span>
                            <span>成都</span>
                            <span>重庆</span>
                            <span>长沙</span>
                            <span>常州</span>
                            <span>东莞</span>
                            <span>大连</span>
                            <span>佛山</span>
                            <span>福州</span>
                        </dd>
                    </dl>
                    <dl>
                        <dt>GHIJ</dt>
                        <dd>
                            <span>贵阳</span>
                            <span>广州</span>
                            <span>哈尔滨</span>
                            <span>合肥</span>
                            <span>海口</span>
                            <span>杭州</span>
                            <span>惠州</span>
                            <span>金华</span>
                            <span>济南</span>
                            <span>嘉兴</span>
                        </dd>
                    </dl>
                    <dl>
                        <dt>KLMN</dt>
                        <dd>
                            <span>昆明</span>
                            <span>廊坊</span>
                            <span>宁波</span>
                            <span>南昌</span>
                            <span>南京</span>
                            <span>南宁</span>
                            <span>南通</span>
                        </dd>
                    </dl>
                    <dl>
                        <dt>OPQR</dt>
                        <dd>
                            <span>青岛</span>
                            <span>泉州</span>
                        </dd>
                    </dl>
                    <dl>
                        <dt>STUV</dt>
                        <dd>
                            <span>上海</span>
                            <span>石家庄</span>
                            <span>绍兴</span>
                            <span>沈阳</span>
                            <span>深圳</span>
                            <span>苏州</span>
                            <span>天津</span>
                            <span>太原</span>
                            <span>台州</span>
                        </dd>
                    </dl>
                    <dl>
                        <dt>WXYZ</dt>
                        <dd>
                            <span>武汉</span>
                            <span>无锡</span>
                            <span>温州</span>
                            <span>西安</span>
                            <span>厦门</span>
                            <span>烟台</span>
                            <span>珠海</span>
                            <span>中山</span>
                            <span>郑州</span>
                        </dd>
                    </dl>
                </dd>
            </dl>

            <div id="tip_didi" class="dn">
                <span>亲，“嘀嘀打车”已更名为“滴滴打车”了哦，我们已帮您自动跳转~</span>
                <a href="javascript:;">我知道了</a>
            </div>

            <ul class="hot_pos reset">
                <li class="odd clearfix">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/86989.html" title="前端开发" target="_blank">前端开发</a>
                            &nbsp;
                            <span class="c9">[北京]</span>
                        </div>
                        <span><em class="c7">月薪：</em>10k-20k</span>
                        <span><em class="c7">经验：</em> 3-5年</span>
                        <span><em class="c7">最低学历： </em>本科</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>借移动医疗大势享受坐直升飞机的职场发展</span>
                        <br />
                        <span>1天前发布</span>
                    </div>
                    <div class="hot_pos_r">
                        <div class="apply">
                            <a href="toudi.html" target="_blank">投个简历</a>
                        </div>
                        <div class="mb10"><a href="h/c/1712.html" title="紫色医疗" target="_blank">紫色医疗</a></div>
                        <span><em class="c7">领域： </em>移动互联网 ,健康医疗</span>
                        <span><em class="c7">创始人：</em> Lu</span>
                        <br />
                        <span><em class="c7">阶段： </em>成长型(A轮)</span>
                        <span><em class="c7">规模： </em>15-50人</span>
                        <ul class="companyTags reset">
                            <li>五险一金</li>
                            <li>股票期权</li>
                            <li>年度旅游</li>
                        </ul>
                    </div>
                </li>

                <li class="clearfix">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/114177.html" title="前端开发" target="_blank">前端开发</a>
                            &nbsp;
                            <span class="c9">[北京]</span>
                        </div>
                        <span><em class="c7">月薪：</em>8k-16k</span>
                        <span><em class="c7">经验：</em> 3-5年</span>
                        <span><em class="c7">最低学历： </em>本科</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>第一家互联网私人银行招募各路牛人</span>
                        <br />
                        <span>09:41发布</span>
                    </div>
                    <div class="hot_pos_r">
                        <div class="apply">
                            <a href="toudi.html" target="_blank">投个简历</a>
                        </div>
                        <div class="mb10"><a href="h/c/7626.html" title="网利宝" target="_blank">网利宝</a></div>
                        <span><em class="c7">领域： </em>O2O,金融互联网</span>
                        <span><em class="c7">创始人：</em> 赵润龙（Kevin Chiu）</span>
                        <br />
                        <span><em class="c7">阶段： </em>成长型(A轮)</span>
                        <span><em class="c7">规模： </em>15-50人</span>
                        <ul class="companyTags reset">
                            <li>股票期权</li>
                            <li>五险一金</li>
                            <li>带薪年假</li>
                        </ul>
                    </div>
                </li>

                <li class="odd clearfix">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/95531.html" title="高级web前端开发工程师" target="_blank">高级web前端开发工程师</a>
                            &nbsp;
                            <span class="c9">[上海]</span>
                        </div>
                        <span><em class="c7">月薪：</em>8k-15k</span>
                        <span><em class="c7">经验：</em> 3-5年</span>
                        <span><em class="c7">最低学历： </em>大专</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>上市公司创业型团队 五险一金 精英团队</span>
                        <br />
                        <span>09:40发布</span>
                    </div>
                    <div class="hot_pos_r">
                        <div class="apply">
                            <a href="toudi.html" target="_blank">投个简历</a>
                        </div>
                        <div class="mb10"><a href="h/c/9725.html" title="淘米" target="_blank">淘米</a></div>
                        <span><em class="c7">领域： </em>游戏</span>
                        <br />
                        <span><em class="c7">阶段： </em>上市公司</span>
                        <span><em class="c7">规模： </em>500-2000人</span>
                        <ul class="companyTags reset">
                            <li>岗位晋升</li>
                            <li>技能培训</li>
                        </ul>
                    </div>
                </li>

                <li class="clearfix">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/137964.html" title="前端开发" target="_blank">前端开发</a>
                            &nbsp;
                            <span class="c9">[广州]</span>
                        </div>
                        <span><em class="c7">月薪：</em>8k-9k</span>
                        <span><em class="c7">经验：</em> 1-3年</span>
                        <span><em class="c7">最低学历： </em>不限</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>高薪、双休、五险一金！等你来了！</span>
                        <br />
                        <span>1天前发布</span>
                    </div>
                    <div class="hot_pos_r">
                        <div class="apply">
                            <a href="toudi.html" target="_blank">投个简历</a>
                        </div>
                        <div class="mb10"><a href="h/c/3228.html" title="艾特互动" target="_blank">艾特互动</a></div>
                        <span><em class="c7">领域： </em>移动互联网,社会化营销</span>
                        <span><em class="c7">创始人：</em> 李至言</span>
                        <br />
                        <span><em class="c7">阶段： </em>初创型(未融资)</span>
                        <span><em class="c7">规模： </em>15-50人</span>
                        <ul class="companyTags reset">
                            <li>年终分红</li>
                            <li>绩效奖金</li>
                            <li>专项奖金</li>
                        </ul>
                    </div>
                </li>

                <li class="odd clearfix">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/129304.html" title="前端开发" target="_blank">前端开发</a>
                            &nbsp;
                            <span class="c9">[上海]</span>
                        </div>
                        <span><em class="c7">月薪：</em>7k-14k</span>
                        <span><em class="c7">经验：</em> 1-3年</span>
                        <span><em class="c7">最低学历： </em>大专</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>全新的外贸业务开发模式，等你一起来创造！</span>
                        <br />
                        <span>09:13发布</span>
                    </div>
                    <div class="hot_pos_r">
                        <div class="apply">
                            <a href="toudi.html" target="_blank">投个简历</a>
                        </div>
                        <div class="mb10"><a href="h/c/6922.html" title="快车道数据科技" target="_blank">快车道数据科技</a></div>
                        <span><em class="c7">领域： </em>云计算\大数据,分类信息</span>
                        <span><em class="c7">创始人：</em> 晋圣前</span>
                        <br />
                        <span><em class="c7">阶段： </em>初创型(天使轮)</span>
                        <span><em class="c7">规模： </em>少于15人</span>
                        <ul class="companyTags reset">
                            <li>领导好</li>
                            <li>扁平管理</li>
                            <li>股票期权</li>
                        </ul>
                    </div>
                </li>

                <li class="clearfix">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/52373.html" title="前端开发" target="_blank">前端开发</a>
                            &nbsp;
                            <span class="c9">[上海]</span>
                        </div>
                        <span><em class="c7">月薪：</em>4k-7k</span>
                        <span><em class="c7">经验：</em> 1-3年</span>
                        <span><em class="c7">最低学历： </em>大专</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>保险，双休，带薪年假等</span>
                        <br />
                        <span>1天前发布</span>
                    </div>
                    <div class="hot_pos_r">
                        <div class="apply">
                            <a href="toudi.html" target="_blank">投个简历</a>
                        </div>
                        <div class="mb10"><a href="h/c/9983.html" title="永灿" target="_blank">永灿</a></div>
                        <span><em class="c7">领域： </em>移动互联网,电子商务</span>
                        <span><em class="c7">创始人：</em> 黎长鑫</span>
                        <br />
                        <span><em class="c7">阶段： </em>初创型(天使轮)</span>
                        <span><em class="c7">规模： </em>150-500人</span>
                        <ul class="companyTags reset">
                            <li>年终分红</li>
                            <li>绩效奖金</li>
                            <li>年底双薪</li>
                        </ul>
                    </div>
                </li>

                <li class="odd clearfix">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/83325.html" title="前端开发" target="_blank">前端开发</a>
                            &nbsp;
                            <span class="c9">[杭州]</span>
                        </div>
                        <span><em class="c7">月薪：</em>4k-7k</span>
                        <span><em class="c7">经验：</em> 1-3年</span>
                        <span><em class="c7">最低学历： </em>大专</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>保险，双休，带薪年假等</span>
                        <br />
                        <span>1天前发布</span>
                    </div>
                    <div class="hot_pos_r">
                        <div class="apply">
                            <a href="toudi.html" target="_blank">投个简历</a>
                        </div>
                        <div class="mb10"><a href="h/c/9983.html" title="永灿" target="_blank">永灿</a></div>
                        <span><em class="c7">领域： </em>移动互联网,电子商务</span>
                        <span><em class="c7">创始人：</em> 黎长鑫</span>
                        <br />
                        <span><em class="c7">阶段： </em>初创型(天使轮)</span>
                        <span><em class="c7">规模： </em>150-500人</span>
                        <ul class="companyTags reset">
                            <li>年终分红</li>
                            <li>绩效奖金</li>
                            <li>年底双薪</li>
                        </ul>
                    </div>
                </li>

                <li class="clearfix">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/56965.html" title="前端开发" target="_blank">前端开发</a>
                            &nbsp;
                            <span class="c9">[北京]</span>
                        </div>
                        <span><em class="c7">月薪：</em>6k-12k</span>
                        <span><em class="c7">经验：</em> 1-3年</span>
                        <span><em class="c7">最低学历： </em>不限</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>前端主管</span>
                        <br />
                        <span>3天前发布</span>
                    </div>
                    <div class="hot_pos_r">
                        <div class="apply">
                            <a href="toudi.html" target="_blank">投个简历</a>
                        </div>
                        <div class="mb10"><a href="h/c/10763.html" title="鲜旅科技" target="_blank">鲜旅科技</a></div>
                        <span><em class="c7">领域： </em>O2O</span>
                        <br />
                        <span><em class="c7">阶段： </em>初创型(未融资)</span>
                        <span><em class="c7">规模： </em>少于15人</span>
                        <ul class="companyTags reset">
                            <li>年终分红</li>
                            <li>股票期权</li>
                            <li>五险一金</li>
                        </ul>
                    </div>
                </li>

                <li class="odd clearfix">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/4801.html" title="前端开发工程师" target="_blank">前端开发工程师</a>
                            &nbsp;
                            <span class="c9">[上海]</span>
                        </div>
                        <span><em class="c7">月薪：</em>8k-12k</span>
                        <span><em class="c7">经验：</em> 不限</span>
                        <span><em class="c7">最低学历： </em>大专</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>发展空间，与大牛一起工作</span>
                        <br />
                        <span>10:00发布</span>
                    </div>
                    <div class="hot_pos_r">
                        <div class="apply">
                            <a href="h/jobs/4801.html" target="_blank">投个简历</a>
                        </div>
                        <div class="mb10"><a href="h/c/1335.html" title="堆糖网" target="_blank">堆糖网</a></div>
                        <span><em class="c7">领域： </em>移动互联网,生活服务</span>
                        <br />
                        <span><em class="c7">阶段： </em>成长型(B轮)</span>
                        <span><em class="c7">规模： </em>15-50人</span>
                        <ul class="companyTags reset">
                            <li>弹性工作</li>
                            <li>节日礼物</li>
                            <li>午餐补助</li>
                        </ul>
                    </div>
                </li>

                <li class="clearfix">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/33058.html" title="前端开发工程师实习生" target="_blank">前端开发工程师实习生</a>
                            &nbsp;
                            <span class="c9">[上海]</span>
                        </div>
                        <span><em class="c7">月薪：</em>3k-6k</span>
                        <span><em class="c7">经验：</em> 不限</span>
                        <span><em class="c7">最低学历： </em>大专</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>快速成长的机会，优秀可转正</span>
                        <br />
                        <span>10:00发布</span>
                    </div>
                    <div class="hot_pos_r">
                        <div class="apply">
                            <a href="toudi.html" target="_blank">投个简历</a>
                        </div>
                        <div class="mb10"><a href="h/c/1335.html" title="堆糖网" target="_blank">堆糖网</a></div>
                        <span><em class="c7">领域： </em>移动互联网,生活服务</span>
                        <br />
                        <span><em class="c7">阶段： </em>成长型(B轮)</span>
                        <span><em class="c7">规模： </em>15-50人</span>
                        <ul class="companyTags reset">
                            <li>弹性工作</li>
                            <li>节日礼物</li>
                            <li>午餐补助</li>
                        </ul>
                    </div>
                </li>

                <li class="odd clearfix">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/39231.html" title="JS前端开发工程师-北京-01899" target="_blank">JS前端开发工程师-北京-01899</a>
                            &nbsp;
                            <span class="c9">[北京]</span>
                        </div>
                        <span><em class="c7">月薪：</em>10k-20k</span>
                        <span><em class="c7">经验：</em> 3-5年</span>
                        <span><em class="c7">最低学历： </em>本科</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>六险一金，饭补，绩效奖金，班车，领导好</span>
                        <br />
                        <span>14:16发布</span>
                    </div>
                    <div class="hot_pos_r">
                        <div class="apply">
                            <a href="toudi.html" target="_blank">投个简历</a>
                        </div>
                        <div class="mb10"><a href="h/c/8143.html" title="途家网" target="_blank">途家网</a></div>
                        <span><em class="c7">领域： </em>移动互联网,O2O</span>
                        <span><em class="c7">创始人：</em> 罗军</span>
                        <br />
                        <span><em class="c7">阶段： </em>成长型(B轮)</span>
                        <span><em class="c7">规模： </em>500-2000人</span>
                        <ul class="companyTags reset">
                            <li>绩效奖金</li>
                            <li>五险一金</li>
                            <li>带薪年假</li>
                        </ul>
                    </div>
                </li>

                <li class="clearfix">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/112562.html" title="资深JS前端开发工程师-北京-02398" target="_blank">资深JS前端开发工程师-北京-02398</a>
                            &nbsp;
                            <span class="c9">[北京]</span>
                        </div>
                        <span><em class="c7">月薪：</em>15k-25k</span>
                        <span><em class="c7">经验：</em> 3-5年</span>
                        <span><em class="c7">最低学历： </em>本科</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>六险一金，饭补，班车，晋升机制，氛围好</span>
                        <br />
                        <span>14:15发布</span>
                    </div>
                    <div class="hot_pos_r">
                        <div class="apply">
                            <a href="toudi.html" target="_blank">投个简历</a>
                        </div>
                        <div class="mb10"><a href="h/c/8143.html" title="途家网" target="_blank">途家网</a></div>
                        <span><em class="c7">领域： </em>移动互联网,O2O</span>
                        <span><em class="c7">创始人：</em> 罗军</span>
                        <br />
                        <span><em class="c7">阶段： </em>成长型(B轮)</span>
                        <span><em class="c7">规模： </em>500-2000人</span>
                        <ul class="companyTags reset">
                            <li>绩效奖金</li>
                            <li>五险一金</li>
                            <li>带薪年假</li>
                        </ul>
                    </div>
                </li>

                <li class="odd clearfix">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/73943.html" title="前端开发工程师" target="_blank">前端开发工程师</a>
                            &nbsp;
                            <span class="c9">[北京]</span>
                        </div>
                        <span><em class="c7">月薪：</em>10k-18k</span>
                        <span><em class="c7">经验：</em> 1-3年</span>
                        <span><em class="c7">最低学历： </em>本科</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>精英团队；有竞争力的薪酬</span>
                        <br />
                        <span>1天前发布</span>
                    </div>
                    <div class="hot_pos_r">
                        <div class="apply">
                            <a href="toudi.html" target="_blank">投个简历</a>
                        </div>
                        <div class="mb10"><a href="h/c/3786.html" title="宜信公司" target="_blank">宜信公司</a></div>
                        <span><em class="c7">领域： </em>移动互联网,金融互联网</span>
                        <span><em class="c7">创始人：</em> 唐宁</span>
                        <br />
                        <span><em class="c7">阶段： </em>成熟型(D轮及以上)</span>
                        <span><em class="c7">规模： </em>2000人以上</span>
                        <ul class="companyTags reset">
                            <li>管理规范</li>
                            <li>技能培训</li>
                            <li>扁平管理</li>
                        </ul>
                    </div>
                </li>

                <li class="clearfix">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/134193.html" title="前端开发工程师" target="_blank">前端开发工程师</a>
                            &nbsp;
                            <span class="c9">[苏州]</span>
                        </div>
                        <span><em class="c7">月薪：</em>6k-12k</span>
                        <span><em class="c7">经验：</em> 1-3年</span>
                        <span><em class="c7">最低学历： </em>大专</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>C轮融资，工作环境好，待遇优</span>
                        <br />
                        <span>1天前发布</span>
                    </div>
                    <div class="hot_pos_r">
                        <div class="apply">
                            <a href="h/jobs/134193.html" target="_blank">投个简历</a>
                        </div>
                        <div class="mb10"><a href="h/c/3564.html" title="同程旅游" target="_blank">同程旅游</a></div>
                        <span><em class="c7">领域： </em>移动互联网,在线旅游</span>
                        <span><em class="c7">创始人：</em> 吴志祥</span>
                        <br />
                        <span><em class="c7">阶段： </em>成熟型(C轮)</span>
                        <span><em class="c7">规模： </em>2000人以上</span>
                        <ul class="companyTags reset">
                            <li>绩效奖金</li>
                            <li>股票期权</li>
                            <li>专项奖金</li>
                        </ul>
                    </div>
                </li>

                <li class="odd clearfix">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/62007.html" title="web前端开发工程师/主管" target="_blank">web前端开发工程师/主管</a>
                            &nbsp;
                            <span class="c9">[深圳]</span>
                        </div>
                        <span><em class="c7">月薪：</em>6k以上</span>
                        <span><em class="c7">经验：</em> 1-3年</span>
                        <span><em class="c7">最低学历： </em>大专</span>
                        <br />
                        <span><em class="c7">职位诱惑：</em>年底双薪，带薪年假，周末双休，年度旅游</span>
                        <br />
                        <span>10:40发布</span>
                    </div>
                    <div class="hot_pos_r">
                        <div class="apply">
                            <a href="h/jobs/62007.html" target="_blank">投个简历</a>
                        </div>
                        <div class="mb10"><a href="h/c/12185.html" title="蝶讯网" target="_blank">蝶讯网</a></div>
                        <span><em class="c7">领域： </em>移动互联网,文化艺术</span>
                        <span><em class="c7">创始人：</em> 贺先生</span>
                        <br />
                        <span><em class="c7">阶段： </em>初创型(未融资)</span>
                        <span><em class="c7">规模： </em>500-2000人</span>
                        <ul class="companyTags reset">
                            <li>绩效奖金</li>
                            <li>年终分红</li>
                            <li>年底双薪</li>
                        </ul>
                    </div>
                </li>

            </ul>
            <ul class="hot_pos reset">
                <li class="clearfix">
                    <?php foreach($data as $k=>$v){?>
                        <div class="hot_pos_l">
                            <div class="mb10">
                                <a target="_blank" href="?r=bd-person/detail&p_id=<?php echo $v['p_id']?>"><?php echo $v['c_name']?></a>
                                &nbsp;
                                <span class="c9">[<?php echo $v['job_address'];?>]</span>
                            </div>
                            <span><em class="c7">月薪：</em> </span>
                            <span><em class="c7">经验：</em> <?php echo $v['job_num'];?>年</span>
                            <span><em class="c7">最低学历：</em> <?php echo $v['ed_bg'];?></span>
                            <br>
                            <span><em class="c7">职位诱惑：</em> <?php echo $v['job_special'];?></span>
                            <br>
                            <span><?php echo $v['add_time'];?>前发布</span>
                            <!-- <a  class="wb">分享到微博</a> -->
                        </div>


                        <div class="hot_pos_r">

                            <div class="mb10 recompany"><a target="_blank" href="http://www.lagou.com/c/5004.html"><?php echo $v['name'];?></a></div>
                            <span><em class="c7">电话：</em> <?php echo $v['tel'];?></span>
                            <br>
                            <span><em class="c7">阶段：</em> 上市公司</span>
                            <span><em class="c7">规模：</em> <?php echo $v['scale'];?></span>
                            <ul class="companyTags reset">
                                <li>股票期权</li>
                                <li>专项奖金</li>
                                <li>年底双薪</li>
                            </ul>
                        </div>
                        <div class="recommend">
                            92%
                            <span>该职位与你的简历匹配度是92%  </span>
                        </div>
                    <?php } ?>

                </li>

            </ul>
            <div class="Pagination"></div>
        </div>

        <script>
            $(function(){
                /***************************
                 * 分页
                 */
                $('.Pagination').pager({
                    currPage: 1,
                    pageNOName: "pn",
                    form: "searchForm",
                    pageCount: 30,
                    pageSize:  5
                });

                $(".workplace dd").not('.more').children('a').click(function(){
                    $('#lc').val(1);
                    editForm("cityInput" , $(this).html());
                });

                $("#box_expectCity dd span").click(function(){
                    $('#lc').val(1);
                    editForm("cityInput" , $(this).html());
                });

                $('#options dd div').click(function(){
                    var firstName = $(this).parents('dl').children('dt').text();
                    var fn = $.trim(firstName);
                    if (fn=="月薪范围"){
                        editForm("yxInput" , $(this).html());
                    }
                    else if(fn=="工作经验"){
                        editForm("gjInput" , $(this).html());
                    }
                    else if(fn=="最低学历"){
                        editForm("xlInput" , $(this).html());
                    }
                    else if(fn=="工作性质"){
                        editForm("gxInput" , $(this).html());
                    }
                    else if(fn=="发布时间"){
                        editForm("stInput" , $(this).html());
                    }
                });

                $('#selected ul').delegate('li span.select_remove','click',function(event){
                    var firstName = $(this).parent('li').find('strong').text();
                    var fn = $.trim(firstName);
                    if (fn=="月薪范围")
                        editForm("yxInput" , "");
                    else if(fn=="工作经验")
                        editForm("gjInput" , "");
                    else if(fn=="最低学历")
                        editForm("xlInput" , "");
                    else if(fn=="工作性质")
                        editForm("gxInput" , "");
                    else if(fn=="发布时间")
                        editForm("stInput" , "");
                });

                /* search结果飘绿	*/
                (function($) {
                    var searchVal = $('#search_input').val();
                    var reg = /\s/g;
                    searchVal = searchVal.replace(reg, "").split("");

                    var resultL = '';
                    var resultR = '';
                    $('.hot_pos li').each(function(){
                        resultL = $('.hot_pos_l a',this).text().split("");
                        $.each(resultL,function(i,v){
                            if($.inArray(v.toLowerCase(),searchVal) != -1 || $.inArray(v.toUpperCase(),searchVal) != -1){
                                resultL[i] = '<span>'+ v +'</span>';
                            }
                        });
                        $('.hot_pos_l a',this).html(resultL.join(''));

                        resultR = $('.hot_pos_r .mb10 a',this).text().split("");
                        $.each(resultR,function(i,v){
                            if($.inArray(v.toLowerCase(),searchVal) != -1 || $.inArray(v.toUpperCase(),searchVal) != -1){
                                resultR[i] = '<span>'+ v +'</span>';
                            }
                        });
                        $('.hot_pos_r .mb10 a',this).html(resultR.join(''));
                    });

                })(jQuery);

                //didi tip
                if($.cookie('didiTip') != 1 && false){
                    $('#tip_didi').show();
                }
                $('#tip_didi a').click(function(){
                    $(this).parent().remove();
                    $.cookie('didiTip',1,{ expires: 30, path: '/'});
                });

            });

            function editForm(inputId,inputValue){
                $("#"+inputId).val(inputValue);
                var keyword = $.trim($('#search_input').val());
                var reg =  /[`~!@\$%\^\&\*\(\)_<>\?:"\{\},\\\/;'\[\]]/ig;
                var re = /#/g;
                var r = /\./g;
                var kw = keyword.replace(reg," ");

                if(kw == ''){
                    $('#searchForm').attr('action','list.html所有职位').submit();
                }else{
                    kw = kw.replace(re,'井');
                    kw = kw.replace(r,'。');
                    $('#searchForm').attr('action','list.html'+kw).submit();
                }
                //$("#searchForm").submit();
            }
        </script>

        <div class="clear"></div>
        <input type="hidden" id="resubmitToken" value="" />
        <a id="backtop" title="回到顶部" rel="nofollow"></a>
    </div><!-- end #container -->

