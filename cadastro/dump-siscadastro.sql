    drop database if exists siscadastro;

    create database siscadastro
    default character set utf8
    default collate utf8_general_ci;

    use siscadastro;

    create table usuarios (
    id_user int not null primary key auto_increment,
    nome varchar (50) not null,
    email varchar (100) not null,
    senha varchar (32) not null
    )default charset = utf8;

    create table produtos (
    id_prod int not null primary key auto_increment,
    id_user int not null,
    nome_produto varchar (50) not null,
    descricao varchar (200) not null,
    preco varchar (6) not null
    )default charset = utf8;

    alter table produtos
	add foreign key(id_user) references usuarios(id_user);    

    insert into usuarios (nome, email, senha) values('admin', 'admin@admin.com', md5('admin'));    