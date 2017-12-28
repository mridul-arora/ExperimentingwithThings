var $range = $(".js-range-slider");
var min = 0;
var max = 1000;

$range.ionRangeSlider({
    type: "double",
    grid: true,
    grid_margin: false,
    grid_num: 10,
    min: min,
    max: max,
    from: 300,
    to: 700,
    onStart: function (data) {
        addSpecialAreas(data.slider);
    }
});

function addSpecialAreas($slider) {
    var area = [100, 200];
    var $line = $slider.find(".irs-line");
    var left_percent = area[0] / (max - min) * 100;
    var right_percent = area[1] / (max - min) * 100;
    var width_percent = right_percent - left_percent;

    $line.append("<div class='area' style='left: " + left_percent + "%; width: " + width_percent + "%;'></div>")
}
