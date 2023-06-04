// var rangeSlider = function(){
//   var slider = $('.range-slider'),
//       range = $('.range-slider__range'),
//       value = $('.range_slide_value');

//   slider.each(function(){

//     range.on('input', function(){
//       $(this).next(value).val(this.value);
//       $(this).parents(".range-slider").children(".value_max_left").html((this.value) + " դրամ․");
//     });
//   });
// };
// rangeSlider();


// document.getElementById("myinput").oninput = function() {
//   var valueone = (this.value-this.min)/(this.max-this.min)*100
//   this.style.background = 'linear-gradient(to right, #f15c22 0%, #f15c22 ' + valueone + '%, #F2F9FF ' + valueone + '%, #F2F9FF 100%)'
// };

var rangeSlider=function(){var e=$(".range-slider"),n=$(".range-slider__range"),i=$(".range_slide_value");e.each(function(){n.on("input",function(){$(this).next(i).val(this.value),$(this).parents(".range-slider").children(".value_max_left").html(this.value+" դրամ․")})})};rangeSlider(),document.getElementById("myinput").oninput=function(){var e=(this.value-this.min)/(this.max-this.min)*100;this.style.background="linear-gradient(to right, #f15c22 0%, #f15c22 "+e+"%, #F2F9FF "+e+"%, #F2F9FF 100%)"};