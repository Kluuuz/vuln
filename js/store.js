const params = new URLSearchParams(window.location.search); /*gina kwa ang parameter ka browser or gna check*/
// pero dapat naka GET post ang form

if (params.has('search')) { //gina check niya if ang parameter naay value nga "search" kay nag GET post ta
    
   //gina check if naay "search" sa parameter or kung unsa ang id ka input text
   //in our case ang id sa input text is search so the param 
   //and we used params get instead of get ElementByID kay ang atong kwaon nga value is kung unsa ang gina reflect sa parameter/url
    const val = params.get('search');
    
    // select if diin nga div nato ipush ang reflected,, in our case sa searchtext nato ipush
    const displayDiv = document.getElementById('searchtext');

    displayDiv.innerHTML = "Results for: " + val;
    
    //I cant totally explain or breakdown pero useful ni para whenever ma refresh ang page dili mawala ang gi input nga txt
    document.getElementById('search').value = val;
}