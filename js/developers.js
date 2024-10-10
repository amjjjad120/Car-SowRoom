var social=document.getElementsByClassName('social');
var namesoci=document.getElementsByClassName('namesoci');

social[0].addEventListener('mouseover', function(){
    namesoci[0].style.transition="2s";
    namesoci[0].style.display="flex";



});
social[0].addEventListener('mouseleave', function(){
    namesoci[0].style.display="none";


});

social[1].addEventListener('mouseover', function(){
    namesoci[1].style.display="flex";

});
social[1].addEventListener('mouseleave', function(){
    namesoci[1].style.display="none";


});

social[2].addEventListener('mouseover', function(){
    namesoci[2].style.display="flex";


});
social[2].addEventListener('mouseleave', function(){
    // namesoci[2].style.top="130px";
    namesoci[2].style.display="none";


});

social[3].addEventListener('mouseover', function(){
    namesoci[3].style.display="flex";


});
social[3].addEventListener('mouseleave', function(){
    namesoci[3].style.display="none";


});