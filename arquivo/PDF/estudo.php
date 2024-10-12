<?php
//criando um arquivo pdf simples
$meu_arquivo_pdf = fopen('arquivo.pdf', 'w');
$texto_aletorio = '
A Magia das Cores

Em um mundo onde as cores dançam e se entrelaçam, cada tonalidade conta uma história única. O vermelho vibrante, como a paixão ardente, chama a atenção e evoca sentimentos intensos. O azul profundo, por outro lado, traz a serenidade do céu e a tranquilidade do mar, convidando-nos a refletir e sonhar.

As cores têm o poder de influenciar nossas emoções e estados de espírito. Uma sala pintada de amarelo pode iluminar até os dias mais sombrios, enquanto o verde suave das folhas nos conecta à natureza e à renovação. Cada cor, com sua própria personalidade, cria um ambiente e uma atmosfera que nos envolve e nos transforma.

E assim, na paleta da vida, somos artistas. Escolhemos as cores que queremos exibir, as nuances que queremos explorar. O importante é lembrar que, assim como em uma pintura, a harmonia das cores é essencial para criar uma obra-prima.
';
fwrite($meu_arquivo_pdf, $texto_aletorio);
echo 'Arquivo criado com sucesso !';


?>