<!DOCTYPE html>
<html>
<body>

<h2>Sua Frase Motivacional do Dia</h2>

<div id="fraseMotivacional">
    <?php
    // Array de frases motivacionais
    $frases = [
        "Acredite em si mesmo e em todas as suas capacidades.",
        "A persistência é o caminho do êxito.",
        "O sucesso é a soma de pequenos esforços repetidos dia após dia.",
        "Você é capaz de mais do que imagina.",
        "A única maneira de fazer um ótimo trabalho é amar o que você faz.",
        "Acredite que você pode e você já está no meio do caminho.",
        "Seja a mudança que você deseja ver no mundo.",
        "Cada novo dia é uma nova chance de mudar sua vida.",
        "A maior glória em viver não está em nunca cair, mas em nos levantar cada vez que caímos.",
        "Seu único limite é você mesmo."
    ];

    // Seleciona uma frase aleatória
    $fraseEscolhida = $frases[array_rand($frases)];

    // Exibe a frase escolhida
    echo $fraseEscolhida;
    ?>
</div>

</body>
</html>
