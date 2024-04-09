# Pizzaria PHP

um micro sass para ajuda na logistica de uma pizzaria e suas ***relação entre funcionarios***

### Visão geral 
 este micro sass tem intuito de ajudar na parte de aministriçaõ de uma pizzaria os cargos aceitos seriam :
1. Motoboy (deliveryman)
2. Pizaiolo (pizza_maker)
3. Atendente (attendant)
4. Gerente (manager) 

cada um com sua responsibilidade no sistema 

Mais detalhes do planejamento [Clique Aqui](https://www.figma.com/file/8shsnOLbKYsNRN4HKi9kU8/PIZZARIA-PHP?type=whiteboard&node-id=2%3A488&t=1CLHq2ne1U7rJZPp-1).

### Como usar
##### Instalaçâo da dependencias 
 antes de usar sistema voce deve intalar um ambiente ***AMP (Apache, mysql , PHP)*** e tambem uma IDE de Base de dados
Recomendados:
1 [Xampp](https://www.apachefriends.org/pt_br/index.html) ou [Usb Web Server](https://usbwebserver.yura.mk.ua/)

Qual quer duvida :
1 [intalação do xampp](https://www.youtube.com/watch?v=v1FLAWzU-_s)

##### Cofiguração da DATABASE
crie um usuario dentro do php admin 
alter código de conexão com banco de dado 
    
    /database/conexion.php

    $host = 'localhost';
    $user = 'nome_do_usuario';
    $password = 'senha_do_usuario';
    $database = 'sua_base_de_dados';

não esqueça de criar base de dados no php admin sugiro que seja nome da sua pizzaria
[exemplo em video](https://www.youtube.com/watch?v=kvE4bt1X7Sc)

##### Criação das tabelas 
    

### Bases dadados
a bases de dados escolhida foi mysql por conta de sua integraçaõ nativa com php e ser um Pattern do ambiente AMP



### Tecnologias utlizadas 
![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![Bulma](https://img.shields.io/badge/bulma-00D0B1?style=for-the-badge&logo=bulma&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white)