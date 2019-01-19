@extends('home.layout.layout')
@section('title'){{$sTitle}}@endsection
@section('content')
    <div class="toppic">
        <div class="am-container-1">
            <div class="toppic-title left">
                <i class="am-icon-user toppic-title-i"></i>
                <span class="toppic-title-span">个人中心</span>
                <p>Center</p>
            </div>
            <div class="right toppic-progress">
                <span><a href="/home" class="w-white">首页</a></span>
                <i class=" am-icon-arrow-circle-right w-white"></i>
                <span><a href="/self" class="w-white">个人中心</a></span>
            </div>
        </div>
    </div>

    <div class="am-g">
        <div class="am-u-sm-12">
            <div class="am-panel am-panel-default">
                <div class="am-panel-bd">
                    <div class="am-g">
                        <div class="am-u-md-12">
                            <div data-am-widget="tabs" class="am-tabs am-tabs-default">
                                <ul class="am-tabs-nav am-cf">
                                    <li class="am-active">
                                        <a href="[data-tab-panel-0]">
                                            <i class="am-icon-hand-paper-o"></i>
                                            1.选择服务项目
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="[data-tab-panel-1]">
                                            <i class="am-icon-user-secret"></i>
                                            2.翻牌造型师
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="[data-tab-panel-2]">
                                            <i class="am-icon-clock-o"></i>
                                            3.预定时间
                                        </a>
                                    </li>
                                </ul>
                                <div class="am-tabs-bd">
                                    <div data-tab-panel-0 class="am-tab-panel am-active">
                                        <div class="am-scrollable-vertical">
                                            <table class="am-table am-table-bordered am-table-striped am-text-nowrap am-table-compact">
                                                <thead>
                                                <tr>
                                                    <th>选择</th>
                                                    <th>服务单号</th>
                                                    <th>服务名称</th>
                                                    <th>
                                                        价位(
                                                        <input type="radio" name="type" checked="checked">短发
                                                        <input type="radio" name="type">长发
                                                        )
                                                    </th>
                                                    <th>服务时长</th>
                                                    <th>信誉值</th>
                                                    <th>服务简介</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="am-active">
                                                    <td>
                                                        <input type="checkbox" name="order">
                                                    </td>
                                                    <td>
                                                        jyfy1001
                                                    </td>
                                                    <td>
                                                        洗发
                                                    </td>
                                                    <td>&yen;10</td>
                                                    <td>10分钟</td>
                                                    <td>10</td>
                                                    <td>洗的很好，很干净！</td>
                                                </tr>
                                                <tr class="am-active">
                                                    <td>
                                                        <input type="checkbox" name="order">
                                                    </td>
                                                    <td>
                                                        jyfy2001
                                                    </td>
                                                    <td>
                                                        造型
                                                    </td>
                                                    <td>&yen;16</td>
                                                    <td>10分钟</td>
                                                    <td>10</td>
                                                    <td>很有型，很时尚！</td>
                                                </tr>
                                                <tr class="am-active">
                                                    <td>
                                                        <input type="checkbox" name="order">
                                                    </td>
                                                    <td>
                                                        jyfy3001
                                                    </td>
                                                    <td>
                                                        剪发
                                                    </td>
                                                    <td>&yen;20</td>
                                                    <td>30分钟</td>
                                                    <td>20</td>
                                                    <td>剪的很好，很优惠！</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div data-tab-panel-1 class="am-tab-panel ">
                                        <ul class="news-content-ul">
                                            <li class="am-u-sm-12 am-u-md-3 am-u-lg-3">
                                                <a href="#">
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-5">
                                                        <div class="news-img">
                                                            <img src="{{'/assets/img/news.png'}}" class="am-circle"/>
                                                        </div>
                                                    </div>
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-7">
                                                        <span class="news-right-title">关关</span>
                                                        <p>专业造型师</p>
                                                        <p>
                                                            <i class="am-icon-star"></i>
                                                            <i class="am-icon-star"></i>
                                                            <i class="am-icon-star"></i>
                                                        </p>
                                                        <button type="button"
                                                                class="am-btn am-btn-primary am-round am-btn-xs">默认样式
                                                        </button>
                                                    </div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>
                                            <li class="am-u-sm-12 am-u-md-3 am-u-lg-3">
                                                <a href="#">
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-5">
                                                        <div class="news-img">
                                                            <img src="{{'/assets/img/news1.png'}}" class="am-circle"/>
                                                        </div>
                                                    </div>
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-7">
                                                        <span class="news-right-title">晓晓</span>
                                                        <p>美发师</p>
                                                        <p>
                                                            <i class="am-icon-star"></i>
                                                            <i class="am-icon-star"></i>
                                                        </p>
                                                        <button type="button"
                                                                class="am-btn am-btn-primary am-round am-btn-xs">默认样式
                                                        </button>
                                                    </div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>
                                            <li class="am-u-sm-12 am-u-md-3 am-u-lg-3">
                                                <a href="#">
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-5">
                                                        <div class="news-img">
                                                            <img src="{{'/assets/img/news1.png'}}" class="am-circle"/>
                                                        </div>
                                                    </div>
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-7">
                                                        <span class="news-right-title">阿成</span>
                                                        <p>发型设计师</p>
                                                        <p>
                                                            <i class="am-icon-star"></i>
                                                        </p>
                                                        <button type="button"
                                                                class="am-btn am-btn-primary am-round am-btn-xs">默认样式
                                                        </button>
                                                    </div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>
                                            <li class="am-u-sm-12 am-u-md-3 am-u-lg-3">
                                                <a href="#">
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-5">
                                                        <div class="news-img">
                                                            <img src="{{'/assets/img/news1.png'}}" class="am-circle"/>
                                                        </div>
                                                    </div>
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-7">
                                                        <span class="news-right-title">维诺</span>
                                                        <p>染烫师</p>
                                                        <p>
                                                            <i class="am-icon-star"></i>
                                                            <i class="am-icon-star"></i>
                                                            <i class="am-icon-star"></i>
                                                            <i class="am-icon-star"></i>
                                                            <i class="am-icon-star"></i>
                                                        </p>
                                                        <button type="button"
                                                                class="am-btn am-btn-primary am-round am-btn-xs">默认样式
                                                        </button>
                                                    </div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>
                                            <div class="clear"></div>
                                            <hr>
                                            <li class="am-u-sm-12 am-u-md-3 am-u-lg-3">
                                                <a href="#">
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-4">
                                                        <span class="news-right-title">关关</span>
                                                        <p>专业造型师</p>
                                                        <p>
                                                            <i class="am-icon-star"></i>
                                                            <i class="am-icon-star"></i>
                                                            <i class="am-icon-star"></i>
                                                        </p>
                                                        <button type="button"
                                                                class="am-btn am-btn-primary am-round am-btn-xs">默认样式
                                                        </button>
                                                    </div>
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-5">
                                                        <div class="news-img">
                                                            <img src="{{'/assets/img/news.png'}}" class="am-circle"/>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>
                                            <li class="am-u-sm-12 am-u-md-3 am-u-lg-3">
                                                <a href="#">
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-4">
                                                        <span class="news-right-title">晓晓</span>
                                                        <p>美发师</p>
                                                        <p>
                                                            <i class="am-icon-star"></i>
                                                            <i class="am-icon-star"></i>
                                                        </p>
                                                        <button type="button"
                                                                class="am-btn am-btn-primary am-round am-btn-xs">默认样式
                                                        </button>
                                                    </div>
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-5">
                                                        <div class="news-img">
                                                            <img src="{{'/assets/img/news1.png'}}" class="am-circle"/>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>
                                            <li class="am-u-sm-12 am-u-md-3 am-u-lg-3">
                                                <a href="#">
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-4">
                                                        <span class="news-right-title">阿成</span>
                                                        <p>发型设计师</p>
                                                        <p>
                                                            <i class="am-icon-star"></i>
                                                            <i class="am-icon-star"></i>
                                                            <i class="am-icon-star"></i>
                                                            <i class="am-icon-star"></i>
                                                        </p>
                                                        <button type="button"
                                                                class="am-btn am-btn-primary am-round am-btn-xs">默认样式
                                                        </button>
                                                    </div>
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-5">
                                                        <div class="news-img">
                                                            <img src="{{'/assets/img/news1.png'}}" class="am-circle"/>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>
                                            <li class="am-u-sm-12 am-u-md-3 am-u-lg-3">
                                                <a href="#">
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-4">
                                                        <span class="news-right-title">维诺</span>
                                                        <p>染烫师</p>
                                                        <p>
                                                            <i class="am-icon-star"></i>
                                                            <i class="am-icon-star"></i>
                                                            <i class="am-icon-star"></i>
                                                        </p>
                                                        <button type="button"
                                                                class="am-btn am-btn-primary am-round am-btn-xs">默认样式
                                                        </button>
                                                    </div>
                                                    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-5">
                                                        <div class="news-img">
                                                            <img src="{{'/assets/img/news1.png'}}" class="am-circle"/>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </a>
                                            </li>
                                            {{--<div class="clear"></div>--}}
                                            <hr>
                                        </ul>
                                    </div>
                                    <div data-tab-panel-2 class="am-tab-panel ">
                                        <div id="calendar"></div>
                                    </div>
                                    <button type="button" class="am-btn am-btn-danger am-btn-block">立即预定（Reservation）</button>
                                    <button type="button" class="am-btn am-btn-primary am-btn-block" onclick="window.location.href='/self';">我的订单（My Order）</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            // $('#calendar').fullCalendar('incrementDate', 1,0,0);
            var editBox = $('#calendar-edit-box');

            $('.edit-box-close').on('click', function () {
                $('#calendar').fullCalendar('unselect');
            });
            // $('#calendar').fullCalendar( 'incrementDate', {days:5, hours:0, minutes:0} ); //日期视图向前或向后移动固定的时间，duration可以为={ days:1, hours:23, minutes:59 }
            $('#calendar').fullCalendar({

                header: {
                    left: '',
                    center: '',
                    right: ''
                },
                // defaultView: 'agendaWeek',//日历初始化时默认视图
                defaultView: 'agendaFiveDay',
                views: {
                    agendaFiveDay: {
                        type: 'agenda',
                        duration: {days: 5}
                    }
                },
                allDaySlot: false,//在agenda视图模式下，是否在日历上方显示all-day(全天)
                minTime: '8:00:00',//	设置显示的时间从几点开始
                maxTime: '23:00:00',//	设置显示的时间从几天结束
                slotEventOverlap: false,//	设置视图中的事件显示是否可以重叠覆盖
                slotLabelFormat: "H(:mm)a",//日期视图左边那一列显示的每一格日期时间格式
                timeFormat: 'H:mm',//事件按24小时制计算
                monthNames: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
                monthNamesShort: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
                dayNames: ["周日", "周一", "周二", "周三", "周四", "周五", "周六"],
                dayNamesShort: ["周日", "周一", "周二", "周三", "周四", "周五", "周六"],
                buttonText: {
                    today: '今天',
                    month: '月',
                    week: '周',
                    day: '日',
                    prev: '前一天',
                    next: '后一天'
                },
                aspectRatio: 1.976,
                // height:800,
                defaultDate: '2019-01-16',
                lang: 'zh-cn',
                navLinks: false, // can click day/week names to navigate views
                selectable: true,
                selectHelper: true,
                select: function (start, end) {
                    var eventData;
                    eventData = {
                        start: start,
                        end: end,
                        block: true
                    };
                    if (eventData) {
                        $('#calendar').fullCalendar('unselectable');
                        // alert(start+"#"+end);
                    }
                },
                // defaultEventMinutes:60,
                editable: false,
                eventLimit: true, // allow "more" link when too many events
                slotEventOverlap: false,
                selectOverlap: function (event) {
                    return !event.block;
                }
            });
        });
    </script>
@endsection