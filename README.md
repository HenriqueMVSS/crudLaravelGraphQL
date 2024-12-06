# Laravel GraphQL CRUD de Projetos

Este projeto demonstra como criar um CRUD de projetos usando Laravel e GraphQL.

## Instalação

1. Clone o repositório:
   ```bash
   git clone <url-do-repositorio>
   cd <nome-do-repositorio>
   ```

2. Instale as dependências:
   ```bash
   composer install
   ```

3. Configure o arquivo `.env`:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure o banco de dados no arquivo `.env`.

5. Execute as migrações:
   ```bash
   php artisan migrate
   ```

6. Inicie o servidor:
   ```bash
   php artisan serve
   ```

## Testando o CRUD

1. Acesse o GraphiQL em `http://localhost:8000/graphql-playground`.

2. Use as seguintes queries e mutations para testar o CRUD:

   - **Criar um Projeto**:
     ```graphql
     mutation {
       createProject(name: "Projeto 1", description: "Descrição do Projeto 1", status: "ativo") {
         id
         name
         description
         status
       }
     }
     ```

   - **Atualizar um Projeto**:
     ```graphql
     mutation {
       updateProject(id: 1, name: "Projeto 1 Atualizado", description: "Descrição Atualizada", status: "inativo") {
         id
         name
         description
         status
       }
     }
     ```

   - **Deletar um Projeto**:
     ```graphql
     mutation {
       deleteProject(id: 1)
     }
     ```

   - **Listar Projetos**:
     ```graphql
     query {
       projects {
         id
         name
         description
         status
       }
     }
     ```

## Estrutura do Projeto


#### ProjectType.php
```
 Define o tipo GraphQL para o modelo Project.
```

#### ProjectQuery.php
```
 Define a query para listar projetos.
```

#### CreateProjectMutation.php
```
 Define a mutation para criar um projeto.
```

#### UpdateProjectMutation.php
```
Define a mutation para atualizar um projeto.
```

#### DeleteProjectMutation.php

```
 Define a mutation para deletar um projeto.
```

#### config/graphql.php
```
 Configurações do GraphQL.
```

## Licença
```
Este projeto está licenciado sob a licença MIT.
```

Agora você pode seguir o README para configurar e testar o CRUD de projetos usando Laravel GraphQL.