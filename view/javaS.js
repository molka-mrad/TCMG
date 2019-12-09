function valider1(){
    
    var a=document.getElementById('img').value;

    if((a.indexOf(".")<=0)||(a.length<5))
    {
        alert('Check image link');
        return false;
    }

}

function valider2(){

    var a=document.getElementById('nbParticip').value;
   
    if (a<0)
    {
        alert('Check nb participants');
        return false;
    }
    
    var a=document.getElementById('dateFin').value;
    var b=document.getElementById('dateDeb').value;

    
    if (a<b)
    {
        alert('Check dates');
        return false;
    }

}
