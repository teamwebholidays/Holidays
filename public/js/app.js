jQuery(function ($)
{
  $.datepicker.regional["vi-VN"] =
	{
		closeText: "Đóng",
		prevText: "Trước",
		nextText: "Sau",
		currentText: "Hôm nay",
		monthNames: ["Tháng một", "Tháng hai", "Tháng ba", "Tháng tư", "Tháng năm", "Tháng sáu", "Tháng bảy", "Tháng tám", "Tháng chín", "Tháng mười", "Tháng mười một", "Tháng mười hai"],
		monthNamesShort: ["Một", "Hai", "Ba", "Bốn", "Năm", "Sáu", "Bảy", "Tám", "Chín", "Mười", "Mười một", "Mười hai"],
		dayNames: ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"],
		dayNamesShort: ["CN", "Hai", "Ba", "Tư", "Năm", "Sáu", "Bảy"],
		dayNamesMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
		weekHeader: "Tuần",
		dateFormat: "dd-mm-yy",
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ""
	};

	$.datepicker.setDefaults($.datepicker.regional["vi-VN"]);
});

$( function() {
			$( "#datepicker" ).datepicker();
		  } );

function checkDate(strDate) {
    var comp = strDate.split('-')
    var d = parseInt(comp[0], 10)
    //alert(d)
    var m = parseInt(comp[1], 10)
    //alert(m)
    var y = parseInt(comp[2], 10)
    //alert(y)
    var date = new Date(y,m-1,d);
    if (date.getFullYear() == y && date.getMonth() + 1 == m && date.getDate() == d) {
      return true
    }
    return false
}
function swapDate(strDate) {
    var comp = strDate.split('-')
    var d = parseInt(comp[0], 10)
    var m = parseInt(comp[1], 10)
    var y = parseInt(comp[2], 10)
    
    var kq = m.toString() + "-" + d.toString() + "-" + y.toString()
    return kq
}
function handler(e)
{
    var day = e.target.value;
    var ngdl = document.getElementById('datepicker');
    var gdl = document.getElementById('gdl');
    
    
    //alert(day);
    
    var daySwap = swapDate(day)
    //alert("Ngay sau khi swap " + daySwap)
    if(checkDate(day) == true)
        {
            var d = new Date(daySwap);
            var w = d.getDay();
            //alert('Thu: ' + w);
            if(w == 0)
            {
                gdl.innerHTML = "<option value='07:30'>&nbsp; 07:30</option>" + 
                    "<option value='08:00'>&nbsp; 08:00</option>" +
                    "<option value='08:30'>&nbsp; 08:30</option>" +
                    "<option value='09:00'>&nbsp; 09:00</option>" +
                    "<option value='09:30'>&nbsp; 09:30</option>" +
                    "<option value='10:00'>&nbsp; 10:00</option>" +
                    "<option value='10:30'>&nbsp; 10:30</option>" +
                    "<option value='11:00'>&nbsp; 11:00</option>" +
                    "<option value='11:30'>&nbsp; 11:30</option>";
            }
            else
            {
                gdl.innerHTML = "<option value='16:00'>&nbsp; 16:00</option>" +
                    "<option value='16:30'>&nbsp; 16:30</option>" +
                    "<option value='17:00'>&nbsp; 17:00</option>" +
                    "<option value='17:30'>&nbsp; 17:30</option>" +
                    "<option value='18:00'>&nbsp; 18:00</option>" +
                    "<option value='18:30'>&nbsp; 18:30</option>" +
                    "<option value='19:00'>&nbsp; 19:00</option>" +
                    "<option value='19:30'>&nbsp; 19:30</option>" +
                    "<option value='20:00'>&nbsp; 20:00</option>";
            }
        }
    else
        {
            gdl.innerHTML = "<option>--Chọn lại ngày--</option>";
            e.target.value = "00/00/0000";
            alert('Vui lòng chọn đúng ngày giờ!');
            location.replace('#datlich');
        }
}
