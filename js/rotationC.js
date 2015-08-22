// JavaScript Document

var imagesC = new Array ('./images/full_size/pool02.jpg', './images/full_size/volleyball1.jpg', './images/full_size/pool01.jpg', './images/full_size/outside01.jpg', './images/full_size/outside02.jpg', './images/full_size/outside03.jpg', './images/full_size/outside04.jpg', './images/full_size/outside05.jpg', './images/full_size/laundry.jpg');
var indexC = 0;
 
function rotateImageC()
{
  $('#myImageC').fadeOut(1500, function()
  {
    $(this).attr('src', imagesC[indexC]);
 
    $(this).fadeIn(1500, function()
    {
      if (indexC == imagesC.length-1)
      {
        indexC = 0;
      }
      else
      {
        indexC++;
      }
    });
  });
}
 
$(document).ready(function()
{
  setInterval (rotateImageC, 7000);
});