document.forms[0].addEventListener("submit", function(e){
    if((parseFloat($("#iSalario").val())) <= 0 || $("#iSalario").val() === "") {
       window.alert("Informe valor maior que zero(0)");
       $("#iSalario").focus();
       e.preventDefault();
    }
});
