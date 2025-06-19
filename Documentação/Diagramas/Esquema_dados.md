# Esquema de Dados

## Tabela users
Padrão do projeto Laravel;

## Tabela lojas

| Atributo      | tipo | relacionamento        |
|-----------|-------|---------------|
| user_id      | foreignId - required   | tabela: users; 1 - 1     |
| nome      | string - required   |      |
| logo     | string - nullable    | |
| contato    | string - required    | |

## Tabela produtos

| Atributo      | tipo | relacionamento        |
|-----------|-------|---------------|
| loja_id      | foreignId - required   | tabela: lojas; 1: loja - n: produtos     |
| nome      | string - required   |      |
| imagem     | string - nullable    | |
| descricao    | text - nullable    | |
| preco    | decimal - required    | |

