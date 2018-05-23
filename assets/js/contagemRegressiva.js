 //<body onload=startCountdown()>       É NESSESSÁRIO CHAMAR ESSA FUNÇÃO NO BORY
                  
var g_iCount = new Number();
                   
// de 30 a 0 //
var g_iCount = 15;                  

function startCountdown(){
	if((g_iCount - 1) >= 0){
    	g_iCount = g_iCount - 1;
    	numberCountdown.innerText = '00:00.0' + g_iCount;
    	setTimeout('startCountdown()',1000);
    }
}

//<font face=verdana color=#1e90ff size=2><B>					É NECESSARIO COLOCAR ESSA TAG DESSE JEITO ONDE SE QUER A CONTAGEM
//<div id=numberCountdown align=center></div></font>            É NECESSARIO COLOCAR ESSA TAG ABAIXO DA TAG FONT INDICADA ACIMA
