# 📑 Especificação de Requisitos — Funções do Sistema

Para que o **Painel Administrativo de RH** funcione de forma dinâmica, todas as funções do arquivo `funcoes.php` devem ser implementadas seguindo as regras de negócio abaixo.

⚠️ Nenhuma função deve utilizar valores fixos (*hardcoded*) no retorno.

---

# 1️⃣ Formatação de Moeda

## Nome da Função

```php
formatarMoeda($valor)
```

## 📌 Descrição

Recebe um número decimal (`float`) e deve retorná-lo formatado como uma string no padrão monetário brasileiro (`R$`).

---

## 🧠 O que o aluno deve aplicar

- Função nativa `number_format()`
- Concatenação de strings

---

## ✅ Resultado esperado

### Entrada

```php
10500
```

### Saída

```php
R$ 10.500,00
```

---

# 2️⃣ Contagem de Colaboradores Ativos

## Nome da Função

```php
contarAtivos($listaFuncionarios)
```

## 📌 Descrição

Percorre o array completo de funcionários e conta apenas aqueles cujo campo:

```php
"ativo" => true
```

---

## 🧠 O que o aluno deve aplicar

- `foreach`
- `if`
- Operadores de comparação

---

## ✅ Resultado esperado

Com o array de 20 funcionários:

```php
17
```

---

# 3️⃣ Cálculo da Folha de Pagamento Total

## Nome da Função

```php
calcularTotalSalarios($listaFuncionarios)
```

## 📌 Descrição

Soma o salário de todos os funcionários cadastrados na lista, independentemente de estarem ativos ou inativos.

---

## 🧠 O que o aluno deve aplicar

- `foreach`
- Operador `+=`

---

## ✅ Resultado esperado

```php
163400.00
```

---

# 4️⃣ Geração de Iniciais para Avatar

## Nome da Função

```php
gerarIniciais($nomeCompleto)
```

## 📌 Descrição

Recebe o nome completo do funcionário e deve extrair:

- a primeira letra do primeiro nome
- a primeira letra do sobrenome

O resultado deve formar uma sigla com 2 letras em maiúsculo.

---

## 🧠 O que o aluno deve aplicar

- `explode()`
- `substr()`
- `strtoupper()`

---

## ⚠️ Tratamento importante

Caso o funcionário possua apenas um nome:

```php
"Carlos"
```

A função deve retornar apenas:

```php
"C"
```

Sem gerar erro.

---

## ✅ Resultados esperados

### Entrada

```php
"Carlos Silva"
```

### Saída

```php
"CS"
```

---

### Entrada

```php
"Ana Souza"
```

### Saída

```php
"AS"
```

---

# 5️⃣ Processamento de Métricas por Departamento

## Nome da Função

```php
calcularMetricasDepartamento($nomeDepartamento, $listaFuncionarios)
```

## 📌 Descrição

Essa função será utilizada especificamente pela tela:

```txt
departamentos.php
```

Ela deverá receber:

- o nome do departamento
- a lista completa de funcionários

---

## 🎯 A função deverá calcular

### ✅ Quantidade de funcionários do setor

### ✅ Custo total da folha salarial do setor

---

## 🔁 Retorno esperado

A função deve retornar um array associativo contendo:

```php
[
    "quantidade" => 0,
    "custo" => 0.0
]
```

---

## 🧠 O que o aluno deve aplicar

- `foreach`
- condicionais
- comparação de strings
- arrays associativos

---

## ✅ Resultado esperado

### Entrada

```php
calcularMetricasDepartamento("Diretoria", $funcionarios)
```

### Saída

```php
[
    "quantidade" => 2,
    "custo" => 34500.00
]
```

---

# 6️⃣ Sistema de Alerta de Salários Altos

## Nome da Função

```php
verificarCategoriaSalarial($salario)
```

## 📌 Descrição

Analisa o salário do colaborador e retorna uma classificação salarial.

Essa classificação poderá ser utilizada:

- como badge visual
- como texto
- ou como classe CSS

---

# 📋 Regras de Negócio

## ✅ Salário maior que 10000

Retornar:

```php
"Senior / Diretoria"
```

---

## ✅ Salário entre 5001 e 10000

Retornar:

```php
"Pleno"
```

---

## ✅ Salário até 5000

Retornar:

```php
"Junior"
```

---

## 🧠 O que o aluno deve aplicar

- `if`
- `elseif`
- `else`

---

# 💡 Template Inicial — funcoes.php

```php
<?php

// funcoes.php
// Caderno de exercícios - Preencha a lógica das funções abaixo:

function formatarMoeda($valor) {

    // TODO: Implementar formatação brasileira (R$)

    return $valor;
}

function contarAtivos($listaFuncionarios) {

    // TODO: Contar quantos funcionários possuem "ativo" => true

    return 0;
}

function calcularTotalSalarios($listaFuncionarios) {

    // TODO: Somar o salário de todos os funcionários

    return 0.0;
}

function gerarIniciais($nomeCompleto) {

    // TODO: Extrair as duas primeiras iniciais do nome em maiúsculo

    return "??";
}

function calcularMetricasDepartamento($nomeDepartamento, $listaFuncionarios) {

    // TODO: Filtrar e somar dados por departamento específico

    return [
        "quantidade" => 0,
        "custo" => 0.0
    ];
}

function verificarCategoriaSalarial($salario) {

    // TODO: Classificar salário

    return "";
}
```