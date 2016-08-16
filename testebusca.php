<script type="text/javascript">
    
    window.onload = function(){
        document.getElementById("categoria").onchange = function(){
            this.parentNode.action = this.value + ".php";
        }
    }
</script>

 <form action="" name="formPesquisa" id="formPesquisa" method="post">

                <input type="text" class="campo" name="nome" id="nome" placeholder="Procure por um tipo de etiqueta">

                <select class="campo" id="categoria" name="categoria">
                    <option value="" disabled selected="">Escolha uma categoria de busca</option>
                    <option value="buscado_altura">Altura</option>
                    <option value="buscado_largura">Largura</option>
                    <option value="buscado_fabricante">Fabricante/Marca</option>
                    <option value="buscado_nome">Modelo</option>
                    <option value="buscado_tipopapel">Tipo do Papel</option>
                </select>
                <br><br>
                <input name="acoes" id="acoes"  type="submit" class="botao_pes" value="Pesquisar" titl><br><br><br>

                </form>