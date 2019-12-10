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