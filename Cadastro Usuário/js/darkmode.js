if (localStorage.getItem('darkmode') == 'true') {
    darkmode.checked = true;
}
function ativarDarkmode() {

    if (darkmode.checked === true) {
        document.body.classList.add('bg-dark', 'text-orange', 'elementoDark');
        rodape1.classList.add("text-white");
        form_cadastro.classList.add("dark-form");
        
        

        tabela.classList.add('table-dark');

        localStorage.setItem('darkmode', true);
    } else {
        document.body.classList.remove('bg-dark', 'elementoDark');
        form_cadastro.classList.remove("dark-form");
        rodape1.classList.remove("text-white");
        localStorage.setItem('darkmode', false);

    }
}