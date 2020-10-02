CREATE TABLE atendimento_solimed(
    id_atendimento int auto_increment primary key,
    status varchar(40),
    valorTotal float,
    forma_pagamento varchar(50),
    pos_venda int,
    id_medico_indicou int,
    data_atendimento timestamp,
);

CREATE TABLE agendamento_exames_solimed(
    id_agendamento_exames int auto_increment primary key,
    id_associado int not null,
    id_dependente int, 
    data_exame date not null,
    hora_exame time not null,
    local_exame varchar(150),
    status varchar(40),
    nota_atendimento int,
    nota_exame int,
    nota_observacao varchar(300),
    solicitou_cancelamento int,
    motivo_cancelamento varchar(50),
    reservou_agenda int,
    forma_pagamento varchar(50),
    valor float not null,
    id_atendimento int not null,
    data_registro timestamp,
    foreign key(id_atendimento) REFERENCES atendimento_solimed(id_atendimento)
);

CREATE TABLE guia_solimed(
    id_guia int auto_increment primary key,
    endereco varchar(500),
    status_guia int,
    data_registro timestamp,
);

CREATE TABLE agendamento_exames_solimed_guia(
    id int auto_increment primary key,
    id_agendamento_exames int,
    id_guia int
);

CREATE TABLE agendamento_exames_solimed_exames(
    id int auto_increment primary key,
    id_agendamento_exames int,
    id_exame int
);

/*
CREATE TABLE agendamento_exames_solimed(
    id_agendamento_exames int auto_increment primary key,
    id_associado int not null,
    id_dependente int,
    id_medico int,
    data_exame date not null,
    hora_exame time not null,
    local_exame varchar(150),
    status varchar(40),
    nota_atendimento int,
    nota_exame int,
    nota_observacao varchar(300),
    solicitou_cancelamento  int not null,
    motivo_cancelamento varchar(50),
    reservou_agenda int,
    pos_venda int not null,
    forma_pagamento varchar(50),
    valor float not null
);

CREATE TABLE exames_agendamento_solimed(
    id_agendamento_exames int,
    id_exame int,
    foreign key(id_agendamento_exames) REFERENCES agendamento_exames_solimed(id_agendamento_exames),
    foreign key(id_exame) REFERENCES exames_solimed(id)
);

CREATE TABLE guia_solimed(
    id_guia int auto_increment primary key,
    endereco varchar(500),
    status_guia int not null default 0
);

CREATE TABLE exames_agendamento_guia(
    id_agendamento_exames int,
    id_guia int,
    foreign key(id_agendamento_exames) REFERENCES agendamento_exames_solimed(id_agendamento_exames),
    foreign key(id_guia) REFERENCES guia_solimed(id_guia)
);

*/