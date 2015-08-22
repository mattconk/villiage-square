// JavaScript Document

var imagesB = new Array ('./images/full_size/apt08.jpg', './images/full_size/apt09.jpg', './images/full_size/apt10.jpg', './images/full_size/apt11.jpg', './images/full_size/apt12.jpg', './images/full_size/apt13.jpg', './images/full_size/apt14.jpg', './images/full_size/apt07.jpg');
var indexB = 0;
 
function rotateImageB()
{
  $('#myImageB').fadeOut(1500, function()
  {
    $(this).attr('src', imagesB[indexB]);
 
    $(this).fadeIn(1500, function()
    {
      if (indexB == imagesB.length-1)
      {
        indexB = 0;
      }
      else
      {
        indexB++;
      }
    });
  });
}
 
$(document).ready(function()
{
  setInterval (rotateImageB, 11000);
});