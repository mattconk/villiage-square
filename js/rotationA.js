// JavaScript Document

var imagesA = new Array ('./images/full_size/apt02.jpg', './images/full_size/apt03.jpg', './images/full_size/apt04.jpg', './images/full_size/apt01.jpg');
var indexA = 0;
 
function rotateImageA()
{
  $('#myImageA').fadeOut(1500, function()
  {
    $(this).attr('src', imagesA[indexA]);
 
    $(this).fadeIn(1500, function()
    {
      if (indexA == imagesA.length-1)
      {
        indexA = 0;
      }
      else
      {
        indexA++;
      }
    });
  });
}
 
$(document).ready(function()
{
  setInterval (rotateImageA, 14000);
});