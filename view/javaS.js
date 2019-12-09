//////////////////aziz
function controle(){
   
    var a=document.getElementById('tel').value;
    
 
    if(a.length!=8)
      {

      alert('Check Numero Telephone'); 
      return false;

      }
      if (document.getElementById('cin').value.length!=8)
     {
         alert('Check Cin');
          return false;
     }
     if(document.getElementById('age').value>100)
     {
         alert('Check Age');
         return false;
       
     }
    /* if((document.getElementById('pai').value.localeCompare(b))||(document.getElementById('pai').value!=0))
     {
        alert('1:Paiement par carte 0:Paiement au club'+document.getElementById('pai').value);
        return false;
     }*/
     
     if(document.getElementById('email').indexof("@")==0)
     {
        alert('Check Email');
        return false;
     }
     
    else
    {
        alert("Form Validated");
       return true;
      }

}

/////////////////////molka

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

/////////////amine

function validerr(){

    var a=document.getElementById('cin').value;
   
    if (a.length!=8)
    {
        alert('verifier CIN');
        return false;
    }
    var b=document.getElementById('tel').value;
   
    if (b.length!=8)
    {
        alert('verifier Telephone');
        return false;
    }
    var c=document.getElementById('age').value;
   
    if ((c>80)||(c<10))
    {
        alert('verifier Age');
        return false;
    }

    var d=document.getElementById('img').value;

    if((d.indexOf(".")<=0)||(a.length<5))
    {
        alert('verifier lien image');
        return false;
    }
}
