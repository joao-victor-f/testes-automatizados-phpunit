# Testes Automatizados PHP
Repositório de estudos sobre testes automatizados em PHP seguindo a playlist:

https://youtube.com/playlist?list=PL3j2sfzg3FPsPiaDUmDDKNvco49YMdj8f

(caso a aula tenha código, ele estará numa branch nomeada como ```aula-X```)

<br>

## Aula 1
Na primeira aula vimos uma maneira geral de como os testes automatizados funcionam, bem como as suas etapas.
<br>

**Um teste automatizado é baseado em três etapas:**
- Definir o cenário do teste
- Executar a ação a ser testada
- Verificar se o resultado é o esperado

**Além disso, um teste precisa**
- Ser rápido
- Informar o resultado com clareza
- Mostrar o mesmo resultado para todas as vezes em que for executado

<br>

## Aula 2
Na segunda aula foi apresentado o conceito de testes de unidade, isto é, testar a menor parte testável de um sistema; e as etapas que antes eram descritas como Definir o cenário, executar a ação e verificar o resultado foram substituídas, agora são descritas, no contexto dos testes de unidade, como Arrange, Act e Assert (triple A pattern).


## Aula 3
Na terceira aula nos foi apresentado o conceito de TDD (Test Driven Development, ou Desenvolvimento Guiado a Testes), que consiste basicamente em prever cenários de teste e implementá-los antes mesmo da funcionalidade ser criada.

Segue diagrama.
![image](https://user-images.githubusercontent.com/108190179/230798886-c84373a4-d8e1-4248-9cf2-15bcc67a9a4f.png)

<br>

## Aula 4
Na quarta aula vimos sobre a pirâmide de testes, cujo principal objetivo é classificar os testes com base em fatores como complexidade e velocidade.

![image](https://user-images.githubusercontent.com/108190179/230799928-dabd34b9-9ac0-40ee-ae01-49e637733d7a.png)

- Na base da pirâmide temos os testes de unidade, que são os mais rápidos, mais baratos em termos de complexidade computacional e, teoricamente, os de maior número em um sistema. Um teste unitário é responsável por testar a menor unidade de um sistema (definição é relativa, visto que o tamanho da 'unidade' depende do quão bem estruturado está o seu sistema).

- Sucedendo os testes de unidade, temos os testes de integração: responsáveis por testar funcionalidades que necessitam da comunicação entre os componentes do sistema.

- Por fim, temos os testes E2E (Ponta A Ponta), que são testes que simulam o uso final do sistema do ponto de vista de um usuário, ou seja, basicamente são testes de interface automatizados. E por serem testes feitos para simular a experiência final do usuário, obviamente são realizados em um ambiente controlado e restrito a base de dados real. E também são os testes mais caros e mais lentos.

