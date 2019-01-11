<footer class="page-footer"><!-- MUDAR A COR DE FUNDO DO FOOTER NO CSS -->
    <div class="glass">
        <div class="container-fluid">
            <div class="row">
            </div>
            <div class="row align-items-center">
                <div class="container col-10 col-lg-8 col-xl-6">
                    <h3 class="titulo-footer">Se cadastre e fique por dentro das novidades!</h3>
                    <div class="input-group mb-3">
                        <input type="text" class="capture-email-field form-control" placeholder="E-mail" aria-label="E-mail do usuario" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="capture-email-button btn btn-secondary" type="submit">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <hr class="clearfix w-100">
            </div>
            <div class="container text-left">
                <div class="row">
                    <div class="col-md-3 mx-auto">
                        <h5 class="text-uppercase titulo-footer">Sobre Nós</h5>
                        <p class="text-footer">Kadima</p>
                        <p class="text-footer">Rua 1</p>
                        <p class="text-footer">Nosso número +55 (48) 99999-9999</p>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-3 mx-auto">
                        <h5 class="text-uppercase titulo-footer">Últimas Atualizações</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!" class="text-footer">Primeiro Post</a>
                            </li>
                            <li>
                                <a href="#!" class="text-footer">Segundo Post</a>
                            </li>
                            <li>
                                <a href="#!" class="text-footer">Terceiro Post</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-3 mx-auto">
                        <h5 class="text-uppercase titulo-footer">Você está seguindo este blog</h5>
                        <p class="text-footer">Conheça nosso trabalho, clique <a href="#!" class="text-footer">aqui</a>.</p>
                    </div>
                    <hr class="clearfix w-100 d-md-none">

                    <div class="col-md-3 mx-auto">
                        <h5 class="text-uppercase titulo-footer">Social</h5>
                        <ul>
                            <li>
                                <img src="img/imagem-teste-retangulo.jpg" width="12%" height="5%"/>
                                <a href="#!" class="text-footer">Facebook</a>
                            </li>
                            <li>
                                <img src="img/imagem-teste-retangulo.jpg" width="12%" height="5%"/>
                                <a href="#!" class="text-footer">Instagram</a>
                            </li>
                            <li>
                                <img src="img/imagem-teste-retangulo.jpg" width="12%" height="5%"/>
                                <a href="#!" class="text-footer">Twitter</a>
                            </li>
                            <li>
                                <img src="img/imagem-teste-retangulo.jpg" width="12%" height="5%"/>
                                <a href="#!" class="text-footer">Linkedin</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <hr class="clearfix w-100">
            </div>
            <div class="footer-copyright text-center titulo-footer"><p style="margin: 0">© 2018 Kadima. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER's END -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    window.onscroll = function() {myFunction()};
    var social = document.getElementById("social-bar");
    var sticky = social.offsetTop/2+(social.clientHeight/2);
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            social.classList.remove("social-absolute")
            social.classList.add("social-fixed")
        } else {
            social.classList.remove("social-fixed");
            social.classList.add("social-absolute")

        }
    }


    //boolean catAtivado = false; USAR NA TROCA DE CATEGORIAS - VARIÁVEL GLOBAL
    function listaCat(){// LISTA CATEGORIAS
        var el = document.getElementsByName("category"); // Guarda todos os elementos no vetor 'el'.
        console.log(el); // Mostra no DevTools o vetor.

        for (var i = 0; i < el.length; i++){ // Percorre os elementos do vetor pelo seu tamanho.
            console.log(el[i].innerText == "Categoria 1"); // Mostra no DevTools os elementos que não sairão da tela. ATUALIZAR 'Categoria 1' COM VARIÁVEL PHP
            if (el[i].innerText != "Categoria 1"){ // Procura pelo nome os elementos que irão desaparecer. ATUALIZAR 'Categoria 1' COM VARIÁVEL PHP
                console.log(el[i].closest("div[name]")); // Mostra no DevTools a div 'pai de todas' que irá deixar de aparecer.
                el[i].closest("div[name]").style.display="none"; // Faz as divs dos elementos filtrados desaparecerem.
            }
        }


        //var div = document.createElement("DIV");
        //var row = document.createElement("ROW");
        //var btn = document.createElement("BUTTON");
        //console.log(div);
        //console.log(row);
        //console.log(btn);
        //document.body.appendChild(div);
        //div.appendChild(row);
        //row.appendChild(btn);

    }




</script>
</body>
</html>