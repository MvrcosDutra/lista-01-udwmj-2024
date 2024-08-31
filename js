7. <!DOCTYPE html>
<html>
<body>

<h2>Meu primeiro acesso API</h2>
<h3>Quando será o carnaval 2025?</h3>
<h4>Clique aqui no botão para descobrir</h4>
<input type="button" id="botao" value="Clique" onclick="pegaFeriado()">

<div id="dataDoFeriado"></div>

<script type="text/javascript">
    function pegaFeriado() {
        fetch("https://brasilapi.com.br/api/feriados/v1/2025")
        .then((response) => response.json())
        .then((data) => {
            data.forEach(feriado => {
                if (feriado.name.toLowerCase() === "carnaval") {
                    document.getElementById("dataDoFeriado").innerHTML = "O carnaval de 2025 será em " + feriado.date;
                }
            });
        })
        .catch(error => {
            console.error('Erro ao buscar os dados:', error);
            document.getElementById("dataDoFeriado").innerHTML = "Não foi possível obter a data do carnaval.";
        });
    }
</script>

</body>
</html>
