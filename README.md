**Criador Dinâmico de Objetos com PHP Reflection**

**Descrição:**

Este repositório oferece uma solução flexível e dinâmica para a criação de objetos em PHP, utilizando a poderosa API Reflection. A funcionalidade central permite a instância de objetos de uma classe específica com base em um array associativo, onde as chaves do array representam as propriedades do objeto e os valores são atribuídos dinamicamente.

### **Recursos Principais:**

1. **Criação Dinâmica:**
   - Através da API Reflection, o código proporciona a criação de objetos sem a necessidade de chamadas diretas ao construtor, permitindo maior flexibilidade na construção de instâncias de classes.

2. **Uso Intuitivo:**
   - A classe abstrata `ObjectBase` é projetada para ser de fácil utilização, exigindo apenas um array associativo de dados e o nome da classe alvo.

3. **Exemplo de Aplicação:**
   - O repositório inclui um exemplo prático que demonstra como criar um objeto dinâmico a partir de um conjunto de dados, facilitando a compreensão e a implementação em outros projetos.

### **Instruções de Uso:**

1. Clone o repositório:
   ```bash
   git clone https://github.com/francis-santos/php-api-reflection.git
   ```

2. Rode o comando abaixo:
   ```bash
   composer install
   ```

3. Inicialize o servidor:
   ```bash
   php -S localhost:8000
   ```

4. Explore o exemplo para entender como utilizar a classe `ObjectBase`.

5. Adapte o código conforme necessário para integrar essa abordagem dinâmica de criação de objetos em seus projetos.

### **Conclusão:**

A API Reflection do PHP é uma ferramenta valiosa, e este repositório visa facilitar a aplicação de técnicas de criação dinâmica de objetos. Use-o como ponto de partida para adicionar flexibilidade e adaptabilidade às suas instâncias de classes PHP. Convidamos você a explorar, contribuir e aprimorar este recurso conforme as necessidades do seu projeto.

**Licença: MIT License**

Aproveite a flexibilidade proporcionada pela [API Reflection](https://www.php.net/manual/en/book.reflection.php) e simplifique a criação de objetos dinâmicos em seus projetos PHP!