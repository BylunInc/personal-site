const form = document.getElementById('form')
const nom = document.getElementById('nom')
const prenom = document.getElementById('prenom')
const mail = document.getElementById('mail')
const message = document.getElementById('message')
const submit = document.getElementById('btnSubmit')
const errors = document.getElementsByClassName('error')

nom.addEventListener("focusout", (e) =>
{
    if(e.target.value==="")
    {
        errors[0].textContent="Merci d'entrer votre nom !"; 
        errors[0].style.color="red";  
        submit.disabled = true    
    }
    else
    {
      errors[0].textContent="";
      submit.disabled = false
    }
});

prenom.addEventListener("focusout", (e) => 
{
  if(e.target.value==="")
  {
      errors[1].textContent="Merci d'entrer votre prenom !"; 
      errors[1].style.color="red";
      submit.disabled = true        
  }
  else
  {
    errors[1].textContent="";
    submit.disabled = false
  }
});

mail.addEventListener("focusout", (e) =>
{
  if(e.target.value==="")
  {
      errors[2].textContent="Merci d'entrer votre adresse mail !"; 
      errors[2].style.color="red"; 
      submit.disabled = true       
  }
  else
  {
    errors[2].textContent="";
    submit.disabled = false
  }
});

message.addEventListener("focusout", (e) =>
{
  if(e.target.value==="")
  {
      errors[3].textContent="Merci d'entrer votre message !"; 
      errors[3].style.color="red";  
      submit.disabled = true      
  }
  else
  {
    errors[3].textContent="";
    submit.disabled = false
  }
});

form.addEventListener("submit", (e) =>
{
    
    if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail.value)) || mail.value == "")
    {
        e.preventDefault();
        errors[2].textContent="Email invalide";
    }
    else if(!(/^[a-zA-ZàâéèêôùûçÀÂÉÈÔÙÛÇ\s-]+$/.test(nom.value)) || nom.value == "")
    {
        e.preventDefault();
        errors[0].textContent="Nom invalide";
    }
    else if(!(/^[a-zA-ZàâéèêôùûçÀÂÉÈÔÙÛÇ\s-]+$/.test(prenom.value)) || prenom.value =="")
    {
        e.preventDefault();
        errors[1].textContent="Prénom invalide";
    }
    else if(!(/^[-0-9a-zA-ZàâéèêôùûçÀÂÉÈÔÙÛÇ\s-\'\/]+$/.test(message.value)) || message.value=="")
    {
        e.preventDefault();
        errors[3].textContent="Message invalide";
    }
    else
    {

    }
});