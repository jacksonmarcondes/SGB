##SGB – Sistema de Gerenciamento de Bibliotecas

<p>
Este projeto tem como objetivo, disponibilizar para usuarios, a reserva de livros em uma biblioteca.

Ele está dividido em dois grandes módulos, são eles:
- Administrativo
- Reservas

No painel de reservas, o usuário comum faz seu login, através de um e-mail e senha previamente cadastrados.
Assim, o usuário consegue visualizar os livros que estão disponíveis para reserva de locação.

No painel administrativo, o usuário administrador faz seu login e consegue gerenciar todo o sitema, desde cadastro de
 novos livros, cadastro de usuários, gestão de reservas. Também consegue alterar os cadastros.
</p>

<p>
**Informações sobre ambiente do projeto:**<br>
- Framework: Laravel 8.x<br>
- PHP 7.4.12 (cli) (built: Oct 29 2020 21:14:02) ( NTS )<br>
- Banco de dados: mysql  Ver 8.0.22 for Linux on x86_64 (Source distribution)<br>
- Sistema Operacional: Linux version 4.19.0-12-cloud-amd64 (debian-kernel@lists.debian.org) (gcc version 8.3.0 
- (Debian 8.3.0-6)) #1 SMP Debian 4.19.152-1 (2020-10-18)<br>
- Memória: 1gb<br>
- cpu: 2vCpu

**Não essencial/ Não é requisito:**<br>
Para garantir que o projeto esteja sempre disponível, utilizamos serviços de computação em núvem.
<br>
Utilizamos como plataforma base o Google Cloud Platform e uma imagem de máquina que possuí todos os requisitos pré-instalados.

**Acesso ao projeto:**

http://35.231.93.164/
</p>

<p>
Para o portal de demonstração, cadastramos alguns usuários base, para que seja possível testar todas as funcionalidades
 do painel.
 
 Usuário administrador:<br>
 e-mail: administrador@sgb.com
 senha: 123
 
 Usuário comum:<br>
 e-mail: usuario@sgb.com
 senha: usuario
</p>


Para a instalação do projeto, é necessário ter um ambiente compativel como o descrito acima.

**Documentações utilizadas no desenvolvimento:**

https://laravel.com/docs/8.x <br>
https://materializecss.com/ <br>
https://docs.bitnami.com/google/infrastructure/lamp/ <br>
https://docs.bitnami.com/ibm/infrastructure/lamp/get-started/use-laravel/ <br>

