//...........links open in main_ conatainer...........//
function openContainer(event, sectionName) 
{
    var i, main_container, tablinks;
    
    main_container = document.getElementsByClassName("mainContainer");
    for (i = 0; i < main_container.length; i++) 
    {
      main_container[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i <tablinks.length; i++) 
    {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(sectionName).style.display = "block";
    event.currentTarget.className += " active";
}
window.onload = function(e){ 
  document.getElementById("defaultOpen").click();
} ;

  
  
  
