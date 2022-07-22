create database frequencia;

use frequencia;

create table aluno( 
id_aluno int not null primary key auto_increment,
Nome_aluno varchar (50) not null
);
alter table aluno change Nome_aluno nome_aluno varchar(50)not null;
create table curso( 
id_curso int not null primary key auto_increment,
Nome_curso varchar (50) not null,
Turno_curso varchar (20) not null,
Unidade_curso varchar (20) not null
);
alter table curso change Nome_curso nome_curso varchar(50)not null;
alter table curso change Turno_curso turno_curso varchar(20)not null;
alter table curso change Unidade_curso unidade_curso varchar(20)not null;
create table professor( 
id_professor int not null primary key auto_increment,
Nome_professor varchar (50) not null
);
alter table professor change Nome_professor nome_professor varchar(50)not null;

create table aula( 
id_aula int not null primary key auto_increment,
Data_aula date not null,
Inicio_aula time not null,
termino_aula time not null
);
alter table aula change Data_aula data_aula  date not null;
alter table aula change Inicio_aula inicio_aula time not null;
create table turma( 
id_turma int not null primary key auto_increment,
curso_turma int not null,
foreign key (curso_turma) references curso(id_curso)
);

show tables;
insert into aluno (Nome_aluno) values ('Claudio Dias de Souza');
insert into aluno values (default, 'João Paulo de Medeiros');
select * from aluno;
delete from aluno where id_aluno = 11;
insert into professor (nome_professor) values('');
select  * from professor;
alter table professor
add column senha varchar (10) not null;

alter table aluno
column senha_aluno varchar(32);