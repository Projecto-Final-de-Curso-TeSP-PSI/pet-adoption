

INSERT INTO districts 
VALUES (1,'Aveiro'),
(2,'Beja'),(3,'Braga'),
(4,'Bragança'),
(5,'Castelo Branco'),
(6,'Coimbra'),
(7,'Évora'),
(8,'Faro'),
(9,'Guarda'),
(10,'Leiria'),
(11,'Lisboa'),
(12,'Portalegre'),
(13,'Porto'),
(14,'Santarém'),
(15,'Setúbal'),
(16,'Viana do Castelo'),
(17,'Vila Real'),
(18,'Viseu'),
(19,'Ilha da Madeira'),
(20,'Ilha de Porto Santo'),
(21,'Ilha de Santa Maria'),
(22,'Ilha de São Miguel'),
(23,'Ilha Terceira'),
(24,'Ilha da Graciosa'),
(25,'Ilha de São Jorge'),
(26,'Ilha do Pico'),
(27,'Ilha do Faial'),(
28,'Ilha das Flores'),
(29,'Ilha do Corvo');

INSERT INTO address VALUES 
(1,'Rua da Escola','7','2.º drt',2400,102,'Leiria',10),
(2,'Av. da Liberdade','10A','4.º esq',1059,765,'Lisboa',11),
(3,'Praceta D. João Pereira','56',NULL,3025,22,'Coimbra',6),
(4,'Bairro 1.º de Maio','25',NULL,2140,57,'Chamusca',14),
(5,'Estrada de Fátima','107',NULL,2395,1,'Minde',14),
(6,'Estrada do Caldeirão','8','1.º frt',9980,33,'Corvo',29);

INSERT INTO users 
VALUES 
(1,'Simão','Pedro','simao.s.pedro@gmail.com','242218040','912345678','simaopedro','ozFqrgfw1RzFo-RJJUXCx9CI87lv5vDN','$2y$13$LOP/MFRXV/l6hF9ohY6CiuO.8yQCi//QGXq7rDrtBvFlCjJvW94tu',NULL,10,1605220994,1605220994,'t5AYTA0WgGx92sREwUOoJBqE4la2P2yt_1605220994',1),
(2,'Cátia','Bessa','katyb@gm.pt','242319123','918765432','katy','EgIapFuHmRab0fz93bDuEm6kaCC2FkAM','$2y$13$04H/3AFUiEnJXrYfjkH0puVqPZxW5.Sk55l61yWMYr5ODR2KmMImK',NULL,10,1605224315,1605224315,'LvelSObJ7seAS_lCQEgtODzhg0dBJJRr_1605224315',2),
(3,'Ricardo','Lopes','ricardolopes@gm.pt','242517987','963524871','ricardolopes','yI1GZZmscmpCNaxLLaKe6G7jM3CEL5gx','$2y$13$zDobv.B33HURSOYnxtNc/uo7ULABTEpbXOacwL2P9V0Y203.OK7YO',NULL,10,1605291218,1605291218,'3SYTOgQE_8A91wqGl7KGRS9MQ0HOh8ZP_1605291218',3),
(4,'Cláudia','Valente','claudiavalente@gm.pt','252456839','933564712','claudiavalente','GWVzgG4hfNVyIeAn9M5n5iDMwjfG9dit','$2y$13$RDKr6nIYt0Gcl.7AH2Ze/exxEy06nPiZrYWbfGNAFjQZ1V3TIdh3e',NULL,10,1605291387,1605291387,'TymcG-CiB4CS_811nBYJqrGdoDRiOEZv_1605291387',4),
(5,'Martim','Gaspar','martimgaspar@gm.pt','252678934','928736451','martimgaspar','mJMoGHev31YDP8M3J3yXfJRjFDdhhQyN','$2y$13$KwkmKckbOM9XaTP7WM8CDeWCL1oOe0rLhvtFTsQxPa72YzYymVu6y',NULL,10,1605295368,1605295368,'7YIOqMoSC_ArzHFlQy97Xyl90zdxj2Gp_1605295368',5),
(6,'José','Miguel','zemigas@gm.pt','196783526','915463728','zemigas','w71yoafkeRfTeWZgDZGhY1mgxH3fdQEU','$2y$13$xbiUJM5ILcrXePCzJ2zvXO/zgWF2MdmBtBPOvHBXeINFLfdHqbK9C',NULL,10,1605295493,1605295493,'ipBbZ01J0lr8wtoQdxJnYukQr8ckkg8q_1605295493',6);

insert into fur_colors
	values
		(null, 'Branco'),
		(null, 'Preto'),
		(null, 'Cinzento'),
		(null, 'Laranja'),
		(null, 'Castanho'),
		(null, 'Amarelo/dourado'),
		(null, 'Outra');
    
insert into fur_lengths
	values
		(null, 'Longo'),
		(null, 'Medio'),
		(null, 'Curto');
        
insert into sizes
	values
		(null, 'Pequeno'),
		(null, 'Medio'),
		(null, 'Grande');
        
insert into nature
	values
		(1, null, 'Gato'),
		(2, null, 'Cão'),
		(null, 1,'Abissínio'),
		(null, 1,'American Wirehair'),
		(null, 1,'Asian'),
		(null, 1,'Australian Mist'),
		(null, 1,'Bobtail Americano'),
		(null, 1,'Bombay'),
		(null, 1,'Burmês'),
		(null, 1,'Burmilla'),
		(null, 1,'Cornish Rex'),
		(null, 1,'Curl Americano'),
		(null, 1,'Devon Rex'),
		(null, 1,'Sphynx'),
		(null, 1,'Egyptian Mau'),
		(null, 1,'German Rex'),
		(null, 1,'Havana'),
		(null, 1,'Khao Manee'),
		(null, 1,'Kurlian Bobtail'),
		(null, 1,'Manx'),
		(null, 1,'Munchkin'),
		(null, 1,'Ocicat'),
		(null, 1,'Oriental'),
		(null, 1,'Peterbald'),
		(null, 1,'Pixiebob'),
		(null, 1,'Russian'),
		(null, 1,'Seychellois'),
		(null, 1,'Siamês'),
		(null, 1,'Singapura'),
		(null, 1,'Snowshoe'),
		(null, 1,'Sokoke'),
		(null, 1,'Angorá Turco'),
		(null, 1,'Bobtail Japonês'),
		(null, 1,'Chartreux'),
		(null, 1,'Gato Bosques da Noruega'),
		(null, 1,'LaPerm'),
		(null, 1,'Maine Coon'),
		(null, 1,'RagaMuffin'),
		(null, 1,'Ragdoll'),
		(null, 1,'Sagrado da Birmânia'),
		(null, 1,'Scottish Straigth'),
		(null, 1,'Selkirk Rex'),
		(null, 1,'Somali'),
		(null, 1,'Van Turco'),
		(null, 1,'Balinês'),
		(null, 1,'Siberiano'),
		(null, 1,'Outra (Gato)'),
        
		(null, 2,'Lulu da Pomerânia / Spitz Alemão'),
		(null, 2,'Airedale Terrier'),
		(null, 2,'American Pit Bull Terrier'),
		(null, 2,'Akita'),
		(null, 2,'American Staffordshire Terrier'),
		(null, 2,'Barbado da Terceira'),
		(null, 2,'Basset Hound'),
		(null, 2,'Beagle'),
		(null, 2,'Bichon Maltês'),
		(null, 2,'Boerboel'),
		(null, 2,'Border Collie'),
		(null, 2,'Boston Terrier'),
		(null, 2,'Boxer'),
		(null, 2,'Braco Alemão '),
		(null, 2,'Bull Terrier'),
		(null, 2,'Bulldog Americano'),
		(null, 2,'Bulldog Francês'),
		(null, 2,'Bulldog Inglês '),
		(null, 2,'BullMastiff'),
		(null, 2,'Cane Corso'),
		(null, 2,'Caniche'),
		(null, 2,'Cão de Castro Laboreiro'),
		(null, 2,'Cão da Serra da Estrela'),
		(null, 2,'Cão da Serra de Aires'),
		(null, 2,'Cão de Água'),
		(null, 2,'Cão de Fila de São Miguel'),
		(null, 2,'Cão de Gado Transmontano '),
		(null, 2,'Chihuahua'),
		(null, 2,'Cão de montanha de Berna'),
		(null, 2,'Cão do Barrocal Algarvio'),
		(null, 2,'Cavalier King Charles Spaniel'),
		(null, 2,'Chow Chow'),
		(null, 2,'CockerSpaniel Inglês'),
		(null, 2,'Dougue Argentino'),
		(null, 2,'Dachshund'),
		(null, 2,'Dalmata'),
		(null, 2,'Dobermann'),
		(null, 2,'Dougue de Bordéus '),
		(null, 2,'English Springer Spaniel'),
		(null, 2,'Galgo'),
		(null, 2,'Golden Retriever'),
		(null, 2,'Grand Danois'),
		(null, 2,'Labrador'),
		(null, 2,'Greyhound'),
		(null, 2,'Husky'),
		(null, 2,'Lhasa Apso'),
		(null, 2,'Pastor Alemão '),
		(null, 2,'Malamute do Alasca'),
		(null, 2,'Pequinês'),
		(null, 2,'Pinscher'),
		(null, 2,'Rottweiler'),
		(null, 2,'Pug'),
		(null, 2,'Rough Collie'),
		(null, 2,'São Bernardo'),
		(null, 2,'Shar Pei'),
		(null, 2,'Schnauzer'),
		(null, 2,'Scottish Terrier'),
		(null, 2,'Shih Tzu'),
		(null, 2,'Weimaraner'),
		(null, 2,'Terra Nova'),
		(null, 2,'Whippet'),
		(null, 2,'Outra (Cão)'),
		(null, 2,'Yorkshire Terrier');


INSERT INTO animals 
VALUES 
(1,'647837364763743','2020-05-02 00:00:00','Cao muito manso mas tem medo de outros caes',																				68,3,7,1,'M','Lulu'),
(2,'647837334763743','2020-05-07 00:00:00','Gato cheio de vida, muito irrequieto, ideal para quem tenha muito espaço em casa.',											47,2,6,1,'M','Becas'),
(3,'647837364865743','2020-05-12 00:00:00','O Jolly é um gato afável, sempre pronto a dormir uma sonena á janela',														47,3,2,1,'M','Jolly'),
(4,'647837374333453','2020-05-24 00:00:00','Gato de muito alimento, está cada vez mais fofo de gordo.',																	3,2,7,1,'M','Limao'),
(5,'375963489569865','2020-06-04 00:00:00','O Jiancarlo é um gato assustado, necessita de ter o seu espaço',															13,1,6,1,'M','Jiancarlo'),
(6,'659637264928462','2020-06-06 00:00:00','O Pucci apesar de nao ter cauda, anda sempre em correrias',																	20,2,3,1,'M','Pucci'),
(7,'623946928358962','2020-06-09 00:00:00','A Gispy só quer dormir todo o dia e toda a noite.',																			46,1,4,1,'M','Fausto'),
(8,'670476094730704','2020-06-24 00:00:00','Cao muito manso mas tem medo de outros caes',																				55,3,5,1,'M','Miguel'),
(9,'986795367634578','2020-07-02 00:00:00','O Afonso é muito enérgico, não para quieto',																				68,2,1,1,'M','Afonso'),
(10,'979793874589795','2020-07-08 00:00:00','O Henriques apesar do seu tamanho imponente apenas quer dormir ao sol',													60,3,5,1,'M','Henriques'),
(11,'985787309457308','2020-07-09 00:00:00','O Freddy foi resgatado de uma casa em ruinas, abandonado, mas agora está pronto para outra familia que cuide bem dele',	75,3,5,1,'M','Freddy'),
(12,'985987687349867','2020-07-14 00:00:00','A Mason já foi uam cadela feliz, quer volta a fazê-la sorrir?!?!',															83,3,2,1,'M','Manson'),
(13,'784768479745654','2020-07-23 00:00:00','O Argulias é o cão mais atarefado do canil, está sempre a arruamr alguma coisa debaixo da terra, um osso ou um brinquedo.',68,3,1,1,'M','Argulias'),
(14,'694786994857694','2020-07-27 00:00:00','O Esdrubal está connosco há 2 anos, venha dar um passeio com ele e verá que é o cão que procura.',							72,3,2,1,'M','Esdrubal'),
(15,'498689476897458','2020-08-02 00:00:00','Desde que o Buscapé chegou o canil nunca mais foi o mesmo, é o terror dos cães com sono.',									107,3,5,1,'M','Buscapé'),
(16,'498689476897458','2020-08-08 00:00:00','Apesar de ter pouca força nas pernas, o Alicate mexe-se muito, quem conseguir que o apanhe.',								64,3,5,1,'M','Alicate'),
(17,'498689476897458','2020-08-13 00:00:00','O Brutus é um são bernardo de tamanho imponente, mas não faz mal a ninguém, venha conhecê-lo.',							101,2,5,1,'M','Brutus'),
(18,'498689476897458','2020-08-19 00:00:00','A Geraldina chegou com uma ninhada de 4 patudos, já foram todos, quem a leva agora a ela??!',								79,1,5,1,'M','Geraldina'),
(19,'498689476897458','2020-08-26 00:00:00','Já não existem cães como o Ambrosio, vai buscar o jornal e dá a pata.',													109,2,7,1,'M','Ambrosio'),
(20,'498689476897458','2020-09-08 00:00:00','A fofa é uma caniche cheia de atividade, sempre pronta para passeios',														68,3,1,1,'M','Fofa');

INSERT INTO adoption_animal
VALUES
(1, 0, 1, x),
(3, 0, 1, x),
(4, 0, 1, x),
(5, 0, 1, x),
(8, 0, 1, x),
(9, 0, 1, x),
(10, 0, 1, x),
(11, 0, 1, x),
(12, 0, 1, x),
(14, 0, 1, x),
(15, 0, 1, x),
(16, 0, 1, x),
(17, 0, 1, x),
(18, 0, 1, x);

INSERT INTO found_animal
VALUES
(6, lat, log, 1, '2020-06-04', 3, x),
(13, lat, log, 1, '2020-06-04', 3, x),
(19, lat, log, 1, '2020-06-04', 3, x);

INSERT INTO missing_animal
VALUES
(2, '2020-06-04', 1, x),
(7, '2020-06-04', 1, x),
(20, '2020-06-04', 1, x);


