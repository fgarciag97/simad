--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.19
-- Dumped by pg_dump version 10.15 (Ubuntu 10.15-0ubuntu0.18.04.1)

-- Started on 2020-12-01 12:16:29 -04

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 6912 (class 0 OID 39371)
-- Dependencies: 184
-- Data for Name: ano_fiscal; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.ano_fiscal VALUES (1, 2021);


--
-- TOC entry 7031 (class 0 OID 40363)
-- Dependencies: 303
-- Data for Name: aumento_rotativo_nivel; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.aumento_rotativo_nivel VALUES (1, 'EMPLEADOS', 8000.00);
INSERT INTO public.aumento_rotativo_nivel VALUES (2, 'OBREROS', 10400.00);


--
-- TOC entry 7027 (class 0 OID 40341)
-- Dependencies: 299
-- Data for Name: becas; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.becas VALUES (1, 'Beca Escolar Inicial', 100000.00);
INSERT INTO public.becas VALUES (2, 'Beca Escolar Edu. Primaria', 100000.00);
INSERT INTO public.becas VALUES (3, 'Beca Escolar Edu. Secundaria', 100000.00);
INSERT INTO public.becas VALUES (4, 'Beca Escolar Edu. Universitaria', 100000.00);
INSERT INTO public.becas VALUES (5, 'Beca Escolar Hijos Discapacidad', 100000.00);


--
-- TOC entry 7293 (class 0 OID 44984)
-- Dependencies: 565
-- Data for Name: compra_proveedores; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7295 (class 0 OID 44995)
-- Dependencies: 567
-- Data for Name: compra_orden_compras; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6923 (class 0 OID 39428)
-- Dependencies: 195
-- Data for Name: resoluciones; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6925 (class 0 OID 39440)
-- Dependencies: 197
-- Data for Name: presupuesto_sector; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6927 (class 0 OID 39460)
-- Dependencies: 199
-- Data for Name: presupuesto_programa; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6929 (class 0 OID 39483)
-- Dependencies: 201
-- Data for Name: presupuesto_sub_programa; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6933 (class 0 OID 39544)
-- Dependencies: 205
-- Data for Name: presupuesto_actividad; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6937 (class 0 OID 39610)
-- Dependencies: 209
-- Data for Name: presupuesto_ramo; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6939 (class 0 OID 39628)
-- Dependencies: 211
-- Data for Name: presupuesto_sub_ramo; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6941 (class 0 OID 39651)
-- Dependencies: 213
-- Data for Name: presupuesto_especifico; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6931 (class 0 OID 39511)
-- Dependencies: 203
-- Data for Name: presupuesto_proyecto; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6951 (class 0 OID 39772)
-- Dependencies: 223
-- Data for Name: presupuesto_forma2121; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6943 (class 0 OID 39674)
-- Dependencies: 215
-- Data for Name: presupuesto_sub_especifico; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6954 (class 0 OID 39820)
-- Dependencies: 226
-- Data for Name: presupuesto_forma2121_partidas; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7297 (class 0 OID 45011)
-- Dependencies: 569
-- Data for Name: compra_orden_compras_items; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7299 (class 0 OID 45037)
-- Dependencies: 571
-- Data for Name: compra_orden_servicio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7301 (class 0 OID 45053)
-- Dependencies: 573
-- Data for Name: compra_orden_servicio_items; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7292 (class 0 OID 44970)
-- Dependencies: 564
-- Data for Name: compra_requisicion; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7326 (class 0 OID 45264)
-- Dependencies: 598
-- Data for Name: tesoreria_cuentas; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7335 (class 0 OID 45329)
-- Dependencies: 607
-- Data for Name: conciliacion_hacienda; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7337 (class 0 OID 45346)
-- Dependencies: 609
-- Data for Name: conciliacion_hacienda_c; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7339 (class 0 OID 45362)
-- Dependencies: 611
-- Data for Name: conciliacion_hacienda_d; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7308 (class 0 OID 45128)
-- Dependencies: 580
-- Data for Name: ejecucion_beneficiarios; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7305 (class 0 OID 45096)
-- Dependencies: 577
-- Data for Name: ejecucion_requisicion_compra; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6914 (class 0 OID 39379)
-- Dependencies: 186
-- Data for Name: mes; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mes VALUES (1, 'ENERO');
INSERT INTO public.mes VALUES (2, 'FEBRERO');
INSERT INTO public.mes VALUES (3, 'MARZO');
INSERT INTO public.mes VALUES (4, 'ABRIL');
INSERT INTO public.mes VALUES (5, 'MAYO');
INSERT INTO public.mes VALUES (6, 'JUNIO');
INSERT INTO public.mes VALUES (7, 'JULIO');
INSERT INTO public.mes VALUES (8, 'AGOSTO');
INSERT INTO public.mes VALUES (9, 'SEPTIEMBRE');
INSERT INTO public.mes VALUES (10, 'OCTUBRE');
INSERT INTO public.mes VALUES (11, 'NOVIEMBRE');
INSERT INTO public.mes VALUES (12, 'DICIEMBRE');
INSERT INTO public.mes VALUES (13, 'ENERO-FEBRERO-MARZO');
INSERT INTO public.mes VALUES (14, 'ABRIL - OMITIDA');


--
-- TOC entry 6960 (class 0 OID 39944)
-- Dependencies: 232
-- Data for Name: mrrhh_tipo_nomina; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_tipo_nomina VALUES (1, 'Empleados');
INSERT INTO public.mrrhh_tipo_nomina VALUES (2, 'Obreros');
INSERT INTO public.mrrhh_tipo_nomina VALUES (3, 'Jubilados');
INSERT INTO public.mrrhh_tipo_nomina VALUES (4, 'Pensionados');
INSERT INTO public.mrrhh_tipo_nomina VALUES (5, 'Proteccion Civil');
INSERT INTO public.mrrhh_tipo_nomina VALUES (6, 'Especiales');


--
-- TOC entry 6961 (class 0 OID 39953)
-- Dependencies: 233
-- Data for Name: mrrhh_tipo_personal; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_tipo_personal VALUES (1, 'Empleados Fijos', 1);
INSERT INTO public.mrrhh_tipo_personal VALUES (2, 'Empleados Contratados', 1);
INSERT INTO public.mrrhh_tipo_personal VALUES (3, 'Directivos', 1);
INSERT INTO public.mrrhh_tipo_personal VALUES (4, 'Obreros Fijos', 2);
INSERT INTO public.mrrhh_tipo_personal VALUES (5, 'Obreros Contratados', 2);
INSERT INTO public.mrrhh_tipo_personal VALUES (6, 'Obreros No Permanentes', 2);
INSERT INTO public.mrrhh_tipo_personal VALUES (7, 'Empleados Jubilados ', 3);
INSERT INTO public.mrrhh_tipo_personal VALUES (8, 'Obreros Jubilados ', 3);
INSERT INTO public.mrrhh_tipo_personal VALUES (9, 'Empleados Pensionados', 4);
INSERT INTO public.mrrhh_tipo_personal VALUES (10, 'Empleados Pensionados Sobrevivientes', 4);
INSERT INTO public.mrrhh_tipo_personal VALUES (11, 'Empleados Pensionados Especiales', 4);
INSERT INTO public.mrrhh_tipo_personal VALUES (12, 'Obreros Pensionados Sobrevivientes', 4);
INSERT INTO public.mrrhh_tipo_personal VALUES (13, 'Obreros Pensionados Especiales', 4);
INSERT INTO public.mrrhh_tipo_personal VALUES (14, 'Proteccion Civil', 5);
INSERT INTO public.mrrhh_tipo_personal VALUES (15, 'Cementerio', 6);
INSERT INTO public.mrrhh_tipo_personal VALUES (16, 'Comision de Servicio', 6);
INSERT INTO public.mrrhh_tipo_personal VALUES (17, 'Honorarios Profesionales', 6);


--
-- TOC entry 6916 (class 0 OID 39387)
-- Dependencies: 188
-- Data for Name: quincena; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.quincena VALUES (1, 'PRIMERA QUINCENA', 1, 15);
INSERT INTO public.quincena VALUES (2, 'SEGUNDA QUINCENA', 16, 30);


--
-- TOC entry 7055 (class 0 OID 41062)
-- Dependencies: 327
-- Data for Name: mrrhh_requisicion; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_requisicion VALUES (9999, 2020, 1, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, NULL, NULL, NULL, NULL, 0, NULL, NULL);


--
-- TOC entry 7303 (class 0 OID 45079)
-- Dependencies: 575
-- Data for Name: ejecucion_requisicion_nomina; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7057 (class 0 OID 41107)
-- Dependencies: 329
-- Data for Name: mrrhh_requisicion_servicios; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7307 (class 0 OID 45113)
-- Dependencies: 579
-- Data for Name: ejecucion_requisicion_servicio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7310 (class 0 OID 45139)
-- Dependencies: 582
-- Data for Name: ejecucion_requisicion_transferencia; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7312 (class 0 OID 45151)
-- Dependencies: 584
-- Data for Name: ejecucion_transferencia; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7314 (class 0 OID 45167)
-- Dependencies: 586
-- Data for Name: ejecucion_transferencia_items; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7029 (class 0 OID 40352)
-- Dependencies: 301
-- Data for Name: ente_adscrito; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.ente_adscrito VALUES (69, 'OFICINA DE SEGUIMIENTO Y CONTROL');
INSERT INTO public.ente_adscrito VALUES (70, 'TURISMO');
INSERT INTO public.ente_adscrito VALUES (71, 'CATASTRO');
INSERT INTO public.ente_adscrito VALUES (72, 'SECRETARIA DE DESARROLLO E. COMUNAL');
INSERT INTO public.ente_adscrito VALUES (76, 'COORDINACION DE APOYO JURIDICO');
INSERT INTO public.ente_adscrito VALUES (77, 'OFIC. PARA FORTALECIMIENTO DEL PODER POPULAR');
INSERT INTO public.ente_adscrito VALUES (73, 'COORDINACION DE TRIBUTOS');
INSERT INTO public.ente_adscrito VALUES (74, 'OFICINA DE COMPRAS Y CONTRATOS');
INSERT INTO public.ente_adscrito VALUES (75, 'OFICINA DE CONTABILIDAD FISCAL');
INSERT INTO public.ente_adscrito VALUES (1, 'ALCALDIA DE MIRANDA');
INSERT INTO public.ente_adscrito VALUES (2, 'ARCHIVO MUNICIPAL');
INSERT INTO public.ente_adscrito VALUES (3, 'ATENCION AL SOBERANO');
INSERT INTO public.ente_adscrito VALUES (4, 'AUDITORIA INTERNA');
INSERT INTO public.ente_adscrito VALUES (5, 'CASA DE LA PAZ');
INSERT INTO public.ente_adscrito VALUES (6, 'CLPP');
INSERT INTO public.ente_adscrito VALUES (7, 'COORD. ADULTO MAYOR');
INSERT INTO public.ente_adscrito VALUES (8, 'DESPACHO DEL ALCALDE ');
INSERT INTO public.ente_adscrito VALUES (9, 'DIRECCION DE DESPACHO');
INSERT INTO public.ente_adscrito VALUES (10, 'DIRECCION GENERAL');
INSERT INTO public.ente_adscrito VALUES (11, 'GALPON GPS');
INSERT INTO public.ente_adscrito VALUES (12, 'IMUDEMI');
INSERT INTO public.ente_adscrito VALUES (13, 'INFORMATICA');
INSERT INTO public.ente_adscrito VALUES (14, 'INHAMIR');
INSERT INTO public.ente_adscrito VALUES (15, 'MERCADOS MUNICIPALES');
INSERT INTO public.ente_adscrito VALUES (16, 'OFICINA DE ADMINISTRACION TRIBUTARIA');
INSERT INTO public.ente_adscrito VALUES (17, 'OFICINA DE BIENES');
INSERT INTO public.ente_adscrito VALUES (18, 'OFICINA DE CULTURA');
INSERT INTO public.ente_adscrito VALUES (19, 'OFICINA DE DESARROLLO ENDOGENO COMUNAL');
INSERT INTO public.ente_adscrito VALUES (20, 'OFICINA DE EDUCACION');
INSERT INTO public.ente_adscrito VALUES (21, 'OFICINA DE PRESUPUESTO');
INSERT INTO public.ente_adscrito VALUES (22, 'OFICINA DE TALENTO HUMANO');
INSERT INTO public.ente_adscrito VALUES (23, 'OMI');
INSERT INTO public.ente_adscrito VALUES (24, 'REGISTRO CIVIL');
INSERT INTO public.ente_adscrito VALUES (25, 'REGISTRO CIVIL GUZMAN GUILLERMO');
INSERT INTO public.ente_adscrito VALUES (26, 'REGISTRO CIVIL LA NEGRITA');
INSERT INTO public.ente_adscrito VALUES (27, 'REGISTRO CIVIL SABANETA');
INSERT INTO public.ente_adscrito VALUES (28, 'REGISTRO PARROQUIA RIO SECO');
INSERT INTO public.ente_adscrito VALUES (29, 'SECRETARIA POLITICA');
INSERT INTO public.ente_adscrito VALUES (30, 'SECRETARIA SOCIAL ');
INSERT INTO public.ente_adscrito VALUES (31, 'SECRETARIA SOCIAL (CMDNNA)');
INSERT INTO public.ente_adscrito VALUES (32, 'SECRETARIA SOCIAL (CPNNA)');
INSERT INTO public.ente_adscrito VALUES (33, 'SECRETARIA SOCIAL (FUNDESOBA)');
INSERT INTO public.ente_adscrito VALUES (34, 'SECRETARIA SOCIAL (IMUM)');
INSERT INTO public.ente_adscrito VALUES (35, 'SECRETARIA TERRITORIAL (INGENIERIA)');
INSERT INTO public.ente_adscrito VALUES (36, 'SECRETARIA TERRITORIAL (PLANEAMIENTO)');
INSERT INTO public.ente_adscrito VALUES (37, 'SECRETARIA TERRITORIAL (PROYECTO)');
INSERT INTO public.ente_adscrito VALUES (38, 'SECRETARIA TERRITORIAL ');
INSERT INTO public.ente_adscrito VALUES (39, 'SECRETARIA TERRITORIAL (UTUM)');
INSERT INTO public.ente_adscrito VALUES (40, 'SEGUIMIENTO Y CONTROL');
INSERT INTO public.ente_adscrito VALUES (41, 'SINDICATURA MUNICIPAL');
INSERT INTO public.ente_adscrito VALUES (42, 'SUTRAFALCON');
INSERT INTO public.ente_adscrito VALUES (43, 'TALENTO HUMANO');
INSERT INTO public.ente_adscrito VALUES (44, 'TERMINAL DE PASAJEROS');
INSERT INTO public.ente_adscrito VALUES (45, 'TESORERIA MUNICIPAL');
INSERT INTO public.ente_adscrito VALUES (46, 'UNIDAD EDUCATIVA NACIONAL MITARE');
INSERT INTO public.ente_adscrito VALUES (47, 'CASA DE ALIMENTACION SECTOR LAS BRISAS');
INSERT INTO public.ente_adscrito VALUES (48, 'CEIS DOÑA CAMILA DE PINEDA');
INSERT INTO public.ente_adscrito VALUES (49, 'CEIS JEBE VIEJO');
INSERT INTO public.ente_adscrito VALUES (50, 'CEMENTERIO MUNICIPAL');
INSERT INTO public.ente_adscrito VALUES (51, 'FUNDACION VAMDA');
INSERT INTO public.ente_adscrito VALUES (52, 'FUNDO AGRARIO YAPAMATICO');
INSERT INTO public.ente_adscrito VALUES (53, 'INHAMIR');
INSERT INTO public.ente_adscrito VALUES (54, 'LA CHAPA');
INSERT INTO public.ente_adscrito VALUES (55, 'LA CHAPA CRISTO REDENTOR');
INSERT INTO public.ente_adscrito VALUES (56, 'MANTENIMIENTO Y EDIFICACIONES');
INSERT INTO public.ente_adscrito VALUES (57, 'MATADERO MUNICIPAL');
INSERT INTO public.ente_adscrito VALUES (58, 'OFICIA DE EDUCACION');
INSERT INTO public.ente_adscrito VALUES (59, 'OFICINA DE AMBIENTE MUNICIPAL');
INSERT INTO public.ente_adscrito VALUES (60, 'PARQUE AUTOMOTOR');
INSERT INTO public.ente_adscrito VALUES (61, 'PARROQUIA GUZMAN GUILLERMO');
INSERT INTO public.ente_adscrito VALUES (62, 'PARROQUIA MITARE C.C. EL CONEJAL');
INSERT INTO public.ente_adscrito VALUES (63, 'PARROQUIA MITARE REGISTRO C.');
INSERT INTO public.ente_adscrito VALUES (64, 'PARROQUIA SABANETA');
INSERT INTO public.ente_adscrito VALUES (65, 'PARROQUIA SABANETA REGISTRO C.');
INSERT INTO public.ente_adscrito VALUES (66, 'SECRETARIA AMBIENTE');
INSERT INTO public.ente_adscrito VALUES (67, 'SECRETARIA SEGURIDAD C.');
INSERT INTO public.ente_adscrito VALUES (68, 'SERVICIOS PUBLICOS');


--
-- TOC entry 6995 (class 0 OID 40161)
-- Dependencies: 267
-- Data for Name: grado_nivel; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.grado_nivel VALUES (1, 'I');
INSERT INTO public.grado_nivel VALUES (2, 'II');
INSERT INTO public.grado_nivel VALUES (3, 'III');
INSERT INTO public.grado_nivel VALUES (4, 'IV');
INSERT INTO public.grado_nivel VALUES (5, 'V');
INSERT INTO public.grado_nivel VALUES (6, 'VI');
INSERT INTO public.grado_nivel VALUES (7, 'VII');


--
-- TOC entry 6998 (class 0 OID 40185)
-- Dependencies: 270
-- Data for Name: grado_nivel_cementerio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6997 (class 0 OID 40177)
-- Dependencies: 269
-- Data for Name: grado_nivel_obreros; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.grado_nivel_obreros VALUES (1, 'MINIMO');
INSERT INTO public.grado_nivel_obreros VALUES (2, 'MAXIMO');


--
-- TOC entry 6996 (class 0 OID 40169)
-- Dependencies: 268
-- Data for Name: grado_nivel_proteccion_civil; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.grado_nivel_proteccion_civil VALUES (1, '(1-1)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (2, '(1-2)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (3, '(1-3)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (4, '(2-4)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (5, '(2-5)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (6, '(2-6)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (7, '(3-7)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (8, '(3-8)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (9, '(3-9)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (10, '(1-10)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (11, '(1-11)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (12, '(1-12)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (13, '(2-13)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (14, '(2-14)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (15, '(2-15)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (16, '(3-16)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (17, '(3-17)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (18, '(3-18)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (19, '(1-19)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (20, '(1-20)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (21, '(1-21)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (22, '(2-22)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (23, '(2-23)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (24, '(2-24)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (25, '(25)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (26, '(26)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (27, '(27)');
INSERT INTO public.grado_nivel_proteccion_civil VALUES (28, '(28)');


--
-- TOC entry 6994 (class 0 OID 40153)
-- Dependencies: 266
-- Data for Name: grados; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.grados VALUES (1, 'BACHILLER', 0.00);
INSERT INTO public.grados VALUES (2, 'TECNICO SUPERIOR UNIVERSITARIO', 0.20);
INSERT INTO public.grados VALUES (3, 'PROFESIONAL', 0.30);
INSERT INTO public.grados VALUES (4, 'ESPECIALISTA', 0.40);
INSERT INTO public.grados VALUES (5, 'MAESTRIA', 0.50);
INSERT INTO public.grados VALUES (6, 'DOCTORADO', 0.60);


--
-- TOC entry 6910 (class 0 OID 39354)
-- Dependencies: 182
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.usuarios VALUES (1, 'FGARCIAG97', '$2y$10$lrrX/zEYj756zY.54B.hxu5dQdZ83lSI/IwPOhkN6MzRA6f6vjYZO', 'Fely Garcia (Programador)', true, false, true, true, true, true, true);
INSERT INTO public.usuarios VALUES (3, 'JOSEFSANCHEZ2511', '$2y$10$kLnQsO.O7Ua9JlW1iif/A.im89h5W31TI8sGP3iKsjh54BueFfS9q', 'Jose Sanchez (Programador)', true, false, true, true, true, true, true);
INSERT INTO public.usuarios VALUES (27503872, 'LUISLEAL98E', '$2y$10$sXN2Oovo2uLUqg9new5nfO4nBdz7qViZQgu96XbTzdWvfrexsj8Am', 'Luis Leal (Ingeniero)', true, false, true, true, true, true, true);


--
-- TOC entry 7356 (class 0 OID 45629)
-- Dependencies: 629
-- Data for Name: log_user; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.log_user VALUES (649, 1, '2020-12-01', '04:00:00', NULL, NULL, '192.168.3.85', true, '2020-12-01', '04:00:00');


--
-- TOC entry 6920 (class 0 OID 39408)
-- Dependencies: 192
-- Data for Name: mp_forma2100; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6922 (class 0 OID 39419)
-- Dependencies: 194
-- Data for Name: mp_forma2101; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6918 (class 0 OID 39395)
-- Dependencies: 190
-- Data for Name: mp_seguimiento; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mp_seguimiento VALUES (2020, false, false, false, false, false);


--
-- TOC entry 7024 (class 0 OID 40327)
-- Dependencies: 296
-- Data for Name: mrrhh_aportes; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_aportes VALUES (1, 'Aporte Funeraria', 20000.00);


--
-- TOC entry 7020 (class 0 OID 40305)
-- Dependencies: 292
-- Data for Name: mrrhh_cargos_cementerio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7004 (class 0 OID 40217)
-- Dependencies: 276
-- Data for Name: mrrhh_cargos_directivos; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_cargos_directivos VALUES (1, 'MINISTRO');
INSERT INTO public.mrrhh_cargos_directivos VALUES (2, 'SINDICO PROCURADOR');
INSERT INTO public.mrrhh_cargos_directivos VALUES (3, 'ALCALDE DEL MUNICIPIO MIRANDA DEL ESTADO FALCON');
INSERT INTO public.mrrhh_cargos_directivos VALUES (4, 'SECRETARIA (E ) DE HACIENDA MUNICIPAL');
INSERT INTO public.mrrhh_cargos_directivos VALUES (5, 'JEFE DE LA OFICINA DE ADMINISTRACION TRIBUTARIA');
INSERT INTO public.mrrhh_cargos_directivos VALUES (6, 'JEFE DE LA ODICINA DEL ARCHIVO MUNICIPAL');
INSERT INTO public.mrrhh_cargos_directivos VALUES (7, 'SECRETARIA PRIVADA DEL ALCALDE');
INSERT INTO public.mrrhh_cargos_directivos VALUES (8, 'SECRETARIA DE DESARROLLO ECONOMICO COMUNAL');
INSERT INTO public.mrrhh_cargos_directivos VALUES (9, 'JEFE DE LA OFICINA DEL CEMENTERIO');
INSERT INTO public.mrrhh_cargos_directivos VALUES (10, 'SECRETARIO TERRITORIAL MUNICIPAL');
INSERT INTO public.mrrhh_cargos_directivos VALUES (11, 'JEFE DE LA OFICINA DE CULTURA');
INSERT INTO public.mrrhh_cargos_directivos VALUES (12, 'JEFE DE LA OFICNA DE DESARROLLO ENDOGENO');
INSERT INTO public.mrrhh_cargos_directivos VALUES (13, 'JEFE DE LA OFICINA DE CATASTRO');
INSERT INTO public.mrrhh_cargos_directivos VALUES (14, 'JEFE DE LA OFICINA DE ATENCION AL SOBERANO');
INSERT INTO public.mrrhh_cargos_directivos VALUES (15, 'JEFE DE LA OFICINA DE PRESUPUESTO');
INSERT INTO public.mrrhh_cargos_directivos VALUES (16, 'JEFE (E ) DE LA OFICINA DE PLANEAMIENTO URBANO');
INSERT INTO public.mrrhh_cargos_directivos VALUES (17, 'COORDINADOR (E ) INFORMARTICA');
INSERT INTO public.mrrhh_cargos_directivos VALUES (18, 'JEFE DE LA OFICINA DE DESARROLLO POLITICO INSTITUCIONAL');
INSERT INTO public.mrrhh_cargos_directivos VALUES (19, 'JEFE DE LA OFICINA DE MANTENIMIENTO');
INSERT INTO public.mrrhh_cargos_directivos VALUES (20, 'JEFE DE LAOFICINA DE MINERALES NO METALICOS');
INSERT INTO public.mrrhh_cargos_directivos VALUES (21, 'JEFE DE LA OFICINA DE PROYECTOS');
INSERT INTO public.mrrhh_cargos_directivos VALUES (22, 'JEFE DE LA OFICINA DE COMPRAS Y CONTRATOS');
INSERT INTO public.mrrhh_cargos_directivos VALUES (23, 'JEFE E DE LA OFICNA DE COORD DE PROYECTO, INVERSION Y DESARROLLO SOCIO PRODUCTIVO');
INSERT INTO public.mrrhh_cargos_directivos VALUES (24, 'JEFE DE LA OFICINA DE CULTURA');
INSERT INTO public.mrrhh_cargos_directivos VALUES (25, 'JEFE DE LA OFICINA DE ADMINISTRACION DEL PARQUE AUTOMOTOR');
INSERT INTO public.mrrhh_cargos_directivos VALUES (26, 'COORDINADOR DE ASUNTOS INTERNOS');
INSERT INTO public.mrrhh_cargos_directivos VALUES (27, 'JEFE DE LA OFICINA DE EDUCACION');
INSERT INTO public.mrrhh_cargos_directivos VALUES (28, 'DIRECTOR DE PROTECCION CIVIL Y ADMINISTRACION DE DESASTRE');
INSERT INTO public.mrrhh_cargos_directivos VALUES (29, 'JEFE DE LA OFICINA DE OBRAS PUBLICAS Y SERVICIOS');
INSERT INTO public.mrrhh_cargos_directivos VALUES (30, 'JEFE DE LA OFICINA DE ADMON DE TALENTO HUMANO');
INSERT INTO public.mrrhh_cargos_directivos VALUES (31, 'COORD (E ) DE TRIBUTOS');
INSERT INTO public.mrrhh_cargos_directivos VALUES (32, 'SECRETARIO POLITICO MUNICIPAL');
INSERT INTO public.mrrhh_cargos_directivos VALUES (33, 'DIRECTOR GENERAL');
INSERT INTO public.mrrhh_cargos_directivos VALUES (34, 'SECRETARIO DE AMBIENTE');
INSERT INTO public.mrrhh_cargos_directivos VALUES (35, 'ASISTENTE ADJUNTO A LA COORD DE ASUNTOS INTERNOS');
INSERT INTO public.mrrhh_cargos_directivos VALUES (36, 'COORD DE FISCALIZACION Y LICORES');
INSERT INTO public.mrrhh_cargos_directivos VALUES (37, 'JEFE DE LA OFICINA DE COORD DE PROGRAMAS DE SANEAMIENTO AMBIENTAL');
INSERT INTO public.mrrhh_cargos_directivos VALUES (38, 'ASISTENTE ADJUNTO');
INSERT INTO public.mrrhh_cargos_directivos VALUES (39, 'ASISTENTE ADJUNTO AL DIRECTOR GENERAL');
INSERT INTO public.mrrhh_cargos_directivos VALUES (40, 'JEFE DE LA OFICINA DE INGENIERIA MUNICIPAL');
INSERT INTO public.mrrhh_cargos_directivos VALUES (41, 'JEFE DE LA OFICINA DE COORDINACION Y COOP INTERINSTITUCIONAL');
INSERT INTO public.mrrhh_cargos_directivos VALUES (42, 'JEFE DE LA OFICINA DEL REGISTRO MUNICiPAL');
INSERT INTO public.mrrhh_cargos_directivos VALUES (43, 'JEFE DE LA OFICINA PARA EL FORTALECIMIENTO DEL PODER POPULAR');
INSERT INTO public.mrrhh_cargos_directivos VALUES (44, 'COORDINADOR DE RELACIONES LABORALES');
INSERT INTO public.mrrhh_cargos_directivos VALUES (45, 'JEFE DE LA OFICINA DE EDUCACION AMBIENTAL Y PARTICIPACION CIUDADANA');
INSERT INTO public.mrrhh_cargos_directivos VALUES (46, 'JEFE DE LA OFICINA DE CONTROL Y VIGILANCIA AMBIENTAL');
INSERT INTO public.mrrhh_cargos_directivos VALUES (47, 'DIRECTOR DEL DESPACHO');


--
-- TOC entry 7002 (class 0 OID 40206)
-- Dependencies: 274
-- Data for Name: mrrhh_cargos_empleados_contratados; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (1, 'ASISTENTE');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (2, 'PROMOTOR');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (3, 'PROMOTOR POLITICO');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (4, 'PROMOTOR TURISTICO');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (5, 'PROMOTOR COMUNITARIO');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (6, 'TECNICO EN ASIS AGROPECUARIA');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (7, 'INGENIERO');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (8, 'FISCAL DE RENTAS C');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (9, 'PROMOTOR SOCIAL');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (10, 'COMUICADOR SOCIAL');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (11, 'COORDINADOR');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (12, 'RECAUDADOR DE TRIBUTOS');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (13, 'ASISTENTE ADMINISTRATIVO');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (14, 'AUDITOR');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (15, 'JUEZ DE PAZ COMUNAL');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (16, 'FISCAL DE BIENES');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (17, 'FISCAL DE RENTAS COMERCIALES');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (18, 'COORDINADOR SEGURIDAD');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (19, 'ANALISTA');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (20, 'ASIST DE INGENIERO');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (21, 'SECRETARIA');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (22, 'OPERADOR');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (23, 'FOTOGRAFO');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (24, 'ABOGADO');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (25, 'ASISTENTE ADMINISTRATIVO');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (26, 'FISCAL');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (27, 'FISCAL DE RENTAS COMERCIALES');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (28, 'FISCAL');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (29, 'FISCA');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (30, 'OPERADOR EQ COMP');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (31, 'ASESOR');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (32, 'ABOGADO');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (33, 'FISCAL DE RENTAS');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (34, 'SECRETARIA');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (35, 'ASISTENTE ADMINISTRATIVO');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (36, 'OPERADOR EQUIPOS DE C');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (37, 'ANALISTA ORDEN DE PAGO');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (38, 'FISCAL');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (39, 'CONSERVADORA');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (40, 'ASISTENTE ADMINISTRATIVO');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (41, 'FISCAL');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (42, 'ASISTENTE ADMINISTRATIVO');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (43, 'SEGURIDAD Y CUSTODIA');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (44, 'ASISTENTE ADMINISTRATIVO');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (45, 'FISCAL DE RENTAS');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (46, 'ANALISTA');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (47, 'SECRETARIA');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (48, 'ARCHIVISTA');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (49, 'PSICOLOGA');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (50, 'SECRETARIA');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (51, 'FISCAL DE RENTAS');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (52, 'PROMOTOR CULTURAL');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (53, 'CONSERVADORA');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (54, 'ATENCION AL CONTRIBUYENTE');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (55, 'OPERADOR EQ COMP');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (56, 'CONSERVADORA');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (57, 'FISIOTERAPEUTA');
INSERT INTO public.mrrhh_cargos_empleados_contratados VALUES (58, 'FISCAL DE RENTA');


--
-- TOC entry 7000 (class 0 OID 40195)
-- Dependencies: 272
-- Data for Name: mrrhh_cargos_empleados_fijos; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (1, 'FISCAL TECNICO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (2, 'COMUNICADOR SOCIAL');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (3, 'RELACIONISTA DE PROTOCOLO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (4, 'ARCHIVISTA');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (5, 'SUPERVISOR DE MANTENIMIENTO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (6, 'AUXILIAR DE LICITACION');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (7, 'ANALISTA DE PRESUPUESTO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (8, 'PROMOTOR COMUNITARIO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (9, 'ASISTENTE ADMINISTRATIVO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (10, 'AYUDANTE DE TOPOGRAFO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (11, 'RECEPCIONISTA');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (12, 'AUDITOR');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (13, 'FISCAL DE BIENES COMERCIALES');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (14, 'FISCAL DE NUCLEO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (15, 'CONTROL AMBIENTAL');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (16, 'ASISTENTE EN AREA SOCIAL');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (17, 'SECRETARIA');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (18, 'INGENIERO PROYECTISTA');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (19, 'ANALISTA DE CONTABILIDAD');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (20, 'FISCAL DE RENTAS Y LICORES');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (21, 'TECNICO EN ASISTENCIA AGROPECUARIA');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (22, 'ABOGADO COORD. DE APOYO JURIDICO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (23, 'ABOGADO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (24, 'INGENIERO EN ASISTENCIA AGROPECUARIA');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (25, 'ASISTENTE DE INGENIERO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (26, 'OPERADOR DE EQUIPOS DE COMPUTACION');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (27, 'FISCAL DE RENTAS COMERCIALES');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (28, 'SECRETARIAL');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (29, 'PLANIFICADOR GENERAL DE MANTENIMIENTO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (30, 'ADMINISTRADOR DE CONTRATOS');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (31, 'FISCAL DE CASOS');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (32, 'ASISTENTE DE CONTABILIDAD');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (33, 'ASISTENTE TECNICO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (34, 'PROMOTOR SOCIAL');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (35, 'ANALISTA DE ATENCION AL CONTRIBUYENTE');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (36, 'ANALISTA DE PERSONAL');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (37, 'PARAMEDICO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (38, 'ASISTENTE DE TESORERIA');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (39, 'ESTADISTICAS MUNICIPALES');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (40, 'INGENIERO PLANIFICADOR');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (41, 'PROMOTOR TURISTICO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (42, 'ANALISTA DE RECAUDACION');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (43, 'INGENIERO DE INSPECCION Y CONTROL DE OBRAS');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (44, 'DEFENSORES DE NIÑOS, ADOLESCENTES, MUJER Y FAMILIA');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (45, 'ASISTENTE TECNICO ADMINISTRATIVO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (46, 'TECNICO PROYECTISTA');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (47, 'CONSEJERO PRINCIPAL');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (48, 'ASISTENTE DE CONTROL Y SEGUIMIENTO DE TRIBUTOS');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (49, 'ANALISTA DE REGISTRO Y CONTROL DE PROPIEDADES');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (50, 'ANALISTA DE RECAUDACION Y TRIBUTOS');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (51, 'TECNICO EN GERONTOLOGIA');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (52, 'ANALISTA DE ORDENES DE PAGO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (53, 'ASISTENTE DE ANALISTA');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (54, 'PLANIFICADOR');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (55, 'REVISOR');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (56, 'INGENIERO CIVIL');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (57, 'ASISTENTE EN AREA SOCIAL');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (58, 'ANALISTA DE PERSONAL');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (59, 'ANALISTA DE RECAUDACION Y TRIBUTOS');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (60, 'REVISOR');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (61, 'ASISTENTE TECNICO DE INGENIERO');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (62, 'ANALISTA DE COMPRAS');
INSERT INTO public.mrrhh_cargos_empleados_fijos VALUES (63, 'PRODUCCIÓN Y COBERTURA');


--
-- TOC entry 7014 (class 0 OID 40272)
-- Dependencies: 286
-- Data for Name: mrrhh_cargos_jubilados; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_cargos_jubilados VALUES (1, 'OBRERO');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (2, 'MENSAJERO');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (3, 'JARDINERO');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (4, 'CHOFER');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (5, 'CAPORAL');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (6, 'PINTOR');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (7, 'ELECTRICISTA');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (8, 'MECANICO');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (9, 'AYUDANTE DE ALBAÑIL');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (10, 'SECRETARIO TERRITORIAL MUNICIPAL');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (11, 'JEFE DE LA OFICINA DE CULTURA');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (12, 'JEFE DE LA OFICNA DE DESARROLLO ENDOGENO');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (13, 'JEFE DE LA OFICINA DE CATASTRO');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (14, 'JEFE DE LA OFICINA DE ATENCION AL SOBERANO');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (15, 'JEFE DE LA OFICINA DE PRESUPUESTO');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (16, 'JEFE (E ) DE LA OFICINA DE PLANEAMIENTO URBANO');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (17, 'COORDINADOR (E ) INFORMARTICA');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (18, 'JEFE DE LA OFICINA DE DESARROLLO POLITICO INSTITUCIONAL');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (19, 'JEFE DE LA OFICINA DE MANTENIMIENTO');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (20, 'JEFE DE LAOFICINA DE MINERALES NO METALICOS');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (21, 'JEFE DE LA OFICINA DE PROYECTOS');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (22, 'JEFE DE LA OFICINA DE COMPRAS Y CONTRATOS');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (23, 'JEFE E DE LA OFICNA DE COORD DE PROYECTO, INVERSION Y DESARROLLO SOCIO PRODUCTIVO');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (24, 'JEFE DE LA OFICINA DE CULTURA');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (25, 'JEFE DE LA OFICINA DE ADMINISTRACION DEL PARQUE AUTOMOTOR');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (26, 'COORDINADOR DE ASUNTOS INTERNOS');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (27, 'JEFE DE LA OFICINA DE EDUCACION');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (28, 'DIRECTOR DE PROTECCION CIVIL Y ADMINISTRACION DE DESASTRE');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (29, 'JEFE DE LA OFICINA DE OBRAS PUBLICAS Y SERVICIOS');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (30, 'JEFE DE LA OFICINA DE ADMON DE TALENTO HUMANO');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (31, 'COORD (E ) DE TRIBUTOS');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (32, 'SECRETARIO POLITICO MUNICIPAL');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (33, 'DIRECTOR GENERAL');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (34, 'SECRETARIO DE AMBIENTE');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (35, 'ASISTENTE ADJUNTO A LA COORD DE ASUNTOS INTERNOS');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (36, 'COORD DE FISCALIZACION Y LICORES');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (37, 'JEFE DE LA OFICINA DE COORD DE PROGRAMAS DE SANEAMIENTO AMBIENTAL');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (38, 'ASISTENTE ADJUNTO');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (39, 'ASISTENTE ADJUNTO AL DIRECTOR GENERAL');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (40, 'JUBILADO');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (41, 'MINISTRO');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (42, 'SINDICO PROCURADOR');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (43, 'ALCALDE DEL MUNICIPIO MIRANDA DEL ESTADO FALCON');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (44, 'SECRETARIA (E ) DE HACIENDA MUNICIPAL');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (45, 'JEFE DE LA OFICINA DE ADMINISTRACION TRIBUTARIA');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (46, 'JEFE DE LA ODICINA DEL ARCHIVO MUNICIPAL');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (47, 'SECRETARIA PRIVADA DEL ALCALDE');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (48, 'SECRETARIA DE DESARROLLO ECONOMICO COMUNAL');
INSERT INTO public.mrrhh_cargos_jubilados VALUES (49, 'JEFE DE LA OFICINA DEL CEMENTERIO');


--
-- TOC entry 7008 (class 0 OID 40239)
-- Dependencies: 280
-- Data for Name: mrrhh_cargos_obreros_contratados; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (1, 'OBRERO');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (2, 'MENSAJERO');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (3, 'JARDINERO');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (4, 'CHOFER');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (5, 'CAPORAL');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (6, 'PINTOR');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (7, 'ELECTRICISTA');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (8, 'MECANICO');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (9, 'AYUDANTE DE ALBAÑIL');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (10, 'SOLDADOR');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (11, 'AYUDANTE A');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (12, 'AYUDANTE B');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (13, 'AYUDANTE C');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (14, 'AYUDANTE D');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (15, 'VANCANTE');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (16, 'VANCANTE');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (17, 'VANCANTE');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (18, 'VANCANTE');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (19, 'VANCANTE');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (20, 'VANCANTE');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (21, 'VANCANTE');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (22, 'VANCANTE');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (23, 'VANCANTE');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (24, 'VANCANTE');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (25, 'VANCANTE');
INSERT INTO public.mrrhh_cargos_obreros_contratados VALUES (26, 'VANCANTE');


--
-- TOC entry 7006 (class 0 OID 40228)
-- Dependencies: 278
-- Data for Name: mrrhh_cargos_obreros_fijos; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_cargos_obreros_fijos VALUES (1, 'OBRERO');
INSERT INTO public.mrrhh_cargos_obreros_fijos VALUES (2, 'MENSAJERO');
INSERT INTO public.mrrhh_cargos_obreros_fijos VALUES (3, 'JARDINERO');
INSERT INTO public.mrrhh_cargos_obreros_fijos VALUES (4, 'CHOFER');
INSERT INTO public.mrrhh_cargos_obreros_fijos VALUES (5, 'CAPORAL');
INSERT INTO public.mrrhh_cargos_obreros_fijos VALUES (6, 'PINTOR');
INSERT INTO public.mrrhh_cargos_obreros_fijos VALUES (7, 'ELECTRICISTA');
INSERT INTO public.mrrhh_cargos_obreros_fijos VALUES (8, 'MECANICO');
INSERT INTO public.mrrhh_cargos_obreros_fijos VALUES (9, 'AYUDANTE DE ALBAÑIL');
INSERT INTO public.mrrhh_cargos_obreros_fijos VALUES (10, 'SOLDADOR');


--
-- TOC entry 7012 (class 0 OID 40261)
-- Dependencies: 284
-- Data for Name: mrrhh_cargos_obreros_no_permanentes; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_cargos_obreros_no_permanentes VALUES (1, 'ROTATIVO');


--
-- TOC entry 7016 (class 0 OID 40283)
-- Dependencies: 288
-- Data for Name: mrrhh_cargos_pensionados; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_cargos_pensionados VALUES (1, 'MINISTRO');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (2, 'SINDICO PROCURADOR');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (3, 'ALCALDE DEL MUNICIPIO MIRANDA DEL ESTADO FALCON');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (4, 'SECRETARIA (E ) DE HACIENDA MUNICIPAL');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (5, 'JEFE DE LA OFICINA DE ADMINISTRACION TRIBUTARIA');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (6, 'JEFE DE LA ODICINA DEL ARCHIVO MUNICIPAL');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (7, 'SECRETARIA PRIVADA DEL ALCALDE');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (8, 'SECRETARIA DE DESARROLLO ECONOMICO COMUNAL');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (9, 'JEFE DE LA OFICINA DEL CEMENTERIO');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (10, 'SECRETARIO TERRITORIAL MUNICIPAL');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (11, 'JEFE DE LA OFICINA DE CULTURA');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (12, 'JEFE DE LA OFICNA DE DESARROLLO ENDOGENO');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (13, 'JEFE DE LA OFICINA DE CATASTRO');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (14, 'JEFE DE LA OFICINA DE ATENCION AL SOBERANO');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (15, 'JEFE DE LA OFICINA DE PRESUPUESTO');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (16, 'JEFE (E ) DE LA OFICINA DE PLANEAMIENTO URBANO');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (17, 'COORDINADOR (E ) INFORMARTICA');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (18, 'JEFE DE LA OFICINA DE DESARROLLO POLITICO INSTITUCIONAL');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (19, 'JEFE DE LA OFICINA DE MANTENIMIENTO');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (20, 'JEFE DE LAOFICINA DE MINERALES NO METALICOS');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (21, 'JEFE DE LA OFICINA DE PROYECTOS');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (22, 'JEFE DE LA OFICINA DE COMPRAS Y CONTRATOS');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (23, 'JEFE E DE LA OFICNA DE COORD DE PROYECTO, INVERSION Y DESARROLLO SOCIO PRODUCTIVO');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (24, 'JEFE DE LA OFICINA DE CULTURA');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (25, 'JEFE DE LA OFICINA DE ADMINISTRACION DEL PARQUE AUTOMOTOR');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (26, 'COORDINADOR DE ASUNTOS INTERNOS');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (27, 'JEFE DE LA OFICINA DE EDUCACION');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (28, 'DIRECTOR DE PROTECCION CIVIL Y ADMINISTRACION DE DESASTRE');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (29, 'JEFE DE LA OFICINA DE OBRAS PUBLICAS Y SERVICIOS');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (30, 'JEFE DE LA OFICINA DE ADMON DE TALENTO HUMANO');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (31, 'COORD (E ) DE TRIBUTOS');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (32, 'SECRETARIO POLITICO MUNICIPAL');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (33, 'DIRECTOR GENERAL');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (34, 'SECRETARIO DE AMBIENTE');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (35, 'ASISTENTE ADJUNTO A LA COORD DE ASUNTOS INTERNOS');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (36, 'COORD DE FISCALIZACION Y LICORES');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (37, 'JEFE DE LA OFICINA DE COORD DE PROGRAMAS DE SANEAMIENTO AMBIENTAL');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (38, 'ASISTENTE ADJUNTO');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (39, 'ASISTENTE ADJUNTO AL DIRECTOR GENERAL');
INSERT INTO public.mrrhh_cargos_pensionados VALUES (40, 'PENSIONADO');


--
-- TOC entry 7010 (class 0 OID 40250)
-- Dependencies: 282
-- Data for Name: mrrhh_cargos_proteccion_civil; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_cargos_proteccion_civil VALUES (1, 'OFICIAL DE PROTECCION CIVIL I');
INSERT INTO public.mrrhh_cargos_proteccion_civil VALUES (2, 'OFICIAL DE PROTECCION CIVIL II');
INSERT INTO public.mrrhh_cargos_proteccion_civil VALUES (3, 'OFICIAL DE PROTECCION CIVIL III');
INSERT INTO public.mrrhh_cargos_proteccion_civil VALUES (4, 'OFICIAL SUPERVISOR DE PROTECCION CIVIL I');
INSERT INTO public.mrrhh_cargos_proteccion_civil VALUES (5, 'OFICIAL SUPERVISOR DE PROTECCION CIVIL II');
INSERT INTO public.mrrhh_cargos_proteccion_civil VALUES (6, 'OFICIAL SUPERVISOR DE PROTECCION CIVIL III');
INSERT INTO public.mrrhh_cargos_proteccion_civil VALUES (7, 'COORDINACION DE PROTECCION CIVIL I');
INSERT INTO public.mrrhh_cargos_proteccion_civil VALUES (8, 'COORDINACION DE PROTECCION CIVIL II');
INSERT INTO public.mrrhh_cargos_proteccion_civil VALUES (9, 'COORDINACION GENERAL DE PROTECCION CIVIL');


--
-- TOC entry 6969 (class 0 OID 40001)
-- Dependencies: 241
-- Data for Name: mrrhh_grupos_obreros; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_grupos_obreros VALUES (1, 'NC1', 'No Calificados 1');
INSERT INTO public.mrrhh_grupos_obreros VALUES (2, 'NC2', 'No Calificados 2');
INSERT INTO public.mrrhh_grupos_obreros VALUES (3, 'NC3', 'No Calificados 3');
INSERT INTO public.mrrhh_grupos_obreros VALUES (4, 'NC4', 'No Calificados 4');
INSERT INTO public.mrrhh_grupos_obreros VALUES (5, 'C1', 'Calificados 1');
INSERT INTO public.mrrhh_grupos_obreros VALUES (6, 'C2', 'Calificados 2');
INSERT INTO public.mrrhh_grupos_obreros VALUES (7, 'C3', 'Calificados 3');
INSERT INTO public.mrrhh_grupos_obreros VALUES (8, 'C4', 'Calificados 4');
INSERT INTO public.mrrhh_grupos_obreros VALUES (9, 'S1', 'Supervisor 1');
INSERT INTO public.mrrhh_grupos_obreros VALUES (10, 'S2', 'Supervisor 2');


--
-- TOC entry 6985 (class 0 OID 40090)
-- Dependencies: 257
-- Data for Name: mrrhh_niveles_obreros; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7034 (class 0 OID 40383)
-- Dependencies: 306
-- Data for Name: mrrhh_personal; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7051 (class 0 OID 40953)
-- Dependencies: 323
-- Data for Name: mrrhh_cementerio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7240 (class 0 OID 44113)
-- Dependencies: 512
-- Data for Name: mrrhh_cesta_ticket_cementerio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7228 (class 0 OID 43996)
-- Dependencies: 500
-- Data for Name: mrrhh_cesta_ticket_empleados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7232 (class 0 OID 44035)
-- Dependencies: 504
-- Data for Name: mrrhh_cesta_ticket_obreros; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7236 (class 0 OID 44074)
-- Dependencies: 508
-- Data for Name: mrrhh_cesta_ticket_proteccion_civil; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6967 (class 0 OID 39990)
-- Dependencies: 239
-- Data for Name: mrrhh_grupos_directivos; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_grupos_directivos VALUES (1, 'MIN.', 'MINISTRO');
INSERT INTO public.mrrhh_grupos_directivos VALUES (2, 'VIC.MIN.', 'VICEMINISTROS');
INSERT INTO public.mrrhh_grupos_directivos VALUES (3, 'MAX. AUTORID.', 'MAXIMAS AUTORIDADES DE ORGANOS Y ENTES ADSCRITOS');
INSERT INTO public.mrrhh_grupos_directivos VALUES (4, 'DIREC. GEN.', 'DIRECTORES GENERALES');
INSERT INTO public.mrrhh_grupos_directivos VALUES (5, 'DIREC. LIN.', 'DIRECTORES DE LINEA');
INSERT INTO public.mrrhh_grupos_directivos VALUES (6, 'JEF. DIV.', 'JEFES DE DIVISION');
INSERT INTO public.mrrhh_grupos_directivos VALUES (7, 'COO. AREA', 'COORDINADORES DE AREA');


--
-- TOC entry 6983 (class 0 OID 40077)
-- Dependencies: 255
-- Data for Name: mrrhh_niveles_directivos; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7052 (class 0 OID 40985)
-- Dependencies: 324
-- Data for Name: mrrhh_comision_servicio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7039 (class 0 OID 40504)
-- Dependencies: 311
-- Data for Name: mrrhh_directivos; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6965 (class 0 OID 39979)
-- Dependencies: 237
-- Data for Name: mrrhh_grupos_empleados; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_grupos_empleados VALUES (1, 'BI', 'BI (ADM I - II)');
INSERT INTO public.mrrhh_grupos_empleados VALUES (2, 'BII', 'BII (ADM III)');
INSERT INTO public.mrrhh_grupos_empleados VALUES (3, 'BIII', 'BIII (ADM IV - V)');
INSERT INTO public.mrrhh_grupos_empleados VALUES (4, 'TI', 'TI (P I - II)');
INSERT INTO public.mrrhh_grupos_empleados VALUES (5, 'TII', 'TII (P III - IV)');
INSERT INTO public.mrrhh_grupos_empleados VALUES (6, 'PI', 'PI (U I - II)');
INSERT INTO public.mrrhh_grupos_empleados VALUES (7, 'PII', 'PII (U III)');
INSERT INTO public.mrrhh_grupos_empleados VALUES (8, 'PIII', 'PIII (U IV - V)');
INSERT INTO public.mrrhh_grupos_empleados VALUES (9, 'MIN.', 'MINISTRO');
INSERT INTO public.mrrhh_grupos_empleados VALUES (10, 'VIC.MIN.', 'VICEMINISTROS');
INSERT INTO public.mrrhh_grupos_empleados VALUES (11, 'MAX. AUTORID.', 'MAXIMAS AUTORIDADES DE ORGANOS Y ENTES ADSCRITOS');
INSERT INTO public.mrrhh_grupos_empleados VALUES (12, 'DIREC. GEN.', 'DIRECTORES GENERALES');
INSERT INTO public.mrrhh_grupos_empleados VALUES (13, 'DIREC. LIN.', 'DIRECTORES DE LINEA');
INSERT INTO public.mrrhh_grupos_empleados VALUES (14, 'JEF. DIV.', 'JEFES DE DIVISION');
INSERT INTO public.mrrhh_grupos_empleados VALUES (15, 'COO. AREA', 'COORDINADORES DE AREA');


--
-- TOC entry 6981 (class 0 OID 40064)
-- Dependencies: 253
-- Data for Name: mrrhh_niveles_empleados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7038 (class 0 OID 40468)
-- Dependencies: 310
-- Data for Name: mrrhh_empleados_contratados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7037 (class 0 OID 40432)
-- Dependencies: 309
-- Data for Name: mrrhh_empleados_fijos; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7266 (class 0 OID 44496)
-- Dependencies: 538
-- Data for Name: mrrhh_fin; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7273 (class 0 OID 44598)
-- Dependencies: 545
-- Data for Name: mrrhh_fin_obreros; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7276 (class 0 OID 44661)
-- Dependencies: 548
-- Data for Name: mrrhh_fin_obrerosx; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7270 (class 0 OID 44548)
-- Dependencies: 542
-- Data for Name: mrrhh_finx; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7278 (class 0 OID 44706)
-- Dependencies: 550
-- Data for Name: mrrhh_formulacion; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6977 (class 0 OID 40045)
-- Dependencies: 249
-- Data for Name: mrrhh_grupos_cementerio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6975 (class 0 OID 40034)
-- Dependencies: 247
-- Data for Name: mrrhh_grupos_jubilados_empleados; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_grupos_jubilados_empleados VALUES (1, 'BI', 'BI (ADM I - II)');
INSERT INTO public.mrrhh_grupos_jubilados_empleados VALUES (2, 'BII', 'BII (ADM III)');
INSERT INTO public.mrrhh_grupos_jubilados_empleados VALUES (3, 'BIII', 'BIII (ADM IV - V)');
INSERT INTO public.mrrhh_grupos_jubilados_empleados VALUES (4, 'TI', 'TI (P I - II)');
INSERT INTO public.mrrhh_grupos_jubilados_empleados VALUES (5, 'TII', 'TII (P III - IV)');
INSERT INTO public.mrrhh_grupos_jubilados_empleados VALUES (6, 'PI', 'PI (U I - II)');
INSERT INTO public.mrrhh_grupos_jubilados_empleados VALUES (7, 'PII', 'PII (U III)');
INSERT INTO public.mrrhh_grupos_jubilados_empleados VALUES (8, 'PIII', 'PIII (U IV - V)');
INSERT INTO public.mrrhh_grupos_jubilados_empleados VALUES (9, 'MIN.', 'MINISTRO');
INSERT INTO public.mrrhh_grupos_jubilados_empleados VALUES (10, 'VIC.MIN.', 'VICEMINISTROS');
INSERT INTO public.mrrhh_grupos_jubilados_empleados VALUES (11, 'MAX. AUTORID.', 'MAXIMAS AUTORIDADES DE ORGANOS Y ENTES ADSCRITOS');
INSERT INTO public.mrrhh_grupos_jubilados_empleados VALUES (12, 'DIREC. GEN.', 'DIRECTORES GENERALES');
INSERT INTO public.mrrhh_grupos_jubilados_empleados VALUES (13, 'DIREC. LIN.', 'DIRECTORES DE LINEA');
INSERT INTO public.mrrhh_grupos_jubilados_empleados VALUES (14, 'JEF. DIV.', 'JEFES DE DIVISION');
INSERT INTO public.mrrhh_grupos_jubilados_empleados VALUES (15, 'COO. AREA', 'COORDINADORES DE AREA');


--
-- TOC entry 6971 (class 0 OID 40012)
-- Dependencies: 243
-- Data for Name: mrrhh_grupos_obreros_no_permanentes; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_grupos_obreros_no_permanentes VALUES (1, 'RT', 'ROTATIVO');


--
-- TOC entry 6973 (class 0 OID 40023)
-- Dependencies: 245
-- Data for Name: mrrhh_grupos_proteccion_civil; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (1, 'OPC 1-1', 'OFICIAL DE PROTECCION CIVIL I');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (2, 'OPC 1-2', 'OFICIAL DE PROTECCION CIVIL I');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (3, 'OPC 1-3', 'OFICIAL DE PROTECCION CIVIL I');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (4, 'OPC 2-4', 'OFICIAL DE PROTECCION CIVIL II');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (5, 'OPC 2-5', 'OFICIAL DE PROTECCION CIVIL II');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (6, 'OPC 2-6', 'OFICIAL DE PROTECCION CIVIL II');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (7, 'OPC 3-7', 'OFICIAL DE PROTECCION CIVIL III');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (8, 'OPC 3-8', 'OFICIAL DE PROTECCION CIVIL III');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (9, 'OPC 3-9', 'OFICIAL DE PROTECCION CIVIL III');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (10, 'OSPC 1-10', 'OFICIAL SUPERVISOR DE PROTECCION CIVIL I');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (11, 'OSPC 1-11', 'OFICIAL SUPERVISOR DE PROTECCION CIVIL I');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (12, 'OSPC 1-12', 'OFICIAL SUPERVISOR DE PROTECCION CIVIL I');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (13, 'OSPC 2-13', 'OFICIAL SUPERVISOR DE PROTECCION CIVIL II');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (14, 'OSPC 2-14', 'OFICIAL SUPERVISOR DE PROTECCION CIVIL II');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (15, 'OSPC 2-15', 'OFICIAL SUPERVISOR DE PROTECCION CIVIL II');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (16, 'OSPC 3-16', 'OFICIAL SUPERVISOR DE PROTECCION CIVIL III');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (17, 'OSPC 3-17', 'OFICIAL SUPERVISOR DE PROTECCION CIVIL III');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (18, 'OSPC 3-18', 'OFICIAL SUPERVISOR DE PROTECCION CIVIL III');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (19, 'CPC 1-19', 'COORDINACION DE PROTECCION CIVIL I');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (20, 'CPC 1-20', 'COORDINACION DE PROTECCION CIVIL I');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (21, 'CPC 1-21', 'COORDINACION DE PROTECCION CIVIL I');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (22, 'CPC 2-22', 'COORDINACION DE PROTECCION CIVIL II');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (23, 'CPC 2-23', 'COORDINACION DE PROTECCION CIVIL II');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (24, 'CPC 2-24', 'COORDINACION DE PROTECCION CIVIL II');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (25, 'CGPC 25', 'COORDINACION GENERAL DE PROTECCION CIVIL');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (26, 'CGPC 26', 'COORDINACION GENERAL DE PROTECCION CIVIL');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (27, 'CGPC 27', 'COORDINACION GENERAL DE PROTECCION CIVIL');
INSERT INTO public.mrrhh_grupos_proteccion_civil VALUES (28, 'CGPC 28', 'COORDINACION GENERAL DE PROTECCION CIVIL');


--
-- TOC entry 7206 (class 0 OID 43669)
-- Dependencies: 478
-- Data for Name: mrrhh_hist_am_cementerio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7209 (class 0 OID 43716)
-- Dependencies: 481
-- Data for Name: mrrhh_hist_am_comision_servicio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7170 (class 0 OID 43105)
-- Dependencies: 442
-- Data for Name: mrrhh_hist_am_directivos; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7167 (class 0 OID 43058)
-- Dependencies: 439
-- Data for Name: mrrhh_hist_am_empleados_contratados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7164 (class 0 OID 43011)
-- Dependencies: 436
-- Data for Name: mrrhh_hist_am_empleados_fijos; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7182 (class 0 OID 43293)
-- Dependencies: 454
-- Data for Name: mrrhh_hist_am_empleados_jubilados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7188 (class 0 OID 43387)
-- Dependencies: 460
-- Data for Name: mrrhh_hist_am_empleados_pensionados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7194 (class 0 OID 43481)
-- Dependencies: 466
-- Data for Name: mrrhh_hist_am_empleados_pensionados_especiales; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7191 (class 0 OID 43434)
-- Dependencies: 463
-- Data for Name: mrrhh_hist_am_empleados_pensionados_sobrevivientes; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7212 (class 0 OID 43763)
-- Dependencies: 484
-- Data for Name: mrrhh_hist_am_honorario_profesionales; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7176 (class 0 OID 43199)
-- Dependencies: 448
-- Data for Name: mrrhh_hist_am_obreros_contratados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7173 (class 0 OID 43152)
-- Dependencies: 445
-- Data for Name: mrrhh_hist_am_obreros_fijos; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7185 (class 0 OID 43340)
-- Dependencies: 457
-- Data for Name: mrrhh_hist_am_obreros_jubilados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7179 (class 0 OID 43246)
-- Dependencies: 451
-- Data for Name: mrrhh_hist_am_obreros_no_permanentes; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7200 (class 0 OID 43575)
-- Dependencies: 472
-- Data for Name: mrrhh_hist_am_obreros_pensionados_especiales; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7197 (class 0 OID 43528)
-- Dependencies: 469
-- Data for Name: mrrhh_hist_am_obreros_pensionados_sobrevivientes; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7203 (class 0 OID 43622)
-- Dependencies: 475
-- Data for Name: mrrhh_hist_am_proteccion_civil; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7155 (class 0 OID 42870)
-- Dependencies: 427
-- Data for Name: mrrhh_hist_be_cementerio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7158 (class 0 OID 42917)
-- Dependencies: 430
-- Data for Name: mrrhh_hist_be_comision_servicio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7119 (class 0 OID 42306)
-- Dependencies: 391
-- Data for Name: mrrhh_hist_be_directivos; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7116 (class 0 OID 42259)
-- Dependencies: 388
-- Data for Name: mrrhh_hist_be_empleados_contratados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7113 (class 0 OID 42212)
-- Dependencies: 385
-- Data for Name: mrrhh_hist_be_empleados_fijos; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7131 (class 0 OID 42494)
-- Dependencies: 403
-- Data for Name: mrrhh_hist_be_empleados_jubilados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7137 (class 0 OID 42588)
-- Dependencies: 409
-- Data for Name: mrrhh_hist_be_empleados_pensionados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7143 (class 0 OID 42682)
-- Dependencies: 415
-- Data for Name: mrrhh_hist_be_empleados_pensionados_especiales; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7140 (class 0 OID 42635)
-- Dependencies: 412
-- Data for Name: mrrhh_hist_be_empleados_pensionados_sobrevivientes; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7161 (class 0 OID 42964)
-- Dependencies: 433
-- Data for Name: mrrhh_hist_be_honorario_profesionales; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7125 (class 0 OID 42400)
-- Dependencies: 397
-- Data for Name: mrrhh_hist_be_obreros_contratados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7122 (class 0 OID 42353)
-- Dependencies: 394
-- Data for Name: mrrhh_hist_be_obreros_fijos; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7134 (class 0 OID 42541)
-- Dependencies: 406
-- Data for Name: mrrhh_hist_be_obreros_jubilados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7128 (class 0 OID 42447)
-- Dependencies: 400
-- Data for Name: mrrhh_hist_be_obreros_no_permanentes; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7149 (class 0 OID 42776)
-- Dependencies: 421
-- Data for Name: mrrhh_hist_be_obreros_pensionados_especiales; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7146 (class 0 OID 42729)
-- Dependencies: 418
-- Data for Name: mrrhh_hist_be_obreros_pensionados_sobrevivientes; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7152 (class 0 OID 42823)
-- Dependencies: 424
-- Data for Name: mrrhh_hist_be_proteccion_civil; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7036 (class 0 OID 40418)
-- Dependencies: 308
-- Data for Name: mrrhh_historial; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7104 (class 0 OID 42026)
-- Dependencies: 376
-- Data for Name: mrrhh_historico_cementerio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7107 (class 0 OID 42088)
-- Dependencies: 379
-- Data for Name: mrrhh_historico_comision_servicio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7068 (class 0 OID 41279)
-- Dependencies: 340
-- Data for Name: mrrhh_historico_directivos; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7065 (class 0 OID 41217)
-- Dependencies: 337
-- Data for Name: mrrhh_historico_empleados_contratados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7062 (class 0 OID 41155)
-- Dependencies: 334
-- Data for Name: mrrhh_historico_empleados_fijos; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7080 (class 0 OID 41527)
-- Dependencies: 352
-- Data for Name: mrrhh_historico_empleados_jubilados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7086 (class 0 OID 41651)
-- Dependencies: 358
-- Data for Name: mrrhh_historico_empleados_pensionados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7092 (class 0 OID 41775)
-- Dependencies: 364
-- Data for Name: mrrhh_historico_empleados_pensionados_especiales; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7089 (class 0 OID 41713)
-- Dependencies: 361
-- Data for Name: mrrhh_historico_empleados_pensionados_sobrevivientes; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7110 (class 0 OID 42150)
-- Dependencies: 382
-- Data for Name: mrrhh_historico_honorario_profesionales; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7074 (class 0 OID 41403)
-- Dependencies: 346
-- Data for Name: mrrhh_historico_obreros_contratados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7071 (class 0 OID 41341)
-- Dependencies: 343
-- Data for Name: mrrhh_historico_obreros_fijos; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7083 (class 0 OID 41589)
-- Dependencies: 355
-- Data for Name: mrrhh_historico_obreros_jubilados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7077 (class 0 OID 41465)
-- Dependencies: 349
-- Data for Name: mrrhh_historico_obreros_no_permanentes; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7098 (class 0 OID 41899)
-- Dependencies: 370
-- Data for Name: mrrhh_historico_obreros_pensionados_especiales; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7095 (class 0 OID 41837)
-- Dependencies: 367
-- Data for Name: mrrhh_historico_obreros_pensionados_sobrevivientes; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7220 (class 0 OID 43884)
-- Dependencies: 492
-- Data for Name: mrrhh_historico_personalizada; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7222 (class 0 OID 43928)
-- Dependencies: 494
-- Data for Name: mrrhh_historico_personalizadax; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7101 (class 0 OID 41961)
-- Dependencies: 373
-- Data for Name: mrrhh_historico_proteccion_civil; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7282 (class 0 OID 44746)
-- Dependencies: 554
-- Data for Name: mrrhh_historico_retroactivo; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7342 (class 0 OID 45385)
-- Dependencies: 615
-- Data for Name: mrrhh_historico_retroactivo_nomina; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7352 (class 0 OID 45549)
-- Dependencies: 625
-- Data for Name: mrrhh_historico_retroactivo_nominaam; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7354 (class 0 OID 45592)
-- Dependencies: 627
-- Data for Name: mrrhh_historico_retroactivo_nominaamx; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7347 (class 0 OID 45467)
-- Dependencies: 620
-- Data for Name: mrrhh_historico_retroactivo_nominabe; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7349 (class 0 OID 45510)
-- Dependencies: 622
-- Data for Name: mrrhh_historico_retroactivo_nominabex; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7344 (class 0 OID 45428)
-- Dependencies: 617
-- Data for Name: mrrhh_historico_retroactivo_nominax; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7287 (class 0 OID 44856)
-- Dependencies: 559
-- Data for Name: mrrhh_historico_retroactivo_v; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7290 (class 0 OID 44914)
-- Dependencies: 562
-- Data for Name: mrrhh_historico_retroactivo_vx; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7284 (class 0 OID 44800)
-- Dependencies: 556
-- Data for Name: mrrhh_historico_retroactivox; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7053 (class 0 OID 41022)
-- Dependencies: 325
-- Data for Name: mrrhh_honorario_profesionales; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7244 (class 0 OID 44152)
-- Dependencies: 516
-- Data for Name: mrrhh_horas_extras_empleados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7248 (class 0 OID 44197)
-- Dependencies: 520
-- Data for Name: mrrhh_horas_extras_obreros; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7018 (class 0 OID 40294)
-- Dependencies: 290
-- Data for Name: mrrhh_jubilados_empleados_cargo; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7043 (class 0 OID 40650)
-- Dependencies: 315
-- Data for Name: mrrhh_jubilados_empleados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7044 (class 0 OID 40688)
-- Dependencies: 316
-- Data for Name: mrrhh_jubilados_obreros; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6993 (class 0 OID 40142)
-- Dependencies: 265
-- Data for Name: mrrhh_niveles_cementerio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6991 (class 0 OID 40129)
-- Dependencies: 263
-- Data for Name: mrrhh_niveles_empleados_jubilados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6987 (class 0 OID 40103)
-- Dependencies: 259
-- Data for Name: mrrhh_niveles_obreros_no_permanentes; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6989 (class 0 OID 40116)
-- Dependencies: 261
-- Data for Name: mrrhh_niveles_proteccion_civil; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7041 (class 0 OID 40577)
-- Dependencies: 313
-- Data for Name: mrrhh_obreros_contratados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7040 (class 0 OID 40541)
-- Dependencies: 312
-- Data for Name: mrrhh_obreros_fijos; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7042 (class 0 OID 40613)
-- Dependencies: 314
-- Data for Name: mrrhh_obreros_no_permanentes; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7045 (class 0 OID 40726)
-- Dependencies: 317
-- Data for Name: mrrhh_pensionados_empleados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7047 (class 0 OID 40802)
-- Dependencies: 319
-- Data for Name: mrrhh_pensionados_especiales_empleados; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7049 (class 0 OID 40878)
-- Dependencies: 321
-- Data for Name: mrrhh_pensionados_especiales_obreros; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7046 (class 0 OID 40764)
-- Dependencies: 318
-- Data for Name: mrrhh_pensionados_sobrevivientes_e; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7048 (class 0 OID 40840)
-- Dependencies: 320
-- Data for Name: mrrhh_pensionados_sobrevivientes_o; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7224 (class 0 OID 43966)
-- Dependencies: 496
-- Data for Name: mrrhh_personalizada_partidas; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7215 (class 0 OID 43810)
-- Dependencies: 487
-- Data for Name: mrrhh_prestaciones_sociales; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7217 (class 0 OID 43849)
-- Dependencies: 489
-- Data for Name: mrrhh_prestaciones_socialesx; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7022 (class 0 OID 40316)
-- Dependencies: 294
-- Data for Name: mrrhh_primas; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_primas VALUES (1, 'Prima Hijos', 100000.00);
INSERT INTO public.mrrhh_primas VALUES (2, 'Prima Hogar', 100000.00);


--
-- TOC entry 7050 (class 0 OID 40916)
-- Dependencies: 322
-- Data for Name: mrrhh_proteccion_civil; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6952 (class 0 OID 39810)
-- Dependencies: 224
-- Data for Name: presupuesto_egresos; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.presupuesto_egresos VALUES (1, '4.00.00.00.00', 'EGRESOS');
INSERT INTO public.presupuesto_egresos VALUES (2, '4.01.00.00.00', 'GASTOS DE PERSONAL');
INSERT INTO public.presupuesto_egresos VALUES (3, '4.01.01.00.00', 'Sueldos, salarios y otras retribuciones');
INSERT INTO public.presupuesto_egresos VALUES (4, '4.01.01.01.00', 'Sueldos basicos personal fijo a tiempo completo');
INSERT INTO public.presupuesto_egresos VALUES (5, '4.01.01.02.00', 'Sueldos basicos personal fijo a tiempo parcial');
INSERT INTO public.presupuesto_egresos VALUES (6, '4.01.01.03.00', 'Suplencias a empleados');
INSERT INTO public.presupuesto_egresos VALUES (7, '4.01.01.08.00', 'Sueldo al personal en tramite de nombramiento');
INSERT INTO public.presupuesto_egresos VALUES (8, '4.01.01.09.00', 'Remuneraciones al personal en periodo de disponibilidad');
INSERT INTO public.presupuesto_egresos VALUES (9, '4.01.01.10.00', 'Salarios a obreros en puestos permanentes a tiempo completo');
INSERT INTO public.presupuesto_egresos VALUES (10, '4.01.01.11.00', 'Salarios a obreros en puestos permanentes a tiempo parcial');
INSERT INTO public.presupuesto_egresos VALUES (11, '4.01.01.12.00', 'Salarios a obreros en puestos no permanentes');
INSERT INTO public.presupuesto_egresos VALUES (12, '4.01.01.13.00', 'Suplencias a obreros');
INSERT INTO public.presupuesto_egresos VALUES (13, '4.01.01.18.00', 'Remuneraciones al personal contratado a tiempo determinado');
INSERT INTO public.presupuesto_egresos VALUES (14, '4.01.01.18.01', 'Remuneraciones al personal contratado a tiempo determinado');
INSERT INTO public.presupuesto_egresos VALUES (15, '4.01.01.18.02', 'Remuneraciones por honorarios profesionales Retribuciones por becas - salarios, bolsas de trabajo, pasantias y similares');
INSERT INTO public.presupuesto_egresos VALUES (16, '4.01.01.19.00', 'Remuneraciones por honorarios profesionales Retribuciones por becas - salarios, bolsas de trabajo, pasantias y similares');
INSERT INTO public.presupuesto_egresos VALUES (17, '4.01.01.20.00', 'Sueldo del personal militar profesional');
INSERT INTO public.presupuesto_egresos VALUES (18, '4.01.01.21.00', 'Sueldo o racion del personal militar no profesional');
INSERT INTO public.presupuesto_egresos VALUES (19, '4.01.01.22.00', 'Sueldo del personal militar de reserva');
INSERT INTO public.presupuesto_egresos VALUES (20, '4.01.01.29.00', 'Dietas');
INSERT INTO public.presupuesto_egresos VALUES (21, '4.01.01.30.00', 'Retribucion al personal de reserva');
INSERT INTO public.presupuesto_egresos VALUES (22, '4.01.01.35.00', 'Sueldo basico de los altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (23, '4.01.01.36.00', 'Sueldo basico del personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (24, '4.01.01.37.00', 'Dietas de los altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (25, '4.01.01.38.00', 'Dietas del personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (26, '4.01.01.99.00', 'Otras retribuciones');
INSERT INTO public.presupuesto_egresos VALUES (27, '4.01.02.00.00', 'Compensaciones previstas en las escalas de sueldos y salarios');
INSERT INTO public.presupuesto_egresos VALUES (28, '4.01.02.01.00', 'Compensaciones previstas en las escalas de sueldos al personal empleado fijo a tiempo completo');
INSERT INTO public.presupuesto_egresos VALUES (29, '4.01.02.02.00', 'Compensaciones previstas en las escalas de sueldos al personal empleado fijo a tiempo parcial ');
INSERT INTO public.presupuesto_egresos VALUES (30, '4.01.02.03.00', 'Compensaciones previstas en las escalas de salarios al personal obrero fijo a tiempo completo');
INSERT INTO public.presupuesto_egresos VALUES (31, '4.01.02.04.00', 'Compensaciones previstas en las escalas de salarios al personal obrero fijo a tiempo parcial');
INSERT INTO public.presupuesto_egresos VALUES (32, '4.01.02.05.00', 'Compensaciones previstas en las escalas de sueldos al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (33, '4.01.02.06.00', 'Compensaciones previstas en las escalas de sueldos de los altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (34, '4.01.02.07.00', 'Compensaciones previstas en las escalas de sueldos del personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (35, '4.01.03.00.00', 'Primas');
INSERT INTO public.presupuesto_egresos VALUES (36, '4.01.03.01.00', 'Primas por merito a empleados');
INSERT INTO public.presupuesto_egresos VALUES (37, '4.01.03.02.00', 'Primas de transporte a empleados');
INSERT INTO public.presupuesto_egresos VALUES (38, '4.01.03.03.00', 'Primas por hogar a empleados');
INSERT INTO public.presupuesto_egresos VALUES (39, '4.01.03.04.00', 'Primas por hijos a empleados');
INSERT INTO public.presupuesto_egresos VALUES (40, '4.01.03.05.00', 'Primas por alquileres a empleados');
INSERT INTO public.presupuesto_egresos VALUES (41, '4.01.03.06.00', 'Primas por residencia a empleados');
INSERT INTO public.presupuesto_egresos VALUES (42, '4.01.03.07.00', 'Primas por categoria de escuelas a empleados');
INSERT INTO public.presupuesto_egresos VALUES (43, '4.01.03.08.00', 'Primas de profesionalizacion a empleados');
INSERT INTO public.presupuesto_egresos VALUES (44, '4.01.03.09.00', 'Primas por antigüedad a empleados');
INSERT INTO public.presupuesto_egresos VALUES (45, '4.01.03.10.00', 'Primas por jerarquia o responsabilidad en el cargo');
INSERT INTO public.presupuesto_egresos VALUES (46, '4.01.03.11.00', 'Primas al personal en servicio en el exterior');
INSERT INTO public.presupuesto_egresos VALUES (47, '4.01.03.16.00', 'Primas por merito a obreros');
INSERT INTO public.presupuesto_egresos VALUES (48, '4.01.03.17.00', 'Primas de transporte a obreros');
INSERT INTO public.presupuesto_egresos VALUES (49, '4.01.03.18.00', 'Primas por hogar a obreros');
INSERT INTO public.presupuesto_egresos VALUES (50, '4.01.03.19.00', 'Primas por hijos de obreros');
INSERT INTO public.presupuesto_egresos VALUES (51, '4.01.03.20.00', 'Primas por residencia a obreros');
INSERT INTO public.presupuesto_egresos VALUES (52, '4.01.03.21.00', 'Primas por antigüedad a obreros');
INSERT INTO public.presupuesto_egresos VALUES (53, '4.01.03.22.00', 'Primas de profesionalizacion a obreros');
INSERT INTO public.presupuesto_egresos VALUES (54, '4.01.03.26.00', 'Primas por hijos al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (55, '4.01.03.27.00', 'Primas de profesionalizacion al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (56, '4.01.03.28.00', 'Primas por antigüedad al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (57, '4.01.03.29.00', 'Primas por potencial de ascenso al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (58, '4.01.03.30.00', 'Primas por frontera y sitios inhospitos al personal militar y de seguridad');
INSERT INTO public.presupuesto_egresos VALUES (59, '4.01.03.31.00', 'Primas por riesgo al personal militar y de seguridad');
INSERT INTO public.presupuesto_egresos VALUES (60, '4.01.03.37.00', 'Primas de transporte al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (61, '4.01.03.38.00', 'Primas por hogar al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (62, '4.01.03.39.00', 'Primas por hijos al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (63, '4.01.03.40.00', 'Primas de profesionalizacion al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (64, '4.01.03.41.00', 'Primas por antigüedad al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (65, '4.01.03.46.00', 'Primas a los altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (66, '4.01.03.47.00', 'Primas al personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (67, '4.01.03.94.00', 'Otras primas a los altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (68, '4.01.03.95.00', 'Otras primas al personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (69, '4.01.03.96.00', 'Otras primas al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (70, '4.01.03.97.00', 'Otras primas a empleados');
INSERT INTO public.presupuesto_egresos VALUES (71, '4.01.03.98.00', 'Otras primas a obreros');
INSERT INTO public.presupuesto_egresos VALUES (72, '4.01.03.99.00', 'Otras primas al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (73, '4.01.04.00.00', 'Complementos de sueldos y salarios');
INSERT INTO public.presupuesto_egresos VALUES (74, '4.01.04.01.00', 'Complemento a empleados por horas extraordinarias o por sobre tiempo');
INSERT INTO public.presupuesto_egresos VALUES (75, '4.01.04.02.00', 'Complemento a empleados por trabajo nocturno');
INSERT INTO public.presupuesto_egresos VALUES (76, '4.01.04.03.00', 'Complemento a empleados por gastos de alimentacion');
INSERT INTO public.presupuesto_egresos VALUES (77, '4.01.04.04.00', 'Complemento a empleados por gastos de transporte');
INSERT INTO public.presupuesto_egresos VALUES (78, '4.01.04.05.00', 'Complemento a empleados por gastos de representacion');
INSERT INTO public.presupuesto_egresos VALUES (79, '4.01.04.06.00', 'Complemento a empleados por comision de servicios');
INSERT INTO public.presupuesto_egresos VALUES (80, '4.01.04.07.00', 'Bonificacion a empleados');
INSERT INTO public.presupuesto_egresos VALUES (81, '4.01.04.08.00', 'Bono compensatorio de alimentacion a empleados');
INSERT INTO public.presupuesto_egresos VALUES (299, '4.02.06.08.00', 'Productos plasticos');
INSERT INTO public.presupuesto_egresos VALUES (82, '4.01.04.09.00', 'Bono compensatorio de transporte a empleados');
INSERT INTO public.presupuesto_egresos VALUES (306, '4.02.07.04.00', 'Cemento, cal y yeso');
INSERT INTO public.presupuesto_egresos VALUES (83, '4.01.04.10.00', 'Complemento a empleados por dias feriados');
INSERT INTO public.presupuesto_egresos VALUES (84, '4.01.04.14.00', 'Complemento a obreros por horas extraordinarias o por sobre tiempo');
INSERT INTO public.presupuesto_egresos VALUES (85, '4.01.04.15.00', 'Complemento a obreros por trabajo o jornada nocturna');
INSERT INTO public.presupuesto_egresos VALUES (86, '4.01.04.16.00', 'Complemento a obreros por gastos de alimentacion');
INSERT INTO public.presupuesto_egresos VALUES (87, '4.01.04.17.00', 'Complemento a obreros por gastos de transporte');
INSERT INTO public.presupuesto_egresos VALUES (88, '4.01.04.18.00', 'Bono compensatorio de alimentacion a obreros');
INSERT INTO public.presupuesto_egresos VALUES (89, '4.01.04.19.00', 'Bono compensatorio de transporte a obreros');
INSERT INTO public.presupuesto_egresos VALUES (90, '4.01.04.20.00', 'Complemento a obreros por dias feriados');
INSERT INTO public.presupuesto_egresos VALUES (91, '4.01.04.24.00', 'Complemento al personal contratado por horas extraordinarias o por sobre tiempo');
INSERT INTO public.presupuesto_egresos VALUES (92, '4.01.04.25.00', 'Complemento al personal contratado por gastos de alimentacion');
INSERT INTO public.presupuesto_egresos VALUES (93, '4.01.04.26.00', 'Bono compensatorio de alimentacion al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (94, '4.01.04.27.00', 'Bono compensatorio de transporte al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (95, '4.01.04.28.00', 'Complemento al personal contratado por dias feriados');
INSERT INTO public.presupuesto_egresos VALUES (96, '4.01.04.32.00', 'Complemento al personal militar por gastos de alimentacion');
INSERT INTO public.presupuesto_egresos VALUES (97, '4.01.04.33.00', 'Complemento al personal militar por gastos de transporte');
INSERT INTO public.presupuesto_egresos VALUES (98, '4.01.04.34.00', 'Complemento al personal militar en el exterior');
INSERT INTO public.presupuesto_egresos VALUES (99, '4.01.04.35.00', 'Bono compensatorio de alimentacion al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (100, '4.01.04.43.00', 'Complemento a altos funcionarios y altas funcionarias del poder publico y de eleccion popular por gastos de representacion');
INSERT INTO public.presupuesto_egresos VALUES (101, '4.01.04.44.00', 'Complemento a altos funcionarios y altas funcionarias del poder publico y de eleccion popular por comision de servicios');
INSERT INTO public.presupuesto_egresos VALUES (102, '4.01.04.45.00', 'Bonificacion a altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (103, '4.01.04.46.00', 'Bono compensatorio de alimentacion a altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (104, '4.01.04.47.00', 'Bono compensatorio de transporte a altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (105, '4.01.04.48.00', 'Complemento al personal de alto nivel y de direccion por gastos de representacion');
INSERT INTO public.presupuesto_egresos VALUES (106, '4.01.04.49.00', 'Complemento al personal de alto nivel y de direccion por comision de servicios');
INSERT INTO public.presupuesto_egresos VALUES (107, '4.01.04.50.00', 'Bonificacion al personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (108, '4.01.04.51.00', 'Bono compensatorio de alimentacion al personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (109, '4.01.04.52.00', 'Bono compensatorio de transporte al personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (110, '4.01.04.94.00', 'Otros complementos a altos funcionarios y altas funcionarias del sector publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (111, '4.01.04.95.00', 'Otros complementos al personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (112, '4.01.04.96.00', 'Otros complementos a empleados');
INSERT INTO public.presupuesto_egresos VALUES (113, '4.01.04.97.00', 'Otros complementos a obreros ');
INSERT INTO public.presupuesto_egresos VALUES (114, '4.01.04.98.00', 'Otros complementos al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (115, '4.01.04.99.00', 'Otros complementos al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (116, '4.01.05.00.00', 'Aguinaldos, utilidades o bonificacion legal, y bono vacacional');
INSERT INTO public.presupuesto_egresos VALUES (117, '4.01.05.01.00', 'Aguinaldos a empleados');
INSERT INTO public.presupuesto_egresos VALUES (118, '4.01.05.02.00', 'Utilidades legales y convencionales a empleados');
INSERT INTO public.presupuesto_egresos VALUES (119, '4.01.05.03.00', 'Bono vacacional a empleados');
INSERT INTO public.presupuesto_egresos VALUES (120, '4.01.05.04.00', 'Aguinaldos a obreros');
INSERT INTO public.presupuesto_egresos VALUES (121, '4.01.05.05.00', 'Utilidades legales y convencionales a obreros');
INSERT INTO public.presupuesto_egresos VALUES (122, '4.01.05.06.00', 'Bono vacacional a obreros');
INSERT INTO public.presupuesto_egresos VALUES (123, '4.01.05.07.00', 'Aguinaldos al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (124, '4.01.05.08.00', 'Bono vacacional al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (125, '4.01.05.09.00', 'Aguinaldos al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (126, '4.01.05.10.00', 'Bono vacacional al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (127, '4.01.05.13.00', 'Aguinaldos a altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (128, '4.01.05.14.00', 'Utilidades legales y convencionales a altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (129, '4.01.05.15.00', 'Bono vacacional a altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (130, '4.01.05.16.00', 'Aguinaldos al personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (131, '4.01.05.17.00', 'Utilidades legales y convencionales al personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (132, '4.01.05.18.00', 'Bono vacacional al personal de alto nivel y de direccion ');
INSERT INTO public.presupuesto_egresos VALUES (133, '4.01.06.00.00', 'Aportes patronales y legales');
INSERT INTO public.presupuesto_egresos VALUES (134, '4.01.06.01.00', 'Aporte patronal al Instituto Venezolano de los Seguros Sociales (IVSS) por empleados');
INSERT INTO public.presupuesto_egresos VALUES (135, '4.01.06.02.00', 'Aporte patronal al Instituto de Prevision y Asistencia Social para el personal del Ministerio de Educacion (Ipasme) por empleados');
INSERT INTO public.presupuesto_egresos VALUES (136, '4.01.06.03.00', 'Aporte patronal al Fondo de Jubilaciones por empleados');
INSERT INTO public.presupuesto_egresos VALUES (137, '4.01.06.04.00', 'Aporte patronal al Fondo de Seguro de Paro Forzoso por empleados');
INSERT INTO public.presupuesto_egresos VALUES (138, '4.01.06.05.00', 'Aporte patronal al Fondo de Ahorro Obligatorio para la Vivienda por empleados');
INSERT INTO public.presupuesto_egresos VALUES (139, '4.01.06.06.00', 'Aporte patronal al Instituto Nacional de Capacitacion y Educacion Socialista (Inces) por empleados');
INSERT INTO public.presupuesto_egresos VALUES (140, '4.01.06.10.00', 'Aporte patronal al Instituto Venezolano de los Seguros Sociales (IVSS) por obreros');
INSERT INTO public.presupuesto_egresos VALUES (141, '4.01.06.11.00', 'Aporte patronal al Fondo de Jubilaciones por obreros');
INSERT INTO public.presupuesto_egresos VALUES (142, '4.01.06.12.00', 'Aporte patronal al Fondo de Seguro de Paro Forzoso por obreros');
INSERT INTO public.presupuesto_egresos VALUES (143, '4.01.06.13.00', 'Aporte patronal al Fondo de Ahorro Obligatorio para la Vivienda por obreros');
INSERT INTO public.presupuesto_egresos VALUES (144, '4.01.06.14.00', 'Aporte patronal al Instituto Nacional de Capacitacion y Educacion Socialista (Inces) por obreros');
INSERT INTO public.presupuesto_egresos VALUES (145, '4.01.06.18.00', 'Aporte patronal a los organismos de seguridad social por los trabajadores locales empleados en las representaciones de Venezuela en el exterior');
INSERT INTO public.presupuesto_egresos VALUES (146, '4.01.06.19.00', 'Aporte patronal al Fondo de Ahorro Obligatorio para la Vivienda por personal militar');
INSERT INTO public.presupuesto_egresos VALUES (147, '4.01.06.25.00', 'Aporte legal al Instituto Venezolano de los Seguros Sociales (IVSS) por personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (148, '4.01.06.26.00', 'Aporte patronal al Fondo de Ahorro Obligatorio para la Vivienda por personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (149, '4.01.06.27.00', 'Aporte patronal al Fondo de Seguro de Paro Forzoso por personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (150, '4.01.06.28.00', 'Aporte patronal al Fondo de Jubilaciones por personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (388, '4.03.07.01.00', 'Publicidad y propaganda');
INSERT INTO public.presupuesto_egresos VALUES (151, '4.01.06.29.00', 'Aporte patronal al Instituto Nacional de Capacitacion y Educacion Socialista (Inces) por personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (216, '4.01.07.67.00', 'Ayudas para medicinas, gastos medicos, odontologicos y de hospitalizacion al personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (152, '4.01.06.31.00', 'Aporte patronal al Instituto Venezolano de los Seguros Sociales (IVSS) por altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (153, '4.01.06.32.00', 'Aporte patronal al Instituto de Prevision y Asistencia Social para el personal del Ministerio de Educacion (Ipasme) por altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (154, '4.01.06.33.00', 'Aporte patronal al Fondo de Jubilaciones por altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (155, '4.01.06.34.00', 'Aporte patronal al Fondo de Ahorro Obligatorio para la Vivienda por altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (156, '4.01.06.35.00', 'Aporte patronal al Fondo de Seguro de Paro Forzoso por altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (157, '4.01.06.39.00', 'Aporte patronal al Instituto Venezolano de los Seguros Sociales (IVSS) por personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (158, '4.01.06.40.00', 'Aporte patronal al Instituto de Prevision y Asistencia Social para el personal del Ministerio de Educacion (Ipasme) por personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (159, '4.01.06.41.00', 'Aporte patronal al Fondo de Jubilaciones por personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (160, '4.01.06.42.00', 'Aporte patronal al Fondo de Ahorro Obligatorio para la Vivienda por personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (161, '4.01.06.43.00', 'Aporte patronal al Fondo de Seguro de Paro Forzoso por personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (162, '4.01.06.44.00', 'Aporte patronal al Instituto Nacional de Capacitacion y Educacion Socialista (Inces) por personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (163, '4.01.06.93.00', 'Otros aportes legales por altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (164, '4.01.06.94.00', 'Otros aportes legales por el personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (165, '4.01.06.95.00', 'Otros aportes legales por personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (166, '4.01.06.96.00', 'Otros aportes legales por empleados');
INSERT INTO public.presupuesto_egresos VALUES (167, '4.01.06.97.00', 'Otros aportes legales por obreros');
INSERT INTO public.presupuesto_egresos VALUES (168, '4.01.06.98.00', 'Otros aportes legales por personal militar');
INSERT INTO public.presupuesto_egresos VALUES (169, '4.01.07.00.00', 'Asistencia socio-economica');
INSERT INTO public.presupuesto_egresos VALUES (170, '4.01.07.01.00', 'Capacitacion y adiestramiento a empleados');
INSERT INTO public.presupuesto_egresos VALUES (171, '4.01.07.02.00', 'Becas a empleados');
INSERT INTO public.presupuesto_egresos VALUES (172, '4.01.07.03.00', 'Ayudas por matrimonio a empleados');
INSERT INTO public.presupuesto_egresos VALUES (173, '4.01.07.04.00', 'Ayudas por nacimiento de hijos a empleados');
INSERT INTO public.presupuesto_egresos VALUES (174, '4.01.07.05.00', 'Ayudas por defuncion a empleados');
INSERT INTO public.presupuesto_egresos VALUES (175, '4.01.07.06.00', 'Ayudas para medicinas, gastos medicos, odontologicos y de hospitalizacion a empleados');
INSERT INTO public.presupuesto_egresos VALUES (176, '4.01.07.07.00', 'Aporte patronal a cajas de ahorro por empleados ');
INSERT INTO public.presupuesto_egresos VALUES (177, '4.01.07.08.00', 'Aporte patronal a los servicios de salud, accidentes personales y gastos funerarios por empleados ');
INSERT INTO public.presupuesto_egresos VALUES (178, '4.01.07.09.00', 'Ayudas a empleados para adquisicion de uniformes y utiles escolares de sus hijos');
INSERT INTO public.presupuesto_egresos VALUES (179, '4.01.07.10.00', 'Dotacion de uniformes a empleados');
INSERT INTO public.presupuesto_egresos VALUES (180, '4.01.07.11.00', 'Aporte patronal para gastos de guarderias y preescolar para hijos de empleados ');
INSERT INTO public.presupuesto_egresos VALUES (181, '4.01.07.12.00', 'Aportes para la adquisicion de juguetes para los hijos del personal empleado');
INSERT INTO public.presupuesto_egresos VALUES (182, '4.01.07.17.00', 'Capacitacion y adiestramiento a obreros');
INSERT INTO public.presupuesto_egresos VALUES (183, '4.01.07.18.00', 'Becas a obreros');
INSERT INTO public.presupuesto_egresos VALUES (184, '4.01.07.19.00', 'Ayudas por matrimonio de obreros');
INSERT INTO public.presupuesto_egresos VALUES (185, '4.01.07.20.00', 'Ayudas por nacimiento de hijos de obreros');
INSERT INTO public.presupuesto_egresos VALUES (186, '4.01.07.21.00', 'Ayudas por defuncion a obreros');
INSERT INTO public.presupuesto_egresos VALUES (187, '4.01.07.22.00', 'Ayudas para medicinas, gastos medicos, odontologicos y de hospitalizacion a obreros');
INSERT INTO public.presupuesto_egresos VALUES (188, '4.01.07.23.00', 'Aporte patronal a cajas de ahorro por obreros');
INSERT INTO public.presupuesto_egresos VALUES (189, '4.01.07.24.00', 'Aporte patronal a los servicios de salud, accidentes personales y gastos funerarios por obreros');
INSERT INTO public.presupuesto_egresos VALUES (190, '4.01.07.25.00', 'Ayudas a obreros para adquisicion de uniformes y utiles escolares de sus hijos');
INSERT INTO public.presupuesto_egresos VALUES (191, '4.01.07.26.00', 'Dotacion de uniformes a obreros');
INSERT INTO public.presupuesto_egresos VALUES (192, '4.01.07.27.00', 'Aporte patronal para gastos de guarderias y preescolar para hijos de obreros');
INSERT INTO public.presupuesto_egresos VALUES (193, '4.01.07.28.00', 'Aportes para la adquisicion de juguetes para los hijos del personal obrero');
INSERT INTO public.presupuesto_egresos VALUES (194, '4.01.07.34.00', 'Capacitacion y adiestramiento al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (195, '4.01.07.35.00', 'Becas al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (196, '4.01.07.36.00', 'Ayudas por matrimonio al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (197, '4.01.07.37.00', 'Ayudas por nacimiento de hijos al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (198, '4.01.07.38.00', 'Ayudas por defuncion al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (199, '4.01.07.39.00', 'Ayudas para medicinas, gastos medicos, odontologicos y de hospitalizacion al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (200, '4.01.07.40.00', 'Aporte patronal a caja de ahorro por personal militar');
INSERT INTO public.presupuesto_egresos VALUES (201, '4.01.07.41.00', 'Aporte patronal a los servicios de salud, accidentes personales y gastos funerarios personal militar');
INSERT INTO public.presupuesto_egresos VALUES (202, '4.01.07.42.00', 'Ayudas al personal militar para adquisicion de uniformes y utiles escolares de sus hijos');
INSERT INTO public.presupuesto_egresos VALUES (203, '4.01.07.43.00', 'Aportes para la adquisicion de juguetes para los hijos del personal militar');
INSERT INTO public.presupuesto_egresos VALUES (204, '4.01.07.44.00', 'Aporte patronal para gastos de guarderias y preescolar para hijos del personal militar');
INSERT INTO public.presupuesto_egresos VALUES (205, '4.01.07.52.00', 'Capacitacion y adiestramiento a altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (206, '4.01.07.53.00', 'Ayudas por matrimonio a altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (207, '4.01.07.54.00', 'Ayudas por nacimiento de hijos altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (208, '4.01.07.55.00', 'Ayudas por defuncion a altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (209, '4.01.07.56.00', 'Ayudas para medicinas, gastos medicos, odontologicos y de hospitalizacion a altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (210, '4.01.07.57.00', 'Aporte patronal a cajas de ahorro por altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (211, '4.01.07.58.00', 'Aporte patronal a los servicios de salud, accidentes personales y gastos funerarios por altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (295, '4.02.06.04.00', 'Productos farmaceuticos y medicamentos');
INSERT INTO public.presupuesto_egresos VALUES (212, '4.01.07.63.00', 'Capacitacion y adiestramiento al personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (213, '4.01.07.64.00', 'Ayudas por matrimonio al personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (214, '4.01.07.65.00', 'Ayudas por nacimiento de hijos al personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (215, '4.01.07.66.00', 'Ayudas por defuncion al personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (305, '4.02.07.03.00', 'Productos de arcilla para construccion');
INSERT INTO public.presupuesto_egresos VALUES (217, '4.01.07.68.00', 'Aporte patronal a cajas de ahorro por personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (218, '4.01.07.69.00', 'Aporte patronal a los servicios de salud, accidentes personales y gastos funerarios por personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (219, '4.01.07.74.00', 'Capacitacion y adiestramiento al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (220, '4.01.07.75.00', 'Becas al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (221, '4.01.07.76.00', 'Ayudas por matrimonio al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (222, '4.01.07.77.00', 'Ayudas por nacimiento de hijos al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (223, '4.01.07.78.00', 'Ayudas por defuncion al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (224, '4.01.07.79.00', 'Ayudas para medicinas, gastos medicos, odontologicos y de hospitalizacion al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (225, '4.01.07.80.00', 'Aporte patronal a cajas de ahorro por personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (226, '4.01.07.81.00', 'Aporte patronal a los servicios de salud, accidentes personales y gastos funerarios por personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (227, '4.01.07.82.00', 'Ayudas al personal contratado para adquisicion de uniformes y utiles escolares de sus hijos');
INSERT INTO public.presupuesto_egresos VALUES (228, '4.01.07.83.00', 'Dotacion de uniformes al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (229, '4.01.07.84.00', 'Aporte patronal para gastos de guarderias y preescolar para hijos del personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (230, '4.01.07.85.00', 'Aportes para la adquisicion de juguetes para los hijos del personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (231, '4.01.07.94.00', 'Otras subvenciones a altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (232, '4.01.07.95.00', 'Otras subvenciones al personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (233, '4.01.07.96.00', 'Otras subvenciones a empleados');
INSERT INTO public.presupuesto_egresos VALUES (234, '4.01.07.97.00', 'Otras subvenciones a obreros');
INSERT INTO public.presupuesto_egresos VALUES (235, '4.01.07.98.00', 'Otras subvenciones al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (236, '4.01.07.99.00', 'Otras subvenciones al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (237, '4.01.08.00.00', 'Prestaciones sociales e indemnizaciones');
INSERT INTO public.presupuesto_egresos VALUES (238, '4.01.08.01.00', 'Prestaciones sociales e indemnizaciones a empleados');
INSERT INTO public.presupuesto_egresos VALUES (239, '4.01.08.02.00', 'Prestaciones sociales e indemnizaciones a obreros');
INSERT INTO public.presupuesto_egresos VALUES (240, '4.01.08.03.00', 'Prestaciones sociales e indemnizaciones al personal contratado');
INSERT INTO public.presupuesto_egresos VALUES (241, '4.01.08.04.00', 'Prestaciones sociales e indemnizaciones al personal militar');
INSERT INTO public.presupuesto_egresos VALUES (242, '4.01.08.06.00', 'Prestaciones sociales e indemnizaciones a altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (243, '4.01.08.07.00', 'Prestaciones sociales e indemnizaciones al personal de alto nivel y de direccion ');
INSERT INTO public.presupuesto_egresos VALUES (244, '4.01.09.00.00', 'Capacitacion y adiestramiento realizado por personal del organismo');
INSERT INTO public.presupuesto_egresos VALUES (245, '4.01.09.01.00', 'Capacitacion y adiestramiento realizado por personal del organismo');
INSERT INTO public.presupuesto_egresos VALUES (246, '4.01.94.00.00', 'Otros gastos de los altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (247, '4.01.94.01.00', 'Otros gastos de los altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (248, '4.01.95.00.00', 'Otros gastos del personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (249, '4.01.95.01.00', 'Otros gastos del personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (250, '4.01.96.00.00', 'Otros gastos del personal empleado');
INSERT INTO public.presupuesto_egresos VALUES (251, '4.01.96.01.00', 'Otros gastos del personal empleado');
INSERT INTO public.presupuesto_egresos VALUES (252, '4.01.97.00.00', 'Otros gastos del personal obrero');
INSERT INTO public.presupuesto_egresos VALUES (253, '4.01.97.01.00', 'Otros gastos del personal obrero');
INSERT INTO public.presupuesto_egresos VALUES (254, '4.01.98.00.00', 'Otros gastos del personal militar');
INSERT INTO public.presupuesto_egresos VALUES (255, '4.01.98.01.00', 'Otros gastos del personal militar');
INSERT INTO public.presupuesto_egresos VALUES (256, '4.02.00.00.00', 'MATERIALES, SUMINISTROS Y MERCANCiAS');
INSERT INTO public.presupuesto_egresos VALUES (257, '4.02.01.00.00', 'Productos alimenticios y agropecuarios');
INSERT INTO public.presupuesto_egresos VALUES (258, '4.02.01.01.00', 'Alimentos y bebidas para personas');
INSERT INTO public.presupuesto_egresos VALUES (259, '4.02.01.02.00', 'Alimentos para animales');
INSERT INTO public.presupuesto_egresos VALUES (260, '4.02.01.03.00', 'Productos agricolas y pecuarios');
INSERT INTO public.presupuesto_egresos VALUES (261, '4.02.01.04.00', 'Productos de la caza y pesca');
INSERT INTO public.presupuesto_egresos VALUES (262, '4.02.01.99.00', 'Otros productos alimenticios y agropecuarios');
INSERT INTO public.presupuesto_egresos VALUES (263, '4.02.02.00.00', 'Productos de minas, canteras y yacimientos');
INSERT INTO public.presupuesto_egresos VALUES (264, '4.02.02.01.00', 'Carbon mineral');
INSERT INTO public.presupuesto_egresos VALUES (265, '4.02.02.02.00', 'Petroleo crudo y gas natural');
INSERT INTO public.presupuesto_egresos VALUES (266, '4.02.02.03.00', 'Mineral de hierro');
INSERT INTO public.presupuesto_egresos VALUES (267, '4.02.02.04.00', 'Mineral no ferroso');
INSERT INTO public.presupuesto_egresos VALUES (268, '4.02.02.05.00', 'Piedra, arcilla, arena y tierra');
INSERT INTO public.presupuesto_egresos VALUES (269, '4.02.02.06.00', 'Mineral para la fabricacion de productos quimicos');
INSERT INTO public.presupuesto_egresos VALUES (270, '4.02.02.07.00', 'Sal para uso industrial');
INSERT INTO public.presupuesto_egresos VALUES (271, '4.02.02.99.00', 'Otros productos de minas, canteras y yacimientos');
INSERT INTO public.presupuesto_egresos VALUES (272, '4.02.03.00.00', 'Textiles y vestuarios');
INSERT INTO public.presupuesto_egresos VALUES (273, '4.02.03.01.00', 'Textiles');
INSERT INTO public.presupuesto_egresos VALUES (274, '4.02.03.02.00', 'Prendas de vestir');
INSERT INTO public.presupuesto_egresos VALUES (275, '4.02.03.03.00', 'Calzados');
INSERT INTO public.presupuesto_egresos VALUES (276, '4.02.03.99.00', 'Otros productos textiles y vestuarios');
INSERT INTO public.presupuesto_egresos VALUES (277, '4.02.04.00.00', 'Productos de cuero y caucho');
INSERT INTO public.presupuesto_egresos VALUES (278, '4.02.04.01.00', 'Cueros y pieles');
INSERT INTO public.presupuesto_egresos VALUES (279, '4.02.04.02.00', 'Productos de cuero y sucedaneos del cuero');
INSERT INTO public.presupuesto_egresos VALUES (280, '4.02.04.03.00', 'Cauchos y tripas para vehiculos');
INSERT INTO public.presupuesto_egresos VALUES (281, '4.02.04.99.00', 'Otros productos de cuero y caucho');
INSERT INTO public.presupuesto_egresos VALUES (282, '4.02.05.00.00', 'Productos de papel, carton e impresos');
INSERT INTO public.presupuesto_egresos VALUES (283, '4.02.05.01.00', 'Pulpa de madera, papel y carton');
INSERT INTO public.presupuesto_egresos VALUES (284, '4.02.05.02.00', 'Envases y cajas de papel y carton');
INSERT INTO public.presupuesto_egresos VALUES (285, '4.02.05.03.00', 'Productos de papel y carton para oficina');
INSERT INTO public.presupuesto_egresos VALUES (286, '4.02.05.04.00', 'Libros, revistas y periodicos');
INSERT INTO public.presupuesto_egresos VALUES (287, '4.02.05.05.00', 'Material de enseñanza');
INSERT INTO public.presupuesto_egresos VALUES (288, '4.02.05.06.00', 'Productos de papel y carton para computacion');
INSERT INTO public.presupuesto_egresos VALUES (289, '4.02.05.07.00', 'Productos de papel y carton para la imprenta y reproduccion');
INSERT INTO public.presupuesto_egresos VALUES (290, '4.02.05.99.00', 'Otros productos de pulpa, papel y carton');
INSERT INTO public.presupuesto_egresos VALUES (291, '4.02.06.00.00', 'Productos quimicos y derivados');
INSERT INTO public.presupuesto_egresos VALUES (292, '4.02.06.01.00', 'Sustancias quimicas y de uso industrial');
INSERT INTO public.presupuesto_egresos VALUES (293, '4.02.06.02.00', 'Abonos, plaguicidas y otros');
INSERT INTO public.presupuesto_egresos VALUES (294, '4.02.06.03.00', 'Tintas, pinturas y colorantes');
INSERT INTO public.presupuesto_egresos VALUES (296, '4.02.06.05.00', 'Productos de tocador');
INSERT INTO public.presupuesto_egresos VALUES (297, '4.02.06.06.00', 'Combustibles y lubricantes');
INSERT INTO public.presupuesto_egresos VALUES (298, '4.02.06.07.00', 'Productos diversos derivados del petroleo y del carbon');
INSERT INTO public.presupuesto_egresos VALUES (300, '4.02.06.09.00', 'Mezclas explosivas');
INSERT INTO public.presupuesto_egresos VALUES (301, '4.02.06.99.00', 'Otros productos de la industria quimica y conexos');
INSERT INTO public.presupuesto_egresos VALUES (302, '4.02.07.00.00', 'Productos minerales no metalicos');
INSERT INTO public.presupuesto_egresos VALUES (303, '4.02.07.01.00', 'Productos de barro, loza y porcelana');
INSERT INTO public.presupuesto_egresos VALUES (304, '4.02.07.02.00', 'Vidrios y productos de vidrio');
INSERT INTO public.presupuesto_egresos VALUES (307, '4.02.07.99.00', 'Otros productos minerales no metalicos');
INSERT INTO public.presupuesto_egresos VALUES (308, '4.02.08.00.00', 'Productos metalicos');
INSERT INTO public.presupuesto_egresos VALUES (309, '4.02.08.01.00', 'Productos primarios de hierro y acero ');
INSERT INTO public.presupuesto_egresos VALUES (310, '4.02.08.02.00', 'Productos de metales no ferrosos');
INSERT INTO public.presupuesto_egresos VALUES (311, '4.02.08.03.00', 'Herramientas menores, cuchilleria y articulos generales de ferreteria');
INSERT INTO public.presupuesto_egresos VALUES (312, '4.02.08.04.00', 'Productos metalicos estructurales');
INSERT INTO public.presupuesto_egresos VALUES (313, '4.02.08.05.00', 'Materiales de orden publico, seguridad y defensa');
INSERT INTO public.presupuesto_egresos VALUES (314, '4.02.08.07.00', 'Material de señalamiento');
INSERT INTO public.presupuesto_egresos VALUES (315, '4.02.08.08.00', 'Material de educacion');
INSERT INTO public.presupuesto_egresos VALUES (316, '4.02.08.09.00', 'Repuestos y accesorios para equipos de transporte');
INSERT INTO public.presupuesto_egresos VALUES (317, '4.02.08.10.00', 'Repuestos y accesorios para otros equipos');
INSERT INTO public.presupuesto_egresos VALUES (318, '4.02.08.99.00', 'Otros productos metalicos');
INSERT INTO public.presupuesto_egresos VALUES (319, '4.02.09.00.00', 'Productos de madera');
INSERT INTO public.presupuesto_egresos VALUES (320, '4.02.09.01.00', 'Productos primarios de madera');
INSERT INTO public.presupuesto_egresos VALUES (321, '4.02.09.02.00', 'Muebles y accesorios de madera para edificaciones');
INSERT INTO public.presupuesto_egresos VALUES (322, '4.02.09.99.00', 'Otros productos de madera');
INSERT INTO public.presupuesto_egresos VALUES (323, '4.02.10.00.00', 'Productos varios y utiles diversos');
INSERT INTO public.presupuesto_egresos VALUES (324, '4.02.10.01.00', 'Articulos de deporte, recreacion y juguetes');
INSERT INTO public.presupuesto_egresos VALUES (325, '4.02.10.02.00', 'Materiales y utiles de limpieza y aseo');
INSERT INTO public.presupuesto_egresos VALUES (326, '4.02.10.03.00', 'Utensilios de cocina y comedor');
INSERT INTO public.presupuesto_egresos VALUES (327, '4.02.10.04.00', 'utiles menores medico - quirurgicos de laboratorio, dentales y de veterinaria');
INSERT INTO public.presupuesto_egresos VALUES (328, '4.02.10.05.00', 'utiles de escritorio, oficina y materiales de instruccion');
INSERT INTO public.presupuesto_egresos VALUES (329, '4.02.10.06.00', 'Condecoraciones, ofrendas y similares');
INSERT INTO public.presupuesto_egresos VALUES (330, '4.02.10.07.00', 'Productos de seguridad en el trabajo');
INSERT INTO public.presupuesto_egresos VALUES (331, '4.02.10.08.00', 'Materiales para equipos de computacion');
INSERT INTO public.presupuesto_egresos VALUES (332, '4.02.10.09.00', 'Especies timbradas y valores');
INSERT INTO public.presupuesto_egresos VALUES (333, '4.02.10.10.00', 'utiles religiosos');
INSERT INTO public.presupuesto_egresos VALUES (334, '4.02.10.11.00', 'Materiales electricos');
INSERT INTO public.presupuesto_egresos VALUES (335, '4.02.10.12.00', 'Materiales para instalaciones sanitarias');
INSERT INTO public.presupuesto_egresos VALUES (336, '4.02.10.13.00', 'Materiales fotograficos');
INSERT INTO public.presupuesto_egresos VALUES (337, '4.02.10.99.00', 'Otros productos y utiles diversos');
INSERT INTO public.presupuesto_egresos VALUES (338, '4.02.11.00.00', 'Bienes para la venta');
INSERT INTO public.presupuesto_egresos VALUES (339, '4.02.11.01.00', 'Productos y articulos para la venta');
INSERT INTO public.presupuesto_egresos VALUES (340, '4.02.11.02.00', 'Maquinarias y equipos para la venta');
INSERT INTO public.presupuesto_egresos VALUES (341, '4.02.11.03.00', 'Inmuebles para la venta');
INSERT INTO public.presupuesto_egresos VALUES (342, '4.02.11.04.00', 'Tierras y terrenos para la venta');
INSERT INTO public.presupuesto_egresos VALUES (343, '4.02.11.99.00', 'Otros bienes para la venta');
INSERT INTO public.presupuesto_egresos VALUES (344, '4.02.99.00.00', 'Otros materiales y suministros');
INSERT INTO public.presupuesto_egresos VALUES (345, '4.02.99.01.00', 'Otros materiales y suministros');
INSERT INTO public.presupuesto_egresos VALUES (346, '4.03.00.00.00', 'SERVICIOS NO PERSONALES');
INSERT INTO public.presupuesto_egresos VALUES (347, '4.03.01.00.00', 'Alquileres de inmuebles');
INSERT INTO public.presupuesto_egresos VALUES (348, '4.03.01.01.00', 'Alquileres de edificios y locales');
INSERT INTO public.presupuesto_egresos VALUES (349, '4.03.01.02.00', 'Alquileres de instalaciones culturales y recreativas');
INSERT INTO public.presupuesto_egresos VALUES (350, '4.03.01.03.00', 'Alquileres de tierras y terrenos');
INSERT INTO public.presupuesto_egresos VALUES (351, '4.03.02.00.00', 'Alquileres de maquinarias y equipos');
INSERT INTO public.presupuesto_egresos VALUES (352, '4.03.02.01.00', 'Alquileres de maquinarias y demas equipos de construccion, campo, industria y taller');
INSERT INTO public.presupuesto_egresos VALUES (353, '4.03.02.02.00', 'Alquileres de equipos de transporte, traccion y elevacion');
INSERT INTO public.presupuesto_egresos VALUES (354, '4.03.02.03.00', 'Alquileres de equipos de comunicaciones y de señalamiento');
INSERT INTO public.presupuesto_egresos VALUES (355, '4.03.02.04.00', 'Alquileres de equipos medico - quirurgicos, dentales y de veterinaria');
INSERT INTO public.presupuesto_egresos VALUES (356, '4.03.02.05.00', 'Alquileres de equipos cientificos, religiosos, de enseñanza y recreacion');
INSERT INTO public.presupuesto_egresos VALUES (357, '4.03.02.06.00', 'Alquileres de maquinas, muebles y demas equipos de oficina y alojamiento');
INSERT INTO public.presupuesto_egresos VALUES (358, '4.03.02.99.00', 'Alquileres de otras maquinarias y equipos');
INSERT INTO public.presupuesto_egresos VALUES (359, '4.03.03.00.00', 'Derechos sobre bienes intangibles');
INSERT INTO public.presupuesto_egresos VALUES (360, '4.03.03.01.00', 'Marcas de fabrica y patentes de invencion');
INSERT INTO public.presupuesto_egresos VALUES (361, '4.03.03.02.00', 'Derechos de autor');
INSERT INTO public.presupuesto_egresos VALUES (362, '4.03.03.03.00', 'Paquetes y programas de computacion');
INSERT INTO public.presupuesto_egresos VALUES (363, '4.03.03.04.00', 'Concesion de bienes y servicios');
INSERT INTO public.presupuesto_egresos VALUES (364, '4.03.04.00.00', 'Servicios basicos');
INSERT INTO public.presupuesto_egresos VALUES (365, '4.03.04.01.00', 'Electricidad');
INSERT INTO public.presupuesto_egresos VALUES (366, '4.03.04.02.00', 'Gas');
INSERT INTO public.presupuesto_egresos VALUES (367, '4.03.04.03.00', 'Agua');
INSERT INTO public.presupuesto_egresos VALUES (368, '4.03.04.04.00', 'Telefonos');
INSERT INTO public.presupuesto_egresos VALUES (369, '4.03.04.04.01', 'Servicios de telefonia prestados por organismos publicos Servicios de telefonia prestados por instituciones privadas Servicio de comunicaciones');
INSERT INTO public.presupuesto_egresos VALUES (370, '4.03.04.04.02', 'Servicios de telefonia prestados por organismos publicos Servicios de telefonia prestados por instituciones privadas Servicio de comunicaciones');
INSERT INTO public.presupuesto_egresos VALUES (371, '4.03.04.05.00', 'Servicios de telefonia prestados por organismos publicos Servicios de telefonia prestados por instituciones privadas Servicio de comunicaciones');
INSERT INTO public.presupuesto_egresos VALUES (372, '4.03.04.06.00', 'Servicio de aseo urbano y domiciliario');
INSERT INTO public.presupuesto_egresos VALUES (373, '4.03.04.07.00', 'Servicio de condominio');
INSERT INTO public.presupuesto_egresos VALUES (374, '4.03.05.00.00', 'Servicio de administracion, vigilancia y mantenimiento de los servicios basicos');
INSERT INTO public.presupuesto_egresos VALUES (375, '4.03.05.01.00', 'Servicio de administracion, vigilancia y mantenimiento del servicio de electricidad');
INSERT INTO public.presupuesto_egresos VALUES (376, '4.03.05.02.00', 'Servicio de administracion, vigilancia y mantenimiento del servicio de gas');
INSERT INTO public.presupuesto_egresos VALUES (377, '4.03.05.03.00', 'Servicio de administracion, vigilancia y mantenimiento del servicio de agua');
INSERT INTO public.presupuesto_egresos VALUES (378, '4.03.05.04.00', 'Servicio de administracion, vigilancia y mantenimiento del servicio de telefonos');
INSERT INTO public.presupuesto_egresos VALUES (379, '4.03.05.05.00', 'Servicio de administracion, vigilancia y mantenimiento del servicio de comunicaciones');
INSERT INTO public.presupuesto_egresos VALUES (380, '4.03.05.06.00', 'Servicio de administracion, vigilancia y mantenimiento del servicio de aseo urbano y domiciliario');
INSERT INTO public.presupuesto_egresos VALUES (381, '4.03.06.00.00', 'Servicios de transporte y almacenaje');
INSERT INTO public.presupuesto_egresos VALUES (382, '4.03.06.01.00', 'Fletes y embalajes');
INSERT INTO public.presupuesto_egresos VALUES (383, '4.03.06.02.00', 'Almacenaje');
INSERT INTO public.presupuesto_egresos VALUES (384, '4.03.06.03.00', 'Estacionamiento');
INSERT INTO public.presupuesto_egresos VALUES (385, '4.03.06.04.00', 'Peaje');
INSERT INTO public.presupuesto_egresos VALUES (386, '4.03.06.05.00', 'Servicios de proteccion en traslado de fondos y de mensajeria');
INSERT INTO public.presupuesto_egresos VALUES (387, '4.03.07.00.00', 'Servicios de informacion, impresion y relaciones publicas');
INSERT INTO public.presupuesto_egresos VALUES (389, '4.03.07.02.00', 'Imprenta y reproduccion');
INSERT INTO public.presupuesto_egresos VALUES (390, '4.03.07.03.00', 'Relaciones sociales');
INSERT INTO public.presupuesto_egresos VALUES (391, '4.03.07.04.00', 'Avisos');
INSERT INTO public.presupuesto_egresos VALUES (392, '4.03.08.00.00', 'Primas y otros gastos de seguros y comisiones bancarias');
INSERT INTO public.presupuesto_egresos VALUES (393, '4.03.08.01.00', 'Primas y gastos de seguros');
INSERT INTO public.presupuesto_egresos VALUES (394, '4.03.08.02.00', 'Comisiones y gastos bancarios');
INSERT INTO public.presupuesto_egresos VALUES (395, '4.03.08.03.00', 'Comisiones y gastos de adquisicion de seguros');
INSERT INTO public.presupuesto_egresos VALUES (396, '4.03.09.00.00', 'Viaticos y pasajes');
INSERT INTO public.presupuesto_egresos VALUES (397, '4.03.09.01.00', 'Viaticos y pasajes dentro del pais');
INSERT INTO public.presupuesto_egresos VALUES (398, '4.03.09.02.00', 'Viaticos y pasajes fuera del pais');
INSERT INTO public.presupuesto_egresos VALUES (399, '4.03.09.03.00', 'Asignacion por kilometros recorridos');
INSERT INTO public.presupuesto_egresos VALUES (400, '4.03.10.00.00', 'Servicios profesionales, tecnicos y demas oficios y ocupaciones');
INSERT INTO public.presupuesto_egresos VALUES (401, '4.03.10.01.00', 'Servicios juridicos');
INSERT INTO public.presupuesto_egresos VALUES (402, '4.03.10.02.00', 'Servicios de contabilidad y auditoria');
INSERT INTO public.presupuesto_egresos VALUES (403, '4.03.10.03.00', 'Servicios de procesamiento de datos');
INSERT INTO public.presupuesto_egresos VALUES (404, '4.03.10.04.00', 'Servicios de ingenieria y arquitectonicos');
INSERT INTO public.presupuesto_egresos VALUES (405, '4.03.10.05.00', 'Servicios medicos, odontologicos y otros servicios de sanidad');
INSERT INTO public.presupuesto_egresos VALUES (406, '4.03.10.06.00', 'Servicios de veterinaria');
INSERT INTO public.presupuesto_egresos VALUES (407, '4.03.10.07.00', 'Servicios de capacitacion y adiestramiento');
INSERT INTO public.presupuesto_egresos VALUES (408, '4.03.10.08.00', 'Servicios presupuestarios');
INSERT INTO public.presupuesto_egresos VALUES (409, '4.03.10.09.00', 'Servicios de lavanderia y tintoreria');
INSERT INTO public.presupuesto_egresos VALUES (410, '4.03.10.10.00', 'Servicios de vigilancia y seguridad');
INSERT INTO public.presupuesto_egresos VALUES (411, '4.03.10.11.00', 'Servicios para la elaboracion y suministro de comida');
INSERT INTO public.presupuesto_egresos VALUES (412, '4.03.10.99.00', 'Otros servicios profesionales y tecnicos');
INSERT INTO public.presupuesto_egresos VALUES (413, '4.03.11.00.00', 'Conservacion y reparaciones menores de maquinaria y equipos');
INSERT INTO public.presupuesto_egresos VALUES (414, '4.03.11.01.00', 'Conservacion y reparaciones menores de maquinaria y demas equipos de construccion, campo, industria y taller');
INSERT INTO public.presupuesto_egresos VALUES (415, '4.03.11.02.00', 'Conservacion y reparaciones menores de equipos de transporte, traccion y elevacion');
INSERT INTO public.presupuesto_egresos VALUES (416, '4.03.11.03.00', 'Conservacion y reparaciones menores de equipos de comunicaciones y de señalamiento');
INSERT INTO public.presupuesto_egresos VALUES (417, '4.03.11.04.00', 'Conservacion y reparaciones menores de equipos medico- quirurgicos, dentales y de veterinaria');
INSERT INTO public.presupuesto_egresos VALUES (418, '4.03.11.05.00', 'Conservacion y reparaciones menores de equipos cientificos, religiosos, de enseñanza y recreacion');
INSERT INTO public.presupuesto_egresos VALUES (419, '4.03.11.06.00', 'Conservacion y reparaciones menores de equipos y armamentos de orden publico, seguridad y defensa nacional');
INSERT INTO public.presupuesto_egresos VALUES (420, '4.03.11.07.00', 'Conservacion y reparaciones menores de maquinas, muebles y demas equipos de oficina y alojamiento');
INSERT INTO public.presupuesto_egresos VALUES (421, '4.03.11.99.00', 'Conservacion y reparaciones menores de otras maquinaria y equipos');
INSERT INTO public.presupuesto_egresos VALUES (422, '4.03.12.00.00', 'Conservacion y reparaciones menores de obras');
INSERT INTO public.presupuesto_egresos VALUES (423, '4.03.12.01.00', 'Conservacion y reparaciones menores de obras en bienes del dominio privado');
INSERT INTO public.presupuesto_egresos VALUES (424, '4.03.12.02.00', 'Conservacion y reparaciones menores de obras en bienes del dominio publico');
INSERT INTO public.presupuesto_egresos VALUES (425, '4.03.13.00.00', 'Servicios de construcciones temporales');
INSERT INTO public.presupuesto_egresos VALUES (426, '4.03.13.01.00', 'Servicios de construcciones temporales');
INSERT INTO public.presupuesto_egresos VALUES (427, '4.03.14.00.00', 'Servicios de construccion de edificaciones para la venta');
INSERT INTO public.presupuesto_egresos VALUES (428, '4.03.14.01.00', 'Servicios de construccion de edificaciones para la venta');
INSERT INTO public.presupuesto_egresos VALUES (429, '4.03.15.00.00', 'Servicios fiscales');
INSERT INTO public.presupuesto_egresos VALUES (430, '4.03.15.01.00', 'Derechos de importacion y servicios aduaneros');
INSERT INTO public.presupuesto_egresos VALUES (431, '4.03.15.02.00', 'Tasas y otros derechos obligatorios');
INSERT INTO public.presupuesto_egresos VALUES (432, '4.03.15.03.00', 'Asignacion a agentes de especies fiscales');
INSERT INTO public.presupuesto_egresos VALUES (433, '4.03.15.99.00', 'Otros servicios fiscales');
INSERT INTO public.presupuesto_egresos VALUES (434, '4.03.16.00.00', 'Servicios de diversion, esparcimiento y culturales');
INSERT INTO public.presupuesto_egresos VALUES (435, '4.03.16.01.00', 'Servicios de diversion, esparcimiento y culturales');
INSERT INTO public.presupuesto_egresos VALUES (436, '4.03.17.00.00', 'Servicios de gestion administrativa prestados por organismos de asistencia tecnica');
INSERT INTO public.presupuesto_egresos VALUES (437, '4.03.17.01.00', 'Servicios de gestion administrativa prestados por organismos de asistencia tecnica');
INSERT INTO public.presupuesto_egresos VALUES (438, '4.03.18.00.00', 'Impuestos indirectos');
INSERT INTO public.presupuesto_egresos VALUES (439, '4.03.18.01.00', 'Impuesto al valor agregado');
INSERT INTO public.presupuesto_egresos VALUES (440, '4.03.18.02.00', 'Impuesto a las grandes transacciones financieras');
INSERT INTO public.presupuesto_egresos VALUES (441, '4.03.18.99.00', 'Otros impuestos indirectos');
INSERT INTO public.presupuesto_egresos VALUES (442, '4.03.19.00.00', 'Comisiones por servicios para cumplir con los beneficios sociales');
INSERT INTO public.presupuesto_egresos VALUES (443, '4.03.19.01.00', 'Comisiones por servicios para cumplir con los beneficios sociales');
INSERT INTO public.presupuesto_egresos VALUES (444, '4.03.99.00.00', 'Otros servicios no personales');
INSERT INTO public.presupuesto_egresos VALUES (445, '4.03.99.01.00', 'Otros servicios no personales');
INSERT INTO public.presupuesto_egresos VALUES (446, '4.04.00.00.00', 'ACTIVOS REALES');
INSERT INTO public.presupuesto_egresos VALUES (447, '4.04.01.00.00', 'Repuestos, reparaciones, mejoras y adiciones mayores');
INSERT INTO public.presupuesto_egresos VALUES (448, '4.04.01.01.00', 'Repuestos mayores');
INSERT INTO public.presupuesto_egresos VALUES (449, '4.04.01.01.01', 'Repuestos mayores para maquinaria y demas equipos de construccion, campo, industria y taller');
INSERT INTO public.presupuesto_egresos VALUES (450, '4.04.01.01.02', 'Repuestos mayores para equipos de transporte, traccion y elevacion');
INSERT INTO public.presupuesto_egresos VALUES (451, '4.04.01.01.03', 'Repuestos mayores para equipos de comunicaciones y de señalamiento');
INSERT INTO public.presupuesto_egresos VALUES (452, '4.04.01.01.04', 'Repuestos mayores para equipos medico-quirurgicos, dentales y de veterinaria');
INSERT INTO public.presupuesto_egresos VALUES (453, '4.04.01.01.05', 'Repuestos mayores para equipos cientificos, religiosos, de enseñanza y recreacion');
INSERT INTO public.presupuesto_egresos VALUES (454, '4.04.01.01.06', 'Repuestos mayores para equipos y armamentos de orden publico, seguridad y defensa');
INSERT INTO public.presupuesto_egresos VALUES (455, '4.04.01.01.07', 'Repuestos mayores para maquinas, muebles y demas equipos de oficina y alojamiento');
INSERT INTO public.presupuesto_egresos VALUES (456, '4.04.01.01.99', 'Repuestos mayores para otras maquinarias y equipos');
INSERT INTO public.presupuesto_egresos VALUES (457, '4.04.01.02.00', 'Reparaciones, mejoras y adiciones mayores de maquinaria y equipos');
INSERT INTO public.presupuesto_egresos VALUES (458, '4.04.01.02.01', 'Reparaciones, mejoras y adiciones mayores de maquinaria y demas equipos de construccion, campo, industria y taller');
INSERT INTO public.presupuesto_egresos VALUES (459, '4.04.01.02.02', 'Reparaciones, mejoras y adiciones mayores de equipos de transporte, traccion y elevacion');
INSERT INTO public.presupuesto_egresos VALUES (460, '4.04.01.02.03', 'Reparaciones, mejoras y adiciones mayores de equipos de comunicaciones y de señalamiento');
INSERT INTO public.presupuesto_egresos VALUES (461, '4.04.01.02.04', 'Reparaciones, mejoras y adiciones mayores de equipos medico - quirurgicos, dentales y de veterinaria');
INSERT INTO public.presupuesto_egresos VALUES (462, '4.04.01.02.05', 'Reparaciones, mejoras y adiciones mayores de equipos cientificos, religiosos, de enseñanza y recreacion');
INSERT INTO public.presupuesto_egresos VALUES (463, '4.04.01.02.06', 'Reparaciones, mejoras y adiciones mayores de equipos y armamentos de orden publico, seguridad y defensa nacional');
INSERT INTO public.presupuesto_egresos VALUES (464, '4.04.01.02.07', 'Reparaciones, mejoras y adiciones mayores de maquinas, muebles y demas equipos de oficina y alojamiento');
INSERT INTO public.presupuesto_egresos VALUES (465, '4.04.01.02.99', 'Reparaciones, mejoras y adiciones mayores de otras maquinaria y equipos');
INSERT INTO public.presupuesto_egresos VALUES (466, '4.04.02.00.00', 'Conservacion, ampliaciones y mejoras mayores de obras');
INSERT INTO public.presupuesto_egresos VALUES (467, '4.04.02.01.00', 'Conservacion, ampliaciones y mejoras mayores de obras en bienes del dominio privado');
INSERT INTO public.presupuesto_egresos VALUES (468, '4.04.02.02.00', 'Conservacion, ampliaciones y mejoras mayores de obras en bienes del dominio publico');
INSERT INTO public.presupuesto_egresos VALUES (469, '4.04.03.00.00', 'Maquinarias y demas equipos de construccion, campo, industria y taller');
INSERT INTO public.presupuesto_egresos VALUES (470, '4.04.03.01.00', 'Maquinarias y demas equipos de construccion y mantenimiento');
INSERT INTO public.presupuesto_egresos VALUES (471, '4.04.03.02.00', 'Maquinarias y equipos para mantenimiento de automotores');
INSERT INTO public.presupuesto_egresos VALUES (472, '4.04.03.03.00', 'Maquinarias y equipos agricolas y pecuarios');
INSERT INTO public.presupuesto_egresos VALUES (473, '4.04.03.04.00', 'Maquinarias y equipos de artes graficas y reproduccion');
INSERT INTO public.presupuesto_egresos VALUES (474, '4.04.03.05.00', 'Maquinarias y equipos industriales y de taller');
INSERT INTO public.presupuesto_egresos VALUES (475, '4.04.03.06.00', 'Maquinarias y equipos de energia');
INSERT INTO public.presupuesto_egresos VALUES (476, '4.04.03.07.00', 'Maquinarias y equipos de riego y acueductos');
INSERT INTO public.presupuesto_egresos VALUES (477, '4.04.03.08.00', 'Equipos de almacen');
INSERT INTO public.presupuesto_egresos VALUES (478, '4.04.03.99.00', 'Otras maquinarias y demas equipos de construccion, campo, industria y taller');
INSERT INTO public.presupuesto_egresos VALUES (479, '4.04.04.00.00', 'Equipos de transporte, traccion y elevacion');
INSERT INTO public.presupuesto_egresos VALUES (480, '4.04.04.01.00', 'Vehiculos automotores terrestres');
INSERT INTO public.presupuesto_egresos VALUES (481, '4.04.04.02.00', 'Equipos ferroviarios y de cables aereos');
INSERT INTO public.presupuesto_egresos VALUES (482, '4.04.04.03.00', 'Equipos maritimos de transporte');
INSERT INTO public.presupuesto_egresos VALUES (483, '4.04.04.04.00', 'Equipos aereos de transporte');
INSERT INTO public.presupuesto_egresos VALUES (484, '4.04.04.05.00', 'Vehiculos de traccion no motorizados');
INSERT INTO public.presupuesto_egresos VALUES (485, '4.04.04.06.00', 'Equipos auxiliares de transporte');
INSERT INTO public.presupuesto_egresos VALUES (486, '4.04.04.99.00', 'Otros equipos de transporte, traccion y elevacion');
INSERT INTO public.presupuesto_egresos VALUES (487, '4.04.05.00.00', 'Equipos de comunicaciones y de señalamiento');
INSERT INTO public.presupuesto_egresos VALUES (488, '4.04.05.01.00', 'Equipos de telecomunicaciones');
INSERT INTO public.presupuesto_egresos VALUES (489, '4.04.05.02.00', 'Equipos de señalamiento');
INSERT INTO public.presupuesto_egresos VALUES (490, '4.04.05.03.00', 'Equipos de control de trafico aereo');
INSERT INTO public.presupuesto_egresos VALUES (491, '4.04.05.04.00', 'Equipos de correo');
INSERT INTO public.presupuesto_egresos VALUES (492, '4.04.05.99.00', 'Otros equipos de comunicaciones y de señalamiento');
INSERT INTO public.presupuesto_egresos VALUES (493, '4.04.06.00.00', 'Equipos medico - quirurgicos, dentales y de veterinaria');
INSERT INTO public.presupuesto_egresos VALUES (494, '4.04.06.01.00', 'Equipos medico - quirurgicos, dentales y de veterinaria');
INSERT INTO public.presupuesto_egresos VALUES (495, '4.04.06.99.00', 'Otros equipos medico - quirurgicos, dentales y de veterinaria');
INSERT INTO public.presupuesto_egresos VALUES (496, '4.04.07.00.00', 'Equipos cientificos, religiosos, de enseñanza y recreacion');
INSERT INTO public.presupuesto_egresos VALUES (497, '4.04.07.01.00', 'Equipos cientificos y de laboratorio');
INSERT INTO public.presupuesto_egresos VALUES (498, '4.04.07.02.00', 'Equipos de enseñanza, deporte y recreacion');
INSERT INTO public.presupuesto_egresos VALUES (499, '4.04.07.03.00', 'Obras de arte');
INSERT INTO public.presupuesto_egresos VALUES (500, '4.04.07.04.00', 'Libros, revistas y otros instrumentos de enseñanzas');
INSERT INTO public.presupuesto_egresos VALUES (501, '4.04.07.05.00', 'Equipos religiosos');
INSERT INTO public.presupuesto_egresos VALUES (502, '4.04.07.06.00', 'Instrumentos musicales y equipos de audio');
INSERT INTO public.presupuesto_egresos VALUES (503, '4.04.07.99.00', 'Otros equipos cientificos, religiosos, de enseñanza y recreacion');
INSERT INTO public.presupuesto_egresos VALUES (504, '4.04.08.00.00', 'Equipos y armamentos de orden publico, seguridad y defensa');
INSERT INTO public.presupuesto_egresos VALUES (505, '4.04.08.01.00', 'Equipos y armamentos de orden publico, seguridad y defensa nacional');
INSERT INTO public.presupuesto_egresos VALUES (506, '4.04.08.02.00', 'Equipos y armamentos de seguridad para la custodia y resguardo personal');
INSERT INTO public.presupuesto_egresos VALUES (507, '4.04.08.99.00', 'Otros equipos y armamentos de orden publico, seguridad y defensa');
INSERT INTO public.presupuesto_egresos VALUES (508, '4.04.09.00.00', 'Maquinas, muebles y demas equipos de oficina y alojamiento');
INSERT INTO public.presupuesto_egresos VALUES (509, '4.04.09.01.00', 'Mobiliario y equipos de oficina');
INSERT INTO public.presupuesto_egresos VALUES (510, '4.04.09.02.00', 'Equipos de computacion');
INSERT INTO public.presupuesto_egresos VALUES (511, '4.04.09.03.00', 'Mobiliario y equipos de alojamiento');
INSERT INTO public.presupuesto_egresos VALUES (512, '4.04.09.99.00', 'Otras maquinas, muebles y demas equipos de oficina y alojamiento');
INSERT INTO public.presupuesto_egresos VALUES (513, '4.04.10.00.00', 'Semovientes ');
INSERT INTO public.presupuesto_egresos VALUES (514, '4.04.10.01.00', 'Semovientes');
INSERT INTO public.presupuesto_egresos VALUES (515, '4.04.11.00.00', 'Inmuebles, maquinarias y equipos usados');
INSERT INTO public.presupuesto_egresos VALUES (516, '4.04.11.01.00', 'Adquisicion de tierras y terrenos');
INSERT INTO public.presupuesto_egresos VALUES (517, '4.04.11.02.00', 'Adquisicion de edificios e instalaciones');
INSERT INTO public.presupuesto_egresos VALUES (518, '4.04.11.03.00', 'Expropiacion de tierras y terrenos');
INSERT INTO public.presupuesto_egresos VALUES (519, '4.04.11.04.00', 'Expropiacion de edificios e instalaciones');
INSERT INTO public.presupuesto_egresos VALUES (520, '4.04.11.05.00', 'Adquisicion de maquinarias y equipos usados');
INSERT INTO public.presupuesto_egresos VALUES (521, '4.04.11.05.01', 'Maquinarias y demas equipos de construccion, campo, industria y taller');
INSERT INTO public.presupuesto_egresos VALUES (522, '4.04.11.05.02', 'Equipos de transporte, traccion y elevacion');
INSERT INTO public.presupuesto_egresos VALUES (523, '4.04.11.05.03', 'Equipos de comunicaciones y de señalamiento');
INSERT INTO public.presupuesto_egresos VALUES (524, '4.04.11.05.04', 'Equipos medico - quirurgicos, dentales y de veterinaria');
INSERT INTO public.presupuesto_egresos VALUES (525, '4.04.11.05.05', 'Equipos cientificos, religiosos, de enseñanza y recreacion');
INSERT INTO public.presupuesto_egresos VALUES (526, '4.04.11.05.06', 'Equipos para seguridad publica');
INSERT INTO public.presupuesto_egresos VALUES (527, '4.04.11.05.07', 'Maquinas, muebles y demas equipos de oficina y alojamiento');
INSERT INTO public.presupuesto_egresos VALUES (528, '4.04.11.05.99', 'Otras maquinarias y equipos usados');
INSERT INTO public.presupuesto_egresos VALUES (529, '4.04.12.00.00', 'Activos intangibles');
INSERT INTO public.presupuesto_egresos VALUES (530, '4.04.12.01.00', 'Marcas de fabrica y patentes de invencion');
INSERT INTO public.presupuesto_egresos VALUES (531, '4.04.12.02.00', 'Derechos de autor');
INSERT INTO public.presupuesto_egresos VALUES (532, '4.04.12.03.00', 'Gastos de organizacion');
INSERT INTO public.presupuesto_egresos VALUES (533, '4.04.12.04.00', 'Paquetes y programas de computacion');
INSERT INTO public.presupuesto_egresos VALUES (534, '4.04.12.05.00', 'Estudios y proyectos');
INSERT INTO public.presupuesto_egresos VALUES (535, '4.04.12.99.00', 'Otros activos intangibles');
INSERT INTO public.presupuesto_egresos VALUES (536, '4.04.13.00.00', 'Estudios y proyectos para inversion en activos fijos');
INSERT INTO public.presupuesto_egresos VALUES (537, '4.04.13.01.00', 'Estudios y proyectos aplicables a bienes del dominio privado');
INSERT INTO public.presupuesto_egresos VALUES (538, '4.04.13.02.00', 'Estudios y proyectos aplicables a bienes del dominio publico');
INSERT INTO public.presupuesto_egresos VALUES (539, '4.04.14.00.00', 'Contratacion de inspeccion de obras');
INSERT INTO public.presupuesto_egresos VALUES (540, '4.04.14.01.00', 'Contratacion de inspeccion de obras de bienes del dominio privado');
INSERT INTO public.presupuesto_egresos VALUES (541, '4.04.14.02.00', 'Contratacion de inspeccion de obras de bienes del dominio publico');
INSERT INTO public.presupuesto_egresos VALUES (542, '4.04.15.00.00', 'Construcciones del dominio privado');
INSERT INTO public.presupuesto_egresos VALUES (543, '4.04.15.01.00', 'Construcciones de edificaciones medico-asistenciales');
INSERT INTO public.presupuesto_egresos VALUES (544, '4.04.15.02.00', 'Construcciones de edificaciones militares y de seguridad');
INSERT INTO public.presupuesto_egresos VALUES (545, '4.04.15.03.00', 'Construcciones de edificaciones educativas, religiosas y recreativas');
INSERT INTO public.presupuesto_egresos VALUES (546, '4.04.15.04.00', 'Construcciones de edificaciones culturales y deportivas');
INSERT INTO public.presupuesto_egresos VALUES (547, '4.04.15.05.00', 'Construcciones de edificaciones para oficina');
INSERT INTO public.presupuesto_egresos VALUES (548, '4.04.15.06.00', 'Construcciones de edificaciones industriales');
INSERT INTO public.presupuesto_egresos VALUES (549, '4.04.15.07.00', 'Construcciones de edificaciones habitacionales');
INSERT INTO public.presupuesto_egresos VALUES (550, '4.04.15.99.00', 'Otras construcciones del dominio privado');
INSERT INTO public.presupuesto_egresos VALUES (551, '4.04.16.00.00', 'Construcciones del dominio publico');
INSERT INTO public.presupuesto_egresos VALUES (552, '4.04.16.01.00', 'Construccion de vialidad');
INSERT INTO public.presupuesto_egresos VALUES (553, '4.04.16.02.00', 'Construccion de plazas, parques y similares');
INSERT INTO public.presupuesto_egresos VALUES (554, '4.04.16.03.00', 'Construcciones de instalaciones hidraulicas');
INSERT INTO public.presupuesto_egresos VALUES (555, '4.04.16.04.00', 'Construcciones de puertos y aeropuertos');
INSERT INTO public.presupuesto_egresos VALUES (556, '4.04.16.99.00', 'Otras construcciones del dominio publico');
INSERT INTO public.presupuesto_egresos VALUES (557, '4.04.99.00.00', 'Otros activos reales');
INSERT INTO public.presupuesto_egresos VALUES (558, '4.04.99.01.00', 'Otros activos reales');
INSERT INTO public.presupuesto_egresos VALUES (559, '4.05.00.00.00', 'ACTIVOS FINANCIEROS');
INSERT INTO public.presupuesto_egresos VALUES (560, '4.05.01.00.00', 'Aportes en acciones y participaciones de capital');
INSERT INTO public.presupuesto_egresos VALUES (561, '4.05.01.01.00', 'Aportes en acciones y participaciones de capital al sector privado');
INSERT INTO public.presupuesto_egresos VALUES (562, '4.05.01.02.00', 'Aportes en acciones y participaciones de capital al sector publico');
INSERT INTO public.presupuesto_egresos VALUES (641, '4.05.10.03.00', 'Incremento de fondos en fideicomiso');
INSERT INTO public.presupuesto_egresos VALUES (563, '4.05.01.02.01', 'Aportes en acciones y participaciones de capital a entes descentralizados sin fines empresariales');
INSERT INTO public.presupuesto_egresos VALUES (564, '4.05.01.02.02', 'Aportes en acciones y participaciones de capital a instituciones de proteccion social');
INSERT INTO public.presupuesto_egresos VALUES (565, '4.05.01.02.03', 'Aportes en acciones y participaciones de capital a entes descentralizados con fines empresariales petroleros');
INSERT INTO public.presupuesto_egresos VALUES (566, '4.05.01.02.04', 'Aportes en acciones y participaciones de capital a entes descentralizados con fines empresariales no petroleros');
INSERT INTO public.presupuesto_egresos VALUES (567, '4.05.01.02.05', 'Aportes en acciones y participaciones de capital a entes descentralizados financieros bancarios');
INSERT INTO public.presupuesto_egresos VALUES (568, '4.05.01.02.06', 'Aportes en acciones y participaciones de capital a entes descentralizados financieros no bancarios');
INSERT INTO public.presupuesto_egresos VALUES (569, '4.05.01.02.07', 'Aportes en acciones y participaciones de capital a organismos del sector publico para el pago de su deuda');
INSERT INTO public.presupuesto_egresos VALUES (570, '4.05.01.03.00', 'Aportes en acciones y participaciones de capital al sector externo');
INSERT INTO public.presupuesto_egresos VALUES (571, '4.05.01.03.01', 'Aportes en acciones y participaciones de capital a organismos internacionales');
INSERT INTO public.presupuesto_egresos VALUES (572, '4.05.01.03.99', 'Otros aportes en acciones y participaciones de capital al sector externo');
INSERT INTO public.presupuesto_egresos VALUES (573, '4.05.02.00.00', 'Adquisicion de titulos y valores que no otorgan propiedad');
INSERT INTO public.presupuesto_egresos VALUES (574, '4.05.02.01.00', 'Adquisicion de titulos y valores a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (575, '4.05.02.01.01', 'Adquisicion de titulos y valores privados');
INSERT INTO public.presupuesto_egresos VALUES (576, '4.05.02.01.02', 'Adquisicion de titulos y valores publicos');
INSERT INTO public.presupuesto_egresos VALUES (577, '4.05.02.01.03', 'Adquisicion de titulos y valores externos');
INSERT INTO public.presupuesto_egresos VALUES (578, '4.05.02.02.00', 'Adquisicion de titulos y valores a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (579, '4.05.02.02.01', 'Adquisicion de titulos y valores privados');
INSERT INTO public.presupuesto_egresos VALUES (580, '4.05.02.02.02', 'Adquisicion de titulos y valores publicos');
INSERT INTO public.presupuesto_egresos VALUES (581, '4.05.02.02.03', 'Adquisicion de titulos y valores externos');
INSERT INTO public.presupuesto_egresos VALUES (582, '4.05.03.00.00', 'Concesion de prestamos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (583, '4.05.03.01.00', 'Concesion de prestamos al sector privado a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (584, '4.05.03.02.00', 'Concesion de prestamos al sector publico a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (585, '4.05.03.02.01', 'Concesion de prestamos a la Republica');
INSERT INTO public.presupuesto_egresos VALUES (586, '4.05.03.02.02', 'Concesion de prestamos a entes descentralizados sin fines empresariales');
INSERT INTO public.presupuesto_egresos VALUES (587, '4.05.03.02.03', 'Concesion de prestamos a instituciones de proteccion social');
INSERT INTO public.presupuesto_egresos VALUES (588, '4.05.03.02.04', 'Concesion de prestamos a entes descentralizados con fines empresariales petroleros');
INSERT INTO public.presupuesto_egresos VALUES (589, '4.05.03.02.05', 'Concesion de prestamos a entes descentralizados con fines empresariales no petroleros');
INSERT INTO public.presupuesto_egresos VALUES (590, '4.05.03.02.06', 'Concesion de prestamos a entes descentralizados financieros bancarios');
INSERT INTO public.presupuesto_egresos VALUES (591, '4.05.03.02.07', 'Concesion de prestamos a entes descentralizados financieras no bancarios');
INSERT INTO public.presupuesto_egresos VALUES (592, '4.05.03.02.08', 'Concesion de prestamos al Poder Estadal');
INSERT INTO public.presupuesto_egresos VALUES (593, '4.05.03.02.09', 'Concesion de prestamos al Poder Municipal');
INSERT INTO public.presupuesto_egresos VALUES (594, '4.05.03.03.00', 'Concesion de prestamos al sector externo a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (595, '4.05.03.03.01', 'Concesion de prestamos a instituciones sin fines de lucro');
INSERT INTO public.presupuesto_egresos VALUES (596, '4.05.03.03.02', 'Concesion de prestamos a gobiernos extranjeros');
INSERT INTO public.presupuesto_egresos VALUES (597, '4.05.03.03.03', 'Concesion de prestamos a organismos internacionales');
INSERT INTO public.presupuesto_egresos VALUES (598, '4.05.04.00.00', 'Concesion de prestamos a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (599, '4.05.04.01.00', 'Concesion de prestamos al sector privado a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (600, '4.05.04.02.00', 'Concesion de prestamos al sector publico a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (601, '4.05.04.02.01', 'Concesion de prestamos a la Republica');
INSERT INTO public.presupuesto_egresos VALUES (602, '4.05.04.02.02', 'Concesion de prestamos a entes descentralizados sin fines empresariales');
INSERT INTO public.presupuesto_egresos VALUES (603, '4.05.04.02.03', 'Concesion de prestamos a instituciones de proteccion social');
INSERT INTO public.presupuesto_egresos VALUES (604, '4.05.04.02.04', 'Concesion de prestamos a entes descentralizados con fines empresariales petroleros');
INSERT INTO public.presupuesto_egresos VALUES (605, '4.05.04.02.05', 'Concesion de prestamos a entes descentralizados con fines empresariales no petroleros');
INSERT INTO public.presupuesto_egresos VALUES (606, '4.05.04.02.06', 'Concesion de prestamos a entes descentralizados financieros bancarios');
INSERT INTO public.presupuesto_egresos VALUES (607, '4.05.04.02.07', 'Concesion de prestamos a entes descentralizados financieros no bancarios');
INSERT INTO public.presupuesto_egresos VALUES (608, '4.05.04.02.08', 'Concesion de prestamos al Poder Estadal');
INSERT INTO public.presupuesto_egresos VALUES (609, '4.05.04.02.09', 'Concesion de prestamos al Poder Municipal');
INSERT INTO public.presupuesto_egresos VALUES (610, '4.05.04.03.00', 'Concesion de prestamos al sector externo a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (611, '4.05.04.03.01', 'Concesion de prestamos a instituciones sin fines de lucro ');
INSERT INTO public.presupuesto_egresos VALUES (612, '4.05.04.03.02', 'Concesion de prestamos a gobiernos extranjeros');
INSERT INTO public.presupuesto_egresos VALUES (613, '4.05.04.03.03', 'Concesion de prestamos a organismos internacionales');
INSERT INTO public.presupuesto_egresos VALUES (614, '4.05.05.00.00', 'Incremento de disponibilidades');
INSERT INTO public.presupuesto_egresos VALUES (615, '4.05.05.01.00', 'Incremento en caja');
INSERT INTO public.presupuesto_egresos VALUES (616, '4.05.05.02.00', 'Incremento en bancos');
INSERT INTO public.presupuesto_egresos VALUES (617, '4.05.05.02.01', 'Incremento en bancos publicos');
INSERT INTO public.presupuesto_egresos VALUES (618, '4.05.05.02.02', 'Incremento en bancos privados');
INSERT INTO public.presupuesto_egresos VALUES (619, '4.05.05.02.03', 'Incremento en bancos del exterior');
INSERT INTO public.presupuesto_egresos VALUES (620, '4.05.05.03.00', 'Incremento de inversiones temporales');
INSERT INTO public.presupuesto_egresos VALUES (621, '4.05.06.00.00', 'Incremento de cuentas por cobrar a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (622, '4.05.06.01.00', 'Incremento de cuentas comerciales por cobrar a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (623, '4.05.06.02.00', 'Incremento de rentas por recaudar a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (624, '4.05.06.03.00', 'Incremento de deudas por rendir');
INSERT INTO public.presupuesto_egresos VALUES (625, '4.05.06.03.01', 'Incremento de deudas por rendir de fondos en avance');
INSERT INTO public.presupuesto_egresos VALUES (626, '4.05.06.03.02', 'Incremento de deudas por rendir de fondos en anticipo');
INSERT INTO public.presupuesto_egresos VALUES (627, '4.05.06.99.00', 'Incremento de otras cuentas por cobrar a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (628, '4.05.07.00.00', 'Incremento de efectos por cobrar a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (629, '4.05.07.01.00', 'Incremento de efectos comerciales por cobrar a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (630, '4.05.07.99.00', 'Incremento de otros efectos por cobrar a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (631, '4.05.08.00.00', 'Incremento de cuentas por cobrar a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (632, '4.05.08.01.00', 'Incremento de cuentas comerciales por cobrar a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (633, '4.05.08.02.00', 'Incremento de rentas por recaudar a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (634, '4.05.08.99.00', 'Incremento de otras cuentas por cobrar a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (635, '4.05.09.00.00', 'Incremento de efectos por cobrar a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (636, '4.05.09.01.00', 'Incremento de efectos comerciales por cobrar a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (637, '4.05.09.99.00', 'Incremento de otros efectos por cobrar a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (638, '4.05.10.00.00', 'Incremento de fondos en avance, en anticipos y en fideicomiso');
INSERT INTO public.presupuesto_egresos VALUES (639, '4.05.10.01.00', 'Incremento de fondos en avance');
INSERT INTO public.presupuesto_egresos VALUES (640, '4.05.10.02.00', 'Incremento de fondos en anticipos');
INSERT INTO public.presupuesto_egresos VALUES (642, '4.05.10.04.00', 'Incremento de anticipos a proveedores');
INSERT INTO public.presupuesto_egresos VALUES (643, '4.05.10.05.00', 'Incremento de anticipos a contratistas por contratos de corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (644, '4.05.10.06.00', 'Incremento de anticipos a contratistas por contratos de mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (645, '4.05.11.00.00', 'Incremento de activos diferidos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (646, '4.05.11.01.00', 'Incremento de gastos a corto plazo pagados por anticipado');
INSERT INTO public.presupuesto_egresos VALUES (647, '4.05.11.01.01', 'Incremento de intereses de la deuda publica interna a corto plazo pagados por anticipado');
INSERT INTO public.presupuesto_egresos VALUES (648, '4.05.11.01.02', 'Incremento de intereses de la deuda publica externa a corto plazo pagados por anticipado');
INSERT INTO public.presupuesto_egresos VALUES (649, '4.05.11.01.03', 'Incremento de otros intereses a corto plazo pagados por anticipado');
INSERT INTO public.presupuesto_egresos VALUES (650, '4.05.11.01.04', 'Incremento de debitos por apertura de carta de credito a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (651, '4.05.11.01.99', 'Incremento de otros gastos a corto plazo pagados por anticipado');
INSERT INTO public.presupuesto_egresos VALUES (652, '4.05.11.02.00', 'Incremento de depositos otorgados en garantia a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (653, '4.05.11.99.00', 'Incremento de otros activos diferidos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (654, '4.05.12.00.00', 'Incremento de activos diferidos a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (655, '4.05.12.01.00', 'Incremento de gastos a mediano y largo plazo pagados por anticipado');
INSERT INTO public.presupuesto_egresos VALUES (656, '4.05.12.01.01', 'Incremento de intereses de la deuda publica interna a largo plazo pagados por anticipado');
INSERT INTO public.presupuesto_egresos VALUES (657, '4.05.12.01.02', 'Incremento de intereses de la deuda publica externa a largo plazo pagados por anticipado');
INSERT INTO public.presupuesto_egresos VALUES (658, '4.05.12.01.08', 'Incremento de otros intereses a mediano y largo plazo pagados por anticipado');
INSERT INTO public.presupuesto_egresos VALUES (659, '4.05.12.01.99', 'Incremento de otros gastos a mediano y largo plazo pagados por anticipado');
INSERT INTO public.presupuesto_egresos VALUES (660, '4.05.12.02.00', 'Incremento de depositos otorgados en garantia a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (661, '4.05.12.99.00', 'Incremento de otros activos diferidos a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (662, '4.05.13.00.00', 'Incremento del Fondo de Estabilizacion Macroeconomica (FEM)');
INSERT INTO public.presupuesto_egresos VALUES (663, '4.05.13.01.00', 'Incremento del Fondo de Estabilizacion Macroeconomica (FEM) de la Republica');
INSERT INTO public.presupuesto_egresos VALUES (664, '4.05.13.02.00', 'Incremento del Fondo de Estabilizacion Macroeconomica (FEM) del Poder Estadal');
INSERT INTO public.presupuesto_egresos VALUES (665, '4.05.13.03.00', 'Incremento del Fondo de Estabilizacion Macroeconomica (FEM) del Poder Municipal ');
INSERT INTO public.presupuesto_egresos VALUES (666, '4.05.14.00.00', 'Incremento del Fondo de Ahorro Intergeneracional');
INSERT INTO public.presupuesto_egresos VALUES (667, '4.05.14.01.00', 'Incremento del Fondo de Ahorro Intergeneracional ');
INSERT INTO public.presupuesto_egresos VALUES (668, '4.05.16.00.00', 'Incremento del Fondo de Aportes del Sector Publico');
INSERT INTO public.presupuesto_egresos VALUES (669, '4.05.16.01.00', 'Incremento del Fondo de Aportes del Sector Publico');
INSERT INTO public.presupuesto_egresos VALUES (670, '4.05.20.00.00', 'Incremento de otros activos financieros circulantes');
INSERT INTO public.presupuesto_egresos VALUES (671, '4.05.20.01.00', 'Incremento de otros activos financieros circulantes');
INSERT INTO public.presupuesto_egresos VALUES (672, '4.05.21.00.00', 'Incremento de otros activos financieros no circulantes');
INSERT INTO public.presupuesto_egresos VALUES (673, '4.05.21.01.00', 'Incremento de activos en gestion judicial a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (674, '4.05.21.02.00', 'Incremento de titulos y otros valores de la deuda publica en litigio a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (675, '4.05.21.99.00', 'Incremento de otros activos financieros no circulantes');
INSERT INTO public.presupuesto_egresos VALUES (676, '4.05.99.00.00', 'Otros activos financieros');
INSERT INTO public.presupuesto_egresos VALUES (677, '4.05.99.01.00', 'Otros activos financieros');
INSERT INTO public.presupuesto_egresos VALUES (678, '4.06.00.00.00', 'GASTOS DE DEFENSA Y SEGURIDAD DEL ESTADO');
INSERT INTO public.presupuesto_egresos VALUES (679, '4.06.01.00.00', 'Gastos de defensa y seguridad del Estado');
INSERT INTO public.presupuesto_egresos VALUES (680, '4.06.01.01.00', 'Gastos de defensa y seguridad del Estado');
INSERT INTO public.presupuesto_egresos VALUES (681, '4.07.00.00.00', 'TRANSFERENCIAS Y DONACIONES');
INSERT INTO public.presupuesto_egresos VALUES (682, '4.07.01.00.00', 'Transferencias y donaciones corrientes internas');
INSERT INTO public.presupuesto_egresos VALUES (683, '4.07.01.01.00', 'Transferencias corrientes internas al sector privado');
INSERT INTO public.presupuesto_egresos VALUES (684, '4.07.01.01.01', 'Pensiones del personal empleado, obrero y militar');
INSERT INTO public.presupuesto_egresos VALUES (685, '4.07.01.01.02', 'Jubilaciones del personal empleado, obrero y militar');
INSERT INTO public.presupuesto_egresos VALUES (686, '4.07.01.01.03', 'Becas escolares');
INSERT INTO public.presupuesto_egresos VALUES (687, '4.07.01.01.04', 'Becas universitarias en el pais');
INSERT INTO public.presupuesto_egresos VALUES (688, '4.07.01.01.05', 'Becas de perfeccionamiento profesional en el pais');
INSERT INTO public.presupuesto_egresos VALUES (689, '4.07.01.01.06', 'Becas para estudios en el extranjero');
INSERT INTO public.presupuesto_egresos VALUES (690, '4.07.01.01.07', 'Otras becas');
INSERT INTO public.presupuesto_egresos VALUES (691, '4.07.01.01.08', 'Prevision por accidentes de trabajo');
INSERT INTO public.presupuesto_egresos VALUES (692, '4.07.01.01.09', 'Aguinaldos al personal empleado, obrero y militar pensionado');
INSERT INTO public.presupuesto_egresos VALUES (693, '4.07.01.01.10', 'Aportes a caja de ahorro del personal empleado, obrero y militar pensionado');
INSERT INTO public.presupuesto_egresos VALUES (694, '4.07.01.01.11', 'Aportes a los servicios de salud, accidentes personales y gastos funerarios del personal empleado, obrero y militar pensionado');
INSERT INTO public.presupuesto_egresos VALUES (695, '4.07.01.01.12', 'Otras subvenciones socio - economicas del personal empleado, obrero y militar pensionado');
INSERT INTO public.presupuesto_egresos VALUES (696, '4.07.01.01.13', 'Aguinaldos al personal empleado, obrero y militar jubilado');
INSERT INTO public.presupuesto_egresos VALUES (697, '4.07.01.01.14', 'Aportes a caja de ahorro del personal empleado, obrero y militar jubilado');
INSERT INTO public.presupuesto_egresos VALUES (698, '4.07.01.01.15', 'Aportes a los servicios de salud, accidentes personales y gastos funerarios del personal empleado, obrero y militar jubilado');
INSERT INTO public.presupuesto_egresos VALUES (699, '4.07.01.01.16', 'Otras subvenciones socio - economicas del personal empleado, obrero y militar jubilado');
INSERT INTO public.presupuesto_egresos VALUES (700, '4.07.01.01.30', 'Incapacidad temporal sin hospitalizacion');
INSERT INTO public.presupuesto_egresos VALUES (701, '4.07.01.01.31', 'Incapacidad temporal con hospitalizacion');
INSERT INTO public.presupuesto_egresos VALUES (702, '4.07.01.01.32', 'Reposo por maternidad');
INSERT INTO public.presupuesto_egresos VALUES (703, '4.07.01.01.33', 'Indemnizacion por paro forzoso');
INSERT INTO public.presupuesto_egresos VALUES (704, '4.07.01.01.34', 'Otros tipos de incapacidad temporal');
INSERT INTO public.presupuesto_egresos VALUES (705, '4.07.01.01.35', 'Indemnizacion por comision por pensiones ');
INSERT INTO public.presupuesto_egresos VALUES (706, '4.07.01.01.36', 'Indemnizacion por comision por cesantia ');
INSERT INTO public.presupuesto_egresos VALUES (707, '4.07.01.01.37', 'Incapacidad parcial');
INSERT INTO public.presupuesto_egresos VALUES (708, '4.07.01.01.38', 'Invalidez ');
INSERT INTO public.presupuesto_egresos VALUES (709, '4.07.01.01.39', 'Pensiones por vejez, viudez y orfandad');
INSERT INTO public.presupuesto_egresos VALUES (710, '4.07.01.01.40', 'Indemnizacion por cesantia');
INSERT INTO public.presupuesto_egresos VALUES (711, '4.07.01.01.41', 'Otras pensiones y demas prestaciones en dinero');
INSERT INTO public.presupuesto_egresos VALUES (712, '4.07.01.01.42', 'Incapacidad parcial por accidente comun');
INSERT INTO public.presupuesto_egresos VALUES (713, '4.07.01.01.43', 'Incapacidad parcial por enfermedades profesionales');
INSERT INTO public.presupuesto_egresos VALUES (714, '4.07.01.01.44', 'Incapacidad parcial por accidente de trabajo');
INSERT INTO public.presupuesto_egresos VALUES (715, '4.07.01.01.45', 'Indemnizacion unica por invalidez');
INSERT INTO public.presupuesto_egresos VALUES (716, '4.07.01.01.46', 'Indemnizacion unica por vejez');
INSERT INTO public.presupuesto_egresos VALUES (717, '4.07.01.01.47', 'Sobrevivientes por enfermedad comun');
INSERT INTO public.presupuesto_egresos VALUES (718, '4.07.01.01.48', 'Sobrevivientes por accidente comun');
INSERT INTO public.presupuesto_egresos VALUES (719, '4.07.01.01.49', 'Sobrevivientes por enfermedades profesionales');
INSERT INTO public.presupuesto_egresos VALUES (720, '4.07.01.01.50', 'Sobrevivientes por accidentes de trabajo');
INSERT INTO public.presupuesto_egresos VALUES (721, '4.07.01.01.51', 'Indemnizaciones por conmutacion de renta');
INSERT INTO public.presupuesto_egresos VALUES (722, '4.07.01.01.52', 'Indemnizaciones por conmutacion de pensiones');
INSERT INTO public.presupuesto_egresos VALUES (723, '4.07.01.01.53', 'Indemnizaciones por comision de renta');
INSERT INTO public.presupuesto_egresos VALUES (724, '4.07.01.01.54', 'Asignacion por nupcias');
INSERT INTO public.presupuesto_egresos VALUES (725, '4.07.01.01.55', 'Asignacion por funeraria');
INSERT INTO public.presupuesto_egresos VALUES (726, '4.07.01.01.56', 'Otras asignaciones');
INSERT INTO public.presupuesto_egresos VALUES (727, '4.07.01.01.70', 'Subsidios educacionales al sector privado');
INSERT INTO public.presupuesto_egresos VALUES (728, '4.07.01.01.71', 'Subsidios a universidades privadas');
INSERT INTO public.presupuesto_egresos VALUES (729, '4.07.01.01.72', 'Subsidios culturales al sector privado');
INSERT INTO public.presupuesto_egresos VALUES (730, '4.07.01.01.73', 'Subsidios a instituciones beneficas privadas');
INSERT INTO public.presupuesto_egresos VALUES (731, '4.07.01.01.74', 'Subsidios a centros de empleados');
INSERT INTO public.presupuesto_egresos VALUES (732, '4.07.01.01.75', 'Subsidios a organismos laborales y gremiales');
INSERT INTO public.presupuesto_egresos VALUES (733, '4.07.01.01.76', 'Subsidios a entidades religiosas');
INSERT INTO public.presupuesto_egresos VALUES (734, '4.07.01.01.77', 'Subsidios a entidades deportivas y recreativas de caracter privado');
INSERT INTO public.presupuesto_egresos VALUES (735, '4.07.01.01.78', 'Subsidios cientificos al sector privado');
INSERT INTO public.presupuesto_egresos VALUES (736, '4.07.01.01.79', 'Subsidios a cooperativas');
INSERT INTO public.presupuesto_egresos VALUES (737, '4.07.01.01.80', 'Subsidios a empresas privadas');
INSERT INTO public.presupuesto_egresos VALUES (738, '4.07.01.01.99', 'Otras transferencias corrientes internas al sector privado');
INSERT INTO public.presupuesto_egresos VALUES (739, '4.07.01.02.00', 'Donaciones corrientes internas al sector privado');
INSERT INTO public.presupuesto_egresos VALUES (740, '4.07.01.02.01', 'Donaciones corrientes a personas');
INSERT INTO public.presupuesto_egresos VALUES (741, '4.07.01.02.02', 'Donaciones corrientes a instituciones sin fines de lucro');
INSERT INTO public.presupuesto_egresos VALUES (742, '4.07.01.03.00', 'Transferencias corrientes internas al sector publico');
INSERT INTO public.presupuesto_egresos VALUES (743, '4.07.01.03.01', 'Transferencias corrientes a la Republica');
INSERT INTO public.presupuesto_egresos VALUES (744, '4.07.01.03.02', 'Transferencias corrientes a entes descentralizados sin fines empresariales');
INSERT INTO public.presupuesto_egresos VALUES (745, '4.07.01.03.03', 'Transferencias corrientes a entes descentralizados sin fines empresariales para atender beneficios de la seguridad social');
INSERT INTO public.presupuesto_egresos VALUES (746, '4.07.01.03.04', 'Transferencias corrientes a instituciones de proteccion social');
INSERT INTO public.presupuesto_egresos VALUES (747, '4.07.01.03.05', 'Transferencias corrientes a instituciones de proteccion social para atender beneficios de la seguridad social');
INSERT INTO public.presupuesto_egresos VALUES (748, '4.07.01.03.06', 'Transferencias corrientes a entes descentralizados con fines empresariales petroleros');
INSERT INTO public.presupuesto_egresos VALUES (749, '4.07.01.03.07', 'Transferencias corrientes a entes descentralizados con fines empresariales no petroleros');
INSERT INTO public.presupuesto_egresos VALUES (750, '4.07.01.03.08', 'Transferencias corrientes a entes descentralizados financieros bancarios');
INSERT INTO public.presupuesto_egresos VALUES (751, '4.07.01.03.09', 'Transferencias corrientes a entes descentralizados financieros no bancarios');
INSERT INTO public.presupuesto_egresos VALUES (752, '4.07.01.03.10', 'Transferencias corrientes al Poder Estadal');
INSERT INTO public.presupuesto_egresos VALUES (753, '4.07.01.03.11', 'Transferencias corrientes al Poder Municipal');
INSERT INTO public.presupuesto_egresos VALUES (754, '4.07.01.03.13', 'Subsidios otorgados por normas externas');
INSERT INTO public.presupuesto_egresos VALUES (755, '4.07.01.03.14', 'Incentivos otorgados por normas externas');
INSERT INTO public.presupuesto_egresos VALUES (756, '4.07.01.03.15', 'Subsidios otorgados por precios politicos');
INSERT INTO public.presupuesto_egresos VALUES (757, '4.07.01.03.16', 'Subsidios de costos sociales por normas externas');
INSERT INTO public.presupuesto_egresos VALUES (758, '4.07.01.03.99', 'Otras transferencias corrientes internas al sector publico');
INSERT INTO public.presupuesto_egresos VALUES (759, '4.07.01.04.00', 'Donaciones corrientes internas al sector publico');
INSERT INTO public.presupuesto_egresos VALUES (760, '4.07.01.04.01', 'Donaciones corrientes a la Republica');
INSERT INTO public.presupuesto_egresos VALUES (761, '4.07.01.04.02', 'Donaciones corrientes a entes descentralizados sin fines empresariales');
INSERT INTO public.presupuesto_egresos VALUES (762, '4.07.01.04.03', 'Donaciones corrientes a instituciones de proteccion social');
INSERT INTO public.presupuesto_egresos VALUES (763, '4.07.01.04.04', 'Donaciones corrientes a entes descentralizados con fines empresariales petroleros');
INSERT INTO public.presupuesto_egresos VALUES (764, '4.07.01.04.05', 'Donaciones corrientes a entes descentralizados con fines empresariales no petroleros');
INSERT INTO public.presupuesto_egresos VALUES (765, '4.07.01.04.06', 'Donaciones corrientes a entes descentralizados financieros bancarios');
INSERT INTO public.presupuesto_egresos VALUES (766, '4.07.01.04.07', 'Donaciones corrientes a entes descentralizados financieros no bancarios');
INSERT INTO public.presupuesto_egresos VALUES (767, '4.07.01.04.08', 'Donaciones corrientes al Poder Estadal');
INSERT INTO public.presupuesto_egresos VALUES (768, '4.07.01.04.09', 'Donaciones corrientes al Poder Municipal');
INSERT INTO public.presupuesto_egresos VALUES (769, '4.07.01.05.00', 'Pensiones de altos funcionarios y altas funcionarias del poder publico y de eleccion popular, del personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (770, '4.07.01.05.01', 'Pensiones de altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (771, '4.07.01.05.02', 'Pensiones del personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (772, '4.07.01.05.06', 'Aguinaldos de altos funcionarios y altas funcionarias del poder publico y de eleccion popular pensionados');
INSERT INTO public.presupuesto_egresos VALUES (773, '4.07.01.05.07', 'Aguinaldos del personal pensionado de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (774, '4.07.01.05.11', 'Aportes a caja de ahorro de altos funcionarios y altas funcionarias del poder publico y de eleccion popular pensionados');
INSERT INTO public.presupuesto_egresos VALUES (775, '4.07.01.05.12', 'Aportes a caja de ahorro del personal pensionado de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (776, '4.07.01.05.16', 'Aportes a los servicios de salud, accidentes personales y gastos funerarios de altos funcionarios y altas funcionarias del poder publico y de eleccion popular pensionados');
INSERT INTO public.presupuesto_egresos VALUES (777, '4.07.01.05.17', 'Aportes a los servicios de salud, accidentes personales y gastos funerarios del personal pensionado de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (778, '4.07.01.05.98', 'Otras subvenciones de altos funcionarios y altas funcionarias del poder publico y de eleccion popular pensionados');
INSERT INTO public.presupuesto_egresos VALUES (779, '4.07.01.05.99', 'Otras subvenciones del personal pensionado de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (780, '4.07.01.06.00', 'Jubilaciones de altos funcionarios y altas funcionarias del poder publico y de eleccion popular, del personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (781, '4.07.01.06.01', 'Jubilaciones de altos funcionarios y altas funcionarias del poder publico y de eleccion popular');
INSERT INTO public.presupuesto_egresos VALUES (782, '4.07.01.06.02', 'Jubilaciones del personal de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (783, '4.07.01.06.06', 'Aguinaldos de altos funcionarios y altas funcionarias del poder publico y de eleccion popular jubilados');
INSERT INTO public.presupuesto_egresos VALUES (784, '4.07.01.06.07', 'Aguinaldos del personal jubilado de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (785, '4.07.01.06.11', 'Aportes a caja de ahorro de altos funcionarios y altas funcionarias del poder publico y de eleccion popular jubilados');
INSERT INTO public.presupuesto_egresos VALUES (786, '4.07.01.06.12', 'Aportes a caja de ahorro del personal jubilado de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (787, '4.07.01.06.16', 'Aportes a los servicios de salud, accidentes personales y gastos funerarios de altos funcionarios y altas funcionarias del poder publico y de eleccion popular jubilados');
INSERT INTO public.presupuesto_egresos VALUES (788, '4.07.01.06.17', 'Aportes a los servicios de salud, accidentes personales y gastos funerarios del personal jubilado de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (789, '4.07.01.06.98', 'Otras subvenciones de altos funcionarios y altas funcionarias del poder publico y de eleccion popular jubilados');
INSERT INTO public.presupuesto_egresos VALUES (790, '4.07.01.06.99', 'Otras subvenciones del personal jubilado de alto nivel y de direccion');
INSERT INTO public.presupuesto_egresos VALUES (791, '4.07.02.00.00', 'Transferencias y donaciones corrientes al exterior');
INSERT INTO public.presupuesto_egresos VALUES (792, '4.07.02.01.00', 'Transferencias corrientes al exterior');
INSERT INTO public.presupuesto_egresos VALUES (793, '4.07.02.01.01', 'Becas de capacitacion e investigacion en el exterior');
INSERT INTO public.presupuesto_egresos VALUES (794, '4.07.02.01.02', 'Transferencias corrientes a instituciones sin fines de lucro');
INSERT INTO public.presupuesto_egresos VALUES (795, '4.07.02.01.03', 'Transferencias corrientes a gobiernos extranjeros');
INSERT INTO public.presupuesto_egresos VALUES (796, '4.07.02.01.04', 'Transferencias corrientes a organismos internacionales');
INSERT INTO public.presupuesto_egresos VALUES (797, '4.07.02.02.00', 'Donaciones corrientes al exterior');
INSERT INTO public.presupuesto_egresos VALUES (798, '4.07.02.02.01', 'Donaciones corrientes a personas');
INSERT INTO public.presupuesto_egresos VALUES (799, '4.07.02.02.02', 'Donaciones corrientes a instituciones sin fines de lucro');
INSERT INTO public.presupuesto_egresos VALUES (800, '4.07.02.02.03', 'Donaciones corrientes a gobiernos extranjeros');
INSERT INTO public.presupuesto_egresos VALUES (801, '4.07.02.02.04', 'Donaciones corrientes a organismos internacionales');
INSERT INTO public.presupuesto_egresos VALUES (802, '4.07.03.00.00', 'Transferencias y donaciones de capital internas');
INSERT INTO public.presupuesto_egresos VALUES (803, '4.07.03.01.00', 'Transferencias de capital internas al sector privado');
INSERT INTO public.presupuesto_egresos VALUES (804, '4.07.03.01.01', 'Transferencias de capital a personas');
INSERT INTO public.presupuesto_egresos VALUES (805, '4.07.03.01.02', 'Transferencias de capital a instituciones sin fines de lucro');
INSERT INTO public.presupuesto_egresos VALUES (806, '4.07.03.01.03', 'Transferencias de capital a empresas privadas');
INSERT INTO public.presupuesto_egresos VALUES (807, '4.07.03.02.00', 'Donaciones de capital internas al sector privado');
INSERT INTO public.presupuesto_egresos VALUES (808, '4.07.03.02.01', 'Donaciones de capital a personas');
INSERT INTO public.presupuesto_egresos VALUES (809, '4.07.03.02.02', 'Donaciones de capital a instituciones sin fines de lucro');
INSERT INTO public.presupuesto_egresos VALUES (810, '4.07.03.03.00', 'Transferencias de capital internas al sector publico');
INSERT INTO public.presupuesto_egresos VALUES (811, '4.07.03.03.01', 'Transferencias de capital a la Republica');
INSERT INTO public.presupuesto_egresos VALUES (812, '4.07.03.03.02', 'Transferencias de capital a entes descentralizados sin fines empresariales');
INSERT INTO public.presupuesto_egresos VALUES (813, '4.07.03.03.03', 'Transferencias de capital a instituciones de proteccion social');
INSERT INTO public.presupuesto_egresos VALUES (814, '4.07.03.03.04', 'Transferencias de capital a entes descentralizados con fines empresariales petroleros');
INSERT INTO public.presupuesto_egresos VALUES (815, '4.07.03.03.05', 'Transferencias de capital a entes descentralizados con fines empresariales no petroleros');
INSERT INTO public.presupuesto_egresos VALUES (816, '4.07.03.03.06', 'Transferencias de capital a entes descentralizados financieros bancarios');
INSERT INTO public.presupuesto_egresos VALUES (817, '4.07.03.03.07', 'Transferencias de capital a entes descentralizados financieros no bancarios');
INSERT INTO public.presupuesto_egresos VALUES (818, '4.07.03.03.08', 'Transferencias de capital al Poder Estadal');
INSERT INTO public.presupuesto_egresos VALUES (819, '4.07.03.03.09', 'Transferencias de capital al Poder Municipal');
INSERT INTO public.presupuesto_egresos VALUES (820, '4.07.03.03.99', 'Otras transferencias de capital internas al sector publico');
INSERT INTO public.presupuesto_egresos VALUES (821, '4.07.03.04.00', 'Donaciones de capital internas al sector publico');
INSERT INTO public.presupuesto_egresos VALUES (822, '4.07.03.04.01', 'Donaciones de capital a la Republica');
INSERT INTO public.presupuesto_egresos VALUES (823, '4.07.03.04.02', 'Donaciones de capital a entes descentralizados sin fines empresariales');
INSERT INTO public.presupuesto_egresos VALUES (824, '4.07.03.04.03', 'Donaciones de capital a instituciones de proteccion social');
INSERT INTO public.presupuesto_egresos VALUES (825, '4.07.03.04.04', 'Donaciones de capital a entes descentralizados con fines empresariales petroleros');
INSERT INTO public.presupuesto_egresos VALUES (826, '4.07.03.04.05', 'Donaciones de capital a entes descentralizados con fines empresariales no petroleros');
INSERT INTO public.presupuesto_egresos VALUES (827, '4.07.03.04.06', 'Donaciones de capital a entes descentralizados financieros bancarios');
INSERT INTO public.presupuesto_egresos VALUES (828, '4.07.03.04.07', 'Donaciones de capital a entes descentralizados financieros no bancarios');
INSERT INTO public.presupuesto_egresos VALUES (829, '4.07.03.04.08', 'Donaciones de capital al Poder Estadal');
INSERT INTO public.presupuesto_egresos VALUES (830, '4.07.03.04.09', 'Donaciones de capital al Poder Municipal');
INSERT INTO public.presupuesto_egresos VALUES (831, '4.07.04.00.00', 'Transferencias y donaciones de capital al exterior');
INSERT INTO public.presupuesto_egresos VALUES (832, '4.07.04.01.00', 'Transferencias de capital al exterior');
INSERT INTO public.presupuesto_egresos VALUES (833, '4.07.04.01.01', 'Transferencias de capital a personas');
INSERT INTO public.presupuesto_egresos VALUES (834, '4.07.04.01.02', 'Transferencias de capital a instituciones sin fines de lucro');
INSERT INTO public.presupuesto_egresos VALUES (835, '4.07.04.01.03', 'Transferencias de capital a gobiernos extranjeros');
INSERT INTO public.presupuesto_egresos VALUES (836, '4.07.04.01.04', 'Transferencias de capital a organismos internacionales');
INSERT INTO public.presupuesto_egresos VALUES (837, '4.07.04.02.00', 'Donaciones de capital al exterior');
INSERT INTO public.presupuesto_egresos VALUES (838, '4.07.04.02.01', 'Donaciones de capital a personas');
INSERT INTO public.presupuesto_egresos VALUES (839, '4.07.04.02.02', 'Donaciones de capital a instituciones sin fines de lucro');
INSERT INTO public.presupuesto_egresos VALUES (840, '4.07.04.02.03', 'Donaciones de capital a gobiernos extranjeros');
INSERT INTO public.presupuesto_egresos VALUES (841, '4.07.04.02.04', 'Donaciones de capital a organismos internacionales');
INSERT INTO public.presupuesto_egresos VALUES (842, '4.07.05.00.00', 'Situado');
INSERT INTO public.presupuesto_egresos VALUES (843, '4.07.05.01.00', 'Situado Constitucional');
INSERT INTO public.presupuesto_egresos VALUES (844, '4.07.05.01.01', 'Situado Estadal');
INSERT INTO public.presupuesto_egresos VALUES (845, '4.07.05.01.02', 'Situado Municipal');
INSERT INTO public.presupuesto_egresos VALUES (846, '4.07.05.02.00', 'Situado Estadal a Municipal ');
INSERT INTO public.presupuesto_egresos VALUES (847, '4.07.06.00.00', 'Subsidio de Regimen Especial');
INSERT INTO public.presupuesto_egresos VALUES (848, '4.07.06.01.00', 'Subsidio de Regimen Especial');
INSERT INTO public.presupuesto_egresos VALUES (849, '4.07.07.00.00', 'Subsidio de capitalidad ');
INSERT INTO public.presupuesto_egresos VALUES (850, '4.07.07.01.00', 'Subsidio de capitalidad ');
INSERT INTO public.presupuesto_egresos VALUES (851, '4.07.08.00.00', 'Asignaciones Economicas Especiales (LAEE)');
INSERT INTO public.presupuesto_egresos VALUES (852, '4.07.08.01.00', 'Asignaciones Economicas Especiales (LAEE) Estadal');
INSERT INTO public.presupuesto_egresos VALUES (853, '4.07.08.02.00', 'Asignaciones Economicas Especiales (LAEE) Estadal a Municipal');
INSERT INTO public.presupuesto_egresos VALUES (854, '4.07.08.03.00', 'Asignaciones Economicas Especiales (LAEE) Municipal');
INSERT INTO public.presupuesto_egresos VALUES (855, '4.07.08.04.00', 'Asignaciones Economicas Especiales (LAEE) Fondo Nacional de los Consejos Comunales');
INSERT INTO public.presupuesto_egresos VALUES (856, '4.07.08.05.00', 'Asignaciones Economicas Especiales (LAEE) Apoyo al Fortalecimiento Institucional');
INSERT INTO public.presupuesto_egresos VALUES (1051, '4.10.02.00.00', 'Servicio de la deuda publica interna a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (857, '4.07.09.00.00', 'Aportes al Poder Estadal y al Poder Municipal por transferencia de servicios');
INSERT INTO public.presupuesto_egresos VALUES (858, '4.07.09.01.00', 'Aportes al Poder Estadal por transferencia de servicios');
INSERT INTO public.presupuesto_egresos VALUES (859, '4.07.09.02.00', 'Aportes al Poder Municipal por transferencia de servicios');
INSERT INTO public.presupuesto_egresos VALUES (860, '4.07.10.00.00', 'Fondo Intergubernamental para la Descentralizacion (FIDES)');
INSERT INTO public.presupuesto_egresos VALUES (861, '4.07.10.01.00', 'Fondo Intergubernamental para la Descentralizacion (FIDES)');
INSERT INTO public.presupuesto_egresos VALUES (862, '4.07.11.00.00', 'Fondo de Compensacion Interterritorial');
INSERT INTO public.presupuesto_egresos VALUES (863, '4.07.11.01.00', 'Fondo de Compensacion Interterritorial Estadal');
INSERT INTO public.presupuesto_egresos VALUES (864, '4.07.11.02.00', 'Fondo de Compensacion Interterritorial Municipal');
INSERT INTO public.presupuesto_egresos VALUES (865, '4.07.11.03.00', 'Fondo de Compensacion Interterritorial Poder Popular');
INSERT INTO public.presupuesto_egresos VALUES (866, '4.07.11.04.00', 'Fondo de Compensacion Interterritorial Fortalecimiento Institucional');
INSERT INTO public.presupuesto_egresos VALUES (867, '4.07.12.00.00', 'Transferencias y donaciones a Consejos Comunales, Comunas y demas organizaciones de base del poder popular');
INSERT INTO public.presupuesto_egresos VALUES (868, '4.07.12.01.00', 'Transferencias y donaciones corrientes a Consejos Comunales, Comunas y demas organizaciones de base del poder popular');
INSERT INTO public.presupuesto_egresos VALUES (869, '4.07.12.01.01', 'Transferencias corrientes a Consejos Comunales, Comunas y demas organizaciones de base del poder popular');
INSERT INTO public.presupuesto_egresos VALUES (870, '4.07.12.01.02', 'Donaciones corrientes a Consejos Comunales, Comunas y demas organizaciones de base del poder popular');
INSERT INTO public.presupuesto_egresos VALUES (871, '4.07.12.02.00', 'Transferencias y donaciones de capital a Consejos Comunales, Comunas y demas organizaciones de base del poder popular');
INSERT INTO public.presupuesto_egresos VALUES (872, '4.07.12.02.01', 'Transferencias de capital a Consejos Comunales, Comunas y demas organizaciones de base del poder popular');
INSERT INTO public.presupuesto_egresos VALUES (873, '4.07.12.02.02', 'Donaciones de capital a Consejos Comunales, Comunas y demas organizaciones de base del poder popular');
INSERT INTO public.presupuesto_egresos VALUES (874, '4.08.00.00.00', 'OTROS GASTOS');
INSERT INTO public.presupuesto_egresos VALUES (875, '4.08.01.00.00', 'Depreciacion y amortizacion');
INSERT INTO public.presupuesto_egresos VALUES (876, '4.08.01.01.00', 'Depreciacion');
INSERT INTO public.presupuesto_egresos VALUES (877, '4.08.01.01.01', 'Depreciacion de edificios e instalaciones');
INSERT INTO public.presupuesto_egresos VALUES (878, '4.08.01.01.02', 'Depreciacion de maquinaria y demas equipos de construccion, campo, industria y taller');
INSERT INTO public.presupuesto_egresos VALUES (879, '4.08.01.01.03', 'Depreciacion de equipos de transporte, traccion y elevacion');
INSERT INTO public.presupuesto_egresos VALUES (880, '4.08.01.01.04', 'Depreciacion de equipos de comunicaciones y de señalamiento');
INSERT INTO public.presupuesto_egresos VALUES (881, '4.08.01.01.05', 'Depreciacion de equipos medico - quirurgicos, dentales y de veterinaria');
INSERT INTO public.presupuesto_egresos VALUES (882, '4.08.01.01.06', 'Depreciacion de equipos cientificos, religiosos, de enseñanza y recreacion');
INSERT INTO public.presupuesto_egresos VALUES (883, '4.08.01.01.07', 'Depreciacion de equipos para la seguridad publica');
INSERT INTO public.presupuesto_egresos VALUES (884, '4.08.01.01.08', 'Depreciacion de maquinas, muebles y demas equipos de oficina y alojamiento');
INSERT INTO public.presupuesto_egresos VALUES (885, '4.08.01.01.09', 'Depreciacion de semovientes');
INSERT INTO public.presupuesto_egresos VALUES (886, '4.08.01.01.99', 'Depreciacion de otros bienes de uso');
INSERT INTO public.presupuesto_egresos VALUES (887, '4.08.01.02.00', 'Amortizacion');
INSERT INTO public.presupuesto_egresos VALUES (888, '4.08.01.02.01', 'Amortizacion de marcas de fabrica y patentes de invencion');
INSERT INTO public.presupuesto_egresos VALUES (889, '4.08.01.02.02', 'Amortizacion de derechos de autor');
INSERT INTO public.presupuesto_egresos VALUES (890, '4.08.01.02.03', 'Amortizacion de gastos de organizacion');
INSERT INTO public.presupuesto_egresos VALUES (891, '4.08.01.02.04', 'Amortizacion de paquetes y programas de computacion');
INSERT INTO public.presupuesto_egresos VALUES (892, '4.08.01.02.05', 'Amortizacion de estudios y proyectos');
INSERT INTO public.presupuesto_egresos VALUES (893, '4.08.01.02.99', 'Amortizacion de otros activos intangibles');
INSERT INTO public.presupuesto_egresos VALUES (894, '4.08.02.00.00', 'Intereses por operaciones financieras');
INSERT INTO public.presupuesto_egresos VALUES (895, '4.08.02.01.00', 'Intereses por depositos internos');
INSERT INTO public.presupuesto_egresos VALUES (896, '4.08.02.02.00', 'Intereses por titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (897, '4.08.02.03.00', 'Intereses por otros financiamientos');
INSERT INTO public.presupuesto_egresos VALUES (898, '4.08.03.00.00', 'Gastos por operaciones de seguro');
INSERT INTO public.presupuesto_egresos VALUES (899, '4.08.03.01.00', 'Gastos de siniestros');
INSERT INTO public.presupuesto_egresos VALUES (900, '4.08.03.02.00', 'Gastos de operaciones de reaseguros');
INSERT INTO public.presupuesto_egresos VALUES (901, '4.08.03.99.00', 'Otros gastos de operaciones de seguro');
INSERT INTO public.presupuesto_egresos VALUES (902, '4.08.04.00.00', 'Perdida en operaciones de los servicios basicos');
INSERT INTO public.presupuesto_egresos VALUES (903, '4.08.04.01.00', 'Perdidas en el proceso de distribucion de los servicios');
INSERT INTO public.presupuesto_egresos VALUES (904, '4.08.04.99.00', 'Otras perdidas en operacion');
INSERT INTO public.presupuesto_egresos VALUES (905, '4.08.05.00.00', 'Obligaciones en el ejercicio vigente');
INSERT INTO public.presupuesto_egresos VALUES (906, '4.08.05.01.00', 'Devoluciones de cobros indebidos');
INSERT INTO public.presupuesto_egresos VALUES (907, '4.08.05.02.00', 'Devoluciones y reintegros diversos');
INSERT INTO public.presupuesto_egresos VALUES (908, '4.08.05.03.00', 'Indemnizaciones diversas');
INSERT INTO public.presupuesto_egresos VALUES (909, '4.08.06.00.00', 'Perdidas ajenas a la operacion');
INSERT INTO public.presupuesto_egresos VALUES (910, '4.08.06.01.00', 'Perdidas en inventarios');
INSERT INTO public.presupuesto_egresos VALUES (911, '4.08.06.02.00', 'Perdidas en operaciones cambiarias');
INSERT INTO public.presupuesto_egresos VALUES (912, '4.08.06.03.00', 'Perdidas en ventas de activos');
INSERT INTO public.presupuesto_egresos VALUES (913, '4.08.06.04.00', 'Perdidas por cuentas incobrables');
INSERT INTO public.presupuesto_egresos VALUES (914, '4.08.06.05.00', 'Participacion en perdidas de otras empresas');
INSERT INTO public.presupuesto_egresos VALUES (915, '4.08.06.06.00', 'Perdidas por auto-seguro');
INSERT INTO public.presupuesto_egresos VALUES (916, '4.08.06.07.00', 'Impuestos directos');
INSERT INTO public.presupuesto_egresos VALUES (917, '4.08.06.08.00', 'Intereses de mora');
INSERT INTO public.presupuesto_egresos VALUES (918, '4.08.06.09.00', 'Reservas tecnicas');
INSERT INTO public.presupuesto_egresos VALUES (919, '4.08.07.00.00', 'Descuentos, bonificaciones y devoluciones');
INSERT INTO public.presupuesto_egresos VALUES (920, '4.08.07.01.00', 'Descuentos sobre ventas');
INSERT INTO public.presupuesto_egresos VALUES (921, '4.08.07.02.00', 'Bonificaciones por ventas');
INSERT INTO public.presupuesto_egresos VALUES (922, '4.08.07.03.00', 'Devoluciones por ventas');
INSERT INTO public.presupuesto_egresos VALUES (923, '4.08.07.04.00', 'Devoluciones por primas de seguro');
INSERT INTO public.presupuesto_egresos VALUES (924, '4.08.08.00.00', 'Indemnizaciones y sanciones pecuniarias');
INSERT INTO public.presupuesto_egresos VALUES (925, '4.08.08.01.00', 'Indemnizaciones por daños y perjuicios');
INSERT INTO public.presupuesto_egresos VALUES (926, '4.08.08.01.01', 'Indemnizaciones por daños y perjuicios ocasionados por organismos de la Republica, del Poder Estadal y del Poder Municipal');
INSERT INTO public.presupuesto_egresos VALUES (927, '4.08.08.01.02', 'Indemnizaciones por daños y perjuicios ocasionados por entes descentralizados sin fines empresariales');
INSERT INTO public.presupuesto_egresos VALUES (928, '4.08.08.01.03', 'Indemnizaciones por daños y perjuicios ocasionados por entes descentralizados con fines empresariales');
INSERT INTO public.presupuesto_egresos VALUES (929, '4.08.08.02.00', 'Sanciones pecuniarias');
INSERT INTO public.presupuesto_egresos VALUES (930, '4.08.08.02.01', 'Sanciones pecuniarias impuestas a los organismos de la Republica, del Poder Estadal y del Poder Municipal');
INSERT INTO public.presupuesto_egresos VALUES (931, '4.08.08.02.02', 'Sanciones pecuniarias impuestas a los entes descentralizados sin fines empresariales');
INSERT INTO public.presupuesto_egresos VALUES (932, '4.08.08.02.03', 'Sanciones pecuniarias impuestas a los entes descentralizados con fines empresariales');
INSERT INTO public.presupuesto_egresos VALUES (933, '4.08.99.00.00', 'Otros gastos');
INSERT INTO public.presupuesto_egresos VALUES (934, '4.08.99.01.00', 'Otros gastos');
INSERT INTO public.presupuesto_egresos VALUES (935, '4.09.00.00.00', 'ASIGNACIONES NO DISTRIBUIDAS');
INSERT INTO public.presupuesto_egresos VALUES (936, '4.09.01.00.00', 'Asignaciones no distribuidas de la Asamblea Nacional');
INSERT INTO public.presupuesto_egresos VALUES (937, '4.09.01.01.00', 'Asignaciones no distribuidas de la Asamblea Nacional');
INSERT INTO public.presupuesto_egresos VALUES (938, '4.09.02.00.00', 'Asignaciones no distribuidas de la Contraloria General de la Republica');
INSERT INTO public.presupuesto_egresos VALUES (939, '4.09.02.01.00', 'Asignaciones no distribuidas de la Contraloria General de la Republica');
INSERT INTO public.presupuesto_egresos VALUES (940, '4.09.03.00.00', 'Asignaciones no distribuidas del Consejo Nacional Electoral');
INSERT INTO public.presupuesto_egresos VALUES (941, '4.09.03.01.00', 'Asignaciones no distribuidas del Consejo Nacional Electoral');
INSERT INTO public.presupuesto_egresos VALUES (942, '4.09.04.00.00', 'Asignaciones no distribuidas del Tribunal Supremo de Justicia');
INSERT INTO public.presupuesto_egresos VALUES (943, '4.09.04.01.00', 'Asignaciones no distribuidas del Tribunal Supremo de Justicia');
INSERT INTO public.presupuesto_egresos VALUES (944, '4.09.05.00.00', 'Asignaciones no distribuidas del Ministerio Publico');
INSERT INTO public.presupuesto_egresos VALUES (945, '4.09.05.01.00', 'Asignaciones no distribuidas del Ministerio Publico');
INSERT INTO public.presupuesto_egresos VALUES (946, '4.09.06.00.00', 'Asignaciones no distribuidas de la Defensoria del Pueblo');
INSERT INTO public.presupuesto_egresos VALUES (947, '4.09.06.01.00', 'Asignaciones no distribuidas de la Defensoria del Pueblo');
INSERT INTO public.presupuesto_egresos VALUES (948, '4.09.07.00.00', 'Asignaciones no distribuidas del Consejo Moral Republicano ');
INSERT INTO public.presupuesto_egresos VALUES (949, '4.09.07.01.00', 'Asignaciones no distribuidas del Consejo Moral Republicano');
INSERT INTO public.presupuesto_egresos VALUES (950, '4.09.08.00.00', 'Reestructuracion de organismos del sector publico');
INSERT INTO public.presupuesto_egresos VALUES (951, '4.09.08.01.00', 'Reestructuracion de organismos del sector publico');
INSERT INTO public.presupuesto_egresos VALUES (952, '4.09.09.00.00', 'Fondo de apoyo al trabajador y su grupo familiar');
INSERT INTO public.presupuesto_egresos VALUES (953, '4.09.09.01.00', 'Fondo de apoyo al trabajador y su grupo familiar de la Administracion Publica Nacional');
INSERT INTO public.presupuesto_egresos VALUES (954, '4.09.09.02.00', 'Fondo de apoyo al trabajador y su grupo familiar de las Entidades Federales, los Municipios y otras formas de gobierno municipal');
INSERT INTO public.presupuesto_egresos VALUES (955, '4.09.10.00.00', 'Reforma de la seguridad social');
INSERT INTO public.presupuesto_egresos VALUES (956, '4.09.10.01.00', 'Reforma de la seguridad social');
INSERT INTO public.presupuesto_egresos VALUES (957, '4.09.11.00.00', 'Emergencias en el territorio nacional ');
INSERT INTO public.presupuesto_egresos VALUES (958, '4.09.11.01.00', 'Emergencias en el territorio nacional');
INSERT INTO public.presupuesto_egresos VALUES (959, '4.09.12.00.00', 'Fondo para la cancelacion de pasivos laborales');
INSERT INTO public.presupuesto_egresos VALUES (960, '4.09.12.01.00', 'Fondo para la cancelacion de pasivos laborales');
INSERT INTO public.presupuesto_egresos VALUES (961, '4.09.13.00.00', 'Fondo para la cancelacion de deuda por servicios de electricidad, telefono, aseo, agua y condominio');
INSERT INTO public.presupuesto_egresos VALUES (962, '4.09.13.01.00', 'Fondo para la cancelacion de deuda por servicios de electricidad, telefono, aseo, agua y condominio, de los organismos de la Administracion Central');
INSERT INTO public.presupuesto_egresos VALUES (963, '4.09.13.02.00', 'Fondo para la cancelacion de deuda por servicios de electricidad, telefono, aseo, agua y condominio, de los organismos de la Administracion Descentralizada Nacional');
INSERT INTO public.presupuesto_egresos VALUES (964, '4.09.14.00.00', 'Fondo para remuneraciones, pensiones y jubilaciones y otras retribuciones');
INSERT INTO public.presupuesto_egresos VALUES (965, '4.09.14.01.00', 'Fondo para remuneraciones, pensiones y jubilaciones y otras retribuciones');
INSERT INTO public.presupuesto_egresos VALUES (966, '4.09.15.00.00', 'Fondo para atender compromisos generados de la Ley Organica del Trabajo, los Trabajadores y las Trabajadoras');
INSERT INTO public.presupuesto_egresos VALUES (967, '4.09.15.01.00', 'Fondo para atender compromisos generados de la Ley Organica del Trabajo, los Trabajadores y las Trabajadoras');
INSERT INTO public.presupuesto_egresos VALUES (968, '4.09.16.00.00', 'Asignaciones para cancelar compromisos pendientes de ejercicios anteriores');
INSERT INTO public.presupuesto_egresos VALUES (969, '4.09.16.01.00', 'Asignaciones para cancelar compromisos pendientes de ejercicios anteriores');
INSERT INTO public.presupuesto_egresos VALUES (970, '4.09.17.00.00', 'Asignaciones para cancelar la deuda Fogade – Ministerio competente en Materia de Finanzas – Banco Central de Venezuela (BCV)');
INSERT INTO public.presupuesto_egresos VALUES (971, '4.09.17.01.00', 'Asignaciones para cancelar la deuda Fogade – Ministerio competente en Materia de Finanzas – Banco Central de Venezuela (BCV)');
INSERT INTO public.presupuesto_egresos VALUES (972, '4.09.18.00.00', 'Asignaciones para atender los gastos de la referenda y elecciones');
INSERT INTO public.presupuesto_egresos VALUES (973, '4.09.18.01.00', 'Asignaciones para atender los gastos de la referenda y elecciones');
INSERT INTO public.presupuesto_egresos VALUES (974, '4.09.19.00.00', 'Asignaciones para atender los gastos por honorarios profesionales de bufetes internacionales, costas y costos judiciales');
INSERT INTO public.presupuesto_egresos VALUES (975, '4.09.19.01.00', 'Asignaciones para atender los gastos por honorarios profesionales de bufetes internacionales, costas y costos judiciales');
INSERT INTO public.presupuesto_egresos VALUES (976, '4.09.20.00.00', 'Fondo para atender compromisos generados por la contratacion colectiva');
INSERT INTO public.presupuesto_egresos VALUES (977, '4.09.20.01.00', 'Fondo para atender compromisos generados por la contratacion colectiva');
INSERT INTO public.presupuesto_egresos VALUES (978, '4.09.21.00.00', 'Proyecto social especial');
INSERT INTO public.presupuesto_egresos VALUES (979, '4.09.21.01.00', 'Proyecto social especial');
INSERT INTO public.presupuesto_egresos VALUES (980, '4.09.22.00.00', 'Asignaciones para programas y proyectos financiados con recursos de organismos multilaterales y/o bilaterales');
INSERT INTO public.presupuesto_egresos VALUES (981, '4.09.22.01.00', 'Asignaciones para programas y proyectos financiados con recursos de organismos multilaterales y/o bilaterales');
INSERT INTO public.presupuesto_egresos VALUES (982, '4.09.23.00.00', 'Asignacion para facilitar la preparacion de proyectos');
INSERT INTO public.presupuesto_egresos VALUES (983, '4.09.23.01.00', 'Asignacion para facilitar la preparacion de proyectos');
INSERT INTO public.presupuesto_egresos VALUES (984, '4.09.24.00.00', 'Programas de inversion para las entidades estadales, municipalidades y otras instituciones');
INSERT INTO public.presupuesto_egresos VALUES (985, '4.09.24.01.00', 'Programas de inversion para las entidades estadales, municipalidades y otras instituciones');
INSERT INTO public.presupuesto_egresos VALUES (986, '4.09.25.00.00', 'Cancelacion de compromisos');
INSERT INTO public.presupuesto_egresos VALUES (987, '4.09.25.01.00', 'Cancelacion de compromisos');
INSERT INTO public.presupuesto_egresos VALUES (988, '4.09.26.00.00', 'Asignaciones para atender gastos de los organismos del sector publico');
INSERT INTO public.presupuesto_egresos VALUES (989, '4.09.26.01.00', 'Asignaciones para atender gastos de los organismos del sector publico');
INSERT INTO public.presupuesto_egresos VALUES (990, '4.09.27.01.00', 'Convenio de Cooperacion Especial');
INSERT INTO public.presupuesto_egresos VALUES (991, '4.10.00.00.00', 'SERVICIO DE LA DEUDA PuBLICA');
INSERT INTO public.presupuesto_egresos VALUES (992, '4.10.01.00.00', 'Servicio de la deuda publica interna a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (993, '4.10.01.01.00', 'Servicio de la deuda publica interna a corto plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (994, '4.10.01.01.01', 'Amortizacion de la deuda publica interna a corto plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (995, '4.10.01.01.02', 'Amortizacion de la deuda publica interna a corto plazo de letras del tesoro');
INSERT INTO public.presupuesto_egresos VALUES (996, '4.10.01.01.03', 'Intereses de la deuda publica interna a corto plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (997, '4.10.01.01.04', 'Intereses por mora y multas de la deuda publica interna a corto plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (998, '4.10.01.01.05', 'Comisiones y otros gastos de la deuda publica interna a corto plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (999, '4.10.01.01.06', 'Descuentos en colocacion de titulos y valores de la deuda publica interna a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1000, '4.10.01.01.07', 'Descuentos en colocacion de letras del tesoro a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1001, '4.10.01.02.00', 'Servicio de la deuda publica interna por prestamos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1002, '4.10.01.02.01', 'Amortizacion de la deuda publica interna por prestamos recibidos del sector privado a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1003, '4.10.01.02.02', 'Amortizacion de la deuda publica interna por prestamos recibidos de la Republica a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1004, '4.10.01.02.03', 'Amortizacion de la deuda publica interna por prestamos recibidos de entes descentralizados sin fines empresariales a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1005, '4.10.01.02.04', 'Amortizacion de la deuda publica interna por prestamos recibidos de instituciones de proteccion social a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1006, '4.10.01.02.05', 'Amortizacion de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales petroleros a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1007, '4.10.01.02.06', 'Amortizacion de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales no petroleros a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1008, '4.10.01.02.07', 'Amortizacion de la deuda publica interna por prestamos recibidos de entes descentralizados financieros bancarios a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1009, '4.10.01.02.08', 'Amortizacion de la deuda publica interna por prestamos recibidos de entes descentralizados financieros no bancarios a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1010, '4.10.01.02.09', 'Amortizacion de la deuda publica interna por prestamos recibidos del Poder Estadal a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1011, '4.10.01.02.10', 'Amortizacion de la deuda publica interna por prestamos recibidos del Poder Municipal a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1012, '4.10.01.02.11', 'Intereses de la deuda publica interna por prestamos recibidos del sector privado a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1013, '4.10.01.02.12', 'Intereses de la deuda publica interna por prestamos recibidos de la Republica a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1014, '4.10.01.02.13', 'Intereses de la deuda publica interna por prestamos recibidos de entes descentralizados sin fines empresariales a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1015, '4.10.01.02.14', 'Intereses de la deuda publica interna por prestamos recibidos de instituciones de proteccion social a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1219, '4.11.01.01.00', 'Disminucion de sueldos, salarios y otras remuneraciones por pagar');
INSERT INTO public.presupuesto_egresos VALUES (1016, '4.10.01.02.15', 'Intereses de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales petroleros a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1017, '4.10.01.02.16', 'Intereses de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales no petroleros a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1018, '4.10.01.02.17', 'Intereses de la deuda publica interna por prestamos recibidos de entes descentralizados financieros bancarios a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1019, '4.10.01.02.18', 'Intereses de la deuda publica interna por prestamos recibidos de entes descentralizados financieros no bancarios a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1020, '4.10.01.02.19', 'Intereses de la deuda publica interna por prestamos recibidos del Poder Estadal a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1021, '4.10.01.02.20', 'Intereses de la deuda publica interna por prestamos recibidos del Poder Municipal a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1022, '4.10.01.02.21', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos del sector privado a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1023, '4.10.01.02.22', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos de la Republica a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1024, '4.10.01.02.23', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos de entes descentralizados sin fines empresariales a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1025, '4.10.01.02.24', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos de instituciones de proteccion social a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1026, '4.10.01.02.25', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales petroleros a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1027, '4.10.01.02.26', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales no petroleros a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1028, '4.10.01.02.27', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos de entes descentralizados financieros bancarios a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1029, '4.10.01.02.28', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos de entes descentralizados financieros no bancarios a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1030, '4.10.01.02.29', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos del Poder Estadal a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1031, '4.10.01.02.30', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos del Poder Municipal a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1032, '4.10.01.02.31', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos del sector privado a corto plazo ');
INSERT INTO public.presupuesto_egresos VALUES (1033, '4.10.01.02.32', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos de la Republica a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1034, '4.10.01.02.33', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos de entes descentralizados sin fines empresariales a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1035, '4.10.01.02.34', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos de instituciones de proteccion social a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1036, '4.10.01.02.35', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales petroleros a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1037, '4.10.01.02.36', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales no petroleros a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1038, '4.10.01.02.37', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos de entes descentralizados financieros bancarios a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1039, '4.10.01.02.38', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos de entes descentralizados financieros no bancarios a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1040, '4.10.01.02.39', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos del Poder Estadal a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1041, '4.10.01.02.40', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos del Poder Municipal a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1042, '4.10.01.03.00', 'Servicio de la deuda publica interna indirecta por prestamos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1043, '4.10.01.03.01', 'Amortizacion de la deuda publica interna indirecta por prestamos recibidos del sector privado a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1044, '4.10.01.03.02', 'Amortizacion de la deuda publica interna indirecta por prestamos recibidos del sector publico a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1045, '4.10.01.03.03', 'Intereses de la deuda publica interna indirecta por prestamos recibidos del sector privado a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1046, '4.10.01.03.04', 'Intereses de la deuda publica interna indirecta por prestamos recibidos del sector publico a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1047, '4.10.01.03.05', 'Intereses por mora y multas de la deuda publica interna indirecta por prestamos recibidos del sector privado a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1048, '4.10.01.03.06', 'Intereses por mora y multas de la deuda publica interna indirecta por prestamos recibidos del sector publico a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1049, '4.10.01.03.07', 'Comisiones y otros gastos de la deuda publica interna indirecta por prestamos recibidos del sector privado a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1050, '4.10.01.03.08', 'Comisiones y otros gastos de la deuda publica interna indirecta por prestamos recibidos del sector publico a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1052, '4.10.02.01.00', 'Servicio de la deuda publica interna a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1053, '4.10.02.01.01', 'Amortizacion de la deuda publica interna a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1054, '4.10.02.01.02', 'Amortizacion de la deuda publica interna a largo plazo de letras del tesoro');
INSERT INTO public.presupuesto_egresos VALUES (1055, '4.10.02.01.03', 'Intereses de la deuda publica interna a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1056, '4.10.02.01.04', 'Intereses por mora y multas de la deuda publica interna a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1057, '4.10.02.01.05', 'Comisiones y otros gastos de la deuda publica interna a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1058, '4.10.02.01.06', 'Descuentos en colocacion de titulos y valores de la deuda publica interna a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1059, '4.10.02.01.07', 'Descuentos en colocacion de letras del tesoro a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1060, '4.10.02.02.00', 'Servicio de la deuda publica interna por prestamos a largo plazo ');
INSERT INTO public.presupuesto_egresos VALUES (1061, '4.10.02.02.01', 'Amortizacion de la deuda publica interna por prestamos recibidos del sector privado a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1062, '4.10.02.02.02', 'Amortizacion de la deuda publica interna por prestamos recibidos de la Republica a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1063, '4.10.02.02.03', 'Amortizacion de la deuda publica interna por prestamos recibidos de entes descentralizados sin fines empresariales a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1064, '4.10.02.02.04', 'Amortizacion de la deuda publica interna por prestamos recibidos de instituciones de proteccion social a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1065, '4.10.02.02.05', 'Amortizacion de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales petroleros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1218, '4.11.01.00.00', 'Disminucion de gastos de personal por pagar');
INSERT INTO public.presupuesto_egresos VALUES (1066, '4.10.02.02.06', 'Amortizacion de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales no petroleros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1067, '4.10.02.02.07', 'Amortizacion de la deuda publica interna por prestamos recibidos de entes descentralizados financieros bancarios a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1068, '4.10.02.02.08', 'Amortizacion de la deuda publica interna por prestamos recibidos de entes descentralizados financieros no bancarios a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1069, '4.10.02.02.09', 'Amortizacion de la deuda publica interna por prestamos recibidos del Poder Estadal a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1070, '4.10.02.02.10', 'Amortizacion de la deuda publica interna por prestamos recibidos del Poder Municipal a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1071, '4.10.02.02.11', 'Intereses de la deuda publica interna por prestamos recibidos del sector privado a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1072, '4.10.02.02.12', 'Intereses de la deuda publica interna por prestamos recibidos de la Republica a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1073, '4.10.02.02.13', 'Intereses de la deuda publica interna por prestamos recibidos de entes descentralizados sin fines empresariales a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1074, '4.10.02.02.14', 'Intereses de la deuda publica interna por prestamos recibidos de instituciones de proteccion social a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1075, '4.10.02.02.15', 'Intereses de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales petroleros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1076, '4.10.02.02.16', 'Intereses de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales no petroleros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1077, '4.10.02.02.17', 'Intereses de la deuda publica interna por prestamos recibidos de entes descentralizados financieros bancarios a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1078, '4.10.02.02.18', 'Intereses de la deuda publica interna por prestamos recibidos de entes descentralizados financieros no bancarios a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1079, '4.10.02.02.19', 'Intereses de la deuda publica interna por prestamos recibidos del Poder Estadal a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1080, '4.10.02.02.20', 'Intereses de la deuda publica interna por prestamos recibidos del Poder Municipal a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1081, '4.10.02.02.21', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos del sector privado a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1082, '4.10.02.02.22', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos de la Republica a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1083, '4.10.02.02.23', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos de entes descentralizados sin fines empresariales a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1084, '4.10.02.02.24', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos de instituciones de proteccion social a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1085, '4.10.02.02.25', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales petroleros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1086, '4.10.02.02.26', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales no petroleros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1087, '4.10.02.02.27', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos de entes descentralizados financieros bancarios a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1088, '4.10.02.02.28', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos de entes descentralizados financieros no bancarios a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1089, '4.10.02.02.29', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos del Poder Estadal a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1090, '4.10.02.02.30', 'Intereses por mora y multas de la deuda publica interna por prestamos recibidos del Poder Municipal a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1091, '4.10.02.02.31', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos del sector privado a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1092, '4.10.02.02.32', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos de la Republica a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1093, '4.10.02.02.33', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos de entes descentralizados sin fines empresariales a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1094, '4.10.02.02.34', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos de instituciones de proteccion social a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1095, '4.10.02.02.35', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales petroleros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1096, '4.10.02.02.36', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos de entes descentralizados con fines empresariales no petroleros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1097, '4.10.02.02.37', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos de entes descentralizados financieros bancarios a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1098, '4.10.02.02.38', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos de entes descentralizados financieros no bancarios a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1099, '4.10.02.02.39', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos del Poder Estadal a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1100, '4.10.02.02.40', 'Comisiones y otros gastos de la deuda publica interna por prestamos recibidos del Poder Municipal a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1101, '4.10.02.03.00', 'Servicio de la deuda publica interna indirecta a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1102, '4.10.02.03.01', 'Amortizacion de la deuda publica interna indirecta a largo plazo de titulos y valores ');
INSERT INTO public.presupuesto_egresos VALUES (1104, '4.10.02.03.02', 'Intereses de la deuda publica interna indirecta a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1105, '4.10.02.03.03', 'Intereses por mora y multas de la deuda publica interna indirecta a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1106, '4.10.02.03.04', 'Comisiones y otros gastos de la deuda publica interna indirecta a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1107, '4.10.02.03.05', 'Descuentos en colocacion de titulos y valores de la deuda publica interna indirecta de largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1108, '4.10.02.04.00', 'Servicio de la deuda publica interna indirecta por prestamos a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1109, '4.10.02.04.01', 'Amortizacion de la deuda publica interna indirecta por prestamos recibidos del sector privado a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1110, '4.10.02.04.02', 'Amortizacion de la deuda publica interna indirecta por prestamos recibidos del sector publico a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1111, '4.10.02.04.03', 'Intereses de la deuda publica interna indirecta por prestamos recibidos del sector privado a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1112, '4.10.02.04.04', 'Intereses de la deuda publica interna indirecta por prestamos recibidos del sector publico a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1113, '4.10.02.04.05', 'Intereses por mora y multas de la deuda publica interna indirecta por prestamos recibidos del sector privado a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1114, '4.10.02.04.06', 'Intereses por mora y multas de la deuda publica interna indirecta por prestamos recibidos del sector publico a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1297, '4.98.00.00.00', 'RECTIFICACIONES AL PRESUPUESTO');
INSERT INTO public.presupuesto_egresos VALUES (1115, '4.10.02.04.07', 'Comisiones y otros gastos de la deuda publica interna indirecta por prestamos recibidos del sector privado a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1116, '4.10.02.04.08', 'Comisiones y otros gastos de la deuda publica interna indirecta por prestamos recibidos del sector publico a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1117, '4.10.03.00.00', 'Servicio de la deuda publica externa a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1118, '4.10.03.01.00', 'Servicio de la deuda publica externa a corto plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1119, '4.10.03.01.01', 'Amortizacion de la deuda publica externa a corto plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1120, '4.10.03.01.02', 'Intereses de la deuda publica externa a corto plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1121, '4.10.03.01.03', 'Intereses por mora y multas de la deuda publica externa a corto plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1122, '4.10.03.01.04', 'Comisiones y otros gastos de la deuda publica externa a corto plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1123, '4.10.03.01.05', 'Descuentos en colocacion de titulos y valores de la deuda publica externa a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1124, '4.10.03.02.00', 'Servicio de la deuda publica externa por prestamos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1125, '4.10.03.02.01', 'Amortizacion de la deuda publica externa por prestamos recibidos de gobiernos extranjeros a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1126, '4.10.03.02.02', 'Amortizacion de la deuda publica externa por prestamos recibidos de organismos internacionales a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1127, '4.10.03.02.03', 'Amortizacion de la deuda publica externa por prestamos recibidos de instituciones financieras externas a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1128, '4.10.03.02.04', 'Amortizacion de la deuda publica externa por prestamos recibidos de proveedores de bienes y servicios externos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1129, '4.10.03.02.05', 'Intereses de la deuda publica externa por prestamos recibidos de gobiernos extranjeros a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1130, '4.10.03.02.06', 'Intereses de la deuda publica externa por prestamos recibidos de organismos internacionales a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1131, '4.10.03.02.07', 'Intereses de la deuda publica externa por prestamos recibidos de instituciones financieras externas a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1132, '4.10.03.02.08', 'Intereses de la deuda publica externa por prestamos recibidos de proveedores de bienes y servicios externos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1133, '4.10.03.02.09', 'Intereses por mora y multas de la deuda publica externa por prestamos recibidos de gobiernos extranjeros a corto plazo ');
INSERT INTO public.presupuesto_egresos VALUES (1134, '4.10.03.02.10', 'Intereses por mora y multas de la deuda publica externa por prestamos recibidos de organismos internacionales a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1135, '4.10.03.02.11', 'Intereses por mora y multas de la deuda publica externa por prestamos recibidos de instituciones financieras externas a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1136, '4.10.03.02.12', 'Intereses por mora y multas de la deuda publica externa por prestamos recibidos de proveedores de bienes y servicios externos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1137, '4.10.03.02.13', 'Comisiones y otros gastos de la deuda publica externa por prestamos recibidos de gobiernos extranjeros a corto plazo ');
INSERT INTO public.presupuesto_egresos VALUES (1138, '4.10.03.02.14', 'Comisiones y otros gastos de la deuda publica externa por prestamos recibidos de organismos internacionales a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1139, '4.10.03.02.15', 'Comisiones y otros gastos de la deuda publica externa por prestamos recibidos de instituciones financieras externas a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1140, '4.10.03.02.16', 'Comisiones y otros gastos de la deuda publica externa por prestamos recibidos de proveedores de bienes y servicios externos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1141, '4.10.03.03.00', 'Servicio de la deuda publica externa indirecta por prestamos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1142, '4.10.03.03.01', 'Amortizacion de la deuda publica externa indirecta por prestamos recibidos de gobiernos extranjeros a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1143, '4.10.03.03.02', 'Amortizacion de la deuda publica externa indirecta por prestamos recibidos de organismos internacionales a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1144, '4.10.03.03.03', 'Amortizacion de la deuda publica externa indirecta por prestamos recibidos de instituciones financieras externas a corto plazo ');
INSERT INTO public.presupuesto_egresos VALUES (1145, '4.10.03.03.04', 'Amortizacion de la deuda publica externa indirecta por prestamos recibidos de proveedores de bienes y servicios externos a corto plazo ');
INSERT INTO public.presupuesto_egresos VALUES (1146, '4.10.03.03.05', 'Intereses de la deuda publica externa indirecta por prestamos recibidos de gobiernos extranjeros a corto plazo ');
INSERT INTO public.presupuesto_egresos VALUES (1147, '4.10.03.03.06', 'Intereses de la deuda publica externa indirecta por prestamos recibidos de organismos internacionales a corto plazo ');
INSERT INTO public.presupuesto_egresos VALUES (1148, '4.10.03.03.07', 'Intereses de la deuda publica externa indirecta por prestamos recibidos de instituciones financieras externas a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1149, '4.10.03.03.08', 'Intereses de la deuda publica externa indirecta por prestamos recibidos de proveedores de bienes y servicios externos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1150, '4.10.03.03.09', 'Intereses por mora y multas de la deuda publica externa indirecta por prestamos recibidos de gobiernos extranjeros a corto plazo ');
INSERT INTO public.presupuesto_egresos VALUES (1151, '4.10.03.03.10', 'Intereses por mora y multas de la deuda publica externa indirecta por prestamos recibidos de organismos internacionales a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1270, '4.11.10.01.01', 'Disminucion de depositos de terceros a la vista de organismos del sector publico');
INSERT INTO public.presupuesto_egresos VALUES (1152, '4.10.03.03.11', 'Intereses por mora y multas de la deuda publica externa indirecta por prestamos recibidos de instituciones financieras externas a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1153, '4.10.03.03.12', 'Intereses por mora y multas de la deuda publica externa indirecta por prestamos recibidos de proveedores de bienes y servicios externos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1154, '4.10.03.03.14', 'Comisiones y otros gastos de la deuda publica externa indirecta por prestamos recibidos de organismos internacionales a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1155, '4.10.03.03.15', 'Comisiones y otros gastos de la deuda publica externa indirecta por prestamos recibidos de instituciones financieras externas a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1156, '4.10.03.03.16', 'Comisiones y otros gastos de la deuda publica externa indirecta por prestamos recibidos de proveedores de bienes y servicios externos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1157, '4.10.04.00.00', 'Servicio de la deuda publica externa a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1158, '4.10.04.01.00', 'Servicio de la deuda publica externa a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1159, '4.10.04.01.01', 'Amortizacion de la deuda publica externa a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1160, '4.10.04.01.02', 'Intereses de la deuda publica externa a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1161, '4.10.04.01.03', 'Intereses por mora y multas de la deuda publica externa a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1162, '4.10.04.01.04', 'Comisiones y otros gastos de la deuda publica externa a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1163, '4.10.04.01.05', 'Descuentos en colocacion de titulos y valores de la deuda publica externa a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1164, '4.10.04.02.00', 'Servicio de la deuda publica externa por prestamos a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1165, '4.10.04.02.01', 'Amortizacion de la deuda publica externa por prestamos recibidos de gobiernos extranjeros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1166, '4.10.04.02.02', 'Amortizacion de la deuda publica externa por prestamos recibidos de organismos internacionales a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1167, '4.10.04.02.03', 'Amortizacion de la deuda publica externa por prestamos recibidos de instituciones financieras externas a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1168, '4.10.04.02.04', 'Amortizacion de la deuda publica externa por prestamos recibidos de proveedores de bienes y servicios externos a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1169, '4.10.04.02.05', 'Intereses de la deuda publica externa por prestamos recibidos de gobiernos extranjeros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1170, '4.10.04.02.06', 'Intereses de la deuda publica externa por prestamos recibidos de organismos internacionales a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1171, '4.10.04.02.07', 'Intereses de la deuda publica externa por prestamos recibidos de instituciones financieras externas a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1172, '4.10.04.02.08', 'Intereses de la deuda publica externa por prestamos recibidos de proveedores de bienes y servicios externos a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1173, '4.10.04.02.09', 'Intereses por mora y multas de la deuda publica externa por prestamos recibidos de gobiernos extranjeros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1174, '4.10.04.02.10', 'Intereses por mora y multas de la deuda publica externa por prestamos recibidos de organismos internacionales a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1175, '4.10.04.02.11', 'Intereses por mora y multas de la deuda publica externa por prestamos recibidos de instituciones financieras externas a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1176, '4.10.04.02.12', 'Intereses por mora y multas de la deuda publica externa por prestamos recibidos de proveedores de bienes y servicios externos a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1177, '4.10.04.02.13', 'Comisiones y otros gastos de la deuda publica externa por prestamos recibidos de gobiernos extranjeros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1178, '4.10.04.02.14', 'Comisiones y otros gastos de la deuda publica externa por prestamos recibidos de organismos internacionales a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1179, '4.10.04.02.15', 'Comisiones y otros gastos de la deuda publica externa por prestamos recibidos de instituciones financieras externas a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1180, '4.10.04.02.16', 'Comisiones y otros gastos de la deuda publica externa por prestamos recibidos de proveedores de bienes y servicios externos a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1181, '4.10.04.03.00', 'Servicio de la deuda publica externa indirecta a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1182, '4.10.04.03.01', 'Amortizacion de la deuda publica externa indirecta a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1183, '4.10.04.03.02', 'Intereses de la deuda publica externa indirecta a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1184, '4.10.04.03.03', 'Intereses por mora y multas de la deuda publica externa indirecta a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1185, '4.10.04.03.04', 'Comisiones y otros gastos de la deuda publica externa indirecta a largo plazo de titulos y valores');
INSERT INTO public.presupuesto_egresos VALUES (1186, '4.10.04.03.05', 'Descuentos en colocacion de titulos y valores de la deuda publica externa indirecta a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1187, '4.10.04.04.00', 'Servicio de la deuda publica externa indirecta por prestamos a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1188, '4.10.04.04.01', 'Amortizacion de la deuda publica externa indirecta por prestamos recibidos de gobiernos extranjeros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1189, '4.10.04.04.02', 'Amortizacion de la deuda publica externa indirecta por prestamos recibidos de organismos internacionales a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1190, '4.10.04.04.03', 'Amortizacion de la deuda publica externa indirecta por prestamos recibidos de instituciones financieras externas a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1191, '4.10.04.04.04', 'Amortizacion de la deuda publica externa indirecta por prestamos recibidos de proveedores de bienes y servicios externos a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1192, '4.10.04.04.05', 'Intereses de la deuda publica externa indirecta por prestamos recibidos de gobiernos extranjeros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1193, '4.10.04.04.06', 'Intereses de la deuda publica externa indirecta por prestamos recibidos de organismos internacionales a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1194, '4.10.04.04.07', 'Intereses de la deuda publica externa indirecta por prestamos recibidos de instituciones financieras externas a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1195, '4.10.04.04.08', 'Intereses de la deuda publica externa indirecta por prestamos recibidos de proveedores de bienes y servicios externos a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1196, '4.10.04.04.09', 'Intereses por mora y multas de la deuda publica externa indirecta por prestamos recibidos de gobiernos extranjeros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1197, '4.10.04.04.10', 'Intereses por mora y multas de la deuda publica externa indirecta por prestamos recibidos de organismos internacionales a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1198, '4.10.04.04.11', 'Intereses por mora y multas de la deuda publica externa indirecta por prestamos recibidos de instituciones financieras externas a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1199, '4.10.04.04.12', 'Intereses por mora y multas de la deuda publica externa indirecta por prestamos recibidos de proveedores de bienes y servicios externos a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1200, '4.10.04.04.13', 'Comisiones y otros gastos de la deuda publica externa indirecta por prestamos recibidos de gobiernos extranjeros a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1201, '4.10.04.04.14', 'Comisiones y otros gastos de la deuda publica externa indirecta por prestamos recibidos de organismos internacionales a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1202, '4.10.04.04.15', 'Comisiones y otros gastos de la deuda publica externa indirecta por prestamos recibidos de instituciones financieras externas a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1203, '4.10.04.04.16', 'Comisiones y otros gastos de la deuda publica externa indirecta por prestamos recibidos de proveedores de bienes y servicios externos a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1204, '4.10.05.00.00', 'Reestructuracion y/o refinanciamiento de la deuda publica');
INSERT INTO public.presupuesto_egresos VALUES (1205, '4.10.05.01.00', 'Disminucion por reestructuracion y/o refinanciamiento de la deuda interna a largo plazo, en a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1206, '4.10.05.02.00', 'Disminucion por reestructuracion y/o refinanciamiento de la deuda interna a corto plazo, en a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1207, '4.10.05.03.00', 'Disminucion por reestructuracion y/o refinanciamiento de la deuda externa a largo plazo, en a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1208, '4.10.05.04.00', 'Disminucion por reestructuracion y/o refinanciamiento de la deuda externa a corto plazo, en a largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1209, '4.10.05.05.00', 'Disminucion de la deuda publica por distribuir');
INSERT INTO public.presupuesto_egresos VALUES (1210, '4.10.05.05.01', 'Disminucion de la deuda publica interna por distribuir');
INSERT INTO public.presupuesto_egresos VALUES (1211, '4.10.05.05.02', 'Disminucion de la deuda publica externa por distribuir');
INSERT INTO public.presupuesto_egresos VALUES (1212, '4.10.06.00.00', 'Servicio de la deuda publica por obligaciones de ejercicios anteriores');
INSERT INTO public.presupuesto_egresos VALUES (1213, '4.10.06.01.00', 'Amortizacion de la deuda publica de obligaciones pendientes de ejercicios anteriores');
INSERT INTO public.presupuesto_egresos VALUES (1214, '4.10.06.02.00', 'Intereses de la deuda publica de obligaciones pendientes de ejercicios anteriores');
INSERT INTO public.presupuesto_egresos VALUES (1215, '4.10.06.03.00', 'Intereses por mora y multas de la deuda publica de obligaciones pendientes de ejercicios anteriores');
INSERT INTO public.presupuesto_egresos VALUES (1216, '4.10.06.04.00', 'Comisiones y otros gastos de la deuda publica de obligaciones pendientes de ejercicios anteriores');
INSERT INTO public.presupuesto_egresos VALUES (1217, '4.11.00.00.00', 'DISMINUCION DE PASIVOS');
INSERT INTO public.presupuesto_egresos VALUES (1220, '4.11.02.00.00', 'Disminucion de aportes patronales y retenciones laborales por pagar');
INSERT INTO public.presupuesto_egresos VALUES (1221, '4.11.02.01.00', 'Disminucion de aportes patronales y retenciones laborales por pagar al Instituto Venezolano de los Seguros Sociales (IVSS)');
INSERT INTO public.presupuesto_egresos VALUES (1222, '4.11.02.02.00', 'Disminucion de aportes patronales y retenciones laborales por pagar al Instituto de Prevision Social del Ministerio de Educacion (Ipasme)');
INSERT INTO public.presupuesto_egresos VALUES (1223, '4.11.02.03.00', 'Disminucion de aportes patronales y retenciones laborales por pagar al Fondo de Jubilaciones');
INSERT INTO public.presupuesto_egresos VALUES (1224, '4.11.02.04.00', 'Disminucion de aportes patronales y retenciones laborales por pagar al Fondo de Seguro de Paro Forzoso');
INSERT INTO public.presupuesto_egresos VALUES (1225, '4.11.02.05.00', 'Disminucion de aportes patronales y retenciones laborales por pagar al Fondo de Ahorro Obligatorio para la Vivienda (FAOV)');
INSERT INTO public.presupuesto_egresos VALUES (1226, '4.11.02.06.00', 'Disminucion de aportes patronales y retenciones laborales por pagar al seguro de vida, accidentes personales, hospitalizacion, cirugia, maternidad (HCM) y gastos funerarios');
INSERT INTO public.presupuesto_egresos VALUES (1227, '4.11.02.07.00', 'Disminucion de aportes patronales y retenciones laborales por pagar a cajas de ahorro');
INSERT INTO public.presupuesto_egresos VALUES (1228, '4.11.02.08.00', 'Disminucion de aportes patronales por pagar a organismos de seguridad social');
INSERT INTO public.presupuesto_egresos VALUES (1229, '4.11.02.09.00', 'Disminucion de retenciones laborales por pagar al Instituto Nacional de Capacitacion y Educacion Socialista (Inces)');
INSERT INTO public.presupuesto_egresos VALUES (1230, '4.11.02.10.00', 'Disminucion de retenciones laborales por pagar por pension alimenticia');
INSERT INTO public.presupuesto_egresos VALUES (1231, '4.11.02.98.00', 'Disminucion de otros aportes legales por pagar');
INSERT INTO public.presupuesto_egresos VALUES (1232, '4.11.02.99.00', 'Disminucion de otras retenciones laborales por pagar');
INSERT INTO public.presupuesto_egresos VALUES (1233, '4.11.03.00.00', 'Disminucion de cuentas y efectos por pagar a proveedores');
INSERT INTO public.presupuesto_egresos VALUES (1234, '4.11.03.01.00', 'Disminucion de cuentas por pagar a proveedores a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1235, '4.11.03.02.00', 'Disminucion de efectos por pagar a proveedores a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1236, '4.11.03.03.00', 'Disminucion de cuentas por pagar a proveedores a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1237, '4.11.03.04.00', 'Disminucion de efectos por pagar a proveedores a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1238, '4.11.04.00.00', 'Disminucion de cuentas y efectos por pagar a contratistas');
INSERT INTO public.presupuesto_egresos VALUES (1239, '4.11.04.01.00', 'Disminucion de cuentas por pagar a contratistas a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1240, '4.11.04.02.00', 'Disminucion de efectos por pagar a contratistas a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1241, '4.11.04.03.00', 'Disminucion de cuentas por pagar a contratistas a mediano largo y plazo');
INSERT INTO public.presupuesto_egresos VALUES (1242, '4.11.04.04.00', 'Disminucion de efectos por pagar a contratistas a mediano y plazo');
INSERT INTO public.presupuesto_egresos VALUES (1243, '4.11.05.00.00', 'Disminucion de intereses por pagar');
INSERT INTO public.presupuesto_egresos VALUES (1244, '4.11.05.01.00', 'Disminucion de intereses internos por pagar');
INSERT INTO public.presupuesto_egresos VALUES (1245, '4.11.05.02.00', 'Disminucion de intereses externos por pagar');
INSERT INTO public.presupuesto_egresos VALUES (1246, '4.11.06.00.00', 'Disminucion de otras cuentas y efectos por pagar a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1247, '4.11.06.01.00', 'Disminucion de obligaciones de ejercicios anteriores');
INSERT INTO public.presupuesto_egresos VALUES (1248, '4.11.06.02.00', 'Disminucion de otras cuentas por pagar a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1249, '4.11.06.03.00', 'Disminucion de otros efectos por pagar a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1250, '4.11.07.00.00', 'Disminucion de pasivos diferidos');
INSERT INTO public.presupuesto_egresos VALUES (1251, '4.11.07.01.00', 'Disminucion de pasivos diferidos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1252, '4.11.07.01.01', 'Disminucion de rentas diferidas por recaudar a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1253, '4.11.07.02.00', 'Disminucion de pasivos diferidos a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1254, '4.11.07.02.01', 'Disminucion del rescate de certificados de reintegro tributario');
INSERT INTO public.presupuesto_egresos VALUES (1255, '4.11.07.02.02', 'Disminucion del rescate de bonos de exportacion');
INSERT INTO public.presupuesto_egresos VALUES (1256, '4.11.07.02.03', 'Disminucion del rescate de bonos en dacion de pagos');
INSERT INTO public.presupuesto_egresos VALUES (1257, '4.11.08.00.00', 'Disminucion de provisiones y reservas tecnicas');
INSERT INTO public.presupuesto_egresos VALUES (1258, '4.11.08.01.00', 'Disminucion de provisiones');
INSERT INTO public.presupuesto_egresos VALUES (1259, '4.11.08.01.01', 'Disminucion de provisiones para cuentas incobrables');
INSERT INTO public.presupuesto_egresos VALUES (1260, '4.11.08.01.02', 'Disminucion de provisiones para despidos');
INSERT INTO public.presupuesto_egresos VALUES (1261, '4.11.08.01.03', 'Disminucion de provisiones para perdidas en el inventario');
INSERT INTO public.presupuesto_egresos VALUES (1262, '4.11.08.01.04', 'Disminucion de provisiones para beneficios sociales');
INSERT INTO public.presupuesto_egresos VALUES (1263, '4.11.08.01.99', 'Disminucion de otras provisiones');
INSERT INTO public.presupuesto_egresos VALUES (1264, '4.11.08.02.00', 'Disminucion de reservas tecnicas');
INSERT INTO public.presupuesto_egresos VALUES (1265, '4.11.09.00.00', 'Disminucion de fondos de terceros');
INSERT INTO public.presupuesto_egresos VALUES (1266, '4.11.09.01.00', 'Disminucion de depositos recibidos en garantia');
INSERT INTO public.presupuesto_egresos VALUES (1267, '4.11.09.99.00', 'Disminucion de otros fondos de terceros');
INSERT INTO public.presupuesto_egresos VALUES (1268, '4.11.10.00.00', 'Disminucion de depositos de instituciones financieras');
INSERT INTO public.presupuesto_egresos VALUES (1269, '4.11.10.01.00', 'Disminucion de depositos a la vista');
INSERT INTO public.presupuesto_egresos VALUES (1271, '4.11.10.01.02', 'Disminucion de depositos de terceros a la vista de personas naturales y juridicas del sector privado');
INSERT INTO public.presupuesto_egresos VALUES (1272, '4.11.10.02.00', 'Disminucion de depositos a plazo fijo');
INSERT INTO public.presupuesto_egresos VALUES (1273, '4.11.10.02.01', 'Disminucion de depositos a plazo fijo de organismos del sector publico');
INSERT INTO public.presupuesto_egresos VALUES (1274, '4.11.10.02.02', 'Disminucion de depositos a plazo fijo de personas naturales y juridicas del sector privado');
INSERT INTO public.presupuesto_egresos VALUES (1275, '4.11.11.00.00', 'Obligaciones de ejercicios anteriores');
INSERT INTO public.presupuesto_egresos VALUES (1276, '4.11.11.01.00', 'Devoluciones de cobros indebidos');
INSERT INTO public.presupuesto_egresos VALUES (1277, '4.11.11.02.00', 'Devoluciones y reintegros diversos');
INSERT INTO public.presupuesto_egresos VALUES (1278, '4.11.11.03.00', 'Indemnizaciones diversas');
INSERT INTO public.presupuesto_egresos VALUES (1279, '4.11.11.04.00', 'Compromisos pendientes de ejercicios anteriores');
INSERT INTO public.presupuesto_egresos VALUES (1280, '4.11.11.05.00', 'Prestaciones sociales originadas por la aplicacion de la Ley Organica del Trabajo, los Trabajadores y las Trabajadoras');
INSERT INTO public.presupuesto_egresos VALUES (1281, '4.11.98.00.00', 'Disminucion de otros pasivos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1282, '4.11.98.01.00', 'Disminucion de otros pasivos a corto plazo');
INSERT INTO public.presupuesto_egresos VALUES (1283, '4.11.99.00.00', 'Disminucion de otros pasivos a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1284, '4.11.99.01.00', 'Disminucion de otros pasivos a mediano y largo plazo');
INSERT INTO public.presupuesto_egresos VALUES (1285, '4.12.00.00.00', 'DISMINUCIoN DEL PATRIMONIO');
INSERT INTO public.presupuesto_egresos VALUES (1286, '4.12.01.00.00', 'Disminucion del capital');
INSERT INTO public.presupuesto_egresos VALUES (1287, '4.12.01.01.00', 'Disminucion del capital fiscal e institucional');
INSERT INTO public.presupuesto_egresos VALUES (1288, '4.12.01.02.00', 'Disminucion de aportes por capitalizar');
INSERT INTO public.presupuesto_egresos VALUES (1289, '4.12.01.03.00', 'Disminucion de dividendos a distribuir');
INSERT INTO public.presupuesto_egresos VALUES (1290, '4.12.02.00.00', 'Disminucion de reservas');
INSERT INTO public.presupuesto_egresos VALUES (1291, '4.12.02.01.00', 'Disminucion de reservas');
INSERT INTO public.presupuesto_egresos VALUES (1292, '4.12.03.00.00', 'Ajuste por inflacion');
INSERT INTO public.presupuesto_egresos VALUES (1293, '4.12.03.01.00', 'Ajuste por inflacion');
INSERT INTO public.presupuesto_egresos VALUES (1294, '4.12.04.00.00', 'Disminucion de resultados');
INSERT INTO public.presupuesto_egresos VALUES (1295, '4.12.04.01.00', 'Disminucion de resultados acumulados');
INSERT INTO public.presupuesto_egresos VALUES (1296, '4.12.04.02.00', 'Disminucion de resultados del ejercicio');
INSERT INTO public.presupuesto_egresos VALUES (1298, '4.98.01.00.00', 'Rectificaciones al presupuesto');
INSERT INTO public.presupuesto_egresos VALUES (1299, '4.98.01.01.00', 'Rectificaciones al presupuesto');
INSERT INTO public.presupuesto_egresos VALUES (1300, '4.01.01.18.00.02', 'Remuneracion por Honorarios Profesionales ');
INSERT INTO public.presupuesto_egresos VALUES (1301, '4.07.01.01.14.00', 'Aportes a caja de ahorro del personal jubilado');
INSERT INTO public.presupuesto_egresos VALUES (1302, '4.07.01.01.10.00', 'Aportes a caja de ahorro del personal pensionado');


--
-- TOC entry 7059 (class 0 OID 41134)
-- Dependencies: 331
-- Data for Name: mrrhh_requisicion_servicios_partidas; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6979 (class 0 OID 40056)
-- Dependencies: 251
-- Data for Name: mrrhh_sueldo_base; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.mrrhh_sueldo_base VALUES (1, '', 400000.00);


--
-- TOC entry 7280 (class 0 OID 44735)
-- Dependencies: 552
-- Data for Name: mrrhh_ultimo_sueldo; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7252 (class 0 OID 44242)
-- Dependencies: 524
-- Data for Name: mrrhh_vacaciones; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7255 (class 0 OID 44302)
-- Dependencies: 527
-- Data for Name: mrrhh_vacaciones_obreros; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7258 (class 0 OID 44375)
-- Dependencies: 530
-- Data for Name: mrrhh_vacaciones_obrerosx; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7262 (class 0 OID 44434)
-- Dependencies: 534
-- Data for Name: mrrhh_vacacionesx; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7320 (class 0 OID 45215)
-- Dependencies: 592
-- Data for Name: ordenamiento_compra; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7318 (class 0 OID 45199)
-- Dependencies: 590
-- Data for Name: ordenamiento_nomina; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7324 (class 0 OID 45248)
-- Dependencies: 596
-- Data for Name: ordenamiento_servicio; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7316 (class 0 OID 45188)
-- Dependencies: 588
-- Data for Name: ordenamiento_tipo_calculo; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7322 (class 0 OID 45232)
-- Dependencies: 594
-- Data for Name: ordenamiento_transferencia; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7033 (class 0 OID 40374)
-- Dependencies: 305
-- Data for Name: parametros_fijos; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6963 (class 0 OID 39968)
-- Dependencies: 235
-- Data for Name: porcentaje; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6949 (class 0 OID 39736)
-- Dependencies: 221
-- Data for Name: presupuesto_forma2102; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6935 (class 0 OID 39577)
-- Dependencies: 207
-- Data for Name: presupuesto_forma2103; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6956 (class 0 OID 39887)
-- Dependencies: 228
-- Data for Name: presupuesto_forma2121_ajuste; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6958 (class 0 OID 39909)
-- Dependencies: 230
-- Data for Name: presupuesto_nuevo_ordinal; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6945 (class 0 OID 39697)
-- Dependencies: 217
-- Data for Name: presupuesto_ordinal; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 6947 (class 0 OID 39720)
-- Dependencies: 219
-- Data for Name: presupuesto_ordinal_nuevo; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7025 (class 0 OID 40336)
-- Dependencies: 297
-- Data for Name: prima_antiguedad; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.prima_antiguedad VALUES (0, 0.000);
INSERT INTO public.prima_antiguedad VALUES (1, 0.020);
INSERT INTO public.prima_antiguedad VALUES (2, 0.040);
INSERT INTO public.prima_antiguedad VALUES (3, 0.060);
INSERT INTO public.prima_antiguedad VALUES (4, 0.080);
INSERT INTO public.prima_antiguedad VALUES (5, 0.100);
INSERT INTO public.prima_antiguedad VALUES (6, 0.120);
INSERT INTO public.prima_antiguedad VALUES (7, 0.150);
INSERT INTO public.prima_antiguedad VALUES (8, 0.170);
INSERT INTO public.prima_antiguedad VALUES (9, 0.200);
INSERT INTO public.prima_antiguedad VALUES (10, 0.220);
INSERT INTO public.prima_antiguedad VALUES (11, 0.250);
INSERT INTO public.prima_antiguedad VALUES (12, 0.280);
INSERT INTO public.prima_antiguedad VALUES (13, 0.300);
INSERT INTO public.prima_antiguedad VALUES (14, 0.330);
INSERT INTO public.prima_antiguedad VALUES (15, 0.360);
INSERT INTO public.prima_antiguedad VALUES (16, 0.390);
INSERT INTO public.prima_antiguedad VALUES (17, 0.420);
INSERT INTO public.prima_antiguedad VALUES (18, 0.460);
INSERT INTO public.prima_antiguedad VALUES (19, 0.490);
INSERT INTO public.prima_antiguedad VALUES (20, 0.520);
INSERT INTO public.prima_antiguedad VALUES (21, 0.560);
INSERT INTO public.prima_antiguedad VALUES (22, 0.590);
INSERT INTO public.prima_antiguedad VALUES (23, 0.600);
INSERT INTO public.prima_antiguedad VALUES (24, 0.600);
INSERT INTO public.prima_antiguedad VALUES (25, 0.600);
INSERT INTO public.prima_antiguedad VALUES (25, 0.600);
INSERT INTO public.prima_antiguedad VALUES (26, 0.600);
INSERT INTO public.prima_antiguedad VALUES (27, 0.600);
INSERT INTO public.prima_antiguedad VALUES (28, 0.600);
INSERT INTO public.prima_antiguedad VALUES (29, 0.600);
INSERT INTO public.prima_antiguedad VALUES (30, 0.600);
INSERT INTO public.prima_antiguedad VALUES (31, 0.600);
INSERT INTO public.prima_antiguedad VALUES (32, 0.600);
INSERT INTO public.prima_antiguedad VALUES (33, 0.600);
INSERT INTO public.prima_antiguedad VALUES (34, 0.600);
INSERT INTO public.prima_antiguedad VALUES (35, 0.600);
INSERT INTO public.prima_antiguedad VALUES (36, 0.600);


--
-- TOC entry 7331 (class 0 OID 45302)
-- Dependencies: 603
-- Data for Name: pu_tesoreria; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7333 (class 0 OID 45312)
-- Dependencies: 605
-- Data for Name: registros_hacienda; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7328 (class 0 OID 45276)
-- Dependencies: 600
-- Data for Name: tesoreria_operacion; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7330 (class 0 OID 45287)
-- Dependencies: 602
-- Data for Name: tesoreria_pago; Type: TABLE DATA; Schema: public; Owner: programacion
--



--
-- TOC entry 7357 (class 0 OID 45674)
-- Dependencies: 636
-- Data for Name: tipo_propiedad; Type: TABLE DATA; Schema: public; Owner: programacion
--

INSERT INTO public.tipo_propiedad VALUES (1, 'COMERCIO');


--
-- TOC entry 7363 (class 0 OID 0)
-- Dependencies: 183
-- Name: ano_fiscal_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.ano_fiscal_id_seq',1, false);


--
-- TOC entry 7364 (class 0 OID 0)
-- Dependencies: 302
-- Name: aumento_rotativo_nivel_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.aumento_rotativo_nivel_id_seq',1, false);


--
-- TOC entry 7365 (class 0 OID 0)
-- Dependencies: 298
-- Name: becas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.becas_id_seq',1, false);


--
-- TOC entry 7366 (class 0 OID 0)
-- Dependencies: 566
-- Name: compra_orden_compras_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.compra_orden_compras_id_seq',1, false);


--
-- TOC entry 7367 (class 0 OID 0)
-- Dependencies: 568
-- Name: compra_orden_compras_items_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.compra_orden_compras_items_id_seq',1, false);


--
-- TOC entry 7368 (class 0 OID 0)
-- Dependencies: 570
-- Name: compra_orden_servicio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.compra_orden_servicio_id_seq',1, false);


--
-- TOC entry 7369 (class 0 OID 0)
-- Dependencies: 572
-- Name: compra_orden_servicio_items_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.compra_orden_servicio_items_id_seq',1, false);


--
-- TOC entry 7370 (class 0 OID 0)
-- Dependencies: 563
-- Name: compra_requisicion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.compra_requisicion_id_seq',1, true);


--
-- TOC entry 7371 (class 0 OID 0)
-- Dependencies: 608
-- Name: conciliacion_hacienda_c_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.conciliacion_hacienda_c_id_seq',1, false);


--
-- TOC entry 7372 (class 0 OID 0)
-- Dependencies: 610
-- Name: conciliacion_hacienda_d_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.conciliacion_hacienda_d_id_seq',1, false);


--
-- TOC entry 7373 (class 0 OID 0)
-- Dependencies: 606
-- Name: conciliacion_hacienda_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.conciliacion_hacienda_id_seq',1, false);


--
-- TOC entry 7374 (class 0 OID 0)
-- Dependencies: 576
-- Name: ejecucion_requisicion_compra_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.ejecucion_requisicion_compra_id_seq',1, false);


--
-- TOC entry 7375 (class 0 OID 0)
-- Dependencies: 574
-- Name: ejecucion_requisicion_nomina_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.ejecucion_requisicion_nomina_id_seq',1, false);


--
-- TOC entry 7376 (class 0 OID 0)
-- Dependencies: 578
-- Name: ejecucion_requisicion_servicio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.ejecucion_requisicion_servicio_id_seq',1, false);


--
-- TOC entry 7377 (class 0 OID 0)
-- Dependencies: 581
-- Name: ejecucion_requisicion_transferencia_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.ejecucion_requisicion_transferencia_id_seq',1, false);


--
-- TOC entry 7378 (class 0 OID 0)
-- Dependencies: 583
-- Name: ejecucion_transferencia_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.ejecucion_transferencia_id_seq', 1, true);


--
-- TOC entry 7379 (class 0 OID 0)
-- Dependencies: 585
-- Name: ejecucion_transferencia_items_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.ejecucion_transferencia_items_id_seq', 1, true);


--
-- TOC entry 7380 (class 0 OID 0)
-- Dependencies: 300
-- Name: ente_adscrito_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.ente_adscrito_id_seq',1, false);


--
-- TOC entry 7381 (class 0 OID 0)
-- Dependencies: 628
-- Name: log_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.log_user_id_seq', 1, true);


--
-- TOC entry 7382 (class 0 OID 0)
-- Dependencies: 185
-- Name: mes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mes_id_seq',1, false);


--
-- TOC entry 7383 (class 0 OID 0)
-- Dependencies: 191
-- Name: mp_forma2100_forma_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mp_forma2100_forma_seq',1, true);


--
-- TOC entry 7384 (class 0 OID 0)
-- Dependencies: 193
-- Name: mp_forma2101_forma_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mp_forma2101_forma_seq',1, true);


--
-- TOC entry 7385 (class 0 OID 0)
-- Dependencies: 189
-- Name: mp_seguimiento_ano_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mp_seguimiento_ano_seq',1, true);


--
-- TOC entry 7386 (class 0 OID 0)
-- Dependencies: 295
-- Name: mrrhh_aportes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_aportes_id_seq',1, false);


--
-- TOC entry 7387 (class 0 OID 0)
-- Dependencies: 291
-- Name: mrrhh_cargos_cementerio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cargos_cementerio_id_seq',1, false);


--
-- TOC entry 7388 (class 0 OID 0)
-- Dependencies: 275
-- Name: mrrhh_cargos_directivos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cargos_directivos_id_seq',1, false);


--
-- TOC entry 7389 (class 0 OID 0)
-- Dependencies: 273
-- Name: mrrhh_cargos_empleados_contratados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cargos_empleados_contratados_id_seq',1, false);


--
-- TOC entry 7390 (class 0 OID 0)
-- Dependencies: 271
-- Name: mrrhh_cargos_empleados_fijos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cargos_empleados_fijos_id_seq',1, false);


--
-- TOC entry 7391 (class 0 OID 0)
-- Dependencies: 285
-- Name: mrrhh_cargos_jubilados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cargos_jubilados_id_seq',1, false);


--
-- TOC entry 7392 (class 0 OID 0)
-- Dependencies: 279
-- Name: mrrhh_cargos_obreros_contratados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cargos_obreros_contratados_id_seq',1, false);


--
-- TOC entry 7393 (class 0 OID 0)
-- Dependencies: 277
-- Name: mrrhh_cargos_obreros_fijos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cargos_obreros_fijos_id_seq',1, false);


--
-- TOC entry 7394 (class 0 OID 0)
-- Dependencies: 283
-- Name: mrrhh_cargos_obreros_no_permanentes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cargos_obreros_no_permanentes_id_seq',1, false);


--
-- TOC entry 7395 (class 0 OID 0)
-- Dependencies: 287
-- Name: mrrhh_cargos_pensionados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cargos_pensionados_id_seq',1, false);


--
-- TOC entry 7396 (class 0 OID 0)
-- Dependencies: 281
-- Name: mrrhh_cargos_proteccion_civil_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cargos_proteccion_civil_id_seq',1, false);


--
-- TOC entry 7397 (class 0 OID 0)
-- Dependencies: 511
-- Name: mrrhh_cesta_ticket_cementerio_cedula_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cesta_ticket_cementerio_cedula_seq',1, false);


--
-- TOC entry 7398 (class 0 OID 0)
-- Dependencies: 509
-- Name: mrrhh_cesta_ticket_cementerio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cesta_ticket_cementerio_id_seq', 1, true);


--
-- TOC entry 7399 (class 0 OID 0)
-- Dependencies: 510
-- Name: mrrhh_cesta_ticket_cementerio_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cesta_ticket_cementerio_requisicion_seq',1, false);


--
-- TOC entry 7400 (class 0 OID 0)
-- Dependencies: 499
-- Name: mrrhh_cesta_ticket_empleados_cedula_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cesta_ticket_empleados_cedula_seq',1, false);


--
-- TOC entry 7401 (class 0 OID 0)
-- Dependencies: 497
-- Name: mrrhh_cesta_ticket_empleados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cesta_ticket_empleados_id_seq', 1, true);


--
-- TOC entry 7402 (class 0 OID 0)
-- Dependencies: 498
-- Name: mrrhh_cesta_ticket_empleados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cesta_ticket_empleados_requisicion_seq',1, true);


--
-- TOC entry 7403 (class 0 OID 0)
-- Dependencies: 503
-- Name: mrrhh_cesta_ticket_obreros_cedula_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cesta_ticket_obreros_cedula_seq',1, false);


--
-- TOC entry 7404 (class 0 OID 0)
-- Dependencies: 501
-- Name: mrrhh_cesta_ticket_obreros_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cesta_ticket_obreros_id_seq', 1, true);


--
-- TOC entry 7405 (class 0 OID 0)
-- Dependencies: 502
-- Name: mrrhh_cesta_ticket_obreros_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cesta_ticket_obreros_requisicion_seq',1, false);


--
-- TOC entry 7406 (class 0 OID 0)
-- Dependencies: 507
-- Name: mrrhh_cesta_ticket_proteccion_civil_cedula_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cesta_ticket_proteccion_civil_cedula_seq',1, false);


--
-- TOC entry 7407 (class 0 OID 0)
-- Dependencies: 505
-- Name: mrrhh_cesta_ticket_proteccion_civil_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cesta_ticket_proteccion_civil_id_seq', 1, true);


--
-- TOC entry 7408 (class 0 OID 0)
-- Dependencies: 506
-- Name: mrrhh_cesta_ticket_proteccion_civil_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_cesta_ticket_proteccion_civil_requisicion_seq',1, false);


--
-- TOC entry 7409 (class 0 OID 0)
-- Dependencies: 537
-- Name: mrrhh_fin_cedula_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_fin_cedula_seq',1, false);


--
-- TOC entry 7410 (class 0 OID 0)
-- Dependencies: 535
-- Name: mrrhh_fin_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_fin_id_seq',1, false);


--
-- TOC entry 7411 (class 0 OID 0)
-- Dependencies: 543
-- Name: mrrhh_fin_obreros_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_fin_obreros_id_seq',1, false);


--
-- TOC entry 7412 (class 0 OID 0)
-- Dependencies: 544
-- Name: mrrhh_fin_obreros_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_fin_obreros_requisicion_seq',1, false);


--
-- TOC entry 7413 (class 0 OID 0)
-- Dependencies: 546
-- Name: mrrhh_fin_obrerosx_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_fin_obrerosx_id_seq',1, false);


--
-- TOC entry 7414 (class 0 OID 0)
-- Dependencies: 547
-- Name: mrrhh_fin_obrerosx_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_fin_obrerosx_requisicion_seq',1, false);


--
-- TOC entry 7415 (class 0 OID 0)
-- Dependencies: 536
-- Name: mrrhh_fin_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_fin_requisicion_seq',1, false);


--
-- TOC entry 7416 (class 0 OID 0)
-- Dependencies: 541
-- Name: mrrhh_finx_cedula_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_finx_cedula_seq',1, false);


--
-- TOC entry 7417 (class 0 OID 0)
-- Dependencies: 539
-- Name: mrrhh_finx_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_finx_id_seq', 1, true);


--
-- TOC entry 7418 (class 0 OID 0)
-- Dependencies: 540
-- Name: mrrhh_finx_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_finx_requisicion_seq',1, false);


--
-- TOC entry 7419 (class 0 OID 0)
-- Dependencies: 549
-- Name: mrrhh_formulacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_formulacion_id_seq', 1, true);


--
-- TOC entry 7420 (class 0 OID 0)
-- Dependencies: 248
-- Name: mrrhh_grupos_cementerio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_grupos_cementerio_id_seq',1, false);


--
-- TOC entry 7421 (class 0 OID 0)
-- Dependencies: 238
-- Name: mrrhh_grupos_directivos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_grupos_directivos_id_seq',1, false);


--
-- TOC entry 7422 (class 0 OID 0)
-- Dependencies: 236
-- Name: mrrhh_grupos_empleados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_grupos_empleados_id_seq',1, false);


--
-- TOC entry 7423 (class 0 OID 0)
-- Dependencies: 246
-- Name: mrrhh_grupos_jubilados_empleados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_grupos_jubilados_empleados_id_seq',1, false);


--
-- TOC entry 7424 (class 0 OID 0)
-- Dependencies: 240
-- Name: mrrhh_grupos_obreros_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_grupos_obreros_id_seq',1, false);


--
-- TOC entry 7425 (class 0 OID 0)
-- Dependencies: 242
-- Name: mrrhh_grupos_obreros_no_permanentes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_grupos_obreros_no_permanentes_id_seq',1, false);


--
-- TOC entry 7426 (class 0 OID 0)
-- Dependencies: 244
-- Name: mrrhh_grupos_proteccion_civil_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_grupos_proteccion_civil_id_seq',1, false);


--
-- TOC entry 7427 (class 0 OID 0)
-- Dependencies: 476
-- Name: mrrhh_hist_am_cementerio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_cementerio_id_seq',1, false);


--
-- TOC entry 7428 (class 0 OID 0)
-- Dependencies: 477
-- Name: mrrhh_hist_am_cementerio_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_cementerio_requisicion_seq',1, false);


--
-- TOC entry 7429 (class 0 OID 0)
-- Dependencies: 479
-- Name: mrrhh_hist_am_comision_servicio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_comision_servicio_id_seq',1, false);


--
-- TOC entry 7430 (class 0 OID 0)
-- Dependencies: 480
-- Name: mrrhh_hist_am_comision_servicio_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_comision_servicio_requisicion_seq',1, false);


--
-- TOC entry 7431 (class 0 OID 0)
-- Dependencies: 440
-- Name: mrrhh_hist_am_directivos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_directivos_id_seq', 1, true);


--
-- TOC entry 7432 (class 0 OID 0)
-- Dependencies: 441
-- Name: mrrhh_hist_am_directivos_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_directivos_requisicion_seq',1, false);


--
-- TOC entry 7433 (class 0 OID 0)
-- Dependencies: 437
-- Name: mrrhh_hist_am_empleados_contratados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_empleados_contratados_id_seq', 1, true);


--
-- TOC entry 7434 (class 0 OID 0)
-- Dependencies: 438
-- Name: mrrhh_hist_am_empleados_contratados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_empleados_contratados_requisicion_seq',1, false);


--
-- TOC entry 7435 (class 0 OID 0)
-- Dependencies: 434
-- Name: mrrhh_hist_am_empleados_fijos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_empleados_fijos_id_seq', 1, true);


--
-- TOC entry 7436 (class 0 OID 0)
-- Dependencies: 435
-- Name: mrrhh_hist_am_empleados_fijos_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_empleados_fijos_requisicion_seq',1, false);


--
-- TOC entry 7437 (class 0 OID 0)
-- Dependencies: 452
-- Name: mrrhh_hist_am_empleados_jubilados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_empleados_jubilados_id_seq', 1, true);


--
-- TOC entry 7438 (class 0 OID 0)
-- Dependencies: 453
-- Name: mrrhh_hist_am_empleados_jubilados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_empleados_jubilados_requisicion_seq',1, false);


--
-- TOC entry 7439 (class 0 OID 0)
-- Dependencies: 464
-- Name: mrrhh_hist_am_empleados_pensionados_especiales_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_empleados_pensionados_especiales_id_seq', 1, true);


--
-- TOC entry 7440 (class 0 OID 0)
-- Dependencies: 465
-- Name: mrrhh_hist_am_empleados_pensionados_especiales_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_empleados_pensionados_especiales_requisicion_seq',1, false);


--
-- TOC entry 7441 (class 0 OID 0)
-- Dependencies: 458
-- Name: mrrhh_hist_am_empleados_pensionados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_empleados_pensionados_id_seq', 1, true);


--
-- TOC entry 7442 (class 0 OID 0)
-- Dependencies: 459
-- Name: mrrhh_hist_am_empleados_pensionados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_empleados_pensionados_requisicion_seq',1, false);


--
-- TOC entry 7443 (class 0 OID 0)
-- Dependencies: 462
-- Name: mrrhh_hist_am_empleados_pensionados_sobrevivien_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_empleados_pensionados_sobrevivien_requisicion_seq',1, false);


--
-- TOC entry 7444 (class 0 OID 0)
-- Dependencies: 461
-- Name: mrrhh_hist_am_empleados_pensionados_sobrevivientes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_empleados_pensionados_sobrevivientes_id_seq', 1, true);


--
-- TOC entry 7445 (class 0 OID 0)
-- Dependencies: 482
-- Name: mrrhh_hist_am_honorario_profesionales_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_honorario_profesionales_id_seq',1, false);


--
-- TOC entry 7446 (class 0 OID 0)
-- Dependencies: 483
-- Name: mrrhh_hist_am_honorario_profesionales_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_honorario_profesionales_requisicion_seq',1, false);


--
-- TOC entry 7447 (class 0 OID 0)
-- Dependencies: 446
-- Name: mrrhh_hist_am_obreros_contratados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_obreros_contratados_id_seq',1, false);


--
-- TOC entry 7448 (class 0 OID 0)
-- Dependencies: 447
-- Name: mrrhh_hist_am_obreros_contratados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_obreros_contratados_requisicion_seq',1, false);


--
-- TOC entry 7449 (class 0 OID 0)
-- Dependencies: 443
-- Name: mrrhh_hist_am_obreros_fijos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_obreros_fijos_id_seq',1, false);


--
-- TOC entry 7450 (class 0 OID 0)
-- Dependencies: 444
-- Name: mrrhh_hist_am_obreros_fijos_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_obreros_fijos_requisicion_seq',1, false);


--
-- TOC entry 7451 (class 0 OID 0)
-- Dependencies: 455
-- Name: mrrhh_hist_am_obreros_jubilados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_obreros_jubilados_id_seq', 1, true);


--
-- TOC entry 7452 (class 0 OID 0)
-- Dependencies: 456
-- Name: mrrhh_hist_am_obreros_jubilados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_obreros_jubilados_requisicion_seq',1, false);


--
-- TOC entry 7453 (class 0 OID 0)
-- Dependencies: 449
-- Name: mrrhh_hist_am_obreros_no_permanentes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_obreros_no_permanentes_id_seq',1, false);


--
-- TOC entry 7454 (class 0 OID 0)
-- Dependencies: 450
-- Name: mrrhh_hist_am_obreros_no_permanentes_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_obreros_no_permanentes_requisicion_seq',1, false);


--
-- TOC entry 7455 (class 0 OID 0)
-- Dependencies: 470
-- Name: mrrhh_hist_am_obreros_pensionados_especiales_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_obreros_pensionados_especiales_id_seq', 1, true);


--
-- TOC entry 7456 (class 0 OID 0)
-- Dependencies: 471
-- Name: mrrhh_hist_am_obreros_pensionados_especiales_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_obreros_pensionados_especiales_requisicion_seq',1, false);


--
-- TOC entry 7457 (class 0 OID 0)
-- Dependencies: 468
-- Name: mrrhh_hist_am_obreros_pensionados_sobreviviente_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_obreros_pensionados_sobreviviente_requisicion_seq',1, false);


--
-- TOC entry 7458 (class 0 OID 0)
-- Dependencies: 467
-- Name: mrrhh_hist_am_obreros_pensionados_sobrevivientes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_obreros_pensionados_sobrevivientes_id_seq',1, false);


--
-- TOC entry 7459 (class 0 OID 0)
-- Dependencies: 473
-- Name: mrrhh_hist_am_proteccion_civil_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_proteccion_civil_id_seq',1, false);


--
-- TOC entry 7460 (class 0 OID 0)
-- Dependencies: 474
-- Name: mrrhh_hist_am_proteccion_civil_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_am_proteccion_civil_requisicion_seq',1, false);


--
-- TOC entry 7461 (class 0 OID 0)
-- Dependencies: 425
-- Name: mrrhh_hist_be_cementerio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_cementerio_id_seq',1, true);


--
-- TOC entry 7462 (class 0 OID 0)
-- Dependencies: 426
-- Name: mrrhh_hist_be_cementerio_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_cementerio_requisicion_seq',1, false);


--
-- TOC entry 7463 (class 0 OID 0)
-- Dependencies: 428
-- Name: mrrhh_hist_be_comision_servicio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_comision_servicio_id_seq', 1, true);


--
-- TOC entry 7464 (class 0 OID 0)
-- Dependencies: 429
-- Name: mrrhh_hist_be_comision_servicio_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_comision_servicio_requisicion_seq',1, false);


--
-- TOC entry 7465 (class 0 OID 0)
-- Dependencies: 389
-- Name: mrrhh_hist_be_directivos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_directivos_id_seq', 1, true);


--
-- TOC entry 7466 (class 0 OID 0)
-- Dependencies: 390
-- Name: mrrhh_hist_be_directivos_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_directivos_requisicion_seq',1, false);


--
-- TOC entry 7467 (class 0 OID 0)
-- Dependencies: 386
-- Name: mrrhh_hist_be_empleados_contratados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_empleados_contratados_id_seq', 1, true);


--
-- TOC entry 7468 (class 0 OID 0)
-- Dependencies: 387
-- Name: mrrhh_hist_be_empleados_contratados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_empleados_contratados_requisicion_seq',1, false);


--
-- TOC entry 7469 (class 0 OID 0)
-- Dependencies: 383
-- Name: mrrhh_hist_be_empleados_fijos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_empleados_fijos_id_seq', 1, true);


--
-- TOC entry 7470 (class 0 OID 0)
-- Dependencies: 384
-- Name: mrrhh_hist_be_empleados_fijos_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_empleados_fijos_requisicion_seq',1, false);


--
-- TOC entry 7471 (class 0 OID 0)
-- Dependencies: 401
-- Name: mrrhh_hist_be_empleados_jubilados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_empleados_jubilados_id_seq', 1, true);


--
-- TOC entry 7472 (class 0 OID 0)
-- Dependencies: 402
-- Name: mrrhh_hist_be_empleados_jubilados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_empleados_jubilados_requisicion_seq',1, false);


--
-- TOC entry 7473 (class 0 OID 0)
-- Dependencies: 413
-- Name: mrrhh_hist_be_empleados_pensionados_especiales_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_empleados_pensionados_especiales_id_seq', 1, true);


--
-- TOC entry 7474 (class 0 OID 0)
-- Dependencies: 414
-- Name: mrrhh_hist_be_empleados_pensionados_especiales_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_empleados_pensionados_especiales_requisicion_seq',1, false);


--
-- TOC entry 7475 (class 0 OID 0)
-- Dependencies: 407
-- Name: mrrhh_hist_be_empleados_pensionados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_empleados_pensionados_id_seq', 1, true);


--
-- TOC entry 7476 (class 0 OID 0)
-- Dependencies: 408
-- Name: mrrhh_hist_be_empleados_pensionados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_empleados_pensionados_requisicion_seq',1, false);


--
-- TOC entry 7477 (class 0 OID 0)
-- Dependencies: 411
-- Name: mrrhh_hist_be_empleados_pensionados_sobrevivien_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_empleados_pensionados_sobrevivien_requisicion_seq',1, false);


--
-- TOC entry 7478 (class 0 OID 0)
-- Dependencies: 410
-- Name: mrrhh_hist_be_empleados_pensionados_sobrevivientes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_empleados_pensionados_sobrevivientes_id_seq', 1, true);


--
-- TOC entry 7479 (class 0 OID 0)
-- Dependencies: 431
-- Name: mrrhh_hist_be_honorario_profesionales_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_honorario_profesionales_id_seq',1, false);


--
-- TOC entry 7480 (class 0 OID 0)
-- Dependencies: 432
-- Name: mrrhh_hist_be_honorario_profesionales_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_honorario_profesionales_requisicion_seq',1, false);


--
-- TOC entry 7481 (class 0 OID 0)
-- Dependencies: 395
-- Name: mrrhh_hist_be_obreros_contratados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_obreros_contratados_id_seq', 1, true);


--
-- TOC entry 7482 (class 0 OID 0)
-- Dependencies: 396
-- Name: mrrhh_hist_be_obreros_contratados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_obreros_contratados_requisicion_seq',1, false);


--
-- TOC entry 7483 (class 0 OID 0)
-- Dependencies: 392
-- Name: mrrhh_hist_be_obreros_fijos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_obreros_fijos_id_seq', 1, true);


--
-- TOC entry 7484 (class 0 OID 0)
-- Dependencies: 393
-- Name: mrrhh_hist_be_obreros_fijos_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_obreros_fijos_requisicion_seq',1, false);


--
-- TOC entry 7485 (class 0 OID 0)
-- Dependencies: 404
-- Name: mrrhh_hist_be_obreros_jubilados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_obreros_jubilados_id_seq', 1, true);


--
-- TOC entry 7486 (class 0 OID 0)
-- Dependencies: 405
-- Name: mrrhh_hist_be_obreros_jubilados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_obreros_jubilados_requisicion_seq',1, false);


--
-- TOC entry 7487 (class 0 OID 0)
-- Dependencies: 398
-- Name: mrrhh_hist_be_obreros_no_permanentes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_obreros_no_permanentes_id_seq', 1, true);


--
-- TOC entry 7488 (class 0 OID 0)
-- Dependencies: 399
-- Name: mrrhh_hist_be_obreros_no_permanentes_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_obreros_no_permanentes_requisicion_seq',1, false);


--
-- TOC entry 7489 (class 0 OID 0)
-- Dependencies: 419
-- Name: mrrhh_hist_be_obreros_pensionados_especiales_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_obreros_pensionados_especiales_id_seq', 1, true);


--
-- TOC entry 7490 (class 0 OID 0)
-- Dependencies: 420
-- Name: mrrhh_hist_be_obreros_pensionados_especiales_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_obreros_pensionados_especiales_requisicion_seq',1, false);


--
-- TOC entry 7491 (class 0 OID 0)
-- Dependencies: 417
-- Name: mrrhh_hist_be_obreros_pensionados_sobreviviente_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_obreros_pensionados_sobreviviente_requisicion_seq',1, false);


--
-- TOC entry 7492 (class 0 OID 0)
-- Dependencies: 416
-- Name: mrrhh_hist_be_obreros_pensionados_sobrevivientes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_obreros_pensionados_sobrevivientes_id_seq', 1, true);


--
-- TOC entry 7493 (class 0 OID 0)
-- Dependencies: 422
-- Name: mrrhh_hist_be_proteccion_civil_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_proteccion_civil_id_seq', 1, true);


--
-- TOC entry 7494 (class 0 OID 0)
-- Dependencies: 423
-- Name: mrrhh_hist_be_proteccion_civil_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_hist_be_proteccion_civil_requisicion_seq',1, false);


--
-- TOC entry 7495 (class 0 OID 0)
-- Dependencies: 307
-- Name: mrrhh_historial_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historial_id_seq', 1, true);


--
-- TOC entry 7496 (class 0 OID 0)
-- Dependencies: 374
-- Name: mrrhh_historico_cementerio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_cementerio_id_seq',1, true);


--
-- TOC entry 7497 (class 0 OID 0)
-- Dependencies: 375
-- Name: mrrhh_historico_cementerio_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_cementerio_requisicion_seq',1, false);


--
-- TOC entry 7498 (class 0 OID 0)
-- Dependencies: 377
-- Name: mrrhh_historico_comision_servicio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_comision_servicio_id_seq', 1, true);


--
-- TOC entry 7499 (class 0 OID 0)
-- Dependencies: 378
-- Name: mrrhh_historico_comision_servicio_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_comision_servicio_requisicion_seq',1, false);


--
-- TOC entry 7500 (class 0 OID 0)
-- Dependencies: 338
-- Name: mrrhh_historico_directivos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_directivos_id_seq', 1, true);


--
-- TOC entry 7501 (class 0 OID 0)
-- Dependencies: 339
-- Name: mrrhh_historico_directivos_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_directivos_requisicion_seq',1, false);


--
-- TOC entry 7502 (class 0 OID 0)
-- Dependencies: 335
-- Name: mrrhh_historico_empleados_contratados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_empleados_contratados_id_seq', 1, true);


--
-- TOC entry 7503 (class 0 OID 0)
-- Dependencies: 336
-- Name: mrrhh_historico_empleados_contratados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_empleados_contratados_requisicion_seq',1, false);


--
-- TOC entry 7504 (class 0 OID 0)
-- Dependencies: 332
-- Name: mrrhh_historico_empleados_fijos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_empleados_fijos_id_seq', 1, true);


--
-- TOC entry 7505 (class 0 OID 0)
-- Dependencies: 333
-- Name: mrrhh_historico_empleados_fijos_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_empleados_fijos_requisicion_seq',1, false);


--
-- TOC entry 7506 (class 0 OID 0)
-- Dependencies: 350
-- Name: mrrhh_historico_empleados_jubilados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_empleados_jubilados_id_seq', 1, true);


--
-- TOC entry 7507 (class 0 OID 0)
-- Dependencies: 351
-- Name: mrrhh_historico_empleados_jubilados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_empleados_jubilados_requisicion_seq',1, false);


--
-- TOC entry 7508 (class 0 OID 0)
-- Dependencies: 363
-- Name: mrrhh_historico_empleados_pensionados_especiale_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_empleados_pensionados_especiale_requisicion_seq',1, false);


--
-- TOC entry 7509 (class 0 OID 0)
-- Dependencies: 362
-- Name: mrrhh_historico_empleados_pensionados_especiales_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_empleados_pensionados_especiales_id_seq', 1, true);


--
-- TOC entry 7510 (class 0 OID 0)
-- Dependencies: 356
-- Name: mrrhh_historico_empleados_pensionados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_empleados_pensionados_id_seq', 1, true);


--
-- TOC entry 7511 (class 0 OID 0)
-- Dependencies: 357
-- Name: mrrhh_historico_empleados_pensionados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_empleados_pensionados_requisicion_seq',1, false);


--
-- TOC entry 7512 (class 0 OID 0)
-- Dependencies: 360
-- Name: mrrhh_historico_empleados_pensionados_sobrevivi_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_empleados_pensionados_sobrevivi_requisicion_seq',1, false);


--
-- TOC entry 7513 (class 0 OID 0)
-- Dependencies: 359
-- Name: mrrhh_historico_empleados_pensionados_sobrevivientes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_empleados_pensionados_sobrevivientes_id_seq', 1, true);


--
-- TOC entry 7514 (class 0 OID 0)
-- Dependencies: 380
-- Name: mrrhh_historico_honorario_profesionales_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_honorario_profesionales_id_seq',1, false);


--
-- TOC entry 7515 (class 0 OID 0)
-- Dependencies: 381
-- Name: mrrhh_historico_honorario_profesionales_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_honorario_profesionales_requisicion_seq',1, false);


--
-- TOC entry 7516 (class 0 OID 0)
-- Dependencies: 344
-- Name: mrrhh_historico_obreros_contratados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_obreros_contratados_id_seq', 1, true);


--
-- TOC entry 7517 (class 0 OID 0)
-- Dependencies: 345
-- Name: mrrhh_historico_obreros_contratados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_obreros_contratados_requisicion_seq',1, false);


--
-- TOC entry 7518 (class 0 OID 0)
-- Dependencies: 341
-- Name: mrrhh_historico_obreros_fijos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_obreros_fijos_id_seq', 1, true);


--
-- TOC entry 7519 (class 0 OID 0)
-- Dependencies: 342
-- Name: mrrhh_historico_obreros_fijos_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_obreros_fijos_requisicion_seq',1, false);


--
-- TOC entry 7520 (class 0 OID 0)
-- Dependencies: 353
-- Name: mrrhh_historico_obreros_jubilados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_obreros_jubilados_id_seq', 1, true);


--
-- TOC entry 7521 (class 0 OID 0)
-- Dependencies: 354
-- Name: mrrhh_historico_obreros_jubilados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_obreros_jubilados_requisicion_seq',1, false);


--
-- TOC entry 7522 (class 0 OID 0)
-- Dependencies: 347
-- Name: mrrhh_historico_obreros_no_permanentes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_obreros_no_permanentes_id_seq', 1, true);


--
-- TOC entry 7523 (class 0 OID 0)
-- Dependencies: 348
-- Name: mrrhh_historico_obreros_no_permanentes_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_obreros_no_permanentes_requisicion_seq',1, false);


--
-- TOC entry 7524 (class 0 OID 0)
-- Dependencies: 368
-- Name: mrrhh_historico_obreros_pensionados_especiales_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_obreros_pensionados_especiales_id_seq', 1, true);


--
-- TOC entry 7525 (class 0 OID 0)
-- Dependencies: 369
-- Name: mrrhh_historico_obreros_pensionados_especiales_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_obreros_pensionados_especiales_requisicion_seq',1, false);


--
-- TOC entry 7526 (class 0 OID 0)
-- Dependencies: 366
-- Name: mrrhh_historico_obreros_pensionados_sobrevivien_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_obreros_pensionados_sobrevivien_requisicion_seq',1, false);


--
-- TOC entry 7527 (class 0 OID 0)
-- Dependencies: 365
-- Name: mrrhh_historico_obreros_pensionados_sobrevivientes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_obreros_pensionados_sobrevivientes_id_seq', 1, true);


--
-- TOC entry 7528 (class 0 OID 0)
-- Dependencies: 490
-- Name: mrrhh_historico_personalizada_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_personalizada_id_seq', 1, true);


--
-- TOC entry 7529 (class 0 OID 0)
-- Dependencies: 491
-- Name: mrrhh_historico_personalizada_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_personalizada_requisicion_seq',1, true);


--
-- TOC entry 7530 (class 0 OID 0)
-- Dependencies: 493
-- Name: mrrhh_historico_personalizadax_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_personalizadax_id_seq', 1, true);


--
-- TOC entry 7531 (class 0 OID 0)
-- Dependencies: 371
-- Name: mrrhh_historico_proteccion_civil_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_proteccion_civil_id_seq', 1, true);


--
-- TOC entry 7532 (class 0 OID 0)
-- Dependencies: 372
-- Name: mrrhh_historico_proteccion_civil_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_proteccion_civil_requisicion_seq',1, false);


--
-- TOC entry 7533 (class 0 OID 0)
-- Dependencies: 553
-- Name: mrrhh_historico_retroactivo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_retroactivo_id_seq',1, false);


--
-- TOC entry 7534 (class 0 OID 0)
-- Dependencies: 613
-- Name: mrrhh_historico_retroactivo_nomina_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_retroactivo_nomina_id_seq',1, false);


--
-- TOC entry 7535 (class 0 OID 0)
-- Dependencies: 614
-- Name: mrrhh_historico_retroactivo_nomina_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_retroactivo_nomina_requisicion_seq',1, false);


--
-- TOC entry 7536 (class 0 OID 0)
-- Dependencies: 623
-- Name: mrrhh_historico_retroactivo_nominaam_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_retroactivo_nominaam_id_seq',1, false);


--
-- TOC entry 7537 (class 0 OID 0)
-- Dependencies: 624
-- Name: mrrhh_historico_retroactivo_nominaam_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_retroactivo_nominaam_requisicion_seq',1, false);


--
-- TOC entry 7538 (class 0 OID 0)
-- Dependencies: 626
-- Name: mrrhh_historico_retroactivo_nominaamx_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_retroactivo_nominaamx_id_seq',1, false);


--
-- TOC entry 7539 (class 0 OID 0)
-- Dependencies: 618
-- Name: mrrhh_historico_retroactivo_nominabe_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_retroactivo_nominabe_id_seq',1, false);


--
-- TOC entry 7540 (class 0 OID 0)
-- Dependencies: 619
-- Name: mrrhh_historico_retroactivo_nominabe_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_retroactivo_nominabe_requisicion_seq',1, false);


--
-- TOC entry 7541 (class 0 OID 0)
-- Dependencies: 621
-- Name: mrrhh_historico_retroactivo_nominabex_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_retroactivo_nominabex_id_seq',1, false);


--
-- TOC entry 7542 (class 0 OID 0)
-- Dependencies: 616
-- Name: mrrhh_historico_retroactivo_nominax_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_retroactivo_nominax_id_seq',1, false);


--
-- TOC entry 7543 (class 0 OID 0)
-- Dependencies: 557
-- Name: mrrhh_historico_retroactivo_v_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_retroactivo_v_id_seq',1, false);


--
-- TOC entry 7544 (class 0 OID 0)
-- Dependencies: 558
-- Name: mrrhh_historico_retroactivo_v_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_retroactivo_v_requisicion_seq',1, false);


--
-- TOC entry 7545 (class 0 OID 0)
-- Dependencies: 560
-- Name: mrrhh_historico_retroactivo_vx_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_retroactivo_vx_id_seq', 1, true);


--
-- TOC entry 7546 (class 0 OID 0)
-- Dependencies: 561
-- Name: mrrhh_historico_retroactivo_vx_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_retroactivo_vx_requisicion_seq',1, false);


--
-- TOC entry 7547 (class 0 OID 0)
-- Dependencies: 555
-- Name: mrrhh_historico_retroactivox_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_historico_retroactivox_id_seq', 1, true);


--
-- TOC entry 7548 (class 0 OID 0)
-- Dependencies: 515
-- Name: mrrhh_horas_extras_empleados_cedula_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_horas_extras_empleados_cedula_seq',1, false);


--
-- TOC entry 7549 (class 0 OID 0)
-- Dependencies: 513
-- Name: mrrhh_horas_extras_empleados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_horas_extras_empleados_id_seq', 1, true);


--
-- TOC entry 7550 (class 0 OID 0)
-- Dependencies: 514
-- Name: mrrhh_horas_extras_empleados_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_horas_extras_empleados_requisicion_seq',1, false);


--
-- TOC entry 7551 (class 0 OID 0)
-- Dependencies: 519
-- Name: mrrhh_horas_extras_obreros_cedula_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_horas_extras_obreros_cedula_seq',1, false);


--
-- TOC entry 7552 (class 0 OID 0)
-- Dependencies: 517
-- Name: mrrhh_horas_extras_obreros_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_horas_extras_obreros_id_seq', 1, true);


--
-- TOC entry 7553 (class 0 OID 0)
-- Dependencies: 518
-- Name: mrrhh_horas_extras_obreros_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_horas_extras_obreros_requisicion_seq',1, false);


--
-- TOC entry 7554 (class 0 OID 0)
-- Dependencies: 289
-- Name: mrrhh_jubilados_empleados_cargo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_jubilados_empleados_cargo_id_seq',1, false);


--
-- TOC entry 7555 (class 0 OID 0)
-- Dependencies: 264
-- Name: mrrhh_niveles_cementerio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_niveles_cementerio_id_seq',1, false);


--
-- TOC entry 7556 (class 0 OID 0)
-- Dependencies: 254
-- Name: mrrhh_niveles_directivos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_niveles_directivos_id_seq',1, false);


--
-- TOC entry 7557 (class 0 OID 0)
-- Dependencies: 252
-- Name: mrrhh_niveles_empleados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_niveles_empleados_id_seq',1, false);


--
-- TOC entry 7558 (class 0 OID 0)
-- Dependencies: 262
-- Name: mrrhh_niveles_empleados_jubilados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_niveles_empleados_jubilados_id_seq',1, false);


--
-- TOC entry 7559 (class 0 OID 0)
-- Dependencies: 256
-- Name: mrrhh_niveles_obreros_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_niveles_obreros_id_seq',1, false);


--
-- TOC entry 7560 (class 0 OID 0)
-- Dependencies: 258
-- Name: mrrhh_niveles_obreros_no_permanentes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_niveles_obreros_no_permanentes_id_seq',1, false);


--
-- TOC entry 7561 (class 0 OID 0)
-- Dependencies: 260
-- Name: mrrhh_niveles_proteccion_civil_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_niveles_proteccion_civil_id_seq',1, false);


--
-- TOC entry 7562 (class 0 OID 0)
-- Dependencies: 495
-- Name: mrrhh_personalizada_partidas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_personalizada_partidas_id_seq',1, true);


--
-- TOC entry 7563 (class 0 OID 0)
-- Dependencies: 485
-- Name: mrrhh_prestaciones_sociales_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_prestaciones_sociales_id_seq', 1, true);


--
-- TOC entry 7564 (class 0 OID 0)
-- Dependencies: 486
-- Name: mrrhh_prestaciones_sociales_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_prestaciones_sociales_requisicion_seq',1, false);


--
-- TOC entry 7565 (class 0 OID 0)
-- Dependencies: 488
-- Name: mrrhh_prestaciones_socialesx_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_prestaciones_socialesx_id_seq', 1, true);


--
-- TOC entry 7566 (class 0 OID 0)
-- Dependencies: 293
-- Name: mrrhh_primas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_primas_id_seq',1, false);


--
-- TOC entry 7567 (class 0 OID 0)
-- Dependencies: 326
-- Name: mrrhh_requisicion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_requisicion_id_seq', 1, true);


--
-- TOC entry 7568 (class 0 OID 0)
-- Dependencies: 328
-- Name: mrrhh_requisicion_servicios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_requisicion_servicios_id_seq',1, false);


--
-- TOC entry 7569 (class 0 OID 0)
-- Dependencies: 330
-- Name: mrrhh_requisicion_servicios_partidas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_requisicion_servicios_partidas_id_seq', 1, true);


--
-- TOC entry 7570 (class 0 OID 0)
-- Dependencies: 250
-- Name: mrrhh_sueldo_base_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_sueldo_base_id_seq',1, false);


--
-- TOC entry 7571 (class 0 OID 0)
-- Dependencies: 231
-- Name: mrrhh_tipo_nomina_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_tipo_nomina_id_seq',1, false);


--
-- TOC entry 7572 (class 0 OID 0)
-- Dependencies: 551
-- Name: mrrhh_ultimo_sueldo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_ultimo_sueldo_id_seq', 1, true);


--
-- TOC entry 7573 (class 0 OID 0)
-- Dependencies: 523
-- Name: mrrhh_vacaciones_cedula_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_vacaciones_cedula_seq',1, false);


--
-- TOC entry 7574 (class 0 OID 0)
-- Dependencies: 521
-- Name: mrrhh_vacaciones_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_vacaciones_id_seq', 1, true);


--
-- TOC entry 7575 (class 0 OID 0)
-- Dependencies: 525
-- Name: mrrhh_vacaciones_obreros_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_vacaciones_obreros_id_seq', 1, true);


--
-- TOC entry 7576 (class 0 OID 0)
-- Dependencies: 526
-- Name: mrrhh_vacaciones_obreros_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_vacaciones_obreros_requisicion_seq',1, false);


--
-- TOC entry 7577 (class 0 OID 0)
-- Dependencies: 528
-- Name: mrrhh_vacaciones_obrerosx_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_vacaciones_obrerosx_id_seq',1, false);


--
-- TOC entry 7578 (class 0 OID 0)
-- Dependencies: 529
-- Name: mrrhh_vacaciones_obrerosx_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_vacaciones_obrerosx_requisicion_seq',1, false);


--
-- TOC entry 7579 (class 0 OID 0)
-- Dependencies: 522
-- Name: mrrhh_vacaciones_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_vacaciones_requisicion_seq',1, false);


--
-- TOC entry 7580 (class 0 OID 0)
-- Dependencies: 533
-- Name: mrrhh_vacacionesx_cedula_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_vacacionesx_cedula_seq',1, false);


--
-- TOC entry 7581 (class 0 OID 0)
-- Dependencies: 531
-- Name: mrrhh_vacacionesx_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_vacacionesx_id_seq',1, false);


--
-- TOC entry 7582 (class 0 OID 0)
-- Dependencies: 532
-- Name: mrrhh_vacacionesx_requisicion_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.mrrhh_vacacionesx_requisicion_seq',1, false);


--
-- TOC entry 7583 (class 0 OID 0)
-- Dependencies: 591
-- Name: ordenamiento_compra_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.ordenamiento_compra_id_seq',1, false);


--
-- TOC entry 7584 (class 0 OID 0)
-- Dependencies: 589
-- Name: ordenamiento_nomina_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.ordenamiento_nomina_id_seq',1, false);


--
-- TOC entry 7585 (class 0 OID 0)
-- Dependencies: 595
-- Name: ordenamiento_servicio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.ordenamiento_servicio_id_seq',1, false);


--
-- TOC entry 7586 (class 0 OID 0)
-- Dependencies: 587
-- Name: ordenamiento_tipo_calculo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.ordenamiento_tipo_calculo_id_seq',1, false);


--
-- TOC entry 7587 (class 0 OID 0)
-- Dependencies: 593
-- Name: ordenamiento_transferencia_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.ordenamiento_transferencia_id_seq',1, false);


--
-- TOC entry 7588 (class 0 OID 0)
-- Dependencies: 304
-- Name: parametros_fijos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.parametros_fijos_id_seq',1, false);


--
-- TOC entry 7589 (class 0 OID 0)
-- Dependencies: 234
-- Name: porcentaje_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.porcentaje_id_seq',1, false);


--
-- TOC entry 7590 (class 0 OID 0)
-- Dependencies: 204
-- Name: presupuesto_actividad_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_actividad_id_seq',1, false);


--
-- TOC entry 7591 (class 0 OID 0)
-- Dependencies: 212
-- Name: presupuesto_especifico_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_especifico_id_seq',1, false);


--
-- TOC entry 7592 (class 0 OID 0)
-- Dependencies: 220
-- Name: presupuesto_forma2102_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_forma2102_id_seq', 1, true);


--
-- TOC entry 7593 (class 0 OID 0)
-- Dependencies: 206
-- Name: presupuesto_forma2103_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_forma2103_id_seq',1, false);


--
-- TOC entry 7594 (class 0 OID 0)
-- Dependencies: 227
-- Name: presupuesto_forma2121_ajuste_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_forma2121_ajuste_id_seq',1, false);


--
-- TOC entry 7595 (class 0 OID 0)
-- Dependencies: 222
-- Name: presupuesto_forma2121_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_forma2121_id_seq',1, false);


--
-- TOC entry 7596 (class 0 OID 0)
-- Dependencies: 225
-- Name: presupuesto_forma2121_partidas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_forma2121_partidas_id_seq',1, false);


--
-- TOC entry 7597 (class 0 OID 0)
-- Dependencies: 229
-- Name: presupuesto_nuevo_ordinal_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_nuevo_ordinal_id_seq',1, false);


--
-- TOC entry 7598 (class 0 OID 0)
-- Dependencies: 216
-- Name: presupuesto_ordinal_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_ordinal_id_seq',1, false);


--
-- TOC entry 7599 (class 0 OID 0)
-- Dependencies: 218
-- Name: presupuesto_ordinal_nuevo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_ordinal_nuevo_id_seq',1, false);


--
-- TOC entry 7600 (class 0 OID 0)
-- Dependencies: 198
-- Name: presupuesto_programa_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_programa_id_seq',1, false);


--
-- TOC entry 7601 (class 0 OID 0)
-- Dependencies: 202
-- Name: presupuesto_proyecto_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_proyecto_id_seq',1, false);


--
-- TOC entry 7602 (class 0 OID 0)
-- Dependencies: 208
-- Name: presupuesto_ramo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_ramo_id_seq',1, false);


--
-- TOC entry 7603 (class 0 OID 0)
-- Dependencies: 196
-- Name: presupuesto_sector_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_sector_id_seq',1, false);


--
-- TOC entry 7604 (class 0 OID 0)
-- Dependencies: 214
-- Name: presupuesto_sub_especifico_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_sub_especifico_id_seq',1, false);


--
-- TOC entry 7605 (class 0 OID 0)
-- Dependencies: 200
-- Name: presupuesto_sub_programa_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_sub_programa_id_seq',1, false);


--
-- TOC entry 7606 (class 0 OID 0)
-- Dependencies: 210
-- Name: presupuesto_sub_ramo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.presupuesto_sub_ramo_id_seq',1, false);


--
-- TOC entry 7607 (class 0 OID 0)
-- Dependencies: 187
-- Name: quincena_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.quincena_id_seq',1, false);


--
-- TOC entry 7608 (class 0 OID 0)
-- Dependencies: 604
-- Name: registros_hacienda_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.registros_hacienda_id_seq',1, false);


--
-- TOC entry 7609 (class 0 OID 0)
-- Dependencies: 597
-- Name: tesoreria_cuentas_id_banco_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.tesoreria_cuentas_id_banco_seq',1, false);


--
-- TOC entry 7610 (class 0 OID 0)
-- Dependencies: 599
-- Name: tesoreria_operacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.tesoreria_operacion_id_seq',1, false);


--
-- TOC entry 7611 (class 0 OID 0)
-- Dependencies: 601
-- Name: tesoreria_pago_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.tesoreria_pago_id_seq',1, false);


--
-- TOC entry 7612 (class 0 OID 0)
-- Dependencies: 181
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: programacion
--

SELECT pg_catalog.setval('public.usuarios_id_seq',1, false);


-- Completed on 2020-12-01 12:16:32 -04

--
-- PostgreSQL database dump complete
--

