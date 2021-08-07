function senhaValida(field){
 var retorno;
 var numeros = /[0-9]/;
 var caracteresEspeciais = /[!|@|#|$|%|^|&|*|(|)|-|_]/;
 if(senha.length < 6){
   retorno = false;
 }
 var auxNumero = 0;
 var auxEspecial = 0;
 var auxTamanho = senha.length;
 for(var i=0; i<senha.length; i++){
   if(numeros.test(senha[i]))auxNumero++;
   else if(caracteresEspeciais.test(senha[i]))auxEspecial++;
 }
 if (auxNumero > 0){
  if (auxEspecial > 0) {
    if(auxTamanho >= 6){
      retorno = true;
      alert("Senha registrada com sucesso!");
    }
  }
 }
 else{
   retorno = false
   alert("Senha não corresponde aos requisitos!");
 }
 return retorno;
} 