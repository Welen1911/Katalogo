# Como vai funcionar ?

## Padrão dos artefatos de requisitos
O padrão a ser utilizado será as estórias de usuário. Segue o exemplo [clicando_aqui](https://github.com/Welen1911/Katalogo/blob/main/Documenta%C3%A7%C3%A3o/Requisitos/Funcionais/RF-Exemplo.md).

## Padrão de nomeclatura dos artefatos
- Artefatos de requisitos: Em maiusculo, contendo as siglas de Requisito Funcional ou Requisito Não Funcional, contendo traço, enumerado em ordem sequencial, no formato .md. Exemplo: [RF-1](https://github.com/Welen1911/Katalogo/blob/main/Documenta%C3%A7%C3%A3o/Requisitos/Funcionais/RF-1.md), [RNF-1](https://github.com/Welen1911/Katalogo/blob/main/Documenta%C3%A7%C3%A3o/Requisitos/NFuncionais/RNF-1.md);
- Outros artefatos: Primeira letra em maiusculo, contendo um titulo descritivo, contendo '_' no lugar de espaços, preferêncialmente em formato .md;

## Padrão de diretórios dos artefatos
- Artefatos de requisitos ficam em [/Requisitos/Funcionais](https://github.com/Welen1911/Katalogo/tree/main/Documenta%C3%A7%C3%A3o/Requisitos/Funcionais) (quando funcionais) e em [/Requisitos/NFuncionais](https://github.com/Welen1911/Katalogo/tree/main/Documenta%C3%A7%C3%A3o/Requisitos/NFuncionais) quando não funcionais;
- Artefatos de diagramas ficam em [/Diagramas](https://github.com/Welen1911/Katalogo/tree/main/Documenta%C3%A7%C3%A3o/Diagramas);
- Artefatos de código ficam em [../Sistema](https://github.com/Welen1911/Katalogo/tree/main/Sistema);

## Pontos do processo
[Clique_aqui](https://github.com/Welen1911/Katalogo/blob/main/Documenta%C3%A7%C3%A3o/Processo.md) para ver o processo que estamos utilizando.

os pontos são:
- Na fase de concepção, quando o envolvido **Analisa** e **Especifica**;
- Na fase de desenvolvimento, se necessário, quando o envolvido **Codifica** e **Revisa**;

## Atividades

- É gerado uma demanda que referência o artefato de requisito, o desenvolvedor que recebeu aquela demanda implementará aquilo;
- Após, será enviado para o repositório o artefato de código implementado ou alterado com uma mensagem referenciando a tal demanda;

## Mecanismos

- Demanda: Issue do repositório;
- Artefato de requisito: Documento .md contendo a Estória de Usuário e os critérios de aceite;
- O Desenvolvedor recebe essa demanda atráves do quadro Kanban que está no projeto do repositório;
- Código sendo enviado: Commit com mensagem contendo '#numero_da_issue' para referência aquele versionamento ao que foi soliticado;
  
