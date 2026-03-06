function processarValidacao() {
    const valorInput = document.getElementById('cpfInput').value;
    const ehValido = validarCPF(valorInput);
 
    if (ehValido) {
    alert("O CPF " + valorInput + "é VÁLIDO!");
    } else {
    alert("O CPF + valorInput + é INVÁLIDO.");
   
    }
}
    function soma(){
        
        const valorInput = document.getElementById('cpfInput').value;
        const ValorNome = document.getElementById('nameInput').value;
        alert("Olá "+ValorNome+" seu cpf é: "+valorInput);
    }
    function validarCPF (cpf) {
        
        // Remove pontos e traços, deixando apenas números
        
        cpf = cpf.replace(/[^\d]+/g,'');
        
        
        
        // Verifica se tem 11 dígitos ou se é uma sequência repetida conhecida
        
        if (cpf.length !== 11 || !! cpf.match(/(\d)\1{10}/)) {
        
        return false;
        
        }
        
        
        const digitos = cpf.split('').map(el => +el);
    }
