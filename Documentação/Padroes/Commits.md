# Padrão de commits

Este documento define como deverá ser o padrão de commits no sistema, com o objetivo de manter o repositório organizado, rastreável e alinhado com os requisitos funcionais.

## Estrutura de mensagem

Cada commit deve seguir este formato:

\<Tipo>: \<Descrição da alteração> \<Número da issue>

### Exemplos válidos

- feat: adiciona visualização da lista de clientes #1
- fix: corrige validação duplicada de CPF #2
- docs: atualiza documentação do agendamento #3
- refactor: renomeia variáveis para padronização #4
- test: cria testes unitários para visualização de usuários #5

---

## Tipos de Commit

| Tipo       | Descrição                                                                |
| ---------- | ------------------------------------------------------------------------ |
| `Feat`     | Nova funcionalidade relacionada a um requisito funcional                 |
| `Fix`      | Correção de erro que afeta o funcionamento de uma funcionalidade         |
| `Docs`     | Alterações na documentação (README, requisitos, rastreabilidade, etc.)   |
| `Refactor` | Refatoração de código sem alterar a funcionalidade                       |
| `Test`     | Criação ou modificação de testes                                         |
| `Chore`    | Tarefas técnicas sem impacto direto na aplicação (builds, configs, etc.) |

---

Seguir este padrão é **obrigatório** em todo o projeto. Commits fora do padrão devem ser reescritos antes do merge.
