
// 百度地图API功能
var map = new BMap.Map("map");    // 创建Map实例
map.centerAndZoom(new BMap.Point(103.8846250000, 30.8396420000), 11);  // 初始化地图,设置中心点坐标和地图级别,
map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
map.setCurrentCity("成都");          // 设置地图显示的城市 此项是必须设置的
map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
//加标记
var marker = new BMap.Marker(point);
map.addOverlay(marker);
marker.addEventListener("click",function(){
	map.openInfoWindow(infoWindow,new BMap.Point(103.8846250000,30.8396420000));
})