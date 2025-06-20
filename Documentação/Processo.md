![image](https://github.com/user-attachments/assets/0936ece9-4253-4548-83cc-1b0a85da221d)

####  O DONO DO PRODUTO {ANALISA} A SOLICITAÇÃO  

1. DEFINA O **ESCOPO**, CASO AINDA NÃO TENHA SIDO DEFINIDO   
2. VERIFIQUE SE O **ESCOPO** DEFINIDO COMPREENDE O DEMANDADO
3. CASO O **ESCOPO** ESTEJA CONFLITANDO COM O DEMANDADO   
	1. CASO SEJA VIÁVEL, REFINA O **ESCOPO**  
	2. CASO NÃO, ELABORE UM **RELATÓRIO DE INVIABILIDADE**  
4. CASO CONTRÁRIO, ESTABELEÇA **O(S) ARTEFATO(S) DE REQUISITOS** PARA A DEMANDA
	1. PARA CADA **ARTEFATO DE REQUISITOS** QUE COMPREENDA A SOLICITAÇÃO, FAÇA  
		1. CRIE **TAREFA**(S) PARA INICIAR A ESPECIFICAÇÃO DO QUE FAZER COM *STATUS INDEFINIDA*
 		2. ASSOCIE A(S) **TAREFA**(S) RECÉM CRIADA COM O **ARTEFATO DE REQUISITOS**

#### O DONO DO PRODUTO [, TESTADOR,  DESENVOLVEDOR] {ESPECIFICA} O QUE REALIZAR  

1. ENQUANTO TIVER **TAREFA** COM *STATUS INDEFINIDA*, FAÇA
	1. SE NECESSÁRIO, REFINA A **TAREFA** E O **ARTEFATO DE REQUISITOS** ASSOCIADO
	2. ESTABELEÇA CRITÉRIOS DE ACEITAÇÃO  
	3. CASO A **TAREFA** E **OS CRITÉRIOS DE ACEITE**   
				ESTIVEREM SUFICIENTE PARA O DESENVOLVIMENTO, FAÇA  
			1. ALTERE O *STATUS* DA **TAREFA** PARA *PRONTA*.  
  	
#### O DONO DO PRODUTO [, TESTADOR, DESENVOLVEDOR] {PLANEJA} O ENTREGARÁ  

1. ENQUANTO TIVER **TAREFA** COM *STATUS PRONTA*, DEFINA    
	1. O IMPACTO NO NEGÓCIO E A COMPLEXIDADE  
 	2. INDIQUE A ITERAÇÃO SERÁ REALIZADA   
 	3. ALTERE O *STATUS* DA **TAREFA** PARA *PLANEJADA*.  

#### O DESENVOLVEDOR {CODIFICA} A TAREFA

1. CASO NÃO TENHA **TAREFA** ATRIBUÍDA COM *STATUS EM DESENVOLVIMENTO*   
	1. DA ITERAÇÃO CORRENTE, ESCOLHA UMA **TAREFA** COM *STATUS* DE *PLANEJADA* E DE *MAIOR PRIORIDADE*
	2. ALTERE O *STATUS* DA **TAREFA** PARA *EM DESENVOLVIMENTO*
2. ENQUANTO O *STATUS* DA **TAREFA** FOR *EM DESENVOLVIMENTO*, FAÇA.  
	1. ANALISE A **TAREFA**
        2. CASO TENHA, DETALHE DÚVIDA/DIFICULDADE NA **TAREFA**
	3. ALTERE OS ARTEFATOS DE CÓDIGO NECESSÁRIOS 
	4. ASSOCIE AS ALTERAÇÕES COM A **TAREFA** EM QUESTÃO
 	5. CASO A IMPLEMENTAÇÃO ESTEJA SATISFATÓRIA
     		1. ALTERE O *STATUS* DA **TAREFA** PARA *REALIZADA*.

#### O TESTADOR [DONO DO PRODUTO, DESENVOLVEDOR] {REVISA} O REALIZADO

1. PARA CADA **TAREFA** COM *STATUS* DE *REALIZADA* 
	1. ANALISE OS COMENTÁRIOS REGISTRADO NA **TAREFA** DURANTE O PERÍODO DE REALIZAÇÃO
 	2. CASO NECESSÁRIO, REFINA O **ARTEFATO DE REQUISITO** ASSOCIADO A **TAREFA**   
 	3. AVALIE O **PRODUTO** ENTREGUE COM OS CRITÉRIOS DE ACEITE DEFINIDOS NO **ARTEFATO DE REQUISITO** ASSOCIADO A **TAREFA**   
  	4. CASO O **CRITÉRIO DE ACEITE** ESTEJA SUFICIENTE, COMPATÍVEL COM O REALIZADO  
   		1. FECHE A **TAREFA** E ARQUIVE-O   	  
 	6. CASO NÃO, O **CRITÉRIO DE ACEITE** ESTEJA INSUFICIENTE OU O **PRODUTO** NÃO ESTEJA ATENDENDO OS **CRITÉRIOS DE ACEITE** JÁ DEFINIDOS
		1. ADICIONE OU REFINA OS **CRITÉRIOS DE ACEITE** DO **ARTEFATO DE REQUISITOS**  
  		2. ALTERE O *STATUS* DA **TAREFA** PARA *PLANEJADA* 
